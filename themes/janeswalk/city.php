<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$im = Loader::helper('image');
$fullbg = $c->getAttribute("full_bg");
$nh = Loader::helper('navigation');
$dh = Loader::helper('concrete/dashboard');
$show = $_GET['show'];
global $u; global $cp;
?>
<?php $this->inc('elements/header.php');  ?>
<body class="city-page <?=($dh->canRead()) ? "logged_in" : ""?>" <?= is_object($fullbg) ? "style='background-image:url(" . $fullbg->getURL() . ")'" : "" ?>>
  <?php $this->inc('elements/navbar.php');  ?>
  <div class="container-outter" role="main">
    
<div class="intro-city tk-museo-slab">
  <div class="container">
    <div class="city-header">
      <h1><?=$c->getCollectionName()?> Walks</h1>
      <p>
        </p>
        <p><?=t($c->getAttribute('shortdescription')); ?></p>
        </div>
      </div>
    </div>
  </div>


<div class="section3 city-city">
  <div class="container">
  
<div class="row-fluid walk-select">
<?php if($show != "all") { ?>
  <div class="span4 action-items">
    <div class="item active">
      
      <h2>Jane’s Walks</h2>
      <h4>Get out and walk! Explore, learn and share through a Jane’s Walk in <?=$c->getCollectionName()?></h4>
        <?=nl2br($c->getAttribute('longdescription')); ?>
        <?php 
          $a = new Area('City Description'); $a->display($c);
        ?>
    </div>
    <div class="item get-involved box-sizing">
      <div class="below top clearfix">
        <?php  $a = new Area('City Description'); $a->display($c); ?>
        <a href="<?= $nh->getCollectionURL(Page::getByPath("/walk/form")) ?>?parentCID=<?=$c->getCollectionID()?>" class="btn btn-primary btn-large">Create a Walk</a>
        <a href="<?= $nh->getCollectionURL(Page::getByPath("/walk/form")) ?>?parentCID=<?=$c->getCollectionID()?>" class="btn btn-primary btn-large">Create a Walk</a>
      </div>
      <div class="below">
        <a href="#" class="btn btn-primary btn-large notify">Request a Custom Walk</a>
      </div>
    </div>
  </div>
<?php } ?>
  <div class="walks-list <?=($show == "all") ? "showall" : "span8" ?>">
    <?php if($show == "all") { ?>
      <h3>All Walks</h3>
      <a href="?" class="btn btn-primary btn-large see-all"><i class="icon-th"></i> See Featured Walks</a>
    <?php } else { ?>
      <h3>Featured Walks</h3>
      <a href="?show=all" class="btn btn-primary btn-large see-all"><i class="icon-th"></i> See All Walks</a>
    <?php } ?>
    <div class="row-fluid">
    <?php $a = new Area('Walk List'); $a->display($c); ?>
    </div>
  </div>
</div>

</div>

</div>

<div class="intro-city lower blog">
	<div class="container">
      <h2 class="title"><a href="./city_files/city.html" class="notify">City Blog</a></h2>
		  <div class="row-fluid" style="display:none">
      <div class="span6">
        <div class="thumbnail">
          <div class="row-fluid">
          <div class="span5">
              <img src="<?=$this->getThemePath() ?>/city_files/blogpost4.jpg" alt="">
          </div>
          <div class="span7">
            <div class="caption">
              <a href="<?=$this->getThemePath() ?>/city_files/city.html"><h4>Share your Jane’s Walk Photos with the World!</h4> </a>
              <h6>Posted by msfrolick on May 03, 2013</h6>
                <p>
                Would you be interested in sharing your photos taken during Jane’s Walk with the world?</p>
                <p>If so, we’d love to feature them on our website, blog, Facebook page, Twitter, or Flickr page seen by people in over 80 international cities<a href="./city_files/city.html" class="notify">[...]</a> 
              </p> 
            </div>
          </div>
        </div>
         
        </div>

      </div>
      <div class="span6">
        <div class="thumbnail">
          <div class="row-fluid">
          <div class="span5">
              <img src="<?=$this->getThemePath() ?>/city_files/blogpost5.jpg" alt="">
          </div>
          <div class="span7">
            <div class="caption">
              <a href="./city_files/city.html"><h4>Getting Crafty</h4></a>
              <h6>Posted by Laura Hache on April 25, 2013</h6>
              <p>
                Jane's Walk weekend is less than two weeks away and our interns and volunteers are hard at work prepping to make this years walks the best yet. Here’s an inside look at our DIY button and flag making session!<a href="./city_files/city.html" class="notify">[...]</a>
              </p>
            </div>
          </div>
        </div>
         
        </div>
        
      </div>

   </div>

	</div>
</div>


<div class="notification festival-weekend">
  <div class="container">
    <div class="row-fluid">
      <h2 class="title">Festival Weekend will take place May 2-4th, 2014.</h2>
      <h4>Start thinking now about leading a walk and check back in 2014 for updates!</h4>
      <i class="close icon-remove icon-large"></i>
    </div>
    <i class="close icon-remove icon-large"></i>
  </div>
</div>

<?php $this->inc('elements/footer.php');  ?>
