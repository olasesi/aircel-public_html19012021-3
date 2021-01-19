<?php
  require_once './curl/index.php';
  $fields = array(
    'sellerid' => $_REQUEST['sellerid']
  );
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=api/pushnotifications/send';
  echo $json = do_curl_post_request($url, $fields);
?>