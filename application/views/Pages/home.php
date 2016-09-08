<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/images/icon.ico" />
    <?php $this->load->view('templates/common_style_tags.php'); ?>    
</head>	
<body> 
    <?php $this->load->view('templates/common_script_tags.php'); ?>
    <?php $this->load->view('templates/header.php'); ?> 
    <div class="container">
        <?php $this->load->view('templates/cover.php'); ?>        
    </div>
    <div class="col-sm-12">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
    <?php $this->load->view('templates/footer.php'); ?>
</body>			
</html>
