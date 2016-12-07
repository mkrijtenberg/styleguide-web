<?php snippet('header') ?>

<div class="container">
  <main class="main" role="main">

    <header>
      <h1><?= $page->title()->html() ?></h1>
    </header>
      
    <?php $n = 0; foreach($page->builder()->toStructure() as $section): $n++; ?>
      <section id="section-<?php echo $n ?>">
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      </section>
    <?php endforeach ?>

  </main>               
</div>

<?php snippet('prevnext') ?>

<?php snippet('footer') ?>