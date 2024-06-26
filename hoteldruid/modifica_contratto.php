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

$pag = "modifica_contratto.php";
$titolo = "HotelDruid: Modifica Documento";

$var_pag = array();
$var_pag[0] = 'num_contratto';
$var_pag[1] = 'cambia_qualcosa';
$var_pag[2] = 'pos_curs';
$var_pag[3] = 'pos_fine_sel';
$var_pag[4] = 'var_agg';
$var_pag[5] = 'salva_modifiche';
$var_pag[6] = 'tipo_rip';
$var_pag[7] = 'n_contratto';
$var_pag[8] = 'var_agg2';
$var_pag[9] = 'tipo_rip2';
$var_pag[10] = 'lingua_contr';
$var_pag[11] = 'formato_email';
$var_pag[12] = 'cambia_formato_email';
$var_pag[13] = 'cons_api';
$var_pag[14] = 'cambia_cons_api';
$var_pag[15] = 'aggiungi_var';
$var_pag[16] = 'cambia_formato';
$var_pag[17] = 'nuovo_formato';
$var_pag[18] = 'salva_contr';
$var_pag[19] = 'nuova_dir_salva';
$var_pag[20] = 'cambia_dir_salva';
$var_pag[21] = 'tipo_estensione_txt';
$var_pag[22] = 'estensione_pers_txt';
$var_pag[23] = 'cambia_estenstione_pers';
$var_pag[24] = 'cambia_nome_file';
$var_pag[25] = 'tipo_nome_file';
$var_pag[26] = 'nome_file_salva';
$var_pag[27] = 'multi_lingua';
$var_pag[28] = 'email_bcc';
$var_pag[29] = 'cambia_bcc';
$var_pag[30] = 'nuovo_oggetto';
$var_pag[31] = 'cambia_oggetto';
$var_pag[32] = 'cambia_compress';
$var_pag[33] = 'MAX_FILE_SIZE';
$var_pag[34] = 'upload_allegato';
$var_pag[35] = 'elimina_allegato';
$var_pag[36] = 'intestazione_pers';
$var_pag[37] = 'cambia_intestazione_pers';
$var_pag[38] = 'lingua_oggetto';
$var_pag[39] = 'cambia_nome_download';
$var_pag[40] = 'tipo_nome_download';
$var_pag[41] = 'lingua_predef';
$var_pag[42] = 'num_elimina_allegato';
$var_pag[43] = 'origine_vecchia';
$var_pag[44] = 'torna_indietro';
$var_pag[45] = 'indietro';
$var_pag[46] = 'upload_allegato_mln';
$var_pag[47] = 'num_all_agg';
$var_pag[48] = 'ln_upload';
$var_pag[49] = 'aggiungi_allegato_mln';
$var_pag[50] = 'num_allegato';
$var_pag[51] = 'aggiungi_allegato';
$var_pag[52] = 'aggiungi_ripetizione';
$var_pag[53] = 'id_utente_api';
$var_pag[54] = 'indirizzi_ip_api';
$var_pag[55] = 'cambia_ind_ip_api';
$var_pag[56] = 'pass_api';
$var_pag[57] = 'cambia_autosalv';
$var_pag[58] = 'n_autosalv';
$var_pag[59] = 'salva_head';
$var_pag[60] = 'n_head';
$var_pag[61] = 'salva_foot';
$var_pag[62] = 'n_foot';
$var_pag[63] = 'bcc_indirizzo';
$var_pag[64] = 'bcc_mittente';
$var_pag[65] = 'cambia_incr_np';
$var_pag[66] = 'incr_np';
$var_pag[67] = 'cambia_num_prog';
$var_pag[68] = 'contr_num_prog';
$var_pag[69] = 'cambia_formati_dati';
$var_pag[70] = 'stile_soldi_contr';
$var_pag[71] = 'stile_data_contr';
$var_pag[72] = 'compress';
$var_pag[73] = 'aggiungi_var2';
$var_pag[74] = 'aggiungi_ripetizione2';
$n_var_pag = 75;

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
include("./includes/funzioni_costi_agg.php");
include("./includes/funzioni_testo.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tableutenti = $PHPR_TAB_PRE."utenti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
else $modifica_pers = "SI";
$priv_mod_doc = substr($priv_mod_pers,2,1);
$priv_mod_doc_api = substr($priv_mod_pers,4,1);
$priv_mod_doc_html = substr($priv_mod_pers,9,1);
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",$contratti_consentiti);
unset($contratti_consentiti_vett);
for ($num1 = 1 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$modifica_pers = "SI";
$priv_mod_doc = "s";
$priv_mod_doc_api = "s";
$priv_mod_doc_html = "s";
$attiva_contratti_consentiti = "n";
} # fine else if ($id_utente != 1)

if ($anno_utente_attivato == "SI" and $priv_mod_doc == "s" and $modifica_pers != "NO" and ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[(integer) $num_contratto] == "SI")) {

if ($priv_mod_doc == "s" and $priv_mod_doc_api != "s") {
$api_esistente = esegui_query("select tipo from $tablecontratti where numero = '".aggslashdb($num_contratto)."' and tipo = 'api'");
if (numlin_query($api_esistente)) $priv_mod_doc = "n";
} # fine if ($priv_mod_doc == "s" and $priv_mod_doc_api != "s")
if ($priv_mod_doc == "s" and $priv_mod_doc_html != "s") {
$contrhtm = esegui_query("select tipo from $tablecontratti where numero = '".aggslashdb($num_contratto)."' and tipo = 'contrhtm'");
if (numlin_query($contrhtm)) $priv_mod_doc = "n";
} # fine if ($priv_mod_doc == "s" and $priv_mod_doc_html != "s")
if ($priv_mod_doc == "s") {


$titolo = "HotelDruid: ".mex("Modifica Documento",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();

if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "") {
if (defined('C_CARTELLA_DOC') and C_CARTELLA_DOC != "" and @is_dir(C_CARTELLA_CREA_MODELLI."/".C_CARTELLA_DOC)) $dir_salva_home = C_CARTELLA_DOC;
else $dir_salva_home = "";
} # fine if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "")
else $dir_salva_home = C_DATI_PATH;


if (!isset($num_contratto) or controlla_num_pos($num_contratto) == "NO") $num_contratto = "1";
if ($num_contratto < 1 or controlla_num_pos($num_contratto) == "NO") $num_contratto = "1";
if (strlen($num_contratto) == 1) $num_contratto = "0".$num_contratto;
$num_contratto_int = (integer) $num_contratto;

include("./includes/funzioni_mod_contratti.php");




if (!empty($cambia_qualcosa)) {
$anchor = "";


function formatta_input_var_x_file ($input_utente) {
if (@get_magic_quotes_gpc()) $input_utente = stripslashes($input_utente);
$input_utente = str_replace("\\","\\\\",$input_utente);
$input_utente = str_replace("\"","\\\"",$input_utente);
return $input_utente;
} # fine function formatta_input_var_x_file

if (!empty($cambia_formato)) {
$formato = "";
if ($nuovo_formato == "HTML" and $priv_mod_doc_html == "s") $formato = "contrhtm";
if ($nuovo_formato == "EMAIL") $formato = "contreml";
if ($nuovo_formato == "RTF") $formato = "contrrtf";
if ($nuovo_formato == "TXT") $formato = "contrtxt";
if (!empty($multi_lingua)) $multi_lingua = 1;
else $multi_lingua = 0;
if ($formato) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$vecchio_formato = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
if (numlin_query($vecchio_formato) == 1) {
$mostra_form_iniziale = "NO";
$vecchio_multi_lingua = 0;
if (substr((string) risul_query($vecchio_formato,0,'testo'),0,7) == "#!mln!#") $vecchio_multi_lingua = 1;
else $vecchio_multi_lingua = 0;
$vecchio_formato = risul_query($vecchio_formato,0,'tipo');
if ($vecchio_formato != $formato) {
if ($vecchio_formato == "contreml") {
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'oggetto' ");
$allegati_esist = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
$allegati_esist = risul_query($allegati_esist,0,'testo');
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
if ($allegati_esist) {
$allegati_esist = explode(",",$allegati_esist);
$num_allegati = (count($allegati_esist) - 1);
for ($num1 = 1 ; $num1 < $num_allegati ; $num1++) {
if (strstr($allegati_esist[$num1],":")) {
$all_vett = explode(">",$allegati_esist[$num1]);
$num_ln = count($all_vett);
} # fine if (strstr($allegati_esist[$num1],":"))
else $num_ln = 1;
for ($num2 = 0 ; $num2 < $num_ln ; $num2++) {
if ($num2 > 0 or strstr($allegati_esist[$num1],":")) $num_all = substr(strstr($all_vett[$num2],":"),1);
else $num_all = $allegati_esist[$num1];
$altri_all = esegui_query("select numero from $tablecontratti where (testo $LIKE '%,$num_all,%' or testo $LIKE '%:$num_all,%' or testo $LIKE '%:$num_all>%') and tipo = 'allegato' ");
if (!numlin_query($altri_all)) esegui_query("delete from $tablecontratti where numero = '$num_all' and tipo = 'file_all' ");
} # fine for $num2
} # fine for $num1
echo "".mex("Allegato eliminato",$pag).".<br>";
} # fine if ($allegati_esist)
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'opzeml'");
} # fine if ($vecchio_formato == "contreml")
if ($vecchio_formato == "contrtxt" and $formato != "contreml") {
$dati_download = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl' ");
if (numlin_query($dati_download)) {
$dati_download = (string) risul_query($dati_download,0,'testo');
$ndt = strstr($dati_download,">");
if ($dati_download != $ndt) esegui_query("update $tablecontratti set testo = '".aggslashdb($ndt)."' where numero = '$num_contratto' and tipo = 'datdownl' ");
} # fine if (numlin_query($dati_download))
} # fine if ($vecchio_formato == "contrtxt" and $formato != "contreml")
if ($vecchio_formato == "contrhtm") esegui_query("delete from $tablecontratti where numero = '$num_contratto' and (tipo = 'headhtm' or tipo = 'foothtm') ");
if ($formato == "contreml") {
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl' ");
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','oggetto','') ");
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','allegato','') ");
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','opzeml',';;') ");
} # fine if ($formato == "contreml")
esegui_query("update $tablecontratti set tipo = '$formato' where numero = '$num_contratto' and tipo $LIKE 'contr%'");
} # fine if ($vecchio_formato != $formato)
if ($vecchio_multi_lingua != $multi_lingua) {
if ($vecchio_multi_lingua) {
$lingua_def = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$lingua_def = substr(risul_query($lingua_def,0,'testo'),7);
$testo_contr = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'mln_$lingua_def' ");
if (numlin_query($testo_contr)) $testo_contr = risul_query($testo_contr,0,'testo');
else $testo_contr = "";
esegui_query("update $tablecontratti set testo = '".aggslashdb($testo_contr)."' where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'mln_%' ");
if ($formato == "contreml") {
$oggetto = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'oggetto' ");
$oggetto = explode(">",(string) risul_query($oggetto,0,'testo'));
$n_oggetto = "";
for ($num1 = 0 ; $num1 < count($oggetto) ; $num1++) {
$ogg = explode(":",$oggetto[$num1]);
if ($ogg[0] == "mln_$lingua_def") {
$n_oggetto = substr(strstr($oggetto[$num1],":"),1);
break;
} # fine if ($ogg[0] == "mln_$lingua_def")
} # fine for $num1
esegui_query("update $tablecontratti set testo = '".aggslashdb($n_oggetto)."' where numero = '$num_contratto' and tipo = 'oggetto' ");
$allegati_esist = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato' ");
$allegati_esist = risul_query($allegati_esist,0,'testo');
if ($allegati_esist) {
$allegati_esist = explode(",",$allegati_esist);
$num_allegati = (count($allegati_esist) - 1);
for ($num1 = 1 ; $num1 < $num_allegati ; $num1++) {
$all_vett = explode(">",$allegati_esist[$num1]);
$num_ln = count($all_vett);
$allegati_esist[$num1] = "";
for ($num2 = 0 ; $num2 < $num_ln ; $num2++) {
$num_all = substr(strstr($all_vett[$num2],":"),1);
if (strstr($all_vett[$num2],"mln_$lingua_def")) $allegati_esist[$num1] = $num_all;
else {
$altri_all = esegui_query("select numero from $tablecontratti where (testo $LIKE '%,$num_all,%' or testo $LIKE '%:$num_all,%' or testo $LIKE '%:$num_all>%') and tipo = 'allegato' and numero != '$num_contratto' ");
if (!numlin_query($altri_all)) esegui_query("delete from $tablecontratti where numero = '$num_all' and tipo = 'file_all' ");
} # fine else if (strstr($all_vett[$num2],"mln_$lingua_def"))
} # fine for $num2
} # fine for $num1
$allegati_esist = str_replace(",,",",",implode(",",$allegati_esist));
if (strlen($allegati_esist) < 3) $allegati_esist = "";
esegui_query("update $tablecontratti set testo = '".aggslashdb($allegati_esist)."' where numero = '$num_contratto' and tipo = 'allegato' ");
} # fine if ($allegati_esist)
} # fine if ($formato == "contreml")
} # fine if ($vecchio_multi_lingua)
if ($multi_lingua) {
$testo_contr = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$testo_contr = (string) risul_query($testo_contr,0,'testo');
$testo_contr = str_replace("[r]","",str_replace("[/r]","",$testo_contr));
if (str_replace("[r]","",$testo_contr) != $testo_contr or str_replace("[/r]","",$testo_contr) != $testo_contr) $testo_contr = "";
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','mln_$lingua_mex','".aggslashdb($testo_contr)."') ");
esegui_query("update $tablecontratti set testo = '#!mln!#$lingua_mex' where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
if ($formato == "contreml") {
$oggetto = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'oggetto' ");
$oggetto = risul_query($oggetto,0,'testo');
esegui_query("update $tablecontratti set testo = '".aggslashdb("mln_$lingua_mex:$oggetto")."' where numero = '$num_contratto' and tipo = 'oggetto' ");
$allegati = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato' ");
$allegati = risul_query($allegati,0,'testo');
if ($allegati) {
$allegati = explode(",",$allegati);
$num_allegati = (count($allegati) - 1);
for ($num1 = 1 ; $num1 < $num_allegati ; $num1++) $allegati[$num1] = "mln_$lingua_mex:".$allegati[$num1];
$allegati = implode(",",$allegati);
esegui_query("update $tablecontratti set testo = '".aggslashdb($allegati)."' where numero = '$num_contratto' and tipo = 'allegato' ");
} # fine if ($allegati)
} # fine if ($formato == "contreml")
echo "<b class=\"colblu\">".mex("Avviso",$pag)."</b>: ".mex("nei documenti in formato multi-lingua non è possibile ripetere una sola parte con i tag [r] e [/r], il documento viene ripetuto interamente per ogni prenotazione",$pag).".<br>
<br><br>
".mex("È comunque possibile mostrare <em>una sola ripetizione per ogni cliente</em> usando le variabili",$pag)." [".mexv("ultima_prenotazione_per_cliente")."] ".mex("e",$pag)." [".mexv("errore_ripetizione")."] ".mex("in una condizione come questa",$pag).":<br>
<br>
<a name=\"modcond\"></a>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_var_contr.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"contr_cond\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"aggiungi_cond\" value=\"SI\">
<input type=\"hidden\" name=\"num_se\" value=\"1\">
<input type=\"hidden\" name=\"inizializza\" value=\"rpt\">
<input type=\"hidden\" name=\"cond_sempre\" value=\"NO\">
<input type=\"hidden\" name=\"var_se1\" value=\"ultima_prenotazione_per_cliente\">
<input type=\"hidden\" name=\"cond1\" value=\"!=\">
<input type=\"hidden\" name=\"tipo_val_se1\" value=\"txt\">
<input type=\"hidden\" name=\"val_se_txt1\" value=\"1\">
<input type=\"hidden\" name=\"azione\" value=\"set\">
<input type=\"hidden\" name=\"oper_str\" value=\"=\">
<input type=\"hidden\" name=\"var_allora\" value=\"-2\">
<input type=\"hidden\" name=\"tipo_val_allora\" value=\"txt\">
<input type=\"hidden\" name=\"val_allora_txt\" value=\"1\">
<input type=\"hidden\" name=\"tipo_val_sost1\" value=\"txt\">
<input type=\"hidden\" name=\"tipo_val_sost2\" value=\"txt\">
<b>-</b> ".ucfirst(mex("se",'modifica_var_contr.php'))." [".mexv("ultima_prenotazione_per_cliente")."] ".mex("è diverso da",'modifica_var_contr.php')." \"1\" ".mex("allora porre",'modifica_var_contr.php')." [".mexv("errore_ripetizione")."] ".mex("uguale a",'modifica_var_contr.php')." \"1\".
<input class=\"sbutton\" type=\"submit\" value=\"".ucfirst(mex("aggiungi ora questa condizione al documento",$pag))."\">
</div></form><br>
".mex("Così i dati delle ripetizioni precedenti possono essere memorizzati in uno o più array della variabile",$pag)." [".mexv("numero_cliente")."].<br>
<br><br><br>";
} # fine if ($multi_lingua)
} # fine if ($vecchio_multi_lingua != $multi_lingua)
echo "".mex("Formato del documento cambiato",$pag).".<br>";
} # fine if (numlin_query($vecchio_formato) == 1)
unlock_tabelle($tabelle_lock);
} # fine if ($formato)
} # fine if (!empty($cambia_formato))

if (!empty($cambia_formati_dati)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$mostra_form_iniziale = "NO";
$formati = "";
if ($stile_soldi_contr == "europa" or $stile_soldi_contr == "usa") $formati = $stile_soldi_contr;
$formati .= ">";
if ($stile_data_contr == "europa" or $stile_data_contr == "usa") $formati .= $stile_data_contr;
if (str_replace(">","",$formati) == "") $formati = "";
$formati_esist = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'formati' ");
if (numlin_query($formati_esist)) {
if ($formati) esegui_query("update $tablecontratti set testo = '".aggslashdb($formati)."' where numero = '$num_contratto' and tipo = 'formati' ");
else esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'formati' ");
} # fine if (numlin_query($formati_esist))
elseif ($formati) esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','formati','".aggslashdb($formati)."') ");
echo "".mex("Formati predefiniti del documento cambiati",$pag).".<br>";
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_formati_dati))

if (!empty($cambia_dir_salva)) {
if (@get_magic_quotes_gpc()) $nuova_dir_salva = stripslashes($nuova_dir_salva);
$nuova_dir_salva = htmlspecialchars($nuova_dir_salva);
$nuova_dir_salva = aggslashdb($nuova_dir_salva);
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$tipo_contratto = esegui_query("select tipo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($tipo_contratto,0,'tipo');
if ($tipo_contratto == "contrrtf" or $tipo_contratto == "contrhtm" or $tipo_contratto == "contrtxt") {
if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "") {
$nuova_dir_salva = str_replace("..","",$nuova_dir_salva);
$dir_salva = C_CARTELLA_CREA_MODELLI."/$nuova_dir_salva";
} # fine if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "")
else $dir_salva = $nuova_dir_salva;
if ($dir_salva) {
if (substr($nuova_dir_salva,-1) == "/") $nuova_dir_salva = substr($nuova_dir_salva,0,-1);
$mostra_form_iniziale = "NO";
if (!@is_dir($dir_salva)) echo mex("La cartella inserita <div style=\"display: inline; color: red;\">non esiste</div>","personalizza.php").".<br>";
else {
$fileaperto = @fopen("$dir_salva/prova.tmp","a+");
if (!$fileaperto) echo mex("Non ho i permessi di scrittura sulla cartella","personalizza.php")." <div style=\"display: inline; color: red;\">$dir_salva/</div>.<br>";
else {
fclose($fileaperto);
unlink("$dir_salva/prova.tmp");
if (isset($salva_contr) and $salva_contr == "SI") {
if ($nuova_dir_salva == $dir_salva_home) $nuova_dir_salva = "~";
$dir_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente) >= 1) esegui_query("update $tablecontratti set testo = '$nuova_dir_salva' where numero = '$num_contratto' and tipo = 'dir'");
else {
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','dir','$nuova_dir_salva')");
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','compress','gz')");
} # fine else if (numlin_query($dir_esistente) >= 1)
echo "".mex("I documenti verranno salvati nella cartella",$pag)." $dir_salva.<br>";
} # fine if (isset($salva_contr) and $salva_contr == "SI")
else {
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and (tipo = 'dir' or tipo = 'num_prog' or tipo = 'nomefile' or tipo = 'compress' or tipo = 'autosalv' or tipo = 'incr_np') ");
esegui_query("delete from $tablecontratti where testo = '$num_contratto_int' and tipo = 'num_prog' ");
echo "".mex("I documenti non verranno salvati",$pag).".<br>";
} # fine else if (isset($salva_contr) and $salva_contr == "SI")
} # fine else if (!$fileaperto)
} # fine else if (!@is_dir($nuova_dir_salva))
} # fine if ($dir_salva)
} # fine if ($tipo_contratto == "contrrtf" or..
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_dir_salva))

