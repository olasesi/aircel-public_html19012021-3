<?php
  require_once './curl/index.php';
  $fields = array(
    'sellerid' => $_POST['sellerid'],
    'storeid' => $_POST['storeid']
  );
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/sellerproduct';
  echo $json = do_curl_post_request($url, $fields);
?>
