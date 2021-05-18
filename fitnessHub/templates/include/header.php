<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Griffith Fitness</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <div class="container-fluid p-0">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <figure>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Griffith Fitness"></a>
            </figure>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#headerNavBarCollapse" aria-controls="headerNavBarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapseable items are  -->
            <div class="collapse navbar-collapse" id="headerNavBarCollapse">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li><a class="nav-link mx-3" href="index.php">Home</a></li>
                    <li><a class="nav-link mx-3" href="class.php">Classes</a></li>
                    <li><a class="nav-link mx-3" href="./?action=memberships">Memberships</a></li>
                    <li><a class="nav-link mx-3" href="./?action=testimonial">Testimonials</a></li>
                </ul>
                <button class="btn btn-xs btn-outline-secondary py-0 px-2 ml-3">
                    <div class="d-flex align-items-center">
                        <p class="pt-3">Login</p><i class="fa fa-user login-icon"></i>
                    </div>
                </button>
            </div>

        </nav>
    </div>

    <?php

    ?>
    </header>