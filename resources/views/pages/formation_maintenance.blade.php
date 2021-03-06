<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Endeavour | Formation</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="maintenance/css/bd-coming-soon.css">
</head>
<body class="min-vh-100 d-flex flex-column">
    <main class="my-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-left">
                    <h1 class="page-title">Page en construction ! Bientôt disponible </h1>
                    <div id="timer" class="bd-cd-timer">
                        <div class="time-card">
                            <span class="time-count" id="days"></span>
                            <span class="time-label">JOURS </span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="hours"></span>
                            <span class="time-label">HEURES</span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="minutes"></span>
                            <span class="time-label">MINUTES</span>
                        </div>
                        <div class="time-card">
                            <span class="time-count" id="seconds"></span>
                            <span class="time-label">SECONDES</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-center">
                    <img src="maintenance/images/coming-soon.png" alt="coming soon" class="img-fluid">
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center">
        <nav class="footer-social-links">
            <a href="https://www.facebook.com/EndeavTech" class="social-link"><i class="mdi mdi-facebook-box"></i></a>
            <a href="https://www.instagram.com/endeavtech" class="social-link"><i class="mdi mdi-instagram"></i></a>
            <a href="https://twitter.com/tech_endeavour" class="social-link"><i class="mdi mdi-twitter"></i></a>
            <a href="https://wa.me/60185425" class="social-link"><i class="mdi mdi-whatsapp"></i></a>
        </nav>
        <p class="footer-text mb-0">
            © Copyright Endeavour Tech - 2021
        </p>
    </footer>

    <script src="maintenance/js/bd-timer.js"></script>
    <script src="{{ asset('js/index.js') }}" type="module"></script>
</body>

</html>
