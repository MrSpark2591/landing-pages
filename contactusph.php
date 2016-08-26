<?php 
    session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9kyk0WlgjNTdZYVWUkosIN-OGASnCo8k"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-83023459-1', 'auto');
 ga('send', 'pageview');

</script>
        
    </head>
    <body>
    <a href="index.php">
        <div class="left-div2">
            <div class="col-md-12 side-menu home2">
                <div class="icon-side-menu">
                    <img src="img/Untitled-1.png" height="28px" width="28px" alt="peoplehum">
                    <div>
                    peoplehum
                    </div>
                </div>
                    
            </div></a>
            <a href="aboutusph.php">
            <div class="col-md-12 side-menu about2">
                <div class="icon-side-menu">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div>
                    About
                </div>
            </div></a>
            <a href="contactusph.php">
            <div class="col-md-12 side-menu contact2">
                <div class="icon-side-menu">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                </div>
                <div>
                    Contact
                </div>
            </div></a>
            <a href="https://humabout.wordpress.com" target="_blank">
            <div class="col-md-12 side-menu facebook2">
                <div class="icon-side-menu">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    
                </div>
                <div>
                    Blog
                </div>
            </div></a>
            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">
            <div class="col-md-12 side-menu twitter2">
                <div class="icon-side-menu">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    
                </div>
                <div>
                    Subscribe
                </div>
            </div></a>
            <!--<a href="https://www.linkedin.com/company/peoplehum" target="_blank">
            <div class="col-md-12 side-menu linkedin2">
                <div class="icon-side-menu">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </div>
                <div>
                    Linkedn
                </div>
            </div></a>-->
        </div>
        <div class="right-div2">
            <div class="contact-us-container">

                <h2 class="text-center" style="margin-top:-10px;">Contact us</h2>
                
                <div class="row" style="margin-top:20px;">
         
         <div class="col-md-8">
             <div id="map" style="width:100%;height:550px;"></div>
         </div>
         <div class="text-center col-md-4">
                <p style="font-size:16px;text-align:left;margin-top:30px;">
                Email us with any questions or inquiries. We would be happy to answer your questions.
                </p>
                </div>

         <!--<div style="width:150px;height:100px;margin-top:100px;float:left;">-->
        <form class="col-md-4 form-horizontal" style="margin-left:15px;width:320px;margin-top:30px;" action="submit.php" method="post">
            <div class="form-group">
                <h5>Email</h5>
                <input type="email" class="form-control" id="inputEmail3" name="u_email" placeholder="Email" required>
             </div>
             <div class="form-group">
                 <h5>Message</h5>
                 <textarea id="inputmessage" class="form-control" rows="5" name= "u_message" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                 <button type="submit" class="btn btn-default">Submit</button>
            </div>
    </div>
  </form>
  <?php if(isset($_SESSION["message"])) { ?>
    <P class="alert alert-success"> 
    <?php echo $_SESSION["message"]; 

    unset($_SESSION["message"]);
     ?>
    </P>
<?php } ?>
  </div>
  </div>
        
        </div>
        <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog" style="height:400px;width:400px;margin-top:20%">


                <div class="modal-content">
                   
               <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
          <form role="form" action="subscribe.php" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="subscribe_email">
            <input type="text" value="contactusph.php" name="page_name" style="display:none;">
            </div>
             <button type="submit" class="btn btn-default">Subscribe</button>
            </form>
           </div>
           </div>
        </div>
        </div>
        
        </div>
<script>
var mapCanvas = document.getElementById("map");
var map = new google.maps.Map(mapCanvas, {
          center: {lat: 12.9173615, lng: 77.6466518},
          zoom: 10
});

var marker = new google.maps.Marker({
    position: {lat: 12.9173615, lng: 77.6466518},
    map: map,
    title: 'PeopleHum'
  });

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/02fcbc4f27.js"></script>
    <script src="js/main.js"></script>
    <script>
        function myFunction() {
            window.open('https://humabout.wordpress.com'); 
        }
    </script>

</body>
</html>