if (!empty($cambia_compress)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
if (empty($compress)) {
$mostra_form_iniziale = "NO";
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'compress' ");
echo "".mex("Il documento non verrà salvato compresso su disco",$pag).".<br>";
} # fine if (empty($compress))
else {
$mostra_form_iniziale = "NO";
$compress_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'compress' ");
if (numlin_query($compress_esistente)) esegui_query("update $tablecontratti set testo = 'gz' where numero = '$num_contratto' and tipo = 'compress' ");
else esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','compress','gz') ");
echo "".mex("Il documento verrà salvato compresso su disco",$pag).".<br>";
} # fine else if (empty($compress))
} # fine if (numlin_query($dir_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_compress))

if (!empty($cambia_autosalv)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
if (!$n_autosalv) {
$mostra_form_iniziale = "NO";
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'autosalv' ");
echo "".mex("Il documento non verrà salvato automaticamente",$pag).".<br>";
} # fine if (!$n_autosalv)
else {
if ($n_autosalv == "checkin" or $n_autosalv == "checkout") {
$mostra_form_iniziale = "NO";
$autosalv_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'autosalv' ");
if (numlin_query($autosalv_esistente)) esegui_query("update $tablecontratti set testo = '$n_autosalv' where numero = '$num_contratto' and tipo = 'autosalv' ");
else esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','autosalv','$n_autosalv') ");
echo "".mex("Il documento verrà salvato automaticamente",$pag)." ";
if ($n_autosalv == "checkin") echo mex("alla registrazione dell'entrata",$pag);
if ($n_autosalv == "checkout") echo mex("alla registrazione dell'uscita",$pag);
echo ".<br>";
} # fine if ($n_autosalv == "checkin" or $n_autosalv == "checkout")
} # fine else if (!$n_autosalv)
} # fine if (numlin_query($dir_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_autosalv))

if (!empty($cambia_incr_np)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
$mostra_form_iniziale = "NO";
if (empty($incr_np)) {
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'incr_np' ");
echo "".mex("Ogni documento avrà un unico numero progressivo",$pag).".<br>";
} # fine if (empty($incr_np))
else {
$incr_np_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'incr_np' ");
if (numlin_query($incr_np_esistente)) esegui_query("update $tablecontratti set testo = '1' where numero = '$num_contratto' and tipo = 'incr_np' ");
else esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','incr_np','1') ");
echo "".mex("Il numero progressivo verrà incrementato ogni volta che compare nel documento",$pag).".<br>";
} # fine else if (empty($incr_np))
} # fine if (numlin_query($dir_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_incr_np))

if (!empty($cambia_num_prog)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
if (!strcmp((string) $contr_num_prog,"")) {
$mostra_form_iniziale = "NO";
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'num_prog' ");
echo ucfirst(mex("il documento",$pag))." $num_contratto ".mex("non condividerà il numero progressivo con nessun documento",$pag).".<br>";
} # fine if (!strcmp((string) $contr_num_prog,""))
else {
if ($contr_num_prog >= 1 and controlla_num_pos($contr_num_prog) != "NO") {
if ($contr_num_prog != $num_contratto_int and ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$contr_num_prog] == "SI")) {
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$contr_num_prog' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
$num_prog_esistente = esegui_query("select * from $tablecontratti where numero = '$contr_num_prog' and tipo = 'num_prog' ");
if (!numlin_query($num_prog_esistente)) {
$mostra_form_iniziale = "NO";
$num_prog_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'num_prog' ");
if (numlin_query($num_prog_esistente)) esegui_query("update $tablecontratti set testo = '$contr_num_prog' where numero = '$num_contratto' and tipo = 'num_prog' ");
else {
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','num_prog','$contr_num_prog') ");
esegui_query("update $tablecontratti set testo = '$contr_num_prog' where testo = '$num_contratto_int' and tipo = 'num_prog' ");
} # fine else if (numlin_query($num_prog_esistente))
echo ucfirst(mex("il documento",$pag))." $num_contratto ".mex("condividerà il numero progressivo con il documento",$pag)." $contr_num_prog.<br>";
} # fine if (!numlin_query($num_prog_esistente))
} # fine if (numlin_query($dir_esistente))
} # fine if ($contr_num_prog != $num_contratto_int and...
} # fine if ($contr_num_prog >= 1 and controlla_num_pos($contr_num_prog) != "NO")
} # fine else if (!strcmp((string) $contr_num_prog,""))
} # fine if (numlin_query($dir_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_num_prog))

if (!empty($cambia_nome_file)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dir_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_esistente)) {
if ($tipo_nome_file != "pers") {
$mostra_form_iniziale = "NO";
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'nomefile' ");
echo "".mex("I file verranno salvati con il nome del documento",$pag).".<br>";
} # fine if ($tipo_nome_file != "pers")
else {
if (strcmp((string) $nome_file_salva,"") and strlen($nome_file_salva) < 121) {
$mostra_form_iniziale = "NO";
$nome_file_salva = htmlspecialchars($nome_file_salva);
$nomefile_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'nomefile' ");
if (numlin_query($nomefile_esistente)) esegui_query("update $tablecontratti set testo = '".aggslashdb($nome_file_salva)."' where numero = '$num_contratto' and tipo = 'nomefile' ");
else esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','nomefile','".aggslashdb($nome_file_salva)."') ");
echo "".mex("I file verranno salvati con il nome",$pag)." \"$nome_file_salva\".<br>";
} # fine if (strcmp((string) $nome_file_salva,"") and strlen($nome_file_salva) < 121)
} # fine else if ($tipo_nome_file != "pers")
} # fine if (numlin_query($dir_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_nome_file))

