<?php
  defined('C5_EXECUTE') or die('Access Denied.');
  define('IS_PROFILE', 1);
  $ui = UserInfo::getByID($u->getUserID());
  $nh = Loader::helper('navigation');
?>
  <script type="text/javascript">
    window.fbAsyncInit = function () {
      FB.init({
        appId: '544710848887303',
        status: true,
        xfbml: true
      });
    };
    (function (d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = '//connect.facebook.net/en_US/all.js';
       fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    if (!window.JanesWalk) window.JanesWalk = {};
    window.JanesWalk.cityUsers = <?= json_encode($cityUsers) ?>;
  </script>
  <?php /* walk transfer modal */ ?>
  <dialog id="walk-transfer">
    <div>
      <article>
          <header>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Assign walk to user</h4>
          </header>
          <section>
              <table class="users">
                  <?php foreach ($cityUsers as $user) { ?>
                  <tr><td><a data-uid="<?= $user['id'] ?>"><?= trim($user['firstName'] . ' ' . $user['lastName']) ?></a></td></tr>
                  <?php } ?>
              </table>
          </section>
      </article>
    </div>
  </dialog>
  <?php
    $dataCity = '{unset}';
    if ($userHasSetHomeCity === true) {
        $dataCity = $userHomeCity;
    }
  ?>
  <main id="profileWrapper" data-city="<?= ($dataCity) ?>">
    <?php if ($userIsViewingSelf === true): ?>
      <?php if ($userHasSetHomeCity === true): ?>
        <div class="overlay promoteOverlay cityPromoteOverlay" data-slideshow="city" data-citypath="<?= ($userHomeCityObj->getCollectionPath()) ?>" data-cityname="<?= ($userHomeCityObj->getCollectionName()) ?>">
          <div class="o-background"></div>
          <div class="o-content">
            <h1><?= tc('Promote CITY_NAME', 'Promote %s', $userHomeCity) ?></h1>
            <p><?= t('Use these pre-made messages to spread the word about Jane\'s Walk in %s', $userHomeCity) ?></p>
            <div class="options">
              <div class="option">
                <div class="copy">
                  <?= t('%1$s has %2$s happening this year. Why not make it %3$s? Lead a Jane\'s Walk in %1$s this year!',
                        $userHomeCity, t2('%d walk', '%d walks', count($cityWalks)), count($cityWalks) + 1) ?>
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Calling all volunteers in %s! We need some help at this year\'s Jane\'s Walk!', $userHomeCity) ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Option #3 ...', $userHomeCity) ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Option #4 ...', $userHomeCity) ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="nav">
                <a href="#" class="left fa fa-arrow-left" data-slideshow="city"></a>
                <a href="#" class="right fa fa-arrow-right" data-slideshow="city"></a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($userHasPostedBlogPost === true): ?>
        <div class="overlay promoteOverlay blogPostPromoteOverlay" data-slideshow="blogPost">
          <div class="o-background">
          </div>
          <div class="o-content">
            <h1><?= t('Promote Blog Post') ?></h1>
            <p><?= t('Use these pre-made messages to spread the word about this blog post') ?></p>
            <div class="options">
              <div class="option">
                <div class="copy">
                  "<?= t('Sample tweet: <span class="objTitle">{obj.title}</span>') ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Sample tweet #2: <span class="objTitle">{obj.title}</span>') ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Sample tweet #3: <span class="objTitle">{obj.title}</span>') ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="option hidden">
                <div class="copy">
                  "<?= t('Sample tweet #4: <span class="objTitle">{obj.title}</span>') ?>"
                </div>
                <div class="networks">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-envelope"></a>
                </div>
              </div>
              <div class="nav">
                <a href="#" class="left fa fa-arrow-left" data-slideshow="blogPost"></a>
                <a href="#" class="right fa fa-arrow-right" data-slideshow="blogPost"></a>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!--
        http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar
      -->
      <div class="progressb" style="display: none;">
        <div class="bar"></div>
        <div class="step step1">
          <div class="number">1</div>
          <div class="copy"><?= t('Update details') ?></div>
        </div>
        <div class="step step2">
          <div class="number">2</div>
          <div class="copy"><?= t('Choose display picture') ?></div>
        </div>
        <div class="step step3">
          <div class="number">3</div>
          <div class="copy"><?= t('Create a walk') ?></div>
        </div>
        <div class="step step4">
          <div class="number">4</div>
          <div class="copy"><?= t('Update city details') ?></div>
        </div>
        <div class="step step5">
          <div class="number">5</div>
          <div class="copy"><?= t('Share a story') ?></div>
        </div>
      </div>
      <div class="steps">
        <div class="visual">
        </div>
        <div class="copy">
          <div class="step">
            <?php if($userHasSetName === false): ?>
              <?= t('Next Step') ?>: <a href="#" class="tabLink" data-tab="account"><?= t('Set your name') ?></a>
            <?php elseif($userHasSetHomeCity === false): ?>
              <?= t('Next Step') ?>: <a href="#" class="tabLink" data-tab="account"><?= t('Set your home city') ?></a>
            <?php elseif($userHasSetPicture === false): ?>
              <?= t('Next Step') ?>: <a href="#" class="tabLink" data-tab="picture"><?= t('Update your display picture') ?></a>
            <?php elseif($userHasSetHomeCity === true && $userIsCityOrganizer === true && $cityHasFullDetails === false): ?>
              <?= t('Next Step') ?>: <a href="#" class="tabLink" data-tab="city"><?= t('Update your city header, description and photo') ?></a>
            <?php elseif($userHasPostedBlogPost === false): ?>
              <?= t('Next Step') ?>: <a href="#" class="tabLink" data-tab="dashboard"><?= t('Share a story about walking in %s', $userHomeCity) ?></a>
            <?php else: ?>
              <?= t('You\'re ready for Jane\'s Walk %s!', date('Y')) ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="/index.php/profile/#tab=dashboard" data-tab="dashboard"><?= t('Dashboard') ?></a>
        </li>
        <?php if ($userHasSetHomeCity === true && $userIsCityOrganizer === true): ?>
          <li>
            <a href="/index.php/profile/#tab=city" data-tab="city"><?= ($userHomeCity) ?></a>
          </li>
        <?php endif; ?>
        <li>
          <a href="/index.php/profile/#tab=account" data-tab="account"><?= t('Account') ?></a>
        </li>
        <li>
          <a href="/index.php/profile/#tab=picture" data-tab="picture"><?= t('My Picture') ?></a>
        </li>
        <li>
          <a href="/index.php/profile/#tab=resources" data-tab="resources"><?= t('Resources') ?></a>
        </li>
      </ul>
      <div class="content">
        <?php
          $dashboardClasses = ['block', 'dashboard'];
          if ($userHasSetHomeCity === true && $userIsCityOrganizer === true) {
            array_push($dashboardClasses, 'threeColumnLayout');
          }
        ?>
        <div id="dashboardBlock" class="<?= implode(' ', $dashboardClasses) ?>" data-tab="dashboard">
          <div class="overlay promoteOverlay walkPromoteOverlay" data-slideshow="walk">
            <div class="o-background">
            </div>
            <div class="o-content">
              <h1><?= t('Promote Your Walk') ?></h1>
              <p><?= t('Use these pre-made messages to spread the word about your walk') ?>:</p>
              <div class="options">
                <div class="option">
                  <div class="copy">
                    "<?= t('Join me on my walk <span class="objTitle">{obj.title}</span> at this year\'s Jane\'s Walk!') ?>"
                  </div>
                  <div class="networks">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope"></a>
                  </div>
                </div>
                <div class="option hidden">
                  <div class="copy">
                    "<?= t('#2: Join me on my walk <span class="objTitle">{obj.title}</span> at this year\'s Jane\'s Walk!') ?>"
                  </div>
                  <div class="networks">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope"></a>
                  </div>
                </div>
                <div class="option hidden">
                  <div class="copy">
                    "<?= t('#3: Join me on my walk <span class="objTitle">{obj.title}</span> at this year\'s Jane\'s Walk!') ?>"
                  </div>
                  <div class="networks">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope"></a>
                  </div>
                </div>
                <div class="option hidden">
                  <div class="copy">
                    "<?= t('#4: Join me on my walk <span class="objTitle">{obj.title}</span> at this year\'s Jane\'s Walk!') ?>"
                  </div>
                  <div class="networks">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-envelope"></a>
                  </div>
                </div>
              </div>
              <div class="nav">
                <a href="#" class="left fa fa-arrow-left" data-slideshow="walk"></a>
                <a href="#" class="right fa fa-arrow-right" data-slideshow="walk"></a>
              </div>
            </div>
          </div>
          <div class="column walks">
            <div class="headline"><?= t('My Walks') ?></div>
            <a href="/walk/form/" class="btn btn-primary btn-small"><?= t('Add a walk') ?></a>
            <?php
              $nullcaseClasses = array('nullcase');
              if ($userHasCreatedWalks === true) {
                array_push($nullcaseClasses, 'hidden');
              }
            ?>
            <div class="<?= implode(' ', $nullcaseClasses) ?>">
              <div class="copy">
                <?= t('Create your first walk for Jane\'s Walk %s. Just click the button above', date('Y')) ?>
              </div>
            </div>
            <?php
              // foreach (as $page) {
              /*
                <li>
                  <a href="{$nh->getCollectionURL($page)}">{$page->getCollectionName()}</a>
                  <a href="{$nh->getCollectionURL($newWalkForm)}?load={$page->getCollectionPath()}"> <i class="fa fa-pencil-square-o" alt="edit"></i></a>
                  <a href="{$nh->getCollectionURL($page)}" class="delete" data-cid="{$page->getCollectionID()}"><i class="fa fa-times" alt="unpublish"></i></a>
                </li>";
              */
              // }
              $walkListClasses = array();
              if ($userHasCreatedWalks === false) {
                array_push($walkListClasses, 'hidden');
              }
            ?>
            <ul class="<?= implode(' ', $walkListClasses) ?>">
              <?php foreach ($userWalks as $index => $walk): ?>
                <?php
                  $title = ($walk->getCollectionName() === '' ? '(untitled)' : $walk->getCollectionName());
                ?>
                <li>
                  <div class="image" style="display: none;">
                    <img src="" />
                  </div>
                  <div class="details">
                    <div class="title">
                      <?php if ($walk->getAttribute('exclude_page_list') === '1'): ?>
                        <span class="label"><?= t('DRAFT') ?></span>
                      <?php endif; ?>
                      <a href="<?= ($nh->getLinkToCollection($walk)) ?>" title="">
                        <?= ($title) ?>
                      </a>
                    </div>
                    <div class="subactions">
                      <?php if ($walk->getAttribute('exclude_page_list') !== '1'): ?>
                        <a href="#" class="promote" data-walktitle="<?= addslashes($title) ?>" data-walkpath="<?= ($walk->getCollectionPath()) ?>" data-walkid="<?= ($walk->getCollectionID()) ?>"><?= t('Promote') ?></a>
                      <?php endif; ?>
                      <a href="<?= ($nh->getCollectionURL($newWalkForm)) ?>?load=<?= ($walk->getCollectionPath()) ?>" class="edit"><?= t('Edit') ?></a>
                      <?php if ($walk->getAttribute('exclude_page_list') !== '1'): ?>
                        <a href="<?= ($nh->getCollectionURL($walk)) ?>" class="delete" data-cid="<?= ($walk->getCollectionID()) ?>"><?= t('Unpublish') ?></a>
                      <?php
                      endif;
                      if ($userIsCityOrganizer):
                      ?>
                        <a href="<?= ($nh->getCollectionURL($walk)) ?>" class="transfer hidden" data-cid="<?= ($walk->getCollectionID()) ?>"><?= t('Transfer') ?></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
<?php
/*
  <a href='<?= $nh->getCollectionURL($page) ?>' class='delete' data-cid='<?= $page->getCollectionID() ?>'>
    <i class='fa fa-times' alt='unpublish'></i>
  </a>
*/
?>
          <?php
            if ($userHasSetHomeCity) {
          ?>
            <div class="column city">
              <div class="headline"><?= t('My City\'s Walks') ?></div>
              <a href="<?= $nh->getLinkToCollection($city) ?>" class="btn btn-primary btn-small"><?= t('Visit my city') ?></a>
              <?php
                $nullcaseClasses = array('nullcase');
                if ($cityHasWalks === true) {
                  array_push($nullcaseClasses, 'hidden');
                }
              ?>
              <div class="<?= implode(' ', $nullcaseClasses) ?>">
                <div class="copy">
                  <?= t('%s doesn\'t have any walks yet. Create the first one now.', $userHomeCity) ?>
                </div>
              </div>
              <?php
                $cityWalkListClasses = array();
                if ($cityHasWalks === false) {
                  array_push($cityWalkListClasses, 'hidden');
                }
              ?>
              <ul class="<?= implode(' ', $cityWalkListClasses) ?>">
                <?php foreach ($cityWalks as $index => $walk): ?>
                  <?php
                    $title = $walk->getCollectionName() ?: '(untitled)';
                  ?>
                  <li>
                    <div class="image" style="display: none;">
                      <img src="" />
                    </div>
                    <div class="details">
                      <div class="title">
                        <?php if ($walk->getAttribute('exclude_page_list') === '1'): ?>
                          <span class="label"><?= t('DRAFT') ?></span>
                        <?php endif; ?>
                        <a href="<?= ($nh->getLinkToCollection($walk)) ?>" title="">
                          <?= ($title) ?>
                        </a>
                      </div>
                      <?php if ($userIsCityOrganizer) { ?>
                        <div class="subactions">
                          <?php if ($walk->getAttribute('exclude_page_list') !== '1'): ?>
                            <a href="#" class="promote" data-walktitle="<?= addslashes($title) ?>" data-walkpath="<?= ($walk->getCollectionPath()) ?>" data-walkid="<?= ($walk->getCollectionID()) ?>"><?= t('Promote') ?></a>
                          <?php endif; ?>
                          <a href="<?= ($nh->getCollectionURL($newWalkForm)) ?>?load=<?= ($walk->getCollectionPath()) ?>" class="edit"><?= t('Edit') ?></a>
                          <?php if ($walk->getAttribute('exclude_page_list') !== '1'): ?>
                            <a href="<?= ($nh->getCollectionURL($walk)) ?>" class="delete" data-cid="<?= ($walk->getCollectionID()) ?>"><?= t('Unpublish') ?></a>
                          <?php endif; ?>
                        </div>
                      <?php } ?>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php
            }
          ?>
          <div class="column blogPosts">
            <div class="headline"><?= t('My Blog Posts') ?></div>
            <?php
              $subject = rawurlencode(
                t('I would like to submit a story to the %s blog', $userHomeCity)
              );
              $body = rawurlencode(
                t('Please begin writing your story below') . ":\n\n\n"
              );
            ?>
            <a
              href="mailto:<?= ($cityOrganizerEmailAddress) ?>?subject=<?= ($subject) ?>&amp;body=<?= ($body) ?>"
              target="_blank"
              class="btn btn-primary btn-small"><?= t('Share my story') ?></a>
            <?php
              $nullcaseClasses = array('nullcase');
              if ($userHasPostedBlogPost === true) {
                array_push($nullcaseClasses, 'hidden');
              }
            ?>
            <div class="<?= implode(' ', $nullcaseClasses) ?>">
              <div class="copy">
                <?= t('You haven\'t shared a story on the %s blog yet', $userHomeCity) ?>
              </div>
            </div>
            <?php
              $postListClasses = array();
              if ($userHasPostedBlogPost === false) {
                array_push($postListClasses, 'hidden');
              }
            ?>
            <ul class="<?= implode(' ', $postListClasses) ?>">
                <?php foreach ($userBlogPosts as $index => $blogPost): ?>
                  <?php
                    $title = ($blogPost->getCollectionName() === '' ? '(untitled)' : $blogPost->getCollectionName());
                  ?>
                  <li>
                    <div class="image" style="display: none;">
                      <img src="" />
                    </div>
                    <div class="details">
                      <div class="title">
                        <a href="<?= ($nh->getLinkToCollection($blogPost)) ?>" title="">
                          <?= ($title) ?>
                        </a>
                      </div>
                      <div class="subactions">
                        <a href="#" class="promote" data-blogposttitle="<?= addslashes($title) ?>" data-blogpostpath="<?= ($blogPost->getCollectionPath()) ?>" data-blogpostid="<?= ($blogPost->getCollectionID()) ?>"><?= t('Promote') ?></a>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php if ($userHasSetHomeCity === true && $userIsCityOrganizer === true): ?>
          <div id="cityBlock" class="block hidden" data-tab="city">
            <div class="main">
              <div class="headline"><?= tc('City details', '%s Details', $userHomeCity) ?></div>
              <p>
                <?= t('Use this page to update the details for the %s Jane\'s Walk page', $userHomeCity) ?>
              </p>
              <div class="editables">
                <div class="column headerInfo">
                  <div class="name"><?= t('Header Info') ?></div>
                  <div class="val">
                    <?php if ($cityHeaderInfoIsEmpty === true): ?>
                      <p>
                        <span class="icon fa fa-frown-o"></span>
                        <?= t('You haven\'t filled in %s\'s header info', $userHomeCity) ?>
                      </p>
                      <a href="<?= $cityComposerURL ?>" class="btn btn-primary"><?= t('Set header info') ?></a>
                    <?php else: ?>
                      <p>
                        <span class="icon fa fa-check"></span>
                        <?= ($cityHeaderInfo) ?>
                        <a href="<?= $cityComposerURL ?>"><?= t('Edit') ?></a>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="column shortDescription">
                  <div class="name"><?= t('Short Description') ?></div>
                  <div class="val">
                    <?php if ($cityDescriptionIsEmpty === true): ?>
                      <p>
                        <span class="icon fa fa-frown-o"></span>
                        <?= t('You haven\'t filled in %s\'s short description', $userHomeCity) ?>
                      </p>
                      <a href="<?= $cityComposerURL ?>" class="btn btn-primary"><?= t('Set short description') ?></a>
                    <?php else: ?>
                      <p>
                        <span class="icon fa fa-check"></span>
                        <?= ($cityDescription) ?>
                        <a href="<?= $cityComposerURL ?>"><?= t('Edit') ?></a>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="column backgroundPhoto">
                  <div class="name"><?= t('Background Photo') ?></div>
                  <div class="val">
                    <?php if ($cityBackgroundPhotoIsEmpty === true): ?>
                      <p>
                        <span class="icon fa fa-frown-o"></span>
                        <?= t('You haven\'t set %s\'s background photo yet', $userHomeCity) ?>
                      </p>
                      <a href="<?= $cityComposerURL ?>" class="btn btn-primary"><?= t('Set background photo') ?></a>
                    <?php else: ?>
                      <p>
                        <span class="icon fa fa-check"></span>
                        <span class="bgPhoto" style="background-image: url('<?= ($cityBackgroundPhoto) ?>');"></span>
                        <a href="<?= $cityComposerURL ?>"><?= t('Change') ?></a>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer">
              <p><?= t('Want more people at this year\'s Jane\'s Walk in %s?', $userHomeCity) ?></p>
              <a href="#" class="btn btn-primary btn-large promoteBtn" data-cityname="<?= ($userHomeCity) ?>"><?= t('Promote Jane\'s Walk in %s', $userHomeCity) ?></a>
            </div>
          </div>
        <?php endif; ?>
        <div id="accountBlock" class="block hidden" data-tab="account">
          <div class="success">
            <span class="fa fa-check"></span>
            <?= t('Changes Saved') ?>
          </div>
          <form method="post" action="<?= ($this->action('edit/save')) ?>" enctype="multipart/form-data">
          <?php
              $valt->output('profile_edit');
              $attribs = UserAttributeKey::getEditableInProfileList();
              if (is_array($attribs) && count($attribs)) {
            ?>
              <div class="column details">
                <div class="headline"><?= t('Details') ?></div>
                <div class="field">
                  <div class="">
                    <span class="required">*</span><?= ($form->label('uEmail', t('Email'))) ?>
                  </div>
                  <div class="input">
                    <?= ($form->text('uEmail', $ui->getUserEmail())) ?>
                  </div>
                </div>
                <?php if (ENABLE_USER_TIMEZONES) { ?>
                  <div class="field">
                    <div class="">
                      <span class="required">*</span><?= ($form->label('uTimezone', t('Time Zone'))) ?>
                    </div>
                    <div class="input">
                      <?= (
                        $form->select(
                          'uTimezone',
                          $date->getTimezones(),
                          (
                            $ui->getUserTimezone() ? $ui->getUserTimezone() : date_default_timezone_get()
                          )
                        )
                      ) ?>
                    </div>
                  </div>
                <?php
                  }

                  // Loop through all the fields
                  $af = Loader::helper('form/attribute');
                  $af->setAttributeObject($ui);
                  foreach ($attribs as $ak) {
                    print '<div class="field">';
                    print ($af->display($ak, $ak->isAttributeKeyRequiredOnProfile()));
                    print '</div>';
                  }
                ?>
                <div class="btnWrapper">
                  <?= ($form->submit('edit/save', t('Save'), array(), 'btn-primary btn-large')) ?>
                </div>
              </div>
              <div class="column password">
                <div class="headline"><?= t('Password') ?></div>
                <div class="field">
                  <div class="">
                    <?= ($form->label('uPasswordNew', t('New Password'))) ?>
                  </div>
                  <div class="input">
                    <?= ($form->password('uPasswordNew')) ?>
                  </div>
                </div>
                <div class="field">
                  <div class="">
                    <?= ($form->label('uPasswordNewConfirm', t('Confirm New Password'))) ?>
                  </div>
                  <div class="input">
                    <?= ($form->password('uPasswordNewConfirm')) ?>
                  </div>
                </div>
                <div class="btnWrapper">
                  <?= ($form->submit('save', t('Save'), array(), 'btn-primary btn-large')) ?>
                </div>
              </div>
            <?php
              }
            ?>
          </form>

        </div>
        <div id="pictureBlock" class="block hidden" data-tab="picture">
          <div class="success">
            <span class="fa fa-check"></span>
            <?= t('Changes Saved') ?>
          </div>
          <div class="headline"><?= t('Display Picture') ?></div>
          <div class="column widget">
            <div
              id="flashContainer"
              data-width="<?= (AVATAR_WIDTH) ?>"
              data-height="<?= (AVATAR_HEIGHT) ?>"
              data-imagepath="<?= ($av->getImagePath($ui)) ?>"
              data-savepath="<?= ($this->url($c->getCollectionPath(), 'save_thumb')) ?>"
              data-flashpath="<?= (ASSETS_URL_FLASH) ?>/thumbnail_editor_3.swf"></div>
          </div>
          <div class="column tips">
            <p>
              <?= t('Having a display picture is important for your walks, so people know who you are.') ?>
              <br /><br />
              <?= t('Use the app on the left to upload your display picture.') ?>
            </p>
            <?php if ($ui->hasAvatar()) { ?>
              <a href="<?= ($this->action('delete')) ?>"><?= t('Remove your display picture') ?></a>
            <?php } ?>
          </div>
        </div>
        <div id="resourcesBlock" class="block hidden" data-tab="resources">
          <?php if ($resources['showCityOrganizers'] === true): ?>
            <div class="cos resourceBlock">
              <div class="headline"><?= t('Connect with fellow city organizers') ?></div>
              <p>
                <?= t('Got a question?') ?><br />
                <?= t('Reach out to a fellow City Organizer for help') ?>
              </p>
              <ul>
                <?php foreach ($cityOrganizerData as $organizerData): ?>
                  <li>
                    <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?= ($organizerData['cityName']) ?>,Canada&amp;zoom=12&amp;size=400x200&amp;sensor=false" class="map" />
                    <div class="meta">
                      <div class="tag" style="background-image:url(<?= ($organizerData['organizerImagePath']) ?>)"></div>
                      <div class="name"><?= ($organizerData['organizerName']) ?>, <?= $organizerData['cityName'] ?></div>
                      <div class="email">
                        <a href="mailto:<?= ($organizerData['organizerEmail']) ?>"><?= ($organizerData['organizerEmail']) ?></a>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($resources['showGlobalWalks'] === true): ?>
            <div class="ideas resourceBlock">
              <div class="headline"><?= t('Walks from around the world') ?></div>
              <p>
                <?= t('Don\'t know what kind of walk to lead?') ?><br />
                <?= t('Here are some fun ones from around the world') ?>
              </p>
              <ul>
                <?php foreach ($featuredWalkData as $featuredWalk): ?>
                  <li>
                    <div class="banner" style="background-image: url('<?= ($featuredWalk['walkImagePath']) ?>');"></div>
                    <div class="meta">
                      <img src="/themes/janeswalk/images/countryFlags/<?= ($featuredWalk['countryName']) ?>.png" class="flag" />
                      <div class="city"><?= ($featuredWalk['cityName']) ?></div>
                      <div class="title">
                        <a href="<?= ($featuredWalk['walkPath']) ?>"><?= ($featuredWalk['walkTitle']) ?></a>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($resources['showTips'] === true): ?>
            <div class="vimeos resourceBlock">
              <div class="headline"><?= t('Tips on leading a walk') ?></div>
              <p>
                <?= t('Leading your first or fith walk?') ?><br />
                <?= t('Here are some tips from the Jane\'s Walk crew') ?>
              </p>
              <ul>
                <li>
                  <iframe src="//player.vimeo.com/video/91185841" width="250" height="140" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                  <iframe src="//player.vimeo.com/video/91188859" width="250" height="140" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
                <li>
                  <iframe src="//player.vimeo.com/video/91190408" width="250" height="140" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </li>
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($resources['showFiles'] === true): ?>
            <div class="files resourceBlock">
              <div class="headline"><?= t('Files') ?></div>
              <p>
                <?= t('Want help promoting Jane\'s Walk?') ?><br />
                <?= t('Use these files to promote Jane\'s Walk in your city') ?>
              </p>
              <ul>
                <li>
                  <a href="http://www.janeswalk.org/files/5413/9706/2037/2014_CustomPoster_Park.pdf" target="_blank">
                    <img src="/themes/janeswalk/images/pdf.png" />
                    <?= t('Customizable Poster') ?>
                  </a>
                </li>
                <li>
                  <a href="http://www.janeswalk.org/files/2613/9713/8802/JanesWalk_Postcard_ChaseGhosts.pdf" target="_blank">
                    <img src="/themes/janeswalk/images/pdf.png" />
                    <?= T('Postcard') ?>
                  </a>
                </li>
                <li>
                  <a href="http://www.janeswalk.org/old/index.php/download_file/view/253/299/" target="_blank">
                    <img src="/themes/janeswalk/images/pdf.png" />
                    <?= T('Vector Logo') ?>
                  </a>
                </li>
                <li>
                  <a href="http://www.janeswalk.org/files/2513/9999/2114/PressRelease-Generic.pdf" target="_blank">
                    <img src="/themes/janeswalk/images/pdf.png" />
                    <?= T('Generic Press Release') ?>
                  </a>
                </li>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php else: ?>
      <div id="ccm-profile-wrapper">
        <div id="ccm-profile-body">
          <div id="ccm-profile-body-attributes">
            <div class="ccm-profile-body-item">
              <h1><?= ($profile->getUserName()) ?></h1>
              <?php foreach (UserAttributeKey::getPublicProfileList() as $ua) { ?>
                <div>
                  <label><?= tc('AttributeKeyName', $ua->getAttributeKeyName()) ?></label>
                  <?= ($profile->getAttribute($ua, 'displaySanitized', 'display')) ?>
                </div>
              <?php } ?>
              <div>
                <label><?= t('Member Since')?></label>
                <?= date(DATE_APP_GENERIC_MDY_FULL, strtotime($profile->getUserDateAdded('user'))) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </main>
