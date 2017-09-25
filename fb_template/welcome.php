
<!DOCTYPE html>
<html>
<head>
	<title><?=$hotel_name?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Sign up with WiFi4Free" />
	<link href="/css/fb/mob.css" rel="stylesheet" type="text/css" media="all" />


	<script type="application/javascript" src="../js/jquery.min.js"></script>
	<script type="application/javascript" src="../js/script.js"></script>



</head>
<body>

<!--FB SDK-->
<!-- main -->
<style type="text/css">
	body {
		background-color: <?php echo $GLOBALS['bg_color']; ?>;
	}


	.fancy {
		line-height: 0.5;
		text-align: center;
		color: <?php echo $GLOBALS['font_color_2']?>;
	}

	.fancy span:before,
	.fancy span:after {
		content: "";
		position: absolute;
		height: 5px;

		border-top: 1px solid <?php echo $GLOBALS['font_color_2']?>;
		top: 5px;
		width: 50%;
	}
    .logo-image img{

        margin-top:0;
    }
    .heading{

        margin-bottom: 0;
    }
    .logo-image{

        margin-bottom:10% !important;
    }

    .image-browser-logo{

        width: 19%;
        float: left;
        margin: 0 3% 0 3%;

    }

</style>
<h1> TEST </h1>
<div class="contact-wthree">
    <h2 style="text-align: center" class="terms-text">Terms & conditions</h2>
    <h3 class="terms-text">Open your browser for free wifi</h3>
    <div class="close-button terms-text" alt="close">  </div>
    <div class="fokus">
	<a href="#"><p class="terms"> Term </p></a>

	<!--			<div class="form-w3step1">-->
	<!--				<div class="social-wrap c">-->
	<!--					<button class="facebook">Connect using Facebook</button>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		<form action="#" method="post">-->
	<!--			<p class="subtitle fancy"><span>Or use your email</span></p>-->
	<!--			<div class="form-w3step1">-->
	<!---->
	<!--				<input type="email" class="email agileits-btm email-special" name="Email" placeholder="Your email address here">-->
	<!--				<button class="butt"> > </button>-->
	<!--			</div>-->
	<!--		</form>-->


		<h1 class="heading" style='color: <?php echo $GLOBALS['font_color_1'];?>;
				font-size: calc(<?php echo $GLOBALS['font_size_1'];?>px * 2.0833333) !important;' > Open your browser for free WiFi </h1>


			<div class="form-w3step1" >
				<div class="social-wrap c">

				</div>
			</div>



        <div class="form-w3step1 logo-image">
            <img src="images/<?php echo $GLOBALS['image']; ?>">
        </div>


		<p class="subtitle fancy"><span>Use your favorite browser</span></p>

        <button id="close"> Close this window </button>






</div>


<!-- //main -->

</body>
<script type="application/javascript">

    $(".terms").on("click", function(){
        $(".fokus").hide();
        $(".terms-text").show();
        return false;
    });


    $("#close").on("click", function(){

        window.location.href  = 'connectivitycheck.android.com?key=1'

        return true;
    });

    $(".close-button").on("click", function(){
        $(".fokus").show();
        $(".terms-text").hide();
        return false;
    });

    $('a').on('click.open', function(e) { e.preventDefault();

        window.open('http://login.com/index.php?clientmac=<?php echo $macaddress ?>&welcome=true', '_blank', 'location=yes');
     });


</script>

</html>