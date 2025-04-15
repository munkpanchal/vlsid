<?php

get_header();

$parts = array('hero', "legacy", 'speaker', 'partners', 'conference', 'register', "aPart", 'connect', 'testimonials');


?>

<main class="homepage">

    <?php
    // Hero section
    foreach ($parts as $part) {
        get_template_part('/templates/components/home/content', $part);
    }
    ?>

</main>

<?php
get_footer();