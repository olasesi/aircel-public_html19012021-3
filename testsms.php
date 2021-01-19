<?php		
		//added 07/01/2020 ici
		$bmessg = "Your order, No: 445 on Obejor.com is successful. We shall contact you with more info about delivery. Thank you";
		$postdata = "api_token=TAqD7Yl9v9dZzoVytQMWxCHK2uD86GiNqyyyrrvm9Rw4pLgWPWl8j6FhKThg&from=Obejor&to=08183468573,08035066498&body=" . $bmessg . "&dnd=3";
		//$postdata = "username=umunne&password=nimo&sender=Obejor&recipient=08035066498,08032037060,". $order_info['telephone'] ."&message=".$bmessg."&dnd=true";  
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.bulksmsnigeria.com/api/v1/sms/create");
		//curl_setopt($ch, CURLOPT_URL, "http://www.estoresms.com/smsapi.php?");
		//curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_POST, 1); 
		curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata);
		$res = curl_exec($ch);
		curl_close($ch);		
		//end
		
		echo $res;
		
?>		