<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="project-wrapper">
<h2>TUTORIEL GLPI</h2>
    
    <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>

    <div class="project-card-container">
        
        <div class="card-image">
        <div class="project-card active" data-step="1">
                <img src="img/glpi/Diapositive1.JPG">
                </div>
        </div>

        
        <div class="project-card" data-step="2">
        <div class="card-image">
            <img src="img/glpi/Diapositive3.JPG">
        </div>
        </div>

        
        <div class="project-card" data-step="3">
        <div class="card-image">
                <img src="img/glpi/Diapositive4.JPG">
                </div>
        </div>

        
        <div class="project-card" data-step="4">
        <div class="card-image">
                <img src="img/glpi/Diapositive5.JPG" >
                </div>
        </div>

        
        <div class="project-card" data-step="5">
        <div class="card-image">
                <img src="img/glpi/Diapositive6.JPG">
                </div>
        </div>
        <div class="project-card" data-step="6">
        <div class="card-image">
                <img src="img/glpi/Diapositive7.JPG">
                </div>
        </div>
        <div class="project-card" data-step="7">
        <div class="card-image">
                <img src="img/glpi/Diapositive8.JPG">
                </div>
        </div>
        <div class="project-card" data-step="8">
        <div class="card-image">
                <img src="img/glpi/Diapositive9.JPG">
                </div>
        </div>
        <div class="project-card" data-step="9">
        <div class="card-image">
                <img src="img/glpi/Diapositive10.JPG">
                </div>
        </div>
        <div class="project-card" data-step="10">
        <div class="card-image">
                <img src="img/glpi/Diapositive11.JPG">
                </div>
        </div>
        <div class="project-card" data-step="11">
        <div class="card-image">
                <img src="img/glpi/Diapositive12.JPG">
                </div>
        </div>
        <div class="project-card" data-step="12">
        <div class="card-image">
                <img src="img/glpi/Diapositive13.JPG">
                </div>
        </div>
        <div class="project-card" data-step="13">
        <div class="card-image">
                <img src="img/glpi/Diapositive14.JPG">
                </div>
        </div>
        <div class="project-card" data-step="14">
        <div class="card-image">
                <img src="img/glpi/Diapositive15.JPG">
                </div>
        </div>
        <div class="project-card" data-step="15">
        <div class="card-image">
                <img src="img/glpi/Diapositive16.JPG">
                </div>
        </div>
        <div class="project-card" data-step="16">
        <div class="card-image">
                <img src="img/glpi/Diapositive17.JPG">
                </div>
        </div>
        <div class="project-card" data-step="17">
        <div class="card-image">
                <img src="img/glpi/Diapositive18.JPG">
                </div>
        </div>
        <div class="project-card" data-step="18">
        <div class="card-image">
                <img src="img/glpi/Diapositive19.JPG">
                </div>
        </div>
        <div class="project-card" data-step="19">
        <div class="card-image">
                <img src="img/glpi/Diapositive20.JPG">
                </div>
        </div>
        <div class="project-card" data-step="20">
        <div class="card-image">
                <img src="img/glpi/Diapositive21.JPG">
                </div>
        </div>
        <div class="project-card" data-step="21">
        <div class="card-image">
                <img src="img/glpi/Diapositive22.JPG">
                </div>
        </div>
        <div class="project-card" data-step="22">
        <div class="card-image">
                <img src="img/glpi/Diapositive23.JPG">
                </div>
        </div>
        <div class="project-card" data-step="23">
        <div class="card-image">
                <img src="img/glpi/Diapositive24.JPG">
                </div>
        </div>
        <div class="project-card" data-step="24">
        <div class="card-image">
                <img src="img/glpi/Diapositive25.JPG">
                </div>
        </div>
        <div class="project-card" data-step="25">
        <div class="card-image">
                <img src="img/glpi/Diapositive26.JPG">
                </div>
        </div>
        <div class="project-card" data-step="26">
        <div class="card-image">
                <img src="img/glpi/Diapositive27.JPG">
                </div>
        </div>
        <div class="project-card" data-step="27">
        <div class="card-image">
                <img src="img/glpi/Diapositive28.JPG">
                </div>
        </div>
        <div class="project-card" data-step="28">
        <div class="card-image">
                <img src="img/glpi/TUTO GLPI.jpg">
                </div>
        </div>
       
    </div>
    <div class="progress-dots">
        
        <span class="arrow left" onclick="goToStep(-1)"><i class="fas fa-chevron-left"></i></span>
        <span class="arrow right" onclick="goToStep(1)"><i class="fas fa-chevron-right"></i></span>
    </div>
</div>



</div>
</div>

<script>let currentStep = 1;

function goToStep(stepChange) {
    const totalSteps = 28;
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

