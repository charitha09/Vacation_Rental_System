<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('templates/common_style_tags.php'); ?>    
</head>	
<body> 
    <?php $this->load->view('templates/common_script_tags.php'); ?>
    <?php $this->load->view('templates/header.php'); ?> 
    <div class="container">
        <?php $this->load->view('templates/cover.php'); ?>        
    </div>
    <?php $this->load->view('templates/footer.php'); ?>
</body>			
</html>