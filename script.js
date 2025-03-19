document.addEventListener("DOMContentLoaded", function() {
    let progressBar = document.getElementById("progress-bar");
    let loginScreen = document.getElementById("login-screen");
    let contentScreen = document.getElementById("content-screen");
    let statusText = document.getElementById("status");

    let messages = [
        "Vérification des systèmes...",
        "Analyse des menaces...",
        "Connexion sécurisée établie.",
        "Accès autorisé."
    ];

    let index = 0;
    let interval = setInterval(() => {
        statusText.innerText = messages[index];
        index++;

        if (index >= messages.length) {
            clearInterval(interval);
            setTimeout(() => {
                loginScreen.style.opacity = "0";
                setTimeout(() => {
                    loginScreen.style.display = "none";
                    contentScreen.style.display = "block";
                }, 200);
            }, 300);
        }
    }, 300);
});



window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('login-screen').style.display = 'none';
        document.getElementById('content-screen').style.display = 'block';
    }, 2000);  
});


let currentIndex = 0;
const slides = document.querySelectorAll('.quote-slide');
const totalSlides = slides.length;

function showNextSlide() {
    slides[currentIndex].style.transform = 'translateX(-100%)'; 
    currentIndex = (currentIndex + 1) % totalSlides; 
    slides[currentIndex].style.transform = 'translateX(0)'; 
}



const sections = document.querySelectorAll("section");

const checkSectionVisibility = () => {
    const triggerBottom = window.innerHeight / 5 * 4;

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;

        if (sectionTop < triggerBottom) {
            section.classList.add("show");
        } else {
            section.classList.remove("show");
        }
    });
};


window.addEventListener("scroll", checkSectionVisibility);
checkSectionVisibility();


const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};


function showCard(step) {
    const cards = document.querySelectorAll('.project-card');
    cards.forEach(card => {
        card.style.display = (card.getAttribute('data-step') == step) ? 'block' : 'none';
    });
    document.getElementById('step-number').textContent = step;
}

let currentStep = 1;
const totalSteps = 5;

function showStep(step) {
    const cards = document.querySelectorAll('.project-card');
    const dots = document.querySelectorAll('.dot');

    
    cards.forEach(card => card.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    
    document.querySelector(`.project-card[data-step="${step}"]`).classList.add('active');
    document.querySelector(`.dot:nth-child(${step})`).classList.add('active');
}


function goToStep(step) {
    if (step < 1) step = 1;
    if (step > totalSteps) step = totalSteps;
    currentStep = step;
    showStep(currentStep);
}


showStep(currentStep);


const techItems = document.querySelectorAll(".tech");
const techDesc = document.getElementById("tech-description");

techItems.forEach(item => {
    item.addEventListener("mouseover", () => {
        techDesc.textContent = item.getAttribute("data-description");
    });
    item.addEventListener("mouseout", () => {
        techDesc.textContent = "";
    });
});


const terminalOutput = document.getElementById("terminal-output");
const lines = [
    "Initialisation du système...",
    "Chargement des modules...",
    "Vérification des fichiers...",
    "Connexion établie...",
    "Bienvenue dans mon univers."
];

let lineIndex = 0;
function displayLine() {
    if (lineIndex < lines.length) {
        terminalOutput.innerHTML += `<p>${lines[lineIndex]}</p>`;
        lineIndex++;
        setTimeout(displayLine, 1000);
    }
}

window.onload = () => {
    document.getElementById("content-screen").classList.add("visible");
};

