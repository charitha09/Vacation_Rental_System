<header id="header">  
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/images/header/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<?php
						$navitems = array("HOME","ABOUT THE PROPERTY","GALLERY","LOCATION","RATES & RESERVATION","CONTACT US");
						foreach ($navitems as & $items){
							$itema = explode(" ",strtolower($items));
							if( $items == "HOME"){
								if($itema[0] == $pgname){
									$class = 'class="active"';
								}else{
									$class = 'class=""';
								}
								echo "<li $class>" . anchor('Pages/index/', 'HOME') . "</li>";
							}else{
								if($itema[0] == $pgname){
									$class = 'class="active"';
								}else{
									$class = 'class=""';
								}
								echo "<li $class>" . anchor('Pages/'.$itema[0], $items) . "</li>";
							}
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header> 