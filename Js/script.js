let audioCtx;
let compoundVActive = false;
let isLaserPressing = false;
let laserInterval;
let ammo = 8;
let kills = 0;
let threat = 0;
let currentMouseX = 0;
let currentMouseY = 0;
let cutsceneTriggered = false;

let laserOsc, laserOsc2, laserGain;

const quotes = [
    "Deus não desceu lá do céu para consertar as coisas, então eu vou.",
    "Nós temos um trabalho a fazer. Caçar essas aberrações da Vought.",
    "Todos eles vão pagar. Cada um dos malditos heróis de capa.",
    "Isso foi absolutamente... DIABÓLICO."
];

document.getElementById('frase').innerText = quotes;

function initAudio() {
    if (!audioCtx) {
        audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    }
}

function playShotSound() {
    initAudio();
    const bufferSize = audioCtx.sampleRate * 0.4;
    const buffer = audioCtx.createBuffer(1, bufferSize, audioCtx.sampleRate);
    const data = buffer.getChannelData(0);
    for (let i = 0; i < bufferSize; i++) {
        data[i] = (Math.random() * 2 - 1) * Math.exp(-9 * i / bufferSize);
    }
    const source = audioCtx.createBufferSource();
    source.buffer = buffer;
    
    const filter = audioCtx.createBiquadFilter();
    filter.type = 'lowpass';
    filter.frequency.setValueAtTime(1000, audioCtx.currentTime);

    source.connect(filter);
    filter.connect(audioCtx.destination);
    source.start();
}

function startLaserSound() {
    initAudio();
    laserOsc = audioCtx.createOscillator();
    laserOsc.type = 'sawtooth';
    laserOsc.frequency.setValueAtTime(115, audioCtx.currentTime); 
    
    laserOsc2 = audioCtx.createOscillator();
    laserOsc2.type = 'sawtooth';
    laserOsc2.frequency.setValueAtTime(120, audioCtx.currentTime);

    const filter = audioCtx.createBiquadFilter();
    filter.type = 'peaking';
    filter.frequency.setValueAtTime(320, audioCtx.currentTime);
    filter.Q.setValueAtTime(12, audioCtx.currentTime);
    filter.gain.setValueAtTime(14, audioCtx.currentTime);

    laserGain = audioCtx.createGain();
    laserGain.gain.setValueAtTime(0.28, audioCtx.currentTime);

    laserOsc.connect(filter);
    laserOsc2.connect(filter);
    filter.connect(laserGain);
    laserGain.connect(audioCtx.destination);

    laserOsc.start();
    laserOsc2.start();

    function modulate() {
        if (!isLaserPressing) return;
        const now = audioCtx.currentTime;
        laserOsc.frequency.setValueAtTime(95 + Math.random() * 45, now);
        laserOsc2.frequency.setValueAtTime(190 + Math.random() * 160, now);
        requestAnimationFrame(modulate);
    }
    requestAnimationFrame(modulate);
}

function stopLaserSound() {
    if (laserGain) {
        try {
            laserGain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.05);
            setTimeout(() => {
                if(laserOsc) laserOsc.stop();
                if(laserOsc2) laserOsc2.stop();
            }, 50);
        } catch(e) {}
    }
}

const weaponContainer = document.getElementById('cursorWeaponContainer');
const laserLineLeft = document.getElementById('laserLineLeft');
const laserLineRight = document.getElementById('laserLineRight');
const butcherBox = document.getElementById('butcherBox');
const viewport = document.getElementById('gameViewport');

window.addEventListener('mousemove', (e) => {
    currentMouseX = e.clientX;
    currentMouseY = e.clientY;
    
    weaponContainer.style.left = currentMouseX + 'px';
    weaponContainer.style.top = currentMouseY + 'px';
    
    if (compoundVActive && isLaserPressing && !cutsceneTriggered) {
        updateLaserPositions();
    }
});

function updateLaserPositions() {
    const rect = butcherBox.getBoundingClientRect();
    const faceCenterX = rect.left + (rect.width * 0.515);
    const eyesY = rect.top + (rect.height * 0.35); 

    laserLineLeft.setAttribute('x1', faceCenterX - 18);
    laserLineLeft.setAttribute('y1', eyesY);
    laserLineLeft.setAttribute('x2', currentMouseX);
    laserLineLeft.setAttribute('y2', currentMouseY);

    laserLineRight.setAttribute('x1', faceCenterX + 22);
    laserLineRight.setAttribute('y1', eyesY);
    laserLineRight.setAttribute('x2', currentMouseX);
    laserLineRight.setAttribute('y2', currentMouseY);
}

