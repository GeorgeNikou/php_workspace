
<?php 
session_start();

include 'core.php';


?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Power Blog</title>
    <meta name="keywords" content="power blog" />
    <meta name="description" content="Power Blog" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>


</head>
<body>

    <div id="wrapper">
       <div id="menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="error2.php">Post</a></li>
            <li><a href="error2.php">Profile</a></li>
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
                <h3 class="hr_divider">Member Login</h3>
                <form method="POST" action="">
                    <label for="username">Username:</label> <input name="username" type="text" class="login_field" id="username" maxlength="30" />
                    <div class="cleaner_h10"></div>
                    <label for="email">Password:</label> <input name="password" type="password" class="login_field" id="email" maxlength="30" />
                    <div class="cleaner_h10"></div>
                    <input type="submit" name="login" id="submit" value="Login" class="submit_btn" /> <input type="submit" name="register" id="submit" value="Register" class="submit_btn" />
                </form>
                <p style="color: red">Invalid username or password. Please try again</p>
            </div>

        </div>

        <div id="content">

        <img style="width: 450px; margin-left: 80px; border-radius: 2px" src="images/troll.jpg" alt="">
      

        

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
</body>
</html>