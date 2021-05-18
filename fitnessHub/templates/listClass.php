<?php

include "templates/include/header.php";

?>
<main>
    <div class="container">
        <h2 class="text-white p-4">Classes</h2>
        <div class="row">
        
            <?php
            // loop through the table and display the classes
            while ($class_row = $class_data->fetch_assoc()) {   // $class_data = "SELECT * FROM class";
                $title = $class_row['title'];
                $description = $class_row['description'];
                $image = $class_row['image'];
                $url = "class_details.php?title=$title&description=$description";

            ?>

                <ul class="card col-12 col-md-4 mb-3 border-light bg-transparent list-unstyled">
                    <img class="card-img-top" src="images/<?php echo $image; ?>" alt="Card image cap">
                    <li class="card-body">
                        <h4 class="card-title text-black"><?php echo $title; ?></h4>
                        <p class="card-text text-black"><?php echo $description; ?></p>
                        <!-- Clicking on learn more, we are sent to class_details.php page  -->
                        <a href="<?php echo $url; ?>">
                            <p class="card-text"><small class="text-muted">Learn more</small></p>
                        </a>
                    </li>
                </ul>

            <?php

            }

            ?>
        </div>
    </div>
</main>
<?php

include "templates/include/footer.php";

?>