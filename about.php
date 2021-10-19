<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  * {margin: 0; padding: 0; box-sizing: border-box; }
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .aboutimg 
  width: 100%;
  height: 150px!important;
  }
  </style>
    
    <style> 
body {
  background-image: url('IMMUNNI/b1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

<style>

/* Style the header */
header {
  background-color: #DDE3E3;
  padding: 2px;
  text-align: center;
  font-size: 2px;
  color: white;
}

/* Style the footer */
footer {
  background-color: #666666;
  padding: 5px;
  text-align: center;
  color: white;
}
</style>
</head>

<body>

<header>
<h6><a href="tel:917045150153">🕿 +91-7045150153</a></h6>
</header>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><h4>Mila Carpenter</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>    
    </ul>
    <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Search</button>
      </form>
  </div>  
</nav>
              


<section class="row-2">
  <div class="py-2">
 <h2 class="text-center"><span style="color:#ffffff"><p style="font-size:29px">About us</p></span></h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="IMMUNNI/a1.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12"><h2 class="display"> furniture carpenter</h2>
       <p class="py-0"><h4><span style="color:#ffffff">Trusted carpenters in Mumbai will always work like consultants before they begin any work. You can have a healthy discussion with them & can share your thoughts, they will add their expertise to ensure you have unique furniture being built based on your ideas. Making new furniture in Mumbai is common as the atmosphere is humid. This causes the furniture to decay faster due to high moisture content in the air. Carpenters in Mumbai always suggest giving multiple wood protection coats along with Formica for furniture to last long. Formica lamination sheets come in various designs that can add beauty to your rooms. The right designs enhance the look of the interiors & professional carpenters ensure they give their best for such work.</span></h4></p>
         <a href="about.php" class="btn btn-secondary">check more</a>
    </div>
  </div>
</div>  
</section>

<section class="my-2">
  <div class="py-2">
    <h2 class="text-center"><span style="color:#ffffff"><p style="font-size:29px">Our Gallery</p></span></h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g0.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g2.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g3.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g4.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g5.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g6.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g7.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
      <img src="IMMUNNI/g8.jpg" class="img-fluid pb-4">
</div>
</div>
</div>

<section class="my-2">
  <div class="py-2">
    <h2 class="text-center"><span style="color:#ffffff"><p style="font-size:29px">Contact Us</p></span></h2>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="POST">
    <div class="form-group">
    <section class="my-2">
  <div class="py-2">
<img src="IMMUNNI/up.jpg" alt="Paris" style="width:100%;">
</div>
</section>
      <label><h4>username</h4></label>
       <input type="text" name="user" autocomplete="off"
       class="form-control">  
</div>
<div class="form-group">
      <label><h4>email</h4></label>
       <input type="text" name="email" autocomplete="off"
       class="form-control">  
</div>
<div class="form-group">
      <label><h4>mobile</h4></label>
       <input type="text" name="mobile" autocomplete="off"
       class="form-control">  
</div>

<div class="form-group">
      <label><h4>comments</h4></label>
       <textarea class="form-control" name="comment"></textarea>  
</div>

<button type="submit" class="btn btn-secondary">submit</button>
</form>
</div>
</section>
              

</section>
<footer> 
  <h2 py-100 class="text-center"><span style="color:#ffffff"><p style="font-size:19px"> @mila carpenter</p></span></h2>
</footer>
</body>
</html>