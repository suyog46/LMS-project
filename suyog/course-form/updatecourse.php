<?php
include 'connect.php';


if (isset($_POST['submit'])) {
    $id=$_POST['cid'];
    $title = $_POST['title'];
    $description = $_POST['des'];
    $price = $_POST['price'];
$duration= $_POST['cd'];
$courselevel= $_POST['cl'];
$language=$_POST['language'];
$about= $_POST['ay'];
$detaildes= $_POST['detaildes'];
$who= $_POST['who'];

    if (isset($_FILES["cimage"]) && $_FILES["cimage"]["error"] == 0 && isset($_FILES['cvideo'])) {
        // print_r($_FILES["cimage"]["error"]);
        $image = $_FILES["cimage"]["tmp_name"];
        $imageBinary = base64_encode(file_get_contents($image));
        $video = $_FILES['cvideo'];
        $allowedTypes = ['video/mp4', 'video/webm', 'video/ogg'];
        if (!in_array($video['type'], $allowedTypes)) {
            die('Invalid video format.');
        }
        $videocontent = base64_encode(file_get_contents($video['tmp_name']));
        session_start();
        $uid= $_SESSION["loginid"];
       $sql="UPDATE courses
       SET
         title = '$title',
         description = '$description',
         price = '$price',
         image = '$imageBinary',
         overview = '$videocontent',
         duration = '$duration',
         courselevel = '$courselevel',
         language = '$language',
         aboutyourself = '$about',
         detaildescription = '$detaildes',
         targetaudience = '$who'
       WHERE course_id = '$id';
       ";
        $result = mysqli_query($con, $sql);        
        if ($result) {
            header("location:../Courses/outercourse.php?id=".$_SESSION['loginid'] ." ");
            echo "successfull update";
        } else {
            echo 'Unsuccessful update: ';
        }
    } else {
        echo 'Error uploading file.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
</head>

<body>
    <?php
 if (isset($_GET['id'])){
  
    $id=$_GET['id'];

        $sql = "SELECT * FROM courses where course_id='$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
         
            <div class="container shadow mt-5 pt-5 ">
            <div class="">
           
            <h1 class="card-title">EDIT PAGE</h1>
            
        <br><br>
        
            <div class="card-body
            ">
            <form action=" '.$_SERVER["PHP_SELF"] .'" method="POST" enctype="multipart/form-data" >
                <label for="title">Title</label><br>
                <input type="text" name="title" id="Title" value=" '.$row["title"].'" class="form-control"  required>
    
                <br><br>
                <label for="des">Description</label><br>
                <textarea id="des" name="des" rows="4" cols="40"  placeholder="'.$row["description"].'" class="form-control" ></textarea>
    
                <br><br>
                <label for="detaildes">Give the detail description</label><br>
                <textarea id="detaildes" name="detaildes" rows="8" cols="40" placeholder=" '.$row["detaildescription"].'" class="form-control"></textarea>
                   
                            <br><br>
    
                <label for="cprice">Price</label><br>
                <input type="number" name="price" id="cprice"  placeholder="'.$row["price"].'" class="form-control">
    
                <br><br>
    
                <label for="cd">Duration</label><br>
                <input type="number" name="cd" id="cd"  placeholder="'.$row["duration"].' " class="form-control">
    
                <br><br>
    
                <label for="">Course level</label><br>
                <label for="bg">Beginner</label>
                <input type="radio" name="cl" id="bg" value="Beginner">
                <label for="im">Intermediate</label>
                <input type="radio" name="cl" id="im" value="Intermediate">
                <label for="pr">Professional</label>
                <input type="radio" name="cl" id="pr" value="Professional">
    
                <br><br>
                <label for="lg"> Course Language :</label>
                <select id="lg" name="language" class="form-select">
                    <option value="English">English</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Hindi">Hindi</option>
                </select>
                <br><br>
                <label for="cimage">cover image</label><br>
                <input type="file" name="cimage" id="cimage" value="'.$row["image"].'" class="form-control">
                <br><br>
                <label for="cvideo">insert a overview video</label><br>
                <input type="file" name="cvideo" id="cvideo" '.$row["duration"].' class="form-control">
                <br><br>
                <label for="who">Describe about the targeted audience</label><br>
                            <textarea id="who" name="who" rows="8" cols="40" placeholder="'.$row["targetaudience"].'" class="form-control"></textarea>
                <br>
                <br>
                <label for="ay">About yourself</label><br>
                <textarea id="longText" name="ay" rows="8" cols="40" placeholder="'.$row["aboutyourself"].'" class="form-control"></textarea>
                
               
                <input type="hidden" name="cid" value="'.$id.'">
                
           
    <br><br>
                <input type="submit" value="submit" name="submit" class="btn btn-primary mx-auto">
            </form>
            </div>
            </div>
        </div>
            ';
          }}
        
        
        }
        
           
    ?>
</body>

</html>