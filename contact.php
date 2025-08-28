<?php include ('includes/header.php'); ?>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/images/joel/image7.jpg');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Contactez<br>Joël Nkunku</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="index.php">
                                Acceuil
                            </a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            Contacte
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Section Start >>-->
        <section class="contact-main-area fix section-padding">
            <div class="container">
                <div class="contact-main-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title mb-2">
                                    <span class="wow fadeInUp">Restons en contact</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Contactez-moi</h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                    N'hésitez pas à me contacter pour toute question, suggestion ou demande de partenariat. Mon équipe et moi-même vous répondrons dans les plus brefs délais.
                                </p>
                                <div class="row g-4 mt-3">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Adresse</h5>
                                                <p>
                                                    Ville de Québec, <br>
                                                    QC G1W4J1
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Téléphone</h5>
                                                <a href="tel:+14182552365">+1 418 255 2365 </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Email</h5>
                                                <a href="mailto:nkunkubavedilaj@gmail.com" class="link">nkunkubavedilaj@gmail.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fal fa-globe"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Réseaux Sociaux</h5>
                                                <div class="social-icon d-flex align-items-center">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/images/joel/image7.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="contact-form-items">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">Envoyez-moi un message</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont marqués *</p>
                                </div>
                                <form action="contact_form.php" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Votre nom*">
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="email" name="email" id="email" placeholder="Votre adresse email*">
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Votre message"></textarea>
                                                <div class="icon">
                                                    <i class="fal fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                            <button type="submit" class="theme-btn">
                                                <span><i class="fal fa-paper-plane"></i>Envoyer le message</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <?php include ('includes/footer.php'); ?>