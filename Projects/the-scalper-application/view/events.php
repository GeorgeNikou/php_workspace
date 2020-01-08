<?php
    var_dump($this -> getParams());
    if ($action == 'category')
        $events = $this -> db -> getEvents($this -> getParams());
    else
        $events = $this -> db -> getEvents();
    $totalPages = count($events) / 6;

?>
<link rel="stylesheet" href="/assets/styles/extras.css">
<div class="home mb-5">
    <div class="home_inner">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="/assets/images/RAD_1.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center" style="color: #1b1b1b">
                <div class="home_subtitle"><?php echo($action == 'category' ? 'Events' : 'All events') ?></div>
                <div class="home_title"><?php echo($action == 'category' ? ucfirst($this -> getParams()) : 'Events') ?></div>
            </div>
        </div>
    </div>
</div><br>

<div class="super_container mt-5">

    <?php if (count($events) > 0): ?>
        <!-- events/open -->
        <div class="discs">
            <div class="container">
                <div class="events row discs_row">
                    <?php
                        $count = 0;
                        $page = 0;
                        /** @var Event $event */
                        foreach ($events as $event):
//                        if ($count == 0) echo '<div id="page' . $page . '">';
                            ?>
                            <div class="col-xl-4 col-md-6">
                                <!-- Disc -->
                                <div class="disc">
                                    <a href="/events/detail/<?php echo $event -> getId() ?>">
                                        <div class="event_image "><img

                                                    src="data:image/jpeg;base64,<?php echo $event -> getImage(); ?>"
                                                    alt=""></div>
                                        <div class="event_container">
                                            <div>
                                                <div class="event_content_6">
                                                    <div class="event_title"><?php echo $event -> getName() ?></div>
                                                    <div class="event_subtitle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
//                            if ($count == 9) {
//                                echo '</div>';
//                                $page++;
//                                $count = 0;
//                            }
                            $count++;
                        endforeach;
                    ?>
                </div>
                <div class="m-auto">
                    <ul class="events pagination mt-5"></ul>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="home_content text-center">
            <div class="home_subtitle">There are no events for this category at the moment 😢!</div>
            <div class="home_title">Error!</div>
        </div>

    <?php endif; ?>
</div>
<!-- events/close -->
</div>

<script>
    var totalPages = <?php echo $totalPages ?>;
</script>
<hr style="background-color: gray; width: 90%; margin: auto; margin-top: 100px">