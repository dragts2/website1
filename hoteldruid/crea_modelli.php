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

$pag = "crea_modelli.php";
$titolo = "HotelDruid: Crea Pagine Web";
$base_js = 1;

$var_pag = array();
$var_pag[0] = 'fonte_dati_conn';
$var_pag[1] = 'T_PHPR_DB_TYPE';
$var_pag[2] = 'T_PHPR_DB_NAME';
$var_pag[3] = 'T_PHPR_DB_HOST';
$var_pag[4] = 'T_PHPR_DB_PORT';
$var_pag[5] = 'T_PHPR_DB_USER';
$var_pag[6] = 'T_PHPR_DB_PASS';
$var_pag[7] = 'T_PHPR_LOAD_EXT';
$var_pag[8] = 'T_PHPR_TAB_PRE';
$var_pag[9] = 'anno_modello';
$var_pag[10] = 'lingua_modello';
$var_pag[11] = 'id_transazione';
$var_pag[12] = 'crea_modello';
$var_pag[13] = 'perc_cart_mod_sel';
$var_pag[14] = 'num_periodi_date';
$var_pag[15] = 'nome_form_modello_passa';
$var_pag[16] = 'estendi_ultima_data';
$var_pag[17] = 'sett_no_prenota';
$var_pag[18] = 'm_stile_soldi';
$var_pag[19] = 'm_stile_data';
$var_pag[20] = 'm_valuta_sing';
$var_pag[21] = 'm_valuta_plur';
$var_pag[22] = 'anteponi_nome_valuta';
$var_pag[23] = 'utente_lis';
$var_pag[24] = 'aggiungidatemenu';
$var_pag[25] = 'eliminadatemenu';
$var_pag[26] = 'num_tariffe';
$var_pag[27] = 'chiedi_num_app_tipologia';
$var_pag[28] = 'max_num_app_tipologia';
$var_pag[29] = 'parola_appartamenti';
$var_pag[30] = 'parola_appartamento';
$var_pag[31] = 'aggiungi_tipologie';
$var_pag[32] = 'max_num_tipologie';
$var_pag[33] = 'cerca_app_vicini';
$var_pag[34] = 'chiedi_num_persone';
$var_pag[35] = 'max_num_persone';
$var_pag[36] = 'costo_aggiungi_letti';
$var_pag[37] = 'max_num_aggiungi_letti';
$var_pag[38] = 'mostra_costi_aggiuntivi';
$var_pag[39] = 'num_colonne_costi_agg';
$var_pag[40] = 'aggiungi_costi_fissi';
$var_pag[41] = 'num_codici_promo';
$var_pag[42] = 'assegna_con_regola2';
$var_pag[43] = 'num_motivazioni';
$var_pag[44] = 'mostra_frase_alternativa_regola1';
$var_pag[45] = 'frase_alternativa_regola1';
$var_pag[46] = 'mostra_caparra';
$var_pag[47] = 'mostra_giorni_pieni';
$var_pag[48] = 'mostra_richiesta_via_mail';
$var_pag[49] = 'utente_mess';
$var_pag[50] = 'orig_prenota';
$var_pag[51] = 'ind_email';
$var_pag[52] = 'manda_copia_richiesta_email';
$var_pag[53] = 'chiedi_cognome';
$var_pag[54] = 'chiedi_nome';
$var_pag[55] = 'chiedi_email';
$var_pag[56] = 'chiedi_sesso';
$var_pag[57] = 'chiedi_datanascita';
$var_pag[58] = 'chiedi_documento';
$var_pag[59] = 'chiedi_nazione';
$var_pag[60] = 'chiedi_regione';
$var_pag[61] = 'chiedi_citta';
$var_pag[62] = 'chiedi_via';
$var_pag[63] = 'chiedi_numcivico';
$var_pag[64] = 'chiedi_cap';
$var_pag[65] = 'chiedi_telefono';
$var_pag[66] = 'chiedi_telefono2';
$var_pag[67] = 'chiedi_telefono3';
$var_pag[68] = 'chiedi_fax';
$var_pag[69] = 'chiedi_email2';
$var_pag[70] = 'chiedi_email_cert';
$var_pag[71] = 'chiedi_codfiscale';
$var_pag[72] = 'chiedi_partitaiva';
$var_pag[73] = 'chiedi_commento';
$var_pag[74] = 'chiedi_oracheckin';
$var_pag[75] = 'chiedi_valutapagamento';
$var_pag[76] = 'chiedi_metodopagamento';
$var_pag[77] = 'num_metodi_pagamento';
$var_pag[78] = 'num_campi_pers';
$var_pag[79] = 'num_campi_doc_cond';
$var_pag[80] = 'mostra_bottone_paypal';
$var_pag[81] = 'nome_modello_paypal';
$var_pag[82] = 'mostra_quadro_disp';
$var_pag[83] = 'raggr_quadro_disp';
$var_pag[84] = 'colore_sfondo_quadro_disponibilita';
$var_pag[85] = 'colore_inizio_settimana_quadro_disponibilita';
$var_pag[86] = 'colore_libero_quadro_disponibilita';
$var_pag[87] = 'colore_occupato_quadro_disponibilita';
$var_pag[88] = 'apertura_font_quadro_disponibilita';
$var_pag[89] = 'chiusura_font_quadro_disponibilita';
$var_pag[90] = 'mostra_numero_liberi_quadro_disponibilita';
$var_pag[91] = 'allinea_disponibilita_con_arrivo';
$var_pag[92] = 'mostra_calendario_scelta_date';
$var_pag[93] = 'stile_riquadro_calendario';
$var_pag[94] = 'stile_tabella_calendario';
$var_pag[95] = 'stile_bottoni_calendario';
$var_pag[96] = 'stile_bottone_apertura_calendario';
$var_pag[97] = 'spostamento_orizzontale_calendario';
$var_pag[98] = 'colore_data_attiva_calendario';
$var_pag[99] = 'colore_data_selezionata_calendario';
$var_pag[100] = 'apertura_tag_font';
$var_pag[101] = 'chiusura_tag_font';
$var_pag[102] = 'apertura_tag_font_rosse';
$var_pag[103] = 'chiusura_tag_font_rosse';
$var_pag[104] = 'stile_tabella_prenotazione';
$var_pag[105] = 'file_css_frame';
$var_pag[106] = 'apri_nuova_finestra_da_frame';
$var_pag[107] = 'larghezza_finestra_da_frame';
$var_pag[108] = 'altezza_finestra_da_frame';
$var_pag[109] = 'tema_modello';
$var_pag[110] = 'cambia_frasi';
$var_pag[111] = 'n_col_tema';
$var_pag[112] = 'n_val_tema';
$var_pag[113] = 'modello_esistente';
$var_pag[114] = 'modello_disponibilita';
$var_pag[115] = 'templ_data_dir';
$var_pag[116] = 'prima_parte_html';
$var_pag[117] = 'ultima_parte_html';
$var_pag[118] = 'cancella_modelli';
$var_pag[119] = 'perc_mod_elimina';
$var_pag[120] = 'continua';
$var_pag[121] = 'file_js_frame';
$var_pag[122] = 'n_met_paga_passa';
$var_pag[123] = 'MAX_FILE_SIZE';
$var_pag[124] = 'aggiungicampipers';
$var_pag[125] = 'eliminacampipers';
$var_pag[126] = 'form_modello_disponibilita';
$var_pag[127] = 'form_passa';
$var_pag[128] = 'form_ricaricata';
$var_pag[129] = 'lista_idc_passa';
$var_pag[130] = 'importa_modelli';
$var_pag[131] = 'cartella_da';
$var_pag[132] = 'cartella_a';
$n_var_pag = 133;
$num2 = 0;
if (isset($_POST['num_periodi_date'])) $num2 = (int) $_POST['num_periodi_date'];
elseif (isset($_GET['num_periodi_date'])) $num2 = (int) $_GET['num_periodi_date'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "inizioperiodo$num1";
$var_pag[$n_var_pag++] = "fineperiodo$num1";
$var_pag[$n_var_pag++] = "intervalloperiodo$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['num_tariffe'])) $num2 = (int) $_POST['num_tariffe'];
elseif (isset($_GET['num_tariffe'])) $num2 = (int) $_GET['num_tariffe'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "tariffa$num1";
$var_pag[$n_var_pag++] = "nome_tariffa_imposto$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['num_codici_promo'])) $num2 = (int) $_POST['num_codici_promo'];
elseif (isset($_GET['num_codici_promo'])) $num2 = (int) $_GET['num_codici_promo'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "codice_promo$num1";
$var_pag[$n_var_pag++] = "tipo_codice_promo$num1";
$var_pag[$n_var_pag++] = "costo_codice_promo$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['num_motivazioni'])) $num2 = (int) $_POST['num_motivazioni'];
elseif (isset($_GET['num_motivazioni'])) $num2 = (int) $_GET['num_motivazioni'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) $var_pag[$n_var_pag++] = "var_mot_$num1";
$num2 = 0;
if (isset($_POST['n_met_paga_passa'])) $num2 = (int) $_POST['n_met_paga_passa'];
elseif (isset($_GET['n_met_paga_passa'])) $num2 = (int) $_GET['n_met_paga_passa'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "var_met_paga_$num1";
$var_pag[$n_var_pag++] = "nome_met_paga_imposto_$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['num_campi_pers'])) $num2 = (int) $_POST['num_campi_pers'];
elseif (isset($_GET['num_campi_pers'])) $num2 = (int) $_GET['num_campi_pers'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "campo_pers$num1";
$var_pag[$n_var_pag++] = "chiedi_campo_pers$num1";
$var_pag[$n_var_pag++] = "ins_campo_pers$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['num_campi_doc_cond'])) $num2 = (int) $_POST['num_campi_doc_cond'];
elseif (isset($_GET['num_campi_doc_cond'])) $num2 = (int) $_GET['num_campi_doc_cond'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "num_doc_cond$num1";
$var_pag[$n_var_pag++] = "chiedi_num_doc_cond$num1";
} # fine for $num1
$num2 = 0;
if (isset($_POST['n_col_tema'])) $num2 = (int) $_POST['n_col_tema'];
elseif (isset($_GET['n_col_tema'])) $num2 = (int) $_GET['n_col_tema'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) $var_pag[$n_var_pag++] = "colore_tema_$num1";
$num2 = 0;
if (isset($_POST['n_val_tema'])) $num2 = (int) $_POST['n_val_tema'];
elseif (isset($_GET['n_val_tema'])) $num2 = (int) $_GET['n_val_tema'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) $var_pag[$n_var_pag++] = "valore_tema_$num1";
$num2 = 0;
if (isset($_POST['lista_idc_passa'])) $num2 = $_POST['lista_idc_passa'];
elseif (isset($_GET['lista_idc_passa'])) $num2 = $_GET['lista_idc_passa'];
if ($num2) {
$num2 = explode(",",$num2);
$num3 = count($num2);
for ($num1 = 1 ; $num1 < $num3 ; $num1++) {
$num4 = (int) $num2[$num1];
$var_pag[$n_var_pag++] = "attiva_costo$num4";
$var_pag[$n_var_pag++] = "nome_costo_imposto$num4";
$var_pag[$n_var_pag++] = "nome_cat_imp$num4";
} # fine for $num1
} # fine if ($num2)
$num1 = "";
if (isset($_POST['modello_disponibilita'])) $num1 = $_POST['modello_disponibilita'];
elseif (isset($_GET['modello_disponibilita'])) $num1 = $_GET['modello_disponibilita'];
if ($num1 == "SI") {
$num2 = "";
if (isset($_POST['cambia_frasi'])) $num2 = $_POST['cambia_frasi'];
elseif (isset($_GET['cambia_frasi'])) $num2 = $_GET['cambia_frasi'];
$num3 = "";
if (isset($_POST['modello_esistente'])) $num3 = $_POST['modello_esistente'];
elseif (isset($_GET['modello_esistente'])) $num3 = $_GET['modello_esistente'];
if ($num2 or $num3 == "SI") {
$parola_La = "";
$parola_settimana = "";
$lettera_a = "";
$parola_settimane = "";
$parola_le = "";
include("includes/templates/frasi_mod_disp.php");
for ($num2 = 0 ; $num2 < $num_frasi ; $num2++) $var_pag[$n_var_pag++] = $fr_frase[$num2];
} # fine if ($num2 or $num3 == "SI")
} # fine if ($num1 == "SI")
else {
$num2 = 0;
if (isset($_POST['form_passa'])) $num2 = (int) $_POST['form_passa'];
elseif (isset($_GET['form_passa'])) $num2 = (int) $_GET['form_passa'];
if ($num2) {
$num1 = opendir("./includes/templates/");
while ($num2 = readdir($num1)) {
if ($num2 != "." and $num2 != ".." and @is_dir("./includes/templates/$num2")) {
include("./includes/templates/$num2/name.php");
$var_pag[$n_var_pag++] = "form_$template_name";
} # fine if ($num2 != "." and $num2 != ".." and...
} # fine while ($file = readdir($num1))
closedir($num1);
} # fine if ($num2)
$num1 = "";
if (isset($_POST['templ_data_dir'])) $num1 = $_POST['templ_data_dir'];
elseif (isset($_GET['templ_data_dir'])) $num1 = $_GET['templ_data_dir'];
if ($num1 and strlen($num1) < 4 and preg_match("/[a-z]/",$num1) and @is_file("includes/templates/$num1/var.php")) include("includes/templates/$num1/var.php");
} # fine else if ($num1 == "SI")
if (@is_array($_POST) and 0) {
reset($_POST);
$num2 = count($_POST);
for ($num1 = 0 ; $num1 < $num2; $num1++) {
$var_POST = key($_POST);
if (!isset($$var_POST)) {
if (substr($var_POST,0,12) == "attiva_costo" or substr($var_POST,0,18) == "nome_costo_imposto" or substr($var_POST,0,12) == "nome_cat_imp") $var_pag[$n_var_pag++] = $var_POST;
} # fine if (!isset($$var_POST))
next($_POST);
} # fine for $num1
} # fine if (@is_array($_POST))

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
include("./includes/funzioni_costi_agg.php");
include("./includes/funzioni_web.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);

if ($id_utente != 1) {
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
$priv_crea_interconnessioni = substr($priv_mod_pers,3,1);
$priv_crea_pagineweb = substr($priv_mod_pers,8,1);
$regole1_consentite = risul_query($privilegi_annuali_utente,0,'regole1_consentite');
$attiva_regole1_consentite = substr($regole1_consentite,0,1);
$applica_regole1 = substr($regole1_consentite,1,1);
if ($attiva_regole1_consentite != "n" or $applica_regole1 == "n") $regole1_consentite = explode("#@^",substr($regole1_consentite,3));
$tariffe_consentite = risul_query($privilegi_annuali_utente,0,'tariffe_consentite');
$attiva_tariffe_consentite = substr($tariffe_consentite,0,1);
if ($attiva_tariffe_consentite == "s") {
$tariffe_consentite = explode(",",substr($tariffe_consentite,2));
unset($tariffe_consentite_vett);
for ($num1 = 0 ; $num1 < count($tariffe_consentite) ; $num1++) if ($tariffe_consentite[$num1]) $tariffe_consentite_vett[$tariffe_consentite[$num1]] = "SI";
} # fine if ($attiva_tariffe_consentite == "s")
$costi_agg_consentiti = risul_query($privilegi_annuali_utente,0,'costi_agg_consentiti');
$attiva_costi_agg_consentiti = substr($costi_agg_consentiti,0,1);
if ($attiva_costi_agg_consentiti == "s") {
$costi_agg_consentiti = explode(",",substr($costi_agg_consentiti,2));
unset($costi_agg_consentiti_vett);
for ($num1 = 0 ; $num1 < count($costi_agg_consentiti) ; $num1++) if ($costi_agg_consentiti[$num1]) $costi_agg_consentiti_vett[$costi_agg_consentiti[$num1]] = "SI";
} # fine if ($attiva_costi_agg_consentiti == "s")
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",$contratti_consentiti);
$contratti_consentiti_vett = array();
for ($num1 = 1 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
} # fine if ($id_utente != )
else {
$anno_utente_attivato = "SI";
$priv_crea_interconnessioni = "s";
$priv_crea_pagineweb = "s";
$attiva_regole1_consentite = "n";
$attiva_tariffe_consentite = "n";
$attiva_costi_agg_consentiti = "n";
$attiva_contratti_consentiti = "n";
} # fine else if ($id_utente != 1)


if (($priv_crea_interconnessioni == "s" or $priv_crea_pagineweb == "s") and $anno_utente_attivato == "SI") {


$titolo = "HotelDruid: ".mex("Crea Pagine Web",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$lingua_orig = $lingua_mex;
if ($id_utente != 1) {
include(C_DATI_PATH."/lingua.php");
$lingua_mex_1 = $lingua[1];
} # fine if ($id_utente != 1)
else $lingua_mex_1 = $lingua_mex;
if (!isset($perc_cart_mod_sel)) $perc_cart_mod_sel = "";
$mostra_form_creazione = "SI";
$pag_orig = "";

include("./includes/templates/funzioni_modelli.php");

if (!isset($lingua_modello)) $lingua_modello = "";
if (strlen($lingua_modello) > 3 or (!@is_dir("./includes/lang/".$lingua_modello) and $lingua_modello != "ita") or str_replace(".","",$lingua_modello) != $lingua_modello) $lingua_modello = $lingua_mex;


if (!empty($aggiungidatemenu) or !empty($eliminadatemenu)) {
unset($crea_modello);
$$nome_form_modello_passa = "SI";
if (!empty($aggiungidatemenu)) $num_periodi_date++;
if (!empty($eliminadatemenu)) $num_periodi_date--;
if (@get_magic_quotes_gpc()) {
$stile_riquadro_calendario = stripslashes($stile_riquadro_calendario);
$stile_tabella_calendario = stripslashes($stile_tabella_calendario);
$stile_bottoni_calendario = stripslashes($stile_bottoni_calendario);
$stile_bottone_apertura_calendario = stripslashes($stile_bottone_apertura_calendario);
$apertura_tag_font = stripslashes($apertura_tag_font);
$chiusura_tag_font = stripslashes($chiusura_tag_font);
$apertura_tag_font_rosse = stripslashes($apertura_tag_font_rosse);
$chiusura_tag_font_rosse = stripslashes($chiusura_tag_font_rosse);
$apertura_font_quadro_disponibilita = stripslashes($apertura_font_quadro_disponibilita);
$chiusura_font_quadro_disponibilita = stripslashes($chiusura_font_quadro_disponibilita);
$prima_parte_html = stripslashes($prima_parte_html);
$ultima_parte_html = stripslashes($ultima_parte_html);
} # fine if (@get_magic_quotes_gpc())
} # fine if (!empty($aggiungidatemenu) or !empty($eliminadatemenu))

if (!empty($eliminacampipers) or !empty($aggiungicampipers) or !empty($eliminacampicond) or !empty($aggiungicampicond) or !empty($eliminacodpromo) or !empty($aggiungicodpromo) or !empty($eliminacampickin) or !empty($aggiungicampickin)) {
unset($crea_modello);
$$nome_form_modello_passa = "SI";
if (!empty($aggiungicampipers)) $num_campi_pers++;
if (!empty($eliminacampipers)) $num_campi_pers--;
if (!empty($aggiungicampicond)) $num_campi_doc_cond++;
if (!empty($eliminacampicond)) $num_campi_doc_cond--;
if (!empty($aggiungicodpromo)) $num_codici_promo++;
if (!empty($eliminacodpromo)) $num_codici_promo--;
if (!empty($eliminacampickin)) $num_campi_doc_checkin--;
if (!empty($aggiungicampickin)) $num_campi_doc_checkin++;
if (@get_magic_quotes_gpc()) {
$stile_riquadro_calendario = stripslashes($stile_riquadro_calendario);
$stile_tabella_calendario = stripslashes($stile_tabella_calendario);
$stile_bottoni_calendario = stripslashes($stile_bottoni_calendario);
$stile_bottone_apertura_calendario = stripslashes($stile_bottone_apertura_calendario);
$apertura_tag_font = stripslashes($apertura_tag_font);
$chiusura_tag_font = stripslashes($chiusura_tag_font);
$apertura_tag_font_rosse = stripslashes($apertura_tag_font_rosse);
$chiusura_tag_font_rosse = stripslashes($chiusura_tag_font_rosse);
$apertura_font_quadro_disponibilita = stripslashes($apertura_font_quadro_disponibilita);
$chiusura_font_quadro_disponibilita = stripslashes($chiusura_font_quadro_disponibilita);
$prima_parte_html = stripslashes($prima_parte_html);
$ultima_parte_html = stripslashes($ultima_parte_html);
} # fine if (@get_magic_quotes_gpc())
} # fine if (!empty($eliminacampipers) or !empty($aggiungicampipers) or...




if (!empty($crea_modello)) {
$mostra_form_creazione = "NO";
$lingua_mex = $lingua_mex_1;

if (defined('C_BACKUP_E_MODELLI_CON_NUOVI_DATI') and C_BACKUP_E_MODELLI_CON_NUOVI_DATI == "NO") $fonte_dati_conn = "attuali";
if ($fonte_dati_conn == "attuali") {
$M_PHPR_DB_TYPE = $PHPR_DB_TYPE;
$M_PHPR_DB_NAME = $PHPR_DB_NAME;
$M_PHPR_DB_HOST = $PHPR_DB_HOST;
$M_PHPR_DB_PORT = $PHPR_DB_PORT;
$M_PHPR_DB_USER = $PHPR_DB_USER;
$M_PHPR_DB_PASS = $PHPR_DB_PASS;
$M_PHPR_LOAD_EXT = $PHPR_LOAD_EXT;
$M_PHPR_TAB_PRE = $PHPR_TAB_PRE;
} # fine if ($fonte_dati_conn == "attuali")
if ($fonte_dati_conn == "nuovi") {
if ($T_PHPR_DB_TYPE != "mysql" and $T_PHPR_DB_TYPE != "postgresql" and $T_PHPR_DB_TYPE != "sqlite") $T_PHPR_DB_TYPE = "sqlite";
$M_PHPR_DB_TYPE = $T_PHPR_DB_TYPE;
$M_PHPR_DB_NAME = $T_PHPR_DB_NAME;
$M_PHPR_DB_HOST = $T_PHPR_DB_HOST;
$M_PHPR_DB_PORT = $T_PHPR_DB_PORT;
$M_PHPR_DB_USER = $T_PHPR_DB_USER;
$M_PHPR_DB_PASS = $T_PHPR_DB_PASS;
$M_PHPR_LOAD_EXT = $T_PHPR_LOAD_EXT;
$M_PHPR_TAB_PRE = $T_PHPR_TAB_PRE;
} # fine if ($fonte_dati_conn == "attuali")



if (!empty($modello_disponibilita)) {

if ($priv_crea_pagineweb == "s") {
include("./includes/templates/frasi_mod_disp.php");
include("./includes/templates/funzioni_mod_disp.php");
crea_modello_disponibilita($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"NO",$fr_frase,$frase,$num_frasi,$tipo_periodi,$lingua_orig);
} # fine if ($priv_crea_pagineweb == "s")

} # fine if (!empty($modello_disponibilita))


else {
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($$template_name) and isset($_POST[$template_name])) $$template_name = $_POST[$template_name];
if (!isset($$template_name) and isset($_GET[$template_name])) $$template_name = $_GET[$template_name];
if (!empty($$template_name)) {
$mostra_form_creazione = "NO";
if (((!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") and $priv_crea_pagineweb == "s") or (isset($template_name_show['tpl_type']) and $template_name_show['tpl_type'] == "interconnection" and $priv_crea_interconnessioni == "s")) {
include("./includes/templates/$modello_ext/phrases.php");
include("./includes/templates/$modello_ext/functions.php");
$funz_crea_modello = "crea_modello_".$modello_ext;
$funz_crea_modello($percorso_cartella_modello,$anno_modello,$PHPR_TAB_PRE,$pag,$lingua_modello,"NO",$fr_frase,$frase,$num_frasi,$tipo_periodi,$lingua_orig);
} # fine if (((!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") and...
break;
} # fine if (!empty($$template_name))
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
} # fine else if (!empty($modello_disponibilita))

$lingua_mex = $lingua_orig;
if (!empty($origine)) $azione = htmlspecialchars($origine);
else $azione = $pag;
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";

} # fine if (!empty($crea_modello))




if ($priv_crea_pagineweb == "s" and $mostra_form_creazione != "NO") {


if (!isset($fonte_dati_conn) or $fonte_dati_conn != "nuovi") $fonte_dati_conn = "attuali";
if (controlla_anno($anno_modello) != "SI" or !@is_file(C_DATI_PATH."/selectperiodi$anno_modello.1.php")) $anno_modello = $anno;



if (!empty($form_modello_disponibilita)) {
$modello_ext = "ava";
$mostra_form_creazione = "NO";
include("./includes/templates/frasi_mod_disp.php");


esegui_query("delete from $tablepersonalizza where idpersonalizza = 'ultime_sel_crea_modelli' and idutente = '$id_utente'");
esegui_query("insert into $tablepersonalizza (idpersonalizza,valpersonalizza,idutente) values ('ultime_sel_crea_modelli','".aggslashdb($anno_modello).";;".aggslashdb($lingua_modello).";;".aggslashdb($perc_cart_mod_sel)."','$id_utente') ");

# Prendo i dati dal file se già esistente
$nome_file = mex2("mdl_disponibilita",$pag,$lingua_modello).".php";
$modello_esistente = "NO";
$lingua_mod_esist = $lingua_mex_1;
$id_transazione = "";
if (@is_file("$percorso_cartella_modello/$nome_file") and (!defined('C_RESTRIZIONI_DEMO_ADMIN') or C_RESTRIZIONI_DEMO_ADMIN != "SI")) {
$modello_esistente = "SI";
$lingua_mex = $lingua_mex_1;
include("./includes/templates/funzioni_mod_disp.php");
recupera_var_modello_disponibilita($nome_file,$percorso_cartella_modello,$pag,$fr_frase,$frase,$num_frasi,$var_mod,$num_var_mod,$tipo_periodi,"NO",$anno_modello,$lingua_modello,$PHPR_TAB_PRE);
$lingua_mex = $lingua_orig;

$tabelle_lock = array($tableversioni,$tabletransazioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$id_transazione = crea_id_sessione("",$tableversioni,8);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("delete from $tabletransazioni where spostamenti = '$modello_ext' and tipo_transazione = 'cpweb' ");
$dati_tr1 = aggslashdb($utente_liste);
$dati_tr2 = aggslashdb(serialize($tariffe_mostra));
$dati_tr3 = aggslashdb(serialize($costi_aggiuntivi_mostra));
$dati_tr4 = aggslashdb(serialize($considera_motivazioni_regola1));
$dati_tr5 = aggslashdb($origine_prenotazione);
$dati_tr6 = aggslashdb(serialize($metodi_pagamento_da_chiedere));
$dati_tr7 = aggslashdb(serialize($campi_form_doc_condizioni));
$dati_tr9 = aggslashdb($costo_aggiungi_letti);
$dati_tr10 = aggslashdb(serialize($costi_campi_codici_promo));
$dati_tr11 = aggslashdb($utente_messaggio);
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,anno,spostamenti,dati_transazione1,dati_transazione2,dati_transazione3,dati_transazione4,dati_transazione5,dati_transazione6,dati_transazione7,dati_transazione9,dati_transazione10,dati_transazione11,ultimo_accesso) 
values ('$id_transazione','$id_sessione','cpweb','$anno','$modello_ext','$dati_tr1','$dati_tr2','$dati_tr3','$dati_tr4','$dati_tr5','$dati_tr6','$dati_tr7','$dati_tr9','$dati_tr10','$dati_tr11','$ultimo_accesso')");
unlock_tabelle($tabelle_lock);
} # fine if (@is_file("$percorso_cartella_modello/$nome_file") and (!defined('C_RESTRIZIONI_DEMO_ADMIN') or C_RESTRIZIONI_DEMO_ADMIN != "SI"))
$SI = mex2("SI",$pag,$lingua_mod_esist);
$NO = mex2("NO",$pag,$lingua_mod_esist);


echo "<form id=\"fcrmod\" accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\" enctype=\"multipart/form-data\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_transazione\" value=\"$id_transazione\">
<input type=\"hidden\" name=\"crea_modello\" value=\"SI\">
<input type=\"hidden\" name=\"fonte_dati_conn\" value=\"$fonte_dati_conn\">
<input type=\"hidden\" name=\"T_PHPR_DB_TYPE\" value=\"".htmlspecialchars($T_PHPR_DB_TYPE)."\">
<input type=\"hidden\" name=\"T_PHPR_DB_NAME\" value=\"".htmlspecialchars($T_PHPR_DB_NAME)."\">
<input type=\"hidden\" name=\"T_PHPR_DB_HOST\" value=\"".htmlspecialchars($T_PHPR_DB_HOST)."\">
<input type=\"hidden\" name=\"T_PHPR_DB_PORT\" value=\"".htmlspecialchars($T_PHPR_DB_PORT)."\">
<input type=\"hidden\" name=\"T_PHPR_DB_USER\" value=\"".htmlspecialchars($T_PHPR_DB_USER)."\">
<input type=\"hidden\" name=\"T_PHPR_DB_PASS\" value=\"".htmlspecialchars($T_PHPR_DB_PASS)."\">
<input type=\"hidden\" name=\"T_PHPR_LOAD_EXT\" value=\"".htmlspecialchars($T_PHPR_LOAD_EXT)."\">
<input type=\"hidden\" name=\"T_PHPR_TAB_PRE\" value=\"".htmlspecialchars($T_PHPR_TAB_PRE)."\">
<input type=\"hidden\" name=\"anno_modello\" value=\"$anno_modello\">
<input type=\"hidden\" name=\"lingua_modello\" value=\"$lingua_modello\">
<input type=\"hidden\" name=\"perc_cart_mod_sel\" value=\"".htmlspecialchars($perc_cart_mod_sel)."\">

<div style=\"height: 4px;\"></div>
<h5 id=\"h_chav\"><span>".mex("Pagina per controllare la disponibilità",$pag)."</span></h5><br><br>
<table><tr><td valign=\"top\">
".mex("Date nei menù a tendina",$pag).":</td><td>";
if (empty($num_periodi_date) or controlla_num_pos($num_periodi_date) == "NO") $num_periodi_date = 1;
#$numero_date_menu = fixset($n_dates_menu);
$numero_data = 0;
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
echo mex("dal",$pag)." ";
# variabili ausiliari per possibile bug php 5.3 su windows
$iniper = fixset(${"inizioperiodo".$num1});
$fineper = fixset(${"fineperiodo".$num1});
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno_modello.1.php","inizioperiodo$num1",$iniper,"","",$id_utente,$tema);
echo " ".mex("al",$pag)." ";
mostra_menu_date(C_DATI_PATH."/selectperiodi$anno_modello.1.php","fineperiodo$num1",$fineper,"","",$id_utente,$tema);
if (empty(${"intervalloperiodo".$num1})) ${"intervalloperiodo".$num1} = 1;
echo ",&nbsp;".str_replace(" ","&nbsp;",mex("$parola_settimane di intervallo",$pag)).":&nbsp;
<input type=\"text\" name=\"intervalloperiodo$num1\" value=\"".htmlspecialchars(${"intervalloperiodo".$num1})."\" size=\"2\" maxlength=\"2\"><br>";
} # fine for $num1
if (empty($estendi_ultima_data) or strtoupper($estendi_ultima_data) == $SI or $estendi_ultima_data == "SI") { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
echo "</td><td style=\"width: 20px;\"></td><td valign=\"bottom\">";
if ($num_periodi_date > 1) echo "<input class=\"sbutton\" type=\"submit\" name=\"eliminadatemenu\" value=\"".mex("-",$pag)."\">&nbsp;";
echo "<input class=\"sbutton\" type=\"submit\" name=\"aggiungidatemenu\" value=\"".mex("+",$pag)."\">
<input type=\"hidden\" name=\"num_periodi_date\" value=\"$num_periodi_date\">
<input type=\"hidden\" name=\"nome_form_modello_passa\" value=\"form_modello_disponibilita\">
</td></tr></table>
".mex("Estendere l'ultima data fino a quella massima disponibile nel database?",$pag)."
<select name=\"estendi_ultima_data\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>";

if (isset($periodi_no_richieste) and (string) $periodi_no_richieste != "") $val = $periodi_no_richieste;
else $val = 0;
echo "".mex("Accetta solo richieste che cominciano almeno dopo",$pag)."
<input type=\"text\" name=\"sett_no_prenota\" size=\"3\" value=\"$val\">
".mex("$parola_settimane",$pag).".<br><br>";

if (empty($stile_soldi)) {
$stile_soldi = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'stile_soldi' and idutente = '$id_utente'");
$stile_soldi = risul_query($stile_soldi,0,'valpersonalizza');
} # fine if (empty($stile_soldi))
else {
if ($stile_soldi == mex("usa",$pag)) $stile_soldi = "usa";
else $stile_soldi = "europa";
} # fine else if (empty($stile_soldi))
$check_soldi_eu = "";
$check_soldi_usa = "";
if ($stile_soldi == "europa") $check_soldi_eu = " checked";
if ($stile_soldi == "usa") $check_soldi_usa = " checked";
echo "<table border=0 cellspacing=0 cellpadding=0><tr>
<td align=\"center\">".mex("Formato di visualizzazione dei soldi",$pag).":</td>
<td align=\"left\">
<label><input type=\"radio\" name=\"m_stile_soldi\" value=\"europa\"$check_soldi_eu>1.050.000,32</label><br>
<label><input type=\"radio\" name=\"m_stile_soldi\" value=\"usa\"$check_soldi_usa>1,050,000.32</label>
</td><td style=\"width: 50px;\"></td>";

if (empty($stile_data)) {
$stile_data = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'stile_data' and idutente = '$id_utente'");
$stile_data = risul_query($stile_data,0,'valpersonalizza');
} # fine if (empty($stile_data))
else {
if ($stile_data == mex("usa",$pag)) $stile_data = "usa";
else $stile_data = "europa";
} # fine else if (empty($stile_data))
$check_data_eu = "";
$check_data_usa = "";
if ($stile_data == "europa") $check_data_eu = " checked";
if ($stile_data == "usa") $check_data_usa = " checked";
echo "<td align=\"center\">".mex("Formato di visualizzazione delle date",$pag).":</td>
<td align=\"left\">
<label><input type=\"radio\" name=\"m_stile_data\" value=\"europa\"$check_data_eu>27-08-2002</label><br>
<label><input type=\"radio\" name=\"m_stile_data\" value=\"usa\"$check_data_usa>08-27-2002</label>
</td></tr><tr><td style=\"height: 2px;\" colspan=5></td></tr>";

if (!empty($fr_Valuta_sing)) $val_s = $fr_Valuta_sing;
else $val_s = $Euro;
if (!empty($fr_Valuta_plur)) $val_p = $fr_Valuta_plur;
else $val_p = $Euro;
if (empty($anteponi_nome_valuta) or strtoupper($anteponi_nome_valuta) != $SI) { $sel_NO = " selected"; $sel_SI = ""; }
else { $sel_SI = " selected"; $sel_NO = ""; }
echo "<tr><td colspan=2>
".mex("Nome della valuta al singolare",$pag).": <input type=\"text\" name=\"m_valuta_sing\" size=\"8\" value=\"$val_s\">
</td><td style=\"width: 50px;\"></td><td colspan=2>
".mex("Nome della valuta al plurale",$pag).": <input type=\"text\" name=\"m_valuta_plur\" size=\"8\" value=\"$val_p\"></td>
</tr><tr><td style=\"height: 2px;\" colspan=5></td></tr><tr><td colspan=5>
".mex("Anteporre il nome della valuta?",$pag)."
<select name=\"anteponi_nome_valuta\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select></td></tr><tr><td style=\"height: 2px;\" colspan=5></td></tr>";

if (!isset($utente_lis) or !strcmp((string) $utente_lis,"")) $utente_lis = fixset($utente_liste);
$tutti_utenti = esegui_query("select idutenti,nome_utente from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
$option_utenti = "";
$num_utenti = array();
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$nome_utente = risul_query($tutti_utenti,$num1,'nome_utente');
$num_utente = risul_query($tutti_utenti,$num1,'idutenti');
if ($id_utente == 1 or $id_utente == $num_utente) {
$option_utenti .= "<option value=\"$nome_utente\">$nome_utente</option>";
$num_utenti[$nome_utente] = $num_utente;
} # fine if ($id_utente == 1 or $id_utente == $num_utente)
elseif ($nome_utente == $utente_liste or $nome_utente == fixset($utente_messaggio)) $num_utenti[$nome_utente] = $num_utente;
} # fine for $num1
echo "<tr><td colspan=5>
".mex("Utilizzare le personalizzazioni (tipi di persone, liste di nazioni, regioni, ecc.) dell'utente",$pag)."
<select name=\"utente_lis\">
".str_replace("\"$utente_lis\">","\"$utente_lis\" selected>",$option_utenti);
if (!strstr($option_utenti,"\"$utente_liste\">") and !empty($num_utenti[$utente_liste])) {
if ($utente_liste == $utente_lis) $sel = " selected";
else $sel = "";
echo "<option value=\"$utente_liste\"$sel>$utente_liste</option>";
} # fine if (!strstr($option_utenti,"\"$utente_liste\">") and !empty($num_utenti[$utente_liste]))
echo "</select></td></tr></table><br>";

echo mex("Tariffe (tipologie) da mostrare ed eventuali loro nomi sostitutivi con cui mostrarle",$pag).":<br>
<table style=\"margin-left: auto; margin-right: auto;\" border=\"1\" cellspacing=\"0\" cellpadding=\"4\">";
$celle = 1;
$num_colonne = 2;
$tablenometariffe_modello = $PHPR_TAB_PRE."ntariffe".$anno_modello;
$rigatariffe = esegui_query("select * from $tablenometariffe_modello where idntariffe = 1 ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
if (isset($tariffe_mostra[$numtariffa]) and strtoupper($tariffe_mostra[$numtariffa]) == $SI) $checked = " checked";
else $checked = "";
if ($attiva_tariffe_consentite == "n" or (isset($tariffe_consentite_vett[$numtariffa]) and $tariffe_consentite_vett[$numtariffa] == "SI") or $checked) {
if ($celle == 1) echo "<tr>";
$tariffa = "tariffa".$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa == "") {
$nometariffa = $tariffa;
$nometariffa_vedi = mex("tariffa",$pag).$numtariffa;
} # fine if ($nometariffa == "")
else $nometariffa_vedi = $nometariffa;
$nome_tariffa_imposto = "nome_tariffa_imposto".$numtariffa;
if (empty($tariffe_mostra['array_esistente'])) $checked = " checked";
$val = "";
if (!empty($nomi_tariffe_imposte[$numtariffa])) $val = $nomi_tariffe_imposte[$numtariffa];
echo "<td><label><input type=\"checkbox\" name=\"$tariffa\" value=\"SI\"$checked> <b>$numtariffa</b>. $nometariffa_vedi</label>
 (".mex("col nome",$pag)." <input type=\"text\" name=\"$nome_tariffa_imposto\" value=\"$val\" size=\"22\">)</td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == $num_colonne)
$celle++;
} # fine if ($attiva_tariffe_consentite == "n" or (isset($tariffe_consentite_vett[$numtariffa]) and...
} # fine for $numtariffa
if ($celle != 1) {
for ($num1 = $celle ; $num1 <= $num_colonne ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($celle != 1)
echo "</table>
<input type=\"hidden\" name=\"num_tariffe\" value=\"$numero_tariffe\"><br>";

$dati_ca = dati_costi_agg_ntariffe($tablenometariffe_modello,"NO");
$select_costi_letto = "";
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
if (isset($costo_aggiungi_letti) and $costo_aggiungi_letti == $dati_ca[$numca]['id']) $sel = " selected";
else $sel = "";
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or $sel) {
if ($dati_ca[$numca]['letto'] == "s" and $dati_ca[$numca]['numsett'] != "c" and $dati_ca[$numca]['mostra'] == "s" and $dati_ca[$numca]['combina'] != "s") $select_costi_letto .= "<option value=\"".$dati_ca[$numca]['id']."\"$sel>".$dati_ca[$numca]['nome']."</option>";
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or $sel)
} # fine for $numca
if (empty($chiedi_numero_persone) or strtoupper($chiedi_numero_persone) != $NO) { $sel_NO = ""; $sel_SI = " selected"; }
else { $sel_SI = ""; $sel_NO = " selected"; }
if (isset($massimo_numero_persone) and strcmp((string) $massimo_numero_persone,"")) $val = $massimo_numero_persone;
else {
$val = 0;
$max_maxocc = esegui_query("select max(maxoccupanti) from $tableappartamenti");
if (numlin_query($max_maxocc)) {
$max_maxocc = risul_query($max_maxocc,0,0);
if ($max_maxocc) {
$val = $max_maxocc;
if ($select_costi_letto) $val += 2;
} # fine if ($max_maxocc)
} # fine if (numlin_query($max_maxocc))
} # fine else if (strcmp((string) $massimo_numero_persone,""))
echo "".mex("Chiedere il numero di persone?",$pag)."
<select name=\"chiedi_num_persone\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>
<table><tr><td style=\"width: 25px;\"></td><td>
".mex("Numero massimo di persone",$pag).":
 <input type=\"text\" name=\"max_num_persone\" size=\"3\" value=\"".htmlspecialchars($val)."\">
(".mex("0 per scelta libera",$pag).").<br>";
if ($select_costi_letto) {
if (empty($costo_aggiungi_letti)) $sel = " selected";
else $sel = "";
if (!empty($massimo_numero_letti_aggiuntivi)) $val = $massimo_numero_letti_aggiuntivi;
else $val = 2;
echo "".mex("Se le persone superano la capienza massima utilizzare il costo aggiuntivo",$pag)."
<select name=\"costo_aggiungi_letti\">
<option value=\"\"$sel>----</option>
$select_costi_letto
</select><br>
<table><tr><td style=\"width: 25px;\"></td><td>".mex("Se il costo può essere moltiplicato aggiungere al massimo",$pag)."
 <input type=\"text\" name=\"max_num_aggiungi_letti\" size=\"3\" value=\"".htmlspecialchars($val)."\">
 ".mex("letti aggiuntivi",$pag).".</td></tr></table>";
} # fine if ($select_costi_letto)
echo "</td></tr></table><br>";

if (empty($chiedi_numero_appartamenti_per_tipologia) or strtoupper($chiedi_numero_appartamenti_per_tipologia) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
if (!empty($massimo_numero_appartamenti_per_tipologia)) $val = $massimo_numero_appartamenti_per_tipologia;
else $val = 0;
if (!empty($fr_appartamenti)) $parola_appartamenti = $fr_appartamenti;
else $parola_appartamenti = mex2("appartamenti",'unit.php',$lingua_modello);
if (!empty($fr_appartamento)) $parola_appartamento = $fr_appartamento;
else $parola_appartamento = mex2("appartamento",'unit.php',$lingua_modello);
echo "".mex("Chiedere il numero di appartamenti per ogni tipologia?",'unit.php')."
<select name=\"chiedi_num_app_tipologia\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>
".mex("Numero massimo di appartamenti",'unit.php').":
 <input type=\"text\" name=\"max_num_app_tipologia\" size=\"3\" value=\"".htmlspecialchars($val)."\">
(".mex("0 per scelta libera",$pag).").<br>
".mex("Parola da utilizzare per indicare gli appartamenti",'unit.php').":
 <input type=\"text\" name=\"parola_appartamenti\" size=\"15\" value=\"$parola_appartamenti\">;
 ".mex("singolare",$pag).": <input type=\"text\" name=\"parola_appartamento\" size=\"15\" value=\"$parola_appartamento\">
</td></tr></table><br>";

if (empty($aggiungi_altre_tipologie) or strtoupper($aggiungi_altre_tipologie) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
if (!empty($massimo_numero_altre_tipologie)) $val = $massimo_numero_altre_tipologie;
else {
$val = 5;
if ($val > $numero_tariffe) $val = $numero_tariffe;
} # fine else if (!empty($massimo_numero_altre_tipologie))
echo "".mex("Possibilità di aggiungere più tipologie da controllare contemporaneamente?",$pag)."
<select name=\"aggiungi_tipologie\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>
".mex("Numero massimo di tipologie",$pag).":
 <input type=\"text\" name=\"max_num_tipologie\" size=\"3\" value=\"$val\">
</td></tr></table><br>";

$sel_NO = " selected";
$sel_SI = "";
$sel_chied = "";
$sel_poss = "";
if (isset($cerca_appartamenti_vicini)) {
if (strtoupper($cerca_appartamenti_vicini) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
if (strtoupper($cerca_appartamenti_vicini) == strtoupper(mex("se possibile",$pag))) { $sel_poss = " selected"; $sel_NO = ""; }
if (strtoupper($cerca_appartamenti_vicini) == strtoupper(mex("chiedere",$pag))) { $sel_chied = " selected"; $sel_NO = ""; }
} # fine if (isset($cerca_appartamenti_vicini))
echo "".mex("Quando si richiedono più appartamenti o tipologie, cercare appartamenti vicini",'unit.php').":
<select name=\"cerca_app_vicini\">
<option value=\"NO\"$sel_NO>".mex("mai",$pag)."</option>
<option value=\"se possibile\"$sel_poss>".mex("se possibile",$pag)."</option>
<option value=\"SI\"$sel_SI>".mex("sempre",$pag)."</option>
<option value=\"chiedere\"$sel_chied>".mex("chiedere",$pag)."</option>
</select><br><br>";

if (empty($chiedi_costi_aggiuntivi_di_pag_inserzione) or strtoupper($chiedi_costi_aggiuntivi_di_pag_inserzione) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
if (!empty($numero_colonne_costi_aggiuntivi)) $val = $numero_colonne_costi_aggiuntivi;
else $val = 2;
echo "".mex("Chiedere se aggiungere i costi presenti nella pagina di inserzione prenotazioni?",$pag)."
 <select name=\"mostra_costi_aggiuntivi\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>
".mex("Numero di colonne dei costi aggiuntivi",$pag).":
 <input type=\"text\" name=\"num_colonne_costi_agg\" size=\"3\" value=\"".htmlspecialchars($val)."\">
</td></tr></table>";
$sel_SI = "";
$sel_NO = "";
$sel_opz = " selected";
if (isset($aggiungi_costi_fissi) and strtoupper($aggiungi_costi_fissi) == $NO) { $sel_NO = " selected"; $sel_opz = ""; }
if (isset($aggiungi_costi_fissi) and strtoupper($aggiungi_costi_fissi) == $SI) { $sel_SI = " selected"; $sel_opz = ""; }
echo "".mex("Aggiungere al prezzo i costi aggiuntivi fissi associati alle tariffe?",$pag)."
<select name=\"aggiungi_costi_fissi\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag).", ".mex("tutti",$pag)."</option>
<option value=\"opzionale\"$sel_opz>".mex("Solo quelli selezionati per essere mostrati",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><br>

".mex("Costi aggiuntivi da mostrare ed eventuali loro nomi sostitutivi con cui mostrarli",$pag)."
 <small>(".mex("usare uno spazio per non mostrare il costo nei dettagli",$pag).")</small>:<br>
<table style=\"margin-left: auto; margin-right: auto;\" border=\"1\" cellspacing=\"0\" cellpadding=\"4\">";
$celle = 1;
$num_colonne = 2;
unset($categorie_combina);
$lista_idc_passa = "";
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
if (isset($costi_aggiuntivi_mostra[$dati_ca[$numca]['id']]) and strtoupper($costi_aggiuntivi_mostra[$dati_ca[$numca]['id']]) == $SI) $checked = " checked";
else $checked = "";
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or $checked) {
$lista_idc_passa .= ",".$dati_ca[$numca]['id'];
if ($celle == 1) echo "<tr>";
if ($dati_ca[$numca]['tipo'] == "u") $tipo_costo = "Costo unico";
if ($dati_ca[$numca]['tipo'] == "s") $tipo_costo = "Costo $parola_settimanale";
$nome_costo_imposto = "nome_costo_imposto".$dati_ca[$numca]['id'];
if ($dati_ca[$numca]['combina'] == "s") $categorie_combina[$dati_ca[$numca]['categoria']] = $dati_ca[$numca]['id'];
if (empty($costi_aggiuntivi_mostra['array_esistente'])) $checked = " checked";
if (!empty($nomi_costi_agg_imposti[$dati_ca[$numca]['id']])) $val = htmlspecialchars($nomi_costi_agg_imposti[$dati_ca[$numca]['id']]);
else $val = "";
echo "<td><label><input type=\"checkbox\" name=\"attiva_costo".$dati_ca[$numca]['id']."\" value=\"SI\"$checked>".mex("$tipo_costo",$pag)." <em>".$dati_ca[$numca]['nome']."</em></label>:
 <input type=\"text\" name=\"$nome_costo_imposto\" value=\"$val\" size=\"22\"></td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == $num_colonne)
$celle++;
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or $checked)
} # fine for $numca
if (@is_array($categorie_combina)) {
reset($categorie_combina);
foreach ($categorie_combina as $categoria => $id_costo_cat) {
$val = htmlspecialchars(fixstr($categorie_costi_agg_imposte[$categoria]));
$categoria = htmlspecialchars($categoria);
echo "<td>".mex("Categoria",$pag)." <em>$categoria</em>:
 <input type=\"text\" name=\"nome_cat_imp$id_costo_cat\" value=\"$val\" size=\"22\"></td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == $num_colonne)
$celle++;
} # fine foreach ($categorie_combina as $categoria => $id_costo_cat)
} # fine if (@is_array($categorie_combina))
if ($celle != 1) {
for ($num1 = $celle ; $num1 <= $num_colonne ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($celle != 1)
elseif ($dati_ca['num'] == 0) echo "<tr><td style=\"width: 250px;\">&nbsp;</td></tr>";
echo "</table><br>";
if ($lista_idc_passa) echo "<input type=\"hidden\" name=\"lista_idc_passa\" value=\"$lista_idc_passa\">";

echo "<a name=\"codprom\"></a>".mex("Codici promozionali",$pag).":<br>
<table><tr><td style=\"width: 25px;\"></td><td valign=\"top\">";
if (empty($num_codici_promo) and !empty($campi_codici_promo['array_esistente'])) $num_codici_promo = (count($campi_codici_promo) - 1);
if (empty($num_codici_promo) or controlla_num_pos($num_codici_promo) == "NO") $num_codici_promo = 1;
for ($num1 = 1 ; $num1 <= $num_codici_promo ; $num1++) {
if (empty(${"codice_promo".$num1})) ${"codice_promo".$num1} = fixstr($campi_codici_promo[$num1]);
if (empty(${"tipo_codice_promo".$num1})) ${"tipo_codice_promo".$num1} = substr(fixstr($costi_campi_codici_promo[$num1]),0,1);
if (${"tipo_codice_promo".$num1} != "-") ${"tipo_codice_promo".$num1} = "+";
if (${"tipo_codice_promo".$num1} == "+") { $sel_agg = " selected"; $sel_rim = ""; }
else { $sel_agg = ""; $sel_rim = " selected"; }
echo "$num1".". ".mex("Il codice",$pag)." <input type=\"text\" name=\"codice_promo$num1\" value=\"".htmlspecialchars(${"codice_promo".$num1})."\" size=\"12\">
 <select name=\"tipo_codice_promo$num1\">
<option value=\"+\"$sel_agg>".mex("aggiunge",$pag)."</option>
<option value=\"-\"$sel_rim>".mex("rimuove",$pag)."</option>
</select>
 ".mex("il",$pag)." <select name=\"costo_codice_promo$num1\">";
if (empty(${"costo_codice_promo".$num1})) ${"costo_codice_promo".$num1} = substr(fixstr($costi_campi_codici_promo[$num1]),1);
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
if (!isset($costo_aggiungi_letti) or $dati_ca[$numca]['id'] != $costo_aggiungi_letti) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or $dati_ca[$numca]['id'] == substr($costi_campi_codici_promo[$num1],1)) {
if ($dati_ca[$numca]['tipo'] == "u") $tipo_costo = "Costo unico";
if ($dati_ca[$numca]['tipo'] == "s") $tipo_costo = "Costo $parola_settimanale";
if (${"costo_codice_promo".$num1} == $dati_ca[$numca]['id']) $sel = " selected";
else $sel = "";
echo "<option value=\"".$dati_ca[$numca]['id']."\"$sel>".strtolower(mex("$tipo_costo",$pag))." \"".$dati_ca[$numca]['nome']."\"</option>";
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$numca]['id']] == "SI" or...
} # fine if (!isset($costo_aggiungi_letti) or $dati_ca[$numca]['id'] != $costo_aggiungi_letti)
} # fine for $numca
echo "</select><br>";
} # fine for $num1
echo "</td><td style=\"width: 20px;\"></td><td valign=\"bottom\">";
if ($num_codici_promo > 1) echo "<input class=\"sbutton\" type=\"submit\" name=\"eliminacodpromo\" onclick=\"document.getElementById('fcrmod').action += '#codprom'\" value=\"".mex("-",$pag)."\">&nbsp;";
echo "<input class=\"sbutton\" type=\"submit\" name=\"aggiungicodpromo\" onclick=\"document.getElementById('fcrmod').action += '#codprom'\" value=\"".mex("+",$pag)."\">
<input type=\"hidden\" name=\"num_codici_promo\" value=\"$num_codici_promo\"></td></tr></table><br>";

if (empty($assegna_con_regola2) or strtoupper($assegna_con_regola2) == $SI) echo "<input type=\"hidden\" name=\"assegna_con_regola2\" value=\"SI\">";
else echo "<input type=\"hidden\" name=\"assegna_con_regola2\" value=\"NO\">";
/*
if (!$assegna_con_regola2 or strtoupper($assegna_con_regola2) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
echo "".mex("Assegnare gli appartamenti in base alla tariffa scelta con la regola 2?",'unit.php')."
<select name=\"assegna_con_regola2\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><br>";
*/

echo "".mex("Motivazioni delle regole di assegnazone 1 per disponibilità condizionata da tenere in conto",$pag).":<br>
<table style=\"margin-left: auto; margin-right: auto;\" border=\"1\" cellspacing=\"0\" cellpadding=\"4\">";
$celle = 1;
$num_colonne = 3;
$tableregole_modello = $PHPR_TAB_PRE."regole".$anno_modello;
$regole = esegui_query("select * from $tableregole_modello where app_agenzia != '' and (motivazione2 != 'x' or motivazione2 is NULL) order by app_agenzia");
$num_regole = numlin_query($regole);
unset($motivazioni_presenti);
$num_motivazioni = 0;
for ($num1 = 0 ; $num1 < $num_regole ; $num1 = $num1 + 1) {
$motivazione = risul_query($regole,$num1,'motivazione');
if (!$motivazione) {
$motivazione = " ";
$motivazione_vedi = mex("nessuna",$pag);
} # fine if (!$motivazione)
else $motivazione_vedi = $motivazione;
if (isset($considera_motivazioni_regola1[$motivazione]) and strtoupper($considera_motivazioni_regola1[$motivazione]) == $SI) $checked = " checked";
else $checked = "";
$regola1_consentita = 0;
if ($attiva_regole1_consentite == "n" or $checked) $regola1_consentita = 1;
else for ($num2 = 0 ; $num2 < count($regole1_consentite) ; $num2++) if ($regole1_consentite[$num2] == $motivazione) $regola1_consentita = 1;
if ($regola1_consentita) {
if ($celle == 1) echo "<tr>";
$idregole = risul_query($regole,$num1,'idregole');
if (!isset($motivazioni_presenti[$motivazione])) {
$motivazioni_presenti[$motivazione] = 1;
$var_motivazione = "var_mot_".$num_motivazioni;
$num_motivazioni++;
if (empty($considera_motivazioni_regola1['array_esistente'])) $checked = " checked";
echo "<td><label><input type=\"checkbox\" name=\"$var_motivazione\" value=\"$motivazione\"$checked> $motivazione_vedi</label></td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == 3)
$celle++;
} # fine if (!isset($motivazioni_presenti[$motivazione]))
} # fine if ($regola1_consentita)
} # fine for $num1
if ($celle != 1) {
for ($num1 = $celle ; $num1 <= $num_colonne ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($celle != 1)
elseif ($num_regole == 0) echo "<tr><td style=\"width: 250px;\">&nbsp;</td></tr>";
echo "</table>
<div style=\"font-size: smaller; text-align: center;\">(".mex("le regole 1 di chiusura vengono sempre applicate",$pag).")</div>";
if (empty($mostra_frase_alternativa_regola1) or strtoupper($mostra_frase_alternativa_regola1) == $NO) { $check_NO = " checked"; $check_SI = ""; }
else { $check_SI = " checked"; $check_NO = ""; }
if (!empty($fr_alternativa_regola1)) $val = htmlspecialchars($fr_alternativa_regola1);
else $val = mex2("Disponibilità incerta per la tipologia scelta, per ulteriori informazioni contattateci via email",$pag,$lingua_modello);
echo "<input type=\"hidden\" name=\"num_motivazioni\" value=\"$num_motivazioni\">
".mex("Se si deve occupare un appartamento della regola 1 con una delle motivazioni selezionate",'unit.php').":
<table border=0 cellspacing=0 cellpadding=0><tr>
<td style=\"width: 20px;\"></td><td align=\"left\">
<label><input type=\"radio\" name=\"mostra_frase_alternativa_regola1\" value=\"NO\"$check_NO> ".mex("comportati come se non vi fosse più disponibilità",$pag)."</label><br>
<label><input type=\"radio\" name=\"mostra_frase_alternativa_regola1\" value=\"SI\"$check_SI> ".mex("dai ancora disponibilità con questa frase alternativa",$pag)."</label>:
 <input type=\"text\" name=\"frase_alternativa_regola1\" size=\"65\" value=\"$val\">
</td></tr></table><br>";

if (empty($mostra_caparra) or strtoupper($mostra_caparra) == $SI) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
echo "".mex("Mostrare la caparra se presente?",$pag)."
<select name=\"mostra_caparra\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>";
if (empty($mostra_giorni_pieni) or strtoupper($mostra_giorni_pieni) == $NO) { $sel_SI = ""; $sel_NO = " selected"; }
else { $sel_NO = ""; $sel_SI = " selected"; }
echo "".mex("Mostrare quali sono i giorni pieni all'interno dei periodi dove non c'è più disponibilità?",$pag)."
<select name=\"mostra_giorni_pieni\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><br>";

$dati_struttura = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'dati_struttura' and idutente = '$id_utente'");
$dati_struttura = explode("#@&",risul_query($dati_struttura,0,'valpersonalizza'));
if (empty($mostra_richiesta_via_mail) or strtoupper($mostra_richiesta_via_mail) == $SI) { $sel_NO = ""; $sel_SI = " selected"; }
else { $sel_SI = ""; $sel_NO = " selected"; }
if (empty($indirizzo_email) and $modello_esistente != "SI") $indirizzo_email = $dati_struttura[2];
if (empty($ind_email) and empty($form_ricaricata)) $ind_email = $indirizzo_email;
if (defined('C_RESTRIZIONI_DEMO_ADMIN') and C_RESTRIZIONI_DEMO_ADMIN == "SI") { $ind_email = C_EMAIL_DEMO_ADMIN; $readonly = " readonly=\"readonly\""; }
else $readonly = "";
echo "".mex("Mostrare la form di richiesta prenotazione?",$pag)."
<select name=\"mostra_richiesta_via_mail\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>
".mex("Inviare la richiesta di prenotazione come messaggio a",$pag)."
 <select name=\"utente_mess\">";
if ($modello_esistente != "SI") {
$utente_messaggio = esegui_query("select nome_utente from $tableutenti where idutenti = '1'");
$utente_messaggio = risul_query($utente_messaggio,0,'nome_utente');
} # fine if ($modello_esistente != "SI")
if (!isset($utente_mess)) $utente_mess = "";
if (!$utente_mess and empty($form_ricaricata)) $utente_mess = $utente_messaggio;
if ($utente_mess) $sel_nessuno = " selected";
else $sel_nessuno = "";
if ($utente_messaggio == mex("tutti",$pag)) $sel_tutti = " selected";
else $sel_tutti = "";
echo "<option value=\"\"$sel_nessuno>".mex("----",$pag)."</option>
<option value=\"tutti\"$sel_tutti>".mex("tutti",$pag)."</option>";
echo str_replace("\"$utente_mess\">","\"$utente_mess\" selected>",$option_utenti);
if (!strstr($option_utenti,"\"$utente_messaggio\">") and !empty($num_utenti[$utente_messaggio])) {
if ($utente_messaggio == $utente_mess) $sel = " selected";
else $sel = "";
echo "<option value=\"$utente_messaggio\"$sel>$utente_messaggio</option>";
} # fine if (!strstr($option_utenti,"\"$utente_messaggio\">") and !empty($num_utenti[$nome_utente]))
echo "</select><br>";

$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente' ");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
if (!isset($origine_prenotazione)) $origine_prenotazione = null;
if ($origini_prenota or strcmp((string) $origine_prenotazione,"")) {
if (!isset($orig_prenota) or !strcmp((string) $orig_prenota,"")) $orig_prenota = $origine_prenotazione;
$orig_esist_trovata = 0;
echo "<table><tr><td style=\"width: 25px;\"></td><td>
".mex("Origine della prenotazione",$pag).":
<select name=\"orig_prenota\">
<option value=\"\">----</option>";
if ($origini_prenota) {
$origini_prenota = explode(",",$origini_prenota);
$num_origini_prenota = count($origini_prenota);
for ($num1 = 0 ; $num1 < $num_origini_prenota ; $num1++) {
$origine_p = $origini_prenota[$num1];
if ($origine_p == $origine_prenotazione) $orig_esist_trovata = 1;
if ($origine_p == $orig_prenota) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($origine_p)."\"$sel>$origine_p</option>";
} # fine for $num1
} # fine if ($origini_prenota)
if (!$orig_esist_trovata and strcmp((string) $origine_prenotazione,"")) {
if ($origine_prenotazione == $orig_prenota) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($origine_prenotazione)."\"$sel>$origine_prenotazione</option>";
} # fine if (!$orig_esist_trovata and strcmp((string) $origine_prenotazione,""))
echo "</select></td></tr></table>";
} # fine if ($origini_prenota or strcmp((string) $origine_prenotazione,""))

echo "".mex("Indirizzo email a cui inviare le richieste di prenotazione",$pag).":
 <input type=\"text\"$readonly name=\"ind_email\" value=\"".htmlspecialchars($ind_email)."\" size=\"25\"><br>";
if (isset($manda_copia_richiesta_email) and strtoupper($manda_copia_richiesta_email) == $SI) { $sel_NO = ""; $sel_SI = " selected"; }
else { $sel_SI = ""; $sel_NO = " selected"; }
echo "".mex("Inviare una copia della email di richiesta prenotazione al richiedente?",$pag)."
<select name=\"manda_copia_richiesta_email\">";
if (!defined('C_RESTRIZIONI_DEMO_ADMIN') or C_RESTRIZIONI_DEMO_ADMIN != "SI") echo "<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>";
echo "<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>";
echo "".mex("Campi della form da chiedere",$pag).":<br>
<table>";
$f_necessario = mex("necessario",$pag);
$f_opzionale = mex("opzionale",$pag);
$f_non_chiedere = mex("non chiedere",$pag);
if (empty($chiedi_cognome)) $chiedi_cognome = $SI;
if ($chiedi_cognome == "SI") $chiedi_cognome = $SI;
if ($chiedi_cognome == "NO") $chiedi_cognome = $NO;
$chiedi_cognome = strtoupper($chiedi_cognome);
if ($chiedi_cognome != $SI and $chiedi_cognome != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_cognome == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_cognome == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td style=\"width: 25px;\"></td><td>".mex("Cognome",$pag)." <select name=\"chiedi_cognome\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_nome)) $chiedi_nome = $SI;
if ($chiedi_nome == "SI") $chiedi_nome = $SI;
if ($chiedi_nome == "NO") $chiedi_nome = $NO;
$chiedi_nome = strtoupper($chiedi_nome);
if ($chiedi_nome != $SI and $chiedi_nome != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_nome == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_nome == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td style=\"width: 15px;\"></td><td>".mex("Nome",$pag)." <select name=\"chiedi_nome\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_email)) $chiedi_email = $SI;
if ($chiedi_email == "SI") $chiedi_email = $SI;
if ($chiedi_email == "NO") $chiedi_email = $NO;
$chiedi_email = strtoupper($chiedi_email);
if ($chiedi_email != $SI and $chiedi_email != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_email == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_email == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Email",$pag)." <select name=\"chiedi_email\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_sesso)) $chiedi_sesso = $NO;
if ($chiedi_sesso == "SI") $chiedi_sesso = $SI;
if ($chiedi_sesso == "NO") $chiedi_sesso = $NO;
$chiedi_sesso = strtoupper($chiedi_sesso);
if ($chiedi_sesso != $SI and $chiedi_sesso != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_sesso == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_sesso == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Genere",$pag)." <select name=\"chiedi_sesso\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_datanascita)) $chiedi_datanascita = $NO;
if ($chiedi_datanascita == "SI") $chiedi_datanascita = $SI;
if ($chiedi_datanascita == "NO") $chiedi_datanascita = $NO;
$chiedi_datanascita = strtoupper($chiedi_datanascita);
if ($chiedi_datanascita != $SI and $chiedi_datanascita != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_datanascita == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_datanascita == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Data di nascita",$pag)." <select name=\"chiedi_datanascita\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_documento)) $chiedi_documento = $NO;
if ($chiedi_documento == "SI") $chiedi_documento = $SI;
if ($chiedi_documento == "NO") $chiedi_documento = $NO;
$chiedi_documento = strtoupper($chiedi_documento);
if ($chiedi_documento != $SI and $chiedi_documento != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_documento == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_documento == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Documento",$pag)." <select name=\"chiedi_documento\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_nazione)) $chiedi_nazione = $NO;
if ($chiedi_nazione == "SI") $chiedi_nazione = $SI;
if ($chiedi_nazione == "NO") $chiedi_nazione = $NO;
$chiedi_nazione = strtoupper($chiedi_nazione);
if ($chiedi_nazione != $SI and $chiedi_nazione != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_nazione == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_nazione == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Nazione",$pag)." <select name=\"chiedi_nazione\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_regione)) $chiedi_regione = $NO;
if ($chiedi_regione == "SI") $chiedi_regione = $SI;
if ($chiedi_regione == "NO") $chiedi_regione = $NO;
$chiedi_regione = strtoupper($chiedi_regione);
if ($chiedi_regione != $SI and $chiedi_regione != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_regione == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_regione == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Regione",$pag)." <select name=\"chiedi_regione\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_citta)) $chiedi_citta = $NO;
if ($chiedi_citta == "SI") $chiedi_citta = $SI;
if ($chiedi_citta == "NO") $chiedi_citta = $NO;
$chiedi_citta = strtoupper($chiedi_citta);
if ($chiedi_citta != $SI and $chiedi_citta != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_citta == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_citta == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Città",$pag)." <select name=\"chiedi_citta\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_via)) $chiedi_via = $NO;
if ($chiedi_via == "SI") $chiedi_via = $SI;
if ($chiedi_via == "NO") $chiedi_via = $NO;
$chiedi_via = strtoupper($chiedi_via);
if ($chiedi_via != $SI and $chiedi_via != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_via == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_via == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Via",$pag)." <select name=\"chiedi_via\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_numcivico)) $chiedi_numcivico = $NO;
if ($chiedi_numcivico == "SI") $chiedi_numcivico = $SI;
if ($chiedi_numcivico == "NO") $chiedi_numcivico = $NO;
$chiedi_numcivico = strtoupper($chiedi_numcivico);
if ($chiedi_numcivico != $SI and $chiedi_numcivico != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_numcivico == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_numcivico == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Numero civico",$pag)." <select name=\"chiedi_numcivico\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_cap)) $chiedi_cap = $NO;
if ($chiedi_cap == "SI") $chiedi_cap = $SI;
if ($chiedi_cap == "NO") $chiedi_cap = $NO;
$chiedi_cap = strtoupper($chiedi_cap);
if ($chiedi_cap != $SI and $chiedi_cap != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_cap == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_cap == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Codice postale",$pag)." <select name=\"chiedi_cap\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_telefono)) $chiedi_telefono = "opzionale";
if ($chiedi_telefono == "SI") $chiedi_telefono = $SI;
if ($chiedi_telefono == "NO") $chiedi_telefono = $NO;
$chiedi_telefono = strtoupper($chiedi_telefono);
if ($chiedi_telefono != $SI and $chiedi_telefono != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_telefono == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_telefono == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Telefono",$pag)." <select name=\"chiedi_telefono\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_telefono2)) $chiedi_telefono2 = $NO;
if ($chiedi_telefono2 == "SI") $chiedi_telefono2 = $SI;
if ($chiedi_telefono2 == "NO") $chiedi_telefono2 = $NO;
$chiedi_telefono2 = strtoupper($chiedi_telefono2);
if ($chiedi_telefono2 != $SI and $chiedi_telefono2 != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_telefono2 == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_telefono2 == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Secondo telefono",$pag)." <select name=\"chiedi_telefono2\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_telefono3)) $chiedi_telefono3 = $NO;
if ($chiedi_telefono3 == "SI") $chiedi_telefono3 = $SI;
if ($chiedi_telefono3 == "NO") $chiedi_telefono3 = $NO;
$chiedi_telefono3 = strtoupper($chiedi_telefono3);
if ($chiedi_telefono3 != $SI and $chiedi_telefono3 != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_telefono3 == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_telefono3 == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Terzo telefono",$pag)." <select name=\"chiedi_telefono3\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_fax)) $chiedi_fax = $NO;
if ($chiedi_fax == "SI") $chiedi_fax = $SI;
if ($chiedi_fax == "NO") $chiedi_fax = $NO;
$chiedi_fax = strtoupper($chiedi_fax);
if ($chiedi_fax != $SI and $chiedi_fax != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_fax == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_fax == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Fax",$pag)." <select name=\"chiedi_fax\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_email2)) $chiedi_email2 = $NO;
if ($chiedi_email2 == "SI") $chiedi_email2 = $SI;
if ($chiedi_email2 == "NO") $chiedi_email2 = $NO;
$chiedi_email2 = strtoupper($chiedi_email2);
if ($chiedi_email2 != $SI and $chiedi_email2 != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_email2 == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_email2 == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Seconda email",$pag)." <select name=\"chiedi_email2\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_email_cert)) $chiedi_email_cert = $NO;
if ($chiedi_email_cert == "SI") $chiedi_email_cert = $SI;
if ($chiedi_email_cert == "NO") $chiedi_email_cert = $NO;
$chiedi_email_cert = strtoupper($chiedi_email_cert);
if ($chiedi_email_cert != $SI and $chiedi_email_cert != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_email_cert == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_email_cert == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("PEC o codice destinatario",$pag)." <select name=\"chiedi_email_cert\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_codfiscale)) $chiedi_codfiscale = $NO;
if ($chiedi_codfiscale == "SI") $chiedi_codfiscale = $SI;
if ($chiedi_codfiscale == "NO") $chiedi_codfiscale = $NO;
$chiedi_codfiscale = strtoupper($chiedi_codfiscale);
if ($chiedi_codfiscale != $SI and $chiedi_codfiscale != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_codfiscale == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_codfiscale == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Codice fiscale",$pag)." <select name=\"chiedi_codfiscale\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_partitaiva)) $chiedi_partitaiva = $NO;
if ($chiedi_partitaiva == "SI") $chiedi_partitaiva = $SI;
if ($chiedi_partitaiva == "NO") $chiedi_partitaiva = $NO;
$chiedi_partitaiva = strtoupper($chiedi_partitaiva);
if ($chiedi_partitaiva != $SI and $chiedi_partitaiva != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_partitaiva == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_partitaiva == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td>".mex("Partita iva",$pag)." <select name=\"chiedi_partitaiva\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_commento)) $chiedi_commento = "opzionale";
if ($chiedi_commento == "SI") $chiedi_commento = $SI;
if ($chiedi_commento == "NO") $chiedi_commento = $NO;
$chiedi_commento = strtoupper($chiedi_commento);
if ($chiedi_commento != $SI and $chiedi_commento != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_commento == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_commento == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td>".mex("Commento",$pag)." <select name=\"chiedi_commento\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td>";
if (empty($chiedi_oracheckin)) $chiedi_oracheckin = $NO;
if ($chiedi_oracheckin == "SI") $chiedi_oracheckin = $SI;
if ($chiedi_oracheckin == "NO") $chiedi_oracheckin = $NO;
$chiedi_oracheckin = strtoupper($chiedi_oracheckin);
if ($chiedi_oracheckin != $SI and $chiedi_oracheckin != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_oracheckin == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_oracheckin == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<td></td><td><small>".mex("Orario stimato di arrivo",$pag)."</small> <select name=\"chiedi_oracheckin\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td></tr>";
if (empty($chiedi_valutapagamento)) $chiedi_valutapagamento = $SI;
if ($chiedi_valutapagamento == "SI") $chiedi_valutapagamento = $SI;
if ($chiedi_valutapagamento == "NO") $chiedi_valutapagamento = $NO;
$chiedi_valutapagamento = strtoupper($chiedi_valutapagamento);
if ($chiedi_valutapagamento != $NO) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_SI = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td colspan=\"3\">".mex("Valuta della caparra",$pag)." <select name=\"chiedi_valutapagamento\">
<option value=\"SI\"$sel_SI>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select> (".mex("nomi dall'utente delle personalizzazioni",$pag).")</td></tr>";

if (empty($chiedi_metodopagamento)) $chiedi_metodopagamento = $NO;
if ($chiedi_metodopagamento == "SI") $chiedi_metodopagamento = $SI;
if ($chiedi_metodopagamento == "NO") $chiedi_metodopagamento = $NO;
$chiedi_metodopagamento = strtoupper($chiedi_metodopagamento);
if ($chiedi_metodopagamento != $SI and $chiedi_metodopagamento != $NO) { $sel_SI = ""; $sel_opz = " selected"; $sel_NO = ""; }
if ($chiedi_metodopagamento == $SI) { $sel_SI = " selected"; $sel_opz = ""; $sel_NO = ""; }
if ($chiedi_metodopagamento == $NO) { $sel_SI = ""; $sel_opz = ""; $sel_NO = " selected"; }
echo "<tr><td></td><td><small>".mex("Metodo di pagamento della caparra",$pag)."</small> <select name=\"chiedi_metodopagamento\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
<option value=\"NO\"$sel_NO>$f_non_chiedere</option>
</select></td><td></td><td></td></tr>";
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente' ");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if (!empty($num_metodi_pagamento)) $utilizza_var_passate = "SI";
if ($metodi_pagamento) {
echo "<tr><td></td><td colspan=\"3\">".mex("Metodi di pagamento della caparra da chiedere e loro eventuali nomi sostitutivi",$pag).":<br>";
$metodi_pagamento = explode(",",$metodi_pagamento);
$num_metodi_pagamento = count($metodi_pagamento);
echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"4\">";
$celle = 1;
$num_colonne = 2;
$metodi_pagamenti_chiesti = array('array_esistente' => 1);
for ($num1 = 0 ; $num1 < $num_metodi_pagamento ; $num1++) {
if ($celle == 1) echo "<tr>";
$metodo = $metodi_pagamento[$num1];
if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI") {
if (!empty(${"var_met_paga_".$num1})) $checked = " checked";
else $checked = "";
if (!empty(${"nome_met_paga_imposto_".$num1})) $val = ${"nome_met_paga_imposto_".$num1};
else $val = "";
} # fine if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI")
else {
if (empty($metodi_pagamento_da_chiedere['array_esistente']) or strtoupper(fixset($metodi_pagamento_da_chiedere[$metodo])) == $SI) $checked = " checked";
else $checked = "";
if (!empty($nomi_metodi_pagamento_imposti[$metodo])) $val = $nomi_metodi_pagamento_imposti[$metodo];
else $val = "";
} # fine else if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI")
if (isset($metodi_pagamento_da_chiedere[$metodo]) and strtoupper($metodi_pagamento_da_chiedere[$metodo]) == $SI) $metodi_pagamenti_chiesti[$metodo] = 1;
echo "<td><label><input type=\"checkbox\" name=\"var_met_paga_"."$num1\" value=\"".htmlspecialchars($metodo)."\"$checked>$metodo"."</label>:
 <input type=\"text\" name=\"nome_met_paga_imposto_"."$num1\" value=\"".htmlspecialchars($val)."\" size=\"22\"></td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == 3)
$celle++;
} # fine for $num1
if (!empty($metodi_pagamento_da_chiedere['array_esistente'])) {
reset($metodi_pagamento_da_chiedere);
foreach ($metodi_pagamento_da_chiedere as $metodo => $val_m) {
if (empty($metodi_pagamenti_chiesti[$metodo])) {
$num1++;
if ($celle == 1) echo "<tr>";
if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI") {
if (${"var_met_paga_".$num1}) $checked = " checked";
else $checked = "";
if (${"nome_met_paga_imposto_".$num1}) $val = ${"nome_met_paga_imposto_".$num1};
else $val = "";
} # fine if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI")
else {
$checked = " checked";
if (!empty($nomi_metodi_pagamento_imposti[$metodo])) $val = $nomi_metodi_pagamento_imposti[$metodo];
else $val = "";
} # fine else if (isset($utilizza_var_passate) and $utilizza_var_passate == "SI")
echo "<td><label><input type=\"checkbox\" name=\"var_met_paga_"."$num1\" value=\"".htmlspecialchars($metodo)."\"$checked>$metodo"."</label>:
 <input type=\"text\" name=\"nome_met_paga_imposto_"."$num1\" value=\"$val\" size=\"22\"></td>";
if ($celle == $num_colonne) {
echo "</tr>";
$celle = 0;
} # fine if ($celle == 3)
$celle++;
} # fine if (empty($metodi_pagamenti_chiesti[$metodo]))
} # fine foreach ($metodi_pagamento_da_chiedere as $metodo => $val_m)
} # fine if (!empty($metodi_pagamento_da_chiedere['array_esistente']))
$n_met_paga_passa = ($num1 + 1);
if ($celle != 1) {
for ($num1 = $celle ; $num1 <= $num_colonne ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($celle != 1)
echo "</table>
<input type=\"hidden\" name=\"num_metodi_pagamento\" value=\"$num_metodi_pagamento\">
<input type=\"hidden\" name=\"n_met_paga_passa\" value=\"$n_met_paga_passa\">
</td></tr>";
} # fine if ($metodi_pagamento)
echo "<tr><td style=\"height: 5px;\"></td></tr></table>";

$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) $campi_pers_comm = explode(">",risul_query($campi_pers_comm,0,'valpersonalizza'));
else $campi_pers_comm = "";
echo "<a name=\"campers\"></a>".mex("Campi della form personalizzati",$pag).":<br>
<table><tr><td style=\"width: 25px;\"></td><td valign=\"top\">";
if (empty($num_campi_pers) and !empty($campi_form_personalizzati['array_esistente'])) $num_campi_pers = (count($campi_form_personalizzati) - 1);
if (empty($num_campi_pers) or controlla_num_pos($num_campi_pers) == "NO") $num_campi_pers = 1;
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
if (empty(${"campo_pers".$num1})) ${"campo_pers".$num1} = fixstr($campi_form_personalizzati[$num1]);
if (empty(${"chiedi_campo_pers".$num1})) ${"chiedi_campo_pers".$num1} = fixset($chiedi_campi_form_personalizzati[$num1]);
if (${"chiedi_campo_pers".$num1} == "SI") ${"chiedi_campo_pers".$num1} = $SI;
if (${"chiedi_campo_pers".$num1} == $SI) { $sel_SI = " selected"; $sel_opz = ""; }
else { $sel_SI = ""; $sel_opz = " selected"; }
echo "$num1".". <input type=\"text\" name=\"campo_pers$num1\" value=\"".htmlspecialchars(${"campo_pers".$num1})."\" size=\"25\">
 <select name=\"chiedi_campo_pers$num1\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale</option>
</select>";
if ($campi_pers_comm or (isset($ins_campi_form_personalizzati[$num1]) and strcmp((string) $ins_campi_form_personalizzati[$num1],""))) {
echo " <select name=\"ins_campo_pers$num1\">
<option value=\"\">".mex("aggiunto al commento",$pag)."</option>";
if (empty(${"ins_campo_pers".$num1})) ${"ins_campo_pers".$num1} = fixset($ins_campi_form_personalizzati[$num1]);
$comm_pers_trovato = 0;
if ($campi_pers_comm) {
for ($num2 = 0 ; $num2 < count($campi_pers_comm) ; $num2++) {
if ($ins_campi_form_personalizzati[$num1] == $campi_pers_comm[$num2]) $comm_pers_trovato = 1;
if (${"ins_campo_pers".$num1} == $campi_pers_comm[$num2]) $sel = " selected";
else $sel = "";
echo "<option value=\"".$campi_pers_comm[$num2]."\"$sel>".mex("aggiunto al commento",$pag)." \"".$campi_pers_comm[$num2]."\"</option>";
} # fine for $num2
} # fine if ($campi_pers_comm)
if (strcmp((string) $ins_campi_form_personalizzati[$num1],"") and !$comm_pers_trovato) {
if (${"ins_campo_pers".$num1} == $ins_campi_form_personalizzati[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".$ins_campi_form_personalizzati[$num1]."\"$sel>".mex("aggiunto al commento",$pag)." \"".$ins_campi_form_personalizzati[$num1]."\"</option>";
} # fine if (strcmp((string) $ins_campi_form_personalizzati[$num1],"") and !$comm_pers_trovato)
echo "</select><br>";
} # fine if ($campi_pers_comm or (isset($ins_campi_form_personalizzati[$num1]) and...
else echo " (".mex("aggiunto al commento",$pag).")<br>";
} # fine for $num1
echo "</td><td style=\"width: 20px;\"></td><td valign=\"bottom\">";
if ($num_campi_pers > 1) echo "<input class=\"sbutton\" type=\"submit\" name=\"eliminacampipers\" onclick=\"document.getElementById('fcrmod').action += '#campers'\" value=\"".mex("-",$pag)."\">&nbsp;";
echo "<input class=\"sbutton\" type=\"submit\" name=\"aggiungicampipers\" onclick=\"document.getElementById('fcrmod').action += '#campers'\" value=\"".mex("+",$pag)."\">
<input type=\"hidden\" name=\"num_campi_pers\" value=\"$num_campi_pers\"></td></tr></table>";

$lista_contr = "";
$nomi_contr_salva = array();
$num_campi_doc_cond_max = 0;
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente' ");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
# nomi dei contratti dell'utente delle liste
$nome_contratto_ut = $nome_contratto;
if (isset($num_utenti[$utente_lis]) and controlla_num_pos($num_utenti[$utente_lis]) == "SI" and $num_utenti[$utente_lis] != "1") {
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '".$num_utenti[$utente_lis]."'");
if (numlin_query($nomi_contratti)) {
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
if (strcmp((string) $dati_nome_contratto[1],"")) $nome_contratto_ut[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
} # fine if (numlin_query($nomi_contratti))
} # fine if (isset($num_utenti[$utente_lis]) and controlla_num_pos($num_utenti[$utente_lis]) == "SI" and $num_utenti[$utente_lis] != "1")
$contr_txt = esegui_query("select * from $tablecontratti where tipo = 'contrtxt' or tipo = 'contrhtm' order by numero ");
for ($num1 = 0 ; $num1 < numlin_query($contr_txt) ; $num1++) {
$num_contr = risul_query($contr_txt,$num1,'numero');
$salva_contr = esegui_query("select * from $tablecontratti where numero = '$num_contr' and tipo = 'dir' ");
if (!numlin_query($salva_contr)) {
$nomi_contr_salva[$num_contr] = mex("documento",$pag).$num_contr;
if (isset($nome_contratto_ut[$num_contr]) and strcmp((string) $nome_contratto_ut[$num_contr],"")) $nomi_contr_salva[$num_contr] .= " (".$nome_contratto_ut[$num_contr].")";
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") {
$lista_contr .= "<option value=\"$num_contr\">".$nomi_contr_salva[$num_contr]."</option>";
$num_campi_doc_cond_max++;
} # fine if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI")
elseif ($campi_form_doc_condizioni['array_esistente']) {
for ($num2 = 1 ; $num2 <= count($campi_form_doc_condizioni) ; $num2++) {
if ($campi_form_doc_condizioni[$num2] == $num_contr) {
$num_campi_doc_cond_max++;
break;
} # fine if ($campi_form_doc_condizioni[$num2] == $num_contr)
} # fine for $num2
} # fine elseif ($campi_form_doc_condizioni['array_esistente'])
#if (risul_query($contr_txt,$num1,'tipo') == "contrtxt") $lista_contr_txt .= "<option value=\"$num_contr\">".$nomi_contr_salva[$num_contr]."</option>";
} # fine if (!numlin_query($salva_contr))
} # fine for $num1
if ($num_campi_doc_cond_max) {
$campi_pers_cliente = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_cliente' and idutente = '$id_utente'");
if (numlin_query($campi_pers_cliente) == 1) $campi_pers_cliente = explode(">",risul_query($campi_pers_cliente,0,'valpersonalizza'));
else $campi_pers_cliente = array();
echo "<table><tr><td style=\"height: 5px;\"></td></tr></table>
<a name=\"doccond\"></a>".mex("Condizioni da accettare nella form",$pag)." (".mex("nomi dall'utente delle personalizzazioni",$pag)."):<br>
<table><tr><td style=\"width: 25px;\"></td><td valign=\"top\">";
if (empty($num_campi_doc_cond) and !empty($campi_form_doc_condizioni['array_esistente'])) $num_campi_doc_cond = (count($campi_form_doc_condizioni) - 1);
if (empty($num_campi_doc_cond) or controlla_num_pos($num_campi_doc_cond) == "NO") $num_campi_doc_cond = 1;
if ($num_campi_doc_cond > $num_campi_doc_cond_max) $num_campi_doc_cond = $num_campi_doc_cond_max;
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
$num_doc_cond = "num_doc_cond".$num1;
if (empty($$num_doc_cond)) $$num_doc_cond = fixset($campi_form_doc_condizioni[$num1]);
if (!$$num_doc_cond) $sel = " selected";
else $sel = "";
if (empty(${"chiedi_num_doc_cond".$num1})) ${"chiedi_num_doc_cond".$num1} = fixset($chiedi_campi_form_doc_condizioni[$num1]);
if (${"chiedi_num_doc_cond".$num1} == "SI") ${"chiedi_num_doc_cond".$num1} = $SI;
if (!${"chiedi_num_doc_cond".$num1} or ${"chiedi_num_doc_cond".$num1} == $SI) $sel_SI = " selected";
else $sel_SI = "";
if (${"chiedi_num_doc_cond".$num1} == "opzionale" or ${"chiedi_num_doc_cond".$num1} == mex2("opzionale",$pag,$lingua_mod_esist)) $sel_opz = " selected";
else $sel_opz = "";
echo " $num1. <select name=\"num_doc_cond$num1\">
<option value=\"\"$sel>----</option>";
if (strstr($lista_contr,"\"".$$num_doc_cond."\">")) echo str_replace("\"".$$num_doc_cond."\">","\"".$$num_doc_cond."\" selected>",$lista_contr);
else {
echo $lista_contr;
if ($$num_doc_cond and $nomi_contr_salva[$$num_doc_cond]) echo "<option value=\"".$$num_doc_cond."\" selected>".$nomi_contr_salva[$$num_doc_cond]."</option>";
} # fine else if (strstr($lista_contr,"\"".$$num_doc_cond."\">"))
echo "</select> <select name=\"chiedi_num_doc_cond$num1\">
<option value=\"SI\"$sel_SI>$f_necessario</option>
<option value=\"opzionale\"$sel_opz>$f_opzionale, ".mex("aggiunto al commento",$pag)."</option>";
$campo_pers_trovato = 0;
for ($num2 = 0 ; $num2 < count($campi_pers_cliente) ; $num2++) {
$campo_pers_cliente = explode("<",$campi_pers_cliente[$num2]);
$campo_pers_cliente = $campo_pers_cliente[0];
if (isset($chiedi_campi_form_doc_condizioni[$num1]) and $chiedi_campi_form_doc_condizioni[$num1] == "op_".$campo_pers_cliente) $campo_pers_trovato = 1;
if (${"chiedi_num_doc_cond".$num1} == "op_".$campo_pers_cliente) $sel = " selected";
else $sel = "";
echo "<option value=\"op_".$campo_pers_cliente."\"$sel>$f_opzionale, ".mex("aggiunto al campo",$pag)." \"$campo_pers_cliente\" ".mex("del cliente",$pag)."</option>";
} # fine for $num2
if (substr(fixstr($chiedi_campi_form_doc_condizioni[$num1]),0,3) == "op_" and !$campo_pers_trovato) {
if (${"chiedi_num_doc_cond".$num1} == $chiedi_campi_form_doc_condizioni[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".$chiedi_campi_form_doc_condizioni[$num1]."\"$sel>$f_opzionale, ".mex("aggiunto al campo",$pag)." \"".substr($chiedi_campi_form_doc_condizioni[$num1],3)."\" ".mex("del cliente",$pag)."</option>";
} # fine if (substr(fixstr($chiedi_campi_form_doc_condizioni[$num1]),0,3) == "op_" and !$campo_pers_trovato)
echo "</select><br>";
} # fine for $num1
echo "</td><td style=\"width: 14px;\"></td><td valign=\"bottom\">";
if ($num_campi_doc_cond > 1) echo "&nbsp;<input class=\"sbutton\" type=\"submit\" name=\"eliminacampicond\" onclick=\"document.getElementById('fcrmod').action += '#doccond'\" value=\"".mex("-",$pag)."\">";
if ($num_campi_doc_cond < $num_campi_doc_cond_max) echo "&nbsp;<input class=\"sbutton\" type=\"submit\" name=\"aggiungicampicond\" onclick=\"document.getElementById('fcrmod').action += '#doccond'\" value=\"".mex("+",$pag)."\">";
echo "<input type=\"hidden\" name=\"num_campi_doc_cond\" value=\"$num_campi_doc_cond\"></td></tr></table>";
} # fine if ($num_campi_doc_cond_max)

echo "</td></tr></table><br>";

if (@is_dir("./includes/templates/pay")) {
if (empty($mostra_bottone_paypal) or strtoupper($mostra_bottone_paypal) == $NO) { $sel_SI = ""; $sel_NO = " selected"; }
else { $sel_NO = ""; $sel_SI = " selected"; }
if (!empty($nome_modello_paypal)) $val = $nome_modello_paypal;
else {
$template_name_orig = fixset($template_name);
$template_name_show_orig = fixset($template_name_show);
$template_file_name_orig = fixset($template_file_name);
$template_data_dir_orig = fixset($template_data_dir);
@include("./includes/templates/pay/name.php");
if (!empty($template_file_name[$lingua_modello])) $val = $template_file_name[$lingua_modello];
else $val = $lingua_modello."_".$template_file_name['en'];
$template_name = $template_name_orig;
$template_name_show = $template_name_show_orig;
$template_file_name = $template_file_name_orig;
$template_data_dir = $template_data_dir_orig;
} # fine else if ($nome_modello_paypal)
echo "".mex("Mostrare il bottone per prenotare con la pagina di prenotazione immediata se presente?",$pag)."
<select name=\"mostra_bottone_paypal\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>
&nbsp;&nbsp;&nbsp;&nbsp;".mex("Nome file della pagina di prenotazione immediata",$pag).":
<input type=\"text\" name=\"nome_modello_paypal\" size=\"65\" value=\"".htmlspecialchars($val)."\"><br><br>";
} # fine if (@is_dir("./includes/templates/pay"))
else echo "<input type=\"hidden\" name=\"mostra_bottone_paypal\" value=\"NO\">";

$sel_NO = "";
$sel_DIS = "";
$sel_SI = "";
if (empty($mostra_quadro_disponibilita) or strtoupper($mostra_quadro_disponibilita) == $SI."_".$NO) $sel_DIS = " selected";
else {
if (strtoupper($mostra_quadro_disponibilita) == $SI) $sel_SI = " selected";
else $sel_NO = " selected";
} # fine else if (!$mostra_quadro_disponibilita or strtoupper($mostra_quadro_disponibilita) == $NO)
echo "".mex("Mostrare il quadro indicativo della disponibilità?",$pag)."
<select name=\"mostra_quadro_disp\">
<option value=\"NO\"$sel_NO>".mex("Non mostrare",$pag)."</option>
<option value=\"SI_NO\"$sel_DIS>".mex("Solo quando non c'è disponibilità",$pag)."</option>
<option value=\"SI\"$sel_SI>".mex("Sempre",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>";
$sel_APP = "";
$sel_REG2 = "";
$sel_PERS = "";
if ((!isset($raggruppa_quadro_disponibilita_con_regola_2) or !strcmp((string) $raggruppa_quadro_disponibilita_con_regola_2,"")) and (!isset($raggruppa_quadro_disponibilita_con_persone) or !strcmp((string) $raggruppa_quadro_disponibilita_con_persone,""))) $sel_REG2 = " selected";
else {
if (isset($raggruppa_quadro_disponibilita_con_regola_2) and strtoupper($raggruppa_quadro_disponibilita_con_regola_2) == $SI) $sel_REG2 = " selected";
else {
if (isset($raggruppa_quadro_disponibilita_con_persone) and strtoupper($raggruppa_quadro_disponibilita_con_persone) == $SI) $sel_PERS = " selected";
else $sel_APP = " selected";
} # fine else if (strtoupper($raggruppa_quadro_disponibilita_con_regola_2) == $SI)
} # fine else if ((!isset($raggruppa_quadro_disponibilita_con_regola_2) or...
echo "".mex("Raggruppamento",$pag).":
<select name=\"raggr_quadro_disp\">
<option value=\"app\"$sel_APP>".mex("Senza raggruppare gli appartamenti",'unit.php')."</option>
<option value=\"reg2\"$sel_REG2>".mex("Raggruppando gli appartamenti con la regola di assegnazione 2",'unit.php')."</option>
<option value=\"pers\"$sel_PERS>".mex("Raggruppando gli appartamenti per numero di persone",'unit.php')."</option>
</select><br>";
if (empty($mostra_quadro_disponibilita) and empty($colore_sfondo_quadro_disponibilita)) $colore_sfondo_quadro_disponibilita = "#dddddd";
else $colore_sfondo_quadro_disponibilita = htmlspecialchars($colore_sfondo_quadro_disponibilita);
if (empty($mostra_quadro_disponibilita) and empty($colore_inizio_settimana_quadro_disponibilita)) $colore_inizio_settimana_quadro_disponibilita = "#bbbbbb";
else $colore_inizio_settimana_quadro_disponibilita = htmlspecialchars($colore_inizio_settimana_quadro_disponibilita);
if (empty($mostra_quadro_disponibilita) and empty($colore_libero_quadro_disponibilita)) $colore_libero_quadro_disponibilita = "#0cc80c";
else $colore_libero_quadro_disponibilita = htmlspecialchars($colore_libero_quadro_disponibilita);
if (empty($mostra_quadro_disponibilita) and empty($colore_occupato_quadro_disponibilita)) $colore_occupato_quadro_disponibilita = "#f8011e";
else $colore_occupato_quadro_disponibilita = htmlspecialchars($colore_occupato_quadro_disponibilita);
#if (!$mostra_quadro_disponibilita and !$apertura_font_quadro_disponibilita) $apertura_font_quadro_disponibilita = "<font size=&quot;-2&quot;>";
if (empty($mostra_quadro_disponibilita) and empty($apertura_font_quadro_disponibilita)) $apertura_font_quadro_disponibilita = "";
else $apertura_font_quadro_disponibilita = htmlspecialchars($apertura_font_quadro_disponibilita);
#if (!$mostra_quadro_disponibilita and !$chiusura_font_quadro_disponibilita) $chiusura_font_quadro_disponibilita = "</font>";
if (empty($mostra_quadro_disponibilita) and empty($chiusura_font_quadro_disponibilita)) $chiusura_font_quadro_disponibilita = "";
else $chiusura_font_quadro_disponibilita = htmlspecialchars($chiusura_font_quadro_disponibilita);
echo "".mex("Colore di sfondo della tabella",$pag).":
 <input type=\"text\" name=\"colore_sfondo_quadro_disponibilita\" value=\"$colore_sfondo_quadro_disponibilita\" size=\"10\"><br>
".mex("Colore del giorno di inizio settimana",$pag).":
 <input type=\"text\" name=\"colore_inizio_settimana_quadro_disponibilita\" value=\"$colore_inizio_settimana_quadro_disponibilita\" size=\"10\"><br>
".mex("Colore dei periodi liberi",$pag).":
 <input type=\"text\" name=\"colore_libero_quadro_disponibilita\" value=\"$colore_libero_quadro_disponibilita\" size=\"10\"><br>
".mex("Colore dei periodi occupati",$pag).":
 <input type=\"text\" name=\"colore_occupato_quadro_disponibilita\" value=\"$colore_occupato_quadro_disponibilita\" size=\"10\"><br>
".mex("Tag di apertura dei font della tabella",$pag).":
 <input type=\"text\" name=\"apertura_font_quadro_disponibilita\" value=\"$apertura_font_quadro_disponibilita\" size=\"25\"><br>
".mex("Tag di chiusura dei font della tabella",$pag).":
 <input type=\"text\" name=\"chiusura_font_quadro_disponibilita\" value=\"$chiusura_font_quadro_disponibilita\" size=\"25\"><br>";
if (empty($mostra_numero_liberi_quadro_disponibilita) or strtoupper($mostra_numero_liberi_quadro_disponibilita) == $NO) { $sel_SI = ""; $sel_NO = " selected"; }
else { $sel_NO = ""; $sel_SI = " selected"; }
echo "".mex("Mostrare il numero di appartamenti liberi?",'unit.php')."
<select name=\"mostra_numero_liberi_quadro_disponibilita\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br>";
if (empty($allinea_disponibilita_con_arrivo) or strtoupper($allinea_disponibilita_con_arrivo) == $SI or $allinea_disponibilita_con_arrivo == "SI") { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
echo mex("Allineare la disponibilità con la data di arrivo?",$pag)."
<select name=\"allinea_disponibilita_con_arrivo\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select>
</td></tr></table><br>";

if (empty($mostra_calendario_scelta_date) or strtoupper($mostra_calendario_scelta_date) != $NO) { $sel_SI = " selected"; $sel_NO = ""; }
else { $sel_NO = " selected"; $sel_SI = ""; }
echo "".mex("Mostrare i calendari per la scelta delle date?",$pag)."
<select name=\"mostra_calendario_scelta_date\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>";
if (!empty($stile_riquadro_calendario) or $modello_esistente == "SI") $val = $stile_riquadro_calendario;
else $val = "style=\"z-index: 1; visibility: hidden; position: absolute; top: 0px; left: 0px; background: #FFFFFF; padding: 2px; border: 1px solid #000000; font: bold 10px Verdana, Arial, Helvetica, sans-serif; color: #000000; text-align: center;\"";
echo "".mex("Stile riquadro calendario",$pag).":
<input type=\"text\" name=\"stile_riquadro_calendario\" size=\"75\" value=\"".htmlspecialchars($val)."\"><br>";
if (!empty($stile_tabella_calendario) or $modello_esistente == "SI") $val = $stile_tabella_calendario;
else $val = "style=\"border-collapse: collapse; margin-left: auto; margin-right: auto; cursor: default; text-align: center; padding: 2px\"";
echo "".mex("Stile tabella calendario",$pag).":
<input type=\"text\" name=\"stile_tabella_calendario\" size=\"75\" value=\"".htmlspecialchars($val)."\"><br>";
if (!empty($stile_bottoni_calendario) or $modello_esistente == "SI") $val = $stile_bottoni_calendario;
else $val = "style=\"padding: 2px 6px 2px 6px; border-color: #333333; border-width: 1px;\"";
echo "".mex("Stile bottoni interni",$pag).":
<input type=\"text\" name=\"stile_bottoni_calendario\" size=\"75\" value=\"".htmlspecialchars($val)."\"><br>";
if (!empty($stile_bottone_apertura_calendario) or $modello_esistente == "SI") $val = $stile_bottone_apertura_calendario;
else $val = "style=\"border-color: #333333; border-width: 1px;\"";
echo "".mex("Stile bottone apertura",$pag).":
<input type=\"text\" name=\"stile_bottone_apertura_calendario\" size=\"75\" value=\"".htmlspecialchars($val)."\"><br>";
/*if ($spostamento_orizzontale_calendario or $modello_esistente == "SI") $val = $spostamento_orizzontale_calendario;
else $val = "-126";
echo "".mex("Spostamento orizzontale della posizione",$pag).":
<input type=\"text\" name=\"spostamento_orizzontale_calendario\" size=\"5\" value=\"".htmlspecialchars($val)."\">px<br>";*/
if (!empty($colore_data_attiva_calendario) or $modello_esistente == "SI") $val = $colore_data_attiva_calendario;
else $val = "#d8e1e6";
echo "".mex("Colore date attive",$pag).":
<input type=\"text\" name=\"colore_data_attiva_calendario\" size=\"10\" value=\"".htmlspecialchars($val)."\"><br>";
if (!empty($colore_data_selezionata_calendario) or $modello_esistente == "SI") $val = $colore_data_selezionata_calendario;
else $val = "#eeeeee";
echo "".mex("Colore data selezionata",$pag).":
<input type=\"text\" name=\"colore_data_selezionata_calendario\" size=\"10\" value=\"".htmlspecialchars($val)."\"><br>";
echo "</td></tr></table><br>";

#if (!$apertura_tag_font and $modello_esistente != "SI") $apertura_tag_font = "<font color=&quot;#000000&quot;>";
if (empty($apertura_tag_font) and $modello_esistente != "SI") $apertura_tag_font = "";
else $apertura_tag_font = htmlspecialchars($apertura_tag_font);
#if (!$chiusura_tag_font and $modello_esistente != "SI") $chiusura_tag_font = "</font>";
if (empty($chiusura_tag_font) and $modello_esistente != "SI") $chiusura_tag_font = "";
else $chiusura_tag_font = htmlspecialchars($chiusura_tag_font);
echo "".mex("Tag html di apertura per la formattazione delle font",$pag).":
 <input type=\"text\" name=\"apertura_tag_font\" size=\"25\" value=\"$apertura_tag_font\"><br>
".mex("Tag html di chiusura per la formattazione delle font",$pag).":
 <input type=\"text\" name=\"chiusura_tag_font\" size=\"25\" value=\"$chiusura_tag_font\"><br>";
if (empty($apertura_tag_font_rosse) and $modello_esistente != "SI") $apertura_tag_font_rosse = "<b style=&quot;color: red;&quot;>";
else $apertura_tag_font_rosse = htmlspecialchars($apertura_tag_font_rosse);
if (empty($chiusura_tag_font_rosse) and $modello_esistente != "SI") $chiusura_tag_font_rosse = "</b>";
else $chiusura_tag_font_rosse = htmlspecialchars($chiusura_tag_font_rosse);
echo "".mex("Tag html di apertura per la formattazione delle font rosse",$pag).":
 <input type=\"text\" name=\"apertura_tag_font_rosse\" size=\"25\" value=\"$apertura_tag_font_rosse\"><br>
".mex("Tag html di chiusura per la formattazione delle font rosse",$pag).":
 <input type=\"text\" name=\"chiusura_tag_font_rosse\" size=\"25\" value=\"$chiusura_tag_font_rosse\"><br>";
if (empty($stile_tabella_prenotazione) and $modello_esistente != "SI") $stile_tabella_prenotazione = "border=1 cellpadding=5 cellspacing=1";
else $stile_tabella_prenotazione = htmlspecialchars($stile_tabella_prenotazione);
echo "".mex("Stile della tabella che racchiude la form di prenotazione",$pag).":
 <input type=\"text\" name=\"stile_tabella_prenotazione\" size=\"25\" value=\"$stile_tabella_prenotazione\"><br>";

if (empty($file_css_frame)) $file_css_frame = "https://";
else $file_css_frame = htmlspecialchars($file_css_frame);
echo "<br>".mex("Url del file css per la modalità frame",$pag).":
 <input type=\"text\" name=\"file_css_frame\" size=\"35\" value=\"$file_css_frame\"><br>";
if (empty($file_js_frame)) $file_js_frame = "https://";
else $file_js_frame = htmlspecialchars($file_js_frame);
echo mex("Url del file javascript per la modalità frame",$pag).":
 <input type=\"text\" name=\"file_js_frame\" size=\"35\" value=\"$file_js_frame\"> <small>(".mex("non deve contenere \"php\" e deve terminare con \".js\"",$pag).")</small><br>";
if (empty($apri_nuova_finestra_da_frame) or strtoupper($apri_nuova_finestra_da_frame) != $SI) { $sel_SI = ""; $sel_NO = " selected"; }
else { $sel_NO = ""; $sel_SI = " selected"; }
if (!empty($larghezza_finestra_da_frame)) $val_larghezza = $larghezza_finestra_da_frame;
else $val_larghezza = "700";
if (!empty($altezza_finestra_da_frame)) $val_altezza = $altezza_finestra_da_frame;
else $val_altezza = "620";
echo "".mex("Dalla modalidà frame, aprire il secondo passo in una nuova finestra?",$pag)."
<select name=\"apri_nuova_finestra_da_frame\">
<option value=\"SI\"$sel_SI>".mex("SI",$pag)."</option>
<option value=\"NO\"$sel_NO>".mex("NO",$pag)."</option>
</select><br><table><tr><td style=\"width: 25px;\"></td><td>";
echo "".mex("Geometria della nuova finestra",$pag).":
 ".mex("larghezza",$pag)." <input type=\"text\" name=\"larghezza_finestra_da_frame\" size=\"4\" value=\"$val_larghezza\">px,
 ".mex("altezza",$pag)." <input type=\"text\" name=\"altezza_finestra_da_frame\" size=\"4\" value=\"$val_altezza\">px.
</td></tr></table>";

include("./includes/templates/temi_mod_disp.php");
$num_temi = count($template_theme_name);
$tema_sel = 0;
$js_opz_tema = "";
if (empty($tema_modello) and $modello_esistente != "SI") $tema_modello = "default";
if (empty($tema_modello)) $sel = " selected";
else $sel = "";
echo "<br>".mex("Utilizza per l'aspetto della pagina",$pag).":
 <select name=\"tema_modello\" id=\"tema_sel\" onchange=\"agg_tema_sel()\">
<option value=\"\"$sel>".mex("html personalizzato",$pag)."</option>";
for ($num1 = 1 ; $num1 <= $num_temi ; $num1++) {
if ($tema_modello == $template_theme_name[$num1]) {
$sel = " selected";
$tema_sel = $num1;
} # fine if ($tema_modello == $template_theme_name[$num1])
else $sel = "";
echo "<option value=\"".$template_theme_name[$num1]."\"$sel>".mex("il tema chiamato",$pag)." '".mex($template_theme_name[$num1],$pag)."'</option>";
$js_opz_tema .= "
if (tema_sel == '".$template_theme_name[$num1]."') {
opz_tema.innerHTML = '<table><tr><td style=\"width: 20px;\"><\/td><td class=\"linhbox\">";
$colori_tema = $template_theme_colors[$num1];
$num_colori = count($colori_tema);
for ($num2 = 1 ; $num2 <= $num_colori ; $num2++) {
$colore_corr = $colori_tema[$num2]['default'];
if ($sel and !empty(${"colore_tema_".$num2})) $colore_corr = ${"colore_tema_".$num2};
$js_opz_tema .= "".mex("Colore del tema",$pag)." \"".mex($template_theme_name[$num1],$pag)."\" ".mex("per",$pag)." \"".$colori_tema[$num2]['name']."\":\\
 <input type=\"text\" name=\"colore_tema_$num2\" id=\"coltxt$num2\" size=\"8\" value=\"$colore_corr\" onchange=\"agg_colore_sel_txt($num2)\">\\
<select id=\"colsel$num2\" onchange=\"agg_colore_sel($num2)\" style=\"width: 80px; background-color: $colore_corr\"><option value=\"$colore_corr\" style=\"background-color: $colore_corr\">&nbsp;<\/option>'+options_colori+'<\/select><br>";
} # fine for $num2
$valori_tema = $template_theme_values[$num1];
$num_valori = count($valori_tema);
for ($num2 = 1 ; $num2 <= $num_valori ; $num2++) {
$valore_corr = $valori_tema[$num2]['default'];
if ($sel and $modello_esistente == "SI") $valore_corr = ${"valore_tema_".$num2};
$js_opz_tema .= "".mex("Valore del tema",$pag)." \"".mex($template_theme_name[$num1],$pag)."\" ".mex("per",$pag)." \"".$valori_tema[$num2]['name']."\":\\
 <input type=\"text\" name=\"valore_tema_$num2\" id=\"valtema$num2\" size=\"24\" value=\"".addslashes($valore_corr)."\">";
if (!empty($valori_tema[$num2]['img'])) $js_opz_tema .= " ".upload_hd_img_form("valtema$num2",$tablepersonalizza,$num2,1);
if (!empty($valori_tema[$num2]['comment'])) $js_opz_tema .= " <small>(".$valori_tema[$num2]['comment'].")</small>";
$js_opz_tema .= "<br>";
} # fine for $num2
$js_opz_tema .= "<input type=\"hidden\" name=\"n_col_tema\" value=\"$num_colori\"><input type=\"hidden\" name=\"n_val_tema\" value=\"$num_valori\"><\/td><\/tr><\/table>';
}";
} # fine for $num1
echo "</select><div id=\"opz_tema\"></div>";

$valori_tema = array();
$colori_tema = array();
if ($tema_sel) $valori_tema = $template_theme_values[$tema_sel];
$num_valori = count($valori_tema);
for ($num1 = 1 ; $num1 <= $num_valori ; $num1++) {
if (!isset(${"valore_tema_".$num1}) or !strcmp((string) ${"valore_tema_".$num1},"")) ${"valore_tema_".$num1} = $valori_tema[$num1]['default'];
$valore_sost = ${"valore_tema_".$num1};
if (!strcmp((string) $valore_sost,"")) $valore_sost = fixstr($valori_tema[$num1]['null']);
elseif (isset($valori_tema[$num1]['replace']) and strcmp((string) $valori_tema[$num1]['replace'],"")) $valore_sost = str_replace("[theme_value_$num1]",$valore_sost,$valori_tema[$num1]['replace']);
$template_theme_html_pre[$tema_sel] = str_replace("[theme_value_$num1]",$valore_sost,$template_theme_html_pre[$tema_sel]);
$template_theme_html_post[$tema_sel] = str_replace("[theme_value_$num1]",$valore_sost,$template_theme_html_post[$tema_sel]);
} # fine for $num1
if ($tema_sel) $colori_tema = $template_theme_colors[$tema_sel];
$num_colori = count($colori_tema);
for ($num1 = 1 ; $num1 <= $num_colori ; $num1++) {
if (empty(${"colore_tema_".$num1})) ${"colore_tema_".$num1} = $colori_tema[$num1]['default'];
$template_theme_html_pre[$tema_sel] = str_replace("[theme_color_$num1]",${"colore_tema_".$num1},$template_theme_html_pre[$tema_sel]);
$template_theme_html_post[$tema_sel] = str_replace("[theme_color_$num1]",${"colore_tema_".$num1},$template_theme_html_post[$tema_sel]);
} # fine for $num1
if (empty($prima_parte_html)) $prima_parte_html = htmlspecialchars($template_theme_html_pre[$tema_sel]);
else $prima_parte_html = htmlspecialchars($prima_parte_html);
if (empty($ultima_parte_html)) $ultima_parte_html = htmlspecialchars($template_theme_html_post[$tema_sel]);
else $ultima_parte_html = htmlspecialchars($ultima_parte_html);
echo "<br>".mex("Parte html del file prima della form di disponibilità",$pag).":<br>
<span id=\"html_nota\" style=\"font-size: smaller;\"> (".mex("selezionare \"html personalizzato\" nell'aspetto della pagina per modificarla",$pag).")<br></span>
<textarea name=\"prima_parte_html\" id=\"html_pre\" rows=12 cols=110>$prima_parte_html
</textarea><br>
<br>".mex("Parte html del file dopo la form di disponibilità",$pag).":<br>
<textarea name=\"ultima_parte_html\" id=\"html_post\" rows=12 cols=110>
$ultima_parte_html
</textarea><br>
".upload_hd_img_form("","","",2)."
<script type=\"text/javascript\">
<!--
options_colori = '<option value=\"#ffffff\" style=\"background-color: #ffffff;\">&nbsp;<\/option>\\
<option value=\"#0000ff\" style=\"background-color: #0000ff;\">&nbsp;<\/option>\\
<option value=\"#000099\" style=\"background-color: #000099;\">&nbsp;<\/option>\\
<option value=\"#660099\" style=\"background-color: #660099;\">&nbsp;<\/option>\\
<option value=\"#ff00cc\" style=\"background-color: #ff00cc;\">&nbsp;<\/option>\\
<option value=\"#00ff00\" style=\"background-color: #00ff00;\">&nbsp;<\/option>\\
<option value=\"#009900\" style=\"background-color: #009900;\">&nbsp;<\/option>\\
<option value=\"#333300\" style=\"background-color: #333300;\">&nbsp;<\/option>\\
<option value=\"#ff0000\" style=\"background-color: #ff0000;\">&nbsp;<\/option>\\
<option value=\"#990000\" style=\"background-color: #990000;\">&nbsp;<\/option>\\
<option value=\"#ff9900\" style=\"background-color: #ff9900;\">&nbsp;<\/option>\\
<option value=\"#ffff00\" style=\"background-color: #ffff00;\">&nbsp;<\/option>\\
<option value=\"#dddddd\" style=\"background-color: #dddddd;\">&nbsp;<\/option>\\
<option value=\"#999999\" style=\"background-color: #999999;\">&nbsp;<\/option>\\
<option value=\"#000000\" style=\"background-color: #000000;\">&nbsp;<\/option>\\
';
function agg_tema_sel () {
var tema_sel = document.getElementById('tema_sel').selectedIndex;
tema_sel = document.getElementById('tema_sel').options[tema_sel].value;
var txt_html_pre = document.getElementById('html_pre');
var txt_html_post = document.getElementById('html_post');
var txt_html_nota = document.getElementById('html_nota');
var opz_tema = document.getElementById('opz_tema');
if (tema_sel) {
txt_html_pre.disabled = 1;
txt_html_post.disabled = 1;
txt_html_nota.innerHTML = ' (".str_replace("'","\\'",mex("selezionare \"html personalizzato\" nell'aspetto della pagina per modificarla",$pag)).")<br>';
$js_opz_tema
}
else {
txt_html_pre.disabled = 0;
txt_html_post.disabled = 0;
txt_html_nota.innerHTML = '';
opz_tema.innerHTML = '';
}
}
agg_tema_sel();
-->
</script>


<input type=\"hidden\" name=\"cambia_frasi\" value=\"".htmlspecialchars(fixstr($cambia_frasi))."\">
<input type=\"hidden\" name=\"modello_esistente\" value=\"$modello_esistente\">";
if (!empty($cambia_frasi)) {
echo "<br><table style=\"background-color: #000000; margin-left: auto; margin-right: auto;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr><td><table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
<tr><td bgcolor=\"#faffff\">
<b>".mex("Frasi predefinite",$pag)."</b><br>
<table><tr><td style=\"height: 2px;\"></td></tr></table>";
if ($modello_esistente == "SI") {
for ($num_fr = 0 ; $num_fr < $num_frasi ; $num_fr++) echo "".mex($frase[$num_fr],$pag).": <input type=\"text\" name=\"".$fr_frase[$num_fr]."\" size=\"45\" value=\"".str_replace("\"","&quot;",${$fr_frase[$num_fr]})."\"><br>";
} # fine if ($modello_esistente == "SI")
else {
for ($num_fr = 0 ; $num_fr < $num_frasi ; $num_fr++) echo "".mex($frase[$num_fr],$pag).": <input type=\"text\" name=\"".$fr_frase[$num_fr]."\" size=\"45\" value=\"".str_replace("\"","&quot;",stripslashes(mex2($frase[$num_fr],$pag,$lingua_modello)))."\"><br>";
} # fine else if ($modello_esistente == "SI")
echo "</td></tr></table>
</td></tr></table>";
} # fine if (!empty($cambia_frasi))
elseif ($modello_esistente == "SI") {
for ($num_fr = 0 ; $num_fr < $num_frasi ; $num_fr++) echo "<input type=\"hidden\" name=\"".$fr_frase[$num_fr]."\" value=\"".str_replace("\"","&quot;",${$fr_frase[$num_fr]})."\">";
} # fine elseif ($modello_esistente == "SI")

echo "<br><div style=\"text-align: center;\"><input type=\"hidden\" name=\"modello_disponibilita\" value=\"SI\">
<input type=\"hidden\" name=\"form_ricaricata\" value=\"SI\">
<button class=\"chav\" id=\"modi\" type=\"submit\"><div>".mex("Crea la pagina per la disponibilità",$pag)."</div></button>
</div></div></form><br>
<hr style=\"width: 95%\"><br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"gobk\" id=\"indi\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form><br></div>";
} # fine if (!empty($form_modello_disponibilita))



else {
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!empty(${"form_".$template_name}) and (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")) {
$mostra_form_creazione = "NO";
include("./includes/templates/$modello_ext/form.php");
break;
} # fine if (${"form_".$template_name} and (!isset($template_name_show['tpl_type']) or...
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
} # fine else if (!empty($form_modello_disponibilita))




if (isset($cancella_modelli) and $cancella_modelli == "SI" and $mostra_form_creazione != "NO") {
if (@get_magic_quotes_gpc()) $perc_mod_elimina = stripslashes($perc_mod_elimina);
$mod_presente = "NO";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
$perc_mod = "$percorso_cartella_modello/mdl_disponibilita.php";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) $mod_presente = "SI";
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) $mod_presente = "SI";
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
if ($mod_presente != "SI") {
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." && $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") {
if (!empty($template_file_name['ita'])) $nome_file = $template_file_name['ita'];
else $nome_file = "ita_".$template_file_name['en'];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) $mod_presente = "SI";
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if (!empty($template_file_name[$ini_lingua])) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name['en'];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) $mod_presente = "SI";
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
} # fine if ($mod_presente != "SI")
} # fine for $num_cart
if ($mod_presente == "SI") {
$mostra_form_creazione = "NO";
if (empty($continua)) {
echo "".mex("Si è sicuri di voler <b style=\"color: red;\">cancellare</b>",$pag)." ";
if ($perc_mod_elimina) echo mex("la pagina",$pag)." \"$perc_mod_elimina\"";
else {
if (str_replace(",","",$perc_cart_mod_int) != $perc_cart_mod_int) echo mex("tutte le pagine create nelle directory",$pag)." \"$perc_cart_mod_int\"";
else echo mex("tutte le pagine create nella directory",$pag)." \"$perc_cart_mod_int\"";
} # fine else if ($perc_mod_elimina)
echo "?<br>
<table><tr><td style=\"height: 2px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cancella_modelli\" value=\"SI\">
<input type=\"hidden\" name=\"perc_mod_elimina\" value=\"$perc_mod_elimina\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<button class=\"cnrd\" type=\"submit\"><div>".mex("SI",$pag)."</div></button>
</div></form></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"gobk\" type=\"submit\"><div>".mex("NO",$pag)."</div></button>
</div></form></td></tr></table>";
} # fine if (empty($continua))
else {
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$percorso_cartella_modello = $perc_cart_mod_vett[$num_cart];
$perc_mod = "$percorso_cartella_modello/mdl_disponibilita.php";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) unlink($perc_mod);
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) unlink($perc_mod);
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") {
if ($template_file_name['ita']) $nome_file = $template_file_name['ita'];
else $nome_file = "ita_".$template_file_name['en'];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) {
unlink($perc_mod);
$perc_inc = "$percorso_cartella_modello/".str_replace(".php","_inc.php",$nome_file);
if (@is_file($perc_inc)) unlink($perc_inc);
} # fine if (@is_file($perc_mod) and...
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if (!empty($template_file_name[$ini_lingua])) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name['en'];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod) and (!$perc_mod_elimina or $perc_mod_elimina == $perc_mod)) {
unlink($perc_mod);
$perc_inc = "$percorso_cartella_modello/".str_replace(".php","_inc.php",$nome_file);
if (@is_file($perc_inc)) unlink($perc_inc);
} # fine if (@is_file($perc_mod) and...
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
} # fine for $num_cart
if (!$perc_mod_elimina) esegui_query("delete from $tablepersonalizza where idpersonalizza = 'ultime_sel_crea_modelli' and idutente = '$id_utente'");
if ($perc_mod_elimina) echo mex("Pagina cancellata",$pag).".<br>";
else echo mex("Cancellate tutte le pagine",$pag).".<br>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine else if (empty($continua))
} # fine if ($mod_presente == "SI")
} # fine if (isset($cancella_modelli) and $cancella_modelli == "SI" and $mostra_form_creazione != "NO")




if (isset($importa_modelli) and $importa_modelli == "SI" and $mostra_form_creazione != "NO") {
if (@get_magic_quotes_gpc()) {
$cartella_da = stripslashes($cartella_da);
$cartella_a = stripslashes($cartella_a);
} # fine if (@get_magic_quotes_gpc())
$errore = "NO";
if (!@is_dir($cartella_da) or !@is_dir($cartella_a)) $errore = "SI";
if ($cartella_da == $cartella_a) $errore = "SI";
$cart_da_trovata = "NO";
$cart_a_trovata = "NO";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if ($cartella_da == $perc_cart_mod_vett[$num_cart]) $cart_da_trovata = "SI";
if ($cartella_a == $perc_cart_mod_vett[$num_cart]) $cart_a_trovata = "SI";
} # fine for $num_cart
if ($cart_da_trovata != "SI" or $cart_a_trovata != "SI") $errore = "SI";
if ($errore != "SI") {
$mostra_form_creazione = "NO";
if (empty($continua)) {
echo "".mex("Si è sicuri di voler importare le pagine dalla cartella",$pag)." \"<b>$cartella_da</b>\" ".mex("alla cartella",$pag)." \"<b>$cartella_a</b>\"?<br>
(".mex("eventuali pagine già presenti nella cartella",$pag)." \"<b>$cartella_a</b>\" ".mex("verranno <b style=\"font-weight: normal; color: red;\">sovrascritte</b>",$pag).")<br>
<table><tr><td style=\"height: 2px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"importa_modelli\" value=\"SI\">
<input type=\"hidden\" name=\"cartella_da\" value=\"$cartella_da\">
<input type=\"hidden\" name=\"cartella_a\" value=\"$cartella_a\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("SI",$pag)."\">
</div></form></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("NO",$pag)."\">
</div></form></td></tr></table>";
} # fine if (empty($continua))
else {
$percorso_cartella_modello = $cartella_da;
$perc_mod = "$percorso_cartella_modello/mdl_disponibilita.php";
if (@is_file($perc_mod)) copy($perc_mod,"$cartella_a/mdl_disponibilita.php");
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod)) copy($perc_mod,"$cartella_a/$nome_file");
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") {
if ($template_file_name['ita']) $nome_file = $template_file_name['ita'];
else $nome_file = "ita_".$template_file_name['en'];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod)) {
copy($perc_mod,"$cartella_a/$nome_file");
$nome_file_inc = str_replace(".php","_inc.php",$nome_file);
$perc_inc = "$percorso_cartella_modello/$nome_file_inc";
if (@is_file($perc_inc)) copy($perc_inc,"$cartella_a/$nome_file_inc");
} # fine if (@is_file($perc_mod))
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if (!empty($template_file_name[$ini_lingua])) $nome_file = $template_file_name[$ini_lingua];
else $nome_file = $ini_lingua."_".$template_file_name["en"];
$perc_mod = "$percorso_cartella_modello/$nome_file";
if (@is_file($perc_mod)) {
copy($perc_mod,"$cartella_a/$nome_file");
$nome_file_inc = str_replace(".php","_inc.php",$nome_file);
$perc_inc = "$percorso_cartella_modello/$nome_file_inc";
if (@is_file($perc_inc)) copy($perc_inc,"$cartella_a/$nome_file_inc");
} # fine if (@is_file($perc_mod))
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
echo mex("Pagine importate",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine else if (empty($continua))
} # fine if ($errore != "SI")
} # fine if (isset($importa_modelli) and $importa_modelli == "SI" and $mostra_form_creazione != "NO")




if ($mostra_form_creazione != "NO") {

echo "<h4 id=\"h_webs\"><span>".mex("Crea pagine per il sito web",$pag).".</span></h4>";

echo "<br><div style=\"text-align: center;\">".mex("Dati comuni",$pag)."</div><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"form_passa\" value=\"1\">
<label><input type=\"radio\" name=\"fonte_dati_conn\" value=\"attuali\" checked> ".mex("Utilizza i dati attuali per la connessione al database",$pag)."</label><br>";
if (!defined('C_BACKUP_E_MODELLI_CON_NUOVI_DATI') or C_BACKUP_E_MODELLI_CON_NUOVI_DATI != "NO") {
echo "<label><input type=\"radio\" name=\"fonte_dati_conn\" value=\"nuovi\"> ".mex("Utilizza altri dati per la connessione al database",$pag)."</label>:<br>
<table><tr><td style=\"width: 25px;\"></td><td>
".mex("Tipo di database",$pag).": 
<select name=\"T_PHPR_DB_TYPE\">
<option value=\"postgresql\" selected>".mex("Postgresql",$pag)."</option>
<option value=\"mysql\">".mex("Mysql",$pag)."</option>
<option value=\"sqlite\">".mex("Sqlite",$pag)."</option>
</select><br>
".mex("Nome del database da utilizzare",$pag).": 
<input type=\"text\" name=\"T_PHPR_DB_NAME\"><br>
".mex("Nome del computer a cui collegarsi",$pag).":
<input type=\"text\" name=\"T_PHPR_DB_HOST\" value=\"localhost\"><br>
".mex("Numero della porta a cui collegarsi",$pag).": 
<input type=\"text\" name=\"T_PHPR_DB_PORT\" value=\"5432\">(".mex("Normalmete 5432 per Postgresql o 3306 per Mysql",$pag).")<br>
".mex("Nome per l'autenticazione al database",$pag).": 
<input type=\"text\" name=\"T_PHPR_DB_USER\"><br>
".mex("Parola segreta per l'autenticazione al database",$pag).": 
<input type=\"text\" name=\"T_PHPR_DB_PASS\"><br>
".mex("Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"",$pag)."?
<select name=\"T_PHPR_LOAD_EXT\">
<option value=\"SI\">".mex("Si",$pag)."</option>
<option value=\"NO\" selected>".mex("No",$pag)."</option>
</select> <small>(".mex("scegliere si se non viene caricata automaticamente da php",$pag).")</small><br>
".mex("Prefisso nel nome delle tabelle",$pag).":
<input type=\"text\" name=\"T_PHPR_TAB_PRE\" maxlength=\"8\" size=\"9\">
</td></tr></table>";
} # fine if (!defined('C_BACKUP_E_MODELLI_CON_NUOVI_DATI') or C_BACKUP_E_MODELLI_CON_NUOVI_DATI != "NO")

$ultime_selezioni = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'ultime_sel_crea_modelli' and idutente = '$id_utente'");
if (numlin_query($ultime_selezioni) == 1) {
$ultime_selezioni = risul_query($ultime_selezioni,0,'valpersonalizza');
$ultime_selezioni = explode(";;",$ultime_selezioni);
$anno_usel = $ultime_selezioni[0];
$lingua_usel = $ultime_selezioni[1];
$cartella_usel = $ultime_selezioni[2];
} # fine if (numlin_query($ultime_selezioni) == 1)

echo "<br>".mex("Anno",$pag).": <select name=\"anno_modello\">";
$anni = esegui_query("select * from $tableanni order by idanni");
$num_anni = numlin_query($anni);
if ($anno_usel < $anno) $anno_usel = $anno;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_selezione = risul_query($anni,$num1,'idanni');
if ((!$anno_usel and $anno_selezione == $anno) or $anno_selezione == $anno_usel) $selected = " selected";
else $selected = "";
echo "<option value=\"$anno_selezione\"$selected>$anno_selezione</option>";
} # fine for $num1
echo "</select><br><br>

".mex("Lingua",$pag).":
 <select name=\"lingua_modello\">
<option value=\"ita\">italiano</option>";
$mod_presenti_vett = array();
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if (@is_file($perc_cart_mod_vett[$num_cart]."/mdl_disponibilita.php")) $mod_presenti_vett[$num_cart]['mdl_disponibilita.php'] = 1;
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
include(C_DATI_PATH."/lingua.php");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
$nome_lingua = file("./includes/lang/$ini_lingua/l_n");
$nome_lingua = togli_acapo($nome_lingua[0]);
if ((!$lingua_usel and $ini_lingua == $lingua[$id_utente]) or $ini_lingua == $lingua_usel) $selected = " selected";
else $selected = "";
echo "<option value=\"$ini_lingua\"$selected>$nome_lingua</option>";
$nome_file = mex2("mdl_disponibilita",$pag,$ini_lingua).".php";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if (@is_file($perc_cart_mod_vett[$num_cart]."/$nome_file")) $mod_presenti_vett[$num_cart][$nome_file] = 1;
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dig))
closedir($lang_dir);
echo "</select><br><br>";

if ($num_perc_cart_mod_vett > 1) {
echo "".mex("Cartella",$pag).":
 <select name=\"perc_cart_mod_sel\">";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if ($perc_cart_mod_vett[$num_cart] == $cartella_usel) $selected = " selected";
else $selected = "";
echo "<option value=\"".$perc_cart_mod_vett[$num_cart]."\"$selected>".$perc_cart_mod_vett[$num_cart]."</option>";
} # fine for $num_cart
echo "</select><br><br>";
} # fine if ($num_perc_cart_mod_vett > 1)

echo "<label><input type=\"checkbox\" name=\"cambia_frasi\" value=\"SI\">".mex("Modifica le frasi predefinite",$pag)."</label><br>
<hr style=\"width: 85%\"><div style=\"text-align: center;\">
<button class=\"chav\" type=\"submit\" name=\"form_modello_disponibilita\" value=\"1\"><div>".mex("Pagina per la disponibilità",$pag)."</div></button>
</div>";

$templates_dir = opendir("./includes/templates/");
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") {
if (!empty($template_name_show[$lingua_mex])) $nome_modello_ext = $template_name_show[$lingua_mex];
else {
$messaggio = "";
if (@is_file("./includes/lang/$lingua_mex/modt_$modello_ext.php")) {
$messaggio = $template_name_show['ita'];
include("./includes/lang/$lingua_mex/modt_$modello_ext.php");
if ($messaggio == $template_name_show['ita']) $messaggio = "";
} # fine if (@is_file("./includes/lang/$lingua_mex/modt_rat.php"))
if ($messaggio) $nome_modello_ext = $messaggio;
else $nome_modello_ext = $template_name_show['en'];
} # fine else if (!empty($template_name_show[$lingua_mex]))
echo "<hr style=\"width: 85%\"><div style=\"text-align: center;\">
<button class=\"$template_class\" type=\"submit\" name=\"form_$template_name\" value=\"1\"><div>".$nome_modello_ext."</div></button>
</div>";
} # fine if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);

echo "</div></form>";


$templates_dir = opendir("./includes/templates/");
$modelli = array();
while ($modello_ext = readdir($templates_dir)) {
if ($modello_ext != "." and $modello_ext != ".." and @is_dir("./includes/templates/$modello_ext")) $modelli[$modello_ext] = 1;
} # fine while ($file = readdir($lang_dig))
closedir($templates_dir);
ksort($modelli);
reset($modelli);
foreach ($modelli as $modello_ext => $val_i) {
include("./includes/templates/$modello_ext/name.php");
if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection") {
if ($template_file_name['ita']) $nome_file = $template_file_name['ita'];
else $nome_file = "ita_".$template_file_name['en'];
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if (@is_file($perc_cart_mod_vett[$num_cart]."/$nome_file")) $mod_presenti_vett[$num_cart][$nome_file] = 1;
} # fine for $num_cart
$lang_dir = opendir("./includes/lang/");
while ($ini_lingua = readdir($lang_dir)) {
if ($ini_lingua != "." && $ini_lingua != "..") {
if (!empty($template_file_name[$ini_lingua])) $nome_file = $template_file_name[$ini_lingua];
else {
$funz_trad = "mext_$modello_ext";
if (!function_exists($funz_trad)) include("./includes/templates/$modello_ext/phrases.php");
$nome_file = $funz_trad($template_file_name["ita"],$pag,$ini_lingua);
if ($nome_file == $template_file_name['en'] or $nome_file == $template_file_name['ita']) $nome_file = $ini_lingua."_".$template_file_name['en'];
} # fine else if ($template_file_name[$ini_lingua])
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
if (@is_file($perc_cart_mod_vett[$num_cart]."/$nome_file")) $mod_presenti_vett[$num_cart][$nome_file] = 1;
} # fine for $num_cart
} # fine if ($file != "." && $file != "..")
} # fine while ($file = readdir($lang_dir))
closedir($lang_dir);
} # fine if (!isset($template_name_show['tpl_type']) or $template_name_show['tpl_type'] != "interconnection")
} # fine foreach ($modelli as $modello_ext => $val_i)

if ($num_cart > 1 and !empty($mod_presenti_vett)) {
echo "<hr style=\"width: 95%\"><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"importa_modelli\" value=\"SI\">
".mex("Importa le pagine dalla cartella",$pag)."
 <select name=\"cartella_da\">
<option value=\"\" selected>----</option>";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
echo "<option value=\"".$perc_cart_mod_vett[$num_cart]."\">".$perc_cart_mod_vett[$num_cart]."</option>";
} # fine for $num_cart
echo "</select> ".mex("alla cartella",$pag)."
 <select name=\"cartella_a\">
<option value=\"\" selected>----</option>";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
echo "<option value=\"".$perc_cart_mod_vett[$num_cart]."\">".$perc_cart_mod_vett[$num_cart]."</option>";
} # fine for $num_cart
echo "</select>
<button class=\"xdoc\" type=\"submit\"><div>".mex("Importa",$pag)."</div></button>
</div></form></div>";
} # fine if ($num_cart > 1 and !empty($mod_presenti_vett))

if (!empty($mod_presenti_vett)) {
echo "<hr style=\"width: 95%\"><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"crea_modelli.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cancella_modelli\" value=\"SI\">
".mex("Cancella",$pag)." <select name=\"perc_mod_elimina\">
<option value=\"\">".mex("tutte le pagine create",$pag)."</option>";
for ($num_cart = 0 ; $num_cart < $num_perc_cart_mod_vett ; $num_cart++) {
$mod_presenti_subvett = $mod_presenti_vett[$num_cart];
if (@is_array($mod_presenti_subvett)) {
reset($mod_presenti_subvett);
foreach ($mod_presenti_subvett as $nome_file => $val) {
$percorso_opt = $perc_cart_mod_vett[$num_cart]."/$nome_file";
echo "<option value=\"$percorso_opt\">$percorso_opt</option>";
} # fine foreach ($mod_presenti_subvett as $nome_file => $val)
} # fine if (@is_array($mod_presenti_subvett))
} # fine for $num_cart
echo "</select>
<button class=\"canc\" type=\"submit\"><div>".mex("Cancella",$pag)."</div></button>
</div></form></div>";
} # fine if (!empty($mod_presenti_vett))


echo "<hr style=\"width: 95%\"><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"personalizza.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form><br></div>";

} # fine if ($mostra_form_creazione != "NO")



} # fine if ($priv_crea_pagineweb == "s" and $mostra_form_creazione != "NO")

if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if (($priv_crea_interconnessioni == "s" or $priv_crea_pagineweb == "s") and $anno_utente_attivato == "SI")



?>