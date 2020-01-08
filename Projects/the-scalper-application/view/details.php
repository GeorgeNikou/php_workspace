<?php
    $event = $this -> getParams();
    if (empty($this -> getParams())) {
        header('location: /events/error/JSON' . Functions ::base64url_encode(json_encode(array('error' => true, 'msg' => 'Invalid event ID'))));
    } else {
        try {
            /** @var Event $event */
            $event = $this -> db -> getEvent($event);
            $similarEvents = $this -> db -> getEvents($event -> getType(), 7);
        } catch (Exception $exception) {
            //header('location: /events/error/JSON' . Functions::base64url_encode(json_encode(array('error' => true, 'msg' => 'An error occured. Event:' . $this -> getParams() . ' ' . $exception->getMessage()))));
        }
    }
?>
<!-- Home -->
<div class="home">
    <div class="home_inner">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="/assets/images/single.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center">
                <div class="home_subtitle">Details</div>
                <div class="home_title"><?php echo $event -> getName() ?></div>
            </div>
        </div>
    </div>
</div>

<!-- Single -->
<div class="single">
    <hr class="container bg-white mb-5 mt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="single_info">
                    <div class="single_image"><img src="data:image/jpeg;base64,<?php echo $event -> getImage() ?>"
                                                   style="width: 375px;height: 350px" alt=""></div>

                </div>
            </div>

            <!-- Single Content -->
            <div class="col-lg-8 single_content_col">
                <div class="single_content">
                    <div class="single_text">
                        <h4 class="text-center mb-3">Description</h4>
                        <p><?php echo $event -> getDescription() ?></p>

                        <!-- Single Info -->
                        <div class="single_info_list p-2">
                            <ul>
                                <li>
                                    <span class="text-danger">Event Date: </span><?php echo date('j F, Y H:m', strtotime($event -> getDate())); ?>
                                </li>
                                <li>
                                    <span class="text-danger">Category: </span><?php echo ucfirst($event -> getType()) ?>
                                </li>
                                <li><span class="text-danger">Duration: </span><?php echo $event -> getDuration() ?>
                                </li>
                                <li><span class="text-danger">Location: </span><?php echo $event -> getLocation() ?>
                                </li>
                                <li>
                                    <span class="text-danger">Available Tickets: </span><?php echo $event -> getNumTickets() ?>
                                    <span class="float-right mr-5">
										<a class="font-weight-bold text-success"
                                           href="/cart/add/<?php echo $event -> getId() ?>">buy now</a>
									</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <hr class="container bg-white mt-5">
</div>

</div>
</div>
</div>

<div class="container mt-5">
    <h1 class="text-center m-4">Similar events</h1>
    <div class="row">
        <?php if (count($similarEvents) > 1):
            foreach ($similarEvents as $similarEvent): /** @var Event $similarEvent */
                if ($similarEvent != $event):?>
                    <div class="col-lg-2"><a href="/events/detail/<?php echo $similarEvent->getId() ?>"><img style="width: 170px; height: 170px;"
                                               src="data:image/jpeg;base64,<?php echo $similarEvent -> getImage() ?>"
                                               alt="">
                        <p><?php echo $similarEvent -> getName() ?></p>
                            <h4><?php echo date('j F, Y', strtotime($similarEvent -> getDate())) ?></h4></a></div>
                <?php endif;
            endforeach;
        else: ?>
            <div class="col-lg-12">
                <h4>No similar events available</h4>
            </div>
        <?php endif; ?>
    </div>
</div>
<hr style="background-color: gray; width: 90%; margin: auto; margin-top: 100px">