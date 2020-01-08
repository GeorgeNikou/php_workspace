
<?php 
session_start();
include 'core.php';
var_dump($database);
/*var_dump($_POST['fileToUpload']);*/
?>



<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Power Blog</title>
  <meta name="keywords" content="power blog" />
  <meta name="description" content="Power Blog" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>


  <style>
  .para{
    padding: 7px;
    margin-left: 185px;
    padding-bottom: 11px;
  }
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

/*   Modal Content/Box
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; 15% from the top and centered
    padding: 20px;
    border: 1px solid #888;
    width: 80%; Could be more or less, depending on screen size
    } */

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }





    /* Modal Header */
    .modal-header {
      padding: 2px 16px;
      background-color: #FE9A00;
      color: white;
    }

    /* Modal Body */
    .modal-body {padding: 2px 16px;}

    /* Modal Footer */
    .modal-footer {
      padding: 2px 16px;
      background-color: #FE9A00;
      color: white;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #ffe0b9;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 50%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @keyframes animatetop {
      from {top: -300px; opacity: 0}
      to {top: 0; opacity: 1}
    }
  </style>

</head>
<body>

  <div id="wrapper">
   <div id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="dashboard.php">Post</a></li>
      <li><a href="editprofile.php">Profile</a></li>
      <li><a href="users.php" class="current">User</a></li>
    </ul>
  </div> <!-- end of menu -->

  <div id="header">
    <div id="site_title">
      <a href="#" target="_blank"><span class="logo">POWER <br/> BLOG</span></a>
    </div> <!-- end of site_title -->

    <div id="header_right">
      <h1>Lorem ipsum dolor sit amet</h1>
      <p>Etiam sit amet turpis. Duis nulla diam, posuere ac, varius id, ullamcorper sit amet, libero. Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>
      <div class="btn_more image_fr"><a href="blog_post.html">Read more</a></div>
    </div>

    <div class="cleaner"></div>
  </div> <!-- end of header -->

  <div id="content_wrapper_top"></div>
  <div id="content_wrapper">

    <div id="sidebar">
      <div id="login">
        <?php 
        if (empty($_SESSION['user']))
          echo '
        <h3 class="hr_divider">Member Login</h3>
        <form method="POST" action="">
        <label for="username">Username:</label> <input name="username" type="text" class="login_field" id="username" maxlength="30" />
        <div class="cleaner_h10"></div>
        <label for="email">Password:</label> <input name="password" type="password" class="login_field" id="email" maxlength="30" />
        <div class="cleaner_h10"></div>
        <input type="submit" name="login" id="submit" value="Login" class="submit_btn" />
        <input type="submit" name="register" id="submit" value="Register" class="submit_btn" />
        </form>
        ';
        else
          echo '
        <h3 class="hr_divider">Welcome ' . $_SESSION['user']['username'] . '</h3>

        <img src="avatars/' . $_SESSION['user']['avatar'] . '" alt="avatar" height="125" width="175"> 
        <h4 style="font-weight: normal;">Number of posts 0</h4>
        <form method="POST" action="core.php">
        <input type="submit" name="logout" id="submit" value="Logout" class="submit_btn" />
        </form>
        ';
        ?>
      </div>

    </div>

    <div id="content">



     <h2>Registered Users</h2>
     <!-- Trigger/Open The Modal -->
     <?php 
     if (empty($_SESSION['user'])) {
      echo '<h2 style="color: red;margin-left: 120px">Cannot post or check profile!</h2>
      <img style="width: 450px; margin-left: 80px; border-radius: 2px" src="images/troll2.jpg" alt=""><br>
      <h4 style="color: orange;margin-left: 180px">Please log in and try again</h4>';
    } else {
     foreach ($database as $user) {
      echo '<button id="' . $user['username'] . '" onclick="openModal(\'modal_' . $user['username'] . '\')" style="background-color: #a9c33e;width: 100px;height: 30px;color: white;font-weight: bold">' . $user['username'] . '</button>';

      echo '<div id="modal_' . $user['username'] . '" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
      <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="color: white">User Card</h2>
      </div>

      <br><div class="modal-body">

      <div style="font-weight: bold;font-size: 15px;">
      <img style="float: left; margin: auto" src="avatars/' . $user['avatar'] . '" alt=""  height="170" width="170">
      <p class="para">USERNAME: ' . $user['username'] . '</p>
      <p class="para">FIRSTNAME: ' . $user['firstname'] . ' </p>
      <p class="para">LASTNAME:  ' . $user['lastname'] . '</p>
      <p class="para">AGE:  ' . $user['age'] . '  </p>
      <p class="para">GENDER: ' . $user['gender'] . ' </p>
      </div>
      </div>
      <div class="modal-footer">
      <h3></h3>
      </div></div></div>';
    }
  }
  ?>
  <!-- <button id="myBtn" style="background-color: #a9c33e;width: 100px;height: 30px;color: white;font-weight: bold"><?php echo $_SESSION['user']['username'] ?></button> -->
  <!-- The Modal -->







</div>

<div class="cleaner"></div>
</div><!-- end of content wrapper -->
<div id="content_wrapper_bottom"></div>
</div> <!-- end of wrapper -->

<div id="copyright_wrapper">
  <div id="copyright_wrapper">
    <div id="copyright">
      Copyright © 2048 Mushu  .:Herzing College:.
    </div>
  </div>
</div>
<script>
    // Get the modal
//     var modal = document.getElementById("myModal");

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal


// // When the user clicks on the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }

// // Get the modal
// var modal = document.getElementById("myModal");

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
function openModal(id) {
  var modal = document.getElementById(id);
  var span = modal.getElementsByClassName("close")[0];
  modal.style.display = "block";

  span.onclick = function() {
    modal.style.display = "none";
  }
}

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
</script>
</body>
</html>