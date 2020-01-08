<?php if (isset($_SESSION['cart'])) $cart = $_SESSION['cart']; ?>
<!-- Home -->
<div class="home">
    <div class="home_inner">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="../assets/images/blog.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center">
                <div class="home_subtitle">Verify your purchase</div>
                <div class="home_title">Add to Cart</div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div class="container mt-4 border border-light">
    <form action="POST" method="/core.php">
        <div class="text-center mb-5"><h1>Cart</h1></div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th>Name</th>
                <th style="width: 15%;">Type</th>
                <th style="width: 5%;">Price</th>
                <th style="width: 5%;"></th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($cart) && !empty($cart)): ?>
                <?php /** @var Event $item */
                foreach ($cart as $item): ?>
                    <tr>
                        <td><?php echo $item -> getId() ?></td>
                        <td><?php echo $item -> getName() ?></td>
                        <td><?php echo ucfirst($item -> getType()) ?></td>
                        <td>$0.00</td>
                        <td><a href="/cart/remove/<?php echo $item -> getId() ?>"><i class="fa fa-trash" </a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td></td>
                    <td>No items in cart</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <div class="text-right p-3">
            <input type="hidden" name="action" value="confirm_purchase">
            <input class="contact_button" type="submit" name="do" value="Confirm Purchase">
        </div>
    </form>
</div>
<div class="container border border-warning mt-5 p-4">
    <p>Your purchase of any tickets or other products through the Site, including any refunds or exchanges may be
        irreversible. We may impose conditions on your use of any coupon, promotional code or gift card. You will pay
        all charges incurred by you or any users of your account and credit card at the price(s) in effect when such
        charges are incurred, including any applicable taxes. You may only use credit or debit cards, gift cards or
        vouchers that belong to you or to people who expressly authorize you to use such payment methods. You may not
        attempt to conceal your identity by using multiple Internet Protocol addresses or email addresses, or by any
        other means, to conduct transactions on the Site. If we are unable to verify or authenticate any information or
        tickets you provide during any registration, ordering, purchase, payment or remittance process, or any other
        process, or if we are no longer able to verify or authorize your credit card or bank account information, your
        tickets may be cancelled and those tickets will be placed back into queue. We may refuse to honor all pending
        and future ticket purchases made with those credit card or bank accounts and/or via any online accounts
        associated with those credit card or bank accounts.</p>
</div>

<br><br>
<hr style="background-color: gray; width: 90%; margin: auto; margin-top: 100px">