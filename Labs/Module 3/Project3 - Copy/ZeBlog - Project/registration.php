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
    <link rel="stylesheet" href="styles.css">
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

    <div id="wrapper">
       <div id="menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="blog_post.html">Post</a></li>
            <li><a href="profile.html">Profile</a></li>
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

    <!--  <div id="content_wrapper_top"></div> -->
    <div style="background-color: lightgray;margin-top: 35px">
        <form id="signUp" method="POST" enctype="multipart/form-data">
            <section class="divvy">

    <!-- //====================================================================\\
        //======================= H1 title OPEN =========================\\ -->

        <div class="header_validate" style="padding-bottom: 30px">
            <h1>Registration Form</h1>
        </div>


    <!-- //====================================================================\\
        //======================= radio buttons OPEN =========================\\ -->

        <div id="radio_div" class="pad">
            <label id="radioLabel">Gender</label>

            <input value="male" type="radio" id="radioMale" name="gender">
            <label for="radioMale" id="tmp">Male</label>
            
            <input value="female" type="radio" id="radioFemale" name="gender">
            <label for="radioFemale" id="tmp2">Female</label>

            <span><label class="validateGender">Please Select your Gender</label></span>
        </div>



    <!-- //====================================================================\\
        //======================= form input fields OPEN =========================\\ -->
        <!-- INFORMATION FIELDS -->
        <div class="pad">
            <label >Lastname: </label>
            <input type="text" name="lastname" id="inputLastName">
            <span><label class="validateLastName"> Your last name cannot be less than 2 characters</label></span>
        </div>

        <div class="pad">
            <label >Firstname: </label>
            <input type="text" name="firstname" id="inputFirstName">
            <span><label class="validateFirstName"> Your first name cannot be less than 2 characters</label></span>
        </div>

        <div class="pad">
            <label >Age: </label>
            <input type="number" name="age" id="inputAge">
            <label class="validateAge"> Your age must be between 5 or a dead corpse</label>
        </div>

        <div class="pad">
            <label >Username: </label>
            <input type="text" name="username" id="inputUserName">
            <label class="validateUsername"> Your username cannot be less than 5 characters</label>
        </div>

        <div class="pad">
            <label >Password: </label>
            <input type="password" name="password" id="inputPass">
            <label class="validatePassword"> Your password cannot be less than 6 characters</label>
        </div>

        <div class="pad">
            <label >Password (confirmation): </label>
            <input type="password" name="passwordCon" id="inputPassCon">
            <label class="validatePasswordConfirm"> Password doesn't match</label>
        </div>
        <!-- COMBO BOXES -->
        <div class="pad">
            <label>Select Country: </label>
            <select name="country">
                <option value="">Select a Country</option>
                <option value="Canada">Canada</option>
                <option value="United States">United States</option>
                <option value="Brazil">Brazil</option>
                <option value="Germany">Germany</option>
            </select>
            <label class="countryDrop">Please select a country</label>
            <!-- CHECK BOXES (newsletter) -->
            <!-- <div class="pad">
                <input type="checkbox" name="newsletter" value="letter"/> 
                <label class="letter">Subscribe to our newsletter</label>
            </div> -->
            <!-- SUBMIT & RAZ BUTTONS -->

            <div><br>
                <input type="file" name="fileToUpload" id="fileToUpload">                
            </div><br> 


            <div>
                <button id="btnSubmit" name="finalize">Submit</button>
                <button id="btnRaz">Cear</button>
            </div>
        </div>
    <!-- //======================= form input fields CLOSE =========================\\
        //=====================================================================\\ -->

    </section>
</form>
</div> <!-- end of wrapper -->

<!-- <div id="copyright_wrapper">
    <div id="copyright_wrapper">
        <div id="copyright">
            Copyright © 2048 Mushu  .:Herzing College:.
        </div>
    </div>
</div> -->
<script src="jqeury.js"></script>
</body>
</html>