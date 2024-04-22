<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css\header.css">

</head>
<header>

<div class="container">
   <div class="left-header">
       <img class="logoImage" src="\images\logo1.png" alt=logo>
      
   </div>


   @guest

   <div class="right-header">
    <a href="/">Home</a>
       <a href="/forum">Forum</a>
       <a href="/about">About Us</a>
       <a href="/contact">Contact Us</a>
       <a href="/register">Register</a>
       <a href="/login">Login</a>
   </div>

   @endguest

   @auth

   <div class="right-header">

       <form action="/signout" method="post">
           @csrf
           <a>{{auth()->user()->name}}</a>
           <button type="submit">Sign Out</button>
       </form>
   </div>

   @endauth

</div>

</header>
<body>
   @yield('body')
</body>

</html>