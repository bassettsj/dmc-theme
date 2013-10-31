<div class="container texture-white" id="top">
<header class="nu_branding container">
  <div class="row-fluid">
  <?php if ($site_name || $site_slogan): ?>
        <hgroup id="site-name-slogan" class="row-fluid">

          <h1 class="span6 pull-left">
            <a href="http://northeastern.edu" title="Northeastern University - Homepage">
              <span class="northeastern_font">Northeastern University</span>
            </a>
          </h1>
          </a>
          <h2 class="span6 pull-right">
            <a class="brand pull-right" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="" />
              <span class="site-name "><?php print $site_name; ?></span>
            </a>
          </h2>
        </hgroup>
  </div>
    <?php endif; ?>
    <?php if ( $site_slogan ): ?>
      <p class="lead pull-right"><?php print $site_slogan; ?></p>
    <?php endif; ?>
</header>


<div class="container">
  <div id="navbar" role="banner" class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" href="#">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </a>



  <?php if ($logo): ?>
    <span class="scroll-unhide">
      <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <span class="fs1" aria-hidden="true" data-icon="$"></span>
      </a>
    </span>
    <span class="scroll-hide">
    <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      <span class="site-name "><?php print $site_name; ?></span>
    </a>
    </span>
  <?php endif; ?>




      <div class="nav-collapse pull-right">
        <nav role="navigation">



          <?php if ($primary_nav): ?>
            <?php print $primary_nav; ?>
          <?php endif; ?>
          <?php if ($search): ?>
            <?php if ($search): print render($search); endif; ?>
          <?php endif; ?>
              <?php if ($secondary_nav): ?>
            <?php print $secondary_nav; ?>
    <?php endif; ?>
        </nav>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container">

  <header role="banner" id="page-header">


    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">

    <?php if ($page['sidebar_first']): ?>

      <aside class="span3" role="complementary">
        <div data-spy="affix" data-offset-top="205">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <!-- disabled the bread crumb. <//?php if ($breadcrumb): print $breadcrumb; endif;?> -->
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <footer class="footer container">
    <?php print render($page['footer']); ?>
    <div class="row-fluid">
      <div class="span3 nu">
        <a class="logo northeastern_font ext" alt="Northeastern University" href="http://www.northeastern.edu" target="_blank">Northeastern University</a>
      </div>
      <div class="span6">
    <a href="http://myneu.neu.edu/cp/home/displaylogin" class="ext" target="_blank">myNEU</a><span class="ext"></span> · <a href="https://prod-web.neu.edu/webapp6/employeelookup/public/main.action" class="ext" target="_blank">Find Faculty &amp; Staff</a><span class="ext"></span> · <a href="http://www.northeastern.edu/neuhome/adminlinks/findaz.html" class="ext" target="_blank">Find A-Z</a><span class="ext"></span> · <a href="http://www.northeastern.edu/emergency/index.html" class="ext" target="_blank">Emergency Information</a><span class="ext"></span> · <a href="http://www.northeastern.edu/search/index.html" class="ext" target="_blank">Search</a><span class="ext"></span>
    <p class="address">360 Huntington Ave., Boston, Massachusetts 02115 · 617.373.2000 · TTY 617.373.3768<br>&copy; <?php echo date('Y'); ?> Northeastern University
        </p>
      </div>
      <div class="span3 social icons">
        <!-- Youtube Icon -->
        <a class="social icon youtube ext" href="https://www.youtube.com/northeastern" target="_blank">
          <div class="fs1" aria-hidden="true" data-icon="!"></div><span class="hidden">Youtube</span>
          
        </a>
        <!-- Twitter icon -->
        <a class="social icon twitter ext" href="http://twitter.com/northeastern" target="_blank">
          <div class="fs1" aria-hidden="true" data-icon="&quot;"></div><span class="hidden">Twitter</span></a>
        
        <!-- Facebook Icon -->
        <a class="social icon facebook ext" href="http://www.facebook.com/northeastern" target="_blank"><div class="fs1" aria-hidden="true" data-icon="#"></div><span class="hidden">Facebook</span></a>
    <a href="#top" class="pull-right">back to top</a>

      </div>

    </div>
  </footer>
</div>
</div>



