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
		
	
	if($text == "ciao"){
		$text="Benvenuto su questo server. Ricordati di non aprire l'ombrello prima che PIOVE, altrimenti la Francia starnutisce e l Europa ha il raffreddore. Buon divertimento!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}
		


	if($text == "actis"){
		$text= "Scusate, cos è sto mercato?!     
		Non siamo dei Superman noi docenti!     
		Fernicola, credi che noi docenti siamo dei celebrolesi?! 
		Ma questa classe è un bivacco! Nduma avante"; 	
				
		$parameters = array('chat_id' => $chatId, "text" => $text);	
	}
	
	if($text == "appello"){
		$text= "Allora, dovremmo essere venticinque, ci sono tre assenti, io e la professoressa siamo in due, quindi in totale siamo in ventiquattro. OK, QUADRA.";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}
	if($text == "barone"){
		$text= "Glielo ho gia detto Vis A Vis che cosa pensereSSe, parla potabile.
		
		Tu non hai il diritto di dire che Foscolo è triste! Non mi sono mai permessa io in 41 anni di lavoro, quindi non puoi neanche farlo tu, che non sei neanche un critico e tantomeno psicologo!!
		
		Non dite fregnacce!";
		
		$parameters = array('chat_id' => $chatId, "text" => $text);	
	}

	if($text == "spada"){
		$text= "Siete dei deficenti! Ma non nel senso che siete stupidi, ma perchè deficete di intelligenza!.
		
		Siete dei latitanti!";

		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "sandiano"){
		$text= "Se non fate i compiti è QUATRO in automatico.
		Sandy facci uscireeee!!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "mastroianni"){
		$text= "Questo anno VOLIAMO i liBBri dalla finestra!
		I deBBiti";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "stassi"){
		$text= "WE PROVOLONEEH?!
		Vatti a cambiare VAH";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "bava"){
		$text= "La risposta è dentro di te
		Bambiniii?!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "manzoni"){
		$text= "oehi tu va a posto!
		Tu siediti!
	
		Eh buonanoteee!
	
		Idi idi che a mamma ha fatto i gnocchi!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}


	if($text == "balzaretti"){
		$text= "Grazie ragazzi grazie, grazie.";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}


	if($text == "brunetti"){
		$text= "L-IVA???!? Cosa è L-IVA??!?";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}


	if($text == "valisone"){
		$text= "Un par de ciufoli!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}


	if($text == "comerci"){
		$text= "FILIPPO?!
		VITTORIO?!
		RICCARDO?!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}


	if($text == "alù"){
		$text= "Una frase sbagliata non è solo una frase sbagliata ma anche una frase non giusta.
		facciamo un test di verifica";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}
	
	if($text == "girasole"){
		$text= "SPADA MERDA!";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}

	if($text == "coniglio"){
		$text= "Speriamo che se ne torni dal buco di culo da cui è uscito strisciando quel figlio di troia.";
		$parameters = array('chat_id' => $chatId, "text" => $text);
	}



	//ZONA BARZELLETTE

	if($text == "barze"){
		$barze[0]= "Cosa fa Sandiano in pizzeria? Ordina una QUATRO formaggi.";
		$barze[1]= "Cosa mangiano gli ebrei a pasqua? Le uova.";
		$barze[2]= "Qual è il colmo per Grieco? Camminare storto ma insegnare Diritto.";

		$i = rand(0,2);

		$parameters = array('chat_id' => $chatId, "text" => $barze[$i]);
	}
	
	


	//aggiungo il comando di invio
		//e lo invio
		
		$parameters["method"] = "sendMessage";
        echo json_encode($parameters);
		
		
		
		?>
		
		
		
		
		
		

		
		
		
