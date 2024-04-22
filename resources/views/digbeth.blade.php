<!DOCTYPE html>
@extends('layouts.header')
@section('body')


<html>
   <head>
       <meta charset="utf-8">
       <title>city centre</title>
       <link rel="stylesheet" href="{{ asset('css/city.css') }}">
       
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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

   <h1 class="heading">Digbeth</h1>
   <section class="area-container">
      <section class="flexwrap standard">
        <div class="area-column">
          <img src="\images\digbeth1.png">
          <div class="area-column">
            <div>
               <h2>Population:</h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        
      </section>
    
      <section class="flexwrap standard">
        <div class="area-column">
          <div>
            <h2>Food:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="area-column">
            <img src="\images\digbeth1.png">
          </div>
        </div>
        
      </section>
    
      <section class="flexwrap standard">
         <div class="area-column">
           <img src="\images\digbeth1.png">
           <div class="area-column">
             <div>
               <h2>Culture:</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </div>
           </div>
         </div>
         
       </section>
    
      <section class="flexwrap standard">
         <div class="area-column">
           <div>
             <h2>Nightlife:</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
           <div class="area-column">
             <img src="\images\digbeth1.png">
           </div>
         </div>
         
       </section>
    </section>
    <section class="review">
      

      <div class="review-wrapper">
         <h3>Leave a review of this area below:</h3>
         <form action="#">
            <div class="review-rating">
               <input type="number" name="rating" hidden>
               <i class='bx bx-star star' style="--i: 0;"></i>
               <i class='bx bx-star star' style="--i: 1;"></i>
               <i class='bx bx-star star' style="--i: 2;"></i>
               <i class='bx bx-star star' style="--i: 3;"></i>
               <i class='bx bx-star star' style="--i: 4;"></i>
            </div>
            <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..." class="review-textarea"></textarea>
            <div class="review-btn-group">
               <button type="submit" class="btn submit">Submit</button>
               <button class="btn cancel">Cancel</button>
            </div>
         </form>
      </div>
    
    </section>
    <script src="{{ asset('resources\js\pages\review.js') }}"></script>

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