if ($priv_mod_doc_api == "s" and (!empty($cambia_cons_api) or (isset($pass_api) and strcmp((string) $pass_api,"")) or !empty($id_utente_api) or !empty($cambia_ind_ip_api))) {
$tabelle_lock = array($tablecontratti);
$altre_tab_lock = array($tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$tipo_contratto = esegui_query("select tipo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($tipo_contratto,0,'tipo');
if ($tipo_contratto == "contrrtf" or $tipo_contratto == "contrhtm" or $tipo_contratto == "contrtxt") {
$api_esistente = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'api' ");
if (strcmp(fixstr($pass_api),"") or !empty($id_utente_api) or !empty($cambia_ind_ip_api)) {
if (numlin_query($api_esistente)) {
$pass_api_esist = risul_query($api_esistente,0,'testo');
$id_utente_api_esist = explode(";",$pass_api_esist);
$indirizzi_ip_api_esist = $id_utente_api_esist[1];
$id_utente_api_esist = $id_utente_api_esist[0];
$pass_api_esist = substr($pass_api_esist,(strlen($id_utente_api_esist) + strlen($indirizzi_ip_api_esist) + 2));
if (strcmp((string) $pass_api,"")) {
$mostra_form_iniziale = "NO";
if (@get_magic_quotes_gpc()) $pass_api = stripslashes($pass_api);
esegui_query("update $tablecontratti set testo = '".aggslashdb("$id_utente_api_esist;$indirizzi_ip_api_esist;$pass_api")."' where numero = '$num_contratto' and tipo = 'api' ");
echo mex("La password per la API del documento è stata cambiata",$pag).".<br>";
} # fine if (strcmp((string) $pass_api,""))
if (!empty($cambia_ind_ip_api)) {
$cont = 0;
$indirizzi_ip_api = fixstr($indirizzi_ip_api);
$ip4_reg = '((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)\.?\b){4}';
if (preg_replace("/^$ip4_reg(,$ip4_reg)*$/","",$indirizzi_ip_api) == "") $cont = 1;
elseif (function_exists('filter_var') and defined('FILTER_VALIDATE_IP') and defined('FILTER_FLAG_IPV6')) {
$cont = 1;
$ind_ip_vett = explode(",",$indirizzi_ip_api);
for ($num1 = 0 ; $num1 < count($ind_ip_vett) ; $num1++) 
if (empty($ind_ip_vett[$num1]) or (preg_replace("/^$ip4_reg$/","",$ind_ip_vett[$num1]) != "" and !filter_var($ind_ip_vett[$num1],FILTER_VALIDATE_IP,FILTER_FLAG_IPV6))) $cont = 0;
} # fine elseif (function_exists('filter_var') and...
if ($cont) {
$mostra_form_iniziale = "NO";
esegui_query("update $tablecontratti set testo = '".aggslashdb("$id_utente_api_esist;$indirizzi_ip_api;$pass_api_esist")."' where numero = '$num_contratto' and tipo = 'api' ");
echo mex("Gli indirizzi IP da cui è permesso accedere alla API del documento sono stati cambiati",$pag).".<br>";
} # fine if ($cont)
} # fine if (!empty($cambia_ind_ip_api))
if (!empty($id_utente_api) and ($id_utente == 1 or $id_utente_api == $id_utente)) {
$utente_esistente = esegui_query("select nome_utente from $tableutenti where idutenti = '".aggslashdb($id_utente_api)."' ");
if (numlin_query($utente_esistente)) {
$mostra_form_iniziale = "NO";
esegui_query("update $tablecontratti set testo = '".aggslashdb("$id_utente_api;$indirizzi_ip_api_esist;$pass_api_esist")."' where numero = '$num_contratto' and tipo = 'api' ");
echo mex("L'utente per la API del documento è stato cambiato",$pag).".<br>";
} # fine if (numlin_query($utente_esistente))
} # fine if (!empty($id_utente_api) and ($id_utente == 1 or $id_utente_api == $id_utente))
} # fine if (numlin_query($api_esistente))
} # fine if (strcmp(fixstr($pass_api),"") or !empty($id_utente_api) or...
else {
if (isset($cons_api) and $cons_api == "SI") {
if (!numlin_query($api_esistente)) {
$mostra_form_iniziale = "NO";
$valori = "23456789ABCDEFGHJKLMNPQRSTUVWXZabcdefghijkmnpqrstuvwxyz";
$pass_generata = "";
if (function_exists('random_int')) for ($num1 = 0 ; $num1 < 8 ; $num1++) $pass_generata .= substr($valori,random_int(0,54),1);
else {
srand((double)microtime() * 1000000);
for ($num1 = 0 ; $num1 < 8 ; $num1++) $pass_generata .= substr($valori,rand(0,54),1);
} # fine else if (function_exists('random_int'))
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','api','1;;$pass_generata')");
echo "".mex("Il documento verrà considerato come una API",$pag).".<br>";
} # fine if (!numlin_query($api_esistente))
} # fine if (isset($cons_api) and $cons_api == "SI")
else {
if (numlin_query($api_esistente)) {
$mostra_form_iniziale = "NO";
esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'api' ");
echo mex("Il documento non verrà più considerato come una API",$pag).".<br>";
} # fine if (numlin_query($api_esistente))
} # fine else if (isset($cons_api) and $cons_api == "SI")
} # fine else if (strcmp(fixstr($pass_api),"") or !empty($id_utente_api) or...
} # fine if ($tipo_contratto == "contrrtf" or..
unlock_tabelle($tabelle_lock);
} # fine if ($priv_mod_doc_api == "s" and (!empty($cambia_cons_api) or (isset($pass_api) and...

if (!empty($cambia_intestazione_pers)) {
$tipo_contratto = esegui_query("select tipo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($tipo_contratto,0,'tipo');
if ($tipo_contratto == "contrhtm") {
$intestazione_html = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'headhtm'");
if (numlin_query($intestazione_html) == 1) $intestazione_html = 1;
else $intestazione_html = 0;
if (($intestazione_html and empty($intestazione_pers)) or (!$intestazione_html and !empty($intestazione_pers))) {
$mostra_form_iniziale = "NO";
if ($intestazione_html) esegui_query("delete from $tablecontratti where numero = '$num_contratto' and (tipo = 'headhtm' or tipo = 'foothtm') ");
else {
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','headhtm','<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">\n<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" >\n<meta name=\"viewport\" content=\"initial-scale=1.0\">\n<title>".mex("documento",$pag)." $num_contratto</title>\n</head>\n<body style=\"background-color: #ffffff;\">\n') ");
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','foothtm','</body>\n</html>\n') ");
} # fine else if ($intestazione_html)
echo "".mex("Intestazione html cambiata",$pag).".<br>";
} # fine if (($intestazione_html and empty($intestazione_pers)) or...
} # fine if ($tipo_contratto == "contrhtm")
} # fine if (!empty($cambia_intestazione_pers))

if (!empty($cambia_nome_download)) {
$tipo_contratto = esegui_query("select tipo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($tipo_contratto,0,'tipo');
if ($tipo_contratto == "contrtxt" or $tipo_contratto == "contrrtf") {
if (!isset($tipo_nome_download) or $tipo_nome_download != "var") $tipo_nome_download = "";
$dati_download = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl'");
if (numlin_query($dati_download)) {
$dati_download = explode(">",(string) risul_query($dati_download,0,'testo'));
$nome_download = fixset($dati_download[1]);
} # fine if (numlin_query($dati_download))
else {
$dati_download = "";
$nome_download = "";
} # fine else if (numlin_query($dati_download))
if ($tipo_nome_download != $nome_download) {
$mostra_form_iniziale = "NO";
if (!$dati_download) esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','datdownl','>$tipo_nome_download') ");
else {
$dati_download[1] = $tipo_nome_download;
$dati_download = implode(">",$dati_download);
if (!strcmp(str_replace(">","",$dati_download),"")) esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl' ");
else esegui_query("update $tablecontratti set testo = '".aggslashdb($dati_download)."' where numero = '$num_contratto' and tipo = 'datdownl' ");
} # fine else if (!$dati_download)
if (!$tipo_nome_download) echo "".mex("Verrà usato il nome del documento (o il nome del file salvato) come nome per il file scaricato",$pag).".<br>";
if ($tipo_nome_download == "var") echo "".mex("Verrà usato il valore della variabile",$pag)." [".mexv("nome_documento_scaricato")."] ".mex("come nome del file scaricato",$pag)." (".mex("escludendo l'estensione",$pag).").<br>".mex("Se la variabile non è definita verrà usato il nome del documento",$pag).".<br>";
} # fine if ($tipo_nome_download != $nome_download)
} # fine if ($tipo_contratto == "contrtxt" or $tipo_contratto == "contrrtf")
} # fine if (!empty($cambia_nome_download))

if (!empty($cambia_estenstione_pers)) {
$tipo_contratto = esegui_query("select tipo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($tipo_contratto,0,'tipo');
if ($tipo_contratto == "contrtxt") {
if (@get_magic_quotes_gpc()) $estensione_pers_txt = stripslashes($estensione_pers_txt);
$estensione_pers_txt = strtolower($estensione_pers_txt);
if ($tipo_estensione_txt == "predef" or preg_replace("/[a-z]/","",$estensione_pers_txt) != "" or strlen($estensione_pers_txt) > 10 or strlen($estensione_pers_txt) < 2) $estensione_pers_txt = "";
if ($tipo_estensione_txt == "predef" or $estensione_pers_txt) {
$dati_download = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl' ");
if (numlin_query($dati_download)) {
$dati_download = explode(">",(string) risul_query($dati_download,0,'testo'));
$estensione_txt = $dati_download[0];
} # fine if (numlin_query($dati_download))
else {
$dati_download = "";
$estensione_txt = "";
} # fine else if (numlin_query($dati_download))
if (($tipo_estensione_txt == "pers" and $estensione_pers_txt and $estensione_txt != $estensione_pers_txt) or ($tipo_estensione_txt == "predef" and $estensione_txt)) {
$mostra_form_iniziale = "NO";
if (!$dati_download) esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','datdownl','$estensione_pers_txt>') ");
else {
$dati_download[0] = $estensione_pers_txt;
$dati_download = implode(">",$dati_download);
if (!strcmp(str_replace(">","",$dati_download),"")) esegui_query("delete from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl' ");
else esegui_query("update $tablecontratti set testo = '".aggslashdb($dati_download)."' where numero = '$num_contratto' and tipo = 'datdownl' ");
} # fine else if (!$dati_download)
echo "".mex("Estensione cambiata",$pag).".<br>";
} # fine if (($tipo_estensione_txt == "pers" and $estensione_pers_txt and...
} # fine if ($tipo_estensione_txt == "predef" or $estensione_pers_txt)
} # fine if ($tipo_contratto == "contrtxt")
} # fine if (!empty($cambia_estenstione_pers))

if (!empty($cambia_oggetto)) {
if (@get_magic_quotes_gpc()) $nuovo_oggetto = stripslashes($nuovo_oggetto);
if (strlen($nuovo_oggetto) > 120) $nuovo_oggetto = substr($nuovo_oggetto,0,120);
$nuovo_oggetto = htmlspecialchars($nuovo_oggetto);
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dati_contratto = esegui_query("select tipo,testo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$mostra_form_iniziale = "NO";
if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#") {
if (empty($lingua_oggetto)) $lingua_oggetto = "ita";
if ($lingua_oggetto != "ita" and (preg_replace("/[a-z]{2,3}/","",$lingua_oggetto) != "" or !@is_file("./includes/lang/$lingua_oggetto/l_n"))) $lingua_oggetto = "ita";
$oggetto = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'oggetto' ");
$oggetto = risul_query($oggetto,0,'testo');
if ($oggetto) {
$ln_esist = 0;
$n_ogg = "";
$oggetto = explode(">",$oggetto);
for ($num1 = 0 ; $num1 < count($oggetto) ; $num1++) {
$ogg = explode(":",$oggetto[$num1]);
if ($ogg[0] == "mln_$lingua_oggetto") {
$ln_esist = 1;
if (strcmp($nuovo_oggetto,"")) $oggetto[$num1] = "mln_$lingua_oggetto:$nuovo_oggetto";
else $oggetto[$num1] = "";
} # fine if ($ogg[0] == "mln_$lingua_oggetto")
if ($oggetto[$num1]) {
if ($n_ogg) $n_ogg .= ">";
$n_ogg .= $oggetto[$num1];
} # fine if ($oggetto[$num1])
} # fine for $num1
if (!$ln_esist and strcmp($nuovo_oggetto,"")) $n_ogg .= ">mln_$lingua_oggetto:$nuovo_oggetto";
} # fine if ($oggetto)
else $n_ogg = "mln_$lingua_oggetto:$nuovo_oggetto";
esegui_query("update $tablecontratti set testo = '".aggslashdb($n_ogg)."' where numero = '$num_contratto' and tipo = 'oggetto' ");
} # fine if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#")
else esegui_query("update $tablecontratti set testo = '".aggslashdb($nuovo_oggetto)."' where numero = '$num_contratto' and tipo = 'oggetto' ");
echo "".mex("Oggetto cambiato",$pag).".<br>";
} # fine if ($tipo_contratto == "contreml")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_oggetto))

if (!empty($upload_allegato) or !empty($upload_allegato_mln)) {
if (!empty($upload_allegato)) unset($upload_allegato_mln);
$errore = "NO";
$file_tmp = C_DATI_PATH."/allegato_contr$num_contratto.tmp";
if (empty($file_allegato_upload)) {
if (!empty($HTTP_POST_FILES['file_allegato_upload']['tmp_name'])) {
$file_allegato_upload = $HTTP_POST_FILES['file_allegato_upload']['tmp_name'];
$file_allegato_upload_name = $HTTP_POST_FILES['file_allegato_upload']['name'];
$file_allegato_upload_type = $HTTP_POST_FILES['file_allegato_upload']['type'];
} # fine if (!empty($HTTP_POST_FILES['file_allegato_upload']['tmp_name']))
else {
if (!empty($_FILES['file_allegato_upload']['tmp_name'])) {
$file_allegato_upload = $_FILES['file_allegato_upload']['tmp_name'];
$file_allegato_upload_name = $_FILES['file_allegato_upload']['name'];
$file_allegato_upload_type = $_FILES['file_allegato_upload']['type'];
} # fine if (!empty($_FILES['file_allegato_upload']['tmp_name']))
} # fine else if (!empty($HTTP_POST_FILES['file_allegato_upload']['tmp_name']))
} # fine if (empty($file_allegato_upload))
if (!move_uploaded_file($file_allegato_upload,$file_tmp)) $errore = "SI";
if ($errore == "NO") {
if (!defined("C_MASSIMO_NUM_BYTE_UPLOAD") or C_MASSIMO_NUM_BYTE_UPLOAD == 0 or filesize($file_tmp) <= C_MASSIMO_NUM_BYTE_UPLOAD) {
$allegato = "";
$f_allegato = fopen($file_tmp, 'r');
while (true) {
$dati = fread($f_allegato, 8192);
if (strlen($dati) == 0) break;
$allegato .= $dati;
} # fine while (true)
fclose($f_allegato);
unlink($file_tmp);
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$errore = 0;
$allegati_esist = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
$allegati_esist = (string) risul_query($allegati_esist,0,'testo');
if (!empty($upload_allegato) and substr_count($allegati_esist,",") > $num_allegati_max) $errore = 1;
$max_fa = esegui_query("select max(numero) from $tablecontratti where tipo = 'file_all' ");
if (numlin_query($max_fa)) $max_fa = risul_query($max_fa,0,0) + 1;
else $max_fa = 1;
$max_fa_orig = $max_fa;
if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#") {
if (!empty($upload_allegato_mln)) $ln = fixset($ln_upload);
else $ln = substr(risul_query($dati_contratto,0,'testo'),7);
if ($ln != "ita" and (preg_replace("/[a-z]{2,3}/","",$ln) != "" or !@is_file("./includes/lang/$ln/l_n"))) $ln = "ita";
if (!empty($upload_allegato_mln)) {
$allegati_esist = explode(",",$allegati_esist);
if (empty($allegati_esist[fixset($num_all_agg)]) or strstr($allegati_esist[$num_all_agg],"mln_$ln:")) $errore = 1;
else {
$allegati_esist[$num_all_agg] .= ">mln_$ln:$max_fa";
$allegati_esist = substr(implode(",",$allegati_esist),0,-1);
$max_fa = "";
} # fine else if (empty($allegati_esist[fixset($num_all_agg)]) or...
} # fine if (!empty($upload_allegato_mln))
else $max_fa = "mln_$ln:$max_fa";
} # fine if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#")
if (!$errore) {
$mostra_form_iniziale = "NO";
$allegato = chunk_split(base64_encode($allegato));
$allegato_esist = esegui_query("select testo from $tablecontratti where testo $LIKE '%,".aggslashdb($allegato)."' and tipo = 'file_all'");
if (numlin_query($allegato_esist)) {
$errore = 1;
$allegato_esist = explode(",",(string) risul_query($allegato_esist,0,'testo'));
echo "".mex("È stato trovato un allegato uguale",$pag)." (<em class=\"colred\">".htmlspecialchars($allegato_esist[0])."</em>), ".mex("riutilizzare l'allegato esistente o renderlo predefinito per evitare di ingombreare il database",$pag).".<br>";;
} # fine if (numlin_query($allegato_esist))
if (!$errore) {
if (!$file_allegato_upload_type) $file_allegato_upload_type = "application/unknown";
if (!$file_allegato_upload_name) $file_allegato_upload_name = mex("Allegato",$pag);
$allegato = htmlspecialchars($file_allegato_upload_name).",".$file_allegato_upload_type.",".$allegato;
esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$max_fa_orig','file_all','".aggslashdb($allegato)."')");
if ($allegati_esist) $str_allegati = "$allegati_esist$max_fa,";
else $str_allegati = ",$max_fa,";
esegui_query("update $tablecontratti set testo = '$str_allegati' where numero = '$num_contratto' and tipo = 'allegato'");
echo "".mex("Allegato salvato",$pag).".<br>";
} # fine if (!$errore)
} # fine if (!$errore)
} # fine if ($tipo_contratto == "contreml")
unlock_tabelle($tabelle_lock);
} # fine if (!defined("C_MASSIMO_NUM_BYTE_UPLOAD") or...
else unlink($file_tmp);
} # fine if ($errore == "NO")
} # fine if (!empty($upload_allegato) or !empty($upload_allegato_mln))

if (!empty($aggiungi_allegato) or !empty($aggiungi_allegato_mln)) {
if (!empty($aggiungi_allegato)) unset($aggiungi_allegato_mln);
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$all_esistente = esegui_query("select * from $tablecontratti where numero = '".aggslashdb($num_allegato)."' and tipo = 'file_all' ");
if (numlin_query($all_esistente)) {
$allegati_esist = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
$allegati_esist = (string) risul_query($allegati_esist,0,'testo');
if (!strstr($allegati_esist,",$num_allegato,") and !strstr($allegati_esist,":$num_allegato,") and !strstr($allegati_esist,":$num_allegato>")) {
$errore = 0;
if (!empty($aggiungi_allegato) and substr_count($allegati_esist,",") > $num_allegati_max) $errore = 1;
if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#") {
if (!empty($aggiungi_allegato_mln)) $ln = fixset($ln_upload);
else $ln = substr(risul_query($dati_contratto,0,'testo'),7);
if ($ln != "ita" and (preg_replace("/[a-z]{2,3}/","",$ln) != "" or !@is_file("./includes/lang/$ln/l_n"))) $ln = "ita";
if (!empty($aggiungi_allegato_mln)) {
$allegati_esist = explode(",",$allegati_esist);
if (empty($allegati_esist[fixset($num_all_agg)]) or strstr($allegati_esist[$num_all_agg],"mln_$ln:")) $errore = 1;
else {
$allegati_esist[$num_all_agg] .= ">mln_$ln:$num_allegato";
$allegati_esist = substr(implode(",",$allegati_esist),0,-1);
$num_allegato = "";
} # fine else if (empty($allegati_esist[fixset($num_all_agg)]) or...
} # fine if (!empty($aggiungi_allegato_mln))
else $num_allegato = "mln_$ln:$num_allegato";
} # fine if (substr(risul_query($dati_contratto,0,'testo'),0,7) == "#!mln!#")
if (!$errore) {
$mostra_form_iniziale = "NO";
if ($allegati_esist) $str_allegati = "$allegati_esist$num_allegato,";
else $str_allegati = ",$num_allegato,";
esegui_query("update $tablecontratti set testo = '$str_allegati' where numero = '$num_contratto' and tipo = 'allegato'");
echo "".mex("Allegato salvato",$pag).".<br>";
} # fine if (!$errore)
} # fine if (!strstr($allegati_esist,",$num_allegato,") and...
} # fine if (numlin_query($all_esistente))
} # fine if ($tipo_contratto == "contreml")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($aggiungi_allegato) or !empty($aggiungi_allegato_mln))

if (!empty($elimina_allegato)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$allegati_esist = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
$allegati_esist = risul_query($allegati_esist,0,'testo');
if ($allegati_esist) {
$num_all = fixstr($num_elimina_allegato);
if (strstr($allegati_esist,",$num_all,") or strstr($allegati_esist,":$num_all,") or strstr($allegati_esist,":$num_all>")) {
$mostra_form_iniziale = "NO";
$allegati_esist = explode(",",$allegati_esist);
$num_allegati = (count($allegati_esist) - 1);
for ($num1 = 1 ; $num1 < $num_allegati ; $num1++) {
if ($allegati_esist[$num1] == $num_all) $allegati_esist[$num1] = "";
elseif (strstr($allegati_esist[$num1],":$num_all")) {
$allegati_esist[$num1] = preg_replace("/mln_[a-z]{2,3}:$num_all(,|>)/","",$allegati_esist[$num1].",");
if (substr($allegati_esist[$num1],-1) == ">" or substr($allegati_esist[$num1],-1) == ",") $allegati_esist[$num1] = substr($allegati_esist[$num1],0,-1);
#$allegati_esist[$num1] = preg_replace("/mln_[a-z]{2,3}:$num_all>/","",$allegati_esist[$num1]);
} # fine elseif (strstr($allegati_esist[$num1],":$num_all"))
} # fine for $num1
$allegati_esist = implode(",",$allegati_esist);
if (strstr($allegati_esist,",,")) {
$num_all_tot = (substr_count($allegati_esist,",") - 1);
$num_all_canc = (substr_count(str_replace(strstr($allegati_esist,",,"),"",$allegati_esist),",") + 1);
elimina_cond_variabile_pers("allegato$num_all_canc",(-100 - $num_all_canc),$num_contratto,$tablecontratti);
$testi_contr = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
$testi_contr = array('num' => 1, 0 => (string) risul_query($testi_contr,0,'testo'));
if (substr($testi_contr[0],0,7) == "#!mln!#") {
$testi_mln_contr = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'mln_%' ");
$testi_contr['num'] = numlin_query($testi_mln_contr);
$testi_contr['mln'] = 1;
for ($num1 = 0 ; $num1 < $testi_contr['num'] ; $num1++) {
$testi_contr[$num1] = (string) risul_query($testi_mln_contr,$num1,'testo');
$testi_contr[$num1] = rinomina_testo_variabile_pers("allegato$num_all_canc","allegato0",$testi_contr[$num1],1);
$testi_contr[$num1] = rinomina_testo_variabile_pers("attachment$num_all_canc","attachment0",$testi_contr[$num1],1);
$testi_contr[$num1] = rinomina_testo_variabile_pers("archivo_adjunto$num_all_canc","archivo_adjunto0",$testi_contr[$num1],1);
if ($lingua_mex != 'ita' and $lingua_mex != 'en' and $lingua_mex != 'es') $testi_contr[$num1] = rinomina_testo_variabile_pers(mexv("allegato").$num_all_canc,mexv("allegato").'0',$testi_contr[$num1],1);
} # fine for $num1
} # fine if (substr($testi_contr[0],0,7) == "#!mln!#")
for ($num1 = ($num_all_canc + 1) ; $num1 <= $num_all_tot ; $num1++) {
rinomina_cond_variabile_pers("allegato$num1",(-100 - $num1),"allegato".($num1 - 1),(-99 - $num1),$num_contratto,$tablecontratti);
for ($num2 = 0 ; $num2 < $testi_contr['num'] ; $num2++) {
$testi_contr[$num2] = rinomina_testo_variabile_pers("allegato$num1","allegato".($num1 - 1),$testi_contr[$num2],1);
$testi_contr[$num2] = rinomina_testo_variabile_pers("attachment$num1","attachment".($num1 - 1),$testi_contr[$num2],1);
$testi_contr[$num2] = rinomina_testo_variabile_pers("archivo_adjunto$num1","archivo_adjunto".($num1 - 1),$testi_contr[$num2],1);
if ($lingua_mex != 'ita' and $lingua_mex != 'en' and $lingua_mex != 'es') $testi_contr[$num2] = rinomina_testo_variabile_pers(mexv("allegato").$num1,mexv("allegato").($num1 - 1),$testi_contr[$num2],1);
} # fine for $num2
} # fine for $num1
if (isset($testi_contr['mln'])) {
for ($num1 = 0 ; $num1 < $testi_contr['num'] ; $num1++) {
$tipo = risul_query($testi_mln_contr,$num1,'tipo');
esegui_query("update $tablecontratti set testo = '".aggslashdb($testi_contr[$num1])."' where numero = '$num_contratto' and tipo = '$tipo' ");
} # fine for $num1
} # fine if (isset($testi_contr['mln']))
else esegui_query("update $tablecontratti set testo = '".aggslashdb($testi_contr[0])."' where numero = '$num_contratto' and tipo $LIKE 'contr%' ");
$allegati_esist = str_replace(",,",",",$allegati_esist);
} # fine if (strstr($allegati_esist,",,"))
if (strlen($allegati_esist) < 3) $allegati_esist = "";
esegui_query("update $tablecontratti set testo = '$allegati_esist' where numero = '$num_contratto' and tipo = 'allegato' ");
$altri_all = esegui_query("select * from $tablecontratti where (testo $LIKE '%,".aggslashdb($num_all).",%' or testo $LIKE '%:".aggslashdb($num_all).",%' or testo $LIKE '%:".aggslashdb($num_all).">%') and tipo = 'allegato' ");
if (!numlin_query($altri_all)) esegui_query("delete from $tablecontratti where numero = '".aggslashdb($num_all)."' and tipo = 'file_all' ");
echo "".mex("Allegato eliminato",$pag).".<br>";
} # fine if (strstr($allegati_esist,",$num_all,") or strstr($allegati_esist,":$num_all,") or strstr($allegati_esist,":$num_all>"))
} # fine if ($allegati_esist)
unlock_tabelle($tabelle_lock);
} # fine if (!empty($elimina_allegato))

if (!empty($cambia_formato_email) or !empty($cambia_bcc)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$contratto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$mostra_form_iniziale = "NO";
$opz_eml = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'opzeml'");
$opz_eml = explode(";",risul_query($opz_eml,0,'testo'));
if (!empty($cambia_formato_email)) {
if ($formato_email == "html") {
$n_opz = "html;";
if ($opz_eml[0] != "html") {
$testo_eml = risul_query($contratto,0,'testo');
if (!strcmp(trim($testo_eml),"")) esegui_query("update $tablecontratti set testo = '<html><body>\n\n\n\n</body></html>' where numero = '$num_contratto' and tipo = 'contreml' ");
} # fine if ($opz_eml[0] != "html")
} # fine if ($formato_email == "html")
else $n_opz = ";";
$n_opz .= $opz_eml[1].";".$opz_eml[2];
esegui_query("update $tablecontratti set testo = '$n_opz' where numero = '$num_contratto' and tipo = 'opzeml' ");
echo "".mex("Formato dell'email cambiato",$pag).".<br>";
} # fine if (!empty($cambia_formato_email))
if (!empty($cambia_bcc)) {
$n_opz = $opz_eml[0].";";
if (isset($bcc_mittente) and $bcc_mittente == "SI") $n_opz .= "SI";
$n_opz .= ";";
if (!empty($bcc_indirizzo) and preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/i',$email_bcc)) $n_opz .= "$email_bcc";
esegui_query("update $tablecontratti set testo = '$n_opz' where numero = '$num_contratto' and tipo = 'opzeml' ");
echo "".mex("Copie bcc da spedire cambiate",$pag).".<br>";
} # fine if (!empty($cambia_bcc))
} # fine if ($tipo_contratto == "contreml")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($cambia_formato_email) or !empty($cambia_bcc))

if (!empty($lingua_predef)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$testo_contr = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
$testo_contr = risul_query($testo_contr,0,'testo');
if (substr($testo_contr,0,7) == "#!mln!#") {
if ($lingua_contr == "ita" or (preg_replace("/[a-z]{2,3}/","",$lingua_contr) == "" and @is_file("./includes/lang/$lingua_contr/l_n"))) {
esegui_query("update $tablecontratti set testo = '#!mln!#$lingua_contr' where numero = '$num_contratto' and tipo $LIKE 'contr%'");
} # fine if ($lingua_contr == "ita" or...
} # fine if (substr($testo_contr,0,7) == "#!mln!#")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($lingua_predef))

if (!empty($salva_head)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$vecchio_head = esegui_query("select numero from $tablecontratti where numero = '$num_contratto' and tipo = 'headhtm' ");
if (numlin_query($vecchio_head)) {
$mostra_form_iniziale = "NO";
if (@get_magic_quotes_gpc()) $n_head = stripslashes($n_head);
$n_head = aggslashdb(fixset($n_head));
esegui_query("update $tablecontratti set testo = '$n_head' where numero = '$num_contratto' and tipo = 'headhtm' ");
echo "".mex("Intestazione html cambiata",$pag).".<br>";
} # fine if (numlin_query($vecchio_head))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($salva_head))

if (!empty($salva_modifiche)) {
$mostra_form_iniziale = "NO";
$errore = "NO";
if (@get_magic_quotes_gpc()) $n_contratto = stripslashes($n_contratto);
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$vecchio_contr = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
if (numlin_query($vecchio_contr)) {
$vecchio_contr = (string) risul_query($vecchio_contr,0,'testo');
if (substr($vecchio_contr,0,7) == "#!mln!#") {
$multilingua = 1;
if ($lingua_contr != "ita" and (preg_replace("/[a-z]{2,3}/","",$lingua_contr) != "" or !@is_file("./includes/lang/$lingua_contr/l_n"))) $errore = "SI";
$n_contratto = str_replace("[r]","",str_replace("[/r]","",$n_contratto));
if (str_replace("[r]","",$n_contratto) != $n_contratto or str_replace("[/r]","",$n_contratto) != $n_contratto) $errore = "SI";
$anchor = "#contr_txtbox$lingua_contr";
} # fine if (substr($vecchio_contr,0,7) == "#!mln!#")
else $multilingua = 0;
if (defined('C_RESTRIZIONI_DEMO_ADMIN') and C_RESTRIZIONI_DEMO_ADMIN == "SI") $n_contratto = htmlspecialchars($n_contratto);
$contr_controlla_int = str_replace("[r4]","[r4\\]",$n_contratto);
$contr_controlla_int = preg_replace("/\\[r4 array=\"[A-Za-z]+[A-Za-z0-9_]*\"\\]/","[r4]",$contr_controlla_int);
$contr_controlla = explode("[",$contr_controlla_int);
$num_contr_controlla = count($contr_controlla);
$livello = 0;
$tipo_livello = array(0 => null);
if (str_replace("[r]","",$contr_controlla_int) == $contr_controlla_int) $tipo_livello[0] = "r";
for ($num1 = 1 ; $num1 < $num_contr_controlla ; $num1++) {
$parte = $contr_controlla[$num1];
$apertura = "";
$chiusura = "";
if (substr($parte,0,2) == "r]") $apertura = "r";
if (substr($parte,0,3) == "r2]") $apertura = "r2";
if (substr($parte,0,3) == "r3]") $apertura = "r3";
if (substr($parte,0,3) == "r4]") $apertura = "r4";
if (substr($parte,0,3) == "r5]") $apertura = "r5";
if (substr($parte,0,3) == "r6]") $apertura = "r6";
if (substr($parte,0,3) == "r7]") $apertura = "r7";
if (substr($parte,0,3) == "/r]") $chiusura = "r";
if (substr($parte,0,4) == "/r2]") $chiusura = "r2";
if (substr($parte,0,4) == "/r3]") $chiusura = "r3";
if (substr($parte,0,4) == "/r4]") $chiusura = "r4";
if (substr($parte,0,4) == "/r5]") $chiusura = "r5";
if (substr($parte,0,4) == "/r6]") $chiusura = "r6";
if (substr($parte,0,4) == "/r7]") $chiusura = "r7";
if ($apertura) {
if ($apertura == "r" and $livello != 0 and ($livello != 1 or ($tipo_livello[1] != "r4" and $tipo_livello[1] != "r6") or $tipo_livello[0] == "r")) $errore = "SI";
if (($apertura == "r2" or $apertura == "r3" or $apertura == "r5" or $apertura == "r7") and $tipo_livello[$livello] != "r") $errore = "SI";
if (($apertura == "r4" or $apertura == "r6") and $tipo_livello[$livello] != "r" and $livello != 0 and ($livello != 1 or ($tipo_livello[1] != "r4" and $tipo_livello[1] != "r6") or $tipo_livello[0] == "r")) $errore = "SI";
if ($apertura == "r6" and isset($tipo_livello[1]) and $tipo_livello[1] == "r6") $errore = "SI";
$livello++;
$tipo_livello[$livello] = $apertura;
} # fine ($apertura)
if ($chiusura) {
if ($tipo_livello[$livello] != $chiusura) $errore = "SI";
$tipo_livello[$livello] = "";
$livello--;
if ($livello < 0) $errore = "SI";
} # fine if ($chiusura)
if ($errore == "SI") break;
} # fine for $num1
if ($livello != 0) $errore = "SI";
$contr_controlla_int = str_replace("[c]","[c\\]",$contr_controlla_int);
$contr_controlla_int = preg_replace("/\\[c +[A-Za-z]+[A-Za-z0-9_]*(\\((('[^'\\]\\(]*')|([A-Za-z]+[A-Za-z0-9_]*))\\))? *(!?=|!?%|>|<) *\"[^\"]*\" *((\\||&) *[A-Za-z]+[A-Za-z0-9_]*(\\((('[^'\\]\\(]*')|([A-Za-z]+[A-Za-z0-9_]*))\\))? *(!?=|!?%|>|<) *\"[^\"]*\" *)*\\]/","[c]",$contr_controlla_int);
$contr_controlla = explode("[c]",$contr_controlla_int);
$num_contr_controlla = count($contr_controlla);
for ($num1 = 1 ; $num1 < $num_contr_controlla ; $num1++) {
$parte = explode("[/c]",$contr_controlla[$num1]);
if (count($parte) != 2) $errore = "SI";
if (preg_replace("|\\[/?r[1234]\\]|","",$parte[0]) != $parte[0]) $errore = "SI";
} # fine for $num1
if ($errore == "SI") echo "<span style=\"color: red;\">".mex("Errore nelle ripetizioni e condizioni annidate",$pag)."</span>.<br>";
else {
$n_contratto = aggslashdb($n_contratto);
if (!$multilingua) esegui_query("update $tablecontratti set testo = '$n_contratto' where numero = '$num_contratto' and tipo $LIKE 'contr%'");
else {
$lingua_esist = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'mln_".aggslashdb($lingua_contr)."' ");
if (numlin_query($lingua_esist)) esegui_query("update $tablecontratti set testo = '$n_contratto' where numero = '$num_contratto' and tipo = 'mln_".aggslashdb($lingua_contr)."' ");
else esegui_query("insert into $tablecontratti (numero,tipo,testo) values ('$num_contratto','mln_".aggslashdb($lingua_contr)."','$n_contratto') ");
} # fine else if (!$multilingua)
echo "".mex("Documento salvato",$pag).".<br>";
} # fine else if ($errore == "SI")
} # fine if (numlin_query($vecchio_contr))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($salva_modifiche))

if (!empty($aggiungi_var) or !empty($aggiungi_var2)) {
if (!empty($aggiungi_var2)) $var_agg = $var_agg2;
if ($var_agg and preg_replace("/[A-Za-z0-9\(\)_]/","",$var_agg) == "") {
if (@get_magic_quotes_gpc()) $n_contratto = stripslashes($n_contratto);
if (!strcmp((string) $pos_curs,"")) $testo_contratto_mod = $n_contratto."[".$var_agg."]";
else {

#$pos_curs = strlen(utf8_encode(substr(utf8_decode($n_contratto),0,$pos_curs)));
#$pos_curs += (2 * substr_count(substr($n_contratto,0,$pos_curs),"€"));
#$pos_curs += (2 * substr_count(substr($n_contratto,0,$pos_curs),"–"));
$testo_contratto_mod = sottostringa($n_contratto,0,$pos_curs)."[".$var_agg."]".sottostringa($n_contratto,$pos_curs);
} # fine else if (!strcmp((string) $pos_curs,""))
} # fine if ($var_agg and preg_replace("/[A-Za-z0-9\(\)_]/","",$var_agg) == "")
} # fine if (!empty($aggiungi_var) or !empty($aggiungi_var2))

if (!empty($aggiungi_ripetizione) or !empty($aggiungi_ripetizione2)) {
if (@get_magic_quotes_gpc()) $n_contratto = stripslashes($n_contratto);
if (!empty($aggiungi_ripetizione2)) $tipo_rip = $tipo_rip2;
$testo_agg1 = "";
$testo_agg2 = "";
$testo_agg3 = "";
if ($tipo_rip == 1) {
$testo_agg1 = "[r]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON PARTE DA RIPETERE PER OGNI PRENOTAZIONE",$pag)."\n";
$testo_agg3 = "[/r]";
} # fine if ($tipo_rip == 1)
if ($tipo_rip == 2) {
$testo_agg1 = "[r2]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON LISTA OSPITI IN PRENOTAZIONE",$pag)."\n";
$testo_agg3 = "[/r2]";
} # fine if ($tipo_rip == 2)
if ($tipo_rip == 3) {
$testo_agg1 = "[r3]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON LISTA COSTI IN PRENOTAZIONE",$pag)."\n";
$testo_agg3 = "[/r3]";
} # fine if ($tipo_rip == 3)
if (substr($tipo_rip,0,1) == "a") {
$testo_agg1 = "[r4 array=\"".substr($tipo_rip,1)."\"]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON PARTE DA RIPETERE PER OGNI VALORE DELL'ARRAY",$pag)."\n";
$testo_agg3 = "[/r4]";
} # fine if (substr($tipo_rip,0,1) == "a")
if ($tipo_rip == 5) {
$testo_agg1 = "[r5]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON LISTA PAGAMENTI",$pag)."\n";
$testo_agg3 = "[/r5]";
} # fine if ($tipo_rip == 5)
if ($tipo_rip == 6) {
$testo_agg1 = "[r6]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON LISTA APPARTAMENTI",'unit.php')."\n";
$testo_agg3 = "[/r6]";
} # fine if ($tipo_rip == 6)
if ($tipo_rip == 7) {
$testo_agg1 = "[r7]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON LISTA DOCUMENTI SALVATI",$pag)."\n";
$testo_agg3 = "[/r7]";
} # fine if ($tipo_rip == )
if ($tipo_rip == 8) {
$testo_agg1 = "[c ".mex("nome_variabile",$pag)."=\"".mex("valore",$pag)."\"]";
$testo_agg2 = "\n".mex("SOSTITUISCI CON PARTE DA MOSTRARE SOLO SE E' SODDISFATTA LA CONDIZIONE PRECEDENTE",$pag).": ".mex("nome_variabile",$pag)." = ".mex("OPPURE",$pag)." != ".mex("OPPURE",$pag)." % (".mex("contiene",'modifica_var_contr.php').") ".mex("OPPURE",$pag)." !% ".mex("OPPURE",$pag)." > ".mex("OPPURE",$pag)." < ".mex("valore",$pag).". ";
$testo_agg2 .= mex("Unisci più condizioni con",$pag)." & (AND) ".strtolower(mex("OPPURE",$pag))." | (OR), ".mex("sempre da sinistra a destra",$pag).": ".mex("nome_variabile",$pag)."1!=\"\" | ".mex("nome_variabile",$pag)."2>\"0\" &...\n";
$testo_agg3 = "[/c]";
} # fine if ($tipo_rip == 8)
if (!strcmp((string) $pos_curs,"")) $testo_contratto_mod = $n_contratto.$testo_agg1.$testo_agg2.$testo_agg3;
else {
#$pos_curs = strlen(utf8_encode(substr(utf8_decode($n_contratto),0,$pos_curs)));
if (!strcmp((string) $pos_fine_sel,"")) $testo_contratto_mod = sottostringa($n_contratto,0,$pos_curs).$testo_agg1.$testo_agg2.$testo_agg3.sottostringa($n_contratto,$pos_curs);
else {
#$pos_fine_sel = strlen(utf8_encode(substr(utf8_decode($n_contratto),0,$pos_fine_sel)));
$testo_contratto_mod = sottostringa($n_contratto,0,$pos_curs).$testo_agg1.sottostringa($n_contratto,$pos_curs,($pos_fine_sel - $pos_curs)).$testo_agg3.sottostringa($n_contratto,$pos_fine_sel);
} # fine else if (!strcmp((string) $pos_fine_sel,""))
} # fine else if (!strcmp((string) $pos_curs,""))
} # fine if (!empty($aggiungi_ripetizione) or !empty($aggiungi_ripetizione2))

