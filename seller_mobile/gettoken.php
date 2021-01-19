<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type,x-prototype-version,x-requested-with');


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.obejor.com/index.php?route=api/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"username\"\r\n\r\npurpletreemultivendor\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"key\"\r\n\r\n0wkgW4cAkhhugc51S3BkUyv4gCeAgxY0aH1H3YQSenDDGmlTZloCSDvdYcrdmY45IswGmebDow7CKuETfMnQQPD10aIEeowtFrtD2UrEvp5iIdFNZSuBbZcldpDWULnk2ebjhPEyNqYIYglnoeWiyH7RZZeH7KOWbyhmky6u6UwXn40OMI707aFfWwbbVcWoO8OOkPRB7ZLOPr3qmVQzcsewZ6pCydkXEmFGgexnHki0L6qeHhr6VMR85NkOYagz\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "[" . $response . "]";
}