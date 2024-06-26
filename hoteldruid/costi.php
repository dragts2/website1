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

$pag = "costi.php";
$titolo = "HotelDruid: Costi Gestione";

$var_pag = array();
$var_pag[0] = 'id_cassa';
$var_pag[1] = 'nome_costo';
$var_pag[2] = 'val_costo';
$var_pag[3] = 'valuta';
$var_pag[4] = 'metodo_pagamento';
$var_pag[5] = 'persona_costo';
$var_pag[6] = 'inserisci_spesa';
$var_pag[7] = 'entrata_da_prenota';
$var_pag[8] = 'inserisci_entrata';
$var_pag[9] = 'id_pagamento';
$var_pag[10] = 'giorno_pagamento';
$var_pag[11] = 'mese_pagamento';
$var_pag[12] = 'anno_pagamento';
$n_var_pag = 13;

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
$tablecosti = $PHPR_TAB_PRE."costi".$anno;
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablecasse = $PHPR_TAB_PRE."casse";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$casse_consentite = risul_query($privilegi_globali_utente,0,'casse_consentite');
$attiva_casse_consentite = substr($casse_consentite,0,1);
if ($attiva_casse_consentite == "s") {
$casse_consentite = explode(",",substr($casse_consentite,2));
unset($casse_consentite_vett);
for ($num1 = 0 ; $num1 < count($casse_consentite) ; $num1++) if ($casse_consentite[$num1]) $casse_consentite_vett[$casse_consentite[$num1]] = "SI";
} # fine if ($attiva_casse_consentite == "s")
$priv_ins_costi = risul_query($privilegi_annuali_utente,0,'priv_ins_costi');
$priv_ins_spese = substr($priv_ins_costi,0,1);
$priv_ins_entrate = substr($priv_ins_costi,1,1);
$priv_entrate_da_prenota = substr($priv_ins_costi,2,1);
$priv_persona_ins_costi = substr($priv_ins_costi,3,1);
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
$nome_utente = esegui_query("select * from $tableutenti where idutenti = '$id_utente'");
$nome_utente = risul_query($nome_utente,0,'nome_utente');
} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$attiva_casse_consentite = "n";
$priv_ins_spese = "s";
$priv_ins_entrate = "s";
$priv_entrate_da_prenota = "c";
$priv_persona_ins_costi = "c";
} # fine else if ($id_utente != 1)

if (defined("C_MASSIMO_NUM_COSTI") and C_MASSIMO_NUM_COSTI != 0) {
$num_costi_esistenti = esegui_query("select idcosti from $tablecosti");
$num_costi_esistenti = numlin_query($num_costi_esistenti);
if ($num_costi_esistenti >= (C_MASSIMO_NUM_COSTI + 1)) {
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
} # fine if ($num_costi_esistenti >= (C_MASSIMO_NUM_COSTI + 1))
} # fine if (defined("C_MASSIMO_NUM_COSTI") and C_MASSIMO_NUM_COSTI != 0)

