<?php
  require_once './curl/index.php';
  $fields = array(
    'email' => $_POST['email'],
    'password' => $_POST['password']
  );
  
    // set up params
  $url = 'https://www.obejor.com.ng/index.php?route=extension/account/purpletree_multivendor/api/login';
  echo $json = do_curl_post_request($url, $fields);
 
?>