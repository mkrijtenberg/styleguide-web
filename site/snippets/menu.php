<ul class="nav navbar-nav">
  <li>
    <a href="<?php echo url() ?>" class="icon-only"><i class="icon-home"></i></a>
  </li>
  <?php foreach($pages->visible() as $p): ?>
      <?php if($p->hasVisibleChildren()) : ?>
        <li class="dropdown <?php e($p->isOpen(), 'active') ?>">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php echo $p->title()->html() ?> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <?php foreach($p->children()->visible() as $p): ?>
              <li>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
              </li>
              <?php endforeach ?>
          </ul>
        </li>
      <?php else: ?>
        <?php if ($p->title() == 'Home') : ?>
          <li <?php e($p->isOpen(), ' class="active"') ?>>
            <a href="<?php echo $p->url() ?>"><i class="icon-home"></i></a>
          </li>
        <?php else : ?>
          <li <?php e($p->isOpen(), ' class="active"') ?>>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endif ?>
      <?php endif ?>
  <?php endforeach ?>
</ul>