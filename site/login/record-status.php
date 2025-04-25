<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="record-status.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Tanolong Christian Church</title>
</head>
<body>
  <!-- SIDEBAR -->
  <div class="sidebar">
    <nav>
      <a href="dashboard.php"><i class="fas fa-home" ></i><br> Home</a><hr class="hr">
      <a href="record-status.php"><i class="fas fa-clipboard-list"></i><br> Records<br>Status</a><hr class="hr">
      <a href="index.php"><i class="fas fa-sign-out-alt"></i><br> Logout</a>
    </nav><hr class="hr">
    <div class="user-profile">
      <img src="men-logo.png" alt="Pastor Avatar">
      <p>Pastor, Ken</p>
    </div>
  </div>
  <!-- End of the Sidebar -->
  
  <!-- Main Content here-->
   <div class="main">

    <div class="search-container">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" placeholder="Search...                                                                                                  (ex. 12/10/25)">
    </div>
</div>
<!-- four section with different values -->
<div class="section">
  <div class="card" id="status"><i class="fa-solid fa-signal"></i>Status</div>
  <div class="card"><i class="fa-solid fa-money-check-dollar"></i>Church Fund</div>
  <div class="card"><i class="fa-solid fa-cart-shopping"></i>Expenses</div>
  <div class="card"><i class="fa-solid fa-list-check"></i>Newest</div>
</div>
    <!-- End of Main Content -->
<div class="table-container">
  <div class="center-table">
  <table>
    <thead>
      <tr>
        <th>Tithes</th>
        <th>Offerings</th>
        <th>Day</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>560</td><td>1520</td><td>Sunday</td><td>12/04/25</td></tr>
      <tr><td>560</td><td>1520</td><td>Sunday</td><td>12/04/25</td></tr>
      <tr><td>560</td><td>1520</td><td>Sunday</td><td>12/04/25</td></tr>
      <tr><td>560</td><td>1520</td><td>Sunday</td><td>12/04/25</td></tr>
      <tr><td>560</td><td>1520</td><td>Sunday</td><td>12/04/25</td></tr>
    </tbody>
  </table>
</div>
</div>
</body>
</html>