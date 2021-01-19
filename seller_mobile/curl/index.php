<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Content-Type: application/json');
function do_curl_post_request($url, $params=array()) {
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $params_string = '';
  if (is_array($params) && count($params)) {
    foreach($params as $key=>$value) {
      $params_string .= $key.'='.$value.'&'; 
    }
    rtrim($params_string, '&');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $params_string);
    
    //Follow redirections
    curl_setopt($ch,CURLOPT_POST, count($params));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTREDIR, 3);
    
    
    curl_setopt($ch,CURLOPT_HTTPHEADER,array(
      "purpletreemultivendor: 0wkgW4cAkhhugc51S3BkUyv4gCeAgxY0aH1H3YQSenDDGmlTZloCSDvdYcrdmY45IswGmebDow7CKuETfMnQQPD10aIEeowtFrtD2UrEvp5iIdFNZSuBbZcldpDWULnk2ebjhPEyNqYIYglnoeWiyH7RZZeH7KOWbyhmky6u6UwXn40OMI707aFfWwbbVcWoO8OOkPRB7ZLOPr3qmVQzcsewZ6pCydkXEmFGgexnHki0L6qeHhr6VMR85NkOYagz"
    ));
  }
 
  //execute post
  $result = curl_exec($ch);
  //close connection
  curl_close($ch);
 
 
  return $result;
}
