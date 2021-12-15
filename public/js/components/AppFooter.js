export default class AppFooter extends HTMLElement {
    constructor() {
        super()
        this.attachShadow({mode: 'open'})
    }
    
    connectedCallback() {
        this.shadowRoot.innerHTML = `
        <link href="${location.origin}/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/icofont/icofont.min.css">

        <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-10 col-md-4 mx-auto">
                    <h5 class="fw-bold">Endeavour Tech</h5>
                    <p class="small text-justify">
                    Nous sommes une agence composée d'une équipe de developpeurs dotées de compétences et de connaissances pluridisciplinaires et qui se veut être à l'écoute du client.
                    </p>
                </div>
                <div class="col-6 col-md-4 text-center text-md-center mx-auto">
                    <h6 class="fw-bold">Liens utiles</h6>
                    <nav class="nav flex-column">
                        <a class="nav-link text-dark" href="/services">Services</a>
                        <a class="nav-link text-dark" href="/contact">Contacts</a>
                        <a class="nav-link text-dark" href="#">A propos</a>
                    </nav>
                </div>
                <div class="col-6 col-md-4 text-justify text-md-center mx-auto">
                    <nav class="nav flex-column">
                        <a class="nav-link text-dark fw-bold" href="#">Nos expertises</a>
                        <a class="nav-link text-dark fw-bold" href="#">Blog</a>
                        <a class="nav-link text-dark fw-bold" href="#">Formations</a>
                    </nav>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="small">&copy;Copyright Endeavour Tech - 2021</p>
            </div>
        </div>
        </footer>
        `
    }
}