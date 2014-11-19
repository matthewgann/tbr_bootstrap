<?php
// Set some variables to make my life a little better

$tbr_base_theme = path_to_theme();
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);

?>

<div id="skipnav" class="element-invisible">
  <div class="container">
    <p>Skip to:</p>
    <ul>
      <li><a href="#content" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a></li>
      <?php if ($main_menu): ?>
      <li><a href="#main-menu" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!-- /#skipnav -->

<div id="global-search">
  <div class="container">
    <div class="global-search-inner">
      <?php
      // Include Search Snippet
      include("snippet-search.php");
      ?>
    </div>
  </div>
</div>
<!-- /#global-search -->

<div id="global-header">
  <div class="container">
    <div id="global-nav" class="span8">
      <div class="navbar global-nav-navi">
        <div class="navbar-inner">
          <ul class="nav">
            <li><a href="https://www.tbr.edu/institutions/our-institutions" class="top-nav-institutions">Our Institutions</a></li>
            <li><a href="https://www.tbr.edu/initiatives/programs-and-initiatives" class="top-nav-programs">Programs &amp; Initiatives</a></li>
            <li class="show-search-list"><a href="#" id="show-search" class="top-nav-search">Search</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="top-logo" class="span4"> <a href="https://www.tbr.edu/" style="border: none;"><img src="/<?php echo $tbr_base_theme; ?>/images/wordmark.png" width="399" height="14" alt="Tennessee Board of Regents"></a> </div>
    <!-- #top-logo -->
  </div>
  <!-- .container -->
</div>
<!-- /#global-header -->

<?php if (!empty($page['emergency'])): ?>
<div id="emergency-header">
  <div class="container">
    <div class="alert alert-error">
      <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
      <?php print render($page['emergency']); ?> </div>
    <!-- /.alert alert-error -->
  </div>
  <!-- /.container -->
</div>
<?php endif; ?>
<!-- /#emergency-header -->

<div id="header" class="clearfix">
  <div class="container">
    <div class="row">
      <div id="logo" class="site-logo span4"> <a href="https://www.tbr.edu" title="<?php print t('Home'); ?>" rel="home"> <img src="/<?php echo $tbr_base_theme; ?>/images/tbr_seal_edu.png" alt="<?php print $site_name; ?>" role="presentation" /> </a> </div>
    </div>
  </div>
</div>
<!-- /#header -->

<div id="social-menu">
  <div class="container">
    <div class="row">
      <ul class="socialnav">
        <li><a href="https://www.facebook.com/tnregents" class="navfacebook"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="https://www.twitter.com/tnregents" class="navtwitter"><i class="fa fa-twitter-square"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="main-menu" class="clearfix site-main-menu">
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <?php //if ($page['search_box']): ?>
          <div id="nav-search" class="nav-search">
            <?php
          // Include Search Snippet
		  include("snippet-search-mobile.php");
          ?>
          </div>
          <?php //endif; ?>
          <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
          <div class="nav-collapse collapse" style="height: 0px;">
            <nav id="main-nav" role="navigation">
              <?php //print render($primary_nav); ?>
              <ul class="menu nav">
                <?php
				// Include Search Snippet
				include("snippet-menu.php");
                ?>
              </ul>

              <!-- /#primary-menu -->

            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if ($page['header_unit']): ?>
<div id="header-unit" class="clearfix">
  <div class="container">
    <div id="header-unit-inner" class="row">
      <div class="header-unit-content"> <?php print render($page['header_unit']); ?> </div>
    </div>
  </div>
</div>
<!-- /#header_unit -->
<?php endif; ?>

<!--/#header-unit -->

