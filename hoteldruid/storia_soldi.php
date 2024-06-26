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

$pag = "storia_soldi.php";
$titolo = "HotelDruid: Storico Entrate";

$var_pag = array();
$var_pag[0] = 'senza_colori';
$var_pag[1] = 'metodo_selezionato';
$var_pag[2] = 'cerca_prenota';
$var_pag[3] = 'cerca_inizioperiodo';
$var_pag[4] = 'cerca_anno_inizioperiodo';
$var_pag[5] = 'cerca_fineperiodo';
$var_pag[6] = 'cerca_anno_fineperiodo';
$var_pag[7] = 'azzera_soldi';
$var_pag[8] = 'continua';
$var_pag[9] = 'id_transazione';
$var_pag[10] = 'pagina_prenota';
$var_pag[11] = 'cambia_colori';
$var_pag[12] = 'tipo_tabella';
$var_pag[13] = 'torna_indietro';
$var_pag[14] = 'show_bar';
$n_var_pag = 15;

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableprenotacanc = $PHPR_TAB_PRE."prenotacanc".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tablecosti = $PHPR_TAB_PRE."costi".$anno;
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tableversioni = $PHPR_TAB_PRE."versioni";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$prendi_gruppi = "";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_costi = substr($priv_vedi_tab,2,1);
if ($priv_vedi_tab_costi == "g") $prendi_gruppi = "SI";
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_prenota_iniziate = substr($priv_mod_prenota,11,1);
$priv_mod_prenota_ore = substr($priv_mod_prenota,12,3);
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)

