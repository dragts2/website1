<?php

switch ($messaggio) {

case "Prenota":  				$messaggio = "Reservar"; break;
case "Inserisci una nuova prenotazione":  	$messaggio = "Insertar una nueva reserva"; break;
case "Cliente titolare":  			$messaggio = "Cliente titular"; break;
case "cognome":  				$messaggio = "apellido"; break;
case "nome":  					$messaggio = "nombre"; break;
case "Dal":  					$messaggio = "Desde"; break;
case "dal":  					$messaggio = "desde"; break;
case "al":  					$messaggio = "hasta"; break;
case "Tipo di tariffa":  			$messaggio = "Tipo de tarifa"; break;
case "tariffa":  				$messaggio = "tarifa"; break;
case "sconto":  				$messaggio = "descuento"; break;
case "caparra":  				$messaggio = "fianza"; break;
case "se diversa dalla normale":  		$messaggio = "si diferente de la normal"; break;
case "nº di persone":  				$messaggio = "n° de personas"; break;
case "Nº di piano":  				$messaggio = "N° de piso"; break;
case "e/o di casa":  				$messaggio = "y/o de casa"; break;
case "e/o di persone":  			$messaggio = "y/o de personas"; break;
case "costo aggiuntivo unico":  		$messaggio = "coste añadido único"; break;
case "da moltiplicare per":  			$messaggio = "a multiplicar por"; break;
case "costo aggiuntivo settimanale":  		$messaggio = "coste añadido semanal"; break;
case "costo aggiuntivo giornaliero":  		$messaggio = "coste añadido diario"; break;
case "nº di settimane da applicare":  		$messaggio = "nº de semanas a aplicar"; break;
case "nº di giorni da applicare":  		$messaggio = "nº de días a aplicar"; break;
case "Commento":  				$messaggio = "Comentario"; break;
case "Inserisci la prenotazione":  		$messaggio = "Insertar la reserva"; break;
case "Torna al menù principale":  		$messaggio = "Volver al menú principal"; break;
case " o spezzarla":  				$messaggio = " o dividirla"; break;
case "Spezza la prenotazione in":  		$messaggio = "Divide la reserva en"; break;
case "parti":  					$messaggio = "trozos"; break;
case "Non é stato possibile dividere la prenotazione a causa del numero di persone":	$messaggio = "No ha sido posible dividir la reserva por causa del número de personas"; break;
case "Non è possibile inserire la prenotazione senza":	$messaggio = "No es posible insertar la reserva sin"; break;
case "dividerla":  				$messaggio = "dividirla"; break;
case "in":  					$messaggio = "en"; break;
case "Spezza la prenotazione in":  		$messaggio = "Divide la reserva en"; break;
case "Non si è potuto inserire la prenotazione a nome di":	$messaggio = "No se ha podido insertar la reserva a nombre de"; break;
case "perchè il database è stato modificato nel frattempo":	$messaggio = "porqué la base de datos ha cambiado mientras tanto"; break;
case "Prenotazione":  				$messaggio = "Reserva"; break;
case "settiman":  				$messaggio = "semana"; break;
case "giorn":  					$messaggio = "día"; break;
case "e":  					$messaggio = "s"; break;
case "a":  					$messaggio = ""; break;
case "o":  					$messaggio = ""; break;
case "i":  					$messaggio = "s"; break;
case "a nome di":  				$messaggio = "a nombre de"; break;
case "per":  					$messaggio = "para"; break;
case "persone":  				$messaggio = "personas"; break;
case "Costo unico":  				$messaggio = "Coste único"; break;
case "moltiplicato per":  			$messaggio = "multiplicado por"; break;
case "Costo settimanale":  			$messaggio = "Coste semanal"; break;
case "Costo giornaliero":  			$messaggio = "Coste diario"; break;
case "settimane":  				$messaggio = "semanas"; break;
case "giorni":  				$messaggio = "días"; break;
case "TOTALE":  				$messaggio = "TOTAL"; break;
case "Caparra":  				$messaggio = "Fianza"; break;
case "resto da pagare":  			$messaggio = "resto a pagar"; break;
case "Commento":  				$messaggio = "Comentario"; break;
case "inserita":  				$messaggio = "insertada"; break;
case "Modifica la prenotazione":  		$messaggio = "Modificar la reserva"; break;
case "Torna indietro":  			$messaggio = "Volver atrás"; break;
case "Sconto":  				$messaggio = "Descuento"; break;
case "É necessario inserire il cognome del cliente":	$messaggio = "Es necesario insertar el apellido del cliente"; break;
case "confermata":  				$messaggio = "confirmada"; break;
case "Confermata":  				$messaggio = "Confirmada"; break;
case "Nº di prenotazioni di questa tipologia":	$messaggio = "Nº de reservas de esta tipología"; break;
case "Aggiungi altre tipologie":  		$messaggio = "Añadir otras tipologías"; break;
case "Tipologia":  				$messaggio = "Tipología"; break;
case "Nessuna nuova prenotazione è stata inserita":	$messaggio = "Ninguna nueva reserva ha sido insertada"; break;
case "Transazione scaduta":  			$messaggio = "Transacción caducada"; break;
case "Non si è potuto inserire un costo aggiuntivo della prenotazione a nome di":	$messaggio = "No se ha podido insertar un coste añadido de la reserva a nombre de"; break;
case "Orario stimato di entrata":  		$messaggio = "Horario entrada estimativo"; break;
case "giorno":  				$messaggio = "día"; break;
case "Metodo pagamento caparra":  		$messaggio = "Método pago fianza"; break;
case "Le prenotazioni richieste nel messaggio sono già state inserite":	$messaggio = "Las reservas pedidas en el mensaje han sido ya insertadas"; break;
case "Attenzione":  				$messaggio = "Atención"; break;
case "il prezzo totale delle prenotazioni inserite":	$messaggio = "el precio total de las reservas insertadas"; break;
case "il prezzo totale delle caparre inserite":	$messaggio = "el precio total de las fianzas insertadas"; break;
case "è diverso da quello contenuto nel messaggio di richiesta di prenotazione":	$messaggio = "es distinto del que está contenido en el mensaje de pedido de reserva"; break;
case "Origine":  				$messaggio = "Origen"; break;
case "<b>Attenzione</b>: il prezzo totale":  	$messaggio = "<b>Atención</b>: el precio total"; break;
case "non coincide con il prezzo remoto":  	$messaggio = "no coincide con el precio remoto"; break;
case "OVERBOOKING":  				$messaggio = "OVERBOOKING"; break;
case "Modifica come gruppo le prenotazioni inserite":	$messaggio = "Modificar como grupo las reservas insertadas"; break;
case "prezzo totale":  				$messaggio = "precio total"; break;
case "prezzo totale giornaliero":  		$messaggio = "precio total diario"; break;
case "prezzo totale settimanale":  		$messaggio = "precio total semanal"; break;
case "prezzo tariffa":  			$messaggio = "precio tarifa"; break;
case "prezzo tariffa giornaliero":  		$messaggio = "precio tarifa diario"; break;
case "prezzo tariffa settimanale":  		$messaggio = "precio tarifa semanal"; break;
case "% del totale":  				$messaggio = "% del total"; break;
case "% della tariffa":  			$messaggio = "% de la tarifa"; break;
case "Commissioni":  				$messaggio = "Comisiones"; break;
case "resto commissioni":  			$messaggio = "resto comisiones"; break;
case "% del prezzo totale":  			$messaggio = "% del precio total"; break;
case "modificata":  				$messaggio = "modificada"; break;
case "Errore":  				$messaggio = "Error"; break;
case "costo aggiuntivo":  			$messaggio = "coste añadido"; break;
case "per la prenotazione":  			$messaggio = "para la reserva"; break;
case "per un promemoria all'entrata":  		$messaggio = "para un recordatorio a la entrada"; break;
case "per un promemoria all'uscita":  		$messaggio = "para un recordatorio a la salida"; break;
case "valuta":  				$messaggio = "divisa"; break;
case "Il numero di persone inserite non include i bambini (vedere il commento per il numero di bambini)":	$messaggio = "El número de personas insertado no incluye los niños (ver el comentario para el número de niños)"; break;
case "da":  					$messaggio = "desde"; break;
case "Si è dovuto diminuire il <b>numero di persone</b> per inserire la prenotazione":	$messaggio = "Hubo que disminuir el <b>número de personas</b> para insertar la reserva"; break;
case "Prenotazione non inserita":  		$messaggio = "Reserva no insertada"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>