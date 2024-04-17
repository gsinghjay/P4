<?php include 'includes/header.php'; ?>

<div class="content-wrapper">

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
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</main>
</div>


<?php include 'includes/footer.php'; ?>