unset($utenti_gruppi);
$utenti_gruppi[$id_utente] = 1;
if ($prendi_gruppi == "SI") {
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) $utenti_gruppi[risul_query($utenti_gruppo,$num2,'idutente')] = 1;
} # fine for $num1
} # fine if ($prendi_gruppi == "SI")

} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$priv_vedi_tab_costi = "s";
$vedi_clienti = "SI";
$priv_mod_prenotazioni = "s";
$priv_mod_prenota_iniziate = "s";
$priv_mod_prenota_ore = "000";
} # fine if ($id_utente != 1)
if ($anno_utente_attivato == "SI" and $priv_vedi_tab_costi != "n") {

if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$inserimento_nuovi_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_mod_prenotazioni = "n";
$modifica_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_ins_costi_agg = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


$titolo = "HotelDruid: ".mex("Storico Entrate",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$stile_soldi = stile_soldi();
$stile_data = stile_data();
$Euro = nome_valuta();

if (!empty($senza_colori)) $senza_colori = "SI";
else $senza_colori = "";
if (!empty($pagina_prenota) and controlla_num_pos($pagina_prenota) != "SI") $pagina_prenota = "";


if (isset($azzera_soldi) and $azzera_soldi == "SI" and $id_utente == 1) {
if (empty($continua)) {
$mostra_tabella = "NO";
$tabelle_lock = array($tableversioni,$tabletransazioni);
$altre_tab_lock = array($tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$id_transazione = crea_id_sessione("",$tableversioni,8);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
global $REMOTE_ADDR;
$REMOTE_ADDR = aggslashdb($REMOTE_ADDR);
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,ultimo_accesso) values ('$id_transazione','$id_sessione','can_s','$ultimo_accesso')");
unlock_tabelle($tabelle_lock);
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
".mex("Si è sicuri di voler <div style=\"display: inline; color: red;\"><b>azzerare</b></div> tutte le entrate e le uscite delle prenotazioni e i soldi trasferiti in cassa del",$pag)." $anno?<br>
<table><tr><td height=2></td></tr><tr><td>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"azzera_soldi\" value=\"SI\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<input type=\"hidden\" name=\"id_transazione\" value=\"$id_transazione\">
<button class=\"crep\" type=\"submit\"><div>".mex("SI",$pag)."</div></button>
</div></form></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<button class=\"gobk\" type=\"submit\"><div>".mex("NO",$pag)."</div></button>
</div></form></tr></td></table>";
} # fine if (empty($continua))
else {
$tabelle_lock = array($tablecosti,$tablesoldi,$tabletransazioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$transazione_presente = esegui_query("select * from $tabletransazioni where idtransazioni = '".aggslashdb($id_transazione)."' and idsessione = '".aggslashdb($id_sessione)."' and tipo_transazione = 'can_s'");
if (numlin_query($transazione_presente) == 1) {
esegui_query("delete from $tablesoldi where idsoldi != '1'");
esegui_query("update $tablecosti set val_costo = '0' where idcosti = '0'");
esegui_query("delete from $tabletransazioni where idtransazioni = '".aggslashdb($id_transazione)."' and idsessione = '".aggslashdb($id_sessione)."' and tipo_transazione = 'can_s'");
} # fine if (numlin_query($transazione_presente) == 1)
unlock_tabelle($tabelle_lock);
} # fine else if (empty($continua))
} # fine if (isset($azzera_soldi) and $azzera_soldi == "SI" and $id_utente == 1)



if (!isset($mostra_tabella) or $mostra_tabella != "NO") {


$periodo_query = "";
$cond_metodo = "";
$frase_periodo = "";
if (!isset($cerca_prenota)) $cerca_prenota = null;
if ($priv_mod_prenota_iniziate != "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);

if (!$cerca_prenota) {
echo "<table class=\"buttonbar\"><tr><td align=\"left\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"metodo_selezionato\" value=\"".htmlspecialchars(fixstr($metodo_selezionato))."\">
<input class=\"sbutton\" type=\"submit\" name=\"cerca_prenota\" value=\"".mex("Vedi le modifiche",$pag)."\">
 ".mex("dal",$pag)." <select name=\"cerca_inizioperiodo\">
<option value=\"\">----</option>";
$oggi = date("-m-d",(time() + (C_DIFF_ORE * 3600)));
$domani = date("-m-d",(time() + (C_DIFF_ORE * 3600) + 86400));
$anno_prec = $anno - 1;
$anno_succ = $anno + 1;
$numgiorno = 1;
do {
$data_select = date("-m-d" , mktime(0,0,0,1,$numgiorno,$anno));
$data_select_vedi = date("d-m" , mktime(0,0,0,1,$numgiorno,$anno));
$numgiorno++;
$annocreato = date("Y" , mktime(0,0,0,1,$numgiorno,$anno));
if ($data_select == $oggi) $sel = " selected";
else $sel = "";
echo "<option value=\"$data_select\"$sel>$data_select_vedi</option>";
} while ($annocreato == $anno);
echo "</select>
<select name=\"cerca_anno_inizioperiodo\">
<option value=\"$anno_prec\">$anno_prec</option>
<option value=\"$anno\" selected>$anno</option>
<option value=\"$anno_succ\">$anno_succ</option>
</select>
 ".mex("al",$pag)." <select name=\"cerca_fineperiodo\">
<option value=\"\">----</option>";
$numgiorno = 1;
do {
$data_select = date("-m-d" , mktime(0,0,0,1,$numgiorno,$anno));
$data_select_vedi = date("d-m" , mktime(0,0,0,1,$numgiorno,$anno));
$numgiorno++;
$annocreato = date("Y" , mktime(0,0,0,1,$numgiorno,$anno));
if ($data_select == $domani) $sel = " selected";
else $sel = "";
echo "<option value=\"$data_select\"$sel>$data_select_vedi</option>";
} while ($annocreato == $anno);
echo "</select>
<select name=\"cerca_anno_fineperiodo\">
<option value=\"$anno_prec\">$anno_prec</option>
<option value=\"$anno\" selected>$anno</option>
<option value=\"$anno_succ\">$anno_succ</option>
</select></div></form></td>";
if ($id_utente == 1) {
echo "<td style=\"width: 200px;\" align=\"center\" >
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"azzera_soldi\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Azzera entrate e uscite prenotazioni",$pag)."\">
</div></form></td>";
} # fine if ($id_utente == 1)
echo "<td align=\"right\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"pagina_prenota\" value=\"".htmlspecialchars(fixstr($pagina_prenota))."\">
<input type=\"hidden\" name=\"metodo_selezionato\" value=\"".htmlspecialchars(fixstr($metodo_selezionato))."\">";
if (!$senza_colori) {
echo "<input type=\"hidden\" name=\"senza_colori\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_colori\" value=\"".mex("Senza colori",$pag)."\">";
} # fine if (!$senza_colori)
else echo "<input class=\"sbutton\" type=\"submit\" name=\"cambia_colori\" value=\"".mex("Con colori",$pag)."\">";
echo "</div></form>";
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($metodi_pagamento) {
echo "</td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"pagina_prenota\" value=\"$pagina_prenota\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Vedi solo le entrate-uscite",$pag)."\">
 ".mex("con metodo",$pag)." <select name=\"metodo_selezionato\">
<option value=\"\">----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) echo "<option value=\"".htmlspecialchars($metodi_pagamento[$num1])."\">$metodi_pagamento[$num1]</option>";
echo "</select></div></form></td><td></td><td>";
} # fine if ($metodi_pagamento)
echo "</td></tr></table>";
} # fine if (!$cerca_prenota)

else {
if ($cerca_inizioperiodo) {
$cerca_inizioperiodo = htmlspecialchars($cerca_anno_inizioperiodo.$cerca_inizioperiodo);
$cerca_inizioperiodo_f = formatta_data($cerca_inizioperiodo,$stile_data);
$periodo_query = " and data_inserimento >= '".aggslashdb($cerca_inizioperiodo)."'";
$frase_periodo = " ".mex("dal",$pag)." $cerca_inizioperiodo_f";
} # fine if ($cerca_inizioperiodo)
if ($cerca_fineperiodo) {
$cerca_fineperiodo = htmlspecialchars($cerca_anno_fineperiodo.$cerca_fineperiodo);
$cerca_fineperiodo_f = formatta_data($cerca_fineperiodo,$stile_data);
$periodo_query .= " and data_inserimento <= '".aggslashdb($cerca_fineperiodo)."'";
$frase_periodo .= " ".mex("fino al",$pag)." $cerca_fineperiodo_f";
} # fine if ($cerca_fineperiodo)
} # fine else if (!$cerca_prenota)

$saldo_prenota_TOT = 0;
$saldo_valuta_TOT = array();
if (!$senza_colori) $class = "t1 t1color";
else $class = "t1wc";

$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente_id[$idutenti] = risul_query($tutti_utenti,$num1,'nome_utente');
} # fine for $num1

if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g") {
$condizione_variazioni_proprie = "and ( utente_inserimento = '$id_utente'";
if ($priv_vedi_tab_costi == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_variazioni_proprie .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_tab_costi == "g")
$condizione_variazioni_proprie .= " )";
} # fine if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g")
else $condizione_variazioni_proprie = "";

