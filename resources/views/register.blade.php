<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Teste</title>
</head>
<body>
    <div class="container-fluid ">
    <header class="row ">
        
    <div class="col "><h1><a href="index.html"><img src="img/header.png" height="80" width="150"> </a></h1></div>
    </header>
<nav class="navbar navbar-expand-md navbar-dark bg-primary bg-gradient ">
  <a class="navbar-brand" href=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link "btn btn-outline-light btn-floating m-1"  href="index.php?page=content">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Voluntários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Instituições</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nós</a>
      </li>
    
    </ul>
  </div>
</nav>


<article >
<div class="row">
<form action="" method="post">

<label for="nome">Nome</label>
<input type="text" class="" id="nome">

<label for="email">Email</label>
<input type="text"  class="" id="email">

<label for="password">Password</label>
<input type="number"  class="" id="password">

<label for="cc">nº Cartão de Cidadão</label>
<input type="number"  class="" id="cc">

<label for="Cconducao">nº Carta de Condução</label>
<input type="number"  class="" id="Cconducao">

<label for="dob">Data de Nascimento</label>
<input type="date" class="" id="dob">


<label for="gen">Género</label>
<label for="mas">Masculino</label>
<input type="radio" name="gen" class="" id="mas" value="masculino">
<label for="fem">Feminino</label>
<input type="radio" name="gen" class="" id="fem" value="feminino" >
<label for="out">Outro</label>
<input type="radio" name="gen" class="" id="out" value="outro" >


<select name="concelho">

</select>

<select name="freguesia">
    <?php


       ?>
</select>


</form>



</div>






</article>
<footer class="page-footer font-small bg-primary bg-gradient pt-4 mt-5">

<!-- Grid container -->
<div class="container p-4">
<!-- Section: Social media -->
<section class="mb-4">
 <!-- Facebook -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa fa-facebook-f"></i
 ></a>

 <!-- Twitter -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa fa-twitter"></i
 ></a>

 <!-- Google -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa-google fa "></i
 ></a>

 <!-- Instagram -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa fa-instagram"></i
 ></a>

 <!-- Linkedin -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa fa-linkedin"></i
 ></a>

 <!-- Github -->
 <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
   ><i class="fab fa fa-github"></i
 ></a>
</section>
<!-- Section: Social media -->

<!-- Section: Form -->
<section class="">
 <form action="">
   <!--Grid row-->
   <div class="row d-flex justify-content-center">
     <!--Grid column-->
     <div class="col-auto">
       <p class="pt-2">
         <strong>Sign up for our newsletter</strong>
       </p>
     </div>
     <!--Grid column-->

     <!--Grid column-->
     <div class="col-md-5 col-12">
       <!-- Email input -->
       <div class="form-outline form-white mb-4">
         <input type="email" id="form5Example21" class="form-control" />
         <label class="form-label" for="form5Example21">Email address</label>
       </div>
     </div>
     <!--Grid column-->

     <!--Grid column-->
     <div class="col-auto">
       <!-- Submit button -->
       <button type="submit" class="btn btn-outline-light mb-4">
         Subscribe
       </button>
     </div>
     <!--Grid column-->
   </div>
   <!--Grid row-->
 </form>
</section>
<!-- Section: Form -->

<!-- Section: Text -->
<section class="mb-4">
 <p>



 </p>
</section>
<!-- Section: Text -->

<!-- Section: Links -->
<section class="">
 <!--Grid row-->
 <div class="row">
   <!--Grid column-->
   <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
     <h5 class="text-uppercase">Links</h5>

     <ul class="list-unstyled mb-0">
       <li>
         <a href="#!" class="text-white">Link 1</a>
       </li>
     </ul>
   </div>
   <!--Grid column-->

   <!--Grid column-->
   <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
     <h5 class="text-uppercase">Links</h5>

     <ul class="list-unstyled mb-0">
       <li>
         <a href="#!" class="text-white">Link 1</a>
       </li>

     </ul>
   </div>
   <!--Grid column-->

   <!--Grid column-->
   <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
     <h5 class="text-uppercase">Links</h5>

     <ul class="list-unstyled mb-0">
       <li>
         <a href="#!" class="text-white">Link 1</a>
       </li>
     </ul>
   </div>
   <!--Grid column-->

   <!--Grid column-->
   <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
     <h5 class="text-uppercase">Links</h5>

     <ul class="list-unstyled mb-0">
       <li>
         <a href="#!" class="text-white">Link 1</a>
       </li>
     </ul>
   </div>
   <!--Grid column-->
 </div>
 <!--Grid row-->
</section>
<!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">


</div>
<!-- Copyright -->
</footer>
<!-- Footer -->


</body>
</html>
 
