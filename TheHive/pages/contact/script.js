document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('gloryForm');
    const modal = document.getElementById('gloryModal');
    
    const title = document.getElementById('queen-title');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const btn = document.getElementById('submitBtn');
        const originalText = btn.innerHTML;
        
        btn.innerHTML = "🐝 Bizzz Bizzz...";
        
        const formData = new FormData(form);
        
        fetch('process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                setTimeout(() => {
                    openModal();
                    btn.innerHTML = originalText;
                    form.reset();
                }, 1000);
            } else {
                alert("Une guêpe a bloqué le message ! " + data.message);
                btn.innerHTML = originalText;
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            openModal(); 
            btn.innerHTML = originalText;
        });
    });
});

function openModal() {
    const modal = document.getElementById('gloryModal');
    modal.classList.remove('hidden');
    createBeeConfetti();
}

function closeModal() {
    const modal = document.getElementById('gloryModal');
    modal.classList.add('hidden');
    const container = document.getElementById('bees-container');
    container.innerHTML = '';
}

function releaseTheSwarm() {
    const body = document.body;
    for(let i=0; i<50; i++) {
        const bee = document.createElement('div');
        bee.innerText = '🐝';
        bee.style.position = 'fixed';
        bee.style.left = '-50px';
        bee.style.top = Math.random() * window.innerHeight + 'px';
        bee.style.fontSize = (Math.random() * 30 + 10) + 'px';
        bee.style.transition = `transform ${Math.random() * 2 + 2}s linear, left ${Math.random() * 2 + 2}s linear`;
        bee.style.zIndex = '9999';
        
        document.body.appendChild(bee);
        
        setTimeout(() => {
            bee.style.left = (window.innerWidth + 50) + 'px';
            bee.style.transform = `translateY(${Math.random() * 200 - 100}px) rotate(90deg)`;
        }, 100);

        setTimeout(() => {
            bee.remove();
        }, 4000);
    }
}

function createBeeConfetti() {
    const container = document.getElementById('bees-container');
    for(let i=0; i<30; i++) {
        const bee = document.createElement('div');
        bee.classList.add('bee');
        bee.innerText = '🐝';
        bee.style.left = Math.random() * 100 + '%';
        bee.style.top = Math.random() * 100 + '%';
        container.appendChild(bee);
        animateBee(bee);
    }
}

function animateBee(bee) {
    const x = Math.random() * 200 - 100;
    const y = Math.random() * 200 - 100;
    bee.style.transform = `translate(${x}px, ${y}px)`;
    setTimeout(() => animateBee(bee), 1000 + Math.random() * 2000);
}