if (!empty($salva_foot)) {
$tabelle_lock = array($tablecontratti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$vecchio_foot = esegui_query("select numero from $tablecontratti where numero = '$num_contratto' and tipo = 'foothtm' ");
if (numlin_query($vecchio_foot)) {
$mostra_form_iniziale = "NO";
if (@get_magic_quotes_gpc()) $n_foot = stripslashes($n_foot);
$n_foot = aggslashdb(fixset($n_foot));
esegui_query("update $tablecontratti set testo = '$n_foot' where numero = '$num_contratto' and tipo = 'foothtm' ");
echo "".mex("Chiusura html cambiata",$pag).".<br>";
} # fine if (numlin_query($vecchio_foot))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($salva_foot))


if (isset($mostra_form_iniziale) and $mostra_form_iniziale == "NO") {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag$anchor\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form>";
} # fine if (isset($mostra_form_iniziale) and $mostra_form_iniziale == "NO")

} # fine if (!empty($cambia_qualcosa))





if (!isset($mostra_form_iniziale) or $mostra_form_iniziale != "NO") {

include("./includes/funzioni_contratti.php");
$nomi_contratti = trova_nomi_contratti($max_contr,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,$pag);
if (!isset($nomi_contratti['pers'][$num_contratto_int]) or !strcmp((string) $nomi_contratti['pers'][$num_contratto_int],"")) $nome_contratto = "";
else $nome_contratto = " (".$nomi_contratti['pers'][$num_contratto_int].")";


echo "<h3>".ucfirst(mex("documento",$pag))." $num_contratto$nome_contratto</h3><br>
<br>";
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo $LIKE 'contr%'");
if (numlin_query($dati_contratto) != 1) exit();

echo "<table><tr><td><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"numero_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"origine\" value=\"./$pag?num_contratto=$num_contratto\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Visualizza il documento",$pag)." $num_contratto_int\">
</div></form></td><td style=\"width: 30px;\"></td>";
if ($max_contr > 1) {
echo "<td><form accept-charset=\"utf-8\" method=\"post\" action=\"./personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_mod\" value=\"".htmlspecialchars(fixstr($id_utente_mod))."\">
<input type=\"hidden\" name=\"aggiorna_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"elimina_contratto\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr_elimina\" value=\"$num_contratto_int\">
<input type=\"hidden\" name=\"origine\" value=\"./$pag?num_contratto=$num_contratto\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Elimina il documento",'personalizza.php')." $num_contratto_int\">
</div></form></td>";
} # fine if ($max_contr > 1)
echo "</tr></table><br>";

