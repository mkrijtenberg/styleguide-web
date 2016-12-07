<?php

kirbytext::$tags['do'] = array(
  'html' => function($tag) {
    return '<strong class="do">Do.</strong>';
  }
);

kirbytext::$tags['dont'] = array(
  'html' => function($tag) {
    return '<strong class="dont">Don\'t.</strong>';
  }
);