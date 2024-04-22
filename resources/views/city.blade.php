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

   <h1 class="heading">City Centre</h1>
   <section class="area-container">
      <section class="flexwrap standard">
        <div class="area-column">
          <img src="\images\city1.png">
          <div class="area-column">
            <div>
               <h2>Population:</h2>
              <p> Birmingham is a great place to live and work and our city has the youngest population in the continent, with under-25s accounting for nearly 40% of our population.</p>
            </div>
          </div>
        </div>
        
      </section>
    
      <section class="flexwrap standard">
        <div class="area-column">
          <div>
            <h2>Food:</h2>
            <p>Birmingham city centre is a foodies’ paradise, boasting over 300 restaurants bringing cuisines from over 27 countries – testament to Birmingham’s multiculturalism.</p>
          </div>
          <div class="area-column">
            <img src="\images\city2.png">
          </div>
        </div>
        
      </section>
    
      <section class="flexwrap standard">
         <div class="area-column">
           <img src="\images\city3.png">
           <div class="area-column">
             <div>
               <h2>Culture:</h2>
               <p>The multicultural city centre attracts those in need of retail therapy from far and wide. Boasting the world’s largest Primark, Selfridges, the Bullring Shopping Centre and even a historic Rag Market, there is truly something for everyone in the city centre.</p>
             </div>
           </div>
         </div>
         
       </section>
    
      <section class="flexwrap standard">
         <div class="area-column">
           <div>
             <h2>Nightlife:</h2>
             <p>Broad Street is home to many nightclubs that will allow you to dance the night and most of the early morning away while making marvellous memories with your friends, to the sound of tunes from your favourite DJs.</p>
           </div>
           <div class="area-column">
             <img src="\images\city4.png">
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

