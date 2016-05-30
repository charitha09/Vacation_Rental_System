<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('templates/common_style_tags.php'); ?>    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/home.css">
</head>	
<body> 
    <?php $this->load->view('templates/common_script_tags.php'); ?>
    <?php $this->load->view('templates/header.php'); ?> 
    <div class="container">
        <?php $this->load->view('templates/cover.php'); ?>        
    </div>
</body>			
</html>