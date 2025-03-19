<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="project-card active" data-step="1">
            <div class="card-image">
                <img src="img/gcr1.PNG" alt="Le site avant la refonte">
            </div>
            <div class="card-text">
                <h2>Contexte du Projet</h2>
                <p>C'est un projet de deuxième année que l'on effectue en cours qui consiste à la <span class="highlight"> Gestion des Comptes Rendus des Visites</span>.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="2">
            <div class="card-image">
                <img src="img/gcr2.PNG" alt="Les défis de conception">
            </div>
            <div class="card-text">
                <h2>Le Commençement </h2>
                <p> Afin d'accèder à l'acceuil que voici qui de base était accessible facilement(sans connexion) , il a fallu mettre en place un processus de connexion ,comme vous pouvez le voir avec la petite entete de style qui affiche les informations de l'utilisateur connectés.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="3">
            <div class="card-image">
                <img src="img/gcr3.PNG" alt="Solutions apportées">
            </div>
            <div class="card-text">
                <h2>Premier Développement</h2>
                <p>Cette page était dédié à la recherche d'un praticien depuis la base de données , une fois le praticien sélectionné il faut ensuite affiché ses informations.</p>
            </div>
        </div>


        
        <div class="project-card" data-step="4">
            <div class="card-image">
                <img src="img/gcr4.PNG" alt="Résultats finaux">
            </div>
            <div class="card-text">
                <h2>Deuxième Développement</h2>
                <p>Le Projet s'est terminé par un deuxième développement , la page de recherche de médicament , son focntionnement est simple puisque elle encaplsule 3 formulaire , un pour choisir la famille de médicament, le suivant pour aficher les médicaments de la famille sélectioné et le dernier la fiche du médicament sélectionné.</p></p>
            </div>
        </div>
    </div>
    <div class="progress-dots">
        
        <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>
        <span class="arrow right" onclick="goToStep(1)"><i class="fas fa-chevron-right"></i></span>
    </div>
</div>


    
    <div class="tech-used fadeIn">
        <h2>Tech utilisé</h2>
        <div class="tech-container slideUp">
            <div class="tech-item">
                <img src="https://img.icons8.com/color/48/000000/html-5.png" alt="HTML5 logo" class="tech-logo">
                <span>HTML</span>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/48/000000/css3.png" alt="CSS3 logo" class="tech-logo">
                <span>CSS</span>
            </div>
            <div class="tech-item">
                <img src="https://img.icons8.com/color/48/000000/php.png" alt="PHP logo" class="tech-logo">
                <span>PHP</span>
            </div>
        </div>
    </div>
</div>
</div>

<script>let currentStep = 1;

function goToStep(stepChange) {
    const totalSteps = 4;
    currentStep += stepChange;

    
    if (currentStep < 1) currentStep = 1;
    if (currentStep > totalSteps) currentStep = totalSteps;

    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.classList.remove('active');
    });

    const currentCard = document.querySelector(`.project-card[data-step="${currentStep}"]`);
    if (currentCard) {
        currentCard.classList.add('active');
    }
}</script>

