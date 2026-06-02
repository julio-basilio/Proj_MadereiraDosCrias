<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOUGHT DATABASE - BILLY BUTCHER</title>
    <!-- Conexão estrita com a pasta Css -->
    <link rel="stylesheet" href="Css/style.css">
</head>
<body id="gameViewport">

    <!-- Filtros de Tela CRT (The Boys Style) -->
    <div class="crt-overlay"></div>
    <div class="glitch-scanner"></div>

    <!-- HUD Monitor da Vought -->
    <div id="vought-hud">
        <div class="hud-header">
            <span class="hud-blink-dot"></span>
            <h3>VOUGHT SYSTEM MONITOR // SECURE_LINE_88</h3>
        </div>
        <div class="hud-grid-body">
            <div class="hud-line">SYSTEM_THREAT: <span class="hud-stat" id="damageScore">0</span>%</div>
            <div class="hud-line">SHELL_COUNT: <span class="hud-stat" id="ammoScore">8</span>/8</div>
            <div class="hud-line">SUPES_TERMINATED: <span class="hud-stat" id="killsScore" style="color:#00a2ff;">0</span></div>
        </div>
        <button id="v-button">INJETAR COMPOSTO V</button>
    </div>

    <!-- Alvos Móveis -->
    <div id="homelander" class="supe-enemy"><div class="target-bracket"></div></div>
    <div id="atrain" class="supe-enemy"><div class="target-bracket"></div></div>

    <div id="vought-alert">DIABOLICAL!</div>
    
    <!-- SVG dos Lasers Gêmeos -->
    <svg id="laserSvg">
        <line id="laserLineLeft" x1="0" y1="0" x2="0" y2="0" />
        <line id="laserLineRight" x1="0" y1="0" x2="0" y2="0" />
    </svg>

    <!-- Cursor Personalizado (Mira Militar Única) -->
    <div id="cursorWeaponContainer">
        <div id="sniperScope"></div>
    </div>
    
    <canvas id="fxCanvas"></canvas>

    <!-- Foto Central do Billy Bruto -->
    <div class="target-box" id="butcherBox">
        <div class="frame-corner top-left"></div>
        <div class="frame-corner top-right"></div>
        <div class="frame-corner bottom-left"></div>
        <div class="frame-corner bottom-right"></div>
        <img id="targetImg" src="Img/images.jpeg" alt="Billy Bruto">
    </div>
    
    <div id="infoButcher">
        <p id="paragrafo">Billy Bruto</p>
        <p id="memoria">★ 07/06/1972 - ✟ 20/05/2026</p>
    </div>
    
    <!-- Caixa de Frases Estilizada -->
    <div class="quote-container">
        <p id="frase"></p>
    </div>

    <!-- Conexão estrita com a pasta Js -->
    <script src="Js/script.js"></script>
</body>
</html>
