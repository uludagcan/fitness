<?php include "templates/include/header.php" ?>

<body>

    <div id="carousel-container" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h1 class="display-3">Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic inventore dignissimos nihil aliquid in libero dolore quis magni. Itaque ipsum praesentium ut dolorum, doloribus voluptatibus.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-3">Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic inventore dignissimos nihil aliquid in libero dolore quis magni. Itaque ipsum praesentium ut dolorum, doloribus voluptatibus.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h1 class="display-3">Lorem, ipsum dolor.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic inventore dignissimos nihil aliquid in libero dolore quis magni. Itaque ipsum praesentium ut dolorum, doloribus voluptatibus.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-container" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-container" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container info-cards">

        <div class="row card-deck my-4">

            <div class="col-sm-12 col-md-6 col-lg-4 card w-100">

                <a href=""><img class="card-img-top" src="images/logo.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 card">

                <a href=""><img class="card-img-top" src="images/logo.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 card">

                <a href=""><img class="card-img-top" src="images/logo.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        </div>

    </div>

</body>

<?php include "templates/include/footer.php" ?>