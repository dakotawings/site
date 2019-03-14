<!-- Contact Form END -->	
					<?php
    					// editable vars
                        $to       = 'eshan@softlinesolutions.com';
                        $subject = 'Service has been requested from your website !';
                        $headers  = 'From: info@dakotawingsjet.com'. "\r\n" .  'Reply-To: '. $_POST["Email"] ;
                        
                        if(empty($_POST['Name'])){
                            header("Location: /ppc-landing/?error=1"); 
                        }
                        
                        if(empty($_POST['PhoneNumber'])){
                            header("Location: /ppc-landing/?error=1"); 
                        }
                        
                        if(empty($_POST['Email'])){
                            header("Location: /ppc-landing/?error=1"); 
                        }
                        // do not edit
                        $date = date("l, F jS, Y"); // Friday, December 25th, 2009
                        $msg  = 'Below is the result of your consultation form. It was submitted on ' . $date . ".\n\n";
                        
                        // get all message
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        	foreach ($_POST as $key => $value) {
                        		if (is_array($value)) {
                        			$msg .= ucfirst($key) . ": \n";
                        			foreach ($value as $item){
                        				$msg .= "     " . $item . "\n";
                        			}
                        		}
                        		else {
                        			$msg .= ucfirst($key) . ' : ' . $value . "\n";
                        		}
                        	}
                        	if(mail($to, $subject, $msg, $headers)){
                        	    
                        	}else{
                        	    header("Location: /ppc-landing/?error=1"); 
                        	}
                        }

					?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta name="robots" content="noindex, nofollow">
    <title>Dakota</title>
    <!-- Bootstrap -->
    <link href="/ppc/css/bootstrap.min.css" rel="stylesheet">
	<link href="/ppc/css/style.css" rel="stylesheet">
	<link href="/ppc/css/responsive.css" rel="stylesheet">
	<link href="/ppc/css/ionicons.min.css" rel="stylesheet">
	<link href="/ppc/css/animate.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Poppins:100,200,300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

<div class="main_wrapper">

<!-- ====================Header =====================-->
<header class="navbar navbar-static-top header" id="top" role="slider">
	<div class="container">
	<div class="navbar-header">
	<a href="" class="navbar-brand"><img  src="/ppc/images/logo.png" alt=""></a>
	</div>	
	
	<div class="call-us"><i class="ion-android-call"></i>Call Us! <a href="tel:605-299-2204">605-299-2204</a>	
	</div>
	</div>
</header>
<!-- ====================Header END here =====================-->

<!-- ====================Hero =====================-->

<section class="hero" style="background:url('/ppc/images/hero.jpg')">
        <div class="container">		 
		<div class="row">
		     <div class="col-md-12 wow fadeIn" style="height: 70vh;">	
			  <div class="hero-intro">
			   <h1 class="text-left text-uppercase"><span style="display: block;">Thank You</span><strong>A specialist will be in touch soon!</strong></h1>
			   
		     </div>	
			 
			 </div>	
		
	
				
			 
			
			 
			 
			 
			 
			 
		</div>
		
   </div><!----- / Container ---->
</section>


<div class="copyright">&copy; 2019 Dakota Wings |  All Rights Reserved</div>


  
  </div><!------ ===========  main_wrapper Close  ==========------>
  
  
  
  
  
  
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ppc/js/bootstrap.min.js"></script>
    <script src="/ppc/js/wow.min.js"></script>
    <script>
	wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: !0,
    live: !0
}), wow.init();
	
	</script>
	
  </body>
</html>
