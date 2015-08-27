<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);

if (substr($_SERVER['SERVER_NAME'], 0, 7) == "www.dev") {
  $tbr_host_real = "http://www.dev.tbrweb05.tbr.edu";
}
else {
  $tbr_host_real = "https://www.tbr.edu";
}

//$tbr_host_ssl = isset($_SERVER["HTTPS"]) ? "https://" : "http://";
//$tbr_host_real =  $tbr_host_ssl . $_SERVER['SERVER_NAME'];

?>

<li><a href="<?php echo $tbr_host_real; ?>/board">Board of Regents</a></li>
<li><a href="<?php echo $tbr_host_real; ?>/chancellor">Chancellor</a></li>
<li><a href="<?php echo $tbr_host_real; ?>/academics/office-academic-affairs">Academics</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offices <b class="caret"></b></a>
  <ul class="dropdown-menu subdropdown" role="menu">
    <li class="column-menu">
      <ul>
        <?php //<li>Office</li> ?>
        <li><a href="<?php echo $tbr_host_real; ?>/chancellor/office-chancellor">Chancellor</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/academics/office-academic-affairs">Academic Affairs</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/administration/office-administration-and-facilities-development">Administration and Facilities Development</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/business/office-business-and-finance">Business and Finance</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/cc/office-community-colleges">Community Colleges</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/generalcounsel/office-general-counsel">General Counsel</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/it/office-information-technology">Information Technology</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/oesi/office-organizational-effectiveness-and-strategic-initiatives">Organizational Effectiveness and Strategic Initiatives</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/audit/office-system-wide-internal-audit">System-wide Internal Audit</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/tcat/office-colleges-applied-technology">Colleges of Applied Technology (TCAT)</a></li>
      </ul>
    </li>
    <?php /*
		        <li class="column-menu">
		            <ul>
		                <li>Column 2</li>
		                <li><a href="#">Business and Finance</a></li>
		                <li><a href="#">Item</a></li>
		                <li><a href="#">Item</a></li>
		                <li><a href="#">Item</a></li>
		            </ul>

		      </li>
		      */ ?>
  </ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
  <ul class="dropdown-menu subdropdown" role="menu">
    <li class="column-menu">
      <ul>
        <li><a href="<?php echo $tbr_host_real; ?>/hr/employment-opportunities">Employment Opportunities</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/purchasing/how-do-business-tbr">How to Do Business with the TBR</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/facilities/doing-business-tbr-facilities">Facilities Bid Opportunities</a></li>
        <li><span title="" class="separator"><hr></span></li>

        <li><a href="<?php echo $tbr_host_real; ?>/institutions">Our Institutions</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/institutions/getting-started">Getting Started as a Student at a TBR Institution</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/academics/programs">Academic Programs at Our Institutions</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/initiatives/regents-online-campus-collaborative-rocc">Online Learning (ROCC)</a></li>
        <li><a href="<?php echo $tbr_host_real; ?>/business/tuition-and-fees">Tuition and Fees</a></li>
                <li><span title="" class="separator"><hr></span></li>

        <li><a href="<?php echo $tbr_host_real; ?>/communications">Communications &amp; Marketing</a></li>
      </ul>
    </li>
  </ul>
</li>
<li><a href="https://policies.tbr.edu">Policies &amp; Guidelines</a></li>
<li><a href="<?php echo $tbr_host_real; ?>/communications/news">News &amp; Events</a></li>
<li><a href="<?php echo $tbr_host_real; ?>/contacts/contact-tbr">Contacts</a></li>