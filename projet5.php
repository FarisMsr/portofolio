<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="project-card active" data-step="1">
            <div class="card-image">
                <img src="img/afc1.PNG" alt="Le site avant la refonte">
            </div>
            <div class="card-text">
                <h2>Contexte du Projet</h2>
                <p>C'est la suite directe à la <span class="highlight"> Gestion des Comptes Rendus des Visites</span>.Sauf que cette fois-ci on s'intéresse à la partie comptable , qui consiste à gérer les fiches de frais de celui-ci.</p>
            </div>
        </div>

        
        <div class="project-card" data-step="2">
            <div class="card-image">
                <img src="img/afc2.PNG" alt="Les défis de conception">
            </div>
            <div class="card-text">
                <h2>En développement </h2>
                <p> Ce projet est toujours en cours de développement , mais en voilà un aperçu qui permet de modifier les frais forfaitisés pour un comptable sélectionner.</p>
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

    // Assure-toi que la step reste dans les limites
    if (currentStep < 1) currentStep = 1;
    if (currentStep > totalSteps) currentStep = totalSteps;

    // Cache toutes les étapes et affiche uniquement l'étape actuelle
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.classList.remove('active');
    });

    const currentCard = document.querySelector(`.project-card[data-step="${currentStep}"]`);
    if (currentCard) {
        currentCard.classList.add('active');
    }
}</script>

