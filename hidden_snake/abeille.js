/**
 * Traduction du programme main.py en JavaScript (Canvas)
 * Correction de la synchronisation de l'initialisation.
 */

// --- Classe Jeu ---
class Jeu {
    constructor(canvasId) {
        // --- Dimensions Grille et Fenêtre ---
        this.g_L = 15; 
        this.g_C = 20; 
        this.box = 20; 

        this.g_l = this.box * this.g_C;
        this.g_h = this.box * this.g_L; 

        this.f_x = this.g_l;
        this.f_y = this.g_h + 100;

        // --- Configuration Canvas ---
        this.canvas = document.getElementById(canvasId);
        this.ctx = this.canvas.getContext('2d');
        this.canvas.width = this.f_x;
        this.canvas.height = this.f_y;

        // --- Paramètres de Jeu ---
        this.jeu_actif = false;
        this.debut = false;
        this.vit = 1; // Vitesse en pixels/frame
        
        // game_speed est le nombre de frames nécessaires pour traverser une case (20 / 2 = 10)
        this.game_speed = this.box / this.vit; 

        this.images = {};
        this.loadImages().then(() => {
            this.initSnake();
            this.genereFleurs();
            this.setupListeners();
            this.loop();
        });
    }

    // --- Fonctions d'Initialisation et de Gestion des Ressources ---

    loadImages() {
        const imagePaths = [
            'background', 'tete_g', 'tete_d', 'tete_h', 'tete_b',
            'corps_g', 'corps_d', 'corps_h', 'corps_b', 'fleur'
        ];
        const promises = [];

        for (const name of imagePaths) {
            const img = new Image();
            img.src = `images/${name}.png`; 
            this.images[name] = img;
            promises.push(new Promise((resolve) => {
                img.onload = resolve;
                img.onerror = resolve; 
            }));
        }
        return Promise.all(promises);
    }

    initSnake() {
        this.s_L = 3; 
        this.s_C = 7; 
        this.dir = 'D';
        this.new_dir = 'D';
        this.s_old = [2, 7];
        this.corps = [['D',2,7],['D',1,7],['D',0,7]];

        this.s_x = this.s_L * this.box;
        this.s_y = this.s_C * this.box;

        this.score = 0;
        
        // FIX CLÉ: Réinitialise le compteur à -1. frame_count++ le passera à 0,
        // garantissant que 0 % game_speed === 0 est vrai sur la première frame active.
        this.frame_count = -1; 
    }

    setupListeners() {
        document.addEventListener('keydown', this.handleKeyPress.bind(this));
    }

    handleKeyPress(event) {
        const nom_touche = event.key;

        if (this.jeu_actif) {
            if (nom_touche === 'ArrowLeft' || nom_touche === 'q') {
                if (this.dir !== 'D') this.new_dir = 'G';
            } else if (nom_touche === 'ArrowRight' || nom_touche === 'd') {
                if (this.dir !== 'G') this.new_dir = 'D';
            } else if (nom_touche === 'ArrowUp' || nom_touche === 'z') {
                if (this.dir !== 'B') this.new_dir = 'H';
            } else if (nom_touche === 'ArrowDown' || nom_touche === 's') {
                if (this.dir !== 'H') this.new_dir = 'B';
            }
        } else {
            if (nom_touche === 'Enter') {
                this.initSnake(); // Contient le FIX de frame_count
                this.genereFleurs();
                
                // On ne déplace pas la tête ici, elle sera déplacée par la boucle `loop()`
                // lors de la première frame de jeu grâce au FIX de frame_count.
                
                this.jeu_actif = true;
                this.debut = true;
            }
        }
    }

    // --- Fonctions de Logique de Jeu (inchangées) ---

    directionTete() {
        this.s_old[0] = this.s_L;
        this.s_old[1] = this.s_C;

        if (this.new_dir === 'G') {
            this.s_L -= 1;
        } else if (this.new_dir === 'D') {
            this.s_L += 1;
        } else if (this.new_dir === 'H') {
            this.s_C -= 1;
        } else if (this.new_dir === 'B') {
            this.s_C += 1;
        }
        this.dir = this.new_dir;
    }

    directionCorps() {
        for (let i = this.corps.length - 1; i > 0; i--) {
            this.corps[i][0] = this.corps[i - 1][0];
            this.corps[i][1] = this.corps[i - 1][1];
            this.corps[i][2] = this.corps[i - 1][2];
        }

        this.corps[0][0] = this.dir;
        this.corps[0][1] = this.s_old[0];
        this.corps[0][2] = this.s_old[1];
    }

    incrCorps() {
        const lastCase = this.corps[this.corps.length - 1];
        const new_case = [lastCase[0], lastCase[1], lastCase[2]];
        this.corps.push(new_case);
    }

    avanceTete() {
        if (this.dir === 'G') {
            this.s_x -= this.vit;
        } else if (this.dir === 'D') {
            this.s_x += this.vit;
        } else if (this.dir === 'H') {
            this.s_y -= this.vit;
        } else if (this.dir === 'B') {
            this.s_y += this.vit;
        }
    }

    toucheMur() {
        if (this.s_C < 0 || this.s_C >= this.g_L || this.s_L < 0 || this.s_L >= this.g_C) {
            return true;
        }
        return false;
    }

    toucheCorps() {
        for (const caseCoord of this.corps) {
            if (this.s_L === caseCoord[1] && this.s_C === caseCoord[2]) {
                return true;
            }
        }
        return false;
    }

