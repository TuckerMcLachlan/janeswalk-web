<?php
defined('C5_EXECUTE') || die('Access Denied.');
$bodyData = [];
$bodyData['classes'][] = 'blog';
$this->controller->set('bodyData', $bodyData);
$this->inc('elements/header.php');
$this->inc('elements/navbar.php');
?>
<div id="central">
    <header <?php if ($headImage) echo 'style="background-image:url(' . $headImage->src . ')"' ?>>
        <?php (new Area('Blog Post Header'))->display($c) ?>
        <h1><?= $c->getCollectionName() ?></h1>
        <p class="description"><?= $c->getCollectionDescription() ?></p>
        <p class="meta"><?= $authorName ?>, <strong><?= $publishDate ?></strong></p>
    </header>
    <div id="body">
        <article>
            <?php
            if ($canEdit) { ?>
            <a href='<?= $this->url('/dashboard/composer/write/-/edit/' . $c->getCollectionID()) ?>' style='margin-bottom:1em;display:block'><i class='fa fa-pencil-square'></i> edit</a>
            <?php
            }
            (new Area('Main'))->display($c);
            ?>
        </article>
    </div>
</div>
<?php $this->inc('elements/footer.php');
