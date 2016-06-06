<section id="cover">
    <div class="col-sm-3 nav-container">
        <?php
        $navitems = array("HOME","ABOUT THE PROPERTY","GALLERY","LOCATION","RATES & RESERVATION","CONTACT US");                
        foreach ($navitems as & $items){
            $itema = explode(" ",strtolower($items));
            if( $items == "HOME"){
                if($itema[0] == $pgname){
                    $class = 'class="active col-sm-8 nav-property"';
                }else{
                    $class = 'class="col-sm-8 nav-property"';
                }
                echo anchor('Pages/index/', 'HOME', $class); 
            }else{ 
                if($itema[0] == $pgname){
                    $class = 'class="active col-sm-8 nav-property"';
                }else{
                    $class = 'class="col-sm-8 nav-property"';
                }
                echo anchor('Pages/'.$itema[0], $items , $class);
            }
        }
        ?>           
    </div>
    <div class="col-sm-9" id="cover-image">
        <div class="col-sm-12 cycle-slideshow" data-cycle-speed="10000">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-1.jpg" alt="cover-1">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-2.jpg" alt="cover-2">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-3.jpg" alt="cover-3">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-4.jpg" alt="cover-4">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-5.jpg" alt="cover-5">
            <img src="<?php echo base_url(); ?>public/images/cover/cover-6.jpg" alt="cover-6">
        </div>
        <div id="cover-footer" class="col-sm-12">
            <?php 
            $coverFooterTop = array("Find your home away from home",
                                    "Find out what sets us apart",
                                    "A sneak peak at our hideaway",
                                    "Find your home away from home",
                                    "Quietness in the heal of a citadel",
                                    "Find your way to the serenity");
            $coverFooterBot = array("A unique getaway spend your vacation peacefully",
                                    "Discover more on rooms",
                                    "Facilities and other fun activities",
                                    "Spend your holiday in our peaceful and comfortable environment",
                                    "What more can you ask for",
                                    "We are more than happy to tell you more about us");
            ?>
            <div class="col-sm-12">
                <h2>
                    <?php 
                        echo $coverFooterTop[$pgindex];
                    ?>
                </h2>
            </div>
            <div class="col-sm-12">
                <h3>
                    <?php
                        echo $coverFooterBot[$pgindex];
                    ?>
                </h3>
            </div>
        </div>
    </div>
</section>