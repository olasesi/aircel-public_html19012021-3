<?php
  require_once './curl/index.php';
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/sellers';
  echo $json = do_curl_post_request($url);
?>
