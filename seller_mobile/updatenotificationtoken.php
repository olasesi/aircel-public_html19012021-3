<?php
  require_once './curl/index.php';
  $fields = array(
    'oldtoken' => $_POST['oldtoken'],
    'newtoken' => $_POST['newtoken'],
    'sellerid' => $_POST['sellerid']
  );
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/pushnotification/updatetoken';
  echo $json = do_curl_post_request($url, $fields);
?>