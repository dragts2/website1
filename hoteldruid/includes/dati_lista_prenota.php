<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2023 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################




include_once("./includes/funzioni_costi_agg.php");
if (!isset($altre_valute) or !is_array($altre_valute)) {
$canc_altre_valute = 1;
if ($tablepersonalizza and function_exists('altre_valute')) $altre_valute = altre_valute();
else $altre_valute = array();
} # fine if (!isset($altre_valute) or !is_array($altre_valute))
else $canc_altre_valute = 0;
if (!empty($pcanc)) $tableprenota = $tableprenotacanc;
$tabelle_lock = "";
$altre_tab_lock = array($tableanni,$tableprenota,$tablecostiprenota,$tableperiodi,$tableclienti,$tablerelclienti,$tablesoldi,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$num_r = 0;
$lista_p = array();
$ultima_ripetizione_cliente = array();
for ($num1 = 1 ; $num1 <= $num_ripeti ; $num1++) {
$id_prenota = aggslashdb($lista_prenota[$num1]);
$dati_prenota = esegui_query("select * from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($dati_prenota) == 1) {
$cont = "SI";
$utente_inserimento = risul_query($dati_prenota,0,'utente_inserimento');
if ($priv_vedi_tab_prenotazioni != "s" and ($priv_vedi_tab_mesi != "s" or $priv_mod_prenotazioni != "s")) {
if ($priv_vedi_tab_prenotazioni == "g" or (($priv_vedi_tab_mesi == "g" or $priv_vedi_tab_mesi == "q") and $priv_mod_prenotazioni == "g")) {
if (!$utenti_gruppi[$utente_inserimento]) $cont = "NO";
} # fine if ($priv_vedi_tab_prenotazioni == "g" or...
elseif ($utente_inserimento != $id_utente) $cont = "NO";
} # fine if ($priv_vedi_tab_prenotazioni != "s" and ($priv_vedi_tab_mesi != "s" or $priv_mod_prenotazioni != "s"))
if ($cont == "SI") {
$num_r++;
$lista_p[$num_r] = $lista_prenota[$num1];
if ($priv_mod_utente_ins != "n") ${"utente_inserimento_prenotazione_".$num_r} = $utente_inserimento;
${"data_inserimento_prenotazione_".$num_r} = substr(risul_query($dati_prenota,0,'datainserimento'),0,16);
if ($vedi_clienti != "NO") {
${"numero_cliente_".$num_r} = risul_query($dati_prenota,0,'idclienti');
if (!empty($ultima_ripetizione_cliente[${"numero_cliente_".$num_r}])) ${"ultima_prenotazione_per_cliente_".$ultima_ripetizione_cliente[${"numero_cliente_".$num_r}]} = 0;
$ultima_ripetizione_cliente[${"numero_cliente_".$num_r}] = $num_r;
${"ultima_prenotazione_per_cliente_".$num_r} = 1;
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = '".${"numero_cliente_".$num_r}."' ");
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$mostra_cliente = "SI";
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
if (($vedi_clienti != "PROPRI" and $vedi_clienti != "GRUPPI") or $mostra_cliente != "NO") {
${"cognome_".$num_r} = risul_query($dati_cliente,0,'cognome');
# I controlli di non vuoto servono a risparmiare memoria, creando solo le variabili necessarie
if (strcmp((string) risul_query($dati_cliente,0,'nome'),"")) ${"nome_".$num_r} = risul_query($dati_cliente,0,'nome');
if (strcmp((string) risul_query($dati_cliente,0,'soprannome'),"")) ${"soprannome_".$num_r} = risul_query($dati_cliente,0,'soprannome');
if (strcmp((string) risul_query($dati_cliente,0,'titolo'),"")) ${"titolo_".$num_r} = risul_query($dati_cliente,0,'titolo');
if (strcmp((string) risul_query($dati_cliente,0,'sesso'),"")) ${"sesso_".$num_r} = risul_query($dati_cliente,0,'sesso');
if (strcmp((string) risul_query($dati_cliente,0,'datanascita'),"")) ${"data_nascita_".$num_r} = risul_query($dati_cliente,0,'datanascita');
if (strcmp((string) risul_query($dati_cliente,0,'cittanascita'),"")) ${"citta_nascita_".$num_r} = risul_query($dati_cliente,0,'cittanascita');
if (strcmp((string) risul_query($dati_cliente,0,'regionenascita'),"")) ${"regione_nascita_".$num_r} = risul_query($dati_cliente,0,'regionenascita');
if (strcmp((string) risul_query($dati_cliente,0,'nazionenascita'),"")) ${"nazione_nascita_".$num_r} = risul_query($dati_cliente,0,'nazionenascita');
if (strcmp((string) risul_query($dati_cliente,0,'nazionalita'),"")) ${"cittadinanza_".$num_r} = risul_query($dati_cliente,0,'nazionalita');
if (strcmp((string) risul_query($dati_cliente,0,'lingua'),"")) ${"codice_lingua_".$num_r} = risul_query($dati_cliente,0,'lingua');
if (strcmp((string) risul_query($dati_cliente,0,'nazione'),"")) ${"nazione_".$num_r} = risul_query($dati_cliente,0,'nazione');
if (strcmp((string) risul_query($dati_cliente,0,'regione'),"")) ${"regione_".$num_r} = risul_query($dati_cliente,0,'regione');
if (strcmp((string) risul_query($dati_cliente,0,'citta'),"")) ${"citta_".$num_r} = risul_query($dati_cliente,0,'citta');
if ($priv_vedi_indirizzo == "s") {
if (strcmp((string) risul_query($dati_cliente,0,'via'),"")) ${"via_".$num_r} = risul_query($dati_cliente,0,'via');
if (strcmp((string) risul_query($dati_cliente,0,'numcivico'),"")) ${"numcivico_".$num_r} = risul_query($dati_cliente,0,'numcivico');
if (strcmp((string) risul_query($dati_cliente,0,'cap'),"")) ${"cap_".$num_r} = risul_query($dati_cliente,0,'cap');
} # fine if ($priv_vedi_indirizzo == "s")
if (strcmp((string) risul_query($dati_cliente,0,'documento'),"")) ${"documento_".$num_r} = risul_query($dati_cliente,0,'documento');
if (strcmp((string) risul_query($dati_cliente,0,'tipodoc'),"")) ${"tipo_documento_".$num_r} = risul_query($dati_cliente,0,'tipodoc');
if (strcmp((string) risul_query($dati_cliente,0,'cittadoc'),"")) ${"citta_documento_".$num_r} = risul_query($dati_cliente,0,'cittadoc');
if (strcmp((string) risul_query($dati_cliente,0,'regionedoc'),"")) ${"regione_documento_".$num_r} = risul_query($dati_cliente,0,'regionedoc');
if (strcmp((string) risul_query($dati_cliente,0,'nazionedoc'),"")) ${"nazione_documento_".$num_r} = risul_query($dati_cliente,0,'nazionedoc');
if (strcmp((string) risul_query($dati_cliente,0,'scadenzadoc'),"")) ${"scadenza_documento_".$num_r} = risul_query($dati_cliente,0,'scadenzadoc');
if ($priv_vedi_telefoni == "s") {
if (strcmp((string) risul_query($dati_cliente,0,'telefono'),"")) ${"telefono_".$num_r} = risul_query($dati_cliente,0,'telefono');
if (strcmp((string) risul_query($dati_cliente,0,'telefono2'),"")) ${"telefono2_".$num_r} = risul_query($dati_cliente,0,'telefono2');
if (strcmp((string) risul_query($dati_cliente,0,'telefono3'),"")) ${"telefono3_".$num_r} = risul_query($dati_cliente,0,'telefono3');
if (strcmp((string) risul_query($dati_cliente,0,'fax'),"")) ${"fax_".$num_r} = risul_query($dati_cliente,0,'fax');
if (strcmp((string) risul_query($dati_cliente,0,'email'),"")) ${"email_".$num_r} = risul_query($dati_cliente,0,'email');
if (strcmp((string) risul_query($dati_cliente,0,'email2'),"")) ${"email2_".$num_r} = risul_query($dati_cliente,0,'email2');
if (strcmp((string) risul_query($dati_cliente,0,'email3'),"")) ${"email_certificata_".$num_r} = risul_query($dati_cliente,0,'email3');
} # fine if ($priv_vedi_telefoni == "s")
if (strcmp((string) risul_query($dati_cliente,0,'cod_fiscale'),"")) ${"codice_fiscale_".$num_r} = risul_query($dati_cliente,0,'cod_fiscale');
if (strcmp((string) risul_query($dati_cliente,0,'partita_iva'),"")) ${"partita_iva_".$num_r} = risul_query($dati_cliente,0,'partita_iva');
$dati_relcliente = esegui_query("select * from $tablerelclienti where idclienti = '".${"numero_cliente_".$num_r}."' and tipo = 'campo_pers' ");
$num_dati_relcliente = numlin_query($dati_relcliente);
for ($num2 = 0 ; $num2 < $num_dati_relcliente ; $num2++) {
${"campo_personalizzato_".risul_query($dati_relcliente,$num2,'testo1')."_".$num_r} = risul_query($dati_relcliente,$num2,'testo3');
} # fine for $num2
chiudi_query($dati_relcliente);
} # fine if (($vedi_clienti != "PROPRI" and...
chiudi_query($dati_cliente);
} # fine if ($vedi_clienti != "NO")
${"numero_prenotazione_".$num_r} = $id_prenota;
if ($priv_mod_codice == "s") {
$cod_prenota = risul_query($dati_prenota,0,'codice');
${"codice_prenotazione_".$num_r} = substr($cod_prenota,0,2).${"numero_cliente_".$num_r}.substr($cod_prenota,2,1).$id_prenota.substr($anno,-1).substr($cod_prenota,-1);
} # fine if ($priv_mod_codice == "s")
$id_data_inizio = risul_query($dati_prenota,0,'iddatainizio');
$id_data_fine = risul_query($dati_prenota,0,'iddatafine');
${"data_fine_".$num_r} = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_fine'");
${"data_fine_".$num_r} = risul_query(${"data_fine_".$num_r},0,'datafine');
${"unita_occupata_".$num_r} = risul_query($dati_prenota,0,'idappartamenti');

if ($id_data_inizio) {
${"data_inizio_".$num_r} = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_inizio'");
${"data_inizio_".$num_r} = risul_query(${"data_inizio_".$num_r},0,'datainizio');
${"num_periodi_".$num_r} = $id_data_fine - $id_data_inizio + 1;
$tariffa = risul_query($dati_prenota,0,'tariffa');
$tariffa = explode("#@&",$tariffa);
$costo_tariffa = (double) $tariffa[1];
$valuta_tariffa = risul_query($dati_prenota,0,'valuta');
if ($valuta_tariffa) {
$valuta_tariffa = explode(">",$valuta_tariffa);
$valuta_caparra = $valuta_tariffa[1];
$valuta_tariffa = $valuta_tariffa[0];
} # fine if ($d_valuta_tariffa)
else $valuta_caparra = "";
if ($valuta_tariffa) {
$valuta_tariffa = explode("<",$valuta_tariffa);
${"tasso_cambio_tariffa_".$num_r} = $valuta_tariffa[1];
${"valuta_tariffa_".$num_r} = $valuta_tariffa[0];
${"costo_valuta_tariffa_".$num_r} = converti_valuta($costo_tariffa,$valuta_tariffa[1],$valuta_tariffa[2]);
} # fine if ($valuta_tariffa)
$tariffesettimanali = risul_query($dati_prenota,0,'tariffesettimanali');
${"percentuale_tasse_tariffa_".$num_r} = "0";
if ($priv_mod_tariffa != "n") {
${"nome_tariffa_".$num_r} = $tariffa[0];
if ($priv_mod_tariffa != "p") ${"costo_tariffa_".$num_r} = $costo_tariffa;
${"tariffesettimanali_".$num_r} = $tariffesettimanali;
if (strcmp((string) risul_query($dati_prenota,0,'tasseperc'),"")) ${"percentuale_tasse_tariffa_".$num_r} = risul_query($dati_prenota,0,'tasseperc');
} # fine if ($priv_mod_tariffa != "n")
$sconto = (double) risul_query($dati_prenota,0,'sconto');
if (strcmp((string) $sconto,"") and $priv_mod_sconto != "n") {
${"sconto_".$num_r} = $sconto;
if ($valuta_tariffa) ${"valore_valuta_sconto_".$num_r} = converti_valuta($sconto,$valuta_tariffa[1],$valuta_tariffa[2]);
} # fine if (strcmp((string) $sconto,"") and $priv_mod_sconto != "n")
if (strcmp((string) risul_query($dati_prenota,0,'commento'),"")) {
${"commento_".$num_r} = risul_query($dati_prenota,0,'commento');
if (strstr(${"commento_".$num_r},">")) {
$comm = explode(">",${"commento_".$num_r});
${"commento_".$num_r} = $comm[0];
if (strcmp((string) $comm[1],"")) ${"promemoria_entrata_".$num_r} = $comm[1];
if (strcmp((string) $comm[2],"")) ${"promemoria_uscita_".$num_r} = $comm[2];
for ($num2 = 3 ; $num2 < count($comm) ; $num2++) {
$comm_pers = explode("<",$comm[$num2]);
if (strcmp((string) $comm_pers[1],"")) ${"commento_personalizzato_".$comm_pers[0]."_".$num_r} = $comm_pers[1];
} # fine for $num2
} # fine if (strstr(${"commento_".$num_r},">"))
} # fine if (strcmp(risul_query($dati_prenota,0,'commento'),""))
if (strcmp((string) risul_query($dati_prenota,0,'origine'),"")) ${"origine_prenotazione_".$num_r} = risul_query($dati_prenota,0,'origine');
$caparra = risul_query($dati_prenota,0,'caparra');
if ($priv_mod_caparra != "n") {
if (strcmp((string) $caparra,"")) ${"caparra_".$num_r} = $caparra;
if (strcmp((string) risul_query($dati_prenota,0,'commissioni'),"")) ${"commissioni_".$num_r} = risul_query($dati_prenota,0,'commissioni');
if ($valuta_caparra) {
$valuta_caparra = explode("<",$valuta_caparra);
${"tasso_cambio_caparra_".$num_r} = $valuta_caparra[1];
${"valuta_caparra_".$num_r} = $valuta_caparra[0];
${"valore_valuta_caparra_".$num_r} = converti_valuta($caparra,$valuta_caparra[1],$valuta_caparra[2]);
} # fine if ($valuta_caparra)
if (strcmp((string) risul_query($dati_prenota,0,'metodo_pagamento'),"")) ${"metodo_pagamento_caparra_".$num_r} = risul_query($dati_prenota,0,'metodo_pagamento');
} # fine if ($priv_mod_caparra != "n")
$numpersone = risul_query($dati_prenota,0,'num_persone');
if (strcmp((string) $numpersone,"")) ${"num_persone_".$num_r} = $numpersone;
$cat_persone = dati_cat_pers_p($dati_prenota,0,$dati_cat_pers,$numpersone,$lingua_mex,0);
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if (!empty($cat_persone[$num2]['esist'])) ${"num_persone_tipo_".($num2 + 1)."_".$num_r} = $cat_persone[$cat_persone[$num2]['ncp']]['molt'];
else ${"num_persone_tipo_".($num2 + 1)."_".$num_r} = "0";
} # fine for $num2
${"unita_assegnabili_".$num_r} = risul_query($dati_prenota,0,'app_assegnabili');
$pagato = risul_query($dati_prenota,0,'pagato');
if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i") ${"pagato_".$num_r} = $pagato;
if ($pagato or substr((string) risul_query($dati_prenota,0,'conferma'),0,1) == "S") ${"conferma_".$num_r} = 1;
else ${"conferma_".$num_r} = "";
$num_letti_agg = array('max' => 0);
$costo_agg_tot = (double) 0;
$dati_cap = dati_costi_agg_prenota($tablecostiprenota,$id_prenota,$dati_cat_pers);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","");
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$costo_tariffa,$tariffesettimanali,($costo_tariffa + $costo_agg_tot - $sconto),$caparra,$numpersone,fixset($dati_cap[$numca]['cat_pers']),0,0,1);
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
if ($priv_mod_costi_agg != "n") {
${"nome_costo_agg".$numca."_".$num_r} = $dati_cap[$numca]['nome'];
${"percentuale_tasse_costo_agg".$numca."_".$num_r} = "0";
if ($priv_mod_costi_agg != "p") {
${"val_costo_agg".$numca."_".$num_r} = $costo_agg_parziale;
if (strcmp((string) $dati_cap[$numca]['tasseperc'],"")) ${"percentuale_tasse_costo_agg".$numca."_".$num_r} = (string) $dati_cap[$numca]['tasseperc'];
${"valore_giornaliero_max_costo_agg".$numca."_".$num_r} = $prezzi_giorn_costo;
} # fine if ($priv_mod_costi_agg != "p")
${"moltiplica_max_costo_agg".$numca."_".$num_r} = $dati_cap[$numca]['moltiplica_costo'];
if ($dati_cap[$numca]['tipo'] == "s") {
if ($dati_cap[$numca]['associasett'] == "s" and !$dati_cap[$numca]['settimane']) ${"giorni_costo_agg".$numca."_".$num_r} = ",";
else ${"giorni_costo_agg".$numca."_".$num_r} = $dati_cap[$numca]['settimane'];
} # fine if ($dati_cap[$numca]['tipo'] == "s")
else ${"giorni_costo_agg".$numca."_".$num_r} = "";
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num'] and $dati_cap[$numca]['cat_pers']['esist'][0]) ${"tipo_persona_costo_agg".$numca."_".$num_r} = ($dati_cap[$numca]['cat_pers']['ord'][0] + 1);
else ${"tipo_persona_costo_agg".$numca."_".$num_r} = "";
${"data_inserimento_costo_agg".$numca."_".$num_r} = substr($dati_cap[$numca]['datainserimento'],0,10);
${"utente_inserimento_costo_agg".$numca."_".$num_r} = $dati_cap[$numca]['utente_inserimento'];
} # fine if ($priv_mod_costi_agg != "n")
} # fine for $numca
if ($priv_mod_costi_agg != "n") ${"num_costi_aggiuntivi_".$num_r} = (string) $dati_cap['num'];
else ${"num_costi_aggiuntivi_".$num_r} = "0";
if (!empty($num_letti_agg['max'])) ${"n_letti_agg_".$num_r} = $num_letti_agg['max'];
else ${"n_letti_agg_".$num_r} = null;
if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
${"costo_tot_".$num_r} = $costo_tariffa + $costo_agg_tot - $sconto;
if ($valuta_tariffa) {
$valuta_tariffa[3] = converti_valuta(($costo_tariffa - $sconto),$valuta_tariffa[1],$valuta_tariffa[2]);
if (!strcmp((string) $altre_valute['id'][$valuta_tariffa[0]],"")) $valuta_tariffa[4] = converti_valuta($costo_agg_tot,$valuta_tariffa[1],$valuta_tariffa[2]);
else $valuta_tariffa[4] = converti_valuta($costo_agg_tot,$altre_valute[$altre_valute['id'][$valuta_tariffa[0]]]['cambio'],$altre_valute[$altre_valute['id'][$valuta_tariffa[0]]]['arrotond']);
${"costo_valuta_tot_".$num_r} = round(($valuta_tariffa[3] + $valuta_tariffa[4]),2);
} # fine if ($valuta_tariffa)
} # fine if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i")
${"orario_registrazione_entrata_".$num_r} = risul_query($dati_prenota,0,'checkin');
if (!${"orario_registrazione_entrata_".$num_r}) {
${"orario_registrazione_uscita_".$num_r} = "";
${"orario_entrata_stimato_".$num_r} = risul_query($dati_prenota,0,'checkout');
} # fine if (!${"orario_registrazione_entrata_".$num_r})
else {
${"orario_registrazione_uscita_".$num_r} = risul_query($dati_prenota,0,'checkout');
${"orario_entrata_stimato_".$num_r} = "";
} # fine else if (!${"orario_registrazione_entrata_".$num_r})
} # fine if ($id_data_inizio)

