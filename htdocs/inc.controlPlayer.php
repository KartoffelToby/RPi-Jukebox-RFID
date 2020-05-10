<div id="controlWrapper">
<?php
    include('inc.loadControls.php');
?>
</div>
<?php
if($ShowCover == "ON") {
    echo '<div class="playerWrapperCover" id="coverWrapper">';
    include('inc.loadCover.php');
    echo '</div>';
}
?>
