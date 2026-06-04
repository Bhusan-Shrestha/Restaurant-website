<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/hamro-restaurant-logo.png">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <!-- Home section -->
    <section id="home" class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slider-1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Hamro Restaurant</h1>
                        <p>Experience the best dining in Kathmandu with us.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider-2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Hamro Restaurant</h1>
                        <p>Enjoy our delicious cuisine in a cozy and inviting setting.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider-3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Hamro Restaurant</h1>
                        <p>Indulge in a culinary journey that tantalizes your taste buds.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider-4.jpg" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Hamro Restaurant</h1>
                        <p>Discover a world of flavors that will delight your senses.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <!-- Features Section -->
        <h2 class="text-center fw-bold mt-4">Our Mission & Vision</h2>
        <p class="text-center">Our mission is to provide an exceptional dining experience that combines the finest
            ingredients, innovative cuisine, and unparalleled service. We strive to create a welcoming environment
            where every guest feels valued and satisfied.</p>
        <div class="row mt-5 g-2 align-items-center">
            <div class="col-12 col-md-5">
                <img src="images/fried-chicken.jpg" class="img-fluid rounded shadow-sm"
                    style="max-height: 600px; object-fit: cover; width: 100%;">
            </div>
            <div class="col-12 col-md-7 ps-md-3">
                <div class="d-flex gap-3 mb-2">
                    <div class="feature-icon flex-shrink-0">
                        <i class="fas fa-gopuram"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold">Magical Atmosphere</h4>
                        <p style="font-size: 1.05rem; text-align: justify;">Experience the perfect blend of warmth and
                            elegance. Our
                            thoughtfully designed spaces feature soft ambient lighting, comfortable seating, and a
                            welcoming ambiance that makes every moment special.</p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-2">
                    <div class="feature-icon flex-shrink-0">
                        <i class="fas fa-bowl-food"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold">Best Food Quality</h4>
                        <p style="font-size: 1.05rem; text-align: justify;">We take pride in every dish we serve. Our
                            chefs source only
                            the finest, freshest ingredients and prepare each meal with culinary expertise and
                            passion to deliver extraordinary flavors.</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="feature-icon flex-shrink-0">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold">Best Price</h4>
                        <p style="font-size: 1.05rem; text-align: justify;">Premium dining doesn't have to be expensive.
                            We believe
                            exceptional food and service should be accessible to everyone, offering incredible value
                            without compromising on quality.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meeting space Section -->
        <h2 class="text-center fw-bold mt-4">Group and Meeting Spaces</h2>
        <p class="text-center" style="text-align: justify;">Perfect for corporate meetings, social
            gatherings, or private events. Our versatile spaces are equipped with modern amenities and
            can be customized to suit your needs.</p>
        <div class="row mt-5 g-2 align-items-center">
            <div class="col-12 col-md-6">
                <img src="images/meeting-1.jpg" class="img-fluid rounded shadow-sm"
                    style="max-height: 600px; object-fit: cover; width: 100%;">
            </div>
            <div class="col-12 col-md-6">
                <img src="images/meeting-2.jpg" class="img-fluid rounded shadow-sm"
                    style="max-height: 600px; object-fit: cover; width: 100%;">
            </div>
        </div>

        <!-- Food Gallery Section -->
        <h2 class="text-center fw-bold mt-4">Food Gallery</h2>
        <p class="text-center" style="text-align: justify;">Explore our food gallery and discover the delicious dishes
            we have to offer. From traditional favorites to innovative creations, our menu is designed to satisfy every
            palate.</p>
        <div class="row mt-5 g-2 food-gallery">
            <div class="col-12 col-md-4">
                <img src="images/meal-1.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 1"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-2.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 2"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-3.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 3"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-4.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 4"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-5.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 5"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-6.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 6"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-7.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 7"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-8.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 8"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-9.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 9"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-10.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 10"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-11.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 11"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-12.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 12"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-12.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 12"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-14.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 14"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
            <div class="col-12 col-md-4">
                <img src="images/meal-15.jpg" class="img-fluid rounded shadow-sm gallery-img" alt="Meal 15"
                    style="max-height: 400px; object-fit: cover; width: 100%; height: 100%;">
            </div>
        </div>

        <!-- Lightbox modal -->
        <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0 position-relative overflow-hidden">
                    <button type="button" class="lightbox-control lightbox-prev btn btn-link" id="lightboxPrev"
                        aria-label="Previous">
                        <i class="fa fa-chevron-left fa-2x"></i>
                    </button>
                    <button type="button" class="lightbox-control lightbox-next btn btn-link" id="lightboxNext"
                        aria-label="Next">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </button>
                    <div class="modal-body p-0">
                        <img src="" id="lightboxImage" class="w-100 rounded" alt="Full view">
                    </div>
                    <div class="lightbox-caption text-center text-white mt-2 mb-2" id="lightboxCaption"></div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>