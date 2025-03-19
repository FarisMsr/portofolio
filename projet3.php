<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="project-card active" data-step="1">
            <div class="card-image">
                <img src="img/ecole1.PNG" alt="Le site avant la refonte">
            </div>
            <div class="card-text">
                <h2>Contexte du Projet</h2>
                <p>C'est un projet personnel pour aider une personne a visualiser à quoi pourrait ressembler le site d'une école primaire de façon moderne le site s'appelle<span class="highlight"> Ecole Etoiles</span>.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="2">
            <div class="card-image">
                <img src="img/ecole2.PNG" alt="Les défis de conception">
            </div>
            <div class="card-text">
                <h2>Les Défis</h2>
                <p>Il a fallu gèrer une messagerie complète en contion de deux rôles parent et professeurs , pouvant tout deux reçevoir et s'envoyer des messages directement avec le site.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="3">
            <div class="card-image">
                <img src="img/ecole3.PNG" alt="Solutions apportées">
            </div>
            <div class="card-text">
                <h2>Les Solutions Apportées</h2>
                <p>Des calendriers d'élèves , des gestion de classes en fonction des professeur , un compte dédié pour chaque parent et professeur.</p>
            </div>
        </div>


        
        <div class="project-card" data-step="4">
            <div class="card-image">
                <img src="img/ecole1.PNG" alt="Résultats finaux">
            </div>
            <div class="card-text">
                <h2>Résultats et Conclusion</h2>
                <p>Le site a permis à la personne d'avoir une bonne vue d'ensemble sur son questionnement initial, le site a satisfait ses attentes.</p></p>
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
                <img src="https://img.icons8.com/color/48/000000/javascript.png" alt="JavaScript logo" class="tech-logo">
                <span>JavaScript</span>
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

