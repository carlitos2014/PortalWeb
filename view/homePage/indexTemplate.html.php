<?php

use mvc\routing\routingClass as routing ?>

<?php

use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php view::includePartial('homePage/menu') ?>
<div class="container container-fluid">
<?php view::includePartial('homePage/carousel') ?>
</div>
<?php view::includePartial('homePage/table') ?>

<?php
view::includePartial('homePage/content')?>