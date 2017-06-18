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
                echo '<ul class="navtab-numbers">';
                for($i = 1; $i < 7; $i++){
                    echo '<li><div id="impact-' . $i .'">' . $i .'</div></li>';
                }
                echo '</ul>';

            }
            ?>
        </h1>
    </div>
</div>

<!-- NAV BAR TAB END -->
