        <footer class="footer-section section-bg-3">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="../index.php">
                                        <h2 style="color: white;">Joël Nkunku</h2>
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Ensemble, construisons un Congo plus fort, plus juste et prospère pour les générations futures.
                                    </p>
                                    <span>Restons en contact</span> <br>
                                    <a href="mailto:nkunkubavedilaj@gmail.com" class="link">nkunkubavedilaj@gmail.com</a>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Navigation</h5>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="../index.php">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="../about.php">À propos</a>
                                    </li>
                                    <li>
                                        <a href="../galery.php">Galerie</a>
                                    </li>
                                    <li>
                                        <a href="../news.php">Actualités</a>
                                    </li>
                                    <li>
                                        <a href="../contact_form.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Ma Vision</h5>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="">Justice Sociale</a>
                                    </li>
                                    <li>
                                        <a href="">Sécurité</a>
                                    </li>
                                    <li>
                                        <a href="">Éducation</a>
                                    </li>
                                    <li>
                                        <a href="">Panafricanisme</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Contact</h5>
                                </div>
                                <div class="footer-apps-items">
                                    <p>Pour toute question ou demande de renseignements, n'hésitez pas à me contacter.</p>
                                    <div class="support-text mt-4">
                                        <p>Email :</p>
                                        <p><a style="color:#fff" href="mailto:nkunkubavedilaj@gmail.com">nkunkubavedilaj@gmail.com</a></p>
                                        <p>Téléphone :</p>
                                        <p><a style="color:#fff" href="tel:+14182552365">+1 418 255 2365</a></p>
                                        <p>Adresse :</p>
                                        <p>Ville de Québec, QC G1W4J1</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © 2025 Joël Nkunku. Tous droits réservés.
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li><a style="color:#fff" href="https://mastagate.com" target="_blank" style="color: inherit; text-decoration: underline;">Design by Mastagate</a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        <a href="../media/cv/Resume.pdf" download class="floating-cv-btn" id="cvButton">
            <i class="fas fa-download"></i>
            <span>Télécharger mon CV</span>
        </a>



        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const cvButton = document.getElementById('cvButton');
                const body = document.body;
                let isButtonVisible = false;

                body.addEventListener('mousemove', (e) => {
                    // Affiche le bouton si la souris se trouve sur la moitié droite de l'écran
                    if (e.clientX > window.innerWidth / 2 && !isButtonVisible) {
                        cvButton.classList.add('visible');
                        isButtonVisible = true;
                    }
                    // Cache le bouton si la souris sort de cette zone
                    else if (e.clientX <= window.innerWidth / 2 && isButtonVisible) {
                        cvButton.classList.remove('visible');
                        isButtonVisible = false;
                    }
                });

                setTimeout(() => {
                    cvButton.classList.add('visible');
                }, 2000);

                setTimeout(() => {
                    cvButton.classList.remove('visible');
                }, 15000);
            });
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const progressBars = document.querySelectorAll('.progress-bar');

                progressBars.forEach(bar => {
                    const value = bar.getAttribute('aria-valuenow');
                    bar.style.width = value + '%';
                });
            });
        </script>

        <!--<< All JS Plugins >>-->
        <script src="../assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="../assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="../assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <!--<< Slick Js >>-->
        <script src="../assets/js/slick.min.js"></script>
        <!--<< Swiper Js >>-->
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <!--<< Slick Animation Js >>-->
        <script src="../assets/js/slick-animation.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="../assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="../assets/js/wow.min.js"></script>
        <!--<< Circle Progress Js >>-->
        <script src="../assets/js/circle-progress.js"></script>
        <!--<< Main.js >>-->
        <script src="../assets/js/main.js"></script>


    </body>

</html>