if ($metodo_selezionato) {
if (@get_magic_quotes_gpc()) $metodo_selezionato = stripslashes($metodo_selezionato);
$cond_metodo = "and metodo_pagamento = '".aggslashdb($metodo_selezionato)."'";
} # fine if ($metodo_selezionato)

echo "<h3 id=\"h_resp\"><span>".mex("Storia delle entate e uscite delle prenotazioni inserite nel",$pag)." $anno$frase_periodo</span></h3>";
if ($metodo_selezionato) {
if (function_exists('htmlspecialchars_decode')) $metodo_selezionato = htmlspecialchars_decode($metodo_selezionato);
echo "<div style=\"text-align: center;\">(".htmlspecialchars($metodo_selezionato).")</div>";
} # fine if ($metodo_selezionato)
echo "<br>";

$storia_soldi_prenota = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL$periodo_query $cond_metodo $condizione_variazioni_proprie order by idsoldi");
$num_storia_soldi_prenota = numlin_query($storia_soldi_prenota);

$stringa_pagine = "";
if (!$cerca_prenota) {
$num_vedi_in_tab = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_storia_soldi' and idutente = '$id_utente'");
$num_vedi_in_tab = risul_query($num_vedi_in_tab,0,'valpersonalizza_num');
if ($num_storia_soldi_prenota > $num_vedi_in_tab) {
$num_pagine_prenota = ceil($num_storia_soldi_prenota/$num_vedi_in_tab);
$stringa_pagine = "<div style=\"text-align: center;\"><small>".mex("pagine",$pag)."</small>:";
if (!$pagina_prenota) $pagina_prenota = $num_pagine_prenota;
for ($num1 = 1 ; $num1 <= $num_pagine_prenota ; $num1++) {
$stringa_pagine .= " ";
if ($num1 != $pagina_prenota) {
$stringa_pagine .= "<a href=\"./storia_soldi.php?anno=$anno&amp;id_sessione=$id_sessione&amp;senza_colori=$senza_colori&amp;pagina_prenota=$num1\">";
} # fine if ($num1 != $pagina_prenota)
else $stringa_pagine .= "<b>";
$stringa_pagine .= "$num1";
if ($num1 != $pagina_prenota) $stringa_pagine .= "</a>";
else $stringa_pagine .= "</b>";
} # fine for $num1
$stringa_pagine .= "</div>";
echo $stringa_pagine;
$colonne = 11;
if ($num_tutti_utenti > 1) $colonne++;
$stringa_puntini_tab = "<tr><td colspan=\"$colonne\">...</td></tr>";
} # fine if ($num_storia_soldi_prenota > $num_vedi_in_tab)
else $pagina_prenota = 1;
} # fine if (!$cerca_prenota)

