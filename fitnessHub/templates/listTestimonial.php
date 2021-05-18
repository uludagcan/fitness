<?php

include "templates/include/header.php";

?>
<main>
    <section class="container">
        <h2 class="text-white p-4">Testimonials</h2>
        <ul class="row list-unstyled">
            <?php
            $data=testimonial::getList();
            foreach ( $data['results'] as $testimonial ) {
            // while ($testimonialList = $testimonialSelect->fetch_assoc()) {

                $className = $testimonial->className;
                $testimonialDate = $testimonial->testimonialDate;
                $firstName = $testimonial->firstName;
                $comment = $testimonial->comment;
            ?>

                <li class="jumbotron col-12 col-md-5 pt-1 mr-5">
                    <h3 class="display-5 pt-3"><?php echo $className; ?></h3>
                    <p class="lead"><small class="text-muted"><?php echo $testimonialDate; ?></small></p>
                    <hr class="my-4">
                    <h4>"<?php echo $comment; ?>"</h4>
                    <p class="float-right"><em><?php echo $firstName; ?></em></p>
                </li>


            <?php

            }

            ?>
        </ul>
    </section>
</main>

<?php

include "templates/include/footer.php";

?>
