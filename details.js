
const popupLink = document.getElementById('popupLink');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');
const overlay = document.getElementById('overlay');

popupLink.addEventListener('click', function(event) {
  event.preventDefault();
  popup.style.display = 'block';
  overlay.style.display = 'block';
});

closePopup.addEventListener('click', function() {
  popup.style.display = 'none';
  overlay.style.display = 'none';
});

overlay.addEventListener('click', function() {
  popup.style.display = 'none';
  overlay.style.display = 'none';
});