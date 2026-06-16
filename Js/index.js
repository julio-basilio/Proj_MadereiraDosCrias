

const popup = document.getElementById('meuPopup');
const fecharPopup = document.getElementById('fecharPopup');

document.addEventListener('click', function() {
  popup.showModal();
}, { once: true });


fecharPopup.addEventListener('click', function() {
  popup.close();
});