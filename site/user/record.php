<?php
session_start();
include('config.php');

// Check if 'search-date' is set via GET
$searchDate = isset($_GET['search-date']) ? $_GET['search-date'] : '';

// Build the SQL query with the filter (if any)
$select = "SELECT * FROM record_tbl";
if ($searchDate) {
    // Add condition to filter by date
    $select .= " WHERE date = '" . mysqli_real_escape_string($connection, $searchDate) . "'";
}

$check = mysqli_query($connection, $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="record.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Tanolong Christian Church</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav>
          <a href="dashboard.php"><i class="fas fa-home" ></i>Home</a><hr class="hr">
  
          <a href="record.php"><i class="fas fa-clipboard-list"></i> Records<br>Status</a><hr class="hr">
  
          <a href="input.php"><i class="fa-solid fa-pen-to-square"></i>Input</a><hr class="hr">
  
          <a href="/login/index.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </nav><hr class="hr">
  
        <div class="user-profile">
          <img src="treasurer.png" alt="Pastor Avatar">
          <p>Treasurer</p>
        </div>
      </div>
      <!--End of the Sidebar -->

  
  <!-- Main Content here-->
   <div class="main">

    <div class="search-container">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" placeholder="Search...                                                                                                  (ex. 12/10/25)">
      <button type="submit">Find</button>
    </div>
</div>
<!-- four section with different values -->
<div class="section">
  <a href="#"><div class="card" id="status"><i class="fa-solid fa-signal"></i>Status</div></a>
  <a href="/user/DIV/fund.html"><div class="card"><i class="fa-solid fa-money-check-dollar"></i>Church Fund</div></a>
  <a href=""><div class="card"><i class="fa-solid fa-cart-shopping"></i>Expenses</div></a>
  <a href=""><div class="card"><i class="fa-solid fa-list-check"></i>Newest</div></a>
</div>
    <!-- End of Main Content -->
<div class="table-container">
  <div class="center-table">
  <table>
    <thead>
      <tr>
        <th>Tithes And Offering</th>
        <th>Day</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    <!-- Displaying PHP data here -->

                <?php
                $select = "SELECT * FROM record_tbl";
                $check = mysqli_query($connection, $select);
                foreach ($check as $display) {
                ?>
                    <tr>
                    <td><?php echo htmlspecialchars($display['amount']); ?></td>
                    <td><?php echo $display['date']; ?></td>
                    <td><?php echo $display['date']; ?></td>
                </tr>
                <?php } ?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>