<?php
  require_once './curl/index.php';
  $fields = array(
    'sellerid' => $_POST['sellerid'],
    'storeid' => $_POST['storeid'],
    "filter_date_from"=> $_POST['datefrom'],
    "filter_date_to" => $_POST['dateto'],
    "page"=> $_POST['pageno']
  );

    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/sellerorder';
  echo $json = do_curl_post_request($url, $fields);
?>
