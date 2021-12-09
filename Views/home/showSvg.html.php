<h1>Show</h1>

<svg width="1000" height="1000">
    <?php
    foreach ($listSvg as $svg) {
        ?>
            <rect fill="<?=$svg['fill']?>" stroke-width="<?=$svg['strokeWidth']?>px" stroke="<?=$svg['stroke']?>" y="<?=$svg['y']?>" x="<?=$svg['x']?>" width="<?=$svg['width']?>" height="<?=$svg['height']?>" />
        <?php
    }
    ?>
</svg>