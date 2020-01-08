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
                <li><a href="blog_post.html" class="current">Post</a></li>
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

              <div class="post_box">

                <h2><a href="#" target="_parent">Aliquam lorem ante dapibus in viverra</a></h2>
                
                <div class="post_meta"><strong>Date:</strong> May 25, 2048 | <strong>Author:</strong> William | <a href="#">128 comments</a></div>
                <p><img src="images/image_01.jpg" alt="image" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus egestas diam quis dapibus. Quisque sed mauris velit, a congue lorem. Aliquam quis mi sed libero dapibus iaculis a et mi. Vestibulum posuere auctor orci et accumsan.</p>
                <p>Morbi quis lorem tellus. Curabitur vitae risus sem. Mauris venenatis quam non nunc convallis tincidunt. Aliquam tempus neque nec nisl pellentesque nec dignissim lorem cursus. Integer cursus ultrices massa non vehicula. Etiam vitae lacus eu arcu rutrum fermentum. </p>
                <p>Vestibulum eget ligula et ipsum laoreet aliquam sed ut risus. Nulla facilisi. Phasellus nibh justo, lobortis nec vehicula sit amet, cursus vitae ligula. Fusce ut libero eget quam viverra facilisis id non risus. Quisque placerat metus eget libero tempus ac tempus libero pellentesque.</p>
                
                
                <div class="cleaner_h20"></div>
                <div class="cleaner"></div>

            </div>
            
            <h2>Comments</h2>

            <div id="comment_section">
                <ol class="comments first_level">

                    <li>
                        <div class="comment_box commentbox1">

                            <div class="gravatar">
                                <img src="images/avator.png" alt="author" />
                            </div>

                            <div class="comment_text">
                                <div class="comment_author">Steven <span class="date">May 28, 2048</span><span class="time">10:40 PM</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risusLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus</p>
                            </div>   

                            <div class="btn_more float_r"><a href="#">Reply</a></div>

                            <div class="cleaner"></div>
                        </div>                        

                    </li>

                    <li>


                       <ol class="comments">

                        <li>
                            <div class="comment_box commentbox2">

                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">John<span class="date">May 29, 2048</span><span class="time">11:35 AM</span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <div class="btn_more float_r"><a href="#">Reply</a></div>
                                </div>

                                <div class="cleaner"></div>
                            </div>                        


                        </li>

                        <li>


                            <ol class="comments">

                                <li>
                                    <div class="comment_box commentbox1">

                                        <div class="gravatar">
                                            <img src="images/avator.png" alt="author" />
                                        </div>
                                        <div class="comment_text">
                                            <div class="comment_author">Michael <span class="date">May 29, 2048</span><span class="time">08:22 PM</span></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <div class="btn_more float_r"><a href="#">Reply</a></div>
                                        </div>

                                        <div class="cleaner"></div>
                                    </div>                        


                                </li>

                            </ol>

                        </li>
                    </ol>

                </li>

                <li>
                    <div class="comment_box commentbox2">


                        <div class="gravatar">
                            <img src="images/avator.png" alt="author" />
                        </div>
                        <div class="comment_text">
                            <div class="comment_author">William<span class="date">May 30, 2048</span><span class="time">09:14 AM</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus</p>
                            <div class="btn_more float_r"><a href="#">Reply</a></div>
                        </div>

                        <div class="cleaner"></div>
                    </div>                        


                </li>

                <li>
                    <div class="comment_box commentbox1">

                        <div class="gravatar">
                            <img src="images/avator.png" alt="author" />
                        </div>
                        <div class="comment_text">
                            <div class="comment_author">Walker<span class="date">May 31, 2048</span><span class="time">10:25 AM</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus</p>
                            <div class="btn_more float_r"><a href="#">Reply</a></div>
                        </div>

                        <div class="cleaner"></div>
                    </div>                        


                </li>

            </ol>
        </div>

        <div id="comment_form">

           <h3>Leave your comment</h3>

           <form action="#" method="post">

            <div class="form_row">
                <label>Name (* required)</label>
                <br />
                <input name="name" type="text" class="input_field" maxlength="40" />
            </div>
            <div class="form_row">
                <label>Email (* required)</label>
                <br />
                <input name="name" type="text" class="input_field" maxlength="40" />
            </div>
            <div class="form_row">
                <label>Comment</label><br />
                <textarea  name="comment" rows="" cols="" class="input_field"></textarea>
            </div>

            <input type="submit" name="Submit" value="Submit" class="submit_btn" />
        </form>

    </div>

    <div class="cleaner"></div>
</div> <!-- end of content -->

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