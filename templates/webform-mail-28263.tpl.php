<?php

/**
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The webform submission.
 * - $email: The entire e-mail configuration settings.
 * - $user: The current user submitting the form.
 * - $ip_address: The IP address of the user submitting the form.
 *
 * The $email['email'] variable can be used to send different e-mails to different users
 * when using the "default" e-mail template.
 */
?>

<h2>
<?php
print $node->title;
?>
</h2>

<?php print ($email['html'] ? '<p>' : '') . t('Submitted on [submission:date:long]'). ($email['html'] ? '</p>' : ''); ?>


<table style="border: 1px solid black; border-collapse: collapse;">
<?php
foreach ($node->webform['components'] as $key => $component) {
   if (isset($submission->data[$key][0])) {
     $key_converted = ucwords(str_replace('_',' ', $node->webform['components'][$key]['form_key']));
     $submittedvalue = $submission->data[$key][0];
     if (isset($submittedvalue)) {
       print '<tr><td style="border: 1px solid black;">'. $key_converted .'</td><td style="border: 1px solid black;">';
  	   if ($node->webform['components'][$key]['type'] != "select") {
    	   print $submittedvalue;
  	   }
  	   else {
    	  //var_dump($submission->data[$key]);

    	  foreach ($submission->data[$key] as $val) {
          $selectlistitems = explode("|", $node->webform['components'][$key]['extra']['items']);

          if (is_numeric($submittedvalue)) {
            print $selectlistitems[$submittedvalue];
             }

          else {
             $newkey = $val;
             print ucwords(str_replace("_", ", ", $newkey)) . '<br>';
          }
    	  }
  	   }
	   print '</td></tr>';
	   }
  }
}
?>
</table>
<?php
//print_r(get_defined_vars());
//print "<h2>Debug info</h2>";
//print_r($submission);
//print_r($email);
//print "<h2>Debug info</h2>";
//print_r($node->webform['components']);
?>