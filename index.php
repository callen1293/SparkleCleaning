<?php

	$msg = "";
	$msgClass = "";


	if(filter_has_var(INPUT_POST,'submit')){


	    $email = htmlspecialchars($_POST['email']);
	    $name = htmlspecialchars($_POST['name']);
	    $message = htmlspecialchars($_POST['message']);


	    if(!empty($email) && !empty($name) && !empty($message)){


	        if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){

	            $msg = 'Please use a valid email';
	            $msgClass = 'alert-danger';

	        } else {

	            $toEmail = 'mail@mail.com';
	            $subject = 'Contact request from '.$name;
	            $body = '<h2>Contact Request</h2
	                       <h4>Name</h4><p>'.$name.'</p>
	                       <h4>Email</h4><p>'.$email.'</p>
	                       <h4>Message</h4><p>'.$message.'</p>
	                      ';


	            $headers = "MIME-Version: 1.0" ."\r\n";
	            $headers .="Contentt-Type:text/html;charset=UTF-8" . "
	            \r\n";


	            $headers .= "From: " .$name. "<".$email.">". "\r\n";

	            if(mail($toEmail, $subject, $body, $headers)){

	                 $msg = 'Your email has been sent!';
	                 $msgClass = 'alert-success';

	            } else {
	                 $msg = 'Your email was not sent';
	                 $msgClass = 'alert-danger';
	            }

	        }

	    } else {

	        $msg = 'Please fil in all fields';
	        $msgClass = 'alert-danger';

	    }

	}


?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparkle House Cleaning | Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Lobster|Ovo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
</head>
<body>

  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
    <a class="navbar-brand">Sparkle House Cleaning</a>
  </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#" id="contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
 </div>

<section id="jumbo">
   <div class="jumbotron">
 <div class="container">
     <h2>A Cleaner Home Starts Here</h2>
     <h4>
       Sparkle House Cleaning will provide a quality and<br /> reliable service to you! let us make your home *SPARKLE*
     </h4>
      <p><a class="btn btn-primary btn-lg btn-success" target="_blank" href="https://m.facebook.com/Sparkle-House-Cleaning-832090060205888/" role="button">Like Us On Facebook!</a></p>
 </div>
</div>
</section>


<section id="grid">
<div class="container">
<div class="services">
  <div class="row">
   <div class="col-lg-12">
     <h1>Services</h1>
   </div>
 </div>
<div class="row">
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-tint"></span>
  <h2>Kitchen</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-tree-conifer"></span>
  <h2>Counters</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-grain"></span>
  <h2>Stovetop</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-leaf"></span>
  <h2>Mop</h2>
</div>
</div>
</div>
</div>
<div class="container">
<div class="services2">
<div class="row">
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-apple"></span>
<h2>Windows</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-star"></span>
<h2>Dusting</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-globe"></span>
<h2>Furniture</h2>
</div>
<div class="col-lg-3 col-xs-3">
  <span class="glyphicon glyphicon-tree-deciduous"></span>
<h2>Pet Hair</h2>
</div>
</div>
<h5>And much more...</h5>
</div>
</div>

<div class="row">
   <div class="col-lg-12">
     <h1>Testimonials</h1>
     <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
       <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5000">
         <!-- Carousel indicators -->
                 <ol class="carousel-indicators">
           <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
           <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
           <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
         </ol>
         <!-- Carousel items -->
         <div class="carousel-inner">
           <div class="active item">
             <blockquote>
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</p>
              <h5>Name, NY</h5>
             </blockquote>
             <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
           </div>
           <div class="item">
             <blockquote>
               <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</p>
               <h5>Name, NY</h5>
             </blockquote>
             <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
           </div>
           <div class="item">
             <blockquote>
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</p>
              <h5>Name, NY</h5>
             </blockquote>
             <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
           </div>
           </div>
          </div>
				</div>
   </div>




 </div>
</div>
</section>


<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <span class="glyphicon glyphicon-envelope"></span>
              <h2>Contact Us</h2>
              <p>Feel free to contact us by filling the contact form or visiting our social network sites like Fackebook</p>
              <div class="row">
                <div class="col-lg-12">
									<?php if($msg != ''): ?>
                 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                  <?php endif; ?>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form" class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="email.doe@example.com" "<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    </div>
                    <div class="form-group ">
                      <label for="message">Your Message</label>
                     <textarea  name="message" class="form-control" placeholder="Description"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Send Message</button>
                  </form>


                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">


                    <li><a target="_blank" href="https://m.facebook.com/Sparkle-House-Cleaning-832090060205888/" class="btn btn-default btn-lg btn-success"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>

                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>

  <footer>
    <p>Sparkle House Cleaning, Copyright &copy; 2017</p>
  </footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
$('#contact').click(function () {
    $('html, body').animate({scrollTop:1000}, 'slow');
    return false;
});

</script>

</body>
</html>
