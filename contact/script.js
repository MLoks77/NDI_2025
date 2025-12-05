document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('gloryForm');
    const popup = document.getElementById('gloryPopup');
    const closePopupBtn = document.getElementById('closePopup');
    const beeCursor = document.getElementById('beeCursor');
    const logo = document.querySelector('.hive-logo');

    document.addEventListener('mousemove', (e) => {
        beeCursor.style.left = e.clientX + 'px';
        beeCursor.style.top = e.clientY + 'px';
        
        const rot = Math.random() * 20 - 10;
        beeCursor.style.transform = `rotate(${rot}deg)`;
    });

    document.addEventListener('mousedown', () => {
        beeCursor.style.transform = 'scale(0.8)';
    });
    document.addEventListener('mouseup', () => {
        beeCursor.style.transform = 'scale(1) rotate(0deg)';
    });


    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const btn = form.querySelector('.queen-button');
        const btnTxt = btn.querySelector('.btn-txt');
        const originalTxt = btnTxt.textContent;

        btnTxt.textContent = "OLALA ÇA PARTEEE ! 🍯";
        btn.disabled = true;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                form.reset();
                showGloryPopup();
            } else {
                handleErrors(result.errors);
                btnTxt.textContent = "AÏE ! Y'A UN HIC ! 🐝";
                setTimeout(() => { btnTxt.textContent = originalTxt; }, 2000);
            }
        } catch (error) {
            console.error('Erreur:', error);
            alert("La ruche est en panne. Réessaie plus tard !");
        } finally {
            btn.disabled = false;
            if(btnTxt.textContent !== "AÏE ! Y'A UN HIC ! 🐝") {
                 btnTxt.textContent = originalTxt;
            }
        }
    });


    function showGloryPopup() {
        popup.classList.remove('hidden');
        popup.classList.add('show');
        launchConfetti();
        let audio = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-winning-chimes-2015.mp3');
        audio.play();
    }

    closePopupBtn.addEventListener('click', () => {
        popup.classList.remove('show');
        setTimeout(() => { popup.classList.add('hidden'); }, 500);
        stopConfetti();
    });

    function handleErrors(errors) {
        errors.forEach(field => {
            const input = document.getElementById(field);
            const wrapper = input.closest('.hex-field-wrapper');
            wrapper.classList.add('shake-error');
            setTimeout(() => wrapper.classList.remove('shake-error'), 500);
        });
    }

    logo.addEventListener('click', () => {
        logo.classList.add('type-hive-vibration');
        setTimeout(() => { logo.classList.remove('type-hive-vibration'); }, 1000);
    });

    let konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
    let konamiPosition = 0;

    document.addEventListener('keydown', function(e) {
        if (e.key === konamiCode[konamiPosition]) {
            konamiPosition++;
            if (konamiPosition === konamiCode.length) {
                activateGodMode();
                konamiPosition = 0;
            }
        } else {
            konamiPosition = 0;
        }
    });

    function activateGodMode() {
        alert("MODE REINE DES ABEILLES ACTIVÉ ! TOUT DEVIENT DORÉ !");
        document.documentElement.style.setProperty('--marron-fonce', '#F5C857');
        document.body.style.backgroundColor = '#FFEE91';
    }

    let confettiInterval;
    function launchConfetti() {
        const container = document.getElementById('confetti');
        confettiInterval = setInterval(() => {
            const el = document.createElement('div');
            el.classList.add('confetti');
            el.style.left = Math.random() * 100 + '%';
            el.style.backgroundColor = Math.random() > 0.5 ? '#F5C857' : '#E2852E';
            el.style.animationDuration = (Math.random() * 2 + 1) + 's';
            container.appendChild(el);
            setTimeout(() => el.remove(), 3000);
        }, 100);
    }

    function stopConfetti() {
        clearInterval(confettiInterval);
        document.getElementById('confetti').innerHTML = '';
    }
});