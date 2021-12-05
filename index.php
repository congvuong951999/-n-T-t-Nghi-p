<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>King-Store</title>
</head>
<body>
	
	<h1>
		<?php
			spl_autoload_register(function($class){
				include_once 'system/libs/'.$class.'.php';
			});
			include_once 'app/config/config.php';

			$main = new Main();

		?>
	</h1>
	<a href="#" class="to-top">
       <i class="fas fa-level-up-alt"></i>
     </a>
     <script src="public/js/main.js"></script>
     <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000
      });
    </script>
</body>
</html>