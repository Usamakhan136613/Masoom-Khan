<?php 
    include("Config.php");// bridge connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>

<style>
    body
    {
        background: #333333;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #dd1818, #333333);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #dd1818, #333333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;
        text-transform: uppercase;
    }
</style>
</head>
<body>


<div class="container">
    <h1 class="text-center text-uppercase my-5 display-3">Employee <a href="view.php" class="btn btn-outline-light ">data</a></h1>
    <div class="row">
        <div class="col-lg-6 col-md-12 offset-lg-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>UserName</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group my-2">
                    <input type="submit" class="btn btn-danger w-100" value="I N S E R T" name="SaveData">
                </div>
            </form>
        </div>
    </div>
</div>


<?php

if(isset($_POST['save data']))git init