<?php
    foreach ($_POST as $post_var)(
        echo strtoupper($post_var) . "<br/>";
        echo "<script>console.log( 'Debug Objects: " . $post_var . "' );</script>";
        )
?>