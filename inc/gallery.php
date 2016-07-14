<?php
    $pageTitle = 'Monster Gallery';
?>
<section id="gallery">
    <h1 id="pageTitle"><?php echo $pageTitle; ?></h1>
    <div class="row">
    <?php
        $sql = 'SELECT * FROM monsters';
        $monsters = $db->prepare($sql);
        $monsters->execute();
        foreach ( $monsters as $monster) {
            $name = $monster["name"];
            $desc = $monster["description"];
            $img = $monster["img_path"];
            $monsterCard = '';
            $monsterCard .= '<div class="col-lg-3 col-sm-6"><div class="card">';
            $monsterCard .= '<img class="card-img-top img-fluid center-block" src="'. $img .'" alt="'. $name .'">';
            $monsterCard .= '<div class="card-block"><h4 class="card-title">'. $name .'</h4>';
            $monsterCard .= '<p class="card-text">'. $desc .'</p></div></div></div>';
            echo $monsterCard;
        }
    ?>
    </div>
</section>