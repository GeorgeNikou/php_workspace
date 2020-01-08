<?php
    switch ($action) {
        case 'edit':
            /** @var Event $event */
            $edit = true;
            $event = $this -> db -> getEvent($this -> getParams());
            break;
    }
?>
<div class="home mb-5">
    <div class="home_inner">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="/assets/images/Admin_1.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center">
                <div class="home_subtitle">Edit and Delete</div>
                <div class="home_title"><?php echo ucfirst($action) ?></div>
            </div>
        </div>
    </div>
</div><br>

<div class="container mt-5">
    <pre>
        <?php var_dump($event) ?>
    </pre>
    <div class="w-50 m-auto">
        <form action="/core.php" method="POST" enctype="multipart/form-data">
            <div class="font-weight-bold text-center"><h1><span
                            class="text-warning font-italic"><?php echo ucfirst($action) ?></span> event</h1></div>
            <div class="mt-5">
                <label for="">Name: </label><br>
                <input class="contact_input" type="text"
                       name="name" <?php echo($edit ? 'value="' . $event -> getName() . '"' : 'placeholder="Name of the event"') ?>><br>
            </div>
            <br>

            <div>
                <label for="">Type: </label><br>
                <?php if ($edit): ?>
                    <select name="type" class="contact_input text-white">
                        <option value="sports" <?php echo ($event->getType() == 'sports' ? 'selected' : '' ) ?>>Sports</option>
                        <option value="concerts" <?php echo ($event->getType() == 'concerts' ? 'selected' : '' ) ?>>Concerts</option>
                        <option value="theater" <?php echo ($event->getType() == 'theater' ? 'selected' : '' ) ?>>Theater</option>
                        <option value="comedy" <?php echo ($event->getType() == 'comedy' ? 'selected' : '' ) ?>>Comedy</option>
                        <option value="movies" <?php echo ($event->getType() == 'movies' ? 'selected' : '' ) ?>>Movies</option>
                    </select>
                <?php else: ?>
                    <select name="type" class="contact_input text-white">
                        <option value="sports">Sports</option>
                        <option value="concerts">Concerts</option>
                        <option value="theater">Theater</option>
                        <option value="comedy">Comedy</option>
                        <option value="movies">Movies</option>
                    </select>
                <?php endif; ?>
            </div>
            <br>

            <?php if (!$edit): ?>
                <div>
                    <label for="">Image: </label><br>
                    <input class="contact_input" type="file" name="image" placeholder=""><br>
                </div>
                <br>
            <?php endif; ?>
            <div>
                <label for="">Date: </label><br>
                <input class="contact_input" type="datetime-local"
                       name="date" <?php echo($edit ? 'value="' . date("Y-m-d\TH:i:s", strtotime($event -> getDate())) . '"' : '') ?>><br>
            </div>
            <br>

            <div>
                <label for="">Location: </label><br>
                <input class="contact_input" type="text" name="location"
                    <?php echo($edit ? 'value="' . $event -> getLocation() . '"' : 'placeholder="Enter the location of the event"') ?>><br>
            </div>
            <br>

            <div>
                <label for="">Duration: </label><br>
                <input class="contact_input" type="number" min="1" max="72" name="duration"
                    <?php echo($edit ? 'value="' . $event -> getDuration() . '"' : 'placeholder="Enter total duration of the event"') ?>><br>
            </div>
            <br>

            <div>
                <label for="">Available Tickets: </label><br>
                <input class="contact_input" type="number" min="1" name="num_tickets"
                    <?php echo($edit ? 'value="' . $event -> getDuration() . '"' : 'placeholder="Enter total available tickets"') ?>><br>
            </div>
            <br>

            <div class="container mt-5 float-right">
                <div>
                    <input type="hidden" name="action" value="event_<?php echo $action ?>">
                    <input class="newsletter_button" type="submit" name="do" value="<?php echo ucfirst($action) ?>">
                </div>
            </div>
        </form>
    </div><!-- end of column 6 -->

</div><!--  end of container -->
<br><br>
<hr style="background-color: gray; width: 90%; margin: auto; margin-top: 100px">
