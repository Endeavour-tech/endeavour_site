<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endeavour - Services</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">
</head>

<body class="text-dark">

    <div class="top__field">
        <div class="container-fluid">
            <app-header active="services"></app-header>
            <div class="d-flex justify-content-center mt-5">
                <div class="container-fluid container-lg">
                    <div
                        class="row flex-column flex-md-column g-4 flex-lg-row justify-content-around align-items-center text-justify">
                        <div class="col-12 col-md-5 text-center">
                            <img src="../assets/images/services.svg" alt="services">
                        </div>
                        <div class="col-12 col-md-10 col-lg-6 text-justify">
                            <h1 class="mb-4 roboto_semi_bold">Nous disposons de plusieurs services que nous proposons à nos
                                clients</h1>
                            <p class="roboto_semi_bold">Communiquez et innovez avec des formats créatifs pour
                                interpeller votre
                                audience !</p>
                            <p>Nous offrons une large gamme de services qui comprennent entre autres les services de developpement web(site de e-commerce,site vitrine, application web...), les services de developpement mobile(application android, application ios), des services de developpement Desktop(application de bureau).De plus nous proposons la maintenance informatique et les services de Marketing digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-2 mx-auto fit-content">
                <a href="#" class="text-decoration-none text-white devis">
                    <span>Demander un dévis</span>
                    <span>
                        <i class="icofont-rounded-right"></i>
                    </span>
                </a>
            </div>
            <h2 class="text-center mt-5 roboto_semi_bold">Parcourez pour voir les différents services que nous offrons
                </h2>
            <div class="text-center">
                <button class="mt-5 scrollTo__bottom__btn border-0">
                    <i class="icofont-rounded-down"></i>
                </button>
            </div>
        </div>
    </div>

    <main class="container-fluid container-md d-flex flex-column justify-content-center mt-5">


        <!-- Web development -->


        <div class="web__dev">
            <div class="px-2 py-1 mx-auto d-flex align-items-center bg-secondary rounded services__title">
                <img src="../assets/icons/program.svg" alt="Web development" class="def__icon">
                <h2 class="roboto_semi_bold text-white">Développement web</h2>
            </div>
            <div class="row flex-column-reverse flex-lg-row mt-3 services__body align-items-center">
                <div class="col-12 col-lg-6 text-justify">
                    <p class="roboto_semi_bold">Choisir la bonne agence de développement web est un défi de taille pour qui souhaite faire sa transition digitale.
                        Endeavour Tech conjugue un savoir faire  complet avec une vision axée sur l'innovation et la performance.Tout en restant à l'ecoute des besoins du client </p>
                    <p>Nous adoptons une approche globale du développement web : d'une conception Web réfléchie  tout en passant par un code optimisé, nous  sommes une équipe qui travaillent tous ensemble. Notre objectif est de développer vos solutions non seulement en améliorant votre positionnement sur les moteurs de recherche mais aussi en offrant une meilleure expérience utilisateur possible.</p>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="../assets/images/web_dev.svg" alt="services" class="mb-3 mb-lg-0">
                </div>
            </div>
        </div>


        <!-- Mobile development -->


        <div class="mobile__dev mt-3">
            <div class="px-2 py-1 mx-auto d-flex align-items-center bg-secondary rounded services__title">
                <img src="../assets/icons/phone.svg" alt="Mobile development" class="def__icon">
                <h2 class="roboto_semi_bold text-white">Développement mobile</h2>
            </div>
            <div class="row flex-column-reverse flex-lg-row mt-3 services__body align-items-center">
                <div class="col-12 col-lg-6 text-justify">
                    <p class="roboto_semi_bold">Endeavour Tech est spécialisé dans le développement mobile. Avec nous, vous aurez les cartes en main pour stimuler la croissance avec une application mobile pérenne et de qualité. Nous développons des applications natives ou hybrides sur mesure en fonction de vos besoins.</p>
                    <p>Notre équipe possède un savoir-faire unique en création, en design et en développement d’applications mobiles. Notre approche de développement mobile est centrée sur les utilisateurs finaux (la cible). Ce focus nous permet de créer des applications qui renforcent le lien avec vos clients.Ainsi nous sommes en mesure de créer et développer des applications mobiles robustes qui pourront être déployées à grandes envergures.Nous vous accompagnons tout au long du developpement de votre solution mobile.</p>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="../assets/images/mobile_dev.svg" alt="services" class="mb-3 mb-lg-0">
                </div>
            </div>
        </div>


        <!-- Desktop development -->


        <div class="desktop__dev mt-3">
            <div class="px-2 py-1 mx-auto d-flex align-items-center bg-secondary rounded services__title">
                <img src="../assets/icons/desktop.svg" alt="Desktop development" class="def__icon">
                <h2 class="roboto_semi_bold text-white">Développement desktop</h2>
            </div>
            <div class="row flex-column-reverse flex-lg-row mt-3 services__body align-items-center">
                <div class="col-12 col-lg-6 text-justify">
                    <p class="roboto_semi_bold">Confiez nous votre projet de développement Desktop et nous vous garantissons une forte qualité de rendu, de performances ainsi qu'une sécurité élevée.
                        N'attendez plus, lancez vous!!</p>
                    <p>Avec nous votre solution d'application desktop est entre  de bonnes mains car nous avons toutes les capacites et competences pour vous accompagner en partant de l'etape initial jusqu'au deploiement de votre application.<br/>
                        En effet nous disposons d'outils adaptes à la création de vos applications tel que : Electron, C#, Windev.... tout en priorisant une methodologie de travail axée sur les differents besoins du client. </p>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="../assets/images/desktop_dev.svg" alt="services" class="mb-3 mb-lg-0">
                </div>
            </div>
        </div>

           @include('pages.components.speakAboutProjet')

        <button class="scrollTo__top__btn border-0 position-fixed d-none">
            <i class="icofont-rounded-up"></i>
        </button>
    </main>

    <app-footer></app-footer>

    <script src="../js/index.js" type="module"></script>
</body>

</html>
