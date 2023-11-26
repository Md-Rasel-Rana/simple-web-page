<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hero Section Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"> <!-- Link your custom CSS file -->
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>Welcome to Your Website</h1>
        <p>Your catchy slogan or brief description goes here.</p>
        <a href="#" class="btn btn-primary">Get Started</a>
      </div>
      <!-- Add an image or video in the hero section -->
      <div class="col-lg-6">
        <!-- Example image, replace with your own -->
        <img src="{{asset('images/website.jpg') }}" alt="Placeholder Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
