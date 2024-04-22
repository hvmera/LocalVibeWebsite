<!DOCTYPE html>
@extends('layouts.header')
@section('body')


<html>
   <head>
       <meta charset="utf-8">
       <title>About Us</title>
       <link rel="stylesheet" href="{{ asset('css/digeth.css') }}">
   </head>

   <style media="screen">
.background {
  background-color: #FFFAF2;
}
</style>



<!-- header section starts
<header>
 


</header>
header section ends -->


<hr>
<!-- about section starts  -->

<body class="background">
<section class="about" id="about">


   <h1 class="heading">About Us </h1>

    <div class="info">
           <h3>Who we are</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <div class="center">
                <a href="/contact" class="btn">Contact us</a>
             </div>
           <br>
           <br>
           <h4 class="heading"> The Team:</h4>
           
          <div class="profile">
            <p>Humera Muhammad</p>
            <p>200060828@aston.ac.uk</p>
            <p>
             I'm a final year Computer Science student studying at Aston University and this is my dissertation.</p>
          </div>
      
   </div>
       <div class="info">
           <h5 class="heading">Our mission:</h4>




           <p>The main aim of this project was to create an application to help people pick the right neighbourhood when looking for a place to rent or buy. I believe that a lot of the existing applications 
            that assist users with house hunting throw a lot of information and statistics at them. However, there’s no application that allows the use to communicate with the neighbours/community
             of where they’re looking to move into beforehand. </p>
            
            <p>We’d like to support you guys and make sure you’re well equipped and comfortable with the decision you end up making. </p>
       </div>
       </div>
   </div>
   <br>
   <br>
</section>
</body>
</html>
<!-- about section ends -->

<!-- footer section starts-->




<!-- footer section ends -->






<div>
<hr>
@include ('layouts.footer')
</div>
</html>
@endsection

