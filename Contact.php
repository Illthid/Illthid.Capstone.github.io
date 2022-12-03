<?php
$page_title = 'Arbor & Hue';
$pgDesc = 'Main Page';
$keyWords = 'Keywords here';

include ('header.php');
?>

<!-- Main Body -->
<main>
    <h1 class="text-center">Come Visit Us at Pike Place Market</h1>
    <h3 class="text-center">We are in the Market almost everyday.</h3>
    <h3 class="text-center">Email us at arborandhue@gmail.com</h3>
    <!-- Wrapper container -->
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm">

    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" id="name" type="text" placeholder="Name" />
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
    </div>

    <!-- Form submit button -->
    <div class="d-grid">
      <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </div>

  </form>

</div>

</main>

<!-- End of Main Body -->

<?php
include('footer.php');
?>