echo "<div class=\"tab_cont\">
<table class=\"$class\" style=\"margin-left: auto; margin-right: auto;\" width=200 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td colspan=4>".mex("Dati della prenotazione",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Pagato prima",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Pagato dopo",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Saldo",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Metodo",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Id",$pag)."</td>
<td class=\"t1top\" rowspan=2>".mex("Note",$pag)."</td>";
if ($num_tutti_utenti > 1) echo "<td class=\"t1top\" rowspan=2>".mex("Utente",$pag)."</td>";
echo "<td class=\"t1top\" rowspan=2>".str_replace("_","&nbsp;",mex("Data_della modifica",$pag))."</td></tr>
<tr><td>".mex("N°",$pag)."</td>
<td>".str_replace("_","&nbsp;",mex("Cognome_cliente",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Data_iniziale",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Data_finale",$pag))."</td></tr>";

if (!$cerca_prenota and $num_storia_soldi_prenota > $num_vedi_in_tab and $pagina_prenota != 1) echo $stringa_puntini_tab;

for ($num1 = 0 ; $num1 < $num_storia_soldi_prenota ; $num1 = $num1 + 1) {
$data_inserimento = substr(risul_query($storia_soldi_prenota,$num1,'data_inserimento'),0,10);
$data_inserimento_f = formatta_data($data_inserimento,$stile_data);
$data_transazione = substr(risul_query($storia_soldi_prenota,$num1,'data_transazione'),0,10);
if ($data_inserimento != $data_transazione) $data_inserimento_f .= " <small>(".formatta_data($data_transazione,$stile_data).")</small>";
$motivazione = risul_query($storia_soldi_prenota,$num1,'motivazione');
$motivazione = explode(";",$motivazione);
$cognome = esegui_query("select cognome,utente_inserimento from $tableclienti where idclienti = '".$motivazione[0]."'");
$mostra_cliente = "SI";
if ($vedi_clienti == "NO") $mostra_cliente = "NO";
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$utente_inserimento_cli = risul_query($cognome,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento_cli != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento_cli]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
if ($mostra_cliente == "NO") $cognome = mex("Cliente",$pag)." ".$motivazione[0];
else $cognome = risul_query($cognome,0,'cognome');
if ($motivazione[1]) {
$data_inizio = esegui_query("select * from $tableperiodi where idperiodi = '".$motivazione[1]."'");
$data_inizio = risul_query($data_inizio,0,'datainizio');
$data_inizio_f = formatta_data($data_inizio,$stile_data);
} # fine if ($motivazione[1])
else $data_inizio_f = "&nbsp;";
if ($motivazione[2]) {
$data_fine = esegui_query("select * from $tableperiodi where idperiodi = '".$motivazione[2]."'");
$data_fine = risul_query($data_fine,0,'datafine');
$data_fine_f = formatta_data($data_fine,$stile_data);
} # fine if ($motivazione[2])
else $data_fine_f = "&nbsp;";

if ($motivazione[3]) {
$num_prenota = $motivazione[3];
if ($priv_mod_prenotazioni != "n") {
$stilebarrato = "";
$pcanc = "";
$prenota_esist = esegui_query("select iddatainizio,datainserimento,utente_inserimento from $tableprenota where idprenota = '$num_prenota' ");
if (!numlin_query($prenota_esist)) {
$prenota_esist = esegui_query("select iddatainizio,datainserimento,utente_inserimento from $tableprenotacanc where idprenota = '$num_prenota' ");
if (numlin_query($prenota_esist)) {
$stilebarrato = " style=\"text-decoration: line-through\"";
$pcanc = "&amp;pcanc=1";
} # fine if (numlin_query($prenota_esist))
} # fine if (!numlin_query($prenota_esist))
if (numlin_query($prenota_esist)) {
$link_modifica = 1;
$utente_ins_pren = risul_query($prenota_esist,0,'utente_inserimento');
$iddatainizio = risul_query($prenota_esist,0,'iddatainizio');
if ($priv_mod_prenotazioni == "p" and $utente_ins_pren != $id_utente) $link_modifica = 0;
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_ins_pren]) $link_modifica = 0;
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $iddatainizio) $link_modifica = 0;
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenota_esist,0,'datainserimento');
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $link_modifica = 0;
} # fine if ($priv_mod_prenota_ore != "000")
if ($link_modifica) $num_prenota = "<a$stilebarrato href=\"modifica_prenota.php?id_prenota=$num_prenota$pcanc&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=storia_soldi.php\">$num_prenota</a>";
} # fine if (numlin_query($prenota_esist))
} # fine if ($priv_mod_prenotazioni != "n")
} # fine if ($motivazione[3])
else $num_prenota = "&nbsp;";

