<?php
    switch ($data->columnsize()) {
        case "1/2":
            $colleft  = 4;
            $colright = 8;
            break;
        case "2/1":
            $colleft  = 8;
            $colright = 4;
            break;
        default:
            $colleft  = 6;
            $colright = 6;
    }

?>
<div class="row">
    <div class="col-md-<?php echo $colleft ?>">
        <?php echo $data->text()->kirbytext() ?>
    </div>
    <div class="col-md-<?php echo $colright ?>">
        <img src="<?php echo thumb($page->image($data->img()), array('width' => 1920))->url() ?>" alt="" class="img-responsive" />
    </div>
</div>