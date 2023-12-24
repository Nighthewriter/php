<?php
 echo  '<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
 <div class="container-fluid">
   <a class="navbar-brand" href="index.php">iDiscuss</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="#">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="about.php">about</a>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="about.php">contact</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           categories
         </a>
         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           <li><a class="dropdown-item" href="#">Action</a></li>
           <li><a class="dropdown-item" href="#">Another action</a></li>
           <li><hr class="dropd
       <li class="nav-item"> 
         <a class="nav-link" href="#" tabindex="-1" >Contacts</a>
       </li></li>
           <li><a class="dropdown-item" href="#"></a></li>
         </ul>
       </li>
     </ul>
     
     <div class="row mx-2">
     
        <form class="d-flex" role="search">
        <input class="form-control  mx-2 me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
          </form>
      </div>
       
     <div>
       <button class="btn btn-outline-danger btn-m mx-0" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>

       <button class="btn btn-outline-danger btn-m mx-0" data-bs-toggle="modal" data-bs-target="#singupModal">SINGUP</button>
       
     </div>
     
   </div>
 </div>
</nav>';



include 'partials/_logingModal.php';
include 'partials/_singupModal.php';
            

?>