$soldi_prima = risul_query($storia_soldi_prenota,$num1,'soldi_prima');
$saldo_prenota = risul_query($storia_soldi_prenota,$num1,'saldo_prenota');
$soldi_dopo = $soldi_prima + $saldo_prenota;
$saldo_prenota_TOT = $saldo_prenota_TOT + $saldo_prenota;
$id_pagamento = risul_query($storia_soldi_prenota,$num1,'id_pagamento');
if (!$id_pagamento) $id_pagamento = "&nbsp;";
else {
if (strlen($id_pagamento) > 36) $id_pagamento = "<small><small>$id_pagamento</small></small>";
elseif (strlen($id_pagamento) > 24) $id_pagamento = "<small>$id_pagamento</small>";
} # fine else if (!$id_pagamento)
$metodo_pagamento = risul_query($storia_soldi_prenota,$num1,'metodo_pagamento');
if (!$metodo_pagamento) $metodo_pagamento = "&nbsp;";
$note_pagamento = risul_query($storia_soldi_prenota,$num1,'note');
if (!$note_pagamento) $note_pagamento = "&nbsp;";
else {
if (strlen($note_pagamento) > 36) $note_pagamento = "<small><small>$note_pagamento</small></small>";
elseif (strlen($note_pagamento) > 24) $note_pagamento = "<small>$note_pagamento</small>";
} # fine else if (!$note_pagamento)
$utente_inserimento = risul_query($storia_soldi_prenota,$num1,'utente_inserimento');
$nome_utente_inserimento = $nome_utente_id[$utente_inserimento];

$soldi_prima_p = punti_in_num($soldi_prima,$stile_soldi);
$soldi_dopo_p = punti_in_num($soldi_dopo,$stile_soldi);
$saldo_prenota_vedi = punti_in_num($saldo_prenota,$stile_soldi);

