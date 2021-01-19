<?php
  require_once './curl/index.php';
  $fields = array(
    'token' => $_POST['token'],
    'sellerid' => $_POST['sellerid']
  );
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/pushnotification/subscribe';
  echo $json = do_curl_post_request($url, $fields);
?>