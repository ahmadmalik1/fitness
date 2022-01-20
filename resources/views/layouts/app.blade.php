<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>complete responsive fitness website design tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#" class="logo"><span>BE</span>FIT</a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#courses">courses</a>
            <a href="#pricing">pricing</a>
            <a href="#team">team</a>
            <a href="#blogs">blogs</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->
@yield('header')
@section('content')
@show
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <h3>quick links</h3>
         <a href="#home"> <i class="fas fa-angle-right"></i> home</a>
         <a href="#about"> <i class="fas fa-angle-right"></i> about</a>
         <a href="#courses"> <i class="fas fa-angle-right"></i> courses</a>
         <a href="#pricing"> <i class="fas fa-angle-right"></i> pricing</a>
         <a href="#team"> <i class="fas fa-angle-right"></i> team</a>
         <a href="#blogs"> <i class="fas fa-angle-right"></i> blogs</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe for latest updates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="link-btn">
         </form>
      </div>

   </div>

   <p class="credit"> created by <span>mr. web designer</span> | all rights reserved! </p>

</section>

<!-- footer section ends -->







<!-- custom js file link     -->
<script src="js/script.js"></script>
   
</body>
</html>