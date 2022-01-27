export default class AppHeader extends HTMLElement {
    constructor() {
        super()
        this.attachShadow({ mode: 'open' })
    }

    connectedCallback() {
        this.shadowRoot.innerHTML = `
        <link href="${location.origin}/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="${location.origin}/assets/icofont/icofont.min.css">
        ${this.style()}
        <header>
            <nav class="navbar navbar-light bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center logo" href="#">
                        <img src="${location.origin}/logo.png" alt="" width="50" height="48" class="d-inline-block align-text-top">
                        <span class="mx-2">Endeavour Tech</span>
                    </a>
                    <button class="border-0 navigation__menu d-block d-lg-none bg-transparent">
                        <i class="icofont-navigation-menu"></i>
                    </button>
                    <div class="bar__container__hide">
                        <div class="empty__field"></div>
                        <div class="responsive__bar">
                            <div class="close__menu__field">
                                <button class="border-0 close__navigation__menu d-block d-lg-none bg-transparent">
                                    <i class="icofont-close"></i>
                                </button>
                            </div>
                            <nav class="nav flex-column flex-lg-row justify-content-evenly">
                                <a class="nav-link fw-bold active" href="/" data-active__name="home">Accueil</a>
                                <a class="nav-link fw-bold" href="/services" data-path="/services" data-active__name="services">Services</a>
                                <a class="nav-link fw-bold" href="/formation" data-path="/trainings" data-active__name="training">Formations</a>
                                <a class="nav-link fw-bold" href="/abouts" data-path="/abouts" data-active__name="abouts">A propos</a>
                                <a class="nav-link fw-bold" href="/contacts" data-path="/contacts" data-active__name="contacts">Contacts</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        `

        this.navigation__menu__btn = this.query(".navigation__menu")
        this.bar__container = this.query(".bar__container__hide")
        this.empty__field = this.query(".empty__field")
        this.responsive__bar = this.query(".responsive__bar")
        this.close__navigation__menu = this.query(".close__navigation__menu")
        this.scrollTo__top__btn = this.query(".scrollTo__top__btn", false)

        //Sidebar Scripts

        this.navigation__menu__btn.addEventListener('click', this.showMenu.bind(this))
        this.empty__field.addEventListener('click', this.hideMenu.bind(this))
        this.close__navigation__menu.addEventListener('click', this.hideMenu.bind(this))
        this.scrollTo__top__btn.addEventListener('click', this.scrollToTop)
        window.onscroll = () => {
            if (window.scrollY >= 200) this.scrollTo__top__btn.classList.remove('d-none')
            else this.scrollTo__top__btn.classList.add('d-none')
        }
    }

    style() {
        return `
        <style>
            .logo span {
                font-size: 24px;
                color: var(--secondary);
                font-family: boldRoboto;
            }
            .navigation__menu, .close__navigation__menu {
                color: var(--secondary);
                font-size: 21px;
            }

            ${
                this.light ? this.lightNavStyle() : ''
            }

            .slogan {
                font-size:14px;
            }
            nav a:hover {color: var(--fifth) !important;}

            a[data-active__name="${this.getAttribute('active')}"] {
                display: flex;
                flex-direction: column;
                color: var(--fourth);
            }

            a[data-active__name="${this.getAttribute('active')}"]:after {
                content: '';
                width: 30px;
                height: 4px;
                background: var(--fourth);
                border-radius: 2px;
            }

            @media (max-width: 992px) {
                .bar__container__hide {display: none;}
                .bar__container {
                    width: 100%;
                    height: 100vh;
                    background: rgba(0, 0, 0, .5);
                    display: flex;
                    flex-direction: column;
                    position: fixed;
                    top: 0;
                    left: 0;
                }
                .empty__field {
                    width: 40%;
                    height: 100%;
                }

                .close__menu__field {
                    width: 100%;
                    height: 50px;
                    border-bottom: .5px solid #eee;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                }

                .close__navigation__menu {margin-left: 12px;}

                .responsive__bar {
                    width: 60%;
                    height: 100%;
                    background: #fafbfc;
                    position: absolute;
                    top: 0;
                    animation: slideFromLeft .4s ease-in forwards;
                }

                .responsive__bar nav {
                    width: 100%;
                    margin-top: 20px;
                }

                a[data-active__name="${this.getAttribute('active')}"] {
                    display: block;
                    background: var(--fifth);
                    color: #fff;
                }

                .responsive__bar nav a {
                    width: 100%;
                    height: fit-content;
                    padding: 10px auto;
                    transition: background .3s, color .3s, box-shadow .3s;
                }

                .responsive__bar nav a:hover {
                    background: var(--secondary);
                    color: #fff !important;
                    box-shadow: 0 1px 2px #899fbd;
                }

                .hide__responsive__bar {animation: slideFromRight .4s ease-in forwards;}

                @keyframes slideFromLeft {
                    from {right: -50%;}
                    to {right: 0;}
                }
                @keyframes slideFromRight {
                    from {right: 0;}
                    to {right: -70%;}
                }
            }

            @media (max-width: 321px) {.logo span {font-size: 19px;}}
        </style>
        `
    }

    query(selector, useShadowRoot = true) {
        return useShadowRoot ? this.shadowRoot.querySelector(selector) : document.querySelector(selector)
    }

    showMenu() {
        this.bar__container.classList.replace('bar__container__hide', 'bar__container')
        document.body.classList.add('position-fixed')
    }

    hideMenu() {
        this.responsive__bar.classList.add('hide__responsive__bar')
        setTimeout(() => {
            this.bar__container.classList.replace('bar__container', 'bar__container__hide')
            this.responsive__bar.classList.remove('hide__responsive__bar')
        }, 400);
        document.body.classList.remove('position-fixed')
    }

    scrollToTop() {
        window.scrollTo(0, 0)
    }
}