$tipo_contratto = substr(risul_query($dati_contratto,0,'tipo'),5);
$testo_contratto = (string) risul_query($dati_contratto,0,'testo');
$sel_HTML = "";
$sel_EMAIL = "";
$sel_RTF = "";
$sel_TXT = "";
if ($tipo_contratto == "htm") $sel_HTML = " selected";
if ($tipo_contratto == "eml") $sel_EMAIL = " selected";
if ($tipo_contratto == "rtf") $sel_RTF = " selected";
if ($tipo_contratto == "txt") $sel_TXT = " selected";
$multilingua = 0;
if (substr($testo_contratto,0,7) == "#!mln!#") {
$multilingua = 1;
$lingua_default = substr($testo_contratto,7);
} # fine if (substr($testo_contratto,0,7) == "#!mln!#")
if ($multilingua) { $checked = " checked"; $b = "<b>"; $slash_b = "</b>"; }
else { $checked = ""; $b = ""; $slash_b = ""; }
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_formato\" value=\"SI\">
".mex("Formato del documento",$pag).":
 <select name=\"nuovo_formato\">";
if ($priv_mod_doc_html == "s") echo "<option value=\"HTML\"$sel_HTML>HTML</option>";
echo "<option value=\"EMAIL\"$sel_EMAIL>EMAIL</option>
<option value=\"RTF\"$sel_RTF>RTF</option>
<option value=\"TXT\"$sel_TXT>TXT</option>
</select>
(<label><input type=\"checkbox\" name=\"multi_lingua\" value=\"1\"$checked> $b".mex("multi-lingua",$pag)."$slash_b</label>)
 <input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form><br>";


$formati = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'formati'");
if (numlin_query($formati)) {
$formati = explode(">",risul_query($formati,0,'testo'));
$stile_soldi_contr = $formati[0];
$stile_data_contr = $formati[1];
} # fine if (numlin_query($formati))
else {
$stile_soldi_contr = "";
$stile_data_contr = "";
} # fine else if (numlin_query($formati))
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_formati_dati\" value=\"1\">
<table border=0 cellspacing=0 cellpadding=0><tr>
<td align=\"center\">".mex("Formato dei soldi",$pag).":</td>";
$check_soldi_ut = "";
$check_soldi_eu = "";
$check_soldi_usa = "";
$check_data_ut = "";
$check_data_eu = "";
$check_data_usa = "";
if ($stile_soldi_contr != "europa" and $stile_soldi_contr != "usa") $check_soldi_ut = " selected";
if ($stile_soldi_contr == "europa") $check_soldi_eu = " selected";
if ($stile_soldi_contr == "usa") $check_soldi_usa = " selected";
if ($stile_data_contr != "europa" and $stile_data_contr != "usa") $check_data_ut = " selected";
if ($stile_data_contr == "europa") $check_data_eu = " selected";
if ($stile_data_contr == "usa") $check_data_usa = " selected";
echo "<td align=\"left\"><select name=\"stile_soldi_contr\">
<option value=\"\"$check_soldi_ut>".mex("formato dell'utente",$pag)."</option>
<option value=\"europa\"$check_soldi_eu>1.050.000,32</option>
<option value=\"usa\"$check_soldi_usa>1,050,000.32</option>
</select></td><td>&nbsp;&nbsp;&nbsp;</td>
<td align=\"center\">".mex("Formato delle date",$pag).":</td>
<td align=\"left\"><select name=\"stile_data_contr\">
<option value=\"\"$check_data_ut>".mex("formato dell'utente",$pag)."</option>
<option value=\"europa\"$check_data_eu>27-08-2002</option>
<option value=\"usa\"$check_data_usa>08-27-2002</option>
</select></td><td align=\"center\">&nbsp;&nbsp;
<button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</td></tr></table>
</div></form><br>";


if ($tipo_contratto == "rtf" or $tipo_contratto == "htm" or $tipo_contratto == "txt") {
$dir_salva = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'dir'");
if (numlin_query($dir_salva) == 1) {
$dir_salva = risul_query($dir_salva,0,'testo');
if ($dir_salva == "~") $dir_salva = $dir_salva_home;
$checked = " checked";
} # fine if (numlin_query($dir_salva) == 1)
else {
if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "") $dir_salva = "";
else $dir_salva = $dir_salva_home;
$checked = "";
} # fine else if (numlin_query($dir_salva) == 1)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<label><input type=\"checkbox\" id=\"sacon\" name=\"salva_contr\" value=\"SI\"$checked>
".mex("Salva i documenti con numero progressivo nella cartella",$pag)." ";
if (defined("C_CARTELLA_CREA_MODELLI") and C_CARTELLA_CREA_MODELLI != "") echo C_CARTELLA_CREA_MODELLI."/";
echo "</label><input type=\"text\" name=\"nuova_dir_salva\" size=\"20\" value=\"$dir_salva\" onclick=\"document.getElementById('sacon').checked='1'\">
<input class=\"sbutton\" type=\"submit\" name=\"cambia_dir_salva\" value=\"".mex("Cambia",$pag)."\">
</div></form>";

if ($checked) {
$salv_contr = 1;
echo "<table cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"width: 50px;\"></td><td>";

$compress = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'compress' ");
if (!numlin_query($compress)) $compress = "";
else $compress = risul_query($compress,0,'testo');
if ($compress) $checked = " checked";
else $checked = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_compress\" value=\"SI\">
<label><input type=\"checkbox\" name=\"compress\" value=\"SI\"$checked>
".mex("Comprimi i file",$pag)."</label>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";

$autosalv = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'autosalv' ");
if (!numlin_query($autosalv)) $autosalv = "";
else $autosalv = risul_query($autosalv,0,'testo');
$sel_mai = "";
$sel_checkin = "";
$sel_checkout = "";
if (!$autosalv) $sel_mai = " selected";
else ${"sel_".$autosalv} = " selected";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_autosalv\" value=\"SI\">
".mex("Salva automaticamente il documento",$pag).":
 <select name=\"n_autosalv\">
<option value=\"\"$sel_mai>".mex("mai",$pag)."</option>
<option value=\"checkin\"$sel_checkin>".mex("alla registrazione dell'entrata",$pag)."</option>
<option value=\"checkout\"$sel_checkout>".mex("alla registrazione dell'uscita",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";

$incr_np = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'incr_np' ");
if (!numlin_query($incr_np)) $incr_np = "";
else $incr_np = risul_query($incr_np,0,'testo');
if ($incr_np) $checked = " checked";
else $checked = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_incr_np\" value=\"SI\">
<label><input type=\"checkbox\" name=\"incr_np\" value=\"SI\"$checked>
".mex("Incrementa il numero progressivo ad ogni sua apparizione",$pag)."</label>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";

$num_prog = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'num_prog' ");
if (!numlin_query($num_prog)) $num_prog = "";
else $num_prog = risul_query($num_prog,0,'testo');
$contr_salva = esegui_query("select * from $tablecontratti where tipo = 'dir'");
$num_contr_salva = numlin_query($contr_salva);
$opt_num_prog = "";
for ($num_c = 0 ; $num_c < $num_contr_salva ; $num_c++) {
$num_contr = risul_query($contr_salva,$num_c,'numero');
if ($num_contr != $num_contratto_int and ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI" or $num_prog == $num_contr)) {
$num_prog_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contr' and tipo = 'num_prog' ");
if (!numlin_query($num_prog_esistente)) {
$nome_contr = mex("il documento",$pag)." ".$num_contr;
if (strcmp(fixstr($nomi_contratti['pers'][$num_contr]),"")) $nome_contr .= " (".$nomi_contratti['pers'][$num_contr].")";
if ($num_prog != $num_contr) $sel = "";
else $sel = " selected";
$opt_num_prog .= "<option value=\"$num_contr\"$sel>$nome_contr</option>";
} # fine if (!numlin_query($num_prog_esistente))
} # fine if ($num_contr != $num_contratto and...
} # fine for $num_c
if ($opt_num_prog) {
if ($num_prog) $sel = "";
else $sel = " selected";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_num_prog\" value=\"SI\">
".mex("Condividi il numero progressivo con",$pag)."
 <select name=\"contr_num_prog\">
<option value=\"\"$sel>----</option>
$opt_num_prog</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";
} # fine if ($opt_num_prog)

$nome_file_salva = esegui_query("select testo from $tablecontratti where numero = '$num_contratto' and tipo = 'nomefile' ");
if (numlin_query($nome_file_salva)) {
$nome_file_salva = risul_query($nome_file_salva,0,'testo');
$checked_ncontr = "";
$checked_npers = " checked";
} # fine if (numlin_query($nome_file_salva))
else {
$nome_file_salva = "";
$checked_ncontr = " checked";
$checked_npers = "";
} # fine else if (numlin_query($nome_file_salva))
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_nome_file\" value=\"SI\">
<table cellspacing=0 cellpadding=0><tr><td valign=\"top\">".mex("Usa come nome del file",$pag).":
</td><td onclick=\"document.getElementById('fncontr').checked='1'\">
<input type=\"radio\" name=\"tipo_nome_file\" id=\"fncontr\" value=\"contr\"$checked_ncontr>".mex("il nome del documento",$pag)."
</td></tr><tr><td></td><td onclick=\"document.getElementById('fnpers').checked='1'\">
<input type=\"radio\" name=\"tipo_nome_file\" id=\"fnpers\" value=\"pers\"$checked_npers>".mex("un altro nome",$pag).":
 <input type=\"text\" name=\"nome_file_salva\" size=\"30\" maxlength=\"60\" value=\"$nome_file_salva\">
</td></tr><tr><td></td><td>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</td></tr></table></div></form>
</td></tr></table>";
} # fine if ($checked)
else $salv_contr = 0;
echo "<br>";


if ($priv_mod_doc_api == "s") {
$api_esistente = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'api'");
if (numlin_query($api_esistente)) $checked = " checked";
else $checked = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<label><input type=\"checkbox\" id=\"capi\" name=\"cons_api\" value=\"SI\"$checked>
".mex("Considera questo documento come una API",$pag)."</label>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_cons_api\" value=\"".mex("Cambia",$pag)."\">
</div></form>";
if ($checked) {
$pass_api = risul_query($api_esistente,0,'testo');
$id_utente_api = explode(";",$pass_api);
$indirizzi_ip_api = $id_utente_api[1];
$id_utente_api = $id_utente_api[0];
$pass_api = substr($pass_api,(strlen($id_utente_api) + strlen($indirizzi_ip_api) + 2));
echo "<table cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"width: 50px;\"></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"padding-top: 6px;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
".mex("Password",$pag).": <input type=\"text\" name=\"pass_api\" size=\"12\" maxlength=\"60\" value=\"$pass_api\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"padding-top: 6px;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_ind_ip_api\" value=\"1\">
".mex("Indirizzi IP",$pag).": <input type=\"text\" name=\"indirizzi_ip_api\" size=\"34\" maxlength=\"300\" value=\"$indirizzi_ip_api\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
 <small>(".mex("lista separata da virgole, qualsiasi IP se vuota",$pag).")</small>
</div></form>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"padding-top: 6px;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
".mex("Mostra il documento come visto dall'utente",$pag).": <select name=\"id_utente_api\">";
$lista_utenti = esegui_query("select idutenti,nome_utente from $tableutenti order by idutenti");
for ($num1 = 0 ; $num1 < numlin_query($lista_utenti) ; $num1++) {
$id = risul_query($lista_utenti,$num1,'idutenti');
if ($id_utente == 1 or $id == $id_utente or $id == $id_utente_api) {
$nome = risul_query($lista_utenti,$num1,'nome_utente');
if ($id == $id_utente_api) $sel = " selected";
else $sel = "";
echo "<option value=\"$id\"$sel>$nome</option>";
} # fine if ($id_utente == 1 or $id == $id_utente or $id == $id_utente_api)
} # fine for $num1
echo "</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";
if ($salv_contr) echo "<div style=\"padding-top: 6px;\"><em class=\"colblu\">".mex("Nota",$pag)."</em>: ".mex("i documenti esistenti non verranno mai sovrascritti, ogni volta che si chiama la API verrà salvato un nuovo documento",$pag).".</div>";
$link_api = "";
if (defined('C_FILE_DOMINIO') and C_FILE_DOMINIO != "" and C_NASCONDI_MARCA != "SI") {
$altri_domini = @file(C_FILE_DOMINIO);
if ($altri_domini) {
$link_api = "https://".trim($altri_domini[0])."/";
if (defined('C_DOMINIO_ADMIN_DIR') and C_DOMINIO_ADMIN_DIR != "") $link_api .= C_DOMINIO_ADMIN_DIR."/";
} # fine if ($altri_domini)
} # fine if (defined("C_FILE_DOMINIO") and C_FILE_DOMINIO != "" and C_NASCONDI_MARCA != "SI")
if (!$link_api) {
if (@$SERVER_NAME or @$_SERVER['SERVER_NAME'] or @$HTTP_SERVER_VARS['SERVER_NAME']) {
if (@$PHP_SELF or @$_SERVER['PHP_SELF']) {
if ($_SERVER['SERVER_NAME']) $SERVER_NAME = $_SERVER['SERVER_NAME'];
elseif ($HTTP_SERVER_VARS['SERVER_NAME']) $SERVER_NAME = $HTTP_SERVER_VARS['SERVER_NAME'];
if ($_SERVER['PHP_SELF']) $PHP_SELF = $_SERVER['PHP_SELF'];
if (substr($PHP_SELF,0,1) != "/") $PHP_SELF = "/".$PHP_SELF;
$link_api = "https://".$SERVER_NAME.$PHP_SELF;
if (substr($link_api,(strlen($pag) * -1)) == $pag) $link_api = substr($link_api,0,(strlen($pag) * -1));
if (substr($link_api,-4) == ".php") {
$url_vett1 = explode("/",$link_api);
$link_api = substr($link_api,0,(strlen($url_vett1[(count($url_vett1) - 1)]) * -1));
} # fine if (substr($link_api,-4) == ".php")
} # fine if (@$PHP_SELF or @$_SERVER['PHP_SELF'])
} # fine if (@$SERVER_NAME or @$_SERVER['SERVER_NAME'] or...
} # fine if (!$link_api)
$link_api .= "api.php";
$sec_oggi = time() + (C_DIFF_ORE * 3600);
$oggi = date("Y-m-d",$sec_oggi);
$dopodomani = date("Y-m-d",($sec_oggi + 172800));
$altroieri = date("Y-m-d",($sec_oggi - 172800));
$link1 = "$link_api?doc=$num_contratto&pass=$pass_api&res_year=$anno";
$link2 = "$link_api?doc=$num_contratto&pass=$pass_api&res_from=$oggi&res_to=$dopodomani";
$link3 = "$link_api?doc=$num_contratto&pass=$pass_api&res_num=2-5";
$link4 = "$link_api?doc=$num_contratto&pass=$pass_api&res_ins_from=$altroieri&res_ins_to=$oggi";
$link5 = "$link_api?doc=$num_contratto&pass=$pass_api&res_arr=$oggi";
$link6 = "$link_api?doc=$num_contratto&pass=$pass_api&res_dep=today";
$link7 = "$link_api?doc=$num_contratto&pass=$pass_api&clients=all";
$link8 = "$link_api?doc=$num_contratto&pass=$pass_api&clients=guests";
$link9 = "$link_api?doc=$num_contratto&pass=$pass_api&cashbox=".mex("nome_cassa",$pag);
echo "<div style=\"padding-top: 4px;\"></div>
<table class=\"rbox\" cellspacing=0 cellpadding=0><tr><td>
<div style=\"padding-top: 4px;\"><em>".mex("Esempi di URL per chiamare il documento",$pag)."</em>:</div>
<div style=\"padding-top: 4px;\">".mex("Tutte le prenotazioni dell'anno",$pag)." $anno: <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link1\" size=\"".(strlen($link1) + 1)."\"></div>
<div style=\"padding-top: 6px;\"><em>".mex("Nota",$pag)."</em>: ".mex("se la variabile",$pag)." <em>res_year</em> ".mex("non è presente nella URL allora verranno usate le prenotazioni dell'anno corrente",$pag).".</div>
<div style=\"padding-top: 6px;\">".mex("Tutte le prenotazioni presenti dal",$pag)." ".formatta_data($oggi,$stile_data)." ".mex("al",$pag)." ".formatta_data($dopodomani,$stile_data).": <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link2\" size=\"".(strlen($link2) + 1)."\"></div>
<div style=\"padding-top: 6px;\"><em>".mex("Nota",$pag)."</em>: ".mex("si possono usare anche le parole",$pag)." <em>today</em>, <em>tomorrow</em> ".mex("e",$pag)." <em>yesterday</em> ".mex("come date",$pag).".</div>
<div style=\"padding-top: 6px;\">".mex("Tutte le prenotazioni con numero dal",$pag)." 2 ".mex("al",$pag)." 5: <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link3\" size=\"".(strlen($link3) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Altri esempi dell'uso della variabile",$pag)." <em>res_num</em>: <em>res_num=3</em> / <em>res_num=3-</em> / <em>res_num=3,7</em> / <em>res_num=3,6-9</em></div>
<div style=\"padding-top: 6px;\">".mex("Tutte le prenotazioni inserite dal",$pag)." ".formatta_data($altroieri,$stile_data)." ".mex("al",$pag)." ".formatta_data($oggi,$stile_data).": <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link4\" size=\"".(strlen($link4) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Tutti gli arrivi del",$pag)." ".formatta_data($oggi,$stile_data).": <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link5\" size=\"".(strlen($link5) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Tutti le partenze del",$pag)." ".formatta_data($oggi,$stile_data).": <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link6\" size=\"".(strlen($link6) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Tutti i clienti",$pag)." (".mex("escludendo gli ospiti",$pag)."): <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link7\" size=\"".(strlen($link7) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Tutti i clienti",$pag)." (".mex("inclusi gli ospiti",$pag)."): <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link8\" size=\"".(strlen($link8) + 1)."\"></div>
<div style=\"padding-top: 6px;\">".mex("Tutti i pagamenti nella cassa",$pag)." \"".mex("nome_cassa",$pag)."\": <input type=\"text\" readonly onClick=\"this.select();\" value=\"$link9\" size=\"".(strlen($link9) + 1)."\"></div>
</td></tr></table>
</td></tr></table>";
} # fine if ($checked)
echo "<br>";
} # fine if ($priv_mod_doc_api == "s")

} # fine if ($tipo_contratto == "rtf" or $tipo_contratto == "htm" or...


$contr_head = "";
$contr_foot = "";
$checked = "";
if ($tipo_contratto == "htm") {
$intestazione_html = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'headhtm'");
if (numlin_query($intestazione_html) == 1) $checked = " checked";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<label><input type=\"checkbox\" name=\"intestazione_pers\" value=\"SI\"$checked>
".mex("Intestazione html personalizzata",$pag)."</label>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_intestazione_pers\" value=\"".mex("Cambia",$pag)."\">
</div></form><br>";
if ($checked) {
$contr_head = risul_query($intestazione_html,0,'testo');
$contr_foot = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'foothtm'");
$contr_foot = risul_query($contr_foot,0,'testo');
} # fine if ($checked)
} # fine if ($tipo_contratto == "htm")


if ($tipo_contratto == "rtf" or $tipo_contratto == "txt") {
$dati_download = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'datdownl'");
if (numlin_query($dati_download)) {
$dati_download = explode(">",(string) risul_query($dati_download,0,'testo'));
$estensione_txt = $dati_download[0];
$nome_download = fixset($dati_download[1]);
} # fine if (numlin_query($dati_download))
else {
$estensione_txt = "";
$nome_download = "";
} # fine else if (numlin_query($dati_download))
if ($nome_download) {
$sel_predef = "";
$sel_var = " selected";
} # fine if ($nome_download)
else {
$sel_predef = " selected";
$sel_var = "";
} # fine else if ($nome_download)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
".mex("Nome con cui vedere e scaricare il documento",$pag).": <select name=\"tipo_nome_download\">
<option value=\"predef\"$sel_predef>".mex("nome del documento o del file salvato",$pag)."</option>
<option value=\"var\"$sel_var>".mex("variabile",$pag)." [".mexv("nome_documento_scaricato")."]</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_nome_download\" value=\"".mex("Cambia",$pag)."\">
</div></form>";
if ($tipo_contratto == "txt") {
if ($estensione_txt) {
$checked_predef = "";
$checked_pers = " checked";
$estensione_pers_txt = $estensione_txt;
} # fine if ($estensione_txt)
else {
$checked_predef = " checked";
$checked_pers = "";
$estensione_pers_txt = "txt";
} # fine else if ($estensione_txt)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<table cellspacing=0 cellpadding=0 style=\"line-height: 1;\"><tr><td style=\"vertical-align: top;\">
".mex("Estensione con cui vedere e scaricare il documento",$pag).": </td>
<td><label><input type=\"radio\" name=\"tipo_estensione_txt\" value=\"predef\"$checked_predef>".mex("predefinita",$pag).": .txt</label><br>
<label><input type=\"radio\" name=\"tipo_estensione_txt\" id=\"te_pers\" value=\"pers\"$checked_pers>".mex("personalizzata",$pag).":
 .</label><input type=\"text\" name=\"estensione_pers_txt\" size=\"8\" maxlength=\"10\" value=\"$estensione_pers_txt\" onclick=\"document.getElementById('te_pers').checked='1'\"><br>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_estenstione_pers\" value=\"".mex("Cambia",$pag)."\">
</td></tr></table>
</div></form>";
} # fine if ($tipo_contratto == "txt")
echo "<br>";
} # fine if ($tipo_contratto == "rtf" or $tipo_contratto == "txt")


$lingue = array();
if ($multilingua) {
$num_lingue = 0;
if ($lingua_default != "ita" and (preg_replace("/[a-z]{2,3}/","",$lingua_default) != "" or !@is_file("./includes/lang/$lingua_default/l_n"))) $lingua_default = $lingua_mex;
$lingue[$num_lingue] = $lingua_default;
if ($lingua_default != "ita") {
$lingue['nome'][$num_lingue] = ucfirst(trim(implode("",file("./includes/lang/$lingua_default/l_n"))));
$lingue['nome_cod'][$lingue[$num_lingue]] = $lingue['nome'][$num_lingue];
$num_lingue++;
$lingue[$num_lingue] = "ita";
} # fine else if ($lingua_default != "ita")
$lingue['nome'][$num_lingue] = "Italiano";
$lingue['nome_cod'][$lingue[$num_lingue]] = $lingue['nome'][$num_lingue];
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." and $ini_lingua != ".." and $ini_lingua != $lingua_default) {
$num_lingue++;
$lingue[$num_lingue] = $ini_lingua;
$lingue['nome'][$num_lingue] = ucfirst(trim(implode("",file("./includes/lang/$ini_lingua/l_n"))));
$lingue['nome_cod'][$lingue[$num_lingue]] = $lingue['nome'][$num_lingue];
} # fine if ($file != "." and $file != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$num_lingue++;
} # fine if ($multilingua)
else $num_lingue = 1;


$dati_allegato = array('num' => 0);
if ($tipo_contratto == "eml") {
$oggetto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'oggetto'");
$oggetto = (string) risul_query($oggetto,0,'testo');
echo "<div class=\"linhbox\">";
if ($multilingua) {
$ogg_vett = explode(">",$oggetto);
$oggetto = array();
for ($num1 = 0 ; $num1 < count($ogg_vett) ; $num1++) {
$ln = explode(":",$ogg_vett[$num1]);
$ln = substr($ln[0],4);
$oggetto[$ln] = substr(strstr($ogg_vett[$num1],":"),1);
} # fine for $num1
echo "<table><tr><td>".mex("Oggetto",$pag).":&nbsp;</td><td>";
for ($num_lingua = 0 ; $num_lingua < $num_lingue ; $num_lingua++) {
if ($num_lingua) echo "<tr><td></td><td>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_oggetto\" value=\"1\">
<input type=\"hidden\" name=\"lingua_oggetto\" value=\"".$lingue[$num_lingua]."\">
".$lingue['nome'][$num_lingua];
if (!$num_lingua) echo " (".mex("predefinito",$pag).")";
if (isset($oggetto[$lingue[$num_lingua]])) $ogg_corr = $oggetto[$lingue[$num_lingua]];
else $ogg_corr = "";
echo ": <input type=\"text\" name=\"nuovo_oggetto\" size=\"50\" maxlength=\"60\" value=\"$ogg_corr\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>
</td></tr>";
} # fine for $num_lingua
echo "</table>";
} # fine if ($multilingua)
else {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"cambia_oggetto\" value=\"1\">
".mex("Oggetto",$pag).":
<input type=\"text\" name=\"nuovo_oggetto\" size=\"50\" maxlength=\"60\" value=\"$oggetto\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cambia",$pag)."\">
</div></form>";
} # fine else if ($multilingua)

$opz_eml = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'opzeml'");
$opz_eml = risul_query($opz_eml,0,'testo');
$opz_eml = explode(";",$opz_eml);
if (!$opz_eml[0]) $sel = " selected";
else $sel = "";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
".mex("Formato dell'email",$pag).":
 <select name=\"formato_email\">
<option value=\"\"$sel>".mex("testo semplice",$pag)."</option>";
if ($opz_eml[0] == "html") $sel = " selected";
else $sel = "";
echo "<option value=\"html\"$sel>".mex("html",$pag)."</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_formato_email\" value=\"".mex("Cambia",$pag)."\">
</div></form>";

$allegati = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'allegato'");
$allegati = risul_query($allegati,0,'testo');
$allegato_presente = array();
if ($allegati) {
$allegati = explode(",",$allegati);
$dati_allegato['num'] = (count($allegati) - 2);
for ($num1 = 1 ; $num1 <= $dati_allegato['num'] ; $num1++) {
if ($multilingua) {
$all_vett = explode(">",$allegati[$num1]);
$num_ln = count($all_vett);
} # fine if ($multilingua)
else $num_ln = 1;
for ($num2 = 0 ; $num2 < $num_ln ; $num2++) {
if ($multilingua) $num_all = substr(strstr($all_vett[$num2],":"),1);
else $num_all = $allegati[$num1];
$allegato_presente[$num_all] = 1;
} # fine for $num2
} # fine for $num1
} # fine if ($allegati)
$file_allegati = esegui_query("select * from $tablecontratti where tipo = 'file_all'");
$num_file_allegati = numlin_query($file_allegati);
$opt_allegati = "";
for ($num1 = 0 ; $num1 < $num_file_allegati ; $num1++) {
$num_all = risul_query($file_allegati,$num1,'numero');
if (!isset($allegato_presente[$num_all])) {
$nome_all = explode(",",risul_query($file_allegati,$num1,'testo'));
$opt_allegati .= "<option value=\"$num_all\">".$nome_all[0]."</option>";
} # fine if (!isset($allegato_presente[$num_all]))
} # fine for $num1
if ($allegati) {
for ($num1 = 1 ; $num1 <= $dati_allegato['num'] ; $num1++) {
$lingue_presenti = array();
if ($multilingua) {
$all_vett = explode(">",$allegati[$num1]);
$num_ln = count($all_vett);
} # fine if ($multilingua)
else $num_ln = 1;
echo "<table><tr><td>".mex("Allegato",$pag)." $num1:&nbsp;</td><td>";
for ($num2 = 0 ; $num2 < $num_ln ; $num2++) {
if ($multilingua) {
$ln = explode(":",$all_vett[$num2]);
$ln = substr($ln[0],4);
$lingue_presenti[$ln] = 1;
$num_all = substr(strstr($all_vett[$num2],":"),1);
} # fine if ($multilingua)
else {
$ln = "";
$num_all = $allegati[$num1];
} # fine else if ($multilingua)
$allegato = esegui_query("select * from $tablecontratti where numero = '$num_all' and tipo = 'file_all'");
$allegato = risul_query($allegato,0,'testo');
$allegato = explode(",",$allegato);
if ($num2 > 0) echo "<tr><td></td><td>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"num_elimina_allegato\" value=\"$num_all\">
<b>".$allegato[0]."</b> ";
if ($ln) {
echo "(<em>".$lingue['nome_cod'][$ln]."</em>";
if ($lingue[0] == $ln) echo ", ".mex("predefinito",$pag);
echo ") ";
} # fine if ($ln)
echo "<input class=\"sbutton\" type=\"submit\" name=\"elimina_allegato\" value=\"".mex("Elimina",$pag)."\">
</div></form></td></tr>";
} # fine for $num2
if ($multilingua) {
$opt_lingue_mancanti = "";
for ($num_lingua = 0 ; $num_lingua < $num_lingue ; $num_lingua++) {
if (empty($lingue_presenti[$lingue[$num_lingua]])) $opt_lingue_mancanti .= "<option value=\"".$lingue[$num_lingua]."\">".$lingue['nome'][$num_lingua]."</option>";
} # fine for $num_lingua
if ($opt_lingue_mancanti) {
echo "<tr><td></td><td>
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"50000000\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"num_all_agg\" value=\"$num1\">
<select name=\"ln_upload\">$opt_lingue_mancanti</select>:
<input name=\"file_allegato_upload\" type=\"file\">&nbsp;&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"upload_allegato_mln\" value=\"".mex("Aggiungi",$pag)."\">
</div></form></td></tr>";
if ($opt_allegati) {
echo "<tr><td></td><td>
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"num_all_agg\" value=\"$num1\">
<input type=\"hidden\" name=\"aggiungi_allegato_mln\" value=\"SI\">
<select name=\"ln_upload\">$opt_lingue_mancanti</select>:
<select name=\"num_allegato\">$opt_allegati</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Aggiungi",$pag)."\">
</div></form></td></tr>";
} # fine if ($opt_allegati)
} # fine if ($opt_lingue_mancanti)
} # fine if ($multilingua)
echo "</table>";
} # fine for $num1
} # fine if ($allegati)
if ($dati_allegato['num'] < $num_allegati_max) {
echo "<table cellspacing=\"0\"><tr><td>
".mex("Allegato",$pag).":</td><td>
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"50000000\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
  <input name=\"file_allegato_upload\" type=\"file\">&nbsp;&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"upload_allegato\" value=\"".mex("Aggiungi",$pag)."\">
</div></form></td></tr>";
if ($opt_allegati) {
echo "<tr><td></td><td>
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"aggiungi_allegato\" value=\"SI\">
<select name=\"num_allegato\">
$opt_allegati</select>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Aggiungi",$pag)."\">
</div></form></td></tr>";
} # fine if ($opt_allegati)
echo "</table>";
} # fine if ($dati_allegato['num'] < $num_allegati_max)

if ($opz_eml[1] == "SI") $checked_mittente = " checked";
else $checked_mittente = "";
if ($opz_eml[2]) {
$checked_email = " checked";
$email_bcc = $opz_eml[2];
} # fine if ($opz_eml[2])
else {
$checked_email = "";
$email_bcc = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'dati_struttura' and idutente = '$id_utente'");
$email_bcc = risul_query($email_bcc,0,'valpersonalizza');
$email_bcc = explode("#@&",$email_bcc);
$email_bcc = $email_bcc[2];
} # fine else if ($bcc[1])
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<table cellspacing=0 cellpadding=0 style=\"line-height: 1;\"><tr><td valign=\"top\">".mex("Mandare una copia bcc",$pag).":</td><td>
<label><input type=\"checkbox\" name=\"bcc_mittente\" value=\"SI\"$checked_mittente>".mex("al mittente",$pag)."</label><br>
<label><input type=\"checkbox\" id=\"bcc_ind\" name=\"bcc_indirizzo\" value=\"SI\"$checked_email>".mex("all'indirizzo",$pag)."
 </label><input type=\"text\" name=\"email_bcc\" size=\"50\" maxlength=\"60\" value=\"$email_bcc\" onclick=\"document.getElementById('bcc_ind').checked='1'\"><br>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_bcc\" value=\"".mex("Cambia",$pag)."\">
</td></tr></table></div></form></div><br>";
} # fine ($tipo_contratto == "eml")


if (!$multilingua) echo mex("Modifica il documento",$pag).":<br>";

if ($contr_head) {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" name=\"salva_head\" value=\"".mex("Modifica l'intestazione html",$pag)."\"><br>
<textarea id=\"contr_head\" name=\"n_head\" rows=8 cols=135 style=\"white-space: pre; overflow: auto;\">".htmlspecialchars($contr_head)."</textarea>
</div></form><br>";
} # fine if ($contr_head)


for ($num_lingua = 0 ; $num_lingua < $num_lingue ; $num_lingua++) {

if ($num_lingua > 0) echo "<br><br>";
if ($multilingua) {
$testo_contratto = esegui_query("select * from $tablecontratti where numero = '$num_contratto' and tipo = 'mln_".$lingue[$num_lingua]."'");
if (numlin_query($testo_contratto)) $testo_contratto = risul_query($testo_contratto,0,'testo');
else $testo_contratto = "";
if ($num_lingua) echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"lingua_contr\" value=\"".$lingue[$num_lingua]."\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"lingua_predef\" value=\"SI\">";
echo mex("Modifica il documento",$pag)."";
echo " ".mex("in",$pag)." <b>".$lingue['nome'][$num_lingua]."</b> (";
if (!$num_lingua) echo "".mex("predefinito",$pag)."):<br>";
else echo "<input class=\"smallsbutton\" type=\"submit\" value=\"".mex("fai predefinito",$pag)."\">):</div></form>";
} # fine if ($multilingua)

echo "<table><tr><td style=\"height: 3px;\"></td></tr></table>";
if (!empty($testo_contratto_mod) and (!$multilingua or $lingua_contr == $lingue[$num_lingua])) $testo_contratto = $testo_contratto_mod;
echo "<div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#contr_txtbox".fixset($lingue[$num_lingua])."\" onSubmit=\"agg_pos_curs($num_lingua)\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">";
if ($multilingua) echo "<input type=\"hidden\" name=\"lingua_contr\" value=\"".$lingue[$num_lingua]."\">";
echo "<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<input type=\"hidden\" name=\"pos_curs\" value=\"\" id=\"pos_curs$num_lingua\">
<input type=\"hidden\" name=\"pos_fine_sel\" value=\"\" id=\"pos_fine_sel$num_lingua\">
<table class=\"nomob\" style=\"margin-left: auto; margin-right: auto;\">";
$linea_mod = "<tr><td><a name=\"contr_txtbox".fixset($lingue[$num_lingua])."\"></a>
".mex("Variabili",$pag).":
 <select name=\"var_agg\">";

$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) {
$campi_pers_comm = explode(">",risul_query($campi_pers_comm,0,'valpersonalizza'));
$num_commenti_pers = count($campi_pers_comm);
} # fine if (numlin_query($campi_pers_comm) == 1)
else $num_commenti_pers = 0;
$campi_pers_cliente = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'campi_pers_cliente' and idutente = '$id_utente' ");
if (numlin_query($campi_pers_cliente)) {
$campi_pers_cliente = explode(">",risul_query($campi_pers_cliente,0,'valpersonalizza'));
$num_campi_pers_cliente = count($campi_pers_cliente);
} # fine if (numlin_query($campi_pers_cliente))
else $num_campi_pers_cliente = 0;
include_once("./includes/funzioni_tariffe.php");
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,"v",0,1);
$commento_personalizzato_ = mexv("commento_personalizzato")."_";
$campo_personalizzato_ = mexv("campo_personalizzato")."_";
$num_persone_tipo_ = mexv("num_persone_tipo")."_";
$allegato_ = mexv("allegato");
include("./includes/variabili_contratto.php");
$num_var_predef--;
$num_int_contr = $num_contratto;
while ((string) substr($num_int_contr,0,1) == (string) "0") $num_int_contr = substr($num_int_contr,1);
$num_contr_cond = $num_int_contr;
$contr_importa = esegui_query("select * from $tablecontratti where tipo = 'impor_vc' and numero = '$num_int_contr' ");
if (numlin_query($contr_importa)) $num_contr_cond = risul_query($contr_importa,0,'testo');
$variabili_pers = esegui_query("select * from $tablecontratti where tipo = 'var' or tipo = 'var$num_contr_cond' order by tipo, numero");
$num_variabili_pers = numlin_query($variabili_pers);
for ($num1 = 0 ; $num1 < $num_variabili_pers ; $num1++) {
$var_pers = risul_query($variabili_pers,$num1,'testo');
$num_var_pers = risul_query($variabili_pers,$num1,'numero');
$var_predef[$num_var_predef] = $var_pers;
$num_var_predef++;
} # fine for $num1
$array_pers = esegui_query("select * from $tablecontratti where tipo = 'vett' or tipo = 'vett$num_contr_cond' order by tipo, numero");
$num_array_pers = numlin_query($array_pers);
$option_array = "";
for ($num1 = 0 ; $num1 < $num_array_pers ; $num1++) {
$arr_pers_vett = explode(";",risul_query($array_pers,$num1,'testo'));
$arr_pers = $arr_pers_vett[0];
$var_arr_pers = $arr_pers_vett[1];
$num_arr_pers = risul_query($array_pers,$num1,'numero');
$var_predef[$num_var_predef] = "$arr_pers(".mexv($var_arr_pers).")";
$num_var_predef++;
$option_array .= "<option value=\"a$arr_pers\">".mex("ripetizione array",$pag)." $arr_pers [r4]...[/r4]</option>";
} # fine for $num1

for ($num1 = 0 ; $num1 < $num_var_predef ; $num1++) {
$linea_mod .= "<option value=\"".mexv($var_predef[$num1])."\">".mexv($var_predef[$num1]);
if (substr($var_predef[$num1],-7) == "_ospite") $linea_mod .= " (r2)";
if (substr($var_predef[$num1],-10) == "_costo_agg" or substr($var_predef[$num1],-12) == "_costo_agg_p" or substr($var_predef[$num1],0,28) == "valore_costo_agg_senza_tasse") $linea_mod .= " (r3)";
if ((substr($var_predef[$num1],-10) == "_pagamento" or substr($var_predef[$num1],-12) == "_pagamento_p") and !strstr($var_predef[$num1],"_ultimo_pagamento")) $linea_mod .= " (r5)";
if (substr($var_predef[$num1],-6) == "_unita") $linea_mod .= " (r6)";
if (substr($var_predef[$num1],-18) == "_documento_salvato") $linea_mod .= " (r7)";
$linea_mod .= "</option>";
} # fine for $num1
$linea_mod .= "</select>
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_var\" value=\"".mex("Aggiungi",$pag)."\">
</td><td style=\"width: 30px;\"></td><td>
<input class=\"sbutton\" type=\"submit\" name=\"salva_modifiche\" value=\"".mex("Salva le modifiche",$pag)."\">
</td><td style=\"width: 30px;\"></td><td>".mex("Limiti",$pag)." <select name=\"tipo_rip\">";
if (!$multilingua) $linea_mod .= "<option value=\"1\">".mex("ripetizione prenotazioni",$pag)." [r]...[/r]</option>";
$linea_mod .= "<option value=\"2\">".mex("ripetizione ospiti",$pag)." [r2]...[/r2]</option>
<option value=\"3\">".mex("ripetizione costi aggiuntivi",$pag)." [r3]...[/r3]</option>
$option_array
<option value=\"5\">".mex("ripetizione pagamenti",$pag)." [r5]...[/r5]</option>
<option value=\"6\">".mex("ripetizione unità",$pag)." [r6]...[/r6]</option>
<option value=\"7\">".mex("ripetizione documenti salvati",$pag)." [r7]...[/r7]</option>
<option value=\"8\">".mex("parte sotto condizione",$pag)." [c]...[/c]</option>
</select>
<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_ripetizione\" value=\"".mex("Aggiungi",$pag)."\">
</td></tr>";
if ($tipo_contratto == "rtf" or $tipo_contratto == "txt") $wrap = "wrap=\"off\"";
else $wrap = "style=\"white-space: pre; overflow: auto;\"";
# htmlspecialchars su $testo_contratto necessario perchè altrimenti per esempio &nbsp; diventa uno spazio all'interno della textarea
if (!$mobile_device) $rows = "120";
else $rows = "70";
echo "$linea_mod<tr><td colspan=\"5\" align=\"center\">
<textarea id=\"contr_txta$num_lingua\" name=\"n_contratto\" rows=$rows cols=135 $wrap>".htmlspecialchars($testo_contratto)."</textarea></td></tr>";
$linea_mod = str_replace("<a name=\"contr_txtbox".$lingue[$num_lingua]."\"></a>","",$linea_mod);
$linea_mod = str_replace("<select name=\"var_agg\">","<select name=\"var_agg2\">",$linea_mod);
$linea_mod = str_replace("type=\"submit\" name=\"aggiungi_var\"","type=\"submit\" name=\"aggiungi_var2\"",$linea_mod);
$linea_mod = str_replace("<select name=\"tipo_rip\">","<select name=\"tipo_rip2\">",$linea_mod);
$linea_mod = str_replace("type=\"submit\" name=\"aggiungi_ripetizione\"","type=\"submit\" name=\"aggiungi_ripetizione2\"",$linea_mod);
echo "$linea_mod</table>
</div></form></div><br>";

} # fine for $num_lingua

if ($contr_foot) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"num_contratto\" value=\"$num_contratto\">
<input type=\"hidden\" name=\"cambia_qualcosa\" value=\"SI\">
<textarea id=\"contr_foot\" name=\"n_foot\" rows=4 cols=135 style=\"white-space: pre; overflow: auto;\">".htmlspecialchars($contr_foot)."</textarea>
<input class=\"sbutton\" type=\"submit\" name=\"salva_foot\" value=\"".mex("Modifica la chiusura html",$pag)."\"><br>
</div></form><br>";
} # fine if ($contr_foot)

