<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
?>

<form action="/search/google/" method="get" id="global-search-form">
  <fieldset>
  <legend>TBR Search Form</legend>
    <div class="global-search-left">
      <label id="global-search-text" for="q">
      <input name="q" type="text" placeholder="Enter your search terms here" id="q">
	<span class="noshow">Search</span></label>
    </div>
    <div class="global-search-right">
      <?php if($tbr_host == "policies-tbr-edu") { ?>
      <label class="search-area" for="search-site-section">
        <input type="radio" class="radiosearch" id="search-site-section" value="site:policies.tbr.edu" name="sitesearch" checked="yes">
        All Policies &amp; Guidelines</label>
      <?php } 
	else { ?>
      <label class="search-area" for="search-site-section">
        <input type="radio" class="radiosearch" id="search-site-section" value="xxxx" name="sitesearch">
        This Site Section</label>
      <?php } ?>
      <!--
      <label class="search-area" for="search-people">
        <input type="radio" class="radiosearch" id="search-people" value="search-people" name="sitesearch">
        System Office Staff</label>
        -->
        
      <label class="search-area" for="search-all-tbr">
        <input type="radio" class="radiosearch" id="search-all-tbr" value="" name="sitesearch">
        All of TBR.edu</label>
      
      <button id="do-site-search">Search</button>
    </div>
  </fieldset>
</form>
<!-- /form#global-search-form -->