 const popupTriggers = document.querySelectorAll('.popup-trigger');

        popupTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const popupId = trigger.getAttribute('data-popup-id');
                const popup = document.getElementById(popupId);
                if (popup) {
                    popup.style.display = 'block';
                }
            });
        });

        const popupCloses = document.querySelectorAll('.popup-close');

        popupCloses.forEach(close => {
            close.addEventListener('click', (e) => {
                e.preventDefault();
                const popup = close.parentElement;
                if (popup) {
                    popup.style.display = 'none';
                }
            });
        });