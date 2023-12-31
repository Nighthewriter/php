<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
        #ques{
            min-height: 233px;
        }
    </style>
   
</head>

<body>

    <?php  include 'partials/_header.php' ?>
    <?php  include 'partials/_dbconncet.php' ?>

    <!-- slider -->
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x700/?apple,code" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?macbook,coding" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?programing,apple" class="d-block w-100" alt="image ">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- categories start form here  -->
    <div class="container my-5" $id="ques" >
        <h2 class="text-center my-4">idiscuss - Browse categories</h2>
    </div>
    <!-- fetch all the categories -->

    <div class="row my-4" id="ques">

        
        <?php
     $sql = "SELECT * FROM `categories`"; 
     $result = mysqli_query($conn,$sql);
     while ($row = mysqli_fetch_assoc($result)) {
         
         // echo $row['category_id'];
         // echo $row['category_name'];
         $id = $row['category_id'];
         $cat = $row['category_name'];
         $desc = $row['category_description'];
        echo ' 
        <div class="col-sm-4 py-3 py-sm-0 my-2">
        <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900?'.  $cat .',coding  python" class="card-img-top"
                    alt="...">
                <div class="card-body">
                <h5 class="card-title"> <a href="threads.php?catid='. $id .' ">'. $cat .'</a></h5>
                <p class="card-text">'. substr($desc,0,90) .'... </p>
                    <a href="threads.php?catid='. $id .' " class="btn btn-primary">Read more...</a>
                </div>
            </div>
        </div>
     ';
}

?>
</div>

    <!-- categories container here   -->
   
    <!-- use a of for loop to iterate through categories -->




        <?php  include 'partials/_footer.php' ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>