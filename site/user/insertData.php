<?php
include('config.php');
//Insert Data
if (isset($_POST['submit'])) {
    $task = mysqli_real_escape_string($connection, ($_POST['amount']));
    $day =  mysqli_real_escape_string($connection, ($_POST['radio']));
    $date = date("Y-m-d");

    $insert = ("INSERT INTO record_tbl (amount,date)VALUES(?,?)");
    //Prepare statement
    $stmt = mysqli_prepare($connection, $insert);
    if ($stmt) {
        //Bind Parameter 
        mysqli_stmt_bind_param($stmt, "ss", $task, $date);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>window.location='input.php'</script>";
        } else {
            echo "<script>alert('Ooopppss Invalid. Please try again.'); window.location='index.php'</script>";
        }
        // statement close
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('SQL Error. Please try again.'); window.location='index.php'</script>";
    }
}
// connection close
mysqli_close($connection);