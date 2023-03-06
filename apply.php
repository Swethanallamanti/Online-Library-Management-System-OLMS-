<?php
session_start();

if(isset($_SESSION['error'])){
  echo "<script>alert('all fields are required')</script>";
  // echo $session['status'];
  unset($_SESSION['error']);
} 
else if(isset($_SESSION['status'])){
      echo "<script>alert('book request submitted, kindly check your status')</script>";
      // echo $session['status'];
      unset($_SESSION['status']);
}
if(isset($_SESSION['dataerror'])){
  echo "<script>alert('details are incorrect please fill again')</script>";
  unset($_SESSION['dataerror']);
}
if(isset($_SESSION['bookdataerror'])){
  echo "<script>alert('book details are incorrect please fill again')</script>";
  unset($_SESSION['bookdataerror']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OLMS</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time();?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .apply{
    background-color: #c8c3e450;
    border-start-end-radius: 20px;
    border-end-end-radius: 20px;
  }
  input {
  padding-left: 5px;
  height: 30px;
  width: 250px;
  padding-top: 5px;
  border: 1px solid gray;
  border-radius: 5px;
}
/* select{
  padding-left: 5px;
  height: 35px;
  padding-top: 5px;
  border: 1px solid gray;
  border-radius: 5px;
} */

      </style>
  </head>
  
  <body>
  <div class="container">
      <header>
        <div class="logo">
          <a href="index.html">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
        </div>
        <div class="user-profile">
         
        <?php
          if(isset($_SESSION["studentid"])){
            ?>
            <button onclick="over('user-logout')" class="user-log"><?php echo $_SESSION["studentid"];?></button>
            <!-- <img onclick="over('user-logout')" class="user-image" src="images/S170220.png">
         -->
         
            <?php
}
?>
          <ul>
            <button class="user-logout" id="user-logout" style="visibility: hidden"><i class="bi bi-box-arrow-right"></i><a class="user-logout-color" href="logout.php">Logout</a></button>
          </ul>
        </div>
        
    </header>
  </div>
      <hr>
      <div class="user-banner">
        <div class="user-banner-left">
            <div class="user-banner-data">
              <a href="user.php" class="user-banner-icon-data dashboard"><i class="bi bi-speedometer2 icon"></i>Dashboard</a>
              <a href="apply.php" class="user-banner-icon-data apply"><i class="bi bi-hand-index-thumb-fill icon"></i>Apply</a>
              <a href="statusmain.php" class="user-banner-icon-data"><i class="bi bi-binoculars-fill icon"></i>Status</a>
              <a href="activitymain.php" class="user-banner-icon-data"><i class="bi bi-activity icon"></i>Activity</a>
              <a href="profilemain.php" class="user-banner-icon-data"><i class="bi bi-person-circle icon"></i>Profile</a>
              <a href="booksentermain.php" class="user-banner-icon-data"><i class="bi bi-book-half icon"></i>Donate</a>
            </div>
        </div>
        <!---------------------------------------------- apply header ------------------------- -->
        
        <div class="user-banner-right apply-banner-right">
            <h2 class="book-apply-heading">Apply Here</h2>
            <hr>
            <!------------------------------------ form starts here ------------------------------------- -->
            <form action="bookapply.php" method="post" class="books-apply-form">
              <div class="books-apply">
            <div class="one">
              <label for="studentid">studentID:</label>
              <input class="book-apply-input book" value="<?php echo $_SESSION['studentid']; ?>" id="studentid" type="text" name="studentid" readonly/> 
            </div>
              <div class="two"><label for="studentname">Student Name:</label>
                <input class="book-apply-input" id="studentname"  type="text" name="studentname" value="<?php echo $_SESSION['studentname']; ?>" readonly/>
              </div>
              </div>
            <div class="books-apply">
              <div class="one">
                <label for="studentaadharid">Student Aadhar ID:</label>
                <input class="book-apply-input" id="studentaadharid" value="<?php echo $_SESSION['aadharid']; ?>" type="text" name="aadharid" readonly/></div>
              <div class="two">
              <label for="studentphno">Student phno:</label>
              <input class="book-apply-input" id="studentphno" value="<?php echo $_SESSION['studentphno']; ?>" type="text" name="studentphno" readonly/></div>
            </div> 
            <div class="books-apply">
               <div class="one"><label for="selectthebook">Select The Book:</label>
               <!-- <select>
                <option value=""></option>

              </select> -->
              <input  class="book-apply-input" id="selectthebook" type="text" name="selectthebook">
        </div>
              <div class="two"><input type="submit" class="submit" name="submit" value="Apply"></div>
            </div>
            
            </form>
        </div>
        </div>
      

    <script src="script.js"></script>