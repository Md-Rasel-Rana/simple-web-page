<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish Footer Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css"> <!-- Link your custom CSS file -->
</head>
<body>

<!-- contact section -->
<section class="section" id="contact">
    <div class="container text-center">
        <p class="section-subtitle">How can you communicate?</p>
        <h6 class="section-title mb-5">Contact Me</h6>
        <!-- contact form -->
        <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <input type="text" size="50" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="Enter Email" requried>
                </div>
                <div class="form-group col-sm-12">
                    <textarea name="comment" id="comment" rows="6" class="form-control"
                        placeholder="Write Something"></textarea>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                </div>
            </div>
        </form><!-- end of contact form -->
    </div><!-- end of container -->
</section><!-- end of contact section -->

  
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap 3 affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Meyawo js -->
<script src="assets/js/meyawo.js"></script>
</body>

</html>