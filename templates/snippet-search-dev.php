<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
?>

<form action="/search/google/" method="get" id="global-search-form">
  <fieldset>
  <legend>TBR Search Form</legend>
    <div class="global-search-left">
      <label id="global-search-text" for="q"><span class="sr-only">Search</span></label>
      <input name="q" type="text" placeholder="Enter your search terms here" id="q">
    </div>
    <div class="global-search-right">
      <label class="search-area" for="search-site-section">
        <input type="radio" class="radiosearch" id="search-site-section" value="site:policies.tbr.edu" name="sitesearch" >
        Policies &amp; Guidelines</label>
      <label class="search-area" for="search-all-tbr">
        <input type="radio" class="radiosearch" id="search-all-tbr" value="" name="sitesearch" checked="yes">
        All of TBR.edu</label>
      <button id="do-site-search">Search</button>
    </div>
  </fieldset>
</form>
<!-- /form#global-search-form -->