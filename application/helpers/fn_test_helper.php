<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function vd_test()
{
    if (isset($_SESSION)) {
        # code...
        echo '<div class="container font_text">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo var_dump($_SESSION);
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>