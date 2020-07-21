<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#register">Register</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<div class="banner">
<img src="Banner.jpg">
</div>
    <div class="admission">
        <h1>ADDMISSION</h1>
        <div class="admissionelements">
            <div class="col-3">
                <h2>DECIDE</h2>
                <p>Choose from our individual and group packages as per your childs mood.</p>
                <div class="decideicon"><p>Individual Prog. (Consult our ed-consultant)</p></div>
                <div class="decideicon"><p>Group Program@Rs2,500/month</p></div>
            </div>
            <div class="col-3">
                <h2>REGISTER</h2>
                <p>Hook a free demo class to have a glimpse of what and how we make your kid future ready.</p>
                <br>
                <div class="registericon"><a href="" style="text-decoration: none";><p><i class="fa fa-hand-pointer-o fa-2x"></i> Click here to get a Free Live Demo!</p></a></div>
            </div>
            <div class="col-3" style="border-right: none";>
                <h2>ENROLL</h2>
                <p>Complete on-boarding with our sales team and get access to our study material.</p><br>
                <div class="registericon"><a href="" style="text-decoration: none";><p><i class="fa fa-phone fa-2x" aria-hidden="true"></i> Call our education consultant at +91-99999999333</p></a></div>
            </div>
        </div>
    </div>
    
    <div class="container">
  <div class="contact" style="text-align:center">
    <h3>Contact Us</h3>
    <p>Want to get in touch, leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="test.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="phone">Contact</label>
        <input type="text" id="phone" name="phone" placeholder="Your email..">
        <input type="submit" value="Submit">
    </form>
    </div>
  </div>
</div>
</body>
    <script src="js/script.js"></script>
</html>
