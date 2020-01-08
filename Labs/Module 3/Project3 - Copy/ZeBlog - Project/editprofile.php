<?php 
session_start();
include 'core.php';

var_dump($database);


// C:\wamp64\www\Module 3\Project3 - Copy\ZeBlog - Project\editprofile.php:5:
// array (size=1)
//   'slavyy1232' => 
//     array (size=8)
//       'username' => string 'slavyy1232' (length=10)
//       'firstname' => string 'George1' (length=7)
//       'lastname' => string 'Nikou1' (length=6)
//       'age' => string '12' (length=2)
//       'gender' => string 'male' (length=4)
//       'password' => string '2222222' (length=7)
//       'postsend' => int 0
//       'avatar' => string 'bg.jpeg.jpeg' (length=12)



/*        //REGISTER//
if(isset($_POST['register'])){
    header("location: registration.php");
}

        //LOGIN//
if(isset($_POST['login'])){
   if(array_key_exists($_POST['username'], $database) AND $database[$_POST['username']]['password'] == $_POST['password']){
    $_SESSION['user'] = $database[$_POST['username']];
    var_dump($database);
}
else
    header("location: index.php?error");
echo "error";
}

        //LOGOUT//
if(isset($_POST['logout'])){
    $_SESSION['user'] = false;
    header("location: index.php");
}*/
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Power Blog</title>
    <meta name="keywords" content="power blog" />
    <meta name="description" content="Power Blog" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <style>
    .title{
        box-shadow: 1px 1px 1px;
        border-radius: 1px;
    }

    .textarea{
        width: 500px;
        height: 200px;
        box-shadow: 1px 1px 1px;
        border-radius: 2px;
    }

    #postsend{
        border-radius: 2px;
        box-shadow: 1px 1px 1px;
        background-color: #e2ae32;
        color: black;
        font-weight: bolder;
    }

    label { 
        display: inline-block; 
        width: 210px; 
        text-align: right; 
    }
    input{
        margin: 10px;
    }
</style>


