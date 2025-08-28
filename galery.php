<?php
    include ('includes/header.php');
    ?>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/images/joel/image7.jpg');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Galerie<br>Photo & Vidéo</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="index.php">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            Galerie
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <section class="gallery-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">mes souvenirs</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Galerie Photo & Vidéo
                    </h2>
                </div>
                <div class="gallery-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image1.jpg" data-title="Description de l'image 1">
                                    <img src="assets/images/joel/image1.jpg" alt="Galerie 1" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image2.jpg" data-title="Description de l'image 2">
                                    <img src="assets/images/joel/image2.jpg" alt="Galerie 2" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image1.jpg" data-title="Description de l'image 3">
                                    <img src="assets/images/joel/image1.jpg" alt="Galerie 3" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image4.jpg" data-title="Description de l'image 4">
                                    <img src="assets/images/joel/image4.jpg" alt="Galerie 4" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image5.jpg" data-title="Description de l'image 5">
                                    <img src="assets/images/joel/image5.jpg" alt="Galerie 5" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-gallery-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="assets/images/joel/image6.jpg" data-title="Description de l'image 6">
                                    <img src="assets/images/joel/image6.jpg" alt="Galerie 6" class="img-fluid">
                                    <i class="fas fa-eye gallery-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" class="img-fluid" alt="Image en grand">
                        <div class="modal-nav">
                            <button id="prevBtn" class="btn btn-outline-light"><i class="fas fa-chevron-left"></i></button>
                            <button id="nextBtn" class="btn btn-outline-light"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a id="downloadLink" href="#" download class="btn btn-primary">
                            <i class="fas fa-download"></i> Télécharger l'image
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const galleryLinks = document.querySelectorAll('.single-gallery-item a');
            const modalImage = document.getElementById('modalImage');
            const downloadLink = document.getElementById('downloadLink');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let currentImageIndex = 0;
            let images = [];

            // Récupère toutes les images de la galerie
            galleryLinks.forEach((link, index) => {
                images.push({
                    url: link.getAttribute('data-image'),
                    title: link.getAttribute('data-title'),
                    index: index
                });

                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    currentImageIndex = index;
                    updateModalContent(currentImageIndex);
                });
            });

            function updateModalContent(index) {
                const image = images[index];
                if (image) {
                    modalImage.src = image.url;
                    modalImage.alt = image.title;
                    downloadLink.href = image.url;
                }
            }

            prevBtn.addEventListener('click', function() {
                currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
                updateModalContent(currentImageIndex);
            });

            nextBtn.addEventListener('click', function() {
                currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
                updateModalContent(currentImageIndex);
            });
        });
    </script>

<?php include ('includes/footer.php'); ?>