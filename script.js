const popupTriggers = document.querySelectorAll('.popup-trigger');
const popups = document.querySelectorAll('.popup');

popupTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
        const popupId = trigger.getAttribute('href').substring(1);
        const popup = document.getElementById(popupId);
        popup.style.display = 'block';
    });
});

popups.forEach(popup => {
    const closeBtn = popup.querySelector('.popup-close');
    closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    popup.addEventListener('click', (event) => {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});
