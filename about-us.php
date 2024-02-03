<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Habesha Tech</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Include your other CSS and JS files as needed -->
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="images/image.png">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><img src="images/image.png" alt=""></a>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="about-us.php">about</a></li>
                <li><a href="pages/services.html">services</a></li>
                <li><a href="pages/portfolio.html">portfolio</a></li>
                <li><a href="#team">team</a></li>
                <li><a href="careers.php">career</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <section id="home" class="home">
      <h1>Bring your Business Online</h1>
      <h2>with Habesha Tech Services</h2>
    <!-- <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div> -->
  </section>

    <section id="about" class="about">
        <h1 class="heading">about us</h1>
        <div class="row">
            <div class="content">
                <h3>We make creativity work for your brand!</h3>
                <p>Ours is a team of creatives that is brainstorming on great ideas,<b> all. the. time.</b><br>
                    With our skills put together, you get an ensemble capable of doing anything and everything your brand needs.</p>
                <a href="#"><button class="btn">Read More</button></a>
            </div>
        </div>
    </section>

 <?php include "includes/footer.php"; ?>
    
  <script type="text/javascript">
	$(document).ready(function(){
		$('#send_data').click(function(){
		    $("#send_data").prop('disabled', true);
		    $("#send_data").html('Loading ...');
			$.post("contact_us.php",
			{
				name: $('#name').val(),
				email: $('#email').val(),
				phone: $('#phone').val(),
				message: $('#message').val()
			},

				function(data){
					$('#response').html(data);
					$("#send_data").html('<i class="fa fa-location-arrow"></i> Send Message');
					$('input[type="text"], input[type="email"], textarea').val('');
					$("#send_data").prop('disabled', false);
				}
			);
		});
	});
</script>
    <script src="https://ahaduvacancy.com/Includes/Script/jquery-3.5.1.slim.min.js"></script>
<script src="https://ahaduvacancy.com/Includes/Script/jquery.min.js"></script>
    <script src="https://ahaduvacancy.com/Includes/Script/jquery-3.5.1.slim.min.js"></script>
<script src="https://ahaduvacancy.com/Includes/Script/jquery.min.js"></script>
    <!-- Include your scripts and additional elements as needed -->
</body>
</html>
