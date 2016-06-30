<?php
    $pageTitle = 'Monster Gallery';
?>
<section id="gallery">
    <h1 id="pageTitle"><?php echo $pageTitle; ?></h1>
	<div class="row">
    <?php
        $sql = 'SELECT name, description, img_path FROM monsters';
        foreach ( $db->query($sql) as $monster) {
            $name = $monster["name"];
            $desc = $monster["description"];
            $img = $monster["img_path"];
            $monsterCard = '';
            $monsterCard .= '<div class="card col-sm-4">';
            $monsterCard .= '<img class="card-img-top img-fluid center-block" src="'. $img .'" alt="Card image cap">';
            $monsterCard .= '<div class="card-block"><h4 class="card-title">'. $name .'</h4>';
            $monsterCard .= '<p class="card-text">'. $desc .'</p></div>';
            echo $monsterCard;
        }
    ?>
	</div>
</section>