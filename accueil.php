<div class="container">
    <section class="hero">
        <div id="login-screen">
            <div class="login-overlay"></div>
            <h2>Connexion sécurisée...</h2>
            <p id="status">Vérification des systèmes...</p>
            <div id="progress-bar-container">
                <div id="progress-bar"></div>
            </div>
            <div id="code-lines">
                <p>Authentification en cours...</p>
            </div>
        </div>

        <div id="content-screen" style="display: none;">
            <h2>Bienvenue</h2>
            <section class="identity-card">
                <article>
                    <h3 class="typed-name" id="typed-name"></h3>
                    <p class="typed" id="typed-job"></p>
                    <p class="typed" id="typed-intro"></p>
                    <a href="#competences" class="btn2">Mes Compétences</a>

                </article>
                <aside>
                    <p id="typed-github"></p>
                </aside>
            </section>
            <script>
                function typeText(element, text, speed, callback) {
                    let i = 0;

                    function type() {
                        if (i < text.length) {
                            element.innerHTML += text.charAt(i);
                            i++;
                            setTimeout(type, speed);
                        } else if (callback) {
                            callback();
                        }
                    }
                    type();
                }


                document.addEventListener("DOMContentLoaded", function () {
                    typeText(document.getElementById("typed-name"), "Présentation", 160, function () {
                        typeText(document.getElementById("typed-job"), "Bienvenue sur mon site ! Je m'appelle Mansouri Faris j'ai 21 ans , je suis Développeur Étudiant en BTS SIO.", 20, function () {
                            typeText(document.getElementById("typed-intro"), " Mon programme d'études m'a permis d'acquérir une solide base en informatique, en langages de programmation et en gestion de bases de données.En ce qui concerne mon expérience professionnelle, j'ai eu l'opportunité d'effectuer 2 stages en entreprise.Mes compétences techniques comprennent une maîtrise des langages de programmation tels que C#, PHP, Java et JavaScript, ainsi qu'une gestion de bases de données avec MySQL et SQL Serveur. ", 15, function () {
                                ;

                            });
                        });
                    });
                });
            </script>

            <section class="cards-section">
                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div class="front-content">
                                <div class="badge">CV</div>
                                <div class="description">
                                    <p>Découvrez mon parcours et mes compétences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="back-content">
                                <h3>Voir mon CV</h3>
                                <p>Explorez mes expériences et formations professionnelles.</p>
                                <a href="index.php?action=Cv" class="btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div class="front-content">
                                <div class="badge">Projets</div>
                                <div class="description">
                                    <p>Projets divers réalisés sur diverses technologies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="back-content">
                                <h3>Voir mes projets</h3>
                                <p>Consultez les projets que j'ai développés.</p>
                                <a href="index.php?action=Projets" class="btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div class="front-content">
                                <div class="badge">Tutos</div>
                                <div class="description">
                                    <p>Accédez à des tutoriels pour apprendre à vos côtés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="back-content">
                                <h3>Voir mes tutoriels</h3>
                                <p>Suivez mes tutoriels et apprenez de nouvelles compétences.</p>
                                <a href="index.php?action=Tutoriel" class="btn">En savoir plus</a>
                            </div>
                        </div>


            </section>


            <section class="technologies">
                <h2>languages etudiés</h2>
                <div class="tech-grid">
                    <div class="tech" data-description="Langage de programmation polyvalent.">
                        <img src="img/java-logo-1-removebg-preview.png" alt="Java">
                    </div>
                    <div class="tech" data-description="Framework front-end puissant.">
                        <img src="img/PHP-logo.svg-removebg-preview.png" alt="PHP">
                    </div>
                    <div class="tech" data-description="Base de données robuste.">
                        <img src="img/sql-server-logo-mysql-database-microsoft-sql-server-php-text-line-company-png-clipart-removebg-preview.png"
                            alt="SQL">
                    </div>
                    <div class="tech" data-description="Framework backend rapide.">
                        <img src="img/png-transparent-net-framework-c-net-core-software-framework-mono-studio-purple-studio-violet-thumbnail-removebg-preview.png"
                            alt="C#">
                    </div>
                    <div class="tech" data-description="Framework backend rapide.">
                        <img src="img/png-clipart-javascript-logo-computer-icons-vue-js-angle-text-removebg-preview.png"
                            alt="JavaScript">
                    </div>
                    <div class="tech" data-description="Framework backend rapide.">
                        <img src="img/html.png" alt="HTML">
                    </div>
                    <div class="tech" data-description="Framework backend rapide.">
                        <img src="img/CSS2.png" alt="CSS">
                    </div>
                </div>
                <div id="tech-description"></div>
            </section>

            <section class="synthesis-table" id="competences">
                <h2>Tableau de Synthèse des Réalisations Professionnelles</h2>

                <a href="fichier/TABLEAU DE SYNTHESE .pdf" class="btn3">Version PDF</a>

            </section>


        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector(".btn2").addEventListener("click", function (event) {
                    event.preventDefault();
                    document.querySelector("#competences").scrollIntoView({
                        behavior: "smooth"
                    });
                });
            });
        </script>