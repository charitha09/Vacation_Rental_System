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
    </div>
</section>