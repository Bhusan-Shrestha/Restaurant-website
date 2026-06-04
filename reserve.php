<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Restaurant - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/hamro-restaurant-logo.png">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <!-- Reservation Section -->
    <section id="reserve" class="container  mt-2">
        <div class="mb-4">
            <h2 class="text-center fw-bold">Reserve Your Table</h2>
            <p class="text-center">We’re here to make your dining and event experience exceptional. Reach out to us for
                reservations, inquiries, or special celebrations.</p>
        </div>
        <div class="row align-items-stretch gy-4">
            <div class="col-md-6 map-container d-flex">
                <div class="w-100 h-100">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.6791728144703!2d85.31521712784952!3d27.714995695542033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fd1edee093%3A0x4f93fbbf08976d1c!2sXenatech%20Nepal!5e0!3m2!1sen!2snp!4v1779599942742!5m2!1sen!2snp"
                        class="w-100 h-100" style="border:0; min-height: 100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 contact-info border rounded p-4 border-2">
                <form action="process-reservation.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="number" class="form-label">Number</label>
                            <input type="tel" class="form-control" id="number" name="number" placeholder="Your Number" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="reservationCount" class="form-label">No of Reservation</label>
                            <input type="number" class="form-control" id="reservationCount" name="reservationCount"
                                placeholder="No of Reservation" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                            placeholder="Add Your Special Request (Optional)"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
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