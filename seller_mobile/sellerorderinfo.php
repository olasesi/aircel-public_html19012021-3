<?php
  require_once './curl/index.php';
  $fields = array(
    'order_id' => $_POST['orderid'],
    'sellerid' => $_POST['sellerid'],
    'storeid' => $_POST['storeid']
  );
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/sellerorder/seller_order_info';
  echo $json = do_curl_post_request($url, $fields);
?>