$valuta = risul_query($storia_soldi_prenota,$num1,'valuta');
if ($valuta) {
$valuta = explode(">",$valuta);
$saldo_valuta = risul_query($storia_soldi_prenota,$num1,'saldo_valuta');
if (!isset($saldo_valuta_TOT[$valuta[0]])) $saldo_valuta_TOT[$valuta[0]] = 0;
$saldo_valuta_TOT[$valuta[0]] += $saldo_valuta;
$saldo_valuta_p = punti_in_num($saldo_valuta,$stile_soldi);
$saldo_prenota_vedi .= "<small> ($saldo_valuta_p&nbsp;".$valuta[0].")</small>";
} # fine if ($valuta)
else {
if (!isset($saldo_valuta_TOT[$Euro])) $saldo_valuta_TOT[$Euro] = 0;
$saldo_valuta_TOT[$Euro] += $saldo_prenota;
} # fine else if ($valuta)

if ($cerca_prenota or (($num1+1) > (($pagina_prenota - 1)*$num_vedi_in_tab) and ($num1+1) <= (($pagina_prenota)*$num_vedi_in_tab)) ) {

echo "<tr><td>$num_prenota</td>
<td class=\"t1left\">$cognome</td>
<td>$data_inizio_f</td>
<td>$data_fine_f</td>
<td>$soldi_prima_p</td>
<td>$soldi_dopo_p</td>
<td>$saldo_prenota_vedi</td>
<td>$metodo_pagamento</td>
<td>$id_pagamento</td>
<td>$note_pagamento</td>";
if ($num_tutti_utenti > 1) echo "<td><small>$nome_utente_inserimento</small></td>";
echo "<td>$data_inserimento_f</td></tr>";

} # fine if ($cerca_prenota or (...

} # fine for $num1

if (!$cerca_prenota and $num_storia_soldi_prenota > $num_vedi_in_tab and $pagina_prenota != $num_pagine_prenota) echo $stringa_puntini_tab;

$saldo_prenota_TOT_vedi = punti_in_num($saldo_prenota_TOT,$stile_soldi);
$altre_valute_TOT = "";
reset($saldo_valuta_TOT);
foreach ($saldo_valuta_TOT as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$saldo_prenota_TOT_vedi .= "<small> (";
if ($saldo_valuta_TOT[$Euro]) $saldo_prenota_TOT_vedi .= $saldo_valuta_TOT[$Euro]."&nbsp;".$Euro." + ";
$saldo_prenota_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)

echo "<tr><td colspan=6><b>".mex("TOTALE",$pag)."</b></td>
<td>$saldo_prenota_TOT_vedi</td>";
if ($num_tutti_utenti > 1) echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>";

$costo_cassa = esegui_query("select * from $tablecosti where idcosti = 0");
$costo_cassa = risul_query($costo_cassa,0,'val_costo');
if ($costo_cassa and !$cerca_prenota) {
$resto_tot = $saldo_prenota_TOT - $costo_cassa;
$costo_cassa_p = punti_in_num($costo_cassa,$stile_soldi);
$resto_tot_p = punti_in_num($resto_tot,$stile_soldi);
echo "<tr><td colspan=\"6\"><b><i>".mex("Trasferito in cassa",$pag).":</i></b></td>
<td>$costo_cassa_p</td>";
if ($num_tutti_utenti > 1) echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr><td colspan=\"6\"><b><i>".mex("RESTO",$pag)."</i></b></td>
<td>$resto_tot_p</td>";
if ($num_tutti_utenti > 1) echo "<td>&nbsp;</td>";
echo "<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>";
} # fine if ($costo_cassa and !$cerca_prenota)

echo "</table></div>
$stringa_pagine

<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"costi\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form><table><tr><td style=\"height: 20px;\"></td></tr></table>";


} # fine if (!isset($mostra_tabella) or $mostra_tabella != "NO")



if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI" and $priv_vedi_tab_costi != "n")
} # fine if ($id_utente)



?>
