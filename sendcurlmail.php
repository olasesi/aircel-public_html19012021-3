		        $bmessg = "Your order, No: " . $order_id . " on Obejor.com.ng has been received. We shall contact you with more info about delivery. Thank you for shopping at Obejor.";
		        $postdata = "api_token=TAqD7Yl9v9dZzoVytQMWxCHK2uD86GiNqyyyrrvm9Rw4pLgWPWl8j6FhKThg&from=Obejor&to=" . $order_info['telephone'] . "&body=" . $bmessg . "&dnd=3";
		
		        $ch = curl_init();
        		curl_setopt($ch, CURLOPT_URL, "https://www.bulksmsnigeria.com/api/v1/sms/create");
        		//curl_setopt($ch, CURLOPT_URL, "http://www.estoresms.com/smsapi.php?");
        		//curl_setopt($ch, CURLOPT_HEADER, 1);
        		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
        		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        		curl_setopt ($ch, CURLOPT_POST, 1); 
        		curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata);
	            curl_exec($ch);
		        curl_close($ch);		
		        //end    
