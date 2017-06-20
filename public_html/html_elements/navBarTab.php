<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/17/17
 * Time: 5:27 PM
 */

if (!isset($pageTitle)) {
    $pageTitle = "Please set page title variable.";
}
?>

<!-- NAV BAR TAB START -->
<div class="navtab white-text text-center">
    <div class="navtab-box">
        <h1>
            <?php
            echo "<span>" . $pageTitle . "</span>";

            if ($pageTitle == "Impacts") {
                echo '<div class="space-left"><ul id="nav" class="line-behind">';
                for($i = 1; $i < 7; $i++){
                    echo '<li id="li-impact-' .$i .'"><div class="impact-circle"><a href="#impact-' . $i . '">' . $i .'</a></div></li>';
                }
                echo '</ul></div>';

            }
            ?>
        </h1>
    </div>
</div>

<!-- NAV BAR TAB END -->
