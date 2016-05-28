    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/home.css">
</head>	
<body> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/common_script.js"></script>
    <header id="header">  
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/images/header/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>    
    <div class="container">
        <section id="cover">
            <div class="col-sm-4">
                <?php echo anchor('Pages/index/', 'HOME', 'class="col-sm-8 nav-property"') ?>              
            </div>
            <div class="col-sm-8">
                
            </div>
        </section>
    </div>
</body>			
</html>