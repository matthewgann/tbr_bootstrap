<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
?>

<form action="/search/google/" method="get" id="global-search-form">
  <fieldset>
  <legend>TBR Search Form</legend>
      <label id="TBR Search" for="q">
      <input name="q" type="text" id="q">
      <button id="do-site-search">Search</button>
  </fieldset>
</form>
<!-- /form#global-search-form -->