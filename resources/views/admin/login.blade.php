<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Endeavour | Admin</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="{{ route('authentification') }}" method="POST">
                    @csrf
                    @if($message = Session::get('error'))
                      <p class="fw-bold text-center ">{{ $message }}</p>
                    @endif
                    <div class="login__field">
                        <i class="login__icon icofont-user-alt-4"></i>
                        <input type="text" class="login__input" name="email" placeholder="Adresse Email">
                    </div>
                    <div class="login__field">
                        <i class="icofont-lock login__icon"></i>
                        <input type="password" class="login__input" name="password" placeholder="Mot de passe">
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Se connecter</span>
                    </button>
                </form>
                <div class="social-login">
                    <h3></h3>
                    <div class="social-icons">
                        <a  href="https://www.instagram.com/endeavtech" target="_blank" class="social-login__icon "> <i class="icofont-instagram"></i></a>
                        <a href="https://www.facebook.com/EndeavTech"  target="_blank" class="social-login__icon "><i class="icofont-facebook"></i></a>
                        <a href="https://twitter.com/tech_endeavour"  target="_blank" class="social-login__icon "><i class="icofont-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>
