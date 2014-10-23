<?php  defined('C5_EXECUTE') || die('Access Denied.'); ?>
<?= $error ?: null ?>
<form action="<?= $this->action('resultsJson') ?>" method="get" class="ccm-search-block-form" id="ccm-search-header">
	<?php if (strlen($query) === 0) { ?>
	<input name="search_paths[]" type="hidden" value="<?= htmlentities($baseSearchPath, ENT_COMPAT, APP_CHARSET) ?>" />
	<?php  } elseif (is_array($_REQUEST['search_paths'])) {
        foreach ($_REQUEST['search_paths'] as $search_path) { ?>
			<input name="search_paths[]" type="hidden" value="<?= htmlentities($search_path, ENT_COMPAT, APP_CHARSET) ?>" />
	<?php   }
    } ?>
  <fieldset class="search">
    <input name="query" type="text" value="<?= htmlentities($query, ENT_COMPAT, APP_CHARSET) ?>" class="ccm-search-block-text" placeholder="<?= $title ?>" />
    <button type="submit"><?= $buttonText ?></button>
  </fieldset>
  <div id="searchResults">
    <a>
      <div class="searchResult">
        <h4></h4>
        <p>
        </p>
      </div>
    </a>
    <div class="ccm-pagination">
       <span class="prev"><a><i class="fa fa-angle-left"></i></a></span>
       <span class="next"><a><i class="fa fa-angle-right"></i></a></span>
    </div>
  </div>
</form>