echo "<script type=\"text/javascript\">
<!--
function resize_contr_txta(numlingue) {
var height = Math.round(document.body.clientHeight - 100);
var width = Math.round(document.body.clientWidth - 60);
if (height < 300) height = 300;
if (width < 300) width = 300;
for (n1 = 0 ; n1 < $num_lingua ; n1++) {
";
if (!$mobile_device) echo "document.getElementById('contr_txta'+n1).style.height = height + 'px';
";
echo "document.getElementById('contr_txta'+n1).style.width = width + 'px';
}
";
if ($contr_head) {
echo "document.getElementById('contr_head').style.width = width + 'px';
document.getElementById('contr_foot').style.width = width + 'px';
";
} # fine if ($contr_head)
echo "}
resize_contr_txta();
window.onresize = new Function(\"resize_contr_txta()\");

function agg_pos_curs(numlingua) {
var pos_curs = 0;
var txtbox = document.getElementById('contr_txta'+numlingua);
if (txtbox.selectionStart) {
pos_curs = txtbox.selectionStart;
var len1 = txtbox.value.substring(0,pos_curs).length;
var len2 = txtbox.value.substring(0,pos_curs).replace(/(\\n|\\r)/g,'').length;
pos_curs = pos_curs + len1 - len2;
if (txtbox.selectionEnd && txtbox.selectionStart != txtbox.selectionEnd) {
var pos_fine_sel = txtbox.selectionEnd;
len1 = txtbox.value.substring(0,pos_fine_sel).length;
len2 = txtbox.value.substring(0,pos_fine_sel).replace(/(\\n|\\r)/g,'').length;
pos_fine_sel = pos_fine_sel + len1 - len2;
document.getElementById('pos_fine_sel'+numlingua).value = pos_fine_sel;
}
}
else if (document.selection) {
txtbox.focus(); 
var sel = document.selection.createRange();
var dup = sel.duplicate();
dup.moveToElementText(txtbox);
sel.text = \"\\001\";
pos_curs = dup.text.indexOf(\"\\001\");
sel.moveStart('character',-1);
sel.text = '';
}
document.getElementById('pos_curs'+numlingua).value = pos_curs;
}
-->
</script>";


echo "<hr style=\"width: 95%\"><br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"./modifica_var_contr.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"contr_cond\" value=\"$num_int_contr\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Variabili personalizzate e condizioni del documento",$pag)." $num_contratto\">
</div></form><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"personalizza.php#contratti\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form><br></div>";


} # fine if (!isset($mostra_form_iniziale) or $mostra_form_iniziale != "NO")




if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($priv_mod_doc == "s")
} # fine if ($anno_utente_attivato == "SI" and $priv_mod_doc == "s" and...
} # fine if ($id_utente)



?>
