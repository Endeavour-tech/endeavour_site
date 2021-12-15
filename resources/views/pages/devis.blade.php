<head>
    <meta charset="utf-8">
    <title>Devis Gratuit |Endeavour - Home - Agence web</title>
    <link rel="stylesheet" href="{{ asset('css/devis.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href=" {{ asset('assets/icofont/icofont.min.css') }} ">

</head>
<body>
<app-header active="home"></app-header>
    <main>
        
    
    <section id="core-feature-area" class="bg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading mt-2">
                        <h5 class="text-center">Demande de dévis rapide et gratuit</h5>
                        <fieldset><h3>Quel est votre besoin ?</h3> </fieldset>
                        <form method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="">                            
                            <input type="hidden" name="_method" value="POST">		                    
                            <fieldset>
                                <ul>
                                    <li class="editer editer_type saisie_radio">
                                        <legend class="text-primary">Type du site</legend> <br>
                                        <div class="choix choix_1">
                                            <input type="radio" name="type" class="form-check-input" id="type_1" value="25000" checked="" required="">
                                            <label class="form-check-label" for="type_1">Site vitrine / Institutionnel</label>
                                        </div>
                                        <div class="choix choix_1">
                                            <input type="radio" name="type" class="form-check-input" id="type_6" value="300000" required="">
                                            <label class="form-check-label" for="type_1">Site évènementiel / page promotionnelle </label>
                                        </div>
                                        <div class="choix choix_2">
                                            <input type="radio" name="type" class="form-check-input" id="type_2" value="350000 " required="">
                                            <label for="type_2">Boutique de commerce électronique </label>
                                        </div>
                                        <div class="choix choix_3">
                                            <input type="radio" name="type" class="form-check-input" id="type_3" value="200000" required="">
                                            <label for="type_3">Blog professionnel  </label>
                                        </div>
                                        <div class="choix choix_4">
                                            <input type="radio" name="type" class="form-check-input" id="type_4" value="400000" required="">
                                            <label for="type_4">Site média à fort contenu rédactionnel  </label>
                                        </div>
                                        <div class="choix choix_5">
                                            <input type="radio" name="type" class="form-check-input" id="type_5" value="" required="">
                                            <label for="type_5">Autre  </label>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                            <br>  <br>  
                            <fieldset>
                                <h3>Design</h3> 

                                <div class="row">
                                    <div class="col-md-3"> <ul>
                                        <li class="editer editer_logo saisie_radio">
                                                <legend class="text-primary">Logo</legend> <br>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="logo" class="form-check-input" id="logo_2" value="0" checked="" required="">
                                                    <label for="logo">J'ai déjà mon logo</label>
                                                </div>
                                                <div class="choix choix_oui">
                                                    <input type="radio" name="logo" class="form-check-input" id="logo_1" value="50000" required="">
                                                    <label for="logo">J'ai besoin d'un logo</label>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <div class="col-md-4"> <ul>
                                        <li class="editer editer_charte saisie_radio">
                                                <legend class="text-primary">Charte graphique</legend> <br>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="charte" class="form-check-input" id="charte_2" value="0" checked="" required="">
                                                    <label for="charte">J'ai déjà ma charte graphique</label>
                                                </div>
                                                <div class="choix choix_oui">
                                                    <input type="radio" name="charte" class="form-check-input" id="charte_1" value="20000" required="">
                                                    <label for="charte">J'ai besoin d'une charte graphique</label>
                                                </div>
                                            </li> 
                                    </ul> </div>
                                    <div class="col-md-5"> <ul>
                                        <li class="editer editer_charte saisie_radio">
                                            <legend class="text-primary">Thème graphique</legend> <br>
                                            
                                            <div class="choix choix_non">
                                                <input type="radio" name="theme" class="form-check-input" id="theme_2" value="5000" checked="" required="">
                                                <label for="theme_2">Je veux choisir un design parmi des thèmes existants</label>
                                            </div>
                                            <div class="choix choix_oui">
                                                <input type="radio" name="theme" class="form-check-input" id="theme_1" value="" required="">
                                                <label for="theme_1">J'ai besoin d'un design original, unique et adapté</label>
                                            </div>
                                        </li> </ul> 
                                    </div>
                                   
                                </div>
                            </fieldset>
                            <br><br>
                            <fieldset>
                                <h3>Fonctionnalités</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul><li class="editer editer_type saisie_radio">
                                                <legend class="text-primary">J'ai besoin des fonctionnalités suivantes:</legend> <br>
                                            <div class="choix choix_1">
                                                <input type="checkbox" name="modules1" class="checkbox" id="modules_1" value="5000">
                                                <label for="modules_1">Formulaire de contact</label>
                                            </div>
                                            <div class="choix choix_2">
                                                <input type="checkbox" name="modules2" class="checkbox" id="modules_2" value="5000">
                                                <label for="modules_2">Newsletter</label>
                                            </div>
                                            <div class="choix choix_3">
                                                <input type="checkbox" name="modules3" class="checkbox" id="modules_3" value="5000">
                                                <label for="modules_3">Galerie de photos/portfolio/lookbook</label>
                                            </div>
                                            <div class="choix choix_4">
                                                <input type="checkbox" name="modules4" class="checkbox" id="modules_4" value="5000">
                                                <label for="modules_4">Agenda</label>
                                            </div>
                                            <div class="choix choix_5">
                                                <input type="checkbox" name="modules5" class="checkbox" id="modules_5" value="10000">
                                                <label for="modules_5">Module de prise de rendez-vous</label>
                                            </div>
                                            <div class="choix choix_6">
                                                <input type="checkbox" name="modules6" class="checkbox" id="modules_6" value="10000">
                                                <label for="modules_6">Module de news</label>
                                            </div>
                                            <div class="choix choix_7">
                                                <input type="checkbox" name="modules7" class="checkbox" id="modules_7" value="10000">
                                                <label for="modules_7">Annuaire avec moteur de recherche</label>
                                            </div>
                                            <div class="choix choix_8">
                                                <input type="checkbox" name="modules8" class="checkbox" id="modules_8" value="10000">
                                                <label for="modules_8">Carte interactive</label>
                                            </div>
                                        </li></ul>
                                    </div>
                                    <div class="col-md-6">
                                            <ul> 
                                                <li class="editer editer_type saisie_radio">
                                                    <label for="nb_pages col-md-5">Nb de pages dont les contenus sont à intégrer par l'agence : </label> <br> <br>
                                                    <input type="number" class="form-control form-control-sm col-md-5" name="nb_pages" id="nb_pages" required="">
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                
                            </fieldset> <br><br>
                            <fieldset>
                                <h3>Prestations supplémentaires</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li class="editer editer_logo saisie_radio">
                                                <legend class="text-primary">Formation à l'administration du site </legend> <br>
                                                <div class="choix choix_oui">
                                                        <input type="radio" name="formation" class="form-check-input" id="formation_no" value="0" checked="" required="">
                                                        <label for="formation">Pas de formation</label>
                                                    </div>
                                                    <div class="choix choix_oui">
                                                            <input type="radio" name="formation" class="form-check-input" id="formation_free" value="0" checked="" required="">
                                                            <label for="formation">Formation  2h [gratuite]</label>
                                                    </div>
                                                    <div class="choix choix_non">
                                                    <input type="radio" name="formation" class="form-check-input" id="formation_1" value="25000" required="">
                                                    <label for="formation_1">Formation 1/2 journée </label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="formation" class="form-check-input" id="formation_2" value="0" required="">
                                                    <label for="formation_2">Je n'ai pas besoin de formation</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li class="editer editer_logo saisie_radio">
                                                    <legend class="text-primary">Référencement </legend> <br>
                                                    
                                                <div class="choix choix_oui">
                                                    <input type="radio" name="referencement" class="form-check-input" id="referencement_free" value="5000" checked="" required="">
                                                    <label for="referencement_free">Optimisation des pages</label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="referencement" class="form-check-input" id="referencement_1" value="5000" required="">
                                                    <label for="referencement_1">Référencement naturel base</label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="referencement" class="form-check-input" id="referencement_2" value="5000" required="">
                                                    <label for="referencement_2">Référencement naturel avancé</label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="referencement" class="form-check-input" id="referencement_3" value="5000" required="">
                                                    <label for="referencement_3">Référencement naturel optimal</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li class="editer editer_logo saisie_radio">
                                                    <legend class="text-primary">Hébergement </legend> <br>
                                                    
                                                <div class="choix choix_oui">
                                                    <input type="radio" name="hebergement" class="form-check-input" id="hebergement_0" value="0" checked="" required="">
                                                    <label for="hebergement_0">Pas d'hébergement</label>
                                                </div>
                                                <div class="choix choix_oui">
                                                    <input type="radio" name="hebergement" class="form-check-input" id="hebergement_1" value="5000" required="">
                                                    <label for="hebergement_1">Hébergement mutualisé performance</label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="hebergement" class="form-check-input" id="hebergement_2" value="5000" required="">
                                                    <label for="hebergement_2">Hébergement dédié</label>
                                                </div>
                                                <div class="choix choix_non">
                                                    <input type="radio" name="hebergement" class="form-check-input" id="hebergement_3" value="5000" required="">
                                                    <label for="hebergement_3">Hébergement dédié  + infogérance</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </fieldset>
                            <br>
                            <br>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul> 
                                            <li class="editer editer_type saisie_radio">
                                                <label for="nom col-md-5" class="text-primary">Votre nom et prénom</label> <br> <br>
                                                <input type="text" class="form-control form-control-sm col-md-12" name="nom" id="nom" required="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul> 
                                            <li class="editer editer_type saisie_radio">
                                                <label for="entreprise col-md-5" class="text-primary">Votre Structure</label> <br> <br>
                                                <input type="text" class="form-control form-control-sm col-md-12" name="entreprise" id="entreprise" required="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul> 
                                            <li class="editer editer_type saisie_radio">
                                                <label for="email col-md-5" class="text-primary">Adresse email</label> <br> <br>
                                                <input type="email" class="form-control form-control-sm col-md-12" name="email" id="email" required="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <br><br>
                            <p class="text-center download-btns two">
                                <button type="submit" class="btn btn-primary">Soumettre le devis</button>
                                </p><div class="clear"></div>
                            <p></p>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    </main>
</body>