<div id="main" class="clearfix">
  <div class="container">
    <?php //if ($breadcrumb): ?>
    <?php if (!drupal_is_front_page()): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php //endif; ?>
    <?php if ($page['main_top']): ?>
    <div id="main-top" class="row-fluid"> <?php print render($page['main_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_upper']): ?>
    <div id="main-upper" class="row-fluid"> <?php print render($page['main_upper']); ?> </div>
    <?php endif; ?>
    <div id="main-content" class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
        <?php if (user_is_logged_in()) : ?>
        <?php endif; ?>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
        <div id="content-wrapper">
          <div id="content-head" class="row-fluid">
            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
            <div class="tabs"> <?php print render($tabs); ?> </div>
            <?php endif; ?>
            <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($page['help']): ?>
            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="row-fluid"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="row-fluid"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="row-fluid"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_row2']): ?>
          <div id="content-row2" class="row-fluid"> <?php print render($page['content_row2']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
          <div id="content-col2" class="row-fluid">
            <?php if ($page['content_col2-1']): ?>
            <div class="span6">
              <div id="content-col2-1" class="span12 clearfix clear-row"> <?php print render($page['content_col2-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col2-2']): ?>
            <div class="span6">
              <div id="content-col2-2" class="span12 clearfix clear-row"> <?php print render($page['content_col2-2']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row3']): ?>
          <div id="content-row3" class="row-fluid"> <?php print render($page['content_row3']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
          <div id="content-col3" class="row-fluid">
            <?php if ($page['content_col3-1']): ?>
            <div class="span4">
              <div id="content-col3-1" class="span12 clearfix clear-row"> <?php print render($page['content_col3-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-2']): ?>
            <div class="span4">
              <div id="content-col3-2" class="span12 clearfix clear-row"> <?php print render($page['content_col3-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-3']): ?>
            <div class="span4">
              <div id="content-col3-3" class="span12 clearfix clear-row"> <?php print render($page['content_col3-3']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row4']): ?>
          <div id="content-row4" class="row-fluid"> <?php print render($page['content_row4']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
          <div id="content-col4" class="row-fluid">
            <?php if ($page['content_col4-1']): ?>
            <div class="span3">
              <div id="content-col4-1" class="span12 clearfix clear-row"> <?php print render($page['content_col4-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-2']): ?>
            <div class="span3">
              <div id="content-col4-2" class="span12 clearfix clear-row"> <?php print render($page['content_col4-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-3']): ?>
            <div class="span3">
              <div id="content-col4-3" class="span12 clearfix clear-row"> <?php print render($page['content_col4-3']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-4']): ?>
            <div class="span3">
              <div id="content-col4-4" class="span12 clearfix clear-row"> <?php print render($page['content_col4-4']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="row-fluid"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="row-fluid"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap -->
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['main_lower']): ?>
    <div id="main-lower" class="row-fluid"> <?php print render($page['main_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_bottom']): ?>
    <div id="main-bottom" class="row-fluid"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<div id="footer-logo"> <img src="/<?php echo $tbr_base_theme; ?>/images/footer_logo.png" alt="TBR Seal"> </div>
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
<div id="global-footer" style="position: static;">
  <div id="institution-logos">
    <div class="container institutions">
      <div class="row">
        <div class="span12">
          <div id="institution-logos-inner">
            <?php
			      // Include Search Snippet
			      include("snippet-institutions.php");
			      ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="other-footer">
    <div class="container">
      <div class="row">
        <div id="bottom-text" class="span4">
          <div id="bottom-menu" class="clear-block">
            <ul>
              <li class="list-heading">TBR Offices</li>
              <ul>
		        <li><a href="https://www.tbr.edu/chancellor/office-chancellor">Chancellor</a></li>
		        <li><a href="https://www.tbr.edu/academics/office-academic-affairs">Academic Affairs</a></li>
		        <li><a href="https://www.tbr.edu/administration/office-administration-and-facilities-development">Administration and Facilities Development</a></li>
		        <li><a href="https://www.tbr.edu/business/office-business-and-finance">Business and Finance</a></li>
		        <li><a href="https://www.tbr.edu/cc/office-community-colleges">Community Colleges</a></li>
		        <li><a href="https://www.tbr.edu/generalcounsel/office-general-counsel">General Counsel</a></li>
		        <li><a href="https://www.tbr.edu/it/office-information-technology">Information Technology</a></li>
		        <li><a href="https://www.tbr.edu/oesi/office-organizational-effectiveness-and-strategic-initiatives">Organizational Effectiveness and Strategic Initiatives</a></li>
		        <li><a href="https://www.tbr.edu/audit/office-system-wide-internal-audit">System-wide Internal Audit</a></li>
		        <li><a href="https://www.tbr.edu/tcat/office-colleges-applied-technology">Colleges of Applied Technology (TCAT)</a></li>
              </ul>
            </ul>
          </div>
          <!-- #bottom-menu -->

        </div>
        <!-- #bottom-text -->

        <div id="bottom-text-two" class="span4">
          <div id="bottom-menu" class="clear-block">
            <ul>
              <li class="list-heading">In Depth</li>
              <ul>
                <li><a href="https://www.tbr.edu/hr/working-tbr">Working at TBR</a></li>
                <li><a href="https://www.tbr.edu/purchasing/how-do-business-tbr">Doing Business with the TBR</a></li>
                <li><a href="https://www.tbr.edu/facilities/projects-requiring-designers">Facilities Bid Opportunities</a></li>
                <li><a href="https://www.tbr.edu/contacts/contact-tbr">Contacts</a></li>
                <li><a href="https://www.tbr.edu/institutions/our-institutions">Institutions</a></li>
                <li><a href="https://www.tbr.edu/initiatives/regents-online-campus-collaborative-rocc">Online Learning (ROCC)</a>
                <li><a href="https://www.tbr.edu/initiatives/tennessee-transfer-pathway">Tennessee Transfer Pathways</a></li>
                <li><a href="https://www.tbr.edu/initiatives/tn-promise">Tennessee Promise</a>
              </ul>
              <li class="list-heading">About This Site</li>
              <ul>
                <li><a href="https://www.tbr.edu/web/web-accessibility">Accessibility</a></li>
                <li><a href="https://www.tbr.edu/search">Search</a></li>
                <li><a href="https://www.tbr.edu/web/tennessee-board-regents-privacy-statement">Privacy</a></li>
                <li><a href="https://www.tbr.edu/web/report-website-issue">Report a Website Problem</a></li>
              </ul>
            </ul>
          </div>
          <!-- #bottom-menu -->

        </div>
        <!-- #bottom-text -->

        <div id="bottom-text-three" class="span4">
          <div itemscope itemtype="http://schema.org/ContactPoint" id="main-address">
            <div itemscope itemtype="schema.org/PostalAddress"> <span class="address-street" itemprop="streetAddress">1415 Murfreesboro Rd</span> <span class="address-city" itemprop="addressLocality">Nashville</span> <span class="address-state" itemprop="addressRegion">TN</span> <span class="address-zip" itemprop="postalCode">37217</span> </div>
          </div>
          <!-- #main-address -->

          <div id="copyright-eeo">
            <p>The Tennessee Board of Regents (TBR) is one of the nation's largest higher education systems, governing 46 post-secondary educational institutions.
              The TBR system includes six universities, 13 two-year colleges and 27 colleges of applied technology, providing programs to more than 240,000 students across the state.</p>
            <p>The TBR is an AA/EEO employer and does not discriminate on the basis of race, color, national origin, sex, disability, or age in its programs and activities. <a href="https://policies.tbr.edu/system-office/system-office-non-discrimination-policy" title="Non-Discrimination Policy">Full Non-Discrimination Policy.</a></p>
          </div>
          <!-- #copyright-eeo -->

          <div class="btmlogin" id="bottom-login">
            <?php if(!user_is_logged_in()){ ?>
            <a href="#myuser" data-toggle="modal"><i class="fa fa-circle-o-notch"></i></a>

            <!-- Modal -->
            <div id="myuser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">TBR Login</h3>
              </div>
              <div class="modal-body"> <?php print render($page['login']); ?> </div>
              <div class="modal-footer">
                <?php //<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> ?>
              </div>
            </div>
            <?php } else { echo '<a href="/user/logout"><i class="fa fa-times-circle"></i> Logout</a>'; } ?>
          </div>
          <!-- #bottom-login -->
        </div>
      </div>
    </div>
  </div>
</div>
<div id="toTop" class="btn btn-large"></div>
<!-- /#to-top -->
<!-- /#global-footer -->
