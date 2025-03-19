<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="project-card active" data-step="1">
            <div class="card-image">
                <img src="img/Bipbipbat.PNG" alt="Le site avant la refonte">
            </div>
            <div class="card-text">
                <h2>Contexte du Projet</h2>
                <p>En tant que stagiaire, j'ai participé à la refonte du site web de <span class="highlight">BipBipBat</span>. Cette entreprise avait besoin d'un meilleur site plus dynamique et attirant.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="2">
            <div class="card-image">
                <img src="img/bipbipbat6.PNG" alt="Les défis de conception">
            </div>
            <div class="card-text">
                <h2>Les Défis</h2>
                <p>J'ai dû gérer seul la conception et l'intégration, un défi important. Avant de commencer, il était important d'aborder la partie design.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="3">
            <div class="card-image">
                <img src="img/bipbipbat3.PNG" alt="Solutions apportées">
            </div>
            <div class="card-text">
                <h2>Les Solutions Apportées</h2>
                <p>Une approche pragmatique et une architecture optimisée ont été mises en place.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="4">
            <div class="card-image">
                <img src="img/bipbipbat4.PNG" alt="Mise en œuvre du CMS">
            </div>
            <div class="card-text">
                <h2>La Mise en Œuvre</h2>
                <p>Développement des pages au fur et à mesure tout en simplifiant la vue pour l'utilisateur.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="5">
            <div class="card-image">
                <img src="img/bipbipbat5.PNG" alt="Résultats finaux">
            </div>
            <div class="card-text">
                <h2>Résultats et Conclusion</h2>
                <p>Au niveau fonctionnelle seulement la partie connexion et inscription à pu être travailler pour cause de temps</p>
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
    const totalSteps = 5;
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

