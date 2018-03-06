<?php
   include_once('SmsaeroApiV2.class.php');
   use SmsaeroApiV2\SmsaeroApiV2;

   $smsaero_api = new SmsaeroApiV2('79872340869@ya.ru', 'Ygaw2ASybN5f0YitNlKmnNEbJ0Yt', 'SMS Aero');

   var_dump($smsaero_api->send('79872340869', 'Pokurim', 'INFO'));



?>