<?php

switch ($messaggio) {

case "Prenota":  				$messaggio = "Reserve"; break;
case "Inserisci una nuova prenotazione":  	$messaggio = "Insert a new reservation"; break;
case "Cliente titolare":  			$messaggio = "Titular client"; break;
case "cognome":  				$messaggio = "surname"; break;
case "nome":  					$messaggio = "name"; break;
case "Dal":  					$messaggio = "From"; break;
case "dal":  					$messaggio = "from"; break;
case "al":  					$messaggio = "to"; break;
case "Tipo di tariffa":  			$messaggio = "Rate type"; break;
case "tariffa":  				$messaggio = "rate"; break;
case "sconto":  				$messaggio = "discount"; break;
case "caparra":  				$messaggio = "deposit"; break;
case "se diversa dalla normale":  		$messaggio = "if different from the normal"; break;
case "nº di persone":  				$messaggio = "number of people"; break;
case "Nº di piano":  				$messaggio = "Floor number"; break;
case "e/o di casa":  				$messaggio = "and/or house number"; break;
case "e/o di persone":  			$messaggio = "and/or people number"; break;
case "costo aggiuntivo unico":  		$messaggio = "single extra cost"; break;
case "da moltiplicare per":  			$messaggio = "to multiply by"; break;
case "costo aggiuntivo settimanale":  		$messaggio = "weekly extra cost"; break;
case "costo aggiuntivo giornaliero":  		$messaggio = "daily extra cost"; break;
case "nº di settimane da applicare":  		$messaggio = "nº of weeks to apply"; break;
case "nº di giorni da applicare":  		$messaggio = "nº of days to apply"; break;
case "Commento":  				$messaggio = "Comment"; break;
case "Inserisci la prenotazione":  		$messaggio = "Insert the reservation"; break;
case "Torna al menù principale":  		$messaggio = "Back to main menu"; break;
case " o spezzarla":  				$messaggio = " or dividing it"; break;
case "Spezza la prenotazione in":  		$messaggio = "Divide reservation in"; break;
case "parti":  					$messaggio = "pieces"; break;
case "Non é stato possibile dividere la prenotazione a causa del numero di persone":	$messaggio = "It has not been possible to divide to the reservation because of the number of people"; break;
case "Non è possibile inserire la prenotazione senza":	$messaggio = "It is not possible to insert the reservation without"; break;
case "dividerla":  				$messaggio = "dividing it"; break;
case "in":  					$messaggio = "in"; break;
case "Spezza la prenotazione in":  		$messaggio = "Divide the reservation in"; break;
case "Non si è potuto inserire la prenotazione a nome di":	$messaggio = "It was not possible to insert the reservation for"; break;
case "perchè il database è stato modificato nel frattempo":	$messaggio = "because the database has been modified meanwhile"; break;
case "Prenotazione":  				$messaggio = "Reservation"; break;
case "settiman":  				$messaggio = "week"; break;
case "giorn":  					$messaggio = "day"; break;
case "e":  					$messaggio = "s"; break;
case "a":  					$messaggio = ""; break;
case "o":  					$messaggio = ""; break;
case "i":  					$messaggio = "s"; break;
case "a nome di":  				$messaggio = "for Mr/Ms"; break;
case "per":  					$messaggio = "for"; break;
case "persone":  				$messaggio = "people"; break;
case "Costo unico":  				$messaggio = "Single cost"; break;
case "moltiplicato per":  			$messaggio = "multiplied by"; break;
case "Costo settimanale":  			$messaggio = "Weekly cost"; break;
case "Costo giornaliero":  			$messaggio = "Daily cost"; break;
case "settimane":  				$messaggio = "weeks"; break;
case "giorni":  				$messaggio = "days"; break;
case "TOTALE":  				$messaggio = "TOTAL"; break;
case "Caparra":  				$messaggio = "Deposit"; break;
case "resto da pagare":  			$messaggio = "rest to pay"; break;
case "Commento":  				$messaggio = "Comment"; break;
case "inserita":  				$messaggio = "inserted"; break;
case "Modifica la prenotazione":  		$messaggio = "Modify reservation"; break;
case "Torna indietro":  			$messaggio = "Go back"; break;
case "Sconto":  				$messaggio = "Discount"; break;
case "É necessario inserire il cognome del cliente":	$messaggio = "The client's surname is needed"; break;
case "confermata":  				$messaggio = "confirmed"; break;
case "Confermata":  				$messaggio = "Confirmed"; break;
case "Nº di prenotazioni di questa tipologia":	$messaggio = "Number of reservations of this type"; break;
case "Aggiungi altre tipologie":  		$messaggio = "Add other types"; break;
case "Tipologia":  				$messaggio = "Type"; break;
case "Nessuna nuova prenotazione è stata inserita":	$messaggio = "No new reservation has been inserted"; break;
case "Transazione scaduta":  			$messaggio = "Transaction expired"; break;
case "Non si è potuto inserire un costo aggiuntivo della prenotazione a nome di":	$messaggio = "It was not possible to insert an extra cost of the reservation for"; break;
case "Orario stimato di entrata":  		$messaggio = "Estimated check-in time"; break;
case "giorno":  				$messaggio = "day"; break;
case "Metodo pagamento caparra":  		$messaggio = "Deposit payment method"; break;
case "Le prenotazioni richieste nel messaggio sono già state inserite":	$messaggio = "The reservations requested in the message have already been inserted"; break;
case "Attenzione":  				$messaggio = "Warning"; break;
case "il prezzo totale delle prenotazioni inserite":	$messaggio = "the total price of inserted reservations"; break;
case "il prezzo totale delle caparre inserite":	$messaggio = "the total price of inserted deposits"; break;
case "è diverso da quello contenuto nel messaggio di richiesta di prenotazione":	$messaggio = "is different from the one contained in the reservation request message"; break;
case "Origine":  				$messaggio = "Origin"; break;
case "<b>Attenzione</b>: il prezzo totale":  		$messaggio = "<b>Warning</b>: total price"; break;
case "non coincide con il prezzo remoto":  	$messaggio = "is different from remote price"; break;
case "OVERBOOKING":  				$messaggio = "OVERBOOKING"; break;
case "Modifica come gruppo le prenotazioni inserite":	$messaggio = "Modify inserted reservations as a group"; break;
case "prezzo totale":  				$messaggio = "total price"; break;
case "prezzo totale giornaliero":  		$messaggio = "daily total price"; break;
case "prezzo totale settimanale":  		$messaggio = "weekly total price"; break;
case "prezzo tariffa":  			$messaggio = "rate price"; break;
case "prezzo tariffa giornaliero":  		$messaggio = "daily rate price"; break;
case "prezzo tariffa settimanale":  		$messaggio = "weekly rate price"; break;
case "% del totale":  				$messaggio = "% of total"; break;
case "% della tariffa":  			$messaggio = "% of rate"; break;
case "Commissioni":  				$messaggio = "Commissions"; break;
case "resto commissioni":  			$messaggio = "rest of commissions"; break;
case "% del prezzo totale":  			$messaggio = "% of total price"; break;
case "modificata":  				$messaggio = "modified"; break;
case "Errore":  				$messaggio = "Error"; break;
case "costo aggiuntivo":  			$messaggio = "extra cost"; break;
case "per la prenotazione":  			$messaggio = "for reservation"; break;
case "per un promemoria all'entrata":  		$messaggio = "for a reminder at checkin"; break;
case "per un promemoria all'uscita":  		$messaggio = "for a reminder at checkout"; break;
case "valuta":  				$messaggio = "currency"; break;
case "Il numero di persone inserite non include i bambini (vedere il commento per il numero di bambini)":	$messaggio = "The inserted number of people does not include children (see comment for the number of children)"; break;
case "da":  					$messaggio = "from"; break;
case "Si è dovuto diminuire il <b>numero di persone</b> per inserire la prenotazione":	$messaggio = "The <b>number of people</b> has been decreased in order to insert the reservation"; break;
case "Prenotazione non inserita":  			$messaggio = "Reservation not inserted"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>