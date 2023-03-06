<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ma santé - Inscription</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="inscriptionv3.css">
        <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Modal Layout -->
        <div class="modal"> <!-- toute la page / fenêtre -->
            <div class="modal__overlay"> <!-- Image de background -->

            </div>
                    
            <!-- une box / case -->
            <div class="modal__body">
                <!-- M'inscrire / J'ai déjà un compte -->
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">M'inscrire</h3>
                    <a class="auth-form__switch-btn-link" href="connexion_mespi2.php" target="_blank">
                        <button class="auth-form__switch-btn">J'ai déjà un compte</button>
                    </a>
                </div>
                    
                <!-- Nom / Prénom / Email / Mot de passe / Confirmation du mot de passe -->
                <form class="auth-form__form" action="" method="POST" id="form-1">
                    <!-- Nom -->
                    <div class="auth-form__group">
                        <input for="nom" id="nom" name="nom" type="text" class="auth-form__input auth-form__input2" placeholder="Nom" required>
                        <span class="form-message"></span>
                    </div>

                    <!-- Prénom -->
                    <div class="auth-form__group">
                        <input for="prenom" id="prenom" name="prenom" type="text" class="auth-form__input auth-form__input2" placeholder="Prénom" required>
                        <span class="form-message"></span>
                    </div>

                    <!-- Email -->
                    <div class="auth-form__group">
                        <input for="email" id="email" name="email" type="email" class="auth-form__input auth-form__input2" placeholder="Adresse Email" required>
                        <span class="form-message"></span>
                    </div>

                    <!-- Mot de passe -->
                    <div class="auth-form__group">
                        <input for="pwd" id="pwd" name="pwd" type="password" class="auth-form__input auth-form__input2" placeholder="Mot de passe" required minlength="8">
                        <span class="form-message"></span>
                    </div>

                    <!-- Confirmation du mot de passe -->
                    <div class="auth-form__group">
                        <input for="Cpwd" id="Cpwd" name="Cpwd" type="password" class="auth-form__input auth-form__input2" placeholder="Confirmation du mot de passe" required minlength="8">
                        <span class="form-message"></span>
                    </div>
                    
                    <!-- Conditions d'Utilisation / Politique de confidentialité -->
                    <div class="auth-form__group">
                        <div class="auth-form__aside">
                            <div class="auth-form__policy-text">
                                <input type="checkbox" name="acceptation" class="auth-form__input2" required>
                                <label class="auth-form__policy">
                                    J'accepte les 
                                    <a href="" class="auth-form__text-link" target="_blank">Conditions d'utilisation</a> et la
                                    <a href="" class="auth-form__text-link" target="_blank">Politique de confidentialité</a> de votre site 
                                </label>
                                <br>
                                <span class="form-message"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Button Retourner à la page d'accueil / Button M'inscrire -->
                    <div class="auth-form__control">
                        <a href="" class="auth-form__control-link">
                            <button class="btn btn--primary" type="submit">M'inscrire</button>
                        </a>
                    </div>
                </form>

                <div class="auth-form__control auth-form__bonus">
                    <a href="mespi2 (1).html" class="auth-form__control-link">
                        <button class="btn btn--normal auth-form__control-back">Retourner à la page d'accueil</button>
                    </a>
                </div>
            </div>

            <footer class="footer">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <h2 class="footer__heading">Notre site</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="a_propos.php" class="footer-item__link">À propos</a>
                                </li>
                                <li class="footer-item">
                                    <a href="Contact.php" class="footer-item__link">Contact</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Ligne d'assistance 24/7 : 15</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h2 class="footer__heading"></h2>
                        </div>
                        <div class="grid__column-2-4">
                            <h2 class="footer__heading">Mentions légales</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Conditions d'utilisation</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Politique de confidentialité</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Cookies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h2 class="footer__heading"></h2>
                        </div>
                        <div class="grid__column-2-4">
                            <h2 class="footer__heading">Suivez-nous</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="https://www.facebook.com/profile.php?id=100074862716045" class="footer-item__link" target="_blank">
                                        <i class="footer-item__icon fa-brands fa-facebook-square"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="https://www.instagram.com/its.episen/" class="footer-item__link" target="_blank">
                                        <i class="footer-item__icon fa-brands fa-instagram-square"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="https://www.linkedin.com/company/esipe-cr%C3%A9teil-its/" class="footer-item__link" target="_blank">
                                        <i class="footer-item__icon fa-brands fa-linkedin"></i>
                                        Linkedin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Adresse EPISEN -->
                <div class="footer__bottom">
                    <div class="grid">
                        <center>
                            <a href="https://episen.u-pec.fr/formations/technologies-pour-la-sante-its" target="_blank">
                                <img class="footer__img" src="https://episen.u-pec.fr/uas/esipe/LOGO/EPISEN_Logo_WebHeader.svg" alt="EPISEN">
                            </a>
                        </center>
                        <p class="footer__text">Ingénierie et Technologie pour la Santé</p>
                        <p class="footer__text">École Publique d'Ingénieurs de la Santé Et du Numérique (EPISEN) de l’université Paris-Est Créteil (UPEC) </p>
                        <p class="footer__text">122, rue Paul Armangot, 94400, Vitry-sur-Seine</p>
                        <p class="footer__text">Tél : +33 1 56 72 62 55</p>
                        <p class="footer__text">Web : episen@u-pec.fr</p>
                        <br>
                        <p class="footer__text">© 2022 - Ma santé - Tous droits réservés</p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="./test.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                //Mong muốn của chúng ta
                Validator({
                    form: '#form-1',
                    formGroupSelector: '.auth-form__group',
                    errorSelector: '.form-message',
                    rules: [
                        Validator.isRequired('#nom'),
                        Validator.isRequired('#prenom'),
                        Validator.isRequired('#email'),
                        Validator.isEmail('#email'),
                        Validator.isRequired('#pwd'),
                        Validator.minLength('#pwd', 8),
                        Validator.isRequired('input[name="acceptation"]'),
                        Validator.isRequired('#Cpwd'),
                        Validator.isConfirmed('#Cpwd', function () {
                            return document.querySelector('#form-1 #pwd').value;
                        }, 'Le mot de passe ressaisi est incorrect')
                    ],
                    onSubmit: function (data) { //Lưu lại dữ liệu người dùng nhập vào
                        //Call API
                        console.log(data);
                    }
                });
            });
        </script>
    </body>
</html>
