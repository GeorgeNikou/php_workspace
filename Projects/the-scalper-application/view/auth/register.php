<div class="home">
    <div class="home_inner mb-5">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/about.jpg"
        data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center">
                <div class="home_subtitle">Register your account</div>
                <div class="home_title">Register</div>
            </div>
        </div>
    </div>
</div><br>

<div class="container mt-5 pt-5">
    <h2 class="text-center pb-5">
        <span class="text-danger font-weight-bold font-italic">Sign Up.</span> Get Access.
        Explore thousands of live events, and make checkout a snap when you sign up for a Scalper Tickets account.
    </h2>
</div>
<div class="register">
    <div class="container">

        <form class="contact_form" action="/core.php" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Username: </label><br>
                        <input class="contact_input" type="text" name="username"><br>
                    </div>

                    <div class="form-group">
                        <label for="">First name: </label><br>
                        <input class="contact_input" type="text" name="firstname"><br>
                    </div>

                    <div class="form-group">
                        <label for="">Last name: </label><br>
                        <input class="contact_input" type="text" name="lastname"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Address: </label><br>
                        <input class="contact_input" type="text" name="address"><br>
                    </div>
                    <div class="form-group">
                        <label for="">City: </label><br>
                        <input class="contact_input" type="text" name="city"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Province: </label><br>
                        <input class="contact_input" type="text" name="province"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Postal: </label><br>
                        <input class="contact_input" type="text" name="postal"><br>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="">Telephone: </label><br>
                        <input class="contact_input" type="number" name="telephone"><br>
                    </div>

                    <div class="form-group">
                        <label for="">Email: </label><br>
                        <input class="contact_input" type="email" name="email"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Password: </label><br>
                        <input class="contact_input" type="password" name="password"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Credit card number: </label><br>
                        <input class="contact_input" type="text" name="credit_card_number"><br>
                    </div>
                    <div class="form-group">
                        <label class="mr-2" for="">Credit card type: </label>
                        <i class="fa fa-cc-visa bg-danger icon_sizing"></i> 
                        <i class="fa fa-cc-mastercard bg-warning icon_sizing"></i>
                        <i class="fa fa-cc-amex bg-primary icon_sizing"></i>
                        <i class="fa fa-cc-paypal bg-info icon_sizing"></i><br>
                        <input class="contact_input" type="text" name="credit_card_type"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Expiration date: </label><br>
                        <input class="contact_input" type="text" name="credit_card_expiration"><br>
                    </div>
                    <div>
                        <label for="">CSC: <span class="ml-2 text-secondary font-italic">number behind credit card</span></label><br>
                        <input class="contact_input" type="text" name="credit_card_CSC"><br>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <input type="submit" name="action" class="newsletter_button" value="register">
            </div>
        </form>
    </div>
</div>

<br><br><hr class="mt-5" style="background-color: gray; width: 90%; margin: auto;">