    genereFleurs() {
        const positions_occupees = [];
        positions_occupees.push(`${this.s_L},${this.s_C}`); 

        for (const caseCoord of this.corps) {
            positions_occupees.push(`${caseCoord[1]},${caseCoord[2]}`); 
        }

        while (true) {
            this.fleur_L = Math.floor(Math.random() * this.g_C); 
            this.fleur_C = Math.floor(Math.random() * this.g_L); 

            if (!positions_occupees.includes(`${this.fleur_L},${this.fleur_C}`)) {
                break;
            }
        }
    }

    updateScore() {
        this.score += 50;
    }

    mangeFleur() {
        if (this.s_L === this.fleur_L && this.s_C === this.fleur_C) {
            return true;
        }
        return false;
    }

    dansBox() {
        return (this.s_x % this.box === 0 && this.s_y % this.box === 0);
    }

    finJeu() {
        return this.score >= 1000;
    }

    // --- Fonctions de Rendu Graphique (inchangées) ---

    clearCanvas() {
        this.ctx.clearRect(0, 0, this.f_x, this.f_y);
    }

    drawText(x, y, text, color, size, anchor) {
        this.ctx.fillStyle = color;
        this.ctx.font = `${size}px Comic Sans MS, sans-serif`;
        this.ctx.textAlign = anchor || 'center';
        this.ctx.textBaseline = 'middle'; 
        this.ctx.fillText(text, x, y);
    }

    drawImage(x, y, imageName, width, height) {
        const img = this.images[imageName];
        if (img && img.complete) {
            this.ctx.drawImage(img, x, y, width, height);
        }
    }

    afficheGrille() {
        this.drawImage(0, 0, 'background', this.g_l, this.g_h);
    }

    afficheTete() {
        let imageName = '';
        if (this.dir === 'G') imageName = 'tete_g';
        else if (this.dir === 'D') imageName = 'tete_d';
        else if (this.dir === 'H') imageName = 'tete_h';
        else if (this.dir === 'B') imageName = 'tete_b';

        this.drawImage(this.s_x, this.s_y, imageName, this.box, this.box);
    }

    afficheCorps() {
        for (const caseCoord of this.corps) {
            const dir = caseCoord[0];
            const L = caseCoord[1];
            const C = caseCoord[2];

            const x = L * this.box;
            const y = C * this.box;

            let imageName = '';
            if (dir === 'G') imageName = 'corps_g';
            else if (dir === 'D') imageName = 'corps_d';
            else if (dir === 'H') imageName = 'corps_h';
            else if (dir === 'B') imageName = 'corps_b';

            this.drawImage(x, y, imageName, this.box, this.box);
        }
    }

    afficheFleur() {
        if (this.fleur_L !== null && this.fleur_C !== null) {
            const x = this.fleur_L * this.box;
            const y = this.fleur_C * this.box;
            this.drawImage(x, y, 'fleur', this.box, this.box);
        }
    }

    afficheScore() {
        this.ctx.fillStyle = '#000000';
        this.ctx.fillRect(0, this.g_h, this.f_x, this.f_y - this.g_h);

        const scoreX = this.g_l * 0.5;
        const scoreY = this.g_h + 25;
        this.drawText(scoreX, scoreY, `Score : ${this.score}`, 'yellow', 20, 'center');
    }

    afficheInfo() {
        const x = this.g_l * 0.5;
        let infoY2 = this.g_h + 80;

        if (this.finJeu()) {
            this.drawText(x, this.g_h + 65, "Bravo, tu as gagné !", 'cyan', 15, 'center');
        } else {
            this.drawText(x, this.g_h + 55, "Oh non, tu as perdu :c", 'white', 12, 'center');
            this.drawText(x, infoY2, "Appuie sur Entrée pour recommencer", 'violet', 14, 'center');
        }
    }

    // --- Boucle de Jeu ---

    loop() {
        this.frame_count++;

        if (this.jeu_actif) {
            
            // La logique (grille) est mise à jour seulement si les conditions de temps et d'alignement sont remplies.
            if (this.dansBox() && this.frame_count % this.game_speed === 0) {
                
                // 1. Mouvement logique de la tête et du corps
                this.directionTete(); 
                this.directionCorps();

                // 2. Vérification des collisions/victoire
                if (this.toucheMur() || this.toucheCorps() || this.finJeu()) {
                    this.jeu_actif = false;
                } 
                
                // 3. Vérification de la fleur mangée
                if (this.mangeFleur()) {
                    this.incrCorps();
                    this.updateScore();
                    this.genereFleurs();
                }
            }
            
            // Le déplacement graphique (pixels) est continu (s'exécute à chaque frame)
            this.avanceTete(); 
        }

        // --- Rendu ---
        this.clearCanvas(); 
        this.afficheGrille();
        this.afficheCorps();
        this.afficheTete();
        this.afficheFleur();
        this.afficheScore();

        if (this.jeu_actif === false && this.debut === true) {
            this.afficheInfo();
        }

        if (this.debut === false) {
            this.drawText(this.g_l * 0.5, this.g_h + 65, "Appuie sur Entrée pour commencer", 'white', 16, 'center');
        }

        // Boucle de jeu (requestAnimationFrame)
        requestAnimationFrame(() => this.loop());
    }
}

// --- Point d'entrée du programme ---
window.onload = () => {
    new Jeu('gameCanvas');
};