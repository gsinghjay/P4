<?php 
include 'includes/db.php';

// Fetch total number of contacts
$totalContacts = $conn->query("SELECT COUNT(*) as total FROM contacts")->fetch_assoc()['total'];

// Fetch contacts per day for the last 7 days
$contactsPerDay = $conn->query("SELECT DATE(created_at) as date, COUNT(*) as total 
                                 FROM contacts
                                 WHERE created_at > DATE_SUB(NOW(), INTERVAL 7 DAY)
                                 GROUP BY DATE(created_at)")->fetch_all(MYSQLI_ASSOC);

// Fetch the most recent 10 contact form submissions
$recentContacts = $conn->query("SELECT name, email, message, created_at 
                                 FROM contacts
                                 ORDER BY created_at DESC
                                 LIMIT 10")->fetch_all(MYSQLI_ASSOC);
?>

<?php include 'includes/header.php'; ?>


<div class="container my-4" style="padding-top: 100px;">
  <h1>Contact Form Statistics</h1>
  
  <div class="row my-4">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Contacts</h5>
          <p class="card-text display-4"><?= $totalContacts ?></p>
        </div>
      </div>
    </div>
  </div>

  <h2>Contacts Per Day (Last 7 Days)</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Total Contacts</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contactsPerDay as $row): ?>
        <tr>
          <td><?= $row['date'] ?></td>
          <td><?= $row['total'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <h2 class="mt-5">Recent Contact Form Submissions</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Submitted At</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($recentContacts as $contact): ?>
        <tr>
          <td><?= $contact['name'] ?></td>
          <td><?= $contact['email'] ?></td>
          <td><?= $contact['message'] ?></td>
          <td><?= $contact['created_at'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<?php include 'includes/footer.php'; ?>