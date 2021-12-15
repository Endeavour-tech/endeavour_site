<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">
    <title>Endeavour | Contacts</title>
</head>
<body>
    
    
    <div class="mb-5 pb-5 top__field">
        <div class="container-fluid">
            <app-header active="contacts"></app-header>
            {{-- <lottie-player src="{{ asset('assets/icons/lf30_editor_ycf6brhj.json') }}" background="transparent" speed="1" style="width: 100%; height: auto; margin-top: 15px;" loop autoplay></lottie-player> --}}
            <div class="d-flex justify-content-center mt-3">
                <div class="container-fluid container-lg">
                    <div class="row contacts">
                        <div class="col-12 col-md-6 bg-white border py-3">
                            <div class="text-center">
                                <h3 class="fw-bold">Nos adresses</h3>
                            </div>
                            <div class="w-90 mx-auto mt-3 text-justify">
                                <p class="text">
                                    Nous sommes à votre ecoute et disponible à tout moment.N'hesitez pas à nous contacter 
                                  </p>
                            </div>
                            <div class="w-90 mx-auto mt-4 d-flex flex-column fw-bold">
                                <a href="#" class="mt-4 text-decoration-none contacts__add_link">
                                    <i class="icofont-envelope"></i>
                                    <span class="ml-2">endeavourtech0@gmail.com</span>
                                </a>
                                <a href="tel:0022660185425" class="mt-4 text-decoration-none contacts__add_link">
                                    <i class="icofont-phone-circle"></i>
                                    <span class="ml-2">+226 60185425</span>
                                </a>
                            </div>
                            <div class="w-90 mt-5 mx-auto">
                                <p>Nous suivre sur: </p>
                            </div>
                            <div class="w-90 mx-auto d-flex">
                                <a href="#" class="mt-4 text-decoration-none px-2 social__media__icon">
                                    <i class="icofont-facebook"></i>
                                </a>
                                <a href="tel:0022660185425" class="mt-4 text-decoration-none px-2 social__media__icon">
                                    <i class="icofont-twitter"></i>
                                </a>   
                                <a href="tel:0022660185425" class="mt-4 text-decoration-none px-2 social__media__icon">
                                    <i class="icofont-linkedin"></i>
                                </a>   
                            </div>
                        </div>
                        <div class="col-12 col-md-6 border py-3 text-center endeavour__bg-fourth">
                            <h3 class="fw-bold text-white">Nous contacter</h3>

                            <form action="#" method="post" class="contact__form mx-auto mt-5">
                                <div>
                                    <label for="fullname">Nom et prénom(s)</label>
                                    <input type="text" name="fullname" id="fullname" placeholder="Entrez vos identifiants complets" required>
                                </div>
                                <div>
                                    <label for="email">Adresse email</label>
                                    <input type="email" name="email" id="email" placeholder="Ex: exemple@gmail.com" required>
                                </div>
                                <div>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="py-2" placeholder="Votre message ..."></textarea>
                                </div>
                                <div class="mt-5 d-flex justify-content-start">
                                    <button type="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <app-footer></app-footer>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/index.js') }}" type="module"></script>
</body>
</html>