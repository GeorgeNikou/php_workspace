<?php $events = $this -> db -> getEvents(); ?>
<div class="home mb-2">
    <div class="home_inner">
        <!-- Image artist: https://unsplash.com/@yoannboyer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="/assets/images/Admin_1.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="home_content text-center">
                <div class="home_subtitle">Current events</div>
                <div class="home_title">Events</div>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="text-center">
        <a class="btn btn-info" href="/management/add">Add</a>
    </div>
    <div class="table-responsive mt-2">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
            <tr>
                <th scope="col" style="width: 5%;">ID</th>
                <th scope="col">Name</th>
                <th scope="col" style="width: 10%;">Type</th>
                <th scope="col" style="width: 15%;">Date</th>
                <th scope="col" style="width: 15%;">Location</th>
                <th scope="col" style="width: 5%;">Duration</th>
                <th scope="col" style="width: 5%;">Tickets</th>
                <th scope="col" style="width: 5%;">Operation</th>
            </tr>
            </tr>
            </thead>
            <tbody>
            <?php /** @var Event $event */
                foreach ($events as $event): ?>
                    <tr>
                        <th scope="row" style="width: 5%"><?php echo $event -> getID() ?></th>
                        <td><?php echo $event -> getName() ?></td>
                        <td><?php echo $event -> getType() ?></td>
                        <td><?php echo $event -> getDate() ?></td>
                        <td><?php echo $event -> getLocation() ?></td>
                        <td><?php echo $event -> getDuration() ?></td>
                        <td><?php echo $event -> getNumTickets() ?></td>
                        <td>
                            <a href="/management/edit/<?php echo $event -> getId() ?>"><i class="fa fa-pencil"></i> </a>
                            <a href="/management/delete/<?php echo $event -> getId() ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>