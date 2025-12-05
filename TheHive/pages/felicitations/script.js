document.addEventListener('DOMContentLoaded', () => {
    const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const toucheElements = document.querySelectorAll('.touche p'); 
    const toucheDivs = document.querySelectorAll('.touche'); 
    const activeKeys = new Set();
    let targetKeys = [];

    function getRandomLetter() {
        return alphabet[Math.floor(Math.random() * alphabet.length)];
    }

    function initGame() {
        toucheDivs.forEach(div => div.classList.remove('active'));

        let key1 = getRandomLetter();
        let key2 = getRandomLetter();

        while (key1 === key2) {
            key2 = getRandomLetter();
        }

        targetKeys = [key1, key2];

        toucheElements[0].innerText = key1;
        toucheElements[1].innerText = key2;
    }

    document.addEventListener('keydown', (e) => {
        const pressedKey = e.key.toUpperCase();
        
        if (!activeKeys.has(pressedKey)) {
            activeKeys.add(pressedKey);

            targetKeys.forEach((key, index) => {
                if (key === pressedKey) {
                    toucheDivs[index].classList.add('active');
                }
            });

            checkVictory();
        }
    });

    document.addEventListener('keyup', (e) => {
        const releasedKey = e.key.toUpperCase();
        activeKeys.delete(releasedKey);

        targetKeys.forEach((key, index) => {
            if (key === releasedKey) {
                toucheDivs[index].classList.remove('active');
            }
        });
    });

    function checkVictory() {
        if (activeKeys.has(targetKeys[0]) && activeKeys.has(targetKeys[1])) {
            victoryAction();
        }
    }

    function victoryAction() {
        const h3 = document.querySelector('h3');
        h3.innerText = "BRAVO ! Redirection...";
        h3.style.color = "#00FF00";
        h3.style.opacity = "1";

        sessionStorage.setItem('touchesGagnantes', JSON.stringify(targetKeys));

        setTimeout(() => {
            window.location.href = '../formulaire/formulaire.html'; 
        }, 1500);
    }

    initGame();
});