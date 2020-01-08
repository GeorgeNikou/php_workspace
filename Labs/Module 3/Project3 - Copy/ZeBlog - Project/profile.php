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
                <li><a href="index.html">Home</a></li>
                <li><a href="blog_post.html">Post</a></li>
                <li><a href="profile.html" class="current">Profile</a></li>
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
                    <form method="get" action="#">
                        <label for="username">Username:</label> <input name="username" type="text" class="login_field" id="username" maxlength="30" />
                        <div class="cleaner_h10"></div>
                        <label for="email">Password:</label> <input name="password" type="password" class="login_field" id="email" maxlength="30" />
                        <div class="cleaner_h10"></div>
                        <input type="submit" name="submit" id="submit" value="Login" class="submit_btn" /> <input type="submit" name="submit" id="submit" value="Register" class="submit_btn" />
                    </form>
                </div>
            </div>
            

            <div id="content">

              <h2>Contact Information</h2>

              <p>Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor.</p>
              <div class="cleaner_h40"></div>

              <div class="col_w280 float_l">
                  <h3>Studio Address One</h3>
                  990-770   Vitae urna blandit est egestas, <br />
                  Pulvinar sit amet convallis eget, 12660<br />
                  Lorem ipsum dolor<br />
                  <br />
                  Tel: 010-020-7890<br />
                  Fax: 010-020-1230</div>

                  <div class="col_w280 float_r">
                      <h3>Studio Address Two</h3>
                      390-460    faucibus justo commodo,<br />
                      Duis gravida,  Vestibulum 16440<br />
                      Pellentesque et fermentum<br />
                      <br />
                      Tel: 020-030-4560<br />
                      Fax: 020-030-3690</div>

                      <div class="cleaner_h40"></div>

                      <div id="contact_form">

                        <h3>Quick Contact Form</h3>
                        
                        <form method="post" name="contact" action="#">

                            <div class="col_w280 float_l">

                                <label for="author">Name:</label> <input name="author" type="text" class="input_field" id="author" maxlength="40" />
                                <div class="cleaner_h10"></div>

                                <label for="email">Email:</label> <input name="email" type="text" class="input_field" id="email" maxlength="40" />
                                <div class="cleaner_h10"></div>

                                <label for="phone">Phone:</label> <input name="phone" type="text" class="input_field" id="phone" maxlength="40" />
                                <div class="cleaner_h10"></div>
                            </div>

                            <div class="col_w280 float_r">
                                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                <div class="cleaner_h10"></div>

                                <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" />
                                <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
                            </div>
                        </form>

                    </div> 
                    <div class="cleaner"></div>	

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