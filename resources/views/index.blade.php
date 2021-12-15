<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endeavour - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">
</head>

<body>
    <div class="mb-5 top__field">
        <div class="container-fluid">
            <app-header active="home"></app-header>
            <div class="d-flex justify-content-center mt-2">
                <div class="container-fluid container-lg">
                    <div
                        class="row flex-column-reverse flex-md-column-reverse flex-lg-row justify-content-around align-items-center mt-5 text-justify">
                        <div class="col-10 col-md-10 col-lg-6">
                            <h1 class="mb-4 desc__title">Agence de Developpement web</h1>
                            <p class="fw-bold">Communiquez et innovez avec des formats créatifs pour interpeller vos
                                audiences !</p>
                            <p>Endeavour TECH entend identifier des problemes et  developper des solutions numeriques innovantes tout en se focalisant sur les  nouvelles technologies informatique<br/>
                                Nous sommes une agence composée d'une équipe de developpeurs dotées de compétences et de connaissances pluridisciplinaires et qui se veut être à l'écoute du client  </p>
                            <div class="mt-5">
                                <a href="#" class="text-decoration-none text-white devis">
                                    <span>Demander un dévis</span>
                                    <span>
                                        <i class="icofont-rounded-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-5 text-center">
                            <img src="assets/images/programmer.svg" alt="programmer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="d-flex justify-content-evenly align-items-center definitions shadow">
                    <div class="d-flex flex-column">
                        <img src="assets/icons/creativity.svg" alt="Créativité" class="def__icon m-auto">
                        <span>Créativité</span>
                    </div>
                    <div class="d-flex flex-column">
                        <img src="assets/icons/efficiency.svg" alt="Efficacité" class="def__icon m-auto">
                        <span>Efficacité</span>
                    </div>
                    <div class="d-flex flex-column">
                        <img src="assets/icons/like.svg" alt="Satisfaction" class="def__icon m-auto">
                        <span>Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="container mt-5">
        <div class="mx-auto mb-5 blue__line"></div>
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nos spécialités</h2>
        </div>
        <div class="row g-4">
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card border-0">
                    <div class="card-header pt-3 border-0 bg-transparent">
                        <div class="fit-content p-3">
                            <img src="assets/icons/program.svg" alt="Web development">
                        </div>
                        <h4 class="card-title mt-3">Développement web</h4>
                    </div>
                    <div class="card-body text-justify">
                        <p>Choisir la bonne agence de développement web est un défi de taille pour qui souhaite faire sa transition digitale.
                            Endeavour Tech conjugue un savoir faire  complet avec une vision axée sur l'innovation et la performance.Tout en restant...</p>
                        <a href="#" class="text-decoration-none see__more">
                            <span>Voir plus</span>
                            <i class="icofont-bubble-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card border-0">
                    <div class="card-header border-0 pt-3 bg-transparent">
                        <div class="fit-content p-3">
                            <img src="assets/icons/phone.svg" alt="Mobile development">
                        </div>
                        <h4 class="card-title mt-3">Développement mobile</h4>
                    </div>
                    <div class="card-body text-justify">
                        <p>Endeavour Tech est spécialisé dans le développement mobile. Avec nous, vous aurez les cartes en main pour stimuler la croissance avec une application mobile pérenne et de qualité. Nous développons des applications natives ou hybrides...</p>
                        <a href="#" class="text-decoration-none see__more">
                            <span>Voir plus</span>
                            <i class="icofont-bubble-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card border-0">
                    <div class="card-header border-0 pt-3 bg-transparent">
                        <div class="fit-content p-3">
                            <img src="assets/icons/desktop.svg" alt="Desktop development">
                        </div>
                        <h4 class="card-title mt-3">Développement desktop</h4>
                    </div>
                    <div class="card-body text-justify">
                        <p>Confiez nous votre projet de développement Desktop et nous vous garantissons une forte qualité de rendu, de performances ainsi qu'une sécurité élevée.
                            N'attendez plus, lancez vous!! Avec nous votre solution d'application desktop...</p>
                        <a href="#" class="text-decoration-none see__more">
                            <span>Voir plus</span>
                            <i class="icofont-bubble-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mb-5 blue__line"></div>
        <div class="text-center mb-5">
            <h2 class="fw-bold">Conception de maquettes adaptés aux bésoins</h2>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-10 col-md-6 mx-auto">
                <img src="assets/images/model.svg" alt="Création de maquettes" class="model">
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <div class="text-justify model__text">
                    <p class="fw-bold">Nous confectionnerons la maquette professionnelle adaptée à votre projet. Bien plus que de simples modèles réduits, nous réalisons des maquettes réalistes et fonctionnelles, pour de parfaites immersions avant que le projet ne prenne vie réellement.</p>
                    <ul>
                        <li>Optimisation de la lisibilité et de la transparence: respect des normes UI/UX design</li>
                        <li>Adaptation à tout type d'écran (responsive design)</li>
                        <li>Un contenu créatif qui correspond à vos attentes</li>
                    </ul>
                    <p>Afin de comprendre les enjeux et la faisabilité de votre projet, nous organisons plusieurs rencontres. La création d’une maquette ne s’improvise pas c'est pourquoi nous instaurons une relation d’échange entre nous.</p>
                </div>
            </div>
        </div>

        <div class="mx-auto mb-5 blue__line"></div>
        <div class="text-center mb-5">
            <h2 class="fw-bold">Maintenance d'ordinateurs(portables et de bureaux)</h2>
        </div>
        <div class="row g-4 align-items-center mb-5">
            <div class="col-10 col-md-6 mx-auto">
                <img src="assets/images/maintenance.svg" alt="Mainténance d'ordinateurs" class="model">
            </div>
            <div class="col-10 col-md-6 mx-auto">
                <div class="text-justify model__text">
                    <p class="fw-bold">Une maintenance informatique pertinente exige une attention quotidienne pour maintenir des conditions de sécurité et d’efficacité optimales au sein de vos systèmes d’information</p>
                    <p>En nous  confiant la gestion de votre parc informatique , vous bénéficierez en permanence :</p>
                    <p><ul>
                        <li>De formules souples, adaptées à votre environnement informatique, qui vous permettent d’optimiser votre budget.</li>
                        <li>Du conseil et suivi adéquats pour faire évoluer votre environnement si cela permet d’optimiser votre travail quotidien </li>
                    </p> </ul>
                </div>
            </div>
        </div>
        
       @include('pages.components.speakAboutProjet')

        <button class="scrollTo__top__btn border-0 position-fixed d-none">
            <i class="icofont-rounded-up"></i>
        </button>
    </main>
    <app-footer></app-footer>
    <script src="{{ asset('js/index.js') }}" type="module"></script>
</body>

</html>
