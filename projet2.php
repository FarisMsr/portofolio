<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="project-card active" data-step="1">
            <div class="card-image">
                <img src="img/Aperçu2.PNG" alt="Le site avant la refonte">
            </div>
            <div class="card-text">
                <h2>Contexte du Projet</h2>
                <p>En tant que stagiaire, j'ai participé à la refonte du site web de <span class="highlight">BipBipMat</span>. Après un changement au sein de l'entreprise, ils ont de nouveau fait appel à nous pour la refonte de leur site.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="2">
            <div class="card-image">
                <img src="img/bip1.PNG" alt="Les défis de conception">
            </div>
            <div class="card-text">
                <h2>Les Défis</h2>
                <p>Il a fallu gérer l'accès au site pour quatre niveaux de rôles différents : opérateur, livreur, client et administrateur. Chacun disposait d'une interface et d'autorisations spécifiques.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="3">
            <div class="card-image">
                <img src="img/bip3.PNG" alt="Solutions apportées">
            </div>
            <div class="card-text">
                <h2>Les Solutions Apportées</h2>
                <p>Nous avons mis en place un formulaire modulable pour les opérateurs, leur permettant de l’adapter aux besoins des clients. Une gestion des commandes et une administration centralisée des utilisateurs ont également été développées.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="4">
            <div class="card-image">
                <img src="img/bip4.PNG" alt="Mise en œuvre du CMS">
            </div>
            <div class="card-text">
                <h2>La Mise en Œuvre</h2>
                <p>La gestion des commandes a été l'aspect le plus complexe du projet. Elle incluait le suivi des commandes, la génération de devis ainsi que leur stockage via le formulaire.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="5">
            <div class="card-image">
                <img src="img/Aperçu2.PNG" alt="Résultats finaux">
            </div>
            <div class="card-text">
                <h2>Résultats et Conclusion</h2>
                <p>Le site est toujours en cours de construction.</p>
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

