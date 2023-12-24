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
    #ques {
        min: height 433px;
    }
    </style>
</head>

<body>

    <?php  include 'partials/_header.php' ?>
    <?php  include 'partials/_dbconncet.php' ?>


    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>
    <?php

$method = $_SERVER['REQUEST_METHOD'];

print_r($method);
if ($method == 'POST') {

    if (isset($_POST['title'])) {
        $th_title = mysqli_real_escape_string($conn, $_POST['title']);
    } else {
        $th_title = '';
    }
    
    if (isset($_POST['desc'])) {
        $th_desc = mysqli_real_escape_string($conn, $_POST['desc']);
    } else {
        $th_desc = '';
    }
    if (isset($_GET['catid'])) {
        $id = mysqli_real_escape_string($conn, $_GET['catid']);
    } else {
        $id = '';
    }
    
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `datetime`) VALUES ('$th_title', '$th_desc', '$id', '0', CURRENT_TIMESTAMP())"; 
    
    $result = mysqli_query($conn, $sql);
    
    if (!$result){
        die ("Query error: " . mysqli_error($conn));
    }
}

?>




    <!-- categories container here   -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php  echo $catname?> forum </h1>
            <p class="lead"><?php  echo $catdesc?>
            </p>
            <hr class="my-4 margin-top">
            <p>this is perr to perr forum to share knowledge to each other.
                Keep it friendly.
                Be courteous and respectful. Appreciate that others may have an opinion different from yours.
                Stay on topic. ...
                Share your knowledge. ...
                Refrain from demeaning, discriminatory, or harassing behaviour and speech.
            </p>
            <a class=" btn  btn-outline-danger btn-lg " role="button" href="#">learn more </a>
        </div>


    </div>
    </div>
    <div class="container">
        <h1 class="py-2">Start a Discussion</h1>
        <form action=" <?php echo $_SERVER["REQUEST_URI"] ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">thread title </label>
                <input type="text " class="form-control" id="title" name="title " aria-describedby="emailHelp">
                <div id="text" class="form-text">keep your title as and crips short as possilble </div>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Write your concerns </label>
                <textarea class="form-control" id="desc" name="dec" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-danger">Submit</button>
        </form>

    </div>
    <div class="container" id="ques">

        <?php
        $id=$title=$desc='';
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id =$row['thread_id']; 
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
        }
        echo   
        '<div class="d-flex my-3">
        <div class="flex-shrink-0">
            <img src="img/user.jpg" width="70" class="mr-3" alt="...">
        </div>
        <div class="media-body">
            <h5 class="mt-0"><a class="text-dark" href="thread.php?thread_id='.$id.'">'.$title.'</a></h5>
            '.$desc.'
        </div>
        </div>';
        
        if($noResult){
            echo '<div class="jumbotron">
            <p>NO Threads found </p>
            <p >BE  the first person  add the question on this thread</p>
          </div>';
        }
        
   
    ?>






        <!-- USE THIS FOR DEMO USES -->
        <!-- <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="img/user.jpg" width="70" class="mr-3" alt="...">
            <div class="flex-grow-1 ms-3">
                <h5 class="media-boy">unable to download pyaudio</h5>
                Windows. python -m pip install pyaudio. ...
                macOS. Use Homebrew to install the prerequisite portaudio library, then install PyAudio using pip : brew
                install portaudio pip install pyaudio.
                GNU/Linux. Use the package manager to install PyAudio. ...
                Building from source. See the INSTALLATION file.

            </div>
        </div> -->






    </div>


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