window.addEventListener('mousedown', (e) => {
    if (cutsceneTriggered || e.target.id === 'v-button') return;
    initAudio();

    if (compoundVActive) {
        if (isLaserPressing) return;
        isLaserPressing = true;
        viewport.classList.add('laser-firing');
        
        updateLaserPositions();
        startLaserSound();

        laserInterval = setInterval(() => {
            createDecal(currentMouseX, currentMouseY, 'laser-burn');
            triggerFlash('flash-laser');
            
            const elementAtMouse = document.elementFromPoint(currentMouseX, currentMouseY);
            if (elementAtMouse && elementAtMouse.classList.contains('supe-enemy')) {
                processHit(elementAtMouse);
            }
        }, 70);

    } else {
        if (ammo > 0) {
            ammo--;
            document.getElementById('ammoScore').innerText = ammo;
            playShotSound();
            triggerFlash('flash-shot');
            createDecal(e.clientX, e.clientY, 'bullet-hole');
            
            if (e.target.classList.contains('supe-enemy')) {
                processHit(e.target);
            }

            if (ammo === 0) {
                setTimeout(() => { 
                    if(!cutsceneTriggered) { ammo = 8; document.getElementById('ammoScore').innerText = ammo; }
                }, 1500);
            }
        }
    }
});

window.addEventListener('mouseup', () => { stopLaser(); });
window.addEventListener('mouseleave', () => { stopLaser(); });

function stopLaser() {
    if (isLaserPressing) {
        isLaserPressing = false;
        viewport.classList.remove('laser-firing');
        clearInterval(laserInterval);
        stopLaserSound();
    }
}

function processHit(element) {
    if (cutsceneTriggered) return;
    
    kills++;
    document.getElementById('killsScore').innerText = kills;
    threat = Math.min(threat + 15, 100);
    document.getElementById('damageScore').innerText = threat;
    
    if (kills >= 10) {
        startSadCutscene();
        return;
    }
    
    document.getElementById('frase').innerText = quotes[Math.floor(Math.random() * quotes.length)];
    
    const alertText = document.getElementById('vought-alert');
    alertText.style.display = 'block';
    setTimeout(() => alertText.style.display = 'none', 800);

    moveSupe(element);
    
    if (isLaserPressing) {
        updateLaserPositions();
    }
}

function startSadCutscene() {
    cutsceneTriggered = true;
    stopLaser();
    
    document.body.classList.add('cutscene-active');
    document.body.classList.remove('compound-v-active');
    
    document.getElementById('frase').innerText = "O trabalho está feito... mas a que custo?";
    
    const sadNotes = [220, 207.65, 196, 174.61]; 
    let noteIndex = 0;

    function playSadMelody() {
        if (!cutsceneTriggered) return;
        
        const osc = audioCtx.createOscillator();
        const gain = audioCtx.createGain();
        
        osc.type = 'triangle'; 
        osc.frequency.setValueAtTime(sadNotes[noteIndex], audioCtx.currentTime);
        
        gain.gain.setValueAtTime(0.12, audioCtx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 1.9);
        
        osc.connect(gain);
        gain.connect(audioCtx.destination);
        
        osc.start();
        osc.stop(audioCtx.currentTime + 1.9);
        
        noteIndex = (noteIndex + 1) % sadNotes.length;
        setTimeout(playSadMelody, 2000); 
    }
    
    playSadMelody();
}

function createDecal(x, y, className) {
    if (cutsceneTriggered) return;
    const decal = document.createElement('div');
    decal.className = className;
    decal.style.left = x + 'px';
    decal.style.top = y + 'px';
    document.body.appendChild(decal);
    setTimeout(() => decal.remove(), 4000);
}

function triggerFlash(className) {
    if (cutsceneTriggered) return;
    viewport.classList.add(className, 'heavy-shake');
    setTimeout(() => { viewport.classList.remove(className, 'heavy-shake'); }, 100);
}

const vButton = document.getElementById('v-button');
vButton.addEventListener('click', () => {
    if (cutsceneTriggered) return;
    stopLaser();
    compoundVActive = !compoundVActive;
    if (compoundVActive) {
        viewport.classList.add('compound-v-active');
        vButton.classList.add('active');
        vButton.innerText = "COMPOSTO V ATIVO";
    } else {
        viewport.classList.remove('compound-v-active');
        vButton.classList.remove('active');
        vButton.innerText = "INJETAR COMPOSTO V";
    }
});

function createATrainTrail(left, top) {
    if (cutsceneTriggered) return;
    const trail = document.createElement('div');
    trail.className = 'atrain-shadow';
    trail.style.left = left;
    trail.style.top = top;
    document.body.appendChild(trail);
    setTimeout(() => trail.remove(), 400);
}

function moveSupe(element) {
    const maxX = window.innerWidth - 100;
    const maxY = window.innerHeight - 100;
    const randomX = Math.max(50, Math.floor(Math.random() * maxX));
    const randomY = Math.max(50, Math.floor(Math.random() * maxY));
    
    if (element.id === 'atrain') {
        createATrainTrail(element.style.left, element.style.top);
    }
    
    element.style.left = randomX + 'px';
    element.style.top = randomY + 'px';
}

const homelander = document.getElementById('homelander');
const atrain = document.getElementById('atrain');

setInterval(() => { if(!isLaserPressing && !cutsceneTriggered) moveSupe(homelander); }, 2000);
setInterval(() => { if(!isLaserPressing && !cutsceneTriggered) moveSupe(atrain); }, 1000);

moveSupe(homelander);
moveSupe(atrain);
