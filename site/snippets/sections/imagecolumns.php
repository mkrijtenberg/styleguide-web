<?php
    $colcount = 0;
    if ($data->titleleft()->isNotEmpty() || $data->imageleft()->isNotEmpty() || $data->bodyleft()->isNotEmpty()) {
        $colcount++;
    }
    if ($data->titlecenter()->isNotEmpty() || $data->imagecenter()->isNotEmpty() || $data->bodycenter()->isNotEmpty()) {
        $colcount++;
    }
    if ($data->titleright()->isNotEmpty() || $data->imageright()->isNotEmpty() || $data->bodyright()->isNotEmpty()) {
        $colcount++;
    }
    $gridcol = (12 / $colcount);
?>

<div class="row">

    <?php if ($data->titleleft()->isNotEmpty() || $data->imageleft()->isNotEmpty() || $data->bodyleft()->isNotEmpty()) : ?>

    <div class="col-md-<?php echo $gridcol ?>">
        <?php if ($data->imageleft()->isNotEmpty()) : ?>
            <img src="<?php echo thumb($page->image($data->imageleft()), array('width' => 400, 'height' => 400))->url() ?>" alt="" class="img-responsive" />
        <?php endif ?>
        <?php if ($data->titleleft()->isNotEmpty()) : ?>
            <h3><?php echo $data->titleleft() ?></h3>
        <?php endif ?>
        <?php echo $data->bodyleft()->kirbytext() ?>
    </div>

    <?php endif ?>

    <?php if ($data->titlecenter()->isNotEmpty() || $data->imagecenter()->isNotEmpty() || $data->bodycenter()->isNotEmpty()) : ?>

    <div class="col-md-<?php echo $gridcol ?>">
        <?php if ($data->imagecenter()->isNotEmpty()) : ?>
            <img src="<?php echo thumb($page->image($data->imagecenter()), array('width' => 400, 'height' => 400))->url() ?>" alt="" class="img-responsive" />
        <?php endif ?>
        <?php if ($data->titlecenter()->isNotEmpty()) : ?>
            <h3><?php echo $data->titlecenter() ?></h3>
        <?php endif ?>
        <?php echo kirbytext($data->bodycenter()) ?>
    </div>

    <?php endif ?>

    <?php if ($data->titleright()->isNotEmpty() || $data->imageright()->isNotEmpty() || $data->bodyright()->isNotEmpty()) : ?>

    <div class="col-md-<?php echo $gridcol ?>">
        <?php if ($data->imageright()->isNotEmpty()) : ?>
            <img src="<?php echo thumb($page->image($data->imageright()), array('width' => 400, 'height' => 400))->url() ?>" alt="" class="img-responsive" />
        <?php endif ?>
        <?php if ($data->titleright()->isNotEmpty()) : ?>
            <h3><?php echo $data->titleright() ?></h3>
        <?php endif ?>
        <?php echo kirbytext($data->bodyright()) ?>
    </div>

    <?php endif ?>
</div>