$num_pagamenti = 0;
if (!$id_data_inizio or ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i")) {
${"id_anni_prec_".$num_r} = risul_query($dati_prenota,0,'id_anni_prec');
if (${"id_anni_prec_".$num_r}) {
if ($tabelle_lock) {
unlock_tabelle($tabelle_lock);
$tabelle_lock = "";
} # fine if ($tabelle_lock)
$id_anni_prec_vett = explode(";",${"id_anni_prec_".$num_r});
for ($num2 = 1 ; $num2 < (count($id_anni_prec_vett) - 1) ; $num2++) {
$id_anno_prec = explode(",",$id_anni_prec_vett[$num2]);
$anno_prec_esistente = esegui_query("select idanni from $tableanni where idanni = '".aggslashdb($id_anno_prec[0])."'");
if (numlin_query($anno_prec_esistente)) {
if (!$id_data_inizio and $num2 == 1) {
chiudi_query($dati_prenota);
$dati_prenota = esegui_query("select * from $PHPR_TAB_PRE"."prenota".$id_anno_prec[0]." where idprenota = '".$id_anno_prec[1]."' ");
if (numlin_query($dati_prenota) == 1) {
$id_data_inizio = risul_query($dati_prenota,0,'iddatainizio');
$id_data_fine = risul_query($dati_prenota,0,'iddatafine');
${"data_fine_".$num_r} = esegui_query("select * from $PHPR_TAB_PRE"."periodi".$id_anno_prec[0]." where idperiodi = '$id_data_fine'");
${"data_fine_".$num_r} = risul_query(${"data_fine_".$num_r},0,'datafine');
if ($id_data_inizio) {
${"data_inizio_".$num_r} = esegui_query("select * from $PHPR_TAB_PRE"."periodi".$id_anno_prec[0]." where idperiodi = '$id_data_inizio'");
${"data_inizio_".$num_r} = risul_query(${"data_inizio_".$num_r},0,'datainizio');
${"num_periodi_".$num_r} = $id_data_fine - $id_data_inizio + 1;
} # fine if ($id_data_inizio)
} # fine if (numlin_query($dati_prenota) == 1)
} # fine if  (!$id_data_inizio and $num2 == 1)
if ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
$pagamenti = esegui_query("select * from $PHPR_TAB_PRE"."soldi".$id_anno_prec[0]." where saldo_prenota is not NULL and motivazione $LIKE '%;".$id_anno_prec[1]."' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num3 = 0 ; $num3 < $num_pagamenti2 ; $num3++) {
${"data_paga".$num_pagamenti."_".$num_r} = substr(risul_query($pagamenti,$num3,'data_inserimento'),0,10);
${"utente_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num3,'utente_inserimento');
if (strcmp((string) risul_query($pagamenti,$num3,'metodo_pagamento'),"")) ${"metodo_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num3,'metodo_pagamento');
${"saldo_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num3,'saldo_prenota');
if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 2.99) {
$valuta_paga = risul_query($pagamenti,$num3,'valuta');
if ($valuta_paga) {
$valuta_paga = explode(">",$valuta_paga);
${"valuta_paga".$num_pagamenti."_".$num_r} = $valuta_paga[0];
${"tasso_cambio_paga".$num_pagamenti."_".$num_r} = $valuta_paga[1];
${"valore_valuta_paga".$num_pagamenti."_".$num_r} = converti_valuta(${"saldo_paga".$num_pagamenti."_".$num_r},$valuta_paga[1],$valuta_paga[2]);
} # fine if ($valuta_paga)
if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 3.04) {
${"data_operazione_paga".$num_pagamenti."_".$num_r} = substr(risul_query($pagamenti,$num3,'data_transazione'),0,10);
if (strcmp((string) risul_query($pagamenti,$num3,'id_pagamento'),"")) ${"id_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num3,'id_pagamento');
if (strcmp((string) risul_query($pagamenti,$num3,'note'),"")) ${"note_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num3,'note');
} # fine if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 3.04)
} # fine if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 2.99)
$num_pagamenti++;
} # fine for $num3
chiudi_query($pagamenti);
} # fine if ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i")
} # fine if (numlin_query($anno_prec_esistente))
} # fine for $num2
} # fine if (${"id_anni_prec_".$num_r})
} # fine if (!$id_data_inizio or ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i"))
if ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
$pagamenti = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num2 = 0 ; $num2 < $num_pagamenti2 ; $num2++) {
${"data_paga".$num_pagamenti."_".$num_r} = substr(risul_query($pagamenti,$num2,'data_inserimento'),0,10);
${"utente_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num2,'utente_inserimento');
if (strcmp((string) risul_query($pagamenti,$num2,'metodo_pagamento'),"")) ${"metodo_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num2,'metodo_pagamento');
${"saldo_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num2,'saldo_prenota');
if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 2.99) {
$valuta_paga = risul_query($pagamenti,$num2,'valuta');
if ($valuta_paga) {
$valuta_paga = explode(">",$valuta_paga);
${"valuta_paga".$num_pagamenti."_".$num_r} = $valuta_paga[0];
${"tasso_cambio_paga".$num_pagamenti."_".$num_r} = $valuta_paga[1];
${"valore_valuta_paga".$num_pagamenti."_".$num_r} = converti_valuta(${"saldo_paga".$num_pagamenti."_".$num_r},$valuta_paga[1],$valuta_paga[2]);
} # fine if ($valuta_paga)
if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 3.04) {
${"data_operazione_paga".$num_pagamenti."_".$num_r} = substr(risul_query($pagamenti,$num2,'data_transazione'),0,10);
if (strcmp((string) risul_query($pagamenti,$num2,'id_pagamento'),"")) ${"id_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num2,'id_pagamento');
if (strcmp((string) risul_query($pagamenti,$num2,'note'),"")) ${"note_paga".$num_pagamenti."_".$num_r} = risul_query($pagamenti,$num2,'note');
} # fine if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 3.04)
} # fine if (!defined('C_VERSIONE_ATTUALE') or C_VERSIONE_ATTUALE > 2.99)
$num_pagamenti++;
} # fine for $num2
${"num_pagamenti_".$num_r} = (string) $num_pagamenti;
chiudi_query($pagamenti);
} # fine if ($priv_vedi_tab_costi != "n" and $priv_mod_pagato != "n" and $priv_mod_pagato != "i")
} # fine if ($cont == "SI")
} # fine if (numlin_query($dati_prenota) == 1)
chiudi_query($dati_prenota);
} # fine for $num1

unset($tariffa);
unset($costo_tariffa);
unset($valuta_tariffa);
unset($tariffesettimanali);
unset($sconto);
unset($caparra);
unset($valuta_caparra);
unset($costo_agg_tot);
unset($costo_agg_parziale);
unset($utente_inserimento);
unset($valuta_paga);
unset($num_pagamenti);
if ($canc_altre_valute) unset($altre_valute);
unset($canc_altre_valute);

$lista_prenota = $lista_p;
$num_ripeti = $num_r;
unset($lista_p);
unset($num_r);
if ($tabelle_lock) unlock_tabelle($tabelle_lock);



?>