if ($anno_utente_attivato == "SI") {


$titolo = "HotelDruid: ".mex("Costi Gestione",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");



$Euro = nome_valuta();
$altre_valute = altre_valute();
$stile_soldi = stile_soldi();
$stile_data = stile_data();
$inserire = "";


if ($priv_ins_entrate != "s") $inserisci_entrata = "";
if ($priv_ins_spese != "s") $inserisci_spesa = "";

if (!empty($inserisci_entrata) or !empty($inserisci_spesa)) {
if (!empty($inserisci_entrata)) $inserisci_spesa = "";
$mostra_form_inserimento = "NO";
$tabelle_lock = array($tablecosti);
$altre_tab_lock = array($tablepersonalizza,$tablecasse);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

if (@get_magic_quotes_gpc()) $nome_costo = stripslashes($nome_costo);
$nome_costo = htmlspecialchars(fixstr($nome_costo));
$nome_costo = aggslashdb($nome_costo);
if (@get_magic_quotes_gpc()) $persona_costo = stripslashes($persona_costo);
$persona_costo = htmlspecialchars($persona_costo);
$persona_costo = aggslashdb($persona_costo);
if (!$nome_costo) {
if (!empty($inserisci_entrata)) echo mex("Si deve inserire un nome per l' entrata",$pag).".<br>";
if (!empty($inserisci_spesa)) echo mex("Si deve inserire un nome per la spesa",$pag).".<br>";
$inserire = "NO";
} # fine if (!$nome_costo)

if (empty($val_costo)) {
if (!empty($inserisci_entrata)) echo mex("Si deve inserire il valore dell' entrata",$pag).".<br>";
if (!empty($inserisci_spesa)) echo mex("Si deve inserire il valore della spesa",$pag).".<br>";
$inserire = "NO";
} # fine if (empty($val_costo))
else {
$val_costo = formatta_soldi($val_costo);
if (controlla_soldi($val_costo) == "NO") {
if ($inserisci_entrata) echo mex("Il valore dell' entrata è sbagliato",$pag).".<br>";
if ($inserisci_spesa) echo mex("Il valore della spesa è sbagliato",$pag).".<br>";
$inserire = "NO";
} # fine if (controlla_soldi($val_costo) == "NO")
} # fine else if (empty($val_costo))

$nome_cassa = "";
if (!$id_cassa or controlla_num_pos($id_cassa) != "SI") $inserire = "NO";
else {
if ($attiva_casse_consentite != "n" and $casse_consentite_vett[$id_cassa] != "SI") $inserire = "NO";
else {
$cassa_esistente = esegui_query("select * from $tablecasse where idcasse = '$id_cassa' ");
if (numlin_query($cassa_esistente) != 1) $inserire = "NO";
elseif ($id_cassa != 1) $nome_cassa = risul_query($cassa_esistente,0,'nome_cassa');
} # fine else if ($attiva_casse_consentite != "n" and $casse_consentite_vett[$id_cassa] != "SI")
} # fine else if (!$id_cassa or controlla_num_pos($id_cassa) != "SI")

if (@get_magic_quotes_gpc()) $metodo_pagamento = stripslashes($metodo_pagamento);
$metodo_pagamento = htmlspecialchars(fixstr($metodo_pagamento));
if (strcmp($metodo_pagamento,"")) {
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if (str_replace(",$metodo_pagamento,",",",",$metodi_pagamento,") == ",$metodi_pagamento,") $inserire = "NO";
} # fine if (strcmp($metodo_pagamento,""))

if (strcmp(fixstr($valuta),"")) {
$n_valuta = "-1";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) if ($valuta == $altre_valute[$num1]['nome']) $n_valuta = $num1;
if ($n_valuta == "-1") $inserire = "NO";
else {
$costo_valuta = $val_costo;
$arrotond_tasse = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente'");
$arrotond_tasse = risul_query($arrotond_tasse,0,'valpersonalizza');
$val_costo = (double) $val_costo / (double) $altre_valute[$n_valuta]['cambio'];
$val_costo = $val_costo / (double) $arrotond_tasse;
$val_costo = round($val_costo);
$val_costo = $val_costo * (double) $arrotond_tasse;
$valuta = $altre_valute[$n_valuta]['nome'].">".$altre_valute[$n_valuta]['cambio'].">".$altre_valute[$n_valuta]['arrotond'];
} # fine else if ($n_valuta == "-1")
} # fine if (strcmp(fixstr($valuta),""))
else $costo_valuta = "";

if ($inserire != "NO") {
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$datatransazione = $datainserimento;
if (isset($giorno_pagamento) and isset($mese_pagamento) and isset($anno_pagamento)) {
if ($giorno_pagamento >= 1 and $giorno_pagamento <= 31 and $mese_pagamento >= 1 and $mese_pagamento <= 12) {
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
if ($anno_pagamento >= ($anno_corr - 2) and $anno_pagamento <= ($anno_corr + 1)) $datatransazione = date("Y-m-d H:i:s",mktime(0,0,0,(int) $mese_pagamento,(int) $giorno_pagamento,(int) $anno_pagamento));
} # fine if ($giorno_pagamento >= 1 and $giorno_pagamento <= 31 and $mese_pagamento >= 1 and...
} # fine if (isset($giorno_pagamento) and isset($mese_pagamento) and isset($anno_pagamento))
if ($priv_persona_ins_costi != "c") unset($persona_costo);
if ($priv_persona_ins_costi == "u") $persona_costo = $nome_utente;
if ($priv_entrate_da_prenota != "c") unset($entrata_da_prenota);
if ($priv_entrate_da_prenota == "s") $entrata_da_prenota = "SI";
$provenienza_costo = "";
if (!empty($inserisci_entrata) and !empty($entrata_da_prenota)) {
$provenienza_costo = "p";
if ($anno >= substr($datainserimento,0,4)) {
$costo0 = esegui_query("select * from $tablecosti where idcosti = 0");
$costo0 = risul_query($costo0,0,'val_costo');
$costo0 = $costo0 + $val_costo;
esegui_query("update $tablecosti set val_costo = '$costo0' where idcosti = 0 ");
} # fine if ($anno >= substr($datainserimento,0,4))
} # fine if (!empty($inserisci_entrata) and !empty($entrata_da_prenota))
$idcosti = esegui_query("select max(idcosti) from $tablecosti");
$idcosti = risul_query($idcosti,0,0) + 1;
$tipo_costo = "e";
if ($inserisci_spesa) $tipo_costo = "s";
esegui_query("insert into $tablecosti (idcosti,nome_costo,val_costo,tipo_costo,nome_cassa,persona_costo,provenienza_costo,metodo_pagamento,data_transazione,datainserimento,hostinserimento,utente_inserimento) values ('$idcosti','$nome_costo','$val_costo','$tipo_costo','".aggslashdb($nome_cassa)."','$persona_costo','$provenienza_costo','$metodo_pagamento','$datatransazione','$datainserimento','$HOSTNAME','$id_utente') ");
if ($valuta) esegui_query("update $tablecosti set valuta = '".aggslashdb($valuta)."', costo_valuta = '".aggslashdb($costo_valuta)."' where idcosti = '$idcosti' ");
if (!empty($id_pagamento)) esegui_query("update $tablecosti set id_pagamento = '".aggslashdb(htmlspecialchars($id_pagamento))."' where idcosti = '$idcosti' ");
if (!empty($inserisci_entrata)) echo mex("L'entrata è stata inserita",$pag);
if (!empty($inserisci_spesa)) echo mex("La spesa è stata inserita",$pag);
echo " (".punti_in_num($val_costo,$stile_soldi)." $Euro";
if ($valuta) echo " = ".punti_in_num($costo_valuta,$stile_soldi)." ".$altre_valute[$n_valuta]['nome'];
echo ").<br>";
} # fine if ($inserire != "NO")

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"costi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";

unlock_tabelle($tabelle_lock);
} # fine if (!empty($inserisci_entrata) or !empty($inserisci_spesa))





if (!isset($mostra_form_inserimento) or $mostra_form_inserimento != "NO") {

$casse = esegui_query("select * from $tablecasse order by idcasse");
$num_casse = numlin_query($casse);
$opt_casse = "";
$num_casse_attive = 0;
for ($num1 = 0 ; $num1 < $num_casse ; $num1++) {
$id_cassa = risul_query($casse,$num1,'idcasse');
if ($attiva_casse_consentite == "n" or $casse_consentite_vett[$id_cassa] == "SI") {
if ($id_cassa == 1) $nome_cassa = mex("cassa principale",$pag);
else $nome_cassa = risul_query($casse,$num1,'nome_cassa');
$opt_casse .= "<option value=\"$id_cassa\">$nome_cassa</option>";
$hidden_cassa = "<input type=\"hidden\" name=\"id_cassa\" value=\"$id_cassa\">";
$num_casse_attive++;
} # fine if ($attiva_casse_consentite == "n" or $casse_consentite_vett[$id_cassa] == "SI")
} # fine for $num1

if (!$num_casse_attive) echo "<div class=\"txtcenter\">".mex("Nessuna cassa disponibile",$pag)."</div>";
else {


$metodo_pagamento_txt = "";
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($metodi_pagamento) {
$metodo_pagamento_txt = "<tr><td>".mex("Metodo di pagamento",$pag).":
 <select name=\"metodo_pagamento\">
<option value=\"\">----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) $metodo_pagamento_txt .= "<option value=\"".$metodi_pagamento[$num1]."\">".$metodi_pagamento[$num1]."</option>";
$metodo_pagamento_txt .= "</select>, ".mex("id op.",$pag)."&nbsp;<input type=\"text\" name=\"id_pagamento\" value=\"\" size=\"10\" maxlength=\"300\">
<small>(".mex("opzionale",$pag).")</small>.</td></tr>";
} # fine if ($metodi_pagamento)

if ($altre_valute['num']) {
$valute_txt = "<select name=\"valuta\">
<option value=\"\" selected>$Euro</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) $valute_txt .= "<option value=\"".htmlspecialchars($altre_valute[$num1]['nome'])."\">".$altre_valute[$num1]['nome']."</option>";
$valute_txt .= "</select>";
} # fine if ($altre_valute['num'])
else $valute_txt = $Euro;

$data_txt = "<tr><td>".mex("Data operazione",$pag).":&nbsp;";
$gio_corr = date('d',(time() + (C_DIFF_ORE * 3600)));
$sel_gpagamento = "<select name=\"giorno_pagamento\">";
for ($num1 = 1 ; $num1 <= 31; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $gio_corr) $sel = " selected";
else $sel = "";
$sel_gpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_gpagamento .= "</select>";
$mese_corr = date('m',(time() + (C_DIFF_ORE * 3600)));
$sel_mpagamento = "<select name=\"mese_pagamento\">";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $mese_corr) $sel = " selected";
else $sel = "";
$sel_mpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_mpagamento .= "</select>";
if ($stile_data == "usa") $data_txt .= "$sel_mpagamento/$sel_gpagamento";
else $data_txt .= "$sel_gpagamento/$sel_mpagamento";
$data_txt .= "/<select name=\"anno_pagamento\">";
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
for ($num1 = ($anno - 2) ; $num1 <= ($anno_corr + 1) ; $num1++) {
if ($num1 == $anno_corr) $sel = " selected";
else $sel = "";
$data_txt .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$data_txt .= "</select>.</td></tr>";

if ($priv_ins_entrate == "s") {
echo "<h3 id=\"h_iinc\"><span>".mex("Inserisci le entrate in cassa per l'anno",$pag)." $anno.</span></h3>
<form accept-charset=\"utf-8\" method=\"post\" action=\"costi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\"><br>
<table style=\"margin-left: auto; margin-right: auto;\" cellspacing=2 cellpadding=5>
<tr><td>";
if ($num_casse_attive == 1) echo $hidden_cassa;
else echo "".mex("Cassa",$pag).":&nbsp;<select name=\"id_cassa\">
$opt_casse</select></td></tr>
<tr><td>";
echo "".mex("Natura entrata",$pag).":&nbsp;
<input type=\"text\" name=\"nome_costo\" size=\"30\" value=\"\">
</td></tr>
<tr><td>
".mex("Importo",$pag).":&nbsp;
<input type=\"text\" name=\"val_costo\" size=\"10\" value=\"\">&nbsp;$valute_txt.
</td></tr>
$metodo_pagamento_txt
$data_txt";
if ($priv_persona_ins_costi == "c") {
echo "<tr><td>".mex("Persona che inserisce",$pag).":&nbsp;
<input type=\"text\" name=\"persona_costo\" size=\"20\" value=\"\">&nbsp;(".mex("opzionale",$pag).").
</td></tr>";
} # fine if ($priv_persona_ins_costi == "c")
if ($priv_entrate_da_prenota == "c") {
echo "<tr><td><label><input type=\"checkbox\" name=\"entrata_da_prenota\" value=\"SI\" checked>
".mex("Sottrai l'importo dal totale delle prenotazioni",$pag).".
</label></td></tr>";
} # fine if ($priv_entrate_da_prenota == "c")
echo "</table><div style=\"text-align: center;\">
<button class=\"iinc\" type=\"submit\" name=\"inserisci_entrata\" value=\"1\"><div>".mex("Inserisci l' entrata",$pag)."</div></button><br>
</div></div></form>
<table><tr><td style=\"height: 8px;\"></td></tr></table><hr style=\"width: 95%\">";
} # fine if ($priv_ins_entrate == "s")

if ($priv_ins_spese == "s") {
echo "
<h3 id=\"h_iexp\"><span>".mex("Inserisci i costi di gestione per l'anno",$pag)." $anno.</span></h3>
<form accept-charset=\"utf-8\" method=\"post\" action=\"costi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\"><br>
<table style=\"margin-left: auto; margin-right: auto;\" cellspacing=2 cellpadding=5>
<tr><td>";
if ($num_casse_attive == 1) echo $hidden_cassa;
else echo "".mex("Cassa",$pag).":&nbsp;<select name=\"id_cassa\">
$opt_casse</select></td></tr>
<tr><td>";
echo "".mex("Natura spesa",$pag).":&nbsp;
<input type=\"text\" name=\"nome_costo\" size=\"30\" value=\"\">
</td></tr>
<tr><td>
".mex("Importo",$pag).":&nbsp;
<input type=\"text\" name=\"val_costo\" size=\"10\" value=\"\">&nbsp;$valute_txt.
</td></tr>
$metodo_pagamento_txt
$data_txt";
if ($priv_persona_ins_costi == "c") {
echo "<tr><td>".mex("Persona che inserisce",$pag).":&nbsp;
<input type=\"text\" name=\"persona_costo\" size=\"20\" value=\"\">&nbsp;(".mex("opzionale",$pag).").
</td></tr>";
} # fine if ($priv_persona_ins_costi == "c")
echo "</table><div style=\"text-align: center;\">
<button class=\"iexp\" type=\"submit\" name=\"inserisci_spesa\" value=\"1\"><div>".mex("Inserisci la spesa",$pag)."</div></button><br>
</div></div></form>
<table><tr><td style=\"height: 8px;\"></td></tr></table><hr style=\"width: 95%\">";
} # fine if ($priv_ins_spese == "s")

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"costi\">
<button class=\"exin\" type=\"submit\"><div>".mex("Visualizza la tabella con tutte le spese e le entrate",$pag)."</div></button>
</div></form>";

} # fine else if (!$num_casse_attive) 


echo "<table><tr><td style=\"height: 8px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"inizio.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"bkmm\" type=\"submit\"><div>".mex("Torna al menù principale",$pag)."</div></button>
</div></form><table><tr><td style=\"height: 20px;\"></td></tr></table>";


} # fine if (!isset($mostra_form_inserimento) or $mostra_form_inserimento != "NO")




if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)


?>
