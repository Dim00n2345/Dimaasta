$Url = 'https://b24-x18kac.bitrix24.ru/rest/1/s16zvj6vs0r4h672/crm.lead.add.json';
$ParamLid = http_build_query(array(
  'fields' => array(
    'TITLE' => str_replace("","",$_POST["name"]), 
    'NAME' => str_replace("","",$_POST["name"]), 
 'PHONE' => Array(
           "n0" => Array(
               "VALUE" => str_replace(" ","",$_POST["phone"]),
               "VALUE_TYPE" => "WORK",
           )), 
'OPENED' => 'Y', 
'SOURCE_ID' => "WEB",
'EMAIL' => Array(
           "n0" => Array(
               "VALUE" => str_replace(" ","",$_POST["email"]),
               "VALUE_TYPE" => "WORK",
           ),
       ), 
'WEB' =>  "site", 
'UTM_SOURCE' => "CALLBACK", 
'ASSIGNED_BY_ID' => 1, 
  ),
  'params' => array("REGISTER_SONET_EVENT" => "Y")
));
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_POST => 1,
  CURLOPT_HEADER => 0,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => $Url,
  CURLOPT_POSTFIELDS => $ParamLid,
));
$result2 = curl_exec($ch);
curl_close($ch);
