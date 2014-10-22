<?php
$tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);

switch ($tbr_host) {
    case "policies-tbr-edu":
        $site_ga = "UA-38033554-6";
        break;
    case "helpdesk-webapps-tbr-edu":
        $site_ga = "UA-38033554-7";
        break;
    case "executivesearch-tbr-edu":
        $site_ga = "UA-38033554-8";
        break;
}
?>
<?php if(isset($site_ga)) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $site_ga; ?>', 'tbr.edu');
  ga('send', 'pageview');

</script>
<!-- /analytics-script --> 
<?php } ?>ga('send', 'pageview');

</script>
<script src='//rum.monitis.com/get/jsbenchmark.min.js?id=3023' type='text/javascript' async='async'></script>
<!-- /analytics-script --> 
<?php } ?>
