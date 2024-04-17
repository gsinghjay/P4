<?php
include 'includes/db.php'; // Include database configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

  // Set session variable to indicate form was submitted successfully
  if ($stmt->execute()) {
      $_SESSION['form_submitted'] = true;
  } else {
      echo "Error: " . $stmt->error;
  }

    $stmt->close();
    $conn->close();
}
?>

<?php include 'includes/header.php'; ?>

<div class="content-wrapper" style="padding-top: 100px;">
  
<?php 
// Check if the form was submitted successfully
if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted']): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Your message has been sent successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php 
  // Unset the session variable to prevent the message from showing again on refresh
  unset($_SESSION['form_submitted']); ?>
<?php endif; ?>

<div class="container my-4">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
</div>

<main class="container my-5">
    <h1 class="card-title mb-4">Contact J&K Sea Moss, LLC</h1>
    <p>Please give us 24 hours to reply to all questions.</p>
</main>

<main class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <img src="https://placehold.co/400x400" class="img-fluid" alt="Contact Us Image" style="max-width: 100%; height: auto;"><br><br>
        </div>
        <div class="col-md-8">


          <form action="contact.php" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>



        </div>
      </div>
</main>
</div>


<?php include 'includes/footer.php'; ?>
