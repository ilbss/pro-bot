		<?php
		//file necessari ad inviare foto, doc e audio
		require 'class-http-request.php';
		require 'functions.php';
		
		//TokenTelegram
		$api ='1837293836:AAHtMWApGoWJaw25Dknz1IX9ouk94tZWifw';

		
		
		//prendo quello che mi è arrivato e lo salvo nella variabile content
		$content = file_get_contents("php://input");
		//decodifico quello che mi è arrivato
		$update = json_decode($content, true);
		//se non sono riuscito a decodificarlo mi fermo
		if(!$update)
		{
		  exit;
		}
		//echo "ciao";
        //altrimenti proseguo e vado a leggere il messaggio salvandolo nella variabile 
		//message
		$message = isset($update['message']) ? $update['message'] : "";
		//facciamo la stessa cosa anche per l'id del mess.
		$messageId = isset($message['message_id']) ? $message['message_id'] : "";
		//l'id della chat che servirà al nostro bot per sapere a chi risponder
		$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
		//il nome dell'utente che ha scritto
		$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
		//il cognome
		$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
		//lo username
		$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
		//la data
		$date = isset($message['date']) ? $message['date'] : "";
		//ed il testo del messaggio
		$text = isset($message['text']) ? $message['text'] : "";
        //eliminiamo gli spazi con trim e convertiamo in minuscolo con la funz strtolower
		
		$text = trim($text);
		$text = strtolower($text);
        
		//$text = json_encode($message);
		 //costruiamo la risposta del nostro bot
		 //l'header è sempre uguale ed indica che sarà un messaggio con codifica
		 //JSON
		header("Content-Type: application/json");
		//i parametri sono cosa voglio mandare indietro al mio utente
		$parameters = array('chat_id' => $chatId, "text" => $text);
		
	if($text == "Actis"){
   		$Actis[0] ="Ma questa classe è un Bivacco!";
   		$Actis[1] ="Fernicola, credi che noi insegnanti siamo dei celebrolesi?!";
		$Actis[2] ="Il vostro libro è prolisso";
		$i = rand(0,2);
		$parameters = array('chat_id' => $chatId, "text" => $Actis[$i]);
  	}
	

	if($text == "ciao"){
   		$text="Benvenuto su questo server. Ricordati di non aprire l'ombrello prima che PIOVE!";
   		$parameters = array('chat_id' => $chatId, "text" => $text);
  	}

	
		
			
	








	//aggiungo il comando di invio
		//e lo invio
		
		$parameters["method"] = "sendMessage";
        echo json_encode($parameters);
		
		
		
		?>
		
		
		
		
		
		

		
		
		
