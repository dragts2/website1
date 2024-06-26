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

$pag = "visualizza_tabelle.php";
$titolo = "HotelDruid: Visualizza Tabelle";

$var_pag = array();
$var_pag[0] = 'tipo_tabella';
$var_pag[1] = 'sel_tab_prenota';
$var_pag[2] = 'opz_cerc_pren';
$var_pag[3] = 'subtotale_selezionate';
$var_pag[4] = 'num_cambia_pren';
$var_pag[5] = 'cerca_id_passati';
$var_pag[6] = 'senza_colori';
$var_pag[7] = 'mos_tut_dat';
$var_pag[8] = 'ordine_prenota';
$var_pag[9] = 'id_utente_vedi';
$var_pag[10] = 'cerca_prenota';
$var_pag[11] = 'cerca_ini';
$var_pag[12] = 'cerca_fine';
$var_pag[13] = 'lista_prenota';
$var_pag[14] = 'mos_tutti_per';
$var_pag[15] = 'form_tabella';
$var_pag[16] = 'mos_per_sing';
$var_pag[17] = 'tariffe_sel';
$var_pag[18] = 'solo_sel';
$var_pag[19] = 'lista_periodi';
$var_pag[20] = 'lista_sett_in_per';
$var_pag[21] = 'ins_form_tabella';
$var_pag[22] = 'pag_pren_corr';
$var_pag[23] = 'pag_pren_prec';
$var_pag[24] = 'pag_pren_succ';
$var_pag[25] = 'modifica_app_vicini';
$var_pag[26] = 'mostra_griglia_app';
$var_pag[27] = 'n_app_vic_passa';
$var_pag[28] = 'cancella_clienti';
$var_pag[29] = 'mostra_form_agg_per';
$var_pag[30] = 'origine';
$var_pag[31] = 'aggiungi';
$var_pag[32] = 'continua';
$var_pag[33] = 'mese_fine';
$var_pag[34] = 'importa_prezzi';
$var_pag[35] = 'tipo_importa';
$var_pag[36] = 'n_tar_passa';
$var_pag[37] = 'n_per_passa';
$var_pag[38] = 'somma_pagata';
$var_pag[39] = 'pcanc';
$var_pag[40] = 'cancella_cc_passate';
$var_pag[41] = 'mese';
$var_pag[42] = 'torna_indietro';
$var_pag[43] = 'cognome_cerca';
$var_pag[44] = 'origine_vecchia';
$var_pag[45] = 'indietro';
$var_pag[46] = 'pagina_clienti';
$var_pag[47] = 'canc_doc';
$var_pag[48] = 'num_contr';
$var_pag[49] = 'anno_doc_canc';
$var_pag[50] = 'num_doc_canc';
$var_pag[51] = 'cancella_anno';
$var_pag[52] = 'mostra_disp';
$var_pag[53] = 'mostra_pmm';
$var_pag[54] = 'raggruppa_date';
$var_pag[55] = 'num_tariffe_mostra';
$var_pag[56] = 'fine_form';
$var_pag[57] = 'show_bar';
$var_pag[58] = 'crea_cassa';
$var_pag[59] = 'n_nome_cassa';
$var_pag[60] = 'canc_cassa';
$var_pag[61] = 'c_id_cassa';
$var_pag[62] = 'crea_app';
$var_pag[63] = 'n_app';
$var_pag[64] = 'crea_letti';
$var_pag[65] = 'n_letti';
$var_pag[66] = 'idregole';
$var_pag[67] = 'cancella';
$var_pag[68] = 'mese_sel1';
$var_pag[69] = 'mese_sel2';
$var_pag[70] = 'mese_sel3';
$var_pag[71] = 'mese_sel4';
$var_pag[72] = 'mese_sel5';
$var_pag[73] = 'mese_sel6';
$var_pag[74] = 'mese_sel7';
$var_pag[75] = 'mese_sel8';
$var_pag[76] = 'mese_sel9';
$var_pag[77] = 'mese_sel10';
$var_pag[78] = 'mese_sel11';
$var_pag[79] = 'mese_sel12';
$var_pag[80] = 'mese_ini_ins';
$var_pag[81] = 'mese_fine_ins';
$var_pag[82] = 'gio_ini_ins';
$var_pag[83] = 'gio_fine_ins';
$var_pag[84] = 'prezzo_comm_sel';
$var_pag[85] = 'prezzo_tasse_sel';
$var_pag[86] = 'tariffa_per_app';
$var_pag[87] = 'anni_sel_passa';
$var_pag[88] = 'manda_form_beni';
$var_pag[89] = 'elimina_bene';
$var_pag[90] = 'idinv';
$var_pag[91] = 'n_nome_bene';
$var_pag[92] = 'n_codice_bene';
$var_pag[93] = 'n_descrizione_bene';
$var_pag[94] = 'n_utente_ins_bene';
$var_pag[95] = 'aggiungi_bene';
$var_pag[96] = 'cambia_ut_vedi';
$var_pag[97] = 'idntariffe';
$var_pag[98] = 'd_nome_costo_agg';
$var_pag[99] = 'cambia_pagato';
$var_pag[100] = 'numeri_cambia';
$var_pag[101] = 'torna_alla_tab';
$var_pag[102] = 'MAX_FILE_SIZE';
$var_pag[103] = 'upload_doc';
$var_pag[104] = 'anno_doc_upload';
$var_pag[105] = 'suff_upload';
$var_pag[106] = 'idc_passa';
$var_pag[107] = 'idcosti';
$var_pag[108] = 'manda_form_mag';
$var_pag[109] = 'n_nome_mag';
$var_pag[110] = 'n_descrizione_mag';
$var_pag[111] = 'n_utente_ins_mag';
$var_pag[112] = 'aggiungi_mag';
$var_pag[113] = 'elimina_mag';
$var_pag[114] = 'idmag';
$var_pag[115] = 'modifica_tab_beni_inv';
$var_pag[116] = 'modifica_beni_inv';
$var_pag[117] = 'num_beni_inv_passa';
$n_var_pag = 118;
$num2 = 0;
if (isset($_POST['num_cambia_pren'])) $num2 = (int) $_POST['num_cambia_pren'];
elseif (isset($_GET['num_cambia_pren'])) $num2 = (int) $_GET['num_cambia_pren'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) $var_pag[$n_var_pag++] = "cambia$num1";
$num2 = 0;
if (isset($_POST['n_tar_passa'])) $num2 = (int) $_POST['n_tar_passa'];
elseif (isset($_GET['n_tar_passa'])) $num2 = (int) $_GET['n_tar_passa'];
$num4 = 0;
if (isset($_POST['n_per_passa'])) $num4 = (int) $_POST['n_per_passa'];
elseif (isset($_GET['n_per_passa'])) $num4 = (int) $_GET['n_per_passa'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "tariffa_sel$num1";
$var_pag[$n_var_pag++] = "numtariffa$num1";
for ($num3 = 1 ; $num3 <= $num4 ; $num3++) {
if (isset($_POST["per$num3"."tar$num1"]) or isset($_GET["per$num3"."tar$num1"])) {
$var_pag[$n_var_pag++] = "per$num3"."tar$num1";
if (isset($_POST["per$num3"."tar$num1"."p"]) or isset($_GET["per$num3"."tar$num1"."p"])) $var_pag[$n_var_pag++] = "per$num3"."tar$num1"."p";
if (isset($_POST["mod_per$num3"."tar$num1"]) or isset($_GET["mod_per$num3"."tar$num1"])) $var_pag[$n_var_pag++] = "mod_per$num3"."tar$num1";
} # fine if (isset($_POST["per$num3"."tar$num1"]) or isset($_GET["per$num3"."tar$num1"]))
if (isset($_POST["per$num3"."tar$num1"."pmin"]) or isset($_GET["per$num3"."tar$num1"."pmin"])) {
$var_pag[$n_var_pag++] = "per$num3"."tar$num1"."pmin";
if (isset($_POST["mod_per$num3"."tar$num1"."pmin"]) or isset($_GET["mod_per$num3"."tar$num1"."pmin"])) $var_pag[$n_var_pag++] = "mod_per$num3"."tar$num1"."pmin";
} # fine if (isset($_POST["per$num3"."tar$num1"."pmin"]) or isset($_GET["per$num3"."tar$num1"."pmin"]))
} # fine for $num3
} # fine for $num1
$num2 = 0;
if (isset($_POST['n_app_vic_passa'])) $num2 = (int) $_POST['n_app_vic_passa'];
elseif (isset($_GET['n_app_vic_passa'])) $num2 = (int) $_GET['n_app_vic_passa'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "idappartamenti$num1";
for ($num3 = 0 ; $num3 < $num2 ; $num3++) {
$var_pag[$n_var_pag++] = "v$num1"."_$num3";
} # fine for $num3
} # fine for $num1
$num2 = 0;
if (isset($_POST['anni_sel_passa'])) $num2 = $_POST['anni_sel_passa'];
elseif (isset($_GET['anni_sel_passa'])) $num2 = $_GET['anni_sel_passa'];
if ($num2) {
$num2 = explode("-",$num2);
if (isset($num2[1]) and $num2[0] > 2000 and $num2[0] < 9999 and $num2[1] > 2000 and $num2[1] < 9999) {
for ($num1 = $num2[0] ; $num1 <= $num2[1] ; $num1++) $var_pag[$n_var_pag++] = "anno_sel$num1";
} # fine if (isset($num2[1]) and...
} # fine if ($num2)
$num2 = 0;
if (isset($_POST['num_contr'])) $num2 = (int) $_POST['num_contr'];
elseif (isset($_GET['num_contr'])) $num2 = (int) $_GET['num_contr'];
if ($num2) $var_pag[$n_var_pag++] = "pagina_prenota$num2";
$num2 = 0;
if (isset($_POST['numeri_cambia'])) $num2 = $_POST['numeri_cambia'];
elseif (isset($_GET['numeri_cambia'])) $num2 = $_GET['numeri_cambia'];
if ($num2) {
$num2 = explode("#",$num2);
$num3 = count($num2);
for ($num1 = 0 ; $num1 < $num3 ; $num1++) {
$num4 = (int) $num2[$num1];
$var_pag[$n_var_pag++] = "d_id_clienti$num4";
$var_pag[$n_var_pag++] = "d_costo_tot$num4";
$var_pag[$n_var_pag++] = "d_caparra$num4";
$var_pag[$n_var_pag++] = "d_pagato$num4";
$var_pag[$n_var_pag++] = "d_pagato_dopo$num4";
$var_pag[$n_var_pag++] = "valuta_pagamento$num4";
$var_pag[$n_var_pag++] = "metodo_pagamento$num4";
$var_pag[$n_var_pag++] = "id_pagamento$num4";
$var_pag[$n_var_pag++] = "giorno_pagamento$num4";
$var_pag[$n_var_pag++] = "mese_pagamento$num4";
$var_pag[$n_var_pag++] = "anno_pagamento$num4";
$var_pag[$n_var_pag++] = "note_pagamento$num4";
} # fine for $num1
} # fine if ($num2)
if (isset($_REQUEST['idc_passa'])) $num2 = (int) $_REQUEST['idc_passa'];
else $num2 = 0;
if ($num2) {
$var_pag[$n_var_pag++] = "pag_entrate$num2";
$var_pag[$n_var_pag++] = "pag_uscite$num2";
} # fine if ($num2)
if (isset($_REQUEST['num_beni_inv_passa'])) $num2 = $_REQUEST['num_beni_inv_passa'];
else $num2 = 0;
if ($num2) {
$num2 = explode(",",$num2);
$num3 = count($num2);
for ($num1 = 1 ; $num1 < $num3 ; $num1++) {
$num4 = (int) $num2[$num1];
$var_pag[$n_var_pag++] = "nome_bene$num4";
$var_pag[$n_var_pag++] = "codice_bene$num4";
$var_pag[$n_var_pag++] = "descrizione_bene$num4";
$var_pag[$n_var_pag++] = "utente_bene$num4";
} # fine for $num1
} # fine if ($num2)

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
include("./includes/funzioni_testo.php");
$tipo_tabella = fixstr($tipo_tabella);
if ($tipo_tabella == "appartamenti" or $tipo_tabella == "periodi") $base_js = 1;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableprenotacanc = $PHPR_TAB_PRE."prenotacanc".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tablecosti = $PHPR_TAB_PRE."costi".$anno;
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tabledescrizioni = $PHPR_TAB_PRE."descrizioni";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tableinterconnessioni  = $PHPR_TAB_PRE."interconnessioni";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$tablebeniinventario = $PHPR_TAB_PRE."beniinventario";
$tablerelinventario = $PHPR_TAB_PRE."relinventario";
$tablemagazzini = $PHPR_TAB_PRE."magazzini";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tablecasse = $PHPR_TAB_PRE."casse";
$tablerelclienti = $PHPR_TAB_PRE."relclienti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {
$tariffe_consentite_vett = array();
$costi_agg_consentiti_vett = array();
$contratti_consentiti_vett = array();

if ($id_utente != 1) {
$prendi_gruppi = "";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
$priv_mod_doc = substr($priv_mod_pers,2,1);
$priv_mod_doc_html = substr($priv_mod_pers,9,1);
$priv_crea_pagineweb = substr($priv_mod_pers,8,1);
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_prenotazioni = substr($priv_vedi_tab,1,1);
if ($priv_vedi_tab_prenotazioni == "g" or $priv_vedi_tab_prenotazioni == "s") $prendi_gruppi = "SI";
$priv_vedi_tab_costi = substr($priv_vedi_tab,2,1);
if ($priv_vedi_tab_costi == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_periodi = substr($priv_vedi_tab,3,1);
if ($priv_vedi_tab_periodi == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_regole = substr($priv_vedi_tab,4,1);
$priv_vedi_tab_appartamenti = substr($priv_vedi_tab,5,1);
if ($priv_vedi_tab_appartamenti == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_stat = substr($priv_vedi_tab,6,1);
if ($priv_vedi_tab_stat != "s" and $priv_vedi_tab_stat != "n") $prendi_gruppi = "SI";
$priv_vedi_tab_doc = substr($priv_vedi_tab,7,1);
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
$modifica_clienti = "NO";
if (substr($priv_ins_clienti,1,1) == "s") $modifica_clienti = "SI";
if (substr($priv_ins_clienti,1,1) == "p") $modifica_clienti = "PROPRI";
if (substr($priv_ins_clienti,1,1) == "g") { $modifica_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$priv_vedi_telefoni = substr($priv_ins_clienti,3,1);
$priv_vedi_indirizzo = substr($priv_ins_clienti,4,1);
$casse_consentite = risul_query($privilegi_globali_utente,0,'casse_consentite');
$attiva_casse_consentite = substr($casse_consentite,0,1);
if ($attiva_casse_consentite == "s") {
$casse_consentite = explode(",",substr($casse_consentite,2));
unset($casse_consentite_vett);
for ($num1 = 0 ; $num1 < count($casse_consentite) ; $num1++) if ($casse_consentite[$num1]) $casse_consentite_vett[$casse_consentite[$num1]] = "SI";
} # fine if ($attiva_casse_consentite == "s")
$cassa_pagamenti = (string) risul_query($privilegi_annuali_utente,0,'cassa_pagamenti');
$priv_inventario = risul_query($privilegi_globali_utente,0,'priv_inventario');
$priv_vedi_beni_inv = substr($priv_inventario,0,1);
$priv_ins_beni_inv = substr($priv_inventario,1,1);
$priv_vedi_inv_mag = substr($priv_inventario,2,1);
$priv_ins_mag = substr($priv_inventario,3,1);
$priv_vedi_inv_app = substr($priv_inventario,6,1);
$priv_ins_beni_in_app = substr($priv_inventario,7,1);
if ($priv_vedi_beni_inv == "g" or $priv_vedi_inv_mag == "g" or $priv_vedi_inv_app == "g" or $priv_ins_beni_in_app == "g") $prendi_gruppi = "SI";
$priv_ins_prenota = risul_query($privilegi_annuali_utente,0,'priv_ins_prenota');
$priv_ins_nuove_prenota = substr($priv_ins_prenota,0,1);
$priv_ins_assegnazione_app = substr($priv_ins_prenota,1,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_assegnazione_app = substr($priv_mod_prenota,2,1);
$priv_mod_pagato = substr($priv_mod_prenota,10,1);
$priv_mod_prenota_iniziate = substr($priv_mod_prenota,11,1);
$priv_mod_prenota_ore = substr($priv_mod_prenota,12,3);
$priv_vedi_commento = substr($priv_mod_prenota,25,1);
$priv_vedi_commenti_pers = substr($priv_mod_prenota,26,1);
$priv_ins_costi = risul_query($privilegi_annuali_utente,0,'priv_ins_costi');
$priv_ins_spese = substr($priv_ins_costi,0,1);
$priv_ins_entrate = substr($priv_ins_costi,1,1);
$regole1_consentite = risul_query($privilegi_annuali_utente,0,'regole1_consentite');
$attiva_regole1_consentite = substr($regole1_consentite,0,1);
$applica_regole1 = substr($regole1_consentite,1,1);
if ($attiva_regole1_consentite != "n" or $applica_regole1 == "n") $regole1_consentite = explode("#@^",substr($regole1_consentite,3));
$tariffe_consentite = risul_query($privilegi_annuali_utente,0,'tariffe_consentite');
$attiva_tariffe_consentite = substr($tariffe_consentite,0,1);
if ($attiva_tariffe_consentite == "s") {
$tariffe_consentite = explode(",",substr($tariffe_consentite,2));
for ($num1 = 0 ; $num1 < count($tariffe_consentite) ; $num1++) if ($tariffe_consentite[$num1]) $tariffe_consentite_vett[$tariffe_consentite[$num1]] = "SI";
} # fine if ($attiva_tariffe_consentite == "s")
$costi_agg_consentiti = risul_query($privilegi_annuali_utente,0,'costi_agg_consentiti');
$attiva_costi_agg_consentiti = substr($costi_agg_consentiti,0,1);
if ($attiva_costi_agg_consentiti == "s") {
$costi_agg_consentiti = explode(",",substr($costi_agg_consentiti,2));
for ($num1 = 0 ; $num1 < count($costi_agg_consentiti) ; $num1++) if ($costi_agg_consentiti[$num1]) $costi_agg_consentiti_vett[$costi_agg_consentiti[$num1]] = "SI";
} # fine if ($attiva_costi_agg_consentiti == "s")
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
$priv_cancella_contratti = substr($contratti_consentiti,1,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",$contratti_consentiti);
for ($num1 = 1 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
$priv_ins_tariffe = risul_query($privilegi_annuali_utente,0,'priv_ins_tariffe');
$priv_mod_tariffe = substr($priv_ins_tariffe,0,1);
$priv_ins_costi_agg = substr($priv_ins_tariffe,1,1);
$priv_mod_costo_agg = substr($priv_ins_tariffe,2,1);
$priv_canc_costi_agg = substr($priv_ins_tariffe,3,1);
$priv_mod_reg1 = substr($priv_ins_tariffe,4,1);
$priv_mod_reg2 = substr($priv_ins_tariffe,5,1);
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)

unset($attiva_regole1_consentite_gr);
unset($regole1_consentite_gr);
unset($attiva_tariffe_consentite_gr);
unset($tariffe_consentite_vett_gr);
unset($priv_ins_nuove_prenota_gr);
unset($priv_ins_assegnazione_app_gr);
unset($priv_mod_prenotazioni_gr);
unset($priv_mod_assegnazione_app_gr);
unset($attiva_costi_agg_consentiti_gr);
unset($costi_agg_consentiti_vett_gr);
$priv_app_gruppi = "NO";
if ($priv_vedi_tab_appartamenti == "g" or $priv_vedi_inv_app == "g" or $priv_ins_beni_in_app == "g" or $priv_vedi_tab_stat == "r" or $priv_vedi_tab_stat == "g" or $priv_vedi_tab_periodi == "g") $priv_app_gruppi = "SI";
if ($priv_app_gruppi == "SI") {
$attiva_regole1_consentite_gr[$id_utente] = $attiva_regole1_consentite;
$regole1_consentite_gr[$id_utente] = $regole1_consentite;
$attiva_tariffe_consentite_gr[$id_utente] = $attiva_tariffe_consentite;
$tariffe_consentite_vett_gr[$id_utente] = $tariffe_consentite_vett;
$priv_ins_nuove_prenota_gr[$id_utente] = $priv_ins_nuove_prenota;
$priv_ins_assegnazione_app_gr[$id_utente] = $priv_ins_assegnazione_app;
$priv_mod_prenotazioni_gr[$id_utente] = $priv_mod_prenotazioni;
$priv_mod_assegnazione_app_gr[$id_utente] = $priv_mod_assegnazione_app;
} # fine if ($priv_app_gruppi == "SI")
unset($utenti_gruppi);
$utenti_gruppi[$id_utente] = 1;
if ($prendi_gruppi == "SI") {
$attiva_costi_agg_consentiti_gr = $attiva_costi_agg_consentiti;
$costi_agg_consentiti_vett_gr = $costi_agg_consentiti_vett;
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) {
$idutente_gruppo = risul_query($utenti_gruppo,$num2,'idutente');
if ($idutente_gruppo != $id_utente and empty($utenti_gruppi[$idutente_gruppo])) {
$utenti_gruppi[$idutente_gruppo] = 1;
unset($priv_anno_ut_gr);

if ($priv_app_gruppi == "SI") {
$priv_anno_ut_gr = esegui_query("select * from $tableprivilegi where idutente = '$idutente_gruppo' and anno = '$anno'");
if (numlin_query($priv_anno_ut_gr) == 1) {
$regole1_consentite_gr[$idutente_gruppo] = risul_query($priv_anno_ut_gr,0,'regole1_consentite');
$attiva_regole1_consentite_gr[$idutente_gruppo] = substr($regole1_consentite_gr[$idutente_gruppo],0,1);
if ($attiva_regole1_consentite_gr[$idutente_gruppo] != "n") $regole1_consentite_gr[$idutente_gruppo] = explode("#@^",substr($regole1_consentite_gr[$idutente_gruppo],3));
$tariffe_consentite_tmp = risul_query($priv_anno_ut_gr,0,'tariffe_consentite');
$attiva_tariffe_consentite_gr[$idutente_gruppo] = substr($tariffe_consentite_tmp,0,1);
if ($attiva_tariffe_consentite_gr[$idutente_gruppo] == "s") {
$tariffe_consentite_tmp = explode(",",substr($tariffe_consentite_tmp,2));
$tariffe_consentite_vett_gr[$idutente_gruppo] = "";
for ($num3 = 0 ; $num3 < count($tariffe_consentite_tmp) ; $num3++) if ($tariffe_consentite_tmp[$num3]) $tariffe_consentite_vett_gr[$idutente_gruppo][$tariffe_consentite_tmp[$num3]] = "SI";
} # fine if ($attiva_tariffe_consentite_gr[$idutente_gruppo] == "s")
$priv_ins_prenota_tmp = risul_query($priv_anno_ut_gr,0,'priv_ins_prenota');
$priv_ins_nuove_prenota_gr[$idutente_gruppo] = substr($priv_ins_prenota_tmp,0,1);
$priv_ins_assegnazione_app_gr[$idutente_gruppo] = substr($priv_ins_prenota_tmp,1,1);
$priv_mod_prenota_tmp = risul_query($priv_anno_ut_gr,0,'priv_mod_prenota');
$priv_mod_prenotazioni_gr[$idutente_gruppo] = substr($priv_mod_prenota_tmp,0,1);
$priv_mod_assegnazione_app_gr[$idutente_gruppo] = substr($priv_mod_prenota_tmp,2,1);
} # fine if (numlin_query($priv_anno_ut_gr) == 1)
else {
$priv_ins_nuove_prenota_gr[$idutente_gruppo] = "n";
$priv_mod_prenotazioni_gr[$idutente_gruppo] = "n";
} # fine else if (numlin_query($priv_anno_ut_gr) == 1)
} # fine if ($priv_app_gruppi == "SI")

if ($priv_vedi_tab_periodi == "g") {
if (!$priv_anno_ut_gr) $priv_anno_ut_gr = esegui_query("select * from $tableprivilegi where idutente = '$idutente_gruppo' and anno = '$anno'");
if (numlin_query($priv_anno_ut_gr) == 1) {
$costi_agg_consentiti_tmp = risul_query($priv_anno_ut_gr,0,'costi_agg_consentiti');
$attiva_costi_agg_consentiti_tmp = substr($costi_agg_consentiti_tmp,0,1);
if ($attiva_costi_agg_consentiti_tmp == "n") $attiva_costi_agg_consentiti_gr = "n";
if ($attiva_costi_agg_consentiti_gr == "s") {
$costi_agg_consentiti_tmp = explode(",",substr($costi_agg_consentiti_tmp,2));
for ($num3 = 0 ; $num3 < count($costi_agg_consentiti_tmp) ; $num3++) if ($costi_agg_consentiti_tmp[$num3]) $costi_agg_consentiti_vett_gr[$costi_agg_consentiti_tmp[$num3]] = "SI";
} # fine if ($attiva_costi_agg_consentiti_gr == "s")
} # fine if (numlin_query($priv_anno_ut_gr) == 1)
} # fine if ($priv_vedi_tab_periodi == "g")

} # fine if ($idutente_gruppo != $id_utente and empty($utenti_gruppi[$idutente_gruppo]))
} # fine for $num2
} # fine for $num1
} # fine if ($prendi_gruppi == "SI")


} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$priv_mod_doc = "s";
$priv_mod_doc_html = "s";
$priv_crea_pagineweb = "s";
$priv_vedi_tab_prenotazioni = "s";
$priv_vedi_tab_costi = "s";
$priv_vedi_tab_periodi = "s";
$priv_vedi_tab_regole = "s";
$priv_vedi_tab_appartamenti = "s";
$priv_vedi_tab_doc = "s";
$priv_vedi_tab_stat = "s";
$modifica_clienti = "SI";
$vedi_clienti = "SI";
$priv_vedi_telefoni = "s";
$priv_vedi_indirizzo = "s";
$attiva_casse_consentite = "n";
$cassa_pagamenti = "";
$priv_vedi_beni_inv = "s";
$priv_ins_beni_inv = "s";
$priv_vedi_inv_mag = "s";
$priv_ins_mag = "s";
$priv_vedi_inv_app = "s";
$priv_ins_beni_in_app = "s";
$priv_ins_nuove_prenota = "s";
$priv_ins_assegnazione_app = "s";
$priv_mod_prenotazioni = "s";
$priv_mod_assegnazione_app = "s";
$priv_mod_pagato = "s";
$priv_mod_prenota_iniziate = "s";
$priv_mod_prenota_ore = "000";
$priv_vedi_commento = "s";
$priv_vedi_commenti_pers = "s";
$priv_ins_spese = "s";
$priv_ins_entrate = "s";
$attiva_regole1_consentite = "n";
$attiva_tariffe_consentite = "n";
$attiva_costi_agg_consentiti = "n";
$attiva_contratti_consentiti = "n";
$priv_cancella_contratti = "s";
$priv_mod_tariffe = "s";
$priv_ins_costi_agg = "s";
$priv_mod_costo_agg = "s";
$priv_canc_costi_agg = "s";
$priv_mod_reg1 = "s";
$priv_mod_reg2 = "s";
$utenti_gruppi = "";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI") {

if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$inserimento_nuovi_clienti = "NO";
$modifica_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_ins_beni_inv = "n";
$priv_ins_mag = "n";
$priv_ins_beni_in_app = "n";
$priv_mod_assegnazione_app = "n";
$priv_mod_pagato = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_mod_tariffe = "n";
$priv_ins_costi_agg = "n";
$priv_mod_costo_agg = "n";
$priv_canc_costi_agg = "n";
$priv_mod_reg1 = "n";
$priv_mod_reg2 = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


$titolo = "HotelDruid: ".mex("Visualizza Tabelle",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();


if ($tipo_tabella == "prenotazioni" and $priv_vedi_tab_prenotazioni != "n") {

if (defined("C_MASSIMO_NUM_STORIA_SOLDI") and C_MASSIMO_NUM_STORIA_SOLDI != 0) {
$num_soldi_esistenti = esegui_query("select idsoldi from $tablesoldi");
$num_soldi_esistenti = numlin_query($num_soldi_esistenti);
if ($num_soldi_esistenti >= (C_MASSIMO_NUM_STORIA_SOLDI + 1)) $priv_mod_pagato = "n";
} # fine if (defined("C_MASSIMO_NUM_STORIA_SOLDI") and C_MASSIMO_NUM_STORIA_SOLDI != 0)

if (!isset($ordine_prenota)) $ordine_prenota = "iddatainizio";
if (substr($ordine_prenota,-10) == ",idprenota") $ordine_prenota = substr($ordine_prenota,0,-10);
if ($ordine_prenota != "iddatafine" and $ordine_prenota != "idprenota" and $ordine_prenota != "origine" and $ordine_prenota != "tariffa" and $ordine_prenota != "datainserimento" and $ordine_prenota != "idappartamenti") $ordine_prenota = "iddatainizio";
if ($ordine_prenota != "idprenota") $ordine_prenota .= ",idprenota";
if ($priv_mod_prenota_iniziate != "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);
if (!isset($opz_cerc_pren) or ($opz_cerc_pren != "arr" and $opz_cerc_pren != "part" and $opz_cerc_pren != "canc")) $opz_cerc_pren = "";
if (!isset($sel_tab_prenota) or ($sel_tab_prenota != "tutte" and $sel_tab_prenota != "correnti" and $sel_tab_prenota != "future" and $sel_tab_prenota != "partcorr")) $sel_tab_prenota = "";
$pag_pren_corr = htmlspecialchars(fixstr($pag_pren_corr));
$pag_pren_prec = htmlspecialchars(fixstr($pag_pren_prec));
$pag_pren_succ = htmlspecialchars(fixstr($pag_pren_succ));
if (!empty($id_utente_vedi) and controlla_num_pos($id_utente_vedi) != "SI") $id_utente_vedi = $id_utente;
if (!isset($cerca_prenota) or ($cerca_prenota != "SI" and $cerca_prenota != "tutte")) $cerca_prenota = "";
if (preg_replace("/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/","",fixstr($cerca_ini))) $cerca_ini = "";
if (preg_replace("/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/","",fixstr($cerca_fine))) $cerca_fine = "";
if (!empty($senza_colori)) $senza_colori = "SI";
else $senza_colori = "";
$mos_tut_dat = htmlspecialchars(fixstr($mos_tut_dat));
$lista_prenota = htmlspecialchars(fixstr($lista_prenota));


if (!empty($cambia_pagato)) {
$errore = 0;
if (empty($somma_pagata) or ($somma_pagata != "tutto" and $somma_pagata != "caparra" and $somma_pagata != "niente" and $somma_pagata != "conferma")) $errore = 1;
if (!$errore) {

if (!isset($continua) or $continua != "SI") {
$mostra_tab_principale = "NO";
$metodi_pagamento_int = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento_int = (string) risul_query($metodi_pagamento_int,0,'valpersonalizza');
$metodi_pagamento = explode(",",$metodi_pagamento_int);
$altre_valute = altre_valute();
echo mex("Verranno effettuati i seguenti cambiamenti",$pag).": <br>
<br><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>";
$differenza_tot = 0;
$nascosti_in_form = "";
$numeri_cambia = "";
if (controlla_num_pos($num_cambia_pren) == "NO") $num_cambia_pren = 0;
for ($num1 = 1 ; $num1 <= $num_cambia_pren ; $num1++) {
$numero = fixset(${"cambia".$num1});
if ($numero and controlla_num_pos($numero) != "NO") {
$prenotazione = esegui_query("select idprenota,idclienti,iddatainizio,caparra,pagato,tariffa_tot,conferma,metodo_pagamento,valuta,utente_inserimento,datainserimento from $tableprenota where idprenota = '$numero' ");
if (numlin_query($prenotazione) == 1) {
$continua = "SI";
if ($priv_mod_prenotazioni == "n") $continua = "NO";
if ($priv_mod_prenotazioni == "p" or $priv_mod_prenotazioni == "g") {
$utente_inserimento = risul_query($prenotazione,0,'utente_inserimento');
if ($priv_mod_prenotazioni == "p" and $utente_inserimento != $id_utente) $continua = "NO";
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_inserimento]) $continua = "NO";
} # fine if ($priv_mod_prenotazioni == "p" or $priv_mod_prenotazioni == "g")
$id_inizio_prenota = risul_query($prenotazione,0,'iddatainizio');
if ($id_inizio_prenota == 0) $continua = "NO";
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $id_inizio_prenota) $continua = "NO";
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenotazione,0,'datainserimento');
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $continua = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
if ($continua == "SI") {
$id_clienti = risul_query($prenotazione,0,'idclienti');
$cognome = esegui_query("select cognome,utente_inserimento from $tableclienti where idclienti = '$id_clienti' ");
$mostra_cliente = "SI";
if ($vedi_clienti == "NO") $mostra_cliente = "NO";
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$utente_inserimento = risul_query($cognome,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or...
if ($mostra_cliente == "NO") $cognome = mex("cliente",$pag)." $id_clienti";
else $cognome = risul_query($cognome,0,'cognome');
$caparra = risul_query($prenotazione,0,'caparra');
if (!$caparra) $caparra = 0;
$caparra_p = punti_in_num($caparra,$stile_soldi);
$valuta_tariffa = risul_query($prenotazione,0,'valuta');
if ($valuta_tariffa) {
$valuta_tariffa = explode(">",$valuta_tariffa);
$valuta_caparra = $valuta_tariffa[1];
$valuta_tariffa = $valuta_tariffa[0];
if ($valuta_caparra) {
$valuta_caparra = explode("<",$valuta_caparra);
$cambio_caparra = $valuta_caparra[1];
$arrotond_caparra = $valuta_caparra[2];
$valuta_caparra = $valuta_caparra[0];
} # fine if ($valuta_caparra)
} # fine if ($valuta_tariffa)
else $valuta_caparra = "";
$met_paga_caparra = risul_query($prenotazione,0,'metodo_pagamento');
$pagato = risul_query($prenotazione,0,'pagato');
if (!$pagato) $pagato = 0;
$pagato_p = punti_in_num($pagato,$stile_soldi);
$costo_tot = risul_query($prenotazione,0,'tariffa_tot');
if (!$costo_tot) $costo_tot = 0;
$costo_tot_p = punti_in_num($costo_tot,$stile_soldi);
if ($somma_pagata == "tutto") $pagato_dopo = $costo_tot;
if ($somma_pagata == "caparra") $pagato_dopo = $caparra;
if ($somma_pagata == "niente") $pagato_dopo = 0;
if ($somma_pagata != "conferma") {
$pagato_dopo_p = punti_in_num($pagato_dopo,$stile_soldi);
$differenza = $pagato_dopo - $pagato;
$differenza_p = punti_in_num($differenza,$stile_soldi);
if (substr($differenza_p,0,1) != "-") $differenza_p = "+".$differenza_p;
$differenza_tot = $differenza_tot + $differenza;
echo mex("I soldi pagati per la prenotazione",$pag)." <i>$numero</i> ".mex("a nome di",$pag)." <b><i>$cognome</i></b> ".mex("verranno cambiati da",$pag)." <b>$pagato_p</b>
 ".mex("a",$pag)." <b>$pagato_dopo_p</b> $Euro ($differenza_p).";
if ($differenza != 0) {
if ($altre_valute['num'] or (strcmp((string) $valuta_caparra,"") and (double) $pagato_dopo <= (double) $caparra and $differenza > 0)) {
echo " ".mex("Valuta",'modifica_prenota.php').":
 <select name=\"valuta_pagamento$numero\">
<option value=\"\">$differenza_p $Euro</option>";
$valuta_trovata = 0;
for ($num2 = 0 ; $num2 < $altre_valute['num'] ; $num2++) {
$diff_pagato_valuta = (double) $differenza * (double) $altre_valute[$num2]['cambio'];
$diff_pagato_valuta = $diff_pagato_valuta / (double) $altre_valute[$num2]['arrotond'];
$diff_pagato_valuta = round($diff_pagato_valuta);
$diff_pagato_valuta = $diff_pagato_valuta * (double) $altre_valute[$num2]['arrotond'];
$diff_pagato_valuta_p = punti_in_num($diff_pagato_valuta,$stile_soldi);
if (substr($diff_pagato_valuta_p,0,1) != "-") $diff_pagato_valuta_p = "+".$diff_pagato_valuta_p;
if ($altre_valute[$num2]['nome'] == $valuta_caparra and (double) $altre_valute[$num2]['cambio'] == (double) $cambio_caparra and (double) $altre_valute[$num2]['arrotond'] == (double) $arrotond_caparra and $caparra > $d_pagato) {
$sel = " selected";
$valuta_trovata = 1;
} # fine if ($altre_valute[$num2]['nome'] == $valuta_caparra and (double) $altre_valute[$num2]['cambio'] == (double) $cambio_caparra and...
else $sel = "";
echo "<option value=\"".htmlspecialchars($altre_valute[$num2]['nome'])."\"$sel>$diff_pagato_valuta_p ".$altre_valute[$num2]['nome']."</option>";
} # fine for $num2
if (!$valuta_trovata and strcmp((string) $valuta_caparra,"") and (double) $pagato_dopo <= (double) $caparra and $differenza > 0) {
$diff_pagato_valuta = (double) $differenza * (double) $cambio_caparra;
$diff_pagato_valuta = $diff_pagato_valuta / (double) $arrotond_caparra;
$diff_pagato_valuta = round($diff_pagato_valuta);
$diff_pagato_valuta = $diff_pagato_valuta * (double) $arrotond_caparra;
$diff_pagato_valuta_p = punti_in_num($diff_pagato_valuta,$stile_soldi);
if (substr($diff_pagato_valuta_p,0,1) != "-") $diff_pagato_valuta_p = "+".$diff_pagato_valuta_p;
echo "<option value=\">$valuta_caparra\" selected>$diff_pagato_valuta_p $valuta_caparra</option>";
} # fine if (!$valuta_trovata and strcmp((string) $valuta_caparra,"") and...
echo "</select>.";
} # fine if ($altre_valute['num'] or (strcmp((string) $valuta_caparra,"") and...
if ($metodi_pagamento_int) {
echo " ".mex("Metodo pagamento",$pag).":
 <select name=\"metodo_pagamento$numero\">
<option value=\"\">----</option>";
for ($num2 = 0 ; $num2 < count($metodi_pagamento) ; $num2++) {
if ($met_paga_caparra == $metodi_pagamento[$num2] and $caparra > $pagato) $sel = " selected";
else $sel = "";
echo "<option value=\"".$metodi_pagamento[$num2]."\"$sel>".$metodi_pagamento[$num2]."</option>";
} # fine for $num2
echo "</select><span id=\"spn_ep$numero\">, ".mex("id op.",'modifica_prenota.php')." <input type=\"text\" name=\"id_pagamento$numero\" value=\"\" size=\"10\" maxlength=\"300\">.</span>";
} # fine if ($metodi_pagamento_int)
else echo "<span id=\"spn_ep$numero\"></span>";
echo "<span id=\"div_ep$numero\"> ".mex("Data",'modifica_prenota.php').": ";
$gio_corr = date('d',(time() + (C_DIFF_ORE * 3600)));
$sel_gpagamento = "<select name=\"giorno_pagamento$numero\">";
for ($num2 = 1 ; $num2 <= 31; $num2++) {
if (strlen($num2) == 1) $num2 = "0".$num2;
if ($num2 == $gio_corr) $sel = " selected";
else $sel = "";
$sel_gpagamento .= "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$sel_gpagamento .= "</select>";
$mese_corr = date('m',(time() + (C_DIFF_ORE * 3600)));
$sel_mpagamento = "<select name=\"mese_pagamento$numero\">";
for ($num2 = 1 ; $num2 <= 12 ; $num2++) {
if (strlen($num2) == 1) $num2 = "0".$num2;
if ($num2 == $mese_corr) $sel = " selected";
else $sel = "";
$sel_mpagamento .= "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$sel_mpagamento .= "</select>";
if ($stile_data == "usa") echo "$sel_mpagamento/$sel_gpagamento";
else echo "$sel_gpagamento/$sel_mpagamento";
echo "/<select name=\"anno_pagamento$numero\">";
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
for ($num2 = ($anno - 2) ; $num2 <= ($anno_corr + 1) ; $num2++) {
if ($num2 == $anno_corr) $sel = " selected";
else $sel = "";
echo "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
echo "</select>. ".mex("Note",'modifica_prenota.php').": <input type=\"text\" name=\"note_pagamento$numero\" value=\"\" size=\"12\">.</span>
<script type=\"text/javascript\">
<!--
var sep_ep$numero = document.getElementById('sep_ep$numero');
var spn_ep$numero = document.getElementById('spn_ep$numero').innerHTML;
var div_ep$numero = document.getElementById('div_ep$numero').innerHTML;
function apri_ei$numero () {
if (sep_ep$numero) sep_ep$numero.style.display = 'block';
document.getElementById('spn_ep$numero').innerHTML = spn_ep$numero;
document.getElementById('div_ep$numero').innerHTML = div_ep$numero;
}
if (sep_ep$numero) sep_ep$numero.style.display = 'none';
document.getElementById('spn_ep$numero').innerHTML = '";
if ($metodi_pagamento) echo ".";
echo " ".mex("Informazioni extra",'modifica_prenota.php')." <button type=\"button\" onclick=\"apri_ei$numero();\"><img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"&gt;\"></button>';
document.getElementById('div_ep$numero').innerHTML = '';
-->
</script>";
} # fine if ($differenza != 0)
echo "<div style=\"height: 4px;\"></div>";
$nascosti_in_form .= "<input type=\"hidden\" name=\"d_pagato_dopo$numero\" value=\"$pagato_dopo\">";
} # fine if ($somma_pagata != "conferma")
else echo mex("La prenotazione",$pag)." <i>$numero</i> ".mex("a nome di",$pag)." <b><i>$cognome</i></b> ".mex("verrà confermata",$pag).".<br>";
$nascosti_in_form .= "<input type=\"hidden\" name=\"d_id_clienti$numero\" value=\"$id_clienti\">
<input type=\"hidden\" name=\"d_costo_tot$numero\" value=\"$costo_tot\">
<input type=\"hidden\" name=\"d_caparra$numero\" value=\"$caparra\">
<input type=\"hidden\" name=\"d_pagato$numero\" value=\"$pagato\">";
$numeri_cambia .= "#".$numero;
} # fine if ($continua == "SI")
} # fine if (numlin_query($prenotazione) == 1)
} # fine if ($numero and controlla_num_pos($numero) != "NO")
} # fine for $num1
$differenza_tot_p = punti_in_num($differenza_tot,$stile_soldi);
echo "<br>".mex("Saldo totale",$pag).": <b>$differenza_tot_p</b> $Euro<br>";
if ($numeri_cambia) {
$numeri_cambia = substr($numeri_cambia,1);
echo "<br>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"cambia_pagato\" value=\"$cambia_pagato\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">
<input type=\"hidden\" name=\"pag_pren_corr\" value=\"$pag_pren_corr\">
<input type=\"hidden\" name=\"pag_pren_succ\" value=\"$pag_pren_succ\">
<input type=\"hidden\" name=\"pag_pren_prec\" value=\"$pag_pren_prec\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"$cerca_prenota\">
<input type=\"hidden\" name=\"opz_cerc_pren\" value=\"$opz_cerc_pren\">
<input type=\"hidden\" name=\"somma_pagata\" value=\"$somma_pagata\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
$nascosti_in_form
<input type=\"hidden\" name=\"numeri_cambia\" value=\"".htmlspecialchars($numeri_cambia)."\">
<button class=\"cont\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
</div></form><table cellspacing=0 cellpadding=0><tr><td style=\"height: 1px;\"></td></tr></table>
<hr style=\"width: 350px; margin-left: 0; text-align: left;\"><br><br>";
} # fine if ($numeri_cambia)
else echo "</div></form>";
} # fine if (!isset($continua) or $continua != "SI")

else {
$modifica = "";
$tabelle_lock = array($tableprenota,$tablecosti,$tablesoldi);
$altre_tab_lock = array($tableperiodi,$tableclienti,$tablepersonalizza,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = (string) risul_query($metodi_pagamento,0,'valpersonalizza');
$metodi_pagamento = explode(",",$metodi_pagamento);
unset($met_paga_perm);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) $met_paga_perm[$metodi_pagamento[$num1]] = "SI";
$numeri_cambia = explode("#",$numeri_cambia);
unset($altre_valute);
$cambio_pagamento = array();
$arrotond_pagamento = array();
for ($num1 = 0 ; $num1 < count($numeri_cambia) ; $num1++) {
$numero = $numeri_cambia[$num1];
if (controlla_num_pos($numero) == "NO") $numero = 0;
$prenotazione = esegui_query("select idprenota,idclienti,iddatainizio,caparra,pagato,tariffa_tot,conferma,valuta,utente_inserimento,datainserimento from $tableprenota where idprenota = '".aggslashdb($numero)."'");
if (numlin_query($prenotazione) == 1) {
$utente_inserimento = risul_query($prenotazione,0,'utente_inserimento');
if ($priv_vedi_tab_prenotazioni == "p" and $utente_inserimento != $id_utente) $modifica = "NO";
if ($priv_vedi_tab_prenotazioni == "g" and !$utenti_gruppi[$utente_inserimento]) $modifica = "NO";
if ($priv_mod_prenotazioni == "n") $modifica = "NO";
if ($priv_mod_prenotazioni == "p" and $utente_inserimento != $id_utente) $modifica = "NO";
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_inserimento]) $modifica = "NO";
$id_inizio_prenota = risul_query($prenotazione,0,'iddatainizio');
if ($id_inizio_prenota == 0) $modifica = "NO";
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $id_inizio_prenota) $modifica = "NO";
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenotazione,0,'datainserimento');
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $modifica = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
$id_clienti = risul_query($prenotazione,0,'idclienti');
$caparra = risul_query($prenotazione,0,'caparra');
if (!$caparra) $caparra = 0;
$pagato = risul_query($prenotazione,0,'pagato');
if (!$pagato) $pagato = 0;
$costo_tot = risul_query($prenotazione,0,'tariffa_tot');
if (!$costo_tot) $costo_tot = 0;
$d_id_clienti = fixset(${"d_id_clienti".$numero});
if ($d_id_clienti != $id_clienti) $modifica = "NO";
$d_costo_tot = fixset(${"d_costo_tot".$numero});
if ($d_costo_tot != $costo_tot) $modifica = "NO";
$d_caparra = fixset(${"d_caparra".$numero});
if ($d_caparra != $caparra) $modifica = "NO";
$d_pagato = fixset(${"d_pagato".$numero});
if ($d_pagato != $pagato) $modifica = "NO";
$d_pagato_dopo = fixset(${"d_pagato_dopo".$numero});
if ($d_pagato_dopo > $costo_tot) $modifica = "NO";
if ($somma_pagata != "conferma" and $d_pagato_dopo and controlla_soldi($d_pagato_dopo,"SI") == "NO") $modifica = "NO";
if ($somma_pagata != "conferma" and $priv_mod_pagato != "s" and $d_pagato_dopo != $pagato) $modifica = "NO";
if ($somma_pagata == "conferma" and $priv_mod_pagato == "n") $modifica = "NO";
if (strcmp(fixstr(${"valuta_pagamento".$numero}),"")) {
if (@get_magic_quotes_gpc()) ${"valuta_pagamento".$numero} = stripslashes(${"valuta_pagamento".$numero});
if (substr(${"valuta_pagamento".$numero},0,1) == ">") {
${"valuta_pagamento".$numero} = substr(${"valuta_pagamento".$numero},1);
$d_valuta_tariffa = explode(">",risul_query($prenotazione,0,'valuta'));
if ($d_valuta_tariffa[1]) $d_valuta_caparra = explode("<",$d_valuta_tariffa[1]);
else $d_valuta_caparra = array();
if (${"valuta_pagamento".$numero} != $d_valuta_caparra[0] or (double) $d_pagato_dopo > (double) $caparra or $d_pagato_dopo < $pagato) $inserire = "NO";
else {
$cambio_pagamento[$numero] = $d_valuta_caparra[1];
$arrotond_pagamento[$numero] = $d_valuta_caparra[2];
} # fine else if (${"valuta_pagamento".$numero} != $d_valuta_caparra[0] or...
} # fine if (substr(${"valuta_pagamento".$numero},0,1) == ">")
else {
if (!@is_array($altre_valute)) $altre_valute = altre_valute();
$valuta_pag = $altre_valute['id'][${"valuta_pagamento".$numero}];
if (!strcmp((string) $valuta_pag,"")) $inserire = "NO";
else {
$cambio_pagamento[$numero] = $altre_valute[$valuta_pag]['cambio'];
$arrotond_pagamento[$numero] = $altre_valute[$valuta_pag]['arrotond'];
} # fine else if (!strcmp((string) $valuta_pag,""))
} # fine else if (substr(${"valuta_pagamento".$numero},0,1) == ">")
} # fine if (strcmp(fixstr(${"valuta_pagamento".$numero}),""))
} # fine if (numlin_query($prenotazione) == 1)
else $modifica = "NO";
if ($modifica == "NO") break;
} # fine for $num1

if ($modifica != "NO") {
for ($num1 = 0 ; $num1 < count($numeri_cambia) ; $num1++) {
$numero = $numeri_cambia[$num1];
$prenotazione = esegui_query("select idprenota,idclienti,caparra,pagato,tariffa_tot,conferma,iddatainizio,iddatafine from $tableprenota where idprenota = '$numero'");
if ($somma_pagata != "conferma") {
$pagato = risul_query($prenotazione,0,'pagato');
if (!$pagato) $pagato = 0;
$d_pagato_dopo = fixset(${"d_pagato_dopo".$numero});
if ($d_pagato_dopo != $pagato) {
esegui_query("update $tableprenota set pagato = '".$d_pagato_dopo."' where idprenota = '$numero' ");
$confermato = risul_query($prenotazione,0,'conferma');
$confermato = substr($confermato[$num1],0,1);
if ($d_pagato_dopo > 0 and $confermato != "S") esegui_query("update $tableprenota set conferma = 'S' where idprenota = '$numero' ");
$datainserimento_saldo = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$datatransazione_saldo = $datainserimento_saldo;
if (isset(${"giorno_pagamento".$numero}) and isset(${"mese_pagamento".$numero}) and isset(${"anno_pagamento".$numero})) {
if (${"giorno_pagamento".$numero} >= 1 and ${"giorno_pagamento".$numero} <= 31 and ${"mese_pagamento".$numero} >= 1 and ${"mese_pagamento".$numero} <= 12) {
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
if (${"anno_pagamento".$numero} >= ($anno_corr - 2) and ${"anno_pagamento".$numero} <= ($anno_corr + 1)) $datatransazione_saldo = date("Y-m-d H:i:s",mktime(0,0,0,(int) ${"mese_pagamento".$numero},(int) ${"giorno_pagamento".$numero},(int) ${"anno_pagamento".$numero}));
} # fine if (${"giorno_pagamento".$numero} >= 1 and ${"giorno_pagamento".$numero} <= 31 and...
} # fine if (isset(${"giorno_pagamento".$numero}) and isset(${"mese_pagamento".$numero}) and...
$idcliente_saldo = risul_query($prenotazione,0,'idclienti');
$d_idinizioprenota = risul_query($prenotazione,0,'iddatainizio');
$d_idfineprenota = risul_query($prenotazione,0,'iddatafine');
$motivazione_saldo = "$idcliente_saldo;$d_idinizioprenota";
$motivazione_saldo .= ";$d_idfineprenota";
$motivazione_saldo .= ";$numero";
$saldo = $d_pagato_dopo - $pagato;
if (strcmp((string) ${"valuta_pagamento".$numero},"")) {
$valuta = ${"valuta_pagamento".$numero}.">".$cambio_pagamento[$numero].">".$arrotond_pagamento[$numero];
$saldo_valuta = (double) $saldo * (double) $cambio_pagamento[$numero];
$saldo_valuta = $saldo_valuta / (double) $arrotond_pagamento[$numero];
$saldo_valuta = round($saldo_valuta);
$saldo_valuta = $saldo_valuta * (double) $arrotond_pagamento[$numero];
} # fine if (strcmp((string) ${"valuta_pagamento".$numero},""))
else {
$valuta = "";
$saldo_valuta = "";
} # fine else if (strcmp((string) ${"valuta_pagamento".$numero},""))
if (@get_magic_quotes_gpc()) ${"metodo_pagamento".$numero} = stripslashes(${"metodo_pagamento".$numero});
${"metodo_pagamento".$numero} = htmlspecialchars(fixstr(${"metodo_pagamento".$numero}));
if ($met_paga_perm[${"metodo_pagamento".$numero}] == "SI") $metodo_pagamento = aggslashdb(${"metodo_pagamento".$numero});
else $metodo_pagamento = "";
$idsoldi = esegui_query("select max(idsoldi) from $tablesoldi");
$idsoldi = risul_query($idsoldi,0,0) + 1;
esegui_query("insert into $tablesoldi (idsoldi,motivazione,saldo_prenota,soldi_prima,metodo_pagamento,data_transazione,data_inserimento,utente_inserimento) values ('$idsoldi','$motivazione_saldo','$saldo','$pagato','$metodo_pagamento','$datatransazione_saldo','$datainserimento_saldo','$id_utente')");
if ($valuta) esegui_query("update $tablesoldi set valuta = '".aggslashdb($valuta)."', saldo_valuta = '".aggslashdb($saldo_valuta)."' where idsoldi = '$idsoldi' ");
if (!empty(${"id_pagamento".$numero})) esegui_query("update $tablesoldi set id_pagamento = '".aggslashdb(htmlspecialchars(${"id_pagamento".$numero}))."' where idsoldi = '$idsoldi' ");
if (!empty(${"note_pagamento".$numero})) esegui_query("update $tablesoldi set note = '".aggslashdb(htmlspecialchars(${"note_pagamento".$numero}))."' where idsoldi = '$idsoldi' ");

if (strcmp($cassa_pagamenti,"")) {
if ($anno >= substr($datainserimento_saldo,0,4)) {
$costo0 = esegui_query("select * from $tablecosti where idcosti = '0' ");
$costo0 = risul_query($costo0,0,'val_costo');
$costo0 = (double) $costo0 + (double) $saldo;
esegui_query("update $tablecosti set val_costo = '$costo0' where idcosti = '0' ");
} # fine if ($anno_saldo >= substr($datainserimento_saldo,0,4))
if (!$d_idinizioprenota) $data_inizio_costo = "?";
else {
$data_inizio_costo = esegui_query("select datainizio from $tableperiodi where idperiodi = '$d_idinizioprenota' ");
$data_inizio_costo = formatta_data(risul_query($data_inizio_costo,0,'datainizio'),$stile_data);
} # fine else if (!$d_idinizioprenota)
$data_fine_costo = esegui_query("select datafine from $tableperiodi where idperiodi = '$d_idfineprenota' ");
$data_fine_costo = formatta_data(risul_query($data_fine_costo,0,'datafine'),$stile_data);
$cognome_saldo = esegui_query("select cognome from $tableclienti where idclienti = '$idcliente_saldo' ");
$cognome_saldo = risul_query($cognome_saldo,0,'cognome');
$nome_costo = "".mex("Prenotazione",'modifica_prenota.php')." $numero ".mex("dal",'modifica_prenota.php')." $data_inizio_costo ".mex("al",'modifica_prenota.php')." $data_fine_costo ".mex("per",'modifica_prenota.php')." $cognome_saldo";
if (!empty(${"note_pagamento".$numero})) $nome_costo .= " - ".htmlspecialchars(${"note_pagamento".$numero});
$idcosti = esegui_query("select max(idcosti) from $tablecosti");
$idcosti = risul_query($idcosti,0,0) + 1;
if ($cassa_pagamenti == "#1#") $nome_cassa = "";
else $nome_cassa = $cassa_pagamenti;
$nome_utente = esegui_query("select nome_utente from $tableutenti where idutenti = '$id_utente' ");
$nome_utente = risul_query($nome_utente,0,'nome_utente');
esegui_query("insert into $tablecosti (idcosti,nome_costo,val_costo,tipo_costo,nome_cassa,persona_costo,provenienza_costo,metodo_pagamento,data_transazione,datainserimento,hostinserimento,utente_inserimento) values ('$idcosti','".aggslashdb($nome_costo)."','$saldo','e','".aggslashdb($nome_cassa)."','".aggslashdb($nome_utente)."','p','$metodo_pagamento','$datatransazione_saldo','$datainserimento_saldo','$HOSTNAME','$id_utente') ");
if ($valuta) esegui_query("update $tablecosti set valuta = '".aggslashdb($valuta)."', costo_valuta = '".aggslashdb($saldo_valuta)."' where idcosti = '$idcosti' ");
if (!empty(${"id_pagamento".$numero})) esegui_query("update $tablecosti set id_pagamento = '".aggslashdb(htmlspecialchars(${"id_pagamento".$numero}))."' where idcosti = '$idcosti' ");
} # fine if (strcmp($cassa_pagamenti,""))

} # fine if ($d_pagato_dopo != $pagato)
} # fine if ($somma_pagata != "conferma")
else esegui_query("update $tableprenota set conferma = 'S' where idprenota = '$numero' ");
} # fine for $num1
} # fine if ($modifica != "NO")
else {
$mostra_tab_principale = "NO";
echo mex("Le prenotazioni <b>non sono state modificate</b> perchè sono cambiate nel frattempo",$pag).".<br>";
} # fine else if ($modifica != "NO")
unlock_tabelle($tabelle_lock);
} # fine else if (!isset($continua) or $continua != "SI")


if (isset($mostra_tab_principale) and $mostra_tab_principale == "NO") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"pag_pren_corr\" value=\"$pag_pren_corr\">
<input type=\"hidden\" name=\"pag_pren_succ\" value=\"$pag_pren_succ\">
<input type=\"hidden\" name=\"pag_pren_prec\" value=\"$pag_pren_prec\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"$cerca_prenota\">
<input type=\"hidden\" name=\"opz_cerc_pren\" value=\"$opz_cerc_pren\">
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">
<button class=\"canc\" type=\"submit\" name=\"torna_alla_tab\" value=\"1\"><div>".mex("Annulla",$pag)."</div></button>
</div></form>";
} # fine if (isset($mostra_tab_principale) and $mostra_tab_principale == "NO")
} # fine if (!$errore)
} # fine if (!empty($cambia_pagato))



if (!isset($mostra_tab_principale) or $mostra_tab_principale != "NO") {

include("./includes/funzioni_tariffe.php");
include("./includes/funzioni_costi_agg.php");
$id_utente_vedi_passa = "";

if (!empty($torna_indietro)) {
$transaz_esistente = esegui_query("select * from $tabletransazioni where idsessione = '$id_sessione' and tipo_transazione = 'tab_p' ");
if (numlin_query($transaz_esistente)) {
$pag_pren_corr = risul_query($transaz_esistente,0,'dati_transazione1');
$pag_pren_succ = risul_query($transaz_esistente,0,'dati_transazione2');
$pag_pren_prec = risul_query($transaz_esistente,0,'dati_transazione3');
$ordine_prenota = risul_query($transaz_esistente,0,'dati_transazione4');
$mos_tut_dat = risul_query($transaz_esistente,0,'dati_transazione5');
$cerca_prenota = risul_query($transaz_esistente,0,'dati_transazione6');
$opz_cerc_pren = risul_query($transaz_esistente,0,'dati_transazione7');
$cerca_ini = risul_query($transaz_esistente,0,'dati_transazione8');
$cerca_fine = risul_query($transaz_esistente,0,'dati_transazione9');
$id_utente_vedi = risul_query($transaz_esistente,0,'dati_transazione10');
$senza_colori = risul_query($transaz_esistente,0,'dati_transazione11');
$lista_prenota = risul_query($transaz_esistente,0,'dati_transazione12');
$sel_tab_prenota = risul_query($transaz_esistente,0,'dati_transazione13');
$pcanc = risul_query($transaz_esistente,0,'dati_transazione14');
} # fine if (numlin_query($transaz_esistente))
} # fine if (!empty($torna_indietro))

if (!empty($subtotale_selezionate)) {
if ($num_cambia_pren == 1) {
$cambia1 = trim($cambia1);
$cod_prenota = preg_replace("/[0-9]/","",$cambia1);
if (strlen($cod_prenota) == 4 and preg_replace("/[a-zA-Z]/","",$cod_prenota) == "") {
$cifra_anno = substr($cambia1,-2,1);
if ($cifra_anno == substr($anno,-1) or $cifra_anno == substr(($anno - 1),-1)) {
$id_pren = substr($cambia1,2,-2);
$id_pren = explode(substr($cod_prenota,2,1),$id_pren);
$id_clien = aggslashdb($id_pren[0]);
$id_pren = aggslashdb($id_pren[1]);
if ($cifra_anno == substr(($anno - 1),-1)) $cond_idpren = "id_anni_prec $LIKE '%;".($anno - 1).",$id_pren;%'";
else $cond_idpren = "idprenota = '$id_pren'";
$dati_pren = esegui_query("select idprenota from $tableprenota where $cond_idpren and idclienti = '$id_clien' and codice = '$cod_prenota'");
if (numlin_query($dati_pren) == 1) $cambia1 = risul_query($dati_pren,0,'idprenota');
} # fine if ($cifra_anno == substr($anno,-1) or $cifra_anno == substr(($anno - 1),-1))
} # fine if (strlen($cod_prenota) == 4 and preg_replace("/[a-zA-Z]/","",$cod_prenota) == "")
} # fine if ($num_cambia_pren == 1)
$lista_prenota = "";
for ($num1 = 1 ; $num1 <= $num_cambia_pren ; $num1++) if (!empty(${"cambia".$num1}) and controlla_num_pos(${"cambia".$num1}) == "SI") $lista_prenota .= ${"cambia".$num1}.",";
$lista_prenota = substr($lista_prenota,0,-1);
} # fine if (!empty($subtotale_selezionate))
elseif ($lista_prenota) {
$subtotale_selezionate = 1;
$lista_prenota_vett = explode(",",$lista_prenota);
$num_cambia_pren = count($lista_prenota_vett);
for ($num1 = 1 ; $num1 <= $num_cambia_pren ; $num1++) ${"cambia".$num1} = $lista_prenota_vett[($num1 - 1)];
} # fine elseif ($lista_prenota)

if (empty($id_utente_vedi)) $id_utente_vedi = $id_utente;
if ($priv_vedi_tab_prenotazioni != "s" and $priv_vedi_tab_prenotazioni != "g") $id_utente_vedi = $id_utente;
if ($id_utente != 1 and !$utenti_gruppi[$id_utente_vedi]) $id_utente_vedi = $id_utente;
$utenti_gruppi_orig = $utenti_gruppi;
$priv_vedi_tab_prenotazioni_orig = $priv_vedi_tab_prenotazioni;
if ($id_utente != $id_utente_vedi) {
$privilegi_annuali_utente_vedi = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_vedi' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente_vedi) != 0) {
$priv_vedi_tab_utente_vedi = risul_query($privilegi_annuali_utente_vedi,0,'priv_vedi_tab');
$priv_vedi_tab_prenotazioni = substr($priv_vedi_tab_utente_vedi,1,1);
if ($priv_vedi_tab_prenotazioni == "g") {
unset($utenti_gruppi);
$utenti_gruppi[$id_utente_vedi] = 1;
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente_vedi' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) $utenti_gruppi[risul_query($utenti_gruppo,$num2,'idutente')] = 1;
} # fine for $num1
} # fine if ($priv_vedi_tab_prenotazioni == "g")
} # fine if (numlin_query($privilegi_annuali_utente_vedi) != 0)
} # fine if ($id_utente != $id_utente_vedi)

if (!$cerca_prenota) {
if (!$sel_tab_prenota) {
$sel_tab_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'selezione_tab_tutte_prenota' and idutente = '$id_utente'");
$sel_tab_prenota = risul_query($sel_tab_prenota,0,'valpersonalizza');
} # fine if (!$sel_tab_prenota)
if ($sel_tab_prenota == "correnti" or $sel_tab_prenota == "future" or $sel_tab_prenota == "partcorr") {
$oggi = date("Y-m-d",(time() + (C_DIFF_ORE * 3600)));
$oggi = esegui_query("select idperiodi,datainizio,datafine from $tableperiodi where datainizio <= '$oggi' and datafine > '$oggi' ");
if (numlin_query($oggi) != 0) {
$oggi_ini = risul_query($oggi,0,'datainizio');
$oggi_fine = risul_query($oggi,0,'datafine');
include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
$num_periodi_date = count($d_increment);
if ($num_periodi_date > 1 or $d_increment[0] > 1) {
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
for ($num2 = 0 ; $num2 < $n_dates_menu[$num1] ; $num2++) {
$data_corr = date("Y-m-d",mktime(0,0,0,($m_ini_menu[$num1] + 1),($d_ini_menu[$num1] + ($num2 * $d_increment[$num1])),$y_ini_menu[$num1]));
if ($cerca_ini and (int) str_replace("-","",$data_corr) >= (int) str_replace("-","",$oggi_fine)) $cerca_fine = $data_prec;
if (!$cerca_ini and !empty($data_prec) and (int) str_replace("-","",$data_corr) > (int) str_replace("-","",$oggi_ini)) $cerca_ini = $data_prec;
if ($cerca_ini and $cerca_fine) break;
$data_prec = $data_corr;
} # fine for $num2
if ($cerca_ini and $cerca_fine) break;
} # fine for $num1
} # fine if ($num_periodi_date > 1 or $d_increment[0] > 1)
else {
$cerca_ini = $oggi_ini;
$cerca_fine = $oggi_fine;
} # fine else if ($num_periodi_date > 1 or $d_increment[0] > 1)
if ($sel_tab_prenota == "correnti" and $cerca_ini and $cerca_fine) $cerca_prenota = "SI";
if ($sel_tab_prenota == "future") {
$cerca_fine = "";
if ($cerca_ini) $cerca_prenota = "SI";
} # fine if ($sel_tab_prenota == "future")
if ($sel_tab_prenota == "partcorr" and $cerca_ini and $cerca_fine) {
if ($cerca_ini == $oggi_ini) $ini_id = risul_query($oggi,0,'idperiodi');
else {
$ini_id = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($cerca_ini)."' ");
$ini_id = risul_query($ini_id,0,'idperiodi');
} # fine else if ($cerca_ini == $oggi_ini)
if ($ini_id > 1) {
$cerca_ini = esegui_query("select datainizio from $tableperiodi where idperiodi = '".($ini_id - 1)."' ");
$cerca_ini = risul_query($cerca_ini,0,'datainizio');
$cerca_prenota = "SI";
} # fine if ($ini_id > 1)
} # fine if ($sel_tab_prenota == "partcorr" and $cerca_ini and $cerca_fine)
} # fine if (numlin_query($oggi) != 0)
} # fine if ($sel_tab_prenota == "correnti" or...
elseif ($sel_tab_prenota != "tutte") $sel_tab_prenota = "";
} # fine if (!$cerca_prenota)

if (!isset($show_bar) or $show_bar != "NO") {
if (!$cerca_prenota or $cerca_prenota == "tutte") {
echo "<table class=\"buttonbar\"><tr><td align=\"left\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"ordine_prenota\" value=\"$ordine_prenota\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"SI\">
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">
<select name=\"opz_cerc_pren\">
<option value=\"\">".mex("Tutte le prenotazioni",$pag)."</option>
<option value=\"arr\">".mex("Solo arrivi",$pag)."</option>
<option value=\"part\">".mex("Solo partenze",$pag)."</option>
<option value=\"canc\">".mex("Prenotazioni cancellate",$pag)."</option>
</select> ".mex("dal",$pag)." ";
$oggi = date("Y-m-d",(time() + (C_DIFF_ORE * 3600)));
$date_select = esegui_query("select datainizio,datafine from $tableperiodi where datainizio <= '$oggi' and datafine > '$oggi' ");
if (numlin_query($date_select) != 0) {
$inizio_select = risul_query($date_select,0,'datainizio');
$fine_select = risul_query($date_select,0,'datafine');
} # fine if (numlin_query($date_select) != 0)
else {
$inizio_select = "";
$fine_select = "";
} # fine else if (numlin_query($date_select) != 0)
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","cerca_ini",$inizio_select,"","",$id_utente,$tema);
echo " ".mex("al",$pag)." ";
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","cerca_fine",$fine_select,1,"",$id_utente,$tema);
echo " <input class=\"sbutton\" type=\"submit\" value=\"".mex("Vedi",$pag)."\">
</div></form></td>";
} # fine if (!$cerca_prenota or $cerca_prenota == "tutte")
else {
echo "<table class=\"buttonbar\"><tr><td align=\"left\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"ordine_prenota\" value=\"$ordine_prenota\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"tutte\">
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Vedi tutte le prenotazioni",$pag)."\">
</div></form></td>";
} # fine else if (!$cerca_prenota or $cerca_prenota == "tutte")
if ($priv_vedi_tab_prenotazioni_orig == "s" or $priv_vedi_tab_prenotazioni_orig == "g") {
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$option_select = "";
for ($num1 = 0 ; $num1 < numlin_query($tutti_utenti) ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente = risul_query($tutti_utenti,$num1,'nome_utente');
if ($id_utente_vedi != $idutenti and ($id_utente == 1 or !empty($utenti_gruppi_orig[$idutenti]))) $option_select .= "<option value=\"$idutenti\">$nome_utente</option>";
if ($id_utente_vedi == $idutenti) $nome_utente_vedi = $nome_utente;
} # fine for $num1
if ($option_select) {
echo "<td align=\"left\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div class=\"wsnowrap\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pag_pren_corr\" value=\"$pag_pren_corr\">
<input type=\"hidden\" name=\"pag_pren_succ\" value=\"$pag_pren_succ\">
<input type=\"hidden\" name=\"pag_pren_prec\" value=\"$pag_pren_prec\">
<input type=\"hidden\" name=\"ordine_prenota\" value=\"$ordine_prenota\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"$cerca_prenota\">
<input type=\"hidden\" name=\"opz_cerc_pren\" value=\"$opz_cerc_pren\">
<input type=\"hidden\" name=\"cerca_ini\" value=\"$cerca_ini\">
<input type=\"hidden\" name=\"cerca_fine\" value=\"$cerca_fine\">
<input type=\"hidden\" name=\"lista_prenota\" value=\"$lista_prenota\">
<input type=\"hidden\" name=\"sel_tab_prenota\" value=\"$sel_tab_prenota\">
".mex("Profilo",$pag)."
<select name=\"id_utente_vedi\">
<option value=\"$id_utente_vedi\" selected>$nome_utente_vedi</option>
$option_select
</select>
<input class=\"sbutton\" type=\"submit\" name=\"cambia_ut_vedi\" value=\"".mex("Vedi",$pag)."\">
</div></form></td>";
} # fine if ($option_select)
$id_utente_vedi_passa = "&amp;id_utente_vedi=$id_utente_vedi";
} # fine if ($priv_vedi_tab_prenotazioni_orig == "s" or $priv_vedi_tab_prenotazioni_orig == "g")
echo "<td align=\"right\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pag_pren_corr\" value=\"$pag_pren_corr\">
<input type=\"hidden\" name=\"pag_pren_succ\" value=\"$pag_pren_succ\">
<input type=\"hidden\" name=\"pag_pren_prec\" value=\"$pag_pren_prec\">
<input type=\"hidden\" name=\"ordine_prenota\" value=\"$ordine_prenota\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<input type=\"hidden\" name=\"cerca_prenota\" value=\"$cerca_prenota\">
<input type=\"hidden\" name=\"opz_cerc_pren\" value=\"$opz_cerc_pren\">
<input type=\"hidden\" name=\"cerca_ini\" value=\"$cerca_ini\">
<input type=\"hidden\" name=\"cerca_fine\" value=\"$cerca_fine\">
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">
<input type=\"hidden\" name=\"lista_prenota\" value=\"$lista_prenota\">
<input type=\"hidden\" name=\"sel_tab_prenota\" value=\"$sel_tab_prenota\">";
if (!$senza_colori) {
echo "<input type=\"hidden\" name=\"senza_colori\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Senza colori",$pag)."\">";
} # fine if (!$senza_colori)
else echo "<input class=\"sbutton\" type=\"submit\" value=\"".mex("Con colori",$pag)."\">";
echo "</div></form></td></tr></table>";
} # fine if (!isset($show_bar) or $show_bar != "NO")


if (!empty($pcanc) and !$cerca_prenota) $pcanc = "&amp;pcanc=1";
else $pcanc = "";
if ($cerca_prenota and $cerca_prenota != "tutte" and $opz_cerc_pren == "canc") $pcanc = "&amp;pcanc=1";
$classcanc = "";
$stilebarrato = "";
if ($pcanc) {
$tableprenota = $tableprenotacanc;
$classcanc = " class=\"bcoldeleted\"";
$stilebarrato = " style=\"text-decoration: line-through\"";
} # fine if ($pcanc)

$tabelle_lock = array($tableversioni,$tabletransazioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$transaz_esistente = esegui_query("select idtransazioni from $tabletransazioni where idsessione = '$id_sessione' and tipo_transazione = 'tab_p' ");
if (numlin_query($transaz_esistente)) {
$transaz_esistente = risul_query($transaz_esistente,0,'idtransazioni');
esegui_query("update $tabletransazioni set dati_transazione1 = '".aggslashdb($pag_pren_corr)."', dati_transazione2 = '".aggslashdb($pag_pren_succ)."', dati_transazione3 = '".aggslashdb($pag_pren_prec)."', dati_transazione4 = '".aggslashdb($ordine_prenota)."', dati_transazione5 = '".aggslashdb($mos_tut_dat)."', dati_transazione6 = '".aggslashdb($cerca_prenota)."', dati_transazione7 = '".aggslashdb($opz_cerc_pren)."', dati_transazione8 = '".aggslashdb($cerca_ini)."', dati_transazione9 = '".aggslashdb($cerca_fine)."', dati_transazione10 = '".aggslashdb($id_utente_vedi)."', dati_transazione11 = '".aggslashdb($senza_colori)."', dati_transazione12 = '".aggslashdb($lista_prenota)."', dati_transazione13 = '".aggslashdb($sel_tab_prenota)."', dati_transazione14 = '".aggslashdb($pcanc)."', ultimo_accesso = '$ultimo_accesso' where idtransazioni = '$transaz_esistente' ");
} # fine if (numlin_query($transaz_esistente))
else {
$id_transazione = crea_id_sessione("",$tableversioni,8);
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,anno,dati_transazione1,dati_transazione2,dati_transazione3,dati_transazione4,dati_transazione5,dati_transazione6,dati_transazione7,dati_transazione8,dati_transazione9,dati_transazione10,dati_transazione11,dati_transazione12,dati_transazione13,dati_transazione14,ultimo_accesso) 
values ('$id_transazione','$id_sessione','tab_p','$anno','".aggslashdb($pag_pren_corr)."','".aggslashdb($pag_pren_succ)."','".aggslashdb($pag_pren_prec)."','".aggslashdb($ordine_prenota)."','".aggslashdb($mos_tut_dat)."','".aggslashdb($cerca_prenota)."','".aggslashdb($opz_cerc_pren)."','".aggslashdb($cerca_ini)."','".aggslashdb($cerca_fine)."','".aggslashdb($id_utente_vedi)."','".aggslashdb($senza_colori)."','".aggslashdb($lista_prenota)."','".aggslashdb($sel_tab_prenota)."','".aggslashdb($pcanc)."','$ultimo_accesso')");
} # fine else if (numlin_query($transaz_esistente))
unlock_tabelle($tabelle_lock);


$tabelle_lock = "";
$altre_tab_lock = array($tableprenota,$tableperiodi,$tableappartamenti,$tablecontratti,$tablepersonalizza,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$prendi_app = 0;
$prendi_doc = 0;
$prendi_cpe = 0;
$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente_vedi'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
$col_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'col_tab_tutte_prenota' and idutente = '$id_utente_vedi'");
$col_tab_tutte_prenota = risul_query($col_tab_tutte_prenota,0,'valpersonalizza');
$colonne_selezionate = explode("#@&",$col_tab_tutte_prenota);
$num_colonne_selezionate = count($colonne_selezionate);
$num_cp_tab = 0;
$num_ca_tab = 0;
$num_gr_tab = 0;
$colonna_numero = "";
$colonna_cognome = "";
$colonna_ospite = "";
$colonna_inizio = "";
$colonna_fine = "";
$colonna_settimane = "";
$colonna_tariffacompleta = "";
$colonna_caparra = "";
$colonna_commissioni = "";
$colonna_restocomm = "";
$colonna_pagato = "";
$colonna_dapagare = "";
$colonna_nometariffa = "";
$colonna_appartamento = "";
$colonna_piano = "";
$colonna_casa = "";
$colonna_persone = "";
$colonna_catpersone = "";
$colonna_commento = "";
$colonna_origine_prenota = "";
$colonna_docsalvati = "";
$colonna_datainserimento = "";
$colonna_utenteinserimento = "";
$colonne_necessarie = "";
$col_gr_settimane = array();
$col_gr_caparra = array();
$col_gr_commissioni = array();
$col_gr_restocomm = array();
$col_gr_pagato = array();
$col_gr_dapagare = array();
$col_gr_nometariffa = array();
$col_gr_appartamento = array();
$col_gr_piano = array();
$col_gr_casa = array();
$col_gr_persone = array();
$col_gr_catpersone = array();
$col_gr_commento = array();
$col_gr_origine_prenota = array();
$col_gr_docsalvati = array();
$col_gr_datainserimento = array();
$col_gr_utenteinserimento = array();
for ($num1 = 0 ; $num1 < $num_colonne_selezionate ; $num1++) {
$colonna_selezionata = explode("#?&",$colonne_selezionate[$num1]);
if ($colonna_selezionata[0] == "nu") $colonna_numero = "SI";
if ($colonna_selezionata[0] == "cg") $colonna_cognome = "SI";
if ($colonna_selezionata[0] == "os") $colonna_ospite = "SI";
if ($colonna_selezionata[0] == "in") $colonna_inizio = "SI";
if ($colonna_selezionata[0] == "fi") $colonna_fine = "SI";
if ($colonna_selezionata[0] == "oe") $colonna_orarioentrata = "SI";
if ($colonna_selezionata[0] == "ns") $colonna_settimane = "SI";
if ($colonna_selezionata[0] == "tc") $colonna_tariffacompleta = "SI";
if ($colonna_selezionata[0] == "ca") $colonna_caparra = "SI";
if ($colonna_selezionata[0] == "cm") $colonna_commissioni = "SI";
if ($colonna_selezionata[0] == "rc") $colonna_restocomm = "SI";
if ($colonna_selezionata[0] == "pa") $colonna_pagato = "SI";
if ($colonna_selezionata[0] == "dp") $colonna_dapagare = "SI";
if ($colonna_selezionata[0] == "nt") $colonna_nometariffa = "SI";
if ($colonna_selezionata[0] == "ap") $colonna_appartamento = "SI";
if ($colonna_selezionata[0] == "pi") { $colonna_piano = "SI"; $prendi_app = 1; }
if ($colonna_selezionata[0] == "ka") { $colonna_casa = "SI"; $prendi_app = 1; }
if ($colonna_selezionata[0] == "pe") $colonna_persone = "SI";
if ($colonna_selezionata[0] == "tp") { $colonna_catpersone = "SI"; $prendi_cpe = 1; }
if ($colonna_selezionata[0] == "co") $colonna_commento = "SI";
if ($colonna_selezionata[0] == "or") $colonna_origine_prenota = "SI";
if ($colonna_selezionata[0] == "ds") { $colonna_docsalvati = "SI"; $prendi_doc = 1; }
if ($colonna_selezionata[0] == "di") $colonna_datainserimento = "SI";
if ($colonna_selezionata[0] == "ui") $colonna_utenteinserimento = "SI";
if ($colonna_selezionata[0] == "cp") {
$nome_cp_tab[$num_cp_tab] = $colonna_selezionata[1];
$num_cp_tab++;
} # fine if ($colonna_selezionata[0] == "cp")
if ($colonna_selezionata[0] == "cu" or $colonna_selezionata[0] == "cs") {
$tipo_ca_tab[$num_ca_tab] = $colonna_selezionata[0];
$nome_ca_tab[$num_ca_tab] = $colonna_selezionata[1];
$soprannome_ca_tab[$num_ca_tab] = fixset($colonna_selezionata[2]);
if (isset($colonna_selezionata[3]) and $colonna_selezionata[3] == "nec") $colonne_necessarie['ca'][$num_ca_tab] = "SI";
$num_ca_tab++;
} # fine if ($colonna_selezionata[0] == "cu" or $colonna_selezionata[0] == "cs")
if ($colonna_selezionata[0] == "gr") {
$nome_gr_tab[$num_gr_tab] = $colonna_selezionata[1];
$separatore_gr_tab[$num_gr_tab] = $colonna_selezionata[2];
$num_cp_col_gr[$num_gr_tab] = 0;
$num_ca_col_gr[$num_gr_tab] = 0;
for ($num2 = 3 ; $num2 < count($colonna_selezionata)  ; $num2++) {
$dati_col_gr = explode("#%&",$colonna_selezionata[$num2]);
if ($dati_col_gr[0] == "ns") $col_gr_settimane[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "ca") $col_gr_caparra[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "cm") $col_gr_commissioni[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "rc") $col_gr_restocomm[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "pa") $col_gr_pagato[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "dp") $col_gr_dapagare[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "nt") $col_gr_nometariffa[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "ap") $col_gr_appartamento[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "pi") { $col_gr_piano[$num_gr_tab] = "SI"; $prendi_app = 1; }
if ($dati_col_gr[0] == "ka") { $col_gr_casa[$num_gr_tab] = "SI"; $prendi_app = 1; }
if ($dati_col_gr[0] == "pe") $col_gr_persone[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "tp") { $col_gr_catpersone[$num_gr_tab] = "SI"; $prendi_cpe = 1; }
if ($dati_col_gr[0] == "co") $col_gr_commento[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "or") $col_gr_origine_prenota[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "ds") { $col_gr_docsalvati[$num_gr_tab] = "SI"; $prendi_doc = 1; }
if ($dati_col_gr[0] == "di") $col_gr_datainserimento[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "ui") $col_gr_utenteinserimento[$num_gr_tab] = "SI";
if ($dati_col_gr[0] == "cp") {
$nome_cp_col_gr[$num_gr_tab][$num_cp_col_gr[$num_gr_tab]] = $dati_col_gr[1];
$num_cp_col_gr[$num_gr_tab]++;
} # fine if ($dati_col_gr[0] == "cp")
if ($dati_col_gr[0] == "cu" or $dati_col_gr[0] == "cs") {
$tipo_ca_col_gr[$num_gr_tab][$num_ca_col_gr[$num_gr_tab]] = $dati_col_gr[0];
$nome_ca_col_gr[$num_gr_tab][$num_ca_col_gr[$num_gr_tab]] = $dati_col_gr[1];
$num_ca_col_gr[$num_gr_tab]++;
} # fine if ($dati_col_gr[0] == "cu" or $dati_col_gr[0] == "cs")
} # fine for $num2
if ($colonna_selezionata[(count($colonna_selezionata) - 1)] == "nec") $colonne_necessarie['gr'][$num_gr_tab] = "SI";
$num_gr_tab++;
} # fine if ($colonna_selezionata[0] == "gr")
} # fine for $num1

$rig_tab_tutte_prenota = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'rig_tab_tutte_prenota' and idutente = '$id_utente_vedi'");
$rig_tab_tutte_prenota = (string) risul_query($rig_tab_tutte_prenota,0,'valpersonalizza');
$righe_selezionate = explode("#@&",$rig_tab_tutte_prenota);
$num_righe_selezionate = count($righe_selezionate);
$riga_totale = "";
$riga_tasse = "";
$riga_cassa = "";
$riga_prenotacanc = "";
for ($num1 = 0 ; $num1 < $num_righe_selezionate ; $num1++) {
if ($righe_selezionate[$num1] == "to") $riga_totale = "SI";
if ($righe_selezionate[$num1] == "ta") $riga_tasse = "SI";
if ($righe_selezionate[$num1] == "ca") $riga_cassa = "SI";
if ($righe_selezionate[$num1] == "pc") $riga_prenotacanc = "SI";
} # fine for $num1

if ($prendi_app) {
unset($piano_app);
unset($casa_app);
$dati_app = esegui_query("select * from $tableappartamenti");
$num_dati_app = numlin_query($dati_app);
for ($num1 = 0 ; $num1 < $num_dati_app ; $num1++) {
$idapp = risul_query($dati_app,$num1,'idappartamenti');
$piano_app[$idapp] = risul_query($dati_app,$num1,'numpiano');
$casa_app[$idapp] = risul_query($dati_app,$num1,'numcasa');
} # fine for $num1
} # fine if ($prendi_app)

if ($prendi_doc) {
include("./includes/funzioni_contratti.php");
$nomi_contratti = "";
$contratti_prenota = trova_contratti_prenota($nomi_contratti,$anno,$anno_corrente,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,$pag,$attiva_contratti_consentiti,$contratti_consentiti_vett);
} # fine if ($prendi_doc)

if ($prendi_cpe) {
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,"v",0,1);
if (!$dati_cat_pers['num']) $colonna_catpersone = "";
elseif ($colonna_catpersone == "SI") $colonna_persone = "SI";
} # fine if ($prendi_cpe)
else $dati_cat_pers = array();

if ($priv_vedi_tab_prenotazioni == "p" or $priv_vedi_tab_prenotazioni == "g") {
$condizione_prenota_proprie = "and ( utente_inserimento = '$id_utente_vedi'";
if ($priv_vedi_tab_prenotazioni == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente_vedi) $condizione_prenota_proprie .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_tab_prenotazioni == "g")
$condizione_prenota_proprie .= " )";
} # fine if ($priv_vedi_tab_prenotazioni == "p" or $priv_vedi_tab_prenotazioni == "g")
else $condizione_prenota_proprie = "";

$anno_succ = $anno + 1;
$periodi_anno = esegui_query("select idperiodi from $tableperiodi where datainizio < '".$anno_succ."-01-01' order by idperiodi");
$num_periodi_anno = numlin_query($periodi_anno) - 1;
$ultimo_periodo = risul_query($periodi_anno,$num_periodi_anno,'idperiodi');
$prenotazioni = esegui_query("select * from $tableprenota where iddatainizio <= $ultimo_periodo and iddatainizio >= 1 and idclienti != '0' $condizione_prenota_proprie order by $ordine_prenota");
$num_prenotazioni = numlin_query($prenotazioni);
$prenotazioni_successive =  esegui_query("select * from $tableprenota where iddatainizio > $ultimo_periodo and idclienti != '0' $condizione_prenota_proprie order by $ordine_prenota");
$num_prenotazioni_successive = numlin_query($prenotazioni_successive);
$prenotazioni_precedenti =  esegui_query("select * from $tableprenota where iddatainizio < '1' and idclienti != '0' $condizione_prenota_proprie order by $ordine_prenota");
$num_prenotazioni_precedenti = numlin_query($prenotazioni_precedenti);
$data_inizio_assoluta = esegui_query("select datainizio from $tableperiodi where idperiodi = 1");
$data_inizio_assoluta = risul_query($data_inizio_assoluta,0,'datainizio');
$data_inizio_assoluta_f = formatta_data($data_inizio_assoluta,$stile_data);
$num_tabelle = 1;
if ($num_prenotazioni_precedenti != 0) {
$max_id_data_fine_prec = esegui_query("select max(iddatafine) from $tableprenota where iddatainizio < 1 $condizione_prenota_proprie");
$max_id_data_fine_prec = risul_query($max_id_data_fine_prec,0,0);
if ($priv_mod_prenota_iniziate == "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);
if ($max_id_data_fine_prec >= ($id_periodo_corrente + 1)) {
$num_tabelle = $num_tabelle + 1;
$tab_precedenti = "SI";
} # fine if ($max_id_data_fine_prec >= ($id_periodo_corrente + 1))
} # fine if ($num_prenotazioni_precedenti != 0)
if ($num_prenotazioni_successive != 0) { $num_tabelle = $num_tabelle + 1; }

$c_idinizioperiodo = 0;
$c_idfineperiodo = 0;
$num_cambia = 0;
$freccia_sx = "";
$freccia_dx = "";

if (($cerca_prenota and $cerca_prenota != "tutte") or !empty($subtotale_selezionate)) {
$tabella_unica_riassuntiva = "SI";
$num_tabelle = 1;

if ($cerca_prenota and $cerca_prenota != "tutte") {
$cerca_ini = aggslashdb($cerca_ini);
$cerca_fine = aggslashdb($cerca_fine);
$cerca_ini_f = formatta_data($cerca_ini,$stile_data);
$c_idinizioperiodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '$cerca_ini' ");
$num_c_idinizioperiodo = numlin_query($c_idinizioperiodo);
if ($num_c_idinizioperiodo == 0) { $c_idinizioperiodo = 10000; }
else { $c_idinizioperiodo = risul_query($c_idinizioperiodo,0,'idperiodi'); }
if ($cerca_fine) {
$cerca_fine_f = formatta_data($cerca_fine,$stile_data);
$c_idfineperiodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '$cerca_fine' ");
$num_c_idfineperiodo = numlin_query($c_idfineperiodo);
if ($num_c_idfineperiodo == 0) { $c_idfineperiodo = 10000; }
else { $c_idfineperiodo = risul_query($c_idfineperiodo,0,'idperiodi'); }
} # fine if ($cerca_fine)
else $c_idfineperiodo = 10000;
$c_idinizioperiodo_v = $c_idinizioperiodo;
if ($c_idinizioperiodo == 1 and $opz_cerc_pren != "arr") $c_idinizioperiodo = -1;
$iddatainizio = "iddatainizio";
$iddatafine = "iddatafine";
$c_idinizioperiodo_q = $c_idinizioperiodo;
$c_idfineperiodo_q = $c_idfineperiodo;
if ($opz_cerc_pren == "arr") $iddatafine = "iddatainizio";
if ($opz_cerc_pren == "part") {
$iddatainizio = "iddatafine";
$c_idinizioperiodo_q--;
$c_idfineperiodo_q--;
} # fine if ($opz_cerc_pren == "part")
$prenotazioni = esegui_query("select * from $tableprenota where $iddatainizio < $c_idfineperiodo_q and $iddatafine >= $c_idinizioperiodo_q and idclienti != '0' $condizione_prenota_proprie order by $ordine_prenota");
$num_prenotazioni = numlin_query($prenotazioni);
if ($mos_tut_dat == "SI") include(C_DATI_PATH."/selectperiodi$anno.$id_utente.php");
else include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
$lista_date0 = explode("<option value=\"$cerca_ini\">",$dates_options_list);
$lista_date1 = explode("<option value=\"",$lista_date0[1]);
if (substr($lista_date1[2],0,10) == $cerca_fine) $num_fine = 2;
else $num_fine = 1;
if (!$opz_cerc_pren and $num_fine == 2 and $cerca_ini and $cerca_fine == date("Y-m-d",mktime(0,0,0,substr($cerca_ini,5,2),(substr($cerca_ini,8,2) + 2),substr($cerca_ini,0,4)))) $frase_cerca = " ".mex("presenti in data",$pag)." ".formatta_data(substr($lista_date1[1],0,10),$stile_data)." (".mex("comprese partenze",$pag).")";
else {
$frase_cerca = " ".mex("presenti dal",$pag)." $cerca_ini_f";
if ($cerca_fine) $frase_cerca .= " ".mex("al",$pag)." $cerca_fine_f";
} # fine else if (!$opz_cerc_pren and $num_fine == 2 and...
if (substr($lista_date1[$num_fine],0,10) == $cerca_fine) {
$lista_date0 = explode("<option value=\"",$lista_date0[0]);
$num_lista_date0 = count($lista_date0);
if ($num_lista_date0 > $num_fine) {
$n_cerca_ini = substr($lista_date0[($num_lista_date0 - 1)],0,10);
if ($num_fine == 1) $n_cerca_fine = $cerca_ini;
else $n_cerca_fine = substr($lista_date1[1],0,10);
$freccia_sx = "<a class=\"prev\" href=\"$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;senza_colori=$senza_colori&amp;mos_tut_dat=$mos_tut_dat&amp;ordine_prenota=$ordine_prenota&amp;id_utente_vedi=$id_utente_vedi&amp;cerca_prenota=SI&amp;cerca_ini=$n_cerca_ini&amp;cerca_fine=$n_cerca_fine&amp;opz_cerc_pren=$opz_cerc_pren&amp;lista_prenota=$lista_prenota\">&lt;--</a>&nbsp;";
} # fine if ($num_lista_date0 > $num_fine)
if (count($lista_date1) > ($num_fine + 1)) {
$n_cerca_ini = substr($lista_date1[1],0,10);
$n_cerca_fine = substr($lista_date1[($num_fine + 1)],0,10);
$freccia_dx = "&nbsp;<a class=\"next\" href=\"$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;senza_colori=$senza_colori&amp;mos_tut_dat=$mos_tut_dat&amp;ordine_prenota=$ordine_prenota&amp;id_utente_vedi=$id_utente_vedi&amp;cerca_prenota=SI&amp;cerca_ini=$n_cerca_ini&amp;cerca_fine=$n_cerca_fine&amp;opz_cerc_pren=$opz_cerc_pren&amp;lista_prenota=$lista_prenota\">--&gt;</a>";
} # fine if (count($lista_date1) > 2)
} # fine if (substr($lista_date1[$num_fine],0,10) == $cerca_fine)
} # fine if ($cerca_prenota and $cerca_prenota != "tutte")

if (!empty($subtotale_selezionate) and controlla_num_pos($num_cambia_pren) != "NO") {
$numeri_prenota_sel_query = "";
if (!empty($cerca_id_passati)) $idperiodocorrente = calcola_id_periodo_corrente($anno,"");
for ($num1 = 1 ; $num1 <= $num_cambia_pren ; $num1++) {
$cambianumero = "cambia".$num1;
if (!empty($$cambianumero) and controlla_num_pos($$cambianumero) != "NO") {
if ($numeri_prenota_sel_query) $numeri_prenota_sel_query .= " or idprenota = '".$$cambianumero."'";
else $numeri_prenota_sel_query = "and ( idprenota = '".$$cambianumero."'";
if (!empty($cerca_id_passati)) $numeri_prenota_sel_query .= " or (id_anni_prec $LIKE '%,".$$cambianumero.";%' and iddatafine >= '".($idperiodocorrente - 7)."')";
} # fine if (!empty($$cambianumero) and controlla_num_pos($$cambianumero) != "NO")
} # fine for $num1
if ($numeri_prenota_sel_query) $numeri_prenota_sel_query .= " ) ";
$prenotazioni = esegui_query("select * from $tableprenota where idclienti != '0' $numeri_prenota_sel_query $condizione_prenota_proprie order by $ordine_prenota");
$num_prenotazioni = numlin_query($prenotazioni);
$frase_cerca = " ".mex("selezionate precedentemente",$pag);
} # fine if (!empty($subtotale_selezionate) and controlla_num_pos($num_cambia_pren) != "NO")

} # fine if (($cerca_prenota and $cerca_prenota != "tutte") or !empty($subtotale_selezionate))

else {
$frase_cerca = mex("del",$pag)." ".$anno;
$num_vedi_in_tab = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutte_prenota' and idutente = '$id_utente_vedi'");
$num_vedi_in_tab = risul_query($num_vedi_in_tab,0,'valpersonalizza_num');
if ($num_prenotazioni > $num_vedi_in_tab or $num_prenotazioni_successive > $num_vedi_in_tab or $num_prenotazioni_precedenti > $num_vedi_in_tab) {
$idperiodocorrente = calcola_id_periodo_corrente($anno,"");
} # fine if ($num_prenotazioni > $num_vedi_in_tab or ...
} # fine else if (($cerca_prenota and $cerca_prenota != "tutte") or $subtotale_selezionate)

$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
for ($num1 = 0 ; $num1 < numlin_query($tutti_utenti) ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente_prenota[$idutenti] = risul_query($tutti_utenti,$num1,'nome_utente');
} # fine for $num1

$colori_tab_mesi = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'colori_tab_mesi' and idutente = '$id_utente_vedi'");
$colori_tab_mesi = explode(",",risul_query($colori_tab_mesi,0,'valpersonalizza'));
$colore_giallo = $colori_tab_mesi[1];
$colore_arancione = $colori_tab_mesi[2];
$colore_rosso = $colori_tab_mesi[3];

$commenti_pers = array();
$num_campi_pers_comm = 0;
$campi_pers_comm_presenti = array();
$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente_vedi'");
if (numlin_query($campi_pers_comm) == 1) $campi_pers_comm = risul_query($campi_pers_comm,0,'valpersonalizza');
else $campi_pers_comm = "";
if ($campi_pers_comm) {
$campi_pers_comm = explode(">",$campi_pers_comm);
$num_campi_pers_comm = count($campi_pers_comm);
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) $campi_pers_comm_presenti[$campi_pers_comm[$num1]] = 1;
} # fine if ($campi_pers_comm)

unlock_tabelle($tabelle_lock);


if ((isset($tab_precedenti) and $tab_precedenti == "SI") or ($cerca_prenota and $cerca_prenota != "tutte") or !empty($subtotale_selezionate)) {
$anno_prec_esistente = esegui_query("select idanni from $tableanni where idanni = '".($anno - 1)."'");
if (numlin_query($anno_prec_esistente) == 1) $anno_prec_esistente = "SI";
else $anno_prec_esistente = "NO";
} # fine ((isset($tab_precedenti) and $tab_precedenti == "SI") or ($cerca_prenota and $cerca_prenota != "tutte") or...


echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pag_pren_corr\" value=\"$pag_pren_corr\">
<input type=\"hidden\" name=\"pag_pren_succ\" value=\"$pag_pren_succ\">
<input type=\"hidden\" name=\"pag_pren_prec\" value=\"$pag_pren_prec\">
<input type=\"hidden\" name=\"senza_colori\" value=\"$senza_colori\">
<input type=\"hidden\" name=\"ordine_prenota\" value=\"$ordine_prenota\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<script type=\"text/javascript\">
<!--
function aggiorna_spunte (num_tab) {
var stato = document.getElementById('cbox_tab'+num_tab).checked;
var cbox_list = document.getElementById('tpren'+num_tab).getElementsByTagName('input');
for (var num = 0 ; num < cbox_list.length ; num++) {
cbox_list[num].checked = stato;
}
if (typeof aggiorna_prenota_sel == 'function') aggiorna_prenota_sel();
}
-->
</script>
<input type=\"hidden\" name=\"id_utente_vedi\" value=\"$id_utente_vedi\">";
$lista_prenota_contr = "";
$lista_prenota_mod = "";
$dati_tariffe = dati_tariffe($tablenometariffe,"",$tablepersonalizza);

for ($num_tab = 1 ; $num_tab <= $num_tabelle ; $num_tab = $num_tab + 1) {
$pagina_prenota = "";
$costo_tot_TOT = 0;
$costo_tot_vauta_TOT = array();
$caparra_TOT = 0;
$caparra_valuta_TOT = array();
$commissioni_TOT = 0;
$restocomm_TOT = 0;
$pagato_TOT = 0;
$tasse_TOT = 0;
$num_persone_TOT = 0;
$cat_persone_TOT = array();
if ($num_tab > 1) {
if (isset($tab_precedenti) and $tab_precedenti == "SI") {
$tab_precedenti = "";
$prenotazioni = $prenotazioni_precedenti;
$num_prenotazioni = $num_prenotazioni_precedenti;
$pagina_prenota_nome = "pag_pren_prec";
if ($pag_pren_prec) $pagina_prenota = $pag_pren_prec;
echo "<br><br><div class=\"h_ares\" style=\"text-align: center; font-size: large;\"><b>".mex("Tabella prenotazioni precedenti al",$pag)." $anno.</b></div><br>";
} # fine if (isset($tab_precedenti) and $tab_precedenti == "SI")
else {
$prenotazioni = $prenotazioni_successive;
$num_prenotazioni = $num_prenotazioni_successive;
$pagina_prenota_nome = "pag_pren_succ";
if ($pag_pren_succ) $pagina_prenota = $pag_pren_succ;
echo "<br><br><div class=\"h_ares\" style=\"text-align: center; font-size: large;\"><b>".mex("Tabella prenotazioni successive al",$pag)." $anno.</b></div><br>";
} # fine else if ($tab_precedenti == "SI")
} # fine if ($num_tab > 1)
else {
$pagina_prenota_nome = "pag_pren_corr";
if ($pag_pren_corr) $pagina_prenota = $pag_pren_corr;
$frase_tab = mex("Tabella con tutte le prenotazioni",$pag);
if ($opz_cerc_pren == "arr") $frase_tab = mex("Tabella con tutti gli arrivi",$pag);
if ($opz_cerc_pren == "part") $frase_tab =  mex("Tabella con tutte le partenze",$pag);
if ($pcanc) $frase_tab =  mex("Tabella con le prenotazioni cancellate",$pag);
echo "<br><div style=\"text-align: center; font-size: large;\"><h5 class=\"h_ares\">$freccia_sx<b>$frase_tab $frase_cerca.</b>$freccia_dx</h5></div><br>";
} # fine else if ($num_tab > 1)

if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab) {
$num_pagine_prenota = ceil($num_prenotazioni/$num_vedi_in_tab);
$stringa_pagine = "<div style=\"text-align: center;\"><small>".mex("pagine",$pag)."</small>:";
for ($num1 = 1 ; $num1 <= $num_pagine_prenota ; $num1++) {
if (!$pagina_prenota and $num1 == $num_pagine_prenota) $pagina_prenota = $num_pagine_prenota;
if (!$pagina_prenota) {
#$iddata_inizio_parziale = risul_query($prenotazioni,(($num1 -1)*$num_vedi_in_tab),'iddatainizio');
$iddata_inizio_ultima = risul_query($prenotazioni,(($num1*$num_vedi_in_tab)-1),'iddatainizio');
if ($idperiodocorrente <= $iddata_inizio_ultima) $pagina_prenota = $num1;
} # fine if (!$pagina_prenota)
$stringa_pagine .= " ";
if ($num1 != $pagina_prenota) {
$stringa_pagine .= "<a href=\"visualizza_tabelle.php?tipo_tabella=prenotazioni&amp;anno=$anno&amp;id_sessione=$id_sessione$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;sel_tab_prenota=$sel_tab_prenota&amp;senza_colori=$senza_colori&amp;mos_tut_dat=$mos_tut_dat&amp;$pagina_prenota_nome=$num1&amp;ordine_prenota=$ordine_prenota$pcanc";
if ($pagina_prenota_nome != "pag_pren_corr") $stringa_pagine .= "&amp;pag_pren_corr=$pag_pren_corr";
if ($pagina_prenota_nome != "pag_pren_prec") $stringa_pagine .= "&amp;pag_pren_prec=$pag_pren_prec";
if ($pagina_prenota_nome != "pag_pren_succ") $stringa_pagine .= "&amp;pag_pren_succ=$pag_pren_succ";
$stringa_pagine .= "&amp;lista_prenota=$lista_prenota\">";
} # fine if ($num1 != $pagina_prenota)
else $stringa_pagine .= "<b>";
$stringa_pagine .= "$num1";
if ($num1 != $pagina_prenota) $stringa_pagine .= "</a>";
else $stringa_pagine .= "</b>";
} # fine for $num1
$stringa_pagine .= "</div>";
echo $stringa_pagine;
$stringa_puntini_tab = "<tr><td colspan=\"".($num_colonne_selezionate+6)."\">...</td></tr>";
if ($num_tab == 1 and empty($tab_precedenti) and $pagina_prenota != $num_pagine_prenota) $num_tabelle = 1;
} # fine if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab)
else $pagina_prenota = 1;

#$colore_sfondo = $t1color;
$class = "t1 t1color";
if ($senza_colori) {
#$colore_sfondo = "";
$class = "t1wc";
} # fine if ($senza_colori)
echo "<div class=\"tab_cont\">
<table class=\"$class\" id=\"tpren$num_tab\" style=\"width: 3px; margin-left: auto; margin-right: auto;\" border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td";
if ($colonna_numero) echo " class=\"edit\" colspan=\"2\">";
else echo ">&nbsp;";
if ($colonna_numero) {
if (substr($ordine_prenota,0,9) != "idprenota") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=idprenota$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo "<span>".mex("N°",$pag)."</span>";
if (substr($ordine_prenota,0,9) != "idprenota") echo "</a>";
} # fine if ($colonna_numero)
echo "</td>";
if ($colonna_cognome) echo "<td>".str_replace("_","&nbsp;",mex("Cognome_cliente",$pag))."</td>";
if ($colonna_inizio) {
echo "<td class=\"t1top\">";
if (substr($ordine_prenota,0,12) != "iddatainizio") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=iddatainizio$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo str_replace("_","&nbsp;",mex("Data_iniziale",$pag));
if (substr($ordine_prenota,0,12) != "iddatainizio") echo "</a>";
echo "</td>";
} # fine if ($colonna_inizio)
if ($colonna_fine) {
echo "<td class=\"t1top\">";
if (substr($ordine_prenota,0,10) != "iddatafine") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=iddatafine$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo str_replace("_","&nbsp;",mex("Data_finale",$pag));
if (substr($ordine_prenota,0,10) != "iddatafine") echo "</a>";
echo "</td>";
} # fine if ($colonna_fine)
if ($colonna_settimane) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".mex("$parola_sett",$pag).".</td>";
if ($colonna_tariffacompleta) echo "<td class=\"t1top\" style=\"font-size: small;\">".str_replace("_","&nbsp;",mex("Tariffa_completa",$pag))."</td>";
if ($colonna_caparra) echo "<td class=\"t1top\">".mex("Caparra",$pag)."</td>";
if ($colonna_commissioni) echo "<td class=\"t1top\" style=\"font-size: small;\">".mex("Commissioni",$pag)."</td>";
if ($colonna_restocomm) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".str_replace("_","&nbsp;",mex("Tariffa_completa",$pag)." ".mex("senza_commissioni",$pag))."</td>";
if ($colonna_pagato) echo "<td class=\"t1top\">".mex("Pagato",$pag)."</td>";
if ($colonna_dapagare) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".str_replace("_","&nbsp;",mex("Da_pagare",$pag))."</td>";
if ($colonna_nometariffa) {
echo "<td class=\"t1top\">";
if (substr($ordine_prenota,0,7) != "tariffa") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=tariffa$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo mex("Tariffa",$pag);
if (substr($ordine_prenota,0,7) != "tariffa") echo "</a>";
echo "</td>";
} # fine if ($colonna_nometariffa)
if ($colonna_appartamento) {
echo "<td class=\"t1top\" style=\"font-size: x-small;\">";
if (substr($ordine_prenota,0,14) != "idappartamenti") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=idappartamenti$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
$fr_Appartamento = mex("Appartamento",'unit.php');
if (strlen($fr_Appartamento) > 4) $fr_Appartamento = substr($fr_Appartamento,0,3).".";
echo $fr_Appartamento;
if (substr($ordine_prenota,0,14) != "idappartamenti") echo "</a>";
echo "</td>";
} # fine if if ($colonna_appartamento)
if ($colonna_piano) {
echo "<td class=\"t1top\" style=\"font-size: x-small;\">";
echo ucfirst(mex("piano",$pag));
echo "</td>";
} # fine if if ($colonna_piano)
if ($colonna_casa) {
echo "<td class=\"t1top\" style=\"font-size: x-small;\">";
echo ucfirst(mex("casa",$pag));
echo "</td>";
} # fine if if ($colonna_casa)
if ($colonna_persone) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".mex("Pers.",$pag)."</td>";
if ($colonna_commento) echo "<td class=\"t1top\">".mex("Commento",$pag)."</td>";
if ($colonna_origine_prenota) {
echo "<td class=\"t1top\">";
if (substr($ordine_prenota,0,7) != "origine") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=origine$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo mex("Origine",$pag);
if (substr($ordine_prenota,0,7) != "origine") echo "</a>";
echo "</td>";
} # fine if ($colonna_origine_prenota)
if ($colonna_docsalvati) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".str_replace("_","&nbsp;",mex("Documenti_salvati",$pag))."</td>";
if ($colonna_datainserimento) {
echo "<td class=\"t1top\" style=\"font-size: x-small;\">";
if (substr($ordine_prenota,0,15) != "datainserimento") echo "<a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=prenotazioni&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=datainserimento$id_utente_vedi_passa&amp;cerca_prenota=$cerca_prenota&amp;opz_cerc_pren=$opz_cerc_pren&amp;cerca_ini=$cerca_ini&amp;cerca_fine=$cerca_fine&amp;senza_colori=$senza_colori&amp;sel_tab_prenota=$sel_tab_prenota&amp;mos_tut_dat=$mos_tut_dat&amp;lista_prenota=$lista_prenota$pcanc\">";
echo mex("Data di inserimento",$pag);
if (substr($ordine_prenota,0,15) != "datainserimento") echo "</a>";
echo "</td>";
} # fine if ($colonna_datainserimento)
if ($colonna_utenteinserimento) echo "<td class=\"t1top\">".mex("Utente",$pag)."</td>";
for ($num1 = 0 ; $num1 < $num_cp_tab ; $num1++) {
echo "<td class=\"t1top\"><small>".mex("Commento",$pag)." \"".$nome_cp_tab[$num1]."\"</small></td>";
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_ca_tab ; $num1++) {
echo "<td class=\"t1top\">";
if ($soprannome_ca_tab[$num1]) {
if (num_caratteri_testo($soprannome_ca_tab[$num1]) > 4) $soprannome_ca_tab[$num1] = "<small><small>".$soprannome_ca_tab[$num1]."</small></small>";
echo $soprannome_ca_tab[$num1];
} # fine if ($soprannome_ca[$num1])
else {
if ($tipo_ca_tab[$num1] == "cu") echo "<small><small>".str_replace("_","&nbsp;",mex("Costo_uni.",$pag))." ".$nome_ca_tab[$num1]."</small></small>";
if ($tipo_ca_tab[$num1] == "cs") echo "<small><small>".str_replace("_","&nbsp;",mex("Costo_$parola_sett.",$pag))." ".$nome_ca_tab[$num1]."</small></small>";
} # fine else if ($soprannome_ca[$num1])
echo "</td>";
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_gr_tab ; $num1++) {
echo "<td class=\"t1top\">";
if (num_caratteri_testo($nome_gr_tab[$num1]) > 4) $nome_gr_tab[$num1] = "<small><small>".$nome_gr_tab[$num1]."</small></small>";
echo $nome_gr_tab[$num1];
echo "</td>";
} # fine for $num1
echo "</tr>";

if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab and $pagina_prenota != 1) echo $stringa_puntini_tab;


for ($num1 = 0 ; $num1 < $num_prenotazioni ; $num1 = $num1 + 1) {
$numero = risul_query($prenotazioni,$num1,'idprenota');
$lista_prenota_contr .= ",".$numero;
$id_clienti = risul_query($prenotazioni,$num1,'idclienti');

$id_data_fine = risul_query($prenotazioni,$num1,'iddatafine');
$data_fine = esegui_query("select * from $tableperiodi where idperiodi = $id_data_fine");
$data_fine = risul_query($data_fine,0,'datafine');
$data_fine_f = formatta_data($data_fine,$stile_data);
$id_data_inizio = risul_query($prenotazioni,$num1,'iddatainizio');
$stile_checkin = "";
if ($id_data_inizio == 0) {
$data_inizio_f = "<".$data_inizio_assoluta_f;
$id_prenota_prec = risul_query($prenotazioni,$num1,'commento');
if ($id_prenota_prec and $anno_prec_esistente == "SI") {
$dati_prenota_prec = esegui_query("select * from $PHPR_TAB_PRE"."prenota".($anno - 1)." where idprenota = '$id_prenota_prec'");
if (numlin_query($dati_prenota_prec) == 1) {
$id_data_inizio_prec = risul_query($dati_prenota_prec,0,'iddatainizio');
$id_data_fine_prec = risul_query($dati_prenota_prec,0,'iddatafine');
$data_inizio = esegui_query("select * from $PHPR_TAB_PRE"."periodi".($anno - 1)." where idperiodi = $id_data_inizio_prec");
$data_inizio = risul_query($data_inizio,0,'datainizio');
$data_inizio_f = formatta_data($data_inizio,$stile_data);
$num1_orig = $num1;
$num1 = 0;
$prenotazioni_orig = $prenotazioni;
$prenotazioni = $dati_prenota_prec;
$numero_settimane = $id_data_fine_prec - $id_data_inizio_prec + 1;
} # fine if (numlin_query($dati_prenota_prec) == 1)
} # fine if ($id_prenota_prec and $anno_prec_esistente == "SI")
} # fine if ($id_data_inizio == 0)
else {
$data_inizio = esegui_query("select * from $tableperiodi where idperiodi = $id_data_inizio");
$data_inizio = risul_query($data_inizio,0,'datainizio');
$data_inizio_f = formatta_data($data_inizio,$stile_data);
if ((isset($colonna_orarioentrata) and $colonna_orarioentrata == "SI") or $attiva_checkin == "SI") {
$checkin = risul_query($prenotazioni,$num1,'checkin');
$checkout = risul_query($prenotazioni,$num1,'checkout');
if ($checkin and !$checkout and $attiva_checkin == "SI") $stile_checkin = " style=\"background-image:url(img/fr_sx_checkin.gif); background-repeat:no-repeat; background-position: left center;\"";
if ($checkout and !$checkin and isset($colonna_orarioentrata) and $colonna_orarioentrata == "SI") {
$stima_checkin = substr(str_replace(" ","&nbsp;",str_replace("$data_inizio_f ","",formatta_data($checkout))),0,-3);
if (strlen($stima_checkin) < 10) $stima_checkin = "&nbsp;<small><small>($stima_checkin)</small></small>";
else $stima_checkin = " <small><small>($stima_checkin)</small></small>";
$data_inizio_f .= $stima_checkin;
} # fine if ($checkout and !$checkin and...
} # fine if ((isset($colonna_orarioentrata) and $colonna_orarioentrata == "SI") or $attiva_checkin == "SI")
} # fine else if ($id_data_inizio == 0)
$mese = explode("-",$data_inizio);
$mese = $mese[1];
if ($id_data_inizio != 0) $numero_settimane = $id_data_fine - $id_data_inizio + 1;
else if (substr($data_inizio_f,0,1) == "<") $numero_settimane = "?";
if ($c_idinizioperiodo and $c_idinizioperiodo > $id_data_inizio) $id_data_inizio_cerca = $c_idinizioperiodo;
else $id_data_inizio_cerca = $id_data_inizio;
if ($c_idfineperiodo and $c_idfineperiodo < $id_data_fine) $id_data_fine_cerca = $c_idfineperiodo;
else $id_data_fine_cerca = $id_data_fine;
$numero_settimane_cerca = $id_data_fine_cerca - $id_data_inizio_cerca + 1;

$datainserimento = risul_query($prenotazioni,$num1,'datainserimento');
$datainserimento_f =formatta_data($datainserimento,$stile_data);
$numpersone = risul_query($prenotazioni,$num1,'num_persone');
if (!$numpersone or $numpersone == 0) $num_persone = "?";
else $num_persone = $numpersone;
$cat_persone = "";
if ($colonna_catpersone and $numpersone) {
$d_cat_persone = dati_cat_pers_p($prenotazioni,$num1,$dati_cat_pers,$numpersone,$lingua_mex,0);
for ($num2 = 0 ; $num2 < $d_cat_persone['num'] ; $num2++) {
if ($num2 > 0) $cat_persone .= ", ";
$cat_persone .= $d_cat_persone[$num2]['molt']."&nbsp;".str_replace(" ","&nbsp;",$d_cat_persone[$num2]['n_corr']);
if (!empty($d_cat_persone['esist'][$num2])) {
if (!isset($cat_persone_TOT[$d_cat_persone['ord'][$num2]])) $cat_persone_TOT[$d_cat_persone['ord'][$num2]] = 0;
$cat_persone_TOT[$d_cat_persone['ord'][$num2]] += $d_cat_persone[$num2]['molt'];
} # fine if (!empty($d_cat_persone['esist'][$num2]))
else {
if (!isset($cat_persone_TOT['ex'][$d_cat_persone[$num2]['n_plur']])) $cat_persone_TOT['ex'][$d_cat_persone[$num2]['n_plur']] = 0;
$cat_persone_TOT['ex'][$d_cat_persone[$num2]['n_plur']] += $d_cat_persone[$num2]['molt'];
} # fine else if (!empty($d_cat_persone['esist'][$num2]))
} # fine for $num2
} # fine if ($colonna_catpersone and $numpersone)
$tariffesettimanali = risul_query($prenotazioni,$num1,'tariffesettimanali');

$nome_tariffa = risul_query($prenotazioni,$num1,'tariffa');
$nome_tariffa = explode("#@&",$nome_tariffa);
$costo_tariffa = (double) $nome_tariffa[1];
$nome_tariffa = $nome_tariffa[0];
if (!$nome_tariffa) $nome_tariffa = "&nbsp;";
$valuta_tariffa = explode(">",(string) risul_query($prenotazioni,$num1,'valuta'));
$valuta_caparra = fixset($valuta_tariffa[1]);
$valuta_tariffa = $valuta_tariffa[0];
$caparra = risul_query($prenotazioni,$num1,'caparra');
if (!$caparra) $caparra = 0;
$caparra_p = punti_in_num($caparra,$stile_soldi);
if ($caparra) {
if (!$valuta_caparra) {
if (!isset($caparra_valuta_TOT[$Euro])) $caparra_valuta_TOT[$Euro] = 0;
$caparra_valuta_TOT[$Euro] += $caparra;
} # fine if (!$valuta_caparra)
else {
$valuta_caparra = explode("<",$valuta_caparra);
$cambio_caparra = $valuta_caparra[1];
$arrotond_caparra = $valuta_caparra[2];
$valuta_caparra = $valuta_caparra[0];
$caparra_valuta = converti_valuta($caparra,$cambio_caparra,$arrotond_caparra);
$caparra_p .= " $Euro<br><small>(".punti_in_num($caparra_valuta,$stile_soldi)." $valuta_caparra)</small>";
if (!isset($caparra_valuta_TOT[$valuta_caparra])) $caparra_valuta_TOT[$valuta_caparra] = 0;
$caparra_valuta_TOT[$valuta_caparra] += $caparra_valuta;
} # fine else if (!$valuta_caparra)
} # fine if ($caparra)
$commissioni = risul_query($prenotazioni,$num1,'commissioni');
if (!$commissioni) $commissioni = 0;
$commissioni_p = punti_in_num($commissioni,$stile_soldi);
$pagato = risul_query($prenotazioni,$num1,'pagato');
if (!$pagato) $pagato = 0;
$pagato_p = punti_in_num($pagato,$stile_soldi);
$costo_tot = risul_query($prenotazioni,$num1,'tariffa_tot');
if (!$costo_tot) $costo_tot = 0;
$costo_tot_p = punti_in_num($costo_tot,$stile_soldi);
if ($costo_tot) {
if (!$valuta_tariffa) {
if (!isset($costo_tot_vauta_TOT[$Euro])) $costo_tot_vauta_TOT[$Euro] = 0;
$costo_tot_vauta_TOT[$Euro] += $costo_tot;
} # fine if (!$valuta_tariffa)
else {
$valuta_tariffa = explode("<",$valuta_tariffa);
$cambio_tariffa = $valuta_tariffa[1];
$arrotond_tariffa = $valuta_tariffa[2];
$valuta_tariffa = $valuta_tariffa[0];
$costo_tot_valuta = converti_valuta($costo_tot,$cambio_tariffa,$arrotond_tariffa);
$costo_tot_p .= " $Euro<br><small>(".punti_in_num($costo_tot_valuta,$stile_soldi)." $valuta_tariffa)</small>";
if (!isset($costo_tot_vauta_TOT[$valuta_tariffa])) $costo_tot_vauta_TOT[$valuta_tariffa] = 0;
$costo_tot_vauta_TOT[$valuta_tariffa] += $costo_tot_valuta;
} # fine else if (!$valuta_tariffa)
} # fine if ($costo_tot)
$da_pagare = $costo_tot - $pagato;
$da_pagare_p = punti_in_num($da_pagare,$stile_soldi);
$restocomm = $costo_tot - $commissioni;
$restocomm_p = punti_in_num($restocomm,$stile_soldi);
$sconto = (double) risul_query($prenotazioni,$num1,'sconto');
$confermato = risul_query($prenotazioni,$num1,'conferma');
$confermato = substr($confermato,0,1);
$colore = "";
if ($pagato < $costo_tot) {
$colore = $colore_giallo; #giallo
if ($pagato < $caparra) $colore = $colore_arancione; #arancione
if ($confermato != "S") $colore = $colore_rosso; # rosso
} # fine if ($pagato < $costo_tot)
if ($senza_colori) $colore = "";

$tasseperc = risul_query($prenotazioni,$num1,'tasseperc');
if ($tasseperc) {
$tasse = (($costo_tariffa - $sconto) / ($tasseperc + 100)) * $tasseperc;
$tasse = $tasse / $dati_tariffe['tasse_arrotond'];
$tasse = round($tasse);
$tasse = $tasse * $dati_tariffe['tasse_arrotond'];
$tasse_TOT = $tasse_TOT + $tasse;
} # fine if ($tasseperc)

$dati_cap = dati_costi_agg_prenota($tablecostiprenota,$numero,$dati_cat_pers);
unset($num_letti_agg);
$cu_presente = array();
$cs_presente = array();
$settimane_costo = array();
$moltiplica_costo = array();
unset($num_sett_costo);
$costo_agg_tot = (double) 0;
$costo_escludi_perc = (double) 0;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
if ($dati_cap[$numca]['associasett'] == "s") {
if ($c_idinizioperiodo or $c_idfineperiodo) {
$settimane_costo[$numca] = "";
for ($num2 = $c_idinizioperiodo; $num2 < $c_idfineperiodo; $num2++) {
if ($dati_cap[$numca]['settimane'] != str_replace(",$num2,","",$dati_cap[$numca]['settimane'])) $settimane_costo[$numca] .= ",".$num2;
} # fine for $num2
if ($settimane_costo[$numca]) $settimane_costo[$numca] .= ",";
$settimane = explode(",",$dati_cap[$numca]['settimane']);
$moltiplica_sett = explode(",",$dati_cap[$numca]['moltiplica_costo']);
$moltiplica_costo[$numca] = "";
for ($num2 = 1 ; $num2 < (count($settimane) - 1) ; $num2++) if ($settimane_costo[$numca] != str_replace(",".$settimane[$num2].",","",$settimane_costo[$numca])) $moltiplica_costo[$numca] .= ",".$moltiplica_sett[$num2];
if ($moltiplica_costo[$numca]) $moltiplica_costo[$numca] .= ",";
} # fine if ($c_idinizioperiodo or $c_idfineperiodo)
else {
$settimane_costo[$numca] = $dati_cap[$numca]['settimane'];
$moltiplica_costo[$numca] = $dati_cap[$numca]['moltiplica_costo'];
} # fine else if ($c_idinizioperiodo or $c_idfineperiodo)
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$id_data_inizio,$id_data_fine,$settimane_costo[$numca],$moltiplica_costo[$numca],"","",$dati_cat_pers);
if ($settimane_costo[$numca]) $cs_presente[$dati_cap[$numca]['nome']] = (string) $numca;
$num_sett_costo[$numca] = explode(",",$settimane_costo[$numca]);
$num_sett_costo[$numca] = count($num_sett_costo[$numca]) - 2;
$molt_uguali = "SI";
$molt = explode(",",$moltiplica_costo[$numca]);
for ($num2 = 2 ; $num2 < (count($molt) - 1) ; $num2++) if ($molt[1] != $molt[$num2]) $molt_uguali = "NO";
if (isset($molt[1]) and $molt_uguali == "SI") $moltiplica_costo[$numca] = $molt[1];
else $moltiplica_costo[$numca] = "(".substr($moltiplica_costo[$numca],1,-1).")";
} # fine if ($dati_cap[$numca][associasett] == "s")
else {
if ($dati_cap[$numca]['tipo'] == "u") $cu_presente[$dati_cap[$numca]['nome']] = (string) $numca;
if ($dati_cap[$numca]['tipo'] == "s") {
$cs_presente[$dati_cap[$numca]['nome']] = (string) $numca;
$num_sett_costo[$numca] = $dati_cap[$numca]['settimane'];
} # fine if ($dati_cap[$numca][tipo] == "s")
$moltiplica_costo[$numca] = $dati_cap[$numca]['moltiplica_costo'];
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","",$dati_cat_pers);
} # fine else if ($dati_cap[$numca][associasett] == "s")
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$costo_tariffa,$tariffesettimanali,($costo_tariffa + $costo_agg_tot - $sconto),$caparra,$numpersone,fixset($dati_cap[$numca]['cat_pers']),0,$costo_escludi_perc);
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + $costo_agg_parziale;
if ($dati_cap[$numca]['tasseperc']) {
if ($dati_cap[$numca]['tasseperc'] == -1) $tasse = (double) $costo_agg_parziale;
else {
$tasse = ($costo_agg_parziale / (double) ($dati_cap[$numca]['tasseperc'] + 100)) * (double) $dati_cap[$numca]['tasseperc'];
$tasse = $tasse / $dati_tariffe['tasse_arrotond'];
$tasse = round($tasse);
$tasse = $tasse * (double) $dati_tariffe['tasse_arrotond'];
} # fine else if ($dati_cap[$numca]['tasseperc'] == -1)
$tasse_TOT = (double) $tasse_TOT + (double) $tasse;
} # fine if ($dati_cap[$numca]['tasseperc'])
} # fine for $numca
if (!empty($num_letti_agg['max']) and !empty($dati_cat_pers['num'])) {
$cat_persone .= $num_letti_agg['catp'][$num_letti_agg['sett_max']];
$cat_lettiagg_tot = $num_letti_agg['catp_tot'][$num_letti_agg['sett_max']];
reset($cat_lettiagg_tot);
foreach ($cat_lettiagg_tot as $cat_corr => $val) {
if ((string) $cat_corr == "ex") {
$cat_pers_ex = $val;
reset($cat_pers_ex);
foreach ($cat_pers_ex as $cat_ex => $val2) $cat_persone_TOT['ex'][$cat_ex] += $val2;
} # fine if ((string) $cat_corr == "ex")
else $cat_persone_TOT[$cat_corr] += $val;
} # fine foreach ($cat_lettiagg_tot as $cat_corr => $val)
} # fine if (!empty($num_letti_agg['max']) and !empty($dati_cat_pers['num']))
$n_letti_agg = fixset($num_letti_agg['max']);

$link_modifica = "SI";
$utente_inserimento = risul_query($prenotazioni,$num1,'utente_inserimento');
$nome_utente_inserimento = $nome_utente_prenota[$utente_inserimento];
if ($priv_mod_prenotazioni == "n") $link_modifica = "NO";
if ($priv_mod_prenotazioni == "p" and $utente_inserimento != $id_utente) $link_modifica = "NO";
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_inserimento]) $link_modifica = "NO";
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $id_data_inizio) $link_modifica = "NO";
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenotazioni,$num1,'datainserimento');
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $link_modifica = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
if ($link_modifica == "SI") {
$link_modifica_inizio = "<a$stilebarrato href=\"modifica_prenota.php?id_prenota=$numero$pcanc&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php\">";
$link_modifica_fine = "</a>";
#$checkbox_modifica = "<input type=\"checkbox\" name=\"cambia$numero\" value=\"SI\">";
} # fine if ($link_modifica == "SI")
else {
$link_modifica_inizio = "";
$link_modifica_fine = "";
#$checkbox_modifica = "&nbsp;";
} # fine else if ($link_modifica == "SI")

if ($id_data_inizio == 0 and substr($data_inizio_f,0,1) != "<") {
$num1 = $num1_orig;
$prenotazioni = $prenotazioni_orig;
} # fine ($id_data_inizio == 0 and substr($data_inizio_f,0,1) != "<")

if (!empty($tabella_unica_riassuntiva) or (($num1+1) > (($pagina_prenota - 1)*$num_vedi_in_tab) and ($num1+1) <= (($pagina_prenota)*$num_vedi_in_tab)) ) {


$cognome = esegui_query("select cognome,utente_inserimento from $tableclienti where idclienti = '$id_clienti'");
$mostra_cliente = "SI";
if ($vedi_clienti == "NO") $mostra_cliente = "NO";
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$utente_inserimento = risul_query($cognome,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or...
if ($mostra_cliente == "NO") $cognome = mex("Cliente",$pag)." $id_clienti";
else $cognome = risul_query($cognome,0,'cognome');
$appartamento = risul_query($prenotazioni,$num1,'idappartamenti');

if ($colonna_cognome and $colonna_ospite) {
$ospiti = esegui_query("select idclienti from $tablerclientiprenota where idprenota = '$numero' order by num_ordine ");
if (numlin_query($ospiti)) {
$id_ospite = risul_query($ospiti,0,'idclienti');
if ($id_ospite != $id_clienti) {
$cognome_ospite = esegui_query("select cognome,utente_inserimento from $tableclienti where idclienti = '$id_ospite' ");
$mostra_ospite = "SI";
if ($vedi_clienti == "NO") $mostra_ospite = "NO";
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$utente_inserimento = risul_query($cognome_ospite,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_ospite = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_ospite = "NO";
} # fine if ($vedi_clienti == "PROPRI" or...
if ($mostra_ospite != "NO") {
$cognome_ospite = risul_query($cognome_ospite,0,'cognome');
if ($cognome_ospite != $cognome) $cognome .= "<br><span class=\"smallfont\">($cognome_ospite)</span>";
} # fine if ($mostra_ospite != "NO")
} # fine if ($id_ospite != $id_clienti)
} # fine if (numlin_query($ospiti))
} # fine if ($colonna_cognome and $colonna_ospite)

$commento = risul_query($prenotazioni,$num1,'commento');
for ($num2 = 0 ; $num2 < $num_campi_pers_comm ; $num2++) $commento_pers[$campi_pers_comm[$num2]] = "";
if (strstr((string) $commento,">")) {
$commento = explode(">",$commento);
if ($priv_vedi_commenti_pers == "s") {
for ($num2 = 3 ; $num2 < count($commento) ; $num2++) {
$comm_pers = explode("<",$commento[$num2]);
if (!empty($campi_pers_comm_presenti[$comm_pers[0]])) $commento_pers[$comm_pers[0]] = $comm_pers[1];
} # fine for $num2
} # fine if ($priv_vedi_commenti_pers == "s")
$commento = $commento[0];
} # fine if (strstr((string) $commento,">"))
if ($priv_vedi_commento == "n" or !strcmp((string) $commento,"")) { $commento = "&nbsp;"; }
$origine_prenota = risul_query($prenotazioni,$num1,'origine');
if (!$origine_prenota) $origine_prenota = "&nbsp;";

$documenti_salvati = "";
if ($colonna_docsalvati) {
if (@is_array($contratti_prenota[$anno][$numero])) {
reset($contratti_prenota[$anno][$numero]);
foreach ($contratti_prenota[$anno][$numero] as $num_contr_prog => $file_doc) {
$num_contr = explode("-",$num_contr_prog);
$num_doc = $num_contr[1];
$num_contr = $num_contr[0];
$file_doc = substr($file_doc,10);
$nome_downl = strstr($file_doc,"/");
if ($nome_downl) $file_doc = str_replace($nome_downl,"",$file_doc);
$file_doc = urlencode($file_doc);
$documenti_salvati .= "<a href=\"./visualizza_contratto.php?id_sessione=$id_sessione&amp;anno=$anno&amp;id_transazione=tabdoc&amp;numero_contratto=$num_contr&amp;contr_corr=$file_doc\">".$nomi_contratti['salv'][$num_contr]." $num_doc</a>, ";
} # fine foreach ($contratti_prenota[$anno][$numero] as $num_contr_prog => $file_doc)
$documenti_salvati = substr($documenti_salvati,0,-2);
} # fine if (@is_array($contratti_prenota[$anno][$numero]))
if (!$documenti_salvati) $documenti_salvati = "&nbsp;";
} # fine if ($colonna_docsalvati)


$colonne_commeti_pers = "";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) {
$colonne_commeti_pers .= "<td style=\"font-size: x-small;\">";
if (strcmp(fixstr($commento_pers[$nome_cp_tab[$num2]]),"")) $colonne_commeti_pers .= $commento_pers[$nome_cp_tab[$num2]];
else $colonne_commeti_pers .= "&nbsp;";
$colonne_commeti_pers .= "</td>";
} # fine for $num2

if (@is_array($colonne_necessarie)) $mostra_riga = "NO";
else $mostra_riga = "SI";
$colonne_costi = "";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) {
$costo_trovato = "NO";
$colonne_costi .= "<td style=\"font-size: x-small;\">";
if ($tipo_ca_tab[$num2] == "cu" and strcmp(fixstr($cu_presente[$nome_ca_tab[$num2]]),"")) $costo_trovato = $cu_presente[$nome_ca_tab[$num2]];
if ($tipo_ca_tab[$num2] == "cs" and strcmp(fixstr($cs_presente[$nome_ca_tab[$num2]]),"")) $costo_trovato = $cs_presente[$nome_ca_tab[$num2]];
if ($costo_trovato != "NO") {
if (!empty($num_sett_costo[$costo_trovato]) and $num_sett_costo[$costo_trovato] != $numero_settimane_cerca) $colonne_costi .= $num_sett_costo[$costo_trovato].mex($lettera_s,$pag);
else $colonne_costi .=  mex("SI",$pag);
if ($moltiplica_costo[$costo_trovato] != 1) $colonne_costi .= " x".$moltiplica_costo[$costo_trovato];
if ($mostra_riga == "NO") if ($colonne_necessarie['ca'][$num2] == "SI") $mostra_riga = "SI";
} # fine if ($costo_trovato != "NO")
if ($costo_trovato == "NO") $colonne_costi .= "&nbsp;";
$colonne_costi .= "</td>";
} # fine for $num2
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) {
$separatore = $separatore_gr_tab[$num2];
$spazio = "";
$colonne_costi .= "<td style=\"font-size: x-small;\">";
if (isset($col_gr_settimane[$num2]) and $col_gr_settimane[$num2] == "SI") { $colonne_costi .= "$numero_settimane"; $spazio = $separatore; }
if (isset($col_gr_caparra[$num2]) and $col_gr_caparra[$num2] == "SI") { $colonne_costi .= $spazio.str_replace("<br>"," ",$caparra_p); $spazio = $separatore; }
if (isset($col_gr_commissioni[$num2]) and $col_gr_commissioni[$num2] == "SI") { $colonne_costi .= "$spazio$commissioni_p"; $spazio = $separatore; }
if (isset($col_gr_restocomm[$num2]) and $col_gr_restocomm[$num2] == "SI") { $colonne_costi .= "$spazio$restocomm_p"; $spazio = $separatore; }
if (isset($col_gr_pagato[$num2]) and $col_gr_pagato[$num2] == "SI") { $colonne_costi .= "$spazio$pagato_p"; $spazio = $separatore; }
if (isset($col_gr_dapagare[$num2]) and $col_gr_dapagare[$num2] == "SI") { $colonne_costi .= "$spazio$da_pagare_p"; $spazio = $separatore; }
if (isset($col_gr_nometariffa[$num2]) and $col_gr_nometariffa[$num2] == "SI") { $colonne_costi .= "$spazio$nome_tariffa"; $spazio = $separatore; }
if (isset($col_gr_appartamento[$num2]) and $col_gr_appartamento[$num2] == "SI") { $colonne_costi .= "$spazio$appartamento"; $spazio = $separatore; }
if (isset($col_gr_piano[$num2]) and $col_gr_piano[$num2] == "SI") { $colonne_costi .= $spazio.$piano_app[$appartamento]; $spazio = $separatore; }
if (isset($col_gr_casa[$num2]) and $col_gr_casa[$num2] == "SI") { $colonne_costi .= $spazio.$casa_app[$appartamento]; $spazio = $separatore; }
if (isset($col_gr_persone[$num2]) and $col_gr_persone[$num2] == "SI") {
$colonne_costi .= "$spazio$num_persone";
if ($n_letti_agg != 0) { $colonne_costi .= "+$n_letti_agg"; }
$spazio = $separatore;
} # fine if (isset($col_gr_persone[$num2]) and $col_gr_persone[$num2] == "SI")
if (isset($col_gr_catpersone[$num2]) and $col_gr_catpersone[$num2] == "SI") { $colonne_costi .= $spazio.$cat_persone; $spazio = $separatore; }
if (isset($col_gr_commento[$num2]) and $col_gr_commento[$num2] == "SI") { $colonne_costi .= "$spazio$commento"; $spazio = $separatore; }
if (isset($col_gr_origine_prenota[$num2]) and $col_gr_origine_prenota[$num2] == "SI") { $colonne_costi .= "$spazio$origine_prenota"; $spazio = $separatore; }
if (isset($col_gr_docsalvati[$num2]) and $col_gr_docsalvati[$num2] == "SI") { $colonne_costi .= "$spazio$documenti_salvati"; $spazio = $separatore; }
if (isset($col_gr_datainserimento[$num2]) and $col_gr_datainserimento[$num2] == "SI") { $colonne_costi .= "$spazio$datainserimento_f"; $spazio = $separatore; }
if (isset($col_gr_utenteinserimento[$num2]) and $col_gr_utenteinserimento[$num2] == "SI") { $colonne_costi .= "$spazio$nome_utente_inserimento"; $spazio = $separatore; }
for ($num3 = 0 ; $num3 < $num_cp_col_gr[$num2] ; $num3++) {
if (strcmp((string) $commento_pers[$nome_cp_col_gr[$num2][$num3]],"")) {
$colonne_costi .= $spazio.$commento_pers[$nome_cp_col_gr[$num2][$num3]];
$spazio = $separatore;
} # fine if (strcmp((string) $commento_pers[$nome_cp_col_gr[$num2][$num3]],""))
} # fine for $num3
for ($num3 = 0 ; $num3 < $num_ca_col_gr[$num2] ; $num3++) {
$costo_trovato = "NO";
if ($tipo_ca_col_gr[$num2][$num3] == "cu" and fixset($cu_presente[$nome_ca_col_gr[$num2][$num3]]) != "") $costo_trovato = $cu_presente[$nome_ca_col_gr[$num2][$num3]];
if ($tipo_ca_col_gr[$num2][$num3] == "cs" and fixset($cs_presente[$nome_ca_col_gr[$num2][$num3]]) != "") $costo_trovato = $cs_presente[$nome_ca_col_gr[$num2][$num3]];
if ($costo_trovato != "NO") {
$colonne_costi .= $spazio;
if ($num_sett_costo[$costo_trovato] and $num_sett_costo[$costo_trovato] != $numero_settimane_cerca) $colonne_costi .= $num_sett_costo[$costo_trovato].mex($lettera_s,$pag);
else $colonne_costi .= "SI";
if ($moltiplica_costo[$costo_trovato] != 1) $colonne_costi .= "x".$moltiplica_costo[$costo_trovato];
$spazio = $separatore;
} # fine if ($costo_trovato != "NO")
} # fine for $num3
if (!$spazio) $colonne_costi .= "&nbsp;";
elseif ($mostra_riga == "NO") if ($colonne_necessarie['gr'][$num2] == "SI") $mostra_riga = "SI";
$colonne_costi .= "</td>";
} # fine for $num2

if ($mostra_riga == "SI") {

if ($link_modifica == "SI") $lista_prenota_mod .= ",".$numero;
echo "<tr$classcanc>";
if ($colonna_numero) echo "<td$stile_checkin$stilebarrato>$link_modifica_inizio$numero$link_modifica_fine</td>";
$num_cambia++;
echo "<td><input type=\"checkbox\" name=\"cambia$num_cambia\" value=\"$numero\"></td>";
if ($colonna_cognome) echo "<td class=\"t1left\">$cognome</td>";
if ($colonna_inizio) echo "<td style=\"white-space: nowrap;\">$data_inizio_f</td>";
if ($colonna_fine) echo "<td style=\"white-space: nowrap;\">$data_fine_f</td>";
if ($colonna_settimane) echo "<td>$numero_settimane</td>";
if ($colonna_tariffacompleta) echo "<td$stilebarrato>$costo_tot_p</td>";
if ($colonna_caparra) echo "<td$stilebarrato>$caparra_p</td>";
if ($colonna_commissioni) echo "<td>$commissioni_p</td>";
if ($colonna_restocomm) echo "<td>$restocomm_p</td>";
if ($colonna_pagato) {
echo "<td";
if ($colore) echo " style=\"background-color: $colore;\"";
echo ">$pagato_p</td>";
} # fine if ($colonna_pagato)
if ($colonna_dapagare) {
echo "<td";
if ($colore) echo " style=\"background-color: $colore;\"";
echo ">$da_pagare_p</td>";
} # fine if ($colonna_dapagare)
if ($colonna_nometariffa) {
if (num_caratteri_testo($nome_tariffa) > 10) $nome_tariffa_vedi = "<small><small>$nome_tariffa</small></small>";
else $nome_tariffa_vedi = $nome_tariffa;
echo "<td>$nome_tariffa_vedi</td>";
} # fine if ($colonna_nometariffa)
if ($colonna_appartamento) echo "<td>$appartamento</td>";
if ($colonna_piano) echo "<td>".$piano_app[$appartamento]."</td>";
if ($colonna_casa) echo "<td>".$casa_app[$appartamento]."</td>";
if ($colonna_persone) {
echo "<td>$num_persone";
if ($n_letti_agg != 0) echo "+$n_letti_agg";
if ($cat_persone) echo "<small> ($cat_persone)</small>";
echo "</td>";
} # fine if ($colonna_persone)
if ($colonna_commento) echo "<td style=\"font-size: x-small;\">$commento</td>";
if ($colonna_origine_prenota) echo "<td style=\"font-size: x-small;\">$origine_prenota</td>";
if ($colonna_docsalvati) echo "<td style=\"font-size: x-small;\">$documenti_salvati</td>";
if ($colonna_datainserimento) echo "<td style=\"font-size: x-small;\">$datainserimento_f</td>";
if ($colonna_utenteinserimento) echo "<td>$nome_utente_inserimento</td>";
echo "$colonne_commeti_pers
$colonne_costi
</tr>";

} # fine if ($mostra_riga == "SI")


} # fine if (!empty($tabella_unica_riassuntiva) or ($num1+1) > ($pagina_prenota*20) and ($num1+1) < ($pagina_prenota*(20+1)))

$costo_tot_TOT = $costo_tot_TOT + $costo_tot;
$caparra_TOT = $caparra_TOT + $caparra;
$commissioni_TOT = $commissioni_TOT + $commissioni;
$restocomm_TOT = $restocomm_TOT + $restocomm;
$pagato_TOT = $pagato_TOT + $pagato;
if ($num_persone == "?") $num_persone = 0;
$num_persone_TOT = $num_persone_TOT + $num_persone + $n_letti_agg;
} # fine for $num1

if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab and $pagina_prenota != $num_pagine_prenota) {
$pag_successive = 1;
echo $stringa_puntini_tab;
} # fine if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab and...


if (empty($tabella_unica_riassuntiva) and $num_tab == 1 and $riga_prenotacanc) {
$soldi_prenota_cancellate = esegui_query("select * from $tablesoldi where idsoldi = 1");
$soldi_prenota_cancellate = risul_query($soldi_prenota_cancellate,0,'soldi_prima');
if ($soldi_prenota_cancellate != 0) {
$costo_tot_TOT = $costo_tot_TOT + $soldi_prenota_cancellate;
$restocomm_TOT = $restocomm_TOT + $soldi_prenota_cancellate;
$pagato_TOT = $pagato_TOT + $soldi_prenota_cancellate;
$col_soldi_cancellati = 1;
if ($colonna_numero) $col_soldi_cancellati++;
if ($colonna_cognome) $col_soldi_cancellati++;
if ($colonna_inizio) $col_soldi_cancellati++;
if ($colonna_fine) $col_soldi_cancellati++;
if ($colonna_settimane) $col_soldi_cancellati++;
$soldi_prenota_cancellate_p = punti_in_num($soldi_prenota_cancellate,$stile_soldi);
if (($colonna_tariffacompleta or $colonna_pagato) and empty($pag_successive)) {
echo "<tr><td colspan=\"$col_soldi_cancellati\"><i>".mex("Soldi di prenotazioni cancellate",$pag)."</i></td>";
if ($colonna_tariffacompleta) echo "<td>$soldi_prenota_cancellate_p</td>";
if ($colonna_caparra) echo "<td>&nbsp;</td>";
if ($colonna_commissioni) echo "<td>&nbsp;</td>";
if ($colonna_restocomm) echo "<td>$soldi_prenota_cancellate_p</td>";
if ($colonna_pagato) echo "<td>$soldi_prenota_cancellate_p</td>";
if ($colonna_dapagare) echo "<td>&nbsp;</td>";
if ($colonna_nometariffa) echo "<td>&nbsp;</td>";
if ($colonna_appartamento) echo "<td>&nbsp;</td>";
if ($colonna_piano) echo "<td>&nbsp;</td>";
if ($colonna_casa) echo "<td>&nbsp;</td>";
if ($colonna_persone)  echo "<td>&nbsp;</td>";
if ($colonna_commento) echo "<td>&nbsp;</td>";
if ($colonna_origine_prenota) echo "<td>&nbsp;</td>";
if ($colonna_docsalvati) echo "<td>&nbsp;</td>";
if ($colonna_datainserimento) echo "<td>&nbsp;</td>";
if ($colonna_utenteinserimento) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if (($colonna_tariffacompleta or $colonna_pagato) and empty($pag_successive))
} # fine if ($soldi_prenota_cancellate)
} # fine if (empty($tabella_unica_riassuntiva) and $num_tab == 1 and $riga_prenotacanc)

$costo_tot_TOT_vedi = punti_in_num($costo_tot_TOT,$stile_soldi);
$altre_valute_TOT = "";
reset($costo_tot_vauta_TOT);
foreach ($costo_tot_vauta_TOT as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$costo_tot_TOT_vedi .= "<small> (";
if ($costo_tot_vauta_TOT[$Euro]) $costo_tot_TOT_vedi .= $costo_tot_vauta_TOT[$Euro]."&nbsp;".$Euro." + ";
$costo_tot_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
$caparra_TOT_vedi = punti_in_num($caparra_TOT,$stile_soldi);
$altre_valute_TOT = "";
reset($caparra_valuta_TOT);
foreach ($caparra_valuta_TOT as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$caparra_TOT_vedi .= "<small> (";
if (!empty($caparra_valuta_TOT[$Euro])) $caparra_TOT_vedi .= $caparra_valuta_TOT[$Euro]."&nbsp;".$Euro." + ";
$caparra_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
$commissioni_TOT_p = punti_in_num($commissioni_TOT,$stile_soldi);
$restocomm_TOT_p = punti_in_num($restocomm_TOT,$stile_soldi);
$pagato_TOT_p = punti_in_num($pagato_TOT,$stile_soldi);
$da_pagare_TOT = $costo_tot_TOT - $pagato_TOT;
$da_pagare_TOT_p = punti_in_num($da_pagare_TOT,$stile_soldi);
$num_persone_TOT_p = punti_in_num($num_persone_TOT,$stile_soldi);
$col_totale = 1;
if ($colonna_numero) $col_totale++;
if ($colonna_cognome) $col_totale++;
if ($colonna_inizio) $col_totale++;
if ($colonna_fine) $col_totale++;
if ($colonna_settimane) $col_totale++;
if ($colonna_numero) $col_totale_tot = $col_totale - 1;
else $col_totale_tot = $col_totale;
if ($riga_totale) {
if ($colonna_numero or $colonna_tariffacompleta or $colonna_caparra or $colonna_commissioni or $colonna_restocomm or $colonna_pagato or $colonna_dapagare) {
echo "<tr>";
if ($colonna_numero) echo "<td>$num_prenotazioni</td>";
if ($col_totale_tot > 1) {
$col_totale_tot--;
echo "<td>
<input id=\"cbox_tab$num_tab\" type=\"checkbox\" onclick=\"aggiorna_spunte('$num_tab')\"></td>";
} # fine if ($col_totale_tot > 1)
echo "<td colspan=\"$col_totale_tot\"><b><i>".mex("TOTALE",$pag)."</i></b></td>";
if ($colonna_tariffacompleta) echo "<td>$costo_tot_TOT_vedi</td>";
if ($colonna_caparra) echo "<td>$caparra_TOT_vedi</td>";
if ($colonna_commissioni) echo "<td>$commissioni_TOT_p</td>";
if ($colonna_restocomm) echo "<td>$restocomm_TOT_p</td>";
if ($colonna_pagato) echo "<td>$pagato_TOT_p</td>";
if ($colonna_dapagare) echo "<td>$da_pagare_TOT_p</td>";
if ($colonna_nometariffa) echo "<td>&nbsp;</td>";
if ($colonna_appartamento) echo "<td>&nbsp;</td>";
if ($colonna_piano) echo "<td>&nbsp;</td>";
if ($colonna_casa) echo "<td>&nbsp;</td>";
if ($colonna_persone) {
echo "<td>$num_persone_TOT_p";
if (!empty($cat_persone_TOT)) {
echo "<small> (";
$ini = 1;
reset($cat_persone_TOT);
foreach ($cat_persone_TOT as $cat_corr => $val) {
if (!$ini) echo ", ";
$ini = 0;
if ((string) $cat_corr == "ex") {
$cat_pers_ex = $val;
reset($cat_pers_ex);
foreach ($cat_pers_ex as $cat_ex => $val2) echo "$val2 $cat_ex";
} # fine if ((string) $cat_corr == "ex")
else {
echo "$val ";
if ($val > 1) echo $dati_cat_pers[$cat_corr]['n_plur'];
else echo $dati_cat_pers[$cat_corr]['n_sing'];
} # fine else if ((string) $cat_corr == "ex")
} # fine foreach ($cat_persone_TOT as $cat_corr => $val)
echo ")</small>";
} # fine if (!empty($cat_persone_TOT))
echo "</td>";
} # fine if ($colonna_persone)
if ($colonna_commento) echo "<td>&nbsp;</td>";
if ($colonna_origine_prenota) echo "<td>&nbsp;</td>";
if ($colonna_docsalvati) echo "<td>&nbsp;</td>";
if ($colonna_datainserimento) echo "<td>&nbsp;</td>";
if ($colonna_utenteinserimento) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($colonna_numero or $colonna_tariffacompleta or $colonna_caparra or...
} # fine if ($riga_totale)

if ($riga_tasse and $tasse_TOT and ($colonna_tariffacompleta or $colonna_restocomm)) {
$tasse_TOT_p = punti_in_num($tasse_TOT,$stile_soldi);
$tasse_resto_tot_p = punti_in_num(($costo_tot_TOT - $tasse_TOT),$stile_soldi);
$tasse_resto_restocomm_p = punti_in_num(($restocomm_TOT - $tasse_TOT),$stile_soldi);
echo "<tr><td colspan=\"$col_totale\"><b><i>".mex("TASSE",$pag)."</i></b></td>";
if ($colonna_tariffacompleta) echo "<td>$tasse_TOT_p<small><small><br>(".mex("resto",$pag)." $tasse_resto_tot_p)</small></small></td>";
if ($colonna_caparra) echo "<td>&nbsp;</td>";
if ($colonna_commissioni) echo "<td>&nbsp;</td>";
if ($colonna_restocomm) echo "<td>$tasse_TOT_p<small><small><br>(".mex("resto",$pag)." $tasse_resto_restocomm_p)</small></small></td>";
if ($colonna_pagato) echo "<td>&nbsp;</td>";
if ($colonna_dapagare) echo "<td>&nbsp;</td>";
if ($colonna_nometariffa) echo "<td>&nbsp;</td>";
if ($colonna_appartamento) echo "<td>&nbsp;</td>";
if ($colonna_piano) echo "<td>&nbsp;</td>";
if ($colonna_casa) echo "<td>&nbsp;</td>";
if ($colonna_persone)  echo "<td>&nbsp;</td>";
if ($colonna_commento) echo "<td>&nbsp;</td>";
if ($colonna_origine_prenota) echo "<td>&nbsp;</td>";
if ($colonna_docsalvati) echo "<td>&nbsp;</td>";
if ($colonna_datainserimento) echo "<td>&nbsp;</td>";
if ($colonna_utenteinserimento) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($riga_tasse and $tasse_TOT and ($colonna_tariffacompleta or $colonna_restocomm))

$costo_cassa = 0;
if ($riga_cassa and empty($tabella_unica_riassuntiva) and $priv_vedi_tab_costi != "n") {
if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g") {
$condizione_costi_propri = "and ( utente_inserimento = '$id_utente'";
if ($priv_vedi_tab_costi == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_costi_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_tab_costi == "g")
$condizione_costi_propri .= " )";
} # fine if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g")
else $condizione_costi_propri = "";
if ($num_tab == 1) {
if (!$condizione_costi_propri) {
$costo_cassa = esegui_query("select * from $tablecosti where idcosti = 0");
$costo_cassa = risul_query($costo_cassa,0,'val_costo');
} # fine if (!$condizione_costi_propri)
else {
$data_lim = ($anno + 1)."-01-01 00:00:00";
$costi_cassa = esegui_query("select * from $tablecosti where tipo_costo = 'e' and provenienza_costo = 'p' and datainserimento < '$data_lim'$condizione_costi_propri ");
$num_costi_cassa = numlin_query($costi_cassa);
for ($num2 = 0 ; $num2 < $num_costi_cassa ; $num2++) $costo_cassa = $costo_cassa + risul_query($costi_cassa,$num2,'val_costo');
} # fine else if (!$condizione_costi_propri)
} # fine if ($num_tab == 1)
elseif (!isset($tab_precedenti) or $tab_precedenti != "SI") {
$data_lim = ($anno + 1)."-01-01 00:00:00";
$costi_cassa = esegui_query("select * from $tablecosti where tipo_costo = 'e' and provenienza_costo = 'p' and datainserimento > '$data_lim'$condizione_costi_propri ");
$num_costi_cassa = numlin_query($costi_cassa);
for ($num2 = 0 ; $num2 < $num_costi_cassa ; $num2++) $costo_cassa = $costo_cassa + risul_query($costi_cassa,$num2,'val_costo');
} # fine elseif (!isset($tab_precedenti) or $tab_precedenti != "SI")
} # fine if ($riga_cassa and empty($tabella_unica_riassuntiva) and $priv_vedi_tab_costi != "n")
if ($costo_cassa) {
$resto_tot = $costo_tot_TOT - $costo_cassa;
$resto_restocomm = $restocomm_TOT - $costo_cassa;
$resto_pagato = $pagato_TOT - $costo_cassa;
$costo_cassa_p = punti_in_num($costo_cassa,$stile_soldi);
$resto_pagato_p = punti_in_num($resto_pagato,$stile_soldi);
$resto_restocomm_p = punti_in_num($resto_restocomm,$stile_soldi);
$resto_tot_p = punti_in_num($resto_tot,$stile_soldi);
$col_costo_cassa = 0;
if ($colonna_tariffacompleta) $col_costo_cassa++;
if ($colonna_caparra) $col_costo_cassa++;
if ($colonna_commissioni) $col_costo_cassa++;
if ($colonna_restocomm) $col_costo_cassa++;
if ($colonna_pagato) $col_costo_cassa++;
if ($col_costo_cassa > 0) {
echo "<tr><td colspan=\"$col_totale\"><b><i>".mex("Trasferito in cassa",$pag).":</i></b></td>
<td colspan=\"$col_costo_cassa\">$costo_cassa_p</td>";
if ($colonna_dapagare) echo "<td>&nbsp;</td>";
if ($colonna_nometariffa) echo "<td>&nbsp;</td>";
if ($colonna_appartamento) echo "<td>&nbsp;</td>";
if ($colonna_piano) echo "<td>&nbsp;</td>";
if ($colonna_casa) echo "<td>&nbsp;</td>";
if ($colonna_persone)  echo "<td>&nbsp;</td>";
if ($colonna_commento) echo "<td>&nbsp;</td>";
if ($colonna_origine_prenota) echo "<td>&nbsp;</td>";
if ($colonna_docsalvati) echo "<td>&nbsp;</td>";
if ($colonna_datainserimento) echo "<td>&nbsp;</td>";
if ($colonna_utenteinserimento) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>
<tr><td colspan=\"$col_totale\"><b><i>".mex("RESTO",$pag)."</i></b></td>";
if ($colonna_tariffacompleta) echo "<td>$resto_tot_p</td>";
if ($colonna_caparra) echo "<td>&nbsp;</td>";
if ($colonna_commissioni) echo "<td>&nbsp;</td>";
if ($colonna_restocomm) echo "<td>$resto_restocomm_p</td>";
if ($colonna_pagato) echo "<td>$resto_pagato_p</td>";
if ($colonna_dapagare) echo "<td>&nbsp;</td>";
if ($colonna_nometariffa) echo "<td>&nbsp;</td>";
if ($colonna_appartamento) echo "<td>&nbsp;</td>";
if ($colonna_piano) echo "<td>&nbsp;</td>";
if ($colonna_casa) echo "<td>&nbsp;</td>";
if ($colonna_persone)  echo "<td>&nbsp;</td>";
if ($colonna_commento) echo "<td>&nbsp;</td>";
if ($colonna_origine_prenota) echo "<td>&nbsp;</td>";
if ($colonna_docsalvati) echo "<td>&nbsp;</td>";
if ($colonna_datainserimento) echo "<td>&nbsp;</td>";
if ($colonna_utenteinserimento) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_cp_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_ca_tab ; $num2++) echo "<td>&nbsp;</td>";
for ($num2 = 0 ; $num2 < $num_gr_tab ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($col_costo_cassa > 0)
} # fine if ($costo_cassa)

echo "</table></div>";
if (empty($tabella_unica_riassuntiva) and $num_prenotazioni > $num_vedi_in_tab) echo $stringa_pagine;

} # fine for $num_tab

if ($lista_prenota_contr) $lista_prenota_contr .= ",";
$lista_prenota_mod = substr($lista_prenota_mod,1);

if (!isset($show_bar) or $show_bar != "NO") {
echo "<br><div style=\"text-align: center;\">";
if ($priv_mod_pagato != "n" and !$pcanc) {
echo "".ucfirst(mex("porre per le prenotazioni selezionate",$pag))." <select name=\"somma_pagata\">";
if ($priv_mod_pagato == "s") echo "<option value=\"tutto\" selected>".mex("tutto pagato",$pag)."</option>
<option value=\"caparra\">".mex("caparra pagata",$pag)."</option>
<option value=\"niente\">".mex("pagato niente",$pag)."</option>";
if ($priv_mod_pagato != "n") echo "<option value=\"conferma\">".mex("la conferma",$pag)."</option>";
echo "</select>
 <button class=\"edit\" type=\"submit\" name=\"cambia_pagato\" value=\"1\"><div>".ucfirst(mex("cambia",$pag))."</div></button>
<small><small><br><br></small></small>";
} # fine if ($priv_mod_pagato != "n" and !$pcanc)
echo "<button class=\"seld smlscrfnt\" type=\"submit\" name=\"subtotale_selezionate\" value=\"1\"><div>".mex("Calcola il subtotale delle prenotazioni selezionate",$pag)."</div></button>
</div>";
} # fine if (!isset($show_bar) or $show_bar != "NO")
echo "<input type=\"hidden\" name=\"num_cambia_pren\" value=\"$num_cambia\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
</div></form>";

if (!isset($show_bar) or $show_bar != "NO") {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<input type=\"hidden\" name=\"origine\" value=\"visualizza_tabelle.php?tipo_tabella=prenotazioni&amp;id_utente_vedi=$id_utente_vedi&amp;senza_colori=$senza_colori&amp;mos_tut_dat=$mos_tut_dat&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=$ordine_prenota$pcanc\">
<input id=\"lst_prenota_mod\" type=\"hidden\" name=\"id_prenota\" value=\"$lista_prenota_mod\">
<input id=\"fsl_prenota_mod\" type=\"hidden\" value=\"".mex("Modifica come gruppo le prenotazioni selezionate",$pag)."\">
<input id=\"fms_prenota_mod\" type=\"hidden\" value=\"".mex("Modifica come gruppo le prenotazioni mostrate in tabella",$pag)."\">
<button id=\"smt_prenota_mod\" class=\"mress smlscrfnt\" type=\"submit\"><div>".mex("Modifica come gruppo le prenotazioni mostrate in tabella",$pag)."</div></button>
</div></form></div>";
} # fine if (!isset($show_bar) or $show_bar != "NO")

$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
$nome_contratto = array();
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
$option_num_contr = "";
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or (isset($contratti_consentiti_vett[$num_contratto]) and $contratti_consentiti_vett[$num_contratto] == "SI")) {
if (!empty($nome_contratto[$num_contratto])) $num_contratto_vedi = $nome_contratto[$num_contratto];
else $num_contratto_vedi = $num_contratto;
$option_num_contr .= "<option value=\"$num_contratto\">$num_contratto_vedi</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO")) {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<input type=\"hidden\" name=\"origine\" value=\"visualizza_tabelle.php?tipo_tabella=prenotazioni&amp;id_utente_vedi=$id_utente_vedi&amp;senza_colori=$senza_colori&amp;mos_tut_dat=$mos_tut_dat&amp;pag_pren_corr=$pag_pren_corr&amp;pag_pren_prec=$pag_pren_prec&amp;pag_pren_succ=$pag_pren_succ&amp;ordine_prenota=$ordine_prenota$pcanc\">
<input id=\"lst_prenota_contr\" type=\"hidden\" name=\"lista_prenota\" value=\"$lista_prenota_contr\">";
if ($cerca_prenota) {
echo "<input type=\"hidden\" name=\"data_inizio_selezione\" value=\"$cerca_ini\">
<input type=\"hidden\" name=\"data_fine_selezione\" value=\"$cerca_fine\">";
} # fine if ($cerca_prenota)
echo "".ucfirst(mex("documento di tipo",$pag))."
 <select name=\"numero_contratto\">$option_num_contr</select>
 <button class=\"vdoc\" type=\"submit\"><div>".ucfirst(mex("visualizza",$pag))."</div></button>
</div></form></div>";
} # fine if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO"))

} # fine if (!isset($mostra_tab_principale) or $mostra_tab_principale != "NO")

} # fine if ($tipo_tabella == "prenotazioni" and $priv_vedi_tab_prenotazioni != "n")





if ($tipo_tabella == "costi" and $priv_vedi_tab_costi != "n") {

if (defined("C_MASSIMO_NUM_COSTI") and C_MASSIMO_NUM_COSTI != 0) {
$num_costi_esistenti = esegui_query("select idcosti from $tablecosti");
$num_costi_esistenti = numlin_query($num_costi_esistenti);
if ($num_costi_esistenti >= (C_MASSIMO_NUM_COSTI + 1)) {
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
} # fine if ($num_costi_esistenti >= (C_MASSIMO_NUM_COSTI + 1))
} # fine if (defined("C_MASSIMO_NUM_COSTI") and C_MASSIMO_NUM_COSTI != 0)


if (!empty($crea_cassa) and strcmp((string) $n_nome_cassa,"") and $id_utente == 1) {
$tabelle_lock = array($tablecasse);
$tabelle_lock = lock_tabelle($tabelle_lock);
if (@get_magic_quotes_gpc()) $n_nome_cassa = stripslashes($n_nome_cassa);
$n_nome_cassa = htmlspecialchars($n_nome_cassa);
$cassa_esistente = esegui_query("select * from $tablecasse where nome_cassa = '".aggslashdb($n_nome_cassa)."' ");
if (!numlin_query($cassa_esistente)) {
$mostra_tab_costi = "NO";
$max_cassa = esegui_query("select max(idcasse) from $tablecasse");
$max_cassa = risul_query($max_cassa,0,0) + 1;
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tablecasse (idcasse,nome_cassa,datainserimento,hostinserimento,utente_inserimento) values ('$max_cassa','".aggslashdb($n_nome_cassa)."','$datainserimento','$HOSTNAME','$id_utente')");
echo mex("Una cassa chiamata",$pag)." <em>$n_nome_cassa</em> ".mex("è stata creata",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine if (!numlin_query($cassa_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (!empty($crea_cassa) and strcmp((string) $n_nome_cassa,"") and...


if (!empty($canc_cassa) and $c_id_cassa and $id_utente == 1) {
if (controlla_num_pos($c_id_cassa) != "NO") {
$tabelle_lock = array($tableprivilegi,$tablecasse);
$tabelle_lock = lock_tabelle($tabelle_lock);
$cassa_esistente = esegui_query("select * from $tablecasse where idcasse = '".aggslashdb($c_id_cassa)."' ");
if (numlin_query($cassa_esistente)) {
$nome_cassa = risul_query($cassa_esistente,0,'nome_cassa');
$mostra_tab_costi = "NO";
esegui_query("delete from $tablecasse where idcasse = '$c_id_cassa' ");
$privilegi_casse = esegui_query("select * from $tableprivilegi where anno = '1' ");
for ($num1 = 0 ; $num1 < numlin_query($privilegi_casse) ; $num1++) {
$casse_consentite = risul_query($privilegi_casse,$num1,'casse_consentite');
$n_casse_consentite = substr(str_replace(",$c_id_cassa,",",","$casse_consentite,"),0,-1);
if ($casse_consentite != $n_casse_consentite) {
$idutente_priv_casse = risul_query($privilegi_casse,$num1,'idutente');
esegui_query("update $tableprivilegi set casse_consentite = '$n_casse_consentite' where idutente = '$idutente_priv_casse' and anno = '1' ");
} # fine ($casse_consentite != $n_casse_consentite)
} # fine for $num1
echo mex("La cassa chiamata",$pag)." <em>$nome_cassa</em> ".mex("è stata cancellata",$pag).". ".mex("Eventuali entrate e spese presenti in cassa non sono state cancellate",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine if (numlin_query($cassa_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (controlla_num_pos($c_id_cassa) != "NO")
} # fine if (!empty($canc_cassa) and $c_id_cassa and $id_utente == 1)


if (!empty($idcosti) and empty($torna_alla_tab)) {
$mostra_tab_costi = "NO";
$continua = "";
$tabelle_lock = array($tablecosti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$idcosti = aggslashdb($idcosti);
$costo = esegui_query("select * from $tablecosti where idcosti = '$idcosti' ");
if (numlin_query($costo) == 0) $continua = "NO";
else {
$utente_inserimento = risul_query($costo,0,"utente_inserimento");
if ($priv_vedi_tab_costi == "p" and $id_utente != $utente_inserimento) $continua = "NO";
if ($priv_vedi_tab_costi == "g" and !$utenti_gruppi[$utente_inserimento]) $continua = "NO";
} # fine else if (numlin_query($costo) == 0)
if ($continua != "NO") {
$tipo_costo = risul_query($costo,0,'tipo_costo');
if (($tipo_costo == "s" and $priv_ins_spese == "s") or ($tipo_costo == "e" and $priv_ins_entrate == "s")) {
$nome_costo = risul_query($costo,0,'nome_costo');
$val_costo = risul_query($costo,0,'val_costo');
$provenienza_costo = risul_query($costo,0,'provenienza_costo');
$datains_costo = risul_query($costo,0,'datainserimento');
if (empty($cancella)) {
if ($tipo_costo == "s") {
echo mex("Sei sicuro di voler cancellare la spesa",$pag)." \"$nome_costo\" ".mex("del valore di",$pag)." $val_costo $Euro?";
} # fine if ($tipo_costo == "s")
if ($tipo_costo == "e") {
echo mex("Sei sicuro di voler cancellare l'entrata",$pag)." \"$nome_costo\" ".mex("del valore di",$pag)." $val_costo $Euro?";
} # fine if ($tipo_costo == "e")
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idcosti\" value=\"$idcosti\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"caex\" type=\"submit\" name=\"cancella\" value=\"1\"><div>".mex("SI",$pag)."</div></button>
<button class=\"gobk\" type=\"submit\" name=\"torna_alla_tab\" value=\"1\"><div>".mex("NO",$pag)."</div></button>
</div></form>";
} # fine if (empty($cancella))

else {
if ($provenienza_costo == "p" and $anno >= substr($datains_costo,0,4)) {
$costo0 = esegui_query("select * from $tablecosti where idcosti = 0");
$costo0 = risul_query($costo0,0,'val_costo');
$costo0 = $costo0 - $val_costo;
esegui_query("update $tablecosti set val_costo = '$costo0' where idcosti = '0' ");
} # fine if ($provenienza_costo == "p" and $anno >= substr($datains_costo,0,4))
esegui_query("delete from $tablecosti where idcosti = '$idcosti' ");
echo mex("Entrata o spesa",$pag)." $idcosti ".mex("cacellata",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine else if (empty($cancella))
} # fine if (($tipo_costo == "s" and $priv_ins_spese == "s") or...
} # fine if ($continua != "NO")
else {
echo mex("Costo o spesa già cancellati",$pag)."<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine else if (numlin_query($costo) != 0)
unlock_tabelle($tabelle_lock);
} # fine if (!empty($idcosti) and empty($torna_alla_tab))


if (!isset($mostra_tab_costi) or $mostra_tab_costi != "NO" or !empty($conv_valuta_cassa)) {
if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g") {
$condizione_costi_propri = "and ( utente_inserimento = '$id_utente'";
if ($priv_vedi_tab_costi == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_costi_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_tab_costi == "g")
$condizione_costi_propri .= " )";
} # fine if ($priv_vedi_tab_costi == "p" or $priv_vedi_tab_costi == "g")
else $condizione_costi_propri = "";
} # fine if (!isset($mostra_tab_costi) or $mostra_tab_costi != "NO" or...


if (!empty($conv_valuta_cassa) and ($priv_ins_entrate == "s" or $priv_ins_spese == "s")) {
if (controlla_num_pos($conv_id_cassa) != "NO") {
$tabelle_lock = array($tablecosti);
$altre_tab_lock = array($tablepersonalizza,$tablecasse);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$cassa_esistente = esegui_query("select * from $tablecasse where idcasse = '".aggslashdb($conv_id_cassa)."' ");
if (numlin_query($cassa_esistente)) {
$nome_cassa = risul_query($cassa_esistente,0,'nome_cassa');
$mostra_tab_costi = "NO";
$altre_valute = altre_valute();
$arrotond_predef = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_predef' and idutente = '$id_utente'");
$arrotond_predef = (double) risul_query($arrotond_predef,0,'valpersonalizza');
if ($conv_id_cassa == 1) $cond_cassa = "(nome_cassa = '' or nome_cassa is NULL) ";
else $cond_cassa = "nome_cassa = '".aggslashdb($nome_cassa)."' ";
$costi = esegui_query("select * from $tablecosti where $cond_cassa$condizione_costi_propri order by idcosti");
$num_costi = numlin_query($costi);
$costi_valuta_TOT = array();
$costi_euro_TOT = array();
$ultimo_costo_valuta = array();
for ($num1 = 0 ; $num1 < $num_costi ; $num1++) {
$valuta_int = risul_query($costi,$num1,'valuta');
if ($valuta_int) {
$valuta = explode(">",$valuta_int);
$valuta_corr = $altre_valute['id'][$valuta[0]];
if ($valuta[3] != "c" and strcmp((string) $valuta_corr,"") and ${"conv_valuta".$valuta_corr}) {
$tipo_costo = risul_query($costi,$num1,'tipo_costo');
if (($priv_ins_entrate == "s" and $tipo_costo == "e") or ($priv_ins_spese == "s" and $tipo_costo == "s")) {
$idcosti = risul_query($costi,$num1,'idcosti');
$val_costo = (double) risul_query($costi,$num1,'val_costo');
$costo_valuta = (double) risul_query($costi,$num1,'costo_valuta');
$cambio_corr = $altre_valute[$valuta_corr]['cambio'];
if ($valuta[1] != $cambio_corr) {
$ultimo_costo_valuta[$valuta[0]] = $idcosti;
$n_val_costo = (double) $costo_valuta / (double) $cambio_corr;
$n_val_costo = $n_val_costo / $arrotond_predef;
$n_val_costo = round($n_val_costo);
$n_val_costo = $n_val_costo * $arrotond_predef;
if ($n_val_costo != $val_costo) esegui_query("update $tablecosti set val_costo = '".aggslashdb($n_val_costo)."' where idcosti = '$idcosti' ");
} # fine if ($valuta[1] != $cambio_corr)
else $n_val_costo = $val_costo;
if ($tipo_costo == "e") {
$costi_valuta_TOT[$valuta[0]] += $costo_valuta;
$costi_euro_TOT[$valuta[0]] += $n_val_costo;
} # fine if ($tipo_costo == "e")
else {
$costi_valuta_TOT[$valuta[0]] -= $costo_valuta;
$costi_euro_TOT[$valuta[0]] -= $n_val_costo;
} # fine else if  ($tipo_costo == "e")
esegui_query("update $tablecosti set valuta = '".aggslashdb($valuta_int.">c")."' where idcosti = '$idcosti' ");
} # fine if (($priv_ins_entrate == "s" and $tipo_costo == "e") or...
} # fine if ($valuta[3] != "c" and strcmp((string) $valuta_corr,"") and ${"conv_valuta".$valuta_corr})
} # fine if ($valuta_int)
} # fine for $num1

# Se l'arrotondamento di tutta una valuta è diverso dalla somma degli arrotondamenti metto la differenza nell'ultimo pagamento
reset($ultimo_costo_valuta);
foreach ($ultimo_costo_valuta as $valuta_corr => $idcosti) {
$costi_euro = (double) $costi_euro_TOT[$valuta_corr];
$costi_valuta = $costi_valuta_TOT[$valuta_corr];
$cambio_corr = $altre_valute[$altre_valute['id'][$valuta_corr]]['cambio'];
$costi_euro_cambio = (double) $costi_valuta / (double) $cambio_corr;
$costi_euro_cambio = $costi_euro_cambio / $arrotond_predef;
$costi_euro_cambio = round($costi_euro_cambio);
$costi_euro_cambio = $costi_euro_cambio * $arrotond_predef;
if (round($costi_euro_cambio,2) != round($costi_euro,2)) {
$costi_euro_TOT[$valuta_corr] = $costi_euro_cambio;
$diff = round(($costi_euro_cambio - $costi_euro),2);
$costo = esegui_query("select * from $tablecosti where idcosti = '$idcosti' ");
$tipo_costo = (double) risul_query($costo,0,'tipo_costo');
$val_costo = (double) risul_query($costo,0,'val_costo');
if ($tipo_costo == "e") $n_val_costo = $val_costo + $diff;
else $n_val_costo = $val_costo - $diff;
esegui_query("update $tablecosti set val_costo = '".aggslashdb($n_val_costo)."' where idcosti = '$idcosti' ");
} # fine if (round($costi_euro_cambio,2) != round($costi_euro,2))
} # fine foreach ($ultimo_costo_valuta as $valuta_corr => $idcosti)

if (!empty($costi_valuta_TOT)) {
echo mex("Le altre valute presenti nella cassa",$pag)." <em>$nome_cassa</em> ".mex("sono state convertite in",$pag)." $Euro:<br>";
reset($costi_valuta_TOT);
foreach ($costi_valuta_TOT as $valuta_corr => $costo_valuta) {
echo punti_in_num($costo_valuta,$stile_soldi)." $valuta_corr = ";
if ($ultimo_costo_valuta[$valuta_corr]) echo "<span class=\"colinfo\">";
echo punti_in_num($costi_euro_TOT[$valuta_corr],$stile_soldi);
if ($ultimo_costo_valuta[$valuta_corr]) echo "</span>";
echo " $Euro<br>";
} # fine foreach ($costi_valuta_TOT as $valuta_corr => $costo_valuta)
} # fine if (!empty($costi_valuta_TOT))
echo "<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine if (numlin_query($cassa_esistente))
unlock_tabelle($tabelle_lock);
} # fine if (controlla_num_pos($c_id_cassa) != "NO")
} # fine if (!empty($conv_valuta_cassa) and ($priv_ins_entrate == "s" or $priv_ins_spese == "s"))



if (!isset($mostra_tab_costi) or $mostra_tab_costi != "NO") {

$altre_valute = altre_valute();

$casse = esegui_query("select * from $tablecasse order by idcasse");
$num_casse = numlin_query($casse);
$opt_casse_canc = "";
$casse_mostra = array();
unset($cassa_presente);
$max_id_cassa = 1;
for ($num1 = 0 ; $num1 < $num_casse ; $num1++) {
$id_cassa = risul_query($casse,$num1,'idcasse');
if ($attiva_casse_consentite == "n" or $casse_consentite_vett[$id_cassa] == "SI") {
if ($id_cassa == 1) $nome_cassa = 1;
else {
$nome_cassa = risul_query($casse,$num1,'nome_cassa');
$cassa_presente[$nome_cassa] = 1;
$opt_casse_canc .= "<option value=\"$id_cassa\">$nome_cassa</otpion>";
} # fine else if ($id_cassa == 1)
$casse_mostra[$id_cassa] = $nome_cassa;
if ($id_cassa > $max_id_cassa) $max_id_cassa = $id_cassa;
} # fine if ($attiva_casse_consentite == "n" or $casse_consentite_vett[$id_cassa] == "SI")
} # fine for $num1
if ($attiva_casse_consentite == "n") {
$num_cassa_corr = $max_id_cassa;
$casse_canc = esegui_query("select distinct nome_cassa from $tablecosti where nome_cassa != '' and nome_cassa is not NULL ");
$num_casse_canc = numlin_query($casse_canc);
for ($num1 = 0 ; $num1 < $num_casse_canc ; $num1++) {
$nome_cassa = risul_query($casse_canc,$num1,'nome_cassa');
if (!$cassa_presente[$nome_cassa]) {
$num_cassa_corr++;
$casse_mostra[$num_cassa_corr] = $nome_cassa;
} # fine if (!$cassa_presente[$nome_cassa])
} # fine for $num1
} # fine if ($attiva_casse_consentite == "n")

$num_vedi_in_tab = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_casse' and idutente = '$id_utente'");
$num_vedi_in_tab = risul_query($num_vedi_in_tab,0,'valpersonalizza_num');
$mostra_tot_giorn = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'tot_giornalero_tab_casse' and idutente = '$id_utente'");
$mostra_tot_giorn = risul_query($mostra_tot_giorn,0,'valpersonalizza');
if (str_replace(",mens,","",",$mostra_tot_giorn,") != ",$mostra_tot_giorn,") $mostra_tot_mens = 1;
else $mostra_tot_mens = 0;
if (str_replace(",tab,","",",$mostra_tot_giorn,") != ",$mostra_tot_giorn,") $mostra_tot_tab = 1;
else $mostra_tot_tab = 0;
if (str_replace(",gior,","",",$mostra_tot_giorn,") != ",$mostra_tot_giorn,") $mostra_tot_giorn = 1;
else $mostra_tot_giorn = 0;

$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
$option_num_contr = "";
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or (isset($contratti_consentiti_vett[$num_contratto]) and $contratti_consentiti_vett[$num_contratto] == "SI")) {
if (!empty($nome_contratto[$num_contratto])) $num_contratto_vedi = $nome_contratto[$num_contratto];
else $num_contratto_vedi = $num_contratto;
$option_num_contr .= "<option value=\"$num_contratto\">$num_contratto_vedi</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto


foreach ($casse_mostra as $id_cassa => $nome_cassa) {
if ($id_cassa == 1) $cond_cassa = " and (nome_cassa = '' or nome_cassa is NULL) ";
else $cond_cassa = " and nome_cassa = '".aggslashdb($nome_cassa)."' ";
$entrate_TOT = 0;
$spese_TOT = 0;
$entrate_valuta_TOT = array();
$spese_valuta_TOT = array();


echo "<a name=\"entr_cassa$id_cassa\"></a><br>
<h3 id=\"h_inc\"><span>".mex("Tutte le entrate del",$pag)." $anno ";
if ($id_cassa == 1) echo mex("nella cassa principale",$pag);
else echo mex("nella cassa chiamata",$pag)." <em>$nome_cassa</em>";
echo ".</span></h3>";

$costi = esegui_query("select * from $tablecosti where tipo_costo = 'e' $cond_cassa$condizione_costi_propri order by idcosti");
$num_costi = numlin_query($costi);

$stringa_pagine = "";
$stringa_puntini_tab = "";
if ($num_costi > $num_vedi_in_tab) {
$num_pagine_prenota = ceil($num_costi/$num_vedi_in_tab);
$stringa_pagine = "<div style=\"text-align: center;\"><small>".mex("pagine",$pag)."</small>:";
$pagina_prenota = fixset(${"pag_entrate".$id_cassa});
if (!$pagina_prenota) $pagina_prenota = $num_pagine_prenota;
for ($num1 = 1 ; $num1 <= $num_pagine_prenota ; $num1++) {
$stringa_pagine .= " ";
if ($num1 != $pagina_prenota) {
$stringa_pagine .= "<a href=\"./$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;pag_entrate$id_cassa=$num1&amp;pag_uscite$id_cassa=".fixset(${"pag_uscite".$id_cassa})."&idc_passa=$id_cassa#entr_cassa$id_cassa\">";
} # fine if ($num1 != $pagina_prenota)
else $stringa_pagine .= "<b>";
$stringa_pagine .= $num1;
if ($num1 != $pagina_prenota) $stringa_pagine .= "</a>";
else $stringa_pagine .= "</b>";
} # fine for $num1
$stringa_pagine .= "</div>";
$stringa_puntini_tab = "<tr><td colspan=\"6\">...</td></tr>";
} # fine if ($num_costi > $num_vedi_in_tab)
else $pagina_prenota = 0;

echo "<br>$stringa_pagine
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".str_replace("_","&nbsp;",mex("Natura_entrata",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Importo",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Inserita_da",$pag))."</td>
<td class=\"t1top\"><small>".str_replace(" ","&nbsp;",mex("Metodo pagamento",$pag))."</small></td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Id",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Data_di_inserimento",$pag))."</td>";
if ($priv_ins_entrate == "s") echo "<td class=\"t1top\">".mex("Cancella",$pag)."</td>";
echo "</tr>";
if ($stringa_pagine and $pagina_prenota > 1) echo $stringa_puntini_tab;

$num_costi_in_tab = 0;
$totale_giornaliero = array();
$totale_mesile = array();
$totale_giornaliero_valuta = array();
$totale_mesile_valuta = array();
$ultimo_giorno = "";
$ultimo_mese = "";
for ($num2 = 0 ; $num2 < $num_costi ; $num2 = $num2 + 1) {
$num_costi_in_tab++;
$val_costo = (double) risul_query($costi,$num2,'val_costo');
$entrate_TOT = $entrate_TOT + $val_costo;
$datainserimento = risul_query($costi,$num2,'datainserimento');
$datainserimento = substr($datainserimento,0,10);
$datamese = substr($datainserimento,0,7);
$val_costo_vedi = punti_in_num($val_costo,$stile_soldi);
$valuta = risul_query($costi,$num2,'valuta');
if ($valuta) {
$valuta = explode(">",$valuta);
$costo_valuta = risul_query($costi,$num2,'costo_valuta');
$costo_valuta_p = punti_in_num($costo_valuta,$stile_soldi)."&nbsp;".$valuta[0];
if (!isset($valuta[3]) or $valuta[3] != "c") {
if (!isset($entrate_valuta_TOT[$valuta[0]])) $entrate_valuta_TOT[$valuta[0]] = 0;
$entrate_valuta_TOT[$valuta[0]] += $costo_valuta;
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero_valuta[$datainserimento][$valuta[0]])) $totale_giornaliero_valuta[$datainserimento][$valuta[0]] = 0;
if (!isset($totale_mesile_valuta[$datamese][$valuta[0]])) $totale_mesile_valuta[$datamese][$valuta[0]] = 0;
$totale_giornaliero_valuta[$datainserimento][$valuta[0]] += $costo_valuta;
$totale_mesile_valuta[$datamese][$valuta[0]] += $costo_valuta;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
} # fine if (!isset($valuta[3]) or $valuta[3] != "c")
else $costo_valuta_p = "<s>$costo_valuta_p</s>";
$val_costo_vedi .= "<small> ($costo_valuta_p)</small>";
} # fine if ($valuta)
if (!$valuta or (isset($valuta[3]) and $valuta[3] == "c")) {
if (!isset($entrate_valuta_TOT[$Euro])) $entrate_valuta_TOT[$Euro] = 0;
$entrate_valuta_TOT[$Euro] += $val_costo;
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero_valuta[$datainserimento][$Euro])) $totale_giornaliero_valuta[$datainserimento][$Euro] = 0;
if (!isset($totale_mesile_valuta[$datamese][$Euro])) $totale_mesile_valuta[$datamese][$Euro] = 0;
$totale_giornaliero_valuta[$datainserimento][$Euro] += $val_costo;
$totale_mesile_valuta[$datamese][$Euro] += $val_costo;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
} # fine if (!$valuta or (isset($valuta[3]) and $valuta[3] == "c"))
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero[$datainserimento])) $totale_giornaliero[$datainserimento] = 0;
if (!isset($totale_mesile[$datamese])) $totale_mesile[$datamese] = 0;
$totale_giornaliero[$datainserimento] += $val_costo;
$totale_mesile[$datamese] += $val_costo;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
if (!$pagina_prenota or ($num_costi_in_tab > ($num_costi - (($num_pagine_prenota - $pagina_prenota + 1) * $num_vedi_in_tab)) and $num_costi_in_tab <= ($num_costi - (($num_pagine_prenota - $pagina_prenota) * $num_vedi_in_tab)))) {
$idcosti = risul_query($costi,$num2,'idcosti');
$nome_costo = risul_query($costi,$num2,'nome_costo');
$persona_costo = risul_query($costi,$num2,'persona_costo');
if (!$persona_costo) $persona_costo = "&nbsp;";
$metodo_pagamento = risul_query($costi,$num2,'metodo_pagamento');
if (!$metodo_pagamento) $metodo_pagamento = "&nbsp;";
$id_pagamento = risul_query($costi,$num2,'id_pagamento');
if (!$id_pagamento) $id_pagamento = "&nbsp;";
else {
if (strlen($id_pagamento) > 36) $id_pagamento = "<small><small>$id_pagamento</small></small>";
elseif (strlen($id_pagamento) > 24) $id_pagamento = "<small>$id_pagamento</small>";
} # fine else if (!$id_pagamento)
$datainserimento_f = formatta_data($datainserimento,$stile_data);
$data_transazione = substr((string) risul_query($costi,$num2,'data_transazione'),0,10);
if ($datainserimento != $data_transazione) $datainserimento_f .= " <small>(".formatta_data($data_transazione,$stile_data).")</small>";
$provenienza_costo = risul_query($costi,$num2,'provenienza_costo');
if ($provenienza_costo == "p") { $nome_costo = $nome_costo."(*)"; }
if ($mostra_tot_giorn or $mostra_tot_mens) {
if ($mostra_tot_giorn and $ultimo_giorno and $ultimo_giorno != $datainserimento and $totale_giornaliero[$ultimo_giorno]) {
$entrate_TOT_vedi = punti_in_num($totale_giornaliero[$ultimo_giorno],$stile_soldi);
$altre_valute_TOT = "";
$tot_giorn_valuta = $totale_giornaliero_valuta[$ultimo_giorno];
reset($tot_giorn_valuta);
foreach ($tot_giorn_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$entrate_TOT_vedi .= "<small> (";
if ($tot_giorn_valuta[$Euro]) $entrate_TOT_vedi .= $tot_giorn_valuta[$Euro]."&nbsp;".$Euro." + ";
$entrate_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small><small>".mex("TOTALE",$pag)." ".formatta_data($ultimo_giorno,$stile_data)."</small></small></td>
<td>$entrate_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_entrate == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_giorn and $ultimo_giorno and $ultimo_giorno != $datainserimento and...
if ($mostra_tot_mens and $ultimo_mese and $ultimo_mese != $datamese and $totale_mesile[$ultimo_mese]) {
$entrate_TOT_vedi = punti_in_num($totale_mesile[$ultimo_mese],$stile_soldi);
$altre_valute_TOT = "";
$tot_mese_valuta = $totale_mesile_valuta[$ultimo_mese];
reset($tot_mese_valuta);
foreach ($tot_mese_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$entrate_TOT_vedi .= "<small> (";
if ($tot_mese_valuta[$Euro]) $entrate_TOT_vedi .= $tot_mese_valuta[$Euro]."&nbsp;".$Euro." + ";
$entrate_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small>".mex("TOTALE",$pag)."  ".substr($ultimo_mese,5,2)."-".substr($ultimo_mese,0,4)."</small></td>
<td>$entrate_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_entrate == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_mens and $ultimo_mese and $ultimo_mese != $datamese and...
$ultimo_giorno = $datainserimento;
$ultimo_mese = $datamese;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
echo "<tr><td class=\"t1left\">$nome_costo</td>
<td>$val_costo_vedi</td>
<td>$persona_costo</td>
<td>$metodo_pagamento</td>
<td>$id_pagamento</td>
<td>$datainserimento_f</td>";
if ($priv_ins_entrate == "s") echo "<td><a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idcosti=$idcosti\">".mex("cancella",$pag)."</a></td>";
echo "</tr>";

if (($mostra_tot_giorn or $mostra_tot_mens) and $num2 == ($num_costi - 1)) {
if ($mostra_tot_giorn and $totale_giornaliero[$datainserimento]) {
$entrate_TOT_vedi = punti_in_num($totale_giornaliero[$datainserimento],$stile_soldi);
$altre_valute_TOT = "";
$tot_giorn_valuta = $totale_giornaliero_valuta[$datainserimento];
reset($tot_giorn_valuta);
foreach ($tot_giorn_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$entrate_TOT_vedi .= "<small> (";
if (!empty($tot_giorn_valuta[$Euro])) $entrate_TOT_vedi .= $tot_giorn_valuta[$Euro]."&nbsp;".$Euro." + ";
$entrate_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small><small>".mex("TOTALE",$pag)." $datainserimento_f</small></small></td>
<td>$entrate_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_entrate == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_giorn and $totale_giornaliero[$datainserimento])
if ($mostra_tot_mens and $totale_mesile[$datamese]) {
$entrate_TOT_vedi = punti_in_num($totale_mesile[$datamese],$stile_soldi);
$altre_valute_TOT = "";
$tot_mese_valuta = $totale_mesile_valuta[$datamese];
reset($tot_mese_valuta);
foreach ($tot_mese_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$entrate_TOT_vedi .= "<small> (";
if ($tot_mese_valuta[$Euro]) $entrate_TOT_vedi .= $tot_mese_valuta[$Euro]."&nbsp;".$Euro." + ";
$entrate_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small>".mex("TOTALE",$pag)." ".substr($datamese,5,2)."-".substr($datamese,0,4)."</small></td>
<td>$entrate_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_entrate == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_mens and $totale_mesile[$datamese])
} # fine if (($mostra_tot_giorn or $mostra_tot_mens) and $num2 == ($num_costi - 1))

} # fine if ($pagina_prenota == 1 or...
} # fine for $num2

if ($stringa_pagine and $pagina_prenota != $num_pagine_prenota) echo $stringa_puntini_tab;
if ($mostra_tot_tab) {
$entrate_TOT_vedi = punti_in_num($entrate_TOT,$stile_soldi);
$altre_valute_TOT = "";
reset($entrate_valuta_TOT);
foreach ($entrate_valuta_TOT as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$entrate_TOT_vedi .= "<small> (";
if ($entrate_valuta_TOT[$Euro]) $entrate_TOT_vedi .= $entrate_valuta_TOT[$Euro]."&nbsp;".$Euro." + ";
$entrate_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><b><i>".mex("TOTALE",$pag)."</i></b></td>
<td>$entrate_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_entrate == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_tab)
echo "</table><div style=\"text-align: center;\">* ".mex("entrata presa dalle prenotazioni",$pag)."$stringa_pagine
<br>";


echo "<a name=\"usci_cassa$id_cassa\"></a><br>
<h3 id=\"h_exp\"><span>".mex("Tutte le spese del",$pag)." $anno ";
if ($id_cassa == 1) echo mex("nella cassa principale",$pag);
else echo mex("nella cassa chiamata",$pag)." <em>$nome_cassa</em>";
echo ".</span></h3>";

$costi = esegui_query("select * from $tablecosti where tipo_costo = 's' $cond_cassa$condizione_costi_propri order by idcosti");
$num_costi = numlin_query($costi);

$stringa_pagine = "";
$stringa_puntini_tab = "";
if ($num_costi > $num_vedi_in_tab) {
$num_pagine_prenota = ceil($num_costi/$num_vedi_in_tab);
$stringa_pagine = "<div style=\"text-align: center;\"><small>".mex("pagine",$pag)."</small>:";
$pagina_prenota = fixset(${"pag_uscite".$id_cassa});
if (!$pagina_prenota) $pagina_prenota = $num_pagine_prenota;
for ($num1 = 1 ; $num1 <= $num_pagine_prenota ; $num1++) {
$stringa_pagine .= " ";
if ($num1 != $pagina_prenota) {
$stringa_pagine .= "<a href=\"./$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;pag_entrate$id_cassa=".fixset(${"pag_entrate".$id_cassa})."&amp;pag_uscite$id_cassa=$num1&idc_passa=$id_cassa#usci_cassa$id_cassa\">";
} # fine if ($num1 != $pagina_prenota)
else $stringa_pagine .= "<b>";
$stringa_pagine .= $num1;
if ($num1 != $pagina_prenota) $stringa_pagine .= "</a>";
else $stringa_pagine .= "</b>";
} # fine for $num1
$stringa_pagine .= "</div>";
$stringa_puntini_tab = "<tr><td colspan=\"6\">...</td></tr>";
} # fine if ($num_costi > $num_vedi_in_tab)
else $pagina_prenota = 0;

echo "<br>$stringa_pagine
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".str_replace("_","&nbsp;",mex("Natura_spesa",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Importo",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Inserita_da",$pag))."</td>
<td class=\"t1top\"><small>".str_replace(" ","&nbsp;",mex("Metodo pagamento",$pag))."</small></td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Id",$pag))."</td>
<td class=\"t1top\"><small>".str_replace("_","&nbsp;",mex("Data_di_inserimento",$pag))."</small></td>";
if ($priv_ins_spese == "s") echo "<td class=\"t1top\">".mex("Cancella",$pag)."</td>";
echo "</tr>";
if ($stringa_pagine and $pagina_prenota > 1) echo $stringa_puntini_tab;

$num_costi_in_tab = 0;
$totale_giornaliero = array();
$totale_mesile = array();
$totale_giornaliero_valuta = array();
$totale_mesile_valuta = array();
$ultimo_giorno = "";
$ultimo_mese = "";
for ($num2 = 0 ; $num2 < $num_costi ; $num2++) {
$num_costi_in_tab++;
$val_costo = risul_query($costi,$num2,'val_costo');
$spese_TOT = $spese_TOT + $val_costo;
$datainserimento = risul_query($costi,$num2,'datainserimento');
$datainserimento = substr($datainserimento,0,10);
$datamese = substr($datainserimento,0,7);
$val_costo_vedi = punti_in_num($val_costo,$stile_soldi);
$valuta = risul_query($costi,$num2,'valuta');
if ($valuta) {
$valuta = explode(">",$valuta);
$costo_valuta = risul_query($costi,$num2,'costo_valuta');
$costo_valuta_p = punti_in_num($costo_valuta,$stile_soldi)."&nbsp;".$valuta[0];
if (!isset($valuta[3]) or $valuta[3] != "c") {
if (!isset($spese_valuta_TOT[$valuta[0]])) $spese_valuta_TOT[$valuta[0]] = 0;
$spese_valuta_TOT[$valuta[0]] += $costo_valuta;
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero_valuta[$datainserimento][$valuta[0]])) $totale_giornaliero_valuta[$datainserimento][$valuta[0]] = 0;
if (!isset($totale_mesile_valuta[$datamese][$valuta[0]])) $totale_mesile_valuta[$datamese][$valuta[0]] = 0;
$totale_giornaliero_valuta[$datainserimento][$valuta[0]] += $costo_valuta;
$totale_mesile_valuta[$datamese][$valuta[0]] += $costo_valuta;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
} # fine if (!isset($valuta[3]) or $valuta[3] != "c")
else $costo_valuta_p = "<s>$costo_valuta_p</s>";
$val_costo_vedi .= "<small> ($costo_valuta_p)</small>";
} # fine if ($valuta)
if (!$valuta or (isset($valuta[3]) and $valuta[3] == "c")) {
if (!isset($spese_valuta_TOT[$Euro])) $spese_valuta_TOT[$Euro] = 0;
$spese_valuta_TOT[$Euro] += $val_costo;
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero_valuta[$datainserimento][$Euro])) $totale_giornaliero_valuta[$datainserimento][$Euro] = 0;
if (!isset($totale_mesile_valuta[$datamese][$Euro])) $totale_mesile_valuta[$datamese][$Euro] = 0;
$totale_giornaliero_valuta[$datainserimento][$Euro] += $val_costo;
$totale_mesile_valuta[$datamese][$Euro] += $val_costo;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
} # fine if (!$valuta or (isset($valuta[3]) and $valuta[3] == "c"))
if ($mostra_tot_giorn or $mostra_tot_mens) {
if (!isset($totale_giornaliero[$datainserimento])) $totale_giornaliero[$datainserimento] = 0;
if (!isset($totale_mesile[$datamese])) $totale_mesile[$datamese] = 0;
$totale_giornaliero[$datainserimento] += $val_costo;
$totale_mesile[$datamese] += $val_costo;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
if (!$pagina_prenota or ($num_costi_in_tab > ($num_costi - (($num_pagine_prenota - $pagina_prenota + 1) * $num_vedi_in_tab)) and $num_costi_in_tab <= ($num_costi - (($num_pagine_prenota - $pagina_prenota) * $num_vedi_in_tab)))) {
$idcosti = risul_query($costi,$num2,'idcosti');
$nome_costo = risul_query($costi,$num2,'nome_costo');
$persona_costo = risul_query($costi,$num2,'persona_costo');
if (!$persona_costo) $persona_costo = "&nbsp;";
$metodo_pagamento = risul_query($costi,$num2,'metodo_pagamento');
if (!$metodo_pagamento) $metodo_pagamento = "&nbsp;";
$id_pagamento = risul_query($costi,$num2,'id_pagamento');
if (!$id_pagamento) $id_pagamento = "&nbsp;";
else {
if (strlen($id_pagamento) > 36) $id_pagamento = "<small><small>$id_pagamento</small></small>";
elseif (strlen($id_pagamento) > 24) $id_pagamento = "<small>$id_pagamento</small>";
} # fine else if (!$id_pagamento)
$datainserimento_f = formatta_data($datainserimento,$stile_data);
$data_transazione = substr(risul_query($costi,$num2,'data_transazione'),0,10);
if ($datainserimento != $data_transazione) $datainserimento_f .= " <small>(".formatta_data($data_transazione,$stile_data).")</small>";
if ($mostra_tot_giorn or $mostra_tot_mens) {
if ($mostra_tot_giorn and $ultimo_giorno and $ultimo_giorno != $datainserimento and $totale_giornaliero[$ultimo_giorno]) {
$spese_TOT_vedi = punti_in_num($totale_giornaliero[$ultimo_giorno],$stile_soldi);
$altre_valute_TOT = "";
$tot_giorn_valuta = $totale_giornaliero_valuta[$ultimo_giorno];
reset($tot_giorn_valuta);
foreach ($tot_giorn_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$spese_TOT_vedi .= "<small> (";
if ($tot_giorn_valuta[$Euro]) $spese_TOT_vedi .= $tot_giorn_valuta[$Euro]."&nbsp;".$Euro." + ";
$spese_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small><small>".mex("TOTALE",$pag)." ".formatta_data($ultimo_giorno,$stile_data)."</small></small></td>
<td>$spese_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_spese == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_giorn and $ultimo_giorno and $ultimo_giorno != $datainserimento and...
if ($mostra_tot_mens and $ultimo_mese and $ultimo_mese != $datamese and $totale_mesile[$ultimo_mese]) {
$spese_TOT_vedi = punti_in_num($totale_mesile[$ultimo_mese],$stile_soldi);
$altre_valute_TOT = "";
$tot_mese_valuta = $totale_mesile_valuta[$ultimo_mese];
reset($tot_mese_valuta);
foreach ($tot_mese_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$spese_TOT_vedi .= "<small> (";
if ($tot_mese_valuta[$Euro]) $spese_TOT_vedi .= $tot_mese_valuta[$Euro]."&nbsp;".$Euro." + ";
$spese_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small>".mex("TOTALE",$pag)."  ".substr($ultimo_mese,5,2)."-".substr($ultimo_mese,0,4)."</small></td>
<td>$spese_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_spese == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_mens and $ultimo_mese and $ultimo_mese != $datamese and...
$ultimo_giorno = $datainserimento;
$ultimo_mese = $datamese;
} # fine if ($mostra_tot_giorn or $mostra_tot_mens)
echo "<tr><td class=\"t1left\">$nome_costo</td>
<td>$val_costo_vedi</td>
<td>$persona_costo</td>
<td>$metodo_pagamento</td>
<td>$id_pagamento</td>
<td>$datainserimento_f</td>";
if ($priv_ins_spese == "s") echo "<td><a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idcosti=$idcosti\">".mex("cancella",$pag)."</a></td>";
echo "</tr>";

if (($mostra_tot_giorn or $mostra_tot_mens) and $num2 == ($num_costi - 1)) {
if ($mostra_tot_giorn and $totale_giornaliero[$datainserimento]) {
$spese_TOT_vedi = punti_in_num($totale_giornaliero[$datainserimento],$stile_soldi);
$altre_valute_TOT = "";
$tot_giorn_valuta = $totale_giornaliero_valuta[$datainserimento];
reset($tot_giorn_valuta);
foreach ($tot_giorn_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$spese_TOT_vedi .= "<small> (";
if (!empty($tot_giorn_valuta[$Euro])) $spese_TOT_vedi .= $tot_giorn_valuta[$Euro]."&nbsp;".$Euro." + ";
$spese_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small><small>".mex("TOTALE",$pag)." $datainserimento_f</small></small></td>
<td>$spese_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_spese == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_giorn and $totale_giornaliero[$datainserimento])
if ($mostra_tot_mens and $totale_mesile[$datamese]) {
$spese_TOT_vedi = punti_in_num($totale_mesile[$datamese],$stile_soldi);
$altre_valute_TOT = "";
$tot_mese_valuta = $totale_mesile_valuta[$datamese];
reset($tot_mese_valuta);
foreach ($tot_mese_valuta as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$spese_TOT_vedi .= "<small> (";
if (!empty($tot_mese_valuta[$Euro])) $spese_TOT_vedi .= $tot_mese_valuta[$Euro]."&nbsp;".$Euro." + ";
$spese_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><small>".mex("TOTALE",$pag)." ".substr($datamese,5,2)."-".substr($datamese,0,4)."</small></td>
<td>$spese_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_spese == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_mens and $totale_mesile[$datamese])
} # fine if (($mostra_tot_giorn or $mostra_tot_mens)" and $num2 == ($num_costi - 1))

} # fine if (!$pagina_prenota or...
} # fine for $num2

if ($stringa_pagine and $pagina_prenota != $num_pagine_prenota) echo $stringa_puntini_tab;
if ($mostra_tot_tab) {
$spese_TOT_vedi = punti_in_num($spese_TOT,$stile_soldi);
$altre_valute_TOT = "";
reset($spese_valuta_TOT);
foreach ($spese_valuta_TOT as $valuta_corr => $saldo_corr) if ($valuta_corr != $Euro) $altre_valute_TOT .= "$saldo_corr&nbsp;$valuta_corr + ";
if ($altre_valute_TOT) {
$spese_TOT_vedi .= "<small> (";
if ($spese_valuta_TOT[$Euro]) $spese_TOT_vedi .= $spese_valuta_TOT[$Euro]."&nbsp;".$Euro." + ";
$spese_TOT_vedi .= substr($altre_valute_TOT,0,-3).")</small>";
} # fine if ($altre_valute_TOT)
echo "<tr><td><b><i>".mex("TOTALE",$pag)."</i></b></td>
<td>$spese_TOT_vedi</td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";
if ($priv_ins_spese == "s") echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($mostra_tot_tab)
echo "</table>$stringa_pagine<br><br>";


$cassa = $entrate_TOT - $spese_TOT;
$cassa_p = punti_in_num($cassa,$stile_soldi);
echo "<div class=\"biggerfont\"><div class=\"biggerfont\">";
if ($id_cassa == 1) echo mex("Totale nella cassa principale",$pag);
else echo mex("Totale nella cassa",$pag)." \"$nome_cassa\"";
echo ": <b>$cassa_p</b> $Euro</div>";
$altre_valute_TOT = "";
$valuta_convertibile = 0;
$altre_valute_viste = array();
reset($entrate_valuta_TOT);
foreach ($entrate_valuta_TOT as $valuta_corr => $saldo_corr) {
if ($valuta_corr != $Euro) {
$altre_valute_viste[$valuta_corr] = 1;
$saldo_cassa = (double) $saldo_corr;
if (!empty($spese_valuta_TOT[$valuta_corr])) $saldo_cassa = $saldo_cassa - $spese_valuta_TOT[$valuta_corr];
if ((double) $saldo_cassa) {
if (($priv_ins_entrate == "s" or ($priv_ins_spese == "s" and $spese_valuta_TOT[$valuta_corr])) and strcmp((string) $altre_valute['id'][$valuta_corr],"")) {
$valuta_convertibile = 1;
$altre_valute_TOT .= "<label><input type=\"checkbox\" name=\"conv_valuta".$altre_valute['id'][$valuta_corr]."\" value=\"1\" style=\"width: 14px; height: 12px;\" checked>$saldo_cassa&nbsp;$valuta_corr</label> + ";
} # fine if (($priv_ins_entrate == "s" or ($priv_ins_spese == "s" and $spese_valuta_TOT[$valuta_corr])) and...
else $altre_valute_TOT .= "$saldo_cassa&nbsp;$valuta_corr + ";
} # fine if ((double) $saldo_cassa)
} # fine if ($valuta_corr != $Euro)
} # fine foreach ($entrate_valuta_TOT as $valuta_corr => $saldo_corr)
reset($spese_valuta_TOT);
foreach ($spese_valuta_TOT as $valuta_corr => $saldo_corr) {
if ($valuta_corr != $Euro and empty($altre_valute_viste[$valuta_corr])) {
if ($priv_ins_spese == "s" and strcmp((string) $altre_valute['id'][$valuta_corr],"")) {
$valuta_convertibile = 1;
$altre_valute_TOT .= "<label><input type=\"checkbox\" name=\"conv_valuta".$altre_valute['id'][$valuta_corr]."\" value=\"1\" style=\"width: 14px; height: 12px;\" checked>".((double) $saldo_corr * -1)."&nbsp;$valuta_corr</label> + ";
} # fine if ($priv_ins_spese == "s" and strcmp((string) $altre_valute['id'][$valuta_corr],""))
else $altre_valute_TOT .= ((double) $saldo_corr * -1)."&nbsp;$valuta_corr + ";
} # fine if ($valuta_corr != $Euro and empty($altre_valute_viste[$valuta_corr]))
} # fine foreach ($spese_valuta_TOT as $valuta_corr => $saldo_corr)
if ($altre_valute_TOT) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div class=\"txtcenter\" style=\"padding: 2px 0 2px 0;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"conv_valuta_cassa\" value=\"1\">
<input type=\"hidden\" name=\"conv_id_cassa\" value=\"$id_cassa\">(";
if ($entrate_valuta_TOT[$Euro]) $saldo_cassa = (double) $entrate_valuta_TOT[$Euro];
else $saldo_cassa = 0;
if ($spese_valuta_TOT[$Euro]) $saldo_cassa = $saldo_cassa - (double) $spese_valuta_TOT[$Euro];
if ($saldo_cassa) echo "$saldo_cassa&nbsp;".$Euro." + ";
echo substr($altre_valute_TOT,0,-3);
if ($valuta_convertibile) echo " <button class=\"xchm\" type=\"submit\"><div>".mex("Converti definitivamente in",$pag)." $Euro ".mex("al cambio attuale",$pag)."</div></button>";
echo ")</div></form>";
} # fine if ($altre_valute_TOT)
echo "</div></div><br>";

if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO")) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div  class=\"txtcenter\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"$pag?id_sessione=$id_sessione&amp;anno=$anno&amp;tipo_tabella=$tipo_tabella#entr_cassa$id_cassa\">
<input type=\"hidden\" name=\"lista_cassa\" value=\"$id_cassa\">
".ucfirst(mex("documento di tipo",$pag))."
 <select name=\"numero_contratto\">$option_num_contr</select>
 <button class=\"vdoc\" type=\"submit\"><div>".ucfirst(mex("visualizza",$pag))."</div></button>
</div></form><br>";
} # fine if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO"))
echo "<hr style=\"width: 95%\">";

} # fine foreach ($casse_mostra as $id_cassa => $nome_cassa)


if ($id_utente == 1) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div class=\"txtcenter\" style=\"padding: 2px 0 2px 0;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"crea_cassa\" value=\"1\">
".mex("Nuova cassa chiamata",$pag)." <input type=\"text\" name=\"n_nome_cassa\" size=\"10\" value=\"\">
<button class=\"inex\" type=\"submit\"><div>".mex("Crea",$pag)."</div></button>
</div></form>";
if ($opt_casse_canc) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div class=\"txtcenter\" style=\"padding: 2px 0 2px 0;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"canc_cassa\" value=\"1\">
".mex("Cassa chiamata",$pag)." <select name=\"c_id_cassa\">
$opt_casse_canc</select>
<button class=\"caex\" type=\"submit\"><div>".mex("Cancella",$pag)."</div></button>
</div></form>";
} # fine if ($opt_casse_canc)
echo "<hr style=\"width: 95%\">";
} # fine if ($id_utente == 1)

echo "<table style=\"margin-left: auto; margin-right: auto;\"><tr>";
if ($priv_ins_spese == "s" or $priv_ins_entrate == "s") {
echo "<td><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"costi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"inex\" type=\"submit\"><div>".mex("Inserisci nuove spese o entrate",$pag)."</div></button>
</div></form></div></td>";
} # fine if ($priv_ins_spese == "s" or $priv_ins_entrate == "s")
echo "<td><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"storia_soldi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"resp\" type=\"submit\"><div>".mex("Storia entrate-uscite prenotazioni",$pag)."</div></button>
</div></form></div></td></tr></table>";

} # fine if (!isset($mostra_tab_costi) or $mostra_tab_costi != "NO")

} # fine if ($tipo_tabella == "costi" and $priv_vedi_tab_costi != "n")





if ($tipo_tabella == "periodi" and $priv_vedi_tab_periodi != "n") {

$attiva_tariffe_consentite_ut = $attiva_tariffe_consentite;
$tariffe_consentite_vett_ut = $tariffe_consentite_vett;
$attiva_costi_agg_consentiti_ut = $attiva_costi_agg_consentiti;
$costi_agg_consentiti_vett_ut = $costi_agg_consentiti_vett;
if ($priv_vedi_tab_periodi == "g") {
$priv_vedi_tab_periodi = "p";
foreach ($attiva_tariffe_consentite_gr as $val) if ($val == "n") $attiva_tariffe_consentite = "n";
$tariffe_consentite_vett = array();
foreach ($tariffe_consentite_vett_gr as $idut_gr => $val) {
if (is_array($val)) {
$tar_cons_vett_tmp = $val;
foreach ($tar_cons_vett_tmp as $tar => $val2) if ($val2 == "SI") $tariffe_consentite_vett[$tar] = "SI";
} # fine if (is_array($val))
} # fine foreach ($tariffe_consentite_vett_gr as $idut_gr => $val)
$attiva_costi_agg_consentiti = $attiva_costi_agg_consentiti_gr;
$costi_agg_consentiti_vett = $costi_agg_consentiti_vett_gr;
} # fine if ($priv_vedi_tab_periodi == "g")

if (!empty($tariffe_sel)) $tariffe_sel = "SI";
else $tariffe_sel = "";



if (!empty($aggiungi) and $id_utente == 1) {

if (empty($continua)) {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"aggiungi\" value=\"1\">
<input type=\"hidden\" name=\"continua\" value=\"1\">
<input type=\"hidden\" name=\"mese_fine\" value=\"".htmlspecialchars(fixstr($mese_fine))."\">
<input type=\"hidden\" name=\"importa_prezzi\" value=\"".htmlspecialchars(fixstr($importa_prezzi))."\">
<input type=\"hidden\" name=\"tipo_importa\" value=\"".htmlspecialchars(fixstr($tipo_importa))."\">";
if (!empty($origine)) echo "<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars(fixstr($origine))."\">";
$anno_ag = $anno;
if ($mese_fine > 12) $anno_ag = $anno + 1;
if ($mese_fine > 24) $anno_ag = $anno + 2;
if ($mese_fine > 36) $anno_ag = $anno + 3;
if ($mese_fine > 48) $anno_ag = $anno + 4;
$mese_ag = $mese_fine - (($anno_ag - $anno) * 12);
echo "<button class=\"amon\" type=\"submit\"><div>".mex("Aggiungi periodi",$pag)."</div></button>
 ".mex("fino al mese",$pag)." $mese_ag-$anno_ag";
if ($importa_prezzi) {
echo " (".mex("prova ad importare i prezzi",$pag)."";
if ($tipo_periodi == "g") {
if ($tipo_importa == "giorn") echo " <em>".mex("giornalmente",$pag)."</em>";
if ($tipo_importa == "sett") echo " <em>".mex("settimanalmente",$pag)."</em>";
} # fine if ($tipo_periodi == "g")
} # fine if ($importa_prezzi)
else echo " (".mex("<b>non importare</b> i prezzi",$pag)."";
echo "). <span class=\"colinfo\">".mex("Attenzione",$pag)."</span>: ".mex("i periodi aggiunti non potranno più essere eliminati",$pag).".</div></form><br><br>";
if (!empty($origine)) $azione = controlla_pag_origine($origine);
else $azione = "visualizza_tabelle.php";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form>";
} # fine if (empty($continua))
else {

$tableperiodi_prec = "";
if ($importa_prezzi) {
$anno_prec_esist = esegui_query("select * from $tableanni where idanni = '".($anno - 1)."' ");
if (numlin_query($anno_prec_esist) == 1) {
$tipo_per_prec = risul_query($anno_prec_esist,0,'tipo_periodi');
if ($tipo_per_prec == $tipo_periodi) {
$tableperiodi_prec = $PHPR_TAB_PRE."periodi".($anno - 1);
$tablenometariffe_prec = $PHPR_TAB_PRE."ntariffe".($anno - 1);
$tableregole_prec = $PHPR_TAB_PRE."regole".($anno - 1);
} # fine if ($tipo_per_prec == $tipo_periodi)
} # fine if (numlin_query($anno_prec_esist) == 1)
} # fine if ($importa_prezzi)
$tabelle_lock = array($tablenometariffe,$tableperiodi,$tableregole);
$altre_tab_lock = array($tableutenti,$tableprivilegi);
if ($tableperiodi_prec) $altre_tab_lock = array($tablenometariffe_prec,$tableperiodi_prec,$tableregole_prec,$tableutenti,$tableprivilegi);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
if ($tipo_periodi == "g") $aggiungi_giorni = 1;
else $aggiungi_giorni = 7;
$data_fine_periodi = esegui_query("select max(idperiodi) from $tableperiodi");
$data_fine_periodi = risul_query($data_fine_periodi,0,0);
$idperiodi = $data_fine_periodi + 1;
$data_fine_periodi = esegui_query("select * from $tableperiodi where idperiodi = '$data_fine_periodi' ");
$data_fine_periodi = risul_query($data_fine_periodi,0,'datafine');
$data_fine_periodi = explode("-",$data_fine_periodi);
$numgiorno = $data_fine_periodi[2];
$mese_cont = $data_fine_periodi[1];
$anno_cont = $data_fine_periodi[0];
if ($importa_prezzi) {
$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
if ($tipo_importa != "giorn") $tipo_importa = "sett";
if ($tipo_periodi == "s") $tipo_importa = "sett";
} # fine if ($importa_prezzi)
if (controlla_num_pos($mese_fine) == "SI" and $mese_fine <= 48 and $mese_fine >= $mese_cont) {

$date_option_agg = "";
$n_date_menu_agg = 0;
$mesecreato = 0;
unset($id_periodi_importati);
while ($mesecreato <= $mese_fine) {
$datainizio = date("Y-m-d" , mktime(0,0,0,$mese_cont,$numgiorno,$anno_cont));
$numgiorno = $numgiorno + $aggiungi_giorni;
$datafine = date("Y-m-d" , mktime(0,0,0,$mese_cont,$numgiorno,$anno_cont));
$annocreato = date("Y" , mktime(0,0,0,$mese_cont,$numgiorno,$anno_cont));
$mesecreato = date("n" , mktime(0,0,0,$mese_cont,$numgiorno,$anno_cont));
if ($annocreato > $anno) {
$diff = $annocreato - $anno;
$mesecreato = ($diff * 12) + $mesecreato;
} # fine if ($annocreato > $anno)
esegui_query("insert into $tableperiodi (idperiodi,datainizio,datafine) values ($idperiodi,'$datainizio','$datafine')");

if ($importa_prezzi) {
$anno_datainizio = substr($datainizio,0,4);
$datainizio_prec = "";
if ($tipo_importa == "giorn") $datainizio_prec = date("Y-m-d", mktime(0,0,0,substr($datainizio,5,2),substr($datainizio,8,2),($anno_datainizio - 1)));
if ($tipo_importa == "sett") {
$g_sett_dataini = date("D", mktime(0,0,0,substr($datainizio,5,2),substr($datainizio,8,2),$anno_datainizio));
for ($num1 = 0 ; $num1 < 7 ; $num1++) {
$g_sett_dataini_prec = date("D", mktime(0,0,0,substr($datainizio,5,2),(substr($datainizio,8,2) + $num1),($anno_datainizio - 1)));
if ($g_sett_dataini_prec == $g_sett_dataini) $datainizio_prec = date("Y-m-d", mktime(0,0,0,substr($datainizio,5,2),(substr($datainizio,8,2) + $num1),($anno_datainizio - 1)));
} # fine for $num1
} # fine if ($tipo_importa == "sett")
if ($anno_datainizio > $anno) $tableperiodi_corr = $tableperiodi;
else $tableperiodi_corr = $tableperiodi_prec;
if ($tableperiodi_corr and $datainizio_prec) {
$prezzi_prec = esegui_query("select * from $tableperiodi_corr where datainizio = '$datainizio_prec' ");
if (numlin_query($prezzi_prec) == 1) {
for ($num1 = 1 ; $num1 <= $numero_tariffe ; $num1++) {
$prezzo_prec = @risul_query($prezzi_prec,0,"tariffa$num1");
if ((string) $prezzo_prec != "") esegui_query("update $tableperiodi set tariffa$num1 = '$prezzo_prec' where idperiodi = '$idperiodi' ");
$prezzo_prec_p = @risul_query($prezzi_prec,0,"tariffa".$num1."p");
if ((string) $prezzo_prec_p != "") esegui_query("update $tableperiodi set tariffa$num1"."p = '$prezzo_prec_p' where idperiodi = '$idperiodi' ");
} # fine for $num1
$anno_corr = substr($tableperiodi_corr,-4);
$idperiodi_prec = risul_query($prezzi_prec,0,'idperiodi');
$id_periodi_importati[$anno_corr][$idperiodi_prec] = $idperiodi;
if (empty($id_periodi_importati[$anno_corr]['primo'])) {
$id_periodi_importati[$anno_corr]['primo'] = $idperiodi;
$id_periodi_importati[$anno_corr]['primo_prec'] = $idperiodi_prec;
} # fine if (empty($id_periodi_importati[$anno_corr]['primo']))
$id_periodi_importati[$anno_corr]['ultimo'] = $idperiodi;
$id_periodi_importati[$anno_corr]['ultimo_prec'] = $idperiodi_prec;
} # fine if (numlin_query($prezzi_prec) == 1)
} # fine if ($tableperiodi_corr and...
} # fine if ($importa_prezzi)

$nome_giorno = date("D",mktime(0,0,0,$mese_cont,$numgiorno,$anno_cont));
if ($tipo_periodi == "g") $nome_giorno = "[$nome_giorno]";
else $nome_giorno = "";
$nome_mese = substr($datafine,5,2);
$numero_giorno = substr($datafine,8,2);
$numero_anno = substr($datafine,0,4);
if (!$date_option_agg) {
$a_ini_menu_agg = substr($datafine,0,4);
$m_ini_menu_agg = substr($datafine,5,2);
$g_ini_menu_agg = substr($datafine,8,2);
} # fine if (!$date_option_agg)
$n_date_menu_agg++;
$date_option_agg .= "<option value=\\\"$datafine\\\">[$nome_mese] $numero_giorno$nome_giorno, $numero_anno</option>
";

$idperiodi = $idperiodi + 1;
} # fine while ($mesecreato <= $mese_fine)


# Importo i periodi permessi dei costi aggiuntivi, regole1 e tariffe importate
if ($importa_prezzi) {
function importa_periodi_prec_regole1 ($tableregole_imp,$anno_imp,$tableregole,$id_periodi_importati) {
if (!empty($id_periodi_importati[$anno_imp])) {
# Query per importare solo le chiusure delle tariffe o anche delle unità
#$regole1_importa = esegui_query("select * from $tableregole_imp where app_agenzia != '' or tariffa_chiusa != '' ");
$regole1_importa = esegui_query("select * from $tableregole_imp where (app_agenzia != '' and (motivazione2 is NULL or motivazione2 != 'x')) or tariffa_chiusa != '' order by idregole ");
$num_regole1_importa = numlin_query($regole1_importa);
$idregole = esegui_query("select max(idregole) from $tableregole");
$idregole = risul_query($idregole,0,0);
$agg_regole = 0;
for ($num1 = 0 ; $num1 < $num_regole1_importa ; $num1++) {
$idini = risul_query($regole1_importa,$num1,'iddatainizio');
$idfine = risul_query($regole1_importa,$num1,'iddatafine');
if ($idini < $id_periodi_importati[$anno_imp]['primo_prec'] and $idfine > $id_periodi_importati[$anno_imp]['ultimo_prec']) $idini = $id_periodi_importati[$anno_imp]['primo_prec'];
if (!empty($id_periodi_importati[$anno_imp][$idini]) or !empty($id_periodi_importati[$anno_imp][$idfine])) {
if (!empty($id_periodi_importati[$anno_imp][$idini])) $idini = $id_periodi_importati[$anno_imp][$idini];
else $idini = $id_periodi_importati[$anno_imp]['primo'];
if (!empty($id_periodi_importati[$anno_imp][$idfine])) $idfine = $id_periodi_importati[$anno_imp][$idfine];
else $idfine = $id_periodi_importati[$anno_imp]['ultimo'];
$app_agenzia = (string) risul_query($regole1_importa,$num1,'app_agenzia');
$tariffa_chiusa = (string) risul_query($regole1_importa,$num1,'tariffa_chiusa');
$motivazione = (string) risul_query($regole1_importa,$num1,'motivazione');
$motivazione2 = (string) risul_query($regole1_importa,$num1,'motivazione2');
$motivazione3 = (string) risul_query($regole1_importa,$num1,'motivazione3');
if (strcmp($app_agenzia,"") or strcmp($tariffa_chiusa,"")) {
$reg_esist = "select idregole from $tableregole where ";
if (strcmp($app_agenzia,"")) $reg_esist .= "app_agenzia = '".aggslashdb($app_agenzia)."'";
else $reg_esist .= "tariffa_chiusa = '".aggslashdb($tariffa_chiusa)."'";
$reg_esist .= " and iddatafine = '".($idini - 1)."' ";
if (strcmp($motivazione,"")) $reg_esist .= "and motivazione = '".aggslashdb($motivazione)."' ";
else $reg_esist .= "and (motivazione is NULL or motivazione = '') ";
if (strcmp($motivazione2,"")) $reg_esist .= "and motivazione2 = '".aggslashdb($motivazione2)."' ";
else $reg_esist .= "and (motivazione2 is NULL or motivazione2 = '') ";
if (strcmp($motivazione3,"")) $reg_esist .= "and motivazione3 = '".aggslashdb($motivazione3)."' ";
else $reg_esist .= "and (motivazione3 is NULL or motivazione3 = '') ";
$reg_esist = esegui_query($reg_esist);
if (numlin_query($reg_esist)) esegui_query("update $tableregole set iddatafine = '".aggslashdb($idfine)."' where idregole = '".risul_query($reg_esist,0,'idregole')."' ");
else {
$agg_regole = 1;
$idregole++;
if (strcmp($app_agenzia,"")) esegui_query("insert into $tableregole (idregole,app_agenzia,iddatainizio,iddatafine) values ($idregole,'".aggslashdb($app_agenzia)."','$idini','$idfine')");
else esegui_query("insert into $tableregole (idregole,tariffa_chiusa,iddatainizio,iddatafine) values ('$idregole','".aggslashdb($tariffa_chiusa)."','$idini','$idfine')");
if (strcmp($motivazione,"")) esegui_query("update $tableregole set motivazione = '".aggslashdb($motivazione)."' where idregole = '$idregole' ");
if (strcmp($motivazione2,"")) esegui_query("update $tableregole set motivazione2 = '".aggslashdb($motivazione2)."' where idregole = '$idregole' ");
if (strcmp($motivazione3,"")) esegui_query("update $tableregole set motivazione3 = '".aggslashdb($motivazione3)."' where idregole = '$idregole' ");
} # fine else if (numlin_query($reg_esist))
} # fine if (strcmp($app_agenzia,"") or strcmp($tariffa_chiusa,""))
} # fine if (!empty($id_periodi_importati[$anno_imp][$idini]) or...
if ($agg_regole and $tableregole_imp == $tableregole and $num_regole1_importa == ($num1 + 1)) {
$regole1_importa = esegui_query("select * from $tableregole_imp where (app_agenzia != '' and (motivazione2 is NULL or motivazione2 != 'x')) or tariffa_chiusa != '' order by idregole ");
$num_regole1_importa = numlin_query($regole1_importa);
$agg_regole = 0;
} # fine if ($agg_regole and $tableregole_imp == $tableregole and...
} # fine for $num1
} # fine (!empty($id_periodi_importati[$anno_imp]))
} # fine function importa_periodi_prec_regole1

function importa_periodi_prec_tariffe_importate ($tablenometariffe_imp,$anno_imp,$tablenometariffe,$id_periodi_importati) {
if (!empty($id_periodi_importati[$anno_imp])) {
$num_tar = esegui_query("select nomecostoagg from $tablenometariffe where idntariffe = '1' ");
$num_tar = risul_query($num_tar,0,'nomecostoagg');
$tar_esporta = array();
if ($tablenometariffe != $tablenometariffe_imp) {
$num_tar_imp = esegui_query("select nomecostoagg from $tablenometariffe_imp where idntariffe = '1' ");
$num_tar_imp = risul_query($num_tar_imp,0,'nomecostoagg');
if ($num_tar_imp < $num_tar) $num_tar = $num_tar_imp;
$tariffe_importa_corr = esegui_query("select * from $tablenometariffe where idntariffe = '6' ");
for ($num1 = 1 ; $num1 <= $num_tar ; $num1++) {
$tar_esp = risul_query($tariffe_importa_corr,0,"tariffa$num1");
if ($tar_esp) {
$esp_corr_per = explode(">",$tar_esp);
$num_per_esp = count($esp_corr_per);
for ($num2 = 0 ; $num2 < $num_per_esp ; $num2++) {
$esp_corr = explode(";",$esp_corr_per[$num2]);
$tar_esporta[$esp_corr[0]] = 1;
} # fine for $num2
} # fine if ($tar_esp)
} # fine for $num1
} # fine if ($tablenometariffe != $tablenometariffe_imp)
$tariffe_importa = esegui_query("select * from $tablenometariffe_imp where idntariffe = '6' ");
for ($num1 = 1 ; $num1 <= $num_tar ; $num1++) {
$tar_imp = risul_query($tariffe_importa,0,"tariffa$num1");
if ($tar_imp and !isset($tar_esporta[$num1])) {
$agg_tar = 0;
if ($tablenometariffe != $tablenometariffe_imp) $tar_corr = risul_query($tariffe_importa_corr,0,"tariffa$num1");
else $tar_corr = $tar_imp;
$importa_corr_per = explode(">",$tar_imp);
$num_per_importa = count($importa_corr_per);
for ($num2 = 0 ; $num2 < $num_per_importa ; $num2++) {
$importa_corr = explode(";",$importa_corr_per[$num2]);
if (!empty($importa_corr[5])) {
$per_imp = explode("-",$importa_corr[5]);
if (!empty($per_imp[0]) and !empty($per_imp[1])) {
$idini = $per_imp[0];
$idfine = $per_imp[1];
if ($idini < $id_periodi_importati[$anno_imp]['primo_prec'] and $idfine > $id_periodi_importati[$anno_imp]['ultimo_prec']) $idini = $id_periodi_importati[$anno_imp]['primo_prec'];
if (!empty($id_periodi_importati[$anno_imp][$idini]) or !empty($id_periodi_importati[$anno_imp][$idfine])) {
if (!empty($id_periodi_importati[$anno_imp][$idini])) $idini = $id_periodi_importati[$anno_imp][$idini];
else $idini = $id_periodi_importati[$anno_imp]['primo'];
if (!empty($id_periodi_importati[$anno_imp][$idfine])) $idfine = $id_periodi_importati[$anno_imp][$idfine];
else $idfine = $id_periodi_importati[$anno_imp]['ultimo'];
$importa_corr[5] = "$idini-$idfine";
$importa_corr = implode(";",$importa_corr);
$tar_corr .= ">$importa_corr";
$agg_tar = 1;
if ($tablenometariffe == $tablenometariffe_imp) {
$importa_corr_per[$num_per_importa] = $importa_corr;
$num_per_importa++;
} # fine if ($tablenometariffe == $tablenometariffe_imp)
} # fine if (!empty($id_periodi_importati[$anno_imp][$idini]) or...
} # fine if (!empty($per_imp[0]) and !empty($per_imp[1]))
} # fine if (!empty($importa_corr[5]))
} # fine for $num2
if ($agg_tar) esegui_query("update $tablenometariffe set tariffa$num1 = '".aggslashdb($tar_corr)."' where idntariffe = '6' ");
} # fine if ($tar_imp and !isset($tar_esporta[$num1]))
} # fine for $num1
} # fine (!empty($id_periodi_importati[$anno_imp]))
} # fine function importa_periodi_prec_tariffe_importate

# Dall'anno precedente
if ($tableperiodi_prec) {
$anno_prec = substr($tableperiodi_prec,-4);
if (!empty($id_periodi_importati[$anno_prec]['primo'])) {

$costi_agg_importa = esegui_query("select * from $tablenometariffe_prec where idntariffe > 10  and nomecostoagg != '' and periodipermessi_ca is not NULL and periodipermessi_ca != '' ");
$num_costi_agg_importa = numlin_query($costi_agg_importa);
for ($num1 = 0 ; $num1 < $num_costi_agg_importa ; $num1++) {
$idntariffe = risul_query($costi_agg_importa,$num1,'idntariffe');
$nomecostoagg = risul_query($costi_agg_importa,$num1,'nomecostoagg');
$periodipermessi = risul_query($costi_agg_importa,$num1,'periodipermessi_ca');
$costo_esistente = esegui_query("select idntariffe,periodipermessi_ca from $tablenometariffe where idntariffe = '$idntariffe' and nomecostoagg = '".aggslashdb($nomecostoagg)."' and periodipermessi_ca $LIKE '".substr($periodipermessi,0,1)."%' ");
if (numlin_query($costo_esistente)) {
$n_periodipermessi = risul_query($costo_esistente,0,'periodipermessi_ca');
$periodipermessi = explode(",",substr($periodipermessi,1));
$num_periodipermessi = count($periodipermessi);
for ($num2 = 0 ; $num2 < $num_periodipermessi ; $num2++) {
$perperm = explode("-",$periodipermessi[$num2]);
if ($perperm[0] < $id_periodi_importati[$anno_prec]['primo_prec'] and fixset($perperm[1]) > $id_periodi_importati[$anno_prec]['ultimo_prec']) $perperm[0] = $id_periodi_importati[$anno_prec]['primo_prec'];
if (!empty($id_periodi_importati[$anno_prec][$perperm[0]]) or !empty($id_periodi_importati[$anno_prec][fixset($perperm[1])])) {
if (!empty($id_periodi_importati[$anno_prec][$perperm[0]])) $idini = $id_periodi_importati[$anno_prec][$perperm[0]];
else $idini = $id_periodi_importati[$anno_prec]['primo'];
if (!empty($id_periodi_importati[$anno_prec][$perperm[1]])) $idfine = $id_periodi_importati[$anno_prec][$perperm[1]];
else $idfine = $id_periodi_importati[$anno_prec]['ultimo'];
if (strlen($n_periodipermessi) > 1) $n_periodipermessi .= ",$idini-$idfine";
else $n_periodipermessi .= "$idini-$idfine";
} # fine if (!empty($id_periodi_importati[$anno_prec][$perperm[0]]) or...
} # fine for $num2
esegui_query("update $tablenometariffe set periodipermessi_ca = '$n_periodipermessi' where idntariffe = '$idntariffe' ");
} # fine if (numlin_query($costo_esistente))
} # fine for $num1

importa_periodi_prec_regole1($tableregole_prec,$anno_prec,$tableregole,$id_periodi_importati);
importa_periodi_prec_tariffe_importate($tablenometariffe_prec,$anno_prec,$tablenometariffe,$id_periodi_importati);

} # fine if (!empty($id_periodi_importati[$anno_prec]['primo']))
} # fine if ($tableperiodi_prec)

# Dall'anno corrente
if (!empty($id_periodi_importati[$anno])) {

$costi_agg_importa = esegui_query("select * from $tablenometariffe where idntariffe > 10  and nomecostoagg != '' and periodipermessi_ca is not NULL and periodipermessi_ca != '' ");
$num_costi_agg_importa = numlin_query($costi_agg_importa);
for ($num1 = 0 ; $num1 < $num_costi_agg_importa ; $num1++) {
$idntariffe = risul_query($costi_agg_importa,$num1,'idntariffe');
$n_periodipermessi = risul_query($costi_agg_importa,$num1,'periodipermessi_ca');
$periodipermessi = explode(",",substr($n_periodipermessi,1));
$num_periodipermessi = count($periodipermessi);
for ($num2 = 0 ; $num2 < $num_periodipermessi ; $num2++) {
$perperm = explode("-",$periodipermessi[$num2]);
if ($perperm[0] < $id_periodi_importati[$anno]['primo_prec'] and fixset($perperm[1]) > $id_periodi_importati[$anno]['ultimo_prec']) $perperm[0] = $id_periodi_importati[$anno]['primo_prec'];
if (!empty($id_periodi_importati[$anno][$perperm[0]]) or !empty($id_periodi_importati[$anno][fixset($perperm[1])])) {
if (!empty($id_periodi_importati[$anno][$perperm[0]])) $idini = $id_periodi_importati[$anno][$perperm[0]];
else $idini = $id_periodi_importati[$anno]['primo'];
if ($idini > $perperm[1]) {
if (!empty($id_periodi_importati[$anno][fixset($perperm[1])])) $idfine = $id_periodi_importati[$anno][$perperm[1]];
else $idfine = $id_periodi_importati[$anno]['ultimo'];
if (strlen($n_periodipermessi) > 1) $n_periodipermessi .= ",$idini-$idfine";
else $n_periodipermessi .= "$idini-$idfine";
# Accodo il nuovo periodo nel caso si aggiungano più anni
$periodipermessi[$num_periodipermessi] = "$idini-$idfine";
$num_periodipermessi++;
} # fine if ($idini > $perperm[1])
} # fine if (!empty($id_periodi_importati[$anno_prec][$perperm[0]]) or !empty($id_periodi_importati[$anno_prec][$perperm[1]]))
} # fine for $num2
esegui_query("update $tablenometariffe set periodipermessi_ca = '$n_periodipermessi' where idntariffe = '$idntariffe' ");
} # fine for $num1

importa_periodi_prec_regole1($tableregole,$anno,$tableregole,$id_periodi_importati);
importa_periodi_prec_tariffe_importate($tablenometariffe,$anno,$tablenometariffe,$id_periodi_importati);

} # fine if (!empty($id_periodi_importati[$anno]))
} # fine if ($importa_prezzi)


$periodi = esegui_query("select * from $tableperiodi order by idperiodi");
$num_periodi = numlin_query($periodi);
$utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_utenti = numlin_query($utenti);
include(C_DATI_PATH."/lingua.php");
$lingua_mex2 = $lingua_mex;

for ($num_utente = 0 ; $num_utente < $num_utenti ; $num_utente++) {
$id_utente_cambia = risul_query($utenti,$num_utente,'idutenti');
if ($id_utente_cambia != 1) {
$anno_attivato = esegui_query("select anno from $tableprivilegi where idutente = '$id_utente_cambia' and anno = '$anno' ");
$anno_attivato = numlin_query($anno_attivato);
} # fine if ($id_utente_cambia != 1)
if ($id_utente_cambia == 1 or $anno_attivato) {

$lingua_mex = $lingua[$id_utente_cambia];
$numgiorno = risul_query($periodi,0,'datainizio');
$numgiorno = explode("-",$numgiorno);
$mese_ini = $numgiorno[1];
$numgiorno = $numgiorno[2];
$selectperiodi_vecchio = implode("",file(C_DATI_PATH."/selectperiodi$anno.$id_utente_cambia.php"));
$fileaperto = fopen(C_DATI_PATH."/selectperiodi$anno.$id_utente_cambia.php","w+");
flock($fileaperto,2);
$date_option = "";
$n_date_menu = 0;
for ($num1 = 0 ; $num1 < $num_periodi ; $num1++) {
$datainizio = date("Y-m-d" , mktime(0,0,0,$mese_ini,$numgiorno,$anno));
$nome_giorno = date("D" , mktime(0,0,0,$mese_ini,$numgiorno,$anno));
$numgiorno = $numgiorno + $aggiungi_giorni;
if ($tipo_periodi == "g") {
if ($nome_giorno == "Sun") $nome_giorno = mex(" Do","inizio.php");
if ($nome_giorno == "Mon") $nome_giorno = mex(" Lu","inizio.php");
if ($nome_giorno == "Tue") $nome_giorno = mex(" Ma","inizio.php");
if ($nome_giorno == "Wed") $nome_giorno = mex(" Me","inizio.php");
if ($nome_giorno == "Thu") $nome_giorno = mex(" Gi","inizio.php");
if ($nome_giorno == "Fri") $nome_giorno = mex(" Ve","inizio.php");
if ($nome_giorno == "Sat") $nome_giorno = mex(" Sa","inizio.php");
} # fine if ($tipo_periodi == "g")
else $nome_giorno = "";
$nome_mese = substr($datainizio,5,2);
if ($nome_mese == "01") $nome_mese = mex("Gen","inizio.php");
if ($nome_mese == "02") $nome_mese = mex("Feb","inizio.php");
if ($nome_mese == "03") $nome_mese = mex("Mar","inizio.php");
if ($nome_mese == "04") $nome_mese = mex("Apr","inizio.php");
if ($nome_mese == "05") $nome_mese = mex("Mag","inizio.php");
if ($nome_mese == "06") $nome_mese = mex("Giu","inizio.php");
if ($nome_mese == "07") $nome_mese = mex("Lug","inizio.php");
if ($nome_mese == "08") $nome_mese = mex("Ago","inizio.php");
if ($nome_mese == "09") $nome_mese = mex("Set","inizio.php");
if ($nome_mese == "10") $nome_mese = mex("Ott","inizio.php");
if ($nome_mese == "11") $nome_mese = mex("Nov","inizio.php");
if ($nome_mese == "12") $nome_mese = mex("Dic","inizio.php");
$numero_giorno = substr($datainizio,8,2);
$numero_anno = substr($datainizio,0,4);
if (!$date_option) {
$a_ini_menu = substr($datainizio,0,4);
$m_ini_menu = (substr($datainizio,5,2) - 1);
$g_ini_menu = substr($datainizio,8,2);
} # fine if (!$date_option)
$n_date_menu++;
$date_option .= "<option value=\\\"$datainizio\\\">$nome_mese $numero_giorno$nome_giorno, $numero_anno</option>
";
} # fine for $num1

$datafine = date("Y-m-d",mktime(0,0,0,$mese_ini,$numgiorno,$anno));
$nome_giorno = date("D",mktime(0,0,0,$mese_ini,$numgiorno,$anno));
if ($tipo_periodi == "g") {
if ($nome_giorno == "Sun") $nome_giorno = mex(" Do","inizio.php");
if ($nome_giorno == "Mon") $nome_giorno = mex(" Lu","inizio.php");
if ($nome_giorno == "Tue") $nome_giorno = mex(" Ma","inizio.php");
if ($nome_giorno == "Wed") $nome_giorno = mex(" Me","inizio.php");
if ($nome_giorno == "Thu") $nome_giorno = mex(" Gi","inizio.php");
if ($nome_giorno == "Fri") $nome_giorno = mex(" Ve","inizio.php");
if ($nome_giorno == "Sat") $nome_giorno = mex(" Sa","inizio.php");
} # fine if ($tipo_periodi == "g")
else $nome_giorno = "";
$nome_mese = substr($datafine,5,2);
if ($nome_mese == "01") $nome_mese = mex("Gen","inizio.php");
if ($nome_mese == "02") $nome_mese = mex("Feb","inizio.php");
if ($nome_mese == "03") $nome_mese = mex("Mar","inizio.php");
if ($nome_mese == "04") $nome_mese = mex("Apr","inizio.php");
if ($nome_mese == "05") $nome_mese = mex("Mag","inizio.php");
if ($nome_mese == "06") $nome_mese = mex("Giu","inizio.php");
if ($nome_mese == "07") $nome_mese = mex("Lug","inizio.php");
if ($nome_mese == "08") $nome_mese = mex("Ago","inizio.php");
if ($nome_mese == "09") $nome_mese = mex("Set","inizio.php");
if ($nome_mese == "10") $nome_mese = mex("Ott","inizio.php");
if ($nome_mese == "11") $nome_mese = mex("Nov","inizio.php");
if ($nome_mese == "12") $nome_mese = mex("Dic","inizio.php");
$numero_giorno = substr($datafine,8,2);
$numero_anno = substr($datafine,0,4);
$n_date_menu++;
$date_option .= "<option value=\\\"$datafine\\\">$nome_mese $numero_giorno$nome_giorno, $numero_anno</option>
";
fwrite($fileaperto,"<?php 

\$y_ini_menu = array();
\$m_ini_menu = array();
\$d_ini_menu = array();
\$n_dates_menu = array();
\$d_increment = array();
\$y_ini_menu[0] = \"$a_ini_menu\";
\$m_ini_menu[0] = \"$m_ini_menu\";
\$d_ini_menu[0] = \"$g_ini_menu\";
\$n_dates_menu[0] = \"$n_date_menu\";
\$d_increment[0] = \"$aggiungi_giorni\";
\$d_names = \"\\\"".mex(" Do","inizio.php")."\\\",\\\"".mex(" Lu","inizio.php")."\\\",\\\"".mex(" Ma","inizio.php")."\\\",\\\"".mex(" Me","inizio.php")."\\\",\\\"".mex(" Gi","inizio.php")."\\\",\\\"".mex(" Ve","inizio.php")."\\\",\\\"".mex(" Sa","inizio.php")."\\\"\";
\$m_names = \"\\\"".mex("Gen","inizio.php")."\\\",\\\"".mex("Feb","inizio.php")."\\\",\\\"".mex("Mar","inizio.php")."\\\",\\\"".mex("Apr","inizio.php")."\\\",\\\"".mex("Mag","inizio.php")."\\\",\\\"".mex("Giu","inizio.php")."\\\",\\\"".mex("Lug","inizio.php")."\\\",\\\"".mex("Ago","inizio.php")."\\\",\\\"".mex("Set","inizio.php")."\\\",\\\"".mex("Ott","inizio.php")."\\\",\\\"".mex("Nov","inizio.php")."\\\",\\\"".mex("Dic","inizio.php")."\\\"\";

\$dates_options_list = \"

$date_option
\";

?>");
flock($fileaperto,3);
fclose($fileaperto);

$selperiodimenu_vecchio = implode("",file(C_DATI_PATH."/selperiodimenu$anno.$id_utente_cambia.php"));
if ($selperiodimenu_vecchio == $selectperiodi_vecchio) copy (C_DATI_PATH."/selectperiodi$anno.$id_utente_cambia.php",C_DATI_PATH."/selperiodimenu$anno.$id_utente_cambia.php");
else {
$date_option_agg_ut = $date_option_agg;
if ($tipo_periodi == "g") {
$date_option_agg_ut = str_replace("[Sun]",mex(" Do","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Mon]",mex(" Lu","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Tue]",mex(" Ma","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Wed]",mex(" Me","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Thu]",mex(" Gi","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Fri]",mex(" Ve","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[Sat]",mex(" Sa","inizio.php"),$date_option_agg_ut);
} # fine if ($tipo_periodi == "g")
$date_option_agg_ut = str_replace("[01]",mex("Gen","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[02]",mex("Feb","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[03]",mex("Mar","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[04]",mex("Apr","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[05]",mex("Mag","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[06]",mex("Giu","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[07]",mex("Lug","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[08]",mex("Ago","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[09]",mex("Set","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[10]",mex("Ott","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[11]",mex("Nov","inizio.php"),$date_option_agg_ut);
$date_option_agg_ut = str_replace("[12]",mex("Dic","inizio.php"),$date_option_agg_ut);
unset($y_ini_menu);
unset($m_ini_menu);
unset($d_ini_menu);
unset($n_dates_menu);
unset($d_increment);
include(C_DATI_PATH."/selperiodimenu$anno.$id_utente_cambia.php");
$num_periodi_vecchi = count($y_ini_menu);
$fileaperto = fopen(C_DATI_PATH."/selperiodimenu$anno.$id_utente_cambia.php","w+");
flock($fileaperto,2);
fwrite($fileaperto,"<?php 

\$y_ini_menu = array();
\$m_ini_menu = array();
\$d_ini_menu = array();
\$n_dates_menu = array();
\$d_increment = array();
");
for ($num1 = 0 ; $num1 < $num_periodi_vecchi ; $num1++) {
fwrite($fileaperto,"\$y_ini_menu[$num1] = \"".$y_ini_menu[$num1]."\";
\$m_ini_menu[$num1] = \"".$m_ini_menu[$num1]."\";
\$d_ini_menu[$num1] = \"".$d_ini_menu[$num1]."\";
\$n_dates_menu[$num1] = \"".$n_dates_menu[$num1]."\";
\$d_increment[$num1] = \"".$d_increment[$num1]."\";
");
} # fine for $num1

if ($importa_prezzi) {
$num_periodo_creato = $num_periodi_vecchi;
$intervallo_corr = 0;
$ultimo_intervallo = 0;
$prima_data = "";
$date_importa_prec = "";
$n_date_menu_corr = 0;
$prima_data_db = esegui_query("select datainizio from $tableperiodi where idperiodi = '1' ");
$prima_data_db = risul_query($prima_data_db,0,'datainizio');
for ($num1 = 0 ; $num1 < $n_date_menu_agg ; $num1++) {
$data_corr = date("Y-m-d w",mktime(0,0,0,$m_ini_menu_agg,($g_ini_menu_agg + ($num1 * $aggiungi_giorni)),$a_ini_menu_agg));
$a_corr = substr($data_corr,0,4);
if ($tipo_importa == "giorn") $data_imp = date("Y-m-d",mktime(0,0,0,substr($data_corr,5,2),substr($data_corr,8,2),($a_corr - 1)));
if ($tipo_importa == "sett") {
$num_giorno_sett = substr($data_corr,11,1);
$data_imp = date("Y-m-d w",mktime(0,0,0,substr($data_corr,5,2),substr($data_corr,8,2),($a_corr - 1)));
while (substr($data_imp,11,1) != $num_giorno_sett) $data_imp = date("Y-m-d w",mktime(0,0,0,substr($data_imp,5,2),((int) substr($data_imp,8,2) + 1),substr($data_imp,0,4)));
$data_imp = substr($data_imp,0,10);
} # fine if ($tipo_importa == "sett")
$data_corr = substr($data_corr,0,10);
$date_importa = "";
if (substr($data_imp,0,4) < $anno) {
if ($tableperiodi_prec and @is_file(C_DATI_PATH."/selperiodimenu".($anno - 1)."$id_utente_cambia.php")) {
if (!$date_importa_prec) {
$dates_options_list_corr = $dates_options_list;
include(C_DATI_PATH."/selperiodimenu".($anno - 1)."$id_utente_cambia.php");
$date_importa_prec = $dates_options_list;
$dates_options_list = $dates_options_list_corr;
$prima_data_db_prec = esegui_query("select datainizio from $tableperiodi_prec where idperiodi = '1' ");
$prima_data_db_prec = risul_query($prima_data_db_prec,0,'datainizio');
$ultima_data_db_prec = esegui_query("select max(datafine) from $tableperiodi_prec ");
$ultima_data_db_prec = risul_query($ultima_data_db_prec,0,0);
} # fine if (!$date_importa_prec)
if ($data_imp >= $prima_data_db_prec and $data_imp <= $ultima_data_db_prec) $date_importa = $date_importa_prec;
} # fine if ($tableperiodi_prec and @is_file(C_DATI_PATH."/selperiodimenu".($anno - 1)."$id_utente_cambia.php"))
} # fine if (substr($data_imp,0,4) < $anno)
elseif ($data_imp >= $prima_data_db) $date_importa = trim($dates_options_list)."\n".str_replace("\\\"","\"",$date_option_agg_ut);
$intervallo_corr++;
if (!$date_importa or strstr($date_importa,"\"$data_imp\"")) {
if (!$ultimo_intervallo) {
$prima_data = $data_corr;
$n_date_menu_corr = 0;
$ultimo_intervallo = $intervallo_corr;
} # fine if (!$ultimo_intervallo)
if ($intervallo_corr != $ultimo_intervallo) {
fwrite($fileaperto,"\$y_ini_menu[$num_periodo_creato] = \"".substr($prima_data,0,4)."\";
\$m_ini_menu[$num_periodo_creato] = \"".(substr($prima_data,5,2) - 1)."\";
\$d_ini_menu[$num_periodo_creato] = \"".substr($prima_data,8,2)."\";
\$n_dates_menu[$num_periodo_creato] = \"$n_date_menu_corr\";
\$d_increment[$num_periodo_creato] = \"$ultimo_intervallo\";
");
$num_periodo_creato++;
$prima_data = $data_corr;
$n_date_menu_corr = 0;
$ultimo_intervallo = $intervallo_corr;
} # fine if ($intervallo_corr != $ultimo_intervallo)
$n_date_menu_corr++;
$intervallo_corr = 0;
} # fine if (!$date_importa or strstr($date_importa,"\"$data_imp\""))
else $date_option_agg_ut = str_replace("\n\n","\n",preg_replace("|<option value=\\\\\"$data_corr\\\\\">.*</option>|","",$date_option_agg_ut));
} # fine for $num1
if ($n_date_menu_corr) {
fwrite($fileaperto,"\$y_ini_menu[$num_periodo_creato] = \"".substr($prima_data,0,4)."\";
\$m_ini_menu[$num_periodo_creato] = \"".((int) substr($prima_data,5,2) - 1)."\";
\$d_ini_menu[$num_periodo_creato] = \"".substr($prima_data,8,2)."\";
\$n_dates_menu[$num_periodo_creato] = \"$n_date_menu_corr\";
\$d_increment[$num_periodo_creato] = \"$ultimo_intervallo\";
");
} # fine if ($n_date_menu_corr)
$date_option_agg_ut = trim($date_option_agg_ut)."\n";
} # fine if ($importa_prezzi)

else {
fwrite($fileaperto,"\$y_ini_menu[$num_periodi_vecchi] = \"$a_ini_menu_agg\";
\$m_ini_menu[$num_periodi_vecchi] = \"".($m_ini_menu_agg - 1)."\";
\$d_ini_menu[$num_periodi_vecchi] = \"$g_ini_menu_agg\";
\$n_dates_menu[$num_periodi_vecchi] = \"$n_date_menu_agg\";
\$d_increment[$num_periodi_vecchi] = \"$aggiungi_giorni\";
");
} # fine else if ($importa_prezzi)

fwrite($fileaperto,"\$partial_dates = 1;
\$d_names = \"\\\"".mex(" Do","inizio.php")."\\\",\\\"".mex(" Lu","inizio.php")."\\\",\\\"".mex(" Ma","inizio.php")."\\\",\\\"".mex(" Me","inizio.php")."\\\",\\\"".mex(" Gi","inizio.php")."\\\",\\\"".mex(" Ve","inizio.php")."\\\",\\\"".mex(" Sa","inizio.php")."\\\"\";
\$m_names = \"\\\"".mex("Gen","inizio.php")."\\\",\\\"".mex("Feb","inizio.php")."\\\",\\\"".mex("Mar","inizio.php")."\\\",\\\"".mex("Apr","inizio.php")."\\\",\\\"".mex("Mag","inizio.php")."\\\",\\\"".mex("Giu","inizio.php")."\\\",\\\"".mex("Lug","inizio.php")."\\\",\\\"".mex("Ago","inizio.php")."\\\",\\\"".mex("Set","inizio.php")."\\\",\\\"".mex("Ott","inizio.php")."\\\",\\\"".mex("Nov","inizio.php")."\\\",\\\"".mex("Dic","inizio.php")."\\\"\";

\$dates_options_list = \"

".trim(addslashes($dates_options_list))."
$date_option_agg_ut
\";

?>");
flock($fileaperto,3);
fclose($fileaperto);
} # fine else if ($selperiodimenu_vecchio == $selectperiodi_vecchio)

} # fine if ($id_utente_cambia == 1 or $anno_attivato)
} # fine for $num_utente
$lingua_mex = $lingua_mex2;

} # fine if (controlla_num_pos($mese_fine) == "SI" and $mese_fine <= 48 and $mese_fine >= $mese_cont)

$datafine_f = formatta_data($datafine,$stile_data);
if (!empty($origine)) $azione = controlla_pag_origine($origine);
else $azione = "visualizza_tabelle.php";
echo mex("I periodi sono stati aggiunti fino al",$pag)." $datafine_f.<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
unlock_tabelle($tabelle_lock);

$lock = 1;
$aggiorna_disp = 0;
$aggiorna_tar = 1;
$closed_on_arr_dep = "SI";
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");

} # fine else if (empty($continua))
} # fine if (!empty($aggiungi) and $id_utente == 1)


else {



$anno_attuale = date("Y",(time() + (C_DIFF_ORE * 3600)));
if ((!defined('C_CANCELLA_ANNO_ATTUALE') or C_CANCELLA_ANNO_ATTUALE != "SI") and $anno != $anno_attuale) {
$anno_attuale_esistente = esegui_query("select * from $tableanni where idanni = $anno_attuale");
if (numlin_query($anno_attuale_esistente) == 0) $anno_attuale = $anno;
} # fine if ((!defined('C_CANCELLA_ANNO_ATTUALE') or C_CANCELLA_ANNO_ATTUALE != "SI") and $anno != $anno_attuale)
if (!empty($cancella_anno) and $id_utente == 1 and ((defined('C_CANCELLA_ANNO_ATTUALE') and C_CANCELLA_ANNO_ATTUALE == "SI") or $anno != $anno_attuale)) {
if (empty($continua)) {
$tabelle_lock = array($tableanni);
$tabelle_lock = lock_tabelle($tabelle_lock);
echo "<br><big>".mex("<b style=\"color: red;\">ATTENZIONE</b>: premendo su <b>\"<i>Continua</i>\"</b>, tutti i dati riguardanti l'anno",$pag)." <b><i>$anno</i></b> ".mex("verranno <b>cancellati</b>",$pag)."!</big><br><br>
<div style=\"text-align: center;\"><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"cancella_anno\" value=\"1\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"continua\" value=\"1\">
<button class=\"cyea\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
</div></form><br><br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form></div><br>";
unlock_tabelle($tabelle_lock);
} # fine if (empty($continua))

else {
$cancellato = "";
$filelock = fopen(C_DATI_PATH."/anni.lock","w+");
flock($filelock,2);
$tabelle_lock = array($tableanni,$tableprenota,$tableprenotacanc,$tablecostiprenota,$tablerclientiprenota,$tablenometariffe,$tableperiodi,$tablecosti,$tableregole,$tablesoldi,$tableinterconnessioni,$tablepersonalizza,$tableprivilegi);
$tabelle_lock = lock_tabelle($tabelle_lock);
$anno_esiste = esegui_query("select * from $tableanni where idanni = $anno");
if (numlin_query($anno_esiste) > 0) {
if (@unlink(C_DATI_PATH."/selectperiodi$anno.$id_utente.php")) {
unlink(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
esegui_query("drop table $tableprenota");
esegui_query("drop table $tableprenotacanc");
esegui_query("drop table $tablecostiprenota");
esegui_query("drop table $tablerclientiprenota");
esegui_query("drop table $tablenometariffe");
esegui_query("drop table $tableperiodi");
esegui_query("drop table $tablecosti");
esegui_query("drop table $tableregole");
esegui_query("drop table $tablesoldi");
esegui_query("delete from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno'");
esegui_query("delete from $tableanni where idanni = '$anno'");
esegui_query("delete from $tableinterconnessioni where anno = '$anno'");
$utenti_privilegi = esegui_query("select idutente from $tableprivilegi where anno = '$anno' ");
for ($num1 = 0 ; $num1 < numlin_query($utenti_privilegi) ; $num1++) {
$idutente_priv = risul_query($utenti_privilegi,$num1,'idutente');
unlink(C_DATI_PATH."/selectperiodi$anno.$idutente_priv.php");
unlink(C_DATI_PATH."/selperiodimenu$anno.$idutente_priv.php");
} # fine for $num1
esegui_query("delete from $tableprivilegi where anno = '$anno'");
echo mex("L'anno",$pag)." $anno ".mex("è stato cancellato dal batabase",$pag).".<br>";
} # fine if (unlink(C_DATI_PATH."/selectperiodi$anno.$id_utente.php"))
else $cancellato = "NO";
} # fine if (numlin_query($anno_esiste) > 0)
else $cancellato = "NO";
if ($cancellato == "NO") {
echo mex("Non è stato possibile cancellare l'anno",$pag)." $anno ".mex("dal database, controllare i permessi sulla cartella dati",$pag).".<br>";
} # fine if ($cancellato == "NO")
unlock_tabelle($tabelle_lock);
flock($filelock,3);
fclose($filelock);
unlink(C_DATI_PATH."/anni.lock");
} # fine else if (empty($continua))
} # fine if (!empty($cancella_anno) and $id_utente == 1 and ((defined('C_CANCELLA_ANNO_ATTUALE') and...

else {



$frase_costi_agg = "";
$form_agg_per = "";
if (((!empty($idntariffe) and $priv_canc_costi_agg != "n") or (!empty($per_comm_canc) and $priv_mod_tariffe != "n" and ($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$numtariffa]))))  and empty($torna_alla_tab)) {
$mostra_pag_principale = "NO";

if ($idntariffe) {
$per_comm_canc = "";
$tabelle_lock = array($tablenometariffe);
$tabelle_lock = lock_tabelle($tabelle_lock);
$idntariffe = aggslashdb($idntariffe);
$costo_agg = esegui_query("select * from $tablenometariffe where idntariffe = '$idntariffe' ");
if (numlin_query($costo_agg) == 1) $nome_costo_agg = risul_query($costo_agg,0,"nomecostoagg");
else $nome_costo_agg = "";
if (empty($cancella)) {
echo mex("Sei sicuro di voler cancellare il costo aggiuntivo",$pag)." \"<b>$nome_costo_agg</b>\"?<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php#tab_costi_agg\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idntariffe\" value=\"".htmlspecialchars($idntariffe)."\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"d_nome_costo_agg\" value=\"".htmlspecialchars($nome_costo_agg)."\">
<button class=\"cexc\" type=\"submit\" name=\"cancella\" value=\"".mex("SI",$pag)."\"><div>".mex("SI",$pag)."</div></button>
<button class=\"gobk\" type=\"submit\" name=\"torna_alla_tab\" value=\"".mex("NO",$pag)."\"><div>".mex("NO",$pag)."</div></button>
</div></form>";
} # fine if (empty($cancella))

else {
if (controlla_num_pos($idntariffe) == "NO" or $idntariffe <= 10) $cancella = "";
if ($attiva_costi_agg_consentiti_ut != "n" and $costi_agg_consentiti_vett_ut[$idntariffe] != "SI") $cancella = "";
if (!$nome_costo_agg or $nome_costo_agg != $d_nome_costo_agg) $cancella = "";
if (!$cancella) {
echo mex("Il costo aggiuntivo è cambiato nel frattempo, non è stato cancellato",$pag).".<br>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php#tab_costi_agg\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine if (!$cancella)
else {
esegui_query("delete from $tablenometariffe where idntariffe = '$idntariffe'");
$mostra_pag_principale = "";
$frase_costi_agg .= mex("Il costo aggiuntivo",$pag)." \"<b>$nome_costo_agg</b>\" ".mex("è stato cancellato",$pag).".<br>";
} # fine else if (!$cancella)
} # fine else if (empty($cancella))
unlock_tabelle($tabelle_lock);

if (!empty($cancella)) {
$lock = 1;
$aggiorna_disp = 0;
$aggiorna_tar = 1;
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");
} # fine if (!empty($cancella))
} # fine if ($idntariffe)

if ($per_comm_canc) {
$tabelle_lock = array($tableregole);
$altre_tab_lock = array($tableperiodi);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$numtariffa = aggslashdb($numtariffa);
$ini_comm = explode("-",$per_comm_canc);
$fine_comm = $ini_comm[1];
$ini_comm = $ini_comm[0];
if (!$numtariffa or controlla_num_pos($numtariffa) != "SI") $numtariffa = "-1";
if (!$ini_comm or controlla_num_pos($ini_comm) != "SI") $ini_comm = "-1";
if (!$fine_comm or controlla_num_pos($fine_comm) != "SI") $fine_comm = "-1";
$comm = esegui_query("select * from $tableregole where tariffa_commissioni = '$numtariffa' and iddatainizio = '$ini_comm' and iddatafine = '$fine_comm' ");
if (numlin_query($comm) != 1) $errore = 1;
if (!$cancella and !$errore) {
$ini_comm = esegui_query("select * from $tableperiodi where idperiodi = '$ini_comm' ");
$ini_comm = formatta_data(risul_query($ini_comm,0,'datainizio'),$stile_data);
$fine_comm = esegui_query("select * from $tableperiodi where idperiodi = '$fine_comm' ");
$fine_comm = formatta_data(risul_query($fine_comm,0,'datafine'),$stile_data);
echo mex("Sei sicuro di voler cancellare le commissioni dal",$pag)." $ini_comm ".mex("al",$pag)." $fine_comm ".mex("sulla tariffa",$pag)." <b>$numtariffa</b>?<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idntariffe\" value=\"$idntariffe\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"numtariffa\" value=\"$numtariffa\">
<input type=\"hidden\" name=\"per_comm_canc\" value=\"$per_comm_canc\">
<button class=\"ctax\" type=\"submit\" name=\"cancella\" value=\"".mex("SI",$pag)."\"><div>".mex("SI",$pag)."</div></button>
<button class=\"gobk\" type=\"submit\" name=\"torna_alla_tab\" value=\"".mex("NO",$pag)."\"><div>".mex("NO",$pag)."</div></button>
</div></form>";
} # fine if (!$cancella and !$errore)

else {
if ($errore) echo mex("Le commissioni sono cambiate nel frattempo, non sono state cancellate",$pag).".<br>";
else {
$idreg = risul_query($comm,0,'idregole');
esegui_query("delete from $tableregole where idregole = '$idreg'");
echo mex("Le commissioni sono state cancellate",$pag).".<br>";
} # fine else if (!$cancella)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine else if ($errore)
unlock_tabelle($tabelle_lock);
} # fine if ($per_comm_canc)

} # fine if (((!empty($idntariffe) and $priv_canc_costi_agg != "n") or...


else {



$max_periodo = esegui_query("select max(idperiodi) from $tableperiodi");
$max_periodo = risul_query($max_periodo,0,0);
if (fixset($origine) == "tab_tariffe.php" and $priv_ins_costi_agg != "n" and $priv_mod_costo_agg != "n" and $priv_canc_costi_agg != "n") $ins_pmin = 1;
else $ins_pmin = 0;


if (fixset($ins_form_tabella) == "SI" and ($priv_mod_tariffe != "n" or $ins_pmin)) {
$mostra_pag_principale = "NO";
if ($ins_pmin) $tabelle_lock = array($tablenometariffe,$tableperiodi,$tableprivilegi);
else $tabelle_lock = array($tablenometariffe,$tableperiodi);
$tabelle_lock = lock_tabelle($tabelle_lock);
$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
$lista_periodi = explode(",",aggslashdb($lista_periodi));
$lista_sett_in_per = explode(",",aggslashdb($lista_sett_in_per));
$num_periodi = count($lista_periodi);
include("./includes/funzioni_tariffe.php");
$dati_tariffe = dati_tariffe($tablenometariffe);
$casella_sbagliata = "NO";


if ($ins_pmin) {
include_once("./includes/funzioni_costi_agg.php");
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,$dati_tariffe['num']);
$num_ca_orig = $dati_ca['num'];
$permanenza_minima = array();
$costo_tar_pmin = array();
$costi_pmin_periodo = array();
#$permanenza_massima = array();
#$pmax_attiva = 0;
for ($num1 = 1 ; $num1 <= $numero_tariffe ; $num1++) {
if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num1]))) {
if (!$tariffe_sel or !empty(${"tariffa_sel".$num1})) {
for ($num2 = 0 ; $num2 < $dati_ca['num'] ; $num2++) {
if (isset($dati_ca[$num2]["tipo_associa_tariffa$num1"]) and ($dati_ca[$num2]["tipo_associa_tariffa$num1"] == "s" or $dati_ca[$num2]["tipo_associa_tariffa$num1"] == "r")) {
if (substr($dati_ca[$num2]["tariffa$num1"],0,1) != "s") {
$p_min = 0;
#$p_max = 0;
if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == ">") $p_min = substr($dati_ca[$num2]["tariffa$num1"],1);
#if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == "<") $p_max = substr($dati_ca[$num2]["tariffa$num1"],1);
if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == "=") {
$p_min = substr($dati_ca[$num2]["tariffa$num1"],1);
#$p_max = $p_min;
} # fine if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == "=")
if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == "|") {
$p_min = explode("<",substr($dati_ca[$num2]["tariffa$num1"],1));
#$p_max = $p_min[1];
$p_min = $p_min[0];
} # fine if (substr($dati_ca[$num2]["tariffa$num1"],0,1) == "|")
if ($p_min) {
$num_for = 1;
$ini_for[1] = 1;
$fine_for[1] = $max_periodo;
if ($dati_ca[$num2]["tipo_associa_"."tariffa$num1"] == "r" and $dati_ca[$num2]['periodipermessi']) {
$costo_tar_pmin["tariffa$num1"][$p_min][$num2] = substr($dati_ca[$num2]['periodipermessi_orig'],1);
$num_for = 0;
for ($num3 = 0 ; $num3 < count($dati_ca[$num2]['sett_periodipermessi_ini']) ; $num3++) {
$num_for = $num3 + 1;
$ini_for[$num_for] = $dati_ca[$num2]['sett_periodipermessi_ini'][$num3];
$fine_for[$num_for] = $dati_ca[$num2]['sett_periodipermessi_fine'][$num3];
} # fine for $num3
} # fine if ($dati_ca[$num2]["tipo_associa_"."tariffa$num1"] == "r" and...
for ($num3 = 1 ; $num3 <= $num_for ; $num3++) {
for ($num4 = $ini_for[$num3] ; $num4 <= $fine_for[$num3] ; $num4++) {
$costi_pmin_periodo["tariffa$num1"][$num4][$num2] = $p_min;
if (empty($permanenza_minima["tariffa$num1"][$num4]) or $p_min > $permanenza_minima["tariffa$num1"][$num4]) $permanenza_minima["tariffa$num1"][$num4] = $p_min;
#if ($p_max and (!$permanenza_massima[$num4] or $p_max < $permanenza_massima[$num4])) $permanenza_massima["tariffa$num1"][$num4] = $p_max;
} # fine for $num4
} # fine for $num3
#if ($p_max > 0) $pmax_attiva = 1;
} # fine if ($p_min)
} # fine if (substr($dati_ca[$num2]["tariffa$num1"],0,1) != "s")
} # fine if (isset($dati_ca[$num2]["tipo_associa_tariffa$num1"]) and $dati_ca[$num2]["tipo_associa_tariffa$num1"] == "s" or...
} # fine for $num2
} # fine if (!$tariffe_sel or !empty(${"tariffa_sel".$num1}))
} # fine if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num1])))
} # fine for $num1

function costo_compatibile_pmin ($numca,$numtariffa,$dati_ca,$dati_tariffe,&$costo_tar_pmin,$p_min="",$tipo_perm_min="") {
$costo_compatibile = 0;
if ($dati_ca[$numca]['valore'] == 0 and $dati_ca[$numca]['tipo'] == "u" and $dati_ca[$numca]['tipo_val'] == "f" and $dati_ca[$numca]['moltiplica'] == "1" and $dati_ca[$numca]['molt_agg'] == "0" and $dati_ca[$numca]['letto'] == "n" and empty($dati_ca[$numca]['beniinv_orig']) and empty($dati_ca[$numca]['appincompatibili']) and empty($dati_ca[$numca]['numlimite'])) $costo_compatibile = 1;
elseif ($p_min) unset($costo_tar_pmin["tariffa$numtariffa"][$p_min][$numca]);
if ($costo_compatibile) {
for ($nt = 1 ; $nt <= $dati_tariffe['num'] ; $nt++) {
if ($nt == $numtariffa) {
if (!$tipo_perm_min and ($dati_ca[$numca]["tipo_associa_tariffa$nt"] != "r" or substr($dati_ca[$numca]["tariffa$nt"],0,1) != ">")) $costo_compatibile = 0;
if ($tipo_perm_min and $tipo_perm_min != $dati_ca[$numca]["tipo_associa_tariffa$nt"].$dati_ca[$numca]["tariffa$nt"]) $costo_compatibile = 0;
} # fine if ($nt == $numtariffa)
elseif (!empty($dati_ca[$numca]["tariffa$nt"])) $costo_compatibile = 0;
if (!$costo_compatibile) break;
} # fine for $nt
} # fine if ($costo_compatibile)
return $costo_compatibile;
} # fine function costo_compatibile_pmin

function cambia_periodi_permessi ($periodiperm,$oper,$ini_per,$fine_per,$numca,&$dati_ca,$tablenometariffe="") {
$n_periodiperm = "";
$per_aggiunto = 0;
$periodiperm = explode(",",$periodiperm);
$num_periodiperm = count($periodiperm);
for ($num1 = 0 ; $num1 < $num_periodiperm ; $num1++) {
if (!empty($periodiperm[$num1])) {
$per_corr = explode("-",$periodiperm[$num1]);
if ($per_corr[1] >= ($ini_per - 1) and $per_corr[0] <= ($fine_per + 1)) {
if ($oper == "+") {
$per_aggiunto = 1;
if ($ini_per < $per_corr[0]) $per_corr[0] = $ini_per;
if ($fine_per > $per_corr[1]) {
$per_corr[1] = $fine_per;
if (($num1 + 1) < $num_periodiperm) $per_succ = explode("-",$periodiperm[($num1 + 1)]);
while (($num1 + 1) < $num_periodiperm and $per_succ[0] <= ($fine_per + 1)) {
$num1++;
if ($per_succ[1] > $per_corr[1]) $per_corr[1] = $per_succ[1];
if (($num1 + 1) < $num_periodiperm) $per_succ = explode("-",$periodiperm[($num1 + 1)]);
} # fine while (($num1 + 1) < $num_periodiperm and $per_succ[0] <= ($fine_per + 1))
$n_periodiperm .= $per_corr[0]."-".$per_corr[1].",";
} # fine if ($fine_per > $per_corr[1])
} # fine if ($oper == "+")
if ($oper == "-" and $per_corr[1] >= $ini_per and $per_corr[0] <= $fine_per) {
if ($ini_per > $per_corr[0] and $fine_per < $per_corr[1]) {
$n_periodiperm .= $per_corr[0]."-".($ini_per - 1).",".($fine_per + 1)."-".$per_corr[1].",";
} # fine if ($ini_per > $per_corr[0] and $fine_per < $per_corr[1])
else {
if ($ini_per <= $per_corr[0]) $per_corr[0] = $fine_per + 1;
if ($fine_per >= $per_corr[1]) $per_corr[1] = $ini_per - 1;
if ($per_corr[1] >= $per_corr[0]) $n_periodiperm .= $per_corr[0]."-".$per_corr[1].",";
} # fine else if ($ini_per > $per_corr[0] and $fine_per < $per_corr[1])
} # fine if ($oper == "-" and $per_corr[1] >= $ini_per and $per_corr[0] <= $fine_per)
} # fine if ($per_corr[1] >= ($ini_per - 1) and $per_corr[0] <= ($fine_per + 1))
else {
if ($oper == "+" and !$per_aggiunto and $per_corr[0] > $fine_per) {
$per_aggiunto = 1;
$n_periodiperm .= "$ini_per-$fine_per,";
} # fine if ($oper == "+" and !$per_aggiunto and $per_corr[0] > $fine_per)
$n_periodiperm .= $periodiperm[$num1].",";
} # fine else if ($per_corr[1] >= $ini_per and $per_corr[1] <= $fine_per)
} # fine if (!empty($periodiperm[$num1]))
} # fine for $num1
if ($oper == "+" and !$per_aggiunto) $n_periodiperm .= "$ini_per-$fine_per,";
$n_periodiperm = substr($n_periodiperm,0,-1);
if ($tablenometariffe) {
esegui_query("update $tablenometariffe set periodipermessi_ca = '".$dati_ca[$numca]['periodipermessi']."".aggslashdb($n_periodiperm)."' where idntariffe = '".$dati_ca[$numca]['id']."'");
$dati_ca[$numca]['periodipermessi_orig'] = $dati_ca[$numca]['periodipermessi'].$n_periodiperm;
$sett_periodipermessi = explode(",",$n_periodiperm);
$num_sett_periodipermessi = count($sett_periodipermessi);
$dati_ca[$numca]['sett_periodipermessi_ini'] = array();
$dati_ca[$numca]['sett_periodipermessi_fine'] = array();
for ($num1 = 0 ; $num1 < $num_sett_periodipermessi ; $num1++) {
if (!empty($sett_periodipermessi[$num1])) {
$sett_periodipermesso = explode("-",$sett_periodipermessi[$num1]);
$dati_ca[$numca]['sett_periodipermessi_ini'][$num1] = $sett_periodipermesso[0];
$dati_ca[$numca]['sett_periodipermessi_fine'][$num1] = $sett_periodipermesso[1];
} # fine if (!empty($sett_periodipermessi[$num1]))
} # fine for $num1
} # fine if ($tablenometariffe)
return $n_periodiperm;
} # fine function cambia_periodi_permessi

function inserisci_costo_permanenza_minima ($tariffa,$p_min,$periodo,&$dati_ca,&$permanenza_minima,&$costo_tar_pmin,&$costi_pmin_periodo,$dati_tariffe,$tablenometariffe,$tableprivilegi,$tipo_perm_min="") {
global $id_utente,$anno,$attiva_costi_agg_consentiti_ut,$priv_ins_costi_agg,$utenti_gruppi,$LIKE,$parola_settimane,$id_sessione;
$numtariffa = substr($tariffa,7);
if (!strstr($periodo,"-")) $periodo = "$periodo-$periodo";
$periodi = explode("-",$periodo);
$inserisci_nuovo_costo = 1;

if (isset($costo_tar_pmin[$tariffa][$p_min]) and is_array($costo_tar_pmin[$tariffa][$p_min])) {
reset($costo_tar_pmin[$tariffa][$p_min]);
foreach ($costo_tar_pmin[$tariffa][$p_min] as $numca => $periodiperm) {
if (costo_compatibile_pmin($numca,$numtariffa,$dati_ca,$dati_tariffe,$costo_tar_pmin,$p_min,$tipo_perm_min)) {
$inserisci_nuovo_costo = 0;
$n_periodiperm = cambia_periodi_permessi($periodiperm,"+",$periodi[0],$periodi[1],$numca,$dati_ca,$tablenometariffe);
$costo_tar_pmin[$tariffa][$p_min][$numca] = $n_periodiperm;
break;
} # fine if (costo_compatibile_pmin($numca,$numtariffa,$dati_ca,$dati_tariffe,$costo_tar_pmin,$p_min,$tipo_perm_min))
} # fine foreach ($costo_tar_pmin[$tariffa][$p_min] as $numca => $periodiperm)
} # fine if (isset($costo_tar_pmin[$tariffa][$p_min]) and is_array($costo_tar_pmin[$tariffa][$p_min]))

if ($inserisci_nuovo_costo) {
$nome_costo_agg = mex("permanenza minima",'creaprezzi.php')." $p_min".mex($parola_settimane,'visualizza_tabelle.php')." ".mex("tariffa",'visualizza_tabelle.php').$numtariffa;
$costiagg_esist = esegui_query("select * from $tablenometariffe where nomecostoagg $LIKE '".aggslashdb($nome_costo_agg)."%' and idntariffe > 10 ");
$nomi_esist = array();
for ($num1 = 0 ; $num1 < numlin_query($costiagg_esist) ; $num1++) $nomi_esist[risul_query($costiagg_esist,$num1,'nomecostoagg')] = 1;
if (!empty($nomi_esist[$nome_costo_agg])) $nome_costo_agg .= " *";
while (!empty($nomi_esist[$nome_costo_agg])) $nome_costo_agg .= "*";
$idntariffe = esegui_query("select numlimite_ca from $tablenometariffe where idntariffe = '1'");
$idntariffe = risul_query($idntariffe,0,0);
if (!$tipo_perm_min) $tipo_perm_min = "r>$p_min";
esegui_query("insert into $tablenometariffe (idntariffe,nomecostoagg,tipo_ca,valore_ca,moltiplica_ca,periodipermessi_ca,variazione_ca,mostra_ca,categoria_ca,letto_ca,regoleassegna_ca,utente_inserimento,$tariffa) values ('$idntariffe','".aggslashdb($nome_costo_agg)."','uf','0','1x0,','u".aggslashdb($periodo)."','nnsssnnnn','nsnn','".aggslashdb(mex("permanenza minima",'creaprezzi.php'))."','n',';','$id_utente','".aggslashdb($tipo_perm_min)."')");
aggiorna_privilegi_ins_costo($idntariffe,$tableprivilegi,$id_utente,$anno,$attiva_costi_agg_consentiti_ut,$priv_ins_costi_agg,$utenti_gruppi,'q');
$numca = $dati_ca['num'];
$dati_ca['num']++;
$dati_ca[$numca]['id'] = $idntariffe;
$idntariffe++;
esegui_query("update $tablenometariffe set numlimite_ca = '$idntariffe' where idntariffe = '1'");
$dati_ca['id'][$dati_ca[$numca]['id']] = $numca;
$dati_ca[$numca]['valore'] = 0;
$dati_ca[$numca]['tipo'] = "u";
$dati_ca[$numca]['tipo_val'] = "f";
$dati_ca[$numca]['moltiplica'] = "1";
$dati_ca[$numca]['molt_agg'] = "0";
$dati_ca[$numca]['letto'] = "n";
$dati_ca[$numca]['periodipermessi_orig'] = "u$periodo";
$dati_ca[$numca]['periodipermessi'] = "u";
$dati_ca[$numca]['sett_periodipermessi_ini'] = array();
$dati_ca[$numca]['sett_periodipermessi_fine'] = array();
$dati_ca[$numca]['sett_periodipermessi_ini'][0] = $periodi[0];
$dati_ca[$numca]['sett_periodipermessi_fine'][0] = $periodi[1];
$dati_ca[$numca][$tariffa] = substr($tipo_perm_min,1);
$dati_ca[$numca]["tipo_associa_$tariffa"] = substr($tipo_perm_min,0,1);
$costo_tar_pmin[$tariffa][$p_min][$numca] = $periodo;
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_costi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idntariffe\" value=\"".($idntariffe - 1)."\">
<input type=\"hidden\" name=\"origine\" value=\"tab_tariffe.php?numtariffa1=$numtariffa\">
".mex("Il costo aggiuntivo",'creaprezzi.php')." \"<em>$nome_costo_agg</em>\" ".mex("è stato inserito",'creaprezzi.php').".
 <button class=\"exco\" type=\"submit\"><div>".mex("Modifica il costo",'creaprezzi.php')."</div></button>
</div></form>";
} # fine if ($inserisci_nuovo_costo)

for ($num1 = $periodi[0] ; $num1 <= $periodi[1] ; $num1++) {
$costi_pmin_periodo[$tariffa][$num1][$numca] = $p_min;
if (!$permanenza_minima[$tariffa][$num1] or $p_min > $permanenza_minima[$tariffa][$num1]) $permanenza_minima[$tariffa][$num1] = $p_min;
} # fine for $num1
} # fine function inserisci_costo_permanenza_minima

} # fine if ($ins_pmin)


for ($num1 = 0 ; $num1 < $num_periodi ; $num1++) {
$periodo = $lista_periodi[$num1];
if (str_replace("-","",$periodo) != $periodo) {
$periodo = explode("-",$periodo);
$iniperiodo = $periodo[0];
$fineperiodo = $periodo[1];
} # fine if (str_replace("-","",$periodo) != $periodo)
else {
$iniperiodo = $periodo;
$fineperiodo = $periodo;
} # fine else if (str_replace("-","",$periodo) != $periodo)

if ($priv_mod_tariffe != "n") {
$prezzo_esist = esegui_query("select * from $tableperiodi where idperiodi = '$iniperiodo' ");
$agg_vett_tar_esp = array();
unset($num_agg_tar_esp);
for ($num2 = 1 ; $num2 <= $numero_tariffe ; $num2++) {
if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num2])) and empty($dati_tariffe["tariffa$num2"]['importa_prezzi'][0])) {
if ((empty($solo_sel) or !empty(${"mod_per".$iniperiodo."tar".$num2})) and (empty($tariffe_sel) or !empty(${"tariffa_sel".$num2}))) {
$imp_periodo = 0;
for ($num3 = 1 ; $num3 < $dati_tariffe["tariffa$num2"]['num_per_importa'] ; $num3++) {
for ($num4 = $iniperiodo ; $num4 <= $fineperiodo ; $num4++) {
if ($dati_tariffe["tariffa$num2"]['periodo_importa_f'][$num3] >= $num4 and $dati_tariffe["tariffa$num2"]['periodo_importa_i'][$num3] <= $num4) $imp_periodo = 1;
} # fine for $num4
if ($imp_periodo) break;
} # fine for $num3
if (!$imp_periodo) {
$prezzo = formatta_soldi(${"per".$iniperiodo."tar".$num2});
$prezzop = formatta_soldi(fixset(${"per".$iniperiodo."tar".$num2."p"}));
if (controlla_soldi($prezzo) != "NO" and controlla_soldi($prezzop) != "NO" and numlin_query($prezzo_esist)) {

if ((string) $prezzo != (string) risul_query($prezzo_esist,0,"tariffa$num2") or $lista_sett_in_per[$num1] > 1) {
if (strcmp((string) $prezzo,"")) {
if ($lista_sett_in_per[$num1] == 1) {
esegui_query("update $tableperiodi set tariffa$num2 = '$prezzo' where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
if ($dati_tariffe['tariffa'.$num2]['moltiplica'] != "p") esegui_query("update $tableperiodi set tariffa$num2"."p = NULL where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2","$iniperiodo-$fineperiodo",$prezzo,"NO",$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine if ($lista_sett_in_per[$num1] == 1)
else {
unset($prezzo_vett);
$num_sett = $lista_sett_in_per[$num1];
$prezzo_int = floor($prezzo);
$resto_int = $prezzo - (double) $prezzo_int;
$prezzo_sett = floor($prezzo_int / (double) $num_sett);
for ($num3 = 1 ; $num3 <= $num_sett ; $num3++) $prezzo_vett[$num3] = $prezzo_sett;
$resto = $prezzo_int - ($prezzo_sett * $num_sett);
if ($resto >= 1) {
$prezzo_vett[1]++;
$resto--;
} # fine if ($resto >= 1)
for ($num3 = $num_sett ; $num3 > ($num_sett - $resto) ; $num3--) $prezzo_vett[$num3]++;
$prezzo_vett[1] += $resto_int;
for ($num3 = $iniperiodo ; $num3 <= $fineperiodo ; $num3++) {
for ($num4 = 1 ; $num4 <= $num_sett ; $num4++) {
if ($num4 != 1) $num3++;
if ($num3 <= $fineperiodo) {
esegui_query("update $tableperiodi set tariffa$num2 = '".$prezzo_vett[$num4]."' where idperiodi = '$num3' ");
if ($dati_tariffe['tariffa'.$num2]['moltiplica'] != "p") esegui_query("update $tableperiodi set tariffa$num2"."p = NULL where idperiodi = '$num3' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2",$num3,$prezzo_vett[$num4],"NO",$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine if ($num3 <= $fineperiodo)
} # fine for $num4
} # fine for $num3
} # fine else if ($lista_sett_in_per[$num1] == 1)
} # fine if (strcmp((string) $prezzo,""))
else {
esegui_query("update $tableperiodi set tariffa$num2 = NULL where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
if ($dati_tariffe['tariffa'.$num2]['moltiplica'] != "p") esegui_query("update $tableperiodi set tariffa$num2"."p = NULL where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2","$iniperiodo-$fineperiodo","","NO",$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine else if (strcmp((string) $prezzo,""))
} # fine if ((string) $prezzo != (string) risul_query($prezzo_esist,0,"tariffa$num2") or...

if ($dati_tariffe['tariffa'.$num2]['moltiplica'] == "p") {
if ((string) $prezzop != (string) risul_query($prezzo_esist,0,"tariffa".$num2."p") or $lista_sett_in_per[$num1] > 1) {
if (strcmp((string) $prezzop,"")) {
if ($lista_sett_in_per[$num1] == 1) {
esegui_query("update $tableperiodi set tariffa$num2"."p = '$prezzop' where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2","$iniperiodo-$fineperiodo","NO",$prezzop,$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine if ($lista_sett_in_per[$num1] == 1)
else {
unset($prezzo_vett);
$num_sett = $lista_sett_in_per[$num1];
$prezzo_int = floor($prezzop);
$resto_int = $prezzop - (double) $prezzo_int;
$prezzo_sett = floor($prezzo_int / (double) $num_sett);
for ($num3 = 1 ; $num3 <= $num_sett ; $num3++) $prezzo_vett[$num3] = $prezzo_sett;
$resto = $prezzo_int - ($prezzo_sett * $num_sett);
if ($resto >= 1) {
$prezzo_vett[1]++;
$resto--;
} # fine if ($resto >= 1)
for ($num3 = $num_sett ; $num3 > ($num_sett - $resto) ; $num3--) $prezzo_vett[$num3]++;
$prezzo_vett[1] += $resto_int;
for ($num3 = $iniperiodo ; $num3 <= $fineperiodo ; $num3++) {
for ($num4 = 1 ; $num4 <= $num_sett ; $num4++) {
if ($num4 != 1) $num3++;
if ($num3 <= $fineperiodo) {
esegui_query("update $tableperiodi set tariffa$num2"."p = '".$prezzo_vett[$num4]."' where idperiodi = '$num3' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2",$num3,"NO",$prezzo_vett[$num4],$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine if ($num3 <= $fineperiodo)
} # fine for $num4
} # fine for $num3
} # fine else if ($lista_sett_in_per[$num1] == 1)
} # fine if (strcmp((string) $prezzop,""))
else {
esegui_query("update $tableperiodi set tariffa$num2"."p = NULL where idperiodi >= '$iniperiodo' and idperiodi <= '$fineperiodo' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num2","$iniperiodo-$fineperiodo","NO","",$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine else if (strcmp((string) $prezzop,""))
} # fine if ((string) $prezzo != (string) risul_query($prezzo_esist,0,"tariffa$num2") or...
} # fine if ($dati_tariffe['tariffa'.$num2]['moltiplica'] == "p")

} # fine if (controlla_soldi($prezzo) != "NO" and controlla_soldi($prezzop) != "NO" and numlin_query($prezzo_esist))
else $casella_sbagliata = "SI";
} # fine if (!$imp_periodo)
} # fine if ((empty($solo_sel) or !empty(${"mod_per".$iniperiodo."tar".$num2})) and (!$tariffe_sel or ${"tariffa_sel".$num2}))
} # fine if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num2])) and...
} # fine for $num2
} # fine if ($priv_mod_tariffe != "n")


if ($ins_pmin) {
if (!$fine_form) $casella_sbagliata = "SI";
for ($num2 = 1 ; $num2 <= $numero_tariffe ; $num2++) {
if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num2]))) {
if ((empty($solo_sel) or !empty(${"mod_per$iniperiodo"."tar$num2"."pmin"})) and (empty($tariffe_sel) or !empty(${"tariffa_sel$num2"}))) {
for ($num3 = $iniperiodo ; $num3 <= $fineperiodo ; $num3++) {
$p_min = ${"per$iniperiodo"."tar$num2"."pmin"};
if (!strcmp((string) $p_min,"") or controlla_num_pos($p_min) == "SI") {
if (strcmp((string) $p_min,"") and $p_min < 2) $p_min = "";
if ($p_min != fixset($permanenza_minima["tariffa$num2"][$num3])) {

if (!$permanenza_minima["tariffa$num2"][$num3] or $p_min > $permanenza_minima["tariffa$num2"][$num3]) inserisci_costo_permanenza_minima("tariffa$num2",$p_min,$num3,$dati_ca,$permanenza_minima,$costo_tar_pmin,$costi_pmin_periodo,$dati_tariffe,$tablenometariffe,$tableprivilegi);
else {
$ins_nuovo_costo = 1;
reset($costi_pmin_periodo["tariffa$num2"][$num3]);
foreach ($costi_pmin_periodo["tariffa$num2"][$num3] as $numca => $p_min_corr) {
if (!$p_min or $p_min_corr > $p_min) {
$tipo_perm_min = $dati_ca[$numca]["tipo_associa_tariffa$num2"].$dati_ca[$numca]["tariffa$num2"];
if (costo_compatibile_pmin($numca,$num2,$dati_ca,$dati_tariffe,$costo_tar_pmin,"",$tipo_perm_min)) {
if (!$dati_ca[$numca]['periodipermessi_orig']) $periodiperm = "1-$max_periodo";
else $periodiperm = substr($dati_ca[$numca]['periodipermessi_orig'],1);
$n_periodiperm = cambia_periodi_permessi($periodiperm,"-",$num3,$num3,$numca,$dati_ca,$tablenometariffe);
$costo_tar_pmin["tariffa$num2"][$p_min_corr][$numca] = $n_periodiperm;
unset($costi_pmin_periodo["tariffa$num2"][$num3][$numca]);
} # fine if (costo_compatibile_pmin($numca,$num2,$dati_ca,$dati_tariffe,$costo_tar_pmin,"",$tipo_perm_min))
else {
esegui_query("update $tablenometariffe set tariffa$num2 = 'p".$dati_ca[$numca]["tariffa$num2"]."' where idntariffe = '".$dati_ca[$numca]['id']."'");
$dati_ca[$numca]["tipo_associa_tariffa$num2"] = "p";
unset($costo_tar_pmin["tariffa$num2"][$p_min_corr][$numca]);
unset($costi_pmin_periodo["tariffa$num2"][$num3][$numca]);
if (!$dati_ca[$numca]['periodipermessi_orig']) $periodiperm = "1-$max_periodo";
else $periodiperm = substr($dati_ca[$numca]['periodipermessi_orig'],1);
$n_periodiperm = cambia_periodi_permessi($periodiperm,"-",$num3,$num3,"",$dati_ca);
$n_periodiperm_vett = explode(",",$n_periodiperm);
for ($num4 = 0 ; $num4 < count($n_periodiperm_vett) ; $num4++) {
if (!strstr($n_periodiperm_vett[$num4],"-")) unset($costi_pmin_periodo["tariffa$num2"][$n_periodiperm_vett[$num4]][$numca]);
else {
$periodo_corr = explode("-",$n_periodiperm_vett[$num4]);
for ($num5 = $periodo_corr[0] ; $num5 <= $periodo_corr[1] ; $num5++) unset($costi_pmin_periodo["tariffa$num2"][$num5][$numca]);
} # fine else if (!strstr($n_periodiperm_vett[$num4],"-"))
inserisci_costo_permanenza_minima("tariffa$num2",$p_min_corr,$n_periodiperm_vett[$num4],$dati_ca,$permanenza_minima,$costo_tar_pmin,$costi_pmin_periodo,$dati_tariffe,$tablenometariffe,$tableprivilegi,$tipo_perm_min);
} # fine for $num4
} # fine else if (costo_compatibile_pmin($numca,$num2,$dati_ca,$dati_tariffe,$costo_tar_pmin,"",$tipo_perm_min))
} # fine if (!$p_min or $p_min_corr > $p_min)
elseif ($p_min_corr == $p_min) $ins_nuovo_costo = 0;
} # fine foreach ($costi_pmin_periodo["tariffa$num2"][$num3] as $numca => $p_min_corr)
if ($ins_nuovo_costo and $p_min) inserisci_costo_permanenza_minima("tariffa$num2",$p_min,$num3,$dati_ca,$permanenza_minima,$costo_tar_pmin,$costi_pmin_periodo,$dati_tariffe,$tablenometariffe,$tableprivilegi);
$permanenza_minima["tariffa$num2"][$num3] = $p_min;
} # fine else if (!$permanenza_minima["tariffa$num2"][$num3] or $p_min < $permanenza_minima["tariffa$num2"][$num3])

} # fine if ($p_min != fixset($permanenza_minima["tariffa$num2"][$num3]))
} # fine if (!strcmp((string) $p_min,"") or controlla_num_pos($p_min) == "SI")
} # fine for $num3
} # fine if ((!$solo_sel or ${"mod_per$iniperiodo"."tar$num2"."pmin"}) and (!$tariffe_sel or ${"tariffa_sel$num2"}))
} # fine if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num2]))) 
} # fine for $num2
} # fine if ($ins_pmin)


} # fine for $num1

for ($num1 = 1 ; $num1 <= $numero_tariffe ; $num1++) {
if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num1])) and empty($dati_tariffe["tariffa$num1"]['importa_prezzi'][0])) {
if (!$tariffe_sel or !empty(${"tariffa_sel".$num1})) {
$opztariffa = esegui_query("select * from $tableperiodi where tariffa$num1"."p is not NULL and tariffa$num1"."p != '0' ");
if (numlin_query($opztariffa)) $opztariffa = "p";
else $opztariffa = "s";
esegui_query("update $tablenometariffe set tariffa$num1 = '$opztariffa' where idntariffe = '4' ");
aggiorna_tariffe_esporta($dati_tariffe,"tariffa$num1","opztariffa","",$tablenometariffe,$tableperiodi,$agg_vett_tar_esp,$num_agg_tar_esp);
} # fine if (!$tariffe_sel or !empty(${"tariffa_sel".$num1}))
} # fine if (($attiva_tariffe_consentite_ut == "n" or isset($tariffe_consentite_vett_ut[$num1])) and...
} # fine for $num1
unlock_tabelle($tabelle_lock);

if ($ins_pmin and $dati_ca['num'] > $num_ca_orig and $priv_crea_pagineweb != "n") {
echo "<br>";
function aggiorna_var_modello () {
global $dati_ca,$num_ca_orig,$var_mod,$num_var_mod,$crea_modello;
$crea_modello = 0;
for ($num1 = 0 ; $num1 < $num_var_mod ; $num1++) {
if ($var_mod[$num1] == 'costi_aggiuntivi_mostra') {
$crea_modello = 1;
for ($numca = $num_ca_orig ; $numca < $dati_ca['num'] ; $numca++) {
$attiva_costo = "attiva_costo".$dati_ca[$numca]['id'];
$nome_costo_imposto = "nome_costo_imposto".$dati_ca[$numca]['id'];
$nome_cat_imp = "nome_cat_imp".$dati_ca[$numca]['id'];
global $$attiva_costo,$$nome_costo_imposto,$$nome_cat_imp;
$$attiva_costo = "SI";
$$nome_costo_imposto = "";
$$nome_cat_imp = "";
} # fine for $numca
break;
} # fine if ($var_mod[$num1] == 'costi_aggiuntivi_mostra')
} # fine for $num1
} # fine function aggiorna_var_modello
include('./includes/templates/aggiorna_modelli.php');
} # fine if ($ins_pmin and $dati_ca['num'] > $num_ca_orig and $priv_crea_pagineweb != "n")

$lock = 1;
$aggiorna_disp = 0;
$aggiorna_tar = 1;
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");

if ($origine) $azione = controlla_pag_origine($origine);
else $azione = "visualizza_tabelle.php";
if ($casella_sbagliata == "SI") echo "".mex("<div style=\"display: inline; color: red;\">Non</div> è stato possibile inserire alcuni prezzi",$pag).".<br>";
echo "".mex("I prezzi sono stati aggiornati",$pag).".<br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"tariffe_sel\" value=\"$tariffe_sel\">";
if ($origine == "tab_tariffe.php") {
echo "<input type=\"hidden\" name=\"mostra_disp\" value=\"$mostra_disp\">
<input type=\"hidden\" name=\"mostra_pmm\" value=\"$mostra_pmm\">
<input type=\"hidden\" name=\"raggruppa_date\" value=\"$raggruppa_date\">
<input type=\"hidden\" name=\"mos_per_sing\" value=\"$mos_per_sing\">
<input type=\"hidden\" name=\"num_tariffe_mostra\" value=\"$num_tariffe_mostra\">";
for ($num1 = 1 ; $num1 <= $num_tariffe_mostra ; $num1++) echo "<input type=\"hidden\" name=\"numtariffa$num1\" value=\"".${"numtariffa".$num1}."\">";
} # fine if ($origine == "tab_tariffe.php")
if (!empty($n_tar_passa)) echo "<input type=\"hidden\" name=\"n_tar_passa\" value=\"".htmlspecialchars($n_tar_passa)."\">";
if ($tariffe_sel) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (!empty(${"tariffa_sel".$numtariffa})) echo "<input type=\"hidden\" name=\"tariffa_sel$numtariffa\" value=\"SI\">";
} # fine for $numtariffa
} # fine if ($tariffe_sel)
echo "<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form>";
} # fine if (fixset($ins_form_tabella) == "SI" and ($priv_mod_tariffe != "n" or $ins_pmin))


if ($id_utente == 1 and fixset($mostra_pag_principale) != "NO") {
$data_fine_periodi = esegui_query("select * from $tableperiodi where idperiodi = '$max_periodo' ");
$data_fine_periodi = risul_query($data_fine_periodi,0,'datainizio');
$data_fine_periodi = explode("-",$data_fine_periodi);
$mese_fine_periodi = $data_fine_periodi[1] + (($data_fine_periodi[0] - $anno) * 12) + 1;
$form_agg_per = "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"aggiungi\" value=\"1\">";
if (!empty($mostra_form_agg_per)) $form_agg_per .= "<input type=\"hidden\" name=\"continua\" value=\"1\"><span class=\"colinfo\">".mex("Attenzione",$pag)."</span>: ".mex("i periodi aggiunti non potranno più essere eliminati",$pag).".<br><br><br>";
$form_agg_per .= "<button class=\"amon\" type=\"submit\"><div>".mex("Aggiungi periodi",$pag)."</div></button>
 ".mex("fino al mese",$pag)."
 <select name=\"mese_fine\">";
$sel_mostrato = 0;
for ($num1 = $mese_fine_periodi ; $num1 <= 48 ; $num1 = $num1 + 1) {
$anno_ag = $anno;
if ($num1 > 12) $anno_ag = $anno + 1;
if ($num1 > 24) $anno_ag = $anno + 2;
if ($num1 > 36) $anno_ag = $anno + 3;
if ($num1 > 48) $anno_ag = $anno + 4;
$mese_ag = $num1 - (($anno_ag - $anno) * 12);
if ($mese_ag == 12 and !$sel_mostrato) {
$sel = " selected";
$sel_mostrato = 1;
} # fine if ($mese_ag == 12 and !$sel_mostrato)
else $sel = "";
$form_agg_per .= "<option value=\"$num1\"$sel>$mese_ag - $anno_ag</option>";
} # fine for $num1
$form_agg_per .= "</select><br>
<small>(<label><input type=\"checkbox\" name=\"importa_prezzi\" value=\"SI\" style=\"width: 14px; height: 12px;\" checked>".mex("prova ad importare i prezzi",$pag)."</label>";
if ($tipo_periodi == "g") {
$chk_gio = "";
$chk_set = "";
include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
for ($num1 = 0 ; $num1 <  count($d_increment) ; $num1++) if ($d_increment[$num1] == 7) $chk_set = " checked";
if (!$chk_set) $chk_gio = " checked";
$form_agg_per .= ":<label><input type=\"radio\" name=\"tipo_importa\" value=\"giorn\" style=\"width: 14px; height: 12px;\"$chk_gio>".mex("giornalmente",$pag)."</label>
<label><input type=\"radio\" name=\"tipo_importa\" value=\"sett\" style=\"width: 14px; height: 12px;\"$chk_set>".mex("settimanalmente",$pag)."</label>";
} # fine if ($tipo_periodi == "g")
if (!empty($origine)) $form_agg_per .= "<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">";
$form_agg_per .= ")</small>.</div></form>";

if (!empty($mostra_form_agg_per)) {
$mostra_pag_principale = "NO";
echo $form_agg_per;
} # fine if (!empty($mostra_form_agg_per))
} # fine if ($id_utente == 1 and $mostra_pag_principale != "NO")


} # fine else if ((($idntariffe and $priv_canc_costi_agg != "n") or...




if (!isset($mostra_pag_principale) or $mostra_pag_principale != "NO") {

if (!function_exists('dati_tariffe')) include("./includes/funzioni_tariffe.php");
if (!function_exists('dati_costi_agg_ntariffe')) include("./includes/funzioni_costi_agg.php");
$dati_tariffe = dati_tariffe($tablenometariffe,"","",$tableregole);
$dati_r2 = "";
dati_regole2($dati_r2,$app_regola2_predef,"","","",$id_periodo_corrente,$tipo_periodi,$anno,$tableregole);

if (fixset($form_tabella) != "SI") $form_tabella = "";
if (fixset($mos_tutti_per) != "SI") $mos_tutti_per = "";

$n_per_passa = 0;
if ($mos_tutti_per == "SI") $periodi = esegui_query("select * from $tableperiodi order by idperiodi");
else {
$oggi = date("Y-m-d",(time() + (C_DIFF_ORE * 3600)));
$periodi = esegui_query("select * from $tableperiodi where datafine >= '$oggi' order by idperiodi");
if (!numlin_query($periodi) or $oggi > ($anno + 1)."-01-10") $periodi = esegui_query("select * from $tableperiodi order by idperiodi");
else $n_per_passa = (risul_query($periodi,0,'idperiodi') - 1);
} # fine else if ($mos_tutti_per == "SI")
$num_periodi = numlin_query($periodi);
$n_per_passa += $num_periodi;

echo "<h3 id=\"h_rat\"><span>".mex("Tabella con periodi e relative tariffe del",$pag)." $anno.</span></h3>";
if ($form_tabella) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"ins_form_tabella\" value=\"SI\">
<input type=\"hidden\" name=\"tariffe_sel\" value=\"$tariffe_sel\">
<input type=\"hidden\" name=\"n_tar_passa\" value=\"".$dati_tariffe['num']."\">
<input type=\"hidden\" name=\"n_per_passa\" value=\"$n_per_passa\">";
if ($tariffe_sel) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (${"tariffa_sel".$numtariffa}) echo "<input type=\"hidden\" name=\"tariffa_sel$numtariffa\" value=\"SI\">";
} # fine for $numtariffa
} # fine if ($tariffe_sel)
} # fine if ($form_tabella)
else {
if (!$tariffe_sel) {
echo "<form id=\"f_tpt0\" accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"tariffe_sel\" value=\"SI\">
<input type=\"hidden\" name=\"n_tar_passa\" value=\"".$dati_tariffe['num']."\">";
} # fine if (!$tariffe_sel)
else echo "<form id=\"f_tpt0\" accept-charset=\"utf-8\"><div>";
} # fine else if ($form_tabella)
if ($tariffe_sel) {
$lista_tariffe_sel = "tariffe_sel=$tariffe_sel&amp;n_tar_passa=".$dati_tariffe['num'];
for ($num1 = 1 ; $num1 <= $dati_tariffe['num'] ; $num1++) if (!empty(${"tariffa_sel".$num1})) $lista_tariffe_sel .= "&amp;tariffa_sel$num1=SI";
} # fine if ($tariffe_sel)
else $lista_tariffe_sel = "";

echo "<br><div class=\"tab_cont\">
<table id=\"t_pertar1\" class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">";
$riga_tariffe_tab = "<tr class=\"t1trep\"><td><a href=\"./visualizza_tabelle.php?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=periodi&amp;mos_tutti_per=SI&amp;form_tabella=$form_tabella&amp;$lista_tariffe_sel\">N°</a></td>";
if (!$mobile_device) {
$riga_tariffe_tab .= "<td>".str_replace("_","&nbsp;",mex("Inizio_$parola_settimana",$pag))."</td>
<td>".str_replace("_","&nbsp;",mex("Fine_$parola_settimana",$pag))."</td>";
} # fine if (!$mobile_device)
else {
$riga_tariffe_tab .= "<td>".str_replace("_"," ",mex("Inizio_$parola_settimana",$pag))."</td>
<td>".str_replace("_"," ",mex("Fine_$parola_settimana",$pag))."</td>";
} # fine else if (!$mobile_device)
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa = $numtariffa + 1) {
if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
if (!$tariffe_sel or !empty(${"tariffa_sel".$numtariffa})) {
$tariffa = "tariffa".$numtariffa;
$nometariffa = $dati_tariffe[$tariffa]['nome'];
$nometariffa_vedi = "<a href=\"./tab_tariffe.php?anno=$anno&amp;id_sessione=$id_sessione&amp;numtariffa1=$numtariffa\">";
if ($nometariffa == "") {
$nometariffa = $tariffa;
$nometariffa_vedi .= mex("tariffa",$pag).$numtariffa."</a>";
} # fine if ($nometariffa == "")
else {
#$nometariffa = str_replace(" ","&nbsp;",$nometariffa);
if (num_caratteri_testo($nometariffa) > 10) $nometariffa_vedi .= mex("tariffa",$pag).$numtariffa."</a><br><small><small>$nometariffa</small></small>";
else $nometariffa_vedi .= mex("tariffa",$pag).$numtariffa."</a><br>".$nometariffa;
} # fine else if ($nometariffa == "")
if (!empty($dati_tariffe[$tariffa]['importa_prezzi'][0])) $nometariffa_vedi .= "<br><small><small style=\"white-space: nowrap;\">".mex("prezzi importati",$pag)."<br> ".mex("dalla tariffa",$pag)." <b>".$dati_tariffe[$tariffa]['importa_prezzi'][0]."</b></small></small>";
if ($dati_tariffe[$tariffa]['moltiplica'] == "p" or (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1)) {
$nometariffa_vedi .= "<br><small><small style=\"white-space: nowrap;\">";
if (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1) {
$nometariffa_vedi .= "(x".$dati_r2['napp']["tariffa".$numtariffa].")";
if ($dati_tariffe[$tariffa]['moltiplica'] == "p") $nometariffa_vedi .= " ";
} # fine if (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1)
if ($dati_tariffe[$tariffa]['moltiplica'] == "p") $nometariffa_vedi .= "(".mex("per persona",$pag).")";
$nometariffa_vedi .= "</small></small>";
} # fine if ($dati_tariffe[$tariffa]['moltiplica'] == "p" or (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1))
$riga_tariffe_tab .= "<td class=\"t1top\" valign=\"top\">$nometariffa_vedi</td>";
} # fine if (!$tariffe_sel or !empty(${"tariffa_sel".$numtariffa}))
} # fine if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or...
} # fine for $numtariffa
$riga_tariffe_tab .= "</tr>";
echo str_replace(" class=\"t1trep\"","",$riga_tariffe_tab);

if (!$form_tabella and !$tariffe_sel) {
echo "<tr><td colspan=\"3\">
<button id=\"b_f_tpt0\" class=\"smallsbutton selm\" type=\"submit\"><div>".mex("Mostra solo tariffe selezionate",$pag)."</div></button>
</td>";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
echo "<td><input type=\"checkbox\" name=\"tariffa_sel$numtariffa\" value=\"SI\" style=\"width: 14px; height: 12px;\" onclick=\"document.getElementById('f_tpt0').onsubmit='';\"></td>";
} # fine if ($priv_vedi_tab_periodi != "p" or...
} # fine for $numtariffa
echo "</tr>";
} # fine if (!$form_tabella and !$tariffe_sel)

include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
$raggr_per = 0;
$date_menu = array();
for ($num1 = 0 ; $num1 <  count($d_increment) ; $num1++) if ($d_increment[$num1] != 1) $raggr_per = 1;
if ($raggr_per = 1 and fixset($mos_per_sing) != "SI") {
$datafine_periodi = explode("<option value=\"",$dates_options_list);
$num_dp = count($datafine_periodi);
for ($num1 = 1 ; $num1 < $num_dp ; $num1++) $date_menu[substr($datafine_periodi[$num1],0,10)] = 1;
$datafine_periodi = substr($datafine_periodi[($num_dp - 1)],0,10);
} # fine if ($raggr_per = 1 and fixset($mos_per_sing) != "SI")
else $datafine_periodi = "1970-01-01";


$n_righe = 0;
$riga_prezzi_prec = "";
$riga_prezzi_prec_r = "";
$lista_periodi = "";
$lista_sett_in_per = "";
$p_pers = mex("p",$pag);

for ($num1 = 0 ; $num1 < $num_periodi  ; $num1++) {
$idperiodi = risul_query($periodi,$num1,'idperiodi');
$idperiodi1 = $idperiodi;
$datainizio = risul_query($periodi,$num1,'datainizio');
$datainizio_f = formatta_data($datainizio,$stile_data);
$datafine = risul_query($periodi,$num1,'datafine');
$datafine_f = formatta_data($datafine,$stile_data);
$sett_in_per = 0;
$tar_chiusa = array();
$tar_importata = array();
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (!empty($dati_tariffe['tariffa'.$numtariffa]['chiusa'][$idperiodi])) $tar_chiusa[$numtariffa] = " class=\"bcolclosed\"";
$tar_importata[$numtariffa] = periodo_importato_tar('tariffa'.$numtariffa,$idperiodi,$dati_tariffe);
} # fine for $numtariffa

while ($sett_in_per == 0 or ($datafine <= $datafine_periodi and empty($date_menu[$datafine]))) {
$sett_in_per++;
if ($sett_in_per > 1) {
$num1++;
$idperiodi = risul_query($periodi,$num1,'idperiodi');
$datafine = risul_query($periodi,$num1,'datafine');
$datafine_f = formatta_data($datafine,$stile_data);
} # fine if ($sett_in_per > 1)
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($sett_in_per > 1) {
if (!empty($dati_tariffe[$tariffa]['chiusa'][$idperiodi])) $tar_chiusa[$numtariffa] = " class=\"bcolclosed\"";
$tar_imp = periodo_importato_tar($tariffa,$idperiodi,$dati_tariffe);
if (!$tar_importata[$numtariffa]) $tar_importata[$numtariffa] = $tar_imp;
elseif ($tar_imp and $tar_importata[$numtariffa] != $tar_imp) $tar_importata[$numtariffa] = -1;
} # fine if ($sett_in_per > 1)
$tar_corr = (string) risul_query($periodi,$num1,$tariffa);
if ($sett_in_per == 1 or !strcmp((string) $tar_corr,"")) $$tariffa = $tar_corr;
elseif (strcmp((string) $$tariffa,"")) $$tariffa += (double) $tar_corr;
$tariffap = "tariffa".$numtariffa."p";
$tarp_corr = (string) risul_query($periodi,$num1,$tariffap);
if ($sett_in_per == 1 or !strcmp((string) $tarp_corr,"")) $$tariffap = $tarp_corr;
elseif (strcmp((string) $$tariffap,"")) $$tariffap += (double) $tarp_corr;
} # fine for $numtariffa
} # fine while ($sett_in_per == 0 or...
$tar_app = array();
if (!$form_tabella) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
$tariffap = "tariffa".$numtariffa."p";
if (!strcmp((string) $$tariffa,"") and !strcmp((string) $$tariffap,"")) $$tariffa = "&nbsp;";
else {
if (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1) {
if (strcmp((string) $$tariffa,"")) $tar_app[$numtariffa] = punti_in_num($$tariffa * $dati_r2['napp']["tariffa".$numtariffa]);
#if (strcmp((string) $$tariffa,"") and strcmp((string) $$tariffap,"")) $tar_app[$numtariffa] .= "+";
#if (strcmp((string) $$tariffap,"")) $tar_app[$numtariffa] .= punti_in_num($$tariffap)."*p";
} # fine if (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1)
if (strcmp((string) $$tariffa,"")) $$tariffa = punti_in_num($$tariffa,$stile_soldi);
if (strcmp((string) $$tariffap,"")) $$tariffap = punti_in_num($$tariffap,$stile_soldi);
} # fine else if (!strcmp((string) $$tariffa,"")
} # fine for $numtariffa
} # fine if (!$form_tabella)

$riga_prezzi = "";
$riga_prezzi_r = "";
$p_app = array();
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa = $numtariffa + 1) {
if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
if (!$tariffe_sel or !empty(${"tariffa_sel".$numtariffa})) {
$tariffa = ${"tariffa".$numtariffa};
$tariffap = ${"tariffa".$numtariffa."p"};
if (!$tar_importata[$numtariffa]) $cella_prezzi = "<td id=\"pertar$numtariffa\"".fixset($tar_chiusa[$numtariffa]).">";
else $cella_prezzi = "<td".fixset($tar_chiusa[$numtariffa]).">";
if (isset($dati_r2['napp']["tariffa".$numtariffa]) and $dati_r2['napp']["tariffa".$numtariffa] > 1) $p_app[$numtariffa] = "*".$dati_r2['napp']["tariffa".$numtariffa];
if (strcmp((string) $tariffa,"") or !strcmp((string) $tariffap,"")) $cella_prezzi .= $tariffa.fixset($p_app[$numtariffa]);
if (!empty($tar_app[$numtariffa])) $cella_prezzi .= "<small><small>(=".$tar_app[$numtariffa].")</small></small>";
if (strcmp((string) $tariffap,"") and $dati_tariffe['tariffa'.$numtariffa]['moltiplica'] == "p") {
if (strcmp((string) $tariffa,"")) $cella_prezzi .= " + ";
$cella_prezzi .= $tariffap."*$p_pers";
} # fine if (strcmp((string) $tariffap,"")) and $dati_tariffe['tariffa'.$numtariffa]['moltiplica'] == "p")
if ($tar_importata[$numtariffa] and $tar_importata[$numtariffa] != $dati_tariffe["tariffa".$numtariffa]['importa_prezzi'][0]) {
$cella_prezzi .= "<br><small><small>";
if ((string) $tar_importata[$numtariffa] == "-1") $cella_prezzi .= "(".mex("da varie tariffe",$pag).")";
else $cella_prezzi .= str_replace(" ","&nbsp;","(".mex("dalla tariffa",$pag)." ".$tar_importata[$numtariffa].")");
$cella_prezzi .= "</small></small>";
} # fine if ($tar_importata[$numtariffa] and $tar_importata[$numtariffa] != $dati_tariffe["tariffa".$numtariffa]['importa_prezzi'][0])
$cella_prezzi .= "</td>";
$riga_prezzi .= $cella_prezzi;
if (!$form_tabella or ($attiva_tariffe_consentite_ut != "n" and !isset($tariffe_consentite_vett_ut[$numtariffa])) or $tar_importata[$numtariffa]) $riga_prezzi_r .= $cella_prezzi;
else {
$riga_prezzi_r .= "<td".fixset($tar_chiusa[$numtariffa])."><input type=\"text\" name=\"pertar$numtariffa\" value=\"$tariffa\" size=\"8\">".fixset($p_app[$numtariffa]);
if ($dati_tariffe['tariffa'.$numtariffa]['moltiplica'] == "p") $riga_prezzi_r .= " + <input type=\"text\" name=\"pertar$numtariffa"."p\" value=\"$tariffap\" size=\"6\">*$p_pers";
$riga_prezzi_r .= "</td>";
} # fine else if (!$form_tabella or ($attiva_tariffe_consentite_ut != "n" and...
} # fine if (!$tariffe_sel or !empty(${"tariffa_sel".$numtariffa}))
} # fine if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or...
} # fine for $numtariffa

if ($riga_prezzi_prec != $riga_prezzi or $mos_tutti_per == "SI" or $sett_in_per_prec != $sett_in_per) {
if ($riga_prezzi_prec) {
if ($idperiodi_ini != $idperiodi_prec) $idperiodi_vedi = $idperiodi_ini."-".$idperiodi_prec;
else $idperiodi_vedi = $idperiodi_ini;
$lista_periodi .= "$idperiodi_vedi,";
$lista_sett_in_per .= "$sett_in_per_prec,";
if ($sett_in_per_prec > 1) $idperiodi_vedi .= "<a href=\"./$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=periodi&amp;mos_per_sing=SI&amp;form_tabella=$form_tabella&amp;$lista_tariffe_sel\" style=\"text-decoration: none; color: #666666;\" title=\"".mex("mostra prezzi $parola_settimanali",$pag)."\"><b>&prime;</b></a><br>
<small><small>".str_replace(" ","&nbsp;","(".mex("periodi di",$pag)." $sett_in_per_prec ".mex("$parola_settimane",$pag).")")."</small></small>";
echo "<tr><td>$idperiodi_vedi</td>
<td class=\"t1left1\">$datainizio_f_ini</td>
<td class=\"t1left2\">$datafine_f_prec</td>";
if ($form_tabella) echo str_replace("name=\"pertar","name=\"per$idperiodi_ini"."tar",$riga_prezzi_prec_r);
else echo str_replace("id=\"pertar","id=\"per$idperiodi_ini"."tar",$riga_prezzi_prec_r);
echo "</tr>";
$n_righe++;
if ($n_righe == 25 or ($n_righe == 16 and $mobile_device)) {
echo $riga_tariffe_tab;
$n_righe = 0;
} # fine if ($n_righe == 25 or ($n_righe == 18 and $mobile_device))
} # fine if ($riga_prezzi_prec)
$idperiodi_ini = $idperiodi1;
$datainizio_f_ini = $datainizio_f;
} # fine if ($riga_prezzi_prec != $riga_prezzi or...
$riga_prezzi_prec = $riga_prezzi;
$riga_prezzi_prec_r = $riga_prezzi_r;
$idperiodi_prec = $idperiodi;
$datafine_f_prec = $datafine_f;
$sett_in_per_prec = $sett_in_per;
} # fine for $num1

if ($idperiodi_ini != $idperiodi_prec) $idperiodi_vedi = $idperiodi_ini."-".$idperiodi_prec;
else $idperiodi_vedi = $idperiodi_ini;
$lista_periodi .= "$idperiodi_vedi,";
$lista_sett_in_per .= "$sett_in_per_prec,";
if ($sett_in_per_prec > 1) $idperiodi_vedi .= "<br><small><small>$sett_in_per_prec $parola_settimane</small></small>";
echo "<tr><td>$idperiodi_vedi</td>
<td class=\"t1left\">$datainizio_f_ini</td>
<td class=\"t1left2\">$datafine_f_prec</td>
".str_replace("=\"pertar","=\"per$idperiodi_ini"."tar",$riga_prezzi_prec_r)."
</tr>";
echo "</table></div>";
if (!$form_tabella) echo "</div></form>";


if ($priv_mod_tariffe != "n") {
echo "<table><tr><td style=\"height: 2px;\"></td></tr></table><div style=\"text-align: center;\">";
if (!$form_tabella) {
echo "<form id=\"f_tpt\" accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"mos_tutti_per\" value=\"$mos_tutti_per\">
<input type=\"hidden\" name=\"form_tabella\" value=\"SI\">
<input type=\"hidden\" name=\"mos_per_sing\" value=\"$mos_per_sing\">
<input type=\"hidden\" name=\"tariffe_sel\" value=\"$tariffe_sel\">
<input type=\"hidden\" name=\"solo_sel\" value=\"1\">
<input type=\"hidden\" name=\"lista_periodi\" value=\"".substr($lista_periodi,0,-1)."\">
<input type=\"hidden\" name=\"lista_sett_in_per\" value=\"".substr($lista_sett_in_per,0,-1)."\">
<input type=\"hidden\" name=\"n_tar_passa\" value=\"".$dati_tariffe['num']."\">
<input type=\"hidden\" name=\"n_per_passa\" value=\"$n_per_passa\">";
if ($tariffe_sel) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (!empty(${"tariffa_sel".$numtariffa})) echo "<input type=\"hidden\" name=\"tariffa_sel$numtariffa\" value=\"SI\">";
} # fine for $numtariffa
} # fine if ($tariffe_sel)
echo "<button id=\"but_tpt\" class=\"edit\" type=\"submit\"><div>".mex("Modifica i campi della tabella",$pag)."</div></button>
</div></form><br>
<script type=\"text/javascript\">
<!--
var frase_mod_prezzi_tpt = '".htmlspecialchars(mex("Modifica i prezzi",$pag))."';
var subm_tpt = 0;
var tab_tariffe = 0;
var num_tab_per_tar = 1;
var fr_premere_per_modificare = '".htmlspecialchars(mex("Premere per modificare",$pag))."';
var tar_per_pers = new Array();
var tar_per_app = new Array();
";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if ($dati_tariffe["tariffa$numtariffa"]['moltiplica'] == "p") echo "tar_per_pers[$numtariffa] = 1;
";
if (!empty($p_app[$numtariffa])) echo "tar_per_app[$numtariffa] = '".$p_app[$numtariffa]."';
";
} # fine for $numtariffa
echo "attiva_mod_prezzi_cella();
-->
</script>";
if ($id_utente == 1) {
if (empty($mese_fine_periodi) or $mese_fine_periodi < 49) {
echo "<a name=\"agg_per\"></a>
$form_agg_per
<table><tr><td style=\"height: 8px;\"></td></tr></table>";
} # fine if (empty($mese_fine_periodi) or $mese_fine_periodi < 49)
$anno_attuale = date("Y",(time() + (C_DIFF_ORE * 3600)));
if ((!defined('C_CANCELLA_ANNO_ATTUALE') or C_CANCELLA_ANNO_ATTUALE != "SI") and $anno != $anno_attuale) {
$anno_attuale_esistente = esegui_query("select * from $tableanni where idanni = $anno_attuale");
if (numlin_query($anno_attuale_esistente) == 0) $anno_attuale = $anno;
} # fine if ((!defined('C_CANCELLA_ANNO_ATTUALE') or C_CANCELLA_ANNO_ATTUALE != "SI") and $anno != $anno_attuale)
if ((defined('C_CANCELLA_ANNO_ATTUALE') and C_CANCELLA_ANNO_ATTUALE == "SI") or $anno != $anno_attuale) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"./visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"periodi\">
<input type=\"hidden\" name=\"cancella_anno\" value=\"1\">
<button class=\"cyea\" type=\"submit\"><div>".mex("Cancella",$pag)."</div></button>
 ".mex("l'anno",$pag)." <b>$anno</b> ".mex("dal database",$pag).".
</div></form>";
} # fine if ((defined('C_CANCELLA_ANNO_ATTUALE') and C_CANCELLA_ANNO_ATTUALE == "SI") or $anno != $anno_attuale)
} # fine if ($id_utente == 1)
echo "</div>";
} # fine if (!$form_tabella)
else {
echo "<input type=\"hidden\" name=\"lista_periodi\" value=\"".substr($lista_periodi,0,-1)."\">
<input type=\"hidden\" name=\"lista_sett_in_per\" value=\"".substr($lista_sett_in_per,0,-1)."\">
<button class=\"mpri\" type=\"submit\"><div>".mex("Modifica i prezzi",$pag)."</div></button>
</div></div></form><br>";
} # fine else if (!$form_tabella)
} # fine if ($priv_mod_tariffe != "n")

echo "<br><a name=\"tab_costi_agg\"></a><br><h3 id=\"h_exc\"><span>".mex("Tabella con i costi aggiuntivi del",$pag)." $anno.</span></h3>
$frase_costi_agg
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Nome",$pag)."</td>
<td class=\"t1top\">".mex("Tipo",$pag)."</td>
<td class=\"t1top\">".mex("Prezzo",$pag)."</td>
<td class=\"t1top\">".mex("Regole",$pag)."</td>
<td class=\"t1top\" style=\"font-size: small;\">".mex("Tariffe abbinate",$pag)."</td>
<td class=\"t1top\" style=\"font-size: x-small;\">".mex("Incompatibilità",$pag)."</td>";
$beni_inv_esist = esegui_query("select idbeniinventario from $tablebeniinventario limit 1");
$beni_inv_esist = numlin_query($beni_inv_esist);
if ($beni_inv_esist) echo "<td class=\"t1top\" style=\"font-size: x-small;\">".mex("Beni inventario",$pag)."</td>";
echo "<td class=\"t1top\" style=\"font-size: small;\">".mex("Periodi_permessi",$pag)."</td>";
if ($priv_mod_costo_agg != "n" or $priv_canc_costi_agg != "n") echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td>";
echo "</tr>";
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex);
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,$dati_tariffe['num'],"NO","categoria_ca, tipo_ca, idntariffe");

for ($num1 = 0 ; $num1 < $num_periodi  ; $num1++) {
$idperiodi = risul_query($periodi,$num1,'idperiodi');
$datainizio_f_idperiodo[$idperiodi] = formatta_data(risul_query($periodi,$num1,'datainizio'),$stile_data);
if (!$num1) $datainizio_f_idperiodo['prima'] = $datainizio_f_idperiodo[$idperiodi];
$datafine_f_idperiodo[$idperiodi] = formatta_data(risul_query($periodi,$num1,'datafine'),$stile_data);
} # fine for $num1

for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($priv_vedi_tab_periodi != "p" or $attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI") {
$tariffe_abbinate = "";
$tariffe_incomp = "";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa = $numtariffa + 1) {
if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
$tariffa = "tariffa".$numtariffa;
$tariffa_abb = $dati_ca[$num1][$tariffa];
if ($tariffa_abb != "") {
$tariffe_abbinate .= "$numtariffa";
if (substr($tariffa_abb,0,1) == "|") $tariffa_abb = ">".substr($tariffa_abb,1);
if ($tariffa_abb != "s") $tariffe_abbinate .= "($tariffa_abb".mex("$lettera_s",$pag).")";
$tariffe_abbinate .= ", ";
} # fine if ($tariffa_abb != "")
if (isset($dati_ca[$num1]["incomp_".$tariffa]) and $dati_ca[$num1]["incomp_".$tariffa] == "i") $tariffe_incomp .= $numtariffa.", ";
} # fine if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or...
} # fine for $numtariffa
if ($tariffe_abbinate == "") $tariffe_abbinate = "&nbsp;";
else {
$tariffe_abbinate = substr($tariffe_abbinate,0,-2);
if ($dati_ca[$num1]['var_tariffea'] == "s") $tariffe_abbinate .= "<small> (".mex("modifica con prenotazione",$pag).")</small>";
} # fine else if ($tariffe_abbinate == "")
$incomp = "";
if ($tariffe_incomp) {
$incomp .= "<small>".mex("Tariffe",$pag).":</small> ".substr($tariffe_incomp,0,-2);
if ($dati_ca[$num1]['var_tariffei'] == "s") $incomp .= "<small> (".mex("modifica con prenotazione",$pag).")</small>";
} # fine if ($tariffe_incomp)
$app_incomp = $dati_ca[$num1]['appincompatibili'];
if ($app_incomp) {
if ($incomp) $incomp .= " ";
$incomp .= "<small>".mex("Appartamenti",'unit.php').":</small> ".str_replace(",",", ",$app_incomp);
if ($dati_ca[$num1]['var_appi'] == "s") $incomp .= "<small> (".mex("modifica con prenotazione",$pag).")</small>";
} # fine if $app_incomp
if (!$incomp) $incomp = "&nbsp;";
$nome_ca = $dati_ca[$num1]['nome'];
if (strcmp((string) $dati_ca[$num1]['categoria'],"")) $nome_ca .= "<br><small>(<em>".$dati_ca[$num1]['categoria']."</em>)</small>";
if ($dati_ca[$num1]['tipo'] == "u") $tipo = mex("unico",$pag);
if ($dati_ca[$num1]['tipo'] == "s") $tipo = mex("$parola_settimanale",$pag);
if ($dati_ca[$num1]['tipo_val'] == "f") $tipo .= ", ".mex("fisso",$pag);
if ($dati_ca[$num1]['tipo_val'] == "p") $tipo .= ", ".mex("percentuale su tariffa",$pag);
if ($dati_ca[$num1]['tipo_val'] == "q") $tipo .= ", ".mex("percentuale su fisso della tariffa",$pag);
if ($dati_ca[$num1]['tipo_val'] == "s") $tipo .= ", ".mex("percentuale su una persona della tariffa",$pag);
if ($dati_ca[$num1]['tipo_val'] == "t") $tipo .= ", ".mex("percentuale su totale",$pag);
if ($dati_ca[$num1]['tipo_val'] == "c") $tipo .= ", ".mex("percentuale su caparra",$pag);
if ($dati_ca[$num1]['tipo_val'] == "r") $tipo .= ", ".mex("percentuale su resto caparra",$pag);
if ($dati_ca[$num1]['var_percentuale'] == "s") $tipo .= "<small> (".mex("modifica con prenotazione",$pag).")</small>";
$prezzo = $dati_ca[$num1]['valore'];
if ($dati_ca[$num1]['mostra'] == "n") $regole = mex("Non_mostrare",$pag);
if ($dati_ca[$num1]['mostra'] == "s") $regole = mex("Mostra",$pag);
if ($dati_ca[$num1]['mostra_numpers'] == "s") $regole .= " ".mex("come tipo di persona",$pag);
if ($dati_ca[$num1]['raggruppa'] == "s") {
$regole .= "; ".mex("raggruppa",$pag);
if ($dati_ca[$num1]['combina'] == "s") {
$regole .= " ".mex("e combina",$pag);
if ($dati_ca[$num1]['var_comb'] == "s") $regole .= " (".mex("modifica con prenotazione",$pag).")";
} # fine if ($dati_ca[$num1]['combina'] == "s")
} # fine if ($dati_ca[$num1]['raggruppa'] == "s")
if ($dati_ca[$num1]['associasett'] == "s") $regole .= "; ".mex("associato_a_$parola_settimane"."_specifi$sillaba_che",$pag);
if ($dati_ca[$num1]['associasett'] == "n") $regole .= "; ".mex("non_associato_a_$parola_settimane"."_specifi$sillaba_che",$pag);
if ($dati_ca[$num1]['numsett'] == "t") $regole .= "; ".mex("tutt$lettera_e",$pag).mex("_$parola_le",$pag).mex("_$parola_settimane",$pag);
if ($dati_ca[$num1]['numsett'] == "m") $regole .= "; ".mex("tutt$lettera_e",$pag).mex("_$parola_le",$pag).mex("_$parola_settimane",$pag);
if (isset($dati_ca[$num1]['sett_meno_una'])) {
if ($dati_ca[$num1]['sett_meno_una'] == "u") $regole .= mex("_meno_l'ultim$lettera_a",$pag);
if ($dati_ca[$num1]['sett_meno_una'] == "p") $regole .= mex("_meno_$parola_la"."_prim$lettera_a",$pag);
} # fine if (isset($dati_ca[$num1]['sett_meno_una']))
if ($dati_ca[$num1]['numsett'] == "c") $regole .= "; ".mex("con_n°_di_$parola_settimane",$pag).mex("_da_chiedere",$pag);
if ($dati_ca[$num1]['numsett'] == "s") $regole .= "; ".$dati_ca[$num1]['num_sett_prime'].mex("_$parola_settimane",$pag).mex("_si",$pag).mex("_e_",$pag).$dati_ca[$num1]['num_sett_seconde'].mex("_$parola_settimane",$pag).mex("_no",$pag);
if ($dati_ca[$num1]['numsett'] == "n") $regole .= "; ".$dati_ca[$num1]['num_sett_prime'].mex("_$parola_settimane",$pag).mex("_no",$pag).mex("_e_",$pag).$dati_ca[$num1]['num_sett_seconde'].mex("_$parola_settimane",$pag).mex("_si",$pag);
if ($dati_ca[$num1]['numsett'] == "g") {
$regole .= "; ".mex("giorni",$pag).":";
if (str_replace("1","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Lu","giorni_mesi.php"));
if (str_replace("2","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Ma","giorni_mesi.php"));
if (str_replace("3","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Me","giorni_mesi.php"));
if (str_replace("4","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Gi","giorni_mesi.php"));
if (str_replace("5","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Ve","giorni_mesi.php"));
if (str_replace("6","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Sa","giorni_mesi.php"));
if (str_replace("7","",$dati_ca[$num1]['giornisett']) != $dati_ca[$num1]['giornisett']) $regole .= str_replace(" ","_",mex(" Do","giorni_mesi.php"));
} # fine if ($dati_ca[$num1][numsett] == "g")
if ($dati_ca[$num1]['var_numsett'] == "s") $regole .= " (".mex("modifica con prenotazione",$pag).")";
if (!empty($dati_ca[$num1]['cp_molt']['num'])) {
if ($dati_ca[$num1]['modo_cp_molt'] == "i") $cp_molt = " ".mex("includendo solo",$pag);
else $cp_molt = " ".mex("escludendo",$pag);
for ($num2 = 0 ; $num2 < $dati_ca[$num1]['cp_molt']['num'] ; $num2++) {
if ($num2 > 0) {
if ($num2 == ($dati_ca[$num1]['cp_molt']['num'] - 1)) $cp_molt .= " ".mex("e",$pag);
else $cp_molt .= ",";
} # fine if ($num2 > 0)
if ($dati_ca[$num1]['cp_molt']['ord'][$num2] == "0") {
if ($dati_cat_pers['num']) $cp_molt .= " <em>".$dati_cat_pers[0]['n_plur']."</em>";
else $cp_molt .= " <em>".mex("adulti",'personalizza.php')."</em>";
} # fine if ($dati_ca[$num1]['cp_molt']['ord'][$num2] == "0")
else $cp_molt .= " <em>".$dati_ca[$num1]['cp_molt'][$num2]['n_plur']."</em>";
} # fine for $num2
} # fine if (!empty($dati_ca[$num1]['cp_molt']['num']))
else $cp_molt = "";
if ($dati_ca[$num1]['moltiplica'] == "c") {
$regole .= "; ".str_replace("_","&nbsp;",mex("chidere_per_quanto_moltiplicare",$pag));
if ($dati_ca[$num1]['molt_max'] == "n") $regole .= " (".mex("non più di",$pag)." ".$dati_ca[$num1]['molt_max_num'].")";
if ($dati_ca[$num1]['molt_max'] == "p" or $dati_ca[$num1]['molt_max'] == "t") {
if ($dati_ca[$num1]['molt_max'] == "p") $regole .= " (".mex("non più del numero di persone",$pag).$cp_molt;
if ($dati_ca[$num1]['molt_max'] == "t") $regole .= " (".mex("non più del numero totale di persone",$pag).$cp_molt;
if ($dati_ca[$num1]['molt_max_num']) $regole .= " ".mex("meno",$pag)." ".$dati_ca[$num1]['molt_max_num'];
$regole .= ")";
} # fine if ($dati_ca[$num1]['molt_max'] == "p" or $dati_ca[$num1]['molt_max'] == "t")
} # fine if ($dati_ca[$num1]['moltiplica'] == "c")
if ($dati_ca[$num1]['moltiplica'] == "p") $regole .= "; ".str_replace("_","&nbsp;",mex("moltiplicare_per_persone",$pag)).$cp_molt;
if ($dati_ca[$num1]['moltiplica'] == "t") $regole .= "; ".str_replace("_","&nbsp;",mex("moltiplicare_per_persone_totali",$pag)).$cp_molt;
if ($dati_ca[$num1]['var_moltiplica'] == "s" or $dati_ca[$num1]['molt_agg']) {
if ($dati_ca[$num1]['moltiplica'] == "1") $regole .= "; ".str_replace("_","&nbsp;",mex("moltiplicare_per_1",$pag));
if ($dati_ca[$num1]['molt_agg']) $regole .= " ".mex("aggiungendo",$pag)." ".$dati_ca[$num1]['molt_agg'];
if ($dati_ca[$num1]['var_moltiplica'] == "s") $regole .= " (".mex("modifica con prenotazione",$pag).")";
} # fine if ($dati_ca[$num1]['var_moltiplica'] == "s" or $dati_ca[$num1]['molt_agg'])
if ($dati_ca[$num1]['letto'] == "s") {
$regole .= "; ".mex("cosiderare_come_letti_aggiuntivi",$pag);
if ($dati_ca[$num1]['perc_catpers'] == "s") $regole .= " ".mex("e applica la % del tipo di persona",$pag);
} # fine if ($dati_ca[$num1]['letto'] == "s")
if ($dati_ca[$num1]['escludi_tot_perc'] == "s") $regole .= "; ".mex("escludere_da_totale_percentuale",$pag);
if ($dati_ca[$num1]['numlimite']) $regole .= "; ".mex("massimo_",$pag).$dati_ca[$num1]['numlimite'].mex("_nell$lettera_a"."_stess$lettera_a"."_$parola_settimana",$pag);
if ($dati_ca[$num1]['assegna_da_ini_prenota']) {
$regole .= "; ".mex("assegna_se_",$pag);
if (substr($dati_ca[$num1]['assegna_da_ini_prenota'],0,1) == ">") $regole .= mex("più_di_",$pag);
else $regole .= mex("meno_di_",$pag);
$regole .= substr($dati_ca[$num1]['assegna_da_ini_prenota'],1).mex("_giorni_da_inizio",$pag);
} # fine if ($dati_ca[$num1][var_moltiplica] == "s")
if ($dati_ca[$num1]['assegna_con_num_prenota']) $regole .= "; ".mex("assegna_con_",$pag).$dati_ca[$num1]["assegna_con_num_prenota"].mex("_o_più_prenotazioni",$pag);
if (!empty($dati_ca[$num1]['num_beniinv'])) {
$beni_inv_elimina = "<small><small>";
for ($num2 = 0 ; $num2 < $dati_ca[$num1]['num_beniinv'] ; $num2++) {
$nome_bene = esegui_query("select * from $tablebeniinventario where idbeniinventario = '".$dati_ca[$num1]['id_beneinv'][$num2]."' ");
if (numlin_query($nome_bene)) $nome_bene = risul_query($nome_bene,0,'nome_bene');
else $nome_bene = "?";
$beni_inv_elimina .= $nome_bene." x ".$dati_ca[$num1]['molt_beneinv'][$num2].", ";
} # fine for $num2
$beni_inv_elimina = substr($beni_inv_elimina,0,-2);
if ($dati_ca[$num1]['tipo_beniinv'] == "mag") {
$nome_mag = esegui_query("select * from $tablemagazzini where idmagazzini = '".$dati_ca[$num1]['mag_beniinv']."' ");
if (numlin_query($nome_mag)) $nome_mag = risul_query($nome_mag,0,'nome_magazzino');
else $nome_mag = "?";
$beni_inv_elimina .= " ".mex("dal magazzino",$pag)." $nome_mag";
} # fine if ($dati_ca[$num1]['tipo_beniinv'] == "mag")
if ($dati_ca[$num1]['tipo_beniinv'] == "app") $beni_inv_elimina .= " ".mex("dall'appartamento",'unit.php')."";
if ($dati_ca[$num1]['var_beniinv'] == "s") $beni_inv_elimina .= " (".mex("modifica con prenotazione",$pag).")";
$beni_inv_elimina .= "</small></small>";
} # fine if (!empty($dati_ca[$num1]['num_beniinv']))
else $beni_inv_elimina = "&nbsp;";
if ($dati_ca[$num1]['periodipermessi']) {
if ($dati_ca[$num1]['periodipermessi'] == "t") $periodi_permessi = "<small>".mex("Prenotazione intera in",$pag).":<br>";
if ($dati_ca[$num1]['periodipermessi'] == "u") $periodi_permessi = "<small>".mex("Parte della prentoazione in",$pag).":<br>";
if ($dati_ca[$num1]['periodipermessi'] == "p") $periodi_permessi = "<small>".mex("Solo $parola_settimane della prenotazione in",$pag).":<br>";
$periodi_perm = "";
for ($num2 = 0 ; $num2 < count($dati_ca[$num1]['sett_periodipermessi_ini']) ; $num2++) {
if (!empty($datafine_f_idperiodo[$dati_ca[$num1]['sett_periodipermessi_fine'][$num2]])) {
if ($periodi_perm) $periodi_perm .= mex(" o ",$pag);
if (empty($datainizio_f_idperiodo[$dati_ca[$num1]['sett_periodipermessi_ini'][$num2]])) $data_ini_pp = $datainizio_f_idperiodo['prima'];
else $data_ini_pp = $datainizio_f_idperiodo[$dati_ca[$num1]['sett_periodipermessi_ini'][$num2]];
$periodi_perm .= $data_ini_pp.mex(" a ",$pag).$datafine_f_idperiodo[$dati_ca[$num1]['sett_periodipermessi_fine'][$num2]]."<br>";
} # fine if (!empty($datafine_f_idperiodo[$dati_ca[$num1]['sett_periodipermessi_fine'][$num2]]))
} # fine for $num2
$periodi_permessi .= $periodi_perm;
if ($dati_ca[$num1]['var_periodip'] == "s") $periodi_permessi .= " (".mex("modifica con prenotazione",$pag).")";
$periodi_permessi .= "</small>";
} # fine if ($dati_ca[$num1]['periodipermessi'])
else $periodi_permessi = mex("tutti",$pag);
if ($dati_ca[$num1]['tipo_val'] != "f") {
if (!$dati_ca[$num1]['valore']) $prezzo_p = "";
else {
$prezzo_p = punti_in_num($dati_ca[$num1]['valore'],$stile_soldi)." $Euro ";
if (substr($dati_ca[$num1]['valore_perc'],0,1) != "-") $prezzo_p .= "+";
} # fine else if (!$dati_ca[$num1]['valore'])
$prezzo_p .= $dati_ca[$num1]['valore_perc']."<small>".str_replace("_","&nbsp;",mex("% arrotondato_a_",$pag)).$dati_ca[$num1]['arrotonda']."</small>";
} # fine if ($dati_ca[$num1]['tipo_val'] != "f")
else $prezzo_p = punti_in_num($prezzo,$stile_soldi)." $Euro";
if ($dati_ca[$num1]['tasseperc']) {
$prezzo_p .= "<br><small>(".strtolower(mex("Tasse",$pag));
if ($dati_ca[$num1]['tasseperc'] != -1) $prezzo_p .= "&nbsp;".$dati_ca[$num1]['tasseperc']."%";
$prezzo_p .= ")</small>";
} # fine if ($dati_ca[$num1]['tasseperc'])
echo "<tr><td class=\"t1left\">$nome_ca</td>
<td>$tipo</td>
<td>$prezzo_p</td>
<td style=\"font-size: small;\">".str_replace("_","&nbsp;",$regole)."</td>
<td>$tariffe_abbinate</td>
<td>$incomp</td>";
if ($beni_inv_esist) echo "<td>$beni_inv_elimina</td>";
echo "<td>$periodi_permessi</td>";
if ($priv_mod_costo_agg != "n" or $priv_canc_costi_agg != "n") {
echo "<td>";
if ($attiva_costi_agg_consentiti_ut == "n" or $costi_agg_consentiti_vett_ut[$dati_ca[$num1]['id']] == "SI") {
if ($priv_mod_costo_agg != "n") echo "<a href=\"modifica_costi.php?anno=$anno&amp;id_sessione=$id_sessione&amp;idntariffe=".$dati_ca[$num1]['id']."\">".mex("modifica",$pag)."</a><br>";
if ($priv_canc_costi_agg != "n") echo "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idntariffe=".$dati_ca[$num1]['id']."\">".mex("cancella",$pag)."</a>";
} # fine if ($attiva_costi_agg_consentiti_ut == "n" or...
echo "</td>";
} # fine if ($priv_mod_costo_agg != "n" or $priv_canc_costi_agg != "n")
echo "</tr>";
} # fine if ($priv_vedi_tab_periodi != "p" or $attiva_costi_agg_consentiti == "n" or...
} # fine for $num1
echo "</table></div><br>";


echo "<a name=\"tab_caparre\"><br></a><h3 id=\"h_tax\"><span>".mex("Caparre, commissioni e tasse del",$pag)." $anno.</span></h3>
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">";
echo "<tr><td rowspan=\"2\">".mex("Tariffa",$pag)."</td>
<td class=\"t1top\" colspan=\"2\">&nbsp;".mex("Caparra",$pag)."&nbsp;</td>
<td class=\"t1top\" colspan=\"2\">&nbsp;".mex("Commissioni",$pag)."&nbsp;</td>
<td class=\"t1top\" rowspan=\"2\">&nbsp;".mex("Tasse",$pag)."&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mex("Valore",$pag)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>".str_replace("_","&nbsp;",mex("Arrotondato_a",$pag))."</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mex("Valore",$pag)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>".str_replace("_","&nbsp;",mex("Arrotondato_a",$pag));
if ($priv_mod_tariffe != "n") echo "<br><small>(".str_replace("_","&nbsp;",mex("cancella_periodi",$pag)).")</small>";
echo "</td></tr>";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa = $numtariffa + 1) {
if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
$tariffa = "tariffa".$numtariffa;
$nometariffa = $dati_tariffe[$tariffa]['nome'];
if ($nometariffa == "") $nometariffa_vedi = $numtariffa;
else {
if (num_caratteri_testo($nometariffa) > 10) $nometariffa_vedi = "$numtariffa <small><small>($nometariffa)</small></small>";
else $nometariffa_vedi = "$numtariffa ($nometariffa)";
} # fine else if ($nometariffa == "")

$caparra_percent = $dati_tariffe[$tariffa]['caparra_percent'];
if (!$caparra_percent) $caparra_percent = "&nbsp;";
else $caparra_percent = punti_in_num($caparra_percent,$stile_soldi);
$caparra_arrotond = $dati_tariffe[$tariffa]['caparra_arrotond'];
if ($caparra_arrotond == "val" or $caparra_arrotond == "gio") {
if ($caparra_arrotond == "val") {
$caparra_arrotond = "";
if ($caparra_percent != "&nbsp;") $caparra_percent .= " $Euro";
} # fine if ($caparra_arrotond == "val")
if ($caparra_arrotond == "gio") {
$caparra_arrotond = "";
if ($caparra_percent != "&nbsp;") {
if ($caparra_percent == 1) $caparra_percent .= " ".mex("$parola_settimana",$pag);
else $caparra_percent .= " ".mex("$parola_settimane",$pag);
} # fine if ($caparra_percent != "&nbsp;")
} # fine if ($caparra_arrotond == "gio")
} # fine if ($caparra_arrotond == "val" or $caparra_arrotond == "gio")
elseif ($caparra_percent != "&nbsp;") $caparra_percent .= "% ".mex("della tariffa",$pag)."";
$caparra_arrotond_p = punti_in_num($caparra_arrotond,$stile_soldi);
if (!$caparra_arrotond_p) $caparra_arrotond_p = "&nbsp;";
else $caparra_arrotond_p .= " $Euro";

$commissioni_percent = fixset($dati_tariffe[$tariffa]['commissioni_percent']['def']);
if (!$commissioni_percent) $commissioni_percent = "&nbsp;";
else $commissioni_percent = punti_in_num($commissioni_percent,$stile_soldi);
$commissioni_arrotond = fixset($dati_tariffe[$tariffa]['commissioni_arrotond']['def']);
if ($commissioni_arrotond == "val") {
$commissioni_arrotond = "";
if ($commissioni_percent != "&nbsp;") $commissioni_percent .= " $Euro";
} # fine if ($commissioni_arrotond == "val")
elseif ($commissioni_percent != "&nbsp;") {
if ($dati_tariffe[$tariffa]['commissioni_base']['def'] == "t") $commissioni_percent .= "% ".mex("della tariffa",$pag)."";
if ($dati_tariffe[$tariffa]['commissioni_base']['def'] == "s") $commissioni_percent .= "% ".mex("della tariffa",$pag)." + ".mex("sconto",$pag)."";
if ($dati_tariffe[$tariffa]['commissioni_base']['def'] == "c") $commissioni_percent .= "% ".mex("della tariffa",$pag)." + ".mex("sconto",$pag)." + ".mex("costi agg.",$pag)."";
} # fine elseif ($commissioni_percent != "&nbsp;")
$commissioni_arrotond_p = punti_in_num($commissioni_arrotond,$stile_soldi);
if (!$commissioni_arrotond_p) $commissioni_arrotond_p = "&nbsp;";
else $commissioni_arrotond_p .= " $Euro";
if (@is_array($dati_tariffe[$tariffa]['commissioni_percent'])) {
$commissioni_periodi = "";
$arrotond_periodi = "";
reset($dati_tariffe[$tariffa]['commissioni_percent']);
foreach ($dati_tariffe[$tariffa]['commissioni_percent'] as $per_comm => $val_comm) {
if ($per_comm != "def") {
$ini_comm = explode("-",$per_comm);
$fine_comm = $ini_comm[1];
$ini_comm = $ini_comm[0];
$ini_comm = esegui_query("select * from $tableperiodi where idperiodi = '$ini_comm' ");
$ini_comm = formatta_data(risul_query($ini_comm,0,'datainizio'),$stile_data);
$fine_comm = esegui_query("select * from $tableperiodi where idperiodi = '$fine_comm' ");
$fine_comm = formatta_data(risul_query($fine_comm,0,'datafine'),$stile_data);
$commissioni_periodi .= "<br>".punti_in_num($val_comm,$stile_soldi);
$comm_arr = $dati_tariffe[$tariffa]['commissioni_arrotond'][$per_comm];
if ($priv_mod_tariffe == "n" or ($attiva_tariffe_consentite_ut != "n" and !isset($tariffe_consentite_vett_ut[$numtariffa]))) $link_cancella = "&nbsp;";
else $link_cancella = "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;per_comm_canc=$per_comm&amp;numtariffa=$numtariffa\">".mex("cancella",$pag)."</a>";
if ($comm_arr == "val") {
$commissioni_periodi .= "&nbsp;$Euro";
$arrotond_periodi .= "<br>$link_cancella<br>&nbsp;";
} # fine if ($comm_arr == "val")
else {
if ($dati_tariffe[$tariffa]['commissioni_base'][$per_comm] == "t") $commissioni_periodi .= "% ".mex("della tariffa",$pag)."";
if ($dati_tariffe[$tariffa]['commissioni_base'][$per_comm] == "s") $commissioni_periodi .= "<span class=\"wsnowrap\">% ".mex("della tariffa",$pag)." + ".mex("sconto",$pag)."</span>";
if ($dati_tariffe[$tariffa]['commissioni_base'][$per_comm] == "c") $commissioni_periodi .= "<span class=\"wsnowrap\">% ".mex("della tariffa",$pag)." + ".mex("sconto",$pag)."</span> + ".mex("costi agg.",$pag)."";
$arrotond_periodi .= "<br>".punti_in_num($comm_arr,$stile_soldi)."&nbsp;$Euro&nbsp;$link_cancella<br>&nbsp;";
} # fine else if ($comm_arr == "val")
$commissioni_periodi .= " ".mex("dal",$pag)."&nbsp;$ini_comm<br>".mex("al",$pag)."&nbsp;$fine_comm";
} # fine if ($per_comm != "def")
} # fine foreach ($dati_tariffe[$tariffa]['commissioni_percent'] as $per_comm => $val_comm)
if ($commissioni_periodi) {
$commissioni_percent .= "<small>$commissioni_periodi</small>";
$commissioni_arrotond_p .= "<small>$arrotond_periodi</small>";
} # fine if ($commissioni_periodi)
} # fine if (@is_array($dati_tariffe[$tariffa]['commissioni_percent']))

if ($dati_tariffe[$tariffa]['tasse_percent']) $tasse_percent = punti_in_num($dati_tariffe[$tariffa]['tasse_percent'],$stile_soldi)."%";
else $tasse_percent = "&nbsp;";
echo "<tr><td class=\"t1left\">$nometariffa_vedi</td>
<td>$caparra_percent</td>
<td>$caparra_arrotond_p</td>
<td>$commissioni_percent</td>
<td>$commissioni_arrotond_p</td>
<td>$tasse_percent</td></tr>";
} # fine if ($priv_vedi_tab_periodi != "p" or $attiva_tariffe_consentite == "n" or...
} # fine for $numtariffa
echo "</table></div>";


if ($priv_mod_tariffe != "n" or $priv_ins_costi_agg != "n") {
echo "<br><br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"creaprezzi.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"ipri\" type=\"submit\"><div>".mex("Vai alla pagina di inserzione prezzi",$pag)."</div></button>
</div></form></div><br>";
} # fine if ($priv_mod_tariffe != "n" or $priv_ins_costi_agg != "n")

} # fine if (!isset($mostra_pag_principale) or $mostra_pag_principale != "NO")
} # fine else if ($cancella_anno and $id_utente == 1)
} # fine else if ($aggiungi and $id_utente == 1)
} # fine if ($tipo_tabella == "periodi" and $priv_vedi_tab_periodi != "n")




if ($tipo_tabella == "clienti" and $vedi_clienti != "NO") {

if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$condizione_utente = "and ( utente_inserimento = '$id_utente'";
if ($vedi_clienti == "GRUPPI") {
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_utente .= " or utente_inserimento = '$idut_gr'";
} # fine if ($vedi_clienti == "GRUPPI")
$condizione_utente .= " )";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
else $condizione_utente = "";
$mostra_tab_clienti = 1;


if (isset($cancella_clienti) or isset($cancella_cc_passate)) {
if ($modifica_clienti == "PROPRI" or $modifica_clienti == "GRUPPI") {
$condizione_utente_canc = "where ( utente_inserimento = '$id_utente'";
if ($modifica_clienti == "GRUPPI") {
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_utente_canc .= " or utente_inserimento = '$idut_gr'";
} # fine if ($modifica_clienti == "GRUPPI")
$condizione_utente_canc .= " )";
} # fine if ($modifica_clienti == "PROPRI" or $modifica_clienti == "GRUPPI")
else $condizione_utente_canc = "";
$anni_esist = esegui_query("select * from $tableanni order by idanni");
$num_anni = numlin_query($anni_esist);
unset($anni);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) $anni[$num1] = risul_query($anni_esist,$num1,'idanni');
} # fine if (isset($cancella_clienti) or isset($cancella_cc_passate))


if (isset($cancella_clienti) and $modifica_clienti != "NO") {
$mostra_tab_clienti = 0;
if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "") {
$limite_transazioni_vecchie = date("Y-m-d H:i:s",(time() - (15 * 60) + (C_DIFF_ORE * 3600)));
esegui_query("delete from $tabletransazioni where ultimo_accesso <= '$limite_transazioni_vecchie' and tipo_transazione = 'cn_cc' ");
} # fine if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "")
$cancella_cliente_id = array();
$altre_tab_lock = array($tableanni);
$num_lock = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."prenota".$anni[$num1];
$num_lock++;
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."prenotacanc".$anni[$num1];
$num_lock++;
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."rclientiprenota".$anni[$num1];
$num_lock++;
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."soldi".$anni[$num1];
$num_lock++;
} # fine for $num1
$tabelle_lock = array($tableclienti,$tablerelclienti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
unset($cliente_attivo);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_mostra = $anni[$num1];
$tableprenota_mostra = $PHPR_TAB_PRE."prenota".$anno_mostra;
$prenota = esegui_query("select distinct idclienti from $tableprenota_mostra ");
$num_prenota = numlin_query($prenota);
for ($num2 = 0 ; $num2 < $num_prenota ; $num2++) $cliente_attivo[risul_query($prenota,$num2,'idclienti')] = 1;
$tableprenotacanc_mostra = $PHPR_TAB_PRE."prenotacanc".$anno_mostra;
$prenotacanc = esegui_query("select distinct idclienti from $tableprenotacanc_mostra ");
$num_prenotacanc = numlin_query($prenotacanc);
for ($num2 = 0 ; $num2 < $num_prenotacanc ; $num2++) $cliente_attivo[risul_query($prenotacanc,$num2,'idclienti')] = 1;
$tablerclientiprenota_mostra = $PHPR_TAB_PRE."rclientiprenota".$anno_mostra;
$ospiti = esegui_query("select distinct idclienti from $tablerclientiprenota_mostra ");
$num_ospiti = numlin_query($ospiti);
for ($num2 = 0 ; $num2 < $num_ospiti ; $num2++) $cliente_attivo[risul_query($ospiti,$num2,'idclienti')] = 1;
$tablesoldi_mostra = $PHPR_TAB_PRE."soldi".$anno_mostra;
$soldi = esegui_query("select distinct motivazione from $tablesoldi_mostra ");
$num_soldi = numlin_query($soldi);
for ($num2 = 0 ; $num2 < $num_soldi ; $num2++) {
$motiv = explode(";",risul_query($soldi,$num2,'motivazione'));
$cliente_attivo[$motiv[0]] = 1;
} # fine for $num2
} # fine for $num1
$clienti = esegui_query("select * from $tableclienti $condizione_utente_canc");
$num_clienti = numlin_query($clienti);
$num_canc = 0;
$limite_canc = 0;
for ($num1 = 0; $num1 < $num_clienti; $num1++) {
$idclienti = risul_query($clienti,$num1,'idclienti');
if (empty($cliente_attivo[$idclienti])) $cancella_cliente_id[$idclienti] = 1;
} # fine for $num1
if (empty($continua)) {
unlock_tabelle($tabelle_lock);
echo "
".mex("Si è sicuri di voler <div style=\"display: inline; color: red;\"><b>cancellare",$pag)." ".count($cancella_cliente_id)." ".mex("clienti</b></div> che non sono associati a nessuna prenotazione e nessun pagamento",$pag)."?<br>
<table><tr><td style=\"height: 2px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"cancella_clienti\" value=\"1\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<button class=\"ccli\" type=\"submit\"><div>".mex("SI",$pag)."</div></button>
</div></form></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"gobk\" type=\"submit\"><div>".mex("NO",$pag)."</div></button>
</div></form></td></tr></table><br>";
} # fine if (empty($continua))
else {
$lista_clienti_cancellati = ",";
for ($num1 = 0; $num1 < $num_clienti; $num1++) {
$idclienti = risul_query($clienti,$num1,'idclienti');
if (!empty($cancella_cliente_id[$idclienti])) {
$lista_clienti_cancellati .= "$idclienti,";
$clienti_compagni = substr(risul_query($clienti,$num1,'idclienti_compagni'),1,-1);
if ($clienti_compagni) {
$clienti_compagni = esegui_query("select idclienti_compagni from $tableclienti where idclienti = '$idclienti' ");
$clienti_compagni = substr(risul_query($clienti_compagni,0,"idclienti_compagni"),1,-1);
if ($clienti_compagni) {
$clienti_compagni = explode(",",$clienti_compagni);
for ($num2 = 0 ; $num2 < count($clienti_compagni) ; $num2++) {
$idclienti_compagni = esegui_query("select idclienti_compagni from $tableclienti where idclienti = '".$clienti_compagni[$num2]."' ");
$idclienti_compagni = str_replace(",".$idclienti.",",",",risul_query($idclienti_compagni,0,'idclienti_compagni'));
esegui_query("update $tableclienti set idclienti_compagni = '$idclienti_compagni' where idclienti = '".$clienti_compagni[$num2]."' ");
} # fine for $num2
} # fine if ($clienti_compagni)
} # fine if ($clienti_compagni)
esegui_query("delete from $tableclienti where idclienti = '$idclienti'");
esegui_query("delete from $tablerelclienti where idclienti = '$idclienti'");
} # fine if (!empty($cancella_cliente_id[$idclienti]))
} # fine for $num1
unlock_tabelle($tabelle_lock);
if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "" and $lista_clienti_cancellati != ",") {
$id_transazione = crea_id_sessione("",$tableversioni,8);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,anno,dati_transazione1,dati_transazione2,ultimo_accesso) 
values ('$id_transazione','$id_sessione','cn_cc','$anno','$lista_clienti_cancellati','$id_utente','$ultimo_accesso')");
while ($lista_clienti_cancellati) {
$resto_lista = strstr(substr($lista_clienti_cancellati,6000),",");
if (strlen($resto_lista) == 1) $resto_lista = "";
if ($resto_lista) $lista_clienti_cancellati = str_replace($resto_lista,"",$lista_clienti_cancellati).",";
if (substr(C_URL_MOD_EXT_CARTE_CREDITO,0,17) == "https://localhost") $ext_html = file(C_URL_MOD_EXT_CARTE_CREDITO."modifica_cliente.php?id_sessione=$id_sessione&idclienti=$lista_clienti_cancellati&cancella_cliente=SI",false,stream_context_create(array("ssl" => array("verify_peer" => true,"allow_self_signed" => true))));
else $ext_html = @file(C_URL_MOD_EXT_CARTE_CREDITO."modifica_cliente.php?id_sessione=$id_sessione&idclienti=$lista_clienti_cancellati&cancella_cliente=SI");
$lista_clienti_cancellati = $resto_lista;
} # fine while ($lista_clienti_cancellati)
} # fine if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "" and $lista_clienti_cancellati != ",")
echo mex("Cancellati",$pag)." ".count($cancella_cliente_id)." ".mex("clienti",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine else if (empty($continua))
} # fine if (isset($cancella_clienti) and..


if (isset($cancella_cc_passate) and $modifica_clienti != "NO") {
if (function_exists('openssl_pkey_new')) {
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (numlin_query($cert_cc)) {
$minuti_durata_blocco = 30;
$limite_transazioni_vecchie = date("Y-m-d H:i:s",(time() - ($minuti_durata_blocco * 60) + (C_DIFF_ORE * 3600)));
esegui_query("delete from $tabletransazioni where ultimo_accesso <= '$limite_transazioni_vecchie' and tipo_transazione = 'er_cc' ");
$err_transazioni = esegui_query("select * from $tabletransazioni where tipo_transazione = 'er_cc' and dati_transazione2 = '$id_utente' ");
$err_transazioni2 = esegui_query("select * from $tabletransazioni where tipo_transazione = 'er_cc' ");
if (numlin_query($err_transazioni) >= 7 or numlin_query($err_transazioni2) >= 12) echo "<br>".mex("Login temporaneamente bloccato",'modifica_cliente.php').".<br><br>";
else {

$mostra_tab_clienti = 0;
if (!$origine) $azione = $pag;
else $azione = controlla_pag_origine($origine);
$priv_key_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'priv_key_cc' and idutente = '1'");
unset($cancella_cliente_id);
$anno_corr = $anno_corrente;
if ($anni[0] > $anno_corr) $anno_corr = $anni[0];
if ($anni[($num_anni - 1)] < $anno_corr) $anno_corr = $anni[($num_anni - 1)];
$altre_tab_lock = array($tableanni);
$num_lock = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if ($anni[$num1] >= $anno_corr) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."prenota".$anni[$num1];
$num_lock++;
} # fine if ($anni[$num1] >= $anno_corr)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if ($anni[$num1] >= $anno_corr) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."prenotacanc".$anni[$num1];
$num_lock++;
} # fine if ($anni[$num1] >= $anno_corr)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if ($anni[$num1] >= $anno_corr) {
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."rclientiprenota".$anni[$num1];
$num_lock++;
} # fine if ($anni[$num1] >= $anno_corr)
} # fine for $num1
$altre_tab_lock[$num_lock] = $PHPR_TAB_PRE."periodi".$anno_corr;
$num_lock++;
$altre_tab_lock[$num_lock] = $tableclienti;
$tabelle_lock = array($tableversioni,$tablerelclienti,$tabletransazioni);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$idperiodocorrente = (calcola_id_periodo_corrente($anno_corr,"NO") - 1);
unset($cliente_attivo);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_mostra = $anni[$num1];
if ($anno_mostra >= $anno_corr) {
$tableprenota_mostra = $PHPR_TAB_PRE."prenota".$anno_mostra;
$tablerclientiprenota_mostra = $PHPR_TAB_PRE."rclientiprenota".$anno_mostra;
if ($anno_mostra == $anno_corr) $prenota = esegui_query("select idprenota,idclienti from $tableprenota_mostra where iddatafine > '$idperiodocorrente' or (pagato is NULL and tariffa_tot > 0) or pagato < tariffa_tot ");
else  $prenota = esegui_query("select idprenota,idclienti from $tableprenota_mostra");
$num_prenota = numlin_query($prenota);
for ($num2 = 0 ; $num2 < $num_prenota ; $num2++) {
$cliente_attivo[risul_query($prenota,$num2,'idclienti')] = 1;
$idprenota = risul_query($prenota,$num2,'idprenota');
$ospiti = esegui_query("select idclienti from $tablerclientiprenota_mostra where idprenota = '$idprenota' ");
for ($num3 = 0 ; $num3 < numlin_query($ospiti) ; $num3++) $cliente_attivo[risul_query($ospiti,$num3,'idclienti')] = 1;
} # fine for $num2
$tableprenotacanc_mostra = $PHPR_TAB_PRE."prenotacanc".$anno_mostra;
if ($anno_mostra == $anno_corr) $prenotacanc = esegui_query("select idprenota,idclienti from $tableprenotacanc_mostra where iddatafine > '".($idperiodocorrente - 2)."' ");
else  $prenotacanc = esegui_query("select idprenota,idclienti from $tableprenotacanc_mostra");
$num_prenotacanc = numlin_query($prenotacanc);
for ($num2 = 0 ; $num2 < $num_prenotacanc ; $num2++) {
$cliente_attivo[risul_query($prenotacanc,$num2,'idclienti')] = 1;
$idprenota = risul_query($prenotacanc,$num2,'idprenota');
$ospiti = esegui_query("select idclienti from $tablerclientiprenota_mostra where idprenota = '$idprenota' ");
for ($num3 = 0 ; $num3 < numlin_query($ospiti) ; $num3++) $cliente_attivo[risul_query($ospiti,$num3,'idclienti')] = 1;
} # fine for $num2
} # fine ($anno_mostra >= $anno_corr)
} # fine for $num1
$clienti = esegui_query("select * from $tableclienti $condizione_utente_canc");
$num_clienti = numlin_query($clienti);
$num_canc = 0;
$limite_canc = 0;
for ($num1 = 0; $num1 < $num_clienti; $num1++) {
$idclienti = risul_query($clienti,$num1,'idclienti');
if (!$cliente_attivo[$idclienti]) $cancella_cliente_id[$idclienti] = 1;
} # fine for $num1
$idclienti_cc = array();
$carte_di_credito = esegui_query("select idclienti from $tablerelclienti where tipo = 'cc' ");
$num_cc = numlin_query($carte_di_credito);
for ($num1 = 0; $num1 < $num_cc ; $num1++) $idclienti_cc[$num1] = risul_query($carte_di_credito,$num1,'idclienti');
$num_cc_canc = 0;
if (!$continua) {
for ($num1 = 0; $num1 < $num_cc ; $num1++) {
$idclienti = $idclienti_cc[$num1];
if ($cancella_cliente_id[$idclienti]) $num_cc_canc++;
} # fine for $num1
echo "
".mex("Si è sicuri di voler <div style=\"display: inline; color: red;\"><b>cancellare",$pag)." $num_cc_canc ".mex("carte di credito</b></div> associate a clienti che non hanno nessuna prenotazione nel futuro e nessuna prenotazione non pagata",$pag)."?<br><br>";
if ($num_cc_canc) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"cancella_cc_passate\" value=\"1\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
".ucfirst(mex("password per le carte di credito",$pag)).":
 <input type=\"password\" name=\"pass_cc\" value=\"\">
<button class=\"ccrc\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
</div></form>";
} # fine if ($num_cc_canc)
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form><br><br>";
} # fine if (!$continua)
else {

$cert_cc = risul_query($cert_cc,0,'valpersonalizza');
$priv_key_cc = risul_query($priv_key_cc,0,'valpersonalizza');
$pub_key = openssl_pkey_get_public($cert_cc);
openssl_public_encrypt('prova',$val_crypt,$pub_key);
$val_decrypt = "";
$res_pk = openssl_get_privatekey($priv_key_cc,$pass_cc);
if ($res_pk) openssl_private_decrypt($val_crypt,$val_decrypt,$res_pk);
if ($val_decrypt == 'prova') {
for ($num1 = 0; $num1 < $num_cc ; $num1++) {
$idclienti = $idclienti_cc[$num1];
if ($cancella_cliente_id[$idclienti]) {
esegui_query("delete from $tablerelclienti where idclienti = '$idclienti' and tipo = 'cc' ");
$num_cc_canc++;
} # fine if ($cancella_cliente_id[$idclienti])
} # fine for $num1
echo mex("Cancellate",$pag)." $num_cc_canc ".mex("carte di credito",$pag).".<br>";
} # fine if ($val_decrypt == 'prova')
else {
echo "".ucfirst(mex("password errata",$pag)).".<br>";
$id_transazione = crea_id_sessione("",$tableversioni,8);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,anno,dati_transazione2,ultimo_accesso) 
values ('$id_transazione','$id_sessione','er_cc','$anno','$id_utente','$ultimo_accesso')");
} # fine else if ($val_decrypt == 'prova')
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$azione\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
</div></form>";
} # fine else if (!$continua)
unlock_tabelle($tabelle_lock);

} # fine else if (numlin_query($err_transazioni) >= 7 or numlin_query($err_transazioni2) >= 12)
} # fine if (numlin_query($cert_cc))
} # fine if (function_exists('openssl_pkey_new'))
} # fine if (isset($cancella_cc_passate) and $modifica_clienti != "NO")



if ($mostra_tab_clienti) {

if (@get_magic_quotes_gpc()) $cognome_cerca = stripslashes($cognome_cerca);
$cognome_cerca = htmlspecialchars(fixstr($cognome_cerca));
if ($cognome_cerca) {
if (str_replace("@","",$cognome_cerca) == $cognome_cerca) $chiamati = " ".mex("chiamati",$pag)." $cognome_cerca";
else $chiamati = " ".mex("con email",$pag)." $cognome_cerca";
} # fine if ($cognome_cerca)
else $chiamati = "";
echo "<table class=\"buttonbar\"><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
".mex("Cerca i clienti con cognome o email",$pag)."
<input type=\"text\" name=\"cognome_cerca\" size=\"15\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("vai","inizio.php")."\">
</div></form></td><td style=\"width: 50px;\"></td>";
if ($modifica_clienti != "NO") {
$pass_cc = 0;
$orig_hd = "";
$target_cc = "";
if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "") {
$action_cc = C_URL_MOD_EXT_CARTE_CREDITO."visualizza_tabelle.php";
if (defined('C_OPZIONI_NASCONDI_MARCA') and substr(C_OPZIONI_NASCONDI_MARCA,0,1) == "s") $target_cc = " target=\"_blank\"";
if (substr(C_URL_MOD_EXT_CARTE_CREDITO,0,17) == "https://localhost") $ext_html = file(C_URL_MOD_EXT_CARTE_CREDITO."personalizza.php?id_sessione=$id_sessione&stato_cc=1",false,stream_context_create(array("ssl" => array("verify_peer" => true,"allow_self_signed" => true))));
else $ext_html = @file(C_URL_MOD_EXT_CARTE_CREDITO."personalizza.php?id_sessione=$id_sessione&stato_cc=1");
if ($ext_html and strstr(implode("",$ext_html),"pass_cc_attiva")) {
$pass_cc = 1;
if (@$_SERVER['SERVER_NAME'] and $_SERVER['PHP_SELF']) {
if ($_SERVER['SERVER_PORT'] == "443" or ($_SERVER['HTTPS'] and $_SERVER['HTTPS'] != "off")) $orig_hd = "https://";
else $orig_hd = "http://";
$orig_hd = "<input type=\"hidden\" name=\"orig_hd\" value=\"".$orig_hd.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."\">";
} # fine if (@$_SERVER['SERVER_NAME'] and $_SERVER['PHP_SELF'])
} # fine if ($ext_html and strstr(implode("",$ext_html),"pass_cc_attiva"))
} # fine if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "")
else {
$action_cc = "visualizza_tabelle.php";
if (function_exists('openssl_pkey_new')) {
$cert_cc = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'cert_cc' and idutente = '1'");
if (numlin_query($cert_cc)) $pass_cc = 1;
} # fine if (function_exists('openssl_pkey_new'))
} # fine else if (defined('C_URL_MOD_EXT_CARTE_CREDITO') and C_URL_MOD_EXT_CARTE_CREDITO != "")
if ($pass_cc) {
echo "<td align=\"right\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"$action_cc\"$target_cc><div style=\"padding:0 12px 0 0;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
$orig_hd
<input type=\"hidden\" name=\"cancella_cc_passate\" value=\"1\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cancella le carte di credito di prenotazioni passate",$pag)."\">
</div></form></td>";
} # fine if (numlin_query($cert_cc))
echo "<td align=\"right\" style=\"width: 50px;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"cancella_clienti\" value=\"1\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Cancella i clienti senza prenotazioni",$pag)."\">
</div></form></td>";
} # fine if ($modifica_clienti != "NO")
echo "</tr></table>
<h3 id=\"h_clie\"><span>".mex("Tabella con tutti i clienti",$pag)."$chiamati.</span></h3><br>";

if ($cognome_cerca) {
$cognome_cerca = aggslashdb(trim($cognome_cerca));
$campi_cerca_clienti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_cerca_clienti' and idutente = '$id_utente'");
if (!numlin_query($campi_cerca_clienti)) {
if (strstr($cognome_cerca,"@")) $clienti = esegui_query("select * from $tableclienti where (email $ILIKE '%$cognome_cerca%' or email2 $ILIKE '%$cognome_cerca%' or email3 $ILIKE '%$cognome_cerca%') $condizione_utente order by cognome ");
else $clienti = esegui_query("select * from $tableclienti where cognome $ILIKE '%$cognome_cerca%' $condizione_utente order by cognome ");
} # fine if (!numlin_query($campi_cerca_clienti))
else {
$query_cerca_clienti = "select * from $tableclienti where (cognome $ILIKE '%$cognome_cerca%' or email $ILIKE '%$cognome_cerca%' or email2 $ILIKE '%$cognome_cerca%' or email3 $ILIKE '%$cognome_cerca%'";
$campi_cerca_clienti = risul_query($campi_cerca_clienti,0,'valpersonalizza');
$campi_cerca_clienti = explode(",",$campi_cerca_clienti);
for ($num1 = 0 ; $num1 < count($campi_cerca_clienti) ; $num1++) {
if ($campi_cerca_clienti[$num1] == "nome") $query_cerca_clienti .= " or nome $ILIKE '%$cognome_cerca%'";
if ($campi_cerca_clienti[$num1] == "telefono") $query_cerca_clienti .= " or telefono $ILIKE '%$cognome_cerca%' or telefono2 $ILIKE '%$cognome_cerca%' or telefono3 $ILIKE '%$cognome_cerca%' or fax $ILIKE '%$cognome_cerca%'";
if ($campi_cerca_clienti[$num1] == "citta") $query_cerca_clienti .= " or citta $ILIKE '%$cognome_cerca%' or cittanascita $ILIKE '%$cognome_cerca%' or cittadoc $ILIKE '%$cognome_cerca%'";
if ($campi_cerca_clienti[$num1] == "indirizzo") $query_cerca_clienti .= " or via $ILIKE '%$cognome_cerca%'";
if ($campi_cerca_clienti[$num1] == "codpostale") $query_cerca_clienti .= " or cap $ILIKE '%$cognome_cerca%'";
if ($campi_cerca_clienti[$num1] == "piva") $query_cerca_clienti .= " or partita_iva $ILIKE '%$cognome_cerca%'";
} # fine for $num1
$query_cerca_clienti .= ") $condizione_utente order by cognome ";
$clienti = esegui_query($query_cerca_clienti);
} # fine else if (!numlin_query($campi_cerca_clienti))
if ($priv_mod_prenota_iniziate != "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);
} # fine if ($cognome_cerca)
else $clienti = esegui_query("select * from $tableclienti where max_num_ordine = 1 $condizione_utente order by cognome");
$num_clienti = numlin_query($clienti);

$num_clienti_mostra = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_tutti_clienti' and idutente = '$id_utente'");
$num_clienti_mostra = risul_query($num_clienti_mostra,0,'valpersonalizza_num');
$num_pagine = ceil($num_clienti/$num_clienti_mostra);
$pagina_clienti = (int) fixset($pagina_clienti) + 1;
$cliente_inizio = 0 + ($pagina_clienti -1)*$num_clienti_mostra;
$cliente_fine = $num_clienti_mostra + ($pagina_clienti -1)*$num_clienti_mostra;
if ($cliente_fine > $num_clienti) { $cliente_fine = $num_clienti; }
if ($num_clienti > $num_clienti_mostra) {
echo "<div style=\"text-align: center;\">";
if ($pagina_clienti > 1) { 
echo "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;pagina_clienti=".($pagina_clienti-2)."&amp;cognome_cerca=$cognome_cerca\"><small>&lt;- ".mex("pag. prec.",$pag)."</small></a>";
} # fine if ($pagina_clienti > 1)
echo "&nbsp;(".mex("pagina",$pag)." $pagina_clienti ".mex("di",$pag)." $num_pagine)&nbsp;";
if ($pagina_clienti < $num_pagine) { 
echo "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;pagina_clienti=$pagina_clienti&amp;cognome_cerca=$cognome_cerca\"><small>".mex("pag. succ.",$pag)." -&gt;</small></a>";
} # fine if 
echo "</div>";
} # fine if ($num_clienti > $num_clienti_mostra)

echo "<div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td class=\"edit\"><span>N°</span></td>
<td>".mex("Cognome",$pag)."</td>
<td class=\"t1top\">".mex("Nome",$pag)."</td>
<td class=\"t1top\">".mex("Nazione",$pag)."</td>
<td class=\"t1top\">".mex("Città",$pag)."</td>";
if ($priv_vedi_telefoni == "s") {
echo "<td class=\"t1top\">".mex("Telefono",$pag)."</td>
<td class=\"t1top\">".mex("Email",$pag)."</td>";
} # fine if ($priv_vedi_indirizzo == "s")
if ($priv_vedi_indirizzo == "s") {
echo "<td class=\"t1top\">".mex("CAP",$pag)."</td>
<td class=\"t1top\">".mex("Indirizzo",$pag)."</td>";
} # fine if ($priv_vedi_indirizzo == "s")
/*echo "<td>".mex("Fax",$pag)."</td>
<td class=\"smallfont\">".mex("Data_di_nascita",$pag)."</td>
<td>".mex("2°telefono",$pag)."</td>";*/
echo "<td class=\"t1top\">".mex("Commento",$pag)."</td>";
if ($cognome_cerca) echo "<td class=\"t1top xsmallfont\">".mex("Prenotazioni anno corrente",$pag)."</td>";
echo "</tr>";

$lista_clienti_contr = "";
for ($num1 = 0 ; $num1 < $num_clienti ; $num1++) {
$idclienti = risul_query($clienti,$num1,'idclienti');
$lista_clienti_contr .= ",".$idclienti;
if ($num1 >= $cliente_inizio and $num1 < $cliente_fine) {
$cognome = risul_query($clienti,$num1,'cognome');
$nome = risul_query($clienti,$num1,'nome');
if (!$nome) $nome = "&nbsp;";
$telefono = risul_query($clienti,$num1,'telefono');
if (!$telefono) $telefono_vedi = "";
else $telefono_vedi = $telefono;
$telefono2 = risul_query($clienti,$num1,'telefono2');
if ($telefono2) {
if ($telefono_vedi) $telefono_vedi .= "&nbsp;;<br>";
$telefono_vedi .= $telefono2;
} # fine if ($telefono2)
$telefono3 = risul_query($clienti,$num1,'telefono3');
if ($telefono3) {
if ($telefono_vedi) $telefono_vedi .= "&nbsp;;<br>";
$telefono_vedi .= $telefono3;
} # fine if ($telefono3)
if (!$telefono_vedi) $telefono_vedi = "&nbsp;";
$via = risul_query($clienti,$num1,'via');
$numcivico = risul_query($clienti,$num1,'numcivico');
$indirizzo = $via ." ". $numcivico;
if ($indirizzo == " ") $indirizzo = "&nbsp;";
$citta = risul_query($clienti,$num1,'citta');
if (!$citta) $citta = "&nbsp;";
$nazione = risul_query($clienti,$num1,'nazione');
if (!$nazione) $nazione = "&nbsp;";
$cap = risul_query($clienti,$num1,'cap');
if (!$cap) $cap = "&nbsp;";
$fax = risul_query($clienti,$num1,'fax');
if (!$fax) $fax = "&nbsp;";
$email = risul_query($clienti,$num1,'email');
$email2 = risul_query($clienti,$num1,'email2');
if ($email) $email_vedi = "<a style=\"color: #222222;\" href=\"mailto:$email\">".str_replace(",",", ",$email)."</a>";
else $email_vedi = "";
if ($email2) {
if ($email_vedi) $email_vedi .= "<br>";
$email_vedi .= "<a style=\"color: #222222;\" href=\"mailto:$email2\">".str_replace(",",", ",$email2)."</a>";
} # fine if ($email2)
if (num_caratteri_testo($email) > 22 or num_caratteri_testo($email2) > 22) $email_vedi = "<small><small>$email_vedi</small></small>";
elseif (!$email_vedi) $email_vedi = "&nbsp;";
$datanascita = risul_query($clienti,$num1,'datanascita');
if (!$datanascita) $datanascita_f = "&nbsp;";
else $datanascita_f = formatta_data($datanascita,$stile_data);
$commento = risul_query($clienti,$num1,'commento');
if (!$commento) $commento = "&nbsp;";

if ($cognome_cerca) {
$prenota_anno_corr = "";
$tutte_prenota_mod = "";
$prenotazioni = esegui_query("select distinct $tableprenota.idprenota,$tableprenota.idclienti,$tableprenota.utente_inserimento,$tableprenota.idappartamenti,$tableprenota.commento,$tableprenota.iddatainizio,$tableprenota.iddatafine,$tableprenota.num_persone,$tableprenota.caparra,$tableprenota.pagato,$tableprenota.tariffa_tot,$tableprenota.datainserimento from $tableprenota left outer join $tablerclientiprenota on $tableprenota.idprenota = $tablerclientiprenota.idprenota where $tableprenota.idclienti = '$idclienti' or $tablerclientiprenota.idclienti = '$idclienti' order by $tableprenota.idprenota ");
$num_prenotazioni = numlin_query($prenotazioni);
$prenotazioni_canc = esegui_query("select distinct $tableprenotacanc.idprenota,$tableprenotacanc.idclienti,$tableprenotacanc.utente_inserimento,$tableprenotacanc.idappartamenti,$tableprenotacanc.commento,$tableprenotacanc.iddatainizio,$tableprenotacanc.iddatafine,$tableprenotacanc.num_persone,$tableprenotacanc.caparra,$tableprenotacanc.pagato,$tableprenotacanc.tariffa_tot,$tableprenotacanc.datainserimento from $tableprenotacanc left outer join $tablerclientiprenota on $tableprenotacanc.idprenota = $tablerclientiprenota.idprenota where $tableprenotacanc.idclienti = '$idclienti' or $tablerclientiprenota.idclienti = '$idclienti' order by $tableprenotacanc.idprenota ");
$num_prenotazioni_canc = numlin_query($prenotazioni_canc);
if ($num_prenotazioni or $num_prenotazioni_canc) {
$pcanc = "";
$stilebarrato = "";
$tableprenota_orig = $tableprenota;
for ($num2 = 0 ; $num2 < ($num_prenotazioni + $num_prenotazioni_canc) ; $num2++) {
if ($num2 == $num_prenotazioni) {
chiudi_query($prenotazioni);
$tableprenota = $tableprenotacanc;
$prenotazioni = $prenotazioni_canc;
$pcanc = "&amp;pcanc=1";
$stilebarrato = " style=\"text-decoration: line-through\"";
} # fine if ($num2 == $num_prenotazioni)
$utente_inserimento_prenota = risul_query($prenotazioni,$num2,'utente_inserimento',$tableprenota);
if ($priv_vedi_tab_prenotazioni == "s" or ($priv_vedi_tab_prenotazioni == "p" and $utente_inserimento_prenota == $id_utente) or ($priv_vedi_tab_prenotazioni == "g" and $utenti_gruppi[$utente_inserimento_prenota])) {
$numero = risul_query($prenotazioni,$num2,'idprenota',$tableprenota);
$id_data_inizio = risul_query($prenotazioni,$num2,'iddatainizio',$tableprenota);
$link_modifica = "SI";
if ($priv_mod_prenotazioni == "n") $link_modifica = "NO";
if ($priv_mod_prenotazioni == "p" and $utente_inserimento_prenota != $id_utente) $link_modifica = "NO";
if ($priv_mod_prenotazioni == "g" and !$utenti_gruppi[$utente_inserimento_prenota]) $link_modifica = "NO";
if ($priv_mod_prenota_iniziate != "s" and $id_periodo_corrente >= $id_data_inizio) $link_modifica = "NO";
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenotazioni,$num2,'datainserimento',$tableprenota);
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $link_modifica = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
if ($prenota_anno_corr) $prenota_anno_corr .= " ";
if ($link_modifica != "SI") {
if (!$pcanc) $prenota_anno_corr .= $numero;
else $prenota_anno_corr .= "<span$stilebarrato>$numero</span>";
} # fine if ($link_modifica != "SI")
else {
$prenota_anno_corr .= "<a$stilebarrato href=\"modifica_prenota.php?id_prenota=$numero$pcanc&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=clienti\">$numero</a>";
if (!$pcanc) $tutte_prenota_mod .= ",$numero";
} # fine else if ($link_modifica != "SI")
} # fine if ($priv_vedi_tab_prenotazioni == "s" or ($priv_vedi_tab_prenotazioni == "p" and...
} # fine for $num2
$tableprenota = $tableprenota_orig;
$tutte_prenota_mod = substr($tutte_prenota_mod,1);
if (str_replace(",","",$tutte_prenota_mod) != $tutte_prenota_mod) $prenota_anno_corr .= " <a href=\"modifica_prenota.php?id_prenota=$tutte_prenota_mod&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=clienti\">".mex("tutte",$pag)."</a>";
} # fine if ($num_prenotazioni or $num_prenotazioni_canc)
if (!strcmp((string) $prenota_anno_corr,"")) $prenota_anno_corr = "&nbsp;";
} # fine if ($cognome_cerca)

$mostra_link = "SI";
if ($modifica_clienti == "NO") $mostra_link = "NO";
if (($modifica_clienti == "PROPRI" and $vedi_clienti != "PROPRI") or ($modifica_clienti == "GRUPPI" and $vedi_clienti != "GRUPPI")) {
$utente_inserimento = risul_query($clienti,$num1,'utente_inserimento');
if ($modifica_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_link = "NO";
if ($modifica_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_link = "NO";
} # fine if (($modifica_clienti == "PROPRI" and $vedi_clienti != "PROPRI") or...

echo "<tr><td>";
if ($mostra_link == "SI") echo "<a href=\"modifica_cliente.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idclienti=$idclienti\">";
echo $idclienti;
if ($mostra_link == "SI") echo "</a>";
echo "</td>
<td class=\"t1left\">$cognome</td>
<td>$nome</td>
<td>$nazione</td>
<td>$citta</td>";
if ($priv_vedi_telefoni == "s") {
echo "<td>$telefono_vedi</td>
<td>$email_vedi</td>";
} # fine if ($priv_vedi_telefoni == "s")
if ($priv_vedi_indirizzo == "s") {
echo "<td>$cap</td>
<td>$indirizzo</td>";
} # fine if ($priv_vedi_indirizzo == "s")
/*echo "<td>$fax</td>
<td>$datanascita_f</td>
<td>$telefono2</td>";*/
echo "<td style=\"font-size: x-small;\">$commento</td>";
if ($cognome_cerca) echo "<td>$prenota_anno_corr</td>";
echo "</tr>";
} # fine if ($num1 >= $cliente_inizio and $num1 < $cliente_fine)
} # fine for $num1

echo "</table></div>";

if ($num_clienti > $num_clienti_mostra) {
echo "<div style=\"text-align: center;\">";
if ($pagina_clienti > 1) { 
echo "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;pagina_clienti=".($pagina_clienti-2)."&amp;cognome_cerca=$cognome_cerca\"><small>&lt;- ".mex("pag. prec.",$pag)."</small></a>";
} # fine if ($pagina_clienti > 1)
echo "&nbsp;(".mex("pagina",$pag)." $pagina_clienti ".mex("di",$pag)." $num_pagine)&nbsp;";
if ($pagina_clienti < $num_pagine) { 
echo "<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;pagina_clienti=$pagina_clienti&amp;cognome_cerca=$cognome_cerca\"><small>".mex("pag. succ.",$pag)." -&gt;</small></a>";
} # fine if 
echo "</div>";
} # fine if ($num_clienti > $num_clienti_mostra)

if ($lista_clienti_contr) {
$lista_clienti_contr .= ",";
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$id_utente'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
$option_num_contr = "";
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or (isset($contratti_consentiti_vett[$num_contratto]) and $contratti_consentiti_vett[$num_contratto] == "SI")) {
if (!empty($nome_contratto[$num_contratto])) $num_contratto_vedi = $nome_contratto[$num_contratto];
else $num_contratto_vedi = $num_contratto;
$option_num_contr .= "<option value=\"$num_contratto\">$num_contratto_vedi</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO")) {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"visualizza_tabelle.php?tipo_tabella=clienti&amp;pagina_clienti=".($pagina_clienti - 1)."&amp;cognome_cerca=$cognome_cerca\">
<input id=\"lst_clienti_contr\" type=\"hidden\" name=\"lista_clienti\" value=\"$lista_clienti_contr\">";
echo "".ucfirst(mex("documento di tipo",$pag))."
 <select name=\"numero_contratto\">$option_num_contr</select>
 <button class=\"vdoc\" type=\"submit\"><div>".ucfirst(mex("visualizza",$pag))."</div></button>
</div></form></div>";
} # fine if ($option_num_contr and (!isset($show_bar) or $show_bar != "NO"))
} # fine if ($lista_clienti_contr) 

} # fine if ($mostra_tab_clienti)

} # fine if ($tipo_tabella == "clienti" and $vedi_clienti != "NO")





if ($tipo_tabella == "regole" and $priv_vedi_tab_regole != "n") {

$appartamenti = esegui_query("select * from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
include("./includes/funzioni_appartamenti.php");
#if ($priv_app_gruppi != "SI") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
#else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
$appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,fixset($regole1_consentite),$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
$tutti_app_consentiti = 1;
if ($id_utente != 1) {
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
if ($appartamenti_consentiti[risul_query($appartamenti,$num1,'idappartamenti')] != "SI") {
$tutti_app_consentiti = 0;
break;
} # fine if ($appartamenti_consentiti[risul_query($appartamenti,$num1,'idappartamenti')] != "SI") 
} # fine for $num1
} # fine if ($id_utente != 1)

if (!empty($idregole) and empty($torna_alla_tab) and ($priv_mod_reg1 != "n" or $priv_mod_reg2 == "s")) {
$aggiorna_ic_tar = 0;
$aggiorna_ic_disp = 0;
$tabelle_lock = array($tableregole);
$altre_tab_lock = array($tablenometariffe);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$idregole = aggslashdb($idregole);
$continua = 1;
$regola = esegui_query("select * from $tableregole where idregole = '$idregole'");
if (!numlin_query($regola)) $continua = 0;
else {
$app_agenzia = risul_query($regola,0,'app_agenzia');
$tariffa_chiusa = risul_query($regola,0,'tariffa_chiusa');
$tariffa_per_app = risul_query($regola,0,'tariffa_per_app');
$tariffa_per_persone = risul_query($regola,0,'tariffa_per_persone');
$mot2 = risul_query($regola,0,'motivazione2');
if ($id_utente != 1 and !strcmp((string) $app_agenzia,"") and !strcmp((string) $tariffa_chiusa,"") and !strcmp((string) $tariffa_per_app,"") and !strcmp((string) $tariffa_per_persone,"")) $continua = 0;
if (strcmp((string) $app_agenzia,"") and $priv_mod_reg1 != "s" and $priv_mod_reg1 != "a") $continua = 0;
if (strcmp((string) $tariffa_chiusa,"") and $priv_mod_reg1 != "s" and $priv_mod_reg1 != "t") $continua = 0;
if ((strcmp((string) $tariffa_per_app,"") or strcmp((string) $tariffa_per_persone,"")) and $priv_mod_reg2 != "s") $continua = 0;
if (strcmp((string) $tariffa_chiusa,"") and ($attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa_chiusa,7)]))) $continua = 0;
if (strcmp((string) $app_agenzia,"")) {
if ($appartamenti_consentiti[$app_agenzia] != "SI") $continua = 0;
if ($mot2 != "x" and $attiva_regole1_consentite != "n") $continua = 0;
} # fine if (strcmp((string) $app_agenzia,""))
if (strcmp((string) $tariffa_per_app,"") and $attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa_per_app,7)])) $continua = 0;
if (strcmp((string) $tariffa_per_persone,"") and $attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa_per_persone,7)])) $continua = 0;
} # fine else if (!numlin_query($regola))
if ($continua) {
if (empty($cancella)) {
if (strcmp((string) $app_agenzia,"")) {
echo mex("Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 dell'appartamento",'unit.php')." $app_agenzia?<br>";
} # fine if (strcmp((string) $app_agenzia,""))
if (strcmp((string) $tariffa_chiusa,"")) {
echo mex("Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 1 per la",$pag)." ".mex("tariffa","prenota.php").substr($tariffa_chiusa,7)."?<br>";
} # fine if (strcmp((string) $tariffa_chiusa,""))
if (strcmp((string) $tariffa_per_app,"")) {
echo mex("Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 2 per la",$pag)." ".mex("tariffa","prenota.php").substr($tariffa_per_app,7)."?<br>";
} # fine if (strcmp((string) $tariffa_per_app,"")
if (strcmp((string) $tariffa_per_persone,"")) {
echo mex("Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 3 per la",$pag)." ".mex("tariffa","prenota.php").substr($tariffa_per_persone,7)."?<br>";
} # fine if (strcmp((string) $tariffa_per_persone,""))
$tariffa_per_utente = risul_query($regola,0,'tariffa_per_utente');
if (strcmp((string) $tariffa_per_utente,"")) {
echo mex("Sei sicuro di voler <b>cancellare</b> la regola di assegnazione 4 per la",$pag)." ".mex("tariffa","prenota.php").substr($tariffa_per_utente,7)."?<br>";
} # fine if (strcmp((string) $tariffa_per_utente,""))
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idregole\" value=\"$idregole\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"crul\" type=\"submit\" name=\"cancella\" value=\"1\"><div>".mex("SI",$pag)."</div></button>
<button class=\"gobk\" type=\"submit\" name=\"torna_alla_tab\" value=\"1\"><div>".mex("NO",$pag)."</div></button>
</div></form>";
} # fine if (empty($cancella))

else {
if ($app_agenzia and $mot2 == "x") $aggiorna_ic_disp = 1;
if ($tariffa_chiusa) $aggiorna_ic_tar = 1;
if ($tariffa_per_app) $aggiorna_ic_disp = 1;
esegui_query("delete from $tableregole where idregole = '$idregole'");
echo mex("La regola di assegnazione è stata cancellata",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine else if (empty($cancella))
} # fine if ($continua)
else {
echo mex("La regola di assegnazione è già stata cancellata",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<button class=\"cont\" type=\"submit\"><div>OK</div></button>
</div></form>";
} # fine else if ($continua)
unlock_tabelle($tabelle_lock);

if ($aggiorna_ic_disp or $aggiorna_ic_tar) {
$lock = 1;
$aggiorna_disp = $aggiorna_ic_disp;
$aggiorna_tar = $aggiorna_ic_tar;
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");
} # fine if ($aggiorna_ic_disp or $aggiorna_ic_tar)

} # fine if (!empty($idregole) and empty($torna_alla_tab) and ($priv_mod_reg1 != "n" or $priv_mod_reg2 == "s"))

else {


echo "<h3 id=\"h_rul\"><span id=\"hreg1\">".mex("Tabella con le regole di assegnazione",$pag)." 1 (".mex("chiusure",'crearegole.php').") ".mex("del",$pag)." $anno.</span></h3>
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td><small>".mex("Appartamento",'unit.php')." / ".ucfirst(mex("tariffa",$pag))."</small></td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Inizio_$parola_settimana",$pag))."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Fine_$parola_settimana",$pag))."</td>
<td class=\"t1top\">".mex("Motivazione",$pag)."</td>";
if ($priv_mod_reg1 != "n") echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td>";
echo "</tr>";

$rigatariffe = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
$nometariffa_vedi = array();
$mex_tariffa = mex("tariffa","prenota.php");
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
$nometariffa_vedi[$tariffa] = $mex_tariffa.$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if (strcmp((string) $nometariffa,"")) $nometariffa_vedi[$tariffa] .= " ($nometariffa)";
} # fine for $numtariffa

$regole = esegui_query("select * from $tableregole where app_agenzia != '' or tariffa_chiusa != '' order by tariffa_chiusa,app_agenzia,iddatainizio");
$num_regole = numlin_query($regole);
$prima_tariffa_chiusa = 0;
$tariffe_chiuse = array();
for ($num1 = 0 ; $num1 < $num_regole ; $num1++) {
$tariffa_chiusa = risul_query($regole,$num1,'tariffa_chiusa');
if ($tariffa_chiusa) {
if (!$prima_tariffa_chiusa) $prima_tariffa_chiusa = ($num1 + 1);
$tariffa_chiusa = (int) substr($tariffa_chiusa,7);
if (!isset($tariffe_chiuse[$tariffa_chiusa])) $tariffe_chiuse[$tariffa_chiusa] = "$num1";
else $tariffe_chiuse[$tariffa_chiusa] .= ",$num1";
} # fine if ($tariffa_chiusa)
} # fine for ($num1
$ord_tc = array();
if ($prima_tariffa_chiusa) {
ksort($tariffe_chiuse);
reset($tariffe_chiuse);
$num_tc = ($prima_tariffa_chiusa - 1);
foreach ($tariffe_chiuse as $tar => $ntc) {
$ntc = explode(",",$ntc);
for ($num1 = 0 ; $num1 < count($ntc) ; $num1++) {
$ord_tc[$num_tc] = $ntc[$num1];
$num_tc++;
} # fine for $num1
} # fine foreach ($tariffe_chiuse as $tar => $ntc)
} # fine if ($prima_tariffa_chiusa)

for ($num1 = 0 ; $num1 < $num_regole ; $num1 = $num1 + 1) {
if (isset($ord_tc[$num1])) $num_tc = $ord_tc[$num1];
else $num_tc = $num1;
$app_agenzia = risul_query($regole,$num_tc,'app_agenzia');
$tariffa_chiusa = risul_query($regole,$num_tc,'tariffa_chiusa');
$motivazione = risul_query($regole,$num_tc,'motivazione');
$chiuso = risul_query($regole,$num_tc,'motivazione2');
$mostra_regola = "SI";
if ($priv_vedi_tab_regole == "p") {
if (strcmp((string) $app_agenzia,"")) {
if ($applica_regole1 != "s") $mostra_regola = "NO";
if (!$motivazione) $motivazione2 = " ";
else $motivazione2 = $motivazione;
$motivazione_selezionata = "NO";
if (@is_array($regole1_consentite)) $num_regole1_consentite = count($regole1_consentite);
else $num_regole1_consentite = 0;
for ($num2 = 0 ; $num2 < $num_regole1_consentite ; $num2++) if ($regole1_consentite[$num2] == $motivazione2) $motivazione_selezionata = "SI";
if ($applica_regole1 == "n" and $motivazione_selezionata == "NO") $mostra_regola = "SI";
if ($attiva_regole1_consentite == "s" and $motivazione_selezionata == "SI") $mostra_regola = "SI";
} # fine if (strcmp((string) $app_agenzia,""))
if (strcmp((string) $tariffa_chiusa,"") and ($attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa_chiusa,7)]))) $mostra_regola = "NO";
} # fine if ($priv_vedi_tab_regole == "p")
if ($mostra_regola == "SI") {
$idregole = risul_query($regole,$num_tc,'idregole');
if (strcmp((string) $app_agenzia,"")) {
$nome_reg = $app_agenzia;
if ($chiuso == "x") $nome_reg .= "<br><small><em>".mex("chiuso",'unit.php')."</em></small>";
else $nome_reg .= "<br><small><em class=\"colblu\">".mex("chiedere",$pag)."</em></small>";
} # fine if (strcmp((string) $app_agenzia,""))
else $nome_reg = $nometariffa_vedi[$tariffa_chiusa]."<br><small><em>".mex("chiusa",$pag)."</em></small>";
$id_data_inizio = risul_query($regole,$num_tc,'iddatainizio');
$data_inizio = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_inizio' ");
$data_inizio = risul_query($data_inizio,0,'datainizio');
$data_inizio_f = formatta_data($data_inizio,$stile_data);
$id_data_fine = risul_query($regole,$num_tc,'iddatafine');
$data_fine = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_fine' ");
$data_fine = risul_query($data_fine,0,'datafine');
$data_fine_f = formatta_data($data_fine,$stile_data);
if (!$motivazione) $motivazione = "&nbsp;";
$link_cancella = 1;
if (strcmp((string) $tariffa_chiusa,"")) {
if ($attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa_chiusa,7)])) $link_cancella = 0;
if ($priv_mod_reg1 != "s" and $priv_mod_reg1 != "t") $link_cancella = 0;
} # fine if (strcmp((string) $tariffa_chiusa,""))
if (strcmp((string) $app_agenzia,"")) {
if ($appartamenti_consentiti[$app_agenzia] != "SI") $link_cancella = 0;
if ($chiuso != "x" and $attiva_regole1_consentite != "n") $link_cancella = 0;
if ($priv_mod_reg1 != "s" and $priv_mod_reg1 != "a") $link_cancella = 0;
} # fine if (strcmp((string) $app_agenzia,""))
if ($link_cancella) $link_cancella = "<a href=\"crearegole.php?mod_idregola1=$idregole&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=tab_reg1\">".mex("modifica",$pag)."</a><br>
<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idregole=$idregole\">".mex("cancella",$pag)."</a>";
else $link_cancella = "&nbsp;";
echo "<tr><td class=\"t1left\">$nome_reg</td>
<td>$data_inizio_f</td>
<td>$data_fine_f</td>
<td>$motivazione</td>";
if ($priv_mod_reg1 != "n") echo "<td>$link_cancella</td>";
echo "</tr>";
} # fine if ($mostra_regola == "SI")
} # fine for $num1
echo "</table></div>";


echo "<br><br><h3 id=\"h_rul\"><span id=\"hreg2\">".mex("Tabella con le regole di assegnazione",$pag)." 2 (".mex("tipologie di appartamenti",'unit.php').") ".mex("del",$pag)." $anno.</span></h3>
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Tariffa",$pag)."</td>
<td class=\"t1top\">".mex("Appartamenti",'unit.php')."</td>";
if ($priv_mod_reg2 == "s") echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td>";
echo "</tr>";

$regole = esegui_query("select * from $tableregole where tariffa_per_app != '' order by tariffa_per_app ");
$num_regole = numlin_query($regole);

$html_tab = array();
for ($num1 = 0 ; $num1 < $num_regole ; $num1++) {
$idregole = risul_query($regole,$num1,'idregole');
$tariffa = risul_query($regole,$num1,'tariffa_per_app');
#$lung = strlen($tariffa);
if (!isset($html_tab[$tariffa])) $html_tab[$tariffa] = "";
if ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)])) {
$num_apti = risul_query($regole,$num1,'motivazione3');
if (substr(fixstr($num_apti),0,1) == "v") {
$num_apti = substr($num_apti,1);
$v_apti = "v";
} # fine if (substr(fixstr($num_apti),0,1) == "v")
else $v_apti = "";
$lista_app = risul_query($regole,$num1,'motivazione');
$vett_app = explode(",",$lista_app);
$num_app = count($vett_app);
$lista_app_spazi = "";
for ($num2 = 0 ; $num2 < $num_app ; $num2 = $num2 + 1) {
if (!$lista_app_spazi) $lista_app_spazi = $vett_app[$num2];
else $lista_app_spazi .= ", ".$vett_app[$num2];
} # fine for $num2
$lista_appb = risul_query($regole,$num1,'motivazione2');
if (strcmp((string) $lista_appb,"")) {
$num_giorni_ini = risul_query($regole,$num1,'iddatainizio');
$num_giorni_fine = risul_query($regole,$num1,'iddatafine');
$vett_appb = explode(",",$lista_appb);
$num_appb = count($vett_appb);
$lista_app_spazib = "";
for ($num2 = 0 ; $num2 < $num_appb ; $num2++) {
if (!$lista_app_spazib) $lista_app_spazib = $vett_appb[$num2];
else $lista_app_spazib .= ", ".$vett_appb[$num2];
} # fine for $num2
if ($num_giorni_ini) {
$num_giorni = $num_giorni_ini;
$dall_inizio = mex("dall'inizio",$pag);
} # fine if ($num_giorni_ini)
else {
$num_giorni = $num_giorni_fine;
$dall_inizio = mex("dalla fine",$pag);
} # fine else if ($num_giorni_ini)
$lista_app_spazi .= " <small><small>(".mex("con meno di",$pag)." $num_giorni ".mex("giorni",$pag)." $dall_inizio: $lista_app_spazib)</small></small>";
} # fine if (strcmp((string) $lista_appb,""))
if ($num_apti > 1 and $lista_app_spazi) {
$lista_app_spazi = mex("tra",'crearegole.php')." ".$lista_app_spazi;
if ($v_apti) $lista_app_spazi = "<small>(".mex("vicini",'unit.php').")</small> ".$lista_app_spazi;
$lista_app_spazi = "<em>$num_apti ".mex("appartamenti",'unit.php')."</em> ".$lista_app_spazi;
} # fine if ($num_apti > 1 and $lista_app_spazi)
$html_tab[$tariffa] .= "<tr><td class=\"t1left\">".$nometariffa_vedi[$tariffa]."</td>
<td>$lista_app_spazi</td>";
if ($priv_mod_reg2 == "s") {
$html_tab[$tariffa] .= "<td>";
if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)])) {
$html_tab[$tariffa] .= "<a href=\"crearegole.php?tipotariffa_regola2=$tariffa&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=tab_reg2\">".mex("modifica",$pag)."</a><br>
<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idregole=$idregole\">".mex("cancella",$pag)."</a>";
} # fine if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)]))
else $html_tab[$tariffa] .= "&nbsp;";
$html_tab[$tariffa] .= "</td>";
} # fine if ($priv_mod_reg2 == "s")
$html_tab[$tariffa] .= "</tr>";
} # fine if ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or...
} # fine for $num1

for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if (!empty($html_tab[$tariffa])) echo $html_tab[$tariffa];
elseif ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)])) {
echo "<tr><td class=\"t1left\">".$nometariffa_vedi[$tariffa]."</td>
<td class=\"colwarn\">".mex("tutti gli appartamenti",'unit.php')."</td>";
if ($priv_mod_reg2 == "s") {
echo "<td>";
if ($attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[$numtariffa])) echo "&nbsp;";
else echo "<a href=\"crearegole.php?tipotariffa_regola2=$tariffa&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=tab_reg2\">".mex("modifica",$pag)."</a>";
echo "</td>";
} # fine if ($priv_mod_reg2 == "s")
echo "</tr>";
} # fine elseif ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)]))
} # fine for $numtariffa
/*if ($html_tab) {
ksort($html_tab);
foreach ($html_tab as $val) echo $val;
} # fine if ($html_tab)*/
echo "</table></div>";


echo "<br><br><h3 id=\"h_rul\"><span id=\"hreg3\">".mex("Tabella con le regole di assegnazione",$pag)." 3 (".mex("numero di persone",'crearegole.php').") ".mex("del",$pag)." $anno.</span></h3>
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Tariffa",$pag)."</td>
<td class=\"t1top\"><small>".str_replace("_","&nbsp;",mex("Numero_predefinito di persone",$pag))."</small></td>
<td class=\"t1top\"><small>".str_replace("_","&nbsp;",mex("Numero_minimo di persone",$pag))."</small></td>";
if ($priv_mod_reg2 == "s") echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td>";
echo "</tr>";

$regole = esegui_query("select * from $tableregole where tariffa_per_persone != '' order by tariffa_per_persone");
$num_regole = numlin_query($regole);

$html_tab = array();
for ($num1 = 0 ; $num1 < $num_regole ; $num1++) {
$tariffa = risul_query($regole,$num1,'tariffa_per_persone');
if ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)])) {
$idregole = risul_query($regole,$num1,'idregole');
$lung = strlen($tariffa);
if (!isset($html_tab[$lung])) $html_tab[$lung] = "";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa = $numtariffa + 1) {
$tariffa_cerca = "tariffa".$numtariffa;
if ($tariffa_cerca == $tariffa) {
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
break;
} # fine if ($tariffa_cerca == $tariffa)
} # fine for $numtariffa
$num_persone_regola3 = risul_query($regole,$num1,'iddatainizio');
if (!$num_persone_regola3) $num_persone_regola3 = "&nbsp;";
$min_persone_regola3 = risul_query($regole,$num1,'iddatafine');
if (!$min_persone_regola3) $min_persone_regola3 = "&nbsp;";
$html_tab[$lung] .= "<tr><td class=\"t1left\">$tariffa_vedi$nometariffa_vedi</td>
<td>$num_persone_regola3</td>
<td>$min_persone_regola3</td>";
if ($priv_mod_reg2 == "s") {
if ($attiva_tariffe_consentite != "n" and !isset($tariffe_consentite_vett[substr($tariffa,7)])) $html_tab[$lung] .= "<td>&nbsp;</td>";
else $html_tab[$lung] .= "<td><a href=\"crearegole.php?tipotariffa_regola3=$tariffa&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=tab_reg3\">".mex("modifica",$pag)."</a><br>
<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idregole=$idregole\">".mex("cancella",$pag)."</a></td>";
} # fine if ($priv_mod_reg2 == "s")
$html_tab[$lung] .= "</tr>";
} # fine if ($priv_vedi_tab_regole != "p" or $attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[substr($tariffa,7)]))
} # fine for $num1
if ($html_tab) {
ksort($html_tab);
foreach ($html_tab as $val) echo $val;
} # fine if ($html_tab)
echo "</table></div>";


if ($id_utente == 1) {

echo "<br><br><h3 id=\"h_rul\"><span>".mex("Tabella con le regole di assegnazione",$pag)." 4 (".mex("utente inserimento",'crearegole.php').") ".mex("del",$pag)." $anno.</span></h3>
<br><div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Tariffa",$pag)."</td>
<td class=\"t1top\">".mex("Utente",$pag)."</td>";
if (!isset($installazione_subordinata) or $installazione_subordinata != "SI") echo "<td class=\"t1top\">".mex("Cancella",$pag)."</td>";
echo "</tr>";

$utenti = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$numero_tariffe = risul_query($rigatariffe,0,'nomecostoagg');
$regole = esegui_query("select * from $tableregole where tariffa_per_utente != '' order by tariffa_per_utente");
$num_regole = numlin_query($regole);

$html_tab = array();
for ($num1 = 0 ; $num1 < $num_regole ; $num1++) {
$idregole = risul_query($regole,$num1,'idregole');
$tariffa = risul_query($regole,$num1,'tariffa_per_utente');
$lung = strlen($tariffa);
if (!isset($html_tab[$lung])) $html_tab[$lung] = "";
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa = $numtariffa + 1) {
$tariffa_cerca = "tariffa".$numtariffa;
if ($tariffa_cerca == $tariffa) {
$tariffa_vedi = mex("tariffa","prenota.php").$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa != "") $nometariffa_vedi = " ($nometariffa)";
else $nometariffa_vedi = "";
} # fine if ($tariffa_cerca == $tariffa)
} # fine for $numtariffa
$id_utente_regola4 = risul_query($regole,$num1,'iddatainizio');
$nome_utente_regola4 = esegui_query("select nome_utente from $tableutenti where idutenti = '$id_utente_regola4'");
$nome_utente_regola4 = risul_query($nome_utente_regola4,0,'nome_utente');
$html_tab[$lung] .= "<tr><td class=\"t1left\">$tariffa_vedi$nometariffa_vedi</td>
<td>$nome_utente_regola4</td>";
if (!isset($installazione_subordinata) or $installazione_subordinata != "SI") $html_tab[$lung] .= "<td><a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idregole=$idregole\">".mex("cancella",$pag)."</a></td>";
$html_tab[$lung] .= "</tr>";
} # fine for $num1
if ($html_tab) {
ksort($html_tab);
foreach ($html_tab as $val) echo $val;
} # fine if ($html_tab)
echo "</table></div>";

} # fine if ($id_utente == 1)


if ((!isset($installazione_subordinata) or $installazione_subordinata != "SI") and ($priv_mod_reg1 != "n" or $priv_mod_reg2 == "s")) {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"crearegole.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"irul\" type=\"submit\"><div>".mex("Inserisci nuove regole",$pag)."</div></button>
</div></form></div>";
} # fine if ($installazione_subordinata != "SI" and ($priv_mod_reg1 != "n" or $priv_mod_reg2 == "s"))

} # fine else if (!empty($idregole) and empty($torna_alla_tab) and...
} # fine if ($tipo_tabella == "regole" and $priv_vedi_tab_regole != "n")





if ($tipo_tabella == "appartamenti" and $priv_vedi_tab_appartamenti != "n") {

if ($priv_vedi_tab_appartamenti == "g") {
$priv_vedi_tab_appartamenti = "p";
$app_gruppi = "SI";
} # fine if ($priv_vedi_tab_appartamenti == "g")
else $app_gruppi = "NO";

if (!empty($crea_app) and $id_utente == 1 and (!defined('C_CREA_NUOVI_APP') or C_CREA_NUOVI_APP != "NO")) {
if (@get_magic_quotes_gpc()) $n_app = stripslashes($n_app);
$n_app_orig = $n_app;
unset($n_app_vett);
if (strstr($n_app,",")) {
$n_app_vett = explode(",",$n_app);
$num_app_vett = count($n_app_vett);
} # fine if (strstr($n_app,","))
else {
$n_app_vett[0] = $n_app;
$num_app_vett = 1;
} # fine else if (strstr($n_app,","))
$zeri = (string) "0000000000000000000000000000";
$tabelle_lock = array($tableappartamenti);
$tabelle_lock = lock_tabelle($tabelle_lock);

for ($num1 = 0 ; $num1 < $num_app_vett ; $num1++) {
$n_app = $n_app_vett[$num1];
if (str_replace (" ","",$n_app) == "") $n_app = str_replace (" ","_",$n_app);
$n_app = elimina_caratteri_slash(trim($n_app));
$n_app = htmlspecialchars($n_app);
if (defined("C_MASSIMO_NUM_APP") and C_MASSIMO_NUM_APP != 0) {
$app_esistenti = esegui_query("select * from $tableappartamenti ");
if (numlin_query($app_esistenti) >= C_MASSIMO_NUM_APP) $inserire = "NO";
} # fine if (defined("C_MASSIMO_NUM_APP") and C_MASSIMO_NUM_APP != 0)
if (!$n_app) {
echo mex("Si deve inserire il numero del nuovo appartamento",'unit.php').".<br>";
$inserire = "NO";
} # fine if (!$n_app)
$app_esistente = esegui_query("select * from $tableappartamenti where idappartamenti = '".aggslashdb($n_app)."' ");
$app_esistente = numlin_query($app_esistente);
if ($app_esistente) {
echo mex("Il numero inserito esiste già",$pag).".<br>";
$inserire = "NO";
} # fine if ($app_esistente)
if (!empty($crea_letti)) {
if ($n_letti < 1 or $n_letti > 1000) $inserire = "NO";
if (preg_replace("/[0-9]/","",substr($n_app,-1)) == "") {
if ($n_letti <= 26) {
$lettere = 1;
$lista_lettere = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
} # fine if ($n_letti <= 26)
else $lettere = 2;
} # fine if (preg_replace("/[0-9]/","",substr($n_app,-1)) == "")
else $lettere = 0;
$mess_letti = "";
unset($nomi_letti);
for ($num2 = 0 ; $num2 < $n_letti ; $num2++) {
$n_letto = $n_app;
if ($lettere == 0 or $lettere == 2) {
$num_l = ($num2 + 1);
$num_l = (string) substr($zeri,0,(strlen($n_letti) - strlen($num_l))).$num_l;
if ($lettere == 2) $n_letto .= "-";
$n_letto .= $num_l;
} # fine if ($lettere == 0 or $lettere == 2)
if ($lettere == 1) $n_letto .= $lista_lettere[$num2];
$nomi_letti[$num2] = $n_letto;
$mess_letti .= mex("[1]L'appartamento",'unit.php')." <b>$n_letto</b> ".mex("[1]verrà aggiunto",'unit.php').".<br>";
$app_esistente = esegui_query("select * from $tableappartamenti where idappartamenti = '".aggslashdb($n_letto)."' ");
$app_esistente = numlin_query($app_esistente);
if ($app_esistente) {
echo mex("Il numero inserito esiste già",$pag)." (".mex("[1]appartamento",'unit.php')." $n_letto).<br>";
$inserire = "NO";
} # fine if ($app_esistente)
} # fine for $num2
} # fine if (!empty($crea_letti))

if ($crea_app != "SI") {
if (!isset($inserire) or $inserire != "NO") {
if (!empty($crea_letti)) echo $mess_letti;
else echo mex("L'appartamento",'unit.php')." <b>$n_app</b> ".mex("verrà aggiunto",'unit.php').".<br>";
if ($num1 == ($num_app_vett -1)) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"n_app\" value=\"".htmlspecialchars(fixstr($n_app_orig))."\">
<input type=\"hidden\" name=\"crea_app\" value=\"SI\">
<input type=\"hidden\" name=\"crea_letti\" value=\"".htmlspecialchars(fixstr($crea_letti))."\">
<input type=\"hidden\" name=\"n_letti\" value=\"".htmlspecialchars(fixstr($n_letti))."\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<button class=\"aroo\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
</div></form><br><br>";
} # fine if ($num1 == ($num_app_vett -1))
} # fine if (!isset($inserire) or $inserire != "NO")
} # fine if ($crea_app != "SI")

else {
if (!isset($inserire) or $inserire != "NO") {
if (!$crea_letti) {
esegui_query("insert into $tableappartamenti (idappartamenti) values ('".aggslashdb($n_app)."') ");
echo mex("L'appartamento",'unit.php')." <b>$n_app</b> ".mex("è stato aggiunto",'unit.php').".<br>";
} # fine if (!$crea_letti)
else {
for ($num2 = 0 ; $num2 < $n_letti ; $num2++) {
$n_letto = $nomi_letti[$num2];
esegui_query("insert into $tableappartamenti (idappartamenti,maxoccupanti,letto) values ('".aggslashdb($n_letto)."','1','1') ");
$app_vicini = "";
if ($num2 > 1) $app_vicini .= ",".$nomi_letti[($num2 - 2)];
if ($num2 > 0) $app_vicini .= ",".$nomi_letti[($num2 - 1)];
if ($num2 < ($n_letti - 1)) $app_vicini .= ",".$nomi_letti[($num2 + 1)];
if ($num2 < ($n_letti - 2)) $app_vicini .= ",".$nomi_letti[($num2 + 2)];
$app_vicini = substr($app_vicini,1);
if ($app_vicini) esegui_query("update $tableappartamenti set app_vicini = '".aggslashdb($app_vicini)."' where idappartamenti = '".aggslashdb($n_letto)."' ");
echo mex("[1]L'appartamento",'unit.php')." <b>$n_letto</b> ".mex("[1]è stato aggiunto",'unit.php').".<br>";
} # fine for $num2
} # fine else if (!$crea_letti)
} # fine if (!isset($inserire) or $inserire != "NO")
} # fine else if ($crea_app != "SI")

} # fine for $num1

if ($crea_app == "SI" and (!isset($inserire) or $inserire != "NO")) {
$id_appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti ");
$num_appartamenti = numlin_query($id_appartamenti);
$fileaperto = fopen(C_DATI_PATH."/selectappartamenti.php","w+");
flock($fileaperto,2);
fwrite($fileaperto,"<?php \necho '\n");
for ( $num = 0; $num < $num_appartamenti; $num = $num + 1) {
$numapp = risul_query($id_appartamenti,$num,'idappartamenti');
fwrite($fileaperto,"<option value=\"$numapp\">$numapp</option>
");
} # fine for $num
fwrite($fileaperto,"';\n?>");
flock($fileaperto,3);
fclose($fileaperto);
} # fine if ($crea_app == "SI" and (!isset($inserire) or $inserire != "NO"))
unlock_tabelle($tabelle_lock);

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
<hr style=\"width: 95%\">
</div></form>";
} # fine if (!empty($crea_app) and $id_utente == 1 and (!defined('C_CREA_NUOVI_APP') or C_CREA_NUOVI_APP != "NO"))


else {



echo "<h3 id=\"h_room\"><span>".mex("Tabella con tutti gli appartamenti",'unit.php').".</span></h3><br>";

if ($id_utente != 1 or (isset($installazione_subordinata) and $installazione_subordinata == "SI")) $form_tabella = "";
if (!empty($form_tabella)) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_app.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"modificaappartamento\" value=\"SI\">
<input type=\"hidden\" name=\"form_tabella\" value=\"SI\">";
$colspan_app = " colspan=\"2\"";
} # fine if (!empty($form_tabella))
else $colspan_app = "";

echo "<div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td$colspan_app>".mex("Appartamento",'unit.php')."</td>
<td class=\"t1top\">".mex("Casa",$pag)."</td>
<td class=\"t1top\">".mex("Piano",$pag)."</td>
<td class=\"t1top\">".str_replace("_","&nbsp;",mex("Capienza_massima",$pag))."<br>
<small>(".str_replace(" ","&nbsp;",mex("senza letti aggiuntivi",$pag)).")</small></td>
<td class=\"t1top\">".mex("Priorità",$pag)."</td>";
if (empty($form_tabella)) {
if ($priv_vedi_inv_app != "n") echo "<td class=\"t1top\">".ucwords(mex("inventario",$pag))."</td>";
echo "<td class=\"t1top\">".mex("Commento",$pag)."</td>";
if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI")) echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td>";
} # fine if (empty($form_tabella))
echo "</tr>";

$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
$appartamenti = esegui_query("select * from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);

if ($priv_vedi_tab_appartamenti == "p") {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($app_gruppi != "SI") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine if ($priv_vedi_tab_appartamenti == "p")

if ($priv_vedi_inv_app != "n" and empty($form_tabella)) {
if ($priv_vedi_beni_inv != "n") {
if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = "and ( $tablebeniinventario.utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or $tablebeniinventario.utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";
} # fine if ($priv_vedi_beni_inv != "n")
else $condizione_beni_propri = "and $tablebeniinventario.utente_inserimento = '-1'";
if ($priv_vedi_inv_app != "s") {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_vedi_inv_app != "g") $app_consentiti_inv = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $app_consentiti_inv = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine if ($priv_vedi_inv_app != "s")
} # fine if ($priv_vedi_inv_app != "n" and empty($form_tabella))
else unset($app_consentiti_inv);

if (!empty($form_tabella)) {
$nome_app_letto_id = array();
$num_letti_app = array();
$primo_letto_app = array();
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO") {
$letto = risul_query($appartamenti,$num1,'letto');
if ($letto) {
$idapp = $idappartamenti;
$nome_app_letto = "";
while (preg_match("/[0-9]/",substr($idapp,0,1))) {
$nome_app_letto .= substr($idapp,0,1);
$idapp = substr($idapp,1);
} # fine while (preg_match("/[0-9]/",substr($idapp,0,1)))
if (!strcmp((string) $nome_app_letto,"")) {
while (preg_match("/[a-z]/i",substr($idapp,0,1))) {
$nome_app_letto .= substr($idapp,0,1);
$idapp = substr($idapp,1);
} # fine while (preg_match("/[0-9]/",substr($idapp,0,1)))
} # fine if (!strcmp((string) $nome_app_letto,""))
if (strcmp((string) $nome_app_letto,"")) {
$nome_app_letto_id[$idappartamenti] = $nome_app_letto;
if (!isset($num_letti_app[$nome_app_letto])) $num_letti_app[$nome_app_letto] = 0;
$num_letti_app[$nome_app_letto]++;
if (!strcmp(fixstr($primo_letto_app[$nome_app_letto]),"")) $primo_letto_app[$nome_app_letto] = $idappartamenti;
} # fine if (strcmp((string) $nome_app_letto,""))
} # fine if ($letto)
} # fine if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO")
} # fine for $num1
} # fine if (!empty($form_tabella))

for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO") {
$numcasa = risul_query($appartamenti,$num1,'numcasa');
$numpiano = risul_query($appartamenti,$num1,'numpiano');
$maxoccupanti = risul_query($appartamenti,$num1,'maxoccupanti');
$priorita = risul_query($appartamenti,$num1,'priorita');
$letto = risul_query($appartamenti,$num1,'letto');
if (empty($form_tabella)) {
$commento = risul_query($appartamenti,$num1,'commento');
if (!$numcasa) $numcasa = "&nbsp;";
if (!$numpiano) $numpiano = "&nbsp;";
if (!$maxoccupanti) $maxoccupanti = "&nbsp;";
else {
if ($maxoccupanti == 1) $maxoccupanti = "1 ".mex("persona",$pag);
else $maxoccupanti .= " ".mex("persone",$pag);
} # fine else if (!$maxoccupanti)
if (!$priorita) $priorita = "&nbsp;";
if (!$commento) $commento = "&nbsp;";
$stile_checkin = "";
if ($attiva_checkin == "SI") {
$checkin_presente = esegui_query("select idprenota from $tableprenota where idappartamenti = '".aggslashdb($idappartamenti)."' and checkin is not NULL and checkout is NULL");
if (numlin_query($checkin_presente) == 1) $stile_checkin = " style=\"background-image:url(img/fr_sx_checkin.gif); background-repeat:no-repeat; background-position: left center;\"";
} # fine if ($attiva_checkin == "SI")
$inv = "&nbsp;";
$stile_inv = "";
if ($priv_vedi_inv_app == "s" or $app_consentiti_inv[$idappartamenti] != "NO") {
$inv_mancante = esegui_query("select distinct $tablerelinventario.quantita from $tablerelinventario inner join $tablebeniinventario on $tablerelinventario.idbeneinventario = $tablebeniinventario.idbeniinventario where $tablerelinventario.idappartamento = '".aggslashdb($idappartamenti)."' and $tablerelinventario.quantita < $tablerelinventario.quantita_min_predef $condizione_beni_propri ");
if (numlin_query($inv_mancante)) $stile_inv = " style=\"background-image:url(img/fr_sx_rossa.gif); background-repeat:no-repeat; background-position: left center;\"";
$inv = "<a href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=$tipo_tabella&amp;idmag=a".urlencode($idappartamenti)."\">".mex("inventario",$pag)."</a>";
} # fine if ($priv_vedi_inv_app == "s" or $app_consentiti_inv[$idappartamenti] != "NO")
echo "<tr><td class=\"t1left\"$stile_checkin>$idappartamenti</td>
<td>$numcasa</td>
<td>$numpiano</td>
<td>$maxoccupanti</td>
<td>$priorita</td>";
if ($priv_vedi_inv_app != "n") echo "<td$stile_inv>$inv</td>";
echo "<td style=\"font-size: x-small;\">$commento</td>";
if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI")) echo "<td><a href=\"modifica_app.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;idappartamenti=".urlencode($idappartamenti)."\">".mex("modifica",$pag)."</a></td>";
echo "</tr>";
} # fine if (empty($form_tabella))
else {
echo "<tr>";
if (!empty($tutti_letti) or !strcmp(fixstr($nome_app_letto_id[$idappartamenti]),"") or $num_letti_app[$nome_app_letto_id[$idappartamenti]] < 2) {
if ($mobile_device) $size = "8";
else $size = "12";
echo "<td class=\"t1left\"$colspan_app><input type=\"text\" name=\"n_nome_app$num1\" value=\"$idappartamenti\" size=\"$size\"></td>
<td><input type=\"text\" name=\"n_numcasa$num1\" value=\"$numcasa\" size=\"12\"></td>
<td><input type=\"text\" name=\"n_numpiano$num1\" value=\"$numpiano\" size=\"12\"></td>";
} # fine if ($tutti_letti or !strcmp((string) $nome_app_letto_id[$idappartamenti],"") or $num_letti_app[$nome_app_letto_id[$idappartamenti] < 2])
else {
if ($mobile_device) $size = "6";
else $size = "8";
$nome_app_l = $nome_app_letto_id[$idappartamenti];
if ($primo_letto_app[$nome_app_l] == $idappartamenti) {
echo "<td class=\"t1left1\" rowspan=\"".$num_letti_app[$nome_app_l]."\">
<input type=\"text\" name=\"n_nome_app$num1\" value=\"$nome_app_l\" size=\"$size\">&nbsp;<a href=\"visualizza_tabelle.php?tipo_tabella=$tipo_tabella&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;form_tabella=SI&amp;tutti_letti=1\" title=\"".mex("tutti",$pag)."\" style=\"text-decoration: none; color: #666666;\">&prime;</a>
<input type=\"hidden\" name=\"num_unita_app$num1\" value=\"".$num_letti_app[$nome_app_l]."\">
<input type=\"hidden\" name=\"nome_unita_app$num1\" value=\"$nome_app_l\">
</td>";
} # fine if ($primo_letto_app[$nome_app_l] == $idappartamenti)
echo "<td class=\"t1left2\">".substr($idappartamenti,strlen($nome_app_l))."</td>";
if ($primo_letto_app[$nome_app_l] == $idappartamenti) {
echo "<td rowspan=\"".$num_letti_app[$nome_app_l]."\"><input type=\"text\" name=\"n_numcasa$num1\" value=\"$numcasa\" size=\"12\"></td>
<td rowspan=\"".$num_letti_app[$nome_app_l]."\"><input type=\"text\" name=\"n_numpiano$num1\" value=\"$numpiano\" size=\"12\"></td>";
} # fine if ($primo_letto_app[$nome_app_l] == $idappartamenti)
} # fine else if ($tutti_letti or !strcmp((string) $nome_app_letto_id[$idappartamenti],"") or $num_letti_app[$nome_app_letto_id[$idappartamenti] < 2])
echo "<td>";
if (!$letto) echo "<input type=\"text\" name=\"n_maxoccupanti$num1\" value=\"$maxoccupanti\" size=\"8\">";
else echo "<input type=\"hidden\" name=\"n_maxoccupanti$num1\" value=\"$maxoccupanti\">$maxoccupanti";
echo "</td>
<td><input type=\"text\" name=\"n_priorita$num1\" value=\"$priorita\" size=\"8\">
<input type=\"hidden\" name=\"idappartamenti$num1\" value=\"$idappartamenti\">
<input type=\"hidden\" name=\"d_numcasa$num1\" value=\"$numcasa\">
<input type=\"hidden\" name=\"d_numpiano$num1\" value=\"$numpiano\">
<input type=\"hidden\" name=\"d_maxoccupanti$num1\" value=\"$maxoccupanti\">
<input type=\"hidden\" name=\"d_priorita$num1\" value=\"$priorita\">
</td>";
} # fine else if (empty($form_tabella))
} # fine if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO")
} # fine for $num1
echo "</table></div>";

if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI") and empty($form_tabella)) {
echo "<table><tr><td style=\"height: 2px;\"></td></tr></table><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<input type=\"hidden\" name=\"form_tabella\" value=\"SI\">
<button class=\"edit\" type=\"submit\"><div>".mex("Modifica tutti i campi della tabella",$pag)."</div></button>
</div></form><br>";
if (!defined('C_CREA_NUOVI_APP') or C_CREA_NUOVI_APP != "NO") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<input type=\"hidden\" name=\"crea_app\" value=\"1\">
".mex("Crea un nuovo appartamento",'unit.php')."
 n° <input type=\"text\" name=\"n_app\" size=\"7\" maxlength=\"45\">
<button class=\"aroo\" type=\"submit\"><div>".mex("Aggiungi",$pag)."</div></button>
</div></form><br>";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<input type=\"hidden\" name=\"crea_app\" value=\"1\">
<input type=\"hidden\" name=\"crea_letti\" value=\"1\">
".mex("Creare",$pag)." <input type=\"text\" name=\"n_letti\" size=\"2\" maxlength=\"3\" value=\"4\">
".mex("[1]appartamenti",'unit.php')." ".mex("nel nuovo appartamento",'unit.php')."
 n° <input type=\"text\" name=\"n_app\" size=\"5\" maxlength=\"45\">
<button class=\"aroo\" type=\"submit\"><div>".mex("Aggiungi",$pag)."</div></button>
</div></form><br>";
} # fine if (!defined('C_CREA_NUOVI_APP') or C_CREA_NUOVI_APP != "NO")
elseif (defined('C_URL_NUOVI_APP') and C_URL_NUOVI_APP) echo "<b><a href=\"".C_URL_NUOVI_APP."\" target=\"_blank\">".mex("Crea un nuovo appartamento",'unit.php')."</a></b><br><br>";
echo "</div>";
} # fine if ($id_utente == 1 and (!isset($installazione_subordinata) or...
elseif (empty($form_tabella)) echo "<br>";

if (!empty($form_tabella)) echo "<table><tr><td style=\"height: 2px;\"></td></tr></table><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"num_app_modifica\" value=\"$num_appartamenti\">
<button class=\"cont\" type=\"submit\"><div>".mex("Applica i cambiamenti",$pag)."</div></button>
</div></div></form><br>";


if (empty($form_tabella) and $num_appartamenti > 2) {
if ($num_appartamenti < 70 or $mostra_griglia_app) {

if (!empty($modifica_app_vicini) and $id_utente == 1) {
$tabelle_lock = array($tableappartamenti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$app_vicini = array('vett' => 'SI');
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) ${"idappartamenti".$num1} = htmlspecialchars(${"idappartamenti".$num1});
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if (${"idappartamenti".$num1} == $idappartamenti) {
for ($num2 = ($num_appartamenti - 1) ; $num2 > $num1 ; $num2--) {
$idappartamenti2 = risul_query($appartamenti,$num2,'idappartamenti');
if (${"idappartamenti".$num2} == $idappartamenti2) {
if (isset(${"v".$num1."_".$num2}) and ${"v".$num1."_".$num2} == "SI") {
if (!isset($app_vicini[$num1]) or (string) $app_vicini[$num1] == "") $app_vicini[$num1] = $idappartamenti2;
else $app_vicini[$num1] = $app_vicini[$num1].",".$idappartamenti2;
if (!isset($app_vicini[$num2]) or (string) $app_vicini[$num2] == "") $app_vicini[$num2] = $idappartamenti;
else $app_vicini[$num2] = $app_vicini[$num2].",".$idappartamenti;
} # fine if (isset(${"v".$num1."_".$num2}) and ${"v".$num1."_".$num2} == "SI")
} # fine if (${"idappartamenti".$num2} == $idappartamenti2)
} # fine for $num2
} # fine if (${"idappartamenti".$num1} == $idappartamenti)
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
$d_app_vicini = risul_query($appartamenti,$num1,'app_vicini');
$n_app_vicini = "";
if (isset($app_vicini[$num1]) and (string) $app_vicini[$num1] != "") {
$app_vic = explode(",",$app_vicini[$num1]);
sort($app_vic);
reset ($app_vic);
foreach ($app_vic as $val) $n_app_vicini .= ",".$val;
$n_app_vicini = substr($n_app_vicini,1);
} # fine if (isset($app_vicini[$num1]) and (string) $app_vicini[$num1] != "")
if ($n_app_vicini != $d_app_vicini) esegui_query("update $tableappartamenti set app_vicini = '".aggslashdb($n_app_vicini)."' where idappartamenti = '".aggslashdb($idappartamenti)."' ");
} # fine for $num1
$appartamenti = esegui_query("select * from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
unlock_tabelle($tabelle_lock);
} # fine if (!empty($modifica_app_vicini) and $id_utente == 1)

echo "<a name=\"g_app_vicini\"></a><h3 id=\"h_nroo\"><span>".mex("Griglia appartamenti vicini",'unit.php').".</span></h3><br>";
if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI")) echo "
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php#g_app_vicini\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<input type=\"hidden\" name=\"modifica_app_vicini\" value=\"appartamenti\">
<input type=\"hidden\" name=\"mostra_griglia_app\" value=\"1\">
<input type=\"hidden\" name=\"n_app_vic_passa\" value=\"$num_appartamenti\">
<script type=\"text/javascript\">
<!--
function agg_sp (num1,num2) {
document.getElementById('v'+num2+'_'+num1).checked = document.getElementById('v'+num1+'_'+num2).checked;
}
-->
</script>";
$num_app_doppia_spunta = 60;
echo "<div class=\"tab_cont\">
<table class=\"m1 t1color\" style=\"margin-left: auto; margin-right: auto; text-align: center; font-size: 75%;\" width=3 border=\"$t1border\" cellspacing=\"0\" cellpadding=\"1\"><tbody>";
$linea_app = "<td>&nbsp;</td></tr>";
unset($app_vicini_vett);
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$num_col = $num_appartamenti - $num1 - 1;
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO") $linea_app = "<td colspan=\"2\" style=\"background-color: $t1dates;\" class=\"rd_$num_col m1top\">$idappartamenti</td>".$linea_app;
$app_vicini = risul_query($appartamenti,$num1,'app_vicini');
if ($app_vicini) {
$app_vicini = explode(",",$app_vicini);
for ($num2 = 0 ; $num2 < count($app_vicini) ; $num2++) $app_vicini_vett[$app_vicini[$num2]][$num1] = 1;
} # fine if ($app_vicini)
} # fine for $num1
$linea_app = "<tr class=\"rd_r\"><td>&nbsp;</td>".$linea_app;
echo $linea_app;
$linea_app = str_replace(" m1top\">","\">",$linea_app);
$num_linea_app = -1;

for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$num_linea_app++;
if ($num_linea_app == 30) {
echo $linea_app;
$num_linea_app = 0;
} # fine if ($num_linea_app == 30)
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti] != "NO") {
echo "<tr><td class=\"t1left\"><input type=\"hidden\" name=\"idappartamenti$num1\" value=\"$idappartamenti\">
$idappartamenti</td>";
for ($num2 = ($num_appartamenti - 1) ; $num2 >= 0 ; $num2--) {
$idappartamenti2 = risul_query($appartamenti,$num2,'idappartamenti');
if ($priv_vedi_tab_appartamenti != "p" or $appartamenti_consentiti[$idappartamenti2] != "NO") {
if (!empty($app_vicini_vett[$idappartamenti][$num2])) $bgcolor = " style=\"background-color: #6b91a0;\"";
else $bgcolor = "";
if (($num2 > $num1 or ($num2 != $num1 and $num_appartamenti < $num_app_doppia_spunta)) and $id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI")) {
if ($num2 > $num1) $disabled = "";
else $disabled = " disabled=\"disabled\"";
if (!empty($app_vicini_vett[$idappartamenti][$num2])) $checked = " checked";
else $checked = "";
if ($num_appartamenti < $num_app_doppia_spunta) $onclick = " onclick=\"agg_sp($num1,$num2);\"";
else $onclick = "";
$val = "<input type=\"checkbox\" id=\"v$num1"."_$num2\" name=\"v$num1"."_$num2\" value=\"SI\"$disabled$onclick$checked>";
} # fine if (($num2 > $num1 or ($num2 != $num1 and $num_appartamenti < 70)) and...
else $val = "&nbsp;";
echo "<td colspan=\"2\"$bgcolor>$val</td>";
} # fine if ($priv_vedi_tab_appartamenti != "p" or...
} # fine for $num2
echo "<td>$idappartamenti</td></tr>";
} # fine if ($priv_vedi_tab_appartamenti != "p" or...
} # fine for $num1
if ($num_linea_app > 5 or $num_appartamenti < 30) echo $linea_app;
echo "</tbody></table></div>
<table><tr><td style=\"height: 2px;\"></td></tr></table>";
if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI")) {
echo "<div style=\"text-align: center;\">
<button class=\"cont\" type=\"submit\"><div>".mex("Applica i cambiamenti",$pag)."</div></button>
</div><script type=\"text/javascript\">
<!--
";
if ($num_appartamenti < $num_app_doppia_spunta) echo "for (n1 = 0 ; n1 < $num_appartamenti ; n1++) {
for (n2 = ".($num_appartamenti - 1)." ; n2 >= 0 ; n2--) {
if (n1 > n2) document.getElementById('v'+n1+'_'+n2).disabled = 0;
}
}
";
echo "var colore_date_norm = '$t1dates';
var colore_date_sel = '$t1seldate';
attiva_colora_date('SI');
-->
</script></div></form>";
} # fine if ($id_utente == 1 and (!isset($installazione_subordinata) or $installazione_subordinata != "SI"))
echo "<br><br>";
} # fine if ($num_appartamenti < 70 or $mostra_griglia_app)
else echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php#g_app_vicini\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"appartamenti\">
<input type=\"hidden\" name=\"mostra_griglia_app\" value=\"1\">
<button class=\"nroo\" type=\"submit\"><div>".mex("Griglia appartamenti vicini",'unit.php')."</div></button>
</div></form><br>";
} # fine if (empty($form_tabella) and $num_appartamenti > 2)

} # fine else if ($crea_app)
} # fine if ($tipo_tabella == "appartamenti" and $priv_vedi_tab_appartamenti != "n")





if ($tipo_tabella == "inventario" and ($priv_vedi_beni_inv != "n" or $priv_vedi_inv_mag != "n" or $priv_vedi_inv_app != "n")) {
$frase_tab_beni_inv = "";

if (!empty($manda_form_beni) and $priv_vedi_beni_inv != "n" and $priv_ins_beni_inv != "n") {
$continua = "";

if (!empty($aggiungi_bene) and $n_nome_bene) {
if (@get_magic_quotes_gpc()) {
$n_nome_bene = stripslashes($n_nome_bene);
$n_codice_bene = stripslashes($n_codice_bene);
$n_descrizione_bene = stripslashes($n_descrizione_bene);
} # fine if (@get_magic_quotes_gpc())
$n_nome_bene = htmlspecialchars($n_nome_bene);
$n_codice_bene = htmlspecialchars($n_codice_bene);
$n_descrizione_bene = htmlspecialchars($n_descrizione_bene);
$tabelle_lock = array($tablebeniinventario);
$altre_tab_lock = array($tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
if ($id_utente != 1 or !$n_utente_ins_bene or controlla_num_pos($n_utente_ins_bene) != "SI") $n_utente_ins_bene = $id_utente;
$utente_esist = esegui_query("select idutenti from $tableutenti where idutenti = '".aggslashdb($n_utente_ins_bene)."' ");
if (numlin_query($utente_esist) != 1) $continua = "NO";
if ($continua != "NO") {
$idinv = esegui_query("select max(idbeniinventario) from $tablebeniinventario");
$idinv = risul_query($idinv,0,0) + 1;
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tablebeniinventario (idbeniinventario,nome_bene,codice_bene,descrizione_bene,datainserimento,hostinserimento,utente_inserimento) values ('$idinv','".aggslashdb($n_nome_bene)."','".aggslashdb($n_codice_bene)."','".aggslashdb($n_descrizione_bene)."','$datainserimento','$HOSTNAME','$n_utente_ins_bene') ");
$frase_tab_beni_inv = "<b>".mex("bene aggiunto",$pag).": ".$n_nome_bene."</b>.<br>";
} # fine if ($continua != "NO")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($aggiungi_bene) and $n_nome_bene)

if (isset($elimina_bene) and $elimina_bene == "SI" and $idinv and controlla_num_pos($idinv) == "SI") {
$idinv = aggslashdb($idinv);
$tabelle_lock = array($tablebeniinventario);
$altre_tab_lock = array($tablerelinventario);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$bene_in_mag = esegui_query("select idbeneinventario from $tablerelinventario where idbeneinventario = '$idinv' limit 1");
if (numlin_query($bene_in_mag)) $continua = "NO";
$bene_esist = esegui_query("select utente_inserimento from $tablebeniinventario where idbeniinventario = '$idinv'");
if (numlin_query($bene_esist)) if ($id_utente != 1 and $id_utente != risul_query($bene_esist,0,'utente_inserimento')) $continua = "NO";
if ($continua != "NO") {
esegui_query("delete from $tablebeniinventario where idbeniinventario = '$idinv' ");
$frase_tab_beni_inv = "<b>".mex("bene eliminato",$pag)."</b>.<br>";
} # fine if ($continua != "NO")
unlock_tabelle($tabelle_lock);
} # fine if (isset($elimina_bene) and $elimina_bene == "SI" and $idinv and...

} # fine if (!empty($manda_form_beni) and $priv_vedi_beni_inv != "n" and $priv_ins_beni_inv != "n")


if (!empty($manda_form_mag) and $priv_vedi_inv_mag != "n" and $priv_ins_mag != "n") {
$continua = "";

if (!empty($aggiungi_mag) and !empty($n_nome_mag)) {
if (@get_magic_quotes_gpc()) {
$n_nome_mag = stripslashes($n_nome_mag);
$n_descrizione_mag = stripslashes($n_descrizione_mag);
} # fine if (@get_magic_quotes_gpc())
$n_nome_mag = htmlspecialchars($n_nome_mag);
$n_descrizione_mag = htmlspecialchars($n_descrizione_mag);
$tabelle_lock = array($tablemagazzini);
$altre_tab_lock = array($tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
if ($id_utente != 1) $n_utente_ins_mag = $id_utente;
if (controlla_num_pos($n_utente_ins_mag) != "SI") $continua = "NO";
else {
$utente_esist = esegui_query("select idutenti from $tableutenti where idutenti = '".aggslashdb($n_utente_ins_mag)."' ");
if (numlin_query($utente_esist) != 1) $continua = "NO";
} # fine else if (controlla_num_pos($n_utente_ins_mag) != "SI")
if (str_replace(" ","",$n_nome_mag) == "") $continua = "NO";
if ($continua != "NO") {
$idmag = esegui_query("select max(idmagazzini) from $tablemagazzini");
$idmag = risul_query($idmag,0,0) + 1;
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("insert into $tablemagazzini (idmagazzini,nome_magazzino,codice_magazzino,descrizione_magazzino,datainserimento,hostinserimento,utente_inserimento) values ('$idmag','".aggslashdb($n_nome_mag)."','','".aggslashdb($n_descrizione_mag)."','$datainserimento','$HOSTNAME','$n_utente_ins_mag') ");
echo "<b>".mex("magazzino aggiunto",$pag)."</b>.<br>";
} # fine if ($continua != "NO")
unlock_tabelle($tabelle_lock);
} # fine if (!empty($aggiungi_mag) and !empty($n_nome_mag))

if (isset($elimina_mag) and $elimina_mag == "SI" and !empty($idmag) and controlla_num_pos($idmag) == "SI") {
$idmag = aggslashdb($idmag);
$tabelle_lock = array($tablemagazzini);
$altre_tab_lock = array($tablerelinventario);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$bene_in_mag = esegui_query("select idmagazzino from $tablerelinventario where idmagazzino = '$idmag' limit 1");
if (numlin_query($bene_in_mag)) $continua = "NO";
$mag_esist = esegui_query("select utente_inserimento from $tablemagazzini where idmagazzini = '$idmag'");
if (numlin_query($mag_esist)) if ($id_utente != 1 and $id_utente != risul_query($mag_esist,0,'utente_inserimento')) $continua = "NO";
if ($continua != "NO") {
esegui_query("delete from $tablemagazzini where idmagazzini = '$idmag' ");
echo "<b>".mex("magazzino eliminato",$pag)."</b>.<br>";
} # fine if ($continua != "NO")
unlock_tabelle($tabelle_lock);
} # fine if (isset($elimina_mag) and $elimina_mag == "SI" and !empty($idmag) and...

} # fine if (!empty($manda_form_mag) and $priv_vedi_inv_mag != "n" and $priv_ins_mag != "n")


if (!empty($importa_inv_app) and $priv_vedi_inv_app != "n" and $priv_ins_beni_in_app != "n" and $priv_vedi_beni_inv != "n") {
$continua = "";
if (@get_magic_quotes_gpc()) {
$app_da = stripslashes($app_da);
$app_a = stripslashes($app_a);
} # fine if (@get_magic_quotes_gpc())
$tabelle_lock = array($tablerelinventario);
$altre_tab_lock = array($tablenometariffe,$tableappartamenti,$tableregole,$tablebeniinventario);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
if ($priv_vedi_inv_app != "s") {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_vedi_inv_app != "g") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine if ($priv_vedi_inv_app != "s")
if ($priv_ins_beni_in_app != "s") {
if ($priv_vedi_inv_app == $priv_ins_beni_in_app) $app_cons_ins_beni = $appartamenti_consentiti;
else {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_ins_beni_in_app != "g") $app_cons_ins_beni = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $app_cons_ins_beni = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine else if ($priv_vedi_inv_app == $priv_ins_beni_in_app)
} # fine if ($priv_ins_beni_in_app != "s")
if (substr($app_a,0,1) != "a" and substr($app_a,0,7) != "tariffa") $continua = "NO";
$app_da_esist = esegui_query("select idappartamenti from $tableappartamenti where idappartamenti = '".aggslashdb($app_da)."' ");
if (numlin_query($app_da_esist) != 1) $continua = "NO";
if ($priv_vedi_inv_app != "s" and $appartamenti_consentiti[$app_da] == "NO") $continua = "NO";

if ($continua != "NO") {
unset($app_a_vett);
if (substr($app_a,0,1) == "a") {
$app_a_esist = esegui_query("select idappartamenti from $tableappartamenti where idappartamenti = '".aggslashdb(substr($app_a,1))."' ");
if (numlin_query($app_a_esist) == 1) $app_a_vett[substr($app_a,1)] = 1;
} # fine if (substr($app_a,0,1) == "a")
else {
$regola2 = esegui_query("select * from $tableregole where tariffa_per_app = '".aggslashdb($app_a)."' ");
if (numlin_query($regola2) == 1) {
$lista_app = explode(",",risul_query($regola2,0,'motivazione'));
for ($num1 = 0 ; $num1 < count($lista_app) ; $num1++) $app_a_vett[$lista_app[$num1]] = 1;
} # fine if (numlin_query($regola2) == 1)
} # fine else if (substr($app_a,0,1) == "a")

if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";
$beni_inv = esegui_query("select * from $tablebeniinventario $condizione_beni_propri order by idbeniinventario");
$num_beni_inv = numlin_query($beni_inv);

unset($beni_importa_vett);
$beni_importa = esegui_query("select * from $tablerelinventario where idappartamento = '".aggslashdb($app_da)."' ");
$num_beni_importa = numlin_query($beni_importa);
for ($num1 = 1 ; $num1 <= $num_beni_importa ; $num1++) $beni_importa_vett[risul_query($beni_importa,($num1 - 1),'idbeneinventario')] = $num1;

for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if ($app_a_vett[$idapp] and $idapp != $app_da) {
if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO") {
if ($priv_ins_beni_in_app == "s" or $app_cons_ins_beni[$idapp] != "NO") {
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
for ($num2 = 0 ; $num2 < $num_beni_inv ; $num2++) {
$idinv = risul_query($beni_inv,$num2,'idbeniinventario');
esegui_query("delete from $tablerelinventario where idappartamento = '".aggslashdb($idapp)."' and idbeneinventario = '$idinv' ");
if ($beni_importa_vett[$idinv]) {
$num_b = ($beni_importa_vett[$idinv] - 1);
$quantita = risul_query($beni_importa,$num_b,'quantita');
$quantita_min_predef = risul_query($beni_importa,$num_b,'quantita_min_predef');
$richiesto_checkin = risul_query($beni_importa,$num_b,'richiesto_checkin');
if ($id_utente == 1) $utente_ins_bene = risul_query($beni_importa,$num_b,'utente_inserimento');
else $utente_ins_bene = $id_utente;
esegui_query("insert into $tablerelinventario (idbeneinventario,idappartamento,quantita,quantita_min_predef,richiesto_checkin,datainserimento,hostinserimento,utente_inserimento) values ('$idinv','$idapp','$quantita','$quantita_min_predef','$richiesto_checkin','$datainserimento','$HOSTNAME','$utente_ins_bene') ");
} # fine if ($beni_importa_vett[$idinv])
$inv_importato = "SI";
} # fine for $num2
} # fine if $priv_ins_beni_in_app == "s" or $app_cons_ins_beni[$idapp] != "NO")
} # fine if $priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO")
} # fine if ($app_a_vett[$idapp] and $idapp != $app_da)
} # fine for $num1

if ($inv_importato == "SI") echo "<b>".mex("Inventario importato",$pag)."</b>.<br>";
} # fine if ($continua != "NO")

unlock_tabelle($tabelle_lock);
} # fine if (!empty($importa_inv_app) and $priv_vedi_inv_app != "n" and $priv_ins_beni_in_app != "n" and $priv_vedi_beni_inv != "n")


if (!empty($modifica_beni_inv) and $priv_vedi_beni_inv != "n" and $priv_ins_beni_inv != "n") {
$tabelle_lock = array($tablebeniinventario);
$altre_tab_lock = array($tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";

$modificati = 0;
$beni_inv = esegui_query("select * from $tablebeniinventario $condizione_beni_propri order by idbeniinventario");
$num_beni_inv = numlin_query($beni_inv);
for ($num1 = 0 ; $num1 < $num_beni_inv ; $num1++) {
$idinv = risul_query($beni_inv,$num1,'idbeniinventario');
if (strcmp((string) ${"nome_bene".$idinv},"")) {
$nome_bene = risul_query($beni_inv,$num1,'nome_bene');
$codice_bene = risul_query($beni_inv,$num1,'codice_bene');
$descrizione_bene = risul_query($beni_inv,$num1,'descrizione_bene');
$utente_ins_bene = risul_query($beni_inv,$num1,'utente_inserimento');
if (@get_magic_quotes_gpc()) {
${"nome_bene".$idinv} = stripslashes(${"nome_bene".$idinv});
${"codice_bene".$idinv} = stripslashes(${"codice_bene".$idinv});
${"descrizione_bene".$idinv} = stripslashes(${"descrizione_bene".$idinv});
} # fine if (@get_magic_quotes_gpc())
${"nome_bene".$idinv} = htmlspecialchars(${"nome_bene".$idinv});
${"codice_bene".$idinv} = htmlspecialchars(${"codice_bene".$idinv});
${"descrizione_bene".$idinv} = htmlspecialchars(${"descrizione_bene".$idinv});
if (${"nome_bene".$idinv} != $nome_bene) {
$modificati = 1;
esegui_query("update $tablebeniinventario set nome_bene = '".aggslashdb(${"nome_bene".$idinv})."' where idbeniinventario = '$idinv' ");
} # fine if (${"nome_bene".$idinv} != $nome_bene)
if (${"codice_bene".$idinv} != $codice_bene) {
$modificati = 1;
esegui_query("update $tablebeniinventario set codice_bene = '".aggslashdb(${"codice_bene".$idinv})."' where idbeniinventario = '$idinv' ");
} # fine if (${"codice_bene".$idinv} != $codice_bene)
if (${"descrizione_bene".$idinv} != $descrizione_bene) {
$modificati = 1;
esegui_query("update $tablebeniinventario set descrizione_bene = '".aggslashdb(${"descrizione_bene".$idinv})."' where idbeniinventario = '$idinv' ");
} # fine if (${"descrizione_bene".$idinv} != $descrizione_bene)
if ($id_utente == 1 and ${"utente_bene".$idinv} != $utente_ins_bene and controlla_num_pos(${"utente_bene".$idinv}) == "SI") {
$utente_esist = esegui_query("select idutenti from $tableutenti where idutenti = '".${"utente_bene".$idinv}."' ");
if (numlin_query($utente_esist)) {
$modificati = 1;
esegui_query("update $tablebeniinventario set utente_inserimento = '".${"utente_bene".$idinv}."' where idbeniinventario = '$idinv' ");
} # fine if (numlin_query($utente_esist))
} # fine if ($id_utente == 1 and ${"utente_bene".$idinv} != $utente_ins_bene and ...
} # fine if (strcmp((string) ${"nome_bene".$idinv},""))
} # fine for $num1

if ($modificati) $frase_tab_beni_inv = "<b>".mex("I beni sono stati modificati",$pag)."</b>.<br>";
unlock_tabelle($tabelle_lock);
} # fine if (!empty($modifica_beni_inv) and $priv_vedi_beni_inv != "n" and $priv_ins_beni_inv != "n")



if (!isset($mostra_form_inventario) or $mostra_form_inventario != "NO") {


$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
$option_utenti = "";
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$nome_utente = risul_query($tutti_utenti,$num1,'nome_utente');
$option_utenti .= "<option value=\"$idutenti\">$nome_utente</option>";
$nomi_utenti[$idutenti] = $nome_utente;
} # fine for $num1

if ($priv_vedi_beni_inv != "n") {
if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";
} # fine if ($priv_vedi_beni_inv != "n")
else $condizione_beni_propri = "where utente_inserimento = '-1'";

if ($priv_vedi_beni_inv == "n" or $priv_ins_beni_inv == "n") $modifica_tab_beni_inv = 0;

$opt_app = "";
if (($priv_vedi_inv_mag != "n" or $priv_vedi_inv_app != "n") and empty($modifica_tab_beni_inv)) {

$condizione_beni_propri_rel = str_replace("where","and",$condizione_beni_propri);
$condizione_beni_propri_rel = str_replace("utente_inserimento","$tablebeniinventario.utente_inserimento",$condizione_beni_propri_rel);

echo "<a name=\"tab_magazzini\"></a>
<h3 id=\"h_stkr\"><span>".mex("Magazzini ed appartamenti",'unit.php').".</span></h3><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#tab_magazzini\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"inventario\">
<input type=\"hidden\" name=\"manda_form_mag\" value=\"SI\">
<div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Nome",$pag)."</td>
<td class=\"t1top\">".mex("Tipo",$pag)."</td>
<td class=\"t1top\">".mex("Descrizione",$pag)."</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td class=\"t1top\">".mex("Utente",$pag)."</td>";
echo "<td class=\"t1top\">".mex("Modifica",$pag)."</td></tr>";

if ($priv_vedi_inv_mag != "n") {
if ($priv_vedi_inv_mag == "p" or $priv_vedi_inv_mag == "g") {
$condizione_mag_propri = "where ( utente_inserimento = '$id_utente'";
if ($priv_vedi_inv_mag == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_mag_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_inv_mag == "g")
$condizione_mag_propri .= " )";
} # fine if ($priv_vedi_inv_mag == "p" or $priv_vedi_inv_mag == "g")
else $condizione_mag_propri = "";

$magazzini = esegui_query("select * from $tablemagazzini $condizione_mag_propri order by idmagazzini");
$num_mag = numlin_query($magazzini);
for ($num1 = 0 ; $num1 < $num_mag ; $num1++) {
$idmag = risul_query($magazzini,$num1,'idmagazzini');
$nome_mag = risul_query($magazzini,$num1,'nome_magazzino');
$utente_ins_mag = risul_query($magazzini,$num1,'utente_inserimento');
$descrizione_mag = (string) risul_query($magazzini,$num1,'descrizione_magazzino');
$descrizione_mag_len = strlen($descrizione_mag);
if ($descrizione_mag_len > 35) $descrizione_mag = "<small>$descrizione_mag</small>";
if ($descrizione_mag_len > 70) $descrizione_mag = "<small>$descrizione_mag</small>";
$freccia_rossa = "";
$beni_in_mag = esegui_query("select distinct $tablerelinventario.quantita,$tablerelinventario.quantita_min_predef from $tablerelinventario inner join $tablebeniinventario on $tablerelinventario.idbeneinventario = $tablebeniinventario.idbeniinventario where $tablerelinventario.idmagazzino = '$idmag' $condizione_beni_propri_rel");
$num_beni_in_mag = numlin_query($beni_in_mag);
$cancella = "";
if ($num_beni_in_mag) {
for ($num2 = 0 ; $num2 < $num_beni_in_mag ; $num2++) {
$quantita = risul_query($beni_in_mag,$num2,'quantita',$tablerelinventario);
$quantita_min_predef = risul_query($beni_in_mag,$num2,'quantita_min_predef',$tablerelinventario);
if ($quantita_min_predef > $quantita) {
$freccia_rossa = " style=\"background-image:url(img/fr_sx_rossa.gif); background-repeat:no-repeat; background-position: left center;\"";
break;
} # fine if ($quantita_min_predef > $quantita) 
} # fine for $num2
} # fine if ($num_beni_in_mag)
elseif ($priv_ins_mag != "n" and ($id_utente == 1 or $id_utente == $utente_ins_mag)) $cancella = "<br><a href=\"$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;manda_form_mag=SI&amp;elimina_mag=SI&amp;idmag=$idmag#tab_magazzini\">".mex("cancella",$pag)."</a>";
echo "<tr><td class=\"t1left\"$freccia_rossa>$nome_mag</td>
<td><i>".mex("magazzino",$pag)."</i></td>
<td>$descrizione_mag</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td>".fixset($nomi_utenti[$utente_ins_mag])."</td>";
echo "<td><a href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=inventario&amp;idmag=$idmag\">".mex("inventario",$pag)."</a>
$cancella</td></tr>";
} # fine for $num1
} # fine if ($priv_vedi_inv_mag != "n")

if ($priv_vedi_inv_app != "n") {
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);

if ($priv_vedi_inv_app != "s") {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_vedi_inv_app != "g") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine if ($priv_vedi_inv_app != "s")

for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO") {
$freccia_rossa = "";
$beni_in_mag = esegui_query("select distinct $tablerelinventario.quantita,$tablerelinventario.quantita_min_predef from $tablerelinventario inner join $tablebeniinventario on $tablerelinventario.idbeneinventario = $tablebeniinventario.idbeniinventario where $tablerelinventario.idappartamento = '$idapp' $condizione_beni_propri_rel");
$num_beni_in_mag = numlin_query($beni_in_mag);
for ($num2 = 0 ; $num2 < $num_beni_in_mag ; $num2++) {
$quantita = risul_query($beni_in_mag,$num2,'quantita',$tablerelinventario);
$quantita_min_predef = risul_query($beni_in_mag,$num2,'quantita_min_predef',$tablerelinventario);
if ($quantita_min_predef > $quantita) {
$freccia_rossa = " style=\"background-image:url(img/fr_sx_rossa.gif); background-repeat:no-repeat; background-position: left center;\"";
break;
} # fine if ($quantita_min_predef > $quantita) 
} # fine for $num2
echo "<tr><td class=\"t1left\"$freccia_rossa>$idapp</td>
<td><i>".mex("appartamento",'unit.php')."</i></td>
<td>&nbsp;</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td>&nbsp;</td>";
echo "<td><a href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=inventario&amp;idmag=a".urlencode($idapp)."\">".mex("inventario",$pag)."</a></td>";
$opt_app .= "<option value=\"$idapp\">$idapp</option>";
} # fine if ($priv_vedi_inv_app == "s" or...
} # fine for $num1
} # fine if ($priv_vedi_inv_app != "n")

if ($priv_vedi_inv_mag != "n" and $priv_ins_mag != "n") {
if ($mobile_device) $size = "14";
else $size = "18";
echo "<tr><td><input type=\"text\" name=\"n_nome_mag\" size=\"$size\"></td>
<td><i>".mex("magazzino",$pag)."</i></td>
<td><textarea name=\"n_descrizione_mag\" rows=2 cols=35 style=\"white-space: pre; overflow: auto;\"></textarea>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "</td><td><select name=\"n_utente_ins_mag\">$option_utenti</select>";
elseif ($id_utente == 1) echo "<input type=\"hidden\" name=\"n_utente_ins_mag\" value=\"1\">";
echo "</td><td><button class=\"plum\" type=\"submit\" name=\"aggiungi_mag\" value=\"1\"><div>".mex("aggiungi",$pag)."</div></button></td></tr>";
} # fine if ($priv_vedi_inv_mag != "n" and $priv_ins_mag != "n")

echo "</table></div></div></form><br><br>";
} # fine if (($priv_vedi_inv_mag != "n" or $priv_vedi_inv_app != "n") and...

if ($priv_vedi_beni_inv != "n") {

$ordine_inventario = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'ordine_inventario' and idutente = '$id_utente'");
$ordine_inventario = risul_query($ordine_inventario,0,'valpersonalizza');
if ($ordine_inventario == "ins") $ordine_inventario = "idbeniinventario";
else $ordine_inventario = "nome_bene";
$beni_inv = esegui_query("select * from $tablebeniinventario $condizione_beni_propri order by $ordine_inventario");
$num_beni_inv = numlin_query($beni_inv);
$num_beni_inv_passa = "";

if (empty($aggiungi_bene)) $anchor = "<a name=\"tab_beni_inv\"></a>";
else $anchor = "";
echo "$anchor
$frase_tab_beni_inv
<h3 id=\"h_inv\"><span>".mex("Beni inventario",$pag).".</span></h3><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#tab_beni_inv\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
if (empty($modifica_tab_beni_inv)) echo "<input type=\"hidden\" name=\"manda_form_beni\" value=\"SI\">";
else echo "<input type=\"hidden\" name=\"modifica_beni_inv\" value=\"1\">";
echo "<div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td>".mex("Nome",$pag)."</td>
<td class=\"t1top\">".mex("Codice",$pag)."</td>
<td class=\"t1top\">".mex("Descrizione",$pag)."</td>";
if (empty($modifica_tab_beni_inv)) echo "<td class=\"t1top\">".mex("Mancanti",$pag)."</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td class=\"t1top\">".mex("Utente",$pag)."</td>";
if (empty($modifica_tab_beni_inv)) echo "<td class=\"t1top\">".mex("Cancella",$pag)."</td>";
echo "</tr>";

for ($num1 = 0 ; $num1 < $num_beni_inv ; $num1++) {
$idinv = risul_query($beni_inv,$num1,'idbeniinventario');
$nome_bene = (string) risul_query($beni_inv,$num1,'nome_bene');
$codice_bene = (string) risul_query($beni_inv,$num1,'codice_bene');
$descrizione_bene = (string) risul_query($beni_inv,$num1,'descrizione_bene');
$utente_ins_bene = risul_query($beni_inv,$num1,'utente_inserimento');
if (empty($modifica_tab_beni_inv)) {
$descrizione_bene_len = strlen($descrizione_bene);
if ($descrizione_bene_len > 35) $descrizione_bene = "<small>$descrizione_bene</small>";
if ($descrizione_bene_len > 70) $descrizione_bene = "<small>$descrizione_bene</small>";
$mancanti = 0;
$beni_in_mag = esegui_query("select quantita,quantita_min_predef from $tablerelinventario where idbeneinventario = '$idinv' ");
$num_beni_in_mag = numlin_query($beni_in_mag);
if ($num_beni_in_mag) {
$cancella = "&nbsp;";
$quantita_tot = 0;
$quantita_min_predef_tot = 0;
for ($num2 = 0 ; $num2 < $num_beni_in_mag ; $num2++) {
$quantita = risul_query($beni_in_mag,$num2,'quantita');
$quantita_min_predef = risul_query($beni_in_mag,$num2,'quantita_min_predef');
$quantita_tot = $quantita_tot + $quantita;
$quantita_min_predef_tot = $quantita_min_predef_tot + $quantita_min_predef;
} # fine for $num2
if ($quantita_min_predef_tot > $quantita_tot) $mancanti = $quantita_min_predef_tot - $quantita_tot;
} # fine if ($num_beni_in_mag)
elseif ($priv_ins_beni_inv != "n" and ($id_utente == 1 or $id_utente == $utente_ins_bene)) $cancella = "<a href=\"$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;manda_form_beni=SI&amp;elimina_bene=SI&amp;idinv=$idinv#tab_beni_inv\">".mex("cancella",$pag)."</a>";
if ($mancanti <= 0) $colore = "";
else $colore = " style=\"background-color: #CC0000;\"";
$nome_utente_bene = $nomi_utenti[$utente_ins_bene];
} # fine if (empty($modifica_tab_beni_inv))
else {
$num_beni_inv_passa .= ",$idinv";
if ($mobile_device) $size = "14";
else $size = "20";
$nome_bene = "<input type=\"text\" name=\"nome_bene$idinv\" value=\"$nome_bene\" size=\"$size\">";
$codice_bene = "<input type=\"text\" name=\"codice_bene$idinv\" value=\"$codice_bene\" size=\"12\">";
$descrizione_bene = "<textarea name=\"descrizione_bene$idinv\" rows=2 cols=35 style=\"white-space: pre; overflow: auto;\">$descrizione_bene</textarea>";
if ($id_utente == 1 and $num_tutti_utenti > 1) $nome_utente_bene = "<select name=\"utente_bene$idinv\">".str_replace(" value=\"$utente_ins_bene\">"," value=\"$utente_ins_bene\" selected>",$option_utenti)."</select>";
} # fine else if (empty($modifica_tab_beni_inv))
if (!empty($aggiungi_bene) and ($num1 == ($num_beni_inv - 12) or ($num1 == 0 and ($num_beni_inv - 12) < 0))) $anchor = "<a name=\"tab_beni_inv\"></a>";
else $anchor = "";
echo "<tr><td class=\"t1left\">$anchor$nome_bene</td>
<td>$codice_bene</td>
<td>$descrizione_bene</td>";
if (empty($modifica_tab_beni_inv)) echo "<td$colore>$mancanti</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td>$nome_utente_bene</td>";
if (empty($modifica_tab_beni_inv)) echo "<td>$cancella</td>";
echo "</tr>";
} # fine for $num1

if ($priv_ins_beni_inv != "n" and empty($modifica_tab_beni_inv)) {
if (!empty($aggiungi_bene)) $autofocus = " autofocus";
else $autofocus = "";
if ($mobile_device) $size = "14";
else $size = "18";
echo "<tr><td><input type=\"text\" name=\"n_nome_bene\" size=\"$size\"$autofocus></td>
<td><input type=\"text\" name=\"n_codice_bene\" size=\"12\"></td>
<td><textarea name=\"n_descrizione_bene\" rows=2 cols=35 style=\"white-space: pre; overflow: auto;\"></textarea></td>
<td>&nbsp;</td>";
if ($id_utente == 1 and $num_tutti_utenti > 1) echo "<td><select name=\"n_utente_ins_bene\">$option_utenti</select></td>";
echo "<td>".mex("<button class=\"plum\" type=\"submit\" name=\"aggiungi_bene\" value=\"1\"><div>".mex("aggiungi",$pag)."</div></button>",$pag)."</td></tr>";
} # fine if ($priv_ins_beni_inv != "n" and !$modifica_tab_beni_inv)

$a_bottom = "";
echo "</table></div>";
if ($frase_tab_beni_inv) echo "<div style=\"height: 5px;\"></div>$frase_tab_beni_inv";
if (!empty($modifica_tab_beni_inv)) {
echo "<div style=\"text-align: center; padding-top: 6px;\">
<button id=\"inse\" class=\"minv\" type=\"submit\"><div>".mex("Modifica i beni",$pag)."</div></button></div>
<input type=\"hidden\" name=\"num_beni_inv_passa\" value=\"$num_beni_inv_passa\">";
} # fine if (!empty($modifica_tab_beni_inv))
elseif ($num_beni_inv > 30 or ($mobile_device and $num_beni_inv > 12)) $a_bottom = "<a id=\"bott\" name=\"bottom\"><span style=\"display: none;\">".mex("Vai a fondo pagina",'inventario.php')."</span></a>";
echo "</div></form>";

if ($priv_ins_beni_inv != "n" and empty($modifica_tab_beni_inv)) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div style=\"text-align: center; padding-top: 6px;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"modifica_tab_beni_inv\" value=\"1\">
<button class=\"minv\" type=\"submit\"><div>".mex("Modifica i beni già inseriti",$pag)."</div></button>
</div></form>";
} # fine if ($priv_ins_beni_inv != "n" and empty($modifica_tab_beni_inv))

echo "$a_bottom<br>";
} # fine if ($priv_vedi_beni_inv != "n")


if ($opt_app and $priv_ins_beni_in_app != "n" and $priv_vedi_beni_inv != "n" and empty($modifica_tab_beni_inv)) {
if ($priv_ins_beni_in_app != "s") {
if ($priv_vedi_inv_app == $priv_ins_beni_in_app) $app_cons_ins_beni = $appartamenti_consentiti;
else {
if (!function_exists("trova_app_consentiti")) include("./includes/funzioni_appartamenti.php");
if ($priv_ins_beni_in_app != "g") $app_cons_ins_beni = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $app_cons_ins_beni = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
} # fine else if ($priv_vedi_inv_app == $priv_ins_beni_in_app)
} # fine if ($priv_ins_beni_in_app != "s")
$opt_app_a = "";
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if ($priv_vedi_inv_app == "s" or $appartamenti_consentiti[$idapp] != "NO") {
if ($priv_ins_beni_in_app == "s" or $app_cons_ins_beni[$idapp] != "NO") {
$opt_app_a .= "<option value=\"a$idapp\">".mex("dell'appartamento",'unit.php')." $idapp</option>";
} # fine if ($priv_ins_beni_in_app == "s" or...
} # fine if ($priv_vedi_inv_app == "s" or...
} # fine for $num1
if ($opt_app_a) {
echo "<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"inventario\">
<input type=\"hidden\" name=\"importa_inv_app\" value=\"SI\">
".mex("Importa l'invetario",$pag)." <select name=\"app_a\">";
$nomi_tariffe = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != '' order by tariffa_per_app");
$num_regole2 = numlin_query($regole2);
unset($html_opt);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$tariffa_regola2 = risul_query($regole2,$num1,'tariffa_per_app');
$num_tariffa = substr($tariffa_regola2,7);
if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$num_tariffa])) {
$nome_tariffa = risul_query($nomi_tariffe,0,$tariffa_regola2);
if (!$nome_tariffa) $nome_tariffa = mex("tariffa",$pag).substr($tariffa_regola2,7);
$html_opt[$num_tariffa] = "<option value=\"$tariffa_regola2\">".mex("degli appartamenti della tariffa",'unit.php')." $nome_tariffa</option>";
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num1
if ($html_opt) {
ksort($html_opt);
foreach ($html_opt as $val) echo $val;
} # fine if ($html_opt)
echo "$opt_app_a</select>
 ".mex("dall'appartamento",'unit.php')." <select name=\"app_da\">$opt_app</select>
 <button class=\"xinv\" type=\"submit\"><div>".mex("Importa",$pag)."</div></button>
</div></form><br>";
} # fine if ($opt_app_a)
} # fine if ($opt_app and $priv_ins_beni_in_app != "n" and $priv_vedi_beni_inv != "n" and...


} # fine if (!isset($mostra_form_inventario) or $mostra_form_inventario != "NO")

} # fine if ($tipo_tabella == "inventario" and ($priv_vedi_beni_inv != "n" or $priv_vedi_inv_mag != "n" or $priv_vedi_inv_app))





if ($tipo_tabella == "documenti" and $priv_vedi_tab_doc != "n") {

include("./includes/funzioni_contratti.php");
$nomi_contratti = trova_nomi_contratti($max_contr,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,$pag);

function trova_max_contr_salv ($num_contr,$anno_doc,&$dir_salva,&$nome_max_contr,&$suff_file,$nomi_contratti,$tablecontratti) {
global $LIKE;

$max_contr = 0;
$nome_max_contr = "";
$suff_file = "";
if (!$dir_salva) {
$contr_salva = esegui_query("select * from $tablecontratti where tipo = 'dir' and numero = '$num_contr' ");
if (numlin_query($contr_salva)) $dir_salva = formatta_dir_salva_doc(risul_query($contr_salva,0,'testo'));
} # fine if (!$dir_salva)
if ($dir_salva) {
$nome_contr = $nomi_contratti['salv'][$num_contr];
$dati_contr = esegui_query("select * from $tablecontratti where numero = '$num_contr' and tipo $LIKE 'contr%' ");
$tipo_contratto = risul_query($dati_contr,0,'tipo');
if ($tipo_contratto == "contrrtf") $suff_file = "rtf";
if ($tipo_contratto == "contrhtm") $suff_file = "html";
if ($tipo_contratto == "contrtxt") $suff_file = "txt";
$contr_dir = opendir($dir_salva."/");
while ($contr_corr = readdir($contr_dir)) {
if ($contr_corr != "." and $contr_corr != ".." and is_file($dir_salva."/".$contr_corr)) {
if (substr($contr_corr,0,strlen($nome_contr)) == $nome_contr) {
$contr_corr_orig = $contr_corr;
if (substr($contr_corr,-3) == ".gz") $contr_corr = substr($contr_corr,0,-3);
$suff_file_corr = "";
if (substr($contr_corr,-4) == ".rtf") $suff_file_corr = "rtf";
if (substr($contr_corr,-5) == ".html") $suff_file_corr = "html";
if (substr($contr_corr,-4) == ".txt") $suff_file_corr = "txt";
if ($suff_file_corr) {
$resto_nome_contr = substr($contr_corr,strlen($nome_contr));
if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "") {
$anno_doc_corr = substr($resto_nome_contr,1,4);
$n_contr_corr = explode("_",$resto_nome_contr);
$n_contr_corr = $n_contr_corr[2];
if (str_replace(".","",$n_contr_corr) != $n_contr_corr) {
$n_contr_corr = explode(".",$n_contr_corr);
$n_contr_corr = $n_contr_corr[0];
} # fine if (str_replace(".","",$n_contr_corr) != $n_contr_corr)
if (str_replace("-","",$n_contr_corr) != $n_contr_corr) {
$n_contr_corr = explode("-",$n_contr_corr);
$n_contr_corr = $n_contr_corr[1];
} # fine if (str_replace("-","",$n_contr_corr) != $n_contr_corr)
if ($anno_doc_corr == $anno_doc and $n_contr_corr > $max_contr) {
$max_contr = $n_contr_corr;
$nome_max_contr = $contr_corr_orig;
} # fine if ($anno_doc_corr == $anno_doc and $n_contr_corr > $max_contr)
} # fine if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "")
} # fine if ($suff_file_corr)
} # fine if (substr($contr_corr,0,strlen($nome_contr)) == $nome_contr)
} # fine if ($contr_corr != "." and $contr_corr != ".." and...
} # fine while ($fattura_corr = readdir($fatture_dir))
closedir($contr_dir);
if (@is_array($nomi_contratti['num_prog'])) {
$altri_contr_np = $nomi_contratti['num_prog'][$dir_salva."/".$nome_contr];
if (@is_array($altri_contr_np)) {
reset($altri_contr_np);
foreach ($altri_contr_np as $contr_np => $val_contr) {
$nome_contratto_np = explode("/",$contr_np);
$nome_contratto_np = $nome_contratto_np[(count($nome_contratto_np) - 1)];
$dir_salva_np = substr($contr_np,0,(-1 * (strlen($nome_contratto_np) + 1)));
$contr_dir = opendir($dir_salva_np."/");
while ($contr_corr = readdir($contr_dir)) {
if ($contr_corr != "." and $contr_corr != ".." and is_file($dir_salva_np."/".$contr_corr)) {
if (substr($contr_corr,0,strlen($nome_contratto_np)) == $nome_contratto_np) {
$suff_file_corr = "";
if (substr($contr_corr,-4) == ".rtf") $suff_file_corr = "rtf";
if (substr($contr_corr,-5) == ".html") $suff_file_corr = "html";
if (substr($contr_corr,-4) == ".txt") $suff_file_corr = "txt";
if ($suff_file_corr) {
$resto_nome_contr = substr($contr_corr,strlen($nome_contratto_np));
if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "") {
$anno_contr = substr($resto_nome_contr,1,4);
$n_contr_corr = explode("_",$resto_nome_contr);
$n_contr_corr = $n_contr_corr[2];
if (str_replace(".","",$n_contr_corr) != $n_contr_corr) {
$n_contr_corr = explode(".",$n_contr_corr);
$n_contr_corr = $n_contr_corr[0];
} # fine if (str_replace(".","",$n_contr_corr) != $n_contr_corr)
if (str_replace("-","",$n_contr_corr) != $n_contr_corr) {
$n_contr_corr = explode("-",$n_contr_corr);
$n_contr_corr = $n_contr_corr[1];
} # fine if (str_replace("-","",$n_contr_corr) != $n_contr_corr)
if ($anno_contr == $anno_doc and $n_contr_corr > $max_contr) {
$max_contr = $n_contr_corr;
$nome_max_contr = $contr_corr;
} # fine if ($anno_doc_corr == $anno_doc and $n_contr_corr > $max_contr)
} # fine if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "")
} # fine if ($suff_file_corr)
} # fine if (substr($contr_corr,0,strlen($nome_contratto_np)) == $nome_contratto_np)
} # fine if ($contr_corr != "." and $contr_corr != ".." and...
} # fine while ($fattura_corr = readdir($fatture_dir))
closedir($contr_dir);
} # fine foreach ($altri_contr_np as $contr_np => $val_contr)
} # fine if (@is_array($altri_contr_np))
} # fine if (@is_array($nomi_contratti['num_prog']))
} # fine if ($dir_salva)

return $max_contr;

} # fine function trova_max_contr_salv


if (!empty($canc_doc) and $priv_cancella_contratti != "n") {
if (controlla_num_pos($num_contr) == "SI" and $num_doc_canc and controlla_num_pos($num_doc_canc) == "SI" and controlla_anno($anno_doc_canc) == "SI") {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") {
if ($anno_doc_canc == $anno or ($anno_doc_canc == $anno_corrente and !@is_file(C_DATI_PATH."/selectperiodi$anno_corrente.1.php"))) {
$dir_salva = "";
$max_contr_esist = trova_max_contr_salv($num_contr,$anno_doc_canc,$dir_salva,$nome_max_contr,$suff_file,$nomi_contratti,$tablecontratti);
if ($max_contr_esist == $num_doc_canc) {
if (empty($continua)) {
$mostra_tab_doc_salvati = "NO";
echo "
".ucfirst(mex("si è sicuri di voler <b class=\"colred\">cancellare</b> il documento",$pag))." $dir_salva/$nome_max_contr?<br>
<table><tr><td style=\"height: 2px;\"></td></tr><tr><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pagina_prenota$num_contr\" value=\"".htmlspecialchars(${"pagina_prenota".$num_contr})."\">
<input type=\"hidden\" name=\"canc_doc\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr\" value=\"$num_contr\">
<input type=\"hidden\" name=\"anno_doc_canc\" value=\"$anno_doc_canc\">
<input type=\"hidden\" name=\"num_doc_canc\" value=\"$num_doc_canc\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">
<button class=\"cdoc\" type=\"submit\"><div>".mex("SI",$pag)."</div></button>
</div></form></td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"num_contr\" value=\"$num_contr\">
<input type=\"hidden\" name=\"pagina_prenota$num_contr\" value=\"".htmlspecialchars(${"pagina_prenota".$num_contr})."\">
<button class=\"gobk\" type=\"submit\"><div>".mex("NO",$pag)."</div></button>
</div></form></td></tr></table><br>";
} # fine if (empty($continua))
else {
if (unlink("$dir_salva/$nome_max_contr")) {
if (strstr($nome_max_contr,"_1+1_") or strstr($nome_max_contr,"_1+1.")) {
if (substr($nome_max_contr,-3) == ".gz") {
$file_dat = explode(".",substr($nome_max_contr,0,-3));
$agg_suff = 4;
} # fine if (substr($nome_max_contr,-3) == ".gz")
else {
$file_dat = explode(".",$nome_max_contr);
$agg_suff = 1;
} # fine else if (substr($nome_max_contr,-3) == ".gz")
$file_dat = $file_dat[(count($file_dat) - 1)];
$file_dat = substr($nome_max_contr,0,(-1 * (strlen($file_dat) + $agg_suff)));
if (is_file($dir_salva."/".$file_dat.".dat")) unlink($dir_salva."/".$file_dat.".dat");
} # fine if (strstr($nome_max_contr,"_1+1_") or strstr($nome_max_contr,"_1+1."))
echo "<small><b>".ucfirst(mex("documento",$pag))." $num_doc_canc ".mex("cancellato",$pag).".</b><br><br></small>";
} # fine if (unlink("$dir_salva/$nome_max_contr"))
} # fine else if (empty($continua))
} # fine if ($max_contr_esist == $num_doc_canc)

} # fine if ($anno_doc_canc == $anno or...
} # fine if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI")
} # fine if (controlla_num_pos($num_contr) == "SI" and...
} # fine if (!empty($canc_doc) and $priv_cancella_contratti != "n")


if (!empty($upload_doc) and $priv_mod_doc == "s") {
if (controlla_num_pos($num_contr) == "SI" and controlla_anno($anno_doc_upload) == "SI") {
if ($anno_doc_upload == $anno or ($anno_doc_upload == $anno_corrente and !@is_file(C_DATI_PATH."/selectperiodi$anno_corrente.1.php"))) {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") {
if (empty($file_doc_upload)) {
if (!empty($HTTP_POST_FILES['file_doc_upload']['tmp_name'])) $file_doc_upload = $HTTP_POST_FILES['file_doc_upload']['tmp_name'];
elseif (!empty($_FILES['file_doc_upload']['tmp_name'])) $file_doc_upload = $_FILES['file_doc_upload']['tmp_name'];
} # fine if (empty($file_doc_upload))
if (!empty($file_doc_upload)) {
$dir_salva = "";
$max_contr_esist = trova_max_contr_salv($num_contr,$anno_doc_upload,$dir_salva,$nome_max_contr,$suff_file,$nomi_contratti,$tablecontratti);
if ($dir_salva) {
if ($suff_upload == "html" or $suff_upload == "rtf" or $suff_upload == "txt") $suff_file = $suff_upload;
if ($priv_mod_doc_html != "s" and $suff_file == "html") $suff_file = "txt";
$file_tmp = "doc_upload.tmp";
if (move_uploaded_file($file_doc_upload,"$dir_salva/$file_tmp")) {
if (!defined('C_MASSIMO_NUM_BYTE_UPLOAD') or C_MASSIMO_NUM_BYTE_UPLOAD == 0 or filesize("$dir_salva/$file_tmp") <= C_MASSIMO_NUM_BYTE_UPLOAD) {
$n_max_contr = $max_contr_esist + 1;
for ($num1 = strlen($n_max_contr) ; $num1 < 5 ; $num1++) $n_max_contr = "0".$n_max_contr;
if (rename("$dir_salva/$file_tmp","$dir_salva/".$nomi_contratti['salv'][$num_contr]."_$anno_doc_upload"."_$n_max_contr.$suff_file")) echo "<small><b>".ucfirst(mex("documento",$pag))." $n_max_contr ".mex("inviato",$pag).".</b><br><br></small>";
else unlink("$dir_salva/$file_tmp");
} # fine if (!defined("C_MASSIMO_NUM_BYTE_UPLOAD") or...
else unlink("$dir_salva/$file_tmp");
} # fine if (move_uploaded_file($file_doc_upload,"$dir_salva/$file_tmp"))
} # fine if ($dir_salva)
} # fine if (!empty($file_doc_upload))
} # fine if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI")
} # fine if ($anno_doc_upload == $anno or...
} # fine if (controlla_num_pos($num_contr) == "SI" and...
} # fine if (!empty($upload_doc) and $priv_mod_doc == "s")


if (!isset($mostra_tab_doc_salvati) or $mostra_tab_doc_salvati != "NO") {

echo "<h3 id=\"h_doc\"><span>".ucfirst(mex("documenti salvati",$pag)).".</span></h3>";

$num_vedi_in_tab = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'num_righe_tab_doc_salvati' and idutente = '$id_utente'");
$num_vedi_in_tab = risul_query($num_vedi_in_tab,0,'valpersonalizza_num');

$contr_salva = esegui_query("select * from $tablecontratti where tipo = 'dir'");
$num_contr_salva = numlin_query($contr_salva);
if ($priv_mod_prenota_iniziate != "s") $id_periodo_corrente = calcola_id_periodo_corrente($anno);
unset($contratti_visti);

for ($num_c = 0 ; $num_c < $num_contr_salva ; $num_c++) {
$num_contr = risul_query($contr_salva,$num_c,'numero');
$nome_contr = $nomi_contratti['salv'][$num_contr];
$dir_salva = formatta_dir_salva_doc(risul_query($contr_salva,$num_c,'testo'));
$pagina_prenota = fixset(${"pagina_prenota".$num_contr});

if ($dir_salva and ($priv_vedi_tab_doc == "s" or $attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI")) {
if (empty($contratti_visti[$dir_salva."/".$nome_contr])) {
$contratti_visti[$dir_salva."/".$nome_contr] = 1;
$dati_contr = esegui_query("select * from $tablecontratti where numero = '$num_contr' and tipo $LIKE 'contr%' ");
$tipo_contratto = risul_query($dati_contr,0,'tipo');
if ($tipo_contratto == "contrrtf") $suff_file = "rtf";
if ($tipo_contratto == "contrhtm") $suff_file = "html";
if ($tipo_contratto == "contrtxt") $suff_file = "txt";

unset($contratti_salvati);
$num_doc_salvati = 0;
$ultimo_anno = 0;
$contr_dir = opendir($dir_salva."/");
while ($contr_corr = readdir($contr_dir)) {
if ($contr_corr != "." and $contr_corr != ".." and is_file($dir_salva."/".$contr_corr)) {
if (substr($contr_corr,0,strlen($nome_contr)) == $nome_contr) {
$contr_corr_orig = $contr_corr;
if (substr($contr_corr,-3) == ".gz") $contr_corr = substr($contr_corr,0,-3);
$suff_file_corr = "";
if (substr($contr_corr,-4) == ".rtf") $suff_file_corr = "rtf";
if (substr($contr_corr,-5) == ".html") $suff_file_corr = "html";
if (substr($contr_corr,-4) == ".txt") $suff_file_corr = "txt";
if ($suff_file_corr) {
$resto_nome_contr = substr($contr_corr,strlen($nome_contr));
if (substr($resto_nome_contr,0,1) != "_" or substr($resto_nome_contr,5,1) != "_") $anno_doc = "";
else $anno_doc = substr($resto_nome_contr,1,4);
if ($anno_doc == $anno or ($anno_doc == $anno_corrente and !@is_file(C_DATI_PATH."/selectperiodi$anno_corrente.1.php"))) {
if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "") {
$n_contr_corr = explode("_",$resto_nome_contr);
$n_contr_corr = $n_contr_corr[2];
if (substr($n_contr_corr,(-1 * (strlen($suff_file_corr) + 1))) == ".".$suff_file_corr) $n_contr_corr = substr($n_contr_corr,0,(-1 * (strlen($suff_file_corr) + 1)));
$contratti_salvati[$anno_doc][$n_contr_corr] = $contr_corr_orig;
$num_doc_salvati++;
if ($anno_doc > $ultimo_anno) $ultimo_anno = $anno_doc;
} # fine if (preg_replace("/_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+|\+[0-9]+(\+[0-9]+)?)?)*\.$suff_file_corr/","",$resto_nome_contr) == "")
} # fine if (substr($resto_nome_contr,0,6) == $anno or...
} # fine if ($suff_file_corr)
} # fine if (substr($contr_corr,0,strlen($nome_contr)) == $nome_contr)
} # fine if ($contr_corr != "." and $contr_corr != ".." and...
} # fine while ($fattura_corr = readdir($fatture_dir))
closedir($contr_dir);

$stringa_pagine = "";
$stringa_puntini_tab = "";
if ($num_doc_salvati > $num_vedi_in_tab) {
$num_pagine_prenota = ceil($num_doc_salvati/$num_vedi_in_tab);
$stringa_pagine = "<div style=\"text-align: center;\"><small>".mex("pagine",$pag)."</small>:";
if (!$pagina_prenota) $pagina_prenota = $num_pagine_prenota;
for ($num1 = 1 ; $num1 <= $num_pagine_prenota ; $num1++) {
$stringa_pagine .= " ";
if ($num1 != $pagina_prenota) {
$stringa_pagine .= "<a href=\"./$pag?anno=$anno&amp;id_sessione=$id_sessione&amp;tipo_tabella=$tipo_tabella&amp;num_contr=$num_contr&amp;pagina_prenota$num_contr=$num1\">";
} # fine if ($num1 != $pagina_prenota)
else $stringa_pagine .= "<b>";
$stringa_pagine .= $num1;
if ($num1 != $pagina_prenota) $stringa_pagine .= "</a>";
else $stringa_pagine .= "</b>";
} # fine for $num1
$stringa_pagine .= "</div>";
$stringa_puntini_tab = "<tr><td colspan=\"4\">...</td></tr>";
} # fine if ($num_doc_salvati > $num_vedi_in_tab)
else {
$num_pagine_prenota = 1;
$pagina_prenota = 1;
} # fine else if ($num_doc_salvati > $num_vedi_in_tab)

echo "<br><h4>$nome_contr ".mex("in",$pag)." $dir_salva</h4>
$stringa_pagine
<div class=\"tab_cont\">
<table class=\"t1 t1color\" style=\"margin-left: auto; margin-right: auto;\" width=3 border=\"$t1border\" cellspacing=\"$t1cellspacing\" cellpadding=\"$t1cellpadding\">
<tr><td class=\"t1top\">".ucfirst(mex("numero",$pag))."</td>
<td class=\"t1top\">".ucfirst(mex("nome file",$pag))."</td>
<td class=\"t1top\" style=\"min-width: 164px;\">".ucfirst(mex("prenotazioni",$pag))."</td>
<td class=\"t1top\">".ucfirst(mex("azione",$pag))."</td></tr>";
if ($stringa_pagine and $pagina_prenota != 1) echo $stringa_puntini_tab;

if (@is_array($contratti_salvati)) {
$num_doc_in_tab = 0;
ksort($contratti_salvati);
reset($contratti_salvati);
foreach ($contratti_salvati as $anno_doc => $val) {
$contratti_salvati_anno = $contratti_salvati[$anno_doc];
ksort($contratti_salvati_anno);
reset($contratti_salvati_anno);
if ($anno_doc != $anno and ($num_doc_in_tab + 1) > ($num_doc_salvati - (($num_pagine_prenota - $pagina_prenota + 1) * $num_vedi_in_tab)) and ($num_doc_in_tab + 1) <= ($num_doc_salvati - (($num_pagine_prenota - $pagina_prenota) * $num_vedi_in_tab))) echo "<tr><td colspan=\"4\">".ucfirst(mex("anno",$pag))." $anno_doc</td></tr>";
$tab_contr = "";
foreach ($contratti_salvati_anno as $n_contr_corr => $contr_corr) {
$num_doc_in_tab++;
if ($num_pagine_prenota == 1 or ($num_doc_in_tab > ($num_doc_salvati - (($num_pagine_prenota - $pagina_prenota + 1) * $num_vedi_in_tab)) and $num_doc_in_tab <= ($num_doc_salvati - (($num_pagine_prenota - $pagina_prenota) * $num_vedi_in_tab)))) {

$contr_corr_orig = $contr_corr;
$nome_downl = "";
if (substr($contr_corr,-3) == ".gz") $contr_corr = substr($contr_corr,0,-3);
$resto_nome_contr = substr($contr_corr,strlen($nome_contr));
if (substr($contr_corr,-4) == ".rtf") $suff_file_corr = "rtf";
if (substr($contr_corr,-5) == ".html") $suff_file_corr = "html";
if (substr($contr_corr,-4) == ".txt") $suff_file_corr = "txt";
$lista_pren = "";
$tutte_pren = "";
$num_pren_esist = substr($resto_nome_contr,(7 + strlen($n_contr_corr)));
$num_pren_esist = substr($num_pren_esist,0,(-1 * (strlen($suff_file_corr) + 1)));
if (substr($num_pren_esist,0,3) == "1+1") {
# 4 caratteri perche considero l'eventuale _ se ci sono anche i numeri delle prenotazioni nel nome
$num_pren_esist = substr($num_pren_esist,4);
$file_dat_ext = 1;
} # fine if (substr($num_pren_esist,0,3) == "1+1")
else $file_dat_ext = 0;
if ($file_dat_ext and is_file($dir_salva."/".substr($contr_corr,0,(-1 * (strlen($suff_file_corr) + 1))).".dat")) {
$file_dat = file($dir_salva."/".substr($contr_corr,0,(-1 * (strlen($suff_file_corr) + 1))).".dat");
for ($num1 = 0 ; $num1 < count($file_dat) ; $num1++) {
if (!$num_pren_esist and substr($file_dat[$num1],0,3) == "rn:") $num_pren_esist = trim(substr($file_dat[$num1],3));
if (substr($file_dat[$num1],0,3) == "dn:") {
$nome_downl = trim(substr($file_dat[$num1],3));
if (!empty($nomi_contratti['suff'][$num_contr])) $nome_downl .= ".".$nomi_contratti['suff'][$num_contr];
else $nome_downl .= ".$suff_file_corr";
} # fine if (substr($file_dat[$num1],0,3) == "dn:")
} # fine for $num1
} # fine if ($file_dat_ext and !$num_pren_esist and...
if ($num_pren_esist) {
$num_pren_esist = explode("_",$num_pren_esist);
for ($num1 = 0 ; $num1 < count($num_pren_esist) ; $num1++) {
if (strstr($num_pren_esist[$num1],"+")) {
$num_pren_esist2 = explode("+",$num_pren_esist[$num1]);
if (($num_pren_esist2[0] + 1) == $anno and !empty($num_pren_esist2[2])) $num_pren_esist[$num1] = $num_pren_esist2[2];
else {
$lista_pren .= "<small>".$num_pren_esist2[1]."&nbsp;(".$num_pren_esist2[0].")</small>, ";
$num_pren_esist[$num1] = "";
} # fine else if (($num_pren_esist2[0] + 1) == $anno and...
} # fine if (strstr($num_pren_esist[$num1],"+"))
if ($num_pren_esist[$num1]) {
$num_pren_esist2 = explode("-",$num_pren_esist[$num1]);
$fine_for = $num_pren_esist2[(count($num_pren_esist2) - 1)];
for ($num2 = $num_pren_esist2[0] ; $num2 <= $fine_for ; $num2++) {
$link_modifica = "SI";
$prenotazione = esegui_query("select * from $tableprenota where idprenota = '".aggslashdb($num2)."' ");
if (!numlin_query($prenotazione)) $link_modifica = "NO";
else {
$utente_inserimento = risul_query($prenotazione,0,'utente_inserimento');
if ($priv_mod_prenotazioni == "n") $link_modifica = "NO";
if ($priv_mod_prenotazioni == "p" and $utente_inserimento != $id_utente) $link_modifica = "NO";
if ($priv_mod_prenotazioni == "g" and empty($utenti_gruppi[$utente_inserimento])) $link_modifica = "NO";
if ($priv_mod_prenota_iniziate != "s") {
$id_data_inizio = risul_query($prenotazione,0,'iddatainizio');
if ($id_periodo_corrente >= $id_data_inizio) $link_modifica = "NO";
} # fine if ($priv_mod_prenota_iniziate != "s")
if ($priv_mod_prenota_ore != "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = risul_query($prenotazione,0,'datainserimento');
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + (int) $priv_mod_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $link_modifica = "NO";
} # fine if ($priv_mod_prenota_ore != "000")
} # fine else if (!numlin_query($prenotazione))
if ($link_modifica == "SI") {
$link_modifica_inizio = "<a href=\"modifica_prenota.php?id_prenota=$num2&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=documenti\">";
$link_modifica_fine = "</a>";
} # fine if ($link_modifica == "SI")
else {
$link_modifica_inizio = "";
$link_modifica_fine = "";
#$checkbox_modifica = "&nbsp;";
} # fine else if ($link_modifica == "SI")
$lista_pren .= "$link_modifica_inizio$num2$link_modifica_fine, ";
if ($link_modifica_inizio) $tutte_pren .= "$num2,";
} # fine for $num2
} # fine if ($num_pren_esist[$num1])
} # fine for $num1
$lista_pren = substr($lista_pren,0,-2);
$tutte_pren = substr($tutte_pren,0,-1);
if (str_replace(",","",$tutte_pren) != $tutte_pren) {
$lista_pren .= ", <a href=\"modifica_prenota.php?id_prenota=$tutte_pren&amp;anno=$anno&amp;id_sessione=$id_sessione&amp;origine=visualizza_tabelle.php&amp;tipo_tabella=documenti\">".mex("tutte",$pag)."</a>";
} # fine if (str_replace(",","",$tutte_pren) != $tutte_pren)
} # fine if ($num_pren_esist)

$nome_file_contr = $contr_corr_orig;
if (strlen($contr_corr) > 30) $nome_file_contr = "<small>$nome_file_contr</small>";
if (strlen($contr_corr) > 38) $nome_file_contr = "<small>$nome_file_contr</small>";
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") $nome_file_contr = "<a href=\"./visualizza_contratto.php?id_sessione=$id_sessione&amp;anno=$anno&amp;id_transazione=tabdoc&amp;numero_contratto=$num_contr&amp;contr_corr=".urlencode($contr_corr_orig)."\">$nome_file_contr</a>";
if (strcmp($nome_downl,"")) $nome_file_contr .= "<br><small>(<em>".htmlspecialchars($nome_downl)."</em>)</small>";

if ($tab_contr) $tab_contr .= "<td>&nbsp;</td></tr>";
$tab_contr .= "<tr><td>$n_contr_corr</td>
<td>$nome_file_contr</td>
<td>$lista_pren</td>";

} # fine if ($num_pagine_prenota == 1 or...
$ultimo_n_contr = $n_contr_corr;
} # fine foreach ($contratti_salvati_anno as $n_contr_corr => $contr_corr)

$max_contr_esist = trova_max_contr_salv($num_contr,$anno_doc,$dir_salva,$nome_max_contr,$suff_file,$nomi_contratti,$tablecontratti);
if (str_replace("-","",$ultimo_n_contr) != $ultimo_n_contr) {
$ultimo_n_contr = explode("-",$ultimo_n_contr);
$ultimo_n_contr = $ultimo_n_contr[1];
} # fine if (str_replace("-","",$ultimo_n_contr) != $ultimo_n_contr)

if ($tab_contr) {
if (($num_pagine_prenota == 1 or $pagina_prenota == $num_pagine_prenota) and ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") and $ultimo_n_contr == $max_contr_esist and $priv_cancella_contratti != "n") {
$tab_contr .= "<td><form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pagina_prenota$num_contr\" value=\"".htmlspecialchars($pagina_prenota)."\">
<input type=\"hidden\" name=\"canc_doc\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr\" value=\"$num_contr\">
<input type=\"hidden\" name=\"anno_doc_canc\" value=\"$anno_doc\">
<input type=\"hidden\" name=\"num_doc_canc\" value=\"$ultimo_n_contr\">
<button class=\"cncm\" type=\"submit\"><div>".ucfirst(mex("elimina",$pag))."</div></button>
</div></form></td></tr>";
} # fine if (($num_pagine_prenota == 1 or $pagina_prenota == $num_pagine_prenota) and...
else $tab_contr .= "<td>&nbsp;</td></tr>";
} # fine if ($tab_contr)

echo $tab_contr;
if ($stringa_pagine and $pagina_prenota != $num_pagine_prenota and $anno_doc == $ultimo_anno) echo $stringa_puntini_tab;
if ($priv_mod_doc == "s" and ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI")) {
$nuovo_n_contr = $max_contr_esist + 1;
echo "<tr><td colspan=\"4\">
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"900000000\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pagina_prenota$num_contr\" value=\"".htmlspecialchars($pagina_prenota)."\">
<input type=\"hidden\" name=\"upload_doc\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr\" value=\"$num_contr\">
<input type=\"hidden\" name=\"anno_doc_upload\" value=\"$anno_doc\">
".ucfirst(mex("fai l'upload del documento numero",$pag))." $nuovo_n_contr ";
if ($anno != $anno_doc) echo "($anno_doc) ";
$sel_html = "";
$sel_rtf = "";
$sel_txt = "";
${"sel_".$suff_file} = " selected";
echo "<input name=\"file_doc_upload\" type=\"file\">
<select name=\"suff_upload\">";
if ($priv_mod_doc_html == "s") echo "<option value=\"html\"$sel_html>HTML</option>";
echo "<option value=\"txt\"$sel_txt>TXT</option>
<option value=\"rtf\"$sel_rtf>RTF</option>
</select>
<button class=\"uplm\" type=\"submit\"><div>".ucfirst(mex("fai l'upload",$pag))."</div></button>
</div></form></td></tr>";
} # fine if ($priv_mod_doc == "s" and ($attiva_contratti_consentiti == "n" or...
} # fine foreach ($contratti_salvati as $anno_doc => $val)
} # fine if (@is_array($contratti_salvati))

else {
if ($attiva_contratti_consentiti == "n" or $contratti_consentiti_vett[$num_contr] == "SI") {
$anno_doc = $anno;
$max_contr_esist = trova_max_contr_salv($num_contr,$anno_doc,$dir_salva,$nome_max_contr,$suff_file,$nomi_contratti,$tablecontratti);
$nuovo_n_contr = $max_contr_esist + 1;
if ($anno_doc != $anno_corrente and !@is_file(C_DATI_PATH."/selectperiodi$anno_corrente.1.php")) $anno_doc = $anno_corrente;
echo "<tr><td colspan=\"4\">
<form accept-charset=\"utf-8\" enctype=\"multipart/form-data\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"900000000\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"pagina_prenota$num_contr\" value=\"".htmlspecialchars($pagina_prenota)."\">
<input type=\"hidden\" name=\"upload_doc\" value=\"SI\">
<input type=\"hidden\" name=\"num_contr\" value=\"$num_contr\">
<input type=\"hidden\" name=\"anno_doc_upload\" value=\"$anno_doc\">
".ucfirst(mex("fai l'upload del documento numero",$pag))." $nuovo_n_contr ";
if ($anno != $anno_doc) echo "($anno_doc) ";
$sel_html = "";
$sel_rtf = "";
$sel_txt = "";
${"sel_".$suff_file} = " selected";
echo "<div class=\"wsnowrap\">
<input name=\"file_doc_upload\" type=\"file\">
<select name=\"suff_upload\">
<option value=\"html\"$sel_html>HTML</option>
<option value=\"rtf\"$sel_rtf>RTF</option>
<option value=\"txt\"$sel_txt>TXT</option>
</select>
<button class=\"uplm\" type=\"submit\"><div>".ucfirst(mex("fai l'upload",$pag))."</div></button>
</div></div></form></td></tr>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine else if (@is_array($contratti_salvati))

echo "</table></div>
$stringa_pagine";
} # fine if (empty($contratti_visti[$dir_salva."/".$nome_contr]))
} # fine if ($dir_salva and...

} # fine for $num_c

} # fine if (!isset($mostra_tab_doc_salvati) or $mostra_tab_doc_salvati != "NO")


} # fine if ($tipo_tabella == "documenti" and $priv_vedi_tab_doc != "n")





if ($tipo_tabella == "statistiche" and $priv_vedi_tab_stat != "n") {

function genera_istogramma ($x,$nome_x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,$titolo,$titolo_serie,$titolo_col,$commento_col,$colore_col,$colore,$colore_riga,$simbolo_val,$stile_soldi) {

$num_x = count($x);
$num_col = 0;
for ($num1 = 1 ; $num1 <= 8 ; $num1++) {
if (@is_array(${"y".$num1})) $num_col = $num1;
} # fine for $num1
$max = 0;
for ($num1 = 1 ; $num1 <= $num_col ; $num1++) {
for ($num2 = 0 ; $num2 < $num_x ; $num2++) if (fixset(${"y".$num1}[$x[$num2]]) > $max) $max = ${"y".$num1}[$x[$num2]];
} # fine for $num1
$num_col_tot = ($num_x * $num_col);
$width_cols = (($num_col * 20) - 4);
if ($num_x < 3) $width_cols = $width_cols + ($num_col * 10);
if ($num_x < 2) $width_cols = $width_cols + ($num_col * 20);

$istogramma = "<h5>$titolo</h5>
<div class=\"tab_cont\">
<table cellspacing=\"0\" cellpadding=\"0\" style=\"margin-left: auto; margin-right: auto; background-color: $colore; border: 1px solid #000000;\">
<tr><td colspan=\"$num_col_tot\" align=\"center\">
<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"margin-left: auto; margin-right: auto;\">
<tr>";
$linea_tot = "NO";
for ($num1 = 1 ; $num1 <= $num_col ; $num1++) {
$istogramma .= "<td valign=\"middle\" align=\"center\">
<table style=\"width: 15px; height: 9px; border: 1px solid #000000; background-color: ".$colore_col[($num_col - $num1 + 1)].";\"><tr><td></td></tr></table>
</td>
<td valign=\"bottom\"><small style=\"padding: 0px;\"><b>&nbsp;".$titolo_serie[$num1]."</b></small></td>";
if ($num1 != $num_col) $istogramma .= "<td style=\"width: 20px;\"></td>";
if (!empty($titolo_serie['TOT'][$num1])) $linea_tot = "SI";
} # fine for $num1
if ($linea_tot == "SI") {
$istogramma .= "</tr><tr>";
for ($num1 = 1 ; $num1 <= $num_col ; $num1++) {
$istogramma .= "<td colspan=\"2\" valign=\"top\" align=\"center\" style=\"line-height: 0.60em;\">";
if ($titolo_serie['TOT'][$num1]) $istogramma .= "<small><small>(".$titolo_serie["TOT"][$num1]."$simbolo_val)</small></small>";
$istogramma .= "</td>";
$linea_tot = "SI";
if ($num1 != $num_col) $istogramma .= "<td style=\"width: 20px;\"></td>";
} # fine for $num1
} # fine if ($linea_tot == "SI")
$istogramma .= "</tr></table></td></tr>
<tr><td colspan=\"$num_col_tot\" style=\"height: 4px;\"></td></tr><tr>";

for ($num1 = 0 ; $num1 < $num_x ; $num1++) {
for ($num2 = 1 ; $num2 <= $num_col ; $num2++) {
$y = ${"y".$num2};
if (($num2 + 1) > $num_col) {
$y_prox = $y1;
$num1_prox = $num1 + 1;
} # fine if (($num2 + 1) > $num_col)
else {
$y_prox = ${"y".($num2 + 1)};
$num1_prox = $num1;
} # fine else if (($num2 + 1) > $num_col)
if ($max > 0) $altezza = round(200 / $max * $y[$x[$num1]]);
else $altezza = 0;
if ($altezza < 0) $altezza = 2;
$resto_alt = 200 - $altezza;
$cifra_vedi = $y[$x[$num1]];
if (substr(fixstr($cifra_vedi),0,1) == "-") $cifra_vedi = substr($cifra_vedi,1);
if ($cifra_vedi == 0) $cifra_vedi = "";
else {
if (strlen($cifra_vedi) > 3) {
$cifra_vedi = (double) round($cifra_vedi,1);
if (strlen($cifra_vedi) > 3) {
$cifra_vedi = (double) floor($cifra_vedi);
if (strlen($cifra_vedi) > 3) {
$cifra_vedi = (double) $cifra_vedi / 1000;
$cifra_vedi = (floor($cifra_vedi * 10) / 10);
if (strlen($cifra_vedi) > 3) $cifra_vedi = floor($cifra_vedi);
if (strlen($cifra_vedi) > 3) {
$cifra_vedi = (double) $cifra_vedi / 1000;
$cifra_vedi = (floor($cifra_vedi * 10) / 10);
if (strlen($cifra_vedi) > 3) $cifra_vedi = floor($cifra_vedi);
$cifra_vedi .= "M";
} # fine if (strlen($cifra_vedi) > 3)
else $cifra_vedi .= "k";
} # fine if (strlen($cifra_vedi) > 3)
} # fine if (strlen($cifra_vedi) > 3)
} # fine if (strlen($cifra_vedi) > 3)
} # fine else if ($cifra_vedi == 0)
if (substr(fixstr($y[$x[$num1]]),0,1) == "-") $cifra_vedi = "-".$cifra_vedi;
$cifra_vedi = virgola_in_num($cifra_vedi,$stile_soldi);
if (@is_array($commento_col)) $commento_int = $commento_col[$titolo_serie[$num2]][$x[$num1]];
else $commento_int = "";
$titolo_int = $titolo_col[$x[$num1]]." ".$titolo_serie[$num2]."$commento_int: ".punti_in_num($y[$x[$num1]],$stile_soldi).$simbolo_val;
$istogramma .= "<td valign=\"bottom\"><table cellspacing=\"0\" cellpadding=\"0\" style=\"width: 100%; border: none;\">
<tr><td valign=\"bottom\" align=\"center\" style=\"height: $resto_alt"."px;\"><small><small>".$cifra_vedi."</small></small></td></tr>
<tr><td title=\"$titolo_int\" style=\"width: 20px; height: $altezza"."px; background-color: ".$colore_col[($num_col - $num2 + 1)]."; border: 1px solid #000000;";
if ($num1_prox == ($num_x) or $y_prox[$x[($num1_prox)]] >= $y[$x[$num1]]) {
$istogramma .= " border-right: none;";
if ($num2 == $num_col) $bordo_des[$num1] = "NO";
} # fine if ($num1_prox == ($num_x) or...
if (($num1 == 0 and $num2 == 1) or $ultima_y > $y[$x[$num1]]) {
$istogramma .= " border-left: none;";
if ($num2 == 1) $bordo_sin[$num1] = "NO";
} # fine if (($num1 == 0 and $num2 == 1) or...
if ($altezza == 0) $istogramma .= " border-top: none;";
$istogramma .= "\"></td></tr>
</table></td>";
$ultima_y = $y[$x[$num1]];
} # fine for $num2
} # fine for $num1

$istogramma .= "</tr><tr style=\"text-align: center; background-color: $colore_riga;\">";
for ($num1 = 0 ; $num1 < $num_x ; $num1++) {
$istogramma .= "<td colspan=\"$num_col\" valign=\"middle\" style=\"width: $width_cols"."px; padding: 2px; line-height: 0.75em;";
if (!isset($bordo_sin[$num1]) or $bordo_sin[$num1] != "NO" or !isset($bordo_des[$num1]) or $bordo_des[$num1] != "NO") {
if (!isset($bordo_sin[$num1]) or $bordo_sin[$num1] != "NO") $istogramma .= " border-left: 1px solid #000000;";
if (!isset($bordo_des[$num1]) or $bordo_des[$num1] != "NO") $istogramma .= " border-right: 1px solid #000000;";
} # fine if ($bordo_sin[$num1] != "NO" or...
$tag_aper = "<small><b>";
$tag_chiu = "</b></small>";
if (strlen($x[$num1]) > 5) {
$tag_aper = "<small><small><b>";
$tag_chiu = "</b></small></small>";
} # fine if (strlen($x[$num1]) > 5)
if (strlen($x[$num1]) > 10) {
$tag_aper = "<small><small>";
$tag_chiu = "</small></small>";
} # fine if (strlen($x[$num1]) > 10)
$istogramma .= "\">$tag_aper".$nome_x[$num1]."$tag_chiu</td>";
} # fine for $num1
$istogramma .= "</tr></table></div>";

return $istogramma;

} # fine function genera_istogramma


function genera_statistiche (&$entrate_ins_mese,&$num_prenota_ins_mese,&$entrate_prog_ins_mese,&$num_prenota_prog_ins_mese,&$percent_occupazione,&$entrate_mese,&$num_prenota_mese,&$num_origine,&$entrate_origine,&$percent_num_origine,&$percent_entrate_origine,&$num_nazionalita,&$entrate_nazionalita,&$percent_num_nazionalita,&$percent_entrate_nazionalita,&$app_occupati,&$prezzo_medio_prenota,&$revpar,&$revpar_ca,&$pagamenti,&$nazionalita_mese,&$num_giorni_mese,$anno_stat,$mesi,$date_ins,$prezzi,$appartamenti_sel,$condizione_prenota_proprie,$PHPR_TAB_PRE) {
global $LIKE,$ILIKE;

$tableprenota_stat = $PHPR_TAB_PRE."prenota".$anno_stat;
$tablecostiprenota_stat = $PHPR_TAB_PRE."costiprenota".$anno_stat;
$tableperiodi_stat = $PHPR_TAB_PRE."periodi".$anno_stat;
$tablesoldi_stat = $PHPR_TAB_PRE."soldi".$anno_stat;
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";

$num_giorni_mese[$anno_stat][1] = 31;
if (date("n",mktime(0,0,0,2,29,$anno_stat)) == "2") $num_giorni_mese[$anno_stat][2] = 29;
else $num_giorni_mese[$anno_stat][2] = 28;
$num_giorni_mese[$anno_stat][3] = 31;
$num_giorni_mese[$anno_stat][4] = 30;
$num_giorni_mese[$anno_stat][5] = 31;
$num_giorni_mese[$anno_stat][6] = 30;
$num_giorni_mese[$anno_stat][7] = 31;
$num_giorni_mese[$anno_stat][8] = 31;
$num_giorni_mese[$anno_stat][9] = 30;
$num_giorni_mese[$anno_stat][10] = 31;
$num_giorni_mese[$anno_stat][11] = 30;
$num_giorni_mese[$anno_stat][12] = 31;

if (strcmp((string) $appartamenti_sel,"")) {
$appartamenti_sel = explode(",",$appartamenti_sel);
$num_appartamenti_sel = count($appartamenti_sel);
for ($num1 = 0 ; $num1 < $num_appartamenti_sel ; $num1++) {
if ($num1 == 0) $cond_app = " where (";
else $cond_app .= " or ";
$cond_app .= "$tableprenota_stat.idappartamenti = '".aggslashdb($appartamenti_sel[$num1])."'";
} # fine for $num1
$cond_app .= ")";
} # fine if (strcmp((string) $appartamenti_sel,""))
else $cond_app = "";

if (!empty($date_ins['ini']) or !empty($date_ins['fine'])) {
if ($cond_app) $cond_ins = " and (";
else $cond_ins = " where (";
if ($date_ins['ini']) $cond_ins .= "$tableprenota_stat.datainserimento >= '$anno_stat".$date_ins['ini']." 00:00:00'";
if ($date_ins['ini'] and $date_ins['fine']) $cond_ins .= " and ";
if ($date_ins['fine']) $cond_ins .= "$tableprenota_stat.datainserimento <= '$anno_stat".$date_ins['fine']." 23:59:59'";
$cond_ins .= ")";
} # fine if (!empty($date_ins['ini']) or !empty($date_ins['fine']))
else $cond_ins = "";

if ($condizione_prenota_proprie) {
$condizione_prenota_proprie = str_replace("utente_inserimento","$tableprenota_stat.utente_inserimento",$condizione_prenota_proprie);
if ($cond_app or $cond_ins) $condizione_prenota_proprie = " and".$condizione_prenota_proprie;
else $condizione_prenota_proprie = " where".$condizione_prenota_proprie;
} # fine if ($condizione_prenota_proprie)

$appartamenti = esegui_query("select idappartamenti from $tableappartamenti".str_replace("$tableprenota_stat.idappartamenti = '","idappartamenti = '",$cond_app)." order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
$periodi = esegui_query("select idperiodi,datainizio,datafine from $tableperiodi_stat order by idperiodi ");
$num_periodi = numlin_query($periodi);
for ($num1 = 0 ; $num1 < $num_periodi ; $num1++) {
$idper = risul_query($periodi,$num1,'idperiodi');
$datainizio[$idper] = risul_query($periodi,$num1,'datainizio');
$datafine[$idper] = risul_query($periodi,$num1,'datafine');
$anno_inizio = (integer) substr($datainizio[$idper],0,4);
$mese_inizio = (integer) substr($datainizio[$idper],5,2);
if (!isset($num_periodi_mese[$anno_inizio][$mese_inizio])) $num_periodi_mese[$anno_inizio][$mese_inizio] = 0;
$num_periodi_mese[$anno_inizio][$mese_inizio]++;
} # fine for $num1
$tutte_prenota = esegui_query("select distinct $tableprenota_stat.idprenota,$tableprenota_stat.iddatainizio,$tableprenota_stat.iddatafine,$tableprenota_stat.datainserimento,$tableprenota_stat.num_persone,$tableprenota_stat.tariffa,$tableprenota_stat.sconto,$tableprenota_stat.tariffa_tot,$tableprenota_stat.tariffesettimanali,$tableprenota_stat.caparra,$tableprenota_stat.commissioni,$tableprenota_stat.tasseperc,$tableprenota_stat.origine,$tableclienti.nazionalita from $tableprenota_stat inner join $tableclienti on $tableprenota_stat.idclienti = $tableclienti.idclienti$cond_app$cond_ins$condizione_prenota_proprie");
$num_tutte_prenota = numlin_query($tutte_prenota);
$entrate_mese[$anno_stat][1] = 0;
$num_prenota_mese[$anno_stat][1] = 0;
for ($num1 = 0 ; $num1 < $num_tutte_prenota ; $num1++) {
$id_prenota = risul_query($tutte_prenota,$num1,'idprenota',$tableprenota_stat);
$id_data_inizio = risul_query($tutte_prenota,$num1,'iddatainizio',$tableprenota_stat);
$id_data_fine = risul_query($tutte_prenota,$num1,'iddatafine',$tableprenota_stat);
$num_sett = $id_data_fine - $id_data_inizio + 1;
$data_inserimento = risul_query($tutte_prenota,$num1,'datainserimento',$tableprenota_stat);
$tariffa = explode("#@&",(string) risul_query($tutte_prenota,$num1,'tariffa',$tableprenota_stat));
$sconto = risul_query($tutte_prenota,$num1,'sconto',$tableprenota_stat);
if ((double) $sconto > (double) fix_set($tariffa[1])) $sconto = $tariffa[1];
$prezzo_tariffa = (double) $tariffa[1];
$tariffa_tot = risul_query($tutte_prenota,$num1,'tariffa_tot',$tableprenota_stat);
$tariffe_settimanali_int = (string) risul_query($tutte_prenota,$num1,'tariffesettimanali',$tableprenota_stat);
$tariffe_settimanali = explode(";",$tariffe_settimanali_int);
$tariffe_settimanali = explode(",",$tariffe_settimanali[0]);

if (!$prezzi['commissioni']) {
$commissioni = (double) risul_query($tutte_prenota,$num1,'commissioni',$tableprenota_stat);
if ($commissioni > 0) {
$tariffa_tot = (double) $tariffa_tot - (double) $commissioni;
$prezzo_tariffa = (double) $prezzo_tariffa - (double) $commissioni;
$commissioni_sett = round(((double) $commissioni / ($id_data_fine - $id_data_inizio + 1)),2);
for ($num2 = 0 ; $num2 < count($tariffe_settimanali) ; $num2++) $tariffe_settimanali[$num2] = (double) $tariffe_settimanali[$num2] - (double) $commissioni_sett;
$resto_arr = (double) $commissioni - ((double) $commissioni_sett * ($id_data_fine - $id_data_inizio + 1));
$tariffe_settimanali[0] = (double) $tariffe_settimanali[0] - (double) $resto_arr;
} # fine if ($commissioni > 0)
} # fine if (!$prezzi['commissioni'])
if (!$prezzi['tasse']) {
$tasse_tot = 0;
$tasse_perc = (double) risul_query($tutte_prenota,$num1,'tasseperc',$tableprenota_stat);
$caparra = (double) risul_query($tutte_prenota,$num1,'caparra',$tableprenota_stat);
$numpersone = risul_query($tutte_prenota,$num1,'num_persone',$tableprenota_stat);
if ($tasse_perc) {
$tasse = (((double) $tariffa[1] - (double) $sconto) / ($tasse_perc + 100)) * $tasse_perc;
$tasse = $tasse / (double) $prezzi['tasse_arrotond'];
$tasse = round($tasse);
$tasse = $tasse * (double) $prezzi['tasse_arrotond'];
$tasse_tot = (double) $tasse_tot + $tasse;
} # fine if ($tasse_perc)
$prezzo_tariffa = (double) $prezzo_tariffa - (double) $tasse_tot;
$tasse_sett = round(((double) $tasse_tot / ($id_data_fine - $id_data_inizio + 1)),2);
for ($num2 = 0 ; $num2 < count($tariffe_settimanali) ; $num2++) $tariffe_settimanali[$num2] = (double) $tariffe_settimanali[$num2] - (double) $tasse_sett;
$resto_arr = (double) $tasse_tot - ((double) $tasse_sett * ($id_data_fine - $id_data_inizio + 1));
$tariffe_settimanali[0] = (double) $tariffe_settimanali[0] - (double) $resto_arr;
$dati_cap = dati_costi_agg_prenota($tablecostiprenota_stat,$id_prenota);
$costo_agg_tot = 0;
$costo_escludi_perc = 0;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$tariffa[1],$tariffe_settimanali_int,((double) $tariffa[1] + $costo_agg_tot - (double) $sconto),$caparra,$numpersone,$dati_cap[$numca]['cat_pers'],0,$costo_escludi_perc);
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + $costo_agg_parziale;
if ($dati_cap[$numca]['tasseperc']) {
if ($dati_cap[$numca]['tasseperc'] == -1) $tasse_ca = (double) $costo_agg_parziale;
else {
$tasse_ca = ($costo_agg_parziale / (double) ($dati_cap[$numca]['tasseperc'] + 100)) * (double) $dati_cap[$numca]['tasseperc'];
$tasse_ca = $tasse_ca / $prezzi['tasse_arrotond'];
$tasse_ca = round($tasse_ca);
$tasse_ca = $tasse_ca * (double) $prezzi['tasse_arrotond'];
} # fine else if ($dati_cap[$numca]['tasseperc'] == -1)
$tasse_tot = (double) $tasse_tot + (double) $tasse_ca;
} # fine if ($dati_cap[$numca]['tasseperc'])
} # fine for $numca
$tariffa_tot = (double) $tariffa_tot - (double) $tasse_tot;
} # fine if (!$prezzi['tasse'])

$val_medio_costi_agg_e_sconto_per_sett = round((((double) $tariffa_tot - (double) $prezzo_tariffa) / (double) $num_sett),2);
$val_medio_sconto_per_sett = round(((double) $sconto  / (double) $num_sett),2);
$origine = risul_query($tutte_prenota,$num1,'origine',$tableprenota_stat);
$nazionalita = risul_query($tutte_prenota,$num1,'nazionalita',$tableprenota_stat);
$anno_ins = (integer) substr($data_inserimento,0,4);
$mese_ins = (integer) substr($data_inserimento,5,2);
if (substr(fixstr($datainizio[$id_data_inizio]),0,4) == $anno_stat) {
if ($anno_ins < $anno_stat) {
$anno_ins = (integer) $anno_stat;
$mese_ins = (integer) 0;
} # fine if ($anno_ins < $anno_stat)
$entrate_ins_mese[$anno_ins][$mese_ins] = (double) fixset($entrate_ins_mese[$anno_ins][$mese_ins]) + (double) $tariffa_tot;
if (!isset($num_prenota_ins_mese[$anno_ins][$mese_ins])) $num_prenota_ins_mese[$anno_ins][$mese_ins] = 0;
$num_prenota_ins_mese[$anno_ins][$mese_ins]++;
} # fine if (substr($datainizio[$id_data_inizio],0,4) == $anno_stat)
$ultimo_mese_inizio = "";
for ($num2 = $id_data_inizio ; $num2 <= $id_data_fine ; $num2++) {
$anno_inizio = (integer) substr(fixstr($datainizio[$num2]),0,4);
$mese_inizio = (integer) substr(fixstr($datainizio[$num2]),5,2);
if (!isset($app_occupati[$anno_inizio][$mese_inizio])) $app_occupati[$anno_inizio][$mese_inizio] = 0;
$app_occupati[$anno_inizio][$mese_inizio]++;
$entrate_mese[$anno_inizio][$mese_inizio] = (double) fixset($entrate_mese[$anno_inizio][$mese_inizio]) + (double) fixset($tariffe_settimanali[($num2 - $id_data_inizio)]) + (double) $val_medio_costi_agg_e_sconto_per_sett;
$entrate_mese_no_ca[$anno_inizio][$mese_inizio] = (double) fixset($entrate_mese_no_ca[$anno_inizio][$mese_inizio]) + (double) fixset($tariffe_settimanali[($num2 - $id_data_inizio)]) - (double) $val_medio_sconto_per_sett;
if ($mese_inizio != $ultimo_mese_inizio) {
if (!isset($num_prenota_mese[$anno_inizio][$mese_inizio])) $num_prenota_mese[$anno_inizio][$mese_inizio] = 0;
$num_prenota_mese[$anno_inizio][$mese_inizio]++;
} # fine if ($mese_inizio != $ultimo_mese_inizio)
$ultimo_mese_inizio = $mese_inizio;
} # fine for $num2
$anno_inizio = (integer) substr(fixstr($datainizio[$id_data_inizio]),0,4);
$mese_inizio = (integer) substr(fixstr($datainizio[$id_data_inizio]),5,2);
if (!empty($mesi[$mese_inizio])) {
if (!isset($num_prenota_mese[$anno_inizio]['TOT'])) $num_prenota_mese[$anno_inizio]['TOT'] = 0;
$num_prenota_mese[$anno_inizio]['TOT']++;
if ($origine != "") {
if (!isset($num_origine[$anno_inizio][$origine])) $num_origine[$anno_inizio][$origine] = 0;
$num_origine[$anno_inizio][$origine]++;
$entrate_origine[$anno_inizio][$origine] = (double) fixset($entrate_origine[$anno_inizio][$origine]) + (double) $tariffa_tot;
} # fine if ($origine != "")
if ($nazionalita != "") {
if (!isset($num_nazionalita[$anno_inizio][$nazionalita])) $num_nazionalita[$anno_inizio][$nazionalita] = 0;
$num_nazionalita[$anno_inizio][$nazionalita]++;
$entrate_nazionalita[$anno_inizio][$nazionalita] = (double) fixset($entrate_nazionalita[$anno_inizio][$nazionalita]) + (double) $tariffa_tot;
} # fine if ($nazionalita != "")
$pagamenti_p = esegui_query("select metodo_pagamento,saldo_prenota from $tablesoldi_stat where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota' order by data_inserimento");
$num_pagamenti_p = numlin_query($pagamenti_p);
for ($num2 = 0 ; $num2 < $num_pagamenti_p ; $num2++) {
$metodo_pagamento = risul_query($pagamenti_p,$num2,'metodo_pagamento');
$saldo_prenota = risul_query($pagamenti_p,$num2,'saldo_prenota');
if ($metodo_pagamento) $pagamenti[$anno_inizio][$metodo_pagamento] = (double) fixset($pagamenti[$anno_inizio][$metodo_pagamento]) + (double) $saldo_prenota;
} # fine for $num2
} # fine if (!empty($mesi[$mese_inizio]))
} # fine for $num1

$percent_occupazione[$anno_stat]['TOT'] = 0;
$revpar[$anno_stat]['TOT'] = 0;
$revpar_ca[$anno_stat]['TOT'] = 0;
$entrate_mese[$anno_stat]['TOT'] = 0;
$entrate_mese_no_ca[$anno_stat]['TOT'] = 0;
$app_occupati[$anno_stat]['TOT'] = 0;
$num_mesi_media = 0;
$num_giorni_revpar = 0;
$num_giorni_revpar_ca = 0;
$entrate_prog_ins_mese[$anno_stat][0] = (double) fixset($entrate_ins_mese[$anno_stat][0]);
$num_prenota_prog_ins_mese[$anno_stat][0] = fixset($num_prenota_ins_mese[$anno_stat][0]);
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
$entrate_prog_ins_mese[$anno_stat][$num1] = (double) $entrate_prog_ins_mese[$anno_stat][($num1 - 1)] + (double) fixset($entrate_ins_mese[$anno_stat][$num1]);
$num_prenota_prog_ins_mese[$anno_stat][$num1] = $num_prenota_prog_ins_mese[$anno_stat][($num1 - 1)] + fixset($num_prenota_ins_mese[$anno_stat][$num1]);
if (empty($app_occupati[$anno_stat][$num1]) or empty($num_periodi_mese[$anno_stat][$num1]) or !$num_appartamenti) $percent_occupazione[$anno_stat][$num1] = 0;
else $percent_occupazione[$anno_stat][$num1] = round(($app_occupati[$anno_stat][$num1] / ($num_appartamenti * $num_periodi_mese[$anno_stat][$num1]) * 100),1);
if ($mesi[$num1]) {
$percent_occupazione[$anno_stat]['TOT'] = (double) $percent_occupazione[$anno_stat]['TOT'] + (double) $percent_occupazione[$anno_stat][$num1];
$num_mesi_media++;
if ($num_appartamenti) {
$revpar[$anno_stat][$num1] = round(((double) fixset($entrate_mese_no_ca[$anno_stat][$num1]) / ((double) $num_appartamenti * (double) $num_giorni_mese[$anno_stat][$num1])),2);
$revpar_ca[$anno_stat][$num1] = round(((double) fixset($entrate_mese[$anno_stat][$num1]) / ((double) $num_appartamenti * (double) $num_giorni_mese[$anno_stat][$num1])),2);
} # fine if ($num_appartamenti)
$entrate_mese[$anno_stat]['TOT'] = (double) $entrate_mese[$anno_stat]['TOT'] + (double) $entrate_mese[$anno_stat][$num1];
$entrate_mese_no_ca[$anno_stat]['TOT'] = (double) $entrate_mese_no_ca[$anno_stat]['TOT'] + (double) $entrate_mese_no_ca[$anno_stat][$num1];
$app_occupati[$anno_stat]['TOT'] = (double) $app_occupati[$anno_stat]['TOT'] + (double) fixset($app_occupati[$anno_stat][$num1]);
$num_giorni_revpar = $num_giorni_revpar + $num_giorni_mese[$anno_stat][$num1];
$num_giorni_revpar_ca = $num_giorni_revpar_ca + $num_giorni_mese[$anno_stat][$num1];
if ($app_occupati[$anno_stat][$num1]) $prezzo_medio_prenota[$anno_stat][$num1] = (double) fixset($entrate_mese[$anno_stat][$num1]) / (double) fixset($app_occupati[$anno_stat][$num1]);
else $prezzo_medio_prenota[$anno_stat][$num1] = (double) 0;
} # fine if ($mesi[$num1])
} # fine for $num1
if ($num_mesi_media) $percent_occupazione[$anno_stat]['TOT'] = round(((double) $percent_occupazione[$anno_stat]['TOT'] / (double) $num_mesi_media),1);
if ($num_giorni_revpar and $num_appartamenti) $revpar[$anno_stat]['TOT'] = round(((double) $entrate_mese_no_ca[$anno_stat]['TOT'] / ((double) $num_appartamenti * (double) $num_giorni_revpar)),2);
if ($num_giorni_revpar_ca and $num_appartamenti) $revpar_ca[$anno_stat]['TOT'] = round(((double) $entrate_mese[$anno_stat]['TOT'] / ((double) $num_appartamenti * (double) $num_giorni_revpar_ca)),2);
if ($app_occupati[$anno_stat]['TOT']) $prezzo_medio_prenota[$anno_stat]['TOT'] = (double) $entrate_mese[$anno_stat]['TOT'] / (double) $app_occupati[$anno_stat]['TOT'];

if (@is_array($num_origine)) {
$num_origine_anno = $num_origine[$anno_stat];
if (@is_array($num_origine_anno)) {
reset($num_origine_anno);
foreach ($num_origine_anno as $orig => $val) {
if (!$val or !$num_prenota_mese[$anno_stat]['TOT']) $percent_num_origine[$anno_stat][$orig] = 0;
else $percent_num_origine[$anno_stat][$orig] = round(((double) $val / (double) $num_prenota_mese[$anno_stat]['TOT'] * 100),1);
if (!$entrate_origine[$anno_stat][$orig] or !$entrate_mese[$anno_stat]['TOT']) $percent_entrate_origine[$anno_stat][$orig] = 0;
else $percent_entrate_origine[$anno_stat][$orig] = round(((double) $entrate_origine[$anno_stat][$orig] / (double) $entrate_mese[$anno_stat]['TOT'] * 100),1);
} # fine foreach ($num_origine_anno as $orig => $val)
} # fine if (@is_array($num_origine_anno))
} # fine if (@is_array($num_origine))

if (@is_array($num_nazionalita)) {
$num_nazionalita_anno = $num_nazionalita[$anno_stat];
if (@is_array($num_nazionalita_anno)) {
reset($num_nazionalita_anno);
foreach ($num_nazionalita_anno as $nazion => $val) {
if (!$val or !$num_prenota_mese[$anno_stat]['TOT']) $percent_num_nazionalita[$anno_stat][$nazion] = 0;
else $percent_num_nazionalita[$anno_stat][$nazion] = round(((double) $val / (double) $num_prenota_mese[$anno_stat]['TOT'] * 100),1);
if (!$entrate_nazionalita[$anno_stat][$nazion] or !$entrate_mese[$anno_stat]['TOT']) $percent_entrate_nazionalita[$anno_stat][$nazion] = 0;
else $percent_entrate_nazionalita[$anno_stat][$nazion] = round(((double) $entrate_nazionalita[$anno_stat][$nazion] / (double) $entrate_mese[$anno_stat]['TOT'] * 100),1);
} # fine foreach ($num_nazionalita_anno as $nazion => $val)
} # fine if (@is_array($num_nazionalita_anno))
} # fine if (@is_array($num_nazionalita))

} # fine function genera_statistiche


$option_tariffe = "";
unset($option_tariffe_vett);
$appartamenti_sel = "";
if (!isset($tariffa_per_app)) $tariffa_per_app = null;
$nomi_tariffe = esegui_query("select * from $tablenometariffe where idntariffe = '1' ");
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != '' order by tariffa_per_app");
$num_regole2 = numlin_query($regole2);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$tariffa_regola2 = risul_query($regole2,$num1,'tariffa_per_app');
$num_tariffa = substr($tariffa_regola2,7);
if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$num_tariffa])) {
$nome_tariffa = risul_query($nomi_tariffe,0,$tariffa_regola2);
if (!$nome_tariffa) $nome_tariffa = mex("tariffa",$pag).substr($tariffa_regola2,7);
if ($tariffa_per_app == $tariffa_regola2) {
$nome_tariffa_trovata = $nome_tariffa;
$appartamenti_sel = (string) risul_query($regole2,$num1,'motivazione');
$sel = " selected";
} # fine if ($tariffa_per_app == $tariffa_regola2)
else $sel = "";
$option_tariffe_vett[$num_tariffa] = "<option value=\"$tariffa_regola2\"$sel>".mex("appartamenti della tariffa",'unit.php')." $nome_tariffa</option>";
} # fine if ($attiva_tariffe_consentite == "n" or...
} # fine for $num1
if (!empty($option_tariffe_vett)) {
ksort($option_tariffe_vett);
foreach ($option_tariffe_vett as $val) $option_tariffe .= $val;
} # fine if (!empty($option_tariffe_vett))

if ($priv_vedi_tab_stat != "s") {
if (!function_exists('trova_app_consentiti')) include("./includes/funzioni_appartamenti.php");
$appartamenti = esegui_query("select idappartamenti from $tableappartamenti order by idappartamenti");
$num_appartamenti = numlin_query($appartamenti);
if ($priv_vedi_tab_stat != "r" and $priv_vedi_tab_stat != "g") $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite,$regole1_consentite,$priv_mod_assegnazione_app,$priv_mod_prenotazioni,$priv_ins_assegnazione_app,$priv_ins_nuove_prenota,$attiva_tariffe_consentite,$tariffe_consentite_vett,$id_utente,$tableregole,$tablenometariffe);
else $appartamenti_consentiti = trova_app_consentiti($appartamenti,$num_appartamenti,$attiva_regole1_consentite_gr,$regole1_consentite_gr,$priv_mod_assegnazione_app_gr,$priv_mod_prenotazioni_gr,$priv_ins_assegnazione_app_gr,$priv_ins_nuove_prenota_gr,$attiva_tariffe_consentite_gr,$tariffe_consentite_vett_gr,$id_utente,$tableregole,$tablenometariffe);
$lista_tutti_app_cons = "";
$lista_app_cons = "";
for ($num1 = 0 ; $num1 < $num_appartamenti ; $num1 = $num1 + 1) {
$idappartamenti = risul_query($appartamenti,$num1,'idappartamenti');
if ($appartamenti_consentiti[$idappartamenti] != "NO") {
$lista_tutti_app_cons .= $idappartamenti.",";
if ($appartamenti_sel or str_replace(",$idappartamenti,","",",$appartamenti_sel,") != ",$appartamenti_sel,") $lista_app_cons .= $idappartamenti.",";
} # fine if ($appartamenti_consentiti[$idappartamenti] != "NO")
} # fine for $num1
$lista_tutti_app_cons = substr($lista_tutti_app_cons,0,-1);
$lista_app_cons = substr($lista_app_cons,0,-1);
if ($lista_app_cons) $appartamenti_sel = $lista_app_cons;
else {
$tariffa_per_app = "";
$appartamenti_sel = $lista_tutti_app_cons;
$option_tariffe = str_replace(" selected>",">",$option_tariffe);
$nome_tariffa_trovata = "";
} # fine else if ($lista_app_cons)
if (!$appartamenti_sel) $appartamenti_sel = ",";
} # fine if ($priv_vedi_tab_stat != "s")

$anni_attivati = array();
if ($id_utente != 1) {
$privilegi_annuali_ut = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno != '1' ");
$num_priv_annuali_ut = numlin_query($privilegi_annuali_ut);
for ($num1 = 0 ; $num1 < $num_priv_annuali_ut ; $num1++) {
$anno_corr = risul_query($privilegi_annuali_ut,$num1,'anno');
$priv_vedi_tab_corr = risul_query($privilegi_annuali_ut,$num1,'priv_vedi_tab');
$priv_vedi_tab_stat_corr = substr($priv_vedi_tab_corr,6,1);
if ($priv_vedi_tab_stat_corr == "s" or $priv_vedi_tab_stat_corr == $priv_vedi_tab_stat or ($priv_vedi_tab_stat_corr == "g" and $priv_vedi_tab_stat != "s") or ($priv_vedi_tab_stat == "p" and $priv_vedi_tab_stat_corr != "n")) $anni_attivati[$anno_corr] = 1;
} # fine for $num1
} # fine if ($id_utente != 1)

unset($anni);
$anni_q = esegui_query("select * from $tableanni order by idanni");
$num_anni = numlin_query($anni_q);
$anno_sel = "NO";
$num_a = 0;
$num_sel = 0;
$max_col = 8;
$anni_sel_passa = "";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_corr = risul_query($anni_q,$num1,'idanni');
if ($num1 == 0) $anni_sel_passa = $anno_corr;
if ($num1 == ($num_anni - 1)) $anni_sel_passa .= "-$anno_corr";
if ($id_utente == 1 or !empty($anni_attivati[$anno_corr])) {
$anni[$num_a] = $anno_corr;
if (!empty(${"anno_sel".$anni[$num_a]})) {
$anno_sel = "SI";
$num_sel++;
if ($num_sel > $max_col) unset(${"anno_sel$anno_corr"});
} # fine if (!empty(${"anno_sel".$anni[$num_a]}))
$num_a++;
} # fine if ($id_utente == 1 or !empty($anni_attivati[$anno_corr]))
else unset(${"anno_sel$anno_corr"});
} # fine for $num1
$num_anni = $num_a;
if ($anno_sel != "SI") {
${"anno_sel".$anni[($num_anni - 1)]} = "SI";
if ($num_a > 1) ${"anno_sel".$anni[($num_anni - 2)]} = "SI";
} # fine if ($anno_sel != "SI")

unset($mesi);
$mese_sel = "NO";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) if (!empty(${"mese_sel".$num1})) $mese_sel = "SI";
if ($mese_sel != "SI") {
for ($num1 = 1 ; $num1 <= 12 ; $num1++) ${"mese_sel".$num1} = "SI";
} # fine if ($mese_sel != "SI")
for ($num1 = 1 ; $num1 <= 12 ; $num1++) if (!empty(${"mese_sel".$num1})) $mesi[$num1] = "SI";
$nome_mese = array("",mex("Gen","inizio.php"),mex("Feb","inizio.php"),mex("Mar","inizio.php"),mex("Apr","inizio.php"),mex("Mag","inizio.php"),mex("Giu","inizio.php"),mex("Lug","inizio.php"),mex("Ago","inizio.php"),mex("Set","inizio.php"),mex("Ott","inizio.php"),mex("Nov","inizio.php"),mex("Dic","inizio.php"));

unset($date_ins);
$gio_mesi_sbagliati = 0;
if (isset($gio_ini_ins) and isset($mese_ini_ins) and strcmp("$gio_ini_ins$mese_ini_ins","")) {
if ($mese_ini_ins < 1 or $mese_ini_ins > 12 or controlla_num_pos($mese_ini_ins) != "SI") $gio_mesi_sbagliati = 1;
if ($gio_ini_ins < 1 or $gio_ini_ins > 31 or controlla_num_pos($gio_ini_ins) != "SI") $gio_mesi_sbagliati = 1;
if (!$gio_mesi_sbagliati) {
$ts_ins = mktime(0,0,0,$mese_ini_ins,$gio_ini_ins,$anno);
$mese_ini_ins = date("n",$ts_ins);
$gio_ini_ins = date("j",$ts_ins);
} # fine if (!$gio_mesi_sbagliati)
} # fine if (isset($gio_ini_ins) and isset($mese_ini_ins) and...
if (isset($gio_fine_ins) and isset($mese_fine_ins) and strcmp("$gio_fine_ins$mese_fine_ins","")) {
if ($mese_fine_ins < 1 or $mese_fine_ins > 12 or controlla_num_pos($mese_fine_ins) != "SI") $gio_mesi_sbagliati = 1;
if ($gio_fine_ins < 1 or $gio_fine_ins > 31 or controlla_num_pos($gio_fine_ins) != "SI") $gio_mesi_sbagliati = 1;
if (!$gio_mesi_sbagliati) {
$ts_ins = mktime(0,0,0,$mese_fine_ins,$gio_fine_ins,$anno);
$mese_fine_ins = date("n",$ts_ins);
$gio_fine_ins = date("j",$ts_ins);
} # fine if (!$gio_mesi_sbagliati)
} # fine if (isset($gio_fine_ins) and isset($mese_fine_ins) and...
if (!$gio_mesi_sbagliati and !empty($gio_ini_ins) and !empty($gio_fine_ins)) {
if ($mese_ini_ins > $mese_fine_ins) $gio_mesi_sbagliati = 1;
if ($mese_ini_ins == $mese_fine_ins and $gio_ini_ins > $gio_fine_ins) $gio_mesi_sbagliati = 1;
} # fine if (!$gio_mesi_sbagliati and !empty($gio_ini_ins) and !empty($gio_fine_ins))
if ($gio_mesi_sbagliati) {
$mese_ini_ins = "";
$gio_ini_ins = "";
$mese_fine_ins = "";
$gio_fine_ins = "";
} # fine if ($gio_mesi_sbagliati)
if (!empty($gio_ini_ins)) $date_ins['ini'] = date("-m-d",mktime(0,0,0,$mese_ini_ins,$gio_ini_ins,$anno));
else $date_ins['ini'] = "";
if (!empty($gio_fine_ins)) $date_ins['fine'] = date("-m-d",mktime(0,0,0,$mese_fine_ins,$gio_fine_ins,$anno));
else $date_ins['ini'] = "";

unset($prezzi);
if (!empty($prezzo_comm_sel)) $prezzo_comm_sel = 1;
if (!empty($prezzo_tasse_sel)) $prezzo_tasse_sel = 1;
if ($anno_sel != "SI" and $mese_sel != "SI") {
$prezzo_comm_sel = 1;
$prezzo_tasse_sel = 1;
} # fine if ($anno_sel != "SI" and $mese_sel != "SI")
if ($prezzo_comm_sel) $prezzi['commissioni'] = 1;
else $prezzi['commissioni'] = 0;
if ($prezzo_tasse_sel) $prezzi['tasse'] = 1;
else $prezzi['tasse'] = 0;
if (!$prezzi['tasse']) {
$arrotond_tasse = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente'");
$prezzi['tasse_arrotond'] = (double) risul_query($arrotond_tasse,0,'valpersonalizza');
include("./includes/funzioni_costi_agg.php");
} # fine if (!$prezzi['tasse'])


if ($priv_vedi_tab_stat != "s") {
$condizione_prenota_proprie = " ( utente_inserimento = '$id_utente'";
if ($priv_vedi_tab_stat == "q" or $priv_vedi_tab_stat == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_prenota_proprie .= " or utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_tab_stat == "q" or ...
$condizione_prenota_proprie .= " )";
} # fine if ($priv_vedi_tab_stat != "s")
else $condizione_prenota_proprie = "";

unset($num_giorni_mese);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
$entrate_ins_mese = "entrate_ins_mese".$anno_stat;
$num_prenota_ins_mese = "num_prenota_ins_mese".$anno_stat;
$entrate_prog_ins_mese = "entrate_prog_ins_mese".$anno_stat;
$num_prenota_prog_ins_mese = "num_prenota_prog_ins_mese".$anno_stat;
$percent_occupazione = "percent_occupazione".$anno_stat;
$entrate_mese = "entrate_mese".$anno_stat;
$num_prenota_mese = "num_prenota_mese".$anno_stat;
$num_origine = "num_origine".$anno_stat;
$entrate_origine = "entrate_origine".$anno_stat;
$percent_num_origine = "percent_num_origine".$anno_stat;
$percent_entrate_origine = "percent_entrate_origine".$anno_stat;
$num_nazionalita = "num_nazionalita".$anno_stat;
$entrate_nazionalita = "entrate_nazionalita".$anno_stat;
$percent_num_nazionalita = "percent_num_nazionalita".$anno_stat;
$percent_entrate_nazionalita = "percent_entrate_nazionalita".$anno_stat;
$app_occupati = "app_occupati".$anno_stat;
$prezzo_medio_prenota = "prezzo_medio_prenota".$anno_stat;
$revpar = "revpar".$anno_stat;
$revpar_ca = "revpar_ca".$anno_stat;
$pagamenti = "pagamenti".$anno_stat;
$nazionalita_mese = "nazionalita_mese".$anno_stat;
unset($$entrate_ins_mese);
unset($$num_prenota_ins_mese);
unset($$entrate_prog_ins_mese);
unset($$num_prenota_prog_ins_mese);
unset($$percent_occupazione);
unset($$entrate_mese);
unset($$num_prenota_mese);
unset($$num_origine);
unset($$entrate_origine);
unset($$percent_num_origine);
unset($$percent_entrate_origine);
unset($$num_nazionalita);
unset($$entrate_nazionalita);
unset($$percent_num_nazionalita);
unset($$percent_entrate_nazionalita);
unset($$app_occupati);
unset($$prezzo_medio_prenota);
unset($$revpar);
unset($$revpar_ca);
unset($$pagamenti);
unset($$nazionalita_mese);
genera_statistiche($$entrate_ins_mese,$$num_prenota_ins_mese,$$entrate_prog_ins_mese,$$num_prenota_prog_ins_mese,$$percent_occupazione,$$entrate_mese,$$num_prenota_mese,$$num_origine,$$entrate_origine,$$percent_num_origine,$$percent_entrate_origine,$$num_nazionalita,$$entrate_nazionalita,$$percent_num_nazionalita,$$percent_entrate_nazionalita,$$app_occupati,$$prezzo_medio_prenota,$$revpar,$$revpar_ca,$$pagamenti,$$nazionalita_mese,$num_giorni_mese,$anno_stat,$mesi,$date_ins,$prezzi,fixset($appartamenti_sel),$condizione_prenota_proprie,$PHPR_TAB_PRE);
} # fine if (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1


echo "<h3 id=\"h_stat\"><span>".mex("Statistiche",$pag).".</span></h3>";
if (!empty($gio_ini_ins) or !empty($gio_fine_ins)) {
echo "<h5>(".mex("con prenotazioni inserite",$pag)."";
if (!empty($gio_ini_ins)) echo " ".mex("dal",$pag)." $gio_ini_ins ".$nome_mese[$mese_ini_ins].".";
if (!empty($gio_fine_ins)) echo " ".mex("fino al",$pag)." $gio_fine_ins ".$nome_mese[$mese_fine_ins].".";
echo ")</h5>";
} # fine if (!empty($gio_ini_ins) or !empty($gio_fine_ins))
if (!empty($nome_tariffa_trovata)) echo "<h5>(".mex("appartamenti della tariffa",'unit.php')." $nome_tariffa_trovata)</h5>";
if ($num_sel > $max_col) echo "".mex("Superato il massimo numero di anni comparabili",$pag)." (<b>$max_col</b>).<br>";

echo "<table><tr><td style=\"height: 4px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (${"mese_sel".$num1}) echo "<input type=\"hidden\" name=\"mese_sel$num1\" value=\"SI\">";
} # fine for $num1
echo "<input type=\"hidden\" name=\"mese_ini_ins\" value=\"".htmlspecialchars(fixstr($mese_ini_ins))."\">
<input type=\"hidden\" name=\"mese_fine_ins\" value=\"".htmlspecialchars(fixstr($mese_fine_ins))."\">
<input type=\"hidden\" name=\"gio_ini_ins\" value=\"".htmlspecialchars(fixstr($gio_ini_ins))."\">
<input type=\"hidden\" name=\"gio_fine_ins\" value=\"".htmlspecialchars(fixstr($gio_fine_ins))."\">
<input type=\"hidden\" name=\"prezzo_comm_sel\" value=\"$prezzo_comm_sel\">
<input type=\"hidden\" name=\"prezzo_tasse_sel\" value=\"$prezzo_tasse_sel\">
<input type=\"hidden\" name=\"tariffa_per_app\" value=\"".htmlspecialchars(fixstr($tariffa_per_app))."\">
<input type=\"hidden\" name=\"anni_sel_passa\" value=\"$anni_sel_passa\">
".mex("Anni",$pag).": ";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
#if ($num1 >= ($num_anni - 5)) {
if (empty(${"anno_sel".$anni[$num1]})) { $checked = ""; $b = ""; $slash_b = ""; }
else { $checked = " checked"; $b = "<b>"; $slash_b = "</b>"; }
echo "<label class=\"wsnowrap\"><input type=\"checkbox\" name=\"anno_sel".$anni[$num1]."\" value=\"SI\"$checked>$b".$anni[$num1]."$slash_b</label>";
if ($num1 != ($num_anni - 1)) echo "; ";
#} # fine if ($num1 >= ($num_anni - 5))
} # fine for $num1
echo " <button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</div></form>";

echo "<table><tr><td style=\"height: 4px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) echo "<input type=\"hidden\" name=\"anno_sel".$anni[$num1]."\" value=\"SI\">";
} # fine for $num1
echo "<input type=\"hidden\" name=\"anni_sel_passa\" value=\"$anni_sel_passa\">
<input type=\"hidden\" name=\"mese_ini_ins\" value=\"$mese_ini_ins\">
<input type=\"hidden\" name=\"mese_fine_ins\" value=\"$mese_fine_ins\">
<input type=\"hidden\" name=\"gio_ini_ins\" value=\"$gio_ini_ins\">
<input type=\"hidden\" name=\"gio_fine_ins\" value=\"$gio_fine_ins\">
<input type=\"hidden\" name=\"prezzo_comm_sel\" value=\"$prezzo_comm_sel\">
<input type=\"hidden\" name=\"prezzo_tasse_sel\" value=\"$prezzo_tasse_sel\">
<input type=\"hidden\" name=\"tariffa_per_app\" value=\"".htmlspecialchars(fixstr($tariffa_per_app))."\">
".mex("Mesi",$pag).": ";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (!${"mese_sel".$num1}) { $checked = ""; $b = ""; $slash_b = ""; }
else { $checked = " checked"; $b = "<b>"; $slash_b = "</b>"; }
echo "<label class=\"wsnowrap\"><input type=\"checkbox\" name=\"mese_sel$num1\" value=\"SI\"$checked>$b".$nome_mese[$num1]."$slash_b</label>";
if ($num1 != 12) echo "; ";
} # fine for $num1
echo " <button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</div></form>";

echo "<table><tr><td style=\"height: 4px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) echo "<input type=\"hidden\" name=\"anno_sel".$anni[$num1]."\" value=\"SI\">";
} # fine for $num1
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (${"mese_sel".$num1}) echo "<input type=\"hidden\" name=\"mese_sel$num1\" value=\"SI\">";
} # fine for $num1
echo "<input type=\"hidden\" name=\"anni_sel_passa\" value=\"$anni_sel_passa\">
<input type=\"hidden\" name=\"prezzo_comm_sel\" value=\"$prezzo_comm_sel\">
<input type=\"hidden\" name=\"prezzo_tasse_sel\" value=\"$prezzo_tasse_sel\">
<input type=\"hidden\" name=\"tariffa_per_app\" value=\"".htmlspecialchars(fixstr($tariffa_per_app))."\">
".ucfirst(mex("con prenotazioni inserite",$pag))." ".mex("dal",$pag)." ";
$opt_giorni = "";
$opt_giorno_vuoto = "<option value=\"\">--</option>";
for ($num1 = 1 ; $num1 <= 31 ; $num1++) {
$opt_giorni .= "<option value=\"$num1\">$num1</option>";
} # fine for $num1
$opt_mesi = "";
$opt_mese_vuoto = "<option value=\"\">---</option>";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
$opt_mesi .= "<option value=\"$num1\">".$nome_mese[$num1]."</option>";
} # fine for $num1
echo "<select name=\"gio_ini_ins\">
".str_replace("value=\"$gio_ini_ins\">","value=\"$gio_ini_ins\" selected>",$opt_giorno_vuoto.$opt_giorni)."
</select> <select name=\"mese_ini_ins\">
".str_replace("value=\"$mese_ini_ins\">","value=\"$mese_ini_ins\" selected>",$opt_mese_vuoto.$opt_mesi)."</select>
 ".mex("al",$pag)." <select name=\"gio_fine_ins\">
".str_replace("value=\"$gio_fine_ins\">","value=\"$gio_fine_ins\" selected>",$opt_giorni.$opt_giorno_vuoto)."
</select> <select name=\"mese_fine_ins\">
".str_replace("value=\"$mese_fine_ins\">","value=\"$mese_fine_ins\" selected>",$opt_mesi.$opt_mese_vuoto)."</select> ";
echo "<button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</div></form>";

echo "<table><tr><td style=\"height: 4px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) echo "<input type=\"hidden\" name=\"anno_sel".$anni[$num1]."\" value=\"SI\">";
} # fine for $num1
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (${"mese_sel".$num1}) echo "<input type=\"hidden\" name=\"mese_sel$num1\" value=\"SI\">";
} # fine for $num1
echo "<input type=\"hidden\" name=\"anni_sel_passa\" value=\"$anni_sel_passa\">
<input type=\"hidden\" name=\"mese_ini_ins\" value=\"$mese_ini_ins\">
<input type=\"hidden\" name=\"mese_fine_ins\" value=\"$mese_fine_ins\">
<input type=\"hidden\" name=\"gio_ini_ins\" value=\"$gio_ini_ins\">
<input type=\"hidden\" name=\"gio_fine_ins\" value=\"$gio_fine_ins\">
<input type=\"hidden\" name=\"tariffa_per_app\" value=\"".htmlspecialchars(fixstr($tariffa_per_app))."\">
".mex("Prezzi con",$pag).": ";
if (!$prezzo_comm_sel) { $checked = ""; $b = ""; $slash_b = ""; }
else { $checked = " checked"; $b = "<b>"; $slash_b = "</b>"; }
echo "<label><input type=\"checkbox\" name=\"prezzo_comm_sel\" value=\"1\"$checked>$b".strtolower(mex("Commissioni",$pag))."$slash_b</label>; ";
if (!$prezzo_tasse_sel) { $checked = ""; $b = ""; $slash_b = ""; }
else { $checked = " checked"; $b = "<b>"; $slash_b = "</b>"; }
echo "<label><input type=\"checkbox\" name=\"prezzo_tasse_sel\" value=\"1\"$checked>$b".strtolower(mex("Tasse",$pag))."$slash_b</label> ";
echo "<button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</div></form>";

if ($option_tariffe) {
echo "<table><tr><td style=\"height: 4px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_tabelle.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"mese_ini_ins\" value=\"$mese_ini_ins\">
<input type=\"hidden\" name=\"mese_fine_ins\" value=\"$mese_fine_ins\">
<input type=\"hidden\" name=\"gio_ini_ins\" value=\"$gio_ini_ins\">
<input type=\"hidden\" name=\"gio_fine_ins\" value=\"$gio_fine_ins\">
<input type=\"hidden\" name=\"prezzo_comm_sel\" value=\"$prezzo_comm_sel\">
<input type=\"hidden\" name=\"prezzo_tasse_sel\" value=\"$prezzo_tasse_sel\">
<input type=\"hidden\" name=\"anni_sel_passa\" value=\"$anni_sel_passa\">";
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) echo "<input type=\"hidden\" name=\"anno_sel".$anni[$num1]."\" value=\"SI\">";
} # fine for $num1
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (${"mese_sel".$num1}) echo "<input type=\"hidden\" name=\"mese_sel$num1\" value=\"SI\">";
} # fine for $num1
echo "".mex("Appartamenti",'unit.php').": 
<select name=\"tariffa_per_app\">
<option value=\"\">".mex("tutti gli appartamenti",'unit.php')."</option>
$option_tariffe
</select>";
echo "<button class=\"edtm\" type=\"submit\"><div>".mex("Cambia",$pag)."</div></button>
</div></form>";
} # fine if ($option_tariffe)

echo "<br>";

unset($x);
$num_x = 0;
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (${"mese_sel".$num1}) {
$x[$num_x] = $num1;
#$nome_x[$num_x] = $num1."<br><small>(".$num_giorni_mese[$anno_stat][$num1].mex("g",$pag).")</small>";
$num_x++;
} # fine if (${"mese_sel".$num1})
} # fine for $num1
$titolo_col = $nome_mese;
$num_anni_sel = 0;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
$num_anni_sel++;
for ($num2 = 1 ; $num2 <= 12 ; $num2++) {
$commento_col[$anno_stat][$num2] = " (".$num_giorni_mese[$anno_stat][$num2].mex("g",$pag).")";
} # fine for $num2
} # fine if (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$colore_col = array(1 => '#40882a', 2 => '#b9ccd4', 3 => '#e6e1c3', 4 => '#696fbf', 5 => '#a9319c', 6 => '#e7a821', 7 => '#cacaca', 8 => '#9d3737');
unset($titolo_serie);

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"percent_occupazione".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = ${"percent_occupazione".$anno_stat}[$anno_stat]['TOT'];
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Percentuale di occupazione degli appartamenti",'unit.php'),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd","%",$stile_soldi);
echo "<br>$istogramma<br><br>";

/*for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (${"anno_sel".$anni[$num1]}) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"app_occupati".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie["TOT"][$num_y] = ${"app_occupati".$anno_stat}[$anno_stat]["TOT"];
$num_y++;
if ($num_y > 8) break;
} # fine (${"anno_sel".$anni[$num1]})
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Giorni occupati per mese",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd",mex("g",$pag),$stile_soldi);
echo "<br>$istogramma<br><br>";*/

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"num_prenota_mese".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = fixset(${"num_prenota_mese".$anno_stat}[$anno_stat]['TOT']);
/*for ($num2 = 0 ; $num2 < 12 ; $num2++) {
$commento_col[$anno_stat][$x[$num2]] = " (".${"app_occupati".$anno_stat}[$anno_stat][$x[$num2]].mex("g",$pag).")";
} # fine for $num2*/
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Numero di prenotazioni per mese",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd","",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"entrate_mese".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = punti_in_num(${"entrate_mese".$anno_stat}[$anno_stat]['TOT'],$stile_soldi);
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate dalle prenotazioni per mese",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"prezzo_medio_prenota".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = punti_in_num(fixset(${"prezzo_medio_prenota".$anno_stat}[$anno_stat]['TOT']),$stile_soldi);
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Prezzo medio giornaliero per appartamento occupato",'unit.php'),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"revpar".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = punti_in_num(${"revpar".$anno_stat}[$anno_stat]['TOT'],$stile_soldi);
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate giornaliere per appartamento disponibile (RevPAR)",'unit.php'),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"revpar_ca".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$titolo_serie['TOT'][$num_y] = punti_in_num(${"revpar_ca".$anno_stat}[$anno_stat]['TOT'],$stile_soldi);
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate giornaliere per appartamento disponibile con costi aggiuntivi",'unit.php'),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

unset($x);
$num_x = 0;
for ($num1 = 0 ; $num1 <= 12 ; $num1++) {
if (!empty(${"mese_sel".$num1}) or (!$num1 and $mese_sel1)) {
$x[$num_x] = $num1;
#$nome_x[$num_x] = $num1."<br><small>(".$num_giorni_mese[$anno_stat][$num1].mex("g",$pag).")</small>";
$num_x++;
} # fine if (!empty(${"mese_sel".$num1}) or...
} # fine for $num1
for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
unset($titolo_serie);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"entrate_prog_ins_mese".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate progressive dalle prenotazioni",$pag),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

unset($x);
unset($titolo_col);
unset($commento_col);
unset($titolo_serie);
$origini = array();
$num_x = 0;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
if (@is_array(${"num_origine".$anno_stat})) {
$num_origine = ${"num_origine".$anno_stat}[$anno_stat];
if (@is_array($num_origine)) {
reset($num_origine);
foreach ($num_origine as $orig => $val) {
if (!isset($origini[$orig])) {
$origini[$orig] = 1;
$x[$num_x] = $orig;
$titolo_col[$orig] = $orig;
$num_x++;
} # fine if (!isset($origini[$orig]))
} # fine foreach ($num_origine as $orig => $val)
} # fine if (@is_array($num_origine))
} # fine if (@is_array(${"num_origine".$anno_stat}))
} # fine if (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1

if (@is_array($x)) {

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"num_origine".$anno_stat}[$anno_stat];
for ($num2 = 0 ; $num2 < $num_x ; $num2++) {
if (empty(${"y".$num_y}[$x[$num2]])) ${"y".$num_y}[$x[$num2]] = 0;
$commento_col[$anno_stat][$x[$num2]] = " (".fixset(${"percent_num_origine".$anno_stat}[$anno_stat][$x[$num2]])."%)";
} # fine for $num2
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Numero di prenotazioni per origine",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd","",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"entrate_origine".$anno_stat}[$anno_stat];
for ($num2 = 0 ; $num2 < $num_x ; $num2++) {
if (empty(${"y".$num_y}[$x[$num2]])) ${"y".$num_y}[$x[$num2]] = 0;
$commento_col[$anno_stat][$x[$num2]] = " (".fixset(${"percent_entrate_origine".$anno_stat}[$anno_stat][$x[$num2]])."%)";
} # fine for $num2
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate dalle prenotazioni per origine",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

} # fine if (@is_array($x))

unset($x);
unset($titolo_col);
unset($commento_col);
unset($titolo_serie);
$metodo_pres = array();
$num_x = 0;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
if (@is_array(${"pagamenti".$anno_stat}[$anno_stat])) {
$pagamenti_anno = ${"pagamenti".$anno_stat}[$anno_stat];
reset($pagamenti_anno);
foreach ($pagamenti_anno as $metodo => $val) {
if (!isset($metodo_pres[$metodo])) {
$metodo_pres[$metodo] = 1;
$x[$num_x] = $metodo;
$titolo_col[$metodo] = $metodo;
$num_x++;
} # fine if (!isset($metodo_pres[$metodo]))
} # fine foreach ($pagamenti_anno as $metodo => $val)
} # fine if (@is_array(${"pagamenti".$anno_stat}))
} # fine if (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1

if (@is_array($x)) {

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"pagamenti".$anno_stat}[$anno_stat];
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate per metodo di pagamento",$pag),$titolo_serie,$titolo_col,"",$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

} # fine if (@is_array($x))

unset($x);
unset($titolo_col);
unset($commento_col);
unset($titolo_serie);
$nazionini = array();
$num_x = 0;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
if (@is_array(${"num_nazionalita".$anno_stat})) {
$num_nazionalita = ${"num_nazionalita".$anno_stat}[$anno_stat];
if (@is_array($num_nazionalita)) {
reset($num_nazionalita);
foreach ($num_nazionalita as $nazion => $val) {
if (!isset($nazionini[$nazion])) {
$nazionini[$nazion] = 1;
$x[$num_x] = $nazion;
$titolo_col[$nazion] = $nazion;
$num_x++;
} # fine if (!isset($nazionini[$nazion]))
} # fine foreach ($num_nazionalita as $nazion => $val)
} # fine if (@is_array($num_nazionalita))
} # fine if (@is_array(${"num_nazionalita".$anno_stat}))
} # fine if (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1

if (@is_array($x)) {

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"num_nazionalita".$anno_stat}[$anno_stat];
for ($num2 = 0 ; $num2 < $num_x ; $num2++) {
if (empty(${"y".$num_y}[$x[$num2]])) ${"y".$num_y}[$x[$num2]] = 0;
$commento_col[$anno_stat][$x[$num2]] = " (".fixset(${"percent_num_nazionalita".$anno_stat}[$anno_stat][$x[$num2]])."%)";
} # fine for $num2
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Numero di prenotazioni per nazionalità del cliente titolare",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd","",$stile_soldi);
echo "$istogramma<br><br>";

for ($num_y = 1 ; $num_y <= 8 ; $num_y++) ${"y".$num_y} = null;
$num_y = 1;
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
if (!empty(${"anno_sel".$anni[$num1]})) {
$anno_stat = $anni[$num1];
${"y".$num_y} = ${"entrate_nazionalita".$anno_stat}[$anno_stat];
for ($num2 = 0 ; $num2 < $num_x ; $num2++) {
if (empty(${"y".$num_y}[$x[$num2]])) ${"y".$num_y}[$x[$num2]] = 0;
$commento_col[$anno_stat][$x[$num2]] = " (".fixset(${"percent_entrate_nazionalita".$anno_stat}[$anno_stat][$x[$num2]])."%)";
} # fine for $num2
$titolo_serie[$num_y] = $anno_stat;
$num_y++;
if ($num_y > 8) break;
} # fine (!empty(${"anno_sel".$anni[$num1]}))
} # fine for $num1
$istogramma = genera_istogramma($x,$x,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,mex("Entrate dalle prenotazioni per nazionalità del cliente titolare",$pag),$titolo_serie,$titolo_col,$commento_col,$colore_col,"#f7f7f7","#dddddd"," $Euro",$stile_soldi);
echo "$istogramma<br><br>";

} # fine if (@is_array($x))


} # fine if ($tipo_tabella == "statistiche" and $priv_vedi_tab_stat != "n")





echo "<div style=\"text-align: center;\"><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"inizio.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"bkmm\" type=\"submit\"><div>".mex("Torna al menù principale",$pag)."</div></button>
</div></form></div><div style=\"height: 20px\"></div>";



if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)



?>

