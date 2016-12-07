<?php if ($page->hasNextVisible() || $page->hasPrevVisible()) : ?>
  <nav class="pager">

    <div class="container">
        <div class="row">
          <?php if($page->hasPrevVisible()): ?>
            <a class="col-xs-6 text-left" href="<?= $page->prevVisible()->url() ?>" rel="prev">
              <span>Vorige</span>
              <div class="title">
                <i class="icon-arrowthin-left"></i> <?= $page->prevVisible()->title()->html() ?>
              </div>
            </a>
          <?php else : ?>
            <div class="col-xs-6"></div>
          <?php endif ?>

          <?php if($page->hasNextVisible()): ?>
            <a class="col-xs-6 text-right" href="<?= $page->nextVisible()->url() ?>" rel="next">
              <span>Volgende</span>
              <div class="title">
                  <?= $page->nextVisible()->title()->html() ?> <i class="icon-arrowthin-right"></i>
              </div>
            </a>
          <?php else : ?>
            <div class="col-xs-6"></div>            
          <?php endif ?>
        </div>
      </div>

  </nav>
<?php endif ?>