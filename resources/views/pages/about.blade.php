<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A propos de nous</title>
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="top__field md-5">
        <div class="container-fluid">
            <app-header active="abouts"></app-header>
            <div class="d-flex justify-content-center mt-2">
                <div class="container-fluid container-lg">
                    <div
                        class="row flex-column-reverse flex-md-column-reverse flex-lg-row justify-content-around align-items-center text-justify">
                        <div class="col-10 col-md-10 col-lg-5">
                            <h1 class="mb-4 desc__title">A PROPOS DE NOUS</h1>
                            <p class="fw-bold">Communiquez et innovez avec des formats créatifs pour interpeller vos
                                audiences !</p>
                            {{-- <p>Nos webdesigners créent vos supports digitaux de communication pour répondre à tous vos
                                objectifs : développer votre image et notoriété, créer une préférence de marque et
                                générer de l’engagement sur vos réseaux sociaux, développer votre business directement.
                                Nous concevons des supports pour inciter les utilisateurs au clic, générer du trafic,
                                capter des leads et booster la conversion.</p> --}}
                                <p>
                                    Endeavour Tech est une agence de services web, spécialisée dans la conception, le design, le développement  d’applications mobiles (Androïd, iOS) et des sites web (site statique, site dynamique, site vitrine, site e-commerce, application web etc). <br>
                                    Notre objectif est d'une part developper des solutions mais aussi proposer nos services au particuliers et aux entreprises. <br>
                                    <ul>
                                        <li><span class="fw-bold">Notre vision</span class="fw-bold">: Chez Endeavour Tech , nous prénons le temps d'étudier et de comprendre les besoins de nos clients.
                                            Nous avons à cœur d’analyser ensemble, avec vous, vos besoins et de mettre tout en œuvre pour développer une solution qui réponde en tout point à ceux-ci. Et tout cela avec une force tranquille, nécessaire pour l'épanouissement de chacun et l'aboutissement de chaque projet.
                                        </li>
                                        <li class="mt-2 "><span class="fw-bold">Nos valeurs</span>: Travail bien fait , Honnêtete , Innovation </li>
                                    </ul>
                                </p>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-end align-content-center ">
                            <img src="{{ asset('images/about.png') }}" width="90%" class="center"  alt="about us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="container mb-5 ">
        <div class="mx-auto mb-4 blue__line"></div>
        <div class="text-center mb-2">
            <h2 class="fw-bold">L'équipe</h2>
        </div>
        <div class="row g-4">
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/yaya.png') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Yaya <span class="text-uppercase">Yaya</span></h3>
                        <span class="mt-1 clearfix">
                            Developpeur web fullstack/maintenancier
                        </span>
                        <small class="mt-4">
                            Responsable departement innovation
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Yaya Yarbanga">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/razack.png') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Abdoul Razack <span class="text-uppercase">Nana</span></h3>
                        <span class="mt-1 clearfix">
                            Developpeur web back end
                        </span>
                        <small class="mt-4">
                            Responsable Endeavour Tech
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Abdoul Razack Nana">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/cisse.png') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Aboubakary <span class="text-uppercase">cisse</span></h3>
                        <span class="mt-1 clearfix">
                            Developpeur web front end/maquetteur
                        </span>
                        <small class="mt-4">
                            Responsable adjoint departement innovation
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Aboubakary cisse">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/ismael.png') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Ismael <span class="text-uppercase">ouiya</span></h3>
                        <span class="mt-1 clearfix">
                            Developpeur web fullstack
                        </span>
                        <small class="mt-4">
                            Community manager
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Ismael ouiya">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/amara.jpg') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Amara <span class="text-uppercase">doukoure</span></h3>
                        <span class="mt-1 clearfix">
                            Developpeur mobile
                        </span>
                        <small class="mt-4">
                            Responsable Adjoint Endeavour Tech
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Amara doukoure">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-4 mx-auto">
                <div class="card p-3 py-4 mt-5">
                    <div class="text-center">
                        <img src="{{ asset('images/aime.png') }}" width="100" class="rounded-circle">
                        <h3 class="mt-2">Hugues aime <span class="text-uppercase">mihin</span></h3>
                        <span class="mt-1 clearfix">
                           Développeur web fullstack
                        </span>
                        <small class="mt-4">
                            Responsable Projet Endeavour Tech
                        </small>
                        <div class="social-buttons mt-5 d-flex align-items-center justify-content-center">
                            <a  href="#" >
                                <img style="width: 27px; height:34px;" src="{{asset('assets/svg/discord_64px.png')}}" alt="Hugues aime mihin">
                            </a>
                            <a class="mx-2" href="#">
                                <i class="fa fa-linkedin fa-2x"></i>
                            </a>
                            <a class="text-black" href="#">
                                <i class="fa fa-github fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="scrollTo__top__btn border-0 position-fixed d-none">
            <i class="icofont-rounded-up"></i>
        </button>
    </main>
    <app-footer></app-footer>
    <script src="{{ asset('js/index.js') }}" type="module"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>