</head>
<body>

    <div id="wrapper">
     <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php">Post</a></li>
            <li><a href="profile.html" class="current">Profile</a></li>
            <li><a href="users.php">User</a></li>
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

            <div class="post_box">


               <!--  <h2><a href="blog_post.html">Mauris euismod urna id urna faucibus</a></h2>
               
               <div class="post_meta"><strong>Date:</strong> May 22, 2048 | <strong>Author:</strong> Steven </div>
               <a href="#"><img src="images/image_02.jpg" alt="image 2" /></a>
               <p><em>Etiam pellentesque velit vitae metus scelerisque eu placerat tellus pulvinar. Sed feugiat libero ac purus posuere vel luctus.</em></p>
               <p>Maecenas quis metus urna, nec rhoncus tortor. Morbi ultricies, ante et ullamcorper facilisis, lorem libero auctor risus, in eleifend ante mi ut ante. Proin nec mi nec nunc convallis iaculis. Suspendisse ut ligula ante.  Maecenas velit justo, mattis nec adipiscing sed, congue at risus. Mauris tristique eros vel nibh malesuada cursus.</p>
               
               <div class="cleaner_h20"></div>
               <div class="category"><a href="blog_post.html">768 comments</a></div> <div class="btn_more float_r"><a href="blog_post.html">Read more</a></div>
               <div class="cleaner"></div>  -->

           </div>

           <?php
           if (empty($_SESSION['user'])) {
            echo '<h2 style="color: red;margin-left: 120px">Cannot post or check profile!</h2>
            <img style="width: 450px; margin-left: 80px; border-radius: 2px" src="images/troll2.jpg" alt=""><br>
            <h4 style="color: orange;margin-left: 180px">Please log in and try again</h4>';
        } else {
            echo '
            <form action="core.php" method="POST" enctype="multipart/form-data" id="formEdit">
            <h2>Edit Profile Information</h2>
            <!--  RADIO BUTTONS FOR GENDER SELECTION -->
            <label for="">Gender: </label>
            <input type="radio" name="gender"' .
            (isset($gender) && $gender=="female" ? "checked" : '') . '
            value="female">Female
            <input type="radio" name="gender"' .
            (isset($gender) && $gender=="male" ? "checked" : '') . '
            value="male">Male
            <input type="radio" name="gender"' .
            (isset($gender) && $gender=="other" ? "checked" : '') . '
            value="other">Other<br>

            <!-- EDIT FORM INFORMATION -->
            <h1 id="theMessage" style="display:none">Make sure all fields are filled!</h1>

            <label for="">Firstname</label>
            <input type="text" name="firstname" id="firstname"> <div id="test" style="display:none"><p for="">invalid name</p></div><br>
            <label for="">Lastname</label>
            <input type="text" name="lastname" id="lastname"><br>
            <label for="">age</label>
            <input type="Number" name="age" ismap="age"><br>

            <input type="file" name="fileToUpload" id="fileToUpload">   
            <input type="submit" name="editprofile" value="edit and save" id="editsave">      
            <input type="submit" name="editpassword" value="change password">             



            </form>
            ';
        }
            ?>

        <div class="post_box">

                <!-- <h2><a href="blog_post.html">Mauris euismod urna id urna faucibus</a></h2>
                
                <div class="post_meta"><strong>Date:</strong> May 22, 2048 | <strong>Author:</strong> Steven </div>
                <a href="#"><img src="images/image_02.jpg" alt="image 2" /></a>
                <p><em>Etiam pellentesque velit vitae metus scelerisque eu placerat tellus pulvinar. Sed feugiat libero ac purus posuere vel luctus.</em></p>
                <p>Maecenas quis metus urna, nec rhoncus tortor. Morbi ultricies, ante et ullamcorper facilisis, lorem libero auctor risus, in eleifend ante mi ut ante. Proin nec mi nec nunc convallis iaculis. Suspendisse ut ligula ante.  Maecenas velit justo, mattis nec adipiscing sed, congue at risus. Mauris tristique eros vel nibh malesuada cursus.</p>
                
                <div class="cleaner_h20"></div>
                <div class="category"><a href="blog_post.html">768 comments</a></div> <div class="btn_more float_r"><a href="blog_post.html">Read more</a></div>
                <div class="cleaner"></div> -->

            </div>

            <div class="post_box post_box_last">

                <!-- <h2><a href="blog_post.html">Etiam feugiat laoreet sollicitudin</a></h2>
                
                <div class="post_meta"><strong>Date:</strong> May 18, 2048 | <strong>Author:</strong> John </div>
                <a href="#"><img src="images/image_03.jpg" alt="image 3" /></a>
                <p><em>Pellentesque condimentum bibendum justo et porta. Sed et pretium velit. Cras at nibh eu justo rutrum cursus.</em></p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu felis felis. Praesent tempor, sem in bibendum faucibus, ligula dolor pulvinar est, ut consectetur lacus erat sagittis turpis. Quisque aliquet, urna vitae dignissim dignissim, ipsum lectus venenatis est, eget bibendum nibh tellus vel felis. Aenean scelerisque congue leo a sodales.</p>
                
                <div class="cleaner_h20"></div>
                <div class="category"><a href="blog_post.html">256 comments</a></div> <div class="btn_more float_r"><a href="blog_post.html">Read more</a></div>
                <div class="cleaner"></div> -->

            </div>

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

   var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;

   $("#theMessage").hide()


   $('#formEdit').on('submit', function(e){
    var error_msg = "";

    //validate first name
    if($('#firstname').val() == "" || $('#lastname').val() == ""){
        error_msg += "All fields must be filled.\n";
        $("#theMessage").fadeIn(3000)

    }

    if($('#firstname').val().length <= 2 || $('#lastname').val().length <= 2){
        error_msg += "First and last name cannot be less than two characters\n";

    }

    if(numberRegex.test($('#firstname').val()) || numberRegex.test($('#lastname').val())){
        error_msg += "First and last name cannot include numbers\n";
    }

    if (error_msg != "")
        alert(error_msg);
    else
        return

    e.preventDefault();
});






</script>
</body>
</html>