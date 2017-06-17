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
                ?>
                <ul class="navtab-numbers">
                    <li><div>1</div></li>
                    <li><div>2</div></li>
                    <li><div>3</div></li>
                    <li><div>4</div></li>
                    <li><div>5</div></li>
                    <li><div>6</div></li>
                </ul>
                <?php
            }
            ?>
        </h1>
    </div>
</div>

<!-- NAV BAR TAB END -->
