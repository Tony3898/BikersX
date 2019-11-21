<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Tejas Rana">
    <title>
        <?php echo $title." | Bikers X";?>
    </title>
    <link rel="icon" type="image/png" href="<?php echo base_url()."assets/images/logo.jpg" ?>">
    <script src="https://kit.fontawesome.com/032c46d3c1.js" crossorigin="anonymous"></script>
    <!--load bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url()."assets/css/header.css"?>">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top self-navbar">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url()."assets/images/logo.jpg"?> " style="width: 50px;height: 50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbarNav" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Gallery")?>">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("About")?>">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Contact")?>">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Auth")?>">Sign In</a>
            </li>
        </ul>
    </div>
</nav>