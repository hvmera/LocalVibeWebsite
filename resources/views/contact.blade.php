<!DOCTYPE html>
@extends('layouts.header')
@section('body')


<html>
   <head>
       <meta charset="utf-8">
       <title>Contact Us</title>
       <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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


   <h1 class="heading">Contact Page</h1>

<div class="middle">
  <div class="contact">
		<div class="contact-box">
			<div class="left">
        <img class="image" src="\images\contact.png" alt=contact>
      </div>
			<div class="right">
				<h2>If you have any queries, please complete the form below:</h2>
        <br>
        <br>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn">Send</button>
			</div>
		</div>
	</div>

</div>

    <div class="info">
           <h5 class="heading">Social Media:</h4>
     
            <div class="wrapper">
              <div class="button">
                 <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                 </div>
                 <span>Facebook</span>
              </div>
              <div class="button">
                 <div class="icon">
                    <i class="fab fa-twitter"></i>
                 </div>
                 <span>Twitter</span>
              </div>
              <div class="button">
                 <div class="icon">
                    <i class="fab fa-instagram"></i>
                 </div>
                 <span>Instagram</span>
              </div>
              <div class="button">
                 <div class="icon">
                    <i class="fab fa-youtube"></i>
                 </div>
                 <span>YouTube</span>
              </div>
           </div>
       </div>
       
   </div>
   <br>
   <br>
   
</div>

   </div>
</section>
<hr>

@include ('layouts.footer')
</body>
</html>
<!-- about section ends -->

<!-- footer section starts-->




<!-- footer section ends -->









</html>
@endsection

