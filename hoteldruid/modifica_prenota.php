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

$pag = "modifica_prenota.php";
$titolo = "HotelDruid: Modifica Prenotazioni";
$base_js = 1;

$var_pag = array();
$var_pag[0] = 'origine';
$var_pag[1] = 'id_prenota';
$var_pag[2] = 'ins_checkin';
$var_pag[3] = 'ins_checkout';
$var_pag[4] = 'mese';
$var_pag[5] = 'modificaprenotazione';
$var_pag[6] = 'n_appartamento';
$var_pag[7] = 'sposta_appartamento';
$var_pag[8] = 'd_data_inserimento';
$var_pag[9] = 'n_inizioperiodo';
$var_pag[10] = 'n_fineperiodo';
$var_pag[11] = 'tipo_tabella';
$var_pag[12] = 'idprenota_origine';
$var_pag[13] = 'id_nuovo_utente_inserimento';
$var_pag[14] = 'n_lista_app';
$var_pag[15] = 'n_num_piano';
$var_pag[16] = 'n_num_casa';
$var_pag[17] = 'n_num_persone_casa';
$var_pag[18] = 'n_id_prenota_comp';
$var_pag[19] = 'tipo_commento';
$var_pag[20] = 'n_commento';
$var_pag[21] = 'n_origine_prenota';
$var_pag[22] = 'n_nometipotariffa';
$var_pag[23] = 'cambia_con_regola2';
$var_pag[24] = 'n_sconto';
$var_pag[25] = 'tipo_val_sconto';
$var_pag[26] = 'n_caparra';
$var_pag[27] = 'tipo_val_caparra';
$var_pag[28] = 'n_commissioni';
$var_pag[29] = 'tipo_val_commissioni';
$var_pag[30] = 'n_pagato';
$var_pag[31] = 'valuta_aggiorna_pagato';
$var_pag[32] = 'nomecostofinale0';
$var_pag[33] = 'val_costofinale0';
$var_pag[34] = 'nummoltiplica_cf0';
$var_pag[35] = 'catpers_ca0';
$var_pag[36] = 'numcostiagg';
$var_pag[37] = 'd_host_inserimento';
$var_pag[38] = 'pagina_gia_modificata';
$var_pag[39] = 'pcanc';
$var_pag[40] = 'id_transazione';
$var_pag[41] = 'n_stima_checkin';
$var_pag[42] = 'n_valuta_caparra';
$var_pag[43] = 'n_met_paga_caparra';
$var_pag[44] = 'n_confermato';
$var_pag[45] = 'n_cancella_commento';
$var_pag[46] = 'tableprenota_da_aggiornare';
$var_pag[47] = 'mostra_tariffe_passa';
$var_pag[48] = 'n_calcola_commissioni';
$var_pag[49] = 'modo_aggiorna_pagato';
$var_pag[50] = 'num_cat_pers';
$var_pag[51] = 'd_pagato';
$var_pag[52] = 'cancella';
$var_pag[53] = 'cancella_c';
$var_pag[54] = 'cancella_permanentemente';
$var_pag[55] = 'n_data_stima_checkin';
$var_pag[56] = 'n_ora_stima_checkin';
$var_pag[57] = 'n_min_stima_checkin';
$var_pag[58] = 'origine_vecchia';
$var_pag[59] = 'torna_indietro';
$var_pag[60] = 'indietro';
$var_pag[61] = 'cambia_cliente';
$var_pag[62] = 'n_mobile';
$var_pag[63] = 'num_prenota_comp';
$var_pag[64] = 'n_nometipotariffa_vett';
$var_pag[65] = 'mosta_paga_passa';
$var_pag[66] = 'costofinale0';
$var_pag[67] = 'letto_agg0';
$var_pag[68] = 'id_per_corr_finto';
$var_pag[69] = 'n_numpersone';
$var_pag[70] = 'ospiti_visibili';
$var_pag[71] = 'canc_checkout';
$var_pag[72] = 'canc_checkin';
$var_pag[73] = 'non_modificare_costi_agg';
$var_pag[74] = 'mos_tut_dat';
$var_pag[75] = 'metodo_pagamento';
$var_pag[76] = 'cancella_pagato';
$var_pag[77] = 'id_pagamento';
$var_pag[78] = 'giorno_pagamento';
$var_pag[79] = 'mese_pagamento';
$var_pag[80] = 'anno_pagamento';
$var_pag[81] = 'note_pagamento';
$var_pag[82] = 'valuta_pagamento';
$var_pag[83] = 'id_nuovo_cliente';
$var_pag[84] = 'id_ospite';
$var_pag[85] = 'continua';
$var_pag[86] = 'n_calcola_caparra';
$var_pag[87] = 'rig_cod_prenota';
$var_pag[88] = 'mostra_tariffe';
$var_pag[89] = 'non_mostra_tariffe';
$var_pag[90] = 'lista_idca_passa';
$var_pag[91] = 'cambia_pagamenti';
$n_var_pag = 92;
$num2 = 0;
if (isset($_POST['num_cat_pers'])) $num2 = (int) $_POST['num_cat_pers'];
elseif (isset($_GET['num_cat_pers'])) $num2 = (int) $_GET['num_cat_pers'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) $var_pag[$n_var_pag++] = "n_cat$num1".'_numpers';
$num2 = 0;
if (isset($_POST['num_prenota_comp'])) $num2 = (int) $_POST['num_prenota_comp'];
elseif (isset($_GET['num_prenota_comp'])) $num2 = (int) $_GET['num_prenota_comp'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) $var_pag[$n_var_pag++] = "n_prenota_comp$num1";
$num2 = 0;
if (isset($_POST['numcostiagg'])) $num2 = (int) $_POST['numcostiagg'];
elseif (isset($_GET['numcostiagg'])) $num2 = (int) $_GET['numcostiagg'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "costoagg$num1";
$var_pag[$n_var_pag++] = "idcostoagg$num1";
$var_pag[$n_var_pag++] = "nummoltiplica_ca$num1";
$var_pag[$n_var_pag++] = "numsettimane$num1";
$var_pag[$n_var_pag++] = "catpers_ca$num1";
} # fine for $num1
$num3 = 0;
if (isset($_POST['id_prenota'])) $num3 = $_POST['id_prenota'];
elseif (isset($_GET['id_prenota'])) $num3 = $_GET['id_prenota'];
if ($num3) {
$num3 = explode(",",$num3);
$num4 = count($num3);
for ($num1 = 0 ; $num1 < $num4 ; $num1++) {
$num5 = (int) $num3[$num1];
$var_pag[$n_var_pag++] = "valuta_pagamento$num5";
$var_pag[$n_var_pag++] = "metodo_pagamento$num5";
$var_pag[$n_var_pag++] = "id_pagamento$num5";
$var_pag[$n_var_pag++] = "giorno_pagamento$num5";
$var_pag[$n_var_pag++] = "mese_pagamento$num5";
$var_pag[$n_var_pag++] = "anno_pagamento$num5";
$var_pag[$n_var_pag++] = "note_pagamento$num5";
$var_pag[$n_var_pag++] = "n_nometipotariffa_$num5";
$var_pag[$n_var_pag++] = "cambia_con_regola2_$num5";
for ($num6 = 1 ; $num6 <= $num2 ; $num6++) {
$var_pag[$n_var_pag++] = "id_periodi_costo$num6"."_$num5";
$var_pag[$n_var_pag++] = "lista_sett_passa$num6"."_$num5";
$num8 = 0;
if (isset($_POST["lista_sett_passa$num6"."_$num5"])) $num8 = $_POST["lista_sett_passa$num6"."_$num5"];
elseif (isset($_GET["lista_sett_passa$num6"."_$num5"])) $num8 = $_GET["lista_sett_passa$num6"."_$num5"];
if ($num8) {
$num8 = explode(",",$num8);
$num9 = count($num8);
for ($num7 = 1 ; $num7 < $num9 ; $num7++) $var_pag[$n_var_pag++] = "sett".(int) $num8[$num7]."costo$num6"."_$num5";
} # fine if ($num8)
} # fine for $num6
} # fine for $num1
} # fine if ($num3)
$num2 = 0;
if (isset($_POST['lista_idca_passa'])) $num2 = $_POST['lista_idca_passa'];
elseif (isset($_GET['lista_idca_passa'])) $num2 = $_GET['lista_idca_passa'];
if ($num2) {
$num2 = explode(",",$num2);
$num3 = count($num2);
for ($num1 = 1 ; $num1 < $num3 ; $num1++) {
$num4 = (int) $num2[$num1];
$var_pag[$n_var_pag++] = "costoaggiuntivo$num4";
$var_pag[$n_var_pag++] = "mostra_costo_passa$num4";
$var_pag[$n_var_pag++] = "mostra_costo$num4";
$var_pag[$n_var_pag++] = "non_mostra_costo$num4";
$var_pag[$n_var_pag++] = "molt_costoaggiuntivo$num4";
$var_pag[$n_var_pag++] = "sett_costoaggiuntivo$num4";
$var_pag[$n_var_pag++] = "catpers_costoaggiuntivo$num4";
$var_pag[$n_var_pag++] = "lista_sett_passa$num4";
$num6 = 0;
if (isset($_POST["lista_sett_passa$num4"])) $num6 = $_POST["lista_sett_passa$num4"];
elseif (isset($_GET["lista_sett_passa$num4"])) $num6 = $_GET["lista_sett_passa$num4"];
if ($num6) {
$num6 = explode(",",$num6);
$num7 = count($num6);
for ($num5 = 1 ; $num5 < $num7 ; $num5++) {
$var_pag[$n_var_pag++] = "sett".(int) $num6[$num5]."costo$num4";
$var_pag[$n_var_pag++] = "molt_costoaggiuntivo$num4"."_sett".(int) $num6[$num5];
} # fine for $num5
} # fine if ($num6)
} # fine for $num1
} # fine if ($num2)

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
include("./includes/funzioni_tariffe.php");
include("./includes/funzioni_costi_agg.php");
include("./includes/funzioni_clienti.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableprenotacanc = $PHPR_TAB_PRE."prenotacanc".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tableanni = $PHPR_TAB_PRE."anni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tableinterconnessioni  = $PHPR_TAB_PRE."interconnessioni";
$tablerelinventario = $PHPR_TAB_PRE."relinventario";
$tablebeniinventario = $PHPR_TAB_PRE."beniinventario";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablenazioni = $PHPR_TAB_PRE."nazioni";
$tableregioni = $PHPR_TAB_PRE."regioni";
$tablecitta = $PHPR_TAB_PRE."citta";
$tabledocumentiid = $PHPR_TAB_PRE."documentiid";
$tableparentele = $PHPR_TAB_PRE."parentele";
$tablecache = $PHPR_TAB_PRE."cache";
$tablecosti = $PHPR_TAB_PRE."costi".$anno;
$tablerelclienti = $PHPR_TAB_PRE."relclienti";


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
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_costi = substr($priv_vedi_tab,2,1);
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
$modifica_clienti = "NO";
if (substr($priv_ins_clienti,1,1) == "s") $modifica_clienti = "SI";
if (substr($priv_ins_clienti,1,1) == "p") $modifica_clienti = "PROPRI";
if (substr($priv_ins_clienti,1,1) == "g") { $modifica_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$priv_inventario = risul_query($privilegi_globali_utente,0,'priv_inventario');
$priv_vedi_beni_inv = substr($priv_inventario,0,1);
$priv_vedi_inv_app = substr($priv_inventario,6,1);
if ($priv_vedi_beni_inv == "g") $prendi_gruppi = "SI";
$regole1_consentite = risul_query($privilegi_annuali_utente,0,'regole1_consentite');
$attiva_regole1_consentite = substr($regole1_consentite,0,1);
$applica_regole1 = substr($regole1_consentite,1,1);
if ($attiva_regole1_consentite != "n" or $applica_regole1 == "n") $regole1_consentite = explode("#@^",substr($regole1_consentite,3));
$tariffe_consentite = risul_query($privilegi_annuali_utente,0,'tariffe_consentite');
$attiva_tariffe_consentite = substr($tariffe_consentite,0,1);
if ($attiva_tariffe_consentite == "s") {
$tariffe_consentite = explode(",",substr($tariffe_consentite,2));
$tariffe_consentite_vett = array();
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
unset($contratti_consentiti_vett);
for ($num1 = 1 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
} # fine if ($attiva_contratti_consentiti == "s")
$priv_ins_prenota = risul_query($privilegi_annuali_utente,0,'priv_ins_prenota');
$priv_ins_nuove_prenota = substr($priv_ins_prenota,0,1);
$priv_ins_periodi_passati = substr($priv_ins_prenota,8,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_date = substr($priv_mod_prenota,1,1);
$priv_mod_assegnazione_app = substr($priv_mod_prenota,2,1);
$priv_mod_tariffa = substr($priv_mod_prenota,3,1);
$priv_mod_num_persone = substr($priv_mod_prenota,4,1);
$priv_mod_commento = substr($priv_mod_prenota,5,1);
$priv_mod_sconto = substr($priv_mod_prenota,6,1);
$priv_mod_caparra = substr($priv_mod_prenota,7,1);
$priv_mod_costi_agg = substr($priv_mod_prenota,8,1);
$priv_mod_utente_ins = substr($priv_mod_prenota,9,1);
if ($priv_mod_utente_ins == "g") $prendi_gruppi = "SI";
$priv_mod_pagato = substr($priv_mod_prenota,10,1);
$priv_mod_prenota_iniziate = substr($priv_mod_prenota,11,1);
$priv_mod_prenota_ore = substr($priv_mod_prenota,12,3);
$priv_canc_prenota_ore = substr($priv_mod_prenota,15,3);
$priv_canc_prenotazioni = substr($priv_mod_prenota,18,1);
$priv_canc_prenota_conf = substr($priv_mod_prenota,19,1);
$priv_mod_checkin = substr($priv_mod_prenota,20,1);
$priv_mod_codice = substr($priv_mod_prenota,21,1);
$priv_cambia_cliente = substr($priv_mod_prenota,22,1);
$priv_mod_prenota_comp = substr($priv_mod_prenota,23,1);
$priv_mod_orig_prenota = substr($priv_mod_prenota,24,1);
$priv_vedi_commento = substr($priv_mod_prenota,25,1);
$priv_vedi_commenti_pers = substr($priv_mod_prenota,26,1);
$priv_canc_permanente = substr($priv_mod_prenota,27,1);
$cassa_pagamenti = (string) risul_query($privilegi_annuali_utente,0,'cassa_pagamenti');
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
$nome_utente = esegui_query("select * from $tableutenti where idutenti = '$id_utente'");
$nome_utente = risul_query($nome_utente,0,'nome_utente');
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
$modifica_pers = "SI";
$priv_vedi_tab_costi = "s";
$priv_ins_clienti = "s";
$modifica_clienti = "SI";
$vedi_clienti = "SI";
$priv_ins_nuove_prenota = "s";
$priv_vedi_beni_inv = "s";
$priv_vedi_inv_app = "s";
$attiva_regole1_consentite = "n";
$applica_regole1 = "s";
$attiva_tariffe_consentite = "n";
$attiva_costi_agg_consentiti = "n";
$attiva_contratti_consentiti = "n";
$priv_ins_periodi_passati = "s";
$priv_mod_prenotazioni = "s";
$priv_mod_date = "s";
$priv_mod_assegnazione_app = "s";
$priv_mod_tariffa = "s";
$priv_mod_num_persone = "s";
$priv_mod_commento = "s";
$priv_mod_sconto = "s";
$priv_mod_caparra = "s";
$priv_mod_costi_agg = "s";
$priv_mod_utente_ins = "s";
$priv_mod_pagato = "s";
$priv_mod_prenota_iniziate = "s";
$priv_mod_prenota_ore = "000";
$priv_canc_prenota_ore = "000";
$priv_canc_prenotazioni = "s";
$priv_canc_prenota_conf = "s";
$priv_mod_checkin = "s";
$priv_mod_codice = "s";
$priv_cambia_cliente = "s";
$priv_mod_prenota_comp = "s";
$priv_mod_orig_prenota = "s";
$priv_vedi_commento = "s";
$priv_vedi_commenti_pers = "s";
$priv_canc_permanente = "c";
$cassa_pagamenti = "";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI" and $priv_mod_prenotazioni != "n") {


if ($priv_vedi_commenti_pers == "s") $priv_mod_commenti_pers = "s";
else $priv_mod_commenti_pers = "n";

if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) {
$installazione_subordinata = "SI";
$modifica_pers = "NO";
$inserimento_nuovi_clienti = "NO";
$modifica_clienti = "NO";
$priv_ins_nuove_prenota = "n";
$priv_mod_date = "n";
$priv_mod_assegnazione_app = "n";
if ($priv_mod_tariffa != "n" and $priv_mod_tariffa != "p") $priv_mod_tariffa = "v";
$priv_mod_num_persone = "n";
$priv_mod_commento = "n";
$priv_mod_commenti_pers = "n";
if ($priv_mod_sconto != "n") $priv_mod_sconto = "v";
if ($priv_mod_caparra != "n") $priv_mod_caparra = "v";
if ($priv_mod_costi_agg != "n" and $priv_mod_costi_agg != "p") $priv_mod_costi_agg = "v";
if ($priv_mod_utente_ins != "n") $priv_mod_utente_ins = "v";
if ($priv_mod_pagato != "n") $priv_mod_pagato = "v";
$priv_canc_prenotazioni = "n";
$priv_mod_checkin = "n";
$priv_mod_codice = "n";
$priv_cambia_cliente = "n";
$priv_mod_prenota_comp = "n";
$priv_mod_orig_prenota = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_ins_costi_agg = "n";
} # fine if (@is_file(C_DATI_PATH."/dati_subordinazione.php"))


$titolo = "HotelDruid: ".mex("Modifica Prenotazioni",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


if (!empty($pcanc)) {
$pcanc = "canc";
$tableprenota = $tableprenotacanc;
$modifica_pers = "NO";
$inserimento_nuovi_clienti = "NO";
#$modifica_clienti = "NO";
#$priv_ins_nuove_prenota = "n";
$priv_mod_date = "n";
$priv_mod_assegnazione_app = "n";
if ($priv_mod_tariffa != "n" and $priv_mod_tariffa != "p") $priv_mod_tariffa = "v";
$priv_mod_num_persone = "n";
$priv_mod_commento = "n";
$priv_mod_commenti_pers = "n";
if ($priv_mod_sconto != "n") $priv_mod_sconto = "v";
if ($priv_mod_caparra != "n") $priv_mod_caparra = "v";
if ($priv_mod_costi_agg != "n" and $priv_mod_costi_agg != "p") $priv_mod_costi_agg = "v";
if ($priv_mod_utente_ins != "n") $priv_mod_utente_ins = "v";
if ($priv_mod_pagato != "n") $priv_mod_pagato = "v";
if ($priv_canc_permanente == "n") $priv_canc_prenotazioni = "n";
$priv_mod_checkin = "n";
$priv_mod_codice = "n";
$priv_cambia_cliente = "n";
$priv_mod_prenota_comp = "n";
$priv_mod_orig_prenota = "n";
$priv_ins_spese = "n";
$priv_ins_entrate = "n";
$priv_ins_costi_agg = "n";
} # fine if (!empty($pcanc))
else $pcanc = "";


$mese = htmlspecialchars(fixstr($mese));
$tipo_tabella = htmlspecialchars(fixstr($tipo_tabella));
$idprenota_origine = htmlspecialchars(fixstr($idprenota_origine));
$anno_origine = htmlspecialchars(fixstr($anno_origine));
include("./includes/funzioni_mod_prenota.php");

controlla_id_prenota($id_prenota,$id_prenota_idpr,$num_id_prenota,$id_prenota_int,$priv_mod_prenotazioni,$anno,$PHPR_TAB_PRE,$pcanc);
if ($priv_mod_prenotazioni != "n" and strcmp((string) $id_prenota,"")) {



$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
$num_campi_pers_comm = 0;
if ($priv_vedi_commenti_pers == "s") {
$comm_pers_presenti = array();
$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) {
$campi_pers_comm = explode(">",risul_query($campi_pers_comm,0,'valpersonalizza'));
$num_campi_pers_comm = count($campi_pers_comm);
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) $comm_pers_presenti[$campi_pers_comm[$num1]] = 1;
} # fine if (numlin_query($campi_pers_comm) == 1)
} # fine if ($priv_vedi_commenti_pers == "s")

$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();
$altre_valute = altre_valute();

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($priv_canc_prenotazioni == "f") {
$id_periodo_corrente = calcola_id_periodo_corrente($anno);
$id_inizio_prenota = esegui_query("select iddatainizio from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($id_inizio_prenota) == 1) $id_inizio_prenota = risul_query($id_inizio_prenota,0,'iddatainizio');
else $id_inizio_prenota = -2;
if ($id_periodo_corrente >= $id_inizio_prenota) $priv_canc_prenotazioni = "n";
} # fine if ($priv_canc_prenotazioni != "s")
if ($priv_canc_prenota_ore != "000") {
if ($priv_mod_prenota_ore == "000") {
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
$data_ins = esegui_query("select datainserimento from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($data_ins) == 1) $data_ins = risul_query($data_ins,0,'datainserimento');
else $data_ins = "1971-01-01 00:00:00";
} # fine if ($priv_mod_prenota_ore == "000")
$limite = date("YmdHis",mktime((substr($data_ins,11,2) + $priv_canc_prenota_ore),substr($data_ins,14,2),substr($data_ins,17,2),substr($data_ins,5,2),substr($data_ins,8,2),substr($data_ins,0,4)));
if ($adesso > $limite) $priv_canc_prenotazioni = "n";
} # fine if ($priv_canc_prenota_ore != "000")
if ($priv_canc_prenota_conf != "s" and $priv_canc_prenotazioni != "n") {
$confe = esegui_query("select conferma from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($confe) == 1) $confe = risul_query($confe,0,'conferma');
else $confe = "";
if ($confe == "S") $priv_canc_prenotazioni = "n";
} # fine if ($priv_canc_prenota_conf != "s" and $priv_canc_prenotazioni != "n")
} # fine for $num_idpr





if (!empty($cancella) and $priv_canc_prenotazioni != "n") {
$mostra_form_modifica_prenota = "NO";
if (!isset($cancella_c) or $cancella_c != "SI") {
echo "
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<input type=\"hidden\" name=\"d_data_inserimento\" value=\"$d_data_inserimento\">
<input type=\"hidden\" name=\"d_host_inserimento\" value=\"$d_host_inserimento\">";
if ($num_id_prenota == 1) {
$dati_prenota = esegui_query("select idclienti from $tableprenota where idprenota = '$id_prenota' ");
$cognome_cliente = risul_query($dati_prenota,0,'idclienti');
$cognome_cliente = esegui_query("select cognome from $tableclienti where idclienti = '$cognome_cliente' ");
$cognome_cliente = risul_query($cognome_cliente,0,'cognome');
echo mex("Si è sicuri di voler <b>cancellare</b> la prenotazione",$pag)." $id_prenota ".mex("a nome di",$pag)." <b>$cognome_cliente</b>?<br>";
} # fine if ($num_id_prenota == 1)
else echo mex("Si è sicuri di voler <b>cancellare</b> le prenotazioni",$pag)." $id_prenota_int?<br>";
echo "<input type=\"hidden\" name=\"cancella_c\" value=\"SI\">
<table border=0 cellspacing=0 cellpadding=0 style=\"margin-top: 4px;\"><tr><td>
<button class=\"cres\" type=\"submit\" name=\"cancella\" value=\"".mex("SI",$pag)."\"><div>".mex("SI",$pag)."</div></button> ";
if ($priv_canc_permanente == "c" or $pcanc) {
echo "&nbsp;</td><td>(<label>";
if (!$pcanc) echo "<input type=\"checkbox\" name=\"cancella_permanentemente\" value=\"1\"> ";
echo mex("cancella in modo permanente",$pag)."</label>)<br>";
} # fine if ($priv_canc_permanente == "c" or $pcanc)
if (($d_pagato != 0 or !strcmp((string) $d_pagato,"~~~~")) and $priv_mod_pagato == "s" and !$pcanc) {
echo "(<label><input type=\"checkbox\" id=\"canc_pag\" name=\"cancella_pagato\" value=\"SI\" checked>
 ".mex("cancella anche ciò che era stato pagato",$pag)."";
if ($altre_valute['num']) {
echo ", ".strtolower(mex("Valuta",$pag)).":
 </label><select name=\"valuta_pagamento\" onchange=\"document.getElementById('canc_pag').checked='1';\">
<option value=\"\" selected>".punti_in_num($d_pagato,$stile_soldi)." $Euro</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
$diff_pagato_valuta = converti_valuta($d_pagato,$altre_valute[$num1]['cambio'],$altre_valute[$num1]['arrotond']);
$diff_pagato_valuta_p = punti_in_num($diff_pagato_valuta,$stile_soldi);
echo "<option value=\"".htmlspecialchars($altre_valute[$num1]['nome'])."\">$diff_pagato_valuta_p ".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
echo "</select><label for=\"canc_pag\">";
} # fine if ($altre_valute['num'])
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($metodi_pagamento) {
echo ", ".mex("metodo di pagamento",$pag).":
 </label><select name=\"metodo_pagamento\" onchange=\"document.getElementById('canc_pag').checked='1';\">
<option value=\"\">----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) echo "<option value=\"".$metodi_pagamento[$num1]."\">".$metodi_pagamento[$num1]."</option>";
echo "</select><span id=\"spn_ep\"><label for=\"canc_pag\">, ".mex("id op.",$pag)." </label><input type=\"text\" name=\"id_pagamento\" value=\"\" size=\"10\" maxlength=\"300\" onclick=\"document.getElementById('canc_pag').checked='1';\">.</span>";
} # fine if ($metodi_pagamento)
else echo ".</label><span id=\"spn_ep\"></span>";
echo "<span id=\"div_ep\"><label for=\"canc_pag\"> ".mex("Data",$pag).": </label>";
$gio_corr = date('d',(time() + (C_DIFF_ORE * 3600)));
$sel_gpagamento = "<select name=\"giorno_pagamento\" onchange=\"document.getElementById('canc_pag').checked='1';\">";
for ($num1 = 1 ; $num1 <= 31; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $gio_corr) $sel = " selected";
else $sel = "";
$sel_gpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_gpagamento .= "</select>";
$mese_corr = date('m',(time() + (C_DIFF_ORE * 3600)));
$sel_mpagamento = "<select name=\"mese_pagamento\" onchange=\"document.getElementById('canc_pag').checked='1';\">";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $mese_corr) $sel = " selected";
else $sel = "";
$sel_mpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_mpagamento .= "</select>";
if ($stile_data == "usa") echo "$sel_mpagamento/$sel_gpagamento";
else echo "$sel_gpagamento/$sel_mpagamento";
echo "/<select name=\"anno_pagamento\" onchange=\"document.getElementById('canc_pag').checked='1';\">";
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
for ($num1 = ($anno - 2) ; $num1 <= ($anno_corr + 1) ; $num1++) {
if ($num1 == $anno_corr) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select><label for=\"canc_pag\">. ".mex("Note",$pag).": </label><input type=\"text\" name=\"note_pagamento\" value=\"\" size=\"12\" onclick=\"document.getElementById('canc_pag').checked='1';\"></span>)<br>
<script type=\"text/javascript\">
<!--
var sep_ep = document.getElementById('sep_ep');
var spn_ep = document.getElementById('spn_ep').innerHTML;
var div_ep = document.getElementById('div_ep').innerHTML;
function apri_ei () {
document.getElementById('canc_pag').checked='1';
if (sep_ep) sep_ep.style.display = 'block';
document.getElementById('spn_ep').innerHTML = spn_ep;
document.getElementById('div_ep').innerHTML = div_ep;
}
if (sep_ep) sep_ep.style.display = 'none';
document.getElementById('spn_ep').innerHTML = '";
if ($metodi_pagamento) echo ".";
echo "<label for=\"canc_pag\"> ".mex("Informazioni extra",$pag)." </label><button type=\"button\" onclick=\"apri_ei();\"><img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"&gt;\"></button>';
document.getElementById('div_ep').innerHTML = '';
-->
</script>";
} # fine if (($d_pagato != 0 or...
echo "</td></tr></table><br>
<button class=\"gobk\" type=\"submit\" value=\"".mex("NO",$pag)."\"><div>".mex("NO",$pag)."</div></button>
</div></form>";
} # fine if (!isset($cancella_c) or $cancella_c != "SI")
else {

if ($priv_canc_permanente == "n" or ($priv_canc_permanente == "c" and empty($cancella_permanentemente))) $cancperm = 0;
else $cancperm = 1;
$modo_canc = array('permanente' => $cancperm);
if ($pcanc) {
$modo_canc['permanente'] = 1;
$modo_canc['gia_canc'] = 1;
} # fine if ($pcanc)
$metodo_pagamento = array('metodo' => fixstr($metodo_pagamento), 'valuta' => fixstr($valuta_pagamento), 'id' => fixstr($id_pagamento), 'giorno' => fixstr($giorno_pagamento), 'mese' => fixstr($mese_pagamento), 'anno' => fixstr($anno_pagamento), 'note' => fixstr($note_pagamento));

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$testo = cancella_prenotazione($id_prenota,fixset($cancella_pagato),$metodo_pagamento,$priv_mod_pagato,1,$anno,$PHPR_TAB_PRE,$id_utente,$stato_canc,"",1,$modo_canc,$cassa_pagamenti);
echo $testo;
} # fine for $num_idpr

if ($modo_canc['permanente']) echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"tabella.php\"><div>";
else {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag\"><div>
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"1\">";
} # fine else if ($modo_canc['permanente'])
echo "<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
<br></div></form>";

if ($stato_canc != "NO") {
$lock = 1;
$aggiorna_disp = 1;
$aggiorna_tar = 0;
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");
} # fine if ($stato_canc != "NO")

} # fine else if (!isset($cancella_c) or $cancella_c != "SI")
} # fine if (!empty($cancella) and $priv_canc_prenotazioni != "n")


else {




if (isset($cambia_cliente) and $cambia_cliente == "SI" and $priv_cambia_cliente != "n" and $vedi_clienti != "NO") {
$mostra_form_modifica_prenota = "NO";
$errore = "";
if (!empty($id_ospite)) $id_nuovo_cliente = $id_ospite;

if (empty($id_nuovo_cliente)) {
$dati_osp = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$ospiti = esegui_query("select * from $tablerclientiprenota where idprenota = '$id_prenota' and num_ordine != '1' order by num_ordine ");
$num_ospiti = numlin_query($ospiti);
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) {
$id_clienti_osp = risul_query($ospiti,$num1,'idclienti');
$dati_ospite = esegui_query("select cognome,nome,utente_inserimento from $tableclienti where idclienti = '$id_clienti_osp' ");
$utente_ospite = risul_query($dati_ospite,0,'utente_inserimento');
$dati_osp .= "<option value=\"$id_clienti_osp\">";
if (($vedi_clienti == "PROPRI" and $utente_ospite != $id_utente) or ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_ospite])) $dati_osp .= mex("Cliente",$pag)." $id_clienti_osp";
else $dati_osp .= risul_query($dati_ospite,0,'cognome')." ".risul_query($dati_ospite,0,'nome');
$dati_osp .= "</option>";
} # fine for $num1
} # fine for $num_idpr
if ($dati_osp) {
$select_osp = "<select name=\"id_ospite\">
<option value=\"\">".mex("cliente numero",$pag)."</option>
$dati_osp
</select>";
} # fine if ($dati_osp)
else $select_osp = mex("cliente numero",$pag);
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"cambia_cliente\" value=\"SI\">
".mex("Nuovo titolare della prenotazione",$pag).": $select_osp
<input type=\"text\" name=\"id_nuovo_cliente\" size=\"5\">
<button class=\"xcli\" type=\"submit\"><div>".mex("Cambia cliente",$pag)."</div></button>
</div></form>";
} # fine if (empty($id_nuovo_cliente))

else {
if (controlla_num_pos($id_nuovo_cliente) == "SI") {
if (isset($continua) and $continua == "SI") {
$tabelle_lock = array($tableprenota,$tablerclientiprenota,$tablesoldi);
$altre_tab_lock = array($tableclienti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
} # fine if (isset($continua) and $continua == "SI")
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$cond_propri = " and ( utente_inserimento = '$id_utente'";
if ($vedi_clienti == "GRUPPI") {
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $cond_propri .= " or utente_inserimento = '$idut_gr'";
} # fine if ($vedi_clienti == "GRUPPI")
$cond_propri .= " )";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
else $cond_propri = "";
$dati_nuovo_cliente = esegui_query("select * from $tableclienti where idclienti = '".aggslashdb($id_nuovo_cliente)."'$cond_propri ");
if (numlin_query($dati_nuovo_cliente) == 1) {
$dati_prenota_modifica = array();
$pagamenti = array('e' => 0);
$id_prenota = $id_prenota_idpr[0];
$dati_prenota_modifica[$id_prenota] = esegui_query("select * from $tableprenota where idprenota = '$id_prenota' and idclienti != '0'");
if (numlin_query($dati_prenota_modifica[$id_prenota]) != 1) $errore = "SI";
else $id_clienti = risul_query($dati_prenota_modifica[$id_prenota],0,'idclienti');
$pagamenti[$id_prenota] = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota'");
$pagamenti['num'][$id_prenota] = numlin_query($pagamenti[$id_prenota]);
if ($pagamenti['num'][$id_prenota]) $pagamenti['e'] = 1;
for ($num_idpr = 1 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$dati_prenota_modifica[$id_prenota] = esegui_query("select * from $tableprenota where idprenota = '$id_prenota' and idclienti != '0'");
if (numlin_query($dati_prenota_modifica[$id_prenota]) != 1) $errore = "SI";
elseif ($id_clienti != risul_query($dati_prenota_modifica[$id_prenota],0,'idclienti')) $id_clienti = "~~~~";
$pagamenti[$id_prenota] = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota'");
$pagamenti['num'][$id_prenota] = numlin_query($pagamenti[$id_prenota]);
if ($pagamenti['num'][$id_prenota]) $pagamenti['e'] = 1;
} # fine for $num_idpr
if ($errore != "SI") {

if (!isset($continua) or $continua != "SI") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"cambia_cliente\" value=\"SI\">
<input type=\"hidden\" name=\"id_nuovo_cliente\" value=\"$id_nuovo_cliente\">
<input type=\"hidden\" name=\"continua\" value=\"SI\">";
if ($num_id_prenota == 1) echo mex("Il titolare della prenotazione",$pag)." $id_prenota";
else echo mex("Il titolare delle prenotazioni",$pag)." $id_prenota_int";
echo " ".mex("verrà cambiato da",$pag).":<br>
<table><tr><td style=\"width: 30px;\"></td><td>";
if ($id_clienti != "~~~~") {
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = '$id_clienti' ");
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if (($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) or ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento])) echo mex("Cliente",$pag)." <b>$id_clienti</b><br><br>";
else mostra_dati_cliente($dati_cliente,$dcognome,$dnome,$dsoprannome,$dtitolo_cli,$dsesso,$ddatanascita,$ddatanascita_f,$dnazionenascita,$dcittanascita,$dregionenascita,$ddocumento,$dscadenzadoc,$dscadenzadoc_f,$dtipodoc,$dnazionedoc,$dregionedoc,$dcittadoc,$dnazionalita,$dlingua_cli,$dnazione,$dregione,$dcitta,$dvia,$dnumcivico,$dtelefono,$dtelefono2,$dtelefono3,$dfax,$dcap,$demail,$demail2,$demail_cert,$dcod_fiscale,$dpartita_iva,"",$priv_ins_clienti);
} # fine if ($id_clienti != "~~~~")
else echo "<br>".mex("Cliente",$pag)." <b>$id_clienti</b><br><br>";
echo "</td></tr></table><br>
".mex("a",$pag).":<br>
<table><tr><td style=\"width: 30px;\"></td><td>";
mostra_dati_cliente($dati_nuovo_cliente,$dcognome,$dnome,$dsoprannome,$dtitolo_cli,$dsesso,$ddatanascita,$ddatanascita_f,$dnazionenascita,$dcittanascita,$dregionenascita,$ddocumento,$dscadenzadoc,$dscadenzadoc_f,$dtipodoc,$dnazionedoc,$dregionedoc,$dcittadoc,$dnazionalita,$dlingua_cli,$dnazione,$dregione,$dcitta,$dvia,$dnumcivico,$dtelefono,$dtelefono2,$dtelefono3,$dfax,$dcap,$demail,$demail2,$demail_cert,$dcod_fiscale,$dpartita_iva,"",$priv_ins_clienti);
echo "</td></tr></table><br>";
if ($pagamenti['e']) {
echo "<label><input type=\"checkbox\" name=\"cambia_pagamenti\" value=\"1\" checked>".mex("Cambia il cliente anche nei pagamenti effettuati",$pag).".</label><br><br>";
} # fine if ($pagamenti['e'])
echo "<button class=\"xcli\" type=\"submit\"><div>".mex("Cambia cliente",$pag)."</div></button>
</div></form>";
} # fine if (!isset($continua) or $continua != "SI")

else {
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$ospiti = esegui_query("select idclienti,num_ordine from $tablerclientiprenota where idprenota = '$id_prenota' order by num_ordine ");
$num_ospiti = numlin_query($ospiti);
unset($id_clienti_osp);
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) $id_clienti_osp[$num1] = risul_query($ospiti,$num1,'idclienti');
unset($num_ordine);
$num_ordine_cambiato = "NO";
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) if ($id_clienti_osp[$num1] == $id_nuovo_cliente) $num_ordine[$id_nuovo_cliente] = 1;
if (!empty($num_ordine[$id_nuovo_cliente])) {
esegui_query("update $tablerclientiprenota set num_ordine = '1' where idprenota = '$id_prenota' and idclienti = '$id_nuovo_cliente' ");
$max_num_ordine = 3;
$num_ordine_cambiato = "SI";
} # fine if (!empty($num_ordine[$id_nuovo_cliente]))
else $max_num_ordine = 2;
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) {
if ($id_clienti_osp[$num1] != $id_nuovo_cliente) {
if ($max_num_ordine != risul_query($ospiti,$num1,'num_ordine')) {
esegui_query("update $tablerclientiprenota set num_ordine = '$max_num_ordine' where idprenota = '$id_prenota' and idclienti = '".$id_clienti_osp[$num1]."' ");
$num_ordine_cambiato = "SI";
} # fine if ($max_num_ordine != risul_query($ospiti,$num1,'num_ordine'))
$max_num_ordine++;
} # fine if ($id_clienti_osp[$num1] != $id_nuovo_cliente)
} # fine for $num1
if ($num_ordine_cambiato == "SI") esegui_query("update $tablerclientiprenota set parentela = '' where idprenota = '$id_prenota' ");
$mostra_form_modifica_prenota = "SI";
esegui_query("update $tableprenota set idclienti = '$id_nuovo_cliente' where idprenota = '$id_prenota'");
if (isset($cambia_pagamenti) and $pagamenti['num'][$id_prenota]) {
for ($num1 = 0 ; $num1 < $pagamenti['num'][$id_prenota] ; $num1++) {
$id_paga = risul_query($pagamenti[$id_prenota],$num1,'idsoldi');
$mot_paga = explode(";",(string) risul_query($pagamenti[$id_prenota],$num1,'motivazione'));
if (count($mot_paga) >= 4) {
$mot_paga[0] = $id_nuovo_cliente;
$mot_paga = implode(";",$mot_paga);
esegui_query("update $tablesoldi set motivazione = '".aggslashdb($mot_paga)."' where idsoldi = '$id_paga' ");
} # fine if (count($mot_paga) >= 4)
} # fine for $num1
} # fine if (isset($cambia_pagamenti) and $pagamenti['num'][$id_prenota]) 
} # fine for $num_idpr
unlock_tabelle($tabelle_lock);
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$d_id_data_inizio = risul_query($dati_prenota_modifica[$id_prenota],0,'iddatainizio');
$d_id_data_fine = risul_query($dati_prenota_modifica[$id_prenota],0,'iddatafine');
$id_prenota_prec = trova_prenota_prec($anno,$d_id_data_inizio,$PHPR_TAB_PRE,$dati_prenota_modifica[$id_prenota],$n_dati_prenota_modifica,$pcanc);
if ($id_prenota_prec and $id_prenota_prec != "SI") esegui_query("update ".$PHPR_TAB_PRE."prenota".$pcanc.($anno - 1)." set idclienti = '$id_nuovo_cliente' where idprenota = '$id_prenota_prec'");
$id_prenota_succ = trova_prenota_succ($anno,$d_id_data_fine,$PHPR_TAB_PRE,$id_prenota,$fineperiodo_orig,$pcanc);
if ($id_prenota_succ and $id_prenota_succ != "soloanno") esegui_query("update ".$PHPR_TAB_PRE."prenota".$pcanc.($anno + 1)." set idclienti = '$id_nuovo_cliente' where idprenota = '$id_prenota_succ'");
} # fine for $num_idpr
} # fine else if (!isset($continua) or $continua != "SI")

} # fine if ($errore != "SI")
} # fine if (numlin_query($dati_nuovo_cliente) == 1)
else $errore = "SI";
} # fine if (controlla_num_pos($id_nuovo_cliente) == "SI")
else $errore = "SI";
if ($errore == "SI") echo "".mex("Cliente non trovato",$pag).".<br>";
if ($errore == "SI" and isset($continua)  and $continua == "SI") unlock_tabelle($tabelle_lock);
} # fine else if (empty($id_nuovo_cliente))

if ($mostra_form_modifica_prenota == "NO") {
echo "<br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">";
if ($errore != "SI") echo "<button class=\"canc\" type=\"submit\"><div>".mex("Annulla",$pag)."</div></button>";
else echo "<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>";
echo "</div></form>";
} # fine if ($mostra_form_modifica_prenota == "NO")
} # fine if (isset($cambia_cliente) and $cambia_cliente == "SI" and $priv_cambia_cliente != "n" and $vedi_clienti != "NO")




$sposta_per_checkin = 0;
$app_inv_checkin = array();
if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !empty($ins_checkin)) {
$inv_checkin = esegui_query("select * from $tablerelinventario where richiesto_checkin = 's' and quantita < quantita_min_predef and idappartamento is not NULL ");
$num_inv_checkin = numlin_query($inv_checkin);
if ($num_inv_checkin) {
for ($num1 = 0 ; $num1 < $num_inv_checkin ; $num1++) $app_inv_checkin[risul_query($inv_checkin,$num1,'idappartamento')] = 1;
if (!isset($modificaprenotazione) or $modificaprenotazione != "Continua") {
$d_data_inserimento = "";
$d_host_inserimento = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$pren = esegui_query("select idappartamenti,datainserimento,hostinserimento from $tableprenota where idprenota = '$id_prenota' ");
$idapp = risul_query($pren,0,'idappartamenti');
if (!empty($app_inv_checkin[$idapp])) {
$sposta_per_checkin = 1;
$modificaprenotazione = "modifica";
$ins_checkin = "";
} # fine if (!empty($app_inv_checkin[$idapp]))
$d_data_inserimento .= risul_query($pren,0,'datainserimento').",";
$d_host_inserimento .= risul_query($pren,0,'hostinserimento').",";
} # fine for $num_idpr
$d_data_inserimento = substr($d_data_inserimento,0,-1);
$d_host_inserimento = substr($d_host_inserimento,0,-1);
} # fine if (!isset($modificaprenotazione) or $modificaprenotazione != "Continua")
} # fine if ($num_inv_checkin)
} # fine if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !empty($ins_checkin))




if (!empty($modificaprenotazione)) {
$mostra_form_modifica_prenota = "NO";

prepara_modifiche_prenotazione($id_prenota_idpr,$num_id_prenota,$prenota_in_anno_succ,$dati_da_anno_prec,$tra_anni,$anno,$PHPR_TAB_PRE,$pcanc);


if ($modificaprenotazione != "Continua") {

$inserire = "SI";
$appartamenti = esegui_query("select * from $tableappartamenti ");
$numappartamenti = numlin_query($appartamenti);
$max_maxoccupanti = 0;
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$maxoccupanti = risul_query($appartamenti,$num1,'maxoccupanti');
if (!$maxoccupanti) {
$max_maxoccupanti = 0;
break;
} # fine if (!$maxoccupanti)
elseif ($maxoccupanti > $max_maxoccupanti) $max_maxoccupanti = $maxoccupanti;
} # fine for $num1

$action = "modifica_prenota.php";
if (substr($origine,0,13) == "tab_mese_drop") {
$action = explode("#",$origine);
$action = "tabella.php#rd_n".$action[2];
$priv_canc_prenota_conf = "n";
$priv_mod_costi_agg = "n";
$priv_mod_prenota_comp = "n";
$d_host_inserimento = implode(",",$n_host_inserimento_idpr);
} # fine if (substr($origine,0,13) == "tab_mese_drop")

$app_diversi_occ = 0;
$n_sconto = formatta_soldi(fixset($n_sconto));
$n_caparra = formatta_soldi(fixset($n_caparra));
$n_commissioni = formatta_soldi(fixset($n_commissioni));
$n_pagato = formatta_soldi(fixset($n_pagato));
$val_costofinale0 = formatta_soldi(fixset($val_costofinale0));
if (!isset($numcostiagg) or controlla_num_pos($numcostiagg) == "NO") $numcostiagg = 0;

$tableprenota_da_aggiornare = "";
$spostamenti_transazione = "";
$costi_aggiuntivi_modificati_int = null;
unset($tariffa_da_cercare);
$num_costi_presenti = null;
$verifica_app = "";

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($d_id_data_inizio_idpr[$id_prenota] == 0) {
$id_nuovo_utente_inserimento = "";
$n_inizioperiodo = "";
$sposta_appartamento = "";
$n_appartamento = "";
$n_mobile = "";
$n_num_piano = "";
$n_num_casa = "";
$n_num_persone_casa = "";
$n_assegnazioneapp = "";
$n_lista_app = "";
$n_numpersone = "";
$tableprenota_da_aggiornare = "";
$n_nometipotariffa = "";
$n_nometipotariffa_vett = "";
$n_costo_tariffa = "";
$n_sconto = "";
$n_caparra = "";
$tipo_val_caparra = "";
$n_valuta_caparra = "";
$n_met_paga_caparra = "";
$n_calcola_caparra = "";
$n_commissioni = "";
$n_calcola_commissioni = "";
$n_origine_prenota = "";
$n_pagato = "";
$tipo_commento = "";
$n_commento = "";
$n_cancella_commento = "";
$numcostiagg = 0;
$costofinale0 = "";
$priv_mod_num_persone = "n";
$priv_mod_conf = "n";
if ($priv_mod_costi_agg != "n" and $priv_mod_costi_agg != "p") $priv_mod_costi_agg = "v";
$priv_mod_checkin = "n";
$priv_mod_prenota_comp = "n";
} # fine if ($d_id_data_inizio_idpr[$id_prenota] == 0)
} # fine for $num_idpr

if ($priv_mod_date != "s") {
$n_inizioperiodo = "";
$n_fineperiodo = "";
} # fine if ($priv_mod_date != "s")

$varappincompatibili_ca0 = "";
if (!empty($costofinale0) and isset($letto_agg0) and $letto_agg0 == "s") {
$app_letto = esegui_query("select idappartamenti from $tableappartamenti where letto = '1' ");
$num_app_letto = numlin_query($app_letto);
for ($num2 = 0 ; $num2 < $num_app_letto ; $num2++) $varappincompatibili_ca0 .= ",".risul_query($app_letto,$num2,'idappartamenti');
$varappincompatibili_ca0 = substr($varappincompatibili_ca0,1);
} # fine if (!empty($costofinale0) and isset($letto_agg0) and $letto_agg0 == "s")

if ($n_caparra and substr($tipo_val_caparra,0,1) == ">") {
$valuta = $altre_valute['id'][substr($tipo_val_caparra,1)];
if (strcmp((string) $valuta,"")) {
$n_caparra = (double) formatta_soldi($n_caparra) / (double) $altre_valute[$valuta]['cambio'];
$n_caparra = $n_caparra / (double) $dati_tariffe['tasse_arrotond'];
$n_caparra = round($n_caparra);
$n_caparra = $n_caparra * (double) $dati_tariffe['tasse_arrotond'];
} # fine if (strcmp((string) $valuta,""))
else $n_caparra = "";
} # fine if ($n_caparra and substr($tipo_val_caparra,0,1) == ">")
if (!$altre_valute['num']) $n_valuta_caparra = "";
else {
if (empty($n_valuta_caparra) and !empty($tipo_val_caparra) and $tipo_val_caparra != "perc_tar") {
if ($tipo_val_caparra == "val" and !strcmp((string) $n_caparra,"")) $n_valuta_caparra = ">0";
if (substr($tipo_val_caparra,0,1) == ">") $n_valuta_caparra = substr($tipo_val_caparra,1);
} # fine if (!$n_valuta_caparra and !strcmp((string) $n_caparra,"") and !empty($tipo_val_caparra) and...
} # fine else if (!$altre_valute['num'])

if (@get_magic_quotes_gpc()) {
$n_commento = stripslashes($n_commento);
$nomecostofinale0 = stripslashes($nomecostofinale0);
$n_valuta_caparra = stripslashes($n_valuta_caparra);
$n_met_paga_caparra = stripslashes($n_met_paga_caparra);
$n_origine_prenota = stripslashes($n_origine_prenota);
} # fine if (@get_magic_quotes_gpc())
$n_commento = htmlspecialchars(fixstr($n_commento));
$nomecostofinale0 = htmlspecialchars(fixstr($nomecostofinale0));
#$n_met_paga_caparra = htmlspecialchars($n_met_paga_caparra);
$n_origine_prenota = htmlspecialchars(fixstr($n_origine_prenota));


$dati_form_modifica = "<input type=\"hidden\" name=\"d_data_inserimento\" value=\"".htmlspecialchars($d_data_inserimento)."\">
<input type=\"hidden\" name=\"d_host_inserimento\" value=\"".htmlspecialchars($d_host_inserimento)."\">
<input type=\"hidden\" name=\"id_nuovo_utente_inserimento\" value=\"".htmlspecialchars(fixstr($id_nuovo_utente_inserimento))."\">
<input type=\"hidden\" name=\"n_inizioperiodo\" value=\"".htmlspecialchars(fixstr($n_inizioperiodo))."\">
<input type=\"hidden\" name=\"n_fineperiodo\" value=\"".htmlspecialchars(fixstr($n_fineperiodo))."\">
<input type=\"hidden\" name=\"n_data_stima_checkin\" value=\"".htmlspecialchars(fixstr($n_data_stima_checkin))."\">
<input type=\"hidden\" name=\"n_ora_stima_checkin\" value=\"".htmlspecialchars(fixstr($n_ora_stima_checkin))."\">
<input type=\"hidden\" name=\"n_min_stima_checkin\" value=\"".htmlspecialchars(fixstr($n_min_stima_checkin))."\">
<input type=\"hidden\" name=\"sposta_appartamento\" value=\"".htmlspecialchars(fixstr($sposta_appartamento))."\">
<input type=\"hidden\" name=\"n_appartamento\" value=\"".htmlspecialchars(fixstr($n_appartamento))."\">
<input type=\"hidden\" name=\"n_mobile\" value=\"".htmlspecialchars(fixstr($n_mobile))."\">
<input type=\"hidden\" name=\"n_lista_app\" value=\"".htmlspecialchars(fixstr($n_lista_app))."\">
<input type=\"hidden\" name=\"n_num_piano\" value=\"".htmlspecialchars(fixstr($n_num_piano))."\">
<input type=\"hidden\" name=\"n_num_casa\" value=\"".htmlspecialchars(fixstr($n_num_casa))."\">
<input type=\"hidden\" name=\"n_num_persone_casa\" value=\"".htmlspecialchars(fixstr($n_num_persone_casa))."\">
<input type=\"hidden\" name=\"n_numpersone\" value=\"".htmlspecialchars(fixstr($n_numpersone))."\">
<input type=\"hidden\" name=\"tipo_commento\" value=\"".htmlspecialchars(fixstr($tipo_commento))."\">
<input type=\"hidden\" name=\"n_commento\" value=\"$n_commento\">
<input type=\"hidden\" name=\"n_cancella_commento\" value=\"".htmlspecialchars(fixstr($n_cancella_commento))."\">
<input type=\"hidden\" name=\"n_nometipotariffa\" value=\"".htmlspecialchars(fixstr($n_nometipotariffa))."\">
<input type=\"hidden\" name=\"cambia_con_regola2\" value=\"".htmlspecialchars(fixstr($cambia_con_regola2))."\">
<input type=\"hidden\" name=\"n_sconto\" value=\"$n_sconto\">
<input type=\"hidden\" name=\"tipo_val_sconto\" value=\"".htmlspecialchars(fixstr($tipo_val_sconto))."\">
<input type=\"hidden\" name=\"n_caparra\" value=\"$n_caparra\">
<input type=\"hidden\" name=\"tipo_val_caparra\" value=\"".htmlspecialchars(fixstr($tipo_val_caparra))."\">
<input type=\"hidden\" name=\"n_valuta_caparra\" value=\"".htmlspecialchars(fixstr($n_valuta_caparra))."\">
<input type=\"hidden\" name=\"n_met_paga_caparra\" value=\"".htmlspecialchars(fixstr($n_met_paga_caparra))."\">
<input type=\"hidden\" name=\"n_commissioni\" value=\"$n_commissioni\">
<input type=\"hidden\" name=\"tipo_val_commissioni\" value=\"".htmlspecialchars(fixstr($tipo_val_commissioni))."\">
<input type=\"hidden\" name=\"n_origine_prenota\" value=\"$n_origine_prenota\">
<input type=\"hidden\" name=\"costofinale0\" value=\"".htmlspecialchars(fixstr($costofinale0))."\">
<input type=\"hidden\" name=\"nomecostofinale0\" value=\"$nomecostofinale0\">
<input type=\"hidden\" name=\"val_costofinale0\" value=\"$val_costofinale0\">
<input type=\"hidden\" name=\"nummoltiplica_cf0\" value=\"".htmlspecialchars(fixstr($nummoltiplica_cf0))."\">
<input type=\"hidden\" name=\"letto_agg0\" value=\"".htmlspecialchars(fixstr($letto_agg0))."\">
<input type=\"hidden\" name=\"n_id_prenota_comp\" value=\"".htmlspecialchars(fixstr($n_id_prenota_comp))."\">
<input type=\"hidden\" name=\"num_prenota_comp\" value=\"".htmlspecialchars(fixstr($num_prenota_comp))."\">";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
$dati_form_modifica .= "<input type=\"hidden\" name=\"n_cat$num1"."_numpers\" value=\"".htmlspecialchars(fixstr(${"n_cat$num1"."_numpers"}))."\">";
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_prenota_comp ; $num1++) {
$dati_form_modifica .= "<input type=\"hidden\" name=\"n_prenota_comp$num1\" value=\"".htmlspecialchars(fixstr(${"n_prenota_comp".$num1}))."\">";
} # fine for $num1
if ($num_id_prenota > 1) $dati_form_modifica .= "<input type=\"hidden\" name=\"n_nometipotariffa_vett\" value=\"".htmlspecialchars(fixstr($n_nometipotariffa_vett))."\">";
$excat_trovata = array();
$lista_idca_passa = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($num_id_prenota > 1) {
$dati_form_modifica .= "<input type=\"hidden\" name=\"n_nometipotariffa_$id_prenota\" value=\"".htmlspecialchars(fixstr(${"n_nometipotariffa_".$id_prenota}))."\">
<input type=\"hidden\" name=\"cambia_con_regola2_$id_prenota\" value=\"".htmlspecialchars(fixstr(${"cambia_con_regola2_".$id_prenota}))."\">";
} # fine if ($num_id_prenota > 1)
if ($dati_cat_pers['num']) {
$dati_form_modifica .= "<input type=\"hidden\" name=\"num_cat_pers\" value=\"".$dati_cat_pers['num']."\">";
$d_cat_persone = $d_cat_persone_idpr[$id_prenota];
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
$cat_pers = $d_cat_persone['ord'][$num1];
if (empty($d_cat_persone[$cat_pers]['esist']) and empty($excat_trovata[$cat_pers])) {
$excat_trovata[$cat_pers] = 1;
$dati_form_modifica .= "<input type=\"hidden\" name=\"n_excat$cat_pers"."_numpers\" value=\"".htmlspecialchars(fixstr(${"n_excat$cat_pers"."_numpers"}))."\">";
} # fine if (empty($d_cat_persone[$cat_pers]['esist']) and empty($excat_trovata[$cat_pers]))
} # fine for $num1
} # fine if ($dati_cat_pers['num'])
$dati_cap = ${"dati_cap".$id_prenota};
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$idca = $dati_cap[$numca]['id'];
$lista_idca_passa .= ",$idca";
$numcostoaggiuntivo = "costoaggiuntivo".$idca;
$sett_costoaggiuntivo = "sett_costoaggiuntivo".$idca;
$molt_costoaggiuntivo = "molt_costoaggiuntivo".$idca;
$dati_form_modifica .= "<input type=\"hidden\" name=\"$numcostoaggiuntivo\" value=\"".htmlspecialchars(fixstr($$numcostoaggiuntivo))."\">";
if ($dati_cap[$numca]['associasett'] != "s") {
$dati_form_modifica .= "<input type=\"hidden\" name=\"$sett_costoaggiuntivo\" value=\"".htmlspecialchars(fixstr($$sett_costoaggiuntivo))."\">
<input type=\"hidden\" name=\"$molt_costoaggiuntivo\" value=\"".htmlspecialchars(fixstr($$molt_costoaggiuntivo))."\">";
} # fine if ($dati_cap[$numca]['associasett'] != "s")
else {
$lista_sett_passa = "";
for ($num1 = $d_id_data_inizio_idpr[$id_prenota]; $num1 <= $d_id_data_fine_idpr[$id_prenota]; $num1++) {
$dati_form_modifica .= "<input type=\"hidden\" name=\"sett$num1"."costo$idca\" value=\"".htmlspecialchars(fixstr(${"sett".$num1."costo".$idca}))."\">
<input type=\"hidden\" name=\"$molt_costoaggiuntivo"."_sett$num1\" value=\"".htmlspecialchars(fixstr(${$molt_costoaggiuntivo."_sett".$num1}))."\">";
$lista_sett_passa .= ",$num1";
} # fine for $num1
if ($lista_sett_passa) $dati_form_modifica .= "<input type=\"hidden\" name=\"lista_sett_passa$idca\" value=\"$lista_sett_passa\">";
} # fine else if ($dati_cap[$numca]['associasett'] != "s")
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num']) $dati_form_modifica .= "<input type=\"hidden\" name=\"catpers_costoaggiuntivo$idca\" value=\"".htmlspecialchars(${"catpers_costoaggiuntivo".$idca})."\">";
} # fine for $numca
} # fine for $num_idpr
if ($lista_idca_passa) $dati_form_modifica .=  "<input type=\"hidden\" name=\"lista_idca_passa\" value=\"$lista_idca_passa\">";
$dati_form_modifica .=  "<input type=\"hidden\" name=\"n_confermato\" value=\"".htmlspecialchars(fixstr($n_confermato))."\">
<input type=\"hidden\" name=\"modo_aggiorna_pagato\" value=\"".htmlspecialchars(fixstr($modo_aggiorna_pagato))."\">
<input type=\"hidden\" name=\"valuta_aggiorna_pagato\" value=\"".htmlspecialchars(fixstr($valuta_aggiorna_pagato))."\">
<input type=\"hidden\" name=\"n_pagato\" value=\"".htmlspecialchars(fixstr($n_pagato))."\">";
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
$numsettimane = "numsettimane".$numca;
$nummoltiplica_ca = "nummoltiplica_ca".$numca;
$catpers_ca = "catpers_ca".$numca;
$idcostoagg = "idcostoagg".$numca;

# Espando le variabili dei costi combinabili
if (substr(${"idcostoagg".$numca},0,1) == "c") {
$categoria = substr(${"idcostoagg".$numca},1);
$num_in_cat = 0;
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($dati_ca[$num1]['combina'] == "s" and $dati_ca[$num1]['categoria'] == $categoria) {
$num_in_cat++;
if ($num_in_cat != 1) {
$numcostiagg++;
${"costoagg".$numcostiagg} = fixset(${"costoagg".$numca});
${"idcostoagg".$numcostiagg} = $dati_ca[$num1]['id'];
${"numsettimane".$numcostiagg} = fixset(${"numsettimane".$numca});
${"nummoltiplica_ca".$numcostiagg} = fixset(${"nummoltiplica_ca".$numca});
${"catpers_ca".$numcostiagg} = fixset(${"catpers_ca".$numca});
} # fine else if ($num_in_cat == 1)
else ${"idcostoagg".$numca} = $dati_ca[$num1]['id'];
} # fine if ($dati_ca[$num1]['combina'] == "s" and...
} # fine for $num1
if (!$num_in_cat) $inserire = "NO";
} # fine if (substr(${"idcostoagg".$numca},0,1) == "c")

$dati_form_modifica .= "<input type=\"hidden\" name=\"$costoagg\" value=\"".htmlspecialchars(fixstr($$costoagg))."\">
<input type=\"hidden\" name=\"$numsettimane\" value=\"".htmlspecialchars(fixstr($$numsettimane))."\">
<input type=\"hidden\" name=\"$nummoltiplica_ca\" value=\"".htmlspecialchars(fixstr($$nummoltiplica_ca))."\">
<input type=\"hidden\" name=\"$catpers_ca\" value=\"".htmlspecialchars(fixstr($$catpers_ca))."\">
<input type=\"hidden\" name=\"$idcostoagg\" value=\"".htmlspecialchars(fixstr($$idcostoagg))."\">";
} # fine for $numca
$dati_form_modifica .=  "<input type=\"hidden\" name=\"numcostiagg\" value=\"$numcostiagg\">";


if ($modifica_pers == "NO" and ($n_inizioperiodo or $n_fineperiodo)) @include(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php");
$id_periodo_corrente = calcola_id_periodo_corrente($anno);

if ($n_inizioperiodo) {
$n_inizioperiodo = aggslashdb($n_inizioperiodo);
$n_inizioperiodo_f = formatta_data($n_inizioperiodo,$stile_data);
echo mex("La data iniziale verrà cambiata dal",$pag)." <b>$d_data_inizio_f</b> ".mex("al",$pag)." <b>$n_inizioperiodo_f</b>.<br>";
$idinizioperiodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '$n_inizioperiodo' ");
$num_idinizioperiodo = numlin_query($idinizioperiodo);
if ($num_idinizioperiodo == 0) $inizioperiodo = 100000;
else $inizioperiodo = risul_query($idinizioperiodo,0,'idperiodi');
if ($modifica_pers == "NO" and !strpos($dates_options_list,$n_inizioperiodo)) $inizioperiodo = 100000;
if (substr($n_inizioperiodo,0,4) != $anno and $inizioperiodo != 100000) {
$anno_succ_esistente = esegui_query("select idanni from $tableanni where idanni = '".($anno + 1)."'");
if (numlin_query($anno_succ_esistente) == 1) {
$data_succ_esistente = esegui_query("select idperiodi from $PHPR_TAB_PRE"."periodi".($anno + 1)." where datainizio <= '$n_inizioperiodo'");
if (numlin_query($data_succ_esistente) >= 1) $inizioperiodo = 100000;
} # fine if (numlin_query($anno_succ_esistente) == 1
} # fine if (substr($n_inizioperiodo,0,4) != $anno and...
$n_inizioperiodo = $inizioperiodo;
} # fine if ($n_inizioperiodo)

if ($n_fineperiodo) {
$n_fineperiodo = aggslashdb($n_fineperiodo);
$n_fineperiodo_f = formatta_data($n_fineperiodo,$stile_data);
echo mex("La data finale verrà cambiata dal",$pag)." <b>$d_data_fine_f</b> ".mex("al",$pag)." <b>$n_fineperiodo_f</b>.<br>";
$idfineperiodo = esegui_query("select idperiodi from $tableperiodi where datafine = '$n_fineperiodo' ");
$num_idfineperiodo = numlin_query($idfineperiodo);
if ($num_idfineperiodo == 0) $fineperiodo = -1;
else $fineperiodo = risul_query($idfineperiodo,0,'idperiodi');
if ($modifica_pers == "NO" and !strpos($dates_options_list,$n_fineperiodo)) $fineperiodo = -1;
if (substr($n_fineperiodo,0,4) != $anno and $fineperiodo != -1) {
$anno_succ_esistente = esegui_query("select idanni from $tableanni where idanni = '".($anno + 1)."'");
if (numlin_query($anno_succ_esistente) == 1) {
$data_succ_esistente = esegui_query("select idperiodi from $PHPR_TAB_PRE"."periodi".($anno + 1)." where datafine <= '$n_fineperiodo'");
if (numlin_query($data_succ_esistente) >= 1) $fineperiodo = -1;
} # fine if (numlin_query($anno_succ_esistente) == 1
} # fine if (substr($fineperiodo,0,4) != $anno and...
$n_fineperiodo = $fineperiodo;
} # fine if ($n_fineperiodo)

if ($id_nuovo_utente_inserimento != "" and ($priv_mod_utente_ins == "s" or ($priv_mod_utente_ins == "g" and $utenti_gruppi[$id_nuovo_utente_inserimento])) and controlla_num_pos($id_nuovo_utente_inserimento) == "SI") {
$id_nuovo_utente_inserimento = aggslashdb($id_nuovo_utente_inserimento);
$verifica_utente = esegui_query("select * from $tableutenti where idutenti = '$id_nuovo_utente_inserimento'");
if (numlin_query($verifica_utente) == 1) {
$nome_utente_nuovo = risul_query($verifica_utente,0,'nome_utente');
echo mex("Si considererà l'utente",$pag)." <b>$nome_utente_nuovo</b> ".mex("come colui che ha inserito la prenotazione",$pag).".<br>";
} # fine if (numlin_query($verifica_utente) == 1)
else $id_nuovo_utente_inserimento = "";
} # fine if ($id_nuovo_utente_inserimento != "" and ($priv_mod_utente_ins == "s" or ($priv_mod_utente_ins == "g" and...
else $id_nuovo_utente_inserimento = "";

if ($priv_mod_assegnazione_app != "s") {
unset($n_appartamento);
$n_lista_app = "";
unset($n_num_casa);
unset($n_num_piano);
unset($n_num_persone_casa);
unset($n_mobile);
} # fine if ($priv_mod_assegnazione_app != "s")

if ($priv_mod_num_persone != "s" or controlla_num_pos($n_numpersone) != "SI") unset($n_numpersone);
if ($dati_cat_pers['num']) {
unset($n_numpersone);
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if ($priv_mod_num_persone != "s" or controlla_num_pos(${"n_cat$num1"."_numpers"}) != "SI") unset(${"n_cat$num1"."_numpers"});
} # fine for $num1
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$d_cat_persone = $d_cat_persone_idpr[$id_prenota_idpr[$num_idpr]];
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
$cat_pers = $d_cat_persone['ord'][$num1];
if (!$d_cat_persone[$cat_pers]['esist']) {
if ($priv_mod_num_persone != "s" or controlla_num_pos(${"n_excat$cat_pers"."_numpers"}) != "SI") unset(${"n_excat$cat_pers"."_numpers"});
} # fine if (!$d_cat_persone[$cat_pers]['esist'])
} # fine for $num1
} # fine for $num_idpr
} # fine if ($dati_cat_pers['num'])


restart_reservations_loop:
$n_numpersone_orig = fixset($n_numpersone);
$n_appartamento_orig = fixset($n_appartamento);
$n_lista_app = htmlspecialchars(fixstr($n_lista_app));
$n_lista_app_orig = $n_lista_app;
$sposta_appartamento_orig = $sposta_appartamento;
$diff_pagato_tot = 0;
unset($inizioperiodo_idpr);
unset($fineperiodo_idpr);
unset($app_incomp_costi_idpr);
$beniinv_presenti = array();
unset($n_numpersone_idpr);
unset($numpersone_idpr);
unset($catpers_camb_idpr);
unset($cat_persone_idpr);
unset($app_richiesti_idpr);
unset($n_assegnazioneapp_idpr);
unset($n_lista_app_idpr);
unset($n_app_eliminati_costi_idpr);
unset($prenota_comp_idpr);
unset($n_appartamento_idpr);
unset($frase_spostamento_idpr);
unset($inizioperiodo_min);
unset($regole2);

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($num_id_prenota > 1) $per_la_prenotazione = " ".mex("per la prenotazione",$pag)." <b>$id_prenota</b>";
else $per_la_prenotazione = "";
$d_id_data_inizio = $d_id_data_inizio_idpr[$id_prenota];
$d_id_data_fine = $d_id_data_fine_idpr[$id_prenota];
$d_appartamento = $d_appartamento_idpr[$id_prenota];
$d_assegnazione_app = $d_assegnazione_app_idpr[$id_prenota];
$d_app_assegnabili = $d_app_assegnabili_idpr[$id_prenota];
$d_num_persone = $d_num_persone_idpr[$id_prenota];
$d_cat_persone = $d_cat_persone_idpr[$id_prenota];
$d_prenota_comp = $d_prenota_comp_idpr[$id_prenota];
$d_app_eliminati_costi = $d_app_eliminati_costi_idpr[$id_prenota];
$n_appartamento_idpr[$id_prenota] = null;
$n_numpersone = $n_numpersone_orig;
$n_appartamento = $n_appartamento_orig;
$n_lista_app = $n_lista_app_orig;
$sposta_appartamento = $sposta_appartamento_orig;

if ($n_inizioperiodo) {
$inizioperiodo = $n_inizioperiodo;
if ($inizioperiodo < $d_id_data_inizio) $verifica_app = "SI";
} # fine if ($n_inizioperiodo)
else $inizioperiodo = $d_id_data_inizio;
$inizioperiodo_idpr[$id_prenota] = $inizioperiodo;
$idinizioperiodo = $inizioperiodo;
if ($num_idpr == 0 or $inizioperiodo < $inizioperiodo_min) $inizioperiodo_min = $inizioperiodo;

if ($n_fineperiodo) {
$fineperiodo = $n_fineperiodo;
if ($fineperiodo > $d_id_data_fine) $verifica_app = "SI";
} # fine if ($n_fineperiodo)
else $fineperiodo = $d_id_data_fine;
$fineperiodo_idpr[$id_prenota] = $fineperiodo;
$idfineperiodo = $fineperiodo;


if (isset($n_nometipotariffa_vett) and $n_nometipotariffa_vett == "SI") {
$n_nometipotariffa = ${"n_nometipotariffa_".$id_prenota};
$cambia_con_regola2 = ${"cambia_con_regola2_".$id_prenota};
} # fine if (isset($n_nometipotariffa_vett) and $n_nometipotariffa_vett == "SI")

$n_nometipotariffa = aggslashdb(str_replace("\"","",str_replace(">","",str_replace("<","",(string) $n_nometipotariffa))));
if ($n_nometipotariffa and (($attiva_tariffe_consentite == "s" and !isset($tariffe_consentite_vett[substr($n_nometipotariffa,7)])) or substr($n_nometipotariffa,0,7) != "tariffa")) $inserire = "NO";
if ($priv_mod_tariffa != "s" and $priv_mod_tariffa != "r") unset($n_nometipotariffa);
if ($priv_mod_tariffa == "r") $cambia_con_regola2 = "S";

# per la regola di assegnazione 2
unset($app_regola2_predef);
if (!empty($n_nometipotariffa) and $cambia_con_regola2 and !$n_appartamento and !$n_lista_app and !$n_num_casa and !$n_num_piano and !$n_num_persone_casa and !$n_mobile) {
unset($sposta_appartamento);
$n_lista_app = dati_regole2($dati_r2,$app_regola2_predef,$n_nometipotariffa,$idinizioperiodo,$idfineperiodo,$id_periodo_corrente,$tipo_periodi,$anno,$tableregole);
} # fine if (!empty($n_nometipotariffa) and $cambia_con_regola2 and !$n_appartamento...


if ($priv_ins_periodi_passati != "s" and $inizioperiodo < $d_id_data_inizio) {
if ($id_periodo_corrente >= $inizioperiodo) $inizioperiodo = 100000;
} # fine if ($priv_ins_periodi_passati != "s" and $inizioperiodo < $d_id_data_inizio)

$id_per_corr_finto = (string) aggslashdb(fixset($id_per_corr_finto));
if ($priv_ins_periodi_passati != "s" and $id_per_corr_finto != "") $inserire = "NO";
if ($id_per_corr_finto != "" and ($id_per_corr_finto > $id_periodo_corrente or $id_per_corr_finto < ($inizioperiodo - 1))) $inserire = "NO";

$prenota_iniziata = "";
$bloccare_app = "";
if ($id_periodo_corrente >= $inizioperiodo and (!$id_per_corr_finto or $id_per_corr_finto >= $inizioperiodo or $d_checkin_idpr[$id_prenota])) $prenota_iniziata = "SI";

if ($fineperiodo < $inizioperiodo) {
echo mex("Le <div style=\"display: inline; color: red;\">date</div> sono <b>sbagliate</b>",$pag)."$per_la_prenotazione.<br>";
$inserire = "NO";
$inizioperiodo = $d_id_data_inizio;
$fineperiodo = $d_id_data_fine;
} # fine if ($fineperiodo < $inizioperiodo)

$lunghezza_periodo = $fineperiodo - $inizioperiodo + 1;

$n_stima_checkin = "";
if ($priv_mod_checkin == "s") {
if ($n_data_stima_checkin and $n_ora_stima_checkin and $n_min_stima_checkin) {
$n_stima_checkin = $n_data_stima_checkin." ".$n_ora_stima_checkin.":".$n_min_stima_checkin.":00";
$n_stima_checkin = aggslashdb($n_stima_checkin);
if (!preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:00/",$n_stima_checkin)) $inserire = "NO";
$id_stima_checkin = esegui_query("select idperiodi from $tableperiodi where datainizio <= '".substr($n_stima_checkin,0,10)."' and datafine > '".substr($n_stima_checkin,0,10)."' ");
if (numlin_query($id_stima_checkin) == 1) {
$id_stima_checkin = risul_query($id_stima_checkin,0,'idperiodi');
if ($id_stima_checkin > ($fineperiodo + 1)) $inserire = "NO";
if ($id_stima_checkin < $inizioperiodo) $inserire = "NO";
} # fine if (numlin_query($id_stima_checkin) == 1)
else $inserire = "NO";
if ($inserire != "NO") echo mex("L'orario stimato di entrata verrà cambiato a",$pag)." <b>".formatta_data($n_data_stima_checkin,$stile_data)." $n_ora_stima_checkin".":$n_min_stima_checkin</b>$per_la_prenotazione.<br>";
else echo mex("Data o orario stimato di entrata <span class=\"colred\">errato</span>",$pag)."$per_la_prenotazione.<br>";
} # fine if ($n_data_stima_checkin and $n_ora_stima_checkin and $n_min_stima_checkin)
} # fine if ($priv_mod_checkin == "s")

$cat_persone = array('num' => 0);
$catpers_camb_idpr[$id_prenota] = 0;
if ($dati_cat_pers['num']) {
$osp_princ_trovato = 0;
$n_numpersone = 0;
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
$cp_molt = 0;
if (isset(${"n_cat$num1"."_numpers"}) and strcmp((string) ${"n_cat$num1"."_numpers"},"")) $cp_molt = ${"n_cat$num1"."_numpers"};
elseif (!empty($d_cat_persone[$num1]['esist'])) $cp_molt = $d_cat_persone[($d_cat_persone[$num1]['esist'] - 1)]['molt'];
if ($cp_molt) {
$n_numpersone += $cp_molt;
$ncp = $cat_persone['num'];
if (!empty(${"n_cat$num1"."_numpers"})) {
$cat_persone[$ncp] = $dati_cat_pers[$num1];
$cat_persone[$ncp]['lang'] = $dati_cat_pers['lang'];
} # fine if (!empty(${"n_cat$num1"."_numpers"}))
else $cat_persone[$ncp] = $d_cat_persone[($d_cat_persone[$num1]['esist'] - 1)];
$cat_persone[$ncp]['molt'] = $cp_molt;
$cat_persone['ord'][$num1] = $ncp;
$cat_persone[$ncp]['ord'] = $num1;
if ($cat_persone[$ncp]['osp_princ'] == "s") $osp_princ_trovato = 1;
$cat_persone['num']++;
} # fine if ($cp_molt)
} # fine for $num1
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
$cat_pers = $d_cat_persone['ord'][$num1];
if ($d_cat_persone[$cat_pers]['esist'] != ($num1 + 1)) {
if (strcmp((string) ${"n_excat$cat_pers"."_numpers"},"")) $cp_molt = ${"n_excat$cat_pers"."_numpers"};
else $cp_molt = $d_cat_persone[$num1]['molt'];
if ($cp_molt) {
$n_numpersone += $cp_molt;
$ncp = $cat_persone['num'];
$cat_persone[$ncp] = $d_cat_persone[$num1];
$cat_persone[$ncp]['molt'] = $cp_molt;
$cat_persone['ord']['ex'][$num1] = $ncp;
$cat_persone[$ncp]['ord'] = "ex$num1";
if ($cat_persone[$ncp]['osp_princ'] == "s") $osp_princ_trovato = 1;
$cat_persone['num']++;
} # fine if ($cp_molt)
} # fine if ($d_cat_persone[$cat_pers]['esist'] != ($num1 + 1))
} # fine for $num1
if ($n_numpersone == $d_num_persone) unset($n_numpersone);
} # fine if ($dati_cat_pers['num'])

# per la regola di assegnazione 3
$regole3 = esegui_query("select * from $tableregole where tariffa_per_persone != ''");
$num_regole3 = numlin_query($regole3);
if (!empty($n_nometipotariffa) and !strcmp(fixstr($n_numpersone),"") and !$d_num_persone) {
for ($num1 = 0 ; $num1 < $num_regole3 ; $num1++) {
$tariffa_regola3 = risul_query($regole3,$num1,'tariffa_per_persone');
if ($n_nometipotariffa == $tariffa_regola3) {
if (risul_query($regole3,$num1,'iddatainizio')) {
$n_numpersone = risul_query($regole3,$num1,'iddatainizio');
if ($dati_cat_pers['num']) {
$cat_persone[0] = $dati_cat_pers[0];
$cat_persone[0]['lang'] = $dati_cat_pers['lang'];
$cat_persone[0]['molt'] = $n_numpersone;
#$cat_persone[0]['id'] = 0;
$cat_persone[0]['ord'] = 0;
$cat_persone['ord'][0] = 0;
$osp_princ_trovato = 1;
$cat_persone['num'] = 1;
} # fine if ($dati_cat_pers['num'])
} # fine if (risul_query($regole3,$num1,'iddatainizio'))
break;
} # fine if ($n_nometipotariffa == $tariffa_regola3)
} # fine for $num1
} # fine if (!empty($n_nometipotariffa) and empty($n_numpersone) and !$d_num_persone)

$numpersone = $d_num_persone;
if (strcmp(fixstr($n_numpersone),"")) $numpersone = $n_numpersone;

if ((!empty($n_nometipotariffa) or strcmp(fixstr($n_numpersone),"")) and $num_regole3) {
if (!empty($n_nometipotariffa)) $nometipotariffa = $n_nometipotariffa;
else $nometipotariffa = $d_nome_tipotariffa_idpr[$id_prenota];
for ($num1 = 0 ; $num1 < $num_regole3 ; $num1++) {
$tariffa_regola3 = risul_query($regole3,$num1,'tariffa_per_persone');
if ($nometipotariffa == $tariffa_regola3) {
$num_pers_min = risul_query($regole3,$num1,'iddatafine');
if ($num_pers_min and $num_pers_min > $numpersone) {
echo mex("Per la tariffa selezionata si deve inserire un <span class=\"colred\">numero minimo</span> di",$pag)." $num_pers_min ";
if ($num_pers_min > 1) echo mex("persone",$pag);
else echo mex("persona",$pag);
echo "$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($num_pers_min and $num_pers_min > $numpersone)
break;
} # fine if ($nometipotariffa == $tariffa_regola3)
} # fine for $num1
} # fine if ((!empty($n_nometipotariffa) or strcmp(fixstr($n_numpersone),"")) and...

if (!empty($n_nometipotariffa) and $dati_tariffe[$n_nometipotariffa]['moltiplica'] == "p" and !$numpersone) {
echo mex("Si deve inserire il <span class=\"colred\">numero delle persone</span> per la tariffa selezionata",$pag)."$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if (!empty($n_nometipotariffa) and $dati_tariffe[$n_nometipotariffa]['moltiplica'] == "p" and...

$app_richiesti = array();
$n_assegnazioneapp = "";
$frase_da = "<b>".$d_appartamento."</b> (";
if ($d_assegnazione_app == "k") $frase_da = $frase_da."<b>".mex("fisso",'unit.php')."</b>";
else {
$frase_da2 = "<b>".mex("mobile",'unit.php')."</b>";
if ($d_app_assegnabili) $frase_da2 .= " ".mex("in",$pag)." <b>".$d_app_assegnabili."</b>";
$frase_da .= $frase_da2;
} # fine else if ($assegnazioneapp == "k")
$frase_da = $frase_da . ")";
if ($n_appartamento) {
$n_appartamento = aggslashdb(str_replace("\"","",str_replace(">","",str_replace("<","",$n_appartamento))));
echo mex("La prenotazione verrà spostata dall'appartamento",'unit.php')." $frase_da ".mex("al",'unit.php');
if (substr($origine,0,13) == "tab_mese_drop") {
echo ":<br><br>";
if (!isset($form_continua_iniziata) or $form_continua_iniziata != "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>";
$form_continua_iniziata = "SI";
if (!$frase_da2) $frase_da2 = "<b>".mex("mobile",'unit.php')."</b> ".mex("in",$pag)." <b>$d_appartamento</b>";
echo "<label><input type=\"radio\" name=\"tipo_n_app\" value=\"\" checked><b>$n_appartamento</b> (<b>".mex("fisso",'unit.php')."</b>)</label><br>
<label><input type=\"radio\" name=\"tipo_n_app\" value=\"aggiungi\"><b>$n_appartamento</b> ($frase_da2 <b>+ $n_appartamento</b>)</label><br><br>";
} # fine if (substr($origine,0,13) == "tab_mese_drop")
else echo " <b>$n_appartamento</b> (<b>".mex("fisso",'unit.php')."</b>)$per_la_prenotazione.<br>";
$frase_spostamento_idpr[$id_prenota] = 1;
if ($n_appartamento != $d_appartamento) $verifica_app = "SI";
$n_assegnazioneapp = "k";
$n_lista_app = "";
$app_richiesti[$n_appartamento] = "SI";
} # fine if ($n_appartamento)
else {
if (isset($n_mobile) and $n_mobile == "SI") {
echo mex("L'assegnazione dell'appartamento verrà cambiata dal",'unit.php')." $frase_da ".mex("al",'unit.php')." <b>$d_appartamento</b> (<b>".mex("mobile",'unit.php')."</b>)$per_la_prenotazione.<br>";
$frase_spostamento_idpr[$id_prenota] = 1;
$n_assegnazioneapp = "v";
$n_lista_app = "";
} # fine if (isset($n_mobile) and $n_mobile == "SI")
else {
if ($n_lista_app) {
echo mex("L'assegnazione dell'appartamento verrà cambiata dal",'unit.php')." $frase_da ".mex("ad uno tra",'unit.php')." <b>$n_lista_app</b>$per_la_prenotazione.<br>";
$frase_spostamento_idpr[$id_prenota] = 1;
$n_assegnazioneapp = "c";
$vett_app = explode(",",$n_lista_app);
$num_app = count($vett_app);
$verifica_app2 = "";
for ($num1 = 0 ; $num1 < $num_app ; $num1 = $num1 + 1) {
$appo = aggslashdb($vett_app[$num1]);
$app_richiesti[$appo] = "SI";
if ($appo == $d_appartamento) $verifica_app2 = "NO";
$appartamento_esistente = esegui_query("select idappartamenti from $tableappartamenti where idappartamenti = '$appo'");
if (numlin_query($appartamento_esistente) != 1) {
$inserire = "NO";
echo mex("L'appartamento",'unit.php')." <div style=\"display: inline; color: red;\">$appo</div> ".mex("contenuto nella lista non esiste",'unit.php').".<br>";
} # fine if (numlin_query($appartamento_esistente) != 1)
} # fine for $num1
if ($verifica_app2 != "NO") $verifica_app = "SI";
} # fine if ($n_lista_app)
else {
if (!empty($n_num_piano) or !empty($n_num_casa) or !empty($n_num_persone_casa)) {
$n_assegnazioneapp = "c";
echo mex("L'assegnazione dell'appartamento verrà cambiata dal",'unit.php')." $frase_da ".mex("ad uno tra",'unit.php');
$frase_spostamento_idpr[$id_prenota] = 1;
$query = "select idappartamenti from $tableappartamenti ";
$where_immesso = "";
if ($n_num_piano) {
echo mex(" quelli del",'unit.php')." <b>".str_replace("\"","",str_replace(">","",str_replace("<","",$n_num_piano))).mex("°</b> piano",$pag);
$query = $query."where numpiano = '".aggslashdb($n_num_piano)."' ";
$where_immesso = "SI";
} # fine if ($n_num_piano)
if ($n_num_casa) {
if ($where_immesso) {
echo " ".mex("della casa",$pag)." <b>".str_replace("\"","",str_replace(">","",str_replace("<","",$n_num_casa)))."</b>";
$query = $query."and numcasa = '".aggslashdb($n_num_casa)."' ";
} # fine if ($where_immesso)
else {
echo " ".mex("quelli della casa",'unit.php')." <b>".str_replace("\"","",str_replace(">","",str_replace("<","",$n_num_casa)))."</b>";
$query = $query."where numcasa = '".aggslashdb($n_num_casa)."' ";
} # fine else if ($where_immesso)
$where_immesso = "SI";
} # fine if ($n_num_casa)
if ($n_num_persone_casa) {
if ($where_immesso) {
echo " ".mex("con massimo numero di occupanti",$pag)." <b>".htmlspecialchars($n_num_persone_casa)."</b>";
$query = $query."and maxoccupanti = '".aggslashdb($n_num_persone_casa)."' ";
} # fine if ($where_immesso)
else {
echo " ".mex("quelli con massimo numero di occupanti",'unit.php')." <b>".htmlspecialchars($n_num_persone_casa)."</b>";
$query = $query."where maxoccupanti = '".aggslashdb($n_num_persone_casa)."' ";
} # fine else if ($where_immesso)
} # fine  if ($n_num_persone_casa)
echo "$per_la_prenotazione.<br>";
$list_idapp_ric = esegui_query($query);
$num_app_ric = numlin_query($list_idapp_ric);
$verifica_app2 = "";
for ($num1 = 0 ; $num1 < $num_app_ric ; $num1 = $num1 + 1) {
$idapp_ric = risul_query($list_idapp_ric,$num1,'idappartamenti');
$app_richiesti[$idapp_ric] = "SI";
if (!$n_lista_app) $n_lista_app = $idapp_ric;
else $n_lista_app = $n_lista_app.",".$idapp_ric;
if ($idapp_ric == $d_appartamento) $verifica_app2 = "NO";
} # fine for $num1
if ($verifica_app2 != "NO") $verifica_app = "SI";
if ($num_app_ric == 0) {
$inserire = "NO";
echo mex("Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>",'unit.php')."$per_la_prenotazione.<br>";
} # fine if ($num_app_ric == 0)
} # fine if (!empty($n_num_piano) or !empty($n_num_casa) or !empty($n_num_persone_casa))
else {
if ($d_app_assegnabili) {
$vett_app = explode(",",$d_app_assegnabili);
$num_app = count($vett_app);
for ($num1 = 0 ; $num1 < $num_app ; $num1 = $num1 + 1) {
$appo = $vett_app[$num1];
$app_richiesti[$appo] = "SI";
} # fine for $num1
} # fine if ($d_app_assegnabili)
if ($d_assegnazione_app == "v") $app_richiesti = array();
if ($d_assegnazione_app == "k") {
$app_richiesti = array();
$app_richiesti[$d_appartamento] = "SI";
} # fine if ($d_assegnazione_app == "k")
if ($prenota_iniziata == "SI") $bloccare_app = "SI";
} # fine else if (!empty($n_num_piano) or !empty($n_num_casa) or !empty($n_num_persone_casa))
} # fine else if ($n_lista_app)
} # fine else if (isset($n_mobile) and $n_mobile == "SI")
} # fine else if ($n_appartamento)


# Appartamenti incompatibili con costi aggiuntivi (non possono essere anche associati 
# automaticamente e quindi selezionati o deselezionati in seguito, con eccezione del costo aggiuntivo per letto).
# Influiscono su app_richiesti e lista_app.
# Per spiegazione su $d_app_eliminati_costi vedi commento in inserimento della  
# variabile $app_eliminati_costi[$n_t] in prenota.php.
$app_incomp_costi = "";
$app_incomp_costi_mod = "";
$app_eliminati_costi = "";
$n_app_eliminati_costi = "";
if ($varappincompatibili_ca0) $app_incomp_costi .= ",".$varappincompatibili_ca0;
$dati_cap = ${"dati_cap".$id_prenota};
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$idca = $dati_cap[$numca]['id'];
$numcostoaggiuntivo = "costoaggiuntivo".$idca;
if ($priv_mod_costi_agg != "s") $$numcostoaggiuntivo = "SI";
if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca]['appincompatibili']) $app_incomp_costi .= ",".$dati_cap[$numca]['appincompatibili'];
} # fine for $numca
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
$idcostoagg = "idcostoagg".$numca;
if ($priv_mod_costi_agg != "s" or ($attiva_costi_agg_consentiti != "n" and $costi_agg_consentiti_vett[$$idcostoagg] != "SI")) $$costoagg = "";
if ($$costoagg == "SI" and $dati_ca[$dati_ca['id'][$$idcostoagg]]['appincompatibili']) $app_incomp_costi .= ",".$dati_ca[$dati_ca['id'][$$idcostoagg]]['appincompatibili'];
} # fine for $numca

if ($app_incomp_costi or $d_app_eliminati_costi) {
$app_richiesti_corr = $app_richiesti;
if (empty($app_richiesti_corr)) {
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
$app_richiesti_corr[$idapp] = "SI";
} # fine for $num1
} # fine if (empty($app_richiesti_corr))
if ($n_assegnazioneapp == "k") $lista_app_corr = $n_appartamento;
else $lista_app_corr = $n_lista_app;
if (!$lista_app_corr and $n_assegnazioneapp != "v") {
if ($d_assegnazione_app == "k") $lista_app_corr = $d_appartamento;
elseif ($d_assegnazione_app != "v") $lista_app_corr = $d_app_assegnabili;
} # fine if (!$lista_app_corr and $n_assegnazioneapp != "v")
if (!$lista_app_corr) {
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) $lista_app_corr .= risul_query($appartamenti,$num1,'idappartamenti').",";
$lista_app_corr = substr($lista_app_corr,0,-1);
} # fine if (!$lista_app_corr)

$app_richiesti_orig = $app_richiesti_corr;
$lista_app_orig = $lista_app_corr;
if ($d_app_eliminati_costi) {
$lista_app_corr .= ",$d_app_eliminati_costi";
$vett_app = explode(",",$d_app_eliminati_costi);
$num_app = count($vett_app);
for ($num1 = 0 ; $num1 < $num_app ; $num1++) $app_richiesti_corr[$vett_app[$num1]] = "SI";
} # fine if ($d_app_eliminati_costi)
if ($app_incomp_costi) {
$vett_app = explode(",",substr($app_incomp_costi,1));
$num_app = count($vett_app);
} # fine if ($app_incomp_costi)
else $num_app = 0;
for ($num1 = 0 ; $num1 < $num_app ; $num1++) {
$appo = $vett_app[$num1];
if (isset($app_richiesti_corr[$appo]) and $app_richiesti_corr[$appo] == "SI") {
$app_richiesti_corr[$appo] = "NO";
if (isset($app_richiesti_orig[$appo]) and $app_richiesti_orig[$appo] == "SI") $app_incomp_costi_mod = "SI";
} # fine if (isset($app_richiesti_corr[$appo]) and $app_richiesti_corr[$appo] == "SI")
if ($lista_app_corr != substr(str_replace(",$appo,",",",",$lista_app_corr,"),1,-1)) {
$lista_app_corr = substr(str_replace(",$appo,",",",",$lista_app_corr,"),1,-1);
$app_eliminati_costi .= "$appo,";
} # fine if ($lista_app_corr != substr(str_replace(",$appo,",",",",$lista_app_corr,"),1,-1))
} # fine for $num1
if ($lista_app_corr != $lista_app_orig) $app_incomp_costi_mod = "SI";

if ($app_incomp_costi_mod == "SI") {
$app_richiesti = $app_richiesti_corr;
$n_lista_app = $lista_app_corr;
$n_app_eliminati_costi = substr($app_eliminati_costi,0,-1);
if (!$n_lista_app) {
$inserire = "NO";
echo mex("Non ci sono appartamenti con le <span class=\"colred\">caratteristiche richieste</span>",'unit.php')."$per_la_prenotazione.<br>";
} # fine if (!$n_lista_app)
if (str_replace(",","",$n_lista_app) == $n_lista_app) $n_assegnazioneapp = "k";
else $n_assegnazioneapp = "c";
} # fine if ($app_incomp_costi_mod == "SI")
} # fine if ($app_incomp_costi or $d_app_eliminati_costi)

# se vi sono costi con beni inventario dall'appartamento (non possono essere associati 
# automaticamente o con giorni specifici o moltiplicati per numero totale di presone)
# influiscono solo su app_richiesti
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$idca = $dati_cap[$numca]['id'];
$numcostoaggiuntivo = "costoaggiuntivo".$idca;
if ($$numcostoaggiuntivo == "SI" and isset($dati_cap[$numca]['tipo_beniinv']) and $dati_cap[$numca]['tipo_beniinv'] == "app") {
$app_richiesti_copia = $app_richiesti;
$num_ripetizioni_costo = "";
$posto = "NO";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
$sett_costoaggiuntivo_aux = ${"sett_costoaggiuntivo".$idca};
$molt_costoaggiuntivo_aux = ${"molt_costoaggiuntivo".$idca};
$settimane_costo = calcola_settimane_costo($tableperiodi,$dati_cap,$numca,$idinizioperiodo,$idfineperiodo,"",aggslashdb($sett_costoaggiuntivo_aux));
calcola_moltiplica_costo($dati_cap,$numca,$moltiplica_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo,aggslashdb($molt_costoaggiuntivo_aux),$numpersone,$cat_persone,"");
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_cap,$numca,$beniinv_presenti,$num_ripetizioni_costo,"",$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica_costo,$idapp);
if ($risul != "SI") {
$app_richiesti[$idapp] = "NO";
$app_incomp_costi_mod = "SI";
} # fine if ($risul != "SI")
else {
$app_richiesti[$idapp] = "SI";
$posto = "SI";
} # fine else if ($risul != "SI")
} # fine if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and...
} # fine for $num1
if ($posto != "SI") {
$inserire = "NO";
echo mex("I beni richiesti dal costo",$pag)." \"<span style=\"color: red;\">".$dati_cap[$numca]['nome']."</span>\" ".mex("non sono disponibili nell'inventario",$pag).".<br>";
} # fine if ($posto != "SI")
} # fine if ($$numcostoaggiuntivo == "SI" and isset($dati_cap[$numca]['tipo_beniinv']) and $dati_cap[$numca]['tipo_beniinv'] == "app")
} # fine for $numca

for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
$idcostoagg = "idcostoagg".$numca;
$num_costo = fixset($dati_ca['id'][$$idcostoagg]);
if ($$costoagg == "SI" and isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "app") {
$app_richiesti_copia = $app_richiesti;
$num_ripetizioni_costo = "";
$posto = "NO";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
$numsettimane_aux = ${"numsettimane".$numca};
$nummoltiplica_ca_aux = ${"nummoltiplica_ca".$numca};
$settimane_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,"",aggslashdb($numsettimane_aux));
calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo,aggslashdb($nummoltiplica_ca_aux),$numpersone,$cat_persone,"");
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti,$num_ripetizioni_costo,"",$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica_costo,$idapp);
if ($risul != "SI") {
$app_richiesti[$idapp] = "NO";
$app_incomp_costi_mod = "SI";
} # fine if ($risul != "SI")
else {
$app_richiesti[$idapp] = "SI";
$posto = "SI";
} # fine else if ($risul != "SI")
} # fine if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and...
} # fine for $num1
if ($posto != "SI") {
$inserire = "NO";
echo mex("I beni richiesti dal costo",$pag)." \"<span style=\"color: red;\">".$dati_ca[$num_costo]['nome']."</span>\" ".mex("non sono disponibili nell'inventario",$pag).".<br>";
} # fine if ($posto != "SI")
} # fine if ($$costoagg == "SI" and isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "app")
} # fine for $numca

# se si deve controllare l'inventario degli appartamenti per il checkin
if ($sposta_per_checkin) {
$app_richiesti_copia = $app_richiesti;
$posto = "NO";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
if (!empty($app_inv_checkin[$idapp])) {
$app_richiesti[$idapp] = "NO";
$app_incomp_costi_mod = "SI";
if ($idapp == $d_appartamento) echo ucfirst(mex("l'attuale appartamento",'unit.php'))." (<b>$d_appartamento</b>) ".mex("verrà cambiato perchè ha dei beni mancanti nell'inventario",'unit.php').".<br>";
} # fine if (!empty($app_inv_checkin[$idapp]))
else {
$app_richiesti[$idapp] = "SI";
$posto = "SI";
} # fine else if (!empty($app_inv_checkin[$idapp]))
} # fine if (empty($app_richiesti_copia) or or (isset($app_richiesti_copia[$idapp]) and...
} # fine for $num1
if ($posto != "SI") {
$inserire = "NO";
echo "<span class=\"colred\">".ucfirst(mex("i beni richiesti alla registrazione dell'entrata",$pag))."</span> ".mex("non sono disponibili nell'inventario",$pag).".<br>";
} # fine if ($posto != "SI")
} # fine if ($sposta_per_checkin)


if ($app_incomp_costi_mod == "SI" and $app_richiesti[$d_appartamento] != "SI") $verifica_app = "SI";
if ($priv_mod_assegnazione_app == "n" or $d_assegnazione_app == "k" or $n_appartamento != "" or $n_lista_app != "" or fixstr($n_num_casa) != "" or fixstr($n_num_piano) != "" or fixstr($n_num_persone_casa) != "" or fixstr($n_mobile) != "") unset($sposta_appartamento);
if (isset($sposta_appartamento) and strcmp((string) $sposta_appartamento,"") and $d_app_assegnabili != "" and str_replace(",$sposta_appartamento,","",",".$d_app_assegnabili.",") == ",".$d_app_assegnabili.",") unset($sposta_appartamento);
if ($bloccare_app == "SI" and $app_incomp_costi_mod != "SI" and (!isset($sposta_appartamento) or !strcmp((string) $sposta_appartamento,"")))  {
$app_richiesti = array();
$app_richiesti[$d_appartamento] = "SI";
} # fine if ($bloccare_app == "SI" and $app_incomp_costi_mod != "SI" and...


# spostamento di appartamento senza cambiare assegnazione
if (isset($sposta_appartamento) and strcmp((string) $sposta_appartamento,"")) {
if (empty($app_richiesti) or $app_richiesti[$sposta_appartamento] == "SI") {
unset($app_richiesti);
unset($n_assegnazioneapp);
$n_appartamento = $sposta_appartamento;
$n_appartamento = aggslashdb(str_replace("\"","",str_replace(">","",str_replace("<","",$n_appartamento))));
echo mex("La prenotazione",$pag)." $id_prenota ".mex("verrà spostata dall'appartamento",'unit.php')." $frase_da ".mex("al",'unit.php');
if (substr($origine,0,13) == "tab_mese_drop" and $priv_mod_assegnazione_app == "s") {
echo ":<br><br>";
if (!isset($form_continua_iniziata) or $form_continua_iniziata != "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>";
$form_continua_iniziata = "SI";
echo "<label><input type=\"radio\" name=\"tipo_sposta\" value=\"\" checked><b>$n_appartamento</b> ($frase_da2)</label><br>
<label><input type=\"radio\" name=\"tipo_sposta\" value=\"fisso\"><b>$n_appartamento</b> (<b>".mex("fisso",'unit.php')."</b>)</label><br><br>";
} # fine if (substr($origine,0,13) == "tab_mese_drop" and $priv_mod_assegnazione_app == "s")
else echo " <b>$n_appartamento</b> ($frase_da2).<br>";
$frase_spostamento_idpr[$id_prenota] = 1;
if ($n_appartamento != $d_appartamento) $verifica_app = "SI";
if ($d_app_assegnabili == "") $n_assegnazioneapp = "v";
else {
$n_assegnazioneapp = "c";
$n_lista_app = $d_app_assegnabili;
} # fine else if ($d_app_assegnabili == "")
$app_richiesti[$n_appartamento] = "SI";
} # fine if (empty($app_richiesti) or $app_richiesti[$sposta_appartamento] == "SI")
} # fine if (isset($sposta_appartamento) and strcmp((string) $sposta_appartamento,""))


if ($attiva_regole1_consentite == "s") {
unset($condizioni_regole1_consentite);
unset($app_richiesti_copia);
$n_lista_app = "";
if ($n_assegnazioneapp == "v") $n_assegnazioneapp = "c";
for ($num1 = 0 ; $num1 < count($regole1_consentite) ; $num1++) if ($regole1_consentite[$num1]) $condizioni_regole1_consentite .= "motivazione = '".aggslashdb($regole1_consentite[$num1])."' or ";
if (!$condizioni_regole1_consentite) {
echo mex("Non c'è nussun periodo delle regole 1 in cui sia consentito inserire prenotazioni per l'utente",$pag)." $nome_utente$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if (!$condizioni_regole1_consentite)
else {
$condizioni_regole1_consentite = "(".str_replace("motivazione = ' '","motivazione = '' or motivazione is null",substr($condizioni_regole1_consentite,0,-4)).")";
$app_richiesti_copia = $app_richiesti;
$posti = 0;
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or $app_richiesti_copia[$idapp] == "SI") {
$appartamento_consentito = esegui_query("select idregole,iddatainizio,iddatafine from $tableregole where app_agenzia = '$idapp' and (motivazione2 != 'x' or motivazione2 is NULL) and iddatainizio <= '$fineperiodo' and iddatafine >= '$inizioperiodo' and $condizioni_regole1_consentite order by iddatainizio");
unset($iddatainizio_regole_tot);
unset($iddatafine_regole_tot);
for ($num2 = 0 ; $num2 < numlin_query($appartamento_consentito) ; $num2++) {
$iddatainizio_regola = risul_query($appartamento_consentito,$num2,'iddatainizio');
$iddatafine_regola = risul_query($appartamento_consentito,$num2,'iddatafine');
if ($num2 == 0) {
$iddatainizio_regole_tot = $iddatainizio_regola;
$iddatafine_regole_tot = $iddatafine_regola;
} # fine if ($num2 == 0)
else {
if ($iddatainizio_regola == ($iddatafine_regole_tot + 1)) $iddatafine_regole_tot = $iddatafine_regola;
else break;
} # fine else if ($num2 == 0)
} # fine for $num2
if (numlin_query($appartamento_consentito) > 0 and $iddatainizio_regole_tot <= $inizioperiodo and $iddatafine_regole_tot >= $fineperiodo) {
$app_richiesti[$idapp] = "SI";
$posti++;
$n_lista_app .= $idapp.",";
} # fine if (numlin_query($appartamento_consentito) > 0 and...
else $app_richiesti[$idapp] = "NO";
} # fine if (empty($app_richiesti_copia) or $app_richiesti_copia[$idapp] == "SI")
} # fine for $num1
$n_lista_app = substr($n_lista_app,0,-1);
if ($posti == 0) {
echo mex("Non c'è nessun appartamento tra quelli richiesti in cui sia consentito inserire prenotazioni per l'utente",'unit.php')." $nome_utente$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($posti == 0)
} # fine else if (!$condizioni_regole1_consentite)
if ($inserire == "NO" and $app_richiesti_copia) $app_richiesti = $app_richiesti_copia;
if ($app_richiesti[$d_appartamento] != "SI") $verifica_app = "SI";
} # fine if ($attiva_regole1_consentite == "s")


if ($numpersone and $inserire != "NO") {
$app_richiesti2 = $app_richiesti;
$posto = "NO";
if (!empty($app_regola2_predef)) {
$app_regola2_predef = ",$app_regola2_predef,";
$posto_reg2_orig = 0;
} # fine if (!empty($app_regola2_predef))
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1 = $num1 + 1) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
$maxoccupanti = risul_query($appartamenti,$num1,'maxoccupanti');
if (empty($app_richiesti2) or (isset($app_richiesti2[$idapp]) and $app_richiesti2[$idapp] == "SI")) {
if ($maxoccupanti and $maxoccupanti < $numpersone) {
$app_richiesti[$idapp] = "NO";
} # fine if ($maxoccupanti and $maxoccupanti < $numpersone)
else {
$app_richiesti[$idapp] = "SI";
$posto = "SI";
} # fine else if ($maxoccupanti and $maxoccupanti < $numpersone)
} # fine if (empty($app_richiesti2) or (isset($app_richiesti2[$idapp]) and $app_richiesti2[$idapp] == "SI"))
if (!empty($app_regola2_predef)) {
if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef) {
if (!$maxoccupanti or $maxoccupanti >= $numpersone) $posto_reg2_orig = 1;
} # fine if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef)
} # fine if (!empty($app_regola2_predef))
} # fine for $num1

# Se non c'è posto per questo numero di persone provo ad aggiungere un costo con un letto aggiuntivo
$numpersone_orig = $numpersone;
if (($posto == "NO" or (!empty($app_regola2_predef) and !$posto_reg2_orig)) and $priv_mod_costi_agg == "s") {
unset($costo_aggiungi_letti);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca]['letto'] == "s") $costo_aggiungi_letti = 1;
} # fine for $numca
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$num_costo = $dati_ca['id'][${"idcostoagg".$numca}];
if ($dati_ca[$num_costo]['letto'] == "s") {
$num_costi_agg_letti[$num_costo] = $numca;
if (${"costoagg".$numca} == "SI") $costo_aggiungi_letti = 1;
} # fine if ($dati_ca[$num_costo]['letto'] == "s")
} # fine for $numca
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if (empty($costo_aggiungi_letti) and $dati_ca[$num1]['letto'] == "s") {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI") {
if (!empty($n_nometipotariffa)) $nometipotariffa = $n_nometipotariffa;
else $nometipotariffa = $d_nome_tipotariffa_idpr[$id_prenota];
if (($dati_ca[$num1]['numsett'] != "c" or $dati_ca[$num1]['associasett'] != "s") and empty($dati_ca[$num1]["incomp_".$nometipotariffa])) {
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num1,$idinizioperiodo,$idfineperiodo,($idfineperiodo - $idinizioperiodo + 1));
if ($periodo_costo_trovato != "NO") {
$num_aggiungi_letti = 1;
if ($dati_ca[$num1]['moltiplica'] == "c" and $max_maxoccupanti and $numpersone > $max_maxoccupanti) {
$num_aggiungi_letti = $numpersone - $max_maxoccupanti;
if ($dati_ca[$num1]['molt_max'] == "n" and $num_aggiungi_letti > $dati_ca[$num1]['molt_max_num']) $num_aggiungi_letti = $dati_ca[$num1]['molt_max_num'];
} # fine if ($dati_ca[$num1]['moltiplica'] == "c" and $max_maxoccupanti and $numpersone > $max_maxoccupanti)
if ($dati_ca[$num1]['numlimite'] and $num_aggiungi_letti > $dati_ca[$num1]['numlimite']) $num_aggiungi_letti = $dati_ca[$num1]['numlimite'];
# Se ci sono categorie di persone controllo che ci sia almeno una categoria da cui si possa
# sottrarre il numero di letti aggiuntivi, altrimenti ne diminuisco il numero
if ($dati_cat_pers['num']) {
$cat_pers_letto = "";
$perc_cat_pers_letto = "";
$diminuiti_lettiagg_per_catpers = 0;
while (!strcmp((string) $cat_pers_letto,"") and $num_aggiungi_letti > 0) {
for ($num2 = ($cat_persone['num'] - 1) ; $num2 >= 0 ; $num2--) {
if (($cat_persone[$num2]['molt'] >= $num_aggiungi_letti) and (!$perc_cat_pers_letto or $perc_cat_pers_letto > $cat_persone[$num2]['perc'])) {
$osp_princ_trovato = 0;
for ($num3 = 0 ; $num3 < $cat_persone['num'] ; $num3++) {
if ($cat_persone[$num3]['osp_princ'] == "s") {
if (($num2 != $num3 and $cat_persone[$num3]['molt'] > 0) or ($num2 == $num3 and ($cat_persone[$num2]['molt'] - $num_aggiungi_letti) > 0)) $osp_princ_trovato = 1;
if ($osp_princ_trovato) break;
} # fine if ($cat_persone[$num3]['osp_princ'] == "s")
} # fine for $num3
if ($osp_princ_trovato) {
$cat_pers_letto = $num2;
$perc_cat_pers_letto = $cat_persone[$num2]['perc'];
} # fine if ($osp_princ_trovato)
} # fine if (($cat_persone[$num2]['molt'] >= $num_aggiungi_letti) and (!$perc_cat_pers_letto or $perc_cat_pers_letto > $cat_persone[$num2]['perc']))
} # fine for $num2
if (!strcmp((string) $cat_pers_letto,"")) {
if (!$diminuiti_lettiagg_per_catpers) $diminuiti_lettiagg_per_catpers = $num_aggiungi_letti;
$num_aggiungi_letti--;
} # fine if (!strcmp((string) $cat_pers_letto,""))
} # fine while (!strcmp((string) $cat_pers_letto,"") and $num_aggiungi_letti > 0)
} # fine if ($dati_cat_pers['num'])
$settimane_costo_cal = calcola_settimane_costo($tableperiodi,$dati_ca,$num1,$idinizioperiodo,$idfineperiodo,"",$lunghezza_periodo);
calcola_moltiplica_costo($dati_ca,$num1,$moltiplica_costo_cal,$idinizioperiodo,$idfineperiodo,$settimane_costo_cal,$num_aggiungi_letti,"","","");
$limite_costo_raggiunto = "NO";
$num_costi_presenti_copia = $num_costi_presenti;
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num1,$num_costi_presenti_copia,$idinizioperiodo,$idfineperiodo,$settimane_costo_cal,$moltiplica_costo_cal) == "NO") $limite_costo_raggiunto = "SI";
if (isset($dati_ca[$num1]['tipo_beniinv']) and $dati_ca[$num1]['tipo_beniinv'] == "mag") {
$nrc = "";
$beniinv_presenti_copia = $beniinv_presenti;
$risul_beniinv = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num1,$beniinv_presenti_copia,$nrc,"SI",$idinizioperiodo,$idfineperiodo,$settimane_costo_cal,$moltiplica_costo_cal,"");
} # fine if (isset($dati_ca[$num1]['tipo_beniinv']) and $dati_ca[$num1]['tipo_beniinv'] == "mag")
else $risul_beniinv = "SI";
if ($limite_costo_raggiunto != "SI" and $risul_beniinv == "SI") {
$costo_aggiungi_letti = $dati_ca[$num1]['id'];
$num_costi_presenti = $num_costi_presenti_copia;
$app_incomp_cal = $dati_ca[$num1]['appincompatibili'];
if (isset($dati_ca[$num1]['tipo_beniinv']) and $dati_ca[$num1]['tipo_beniinv'] == "app") $nrc = "";
$posti = 0;
$posto_reg2_orig = 0;
$numpersone = $numpersone - $num_aggiungi_letti;
for ($num2 = 0 ; $num2 < $numappartamenti ; $num2++) {
$idapp = risul_query($appartamenti,$num2,'idappartamenti');
$maxoccupanti = risul_query($appartamenti,$num2,'maxoccupanti');
if (isset($dati_ca[$num1]['tipo_beniinv']) and $dati_ca[$num1]['tipo_beniinv'] == "app") $risul_beniinv = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num1,$beniinv_presenti,$nrc,"",$idinizioperiodo,$idfineperiodo,$settimane_costo_cal,$moltiplica_costo_cal,$idapp);
else $risul_beniinv = "SI";
if (empty($app_richiesti2) or (isset($app_richiesti2[$idapp]) and $app_richiesti2[$idapp] == "SI")) {
if (($maxoccupanti and $maxoccupanti < $numpersone) or str_replace(",$idapp,","",",$app_incomp_cal,") != ",$app_incomp_cal," or $risul_beniinv != "SI") $app_richiesti[$idapp] = "NO";
else {
$app_richiesti[$idapp] = "SI";
$posto = "SI";
} # fine else if (($maxoccupanti and $maxoccupanti < $numpersone) or...
} # fine if (empty($app_richiesti2) or (isset($app_richiesti2[$idapp]) and...
if (!empty($app_regola2_predef)) {
if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef) {
if (str_replace(",$idapp,","",",$app_incomp_cal,") == ",$app_incomp_cal," and $risul_beniinv == "SI") {
if (!$maxoccupanti or $maxoccupanti >= $numpersone) $posto_reg2_orig = 1;
} # fine if (str_replace(",$idapp,","",",$app_incomp_cal,") == ",$app_incomp_cal," and $risul_beniinv == "SI")
} # fine if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef)
} # fine if (!empty($app_regola2_predef))
} # fine for $num2

if ($posto == "SI" and (empty($app_regola2_predef) or $posto_reg2_orig)) {
$n_numpersone = $numpersone;
if ($num_costi_agg_letti[$num1]) $numca = $num_costi_agg_letti[$num1];
elseif ($dati_ca[$num1]['raggruppa'] == "s") {
$numcostiagg++;
$numca = $numcostiagg;
${"idcostoagg".$numca} = $dati_ca[$num1]['id'];
} # fine elseif ($dati_ca[$num1]['raggruppa'] == "s")
${"costoagg".$numca} = "SI";
${"nummoltiplica_ca".$numca} = $num_aggiungi_letti;
${"numsettimane".$numca} = $lunghezza_periodo;
if ($dati_cat_pers['num']) {
${"catpers_ca".$numca} = $cat_pers_letto;
$cat_persone[$cat_pers_letto]['molt'] = $cat_persone[$cat_pers_letto]['molt'] - $num_aggiungi_letti;
} # fine if ($dati_cat_pers['num'])
# when modifying multiple reservations and for one of them an extra cost as extra bed has to be added, then we must add it to
# all reservations and set accordingly the number of people, so restart the loop of controls if we are not at first reservation
if ($num_idpr > 0) goto restart_reservations_loop;
elseif (!empty($n_numpersone_orig)) $n_numpersone_orig = $n_numpersone;

if ($app_incomp_cal) {
if ($n_assegnazioneapp == "k") $lista_app_corr = $n_appartamento;
else $lista_app_corr = $n_lista_app;
if (!$lista_app_corr and $n_assegnazioneapp != "v") {
if ($d_assegnazione_app == "k") $lista_app_corr = $d_appartamento;
elseif ($d_assegnazione_app != "v") $lista_app_corr = $d_app_assegnabili;
} # fine if (!$lista_app_corr and $n_assegnazioneapp != "v")
if (!$lista_app_corr) {
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) $lista_app_corr .= risul_query($appartamenti,$num1,'idappartamenti').",";
$lista_app_corr = substr($lista_app_corr,0,-1);
} # fine if (!$lista_app_corr)
$vett_app = explode(",",$app_incomp_cal);
$num_app = count($vett_app);
$lista_app_corr_orig = $lista_app_corr;
for ($num1 = 0 ; $num1 < $num_app ; $num1++) {
$appo = $vett_app[$num1];
if ($lista_app_corr != substr(str_replace(",$appo,",",",",$lista_app_corr,"),1,-1) and $n_app_eliminati_costi == substr(str_replace(",$appo,",",",",$n_app_eliminati_costi,"),1,-1)) {
if (strcmp($n_app_eliminati_costi,"")) $n_app_eliminati_costi .= ",$appo";
else $n_app_eliminati_costi = $appo;
$lista_app_corr = substr(str_replace(",$appo,",",",",$lista_app_corr,"),1,-1);
} # fine if ($lista_app_orig != substr(str_replace(",$appo,",",",",$lista_app_orig,"),1,-1) and...
} # fine for $num1
if ($lista_app_corr_orig != $lista_app_corr) $n_lista_app = $lista_app_corr;
} # fine if ($app_incomp_cal)
} # fine if ($posto == "SI" and (empty($app_regola2_predef) or $posto_reg2_orig))

} # fine if ($limite_costo_raggiunto != "SI" and $risul_beniinv == "SI")
} # fine if ($periodo_costo_trovato != "NO")
} # fine if (($dati_ca[$num1]['numsett'] != "c" or $dati_ca[$num1]['associasett'] != "s") and...
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI")
} # fine if (empty($costo_aggiungi_letti) and $dati_ca[$num1]['letto'] == "s")
} # fine for $num1
} # fine if (($posto == "NO" or ($app_regola2_predef and !$posto_reg2_orig)) and $priv_mod_costi_agg == "s")

if ($posto == "NO" or (!empty($app_regola2_predef) and !$posto_reg2_orig)) {
echo mex("<b>Non</b> c'è nessun appartamento tra quelli richiesti che possa ospitare",'unit.php')." <div style=\"display: inline; color: red;\">$numpersone_orig ".mex("persone",$pag)."</div>$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($posto == "NO" or...
if (!isset($app_richiesti[$d_appartamento]) or $app_richiesti[$d_appartamento] != "SI") $verifica_app = "SI";
} # fine if ($numpersone and $inserire != "NO")

if (strcmp(fixstr($n_numpersone),"") and $n_numpersone != $d_num_persone) {
if ($d_num_persone == 0) $d_num_persone2 = mex("non specificato",$pag);
else $d_num_persone2 = $d_num_persone;
echo mex("Il numero delle persone verrà cambiato da",$pag)." <b>$d_num_persone2</b> ".mex("a",$pag)." <b>$n_numpersone</b>$per_la_prenotazione.<br>";
} # fine if (strcmp(fixstr($n_numpersone),"") and $n_numpersone != $d_num_persone)

if ($dati_cat_pers['num']) {
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
$ncp = fixset($cat_persone['ord'][$num1]);
if (strcmp((string) $ncp,"")) $cp_molt = $cat_persone[$ncp]['molt'];
else $cp_molt = 0;
$ncp = (fixset($d_cat_persone[$num1]['esist']) - 1);
if (empty($d_cat_persone[$num1]['esist'])) $d_num_cp = 0;
else $d_num_cp = $d_cat_persone[$ncp]['molt'];
if ($cp_molt != $d_num_cp) {
$catpers_camb_idpr[$id_prenota] = 1;
echo mex("Il numero di",$pag)." <em>".$dati_cat_pers[$num1]['n_plur']."</em> ".mex("verrà cambiato da",$pag)." <b>$d_num_cp</b> ".mex("a",$pag)." <b>$cp_molt</b>$per_la_prenotazione.<br>";
} # fine if ($cp_molt != $d_num_cp)
} # fine for $num1
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
$cat_pers = $d_cat_persone['ord'][$num1];
if ($d_cat_persone[$cat_pers]['esist'] != ($num1 + 1)) {
$ncp = $cat_persone['ord']['ex'][$num1];
if (strcmp((string) $ncp,"")) $cp_molt = $cat_persone[$ncp]['molt'];
else $cp_molt = 0;
if ($cp_molt != $d_cat_persone[$num1]['molt']) {
$catpers_camb_idpr[$id_prenota] = 1;
echo mex("Il numero di",$pag)." <em>".$d_cat_persone[$num1]['n_plur']."</em> ".mex("verrà cambiato da",$pag)." <b>".$d_cat_persone[$num1]['molt']."</b> ".mex("a",$pag)." <b>".${"n_excat$cat_pers"."_numpers"}."</b>$per_la_prenotazione.<br>";
} # fine if ($cp_molt != $d_cat_persone[$cat_pers]['molt'])
} # fine if ($d_cat_persone[$cat_pers]['esist'] != ($num1 + 1))
} # fine for $num1
if ($catpers_camb_idpr[$id_prenota] and !$osp_princ_trovato) {
$inserire = "NO";
echo "<span class=\"colred\">".mex("Si deve inserire almeno una persona che possa essere ospite principale",'clienti.php')."</span>$per_la_prenotazione.<br>";
} # fine if ($catpers_camb_idpr[$id_prenota] and !$osp_princ_trovato)
} # fine if ($dati_cat_pers['num'])


$prenota_comp = $d_prenota_comp;
if ($priv_mod_prenota_comp != "n" and $inserire != "NO") {
$n_prenota_comp = "";
if (controlla_num_pos($num_prenota_comp) == "NO") $num_prenota_comp = 0;
${"n_prenota_comp".$num_prenota_comp} = $n_id_prenota_comp;
$num_prenota_comp++;
for ($num1 = 0 ; $num1 < $num_prenota_comp ; $num1++) {
if (!empty(${"n_prenota_comp".$num1})) {
if (!$n_prenota_comp) $n_prenota_comp = ${"n_prenota_comp".$num1};
else $n_prenota_comp .= ",".${"n_prenota_comp".$num1};
if (str_replace(",".${"n_prenota_comp".$num1}.",","",",".$d_prenota_comp.",") == ",".$d_prenota_comp.",") {
$n_prenota_comp_aux = ${"n_prenota_comp".$num1};
$prenota_comp_esistente = esegui_query("select idprenota_compagna from $tableprenota where idprenota = '".aggslashdb($n_prenota_comp_aux)."'");
if (numlin_query($prenota_comp_esistente) != 1 or controlla_num_pos($n_prenota_comp_aux) != "SI") {
echo mex("La prenotazione numero",$pag)." <div style=\"display: inline; color: red;\">".${"n_prenota_comp".$num1}."</div> ".mex("non esiste",$pag).".<br>";
$inserire = "NO";
} # fine if (numlin_query($prenota_comp_esistente) != 1 or...
else {
$idprenota_compagna = risul_query($prenota_comp_esistente,0,'idprenota_compagna');
if ($idprenota_compagna) {
$idprenota_compagna = explode(",",$idprenota_compagna);
$num_idprenota_compagna = count($idprenota_compagna);
for ($num2 = 0 ; $num2 < $num_idprenota_compagna ; $num2++) {
if (str_replace(",".$idprenota_compagna[$num2].",","",",".$n_prenota_comp.",")  == ",".$n_prenota_comp.",") $n_prenota_comp .= ",".$idprenota_compagna[$num2];
} # fine for $num2
} # fine if ($idprenota_compagna)
} # fine else if (numlin_query($prenota_comp_esistente) != 1)
} # fine if (str_replace(",".${"n_prenota_comp".$num1}.",","",",".$d_prenota_comp.",") == ",".$d_prenota_comp.",")
} # fine if (!empty(${"n_prenota_comp".$num1}))
} # fine for $num1
$prenota_comp = $n_prenota_comp;
if ($n_prenota_comp != $d_prenota_comp) echo mex("Le prenotazioni in appartamenti vicini verranno cambiate da",'unit.php')." \"$d_prenota_comp\" ".mex("a",$pag)." \"$n_prenota_comp\".<br>";
} # fine if ($priv_mod_prenota_comp != "n" and $inserire != "NO")
if ($prenota_comp == $d_prenota_comp) $n_prenota_comp = "";
else $verifica_app = "SI";


$n_numpersone_idpr[$id_prenota] = fixset($n_numpersone);
if ($app_incomp_costi) $app_incomp_costi_idpr = "SI";
$numpersone_idpr[$id_prenota] = $numpersone;
$cat_persone_idpr[$id_prenota] = $cat_persone;
$app_richiesti_idpr[$id_prenota] = $app_richiesti;
$n_assegnazioneapp_idpr[$id_prenota] = $n_assegnazioneapp;
$n_lista_app_idpr[$id_prenota] = $n_lista_app;
$n_app_eliminati_costi_idpr[$id_prenota] = $n_app_eliminati_costi;
$prenota_comp_idpr[$id_prenota] = $prenota_comp;
} # fine for $num_idpr



if ($verifica_app == "SI" and $inserire != "NO") {

$tabelle_lock = array($tableprenota);
$altre_tab_lock = array($tableperiodi,$tableappartamenti,$tableclienti,$tableregole,$tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

unset($dati_prenota_idpr);
$d_data_inserimento_idpr = explode(",",$d_data_inserimento);
$d_host_inserimento_idpr = explode(",",$d_host_inserimento);
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$dati_prenota_idpr[$id_prenota] = esegui_query("select * from $tableprenota where idprenota = '$id_prenota'");
$num_dati_prenota = numlin_query($dati_prenota_idpr[$id_prenota]);
if ($num_dati_prenota == 0) {
$inserire = "NO";
$cancellata = "SI";
} # fine if ($num_dati_prenota == 0)
else {
$n_data_inserimento = risul_query($dati_prenota_idpr[$id_prenota],0,'datainserimento');
$n_host_inserimento = risul_query($dati_prenota_idpr[$id_prenota],0,'hostinserimento');
if ($n_data_inserimento != $d_data_inserimento_idpr[$num_idpr] or $n_host_inserimento != $d_host_inserimento_idpr[$num_idpr]) {
$inserire = "NO";
$cancellata = "SI";
} # fine if ($n_data_inserimento != $d_data_inserimento_idpr[$num_idpr] or ...
} # fine else if ($num_dati_prenota == 0)
} # fine for $num_idpr
if ($inserire == "NO") echo mex("La prenotazione",$pag)." $id_prenota ".mex("è stata <b>cancellata</b>",$pag)."!";

else {
include("./includes/liberasettimane.php");
$avvia_transazione = "NO";
$limiti_var = array();
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);
unset($dati_app);
$profondita = array();
unset($prenota_comp_vett_idpr);
unset($num_prenota_comp_idpr);
if ($id_per_corr_finto != "") $limiti_var['idperiodocorrente'] = $id_per_corr_finto;
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$inizioperiodo_vecchio[$id_prenota] = risul_query($dati_prenota_idpr[$id_prenota],0,'iddatainizio');
$fineperiodo_vecchio[$id_prenota] = risul_query($dati_prenota_idpr[$id_prenota],0,'iddatafine');
if ($inizioperiodo_vecchio[$id_prenota] < $inizioperiodo_idpr[$id_prenota]) $ini_limiti_var = $inizioperiodo_vecchio[$id_prenota];
else $ini_limiti_var = $inizioperiodo_idpr[$id_prenota];
if (empty($limiti_var['n_ini']) or $ini_limiti_var < $limiti_var['n_ini']) $limiti_var['n_ini'] = $ini_limiti_var;
if ($fineperiodo_vecchio[$id_prenota] > $fineperiodo_idpr[$id_prenota]) $fine_limiti_var = $fineperiodo_vecchio[$id_prenota];
else $fine_limiti_var = $fineperiodo_idpr[$id_prenota];
if (empty($limiti_var['n_fine']) or $fine_limiti_var > $limiti_var['n_fine']) $limiti_var['n_fine'] = $fine_limiti_var;
} # fine for $num_idpr
$minuti_durata_insprenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_insprenota' and idutente = '1'");
$minuti_durata_insprenota = risul_query($minuti_durata_insprenota,0,'valpersonalizza_num');
$limiti_var['lim_prenota_temp'] = aggslashdb(date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600) - ($minuti_durata_insprenota * 60))));
esegui_query("delete from $tableprenota where idclienti = '0' and datainserimento < '".$limiti_var['lim_prenota_temp']."'","",1);

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
if ($prenota_comp) {
$prenota_comp_vett = explode(",",$prenota_comp);
$num_prenota_comp = count($prenota_comp_vett);
for ($num1 = 0 ; $num1 < $num_prenota_comp ; $num1++) {
$pren = esegui_query("select iddatainizio,iddatafine from $tableprenota where idprenota = '".aggslashdb($prenota_comp_vett[$num1])."'");
if (numlin_query($pren) == 1) {
$ini_pren = risul_query($pren,0,'iddatainizio');
$fine_pren = risul_query($pren,0,'iddatafine');
if ($ini_pren < $limiti_var['n_ini']) $limiti_var['n_ini'] = $ini_pren;
if ($fine_pren > $limiti_var['n_fine']) $limiti_var['n_fine'] = $fine_pren;
} # fine if (numlin_query($pren) == 1)
else $prenota_comp = substr(str_replace(",".$prenota_comp_vett[$num1].",",",",",".$prenota_comp.","),1,-1);
} # fine for $num1
$prenota_comp_vett_idpr[$id_prenota] = explode(",",$prenota_comp);
$num_prenota_comp_idpr[$id_prenota] = count($prenota_comp_vett_idpr[$id_prenota]);
$prenota_comp_idpr[$id_prenota] = $prenota_comp;
} # fine if ($prenota_comp)
} # fine for $num_idpr

$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
if (numlin_query($max_prenota) != 0) $tot_prenota = risul_query($max_prenota,0,0);
else $tot_prenota = 0;
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");
if ($debug == "on") echo "Fine tab_a_var fuori liberasettimane<br>";

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
unset($inizio_prenota_id[$id_prenota]);
unset($fine_prenota_id[$id_prenota]);
unset($app_assegnabili_id[$id_prenota]);
for ($num1 = $inizioperiodo_vecchio[$id_prenota] ; $num1 <= $fineperiodo_vecchio[$id_prenota] ; $num1++) {
$prenota_in_app_sett[$app_prenota_id[$id_prenota]][$num1] = "";
} # fine for $num1
unset($app_prenota_id[$id_prenota]);
unset($app_orig_prenota_id[$id_prenota]);

# elimino prenotazioni vicine che sono anche nel gruppo da riassegnare dopo (verranno controllate al loro turno)
if ($prenota_comp_idpr[$id_prenota]) {
for ($num_idpr2 = ($num_idpr + 1) ; $num_idpr2 < $num_id_prenota ; $num_idpr2++) {
$id_prenota2 = $id_prenota_idpr[$num_idpr2];
$prenota_comp_idpr[$id_prenota] = substr(str_replace(",$id_prenota2,",",",",$prenota_comp_idpr[$id_prenota],"),1,-1);
} # fine for $num_idpr
} # fine if ($prenota_comp_idpr[$id_prenota])

$d_prenota_comp = $d_prenota_comp_idpr[$id_prenota];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
if ($d_prenota_comp and str_replace(",$d_prenota_comp,","",",$prenota_comp,") == ",$prenota_comp,") {
$d_prenota_comp_vett = explode(",",$d_prenota_comp);
$num_d_prenota_comp = count($d_prenota_comp_vett);
for ($num1 = 0 ; $num1 < $num_d_prenota_comp ; $num1++) {
$d_pren_comp = $d_prenota_comp_vett[$num1];
if (str_replace(",$d_pren_comp,","",",$prenota_comp,") == ",$prenota_comp,") $app_assegnabili_id[0][$d_pren_comp] = "";
} # fine for $num1
} # fine if ($d_prenota_comp and...
} # fine for $num_idpr

$condizioni_regole1_non_sel = "";
if ($applica_regole1 == "n" or ($applica_regole1 == "f" and $attiva_regole1_consentite != "n")) {
for ($num1 = 0 ; $num1 < count($regole1_consentite) ; $num1++) if ($regole1_consentite[$num1]) $condizioni_regole1_non_sel .= "motivazione != '".$regole1_consentite[$num1]."' and ";
if ($condizioni_regole1_non_sel) $condizioni_regole1_non_sel = " and (motivazione2 = 'x' or (".str_replace("motivazione != ' '","motivazione != '' and motivazione is not null",substr($condizioni_regole1_non_sel,0,-5))."))";
} # fine if ($applica_regole1 == "n" or ($applica_regole1 == "f" and...
$app_agenzia = esegui_query("select * from $tableregole where app_agenzia != ''$condizioni_regole1_non_sel");
if ($applica_regole1 != "m" and $applica_regole1 != "f") $num_app_agenzia = numlin_query($app_agenzia);
else $num_app_agenzia = 0;

#Se ci sono regole per $app_agenzia inserisco prenotazioni fisse in $app_prenota_id2
if ($num_app_agenzia != 0) {
unset($info_periodi_ag);
$info_periodi_ag['numero'] = 0;
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$mot2 = risul_query($app_agenzia,$num1,'motivazione2');
if ($mot2 == "x") {
$info_periodi_ag['app'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'app_agenzia');
$info_periodi_ag['ini'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'iddatainizio');
$info_periodi_ag['fine'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'iddatafine');
$info_periodi_ag['numero']++;
} # fine if ($mot2 == "x")
} # fine for $num1
if ($info_periodi_ag['numero']) inserisci_prenota_fittizie($info_periodi_ag,$profondita,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett,$app_assegnabili_id);
$limiti_var2 = $limiti_var;
$profondita2 = $profondita;
$prenota_in_app_sett2 = $prenota_in_app_sett;
$inizio_prenota_id2 = $inizio_prenota_id;
$fine_prenota_id2 = $fine_prenota_id;
$app_prenota_id2 = $app_prenota_id;
$app_assegnabili_id2 = $app_assegnabili_id;
unset($info_periodi_ag);
$info_periodi_ag['numero'] = 0;
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$mot2 = risul_query($app_agenzia,$num1,'motivazione2');
if ($mot2 != "x") {
$info_periodi_ag['app'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'app_agenzia');
$info_periodi_ag['ini'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'iddatainizio');
$info_periodi_ag['fine'][$info_periodi_ag['numero']] = risul_query($app_agenzia,$num1,'iddatafine');
$info_periodi_ag['numero']++;
} # fine if ($mot2 != "x")
} # fine for $num1
if ($info_periodi_ag['numero']) inserisci_prenota_fittizie($info_periodi_ag,$profondita2,$app_prenota_id2,$inizio_prenota_id2,$fine_prenota_id2,$prenota_in_app_sett2,$app_assegnabili_id2);
$occupare_app_agenzia_sempre = "NO";
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
$numprenotazioni = 0;
for ($num2 = 0 ; $num2 < $dati_app['totapp'] ; $num2++) if (!empty($prenota_in_app_sett2[$dati_app['posizione'][$num2]][$num1])) $numprenotazioni++;
if ($numprenotazioni >= $numappartamenti) $occupare_app_agenzia_sempre = "SI";
} # fine for $num1
if ($occupare_app_agenzia_sempre != "SI") {
$app_orig_prenota_id2 = $app_prenota_id2;

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$inizioperiodo_vett = $inizioperiodo_idpr[$id_prenota];
$fineperiodo_vett = $fineperiodo_idpr[$id_prenota];
$app_richiesti2 = $app_richiesti_idpr[$id_prenota];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
if ($prenota_comp) cancella_prenota_compagne($prenota_comp_vett_idpr[$id_prenota],$num_prenota_comp_idpr[$id_prenota],$inizioperiodo_vett,$fineperiodo_vett,$app_richiesti2,$inizio_prenota_id2,$fine_prenota_id2,$app_assegnabili_id2,$app_prenota_id2,$prenota_in_app_sett2);
$app_liberato = "";
liberasettimane($inizioperiodo_vett,$fineperiodo_vett,$limiti_var2,$anno,$fatto_libera,$app_liberato,$profondita2,$app_richiesti2,$app_prenota_id2,$app_orig_prenota_id2,$inizio_prenota_id2,$fine_prenota_id2,$app_assegnabili_id2,$prenota_in_app_sett2,$dati_app,$PHPR_TAB_PRE."prenota");
if ($fatto_libera == "NO") break;
else {
if ($prenota_comp) ripristina_prenota_compagne($prenota_comp_vett_idpr[$id_prenota],$num_prenota_comp_idpr[$id_prenota],$inizioperiodo_vett,$fineperiodo_vett,$app_liberato,$app_prenota_id2,$prenota_in_app_sett2,$fine_prenota_id2,$profondita2);
$inizio_prenota_id2[$id_prenota] = $inizioperiodo_idpr[$id_prenota];
$fine_prenota_id2[$id_prenota] = $fineperiodo_idpr[$id_prenota];
if (empty($app_richiesti_idpr[$id_prenota])) $app_assegnabili_id2[$id_prenota] = "v";
else {
$app_assegnabili_id2[$id_prenota] = "";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (isset($app_richiesti_idpr[$id_prenota][$idapp]) and $app_richiesti_idpr[$id_prenota][$idapp] == "SI") {
$app_assegnabili_id2[$id_prenota] .= ",$idapp";
} # fine if (isset($app_richiesti_idpr[$id_prenota][$idapp]) and $app_richiesti_idpr[$id_prenota][$idapp] == "SI")
} # fine for $num1
$app_assegnabili_id2[$id_prenota] = substr($app_assegnabili_id2[$id_prenota],1);
if ($app_assegnabili_id2[$id_prenota] == $app_liberato) $app_assegnabili_id2[$id_prenota] = "";
} # fine else if (empty($app_richiesti_idpr[$id_prenota]))
for ($num1 = $inizio_prenota_id2[$id_prenota] ; $num1 <= $fine_prenota_id2[$id_prenota] ; $num1++) {
$prenota_in_app_sett2[$app_liberato][$num1] = $id_prenota;
} # fine for $num1
$app_prenota_id2[$id_prenota] = $app_liberato;
} # fine else if ($fatto_libera == "NO")
} # fine for $num_idpr

} # fine if ($occupare_app_agenzia_sempre != "SI")
else $fatto_libera = "NO";
if ($fatto_libera == "SI") {
$occupare_app_agenzia = "NO";
$app_prenota_id = $app_prenota_id2;
$app_orig_prenota_id = $app_orig_prenota_id2;
$prenota_in_app_sett = $prenota_in_app_sett2;
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$n_appartamento_idpr[$id_prenota] = $app_prenota_id[$id_prenota];
} # fine for $num_idpr
$avvia_transazione = "SI";
} # fine if ($fatto_libera == "SI")

else {
$occupare_app_agenzia = "SI";
$limiti_var['t_limite'] = (time() + $sec_limite_libsett);
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$inizioperiodo_vett = $inizioperiodo_idpr[$id_prenota];
$fineperiodo_vett = $fineperiodo_idpr[$id_prenota];
$app_richiesti = $app_richiesti_idpr[$id_prenota];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
if ($prenota_comp) cancella_prenota_compagne($prenota_comp_vett,$num_prenota_comp,$inizioperiodo_vett,$fineperiodo_vett,$app_richiesti,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$app_prenota_id,$prenota_in_app_sett);
$app_liberato = "";
liberasettimane($inizioperiodo_vett,$fineperiodo_vett,$limiti_var,$anno,$fatto_libera2,$app_liberato,$profondita,$app_richiesti,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");
if ($applica_regole1 == "f" and $attiva_regole1_consentite != "n") $fatto_libera2 = "NO";
if ($fatto_libera2 == "NO") break;
else {
if ($prenota_comp) ripristina_prenota_compagne($prenota_comp_vett_idpr[$id_prenota],$num_prenota_comp_idpr[$id_prenota],$inizioperiodo_vett,$fineperiodo_vett,$app_liberato,$app_prenota_id,$prenota_in_app_sett,$fine_prenota_id,$profondita);
$inizio_prenota_id[$id_prenota] = $inizioperiodo_idpr[$id_prenota];
$fine_prenota_id[$id_prenota] = $fineperiodo_idpr[$id_prenota];
if (empty($app_richiesti_idpr[$id_prenota])) $app_assegnabili_id[$id_prenota] = "v";
else {
$app_assegnabili_id[$id_prenota] = "";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (isset($app_richiesti_idpr[$id_prenota][$idapp]) and $app_richiesti_idpr[$id_prenota][$idapp] == "SI") $app_assegnabili_id[$id_prenota] .= ",$idapp";
} # fine for $num1
$app_assegnabili_id[$id_prenota] = substr($app_assegnabili_id[$id_prenota],1);
if ($app_assegnabili_id[$id_prenota] == $app_liberato) $app_assegnabili_id[$id_prenota] = "";
} # fine else if (empty($app_richiesti_idpr[$id_prenota]))
for ($num1 = $inizio_prenota_id[$id_prenota] ; $num1 <= $fine_prenota_id[$id_prenota] ; $num1++) {
$prenota_in_app_sett[$app_liberato][$num1] = $id_prenota;
} # fine for $num1
$app_prenota_id[$id_prenota] = $app_liberato;
} # fine else if ($fatto_libera2 == "NO")
} # fine for $num_idpr

if ($fatto_libera2 == "NO") $inserire = "NO";
else {
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$n_appartamento_idpr[$id_prenota] = $app_prenota_id[$id_prenota];
} # fine for $num_idpr
echo "<br>".mex("Si devono fare i seguenti spostamenti nei periodi della <div style=\"display: inline; color: blue;\">regola di assegnazione 1</div>",$pag).":<br>";
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$id_app_agenzia = risul_query($app_agenzia,$num1,'app_agenzia');
$idinizio_app_agenzia = risul_query($app_agenzia,$num1,'iddatainizio');
$idfine_app_agenzia = risul_query($app_agenzia,$num1,'iddatafine');
$motivazione_app_agenzia = risul_query($app_agenzia,$num1,'motivazione');
$idprenota_cambiate_da_ag = esegui_query("select idprenota from $tableprenota where idappartamenti = '$id_app_agenzia' and iddatainizio <= '$idfine_app_agenzia' and iddatafine >= '$idinizio_app_agenzia'");
$num_idprenota_cambiate_da_ag = numlin_query($idprenota_cambiate_da_ag);
for ($num2 = 0 ; $num2 < $num_idprenota_cambiate_da_ag ; $num2 = $num2 + 1) {
$idprenota_cambiata = risul_query($idprenota_cambiate_da_ag,$num2,'idprenota');
if (!empty($app_orig_prenota_id[$idprenota_cambiata]) and $app_prenota_id[$idprenota_cambiata] != $id_app_agenzia) {
$idapp_camb = $app_prenota_id[$idprenota_cambiata];
$dati_cambiati = esegui_query("select * from $tableprenota where idprenota = '$idprenota_cambiata'");
$idclienti_camb = risul_query($dati_cambiati,0,'idclienti');
$cliente_camb = esegui_query("select cognome from $tableclienti where idclienti = '$idclienti_camb'");
if ($idclienti_camb) $cliente_camb = risul_query($cliente_camb,0,'cognome');
else $cliente_camb = "?";
$iddatainizio_camb = $inizio_prenota_id[$idprenota_cambiata];
$datainizio_camb = esegui_query("select datainizio from $tableperiodi where idperiodi = '$iddatainizio_camb'");
$datainizio_camb = risul_query($datainizio_camb,0,'datainizio');
$datainizio_camb_f = formatta_data($datainizio_camb,$stile_data);
$iddatafine_camb = $fine_prenota_id[$idprenota_cambiata];
$datafine_camb = esegui_query("select datafine from $tableperiodi where idperiodi = '$iddatafine_camb'");
$datafine_camb = risul_query($datafine_camb,0,'datafine');
$datafine_camb_f = formatta_data($datafine_camb,$stile_data);
echo mex("La prenotazione dal",$pag)." $datainizio_camb_f ".mex("al",$pag)." $datafine_camb_f ".mex("a nome di",$pag)." $cliente_camb ".mex("verrà spostata dall'appartamento",'unit.php')." <div style=\"display: inline; color: blue;\"><b>$id_app_agenzia</b></div> (<b>$motivazione_app_agenzia</b>) ".mex("al",'unit.php')." $idapp_camb.<br>";
} # fine if ($app_prenota_id[$idprenota_cambiata] and $app_prenota_id[$idprenota_cambiata] != $id_app_agenzia)
} # fine for $num2
$idprenota_cambiate_a_ag = prenota_in_app_e_periodo($id_app_agenzia,$idinizio_app_agenzia,$idfine_app_agenzia,$prenota_in_app_sett,$fine_prenota_id,$num_pca);
for ($num2 = 1 ; $num2 <= $num_pca ; $num2++) {
$idprenota_cambiata = $idprenota_cambiate_a_ag[$num2];
if (!empty($app_orig_prenota_id[$idprenota_cambiata]) and $app_prenota_id[$idprenota_cambiata] != $app_orig_prenota_id[$idprenota_cambiata]) {
$dati_cambiati = esegui_query("select * from $tableprenota where idprenota = $idprenota_cambiata");
$idapp_camb = $app_orig_prenota_id[$idprenota_cambiata];
$idclienti_camb = risul_query($dati_cambiati,0,'idclienti');
$cliente_camb = esegui_query("select cognome from $tableclienti where idclienti = $idclienti_camb");
if ($idclienti_camb) $cliente_camb = risul_query($cliente_camb,0,'cognome');
else $cliente_camb = "?";
$iddatainizio_camb = $inizio_prenota_id[$idprenota_cambiata];
$datainizio_camb = esegui_query("select datainizio from $tableperiodi where idperiodi = $iddatainizio_camb");
$datainizio_camb = risul_query($datainizio_camb,0,'datainizio');
$datainizio_camb_f = formatta_data($datainizio_camb,$stile_data);
$iddatafine_camb = $fine_prenota_id[$idprenota_cambiata];
$datafine_camb = esegui_query("select datafine from $tableperiodi where idperiodi = $iddatafine_camb");
$datafine_camb = risul_query($datafine_camb,0,'datafine');
$datafine_camb_f = formatta_data($datafine_camb,$stile_data);
echo mex("La prenotazione dal",$pag)." $datainizio_camb_f ".mex("al",$pag)." $datafine_camb_f ".mex("a nome di",$pag)." $cliente_camb ".mex("verrà spostata dall'appartamento",'unit.php')." $idapp_camb ".mex("al",'unit.php')." <div style=\"display: inline; color: blue;\"><b>$id_app_agenzia</b></div> (<b>$motivazione_app_agenzia</b>).<br>";
} # fine if ($app_orig_prenota_id[$idprenota_cambiata] and...
} # fine for $num2
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($id_app_agenzia == $app_prenota_id[$id_prenota] and $idinizio_app_agenzia <= $fineperiodo_idpr[$id_prenota] and $idfine_app_agenzia >= $inizioperiodo_idpr[$id_prenota]) {
echo mex("La prenotazione verrà",$pag)." ";
if ($d_appartamento_idpr[$id_prenota] == $app_prenota_id[$id_prenota]) echo mex("mantenuta",$pag);
else echo mex("spostata",$pag);
echo " ".mex("nell'appartamento",'unit.php')." <b class=\"colblu\">$id_app_agenzia</b> (<b>$motivazione_app_agenzia</b>).<br>";
} # fine if ($id_app_agenzia == $app_prenota_id[$id_prenota] and ...
} # fine for $num_idpr
} # fine for $num1
echo "<br>";
} # fine else if ($fatto_libera2 == "NO")
} # fine else if ($fatto_libera == "SI")
} # fine if ($num_app_agenzia != 0)

else {
# Libero qui gli appartamenti quando non ci sono regole 1 
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$inizioperiodo_vett = $inizioperiodo_idpr[$id_prenota];
$fineperiodo_vett = $fineperiodo_idpr[$id_prenota];
$app_richiesti = $app_richiesti_idpr[$id_prenota];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
if ($prenota_comp) cancella_prenota_compagne($prenota_comp_vett_idpr[$id_prenota],$num_prenota_comp_idpr[$id_prenota],$inizioperiodo_vett,$fineperiodo_vett,$app_richiesti,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$app_prenota_id,$prenota_in_app_sett);
$app_liberato = "";
liberasettimane ($inizioperiodo_vett,$fineperiodo_vett,$limiti_var,$anno,$fatto_libera,$app_liberato,$profondita,$app_richiesti,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");
if ($fatto_libera == "NO") {
$inserire = "NO";
break;
} # fine if ($fatto_libera == "NO")
else {
if ($prenota_comp) ripristina_prenota_compagne($prenota_comp_vett_idpr[$id_prenota],$num_prenota_comp_idpr[$id_prenota],$inizioperiodo_vett,$fineperiodo_vett,$app_liberato,$app_prenota_id,$prenota_in_app_sett,$fine_prenota_id,$profondita);
# Reinserisco la prenotazione nelle variabili nel caso si modifichino più prenotazioni
$inizio_prenota_id[$id_prenota] = $inizioperiodo_idpr[$id_prenota];
$fine_prenota_id[$id_prenota] = $fineperiodo_idpr[$id_prenota];
if (empty($app_richiesti_idpr[$id_prenota])) $app_assegnabili_id[$id_prenota] = "v";
else {
$app_assegnabili_id[$id_prenota] = "";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (isset($app_richiesti_idpr[$id_prenota][$idapp]) and $app_richiesti_idpr[$id_prenota][$idapp] == "SI") {
$app_assegnabili_id[$id_prenota] .= ",$idapp";
} # fine if (isset($app_richiesti_idpr[$id_prenota][$idapp]) and $app_richiesti_idpr[$id_prenota][$idapp] == "SI")
} # fine for $num1
$app_assegnabili_id[$id_prenota] = substr($app_assegnabili_id[$id_prenota],1);
if ($app_assegnabili_id[$id_prenota] == $app_liberato) $app_assegnabili_id[$id_prenota] = "";
} # fine else if (empty($app_richiesti_idpr[$id_prenota]))
for ($num1 = $inizio_prenota_id[$id_prenota] ; $num1 <= $fine_prenota_id[$id_prenota] ; $num1++) {
$prenota_in_app_sett[$app_liberato][$num1] = $id_prenota;
} # fine for $num1
$app_prenota_id[$id_prenota] = $app_liberato;
} # fine else if ($fatto_libera == "NO")
} # fine for $num_idpr
if ($fatto_libera == "SI") {
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$n_appartamento_idpr[$id_prenota] = $app_prenota_id[$id_prenota];
} # fine for $num_idpr
} # fine if ($fatto_libera == "SI")
} # fine else if ($num_app_agenzia != 0)

if ($inserire == "NO") {
echo mex("Nel periodo selezionato <b>non</b> è possibile ospitare il cliente in un <span class=\"colred\">appartamento</span> tra quelli richiesti",'unit.php');
if (!empty($app_incomp_costi_idpr)) echo " ".mex("con i costi aggiuntivi selezionati",$pag);
echo ".<br>";
if ($prenota_iniziata == "SI" and $id_per_corr_finto == "" and $priv_ins_periodi_passati == "s") {
if (isset($form_continua_iniziata) and $form_continua_iniziata == "SI") echo "</div></form>";
$form_continua_iniziata = "";
if ($n_inizioperiodo) $n_data_corrente_f = $n_inizioperiodo_f;
else $n_data_corrente_f = $d_data_inizio_f;
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_per_corr_finto\" value=\"".($inizioperiodo_min - 1)."\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"modificaprenotazione\" value=\"modifica\">";
if ($sposta_per_checkin) echo "<input type=\"hidden\" name=\"ins_checkin\" value=\"1\">";
echo "$dati_form_modifica
".mex("Normalmente le prenotazioni già iniziate e quelle che hanno registrato l'orario di entrata non vengono spostate",$pag).".<br>
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Prova di nuovo",$pag)."\">
".mex("muovendo anche le prenotazioni iniziate dopo il",$pag)." $n_data_corrente_f ".mex("considerate fisse perchè <div style=\"display: inline; color: red;\">ad oggi già iniziate</div>",$pag).".<br>
</div></form><br>";
} # fine if ($prenota_iniziata == "SI" and $id_per_corr_finto == "" and $priv_ins_periodi_passati == "s")
} # fine if ($inserire == "NO")

if ($inserire != "NO") {
$tableprenota_da_aggiornare = "SI";
if (@is_array($app_orig_prenota_id)) {
reset($app_orig_prenota_id);
foreach ($app_orig_prenota_id as $idprenota => $app_prenota) {
if ($app_prenota_id[$idprenota] != $app_prenota) {
$app_cambiato = $app_prenota_id[$idprenota];
$spostamenti_transazione .= "$idprenota,$app_cambiato,";
} # fine if ($app_prenota_id[$idprenota] != $app_prenota)
} # fine foreach ($app_orig_prenota_id as $idprenota => $app_prenota)
$spostamenti_transazione = substr($spostamenti_transazione,0,-1);
} # fine if (@is_array($app_orig_prenota_id))
} # fine if ($inserire != "NO")

} # fine else if ($inserire == "NO")
unlock_tabelle($tabelle_lock);

} # fine if ($verifica_app == "SI" and $inserire != "NO")




$d_confermato = $d_confermato_idpr[$id_prenota_idpr[0]];
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$n_appartamento = $n_appartamento_idpr[$id_prenota];
$d_appartamento = $d_appartamento_idpr[$id_prenota];
$n_assegnazioneapp = $n_assegnazioneapp_idpr[$id_prenota];
$n_lista_app = $n_lista_app_idpr[$id_prenota];
$prenota_comp = $prenota_comp_idpr[$id_prenota];
$d_prenota_comp = $d_prenota_comp_idpr[$id_prenota];
if (($dati_da_anno_prec == "SI" or $prenota_in_anno_succ) and (($n_appartamento != "" and $n_appartamento != $d_appartamento) or $n_assegnazioneapp != "" or $n_lista_app != "" or $prenota_comp != $d_prenota_comp)) {
$inserire = "NO";
echo mex("Non si può cambiare l'assegnazione di una prenotazione che si trova <div style=\"display: inline; color: red;\">tra due anni</div>",$pag).".<br>";
} # fine if (($dati_da_anno_prec == "SI" or $prenota_in_anno_succ) and (($n_appartamento != "" and...
if ($d_confermato != $d_confermato_idpr[$id_prenota]) $d_confermato = "~";
} # fine for $num_idpr



if ($dati_da_anno_prec == "SI") passa_var_a_anno_prec($id_prenota,$tableperiodi,$tableprenota,$tablecostiprenota,$d_id_data_inizio,$d_id_data_fine,$n_fineperiodo,$inizioperiodo,$fineperiodo,$lunghezza_periodo,$dati_prenota_modifica);
if ($inizioperiodo_min != 0 and $inserire != "NO") {

if ($priv_mod_commenti_pers != "s" and $tipo_commento != "checkin" and $tipo_commento != "checkout") $tipo_commento = "";
if (!strcmp((string) $tipo_commento,"") or $tipo_commento == "checkin" or $tipo_commento == "checkout") {
if ($priv_mod_commento != "s") $n_commento = null;
if (!empty($n_commento)) {
if ($tipo_commento == "checkin") echo mex("Verrà aggiunto un <b>promemoria</b> per l'<em>entrata</em>",$pag).".<br>";
if ($tipo_commento == "checkout") echo mex("Verrà aggiunto un <b>promemoria</b> per l'<em>uscita</em>",$pag).".<br>";
if ($tipo_commento != "checkin" and $tipo_commento != "checkout") echo mex("Il <b>commento</b> verrà cambiato",$pag).".<br>";
} # fine if (!empty($n_commento))
} # fine if (!strcmp((string) $tipo_commento,"") or $tipo_commento == "checkin" or $tipo_commento == "checkout")
elseif ($comm_pers_presenti[$tipo_commento]) echo mex("Il commento",$pag)." <b>\"<em>$tipo_commento</em>\"</b> ".mex("verrà cambiato",$pag).".<br>";
if ($n_cancella_commento and $priv_mod_commento == "s") echo mex("Il <b>commento</b> verrà cancellato",$pag).".<br>";
elseif ($n_cancella_commento) unset($n_cancella_commento);

if ($n_origine_prenota and $priv_mod_orig_prenota == "s") {
echo mex("L'origine della prenotazione verrà cambiata a",$pag)." \"<b>$n_origine_prenota</b>\".<br>";
#$origine_prenota = $n_origine_prenota;
} # fine if ($n_origine_prenota and $priv_mod_orig_prenota == "s")
#else $origine_prenota = $d_origine_prenota;

if ($priv_mod_sconto != "s" or controlla_soldi($n_sconto) == "NO") unset($n_sconto);
if ($priv_mod_caparra != "s" or controlla_soldi($n_caparra,"SI") == "NO") unset($n_caparra);
if ($priv_mod_caparra != "s" or controlla_soldi($n_commissioni,"SI") == "NO") unset($n_commissioni);


$n_nometipotariffa_orig = fixset($n_nometipotariffa);
$numcostiagg_orig = fixset($numcostiagg);
$n_pagato_orig = fixset($n_pagato);
$n_confermato_orig = fixset($n_confermato);
$n_sconto_orig = fixset($n_sconto);
$tipo_val_sconto_orig = fixset($tipo_val_sconto);
$n_commissioni_orig = fixset($n_commissioni);
unset($n_nometipotariffa_idpr);
unset($n_tariffesettimanali_idpr);
unset($n_costo_tariffa_idpr);
unset($costi_aggiuntivi_modificati_int_idpr);
unset($costi_aggiuntivi_da_inserire_int_idpr);
unset($n_sconto_caparra_idpr);
unset($n_pagato_idpr);
unset($n_confermato_idpr);
unset($n_costo_tot_idpr);
$arrotond_predef = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_predef' and idutente = '$id_utente'");
$arrotond_predef = risul_query($arrotond_predef,0,'valpersonalizza');

for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($num_id_prenota > 1) $per_la_prenotazione = " ".mex("per la prenotazione",$pag)." <b>$id_prenota</b>";
else $per_la_prenotazione = "";
$d_id_data_inizio = $d_id_data_inizio_idpr[$id_prenota];
$d_id_data_fine = $d_id_data_fine_idpr[$id_prenota];
$n_nometipotariffa = $n_nometipotariffa_orig;
if (isset($n_nometipotariffa_vett) and $n_nometipotariffa_vett == "SI") {
$n_nometipotariffa = ${"n_nometipotariffa_".$id_prenota};
$n_nometipotariffa_orig = $n_nometipotariffa;
} # fine if (isset($n_nometipotariffa_vett) and $n_nometipotariffa_vett == "SI")
$numcostiagg = $numcostiagg_orig;
$n_pagato = $n_pagato_orig;
$n_confermato = $n_confermato_orig;
$n_sconto = $n_sconto_orig;
$tipo_val_sconto = $tipo_val_sconto_orig;
$n_commissioni = $n_commissioni_orig;
$d_nome_tariffa = $d_nome_tariffa_idpr[$id_prenota];
$d_tariffesettimanali = $d_tariffesettimanali_idpr[$id_prenota];
$d_costo_tariffa = $d_costo_tariffa_idpr[$id_prenota];
$d_molt_tariffa = $d_molt_tariffa_idpr[$id_prenota];
$d_nome_tipotariffa = $d_nome_tipotariffa_idpr[$id_prenota];
$d_num_persone = $d_num_persone_idpr[$id_prenota];
$d_sconto = $d_sconto_idpr[$id_prenota];
$d_caparra = $d_caparra_idpr[$id_prenota];
$d_valuta_caparra = $d_valuta_caparra_idpr[$id_prenota];
$d_cambio_caparra = $d_cambio_caparra_idpr[$id_prenota];
$d_arrotond_caparra = $d_arrotond_caparra_idpr[$id_prenota];
$d_met_paga_caparra = $d_met_paga_caparra_idpr[$id_prenota];
$d_commissioni = $d_commissioni_idpr[$id_prenota];
$d_pagato = $d_pagato_idpr[$id_prenota];
$d_prezzo_costo_agg = $d_prezzo_costo_agg_idpr[$id_prenota];
$d_costo_agg_tot = $d_costo_agg_tot_idpr[$id_prenota];
$d_costo_tot = $d_costo_tot_idpr[$id_prenota];
$n_costo_tot = $d_costo_tot;
$dati_cap = ${"dati_cap".$id_prenota};
$inizioperiodo = $inizioperiodo_idpr[$id_prenota];
$fineperiodo = $fineperiodo_idpr[$id_prenota];
$lunghezza_periodo = $fineperiodo - $inizioperiodo + 1;
$numpersone = $numpersone_idpr[$id_prenota];
$cat_persone = $cat_persone_idpr[$id_prenota];
$d_cat_persone = $d_cat_persone_idpr[$id_prenota];
$costi_aggiuntivi_modificati_int = null;
$costi_aggiuntivi_da_inserire_int = null;
unset($d_costi_aggiuntivi);
unset($num_costi_presenti);
$n_costo_tariffa = null;
$n_molt_tariffa = null;


if ($dati_cat_pers['num']) {
$coeff_cat_persone = array();
$coeff_cat_persone['i'] = 0;
$coeff_cat_persone['p'] = 0;
$d_coeff_cat_persone = 0;
if ($catpers_camb_idpr[$id_prenota]) $cat_persone['arrotond'] = $dati_cat_pers['arrotond'];
else $cat_persone['arrotond'] = $d_cat_persone['arrotond'];
if ($numpersone) {
for ($num1 = 0 ; $num1 < $cat_persone['num'] ; $num1++) {
if ($cat_persone[$num1]['molt']) {
if ($cat_persone[$num1]['perc'] == "100") $coeff_cat_persone['i'] += (double) $cat_persone[$num1]['molt'];
else $coeff_cat_persone['p'] += ((double) $cat_persone[$num1]['molt'] * ((double) $cat_persone[$num1]['perc'] / 100));
} # fine if ($cat_persone[$num1]['molt'])
} # fine for $num1
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
if ($d_cat_persone[$num1]['molt']) {
if ($d_cat_persone[$num1]['perc'] == "100") $d_coeff_cat_persone += (double) $d_cat_persone[$num1]['molt'];
else $d_coeff_cat_persone += ((double) $d_cat_persone[$num1]['molt'] * ((double) $d_cat_persone[$num1]['perc'] / 100));
} # fine if ($d_cat_persone[$num1]['molt'])
} # fine for $num1
} # fine if ($numpersone)
} # fine if ($dati_cat_pers['num'])

$n_tariffesettimanali = "";
$n_tariffesettimanalip = "";
$n_tariffesettimanalipo = "";
if ($n_nometipotariffa or $n_inizioperiodo or $n_fineperiodo or (($numpersone != $d_num_persone or $catpers_camb_idpr[$id_prenota]) and $d_molt_tariffa == "p")) {
if ($n_nometipotariffa or $n_inizioperiodo < $d_id_data_inizio or $n_fineperiodo > $d_id_data_fine) $nuovi_prezzi = "SI";
else $nuovi_prezzi = "NO";
$n_costo_tariffa = 0;
$tariffa_da_cercare = "SI";
if (!$n_nometipotariffa) {
$n_nometipotariffa = $d_nome_tariffa;
$n_molt_tariffa = $d_molt_tariffa;
} # fine if (!$n_nometipotariffa)
else $n_molt_tariffa = $dati_tariffe[$n_nometipotariffa]['moltiplica'];
$n_nometipotariffa_vedi = $n_nometipotariffa;
$d_nome_tariffa_vedi = $d_nome_tariffa;
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($d_nome_tariffa == $tariffa) $d_nome_tariffa_vedi = mex("tariffa",$pag).$numtariffa;
if ($n_nometipotariffa == $tariffa) {
$tariffa_da_cercare = "NO";
$tipotariffa = $tariffa;
$n_nometipotariffa_vedi = mex("tariffa",$pag).$numtariffa;
$nome_tariffa_in_tab = $dati_tariffe[$tariffa]['nome'];
if ($nome_tariffa_in_tab) {
$n_nometipotariffa = $nome_tariffa_in_tab;
$n_nometipotariffa_vedi = $nome_tariffa_in_tab;
} # fine if ($nome_tariffa_in_tab)
} # fine if ($n_nometipotariffa == $tariffa)
} # fine for $numtariffa
$trovata_tariffa = "SI";
if ($tariffa_da_cercare != "NO") {
$tipotariffa = $n_nometipotariffa;
$trovata_tariffa = "NO";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($tipotariffa == $dati_tariffe[$tariffa]['nome']) {
$tipotariffa = $tariffa;
$trovata_tariffa = "SI";
$tipotariffa_vedi = mex("tariffa",$pag).$numtariffa;
} # fine if ($tipotariffa == $dati_tariffe[$tariffa]['nome'])
} # fine for $numtariffa
} # fine if ($tariffa_da_cercare != "NO")
else $tipotariffa_vedi = mex("tariffa",$pag).substr($tipotariffa,7);
unset($d_tariffesett_vett);
$d_tariffesett = explode(";",$d_tariffesettimanali);
$d_tariffesettpo = "";
if (count($d_tariffesett) > 1) {
$d_tariffesettp = explode(",",$d_tariffesett[1]);
if (count($d_tariffesett) > 2) $d_tariffesettpo = explode(",",$d_tariffesett[2]);
} # fine if (count($d_tariffesett) > 1)
else $d_tariffesettp = "";
$d_tariffesett = explode(",",$d_tariffesett[0]);
for ($num1 = $d_id_data_inizio ; $num1 <= $d_id_data_fine ; $num1++) {
$d_tariffesett_vett[$num1] = (double) $d_tariffesett[($num1 - $d_id_data_inizio)];
if ($d_tariffesettp) {
$d_tariffesett_vett[$num1] = $d_tariffesett_vett[$num1] - (double) $d_tariffesettp[($num1 - $d_id_data_inizio)];
if ($d_tariffesettpo) $d_tariffesett_vett['p'][$num1] = (double) $d_tariffesettpo[($num1 - $d_id_data_inizio)];
else {
if (!$dati_cat_pers['num']) $d_tariffesett_vett['p'][$num1] = (double) $d_tariffesettp[($num1 - $d_id_data_inizio)] / (double) $d_num_persone;
else $d_tariffesett_vett['p'][$num1] = round(((double) $d_tariffesettp[($num1 - $d_id_data_inizio)] / (double) $d_coeff_cat_persone),2);
} # fine else if ($d_tariffesettpo)
} # fine if ($d_tariffesettp)
} # fine for $num1
if ($nuovi_prezzi == "SI") {
if ($trovata_tariffa == "NO") {
$inserire = "NO";
echo mex("La tariffa",$pag)." <div style=\"display: inline; color: red;\">$tipotariffa</div>$per_la_prenotazione ".mex("non esiste più, cambiala prima di aggiornare",$pag).".<br>";
} # fine if ($trovata_tariffa == "NO")
else {
$n_molt_tariffa = $dati_tariffe[$tipotariffa]['moltiplica'];
$tariffa_chiusa = 0;
for ($num1 = $inizioperiodo ; $num1 <= $fineperiodo ; $num1++) {
$esistetariffa = 1;
if ($n_nometipotariffa_orig or $num1 < $d_id_data_inizio or $num1 > $d_id_data_fine) {
$rigasettimana = esegui_query("select * from $tableperiodi where idperiodi = '$num1' ");
$costo_tariffa_settimana = risul_query($rigasettimana,0,$tipotariffa);
$costo_tariffap_settimana = risul_query($rigasettimana,0,$tipotariffa."p");
if ((!strcmp((string) $costo_tariffa_settimana,"") or $costo_tariffa_settimana < 0) and (!strcmp((string) $costo_tariffap_settimana,"") or $costo_tariffap_settimana < 0)) {
$inserire = "NO";
$esistetariffa = 0;
$inizioperiodotariffa = risul_query($rigasettimana,0,'datainizio');
$inizioperiodotariffa_f = formatta_data($inizioperiodotariffa,$stile_data);
$fineperiodotariffa = risul_query($rigasettimana,0,'datafine');
$fineperiodotariffa_f = formatta_data($fineperiodotariffa,$stile_data);
echo mex("<b>Non</b> è stato ancora inserito il prezzo della",$pag)." <div style=\"display: inline; color: red;\">$tipotariffa_vedi</div> ".mex("per $parola_la $parola_settimana dal",$pag)." $inizioperiodotariffa_f ".mex("al",$pag)." $fineperiodotariffa_f.<br>";
} # fine if ((!strcmp((string) $costo_tariffa_settimana,"") or $costo_tariffa_settimana < 0) and...
if ($n_nometipotariffa_orig and !empty($dati_tariffe[$tipotariffa]['chiusa'][$num1])) $tariffa_chiusa = 1;
} # fine if ($n_nometipotariffa_orig or $num1 < $d_id_data_inizio or...
else {
$costo_tariffa_settimana = $d_tariffesett_vett[$num1];
$costo_tariffap_settimana = fixset($d_tariffesett_vett['p'][$num1]);
} # fine else if ($n_nometipotariffa_orig or $num1 < $d_id_data_inizio or...
if ($esistetariffa) {
if (!strcmp((string) $costo_tariffa_settimana,"")) $costo_tariffa_settimana = 0;
if (!strcmp((string) $costo_tariffap_settimana,"")) $costo_tariffap_settimana = 0;
if ($n_molt_tariffa == "p") $n_tariffesettimanalipo .= ",".$costo_tariffap_settimana;
if (!$dati_cat_pers['num']) $costo_tariffap_settimana = (double) $costo_tariffap_settimana * (double) $numpersone;
else $costo_tariffap_settimana = (round(((double) $costo_tariffap_settimana * $coeff_cat_persone['p']) / $cat_persone['arrotond']) * $cat_persone['arrotond']) + ((double) $costo_tariffap_settimana * $coeff_cat_persone['i']);
$costo_tariffa_settimana_tot = $costo_tariffa_settimana + $costo_tariffap_settimana;
$n_costo_tariffa = $n_costo_tariffa + $costo_tariffa_settimana_tot;
$n_tariffesettimanali .= ",".$costo_tariffa_settimana_tot;
if ($n_molt_tariffa == "p") $n_tariffesettimanalip .= ",".$costo_tariffap_settimana;
} # fine if ($esistetariffa)
} # fine for $num1
if ($tariffa_chiusa) {
$inserire = "NO";
echo mex("La <b>tariffa</b> richiesta è <span class=\"colred\">chiusa</span> in questo periodo",$pag).$per_la_prenotazione.".<br>";
} # fine ($tariffa_chiusa)
} # fine else if ($trovata_tariffa == "NO")
} # fine if ($nuovi_prezzi == "SI")
else {
for ($num1 = $inizioperiodo ; $num1 <= $fineperiodo ; $num1++) {
$costo_tariffa_settimana = $d_tariffesett_vett[$num1];
$costo_tariffap_settimana = fixset($d_tariffesett_vett['p'][$num1]);
if (!strcmp((string) $costo_tariffa_settimana,"")) $costo_tariffa_settimana = 0;
if (!strcmp((string) $costo_tariffap_settimana,"")) $costo_tariffap_settimana = 0;
if ($n_molt_tariffa == "p") $n_tariffesettimanalipo .= ",".$costo_tariffap_settimana;
if (!$dati_cat_pers['num']) $costo_tariffap_settimana = (double) $costo_tariffap_settimana * (double) $numpersone;
else $costo_tariffap_settimana = (round(((double) $costo_tariffap_settimana * $coeff_cat_persone['p']) / $cat_persone['arrotond']) * $cat_persone['arrotond']) + ((double) $costo_tariffap_settimana * $coeff_cat_persone['i']);
$costo_tariffa_settimana_tot = $costo_tariffa_settimana + $costo_tariffap_settimana;
$n_costo_tariffa = $n_costo_tariffa + $costo_tariffa_settimana_tot;
$n_tariffesettimanali .= ",".$costo_tariffa_settimana_tot;
if ($n_molt_tariffa == "p") $n_tariffesettimanalip .= ",".$costo_tariffap_settimana;
} # fine for $num1
} # fine else if ($nuovi_prezzi == "SI")
$n_tariffesettimanali = substr($n_tariffesettimanali,1);
if ($n_tariffesettimanalip) {
$n_tariffesettimanali .= ";".substr($n_tariffesettimanalip,1);
if ($n_tariffesettimanalipo) $n_tariffesettimanali .= ";".substr($n_tariffesettimanalipo,1);
} # fine if ($n_tariffesettimanalip)
if ($inserire != "NO") {
#$n_nometipotariffa = aggslashdb($n_nometipotariffa);
if ($d_nome_tariffa_vedi != $n_nometipotariffa_vedi or $d_costo_tariffa != $n_costo_tariffa) {
$d_costo_tariffa_p = punti_in_num($d_costo_tariffa,$stile_soldi);
$n_costo_tariffa_p = punti_in_num($n_costo_tariffa,$stile_soldi);
echo mex("La tariffa verrà cambiata da",$pag)." <b>$d_nome_tariffa_vedi</b> ($d_costo_tariffa_p $Euro) ".mex("a",$pag)." <b>$n_nometipotariffa_vedi</b> ($n_costo_tariffa_p $Euro)$per_la_prenotazione.<br>";
} # fine if ($d_nome_tariffa_vedi != $n_nometipotariffa_vedi or $d_costo_tariffa != $n_costo_tariffa)
$costo_tariffa = $n_costo_tariffa;
$tariffesettimanali = $n_tariffesettimanali;
$n_costo_tot = $n_costo_tot + $n_costo_tariffa - $d_costo_tariffa;
} # fine if ($inserire != "NO")
$nome_tariffa = $n_nometipotariffa;
} # fine if ($n_nometipotariffa or $n_inizioperiodo or $n_fineperiodo or...

else {
$tipotariffa = "";
$trovata_tariffa = "NO";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($d_nome_tariffa == $tariffa) {
$trovata_tariffa = "SI";
$tipotariffa = $tariffa;
} # fine if ($d_nome_tariffa == $tariffa)
} # fine for $numtariffa
if ($trovata_tariffa == "NO") {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($d_nome_tariffa == $dati_tariffe[$tariffa]['nome']) {
$tipotariffa = $tariffa;
$trovata_tariffa = "SI";
} # fine if ($d_nome_tariffa == $dati_tariffe[$tariffa]['nome'])
} # fine for $numtariffa
} # fine if ($trovata_tariffa == "NO")
$nome_tariffa = $d_nome_tariffa;
$costo_tariffa = $d_costo_tariffa;
$tariffesettimanali = $d_tariffesettimanali;
} # fine else if ($n_nometipotariffa or $n_inizioperiodo or $n_fineperiodo or...


if (!empty($n_caparra) and $tipo_val_caparra == "perc_tar") {
$caparra_arrotond = $dati_tariffe[$tipotariffa]['caparra_arrotond'];
if (!strcmp((string) $caparra_arrotond,"") or $caparra_arrotond == "val" or $caparra_arrotond == "gio") $caparra_arrotond = $arrotond_predef;
$n_caparra = ($costo_tariffa * (double) $n_caparra) / 100;
$n_caparra = $n_caparra / $caparra_arrotond;
$n_caparra = floor($n_caparra);
$n_caparra = $n_caparra * $caparra_arrotond;
} # fine if (!empty($n_caparra) and $tipo_val_caparra == "perc_tar")
if (isset($n_calcola_caparra) and $n_calcola_caparra == "SI" and $inserire == "SI") {
if ($trovata_tariffa == "NO") {
$inserire = "NO";
echo mex("La tariffa",$pag)." <div style=\"display: inline; color: red;\">$nome_tariffa</div>$per_la_prenotazione ".mex("non esiste più, cambiala prima di aggiornare",$pag).".<br>";
} # fine if ($trovata_tariffa == "NO")
else $n_caparra = calcola_caparra($dati_tariffe,$tipotariffa,$inizioperiodo,$fineperiodo,$costo_tariffa,$tariffesettimanali);
} # fine if (isset($n_calcola_caparra) and $n_calcola_caparra == "SI" and $inserire == "SI")
if (isset($n_caparra) and strcmp((string) $n_caparra,"")) $caparra = $n_caparra;
else $caparra = $d_caparra;


# inizio sezione costi aggiuntivi
if (isset($non_modificare_costi_agg) and $non_modificare_costi_agg == "SI" and $priv_mod_costi_agg != "n" and $priv_mod_costi_agg != "p") $priv_mod_costi_agg = "v";
if ($priv_mod_costi_agg == "s" and (!defined("C_MASSIMO_NUM_COSTI_AGG_IN_PRENOTA") or C_MASSIMO_NUM_COSTI_AGG_IN_PRENOTA > $dati_cap['num'])) $inserisci_nuovi_costi = "SI";
else $inserisci_nuovi_costi = "NO";

# calcolo settimane e letti aggiuntivi per costi già presenti
$n_moltiplica_costo = array();
unset($n_settimane_costo);
$num_letti_agg = array('max' => 0);
unset($n_prezzo_costo_agg);
unset($num_ripetizioni_costo);
unset($nomi_costi_comb_presenti);
unset($categorie_combina_presenti);
$cambia_cat_pers_ca = array();
$n_costo_agg_tot = (double) 0;
$costo_escludi_perc = (double) 0;

for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$idca = $dati_cap[$numca]['id'];
$numcostoaggiuntivo = "costoaggiuntivo".$idca;
$sett_costoaggiuntivo = "sett_costoaggiuntivo".$idca;
$molt_costoaggiuntivo = "molt_costoaggiuntivo".$idca;
$id_periodi_costo = "";
if ($priv_mod_costi_agg != "s") $$numcostoaggiuntivo = "SI";
if ($$numcostoaggiuntivo == "SI") {
if ($dati_cap[$numca]['tariffeassociate'] and ($nome_tariffa != $d_nome_tariffa)) $$numcostoaggiuntivo = "";
else {
if ($dati_cap[$numca]['tariffeassociate'] and associa_costo_a_tariffa($dati_cap,$numca,"tariffeassociate",($fineperiodo - $inizioperiodo + 1)) == "NO") {
$$numcostoaggiuntivo = "";
if ($dati_cap[$numca]['tipo_tariffeassociate'] == "r") {
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_cap,$numca,$inizioperiodo,$fineperiodo,1);
if ($periodo_costo_trovato != "NO" and $dati_cap[$numca]['tipo'] == "s") {
$sett_costo = calcola_settimane_costo($tableperiodi,$dati_cap,$numca,$inizioperiodo,$fineperiodo,"","");
if (!$sett_costo) $periodo_costo_trovato = "NO";
} # fine if ($periodo_costo_trovato != "NO" and $dati_cap[$numca]['tipo'] == "s")
} # fine if ($dati_cap[$numca]['tipo_tariffeassociate'] == "r")
if ($dati_cap[$numca]['tipo_tariffeassociate'] == "s" or ($dati_cap[$numca]['tipo_tariffeassociate'] == "r" and $periodo_costo_trovato != "NO")) {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"<div style=\"display: inline; color: red;\">".$dati_cap[$numca]['nome']."</div>\"$per_la_prenotazione ".mex("non può essere applicato",$pag).".<br>";
} # fine if ($dati_cap[$numca]['tipo_tariffeassociate'] == "s" or...
} # fine if ($dati_cap[$numca]['tariffeassociate'] and associa_costo_a_tariffa($dati_cap,$numca,"tariffeassociate",($fineperiodo - $inizioperiodo + 1)) == "NO"))
} # fine else if ($dati_cap[$numca]['tariffeassociate'] and ($nome_tariffa != $d_nome_tariffa))
} # fine if ($$numcostoaggiuntivo == "SI")
if ($$numcostoaggiuntivo == "SI") {

if ($dati_cap[$numca]['combina'] == "s") {
$nomi_costi_comb_presenti[$dati_cap[$numca]['nome']] = 1;
$categorie_combina_presenti[$dati_cap[$numca]['categoria']] = $dati_cap[$numca]['settimane'].";".$dati_cap[$numca]['moltiplica_costo'];
} # fine if ($dati_cap[$numca]['combina'] == "s")
if (!empty($dati_cap[$numca]["incomp_".$tipotariffa])) {
if ($dati_cap[$numca]['combina'] == "s") $$numcostoaggiuntivo = "";
else {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"<div style=\"display: inline; color: red;\">".$dati_cap[$numca]['nome']."</div>\" ".mex("è incompatibile con la tariffa selezionata",$pag)."$per_la_prenotazione.<br>";
} # fine else if ($dati_cap[$numca]['combina'] == "s")
} # fine if (!empty($dati_cap[$numca]["incomp_".$tipotariffa]))

if ($dati_cap[$numca]['tipo'] == "s" and $dati_cap[$numca]['numsett'] == "c") {
$dati_sett_costo_sbagliati = "NO";
if ($dati_cap[$numca]['associasett'] != "s") {
if ($priv_mod_costi_agg != "s") $$sett_costoaggiuntivo = $dati_cap[$numca]['settimane'];
if ($$sett_costoaggiuntivo > $lunghezza_periodo or controlla_num_pos($$sett_costoaggiuntivo) == "NO") $dati_sett_costo_sbagliati = "SI";
} # fine if ($dati_cap[$numca]['associasett'] != "s")
else {
for ($num1 = $d_id_data_inizio ; $num1 <= $d_id_data_fine ; $num1++) {
if ($priv_mod_costi_agg != "s") {
if (str_replace(",$num1,","",$dati_cap[$numca]['settimane']) != $dati_cap[$numca]['settimane']) ${"sett".$num1."costo".$idca} = "SI";
else ${"sett".$num1."costo".$idca} = "";
} # fine if ($priv_mod_costi_agg != "s")
if (${"sett".$num1."costo".$idca} == "SI") {
if ($num1 < $inizioperiodo or $num1 > $fineperiodo) $dati_sett_costo_sbagliati = "SI";
$id_periodi_costo .= ",".$num1;
} # fine if (${"sett".$num1."costo".$idca} == "SI" or...
} # fine for $num1
$id_periodi_costo .= ",";
} # fine else if ($dati_cap[$numca]['associasett'] != "s")
if ($dati_sett_costo_sbagliati == "SI") {
echo mex("$parola_Le $parola_settimane del costo aggiuntivo",$pag)." <div style=\"display: inline; color: red;\">\"".$dati_cap[$numca]['nome']."\"</div>$per_la_prenotazione ".mex("<b>superano</b> la durata della prenotazione",$pag).".<br>";
$inserire = "NO";
} # fine if ($dati_sett_costo_sbagliati == "SI")
} # fine if ($dati_cap[$numca][tipo] == "s" and $dati_cap[$numca]['numsett'] == "c")
$sett_costo_agg = fixset($$sett_costoaggiuntivo);
$n_settimane_costo[$numca] = calcola_settimane_costo($tableperiodi,$dati_cap,$numca,$inizioperiodo,$fineperiodo,$id_periodi_costo,$sett_costo_agg);

if ($dati_cap[$numca]['moltiplica'] == "c") {
if ($dati_cap[$numca]['associasett'] != "s") {
if ($priv_mod_costi_agg != "s") $$molt_costoaggiuntivo = $dati_cap[$numca]['moltiplica_costo'];
${$molt_costoaggiuntivo."_sett".$inizioperiodo} = $$molt_costoaggiuntivo;
$moltiplica_default = $$molt_costoaggiuntivo;
$fine_for = $inizioperiodo;
} # fine if ($dati_cap[$numca][associasett] != "s")
else {
$fine_for = $fineperiodo;
$moltiplica_default = ${$molt_costoaggiuntivo."_sett".$d_id_data_inizio};
for ($num1 = $d_id_data_inizio; $num1 <= $d_id_data_fine; $num1++) {
if ($priv_mod_costi_agg != "s") ${$molt_costoaggiuntivo."_sett".$num1} = $dati_cap[$numca]['moltiplica_costo_sett'][$num1];
if (${$molt_costoaggiuntivo."_sett".$num1} != $moltiplica_default and str_replace(",$num1,","",$n_settimane_costo[$numca]) != $n_settimane_costo[$numca]) $moltiplica_default = 1;
} # fine for $num1
} # fine else if ($dati_cap[$numca][associasett] != "s")
$n_moltiplica_costo[$numca] = "";
for ($num1 = $inizioperiodo; $num1 <= $fine_for; $num1++) {
if (str_replace(",$num1,","",$n_settimane_costo[$numca]) != $n_settimane_costo[$numca] or $dati_cap[$numca]['associasett'] != "s") {
if (${$molt_costoaggiuntivo."_sett".$num1} == "" or $num1 < $d_id_data_inizio or $num1 > $d_id_data_fine) ${$molt_costoaggiuntivo."_sett".$num1} = $moltiplica_default;
$molt_costoaggiuntivo_aux = ${$molt_costoaggiuntivo."_sett".$num1};
if (controlla_num_pos($molt_costoaggiuntivo_aux) == "NO") {
echo mex("Il costo aggiuntivo",$pag)." <b>\"".$dati_cap[$numca]['nome']."\"</b>$per_la_prenotazione ".mex("non può essere moltiplicato per",$pag)." <div style=\"display: inline; color: red;\">".${$molt_costoaggiuntivo."_sett".$num1}."</div>.<br>";
$inserire = "NO";
} # fine if (controlla_num_pos(${$molt_costoaggiuntivo."_sett".$num1}) == "NO")
$n_moltiplica_costo[$numca] .= ",".${$molt_costoaggiuntivo."_sett".$num1};
} # fine if (str_replace(",$num1,","",$n_settimane_costo[$numca]) != $n_settimane_costo[$numca] or...
} # fine for $num1
if ($dati_cap[$numca]['associasett'] == "s") $n_moltiplica_costo[$numca] .= ",";
else $n_moltiplica_costo[$numca] = substr($n_moltiplica_costo[$numca],1);
if ($priv_mod_costi_agg != "s") $n_moltiplica_costo[$numca] = $dati_cap[$numca]['moltiplica_costo'];
} # fine if ($dati_cap[$numca]['moltiplica'] == "c")

$periodo_costo_trovato = trova_periodo_permesso_costo($dati_cap,$numca,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca]);
if ($periodo_costo_trovato == "NO") {
if ($dati_cap[$numca]['combina'] == "s") $$numcostoaggiuntivo = "";
else {
$inserire = "NO";
echo mex("Non si puo inserire il costo aggiuntivo",$pag)." <div style=\"display: inline; color: red;\">".$dati_cap[$numca]['nome']."</div>$per_la_prenotazione ".mex("in questo periodo",$pag).".<br>";
} # fine else if ($dati_cap[$numca]['combina'] == "s")
} # fine if ($periodo_costo_trovato == "NO")
if ($$numcostoaggiuntivo == "SI") {
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num'] and $priv_mod_costi_agg == "s") {
if (!strcmp((string) $dati_cat_pers[${"catpers_costoaggiuntivo$idca"}]['n_plur'],"") and (${"catpers_costoaggiuntivo$idca"} != "e" or $dati_cap[$numca]['cat_pers'][$dati_cap[$numca]['cat_pers']['ord'][0]]['esist'])) ${"catpers_costoaggiuntivo$idca"} = 0;
if (${"catpers_costoaggiuntivo$idca"} != "e" and !$dati_cap[$numca]['cat_pers'][$dati_cap[$numca]['cat_pers']['ord'][0]]['esist']) $cambia_cat_pers_ca[$numca] = 1;
if (${"catpers_costoaggiuntivo$idca"} != $dati_cap[$numca]['cat_pers']['ord'][0] and $dati_cap[$numca]['cat_pers'][$dati_cap[$numca]['cat_pers']['ord'][0]]['esist']) $cambia_cat_pers_ca[$numca] = 1;
} # fine if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num'] and $priv_mod_costi_agg == "s")
else ${"catpers_costoaggiuntivo$idca"} = "e";
if (!empty($cambia_cat_pers_ca[$numca])) {
$catpers_ca_corr = ${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']};
$dati_cat_pers_corr = $dati_cat_pers;
} # fine if (!empty($cambia_cat_pers_ca[$numca]))
else {
$catpers_ca_corr = 0;
$dati_cat_pers_corr = fixset($dati_cap[$numca]['cat_pers']);
} # fine else if (!empty($cambia_cat_pers_ca[$numca]))
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],fixset($n_moltiplica_costo[$numca]),"","",$dati_cat_pers_corr,$catpers_ca_corr);
} # fine if ($$numcostoaggiuntivo == "SI")
} # fine if ($$numcostoaggiuntivo == "SI")
} # fine for $numca


# costo straordinario
if ($costofinale0 and $inserisci_nuovi_costi == "SI") {
if ($priv_mod_sconto != "s") $pos = "SI";
else $pos = "NO";
if (!$nomecostofinale0 or !$val_costofinale0 or !$nummoltiplica_cf0 or controlla_num_pos($nummoltiplica_cf0) == "NO" or controlla_soldi($val_costofinale0,$pos) == "NO") {
echo mex("I dati del costo aggiuntivo <b>straordinario</b> sono <div style=\"display: inline; color: red;\">errati o mancanti</div>",$pag)."$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if (!$nomecostofinale0 or...
else {
$nomecostofinale0 = par_taglia($nomecostofinale0,0,40);
if ($letto_agg0 != "s") $letto_agg0 = "n";
if ($letto_agg0 != "s" or !$dati_cat_pers['num']) $catpers_ca0 = "";
elseif (!strcmp((string) $dati_cat_pers[$catpers_ca0]['n_plur'],"")) $catpers_ca0 = 0;
$costi_aggiuntivi_da_inserire_int = "uf#?&".$nomecostofinale0."#?&".$val_costofinale0."#?&#?&#?&#?&#?&".$nummoltiplica_cf0."#?&".$letto_agg0."#?&-1#?&cx0#?&c#?&#?&#?&#?&#?&$varappincompatibili_ca0#?&#?&#?&$catpers_ca0";
$n_costo_agg_tot = $n_costo_agg_tot + ($val_costofinale0 * $nummoltiplica_cf0);
$val_costofinale0_p = punti_in_num($val_costofinale0,$stile_soldi);
echo mex("Il costo aggiuntivo",$pag)." \"<b>$nomecostofinale0</b>\" ".mex("di",$pag)." <b>$val_costofinale0_p</b> $Euro";
if ($nummoltiplica_cf0 != 1) echo " (".mex("moltiplicato per",$pag)." <b>$nummoltiplica_cf0</b>)";
echo " ".mex("verrà aggiunto",$pag);
if ($letto_agg0 == "s") {
echo " ".mex("come letto aggiuntivo",$pag);
if ($dati_cat_pers['num'] and strcmp((string) $catpers_ca0,"")) {
if ($nummoltiplica_cf0 != 1) echo " (".$dati_cat_pers[$catpers_ca0]['n_plur'].")";
else echo " (".$dati_cat_pers[$catpers_ca0]['n_sing'].")";
} # fine if ($dati_cat_pers['num'] and strcmp((string) $catpers_ca0,""))
for ($num1 = $inizioperiodo; $num1 <= $fineperiodo; $num1++) $num_letti_agg[$num1] = $num_letti_agg[$num1] + $nummoltiplica_cf0;
} # fine if ($letto_agg0 == "s")
echo "$per_la_prenotazione.<br>";
} # fine else if (!$nomecostofinale0 or...
} # fine if ($costofinale0 and $inserisci_nuovi_costi == "SI")


# calcolo settimane e letti aggiuntivi per costi nuovi
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI") {
$associa_costo_sempre = "NO";
$associato_in_precedenza = "SI";
if ($nome_tariffa != $d_nome_tariffa or $inizioperiodo != $d_id_data_inizio or $fineperiodo != $d_id_data_fine) {
if ($dati_ca[$num1]['var_tariffea'] == "s") {
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "s") $associa_costo_sempre = "SI";
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r") {
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num1,$inizioperiodo,$fineperiodo,1);
if ($periodo_costo_trovato != "NO") $associa_costo_sempre = "SI";
} # fine if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r")
if ($associa_costo_sempre == "SI") {
if ($nome_tariffa != $d_nome_tariffa) $associato_in_precedenza = "NO";
$associa_prima = associa_costo_a_tariffa($dati_ca,$num1,$d_nome_tipotariffa,($d_id_data_fine - $d_id_data_inizio + 1));
$associa_adesso = associa_costo_a_tariffa($dati_ca,$num1,$tipotariffa,($fineperiodo - $inizioperiodo + 1));
if ($associa_prima == "SI" and ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r")) {
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num1,$d_id_data_inizio,$d_id_data_fine,1);
if ($periodo_costo_trovato == "NO") $associa_prima = "NO";
} # fine if ($associa_prima == "SI" and...
if ($associa_prima == "NO" and $associa_adesso == "NO") {
$associato_in_precedenza = "SI";
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r" and $dati_ca[$num1]['tipo'] == "s") $sett_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num1,$inizioperiodo,$fineperiodo,"","");
else $sett_costo = 1;
if ($sett_costo) {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"<div style=\"display: inline; color: red;\">".$dati_ca[$num1]['nome']."</div>\"$per_la_prenotazione ".mex("non può essere applicato",$pag).".<br>";
} # fine if ($sett_costo)
} # fine if ($associa_prima == "NO" and $associa_adesso == "NO")
if ($associa_prima == "NO" and $associa_adesso == "SI") $associato_in_precedenza = "NO";
} # fine if ($associa_costo_sempre == "SI")
} # fine if ($dati_ca[$num1]['var_tariffea'] == "s")
else {
if ($dati_ca[$num1]['var_comb'] == "s" and $dati_ca[$num1]['combina'] == "s" and !empty($categorie_combina_presenti[$dati_ca[$num1]['categoria']])) {
$associa_costo_sempre = "SI";
if (!$nomi_costi_comb_presenti[$dati_ca[$num1]['nome']]) {
$associato_in_precedenza = "NO";
$sett_molt = explode(";",$categorie_combina_presenti[$dati_ca[$num1]['categoria']]);
if (strstr($sett_molt[0],",")) $sett_molt[0] = count(explode(",",substr($sett_molt[0],1,-1)));
if (strstr($sett_molt[1],",")) $sett_molt[1] = substr($sett_molt[1],1,strcspn(substr($sett_molt[1],1),","));
${"numsettimane".($numcostiagg + 1)} = $sett_molt[0];
${"nummoltiplica_ca".($numcostiagg + 1)} = $sett_molt[1];
} # fine if (!$nomi_costi_comb_presenti[$dati_ca[$num1]['nome']])
} # fine if ($dati_ca[$num1]['var_comb'] == "s" and $dati_ca[$num1]['combina'] == "s" and...
} # fine else if ($dati_ca[$num1]['var_tariffea'] == "s")
} # fine if ($nome_tariffa != $d_nome_tariffa or $inizioperiodo != $d_id_data_inizio or $fineperiodo != $d_id_data_fine)
if ($associa_costo_sempre == "SI" and $associato_in_precedenza == "NO") {
$numcostiagg++;
${"costoagg".($numcostiagg)} = "SI";
${"idcostoagg".($numcostiagg)} = $dati_ca[$num1]['id'];
} # fine if ($associa_costo_sempre == "SI" and $associato_in_precedenza == "NO")
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI")
} # fine for $num1

for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
$idcostoagg = "idcostoagg".$numca;
if (($inserisci_nuovi_costi != "SI" and $numca <= $numcostiagg_orig) or ($attiva_costi_agg_consentiti != "n" and $costi_agg_consentiti_vett[$$idcostoagg] != "SI")) $$costoagg = "";
if (isset($$costoagg) and $$costoagg == "SI") {
$numsettimane = "numsettimane".$numca;
$nummoltiplica_ca = "nummoltiplica_ca".$numca;
$id_periodi_costo = "id_periodi_costo".$numca."_".$id_prenota;
$num_reg = ($dati_cap['num'] + $numca - 1);
$num_costo = $dati_ca['id'][$$idcostoagg];
if ($$idcostoagg != $dati_ca[$num_costo]['id']) $inserire = "NO";
if (!empty($dati_ca[$num_costo]["incomp_".$tipotariffa])) {
if ($dati_ca[$num_costo]['combina'] == "s") $$costoagg = "";
else {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"".$dati_ca[$num_costo]['nome']."\" ".mex("è incompatibile con la tariffa selezionata",$pag)."$per_la_prenotazione.<br>";
} # fine else if ($dati_ca[$num_costo]['combina'] == "s")
} # fine if (!empty($dati_ca[$num_costo]["incomp_".$tipotariffa]))
if (!empty($$numsettimane) and $dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "n") {
if ($$numsettimane > $lunghezza_periodo or controlla_num_pos($$numsettimane) == "NO") {
echo mex("$parola_Le $parola_settimane del nuovo costo aggiuntivo",$pag)." <div style=\"display: inline; color: red;\">\"".$dati_ca[$num_costo]['nome']."\"</div>$per_la_prenotazione ".mex("<b>superano</b> la durata della prenotazione",$pag).".<br>";
$inserire = "NO";
$$numsettimane = 0;
} # fine if ($numsettimane > $lunghezza_periodo or...
} # fine if (!empty($$numsettimane) and $dati_ca[$num_costo]['numsett'] == "c" and...
$nummoltiplica_ca_aux = fixset($$nummoltiplica_ca);
if (!empty($$nummoltiplica_ca) and controlla_num_pos($nummoltiplica_ca_aux) == "NO") {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." <b>\"".$dati_ca[$num_costo]['nome']."\"</b>$per_la_prenotazione ".mex("non può essere moltiplicato per",$pag)." <div style=\"display: inline; color: red;\">".$$nummoltiplica_ca."</div>.<br>";
} # fine if (!empty($$nummoltiplica_ca) and controlla_num_pos($$nummoltiplica_ca) == "NO")
$numsettimane_aux = fixset($$numsettimane);
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$numsettimane_aux);
if ($periodo_costo_trovato == "NO") {
if ($dati_ca[$num_costo]['combina'] == "s") $$costoagg = "";
else {
$inserire = "NO";
echo mex("Non si puo inserire il costo aggiuntivo",$pag)." <div style=\"display: inline; color: red;\">".$dati_ca[$num_costo]['nome']."</div> ".mex("in questo periodo",$pag)."$per_la_prenotazione.<br>";
} # fine else if ($dati_ca[$num_costo]['combina'] == "s")
} # fine if ($periodo_costo_trovato == "NO")

if ($$costoagg == "SI") {
if (isset($$id_periodi_costo) and $$id_periodi_costo == "inserire") {
$$id_periodi_costo = "";
for ($num1 = $inizioperiodo; $num1 <= $fineperiodo; $num1++) {
if (isset(${"sett".$num1."costo".$numca."_".$id_prenota}) and ${"sett".$num1."costo".$numca."_".$id_prenota} == "SI") $$id_periodi_costo .= ",".$num1;
} # fine for $num1
if ($$id_periodi_costo) $$id_periodi_costo .= ",";
else $$id_periodi_costo = "nessuno";
} # fine if (isset($$id_periodi_costo) and $$id_periodi_costo == "inserire")
if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and $inserire != "NO" and empty($$id_periodi_costo)) {
$inserire = "NO";
echo "<hr style=\"width: 30%; margin-left: 0; text-align: left;\">
".mex("Scegliere $parola_le $parola_settimane in cui applicare il costo aggiuntivo",$pag)." ".$dati_ca[$num_costo]['nome']."$per_la_prenotazione:<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
$lista_sett_passa = "";
for ($num1 = $inizioperiodo; $num1 <= $fineperiodo; $num1++) {
$periodo_costo_trovato = "NO";
if ($dati_ca[$num_costo]['periodipermessi'] == "p") {
for ($num2 = 0 ; $num2 < count($dati_ca[$num_costo]['sett_periodipermessi_ini']) ; $num2++) {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num2] <= $num1 and $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num2] >= $num1) $periodo_costo_trovato = "SI";
} # fine for $num2
} # fine if ($dati_ca[$num_costo]['periodipermessi'] == "p")
else $periodo_costo_trovato = "SI";
if ($periodo_costo_trovato == "SI") {
$date_sett_costo = esegui_query("select datainizio,datafine from $tableperiodi where idperiodi = '$num1'");
echo "<label><input type=\"checkbox\" name=\"sett$num1"."costo$numca"."_$id_prenota\" value=\"SI\">".mex("dal",$pag)."
 ".formatta_data(risul_query($date_sett_costo,0,'datainizio'),$stile_data)." ".mex("al",$pag)." 
 ".formatta_data(risul_query($date_sett_costo,0,'datafine'),$stile_data)."</label><br>";
$lista_sett_passa .= ",$num1";
} # fine if ($periodo_costo_trovato == "SI")
} # fine for $num1
echo "<input type=\"hidden\" name=\"lista_sett_passa$numca"."_$id_prenota\" value=\"$lista_sett_passa\">";
echo $dati_form_modifica;
$$id_periodi_costo = "inserire";
for ($num_idpr2 = 0 ; $num_idpr2 < $num_idpr ; $num_idpr2++) {
$id_prenota2 = $id_prenota_idpr[$num_idpr2];
for ($numca2 = 1 ; $numca2 <= $numcostiagg_orig ; $numca2++) {
if (!empty(${"id_periodi_costo".$numca2."_".$id_prenota2})) echo "<input type=\"hidden\" name=\"id_periodi_costo$numca2"."_$id_prenota2\" value=\"".${"id_periodi_costo".$numca2."_".$id_prenota2}."\">";
} # fine for $numca2
} # fine for $num_idpr2
for ($numca2 = 1 ; $numca2 <= $numca ; $numca2++) echo "<input type=\"hidden\" name=\"id_periodi_costo$numca2"."_$id_prenota\" value=\"".fixset(${"id_periodi_costo".$numca2."_".$id_prenota})."\">";
echo "<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars(fixstr($origine))."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"modificaprenotazione\" value=\"modifica\">
<button class=\"mres\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
</div></form><hr align=\"left\" style=\"width: 30%; margin-left: 0; text-align: left;\">";
} # fine if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and...
else {
$id_periodi_costo_aux = fixset($$id_periodi_costo);
$numsettimane_aux = fixset($$numsettimane);
$nummoltiplica_ca_aux = fixset($$nummoltiplica_ca);
$n_settimane_costo[$num_reg] = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$id_periodi_costo_aux,$numsettimane_aux);
if ($dati_ca[$num_costo]['letto'] != "s" or !$dati_cat_pers['num']) ${"catpers_ca$numca"} = "";
elseif (!strcmp((string) $dati_cat_pers[${"catpers_ca$numca"}]['n_plur'],"")) ${"catpers_ca$numca"} = 0;
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],"",$nummoltiplica_ca_aux,$numpersone,$dati_cat_pers,${"catpers_ca$numca"});
} # fine else if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and...
} # fine if ($$costoagg == "SI")

if (($dati_ca[$num_costo]['moltiplica'] == "p" or $dati_ca[$num_costo]['moltiplica'] == "t") and !$numpersone) {
$inserire = "NO";
echo mex("Si deve inserire il numero delle persone per il costo aggiuntivo",$pag)." <div style=\"display: inline; color: red;\">".$dati_ca[$num_costo]['nome']."</div>$per_la_prenotazione.<br>";
} # fine if (($dati_ca[$num1][moltiplica] == "p" or $dati_ca[$num1][moltiplica] == "t") and !$numpersone)
} # fine if (isset($$costoagg) and $$costoagg == "SI")
} # fine for $numca


# calcolo moltiplica per costi già presenti
if ($inserire != "NO") {
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI") {
if ($dati_cap[$numca]['moltiplica'] != "c") calcola_moltiplica_costo($dati_cap,$numca,$n_moltiplica_costo[$numca],$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],"",$numpersone,$cat_persone,$num_letti_agg);
$num_costo = fixset($dati_ca['id'][$dati_cap[$numca]['idntariffe']]);
if (strcmp((string) $num_costo,"") and $dati_ca[$num_costo]['id'] == $dati_cap[$numca]['idntariffe'] and $dati_cap[$numca]['nome'] == $dati_ca[$num_costo]['nome'] and $dati_ca[$num_costo]['numlimite']) $num_limite = (string) $dati_ca[$num_costo]['numlimite'];
else $num_limite = (string) 0;
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_cap,$numca,$num_costi_presenti,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],$num_limite,$tra_anni) == "NO") {
$inserire = "NO";
echo mex("Non si possono inserire altri costi",$pag)." <b>".$dati_cap[$numca]['nome']."</b> ".mex("in questo periodo, già",$pag)." <div style=\"display: inline; color: red;\">".$dati_ca[$num_costo]['numlimite']." ".mex("presenti",$pag)."</div>.<br>";
} # fine if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_cap,$numca,$num_costi_presenti,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],$num_limite,$tra_anni) == "NO")
if (isset($dati_cap[$numca]['tipo_beniinv']) and $dati_cap[$numca]['tipo_beniinv'] == "mag") {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_cap,$numca,$beniinv_presenti,$num_ripetizioni_costo[$numca],"SI",$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],"");
if ($risul != "SI") {
$inserire = "NO";
echo mex("I beni richiesti dal costo",$pag)." \"<span style=\"color: red;\">".$dati_cap[$numca]['nome']."</span>\" ".mex("non sono disponibili nell'inventario",$pag).".<br>";
} # fine if ($risul != "SI")
} # fine if (isset($dati_cap[$numca]['tipo_beniinv']) and $dati_cap[$numca]['tipo_beniinv'] == "mag")
if ($dati_cap[$numca]['moltiplica'] == "c" and $dati_cap[$numca]['molt_max'] != "x") {
$num_max = 0;
$num_max_check = 0;
if ($dati_cap[$numca]['molt_max'] == "n") $num_max = $dati_cap[$numca]['molt_max_num'];
if ($dati_cap[$numca]['molt_max'] != "n" and $numpersone) {
$num_max = $numpersone;
if ($num_max) $num_max_check = 1;
if (!empty($dati_cap[$numca]['modo_cp_molt'])) {
$cat_persone_corr = $cat_persone;
if (empty($cat_persone_corr)) {
$cat_persone_corr = array(0 => array());
$cat_persone_corr[0]['molt'] = $numpersone;
$cat_persone_corr[0]['ord'] = 0;
$cat_persone_corr['ord'][0] = 0;
$cat_persone_corr['num'] = 1;
} # fine if (empty($cat_persone_corr))
if ($dati_cap[$numca]['modo_cp_molt'] == "i") $num_max = 0;
for ($num1 = 0 ; $num1 < $dati_cap[$numca]['cp_molt']['num'] ; $num1++) {
$cp = $dati_cap[$numca]['cp_molt']['ord'][$num1];
if (!empty($dati_cap[$numca]['cp_molt'][$cp]['esist']) and !empty($cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'])) {
if ($dati_cap[$numca]['modo_cp_molt'] == "i") $num_max += $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
else $num_max = $num_max - $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
} # fine if (!empty($dati_cap[$numca]['cp_molt'][$cp]['esist']) and !empty($cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt']))
} # fine for $num1
} # fine if (!empty($dati_cap[$numca]['modo_cp_molt']))
} # fine if ($dati_cap[$numca]['molt_max'] != "n" and $numpersone)
if ($dati_cap[$numca]['molt_max'] == "t" and $num_letti_agg['max']) {
$num_letti_agg_corr = $num_letti_agg['max'];
if ($num_letti_agg_corr) $num_max_check = 1;
if (isset($dati_cap[$numca]['modo_cp_molt']) and $dati_cap[$numca]['modo_cp_molt'] == "i") $num_letti_agg_corr = 0;
if (!isset($dati_cap[$numca]['cp_molt']['num'])) $dati_cap[$numca]['cp_molt']['num'] = 0;
for ($num1 = 0 ; $num1 < $dati_cap[$numca]['cp_molt']['num'] ; $num1++) {
$cp = $dati_cap[$numca]['cp_molt']['ord'][$num1];
if (!empty($dati_cap[$numca]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot_max'][$cp])) {
if ($dati_cap[$numca]['modo_cp_molt'] == "i") $num_letti_agg_corr += $num_letti_agg['catp_tot_max'][$cp];
else $num_letti_agg_corr = $num_letti_agg_corr - $num_letti_agg['catp_tot_max'][$cp];
} # fine if (!empty($dati_cap[$numca]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot_max'][$cp]))
} # fine for $num1
$num_max += $num_letti_agg_corr;
} # fine if ($dati_cap[$numca]['molt_max'] == "t" and $num_letti_agg['max'])
if ($num_max or $num_max_check) {
if ($dati_cap[$numca]['molt_max'] != "n" and $dati_cap[$numca]['molt_max_num']) $num_max = $num_max - $dati_cap[$numca]['molt_max_num'];
$nummoltiplica_max = $n_moltiplica_costo[$numca];
if (str_replace(",","",$nummoltiplica_max) != $nummoltiplica_max) {
$nummoltiplica_max = explode(",",$nummoltiplica_max);
$nummoltiplica_max = max($nummoltiplica_max);
} # fine if (str_replace(",","",$nummoltiplica_max) != $nummoltiplica_max)
if ($nummoltiplica_max > $num_max) {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"".$dati_cap[$numca]['nome']."\" ".mex("non può essere moltiplicato per più di",$pag)." $num_max.<br>";
} # fine if ($nummoltiplica_max > $num_max)
} # fine if ($num_max or $num_max_check)
} # fine if ($dati_cap[$numca]['moltiplica'] == "c" and $dati_ca[$num1]['molt_max'] != "x")
} # fine if ($$numcostoaggiuntivo == "SI")
else {
echo mex("Il costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà tolto",$pag).".<br>";
$d_costi_aggiuntivi[$numca] = $dati_cap[$numca]['id']."#?&cancella";
if (!$costi_aggiuntivi_modificati_int) $costi_aggiuntivi_modificati_int = $d_costi_aggiuntivi[$numca];
else $costi_aggiuntivi_modificati_int .= "#@&".$d_costi_aggiuntivi[$numca];
} # fine else if ($$numcostoaggiuntivo == "SI")
} # fine for $numca
} # fine if ($inserire != "NO")


# calcolo moltiplica per costi nuovi
if ($inserire != "NO") {
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
if (isset($$costoagg) and $$costoagg == "SI") {
$nummoltiplica_ca = "nummoltiplica_ca".$numca;
$idcostoagg = "idcostoagg".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
$num_reg = ($dati_cap['num'] + $numca - 1);
$nummoltiplica_ca_aux = $$nummoltiplica_ca;
calcola_moltiplica_costo($dati_ca,$num_costo,$n_moltiplica_costo[$num_reg],$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$nummoltiplica_ca_aux,$numpersone,$cat_persone,$num_letti_agg);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],"",$tra_anni) == "NO") {
$inserire = "NO";
echo mex("Non si possono inserire altri costi",$pag)." <b>".$dati_ca[$num_costo]['nome']."</b> ".mex("in questo periodo, già",$pag)." <div style=\"display: inline; color: red;\">".$dati_ca[$num_costo]['numlimite']." ".mex("presenti",$pag)."</div>.<br>";
} # fine if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],"",$tra_anni) == "NO")
if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "mag") {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti,$num_ripetizioni_costo[$num_reg],"SI",$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],"");
if ($risul != "SI") {
$inserire = "NO";
echo mex("I beni richiesti dal costo",$pag)." \"<span style=\"color: red;\">".$dati_ca[$num_costo]['nome']."</span>\" ".mex("non sono disponibili nell'inventario",$pag).".<br>";
} # fine if ($risul != "SI")
} # fine if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "mag")
if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num_costo]['molt_max'] != "x") {
$num_max = 0;
$num_max_check = 0;
if ($dati_ca[$num_costo]['molt_max'] == "n") $num_max = $dati_ca[$num_costo]['molt_max_num'];
if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone) {
$num_max = $numpersone;
if ($num_max) $num_max_check = 1;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
$cat_persone_corr = $cat_persone;
if (empty($cat_persone_corr)) {
$cat_persone_corr = array(0 => array());
$cat_persone_corr[0]['molt'] = $numpersone;
$cat_persone_corr[0]['ord'] = 0;
$cat_persone_corr['ord'][0] = 0;
$cat_persone_corr['num'] = 1;
} # fine if (empty($cat_persone_corr))
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_max = 0;
for ($num1 = 0 ; $num1 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num1++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num1];
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_max += $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
else $num_max = $num_max - $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt']))
} # fine for $num1
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
} # fine if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone)
if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max']) {
$num_letti_agg_corr = $num_letti_agg['max'];
if ($num_letti_agg_corr) $num_max_check = 1;
if (isset($dati_ca[$num_costo]['modo_cp_molt']) and $dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr = 0;
if (!isset($dati_ca[$num_costo]['cp_molt']['num'])) $dati_ca[$num_costo]['cp_molt']['num'] = 0;
for ($num1 = 0 ; $num1 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num1++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num1];
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot_max'][$cp])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr += $num_letti_agg['catp_tot_max'][$cp];
else $num_letti_agg_corr = $num_letti_agg_corr - $num_letti_agg['catp_tot_max'][$cp];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot_max'][$cp]))
} # fine for $num1
$num_max += $num_letti_agg_corr;
} # fine if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max'])
if ($num_max or $num_max_check) {
if ($dati_ca[$num_costo]['molt_max'] != "n" and $dati_ca[$num_costo]['molt_max_num']) $num_max = $num_max - $dati_ca[$num_costo]['molt_max_num'];
if ($num_max and $$nummoltiplica_ca > $num_max) {
$inserire = "NO";
echo mex("Il costo aggiuntivo",$pag)." \"".$dati_ca[$num_costo]['nome']."\" ".mex("non può essere moltiplicato per più di",$pag)." $num_max.<br>";
} # fine if ($num_max and $$nummoltiplica_ca > $num_max)
} # fine if ($num_max or $num_max_check)
} # fine if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num1]['molt_max'] != "x")
} # fine if (isset($$costoagg) and $$costoagg == "SI")
} # fine for $numca
} # fine if ($inserire != "NO")


if ($inserire != "NO") {

# calcolo costi da associare se possibile
if (!$numpersone) $numpersone_costi_poss = 0;
else $numpersone_costi_poss = $numpersone;
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num_costo]['id']] == "SI") {
if (isset($dati_ca[$num_costo]["tipo_associa_".$tipotariffa]) and $dati_ca[$num_costo]["tipo_associa_".$tipotariffa] == "p" and $dati_ca[$num_costo]['var_tariffea'] == "s") {
$associa_costo = associa_costo_a_tariffa($dati_ca,$num_costo,$tipotariffa,($fineperiodo - $inizioperiodo + 1));
if ($associa_costo == "SI" and ($nome_tariffa != $d_nome_tariffa or associa_costo_a_tariffa($dati_ca,$num_costo,$d_nome_tipotariffa,($d_id_data_fine - $d_id_data_inizio + 1)) == "NO")) {
$settimane_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$inizioperiodo,$fineperiodo,"","");
$num_letti_agg_copia = $num_letti_agg;
$beniinv_presenti_copia = $beniinv_presenti;

if ($dati_ca[$num_costo]['letto'] == "s") {
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg_copia,$idinizioperiodo,$idfineperiodo,$settimane_costo,"","",$numpersone_costi_poss,$dati_cat_pers,"0");
unset($moltiplica_copia);
unset($num_costi_presenti_copia);
unset($num_ripetizioni_copia);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI") {
if ($dati_cap[$numca]['moltiplica'] != "t") $moltiplica_copia[$numca] = $n_moltiplica_costo[$numca];
else calcola_moltiplica_costo($dati_cap,$numca,$moltiplica_copia[$numca],$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],"",$numpersone,$cat_persone,$num_letti_agg_copia);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_cap,$numca,$num_costi_presenti_copia,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$moltiplica_copia[$numca],"",$tra_anni) == "NO") $associa_costo = "NO";
if ($dati_cap[$numca]['moltiplica'] == "t") {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_cap,$numca,$beniinv_presenti_copia,$num_ripetizioni_copia[$numca],"SI",$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$moltiplica_copia[$numca],$appartamento,$num_ripetizioni_costo[$numca]);
if ($risul != "SI") $associa_costo = "NO";
} # fine if ($dati_cap[$numca]['moltiplica'] == "t")
} # fine if ($$numcostoaggiuntivo == "SI")
} # fine for $numca
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (${"costoagg".$numca} == "SI") {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
$num_reg = ($dati_cap['num'] + $numca - 1);
if ($dati_ca[$num_costo2]['moltiplica'] != "t") $moltiplica_copia[$num_reg] = $n_moltiplica_costo[$num_reg];
else calcola_moltiplica_costo($dati_ca,$num_costo2,$moltiplica_copia[$num_reg],$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],"",$numpersone,$cat_persone,$num_letti_agg_copia);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo2,$num_costi_presenti_copia,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$moltiplica_copia[$num_reg],"",$tra_anni) == "NO") $associa_costo = "NO";
if ($dati_ca[$num_costo2]['moltiplica'] == "t") {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo2,$beniinv_presenti_copia,$num_ripetizioni_copia[$num_reg],"SI",$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$moltiplica_copia[$num_reg],$appartamento,$num_ripetizioni_costo[$num_reg]);
if ($risul != "SI") $associa_costo = "NO";
} # fine if ($dati_ca[$num_costo2]['moltiplica'] == "t")
} # fine if (${"costoagg".$numca} == "SI")
} # fine for $numca
} # fine if ($dati_ca[$num_costo][letto] == "s")
else $num_costi_presenti_copia = $num_costi_presenti;

calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica,$inizioperiodo,$fineperiodo,$settimane_costo,"",$numpersone_costi_poss,$cat_persone,$num_letti_agg_copia);
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$settimane_costo);
if ($periodo_costo_trovato == "NO") $associa_costo = "NO";
else if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti_copia,$inizioperiodo,$fineperiodo,$settimane_costo,$moltiplica,"",$tra_anni) == "NO") $associa_costo = "NO";
if ($dati_ca[$num_costo]['tipo_beniinv'] and $associa_costo == "SI") {
$nrc = "";
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti_copia,$nrc,"SI",$inizioperiodo,$fineperiodo,$settimane_costo,$moltiplica,$appartamento);
if ($risul != "SI") $associa_costo = "NO";
} # fine if ($dati_ca[$num_costo]['tipo_beniinv'] and $associa_costo == "SI")

if ($associa_costo == "SI") {
$beniinv_presenti = $beniinv_presenti_copia;
if ($dati_ca[$num_costo]['letto'] == "s") {
$num_costi_presenti = $num_costi_presenti_copia;
$num_letti_agg = $num_letti_agg_copia;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$n_moltiplica_costo[$numca] = $moltiplica_copia[$numca];
if ($dati_cap[$numca]['moltiplica'] == "t") $num_ripetizioni_costo[$numca] = $num_ripetizioni_copia[$numca];
} # fine for $numca
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
$num_reg = ($dati_cap['num'] + $numca - 1);
$n_moltiplica_costo[$num_reg] = $moltiplica_copia[$num_reg];
if ($dati_ca[$num_costo2]['moltiplica'] == "t") $num_ripetizioni_costo[$num_reg] = $num_ripetizioni_copia[$num_reg];
} # fine for $numca
} # fine if ($dati_ca[$num_costo][letto] == "s")
$numcostiagg++;
$numca = $numcostiagg;
$num_reg = ($dati_cap['num'] + $numca - 1);
${"costoagg".$numca} = "SI";
${"idcostoagg".$numca} = $dati_ca[$num_costo]['id'];
$n_settimane_costo[$num_reg] = $settimane_costo;
$n_moltiplica_costo[$num_reg] = $moltiplica;
if ($dati_ca[$num_costo]['tipo_beniinv']) $num_ripetizioni_costo[$num_reg] = $nrc;
} # fine if ($associa_costo == "SI")
} # fine if ($associa_costo == "SI" and...
} # fine if (isset($dati_ca[$num_costo]["tipo_associa_".$tipotariffa]) and $dati_ca[$num_costo]["tipo_associa_".$tipotariffa] == "p" and $dati_ca[$num1]['var_tariffea'] == "s")
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num_costo]['id']] == "SI")
} # fine for $num_costo


# calcolo prezzo e dati per costi già presenti
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI") {
if ($n_settimane_costo[$numca] != $dati_cap[$numca]['settimane']) {
if ($dati_cap[$numca]['associasett'] != "s") echo mex("$parola_Le $parola_settimane del costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verranno cabiat$lettera_e da",$pag)." <b>".$dati_cap[$numca]['settimane']."</b> ".mex("a",$pag)." <b>".$n_settimane_costo[$numca]."</b>.<br>";
else echo mex("$parola_Le $parola_settimane del costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verranno cabiat$lettera_e",$pag).".<br>";
} # fine if ($n_settimane_costo[$numca] != $dati_cap[$numca][settimane])
if ($n_moltiplica_costo[$numca] != $dati_cap[$numca]['moltiplica_costo'] or !empty($cambia_cat_pers_ca[$numca])) {
if ($dati_cap[$numca]['associasett'] != "s") {
echo mex("Il costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà moltiplicato per",$pag)." <b>".$n_moltiplica_costo[$numca];
if (!empty($cambia_cat_pers_ca[$numca])) {
if ($n_moltiplica_costo[$numca] == 1) echo " <em>".$dati_cat_pers[${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']}]['n_sing']."</em>";
else echo " <em>".$dati_cat_pers[${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']}]['n_plur']."</em>";
} # fine if (!empty($cambia_cat_pers_ca[$numca]))
echo "</b> (".mex("prima era",$pag)." <b>".$dati_cap[$numca]['moltiplica_costo'];
if (!empty($cambia_cat_pers_ca[$numca])) {
if ($dati_cap[$numca]['moltiplica_costo'] == 1) echo " <em>".$dati_cap[$numca]['cat_pers'][0]['n_sing']."</em>";
else echo " <em>".$dati_cap[$numca]['cat_pers'][0]['n_plur']."</em>";
} # fine if (!empty($cambia_cat_pers_ca[$numca]))
echo "</b>).<br>";
} # fine if ($dati_cap[$numca]['associasett'] != "s")
elseif ($n_settimane_costo[$numca] == $dati_cap[$numca]['settimane'] or !empty($cambia_cat_pers_ca[$numca])) {
echo mex("Il costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà moltiplicato per",$pag)." ";
if ($n_moltiplica_costo[$numca] != $dati_cap[$numca]['moltiplica_costo']) {
echo mex("numeri diversi",$pag);
if (!empty($cambia_cat_pers_ca[$numca])) echo " ".mex("di",$pag)." ";
} # fine if ($n_moltiplica_costo[$numca] != $dati_cap[$numca]['moltiplica_costo'])
if (!empty($cambia_cat_pers_ca[$numca])) echo "<b>".$dati_cat_pers[${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']}]['n_plur']."</b> (".mex("prima era",$pag)." <b>".$dati_cap[$numca]['cat_pers'][0]['n_plur']."</b>)";
echo ".<br>";
} # fine elseif ($n_settimane_costo[$numca] == $dati_cap[$numca]['settimane'] or !empty($cambia_cat_pers_ca[$numca]))
} # fine if ($n_moltiplica_costo[$numca] != $dati_cap[$numca][moltiplica_costo] or !empty($cambia_cat_pers_ca[$numca]))
if ($dati_cap[$numca]['tipo_val'] != "t" and $dati_cap[$numca]['tipo_val'] != "r") {
if (!empty($cambia_cat_pers_ca[$numca])) {
$catpers_ca_corr = ${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']};
$dati_cat_pers_corr = $dati_cat_pers;
} # fine if (!empty($cambia_cat_pers_ca[$numca]))
else {
$catpers_ca_corr = 0;
$dati_cat_pers_corr = $dati_cap[$numca]['cat_pers'];
} # fine else if (!empty($cambia_cat_pers_ca[$numca]))
$n_prezzo_costo_agg[$numca] = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],$costo_tariffa,$tariffesettimanali,1,$caparra,$numpersone,$dati_cat_pers_corr,$catpers_ca_corr);
if ($d_prezzo_costo_agg[$numca] != $n_prezzo_costo_agg[$numca]) echo mex("Il prezzo del costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà cambiato da",$pag)." <b>".punti_in_num($d_prezzo_costo_agg[$numca])."</b> ".mex("a",$pag)." <b>".punti_in_num($n_prezzo_costo_agg[$numca])."</b>.<br>";
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$numca];
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$numca];
} # fine if $dati_cap[$numca][tipo_val] != "t" and $dati_cap[$numca][tipo_val] != "r")
if ($n_settimane_costo[$numca] != $dati_cap[$numca]['settimane'] or $n_moltiplica_costo[$numca] != $dati_cap[$numca]['moltiplica_costo'] or !empty($cambia_cat_pers_ca[$numca])) {
$d_costi_aggiuntivi[$numca] = $dati_cap[$numca]['id']."#?&".$n_settimane_costo[$numca]."#?&".$n_moltiplica_costo[$numca]."#?&".${"catpers_costoaggiuntivo".$dati_cap[$numca]['id']};
if (!$costi_aggiuntivi_modificati_int) $costi_aggiuntivi_modificati_int = $d_costi_aggiuntivi[$numca];
else $costi_aggiuntivi_modificati_int .= "#@&".$d_costi_aggiuntivi[$numca];
} # fine if ($n_settimane_costo[$numca] != $dati_cap[$numca]['settimane'] or...
} # fine else if ($$numcostoaggiuntivo == "SI")
} # fine for $numca


# calcolo prezzo e dati per costi nuovi
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
if (isset($$costoagg) and $$costoagg == "SI") {
$idcostoagg = "idcostoagg".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
$num_reg = ($dati_cap['num'] + $numca - 1);
$tipo_ca = $dati_ca[$num_costo]['tipo'].$dati_ca[$num_costo]['tipo_val'];
$valore_ca = $dati_ca[$num_costo]['valore'];
$valore_perc_ca = fixset($dati_ca[$num_costo]['valore_perc']);
$n_prezzo_costo_agg[$num_reg] = (double) calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],$costo_tariffa,$tariffesettimanali,1,$caparra,$numpersone,$dati_cat_pers,${"catpers_ca$numca"});
$associasett_ca = $dati_ca[$num_costo]['associasett'];
$settimane_costo = $n_settimane_costo[$num_reg];
$moltiplica = $n_moltiplica_costo[$num_reg];
$letto_ca = $dati_ca[$num_costo]['letto'];
if ($dati_ca[$num_costo]['var_percentuale'] != "s" and $dati_ca[$num_costo]['tipo_val'] != "f") {
$tipo_ca = $dati_ca[$num_costo]['tipo']."f";
$moltiplica = 1;
if ($dati_ca[$num_costo]['tipo'] == "s") {
$settimane_costo = 1;
$associasett_ca = "n";
} # fine if ($dati_ca[$num_costo][tipo] == "s")
if ($dati_ca[$num_costo]['tipo_val'] != "t" and $dati_ca[$num_costo]['tipo_val'] != "r") $valore_ca = $n_prezzo_costo_agg[$num_reg];
else $valore_ca = "da#?&sostituire$num_costo";
$valore_perc_ca = 0;
} # fine if ($dati_ca[$num_costo][var_percentuale] != "s" and...
elseif ($dati_ca[$num_costo]['perc_catpers'] == "s") $letto_ca = "p";
if ($dati_ca[$num_costo]['var_moltiplica'] == "s") $varmoltiplica_ca = $dati_ca[$num_costo]['moltiplica'].$dati_ca[$num_costo]['molt_max'].$dati_ca[$num_costo]['molt_agg'].",".$dati_ca[$num_costo]['molt_max_num'].$dati_ca[$num_costo]['cp_molt_int'];
else $varmoltiplica_ca = "cx0,";
if ($dati_ca[$num_costo]['var_numsett'] == "s") $varnumsett_ca = $dati_ca[$num_costo]['numsett_orig'];
else $varnumsett_ca = "c";
if ($dati_ca[$num_costo]['var_periodip'] == "s") $varperiodipermessi_ca = $dati_ca[$num_costo]['periodipermessi_orig'];
else $varperiodipermessi_ca = "";
if ($dati_ca[$num_costo]['var_beniinv'] == "s") $varbeniinv_ca = $dati_ca[$num_costo]['beniinv_orig'];
else $varbeniinv_ca = "";
if ($dati_ca[$num_costo]['var_appi'] == "s") $varappincompatibili_ca = $dati_ca[$num_costo]['appincompatibili'];
else $varappincompatibili_ca = "";
if ($dati_ca[$num_costo]['var_tariffea'] == "s") $vartariffeassociate_ca = $dati_ca[$num_costo]["tipo_associa_".$tipotariffa].$dati_ca[$num_costo][$tipotariffa];
else $vartariffeassociate_ca = "";
$vartariffeincomp_ca = "";
if ($dati_ca[$num_costo]['var_tariffei'] == "s") {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (!empty($dati_ca[$num_costo]["incomp_tariffa".$numtariffa])) $vartariffeincomp_ca .= ",".$numtariffa;
} # fine for $numtariffa
if ($vartariffeincomp_ca) $vartariffeincomp_ca = substr($vartariffeincomp_ca,1);
} # fine if ($dati_ca[$num_costo][var_tariffei] == "s")
if ($dati_ca[$num_costo]['var_comb'] == "s") $variazione_ca = $dati_ca[$num_costo]['combina'];
else $variazione_ca = "n";
$variazione_ca .= $dati_ca[$num_costo]['escludi_tot_perc'];
if ($costi_aggiuntivi_da_inserire_int) $costi_aggiuntivi_da_inserire_int .= "#@&";
$costi_aggiuntivi_da_inserire_int .= "$tipo_ca#?&".$dati_ca[$num_costo]['nome']."#?&".$valore_ca."#?&".$valore_perc_ca."#?&".fixset($dati_ca[$num_costo]['arrotonda'])."#?&$associasett_ca#?&$settimane_costo#?&$moltiplica#?&$letto_ca#?&".$dati_ca[$num_costo]['id']."#?&$varmoltiplica_ca#?&$varnumsett_ca#?&$varperiodipermessi_ca#?&$vartariffeassociate_ca#?&$vartariffeincomp_ca#?&$varbeniinv_ca#?&$varappincompatibili_ca#?&$variazione_ca#?&".$dati_ca[$num_costo]['categoria']."#?&".${"catpers_ca$numca"};
if ($dati_ca[$num_costo]['tipo_val'] != "t" and $dati_ca[$num_costo]['tipo_val'] != "r") {
comunica_aggiunta_costo($dati_ca,$num_costo,$n_prezzo_costo_agg[$num_reg],$stile_soldi,$pag,$Euro,$associasett_ca,$n_moltiplica_costo[$num_reg],$settimane_costo,$per_la_prenotazione,"",${"catpers_ca$numca"});
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$num_reg];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$num_reg];
} # fine if ($dati_ca[$num_costo]['tipo_val'] != "t" and $dati_ca[$num_costo]['tipo_val'] != "r")
else {
$associasett_ca_ricorda[$num_reg] = $associasett_ca;
$settimane_costo_ricorda[$num_reg] = $settimane_costo;
} # fine else if ($dati_ca[$num_costo]['tipo_val'] != "t" and $dati_ca[$num_costo]['tipo_val'] != "r")
} # fine if (isset($$costoagg) and $$costoagg == "SI")
} # fine for $numca


# interrompo momentaneamente i costi aggiuntivi per calcolare e applicare lo sconto
$prezzo_totale_imposto = "";
$n_valuta_tariffa = "";
if (strcmp((string) $n_sconto,"")) {
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot + $d_sconto;
if (strstr($tipo_val_sconto,">")) {
$tipo_val_sconto = explode(">",$tipo_val_sconto);
$valuta_sconto = $tipo_val_sconto[1];
$tipo_val_sconto = $tipo_val_sconto[0];
$valuta = $altre_valute['id'][$valuta_sconto];
if (strcmp((string) $valuta,"")) {
if ($n_sconto) $n_sconto = converti_valuta($n_sconto,$altre_valute[$valuta]['cambio'],$dati_tariffe['tasse_arrotond'],1);
} # fine if (strcmp((string) $valuta,""))
else $valuta_sconto = "";
if (!strcmp((string) $n_valuta_tariffa,"")) $n_valuta_tariffa = $valuta_sconto;
} # fine if (strstr($tipo_val_sconto,">"))
elseif (strcmp((string) $d_valuta_tariffa_idpr[$id_prenota],"") and $tipo_val_sconto != "perc_tot" and $tipo_val_sconto != "perc_tar" and !strcmp((string) $n_valuta_tariffa,"")) $n_valuta_tariffa = ">0";
if ($tipo_val_sconto != "val" and $tipo_val_sconto != "tot" and $tipo_val_sconto != "tot_sett" and $tipo_val_sconto != "tar" and $tipo_val_sconto != "tar_sett" and $tipo_val_sconto != "perc_tot" and $tipo_val_sconto != "perc_tar") $inserire = "NO";
if ($tipo_val_sconto == "tot") {
$prezzo_totale_imposto = (double) $n_sconto;
$n_sconto = (double) $costo_totale_provvisorio - (double) $n_sconto;
} # fine if ($tipo_val_sconto == "tot")
if ($tipo_val_sconto == "tot_sett") {
$prezzo_totale_imposto = (double) $n_sconto * (double) $lunghezza_periodo;
$n_sconto = (double) $costo_totale_provvisorio - ((double) $n_sconto * (double) $lunghezza_periodo);
} # fine if ($tipo_val_sconto == "tot")
if ($tipo_val_sconto == "tar") $n_sconto = (double) $costo_tariffa - (double) $n_sconto;
if ($tipo_val_sconto == "tar_sett") $n_sconto = (double) $costo_tariffa - ((double) $n_sconto * (double) $lunghezza_periodo);
if ($tipo_val_sconto == "perc_tot" or $tipo_val_sconto == "perc_tar") {
if ($tipo_val_sconto == "perc_tot") $n_sconto = ($costo_totale_provvisorio * (double) $n_sconto) / 100;
if ($tipo_val_sconto == "perc_tar") $n_sconto = ($costo_tariffa * (double) $n_sconto) / 100;
$n_sconto = $n_sconto / (double) $arrotond_predef;
$n_sconto = floor((string) $n_sconto);
$n_sconto = $n_sconto * (double) $arrotond_predef;
} # fine if ($tipo_val_sconto == "perc_tot" or $tipo_val_sconto == "perc_tar")
if ($n_sconto > $costo_totale_provvisorio) {
echo mex("Lo <div style=\"display: inline; color: red;\">sconto</div> inserito",$pag)." (<b>$n_sconto</b>) ".mex("supera il costo totale senza sconto",$pag)." (<b>$costo_non_sconto</b>)$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($n_sconto > $costo_totale_provvisorio)
else $n_costo_tot = $n_costo_tot + $d_sconto - $n_sconto;
$sconto = $n_sconto;
} # fine if (strcmp((string) $n_sconto,""))
else $sconto = $d_sconto;

if (strcmp((string) $n_valuta_tariffa,"")) {
if ($n_valuta_tariffa == ">0") $valuta_tariffa = "";
else {
$valuta_tariffa = $n_valuta_tariffa;
$cambio_tariffa = $altre_valute[$altre_valute['id'][$valuta_tariffa]]['cambio'];
$arrotond_tariffa = $altre_valute[$altre_valute['id'][$valuta_tariffa]]['arrotond'];
} # fine else if ($n_valuta_tariffa == ">0")
} # fine if (strcmp((string) $n_valuta_tariffa,""))
else {
$valuta_tariffa = $d_valuta_tariffa_idpr[$id_prenota];
$cambio_tariffa = $d_cambio_tariffa_idpr[$id_prenota];
$arrotond_tariffa = $d_arrotond_tariffa_idpr[$id_prenota];
} # fine else if (strcmp((string) $n_valuta_tariffa,""))


# ciclo per approssimare lo sconto quando il prezzo è imposto
$passo = 1;
$dir_sconto = "";
$n_costo_agg_tot_orig = $n_costo_agg_tot;
$costo_escludi_perc_orig = $costo_escludi_perc;
$prezzo_esatto = 0;
while (!$prezzo_esatto) {
$n_costo_agg_tot = $n_costo_agg_tot_orig;
$costo_escludi_perc = $costo_escludi_perc_orig;
$mess_costi = "";

# calcolo prezzo per costi percentuali sul resto della caparra già presenti
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca]['tipo_val'] == "r") {
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;
$n_prezzo_costo_agg[$numca] = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],$costo_tariffa,$tariffesettimanali,$costo_totale_provvisorio,$caparra,$numpersone,"","",$costo_escludi_perc);
if ($d_prezzo_costo_agg[$numca] != $n_prezzo_costo_agg[$numca]) $mess_costi .= mex("Il prezzo del costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà cambiato da",$pag)." <b>".punti_in_num($d_prezzo_costo_agg[$numca])."</b> ".mex("a",$pag)." <b>".punti_in_num($n_prezzo_costo_agg[$numca])."</b>.<br>";
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$numca];
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$numca];
} # fine if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca][tipo_val] == "r")
} # fine for $numca

# calcolo prezzo per costi percentuali sul resto della caparra nuovi
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (isset(${"costoagg".$numca}) and ${"costoagg".$numca} == "SI") {
$num_costo = $dati_ca['id'][${"idcostoagg".$numca}];
if ($dati_ca[$num_costo]['tipo_val'] == "r") {
$num_reg = ($dati_cap['num'] + $numca - 1);
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;
$n_prezzo_costo_agg[$num_reg] = (double) calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],$costo_tariffa,$tariffesettimanali,$costo_totale_provvisorio,$caparra,$numpersone,"","",$costo_escludi_perc);
$mess_costi .= comunica_aggiunta_costo($dati_ca,$num_costo,$n_prezzo_costo_agg[$num_reg],$stile_soldi,$pag,$Euro,$associasett_ca_ricorda[$num_reg],$n_moltiplica_costo[$num_reg],$settimane_costo_ricorda[$num_reg],$per_la_prenotazione,"1",${"catpers_ca$numca"});
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$num_reg];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$num_reg];
if ($dati_ca[$num_costo]['var_percentuale'] != "s" and $dati_ca[$num_costo]['tipo_val'] != "f") $costi_aggiuntivi_da_inserire_int = str_replace("da#?&sostituire$num_costo#?&",$n_prezzo_costo_agg[$num_reg]."#?&",$costi_aggiuntivi_da_inserire_int);
} # fine if ($dati_ca[$num_costo][tipo_val] == "r")
} # fine if (isset(${"costoagg".$numca}) and ${"costoagg".$numca} == "SI")
} # fine for $numca

# calcolo prezzo per costi percentuali sul totale già presenti
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$numcostoaggiuntivo = "costoaggiuntivo".$dati_cap[$numca]['id'];
if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca]['tipo_val'] == "t") {
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;
$n_prezzo_costo_agg[$numca] = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$inizioperiodo,$fineperiodo,$n_settimane_costo[$numca],$n_moltiplica_costo[$numca],$costo_tariffa,$tariffesettimanali,$costo_totale_provvisorio,$caparra,$numpersone,"","",$costo_escludi_perc);
if ($d_prezzo_costo_agg[$numca] != $n_prezzo_costo_agg[$numca]) $mess_costi .= mex("Il prezzo del costo aggiuntivo",$pag)." \"<b>".$dati_cap[$numca]['nome']."</b>\"$per_la_prenotazione ".mex("verrà cambiato da",$pag)." <b>".punti_in_num($d_prezzo_costo_agg[$numca])."</b> ".mex("a",$pag)." <b>".punti_in_num($n_prezzo_costo_agg[$numca])."</b>.<br>";
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$numca];
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$numca];
} # fine if ($$numcostoaggiuntivo == "SI" and $dati_cap[$numca][tipo_val] == "t")
} # fine for $numca

# calcolo prezzo per costi percentuali sul totale nuovi
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (isset(${"costoagg".$numca}) and ${"costoagg".$numca} == "SI") {
$num_costo = $dati_ca['id'][${"idcostoagg".$numca}];
if ($dati_ca[$num_costo]['tipo_val'] == "t") {
$num_reg = ($dati_cap['num'] + $numca - 1);
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;
$n_prezzo_costo_agg[$num_reg] = (double) calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$n_settimane_costo[$num_reg],$n_moltiplica_costo[$num_reg],$costo_tariffa,$tariffesettimanali,$costo_totale_provvisorio,$caparra,$numpersone,"","",$costo_escludi_perc);
$mess_costi .= comunica_aggiunta_costo($dati_ca,$num_costo,$n_prezzo_costo_agg[$num_reg],$stile_soldi,$pag,$Euro,$associasett_ca_ricorda[$num_reg],$n_moltiplica_costo[$num_reg],$settimane_costo_ricorda[$num_reg],$per_la_prenotazione,"1",${"catpers_ca$numca"});
$n_costo_agg_tot = $n_costo_agg_tot + $n_prezzo_costo_agg[$num_reg];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $n_prezzo_costo_agg[$num_reg];
if ($dati_ca[$num_costo]['var_percentuale'] != "s" and $dati_ca[$num_costo]['tipo_val'] != "f") $costi_aggiuntivi_da_inserire_int = str_replace("da#?&sostituire$num_costo#?&",$n_prezzo_costo_agg[$num_reg]."#?&",$costi_aggiuntivi_da_inserire_int);
} # fine if ($dati_ca[$num_costo][tipo_val] == "t")
} # fine if (isset(${"costoagg".$numca}) and ${"costoagg".$numca} == "SI")
} # fine for $numca

if (strcmp((string) $prezzo_totale_imposto,"")) {
$costo_totale_provvisorio = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;
if (round($costo_totale_provvisorio,2) != round($prezzo_totale_imposto,2)) {
if ($costo_totale_provvisorio > $prezzo_totale_imposto) {
if ($dir_sconto and $dir_sconto != "crescente") {
if ($passo == 1) $passo = 0.01;
else break;
} # fine if ($dir_sconto and $dir_sconto != "crescente")
$dir_sconto = "crescente";
$n_sconto = $n_sconto + (double) $passo;
$sconto = $n_sconto;
$n_costo_tot = $n_costo_tot - (double) $passo;
} # fine if ($costo_totale_provvisorio > $prezzo_totale_imposto)
else {
if ($dir_sconto and $dir_sconto != "decrescente") break;
if ($dir_sconto and $dir_sconto != "decrescente") {
if ($passo == 1) $passo = 0.01;
else break;
} # fine if ($dir_sconto and $dir_sconto != "decrescente")
$dir_sconto = "decrescente";
$n_sconto = $n_sconto - (double) $passo;
$sconto = $n_sconto;
$n_costo_tot = $n_costo_tot + (double) $passo;
} # fine else if ($costo_totale_provvisorio > $prezzo_totale_imposto)
} # fine if (round($costo_totale_provvisorio,2) != round($prezzo_totale_imposto,2))
else $prezzo_esatto = 1;
} # fine if (strcmp((string) $prezzo_totale_imposto,""))
else $prezzo_esatto = 1;

} # fine while (!$prezzo_esatto)
echo $mess_costi;

if ($inserire != "NO" and strcmp((string) $n_sconto,"")) {
$d_sconto_p = punti_in_num($d_sconto,$stile_soldi);
$n_sconto_p = punti_in_num($n_sconto,$stile_soldi);
echo mex("Lo sconto verrà cambiato da",$pag)." <b>$d_sconto_p</b> ".mex("a",$pag)." <b>$n_sconto_p</b> $Euro";
if (strcmp((string) $valuta_tariffa,"")) {
$sconto_valuta = converti_valuta($n_sconto,$cambio_tariffa,$arrotond_tariffa);
echo " = <em>".punti_in_num($sconto_valuta,$stile_soldi)." <b>$valuta_tariffa</b></em>";
} # fine if (strcmp((string) $valuta_tariffa,""))
echo "$per_la_prenotazione.<br>";
} # fine if ($inserire != "NO" and strcmp((string) $n_sconto,""))

} # fine if ($inserire != "NO")

# fine calcolo costi aggiuntivi
$n_costo_tot = $n_costo_tot + $n_costo_agg_tot - $d_costo_agg_tot;


if ($n_commissioni and ($tipo_val_commissioni == "perc_tar" or $tipo_val_commissioni == "perc_ts" or $tipo_val_commissioni == "perc_tsc")) {
$commissioni_arrotond = $dati_tariffe[$tipotariffa]['commissioni_arrotond']['def'];
if (!strcmp((string) $commissioni_arrotond,"") or $commissioni_arrotond == "val") $commissioni_arrotond = $arrotond_predef;
$costo_base = (double) $costo_tariffa;
if ($tipo_val_commissioni == "perc_ts") $costo_base = $costo_base - (double) $sconto;
if ($tipo_val_commissioni == "perc_tsc") $costo_base = $costo_base - (double) $sconto + (double) $n_costo_agg_tot;
$n_commissioni = ($costo_base * (double) $n_commissioni) / 100;
$n_commissioni = $n_commissioni / $commissioni_arrotond;
$n_commissioni = floor(round($n_commissioni));
$n_commissioni = $n_commissioni * $commissioni_arrotond;
} # fine if ($n_commissioni and ($tipo_val_commissioni == "perc_tar" or...
if (isset($n_calcola_commissioni) and $n_calcola_commissioni == "SI" and $inserire == "SI") {
if ($trovata_tariffa == "NO") {
$inserire = "NO";
echo mex("La tariffa",$pag)." <div style=\"display: inline; color: red;\">$nome_tariffa</div>$per_la_prenotazione ".mex("non esiste più, cambiala prima di aggiornare",$pag).".<br>";
} # fine if ($trovata_tariffa == "NO")
else $n_commissioni = calcola_commissioni($dati_tariffe,$tipotariffa,$inizioperiodo,$fineperiodo,$tariffesettimanali,$sconto,$n_costo_agg_tot);
} # fine if (isset($n_calcola_commissioni) and $n_calcola_commissioni == "SI" and $inserire == "SI")
if ($n_commissioni) $commissioni = $n_commissioni;
else $commissioni = $d_commissioni;

$valuta_caparra = "";
if (strcmp((string) $n_valuta_caparra,"") and ($n_valuta_caparra == ">0" or strcmp((string) $altre_valute['id'][$n_valuta_caparra],"")) and $priv_mod_caparra == "s") {
if (!strcmp((string) $d_valuta_caparra,"")) $d_valuta_cap = $Euro;
else $d_valuta_cap = $d_valuta_caparra;
if ($n_valuta_caparra == ">0") $n_valuta_cap = $Euro;
else $n_valuta_cap = $n_valuta_caparra;
echo mex("La caparra verrà cambiata da",$pag)." <b>$d_valuta_cap</b> ".mex("a",$pag)." <b>$n_valuta_cap</b>";
if ($n_valuta_caparra != ">0") {
$valuta_caparra = $n_valuta_caparra;
$valuta_cap = $altre_valute['id'][$n_valuta_caparra];
$cambio_caparra = $altre_valute[$valuta_cap]['cambio'];
$arrotond_caparra = $altre_valute[$valuta_cap]['arrotond'];
$caparra_valuta = converti_valuta($caparra,$cambio_caparra,$arrotond_caparra);
echo " (".punti_in_num($caparra_valuta,$stile_soldi)." ".htmlspecialchars($n_valuta_caparra)." = ".punti_in_num($caparra,$stile_soldi)." $Euro)";
} # fine if ($n_valuta_caparra != ">0")
echo "$per_la_prenotazione.<br>";
} # fine if (strcmp((string) $n_valuta_caparra,"") and ($n_valuta_caparra == ">0" or...
else {
$valuta_caparra = $d_valuta_caparra;
$cambio_caparra = $d_cambio_caparra;
$arrotond_caparra = $d_arrotond_caparra;
} # fine else if (strcmp((string) $n_valuta_caparra,"") and ($n_valuta_caparra == ">0" or...

if (isset($n_caparra) and strcmp((string) $n_caparra,"")) {
if ($n_caparra > $n_costo_tot) {
echo mex("La <div style=\"display: inline; color: red;\">caparra</div> inserita",$pag)." (<b>$n_caparra</b>) ".mex("supera il costo totale",$pag)." (<b>$n_costo_tot</b>)$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($n_caparra > $n_costo_tot)
else {
$d_caparra_p = punti_in_num($d_caparra,$stile_soldi);
$n_caparra_p = punti_in_num($n_caparra,$stile_soldi);
echo mex("La caparra verrà cambiata da",$pag)." <b>$d_caparra_p</b> $Euro ".mex("a",$pag)." <b>$n_caparra_p</b> $Euro";
if (strcmp((string) $valuta_caparra,"")) {
$caparra_valuta = converti_valuta($n_caparra,$cambio_caparra,$arrotond_caparra);
echo " = <em>".punti_in_num($caparra_valuta,$stile_soldi)." $valuta_caparra</em>";
} # fine if (strcmp((string) $valuta_caparra,""))
echo "$per_la_prenotazione.<br>";
} # fine else if ($n_caparra > $n_costo_tot)
} # fine if (isset($n_caparra) and strcmp((string) $n_caparra,""))
else {
if ($d_caparra > $n_costo_tot) {
echo mex("La <div style=\"display: inline; color: red;\">caparra</div>",$pag)." (<b>$d_caparra</b>) ".mex("supera il nuovo costo totale",$pag)." (<b>$n_costo_tot</b>)$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine else if ($d_caparra > $n_costo_tot)
} # fine else if (isset($n_caparra) and strcmp((string) $n_caparra,""))

if ($n_met_paga_caparra and $priv_mod_caparra == "s") {
echo mex("Il metodo di pagamento della caparra verrà cambiato a",$pag)." \"<b>".str_replace(">","",str_replace("<","",str_replace("\"","",$n_met_paga_caparra)))."</b>\"$per_la_prenotazione.<br>";
$met_paga_caparra = $n_met_paga_caparra;
} # fine if ($n_met_paga_caparra and $priv_mod_caparra == "s")
else $met_paga_caparra = $d_met_paga_caparra;

if (strcmp((string) $n_commissioni,"")) {
$d_commissioni_p = punti_in_num($d_commissioni,$stile_soldi);
$n_commissioni_p = punti_in_num($n_commissioni,$stile_soldi);
echo mex("Le commissioni verranno cambiate da",$pag)." <b>$d_commissioni_p</b> ".mex("a",$pag)." <b>$n_commissioni_p</b> $Euro$per_la_prenotazione.<br>";
} # fine if (strcmp((string) $n_commissioni,""))

if ($priv_mod_pagato != "s" or controlla_soldi($n_pagato,"SI") == "NO") {
$modo_aggiorna_pagato = null;
$valuta_aggiorna_pagato = null;
$n_pagato = null;
} # fine if ($priv_mod_pagato != "s" or controlla_soldi($n_pagato,"SI") == "NO")
if ($modo_aggiorna_pagato == "caparra") $n_pagato = $caparra;
if ($modo_aggiorna_pagato == "tutto") $n_pagato = $n_costo_tot;
if (strcmp((string) $valuta_aggiorna_pagato,"") and !strcmp((string) $altre_valute['id'][$valuta_aggiorna_pagato],"")) $valuta_aggiorna_pagato = "";
if (strcmp((string) $n_pagato,"")) {
if (strcmp((string) $valuta_aggiorna_pagato,"") and $n_pagato and $modo_aggiorna_pagato != "caparra" and $modo_aggiorna_pagato != "tutto") {
if ($valuta_aggiorna_pagato == $valuta_tariffa) $n_pagato = converti_valuta($n_pagato,$cambio_tariffa,$arrotond_tariffa,1);
else $n_pagato = converti_valuta($n_pagato,$altre_valute[$altre_valute['id'][$valuta_aggiorna_pagato]]['cambio'],$dati_tariffe['tasse_arrotond'],1);
} # fine if (strcmp((string) $valuta_aggiorna_pagato,"") and $n_pagato and $modo_aggiorna_pagato != "caparra" and $modo_aggiorna_pagato != "tutto")
if ($modo_aggiorna_pagato == "aggiungi") $n_pagato = $d_pagato + $n_pagato;
if ($n_pagato > $n_costo_tot) {
echo mex("La cifra <div style=\"display: inline; color: red;\">pagata</div> inserita",$pag)." (<b>$n_pagato</b>) ".mex("supera il costo totale",$pag)." (<b>$n_costo_tot</b>)$per_la_prenotazione.<br>";
$inserire = "NO";
} # fine if ($n_pagato > $n_costo_tot)
else {
$d_pagato_p = punti_in_num($d_pagato,$stile_soldi);
$n_pagato_p = punti_in_num($n_pagato,$stile_soldi);
$diff_pagato = ($n_pagato - $d_pagato);
$diff_pagato_p = punti_in_num($diff_pagato,$stile_soldi);
if (substr($diff_pagato_p,0,1) != "-") $diff_pagato_p = "+".$diff_pagato_p;
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($diff_pagato != 0) {
echo "<div style=\"height: 5px;\"></div>";
if (!isset($form_continua_iniziata) or $form_continua_iniziata != "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>";
$form_continua_iniziata = "SI";
} # fine if ($diff_pagato != 0)
echo mex("I soldi pagati verranno cambiati da",$pag)." <b>$d_pagato_p</b> ".mex("a",$pag)." <b>$n_pagato_p</b> $Euro ($diff_pagato_p)$per_la_prenotazione.";
if (!strcmp((string) $valuta_aggiorna_pagato,"")) {
if (strcmp((string) $valuta_caparra,"") and (double) $n_pagato <= (double) $caparra and $diff_pagato > 0) $valuta_aggiorna_pagato = $valuta_caparra;
elseif (strcmp((string) $valuta_tariffa,"") and $diff_pagato > 0) $valuta_aggiorna_pagato = $valuta_tariffa;
} # fine if (!strcmp((string) $valuta_aggiorna_pagato,""))
if (($altre_valute['num'] or strcmp((string) $valuta_aggiorna_pagato,"")) and $diff_pagato != 0) {
if (strcmp((string) $valuta_aggiorna_pagato,"")) {
$cambio_aggiorna_pagato = $altre_valute[$altre_valute['id'][$valuta_aggiorna_pagato]]['cambio'];
$arrotond_aggiorna_pagato = $altre_valute[$altre_valute['id'][$valuta_aggiorna_pagato]]['arrotond'];
if ($valuta_caparra == $valuta_aggiorna_pagato and (double) $n_pagato <= (double) $caparra and $diff_pagato > 0) {
$cambio_aggiorna_pagato = $cambio_caparra;
$arrotond_aggiorna_pagato = $arrotond_caparra;
} # fine if ($valuta_caparra == $valuta_aggiorna_pagato and (double) $n_pagato <= (double) $caparra and $diff_pagato > 0)
elseif ($valuta_tariffa == $valuta_aggiorna_pagato) {
$cambio_aggiorna_pagato = $cambio_tariffa;
$arrotond_aggiorna_pagato = $arrotond_tariffa;
} # fine elseif ($valuta_tariffa == $valuta_aggiorna_pagato)
} # fine if (strcmp((string) $valuta_aggiorna_pagato,""))
echo " ".mex("Valuta",$pag).":
 <select name=\"valuta_pagamento$id_prenota\">
<option value=\"\">$diff_pagato_p $Euro</option>";
$valuta_trovata = 0;
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
$diff_pagato_valuta = converti_valuta($diff_pagato,$altre_valute[$num1]['cambio'],$altre_valute[$num1]['arrotond']);
$diff_pagato_valuta_p = punti_in_num($diff_pagato_valuta,$stile_soldi);
if (substr($diff_pagato_valuta_p,0,1) != "-") $diff_pagato_valuta_p = "+".$diff_pagato_valuta_p;
if ($altre_valute[$num1]['nome'] == $valuta_aggiorna_pagato and (double) $altre_valute[$num1]['cambio'] == (double) $cambio_aggiorna_pagato and (double) $altre_valute[$num1]['arrotond'] == (double) $arrotond_aggiorna_pagato) {
$sel = " selected";
$valuta_trovata = 1;
} # fine if ($altre_valute[$num1]['nome'] == $valuta_aggiorna_pagato and (double) $altre_valute[$num1]['cambio'] == (double) $cambio_aggiorna_pagato and...
else $sel = "";
echo "<option value=\"".htmlspecialchars($altre_valute[$num1]['nome'])."\"$sel>$diff_pagato_valuta_p ".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
if (!$valuta_trovata and strcmp((string) $valuta_aggiorna_pagato,"")) {
$diff_pagato_valuta = converti_valuta($diff_pagato,$cambio_aggiorna_pagato,$arrotond_aggiorna_pagato);
$diff_pagato_valuta_p = punti_in_num($diff_pagato_valuta,$stile_soldi);
if (substr($diff_pagato_valuta_p,0,1) != "-") $diff_pagato_valuta_p = "+".$diff_pagato_valuta_p;
echo "<option value=\"".htmlspecialchars(">".$valuta_aggiorna_pagato)."\" selected>$diff_pagato_valuta_p $valuta_aggiorna_pagato</option>";
} # fine if (!$valuta_trovata and strcmp((string) $valuta_aggiorna_pagato,""))
echo "</select>.";
} # fine if (($altre_valute['num'] or strcmp((string) $valuta_aggiorna_pagato,"")) and $diff_pagato != 0)
if ($metodi_pagamento and $diff_pagato != 0) {
echo " ";
if ($num_id_prenota == 1) echo "<div id=\"sep_ep$id_prenota\" style=\"height: 4px;\"></div>";
echo "".mex("Metodo di pagamento",$pag).":
 <select name=\"metodo_pagamento$id_prenota\">
<option value=\"\">----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) {
if ($met_paga_caparra == $metodi_pagamento[$num1] and $caparra > $d_pagato) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($metodi_pagamento[$num1])."\"$sel>".$metodi_pagamento[$num1]."</option>";
} # fine for $num1
echo "</select><span id=\"spn_ep$id_prenota\">, ";
if ($num_id_prenota == 1) echo mex("id operazione",$pag)." <input type=\"text\" name=\"id_pagamento$id_prenota\" value=\"\" size=\"14\" maxlength=\"300\">.";
else echo mex("id op.",$pag)." <input type=\"text\" name=\"id_pagamento$id_prenota\" value=\"\" size=\"10\" maxlength=\"300\">.";
echo "</span>";
} # fine if ($metodi_pagamento and $diff_pagato != 0)
if ($diff_pagato != 0) {
if (!$metodi_pagamento) echo "<span id=\"spn_ep$id_prenota\"></span>";
if ($num_id_prenota == 1) echo "<div id=\"div_ep$id_prenota\"><div style=\"height: 4px;\"></div>".mex("Data operazione",$pag).": ";
else echo "<span id=\"div_ep$id_prenota\"> ".mex("Data",$pag).": ";
$gio_corr = date('d',(time() + (C_DIFF_ORE * 3600)));
$sel_gpagamento = "<select name=\"giorno_pagamento$id_prenota\">";
for ($num1 = 1 ; $num1 <= 31; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $gio_corr) $sel = " selected";
else $sel = "";
$sel_gpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_gpagamento .= "</select>";
$mese_corr = date('m',(time() + (C_DIFF_ORE * 3600)));
$sel_mpagamento = "<select name=\"mese_pagamento$id_prenota\">";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == $mese_corr) $sel = " selected";
else $sel = "";
$sel_mpagamento .= "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
$sel_mpagamento .= "</select>";
if ($stile_data == "usa") echo "$sel_mpagamento/$sel_gpagamento";
else echo "$sel_gpagamento/$sel_mpagamento";
echo "/<select name=\"anno_pagamento$id_prenota\">";
$anno_corr = date('Y',(time() + (C_DIFF_ORE * 3600)));
for ($num1 = ($anno - 2) ; $num1 <= ($anno_corr + 1) ; $num1++) {
if ($num1 == $anno_corr) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select>.";
if ($num_id_prenota == 1) echo "<div style=\"height: 4px;\"></div><table cellspacing=0><tr><td style=\"vertical-align: top;\">".mex("Note",$pag).":&nbsp;</td><td><textarea name=\"note_pagamento$id_prenota\" rows=3 cols=36 style=\"white-space: pre-wrap; overflow: auto;\"></textarea></td></tr></table></div>";
else echo " ".mex("Note",$pag).": <input type=\"text\" name=\"note_pagamento$id_prenota\" value=\"\" size=\"12\">.</span>";
echo "<script type=\"text/javascript\">
<!--
var sep_ep$id_prenota = document.getElementById('sep_ep$id_prenota');
var spn_ep$id_prenota = document.getElementById('spn_ep$id_prenota').innerHTML;
var div_ep$id_prenota = document.getElementById('div_ep$id_prenota').innerHTML;
function apri_ei$id_prenota () {
if (sep_ep$id_prenota) sep_ep$id_prenota.style.display = 'block';
document.getElementById('spn_ep$id_prenota').innerHTML = spn_ep$id_prenota;
document.getElementById('div_ep$id_prenota').innerHTML = div_ep$id_prenota;
}
if (sep_ep$id_prenota) sep_ep$id_prenota.style.display = 'none';
document.getElementById('spn_ep$id_prenota').innerHTML = '";
if ($metodi_pagamento) echo ".";
echo " ".mex("Informazioni extra",$pag)." <button type=\"button\" onclick=\"apri_ei$id_prenota();\"><img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"&gt;\"></button>';
document.getElementById('div_ep$id_prenota').innerHTML = '';
-->
</script>";
} # fine if ($diff_pagato != 0)
echo "<div></div>";
if ($n_pagato == $n_costo_tot and $num_id_prenota == 1) {
$altre_prenota_cliente = esegui_query("select tariffa_tot,pagato from $tableprenota where idclienti = '".$d_id_clienti_idpr[$id_prenota]."' and iddatafine >= '".($d_id_data_inizio - 1)."' and iddatainizio <= '".($d_id_data_fine + 1)."' and idprenota != '$id_prenota' ");
$num_altre_prenota = numlin_query($altre_prenota_cliente);
for ($num1 = 0 ; $num1 < $num_altre_prenota ; $num1++) {
$tariffa_tot_altra_prenota = risul_query($altre_prenota_cliente,$num1,'tariffa_tot');
$pagato_altra_prenota = risul_query($altre_prenota_cliente,$num1,'pagato');
if ($pagato_altra_prenota < $tariffa_tot_altra_prenota) {
echo "<span class=\"colblu\">".mex("Attenzione",$pag)."</span>: ".mex("vi sono altre prenotazioni dello stesso cliente nello stesso periodo che ancora non sono state pagate",$pag).".<br>";
break;
} # fine if ($pagato_altra_prenota < $tariffa_tot_altra_prenota)
} # fine for $num1
} # fine if ($n_pagato == $n_costo_tot and $num_id_prenota == 1)
$diff_pagato_tot += $diff_pagato;
if ($diff_pagato != 0) echo "<div style=\"height: 5px;\"></div>";
} # fine else if ($n_pagato > $n_costo_tot)
} # fine if (strcmp((string) $n_pagato,""))

$aggiorna_confermato = "";
if (!$n_confermato) $n_confermato = "N";
if ($d_pagato > 0) $aggiorna_confermato = "NO";
if (strcmp((string) $n_pagato,"")) {
if ($n_pagato > 0) $aggiorna_confermato = "NO";
else $aggiorna_confermato = "SI";
} # fine if (strcmp((string) $n_pagato,""))
if ($aggiorna_confermato == "NO") $n_confermato = "S";
if ($priv_canc_prenota_conf != "s" and $d_confermato_idpr[$id_prenota] == "S") $priv_mod_conf = "n";
else $priv_mod_conf = $priv_mod_pagato;
if ($d_confermato_idpr[$id_prenota] != $n_confermato and $priv_mod_conf != "n" and $priv_mod_conf != "v" and $d_confermato != "~") {
if ($aggiorna_confermato != "NO") {
if ($n_confermato == "S") echo mex("La prenotazione",$pag)." $id_prenota ".mex("verrà <b>confermata</b>",$pag).".<br>";
else echo mex("Verrà tolta la <b>conferma</b> alla prenotazione",$pag)." $id_prenota.<br>";
} # fine if ($aggiorna_confermato != "NO")
} # fine if ($d_confermato_idpr[$id_prenota] != $n_confermato and $priv_mod_conf != "n" and...
else $n_confermato = "";

if ($verifica_app == "SI" and $n_appartamento_idpr[$id_prenota] != $d_appartamento_idpr[$id_prenota] and empty($frase_spostamento_idpr[$id_prenota])) {
echo mex("La prenotazione",$pag)." $id_prenota ".mex("verrà spostata dall'appartamento",'unit.php')." ".$d_appartamento_idpr[$id_prenota]." ".mex("al",'unit.php')." <b>".$n_appartamento_idpr[$id_prenota]."</b>.<br>";
} # fine if ($verifica_app == "SI" and $n_appartamento_idpr[$id_prenota] != $d_appartamento_idpr[$id_prenota] and...

if (round($n_costo_tot,2) != round($d_costo_tot,2) and $inserire != "NO") {
$diff_costo_tot = (double) $n_costo_tot - (double) $d_costo_tot;
echo "<br>".mex("Il prezzo totale cambierà da",$pag)." <b>".punti_in_num($d_costo_tot,$stile_soldi)."</b> $Euro ".mex("a",$pag)." <b>".punti_in_num($n_costo_tot,$stile_soldi)."</b> $Euro";
if (strcmp((string) $valuta_tariffa,"")) {
$n_costo_valuta = (double) $n_costo_tot * (double) $cambio_tariffa;
$n_costo_valuta = $n_costo_valuta / (double) $arrotond_tariffa;
$n_costo_valuta = round($n_costo_valuta);
$n_costo_valuta = $n_costo_valuta * (double) $arrotond_tariffa;
echo " = <em>".punti_in_num($n_costo_valuta,$stile_soldi)." <b>$valuta_tariffa</b></em>";
} # fine if (strcmp((string) $valuta_tariffa,""))
echo " (".mex("saldo di",$pag)." <b>".punti_in_num($diff_costo_tot,$stile_soldi)."</b> $Euro)$per_la_prenotazione.<br>";
} # fine if (round($n_costo_tot,2) != round($d_costo_tot,2) and $inserire != "NO")


$n_nometipotariffa_idpr[$id_prenota] = $n_nometipotariffa;
$n_tariffesettimanali_idpr[$id_prenota] = $n_tariffesettimanali;
$n_costo_tariffa_idpr[$id_prenota] = $n_costo_tariffa.$n_molt_tariffa;
$costi_aggiuntivi_modificati_int_idpr[$id_prenota] = $costi_aggiuntivi_modificati_int;
$costi_aggiuntivi_da_inserire_int_idpr[$id_prenota] = $costi_aggiuntivi_da_inserire_int;
$n_sconto_caparra_idpr[$id_prenota] = $n_sconto."#>&".fixset($n_caparra)."#>&".$n_commissioni."#>&".fixset($n_valuta_tariffa);
$n_pagato_idpr[$id_prenota] = $n_pagato;
$n_confermato_idpr[$id_prenota] = $n_confermato;
$n_costo_tot_idpr[$id_prenota] = $n_costo_tot;
$cat_persone_idpr[$id_prenota] = $cat_persone;
} # fine for $num_idpr


if ($diff_pagato_tot and $inserire != "NO" and $num_id_prenota > 1) {
echo "<br>".mex("Il saldo totale pagato sarà di",$pag)." <b>".punti_in_num($diff_pagato_tot,$stile_soldi)."</b> $Euro.<br>";
} # fine if ($diff_pagato_tot and $inserire != "NO")

} # fine if ($inizioperiodo_min != 0 and $inserire != "NO")
if ($dati_da_anno_prec == "SI") passa_var_a_anno_corr($id_prenota,$tableperiodi,$tableprenota,$tablecostiprenota,$d_id_data_inizio,$d_id_data_fine,$n_fineperiodo,$inizioperiodo,$fineperiodo,$lunghezza_periodo);



if ($inserire == "SI") {

$tabelle_lock = array($tableversioni,$tabletransazioni);
$tabelle_lock = lock_tabelle($tabelle_lock);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$id_transazione = crea_id_sessione("",$tableversioni,8);
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
esegui_query("delete from $tabletransazioni where anno = '$anno' and dati_transazione1 $ILIKE '%,$id_prenota,%' and tipo_transazione = 'mod_p' ");
} # fine for $num_idpr

$n_costo_tot = aggslashdb(serialize($n_costo_tot_idpr));
$n_appartamento = aggslashdb(serialize($n_appartamento_idpr));
$n_assegnazioneapp = aggslashdb(serialize($n_assegnazioneapp_idpr));
$n_lista_app = aggslashdb(serialize($n_lista_app_idpr));
$n_numpersone = aggslashdb(serialize($n_numpersone_idpr));
$cat_persone = aggslashdb(serialize($cat_persone_idpr));
$n_nometipotariffa = aggslashdb(serialize($n_nometipotariffa_idpr));
$n_costo_tariffa = aggslashdb(serialize($n_costo_tariffa_idpr));
$costi_aggiuntivi_modificati_int = aggslashdb(serialize($costi_aggiuntivi_modificati_int_idpr));
$costi_aggiuntivi_da_inserire_int = aggslashdb(serialize($costi_aggiuntivi_da_inserire_int_idpr));
$n_sconto_caparra = aggslashdb(serialize($n_sconto_caparra_idpr));
$n_tariffesettimanali = aggslashdb(serialize($n_tariffesettimanali_idpr));
$prenota_comp = aggslashdb(serialize($prenota_comp_idpr));
$n_app_eliminati_costi = aggslashdb(serialize($n_app_eliminati_costi_idpr));
esegui_query("insert into $tabletransazioni (idtransazioni,idsessione,tipo_transazione,anno,spostamenti,dati_transazione1,dati_transazione2,dati_transazione3,dati_transazione4,dati_transazione5,dati_transazione6,dati_transazione7,dati_transazione8,dati_transazione9,dati_transazione10,dati_transazione11,dati_transazione12,dati_transazione13,dati_transazione14,dati_transazione15,dati_transazione16,dati_transazione17,dati_transazione18,dati_transazione19,dati_transazione20,dati_transazione21,ultimo_accesso) 
values ('$id_transazione','$id_sessione','mod_p','$anno','$spostamenti_transazione',',$id_prenota_int,','$d_data_inserimento','$d_host_inserimento','$n_costo_tot','$n_inizioperiodo','$n_fineperiodo','$n_appartamento','$n_assegnazioneapp','$n_lista_app','$n_numpersone','$tableprenota_da_aggiornare','$n_nometipotariffa','$n_costo_tariffa','$costi_aggiuntivi_modificati_int','$costi_aggiuntivi_da_inserire_int','$n_sconto_caparra','$n_tariffesettimanali','$id_per_corr_finto','$prenota_comp','$n_app_eliminati_costi','$cat_persone','$ultimo_accesso')");
unlock_tabelle($tabelle_lock);

$n_pagato = htmlspecialchars(serialize($n_pagato_idpr));
$n_confermato = htmlspecialchars(serialize($n_confermato_idpr));
if (!isset($form_continua_iniziata) or $form_continua_iniziata != "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>";
if ($sposta_per_checkin) echo "<input type=\"hidden\" name=\"ins_checkin\" value=\"1\">";
echo "<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<input type=\"hidden\" name=\"id_transazione\" value=\"$id_transazione\">

<input type=\"hidden\" name=\"id_nuovo_utente_inserimento\" value=\"$id_nuovo_utente_inserimento\">
<input type=\"hidden\" name=\"n_stima_checkin\" value=\"$n_stima_checkin\">
<input type=\"hidden\" name=\"n_valuta_caparra\" value=\"".htmlspecialchars(fixstr($n_valuta_caparra))."\">
<input type=\"hidden\" name=\"n_met_paga_caparra\" value=\"".htmlspecialchars(fixstr($n_met_paga_caparra))."\">
<input type=\"hidden\" name=\"n_origine_prenota\" value=\"$n_origine_prenota\">
<input type=\"hidden\" name=\"n_pagato\" value=\"$n_pagato\">
<input type=\"hidden\" name=\"n_confermato\" value=\"$n_confermato\">
<input type=\"hidden\" name=\"tipo_commento\" value=\"$tipo_commento\">
<input type=\"hidden\" name=\"n_commento\" value=\"$n_commento\">
<input type=\"hidden\" name=\"n_cancella_commento\" value=\"$n_cancella_commento\">
<input type=\"hidden\" name=\"tableprenota_da_aggiornare\" value=\"$tableprenota_da_aggiornare\">

<input type=\"hidden\" name=\"modificaprenotazione\" value=\"Continua\">
<br><button class=\"mres\" type=\"submit\"><div>".mex("Continua",$pag)."</div></button>
<br><br><hr style=\"width: 75%; margin-left: 5px; text-align: left;\"><br></div></form>";
} # fine if ($inserire == "SI")
elseif (isset($form_continua_iniziata) and $form_continua_iniziata == "SI") echo "</div></form>";


if (isset($cancellata) and $cancellata == "SI") $action = str_replace("\"","",str_replace(">","",str_replace("<","",$origine)));
else $action = "modifica_prenota.php";
if (substr($origine,0,13) == "tab_mese_drop") {
$action = explode("#",$origine);
$action = "tabella.php#rd_n".$action[1];
} # fine if (substr($origine,0,13) == "tab_mese_drop")
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"".controlla_pag_origine($action)."\"><div>";
echo "<br><input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form><br>";

} # fine if ($modificaprenotazione != "Continua")



else {


esegui_modifiche_prenotazione($inserire,$cancellata,$id_prenota_int,$id_prenota_idpr,$num_id_prenota,$id_transazione,$id_sessione,$anno,$id_nuovo_utente_inserimento,$n_stima_checkin,$n_valuta_caparra,$n_met_paga_caparra,$n_origine_prenota,$n_pagato,$n_confermato,$tipo_commento,$n_commento,$n_cancella_commento,$tableprenota_da_aggiornare,"",$dati_da_anno_prec,$prenota_in_anno_succ,$tra_anni,$PHPR_TAB_PRE,$pcanc);

if ($inserire != "NO") {
$mostra_form_modifica_prenota = "SI";
$n_inizioperiodo = "";
$n_fineperiodo = "";
$n_appartamento = "";
$n_lista_app = "";
$n_numpersone = "";
$tipo_commento = "";
$n_commento = "";
$n_cancella_commento = "";
$n_sconto = "";
$n_caparra = "";
$n_valuta_caparra = "";
$n_met_paga_caparra = "";
$n_commissioni = "";
$n_origine_prenota = "";
$n_pagato = "";
$n_nometipotariffa = "";
} # fine if ($inserire != "NO")


if ($mostra_form_modifica_prenota != "SI") {
if ($cancellata == "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"".str_replace("\"","",str_replace(">","",str_replace("<","",$origine)))."\"><div>";
else echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>";
echo "<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<button class=\"cont\" type=\"submit\"><div>".mex("OK",$pag)."</div></button>
<br></div></form>";
} # fine if ($mostra_form_modifica_prenota != "SI")

} # fine else if ($modificaprenotazione != "Continua")
} # fine if (!empty($modificaprenotazione))


} # fine else if (!empty($cancella) and $priv_canc_prenotazioni != "n")




if ($idprenota_origine) $idprenota_origine2 = $idprenota_origine;
else $idprenota_origine2 = $id_prenota_int;


if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and (!empty($ins_checkin) or !empty($canc_checkin) or !empty($ins_checkout) or !empty($canc_checkout))) {
$campi_prenota = "iddatainizio,iddatafine,commento";
$ins_checkin = fixset($ins_checkin);
$canc_checkin = fixset($canc_checkin);
$ins_checkout = fixset($ins_checkout);
$canc_checkout = fixset($canc_checkout);
if ($ins_checkin or $ins_checkout) {
if ($ins_checkout) $testo = "checkout";
else $testo = "checkin";
$autosalv = esegui_query("select numero from $tablecontratti where tipo = 'autosalv' and testo = '$testo' ");
$num_autosalv = numlin_query($autosalv);
if ($num_autosalv) {
$campi_prenota = "*";
$num_ripeti = 0;
} # fine if ($num_autosalv)
} # fine if ($ins_checkin or $ins_checkout)
else $num_autosalv = 0;
$adesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,"v",1,1);
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$err_checkin = 0;
if ($num_id_prenota > 1) $per_la_prenotazione = " ".mex("per la prenotazione",$pag)." <b>$id_prenota</b>";
else $per_la_prenotazione = "";
$dati_prenota = esegui_query("select $campi_prenota from $tableprenota where idprenota = '$id_prenota'");
if (numlin_query($dati_prenota)) {
$d_id_data_inizio = risul_query($dati_prenota,0,'iddatainizio');
$d_id_data_fine = risul_query($dati_prenota,0,'iddatafine');
$id_prenota_prec = trova_prenota_prec($anno,$d_id_data_inizio,$PHPR_TAB_PRE,$dati_prenota,$n_dati_prenota_modifica);
if ($id_prenota_prec == "SI") $id_prenota_prec = "";
$id_prenota_succ = trova_prenota_succ($anno,$d_id_data_fine,$PHPR_TAB_PRE,$id_prenota,$fineperiodo_succ);
if ($id_prenota_succ == "soloanno") $id_prenota_succ = "";
$tabelle_lock = array($tableprenota);
if ($id_prenota_succ) $tabelle_lock = array($tableprenota,$PHPR_TAB_PRE."prenota".($anno + 1));
elseif ($id_prenota_prec) $tabelle_lock = array($PHPR_TAB_PRE."prenota".($anno - 1),$tableprenota);
$tabelle_lock = lock_tabelle($tabelle_lock);
if ($id_prenota_prec) $dati_checkin = esegui_query("select checkin,checkout,idappartamenti,commento from ".$PHPR_TAB_PRE."prenota".($anno - 1)." where idprenota = '$id_prenota_prec'");
else $dati_checkin = esegui_query("select checkin,checkout,idappartamenti,commento from $tableprenota where idprenota = '$id_prenota'");
$d_checkin = risul_query($dati_checkin,0,'checkin');
$d_checkout = risul_query($dati_checkin,0,'checkout');

if ($ins_checkin) {
$d_appartamento = risul_query($dati_checkin,0,'idappartamenti');
$prenota_ancora_dentro = esegui_query("select idprenota from $tableprenota where idappartamenti = '$d_appartamento' and checkin is not NULL and checkout is NULL and idprenota != '$id_prenota'");
if (numlin_query($prenota_ancora_dentro) != 0) {
$err_checkin = 1;
echo "<br><big>".mex("<div style=\"display: inline; color: red;\">Attentione</div>: orario di entrata non registrato",$pag)."$per_la_prenotazione ".mex("perchè c'è un'altra prenotazione nello stesso appartamento che deve ancora registrare l'uscita",'unit.php').".</big><br><br>";
} # fine if (numlin_query($prenota_ancora_dentro) != 0) 
else {
if (!$d_checkin) {
esegui_query("update $tableprenota set checkin = '$adesso', checkout = NULL where idprenota = '$id_prenota'");
if ($id_prenota_succ) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno + 1)." set checkin = '$adesso', checkout = NULL where idprenota = '$id_prenota_succ'");
elseif ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set checkin = '$adesso', checkout = NULL where idprenota = '$id_prenota_prec'");
$commento = risul_query($dati_checkin,0,'commento');
if (strstr((string) $commento,">")) {
$commento = explode(">",$commento);
if (strcmp((string) $commento[1],"")) {
echo "<br><big><b class=\"colblu\">".mex("Promemoria",$pag)."</b>$per_la_prenotazione: ".$commento[1]."</big><br><br>";
$commento[1] = "";
$commento = implode(">",$commento);
if (!strcmp(str_replace(">","",strstr($commento,">")),"")) $commento = str_replace(">","",$commento);
if ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set commento = '".aggslashdb($commento)."' where idprenota = '$id_prenota_prec' ");
else esegui_query("update $tableprenota set commento = '".aggslashdb($commento)."' where idprenota = '$id_prenota' ");
} # fine if (strcmp((string) $commento[1],""))
} # fine if (strstr((string) $commento,">"))
} # fine if (!$d_checkin)
else {
$err_checkin = 1;
echo "<br><big>".mex("<div style=\"display: inline; color: red;\">Attentione</div>: orario di entrata già registrato",$pag)."$per_la_prenotazione.</big><br><br>";
} # fine else if (!$d_checkin)
} # fine else if (numlin_query($prenota_ancora_dentro) != 0)
} # fine if ($ins_checkin)
if ($canc_checkin and $d_checkin and !$d_checkout) {
esegui_query("update $tableprenota set checkin = NULL where idprenota = '$id_prenota'");
if ($id_prenota_succ) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno + 1)." set checkin = NULL where idprenota = '$id_prenota_succ'");
elseif ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set checkin = NULL where idprenota = '$id_prenota_prec'");
} # fine if ($canc_checkin and $d_checkin and !$d_checkout)

if ($ins_checkout) {
if ($d_checkin and !$d_checkout) {
esegui_query("update $tableprenota set checkout = '$adesso' where idprenota = '$id_prenota'");
if ($id_prenota_succ) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno + 1)." set checkout = '$adesso' where idprenota = '$id_prenota_succ'");
elseif ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set checkout = '$adesso' where idprenota = '$id_prenota_prec'");
$commento = (string) risul_query($dati_checkin,0,'commento');
if (strstr($commento,">")) {
$commento = explode(">",$commento);
if (strcmp((string) $commento[2],"")) echo "<br><big><b class=\"colblu\">".mex("Promemoria",$pag)."</b>$per_la_prenotazione: ".$commento[2]."</big><br><br>";
$commento[2] = "";
$commento = implode(">",$commento);
if (!strcmp(str_replace(">","",strstr($commento,">")),"")) $commento = str_replace(">","",$commento);
if ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set commento = '".aggslashdb($commento)."' where idprenota = '$id_prenota_prec' ");
else esegui_query("update $tableprenota set commento = '".aggslashdb($commento)."' where idprenota = '$id_prenota' ");
} # fine if (strstr($commento,">"))
} # fine if ($d_checkin and !$d_checkout)
else $err_checkin = 1;
if ($d_checkout) echo "<br><big>".mex("<div style=\"display: inline; color: red;\">Attentione</div>: orario di uscita già registrato",$pag)."$per_la_prenotazione.</big><br><br>";
if (!$d_checkin) echo "<br><big>".mex("<div style=\"display: inline; color: red;\">Attentione</div>: orario di uscita non registrato, registrare prima l'entrata",$pag)."$per_la_prenotazione.</big><br><br>";
} # fine if ($ins_checkout)
if ($canc_checkout and $d_checkout and $d_checkin) {
esegui_query("update $tableprenota set checkout = NULL where idprenota = '$id_prenota'");
if ($id_prenota_succ) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno + 1)." set checkout = NULL where idprenota = '$id_prenota_succ'");
elseif ($id_prenota_prec) esegui_query("update ".$PHPR_TAB_PRE."prenota".($anno - 1)." set checkout = NULL where idprenota = '$id_prenota_prec'");
} # fine if ($canc_checkout and $d_checkout and $d_checkin)

unlock_tabelle($tabelle_lock);

if ($num_autosalv and !$err_checkin) {
$num_ripeti++;
${"cognome_".$num_ripeti} = "";
if ($vedi_clienti != "NO") {
$id_clienti = risul_query($dati_prenota,0,'idclienti');
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = $id_clienti ");
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$mostra_cliente = "SI";
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
if (($vedi_clienti != "PROPRI" and $vedi_clienti != "GRUPPI") or $mostra_cliente != "NO") {
${"cognome_".$num_ripeti} = risul_query($dati_cliente,0,'cognome');
${"nome_".$num_ripeti} = risul_query($dati_cliente,0,'nome');
${"soprannome_".$num_ripeti} = risul_query($dati_cliente,0,'soprannome');
${"titolo_".$num_ripeti} = risul_query($dati_cliente,0,'titolo');
${"sesso_".$num_ripeti} = risul_query($dati_cliente,0,'sesso');
${"data_nascita_".$num_ripeti} = risul_query($dati_cliente,0,'datanascita');
${"citta_nascita_".$num_ripeti} = risul_query($dati_cliente,0,'cittanascita');
${"regione_nascita_".$num_ripeti} = risul_query($dati_cliente,0,'regionenascita');
${"nazione_nascita_".$num_ripeti} = risul_query($dati_cliente,0,'nazionenascita');
${"cittadinanza_".$num_ripeti} = risul_query($dati_cliente,0,'nazionalita');
${"codice_lingua_".$num_ripeti} = risul_query($dati_cliente,0,'lingua');
${"nazione_".$num_ripeti} = risul_query($dati_cliente,0,'nazione');
${"regione_".$num_ripeti} = risul_query($dati_cliente,0,'regione');
${"citta_".$num_ripeti} = risul_query($dati_cliente,0,'citta');
${"via_".$num_ripeti} = risul_query($dati_cliente,0,'via');
${"numcivico_".$num_ripeti} = risul_query($dati_cliente,0,'numcivico');
${"cap_".$num_ripeti} = risul_query($dati_cliente,0,'cap');
${"documento_".$num_ripeti} = risul_query($dati_cliente,0,'documento');
${"tipo_documento_".$num_ripeti} = risul_query($dati_cliente,0,'tipodoc');
${"citta_documento_".$num_ripeti} = risul_query($dati_cliente,0,'cittadoc');
${"regione_documento_".$num_ripeti} = risul_query($dati_cliente,0,'regionedoc');
${"nazione_documento_".$num_ripeti} = risul_query($dati_cliente,0,'nazionedoc');
${"scadenza_documento_".$num_ripeti} = risul_query($dati_cliente,0,'scadenzadoc');
${"telefono_".$num_ripeti} = risul_query($dati_cliente,0,'telefono');
${"telefono2_".$num_ripeti} = risul_query($dati_cliente,0,'telefono2');
${"telefono3_".$num_ripeti} = risul_query($dati_cliente,0,'telefono3');
${"fax_".$num_ripeti} = risul_query($dati_cliente,0,'fax');
${"email_".$num_ripeti} = risul_query($dati_cliente,0,'email');
${"email2_".$num_ripeti} = risul_query($dati_cliente,0,'email2');
${"email_certificata_".$num_ripeti} = risul_query($dati_cliente,0,'email3');
${"codice_fiscale_".$num_ripeti} = risul_query($dati_cliente,0,'cod_fiscale');
${"partita_iva_".$num_ripeti} = risul_query($dati_cliente,0,'partita_iva');
} # fine if (($vedi_clienti != "PROPRI" and...
} # fine if ($vedi_clienti != "NO")
${"numero_prenotazione_".$num_ripeti} = $id_prenota;
if ($priv_mod_codice == "s") {
$cod_prenota = risul_query($dati_prenota,0,'codice');
${"codice_prenotazione_".$num_ripeti} = substr($cod_prenota,0,2).$id_clienti.substr($cod_prenota,2,1).$id_prenota.substr($anno,-1).substr($cod_prenota,-1);
} # fine if ($priv_mod_codice == "s")
$id_data_inizio = risul_query($dati_prenota,0,'iddatainizio');
$id_data_fine = risul_query($dati_prenota,0,'iddatafine');
$data_fine_aux = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_fine'");
${"data_fine_".$num_ripeti} = risul_query($data_fine_aux,0,'datafine');
if ($id_data_inizio) {
$data_inizio_aux = esegui_query("select * from $tableperiodi where idperiodi = '$id_data_inizio'");
${"data_inizio_".$num_ripeti} = risul_query($data_inizio_aux,0,'datainizio');
${"num_periodi_".$num_ripeti} = $id_data_fine - $id_data_inizio + 1;
$tariffa = risul_query($dati_prenota,0,'tariffa');
$tariffa = explode("#@&",$tariffa);
${"nome_tariffa_".$num_ripeti} = $tariffa[0];
$costo_tariffa = (double) $tariffa[1];
${"costo_tariffa_".$num_ripeti} = $costo_tariffa;
$valuta_tariffa = risul_query($dati_prenota,0,'valuta');
if ($valuta_tariffa) {
$valuta_tariffa = explode(">",$valuta_tariffa);
$valuta_caparra = $valuta_tariffa[1];
$valuta_tariffa = $valuta_tariffa[0];
} # fine if ($d_valuta_tariffa)
else $valuta_caparra = "";
if ($valuta_tariffa) {
$valuta_tariffa = explode("<",$valuta_tariffa);
${"tasso_cambio_tariffa_".$num_ripeti} = $valuta_tariffa[1];
${"valuta_tariffa_".$num_ripeti} = $valuta_tariffa[0];
${"costo_valuta_tariffa_".$num_ripeti} = converti_valuta($costo_tariffa,$valuta_tariffa[1],$valuta_tariffa[2]);
} # fine if ($valuta_tariffa)
$sconto = (double) risul_query($dati_prenota,0,'sconto');
${"sconto_".$num_ripeti} = $sconto;
if ($valuta_tariffa and strcmp((string) $sconto,"")) ${"valore_valuta_sconto_".$num_ripeti} = converti_valuta($sconto,$valuta_tariffa[1],$valuta_tariffa[2]);
${"percentuale_tasse_tariffa_".$num_ripeti} = risul_query($dati_prenota,0,'tasseperc');
${"commento_".$num_ripeti} = risul_query($dati_prenota,0,'commento');
if (strstr(fixstr(${"commento_".$num_ripeti}),">")) {
${"commento_".$num_ripeti} = explode(">",${"commento_".$num_ripeti});
${"commento_".$num_ripeti} = ${"commento_".$num_ripeti}[0];
} # fine if (strstr(${"commento_".$num_ripeti},">"))
${"origine_prenotazione_".$num_ripeti} = risul_query($dati_prenota,0,'origine');
$caparra = risul_query($dati_prenota,0,'caparra');
${"caparra_".$num_ripeti} = $caparra;
${"commissioni_".$num_ripeti} = risul_query($dati_prenota,0,'commissioni');
if ($valuta_caparra) {
$valuta_caparra = explode("<",$valuta_caparra);
${"tasso_cambio_caparra_".$num_ripeti} = $valuta_caparra[1];
${"valuta_caparra_".$num_ripeti} = $valuta_caparra[0];
${"valore_valuta_caparra_".$num_ripeti} = converti_valuta($caparra,$valuta_caparra[1],$valuta_caparra[2]);
} # fine if ($valuta_caparra)
if (strcmp((string) risul_query($dati_prenota,0,'metodo_pagamento'),"")) ${"metodo_pagamento_caparra_".$num_ripeti} = risul_query($dati_prenota,0,'metodo_pagamento');
$numpersone = risul_query($dati_prenota,0,'num_persone');
${"num_persone_".$num_ripeti} = $numpersone;
$cat_persone = dati_cat_pers_p($dati_prenota,0,$dati_cat_pers,$numpersone,$lingua_mex,0);
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if (!empty($cat_persone[$num2]['esist'])) ${"num_persone_tipo_".($num2 + 1)."_".$num_ripeti} = $cat_persone[$cat_persone[$num2]['ncp']]['molt'];
else ${"num_persone_tipo_".($num2 + 1)."_".$num_ripeti} = 0;
} # fine for $num2
${"unita_occupata_".$num_ripeti} = risul_query($dati_prenota,0,'idappartamenti');
${"app_assegnabili_".$num_ripeti} = risul_query($dati_prenota,0,'app_assegnabili');
${"pagato_".$num_ripeti} = risul_query($dati_prenota,0,'pagato');
$tariffesettimanali = risul_query($dati_prenota,0,'tariffesettimanali');
${"tariffesettimanali_".$num_ripeti} = $tariffesettimanali;
$dati_cap = dati_costi_agg_prenota($tablecostiprenota,$id_prenota);
unset($num_letti_agg);
$costo_agg_tot = (double) 0;
$costo_escludi_perc = (double) 0;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","");
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$id_data_inizio,$id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$costo_tariffa,$tariffesettimanali,($costo_tariffa + $costo_agg_tot - $sconto),$caparra,$numpersone,fixset($dati_cap[$numca]['cat_pers']),0,$costo_escludi_perc,1);
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $costo_agg_parziale;
${"nome_costo_agg".$numca."_".$num_ripeti} = $dati_cap[$numca]['nome'];
${"val_costo_agg".$numca."_".$num_ripeti} = $costo_agg_parziale;
${"percentuale_tasse_costo_agg".$numca."_".$num_ripeti} = $dati_cap[$numca]['tasseperc'];
${"moltiplica_max_costo_agg".$numca."_".$num_ripeti} = $dati_cap[$numca]['moltiplica_costo'];
${"valore_giornaliero_max_costo_agg".$numca."_".$num_ripeti} = $prezzi_giorn_costo;
if ($dati_cap[$numca]['associasett'] == "s") {
if ($dati_cap[$numca]['settimane']) ${"giorni_costo_agg".$numca."_".$num_ripeti} = $dati_cap[$numca]['settimane'];
else ${"giorni_costo_agg".$numca."_".$num_ripeti} = ",";
} # fine if ($dati_cap[$numca]['associasett'] == "s")
else ${"giorni_costo_agg".$numca."_".$num_ripeti} = "";
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num']) ${"tipo_persona_costo_agg".$numca."_".$num_ripeti} = (fixset($dati_cap[$numca]['cat_pers']['ord'][0]) + 1);
else ${"tipo_persona_costo_agg".$numca."_".$num_ripeti} = "";
${"data_inserimento_costo_agg".$numca."_".$num_ripeti} = substr($dati_cap[$numca]['datainserimento'],0,10);
${"utente_inserimento_costo_agg".$numca."_".$num_ripeti} = $dati_cap[$numca]['utente_inserimento'];
} # fine for $numca
${"num_costi_aggiuntivi_".$num_ripeti} = $dati_cap['num'];
if (!empty($num_letti_agg['max'])) ${"n_letti_agg_".$num_ripeti} = $num_letti_agg['max'];
else ${"n_letti_agg_".$num_ripeti} = null;
${"costo_tot_".$num_ripeti} = $costo_tariffa + $costo_agg_tot - $sconto;
if ($valuta_tariffa) {
$valuta_tariffa[3] = converti_valuta(($costo_tariffa - $sconto),$valuta_tariffa[1],$valuta_tariffa[2]);
if (!strcmp((string) $altre_valute['id'][$valuta_tariffa[0]],"")) $valuta_tariffa[4] = converti_valuta($costo_agg_tot,$valuta_tariffa[1],$valuta_tariffa[2]);
else $valuta_tariffa[4] = converti_valuta($costo_agg_tot,$altre_valute[$altre_valute['id'][$valuta_tariffa[0]]]['cambio'],$altre_valute[$altre_valute['id'][$valuta_tariffa[0]]]['arrotond']);
${"costo_valuta_tot_".$num_ripeti} = round(($valuta_tariffa[3] + $valuta_tariffa[4]),2);
} # fine if ($valuta_tariffa)
${"orario_registrazione_entrata_".$num_ripeti} = risul_query($dati_prenota,0,'checkin');
if (!${"orario_registrazione_entrata_".$num_ripeti}) {
${"orario_registrazione_uscita_".$num_ripeti} = "";
${"orario_entrata_stimato_".$num_ripeti} = risul_query($dati_prenota,0,'checkout');
} # fine if (!${"orario_registrazione_entrata_".$num_ripeti})
else {
${"orario_registrazione_uscita_".$num_ripeti} = risul_query($dati_prenota,0,'checkout');
${"orario_entrata_stimato_".$num_ripeti} = "";
} # fine else if (!${"orario_registrazione_entrata_".$num_ripeti})
${"id_anni_prec_".$num_ripeti} = risul_query($dati_prenota,0,'id_anni_prec');
if ($priv_vedi_tab_costi != "n") {
$num_pagamenti = 0;
if (${"id_anni_prec_".$num_ripeti}) {
$id_anni_prec_vett = explode(";",${"id_anni_prec_".$num_ripeti});
for ($num2 = 1 ; $num2 < (count($id_anni_prec_vett) - 1) ; $num2++) {
$id_anno_prec = explode(",",$id_anni_prec_vett[$num2]);
$anno_prec_esistente = esegui_query("select idanni from $tableanni where idanni = '".aggslashdb($id_anno_prec[0])."'");
if (numlin_query($anno_prec_esistente)) {
$pagamenti = esegui_query("select * from $PHPR_TAB_PRE"."soldi".$id_anno_prec[0]." where saldo_prenota is not NULL and motivazione $LIKE '%;".$id_anno_prec[1]."' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num3 = 0 ; $num3 < $num_pagamenti2 ; $num3++) {
${"data_paga".$num_pagamenti."_".$num_ripeti} = substr(risul_query($pagamenti,$num3,'data_inserimento'),0,10);
${"data_operazione_paga".$num_pagamenti."_".$num_ripeti} = substr(risul_query($pagamenti,$num3,'data_transazione'),0,10);
${"utente_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num3,'utente_inserimento');
${"metodo_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num3,'metodo_pagamento');
${"id_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num3,'id_pagamento');
${"note_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num3,'note');
${"saldo_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num3,'saldo_prenota');
$num_pagamenti++;
} # fine for $num3
} # fine (numlin_query($anno_prec_esistente))
} # fine for $num2
} # fine if (${"id_anni_prec_".$num_ripeti})
$pagamenti = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num2 = 0 ; $num2 < $num_pagamenti2 ; $num2++) {
${"data_paga".$num_pagamenti."_".$num_ripeti} = substr(risul_query($pagamenti,$num2,'data_inserimento'),0,10);
${"data_operazione_paga".$num_pagamenti."_".$num_ripeti} = substr(risul_query($pagamenti,$num2,'data_transazione'),0,10);
${"utente_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num2,'utente_inserimento');
${"metodo_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num2,'metodo_pagamento');
${"id_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num2,'id_pagamento');
${"note_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num2,'note');
${"saldo_paga".$num_pagamenti."_".$num_ripeti} = risul_query($pagamenti,$num2,'saldo_prenota');
$num_pagamenti++;
} # fine for $num2
${"num_pagamenti_".$num_ripeti} = $num_pagamenti;
} # fine if ($priv_vedi_tab_costi != "n")
${"utente_inserimento_prenotazione_".$num_ripeti} = risul_query($dati_prenota,0,'utente_inserimento');
${"data_inserimento_prenotazione_".$num_ripeti} = substr(risul_query($dati_prenota,0,'datainserimento'),0,16);
} # fine if ($id_data_inizio)
} # fine if ($num_autosalv and !$err_checkin)

} # fine if (numlin_query($dati_prenota))
} # fine for $num_idpr

if ($num_autosalv and $num_ripeti) {
include("./includes/funzioni_contratti.php");
#define('C_ID_UTENTE_CONTR',$id_utente);
$nomi_contratti = trova_nomi_contratti($max_contr,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,"visualizza_contratto.php");
$dati_allegato = array('num' => 0);
for ($num1 = 0 ; $num1 < $num_autosalv ; $num1++) {
$numero_contratto = risul_query($autosalv,$num1,'numero');
$contr_salva = esegui_query("select * from $tablecontratti where tipo = 'dir' and numero = '$numero_contratto' ");
if (numlin_query($contr_salva)) $dir_salva = formatta_dir_salva_doc(risul_query($contr_salva,0,'testo'));
else $dir_salva = "";
if ($dir_salva) {
$commento_personalizzato_ = "commento_personalizzato_";
$campo_personalizzato_ = "campo_personalizzato_";
$num_persone_tipo_ = "num_persone_tipo_";
$allegato_ = "allegato";
include("./includes/variabili_contratto.php");
$nome_contratto = $nomi_contratti['salv'][$numero_contratto];
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
$messaggio_di_errore = "";
$num_contr_esist = 0;
$contratto = crea_contratto($numero_contratto,$tipo_contratto,$id_utente,$id_sessione,$origine,"");
$lista_var_form = "<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"modifica_prenota.php?mese=$mese&amp;tipo_tabella=$tipo_tabella&amp;id_prenota=$idprenota_origine2&amp;origine=".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"numero_contratto\" value=\"$numero_contratto\">
<input type=\"hidden\" name=\"lista_prenota\" value=\",$idprenota_origine2,\">";
crea_messaggio_contr_salva($nome_file_contr,$num_file_salva,$num_contr_esist,$nome_file_contr_esist,$numero_contratto,$nomi_contratti,$dir_salva,$tipo_contratto,$num_ripeti,"modifica_prenota.php?mese=$mese&tipo_tabella=$tipo_tabella&id_prenota=$idprenota_origine2",$origine,$lista_var_form,"SI",$anno,$id_sessione,$id_utente,$tema,$tableversioni,$tabletransazioni,"visualizza_contratto.php");
} # fine if ($dir_salva)
} # fine for $num1
} # fine if ($num_autosalv and $num_ripeti)

} # fine if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and..


if (isset($rig_cod_prenota) and $rig_cod_prenota == "SI" and $priv_mod_codice == "s") {
$valori = "abcdefghijkmnpqrstuvwxz";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
srand((double)microtime() * 1000000);
$cod_prenota = "";
for ($num1 = 0 ; $num1 < 4 ; $num1++) $cod_prenota .= substr($valori,rand(0,22),1);
esegui_query("update $tableprenota set codice = '$cod_prenota' where idprenota = '$id_prenota' ");
} # fine for $num_idpr
} # fine if (isset($rig_cod_prenota) and $rig_cod_prenota == "SI" and $priv_mod_codice == "s")





if (!isset($mostra_form_modifica_prenota) or $mostra_form_modifica_prenota != "NO") {


# Inizio della pagina.
if ($pcanc) {
if ($num_id_prenota == 1) echo "<h3 class=\"h_mres\"><span>".mex("Prenotazione cancellata",$pag)." $id_prenota.</span></h3>";
else echo "<h3 class=\"h_mress\"><span>".mex("Prenotazioni cancellate",$pag)." ".str_replace(",",", ",$id_prenota_int).".</span></h3>";
$stilebarrato = " style=\"text-decoration: line-through\"";
} # fine if ($pcanc)
else {
if ($num_id_prenota == 1) echo "<h3 class=\"h_mres\"><span>".mex("Modifica o cancella la prenotazione",$pag)." $id_prenota.</span></h3>";
else echo "<h3 class=\"h_mress\"><span>".mex("Modifica o cancella le prenotazioni",$pag)." ".str_replace(",",", ",$id_prenota_int).".</span></h3>";
$stilebarrato = "";
} # fine else if ($pcanc)
if (empty($origine)) $origine = "tabella.php";

# Form per modificare la prenotazione.
$dati_tariffe = dati_tariffe($tablenometariffe,"",$tablepersonalizza);
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,"v",1,1);
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,"NO");


unset($d_id_data_inizio_vett);
unset($d_id_data_fine_vett);
unset($d_costo_tariffa_vett);
unset($d_tariffesettimanali_vett);
unset($d_caparra_vett);
$tasse_tot = (double) 0;
$mostra_conferma = "";

$id_prenota = $id_prenota_idpr[0];
$dati_prenota_modifica = esegui_query("select * from $tableprenota where idprenota = '$id_prenota' and idclienti != '0'");
$id_clienti = risul_query($dati_prenota_modifica,0,'idclienti');
${"dati_cap".$id_prenota} = dati_costi_agg_prenota($tablecostiprenota,$id_prenota,$dati_cat_pers);
$dati_cap = ${"dati_cap".$id_prenota};

$d_id_data_inizio = risul_query($dati_prenota_modifica,0,'iddatainizio');
$id_prenota_prec = trova_prenota_prec($anno,$d_id_data_inizio,$PHPR_TAB_PRE,$dati_prenota_modifica,$n_dati_prenota_modifica,$pcanc);
if (!$id_prenota_prec) {
$d_data_inizio = esegui_query("select * from $tableperiodi where idperiodi = '$d_id_data_inizio'");
$d_data_inizio = risul_query($d_data_inizio,0,'datainizio');
$d_data_inizio_f = formatta_data($d_data_inizio,$stile_data);
} # fine if (!$id_prenota_prec)
else {
if ($id_prenota_prec != "SI" and $num_id_prenota == 1) {
$dati_prenota_modifica = $n_dati_prenota_modifica;
$tableperiodi = $PHPR_TAB_PRE."periodi".($anno - 1);
$d_id_data_inizio = risul_query($dati_prenota_modifica,0,'iddatainizio');
$d_data_inizio = esegui_query("select * from $tableperiodi where idperiodi = '$d_id_data_inizio'");
$d_data_inizio = risul_query($d_data_inizio,0,'datainizio');
$d_data_inizio_f = formatta_data($d_data_inizio,$stile_data);
$dati_ca = dati_costi_agg_ntariffe($PHPR_TAB_PRE."ntariffe".($anno - 1),"NO");
${"dati_cap".$id_prenota} = dati_costi_agg_prenota($PHPR_TAB_PRE."costiprenota".($anno - 1),$id_prenota_prec,$dati_cat_pers);
$dati_cap = ${"dati_cap".$id_prenota};
} # fine if ($id_prenota_prec != "SI" and $num_id_prenota == 1)
if ($d_id_data_inizio == 0) {
$d_data_inizio = esegui_query("select datainizio from $tableperiodi where idperiodi = '1' ");
$d_data_inizio = risul_query($d_data_inizio,0,'datainizio');
$d_data_inizio_f = "<".formatta_data($d_data_inizio,$stile_data);
$d_data_inizio = "<".$d_data_inizio;
} # fine if ($d_id_data_inizio == 0)
$priv_mod_assegnazione_app = "n";
if ($priv_mod_tariffa != "n" and $priv_mod_tariffa != "p") $priv_mod_tariffa = "v";
$priv_mod_num_persone = "n";
$priv_mod_commento = "n";
$priv_mod_commenti_pers = "n";
if ($priv_mod_sconto != "n") $priv_mod_sconto = "v";
if ($priv_mod_caparra != "n") $priv_mod_caparra = "v";
if ($priv_mod_costi_agg != "n" and $priv_mod_costi_agg != "p") $priv_mod_costi_agg = "v";
if ($priv_mod_utente_ins != "n") $priv_mod_utente_ins = "v";
if ($priv_mod_pagato != "n") $priv_mod_pagato = "v";
$priv_mod_prenota_comp = "n";
} # fine else if (!$id_prenota_prec)

$d_id_data_fine = risul_query($dati_prenota_modifica,0,'iddatafine');
$d_data_fine = esegui_query("select * from $tableperiodi where idperiodi = '$d_id_data_fine'");
$d_data_fine = risul_query($d_data_fine,0,'datafine');
$d_data_fine_f = formatta_data($d_data_fine,$stile_data);
if ($d_id_data_inizio != 0) {
$d_numero_settimane = $d_id_data_fine - $d_id_data_inizio + 1;
} # fine if ($d_id_data_inizio != 0)
else $d_numero_settimane = "?";
$d_id_data_inizio_vett[$id_prenota] = $d_id_data_inizio;
$d_id_data_fine_vett[$id_prenota] = $d_id_data_fine;
$id_utente_inserimento = risul_query($dati_prenota_modifica,0,'utente_inserimento');
$d_tariffa = risul_query($dati_prenota_modifica,0,'tariffa');
$d_tariffa = explode("#@&",$d_tariffa);
$d_nome_tariffa_vett[$id_prenota] = $d_tariffa[0];
$d_nome_tariffa = $d_nome_tariffa_vett[$id_prenota];
$d_costo_tariffa_vett[$id_prenota] = (double) $d_tariffa[1];
$d_costo_tariffa = $d_costo_tariffa_vett[$id_prenota];
$d_sconto_vett[$id_prenota] = (double) risul_query($dati_prenota_modifica,0,'sconto');
$d_sconto = $d_sconto_vett[$id_prenota];
$d_tasse_perc = (double) risul_query($dati_prenota_modifica,0,'tasseperc');
if ($d_tasse_perc and $num_id_prenota == 1) {
$tasse = (($d_costo_tariffa - $d_sconto) / ($d_tasse_perc + 100)) * $d_tasse_perc;
$tasse = $tasse / $dati_tariffe['tasse_arrotond'];
$tasse = round($tasse);
$tasse = $tasse * $dati_tariffe['tasse_arrotond'];
$tasse_tot = $tasse_tot + $tasse;
} # fine if ($d_tasse_perc and $num_id_prenota == 1)
$d_commento = (string) risul_query($dati_prenota_modifica,0,'commento');
$d_commenti_pers = array();
$d_promemoria_entrata = "";
$d_promemoria_uscita = "";
$d_utente_cancellazione = "";
$d_data_cancellazione = "";
if (strstr($d_commento,">")) {
$d_commento = explode(">",$d_commento);
$d_promemoria_entrata = $d_commento[1];
$d_promemoria_uscita = $d_commento[2];
if ($priv_vedi_commenti_pers == "s") {
for ($num1 = 3 ; $num1 < count($d_commento) ; $num1++) {
$comm_pers = explode("<",$d_commento[$num1]);
if (!empty($comm_pers_presenti[$comm_pers[0]])) $d_commenti_pers[$comm_pers[0]] = $comm_pers[1];
} # fine for $num1
} # fine if ($priv_vedi_commenti_pers == "s")
if ($pcanc and substr($d_commento[(count($d_commento) - 1)],0,11) == "hd_del_res<") {
$d_data_cancellazione = explode("|",substr($d_commento[(count($d_commento) - 1)],11));
$d_utente_cancellazione = $d_data_cancellazione[0];
$d_data_cancellazione = $d_data_cancellazione[1];
} # fine if ($pcanc and substr($d_commento[(count($d_commento) - 1)],0,11) == "hd_del_res<")
$d_commento = $d_commento[0];
} # fine if (strstr($d_commento,">"))
$d_num_persone_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'num_persone');
$d_num_persone = $d_num_persone_vett[$id_prenota];
$d_cat_persone_vett[$id_prenota] = dati_cat_pers_p($dati_prenota_modifica,0,$dati_cat_pers,$d_num_persone);
$d_cat_persone = $d_cat_persone_vett[$id_prenota];
for ($num1 = 0 ; $num1 < $d_cat_persone['num'] ; $num1++) {
$cat_pers = $d_cat_persone['ord'][$num1];
if (!isset($d_cat_persone[$cat_pers]['esist']) or $d_cat_persone[$cat_pers]['esist'] != ($num1 + 1)) {
if (!empty($d_cat_persone['excat'][$cat_pers]['m'])) $d_cat_persone['excat'][$cat_pers]['m'] .= "+".$d_cat_persone[$num1]['molt'];
else $d_cat_persone['excat'][$cat_pers]['m'] = $d_cat_persone[$num1]['molt'];
if (!empty($d_cat_persone['excat'][$cat_pers]['n'])) $d_cat_persone['excat'][$cat_pers]['n'] .= " + ".$d_cat_persone[$num1]['n_plur'];
else $d_cat_persone['excat'][$cat_pers]['n'] = $d_cat_persone[$num1]['n_plur'];
} # fine if (!isset($d_cat_persone[$cat_pers]['esist']) or $d_cat_persone[$cat_pers]['esist'] != ($num1 + 1))
} # fine for $num1
$d_appartamento = risul_query($dati_prenota_modifica,0,'idappartamenti');
$d_assegnazione_app = risul_query($dati_prenota_modifica,0,'assegnazioneapp');
$d_app_assegnabili = risul_query($dati_prenota_modifica,0,'app_assegnabili');
$d_tariffesettimanali_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'tariffesettimanali');
$d_costo_tot_registrato = risul_query($dati_prenota_modifica,0,'tariffa_tot');
$d_caparra_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'caparra');
$d_caparra = $d_caparra_vett[$id_prenota];
$d_commissioni = risul_query($dati_prenota_modifica,0,'commissioni');
$d_pagato = risul_query($dati_prenota_modifica,0,'pagato');
if ($d_caparra > $d_pagato) $mostra_met_paga_caparra = "SI";
if (!$d_pagato) $mostra_conferma = "SI";
$d_conferma = risul_query($dati_prenota_modifica,0,'conferma');
$d_checkin = risul_query($dati_prenota_modifica,0,'checkin');
$d_checkout = risul_query($dati_prenota_modifica,0,'checkout');
if ($d_checkout and !$d_checkin) {
$d_stima_checkin = $d_checkout;
$d_checkout = "";
} # fine if ($d_checkout and !$d_checkin)
else $d_stima_checkin = "";
$d_checkin_min = $d_checkin;
$d_checkout_min = $d_checkout;
$d_valuta_tariffa = risul_query($dati_prenota_modifica,0,'valuta');
if ($d_valuta_tariffa) {
$d_valuta_tariffa = explode(">",$d_valuta_tariffa);
$d_valuta_caparra = $d_valuta_tariffa[1];
$d_valuta_tariffa = $d_valuta_tariffa[0];
} # fine if ($d_valuta_tariffa)
else $d_valuta_caparra = "";
$d_met_paga_caparra = risul_query($dati_prenota_modifica,0,'metodo_pagamento');
$d_origine_prenota = risul_query($dati_prenota_modifica,0,'origine');
$d_prenota_comp = risul_query($dati_prenota_modifica,0,'idprenota_compagna');
if ($d_prenota_comp and $num_id_prenota > 1) {
$d_prenota_comp_vett = explode(",",$d_prenota_comp.",".$id_prenota);
asort($d_prenota_comp_vett);
reset($d_prenota_comp_vett);
$d_prenota_comp = "";
foreach ($d_prenota_comp_vett as $val) $d_prenota_comp .= "$val,";
$d_prenota_comp = substr($d_prenota_comp,0,-1);
} # fine if if ($d_prenota_comp and $num_id_prenota > 1)
$id_anni_prec = risul_query($dati_prenota_modifica,0,'id_anni_prec');
if ($id_anni_prec) {
unset($id_anni_prec_vett);
$id_ap = explode(";",$id_anni_prec);
for ($num1 = 1 ; $num1 < (count($id_ap) - 1) ; $num1++) {
$id_anno_prec = explode(",",$id_ap[$num1]);
$anno_prec_esistente = esegui_query("select idanni from $tableanni where idanni = '".aggslashdb($id_anno_prec[0])."'");
if (numlin_query($anno_prec_esistente)) $id_anni_prec_vett[$id_anno_prec[0]] = $id_anno_prec[1];
} # fine for $num1
if (!isset($id_anni_prec_vett) or !is_array($id_anni_prec_vett)) $id_anni_prec = "";
} # fine if ($id_anni_prec)
$d_data_inserimento = risul_query($dati_prenota_modifica,0,'datainserimento');
$d_data_inserimento_vedi = substr($d_data_inserimento,0,-3);
$d_host_inserimento = risul_query($dati_prenota_modifica,0,'hostinserimento');
$num_letti_agg = array('max' => 0);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg,$d_id_data_inizio,$d_id_data_fine,$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","");

for ($num_idpr = 1 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$dati_prenota_modifica = esegui_query("select * from $tableprenota where idprenota = '$id_prenota' and idclienti != '0'");
if ($id_clienti != risul_query($dati_prenota_modifica,0,'idclienti')) $id_clienti = "~~~~";
${"dati_cap".$id_prenota} = dati_costi_agg_prenota($tablecostiprenota,$id_prenota,$dati_cat_pers);
$dati_cap = ${"dati_cap".$id_prenota};
$d_id_data_inizio_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'iddatainizio');
if ($d_id_data_inizio != $d_id_data_inizio_vett[$id_prenota]) {
$d_data_inizio = "~~~~";
$d_data_inizio_f = "~~~~";
} # fine if ($d_id_data_inizio != $d_id_data_inizio_vett[$id_prenota])
$id_prenota_prec2 = trova_prenota_prec($anno,$d_id_data_inizio_vett[$id_prenota],$PHPR_TAB_PRE,$dati_prenota_modifica,$n_dati_prenota_modifica,$pcanc);
if ($id_prenota_prec2) $id_prenota_prec = $id_prenota_prec2;
$d_id_data_fine_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'iddatafine');
if ($d_id_data_fine != $d_id_data_fine_vett[$id_prenota]) {
$d_data_fine = "~~~~";
$d_data_fine_f = "~~~~";
} # fine if ($d_id_data_fine != $d_id_data_fine_vett[$id_prenota])
if ($d_id_data_inizio != $d_id_data_inizio_vett[$id_prenota] or $d_id_data_fine != $d_id_data_fine_vett[$id_prenota]) $d_numero_settimane = "~~~~";
$d_tariffa = risul_query($dati_prenota_modifica,0,'tariffa');
$d_tariffa = explode("#@&",$d_tariffa);
$d_nome_tariffa_vett[$id_prenota] = $d_tariffa[0];
if ($d_nome_tariffa != $d_tariffa[0]) $d_nome_tariffa = "~~~~";
$d_costo_tariffa_vett[$id_prenota] = (double) $d_tariffa[1];
if ($d_costo_tariffa != (double) $d_tariffa[1]) $d_costo_tariffa = "~~~~";
$d_sconto_vett[$id_prenota] = (double) risul_query($dati_prenota_modifica,0,'sconto');
if ($d_sconto != $d_sconto_vett[$id_prenota]) $d_sconto = "~~~~";
$d_commento2 = (string) risul_query($dati_prenota_modifica,0,'commento');
$d_promemoria_entrata2 = "";
$d_promemoria_uscita2 = "";
$d_utente_cancellazione2 = "";
$d_data_cancellazione2 = "";
if (strstr($d_commento2,">")) {
$d_commento2 = explode(">",$d_commento2);
$d_promemoria_entrata2 = $d_commento2[1];
$d_promemoria_uscita2 = $d_commento2[2];
if ($priv_vedi_commenti_pers == "s") {
for ($num1 = 3 ; $num1 < count($d_commento2) ; $num1++) {
$comm_pers = explode("<",$d_commento2[$num1]);
if (!empty($comm_pers_presenti[$comm_pers[0]]) and fixset($d_commenti_pers[$comm_pers[0]]) != $comm_pers[1]) $d_commenti_pers[$comm_pers[0]] = "~~~~";
} # fine for $num1
} # fine if ($priv_vedi_commenti_pers == "s")
if ($pcanc and substr($d_commento2[(count($d_commento2) - 1)],0,11) == "hd_del_res<") {
$d_data_cancellazione2 = explode("|",substr($d_commento2[(count($d_commento2) - 1)],11));
$d_utente_cancellazione2 = $d_data_cancellazione2[0];
$d_data_cancellazione2 = $d_data_cancellazione2[1];
} # fine if ($pcanc and substr($d_commento2[(count($d_commento2) - 1)],0,11) == "hd_del_res<")
if ($d_utente_cancellazione2 != $d_utente_cancellazione) $d_utente_cancellazione = "~~~~";
if ($d_data_cancellazione2 != $d_data_cancellazione) $d_data_cancellazione = "~~~~";
$d_commento2 = $d_commento2[0];
} # fine if (strstr($d_commento2,">"))
if ($d_commento2 != $d_commento) $d_commento = "~~~~";
if ($d_promemoria_entrata2 != $d_promemoria_entrata) $d_promemoria_entrata = "~~~~";
if ($d_promemoria_uscita2 != $d_promemoria_uscita) $d_promemoria_uscita = "~~~~";
$d_num_persone_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'num_persone');
if ($d_num_persone != $d_num_persone_vett[$id_prenota]) $d_num_persone = "~~";
$d_cat_persone_vett[$id_prenota] = dati_cat_pers_p($dati_prenota_modifica,0,$dati_cat_pers,$d_num_persone_vett[$id_prenota]);
#if ($d_cat_persone['int'] != $d_cat_persone_vett[$id_prenota]['int']) $d_cat_persone['int'] = "~~";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (!empty($d_cat_persone_vett[$id_prenota][$num1]['esist']) or !empty($d_cat_persone[$num1]['esist'])) {
$ncp = (fixset($d_cat_persone[$num1]['esist']) - 1);
$ncpv = (fixset($d_cat_persone_vett[$id_prenota][$num1]['esist']) - 1);
if (empty($d_cat_persone_vett[$id_prenota][$num1]['esist']) or empty($d_cat_persone[$num1]['esist']) or $d_cat_persone_vett[$id_prenota][$ncpv]['molt'] != $d_cat_persone[$ncp]['molt']) {
if (!$d_cat_persone[$num1]['esist']) {
$d_cat_persone[$num1]['esist'] = ($d_cat_persone['num'] + 1);
$ncp = $d_cat_persone['num'];
$d_cat_persone['num']++;
} # fine if (!$d_cat_persone[$num1]['esist'])
$d_cat_persone[$ncp]['molt'] = "~~";
} # fine if (empty($d_cat_persone_vett[$id_prenota][$num1]['esist']) or empty($d_cat_persone[$num1]['esist']) or...
} # fine if (!empty($d_cat_persone_vett[$id_prenota][$num1]['esist']) or !empty($d_cat_persone[$num1]['esist']))
} # fine for $num1
for ($num1 = 0 ; $num1 < $d_cat_persone_vett[$id_prenota]['num'] ; $num1++) {
$cat_pers = $d_cat_persone_vett[$id_prenota]['ord'][$num1];
if (!isset($d_cat_persone_vett[$id_prenota][$cat_pers]['esist']) or $d_cat_persone_vett[$id_prenota][$cat_pers]['esist'] != ($num1 + 1)) {
if ($d_cat_persone['excat'][$cat_pers]['m'] != $d_cat_persone_vett[$id_prenota][$num1]['molt']) $d_cat_persone['excat'][$cat_pers]['m'] = "~~";
if (!strstr($d_cat_persone['excat'][$cat_pers]['n'].", ",$d_cat_persone_vett[$id_prenota][$num1]['n_plur'].", ")) {
if ($d_cat_persone['excat'][$cat_pers]['n']) $d_cat_persone['excat'][$cat_pers]['n'] .= ", ";
$d_cat_persone['excat'][$cat_pers]['n'] .= $d_cat_persone_vett[$id_prenota][$num1]['n_plur'];
} # fine if (!strstr($d_cat_persone['excat'][$cat_pers]['n'].", ",$d_cat_persone_vett[$id_prenota][$num1]['n_plur'].", "))
} # fine if (!isset($d_cat_persone_vett[$id_prenota][$cat_pers]['esist']) or...
} # fine for $num1
if ($d_appartamento != risul_query($dati_prenota_modifica,0,'idappartamenti')) $d_appartamento = "~~~~";
if ($d_assegnazione_app != risul_query($dati_prenota_modifica,0,'assegnazioneapp')) $d_assegnazione_app = "~~~~";
if ($d_app_assegnabili != risul_query($dati_prenota_modifica,0,'app_assegnabili')) $d_app_assegnabili = "~~~~";
$d_tariffesettimanali_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'tariffesettimanali');
if ($d_costo_tot_registrato != risul_query($dati_prenota_modifica,0,'tariffa_tot')) $d_costo_tot_registrato = "~~~~";
$d_caparra_vett[$id_prenota] = risul_query($dati_prenota_modifica,0,'caparra');
if ($d_caparra != $d_caparra_vett[$id_prenota]) $d_caparra = "~~~~";
$d_commissioni2 = risul_query($dati_prenota_modifica,0,'commissioni');
if ($d_commissioni2 != $d_commissioni) $d_commissioni = "~~~~";
$d_pagato2 = risul_query($dati_prenota_modifica,0,'pagato');
if ($d_pagato2 != $d_pagato) $d_pagato = "~~~~";
if ($d_caparra_vett[$id_prenota] > $d_pagato2) $mostra_met_paga_caparra = "SI";
if (!$d_pagato2) $mostra_conferma = "SI";
if ($d_conferma != risul_query($dati_prenota_modifica,0,'conferma')) $d_conferma = "~~~~";
$d_checkin2 = risul_query($dati_prenota_modifica,0,'checkin');
$d_checkout2 = risul_query($dati_prenota_modifica,0,'checkout');
if ($d_checkout2 and !$d_checkin2) {
$d_stima_checkin2 = $d_checkout2;
$d_checkout = "";
} # fine if ($d_checkout and !$d_checkin)
else $d_stima_checkin2 = "";
if (!$d_checkin2) $d_checkin_min = "";
if (!$d_checkout2) $d_checkout_min = "";
if ($d_checkin2 != $d_checkin) $d_checkin = "~~~~";
if ($d_checkout2 != $d_checkout) $d_checkout = "~~~~";
if ($d_stima_checkin2 != $d_stima_checkin) $d_stima_checkin = "~~~~";
$d_valuta_tariffa2 = risul_query($dati_prenota_modifica,0,'valuta');
if ($d_valuta_tariffa2) {
$d_valuta_tariffa2 = explode(">",$d_valuta_tariffa2);
$d_valuta_caparra2 = $d_valuta_tariffa2[1];
$d_valuta_tariffa2 = $d_valuta_tariffa2[0];
} # fine if ($d_valuta_tariffa2)
else $d_valuta_caparra2 = "";
if ($d_valuta_tariffa != $d_valuta_tariffa2) $d_valuta_tariffa  = "~~";
if ($d_valuta_caparra != $d_valuta_caparra2) $d_valuta_caparra = "~~";
if ($d_met_paga_caparra != risul_query($dati_prenota_modifica,0,'metodo_pagamento')) $d_met_paga_caparra = "~~~~";
if ($d_origine_prenota != risul_query($dati_prenota_modifica,0,'origine')) $d_origine_prenota = "~~~~";
$d_prenota_comp2 = risul_query($dati_prenota_modifica,0,'idprenota_compagna');
if ($d_prenota_comp2) {
$d_prenota_comp_vett = explode(",",$d_prenota_comp2.",".$id_prenota);
asort($d_prenota_comp_vett);
reset($d_prenota_comp_vett);
$d_prenota_comp2 = "";
foreach ($d_prenota_comp_vett as $val) $d_prenota_comp2 .= "$val,";
$d_prenota_comp2 = substr($d_prenota_comp2,0,-1);
} # fine if ($d_prenota_comp2)
if ($d_prenota_comp2 != $d_prenota_comp) $d_prenota_comp = "~~~~";
$d_data_inserimento2 = risul_query($dati_prenota_modifica,0,'datainserimento');
$d_data_inserimento .= ",".$d_data_inserimento2;
if ($d_data_inserimento_vedi != substr($d_data_inserimento2,0,-3)) $d_data_inserimento_vedi = "~~~~";
$d_host_inserimento .= ",".risul_query($dati_prenota_modifica,0,'hostinserimento');
$num_letti_agg2 = array('max' => 0);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) aggiorna_letti_agg_in_periodi($dati_cap,$numca,$num_letti_agg2,$d_id_data_inizio_vett[$id_prenota],$d_id_data_fine_vett[$id_prenota],$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],"","");
if ($num_letti_agg['max'] != $num_letti_agg2['max']) $num_letti_agg['max'] = "~~";
} # fine for $num_idpr

if ($id_prenota_prec and $num_id_prenota > 1) $id_prenota_prec = "SI";
if (!$d_sconto) $d_sconto = (double) 0;
if (!$d_num_persone or $d_num_persone === 0) $d_num_persone = "non specificato";
if (!$d_pagato) $d_pagato = 0;

echo "<br>
<hr style=\"width: 95%;\">";


if ($num_id_prenota == 1) {
$altre_prenota_cliente = esegui_query("select idprenota from $tableprenota where idclienti = '$id_clienti' and iddatafine >= '".($d_id_data_inizio - 1)."' and iddatainizio <= '".($d_id_data_fine + 1)."' and idprenota != '$id_prenota' order by iddatainizio, idprenota ");
$num_altre_prenota = numlin_query($altre_prenota_cliente);
if ($num_altre_prenota) {
echo "<div style=\"font-size: small;\">".mex("Altre prenotazioni dello stesso cliente nello stesso periodo",$pag).":";
$tutte_altre_prenota = $id_prenota;
for ($num1 = 0 ; $num1 < $num_altre_prenota ; $num1++) {
$id_altra_prenota = risul_query($altre_prenota_cliente,$num1,'idprenota');
echo " <a href=\"./$pag?id_prenota=$id_altra_prenota";
if ($pcanc) echo "&pcanc=1";
echo "&anno=$anno&id_sessione=$id_sessione&origine=".urlencode($origine)."\">$id_altra_prenota</a>";
$tutte_altre_prenota .= ",$id_altra_prenota";
} # fine for $num1
echo " <a href=\"./$pag?id_prenota=$tutte_altre_prenota";
if ($pcanc) echo "&pcanc=1";
echo "&anno=$anno&id_sessione=$id_sessione&origine=".urlencode($origine)."\">".mex("tutte",$pag)."</a>
</div><hr style=\"width: 95%;\">";
} # fine if ($num_altre_prenota)
} # fine if ($num_id_prenota == 1)


echo "<table cellspacing=0 cellpadding=0 border=0 width=\"97%\">
<tr><td align=\"right\" style=\"font-size: 80%;\">";
if ($priv_mod_codice == "s") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"rig_cod_prenota\" value=\"SI\">";
} # fine if ($priv_mod_codice == "s")
echo "<small>".mex("Data inserimento",$pag).": ".str_replace("--","",formatta_data($d_data_inserimento_vedi,$stile_data));
if ($d_data_cancellazione) echo "&nbsp;&nbsp;&nbsp;".mex("Data cancellazione",$pag).": ".str_replace("--","",formatta_data($d_data_cancellazione,$stile_data));
echo "</small>";
$cod_prenota = "";
if ($priv_mod_codice == "s") {
if ($num_id_prenota == 1) {
$cod_prenota = risul_query($dati_prenota_modifica,0,'codice');
$cod_prenota = substr($cod_prenota,0,2).$id_clienti.substr($cod_prenota,2,1).$id_prenota.substr($anno,-1).substr($cod_prenota,-1);
} # fine if ($num_id_prenota == 1)
else $cod_prenota = "~~~~";
echo "&nbsp;&nbsp;&nbsp;".mex("Codice prenotazione",$pag).": $cod_prenota
<input class=\"sbutton\" type=\"submit\" value=\"".mex("rigenera",$pag)."\" style=\"font-size: 80%;\">
</div></form>";
} # fine if ($priv_mod_codice == "s")
echo "</td></tr></table>";

$num_dati_relcliente = 0;
echo "<div class=\"rbox\">&nbsp;".mex("Prenotazione a nome di",$pag).":<br>";
if ($vedi_clienti == "NO") echo "<br>&nbsp;".mex("Cliente",$pag)." <b>$id_clienti</b><br><br>";
else {
if ($id_clienti != "~~~~") $dati_cliente = esegui_query("select * from $tableclienti where idclienti = '$id_clienti' ");
$mostra_cliente = "SI";
if ($id_clienti == "~~~~") $mostra_cliente = "NO";
elseif ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($vedi_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra_cliente = "NO";
if ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra_cliente = "NO";
} # fine elseif ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI")
echo "<table class=\"nomob\" cellspacing=0 cellpadding=4 border=0><tr><td>";
if ($mostra_cliente == "NO") {
echo "<br>&nbsp;".mex("Cliente",$pag)." <b>$id_clienti</b><br><br>";
$dcognome = "";
$dcitta = "";
$dnazione = "";
$dnome = "";
$dsoprannome = "";
$dvia = "";
} # fine if ($mostra_cliente == "NO")
else {

mostra_dati_cliente($dati_cliente,$dcognome,$dnome,$dsoprannome,$dtitolo_cli,$dsesso,$ddatanascita,$ddatanascita_f,$dnazionenascita,$dcittanascita,$dregionenascita,$ddocumento,$dscadenzadoc,$dscadenzadoc_f,$dtipodoc,$dnazionedoc,$dregionedoc,$dcittadoc,$dnazionalita,$dlingua_cli,$dnazione,$dregione,$dcitta,$dvia,$dnumcivico,$dtelefono,$dtelefono2,$dtelefono3,$dfax,$dcap,$demail,$demail2,$demail_cert,$dcod_fiscale,$dpartita_iva,"",$priv_ins_clienti);
$dati_relcliente = esegui_query("select * from $tablerelclienti where idclienti = '$id_clienti' and tipo = 'campo_pers' ");
$num_dati_relcliente = numlin_query($dati_relcliente);

if ($modifica_clienti != "NO") {
if (($modifica_clienti == "PROPRI" and $vedi_clienti != "PROPRI") or ($modifica_clienti == "GRUPPI" and $vedi_clienti != "GRUPPI")) {
$mostra = "SI";
$utente_inserimento = risul_query($dati_cliente,0,'utente_inserimento');
if ($modifica_clienti == "PROPRI" and $utente_inserimento != $id_utente) $mostra = "NO";
if ($modifica_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento]) $mostra = "NO";
} # fine if (($vedi_clienti == "PROPRI" and $vedi_clienti != "PROPRI")) or...
if ($modifica_clienti == "SI" or ($vedi_clienti == "PROPRI" and $modifica_clienti == "PROPRI")  or ($vedi_clienti == "GRUPPI" and $modifica_clienti == "GRUPPI") or $mostra != "NO") {
echo "</td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_cliente.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno_origine\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"idclienti\" value=\"$id_clienti\">
<input type=\"hidden\" name=\"origine\" value=\"modifica_prenota.php?mese=$mese&amp;tipo_tabella=$tipo_tabella&amp;id_prenota=$idprenota_origine2&amp;";
if ($pcanc) echo "pcanc=1&amp;";
echo "origine=".htmlspecialchars($origine)."\">
<button class=\"mcli\" type=\"submit\"><div>".mex("Modifica i dati del cliente",$pag)."</div></button>
</div></form>";
} # fine if ($modifica_clienti == "SI" or...
} # fine if ($modifica_clienti != "NO")
} # fine else if ($mostra_cliente == "NO")
if ($priv_cambia_cliente != "n") {
echo "</td><td>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"cambia_cliente\" value=\"SI\">
<button class=\"xcli\" type=\"submit\"><div>".mex("Cambia cliente",$pag)."</div></button>
</div></form>";
} # fine if ($priv_cambia_cliente != "n")
echo "</td></tr>";

$dati_osp = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
if ($num_id_prenota > 1) $dati_osp .= "".mex("Prenotazione",$pag)." $id_prenota:<br>";
$ospiti = esegui_query("select * from $tablerclientiprenota where idprenota = '$id_prenota' order by num_ordine ");
$num_ospiti = numlin_query($ospiti);
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) {
$id_clienti_osp = risul_query($ospiti,$num1,'idclienti');
$url_mod_cli = "./modifica_cliente.php?mese=$mese&anno=$anno_origine&id_sessione=$id_sessione&idclienti=$id_clienti_osp&origine=".str_replace("=","%3D",str_replace("?","%3F",str_replace("&","%26","modifica_prenota.php%3Fmese%3D$mese%26tipo_tabella%3D$tipo_tabella%26id_prenota%3D$idprenota_origine2%26pcanc=$pcanc%26origine%3D".htmlspecialchars($origine)."")));
if ($id_clienti_osp == $id_clienti) $dati_ospite = $dati_cliente;
else $dati_ospite = esegui_query("select cognome,nome,sesso,datanascita,utente_inserimento from $tableclienti where idclienti = '$id_clienti_osp' ");
$utente_ospite = risul_query($dati_ospite,0,'utente_inserimento');
if (($modifica_clienti == "PROPRI" and $utente_ospite != $id_utente) or ($modifica_clienti == "GRUPPI" and !$utenti_gruppi[$utente_ospite])) $dati_osp .= ($num1 + 1).". ";
else $dati_osp .=  "<a href=\"$url_mod_cli\">".($num1 + 1).".<\/a> ";
$dati_osp .= "<em>".addslashes(risul_query($dati_ospite,0,'cognome'))."<\/em> ";
$ccnome = addslashes((string) risul_query($dati_ospite,0,'nome'));
$ccsesso = risul_query($dati_ospite,0,'sesso');
$ccdatanascita = risul_query($dati_ospite,0,'datanascita');
$O = "o";
if ($ccsesso == "f") $O = "a";
if ($ccnome) $dati_osp .=  "$ccnome ";
if ($ccdatanascita) $dati_osp .= mex("nat$O il",$pag)." ".formatta_data($ccdatanascita,$stile_data)." ";
if ($num1 != ($num_ospiti - 1) or $num_idpr != ($num_id_prenota - 1)) $dati_osp .= "<br>";
} # fine for $num1
if ($num_idpr != ($num_id_prenota - 1)) $dati_osp .= "<br>";
} # fine for $num_idpr
echo "<tr><td valign=\"top\">
<script type=\"text/javascript\">
<!--
var testo_osp = '$dati_osp';
-->
</script>
 ".mex("Ospiti della prenotazione",$pag).": 
<button type=\"button\" id=\"bott_osp\" onclick=\"apri_vis('bott_osp','osp_cli',testo_osp);\">
<img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"&gt;\"></button>
<div id=\"osp_cli\" style=\"visibility: hidden;\"></div>";
if (!empty($ospiti_visibili)) {
echo "
<script type=\"text/javascript\">
<!--
apri_vis('bott_osp','osp_cli',testo_osp);
-->
</script>
";
} # fine if (!empty($ospiti_visibili))
if ($modifica_clienti != "NO" and !$pcanc) {
if ($modifica_clienti == "SI" or ($vedi_clienti == "PROPRI" and $modifica_clienti == "PROPRI") or ($vedi_clienti == "GRUPPI" and $modifica_clienti == "GRUPPI") or $mostra != "NO") {
echo "</td><td colspan=\"2\" valign=\"middle\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_ospiti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno_origine\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"modifica_prenota.php?mese=$mese&amp;tipo_tabella=$tipo_tabella&amp;id_prenota=$idprenota_origine2&amp;origine=".urlencode($origine)."\">
<button class=\"gsts\" type=\"submit\"><div>".mex("Modifica gli ospiti",$pag)."</div></button>";
/*if ($num_id_prenota == 1) echo "<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota\">";
else {
echo " ".mex("della prenotazione",$pag)."
<select name=\"id_prenota\">";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) echo "<option value=\"".$id_prenota_idpr[$num_idpr]."\">".$id_prenota_idpr[$num_idpr]."</option>";
echo "</select>"; 
} # fine else if ($num_id_prenota == 1)*/
echo "<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">";
echo "</div></form>";
} # fine if ($modifica_clienti == "SI" or...
else echo "</td><td>";
} # fine if ($modifica_clienti != "NO" and !$pcanc)
echo "</td></tr></table>";
} # fine else if ($vedi_clienti == "NO")
echo "</div>";

if ($id_prenota_prec) {
echo "<br><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<b>".mex("La prenotazione è dell'anno precedente, si potrà modificare solo la data finale",$pag).".</b>";
if ($id_prenota_prec == "SI") $id_prenota_prec = "";
if ($id_prenota_prec) {
echo "<input type=\"hidden\" name=\"anno\" value=\"".($anno - 1)."\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$id_prenota\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_prec\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Modifica nell'anno precedente",$pag)."\">";
} # fine if ($id_prenota_prec)
echo "</div></form><br><br>";
} # fine if ($id_prenota_prec)

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php#costi_agg\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"origine\" value=\"".htmlspecialchars($origine)."\">
<input type=\"hidden\" name=\"idprenota_origine\" value=\"$idprenota_origine\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<table class=\"modres floatleft\">";

function rowbgcolor () {
global $rowbgcolor,$t2row1color,$t2row2color;
if ($rowbgcolor == $t2row2color) $rowbgcolor = $t2row1color;
else $rowbgcolor = $t2row2color;
return $rowbgcolor;
} # fine function rowbgcolor

unset($nomi_utenti);
if ($priv_mod_utente_ins != "n") {
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
if ($num_tutti_utenti > 1) {
$option_select_utenti = "";
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
if ($idutenti != $id_utente_inserimento) {
if ($priv_mod_utente_ins == "s" or ($priv_mod_utente_ins == "g" and $utenti_gruppi[$idutenti])) {
if (isset($id_nuovo_utente_inserimento) and $id_nuovo_utente_inserimento == $idutenti) $sel = " selected";
else $sel = "";
$nome_utente_option = risul_query($tutti_utenti,$num1,'nome_utente');
$option_select_utenti .= "<option value=\"$idutenti\"$sel>$nome_utente_option</option>";
$nomi_utenti[$idutenti] = $nome_utente_option;
} # fine if ($priv_mod_utente_ins == "s" or ($priv_mod_utente_ins == "g" and $utenti_gruppi[$idutenti]))
} # fine if ($idutenti != $id_utente_inserimento)
else {
$nome_utente_inserimento = risul_query($tutti_utenti,$num1,'nome_utente');
$nomi_utenti[$idutenti] = $nome_utente_inserimento;
} # fine else if ($idutenti != $id_utente_inserimento)
} # fine for $num1
if (empty($id_nuovo_utente_inserimento)) $sel = " selected";
else $sel = "";
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>
".mex("Inserita dall'utente",$pag)." <b>$nome_utente_inserimento</b>";
if ($d_utente_cancellazione) echo "<br>".mex("Cancellata dall'utente",$pag)." <b>$d_utente_cancellazione</b>";
echo "</td><td>";
if ($priv_mod_utente_ins != "v") {
echo " ".mex("cambia in",$pag)." <select name=\"id_nuovo_utente_inserimento\">
<option value=\"\"$sel>----</option>
$option_select_utenti
</select>";
} # fine if ($priv_mod_utente_ins != "v")
echo "</td></tr>";
} # fine if ($num_tutti_utenti > 1)
} # fine if ($priv_mod_utente_ins != "n")

echo "<tr style=\"background-color: ".rowbgcolor().";\"><td colspan=\"2\">&nbsp;&nbsp;&nbsp;<b>$d_numero_settimane</b> ";
if ($d_numero_settimane == 1) echo mex($parola_settimana,$pag);
else echo mex($parola_settimane,$pag);
echo "</td></tr>
<tr style=\"background-color: ".rowbgcolor().";\"><td style=\"width: 230px;\"> ".mex("dal",$pag)."&nbsp;<b>$d_data_inizio_f</b>";
if ($d_checkin and $attiva_checkin == "SI") echo " <small>(".str_replace(" ","&nbsp;",str_replace("--","",str_replace("$d_data_inizio_f ","",formatta_data($d_checkin)))).")</small>";
echo "</td><td style=\"width: 600px;\"> ";
if ($priv_mod_date == "s") {
echo mex("cambia in",$pag)." <span class=\"wsnw\">";
if (!isset($n_inizioperiodo)) $n_inizioperiodo = "";
if ($n_inizioperiodo == "") $blank_selected = " selected";
else $blank_selected = "";
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","n_inizioperiodo",$n_inizioperiodo,1,$blank_selected,$id_utente,$tema,"",$d_data_inizio);
echo "</span> ";
} # fine if ($priv_mod_date == "s")
if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !$d_checkout_min) {
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
if (!$d_checkin_min) echo "<input class=\"smallsbutton\" type=\"submit\" name=\"ins_checkin\" value=\"".mex("registra entrata",$pag)."\">";
else echo "<input class=\"smallsbutton\" type=\"submit\" name=\"canc_checkin\" value=\"".mex("cancella entrata",$pag)."\">";
} # fine if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !$d_checkout_min)
echo "</td></tr>
<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("al",$pag)."&nbsp;<b>$d_data_fine_f</b>";
if ($d_checkout and $attiva_checkin == "SI") echo " <small>(".str_replace(" ","&nbsp;",str_replace("--","",str_replace("$d_data_fine_f ","",formatta_data($d_checkout)))).")</small>";
echo "</td><td> ";
if ($priv_mod_date == "s") {
echo mex("cambia in",$pag)." <span class=\"wsnw\">";
if (!isset($n_fineperiodo)) $n_fineperiodo = "";
if ($n_fineperiodo == "") $blank_selected = " selected";
else $blank_selected = "";
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","n_fineperiodo",$n_fineperiodo,1,$blank_selected,$id_utente,$tema,"",$d_data_fine);
echo "</span> ";
} # fine if ($priv_mod_date == "s")
if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and $d_checkin_min) {
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
if (!$d_checkout_min) echo "<input class=\"smallsbutton\" type=\"submit\" name=\"ins_checkout\" value=\"".mex("registra uscita",$pag)."\">";
else echo "<input class=\"smallsbutton\" type=\"submit\" name=\"canc_checkout\" value=\"".mex("cancella uscita",$pag)."\">";
} # fine if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and $d_checkin_min)
echo "</td></tr>";

if (!$d_checkin_min) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Orario entrata stimato",$pag).":";
if ($d_stima_checkin) echo " <b>".substr(str_replace(" ","&nbsp;",str_replace("$d_data_inizio_f ","",formatta_data($d_stima_checkin,$stile_data))),0,-3)."</b>";
echo "</td><td>";
if ($priv_mod_checkin == "s") {
echo mex("cambia in",$pag)." ";
if ($d_data_inizio != "~~~~") {
echo "<select name=\"n_data_stima_checkin\">";
$formato_vedi = "d-m-Y";
if ($stile_data == "usa") $formato_vedi = "m-d-Y";
$anno_ini = substr($d_data_inizio,0,4);
$mese_ini = substr($d_data_inizio,5,2);
$giorno_ini = substr($d_data_inizio,8,2);
if (empty($n_data_stima_checkin)) $data_sel = $d_data_inizio;
else $data_sel = $n_data_stima_checkin;
if ($d_numero_settimane == "~~~~") $d_numero_settimane2 = 1;
else $d_numero_settimane2 = $d_numero_settimane;
if ($d_numero_settimane2 < 6 and $tipo_periodi == "g") $giorno_fine = $giorno_ini + $d_numero_settimane2;
else $giorno_fine = $giorno_ini + 6;
for ($num1 = $giorno_ini ; $num1 <= $giorno_fine ; $num1++) {
$data_select = date("Y-m-d" , mktime(0,0,0,$mese_ini,$num1,$anno_ini));
$data_select_vedi = date($formato_vedi,mktime(0,0,0,$mese_ini,$num1,$anno_ini));
if ($data_select == $data_sel) $sel = " selected";
else $sel = "";
echo "<option value=\"$data_select\"$sel>$data_select_vedi</option>";
} # fine for $num1
echo "</select>&nbsp;&nbsp;";
} # fine if ($d_data_inizio != "~~~~")
if (empty($n_ora_stima_checkin)) $sel = " selected";
else $sel = "";
echo "<select name=\"n_ora_stima_checkin\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 24 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($n_ora_stima_checkin) and $num1 == $n_ora_stima_checkin) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
if (empty($n_min_stima_checkin)) $sel = " selected";
else $sel = "";
echo "</select>:<select name=\"n_min_stima_checkin\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 60 ; $num1 = $num1 + 15) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($n_min_stima_checkin) and $num1 == $n_min_stima_checkin) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select>";
} # fine if ($priv_mod_checkin == "s")
echo "</td></tr>";
} # fine if (!$d_checkin_min)

$inv = "";
if ($priv_vedi_beni_inv != "n" and $priv_vedi_inv_app != "n" and $d_appartamento != "~~~~") {
if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g") {
$condizione_beni_propri = " and ( $tablebeniinventario.utente_inserimento = '$id_utente'";
if ($priv_vedi_beni_inv == "g") {
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_beni_propri .= " or $tablebeniinventario.utente_inserimento = '$idut_gr'";
} # fine if ($priv_vedi_beni_inv == "g")
$condizione_beni_propri .= " )";
} # fine if ($priv_vedi_beni_inv == "p" or $priv_vedi_beni_inv == "g")
else $condizione_beni_propri = "";
$inv_mancante = esegui_query("select distinct $tablerelinventario.quantita from $tablerelinventario inner join $tablebeniinventario on $tablerelinventario.idbeneinventario = $tablebeniinventario.idbeniinventario where $tablerelinventario.idappartamento = '".aggslashdb($d_appartamento)."' and $tablerelinventario.quantita < $tablerelinventario.quantita_min_predef $condizione_beni_propri ");
if (numlin_query($inv_mancante)) {
$inv = " <a style=\"text-decoration: none; color: red;\" href=\"inventario.php?anno=$anno&amp;id_sessione=$id_sessione&amp;origine=modifica_prenota.php?id_prenota=$id_prenota_int&amp;idmag=a".htmlspecialchars($d_appartamento)."&amp;origine_vecchia=".urlencode($origine)."\">".mex("<b><big>i</big></b>",$pag)."</a> ";
} # fine if (numlin_query($inv_mancante))
} # fine if ($priv_vedi_beni_inv != "n" and $priv_vedi_inv_app != "n" and...

echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".str_replace(" ","&nbsp;",mex("Nº di persone",$pag)).":&nbsp;<b>".mex("$d_num_persone",$pag)."</b>";
if ($num_letti_agg['max']) echo "&nbsp;(+<b>".$num_letti_agg['max']."</b>)";
echo "</td><td>";
$n_letti_agg = null;
if (!$dati_cat_pers['num']) {
if ($priv_mod_num_persone == "s") echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_numpersone\" value=\"".htmlspecialchars(fixstr($n_numpersone))."\" size=\"2\" maxlength=\"2\">";
if (!empty($num_letti_agg['max'])) $n_letti_agg = $num_letti_agg['max'];
} # fine if (!$dati_cat_pers['num'])
echo "</td></tr>";
if ($dati_cat_pers['num']) {
echo "<input type=\"hidden\" name=\"num_cat_pers\" value=\"".$dati_cat_pers['num']."\">";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (empty($d_cat_persone[$num1]['esist'])) $cp_molt = 0;
else $cp_molt = "<b>".$d_cat_persone[($d_cat_persone[$num1]['esist'] - 1)]['molt']."</b>";
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>&nbsp;&nbsp;<em>".$dati_cat_pers[$num1]['n_plur']."</em>:&nbsp;$cp_molt</td><td>";
if ($priv_mod_num_persone == "s") echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_cat$num1"."_numpers\" value=\"".htmlspecialchars(fixstr(${"n_cat$num1"."_numpers"}))."\" size=\"2\" maxlength=\"2\">";
echo "</td></tr>";
} # fine for $num1
if (@is_array($d_cat_persone['excat'])) {
$excat = $d_cat_persone['excat'];
foreach ($excat as $cat_pers => $val_cat_pers) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>&nbsp;&nbsp;<em>".$val_cat_pers['n']."</em>:&nbsp;<b>".$val_cat_pers['m']."</b></td><td>";
if ($priv_mod_num_persone == "s") echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_excat$cat_pers"."_numpers\" value=\"".htmlspecialchars(fixstr(${"n_excat$cat_pers"."_numpers"}))."\" size=\"2\" maxlength=\"2\">";
echo "</td></tr>";
} # fine foreach ($excat as $cat_pers => $val_cat_pers)
} # fine if (@is_array($d_cat_persone['excat']))
} # fine if ($dati_cat_pers['num'])

echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Appartamento",'unit.php')." <b>$d_appartamento</b>$inv";
if ($d_assegnazione_app != "~~~~") {
echo " (";
if ($d_assegnazione_app == "k") echo "<b>".mex("fisso",'unit.php')."</b>";
else {
echo "<b>".mex("mobile",'unit.php')."</b>";
if ($d_app_assegnabili) {
$vett_app_assegnabili = explode(",",$d_app_assegnabili);
$num_app_assegnabili = count($vett_app_assegnabili);
$app_ass = " ".mex("in",$pag)." <b>".$vett_app_assegnabili[0]."</b>";
$app_ass_m = $app_ass;
for ($num1 = 1 ; $num1 < $num_app_assegnabili ; $num1++) {
$app_ass .= ", <b>".$vett_app_assegnabili[$num1]."</b>";
if ($num1 <= 35) $app_ass_m = $app_ass;
} # fine for $num1
if ($app_ass == $app_ass_m) echo $app_ass;
else {
$app_ass_m .= ", <b>...</b>";
echo "<b id=\"app_ass\" onmouseover=\"esp_app()\" onmouseout=\"nasc_app()\" style=\"font-weight: normal;\">".$app_ass_m."</b>
<script type=\"text/javascript\">
<!--
function esp_app () {
document.getElementById('app_ass').innerHTML = '".str_replace("</","<\/",$app_ass)."';
}
function nasc_app () {
document.getElementById('app_ass').innerHTML = '".str_replace("</","<\/",$app_ass_m)."';
}
-->
</script>";
} # fine else if ($app_ass == $app_ass_m)
} # fine if ($d_app_assegnabili)
} # fine else if ($d_assegnazione_app == "k")
echo ")";
} # fine if ($d_assegnazione_app != "~~~~")
echo "</td><td>";

if ($priv_mod_assegnazione_app != "n") {
$condizioni_regole1_consentite = "";
if ($attiva_regole1_consentite == "s") {
for ($num1 = 0 ; $num1 < count($regole1_consentite) ; $num1++) {
if ($regole1_consentite[$num1]) {
if ($regole1_consentite[$num1] == " ") $appartamenti_agenzia = esegui_query("select app_agenzia from $tableregole where (motivazione = '' or motivazione is null) and app_agenzia is not null and (motivazione2 != 'x' or motivazione2 is NULL) ");
else $appartamenti_agenzia = esegui_query("select app_agenzia from $tableregole where motivazione = '".$regole1_consentite[$num1]."' and app_agenzia is not null and (motivazione2 != 'x' or motivazione2 is NULL) ");
for ($num2 = 0 ; $num2 < numlin_query($appartamenti_agenzia) ; $num2++) {
$app_agenzia = risul_query($appartamenti_agenzia,$num2,'app_agenzia');
if (str_replace(" '$app_agenzia' ","",$condizioni_regole1_consentite) == $condizioni_regole1_consentite) $condizioni_regole1_consentite .= "idappartamenti = '$app_agenzia' or ";
} # fine for $num2
} # fine if ($regole1_consentite[$num1])
} # fine for $num1
if ($condizioni_regole1_consentite) $condizioni_regole1_consentite = "where ".substr($condizioni_regole1_consentite,0,-4);
else $condizioni_regole1_consentite = "where idappartamenti is null";
} # fine if ($attiva_regole1_consentite == "s")
$appart = esegui_query("select idappartamenti from $tableappartamenti $condizioni_regole1_consentite order by idappartamenti");
if ($d_assegnazione_app != "k" and $d_assegnazione_app != "~~~~" and $d_app_assegnabili != "~~~~") {
if (empty($sposta_appartamento)) $sel = " selected";
else $sel = "";
echo mex("Sposta nell'appartamento",'unit.php').":
<select name=\"sposta_appartamento\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < numlin_query($appart) ; $num1++) {
$idapp = risul_query($appart,$num1,'idappartamenti');
if (isset($sposta_appartamento) and $sposta_appartamento == $idapp) $sel = " selected";
else $sel = "";
if ((!$d_app_assegnabili or str_replace(",$idapp,","",",".$d_app_assegnabili.",") != ",".$d_app_assegnabili.",") and $idapp != $d_appartamento) echo "<option value=\"".htmlspecialchars($idapp)."\"$sel>$idapp</option>";
} # fine for $num1
echo "</select><br>";
} # fine if ($d_assegnazione_app != "k" and...
if ($priv_mod_assegnazione_app == "s") {
if ($d_assegnazione_app != "k") echo "<table border=0 cellspacing=0 cellpadding=0><tr style=\"height: 5px;\"><td></td></tr></table>";
if (empty($n_appartamento)) $sel = " selected";
else $sel = "";
echo mex("Cambia metodo per l'assegnazione dell'appartamento",'unit.php').":<br>
<div class=\"smallfont linhbox\">
·".mex("Nº fisso di appartamento",'unit.php').":
<select class=\"smallsel85\" name=\"n_appartamento\">
<option value=\"\"$sel>--</option>";
#include(C_DATI_PATH."/selectappartamenti.php");
for ($num1 = 0 ; $num1 < numlin_query($appart) ; $num1++) {
$idapp = risul_query($appart,$num1,'idappartamenti');
if (isset($n_appartamento) and $n_appartamento == $idapp) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($idapp)."\"$sel>$idapp</option>";
} # fine for $num1
echo "</select><br>";
if (isset($n_mobile) and $n_mobile == "SI") $checked = " checked";
else $checked = "";
if ($d_assegnazione_app != "v") echo "·<label><input type=\"checkbox\" name=\"n_mobile\" value=\"SI\"$checked>".mex("Mobile in tutti gli appartamenti",'unit.php').".</label><br>";
if (strcmp((string) $d_app_assegnabili,"") and $d_app_assegnabili != "~~~~" and !strcmp(fixstr($n_lista_app),"")) {
$onclick = " onclick=\"cp_lisapp()\"";
echo "<script type=\"text/javascript\">
<!--
function cp_lisapp () {
var tbox = document.getElementById('list_ap');
if (tbox.value == '') {
tbox.value = '".togli_acapo(str_replace("'","\\'",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&amp;","&",$d_app_assegnabili)))))."';
}
} // fine function cp_lisapp
-->
</script>";
} # fine if (strcmp((string) $d_app_assegnabili,"") and $d_app_assegnabili != "~~~~" and...
else $onclick = "";
echo "·".mex("Lista di appartamenti",'unit.php').":
<input type=\"text\" class=\"smallsel85\" id=\"list_ap\" name=\"n_lista_app\" value=\"".htmlspecialchars(fixstr($n_lista_app))."\"$onclick size=\"15\"> ";
$comb_app = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'comb_app' and idutente = '$id_utente'");
if (numlin_query($comb_app) == 1) {
$comb_app = explode("<>",risul_query($comb_app,0,'valpersonalizza'));
$num_comb_app = count($comb_app) - 1;
$opt_comb_app = "";
for ($num1 = 0 ; $num1 < $num_comb_app ; $num1++) {
$nome_comb_app = explode(",",$comb_app[$num1]);
$nome_comb_app = $nome_comb_app[(count($nome_comb_app) - 1)];
$lista_comb_app = substr($comb_app[$num1],0,((strlen($nome_comb_app) + 1) * -1));
$opt_comb_app .= "<option value=\"$lista_comb_app\">$nome_comb_app</option>";
} # fine for $num1
echo "<script type=\"text/javascript\">
<!--
function agg_comb_app () {
var sel_comb=document.getElementById('comb_ap');
var ind_sc = sel_comb.selectedIndex;
var txt_lista_app=document.getElementById('list_ap');
txt_lista_app.value = sel_comb.options[ind_sc].value;
}
-->
</script>
(<select class=\"smallsel85\" id=\"comb_ap\" onchange=\"agg_comb_app()\">
<option value=\"\" selected>--</option>$opt_comb_app</select>)";
} # fine if (numlin_query($comb_app) == 1)
else echo "(".mex("separati da virgole",'unit.php').")";
echo ".<br>";
if (empty($n_num_piano)) $sel = " selected";
else $sel = "";
echo "·".mex("Nº di piano",$pag).": <select class=\"smallsel85\" name=\"n_num_piano\">
<option value=\"\"$sel>--</option>";
$appart = esegui_query("select numpiano from $tableappartamenti $condizioni_regole1_consentite order by numpiano");
$num_appart = numlin_query($appart);
$ultimopiano = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$piano = risul_query($appart,$num1,'numpiano');
if ($piano != $ultimopiano) {
$ultimopiano = $piano;
if (isset($n_num_piano) and $n_num_piano == $piano) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($piano)."\"$sel>$piano</option>";
} # fine if ($piano != $ultimopiano)
} # fine for $num1
if (empty($n_num_casa)) $sel = " selected";
else $sel = "";
echo "</select>
 ".mex("e/o di casa",$pag).": <select class=\"smallsel85\" name=\"n_num_casa\">
<option value=\"\"$sel>--</option>";
$appart = esegui_query("select numcasa from $tableappartamenti $condizioni_regole1_consentite order by numcasa");
$ultimacasa = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$casa = risul_query($appart,$num1,'numcasa');
if ($casa != $ultimacasa) {
$ultimacasa = $casa;
if (isset($n_num_casa) and $n_num_casa == $casa) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($casa)."\"$sel>$casa</option>";
} # fine if ($piano != $ultimopiano)
} # fine for $num1
if (empty($n_num_persone_casa)) $sel = " selected";
else $sel = "";
echo "</select>
 ".mex("e/o di persone",$pag).": <select class=\"smallsel85\" name=\"n_num_persone_casa\">
<option value=\"\"$sel>--</option>";
$appart = esegui_query("select maxoccupanti from $tableappartamenti $condizioni_regole1_consentite order by maxoccupanti");
$ultime_persone_casa = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$persone_casa = risul_query($appart,$num1,'maxoccupanti');
if ($persone_casa != $ultime_persone_casa) {
$ultime_persone_casa = $persone_casa;
if (isset($n_num_persone_casa) and $n_num_persone_casa == $persone_casa) $sel = " selected";
else $sel = "";
echo "<option value=\"$persone_casa\"$sel>$persone_casa</option>";
} # fine if ($persone_casa != $ultimepersone_casa)
} # fine for $num1
echo "</select></div>";
} # fine if ($priv_mod_assegnazione_app == "s")
} # fine if ($priv_mod_assegnazione_app != "n")
echo "</td></tr>";

if ($priv_mod_prenota_comp != "n" or $d_prenota_comp) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Prenotazioni vicine",$pag).":</td><td>";
if ($d_prenota_comp) {
$d_prenota_comp = explode(",",$d_prenota_comp);
$num_prenota_comp = count($d_prenota_comp);
for ($num1 = 0 ; $num1 < $num_prenota_comp ; $num1++) {
$prenota_comp = $d_prenota_comp[$num1];
if ($num1) echo ", ";
if ($priv_mod_prenota_comp != "n" and $prenota_comp != "~~~~") echo "<input type=\"checkbox\" name=\"n_prenota_comp$num1\" value=\"$prenota_comp\" checked>";
if ($id_prenota_prec or $prenota_comp == "~~~~") echo "$prenota_comp";
else echo "<a href=\"./$pag?id_prenota=$prenota_comp&anno=$anno&id_sessione=$id_sessione&origine=".urlencode($origine)."\">$prenota_comp</a>";
} # fine for $num1
echo "<input type=\"hidden\" name=\"num_prenota_comp\" value=\"$num_prenota_comp\">";
} # fine if ($d_prenota_comp)
if ($priv_mod_prenota_comp != "n") {
if (!empty($num_prenota_comp)) echo ", ";
echo "".mex("numero",$pag)." <input type=\"text\" name=\"n_id_prenota_comp\" value=\"".htmlspecialchars(fixstr($n_id_prenota_comp))."\" size=\"6\">";
} # fine if ($priv_mod_prenota_comp != "n")
echo "</td></tr>";
} # fine if ($priv_mod_prenota_comp != "n" or $d_prenota_comp)

if ($priv_vedi_commento == "s" or $num_campi_pers_comm) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>";
if ($priv_vedi_commento == "s") $txt_comm = mex("Commento",$pag).":<br><b>$d_commento</b>";
else $txt_comm = "";
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) {
if (isset($d_commenti_pers[$campi_pers_comm[$num1]]) and strcmp((string) $d_commenti_pers[$campi_pers_comm[$num1]],"")) {
if ($txt_comm) $txt_comm .= "<br><div style=\"height: 6px;\"></div>";
$txt_comm .= mex("Commento",$pag)." \"<em>".$campi_pers_comm[$num1]."</em>\":<br><b>".$d_commenti_pers[$campi_pers_comm[$num1]]."</b>";
} # fine if (isset($d_commenti_pers[$campi_pers_comm[$num1]]) and strcmp((string) $d_commenti_pers[$campi_pers_comm[$num1]],""))
} # fine for $num1
echo "$txt_comm </td><td>";
if ($priv_mod_commento == "s" or $priv_mod_commenti_pers == "s") {
$onclick = "";
$onchange = "";
if (!strcmp(fixstr($n_commento),"") and ((strcmp((string) $d_commento,"") and $d_commento != "~~~~") or ($priv_mod_commenti_pers == "s" and $num_campi_pers_comm))) {
echo "<script type=\"text/javascript\">
<!--
";
if (strcmp((string) $d_commento,"") and $d_commento != "~~~~") {
$onclick = " onclick=\"cp_comm()\"";
echo "function cp_comm () {
var tbox = document.getElementById('n_comm');
if (tbox.value == '') {
";
if ($attiva_checkin == "SI" or ($priv_mod_commenti_pers == "s" and $num_campi_pers_comm)) echo "var tcomm = document.getElementById('tcomm');
if (tcomm) tcomm = tcomm.value;
else tcomm = '';
if (tcomm == '') ";
echo "tbox.innerHTML = '".togli_acapo(str_replace("'","\\'",$d_commento))."';
}
}
";
} # fine if (strcmp((string) $d_commento,"") and $d_commento != "~~~~")
if ($priv_mod_commenti_pers == "s" and $num_campi_pers_comm) {
$onchange = " onchange=\"agg_comm()\"";
echo "function agg_comm () {
var tbox = document.getElementById('n_comm');
var tcomm = document.getElementById('tcomm');
var nval = '';
";
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) {
echo "if (tcomm.value == '".$campi_pers_comm[$num1]."') nval = '".togli_acapo(str_replace("'","\\'",fixstr($d_commenti_pers[$campi_pers_comm[$num1]])))."';
";
} # fine for $num1
echo "tbox.innerHTML = nval;
}
";
} # fine if ($priv_mod_commenti_pers == "s" and $num_campi_pers_comm)
echo "-->
</script>";
} # fine if (!strcmp((string) $n_commento,"") and ((strcmp((string) $d_commento,"") and...
if (isset($n_cancella_commento) and $n_cancella_commento == "SI") $checked = " checked";
else $checked = "";
if (($priv_mod_commento == "s" and ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !$d_checkout_min)) or ($priv_mod_commenti_pers == "s" and $num_campi_pers_comm)) {
$sel_null = "";
$sel_checkin = "";
$sel_checkout = "";
if (!empty($tipo_commento)) {
if ($tipo_commento == "checkin") $sel_checkin = " selected";
if ($tipo_commento == "checkout") $sel_checkout = " selected";
} # fine if (!empty($tipo_commento)
else $sel_null = " selected";
echo "<select id=\"tcomm\"$onchange class=\"smallsel\" name=\"tipo_commento\">";
if ($priv_mod_commento == "s") {
echo "<option value=\"\"$sel_null>".mex("cambia in",$pag)."</option>";
if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !$d_checkout_min) {
if (!$d_checkin_min) echo "<option value=\"checkin\"$sel_checkin>".mex("aggiungi promemoria per l'entrata",$pag)."</option>";
echo "<option value=\"checkout\"$sel_checkout>".mex("aggiungi promemoria per l'uscita",$pag)."</option>";
} # fine if ($attiva_checkin == "SI" and $priv_mod_checkin == "s" and !$d_checkout_min)
} # fine if ($priv_mod_commento == "s")
else echo "<option value=\"\">--</option>";
if ($priv_mod_commenti_pers == "s") {
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) {
if (isset($tipo_commento) and $tipo_commento == $campi_pers_comm[$num1]) $selected = " selected";
else $selected = "";
echo "<option value=\"".$campi_pers_comm[$num1]."\"$selected>".mex("cambia il commento",$pag)." \"".$campi_pers_comm[$num1]."\"</option>";
} # fine for $num1
} # fine if ($priv_mod_commenti_pers == "s")
echo "</select>";
} # fine if (($priv_mod_commento == "s" and ($attiva_checkin == "SI" and...
else echo mex("cambia in",$pag);
if ($mobile_device) {
$cols_textarea = "22";
$rows_textarea = "2";
$ws_textarea = "pre";
} # fine if ($mobile_device)
else {
$cols_textarea = "42";
$rows_textarea = "3";
if (strlen($txt_comm) > 60) $rows_textarea = "4";
if (strlen($txt_comm) > 260) $rows_textarea = "5";
$ws_textarea = "pre-wrap";
} # fine else if ($mobile_device)
echo ":<br>
<textarea name=\"n_commento\" id=\"n_comm\" rows=$rows_textarea cols=$cols_textarea style=\"white-space: $ws_textarea; overflow: auto;\"$onclick>$n_commento</textarea><br>";
if ($priv_mod_commento == "s") echo "<label><input type=\"checkbox\" name=\"n_cancella_commento\" value=\"SI\"$checked> ".mex("Cancella il commento",$pag).".</label>";
} # fine if ($priv_mod_commento == "s" or $priv_mod_commenti_pers == "s")
echo "</td></tr>";
} # fine if ($priv_vedi_commento == "s" or $num_campi_pers_comm)

$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente'");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
if ($d_origine_prenota or ($origini_prenota and $priv_mod_orig_prenota == "s")) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>
".str_replace(" ","&nbsp;",mex("Origine",$pag)).": <b>$d_origine_prenota</b></td>
<td>";
if ($origini_prenota and $priv_mod_orig_prenota == "s") {
if (empty($n_origine_prenota)) $sel = " selected";
else $sel = "";
echo mex("cambia in",$pag)." <span class=\"long_select\"><select name=\"n_origine_prenota\">
<option value=\"\"$sel>----</option>";
$origini_prenota = explode(",",$origini_prenota);
for ($num1 = 0 ; $num1 < count($origini_prenota) ; $num1++) {
if (isset($n_origine_prenota) and $n_origine_prenota == $origini_prenota[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".$origini_prenota[$num1]."\"$sel>".$origini_prenota[$num1]."</option>";
} # fine for $num1
echo "</select></span>";
} # fine if ($origini_prenota and $priv_mod_orig_prenota == "s")
if (!empty($non_mostra_tariffe) or !empty($mostra_tariffe)) echo "<a name=\"costi_agg\"></a>";
echo "</td></tr>";
} # fine if ($d_origine_prenota or...


if ($d_valuta_tariffa and $d_valuta_tariffa != "~~") {
$d_valu_tariffa = explode("<",$d_valuta_tariffa);
$d_cambio_tariffa = $d_valu_tariffa[1];
$d_arrotond_tariffa = $d_valu_tariffa[2];
$d_valu_tariffa = $d_valu_tariffa[0];
} # fine if ($d_valuta_tariffa and $d_valuta_tariffa != "~~")
else $d_valu_tariffa = "";

echo "</table><div class=\"floatleft\"><table class=\"modres\">";
if ($priv_mod_tariffa != "n") {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>";
if ($num_id_prenota > 1) {
if (!empty($mostra_tariffe)) $mostra_tariffe_passa = "SI";
if (!empty($non_mostra_tariffe)) $mostra_tariffe_passa = "NO";
if (!isset($mostra_tariffe_passa) or $mostra_tariffe_passa != "SI") $mostra_tariffe_passa = "NO";
if ($mostra_tariffe_passa == "NO") {
$num_mostra_tariffe = 1;
echo "<button type=\"submit\" name=\"mostra_tariffe\" value=\"SI\">
<img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"".mex("mostra",$pag)." &gt;\">
</button> ";
} # fine if ($mostra_tariffe_passa == "NO")
else {
$num_mostra_tariffe = $num_id_prenota;
echo "<button type=\"submit\" name=\"non_mostra_tariffe\" value=\"NO\">
<img style=\"display: block;\" src=\"./img/freccia_giu_marg.png\" alt=\"".mex("nascondi",$pag)." &gt;\">
</button> ";
} # fine else if ($mostra_tariffe_passa == "NO")
echo "<input type=\"hidden\" name=\"mostra_tariffe_passa\" value=\"$mostra_tariffe_passa\">";
} # fine if ($num_id_prenota > 1)
else $num_mostra_tariffe = 1;
echo "".mex("Tipo di tariffa",$pag)."";
if ($num_mostra_tariffe > 1) echo ":</td><td></td></tr>";

for ($num1 = 0 ; $num1 < $num_mostra_tariffe ; $num1++) {
if ($num_mostra_tariffe > 1) {
$id_prenota = $id_prenota_idpr[$num1];
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>
<input type=\"hidden\" name=\"n_nometipotariffa_vett\" value=\"SI\">
 ".mex("pren.",$pag)." <i>$id_prenota</i>";
$d_nome_tariffa = $d_nome_tariffa_vett[$id_prenota];
$d_costo_tariffa = $d_costo_tariffa_vett[$id_prenota];
$suff_idpr = "_$id_prenota";
} # fine if ($num_mostra_tariffe > 1)
else $suff_idpr = "";

$d_nome_tariffa_vedi = $d_nome_tariffa;
$select_nomi_tariffe = "";
fixset(${"n_nometipotariffa".$suff_idpr});
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
$tariffa = "tariffa".$numtariffa;
if ($dati_tariffe[$tariffa]['nome'] == "") $nometariffa_vedi = mex("tariffa",$pag).$numtariffa;
else $nometariffa_vedi = $dati_tariffe[$tariffa]['nome'];
if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
if (${"n_nometipotariffa".$suff_idpr} == $tariffa) $sel = " selected";
else $sel = "";
$select_nomi_tariffe .= "
<option value=\"$tariffa\"$sel>$nometariffa_vedi</option>";
} # fine if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa]))
if ($d_nome_tariffa == $tariffa) $d_nome_tariffa_vedi = mex("tariffa",$pag).$numtariffa;
} # fine for $numtariffa
$d_costo_tariffa_p = virgola_in_num($d_costo_tariffa,$stile_soldi);
if (${"n_nometipotariffa".$suff_idpr} == "") $sel = " selected";
else $sel = "";
echo ": <b>$d_nome_tariffa_vedi</b>";
if ($priv_mod_tariffa != "p") echo " (<b>$d_costo_tariffa_p</b> $Euro";
if (strcmp((string) $d_valu_tariffa,"")) {
$tariffa_valuta = "";
$tariffa_valuta_attuale = "";
$tariffa_valuta = converti_valuta($d_costo_tariffa,$d_cambio_tariffa,$d_arrotond_tariffa);
$valuta_tar = $altre_valute['id'][$d_valu_tariffa];
if (strcmp((string) $valuta_tar,"") and ((double) $altre_valute[$valuta_tar]['cambio'] != (double) $d_cambio_tariffa or (double) $altre_valute[$valuta_tar]['arrotond'] != (double) $d_arrotond_tariffa)) {
$tariffa_valuta_attuale = converti_valuta($d_costo_tariffa,$altre_valute[$valuta_tar]['cambio'],$altre_valute[$valuta_tar]['arrotond']);
if ($tariffa_valuta_attuale and (double) $tariffa_valuta_attuale != (double) $tariffa_valuta) {
$tariffa_valuta_attuale = ", <small>".strtolower(mex("Al cambio attuale",$pag))." <em>".virgola_in_num($tariffa_valuta_attuale,$stile_soldi)." $d_valu_tariffa</em></small>";
} # fine if ($tariffa_valuta_attuale and (double) $tariffa_valuta_attuale != (double) $tariffa_valuta)
} # fine if (strcmp((string) $valuta_tar,"") and ((double) $altre_valute[$valuta_tar]['cambio'] != (double) $d_cambio_tariffa or...
echo " = <em>".virgola_in_num($tariffa_valuta,$stile_soldi)." <b>$d_valu_tariffa</b></em>$tariffa_valuta_attuale";
} # fine if (strcmp((string) $d_valu_tariffa,""))
echo ")</td><td>";
if ($priv_mod_tariffa == "s" or $priv_mod_tariffa == "r") {
echo mex("cambia in",$pag)." <select name=\"n_nometipotariffa$suff_idpr\">
<option value=\"\"$sel>----</option>";
echo $select_nomi_tariffe;
echo "</select>";
} # fine if ($priv_mod_tariffa == "s" or $priv_mod_tariffa == "r")
if ($priv_mod_tariffa == "s") {
if (!isset($pagina_gia_modificata) or !empty($mostra_tariffe) or !empty($non_mostra_tariffe)) ${"cambia_con_regola2".$suff_idpr} = "S";
if (${"cambia_con_regola2".$suff_idpr} == "S") $checked = " checked";
else $checked = "";
echo "<label class=\"smallfont\">(<input type=\"checkbox\" name=\"cambia_con_regola2$suff_idpr\" value=\"S\"$checked>".mex("riassegna l'appartamento con la regola 2",'unit.php').")</label>";
} # fine if ($priv_mod_tariffa == "s")
echo "</td></tr>";
} # fine for $num1
} # fine if ($priv_mod_tariffa != "n")


if ($priv_mod_sconto != "n") {
$d_sconto_p =  virgola_in_num($d_sconto,$stile_soldi);
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Sconto",$pag).": <b>$d_sconto_p</b> $Euro";
if (strcmp((string) $d_valu_tariffa,"")) {
$sconto_valuta_attuale = "";
$sconto_valuta = converti_valuta($d_sconto,$d_cambio_tariffa,$d_arrotond_tariffa);
$valuta_sco = $altre_valute['id'][$d_valu_tariffa];
if (strcmp((string) $valuta_sco,"") and ((double) $altre_valute[$valuta_sco]['cambio'] != (double) $d_cambio_tariffa or (double) $altre_valute[$valuta_sco]['arrotond'] != (double) $d_arrotond_tariffa)) {
$sconto_valuta_attuale = converti_valuta($d_sconto,$altre_valute[$valuta_sco]['cambio'],$altre_valute[$valuta_sco]['arrotond']);
if ($sconto_valuta_attuale and (double) $sconto_valuta_attuale != (double) $sconto_valuta) {
$sconto_valuta_attuale = "<br><small>(".mex("Al cambio attuale",$pag).": <em>".virgola_in_num($sconto_valuta_attuale,$stile_soldi)." $d_valu_tariffa)</small></em>";
} # fine if ($sconto_valuta_attuale and (double) $sconto_valuta_attuale != (double) $sconto_valuta)
} # fine if (strcmp((string) $valuta_sco,"") and ((double) $altre_valute[$valuta_sco]['cambio'] != (double) $d_cambio_tariffa or...
echo " = <em>".virgola_in_num($sconto_valuta,$stile_soldi)." <b>$d_valu_tariffa</b></em>$sconto_valuta_attuale";
} # fine if (strcmp((string) $d_valu_tariffa,""))
echo "</td><td>";
if ($priv_mod_sconto == "s") {
$sel_val = "";
$sel_tot = "";
$sel_tot_sett = "";
$sel_tar = "";
$sel_tar_sett = "";
$sel_perc_tot = "";
$sel_perc_tar = "";
if (!isset($tipo_val_sconto)) $tipo_val_sconto = "";
if ($tipo_val_sconto == "val" or !$tipo_val_sconto) $sel_val = " selected";
if ($tipo_val_sconto == "tot") $sel_tot = " selected";
if ($tipo_val_sconto == "tot_sett") $sel_tot_sett = " selected";
if ($tipo_val_sconto == "tar") $sel_tar = " selected";
if ($tipo_val_sconto == "tar_sett") $sel_tar_sett = " selected";
if ($tipo_val_sconto == "perc_tot") $sel_perc_tot = " selected";
if ($tipo_val_sconto == "perc_tar") $sel_perc_tar = " selected";
echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_sconto\" value=\"".htmlspecialchars(fixstr($n_sconto))."\" size=\"7\">
 <select name=\"tipo_val_sconto\">
<option value=\"val\"$sel_val>$Euro</option>
<option value=\"tot\"$sel_tot>$Euro - ".mex("prezzo totale","prenota.php")."</option>
<option value=\"tot_sett\"$sel_tot_sett>$Euro - ".mex("prezzo totale $parola_settimanale","prenota.php")."</option>
<option value=\"tar\"$sel_tar>$Euro - ".mex("prezzo tariffa","prenota.php")."</option>
<option value=\"tar_sett\"$sel_tar_sett>$Euro - ".mex("prezzo tariffa $parola_settimanale","prenota.php")."</option>
<option value=\"perc_tot\"$sel_perc_tot>".mex("% del totale","prenota.php")."</option>
<option value=\"perc_tar\"$sel_perc_tar>".mex("% della tariffa","prenota.php")."</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
if ($tipo_val_sconto == "val>".$altre_valute[$num1]['nome']) $sel = " selected";
else $sel = "";
if ($tipo_val_sconto == "tot>".$altre_valute[$num1]['nome']) $sel_tot = " selected";
else $sel_tot = "";
if ($tipo_val_sconto == "tot_sett>".$altre_valute[$num1]['nome']) $sel_tot_sett = " selected";
else $sel_tot_sett = "";
if ($tipo_val_sconto == "tar>".$altre_valute[$num1]['nome']) $sel_tar = " selected";
else $sel_tar = "";
if ($tipo_val_sconto == "tar_sett>".$altre_valute[$num1]['nome']) $sel_tar_sett = " selected";
else $sel_tar_sett = "";
echo "<option value=\"val".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel>".$altre_valute[$num1]['nome']."</option>
<option value=\"tot".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel_tot>".$altre_valute[$num1]['nome']." - ".mex("prezzo totale","prenota.php")."</option>
<option value=\"tot_sett".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel_tot_sett>".$altre_valute[$num1]['nome']." - ".mex("prezzo totale $parola_settimanale","prenota.php")."</option>
<option value=\"tar".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel_tar>".$altre_valute[$num1]['nome']." - ".mex("prezzo tariffa","prenota.php")."</option>
<option value=\"tar_sett".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel_tar_sett>".$altre_valute[$num1]['nome']." - ".mex("prezzo tariffa $parola_settimanale","prenota.php")."</option>";
} # fine for $num1
echo "</select>";
} # fine if ($priv_mod_sconto == "s")
echo "</td></tr>";
} # fine if ($priv_mod_sconto != "n")

$d_valu_caparra = "";
if ($priv_mod_caparra != "n") {
if ($d_valuta_caparra and $d_valuta_caparra != "~~") {
$d_valu_caparra = explode("<",$d_valuta_caparra);
$d_cambio_caparra = $d_valu_caparra[1];
$d_arrotond_caparra = $d_valu_caparra[2];
$d_valu_caparra = $d_valu_caparra[0];
} # fine if ($d_valuta_caparra and $d_valuta_caparra != "~~")

if ((string) $d_costo_tot_registrato == "~~~~" or (string) $d_caparra == "~~~~") $resto_caparra = "~~~~";
else $resto_caparra = $d_costo_tot_registrato - $d_caparra;
$d_caparra_p =  virgola_in_num($d_caparra,$stile_soldi);
$resto_caparra_p =  virgola_in_num($resto_caparra,$stile_soldi);
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Caparra",$pag).": <b>$d_caparra_p</b>";
if (strcmp((string) $d_caparra_p,"")) echo " $Euro";
if (isset($mostra_met_paga_caparra) and $mostra_met_paga_caparra == "SI" and strcmp((string) $d_valu_caparra,"")) {
$caparra_valuta = "";
$caparra_valuta_attuale = "";
$caparra_valuta = converti_valuta($d_caparra,$d_cambio_caparra,$d_arrotond_caparra);
$valuta_cap = $altre_valute['id'][$d_valu_caparra];
if (strcmp((string) $valuta_cap,"") and ((double) $altre_valute[$valuta_cap]['cambio'] != (double) $d_cambio_caparra or (double) $altre_valute[$valuta_cap]['arrotond'] != (double) $d_arrotond_caparra)) {
$caparra_valuta_attuale = converti_valuta($d_caparra,$altre_valute[$valuta_cap]['cambio'],$altre_valute[$valuta_cap]['arrotond']);
if ($caparra_valuta_attuale and (double) $caparra_valuta_attuale != (double) $caparra_valuta) {
$caparra_valuta_attuale = "<br><small>(".mex("Al cambio attuale",$pag).": ".virgola_in_num($caparra_valuta_attuale,$stile_soldi)." $d_valu_caparra)</small>";
} # fine if ($caparra_valuta_attuale and (double) $caparra_valuta_attuale != (double) $caparra_valuta)
} # fine if (strcmp((string) $valuta_cap,"") and ((double) $altre_valute[$valuta_cap]['cambio'] != (double) $d_cambio_caparra or...
$caparra_valuta = virgola_in_num($caparra_valuta,$stile_soldi)." ";
echo " = <em>$caparra_valuta<b>$d_valu_caparra</b></em>$caparra_valuta_attuale";
} # fine if (isset($mostra_met_paga_caparra) and $mostra_met_paga_caparra == "SI" and $d_valuta_caparra and $d_valuta_caparra != "~~")
echo "<br><small>(".mex("resto",$pag).": $resto_caparra_p $Euro)</small></td>
<td>";
if ($priv_mod_caparra == "s") {
$sel_val = "";
$sel_perc_tar = "";
if (empty($tipo_val_caparra)) {
if ($altre_valute['num'] or strcmp((string) $d_valuta_caparra,"")) $sel_perc_tar = " selected";
else $sel_val = " selected";
} # fine if (empty($tipo_val_caparra))
else {
if ($tipo_val_caparra == "val") $sel_val = " selected";
if ($tipo_val_caparra == "perc_tar") $sel_perc_tar = " selected";
} # fine else if (empty($tipo_val_caparra))
if (isset($n_calcola_caparra) and $n_calcola_caparra == "SI") $checked = " checked";
else $checked = "";
echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_caparra\" value=\"".htmlspecialchars(fixstr($n_caparra))."\" size=\"7\">
 <select name=\"tipo_val_caparra\">
<option value=\"val\"$sel_val>$Euro</option>
<option value=\"perc_tar\"$sel_perc_tar>".mex("% della tariffa","prenota.php")."</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
if ($altre_valute[$num1]['nome'] != $d_valuta_caparra or $caparra_valuta_attuale) {
if (isset($n_valuta_caparra) and $n_valuta_caparra == ">".$altre_valute[$num1]['nome']) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel>".$altre_valute[$num1]['nome']."</option>";
} # fine if ($altre_valute[$num1]['nome'] != $d_valuta_caparra or $caparra_valuta_attuale)
} # fine for $num1
echo "</select><br><label>
<input type=\"checkbox\" name=\"n_calcola_caparra\" value=\"SI\"$checked><span class=\"smallfont\">".mex("Ricalcola la caparra in base alla nuova tariffa",$pag).".
</span></label>";
} # fine if ($priv_mod_caparra == "s")
echo "</td></tr>";

if (isset($mostra_met_paga_caparra) and $mostra_met_paga_caparra == "SI") {
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($d_met_paga_caparra or ($metodi_pagamento and $priv_mod_caparra == "s")) {
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td><small>
".str_replace(" ","&nbsp;",mex("Metodo pagamento caparra",$pag)).":</small> <b>$d_met_paga_caparra</b></td>
<td>";
if ($metodi_pagamento and $priv_mod_caparra == "s") {
if (empty($n_met_paga_caparra)) $sel = " selected";
else $sel = "";
echo mex("cambia in",$pag)." <span class=\"long_select\"><select name=\"n_met_paga_caparra\">
<option value=\"\"$sel>----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) {
if ($metodi_pagamento[$num1] != $d_met_paga_caparra) {
if (isset($n_met_paga_caparra) and $n_met_paga_caparra == $metodi_pagamento[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($metodi_pagamento[$num1])."\"$sel>".$metodi_pagamento[$num1]."</option>";
} # fine if ($metodi_pagamento[$num1] != $d_met_paga_caparra)
} # fine for $num1
echo "</select></span>";
} # fine if ($metodi_pagamento and $priv_mod_caparra == "s")
echo "</td></tr>";
} # fine if ($d_met_paga_caparra or ($metodi_pagamento and $priv_mod_caparra == "s"))
} # fine if (isset($mostra_met_paga_caparra) and $mostra_met_paga_caparra == "SI")

if ((string) $d_costo_tot_registrato == "~~~~" or (string) $d_commissioni == "~~~~") $resto_commissioni = "~~~~";
else $resto_commissioni = $d_costo_tot_registrato - $d_commissioni;
$d_commissioni_p =  virgola_in_num($d_commissioni,$stile_soldi);
$resto_commissioni_p =  virgola_in_num($resto_commissioni,$stile_soldi);
echo "<tr style=\"background-color: ".rowbgcolor().";\"><td>".mex("Commissioni",$pag).": <b>$d_commissioni_p</b>";
if (strcmp((string) $d_commissioni_p,"")) echo " $Euro";
echo "<br>
<small>(".mex("resto",$pag).": $resto_commissioni_p $Euro)</small></td>
<td>";
if ($priv_mod_caparra == "s") {
$sel_val = "";
$sel_perc_tar = "";
$sel_perc_ts = "";
$sel_perc_tsc = "";
if (empty($tipo_val_commissioni) or $tipo_val_commissioni == "val") $sel_val = " selected";
else {
if ($tipo_val_commissioni == "perc_tar") $sel_perc_tar = " selected";
if ($tipo_val_commissioni == "perc_ts") $sel_perc_ts = " selected";
if ($tipo_val_commissioni == "perc_tsc") $sel_perc_tsc = " selected";
} # fine else if (empty($tipo_val_commissioni) or $tipo_val_commissioni == "val")
if (isset($n_calcola_commissioni) and $n_calcola_commissioni == "SI") $checked = " checked";
else $checked = "";
echo mex("cambia in",$pag)." <input type=\"text\" name=\"n_commissioni\" value=\"".htmlspecialchars(fixstr($n_commissioni))."\" size=\"7\">
 <select name=\"tipo_val_commissioni\">
<option value=\"val\"$sel_val>$Euro</option>
<option value=\"perc_tar\"$sel_perc_tar>".mex("% della tariffa","prenota.php")."</option>
<option value=\"perc_ts\"$sel_perc_ts>".mex("% della tariffa","prenota.php")."+".strtolower(mex("Sconto",$pag))."</option>
<option value=\"perc_tsc\"$sel_perc_tsc>".mex("% del prezzo totale","prenota.php")."</option>
</select><br><label>
<input type=\"checkbox\" name=\"n_calcola_commissioni\" value=\"SI\"$checked><span class=\"smallfont\">".mex("Ricalcola le commissioni in base alla nuova tariffa",$pag).".
</span></labe>";
} # fine if ($priv_mod_caparra == "s")
echo "</td></tr>";
} # fine if ($priv_mod_caparra != "n")

echo "</table>
<table><tr><td style=\"height: 3px\"></td></tr></table>";
if (empty($ins_checkin) and empty($canc_checkin) and empty($ins_checkout) and empty($canc_checkout) and empty($non_mostra_tariffe) and empty($mostra_tariffe)) echo "<a name=\"costi_agg\"></a>";

unset($costo_agg_tot2);
$mostra_br = "";
$lista_idca_passa = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$dati_cap = ${"dati_cap".$id_prenota};
$costo_agg_tot = (double) 0;
$costo_escludi_perc = (double) 0;
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$idca = $dati_cap[$numca]['id'];
$numcostoaggiuntivo = "costoaggiuntivo".$idca;
$sett_costoaggiuntivo = "sett_costoaggiuntivo".$idca;
$molt_costoaggiuntivo = "molt_costoaggiuntivo".$idca;
if ($dati_cap[$numca]['tipo'] == "u") $tipo_ca = "unico";
if ($dati_cap[$numca]['tipo'] == "s") $tipo_ca = "$parola_settimanale";
$costo_agg_parziale = (double) calcola_prezzo_totale_costo($dati_cap,$numca,$d_id_data_inizio_vett[$id_prenota],$d_id_data_fine_vett[$id_prenota],$dati_cap[$numca]['settimane'],$dati_cap[$numca]['moltiplica_costo'],$d_costo_tariffa_vett[$id_prenota],$d_tariffesettimanali_vett[$id_prenota],($d_costo_tariffa_vett[$id_prenota] + $costo_agg_tot - $d_sconto_vett[$id_prenota]),$d_caparra_vett[$id_prenota],$d_num_persone_vett[$id_prenota],fixset($dati_cap[$numca]['cat_pers']),0,$costo_escludi_perc,1);
$prezzocosto_p = virgola_in_num($dati_cap[$numca]['valore'],$stile_soldi);
$costo_agg_parziale_p = virgola_in_num($costo_agg_parziale,$stile_soldi);
if ($dati_cap[$numca]['tasseperc'] and $num_id_prenota == 1) {
if ($dati_cap[$numca]['tasseperc'] == -1) $tasse_ca = (double) $costo_agg_parziale;
else {
$tasse_ca = ($costo_agg_parziale / (double) ($dati_cap[$numca]['tasseperc'] + 100)) * (double) $dati_cap[$numca]['tasseperc'];
$tasse_ca = (double) $tasse_ca / $dati_tariffe['tasse_arrotond'];
$tasse_ca = round($tasse_ca);
$tasse_ca = $tasse_ca * (double) $dati_tariffe['tasse_arrotond'];
} # fine else if ($dati_cap[$numca]['tasseperc'] == -1)
$tasse_tot = (double) $tasse_tot + $tasse_ca;
} # fine if ($dati_cap[$numca]['tasseperc'] and $num_id_prenota == 1)
if ($priv_mod_costi_agg != "n") {
$lista_idca_passa .= ",$idca";
echo "<div style=\"background-color: ".rowbgcolor().";\" class=\"modres\">";
if (!isset($pagina_gia_modificata)) {
$$numcostoaggiuntivo = "SI";
$$sett_costoaggiuntivo = $dati_cap[$numca]['settimane'];
$$molt_costoaggiuntivo = $dati_cap[$numca]['moltiplica_costo'];
} # fine if (!isset($pagina_gia_modificata))
if ($num_id_prenota == 1) $frase_id_prenota = "";
else $frase_id_prenota = " ".mex("della prenotazione",$pag)." <b>$id_prenota</b>";
if ($$numcostoaggiuntivo == "SI") $checked = " checked";
else $checked = "";
if ($priv_mod_costi_agg == "s") echo "<label><input type=\"checkbox\" name=\"$numcostoaggiuntivo\" value=\"SI\"$checked> ";
$frase_costo = mex("Costo aggiuntivo $tipo_ca",$pag)." <b>\"".$dati_cap[$numca]['nome']."\"</b>$frase_id_prenota</label>";
if ($priv_mod_costi_agg != "p") {
$frase_costo .= " (";
if ($dati_cap[$numca]['valore'] or $dati_cap[$numca]['tipo_val'] == "f") $frase_costo .= "<b>".virgola_in_num($dati_cap[$numca]['valore'],$stile_soldi)."</b> $Euro";
if ($dati_cap[$numca]['tipo_val'] != "f") {
if ($dati_cap[$numca]['valore']) $frase_costo .= " + ";
$frase_costo .= "<b>".virgola_in_num($dati_cap[$numca]['valore_perc'],$stile_soldi)."";
if ($dati_cap[$numca]['tipo_val'] == "p") $frase_costo .= "%</b> ".mex("della tariffa",$pag);
if ($dati_cap[$numca]['tipo_val'] == "q") $frase_costo .= "%</b> ".mex("della tariffa fissa",$pag);
if ($dati_cap[$numca]['tipo_val'] == "s") $frase_costo .= "%</b> ".mex("di una persona",$pag);
if ($dati_cap[$numca]['tipo_val'] == "t") $frase_costo .= "%</b> ".mex("del totale",$pag);
if ($dati_cap[$numca]['tipo_val'] == "c") $frase_costo .= "%</b> ".mex("della caparra",$pag);
if ($dati_cap[$numca]['tipo_val'] == "r") $frase_costo .= "%</b> ".mex("del resto caparra",$pag);
} # fine if ($dati_cap[$numca]['tipo_val'] != "f")
} # fine if ($priv_mod_costi_agg != "p")
echo $frase_costo;
$frase_cat_pers = "";
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num']) {
$cat_pers = $dati_cap[$numca]['cat_pers']['ord'][0];
if (!isset(${"catpers_costoaggiuntivo$idca"}) or !strcmp((string) ${"catpers_costoaggiuntivo$idca"},"")) $sel_cat_pers = "";
else $sel_cat_pers = ${"catpers_costoaggiuntivo$idca"};
if ($priv_mod_costi_agg == "s") {
$frase_cat_pers .= "<select name=\"catpers_costoaggiuntivo$idca\">";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (($num1 == $cat_pers and $dati_cap[$numca]['cat_pers'][$num1]['esist'] and !$sel_cat_pers) or ($sel_cat_pers and $sel_cat_pers == $num1)) $sel = " selected";
else $sel = "";
$frase_cat_pers .= "<option value=\"$num1\"$sel>";
if (!isset($$molt_costoaggiuntivo) or $$molt_costoaggiuntivo != "1" or $dati_cap[$numca]['associasett'] == "s") $frase_cat_pers .= $dati_cat_pers[$num1]['n_plur'];
else $frase_cat_pers .= $dati_cat_pers[$num1]['n_sing'];
$frase_cat_pers .= "</option>";
} # fine for $num1
if (!$dati_cap[$numca]['cat_pers'][$cat_pers]['esist']) {
if (!$sel_cat_pers or $sel_cat_pers == "e") $sel = " selected";
else $sel = "";
$frase_cat_pers .= "<option value=\"e\"$sel>";
if ($$molt_costoaggiuntivo != "1" or $dati_cap[$numca]['associasett'] == "s") $frase_cat_pers .= $dati_cap[$numca]['cat_pers'][0]['n_plur'];
else $frase_cat_pers .= $dati_cap[$numca]['cat_pers'][0]['n_sing'];
$frase_cat_pers .= "</option>";
} # fine if (!$dati_cap[$numca]['cat_pers'][$cat_pers]['esist'])
$frase_cat_pers .= "</select>";
} # fine if ($priv_mod_costi_agg == "s")
else {
if ($$molt_costoaggiuntivo != "1" or $dati_cap[$numca]['associasett'] == "s") $frase_cat_pers .= " <em>".$dati_cap[$numca]['cat_pers'][0]['n_plur']."</em>";
else $frase_cat_pers .= " <em>".$dati_cap[$numca]['cat_pers'][0]['n_sing']."</em>";
} # fine else if ($priv_mod_costi_agg == "s")
} # fine if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num'])
if ($dati_cap[$numca]['associasett'] != "s") {
if ($dati_cap[$numca]['tipo'] == "s") {
echo " ".mex("per",$pag)." ";
if ($priv_mod_costi_agg == "s" and $dati_cap[$numca]['numsett'] == "c") echo "<input type=\"text\" name=\"$sett_costoaggiuntivo\" size=\"3\" maxlength=\"3\" value=\"".$$sett_costoaggiuntivo."\">";
else echo $dati_cap[$numca]['settimane'];
echo " ".mex("$parola_settimane",$pag);
} # fine if ($dati_cap[$numca][tipo] == "s")
echo " ";
if ($priv_mod_costi_agg == "p") echo "(";
echo mex("moltiplicato per",$pag)." ";
if ($priv_mod_costi_agg == "s" and $dati_cap[$numca]['moltiplica'] == "c") echo "<input type=\"text\" name=\"$molt_costoaggiuntivo\" size=\"3\" maxlength=\"12\" value=\"".$$molt_costoaggiuntivo."\">";
else echo $dati_cap[$numca]['moltiplica_costo'];
echo $frase_cat_pers;
if ($priv_mod_costi_agg != "p") echo ": <b>$costo_agg_parziale_p</b> $Euro";
echo ").<br>";
} # fine if ($dati_cap[$numca][associasett] != "s")
else {
if ($priv_mod_costi_agg != "p") echo " ".mex("di base",$pag).", ".mex("totale",$pag)." <b>$costo_agg_parziale_p</b> $Euro)";
if ($frase_cat_pers) echo " ".mex("per ",$pag).$frase_cat_pers;
echo ". ".mex("$parola_Settimane",$pag);
$lista_sett_passa = "";
if (!empty(${"mostra_costo".$idca})) ${"mostra_costo_passa".$idca} = "SI";
if (!empty(${"non_mostra_costo".$idca})) ${"mostra_costo_passa".$idca} = "NO";
if (!isset(${"mostra_costo_passa".$idca}) or ${"mostra_costo_passa".$idca} != "SI") ${"mostra_costo_passa".$idca} = "NO";
if (${"mostra_costo_passa".$idca} == "NO") {
echo "<button type=\"submit\" name=\"mostra_costo".$idca."\" value=\"SI\">
<img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"".mex("mostra",$pag)." &gt;\"></button><br>";
for ($num1 = $d_id_data_inizio_vett[$id_prenota]; $num1 <= $d_id_data_fine_vett[$id_prenota]; $num1++) {
if ($priv_mod_costi_agg == "s") {
if ($dati_cap[$numca]['numsett'] == "c") {
if (!isset($pagina_gia_modificata) and str_replace(",$num1,","",$dati_cap[$numca]['settimane']) != $dati_cap[$numca]['settimane']) ${"sett".$num1."costo".$idca} = "SI";
echo "<input type=\"hidden\" name=\"sett$num1"."costo$idca\" value=\"".htmlspecialchars(fixstr(${"sett".$num1."costo".$idca}))."\">";
} # fine if ($dati_cap[$numca]['numsett'] == "c")
if ($dati_cap[$numca]['moltiplica'] == "c") {
if (!isset($pagina_gia_modificata)) {
${$molt_costoaggiuntivo."_sett".$num1} = fixset($dati_cap[$numca]['moltiplica_costo_sett'][$num1]);
if (${$molt_costoaggiuntivo."_sett".$num1} == "") ${$molt_costoaggiuntivo."_sett".$num1} = 1;
} # fine if (!isset($pagina_gia_modificata))
echo "<input type=\"hidden\" name=\"$molt_costoaggiuntivo"."_sett$num1\" value=\"".htmlspecialchars(fixstr(${$molt_costoaggiuntivo."_sett".$num1}))."\">";
} # fine if ($dati_cap[$numca]['moltiplica'] == "c")
$lista_sett_passa .= ",$num1";
} # fine if ($priv_mod_costi_agg == "s")
} # fine for $num1
} # fine if (${"mostra_costo_passa".$idca} == "NO")
else {
echo "<button type=\"submit\" name=\"non_mostra_costo".$idca."\" value=\"NO\">
<img style=\"display: block;\" src=\"./img/freccia_giu_marg.png\" alt=\"".mex("nascondi",$pag)." &gt;\">
</button><br><table>";
$colonne = 2;
$num_colonna = 1;
for ($num1 = $d_id_data_inizio_vett[$id_prenota]; $num1 <= $d_id_data_fine_vett[$id_prenota]; $num1++) {
$periodo_costo_trovato = "NO";
if ($dati_cap[$numca]['periodipermessi'] == "p") {
for ($num2 = 0 ; $num2 < count($dati_cap[$numca]['sett_periodipermessi_ini']) ; $num2++) {
if ($dati_cap[$numca]['sett_periodipermessi_ini'][$num2] <= $num1 and $dati_cap[$numca]['sett_periodipermessi_fine'][$num2] >= $num1) $periodo_costo_trovato = "SI";
} # fine for $num2
} # fine if ($dati_ca[$num_costo]['periodipermessi'] == "p")
else $periodo_costo_trovato = "SI";
if (($priv_mod_costi_agg != "s" or $dati_cap[$numca]['numsett'] != "c") and str_replace(",$num1,","",$dati_cap[$numca]['settimane']) == $dati_cap[$numca]['settimane']) $periodo_costo_trovato = "NO";
if ($periodo_costo_trovato == "SI") {
$date_sett_costo = esegui_query("select datainizio,datafine from $tableperiodi where idperiodi = '$num1'");
if ($num_colonna == 1) echo "<tr>";
echo "<td style=\"width: 50px;\"></td><td><small><label>";
if (isset(${"sett".$num1."costo".$idca}) and ${"sett".$num1."costo".$idca} == "SI") $checked = " checked";
else $checked = "";
if ($priv_mod_costi_agg == "s" and $dati_cap[$numca]['numsett'] == "c") echo "<input type=\"checkbox\" name=\"sett$num1"."costo$idca\" value=\"SI\"$checked>";
else echo "·";
echo formatta_data(risul_query($date_sett_costo,0,'datainizio'),$stile_data)." ".mex("al",$pag)." 
 ".formatta_data(risul_query($date_sett_costo,0,'datafine'),$stile_data)."</label>";
if (($priv_mod_costi_agg == "s" and $dati_cap[$numca]['moltiplica'] == "c") or $dati_cap[$numca]['moltiplica_costo_sett'][$num1] > 1) echo " x ";
if ($priv_mod_costi_agg == "s" and $dati_cap[$numca]['moltiplica'] == "c") echo "<input type=\"text\" name=\"$molt_costoaggiuntivo"."_sett$num1\" size=\"3\" maxlength=\"12\" value=\"".${$molt_costoaggiuntivo."_sett".$num1}."\">";
elseif ($dati_cap[$numca]['moltiplica_costo_sett'][$num1] > 1) echo $dati_cap[$numca]['moltiplica_costo_sett'][$num1];
echo "</small></td>";
if ($num_colonna == $colonne) {
$num_colonna = 0;
echo "</tr>";
} # fine if ($num_colonna == $colonne)
$num_colonna++;
$lista_sett_passa .= ",$num1";
} # fine if ($periodo_costo_trovato == "SI")
} # fine for $num1
echo "</table>";
} # fine else if (${"mostra_costo_passa".$idca} == "NO")
if ($lista_sett_passa) echo "<input type=\"hidden\" name=\"lista_sett_passa$idca\" value=\"$lista_sett_passa\">";
echo "<input type=\"hidden\" name=\"mostra_costo_passa".$idca."\" value=\"".${"mostra_costo_passa".$idca}."\">";
} # fine else if ($dati_cap[$numca][associasett] != "s")
echo "</div>";
} # fine ($priv_mod_costi_agg != "n")
$costo_agg_tot = (double) $costo_agg_tot + $costo_agg_parziale;
if ($dati_cap[$numca]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + $costo_agg_parziale;
$nome_costo_stampa[$numca] = $dati_cap[$numca]['nome'];
$val_costo_stampa[$numca] = $costo_agg_parziale;
$tasseperc_costo_stampa[$numca] = $dati_cap[$numca]['tasseperc'];
$maxmolt_costo_stampa[$numca] = $dati_cap[$numca]['moltiplica_costo'];
$valgiornmax_costo_stampa[$numca] = $prezzi_giorn_costo;
if ($dati_cap[$numca]['tipo'] == "s") {
if ($dati_cap[$numca]['associasett'] == "s" and !$dati_cap[$numca]['settimane']) $giorni_costo_stampa[$numca] = ",";
else $giorni_costo_stampa[$numca] = $dati_cap[$numca]['settimane'];
} # fine if ($dati_cap[$numca]['tipo'] == "s")
else $giorni_costo_stampa[$numca] = "";
if ($dati_cap[$numca]['letto'] == "s" and $dati_cat_pers['num']) $catpers_costo_stampa[$numca] = ($dati_cap[$numca]['cat_pers']['ord'][0] + 1);
else $catpers_costo_stampa[$numca] = "";
$datains_costo_stampa[$numca] = substr($dati_cap[$numca]['datainserimento'],0,10);
$utenteins_costo_stampa[$numca] = $dati_cap[$numca]['utente_inserimento'];
} # fine for $numca
if ($dati_cap['num'] > 0) $mostra_br = "SI";
if ($num_idpr == 0) $costo_agg_tot2 = $costo_agg_tot;
elseif ($costo_agg_tot2 != $costo_agg_tot) $costo_agg_tot2 = "~~~~";
} # fine for $num_idpr
if ($lista_idca_passa) echo "<input type=\"hidden\" name=\"lista_idca_passa\" value=\"$lista_idca_passa\">";
$costo_agg_tot = $costo_agg_tot2;

echo "<div class=\"modres\">";
if ($mostra_conferma == "SI") {
$d_confermato = substr($d_conferma,0,1);
if ($d_confermato == "S") $checked = "checked";
else {
$d_confermato = "N";
$checked = "";
} # fine else if ($d_confermato == "S")
if (isset($pagina_gia_modificata)) {
if (isset($n_confermato) and $n_confermato == "S") $checked = "checked";
else $checked = "";
} # fine if (isset($pagina_gia_modificata))
if ($priv_canc_prenota_conf != "s" and $d_confermato == "S") $priv_mod_conf = "n";
else $priv_mod_conf = $priv_mod_pagato;
echo "<div style=\"background-color: ".rowbgcolor().";\">";
if ($mostra_br == "SI") {
echo "<br>";
$mostra_br = "";
} # fine if ($mostra_br == "SI")
if ($priv_mod_conf != "n" and $priv_mod_conf != "v") {
if ($d_conferma == "~~~~") echo "<b>~</b> ";
else echo "<label><input type=\"checkbox\" name=\"n_confermato\" value=\"S\" $checked> ";
} # fine if ($priv_mod_conf != "n" and $priv_mod_conf != "v")
if (($priv_mod_conf != "n" and $priv_mod_conf != "v") or $checked) echo mex("Prenotazione confermata",$pag).".<br>";
else echo mex("Prenotazione non confermata",$pag).".<br>";
if ($priv_mod_conf != "n" and $priv_mod_conf != "v" and $d_conferma != "~~~~") echo "</label>";
echo "<br></div>";
} # fine if ($mostra_conferma == "SI")
else $n_confermato = "S";
if ($mostra_br == "SI") echo "<br>";

if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
$d_da_pagare_p = "~~~~";
if (!strcmp((string) $d_pagato,"~~~~")) $d_pagato_p = "~~~~";
else $d_pagato_p = virgola_in_num($d_pagato,$stile_soldi);
$costo_tot_valuta_p = "";
if (strcmp((string) $d_costo_tariffa,"~~~~") and strcmp((string) $costo_agg_tot,"~~~~") and strcmp((string) $d_sconto,"~~~~")) {
settype($d_costo_tariffa,'double');
settype($costo_agg_tot,'double');
settype($d_sconto,'double');
$d_costo_tot = round(($d_costo_tariffa + $costo_agg_tot - $d_sconto),2);
settype($d_costo_tot,'double');
if (strcmp((string) $d_pagato,"~~~~")) {
settype($d_pagato,'double');
$d_da_pagare = $d_costo_tot - $d_pagato;
$d_da_pagare = round(($d_costo_tot - $d_pagato),2);
settype($d_da_pagare,'double');
$d_da_pagare_p = virgola_in_num($d_da_pagare,$stile_soldi);
} # fine if (strcmp((string) $d_pagato,"~~~~"))
$d_costo_tot_p = virgola_in_num($d_costo_tot,$stile_soldi);
if (strcmp((string) $d_valu_tariffa,"")) {
$tariffa_sconto_valuta = converti_valuta(($d_costo_tariffa - $d_sconto),$d_cambio_tariffa,$d_arrotond_tariffa);
if (!strcmp((string) $altre_valute['id'][$d_valu_tariffa],"")) $costi_agg_valuta = converti_valuta($costo_agg_tot,$d_cambio_tariffa,$d_arrotond_tariffa);
else $costi_agg_valuta = converti_valuta($costo_agg_tot,$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['cambio'],$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['arrotond']);
$costo_tot_valuta = round(($tariffa_sconto_valuta + $costi_agg_valuta),2);
$costo_tot_valuta_p .= " = <em>".virgola_in_num($costo_tot_valuta,$stile_soldi)." <b>$d_valu_tariffa</b></em>";
if (!$tasse_tot and strcmp((string) $altre_valute['id'][$d_valu_tariffa],"")) {
$costo_tot_valuta_corr = converti_valuta($d_costo_tot,$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['cambio'],$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['arrotond']);
if ((double) $costo_tot_valuta != (double) $costo_tot_valuta_corr) {
$costo_tot_valuta_p .= " <small>(".mex("Al cambio attuale",$pag).": <em>".virgola_in_num($costo_tot_valuta_corr,$stile_soldi)." $d_valu_tariffa)</small></em>";
} # fine if ((double) $costo_tot_valuta != (double) $costo_tot_valuta_corr)
} # fine if (!$tasse_tot and strcmp((string) $altre_valute['id'][$d_valu_tariffa],""))
} # fine if (strcmp((string) $d_valu_tariffa,""))
} # fine if (strcmp((string) $d_costo_tariffa,"~~~~") and...
else $d_costo_tot_p = "~~~~";
echo "<div style=\"line-height: 1.4; padding: 2px 0 0 2px;\">";
echo mex("Totale da pagare",$pag).": <b$stilebarrato>$d_costo_tot_p</b> $Euro$costo_tot_valuta_p";
if ($tasse_tot) echo " <small>(".mex("tasse",$pag)." ".virgola_in_num($tasse_tot,$stile_soldi)." $Euro, ".mex("resto",$pag)." ".virgola_in_num(($d_costo_tot - $tasse_tot),$stile_soldi)." $Euro)</small>";
echo "<br>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td>
".mex("Pagato",$pag).": <b>$d_pagato_p</b> $Euro</td>";
$vedi_tab_pagamenti = "NO";
$num_pagamenti = 0;
$data_paga = array();
$data_trans = array();
$utente_paga = array();
$metodo_paga = array();
$id_paga = array();
$note_paga = array();
$saldo_paga = array();
$valuta_paga = array();
$tasso_cambio_paga = array();
$saldo_valuta_paga = array();
$righe_pagamenti = "";
if ($priv_vedi_tab_costi != "n" and $num_id_prenota == 1) {
if ($id_anni_prec) {
foreach ($id_anni_prec_vett as $anno_prec_paga => $id_anno_prec) {
$pagamenti = esegui_query("select * from $PHPR_TAB_PRE"."soldi$anno_prec_paga where saldo_prenota is not NULL and motivazione $LIKE '%;$id_anno_prec' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num1 = 0 ; $num1 < $num_pagamenti2 ; $num1++) {
$data_paga[$num_pagamenti] = substr(risul_query($pagamenti,$num1,'data_inserimento'),0,10);
$data_trans[$num_pagamenti] = substr(risul_query($pagamenti,$num1,'data_transazione'),0,10);
$utente_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'utente_inserimento');
$metodo_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'metodo_pagamento');
$id_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'id_pagamento');
$note_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'note');
$saldo_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'saldo_prenota');
$valuta_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'valuta');
$saldo_valuta_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'saldo_valuta');
$num_pagamenti++;
} # fine for $num1
} # fine foreach ($id_anni_prec_vett as $anno_prec_paga => $id_anno_prec)
} # fine if ($id_anni_prec)
$pagamenti = esegui_query("select * from $tablesoldi where saldo_prenota is not NULL and motivazione $LIKE '%;$id_prenota' order by data_inserimento");
$num_pagamenti2 = numlin_query($pagamenti);
for ($num1 = 0 ; $num1 < $num_pagamenti2 ; $num1++) {
$data_paga[$num_pagamenti] = substr((string) risul_query($pagamenti,$num1,'data_inserimento'),0,10);
$data_trans[$num_pagamenti] = substr((string) risul_query($pagamenti,$num1,'data_transazione'),0,10);
$utente_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'utente_inserimento');
$metodo_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'metodo_pagamento');
$id_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'id_pagamento');
$note_paga[$num_pagamenti] = (string) risul_query($pagamenti,$num1,'note');
$saldo_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'saldo_prenota');
$valuta_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'valuta');
$saldo_valuta_paga[$num_pagamenti] = risul_query($pagamenti,$num1,'saldo_valuta');
$num_pagamenti++;
} # fine for $num1
if ($num_pagamenti >= 1) {
$col_met = 0;
$col_note = 0;
for ($num1 = 0 ; $num1 < $num_pagamenti ; $num1++) {
if ($metodo_paga[$num1]) $col_met = 1;
if ($note_paga[$num1]) $col_note = 1;
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_pagamenti ; $num1++) {
$saldo_paga_vedi = punti_in_num($saldo_paga[$num1])."&nbsp;$Euro";
if (substr($saldo_paga[$num1],0,1) != "-") {
#$saldo_paga[$num1] = "+".$saldo_paga[$num1];
$saldo_paga_vedi = "+$saldo_paga_vedi";
} # fine if (substr($saldo_paga[$num1],0,1) != "-")
$data_paga_f = formatta_data($data_paga[$num1]);
if ($data_trans[$num1] and $data_trans[$num1] != $data_paga[$num1]) $data_paga_f .= " <small>(".formatta_data($data_trans[$num1]).")</small>";
if (!$metodo_paga[$num1]) $metodo_paga_v = "&nbsp;";
else {
$metodo_paga_v = $metodo_paga[$num1];
if ($id_paga[$num1]) $metodo_paga_v .= " ".$id_paga[$num1];
if (strlen($metodo_paga_v) > 40) $metodo_paga_v = "<small><small>$metodo_paga_v</small></small>";
elseif (strlen($metodo_paga_v) > 20) $metodo_paga_v = "<small>$metodo_paga_v</small>";
} # fine else if (!$metodo_paga[$num1])
if (!$note_paga[$num1]) $note_paga_v = "&nbsp;";
else {
$note_paga_v = $note_paga[$num1];
if (strlen($note_paga_v) > 40) $note_paga_v = "<small><small>$note_paga_v</small></small>";
elseif (strlen($note_paga_v) > 20) $note_paga_v = "<small>$note_paga_v</small>";
} # fine else if (!$note_paga[$num1])
if (empty($nomi_utenti[$utente_paga[$num1]])) {
$n_ut_paga = esegui_query("select nome_utente from $tableutenti where idutenti = '".$utente_paga[$num1]."'");
$nomi_utenti[$utente_paga[$num1]] = risul_query($n_ut_paga,0,'nome_utente');
} # fine if (empty($nomi_utenti[$utente_paga[$num1]]))
if ($valuta_paga[$num1]) {
$valuta = explode(">",$valuta_paga[$num1]);
$valuta_paga[$num1] = $valuta[0];
$tasso_cambio_paga[$num1] = $valuta[1];
$saldo_valuta_vedi = punti_in_num($saldo_valuta_paga[$num1]);
if (substr($saldo_valuta_paga[$num1],0,1) != "-") {
#$saldo_valuta_paga[$num1] = "+".$saldo_valuta_paga[$num1];
$saldo_valuta_vedi = "+$saldo_valuta_vedi";
} # fine if (substr($saldo_valuta_paga[$num1],0,1) != "-")
$saldo_paga_vedi .= "<small> ($saldo_valuta_vedi&nbsp;".$valuta[0].")</small>";
} # fine if ($valuta_paga[$num1])
$righe_pagamenti .= "<tr><td>$data_paga_f</td><td>$saldo_paga_vedi</td>";
if ($col_met) $righe_pagamenti .= "<td>$metodo_paga_v</td>";
if ($col_note) $righe_pagamenti .= "<td>$note_paga_v</td>";
$righe_pagamenti .= "<td>".$nomi_utenti[$utente_paga[$num1]]."</td></tr>";
} # fine for $num1
$righe_pagamenti = "<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\" style=\"text-align: center;\">$righe_pagamenti</table>";
if (!empty($mostra_paga)) $mosta_paga_passa = "SI";
if (!empty($non_mostra_paga)) $mosta_paga_passa = "NO";
if (!isset($mosta_paga_passa) or $mosta_paga_passa != "SI") $mosta_paga_passa = "NO";
echo "<td>&nbsp;";
if ($mosta_paga_passa == "NO") {
echo "<button type=\"submit\" id=\"bott_paga\" name=\"mostra_paga\" value=\"SI\" onclick=\"return apri_vis('bott_paga','tab_paga',testo_paga);\">
<img style=\"display: block;\" src=\"./img/freccia_destra_marg.png\" alt=\"".mex("mostra",$pag)." &gt;\"></button>";
} # fine if ($mosta_paga_passa == "NO")
else {
$vedi_tab_pagamenti = "SI";
echo "<button type=\"submit\" id=\"bott_paga\" name=\"non_mostra_paga\" value=\"NO\">
<img style=\"display: block;\" src=\"./img/freccia_giu_marg.png\" alt=\"".mex("nascondi",$pag)." &gt;\">
</button>";
} # fine else if ($mosta_paga_passa == "NO")
echo "<input type=\"hidden\" name=\"mosta_paga_passa\" value=\"$mosta_paga_passa\"></td>";
} # fine if ($num_pagamenti >= 1)
} # fine if ($priv_vedi_tab_costi != "n" and...
if ($priv_mod_pagato == "s") {
echo "<td style=\"width: 35px;\"></td><td>
<select name=\"modo_aggiorna_pagato\">";
if (!isset($modo_aggiorna_pagato)) $modo_aggiorna_pagato = "";
if ($modo_aggiorna_pagato == "cambia" or $modo_aggiorna_pagato == "") $sel = " selected";
else $sel = "";
echo "<option value=\"cambia\"$sel>".mex("cambia in",$pag)."</option>";
if ($modo_aggiorna_pagato == "aggiungi") $sel = " selected";
else $sel = "";
echo "<option value=\"aggiungi\"$sel>".mex("aggiungi",$pag)."</option>";
if ($modo_aggiorna_pagato == "tutto") $sel = " selected";
else $sel = "";
echo "<option value=\"tutto\"$sel>".mex("pagato tutto",$pag)."</option>";
if ($modo_aggiorna_pagato == "caparra") $sel = " selected";
else $sel = "";
echo "<option value=\"caparra\"$sel>".mex("caparra ",$pag)."</option>
</select>
 <input type=\"text\" name=\"n_pagato\" value=\"".htmlspecialchars(fixstr($n_pagato))."\" size=\"8\"> ";
if (!$altre_valute['num']) echo $Euro;
else {
if (!isset($valuta_aggiorna_pagato) or !strcmp((string) $valuta_aggiorna_pagato,"")) $sel = " selected";
else $sel = "";
echo "<select name=\"valuta_aggiorna_pagato\">
<option value=\"\"$sel>$Euro</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
if (isset($valuta_aggiorna_pagato) and $valuta_aggiorna_pagato == $altre_valute[$num1]['nome']) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($altre_valute[$num1]['nome'])."\"$sel>".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
echo "</select>";
} # fine else if (!$altre_valute['num'])
echo "</td>";
} # fine if ($priv_mod_pagato == "s")
echo "</tr></table>";
if ($vedi_tab_pagamenti == "SI") echo "<div id=\"tab_paga\" style=\"visibility: visible;\">$righe_pagamenti";
else echo "<div id=\"tab_paga\" style=\"visibility: hidden;\">";
echo "</div>
<script type=\"text/javascript\">
<!--
var testo_paga = '".str_replace("'","\\'",str_replace("\n","\\\n",str_replace("/","\\/",$righe_pagamenti)))."';
-->
</script>
".mex("Ancora da pagare",$pag).": <b$stilebarrato>$d_da_pagare_p</b> $Euro";
if (strcmp((string) $d_valu_tariffa,"") and strcmp((string) $d_da_pagare_p,"~~~~") and $d_da_pagare) {
$resto_tarsco_valuta = round(((double) $d_costo_tariffa - (double) $d_sconto  - (double) $d_pagato),2);
if ($resto_tarsco_valuta >= 0) {
$dapagare_tarsco_valuta = converti_valuta($resto_tarsco_valuta,$d_cambio_tariffa,$d_arrotond_tariffa);
$dapagare_cosagg_valuta = $costo_agg_tot;
} # fine if ($resto_tarsco_valuta >= 0)
else {
$dapagare_tarsco_valuta = 0;
$dapagare_cosagg_valuta = round(((double) $costo_agg_tot + (double) $resto_tarsco_valuta),2);
} # fine else if ($resto_tarsco_valuta >= 0)
if (!strcmp((string) $altre_valute['id'][$d_valu_tariffa],"")) $dapagare_cosagg_valuta = converti_valuta($dapagare_cosagg_valuta,$d_cambio_tariffa,$d_arrotond_tariffa);
else $dapagare_cosagg_valuta = converti_valuta($dapagare_cosagg_valuta,$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['cambio'],$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['arrotond']);
$da_pagare_valuta = round(($dapagare_tarsco_valuta + $dapagare_cosagg_valuta),2);
echo " = <em>".virgola_in_num($da_pagare_valuta,$stile_soldi)." <b>$d_valu_tariffa</b></em>";
if (strcmp((string) $altre_valute['id'][$d_valu_tariffa],"")) {
$da_pagare_valuta_corr = converti_valuta($d_da_pagare,$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['cambio'],$altre_valute[$altre_valute['id'][$d_valu_tariffa]]['arrotond']);
if ($da_pagare_valuta_corr and (double) $da_pagare_valuta != (double) $da_pagare_valuta_corr) echo " <small>(".mex("Al cambio attuale",$pag).": <em>".virgola_in_num($da_pagare_valuta_corr,$stile_soldi)." $d_valu_tariffa)</small></em>";
} # fine if (strcmp((string) $altre_valute['id'][$d_valu_tariffa],""))
} # fine if (strcmp((string) $d_valu_tariffa,"") and strcmp((string) $d_da_pagare_p,"~~~~") and $d_da_pagare)
echo "</div>";
} # fine if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i")


echo "</div></div><div class=\"clearboth\"></div><br>";

$numcostiagg = 0;
if ($priv_mod_costi_agg == "s" and (!defined("C_MASSIMO_NUM_COSTI_AGG_IN_PRENOTA") or C_MASSIMO_NUM_COSTI_AGG_IN_PRENOTA > $dati_cap['num'])) {

if (isset($costofinale0) and $costofinale0 == "SI") $checked = " checked";
else $checked = "";
if (!isset($pagina_gia_modificata)) {
$nomecostofinale0 = mex("straordinario",$pag);
$nummoltiplica_cf0 = 1;
} # fine if (!isset($pagina_gia_modificata))
echo "<label><input type=\"checkbox\" id=\"nca_0\" name=\"costofinale0\" value=\"SI\"$checked>
".mex("Nuovo costo aggiuntivo unico",$pag)." \"
</label><input type=\"text\" name=\"nomecostofinale0\" size=\"13\" value=\"$nomecostofinale0\" onclick=\"document.getElementById('nca_0').checked='1';\">
<label for=\"nca_0\">\" ".mex("di",$pag)." </label>
<input type=\"text\" name=\"val_costofinale0\" value=\"".htmlspecialchars(fixstr($val_costofinale0))."\" size=\"7\" onclick=\"document.getElementById('nca_0').checked='1';\">
</label><label for=\"nca_0\"> $Euro, ".mex("da moltiplicare per",$pag).":</label>
<input type=\"text\" name=\"nummoltiplica_cf0\" size=\"3\" maxlength=\"12\" value=\"$nummoltiplica_cf0\" onclick=\"document.getElementById('nca_0').checked='1';\">";
if (isset($letto_agg0) and $letto_agg0 == "s") $checked = " checked";
else $checked = "";
echo " (<label><input id=\"lca_0\" type=\"checkbox\" name=\"letto_agg0\" value=\"s\"$checked>
".mex("letto",$pag)."</label>";
if ($dati_cat_pers['num']) {
echo " ".mex("per ",$pag)."<select name=\"catpers_ca0\" onclick=\"document.getElementById('lca_0').checked='1';\">";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (isset(${"catpers_ca0"}) and $num1 == ${"catpers_ca0"}) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>".$dati_cat_pers[$num1]['n_plur']."</option>";
} # for $num1
echo "</select>";
} # fine if ($dati_cat_pers['num'])
echo ").<br>";

unset($costi_agg_raggr);
$chiedi_combina = array();
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($attiva_costi_agg_consentiti == "n" or (isset($costi_agg_consentiti_vett[$dati_ca[$num1]['id']]) and $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI")) {
if ($dati_ca[$num1]['combina'] != "s") {
$testo_costo = "";
if ($dati_ca[$num1]['raggruppa'] != "s") {
$numcostiagg++;
$numcostiagg_v = $numcostiagg;
$nome_costo = $dati_ca[$num1]['nome'];
$id_costo = $dati_ca[$num1]['id'];
} # fine if ($dati_ca[$num1]['raggruppa'] != "s")
else {
$numcostiagg_v = "[nca]";
$nome_costo = "[nome]";
$id_costo = "[id]";
} # fine else if ($dati_ca[$num1]['raggruppa'] != "s")
$costoagg = "costoagg".$numcostiagg_v;
$numsettimane = "numsettimane".$numcostiagg_v;
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg_v;
if (!isset($pagina_gia_modificata)) {
$$numsettimane = 0;
$$nummoltiplica_ca = 1;
} # fine if (!isset($pagina_gia_modificata))
if ($dati_ca[$num1]['tipo'] == "u") $tipo_ca = "unico";
if ($dati_ca[$num1]['tipo'] == "s") $tipo_ca = "$parola_settimanale";
if (isset($$costoagg) and $$costoagg == "SI") $checked = " checked";
else $checked = "";
$testo_costo .= "<input type=\"hidden\" name=\"idcostoagg$numcostiagg_v\" value=\"$id_costo\">
<label><input type=\"checkbox\" id=\"nca_$numcostiagg_v\" name=\"$costoagg\" value=\"SI\"$checked>
".mex("Nuovo costo aggiuntivo $tipo_ca",$pag)." \"<em>$nome_costo</em>\"";
if ($dati_ca[$num1]['numsett'] == "c" and $dati_ca[$num1]['associasett'] == "n") {
$testo_costo .= ", ".mex("nº di $parola_settimane da applicare",$pag).":</label>
<input type=\"text\" name=\"$numsettimane\" size=\"3\" maxlength=\"3\" value=\"".$$numsettimane."\"
 onclick=\"document.getElementById('nca_$numcostiagg_v').checked='1';\"><label for=\"nca_$numcostiagg_v\">";
} # fine if ($dati_ca[$num1]['numsett'] == "c" and...
if ($dati_ca[$num1]['moltiplica'] == "c") {
$testo_costo .= ", ".mex("da moltiplicare per",$pag).":</label>";
if (!isset($dati_ca[$num1]['molt_max']) or $dati_ca[$num1]['molt_max'] != "n") $testo_costo .= "<input type=\"text\" name=\"$nummoltiplica_ca\" size=\"3\" maxlength=\"12\" value=\"".htmlspecialchars(fixstr($$nummoltiplica_ca))."\"
 onclick=\"document.getElementById('nca_$numcostiagg_v').checked='1';\">";
else {
$testo_costo .= "<select name=\"$nummoltiplica_ca\" onclick=\"document.getElementById('nca_$numcostiagg_v').checked='1';\">";
for ($num2 = 1 ; $num2 <= $dati_ca[$num1]['molt_max_num'] ; $num2++) {
if (isset($valnummoltiplica_ca) and $num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
if ($numcostiagg_v != "[nca]") $id_opt = "";
else $id_opt = " id=\"nm_ca$numcostiagg_v"."_opt$num2\"";
$testo_costo .= "<option$id_opt value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$testo_costo .= "</select>";
} # fine else if ($dati_ca[$num1]['molt_max'] != "n")
$testo_costo .= "<label for=\"nca_$numcostiagg_v\">";
} # fine if ($dati_ca[$num1]['moltiplica'] == "c")
if ($dati_ca[$num1]['letto'] == "s" and $dati_cat_pers['num']) {
$testo_costo .= " (</label><select name=\"catpers_ca$numcostiagg_v\" onclick=\"document.getElementById('nca_$numcostiagg_v').checked='1';\">";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if (isset(${"catpers_ca$numcostiagg_v"}) and $num2 == ${"catpers_ca$numcostiagg_v"}) $sel = " selected";
else $sel = "";
if ($numcostiagg_v != "[nca]") $id_opt = "";
else $id_opt = " id=\"cp_ca$numcostiagg_v"."_opt$num2\"";
$testo_costo .= "<option$id_opt value=\"$num2\"$sel>";
if ($dati_ca[$num1]['moltiplica'] != "1") $testo_costo .= $dati_cat_pers[$num2]['n_plur'];
else $testo_costo .= $dati_cat_pers[$num2]['n_sing'];
$testo_costo .= "</option>";
} # for $num2
$testo_costo .= "</select><label for=\"nca_$numcostiagg_v\">)";
} # fine if ($dati_ca[$num1]['letto'] == "s" and $dati_cat_pers['num'])
$testo_costo .= ".</label><br>";
} # fine if ($dati_ca[$num1]['combina'] != "s")
else {
$testo_costo = "combina";
$categ = $dati_ca[$num1]['categoria'];
if ($dati_ca[$num1]['numsett'] == "c" and $dati_ca[$num1]['associasett'] == "n") $chiedi_combina[$categ]['sett'] = 1;
if ($dati_ca[$num1]['moltiplica'] == "c") {
if (empty($chiedi_combina[$categ]['molt'])) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$num1]['molt_max_num'];
if ($dati_ca[$num1]['molt_max'] != "n") $chiedi_combina[$categ]['molt_max_num'] = 0;
elseif ($chiedi_combina[$categ]['molt_max_num'] and $chiedi_combina[$categ]['molt_max_num'] < $dati_ca[$num1]['molt_max_num']) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$num1]['molt_max_num'];
$chiedi_combina[$categ]['molt'] = 1;
} # fine if ($dati_ca[$num1]['moltiplica'] == "c")
if ($dati_ca[$num1]['letto'] == "s") $chiedi_combina[$categ]['letto'] = 1;
} # fine else if ($dati_ca[$num1]['combina'] != "s")
if ($dati_ca[$num1]['raggruppa'] != "s") echo $testo_costo;
else {
if (!isset($costi_agg_raggr[$testo_costo."<>".$dati_ca[$num1]['categoria']])) $costi_agg_raggr[$testo_costo."<>".$dati_ca[$num1]['categoria']] = "";
$costi_agg_raggr[$testo_costo."<>".$dati_ca[$num1]['categoria']] .= $dati_ca[$num1]['id'].",";
} # fine else if ($dati_ca[$num1]['raggruppa'] != "s")
} # fine if ($attiva_costi_agg_consentiti == "n" or...
} # fine for $num1

if (@is_array($costi_agg_raggr)) {
foreach ($costi_agg_raggr as $testo_costo => $id_costi) {
$testo_costo = explode("<>",$testo_costo);
$numcostiagg++;
$id_costi_vett = explode(",",substr($id_costi,0,-1));
$num_id_costi = count($id_costi_vett);
if ($testo_costo[0] != "combina") {
$testo_costo = $testo_costo[0];
if (isset(${"costoagg".$numcostiagg}) and ${"costoagg".$numcostiagg} == "SI") $testo_costo = str_replace("type=\"checkbox\"","type=\"checkbox\" checked",$testo_costo);
if (!empty(${"nummoltiplica_ca".$numcostiagg})) $testo_costo = str_replace("name=\"nummoltiplica_ca[nca]\" value=\"1\"","name=\"nummoltiplica_ca[nca]\" value=\"".${"nummoltiplica_ca".$numcostiagg}."\"",$testo_costo);
if (isset(${"nummoltiplica_ca".$numcostiagg}) and strcmp((string) ${"nummoltiplica_ca".$numcostiagg},"")) $testo_costo = str_replace(" id=\"nm_ca[nca]"."_opt".${"nummoltiplica_ca".$numcostiagg}."\" value=\"".${"nummoltiplica_ca".$numcostiagg}."\""," id=\"nm_ca[nca]"."_opt".${"nummoltiplica_ca".$numcostiagg}."\" value=\"".${"nummoltiplica_ca".$numcostiagg}."\" selected",$testo_costo);
if (!empty(${"numsettimane".$numcostiagg})) $testo_costo = str_replace("name=\"numsettimane[nca]\" value=\"0\"","name=\"numsettimane[nca]\" value=\"".${"numsettimane".$numcostiagg}."\"",$testo_costo);
if (isset(${"catpers_ca".$numcostiagg}) and strcmp((string) ${"catpers_ca".$numcostiagg},"")) $testo_costo = str_replace(" id=\"cp_ca[nca]"."_opt".${"catpers_ca".$numcostiagg}."\" value=\"".${"catpers_ca".$numcostiagg}."\""," id=\"cp_ca[nca]"."_opt".${"catpers_ca".$numcostiagg}."\" value=\"".${"catpers_ca".$numcostiagg}."\" selected",$testo_costo);
$testo_costo = str_replace("[nca]\"","$numcostiagg\"",$testo_costo);
$testo_costo = str_replace("[nca]'",$numcostiagg."'",$testo_costo);
$testo_costo = str_replace("[nca]_",$numcostiagg."_",$testo_costo);
if ($num_id_costi == 1) {
$num_costo = $dati_ca['id'][$id_costi_vett[0]];
$testo_costo = str_replace(" \"<em>[nome]</em>\""," \"<em>".$dati_ca[$num_costo]['nome']."</em>\"",$testo_costo);
$testo_costo = str_replace(" value=\"[id]\""," value=\"".$id_costi_vett[0]."\"",$testo_costo);
} # fine (count($id_costi_vett) == 1)
else {
$sel_costi = "</label><select name=\"idcostoagg$numcostiagg\" onclick=\"document.getElementById('nca_$numcostiagg').checked='1';\">";
for ($num1 = 0 ; $num1 < $num_id_costi ; $num1++) {
$num_costo = $dati_ca['id'][$id_costi_vett[$num1]];
if (isset(${"idcostoagg".$numcostiagg}) and ${"idcostoagg".$numcostiagg} == $id_costi_vett[$num1]) $sel = " selected";
else $sel = "";
$sel_costi .= "<option value=\"".$id_costi_vett[$num1]."\"$sel>".$dati_ca[$num_costo]['nome']."</option>";
} # fine for $num1
$sel_costi .= "</select><label for=\"nca_$numcostiagg\">";
$testo_costo = str_replace(" \"<em>[nome]</em>\""," \"$sel_costi\"",$testo_costo);
$testo_costo = str_replace("<input type=\"hidden\" name=\"idcostoagg$numcostiagg\" value=\"[id]\">","",$testo_costo);
} # fine (count($id_costi_vett) == 1)
echo $testo_costo;
} # fine if ($testo_costo[0] != "combina")
else {
$categoria = $testo_costo[1];
if (isset(${"costoagg".$numcostiagg}) and ${"costoagg".$numcostiagg} == "SI") $checked = " checked";
else $checked = "";
echo "<input type=\"hidden\" name=\"idcostoagg$numcostiagg\" value=\"c".htmlspecialchars($categoria)."\">
<label><input type=\"checkbox\" id=\"nca_$numcostiagg\" name=\"costoagg$numcostiagg\" value=\"SI\"$checked>
".mex("Nuovo costo aggiuntivo",$pag)." \"<em>".htmlspecialchars($categoria)."</em>\"";
if (!empty($chiedi_combina[$categoria]['sett'])) {
$numsettimane = "numsettimane".$numcostiagg;
if ($$numsettimane) $valnumsettimane = $$numsettimane;
else $valnumsettimane = 0;
echo ", ".mex("nº di $parola_settimane da applicare",$pag).":</label>
<input type=\"text\" name=\"$numsettimane\" value=\"$valnumsettimane\" size=\"3\" maxlength=\"3\"
 onclick=\"document.getElementById('nca_$numcostiagg').checked='1';\"><label for=\"nca_$numcostiagg\">";
} # fine if (!empty($chiedi_combina[$categoria]['sett']))
if (!empty($chiedi_combina[$categoria]['molt'])) {
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg;
if (!empty($$nummoltiplica_ca)) $valnummoltiplica_ca = $$nummoltiplica_ca;
else $valnummoltiplica_ca = 1;
echo ", ".mex("da moltiplicare per",$pag).":</label>";
if (!$chiedi_combina[$categoria]['molt_max_num']) echo "<input type=\"text\" name=\"$nummoltiplica_ca\" value=\"$valnummoltiplica_ca\" size=\"3\" maxlength=\"12\"
 onclick=\"document.getElementById('nca_$numcostiagg').checked='1';\">";
else {
echo "<select name=\"$nummoltiplica_ca\" onclick=\"document.getElementById('nca_$numcostiagg').checked='1';\">";
for ($num2 = 1 ; $num2 <= $chiedi_combina[$categoria]['molt_max_num'] ; $num2++) {
if ($num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
echo "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
echo "</select>";
} # fine else if ($dati_ca[$num1]['molt_max'] != "n")
echo "<label for=\"nca_$numcostiagg\">";
} # fine if (!empty($chiedi_combina[$categoria]['molt']))
if (!empty($chiedi_combina[$categoria]['letto']) and !empty($dati_cat_pers['num'])) {
echo " (</label><select name=\"catpers_ca$numcostiagg\" onclick=\"document.getElementById('nca_$numcostiagg').checked='1';\">";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($num2 == ${"catpers_ca$numcostiagg"}) $sel = " selected";
else $sel = "";
echo "<option value=\"$num2\"$sel>".$dati_cat_pers[$num2]['n_plur']."</option>";
} # for $num2
echo "</select><label for=\"nca_$numcostiagg\">)";
} # fine if (!empty($chiedi_combina[$categoria]['letto']) and !empty($dati_cat_pers['num']))
echo ".</label><br>";
} # fine else if ($testo_costo[0] != "combina")
} # fine foreach ($costi_agg_raggr as $testo_costo => $id_costi)
} # fine if (@is_array($costi_agg_raggr))

} # fine if ($priv_mod_costi_agg == "s" and...


if ($num_id_prenota == 1) {
$frase_modifica_prenota = mex("Modifica la prenotazione",$pag)." $id_prenota";
$mr_class = "mres";
$frase_cancella_prenota = mex("Cancella la prenotazione",$pag)." $id_prenota";
$frase_copia_prenota = mex("Inserisci una prenotazione uguale",$pag);
$cr_class = "cres";
} # fine if ($num_id_prenota == 1)
else {
$frase_modifica_prenota = mex("Modifica le prenotazioni",$pag);
$mr_class = "mress";
$frase_cancella_prenota = mex("Cancella le prenotazioni",$pag);
$frase_copia_prenota = mex("Inserisci prenotazioni uguali",$pag);
$cr_class = "cress";
} # fine else if ($num_id_prenota == 1)

$dcognome = str_replace("\"","&quot;",$dcognome);
$dcitta = str_replace("\"","&quot;",(string) $dcitta);
$dnazione = str_replace("\"","&quot;",(string) $dnazione);
$dnome = str_replace("\"","&quot;",(string) $dnome);
$dsoprannome = str_replace("\"","&quot;",(string) $dsoprannome);
$dvia = str_replace("\"","&quot;",(string) $dvia);
$select_costo_stampa = "";

echo "<div style=\"text-align: center;\">
<input type=\"hidden\" name=\"numcostiagg\" value=\"$numcostiagg\">

<input type=\"hidden\" name=\"d_data_inserimento\" value=\"$d_data_inserimento\">
<input type=\"hidden\" name=\"d_host_inserimento\" value=\"$d_host_inserimento\">
<input type=\"hidden\" name=\"pagina_gia_modificata\" value=\"SI\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">

<button class=\"$mr_class\" id=\"modi\" type=\"submit\" name=\"modificaprenotazione\" value=\"$frase_modifica_prenota\"><div>$frase_modifica_prenota</div></button>
</div>
</div></form>
<table><tr><td style=\"height: 12px;\"></td></tr></table>
<hr style=\"width: 95%;\"><div style=\"text-align: center;\">";

if ($priv_canc_prenotazioni != "n" or $priv_ins_nuove_prenota != "n") {
echo "<table";
if ($priv_canc_prenotazioni != "n" and $priv_ins_nuove_prenota != "n") echo " class=\"buttontab\"";
echo "border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-left: auto; margin-right: auto;\"><tr><td style=\"height: 12px;\"></td></tr><tr>";
if ($priv_canc_prenotazioni != "n") {
echo "<td><form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"mese\" value=\"$mese\">
<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<input type=\"hidden\" name=\"d_data_inserimento\" value=\"$d_data_inserimento\">
<input type=\"hidden\" name=\"d_host_inserimento\" value=\"$d_host_inserimento\">
<input type=\"hidden\" name=\"d_pagato\" value=\"$d_pagato\">
<input type=\"hidden\" name=\"cancella\" value=\"1\">
<button class=\"$cr_class\" id=\"canc\" type=\"submit\"><div>$frase_cancella_prenota</div></button>
</div></form></td>";
if ($priv_ins_nuove_prenota != "n") echo "<td style=\"width: 20px;\"></td>";
} # fine if ($priv_canc_prenotazioni != "n")
if ($priv_ins_nuove_prenota != "n") {
echo "<td><form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_prenota_copia\" value=\"$id_prenota_int\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">
<button class=\"ires\" type=\"submit\"><div>$frase_copia_prenota</div></button>
</div></form></td>";
} # fine if ($priv_ins_nuove_prenota != "n")
echo "</tr><tr><td style=\"height: 12px;\"></td></tr></table>
<hr style=\"width: 95%;\">";
} # fine if ($priv_canc_prenotazioni != "n" or $priv_ins_nuove_prenota != "n")

echo "<table><tr><td style=\"height: 6px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"visualizza_contratto.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"modifica_prenota.php?mese=$mese&amp;tipo_tabella=$tipo_tabella&amp;id_prenota=$idprenota_origine2";
if ($pcanc) echo "&amp;pcanc=1";
echo "&amp;origine=".htmlspecialchars($origine)."\">";

if ($num_id_prenota > 1) {
echo "<input type=\"hidden\" name=\"lista_prenota\" value=\",$id_prenota_int,\">
<input type=\"hidden\" name=\"pcanc\" value=\"$pcanc\">";
} # fine if ($num_id_prenota > 1)
else {
echo "<input type=\"hidden\" name=\"id_prenota\" value=\"$id_prenota\">
<input type=\"hidden\" name=\"cognome_1\" value=\"$dcognome\">
<input type=\"hidden\" name=\"nome_1\" value=\"$dnome\">
<input type=\"hidden\" name=\"soprannome_1\" value=\"$dsoprannome\">
<input type=\"hidden\" name=\"titolo_1\" value=\"$dtitolo_cli\">
<input type=\"hidden\" name=\"sesso_1\" value=\"$dsesso\">
<input type=\"hidden\" name=\"data_nascita_1\" value=\"$ddatanascita\">
<input type=\"hidden\" name=\"documento_1\" value=\"$ddocumento\">
<input type=\"hidden\" name=\"tipo_documento_1\" value=\"$dtipodoc\">
<input type=\"hidden\" name=\"citta_documento_1\" value=\"$dcittadoc\">
<input type=\"hidden\" name=\"regione_documento_1\" value=\"$dregionedoc\">
<input type=\"hidden\" name=\"nazione_documento_1\" value=\"$dnazionedoc\">
<input type=\"hidden\" name=\"scadenza_documento_1\" value=\"$dscadenzadoc\">
<input type=\"hidden\" name=\"citta_nascita_1\" value=\"$dcittanascita\">
<input type=\"hidden\" name=\"regione_nascita_1\" value=\"$dregionenascita\">
<input type=\"hidden\" name=\"nazione_nascita_1\" value=\"$dnazionenascita\">
<input type=\"hidden\" name=\"cittadinanza_1\" value=\"$dnazionalita\">
<input type=\"hidden\" name=\"codice_lingua_1\" value=\"$dlingua_cli\">
<input type=\"hidden\" name=\"nazione_1\" value=\"$dnazione\">
<input type=\"hidden\" name=\"regione_1\" value=\"$dregione\">
<input type=\"hidden\" name=\"citta_1\" value=\"$dcitta\">
<input type=\"hidden\" name=\"via_1\" value=\"$dvia\">
<input type=\"hidden\" name=\"numcivico_1\" value=\"$dnumcivico\">
<input type=\"hidden\" name=\"telefono_1\" value=\"$dtelefono\">
<input type=\"hidden\" name=\"telefono2_1\" value=\"$dtelefono2\">
<input type=\"hidden\" name=\"telefono3_1\" value=\"$dtelefono3\">
<input type=\"hidden\" name=\"codice_fiscale_1\" value=\"$dcod_fiscale\">
<input type=\"hidden\" name=\"partita_iva_1\" value=\"$dpartita_iva\">
<input type=\"hidden\" name=\"fax_1\" value=\"$dfax\">
<input type=\"hidden\" name=\"cap_1\" value=\"$dcap\">
<input type=\"hidden\" name=\"email_1\" value=\"$demail\">
<input type=\"hidden\" name=\"email2_1\" value=\"$demail2\">
<input type=\"hidden\" name=\"email_certificata_1\" value=\"$demail_cert\">
<input type=\"hidden\" name=\"numero_cliente_1\" value=\"$id_clienti\">
<input type=\"hidden\" name=\"id_data_inizio_1\" value=\"$d_id_data_inizio\">
<input type=\"hidden\" name=\"data_inizio_1\" value=\"$d_data_inizio\">
<input type=\"hidden\" name=\"id_data_fine_1\" value=\"$d_id_data_fine\">
<input type=\"hidden\" name=\"num_periodi_1\" value=\"$d_numero_settimane\">
<input type=\"hidden\" name=\"data_fine_1\" value=\"$d_data_fine\">
<input type=\"hidden\" name=\"orario_entrata_stimato_1\" value=\"$d_stima_checkin\">
<input type=\"hidden\" name=\"orario_registrazione_entrata_1\" value=\"$d_checkin\">
<input type=\"hidden\" name=\"orario_registrazione_uscita_1\" value=\"$d_checkout\">
<input type=\"hidden\" name=\"origine_prenotazione_1\" value=\"$d_origine_prenota\">";
if ($priv_mod_tariffa != "n") {
echo "<input type=\"hidden\" name=\"nome_tariffa_1\" value=\"$d_nome_tariffa\">";
if ($priv_mod_tariffa != "p") {
echo "<input type=\"hidden\" name=\"costo_tariffa_1\" value=\"$d_costo_tariffa\">
<input type=\"hidden\" name=\"tariffesettimanali_1\" value=\"".$d_tariffesettimanali_vett[$id_prenota]."\">
<input type=\"hidden\" name=\"percentuale_tasse_tariffa_1\" value=\"$d_tasse_perc\">";
if ($d_valuta_tariffa) {
echo "<input type=\"hidden\" name=\"valuta_tariffa_1\" value=\"".htmlspecialchars($d_valu_tariffa)."\">
<input type=\"hidden\" name=\"tasso_cambio_tariffa_1\" value=\"$d_cambio_tariffa\">
<input type=\"hidden\" name=\"costo_valuta_tariffa_1\" value=\"$tariffa_valuta\">";
} # fine if ($d_valuta_tariffa)
} # fine if ($priv_mod_tariffa != "p")
} # fine if ($priv_mod_tariffa != "n")
if ($priv_mod_sconto != "n") {
echo "<input type=\"hidden\" name=\"sconto_1\" value=\"$d_sconto\">";
if ($d_valuta_tariffa) echo "<input type=\"hidden\" name=\"valore_valuta_sconto_1\" value=\"$sconto_valuta\">";
} # fine if ($priv_mod_sconto != "n")
if ($priv_mod_caparra != "n") {
echo "<input type=\"hidden\" name=\"caparra_1\" value=\"$d_caparra\">
<input type=\"hidden\" name=\"commissioni_1\" value=\"$d_commissioni\">";
if ($d_valuta_caparra) {
echo "<input type=\"hidden\" name=\"valuta_caparra_1\" value=\"".htmlspecialchars($d_valu_caparra)."\">
<input type=\"hidden\" name=\"tasso_cambio_caparra_1\" value=\"$d_cambio_caparra\">
<input type=\"hidden\" name=\"valore_valuta_caparra_1\" value=\"".converti_valuta($d_caparra,$d_cambio_caparra,$d_arrotond_caparra)."\">";
} # fine if ($d_valuta_caparra)
if ($d_met_paga_caparra) echo "<input type=\"hidden\" name=\"metodo_pagamento_caparra_1\" value=\"".htmlspecialchars($d_met_paga_caparra)."\">";
} # fine if ($priv_mod_caparra != "n")
echo "<input type=\"hidden\" name=\"num_persone_1\" value=\"$d_num_persone\">
<input type=\"hidden\" name=\"unita_occupata_1\" value=\"$d_appartamento\">
<input type=\"hidden\" name=\"unita_assegnabili_1\" value=\"$d_app_assegnabili\">";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (!empty($d_cat_persone[$num1]['esist'])) $cat_pers_corr = $d_cat_persone[$d_cat_persone[$num1]['ncp']]['molt'];
else $cat_pers_corr = 0;
echo "<input type=\"hidden\" name=\"num_persone_tipo_".($num1 + 1)."_1\" value=\"$cat_pers_corr\">";
} # fine for $num2
if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
echo "<input type=\"hidden\" name=\"pagato_1\" value=\"$d_pagato\">
<input type=\"hidden\" name=\"costo_tot_1\" value=\"$d_costo_tot\">";
if ($d_valuta_tariffa) echo "<input type=\"hidden\" name=\"costo_valuta_tot_1\" value=\"$costo_tot_valuta\">";
} # fine if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i")
if ($d_pagato or $d_confermato == "S") echo "<input type=\"hidden\" name=\"conferma_1\" value=\"1\">";
echo "<input type=\"hidden\" name=\"n_letti_agg_1\" value=\"$n_letti_agg\">
<input type=\"hidden\" name=\"numero_prenotazione_1\" value=\"$id_prenota\">
<input type=\"hidden\" name=\"codice_prenotazione_1\" value=\"$cod_prenota\">
<input type=\"hidden\" name=\"ultima_prenotazione_per_cliente_1\" value=\"1\">
<input type=\"hidden\" name=\"id_anni_prec_1\" value=\"$id_anni_prec\">
<input type=\"hidden\" name=\"data_inserimento_prenotazione_1\" value=\"".substr($d_data_inserimento,0,16)."\">";
if ($priv_mod_utente_ins != "n") echo "<input type=\"hidden\" name=\"utente_inserimento_prenotazione_1\" value=\"$id_utente_inserimento\">";
if ($priv_vedi_commento == "s") {
$d_commento = str_replace("\"","&quot;",$d_commento);
$d_promemoria_entrata = str_replace("\"","&quot;",$d_promemoria_entrata);
$d_promemoria_uscita = str_replace("\"","&quot;",$d_promemoria_uscita);
echo "<input type=\"hidden\" name=\"commento_1\" value=\"$d_commento\">
<input type=\"hidden\" name=\"promemoria_entrata_1\" value=\"$d_promemoria_entrata\">
<input type=\"hidden\" name=\"promemoria_uscita_1\" value=\"$d_promemoria_uscita\">";
} # fine if ($priv_vedi_commento == "s")
if ($priv_mod_costi_agg != "n") {
echo "<input type=\"hidden\" name=\"num_costi_aggiuntivi_1\" value=\"".$dati_cap['num']."\">";
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
echo "<input type=\"hidden\" name=\"nome_costo_agg$numca"."_1\" value=\"".$nome_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"moltiplica_max_costo_agg$numca"."_1\" value=\"".$maxmolt_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"giorni_costo_agg$numca"."_1\" value=\"".$giorni_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"tipo_persona_costo_agg$numca"."_1\" value=\"".$catpers_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"data_inserimento_costo_agg$numca"."_1\" value=\"".$datains_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"utente_inserimento_costo_agg$numca"."_1\" value=\"".$utenteins_costo_stampa[$numca]."\">";
if ($priv_mod_costi_agg != "p") {
echo "<input type=\"hidden\" name=\"val_costo_agg$numca"."_1\" value=\"".$val_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"percentuale_tasse_costo_agg$numca"."_1\" value=\"".$tasseperc_costo_stampa[$numca]."\">
<input type=\"hidden\" name=\"valore_giornaliero_max_costo_agg$numca"."_1\" value=\"".$valgiornmax_costo_stampa[$numca]."\">";
} # fine if $priv_mod_costi_agg != "p")
$select_costo_stampa .= "<option value=\"$numca\">".$nome_costo_stampa[$numca]."</option>";
} # fine for $numca
} # fine if ($priv_mod_costi_agg != "n")
if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i") {
echo "<input type=\"hidden\" name=\"num_pagamenti_1\" value=\"$num_pagamenti\">";
for ($num1 = 0 ; $num1 < $num_pagamenti ; $num1++) {
echo "<input type=\"hidden\" name=\"data_paga$num1"."_1\" value=\"".$data_paga[$num1]."\">
<input type=\"hidden\" name=\"data_operazione_paga$num1"."_1\" value=\"".$data_trans[$num1]."\">
<input type=\"hidden\" name=\"utente_paga$num1"."_1\" value=\"".$utente_paga[$num1]."\">
<input type=\"hidden\" name=\"metodo_paga$num1"."_1\" value=\"".$metodo_paga[$num1]."\">
<input type=\"hidden\" name=\"id_paga$num1"."_1\" value=\"".$id_paga[$num1]."\">
<input type=\"hidden\" name=\"note_paga$num1"."_1\" value=\"".$note_paga[$num1]."\">
<input type=\"hidden\" name=\"saldo_paga$num1"."_1\" value=\"".$saldo_paga[$num1]."\">
<input type=\"hidden\" name=\"valuta_paga$num1"."_1\" value=\"".$valuta_paga[$num1]."\">
<input type=\"hidden\" name=\"tasso_cambio_paga$num1"."_1\" value=\"".fixset($tasso_cambio_paga[$num1])."\">
<input type=\"hidden\" name=\"valore_valuta_paga$num1"."_1\" value=\"".$saldo_valuta_paga[$num1]."\">";
} # fine for $num1
} # fine if ($priv_mod_pagato != "n" and $priv_mod_pagato != "i")
if ($num_dati_relcliente) {
for ($num1 = 0 ; $num1 < $num_dati_relcliente ; $num1++) {
echo "<input type=\"hidden\" name=\"campo_personalizzato_".risul_query($dati_relcliente,$num1,'testo1')."_1\" value=\"".risul_query($dati_relcliente,$num1,'testo3')."\">
<input type=\"hidden\" name=\"nome_campo_pers_passa_$num1"."_1\" value=\"".risul_query($dati_relcliente,$num1,'testo1')."\">";
} # fine for $num1
echo "<input type=\"hidden\" name=\"num_campi_pers_passa"."_1\" value=\"$num_dati_relcliente\">";
} # fine if ($num_dati_relcliente)
if ($priv_vedi_commenti_pers == "s") {
$num_comm_pers_passa_1 = 0;
for ($num1 = 0 ; $num1 < $num_campi_pers_comm ; $num1++) {
if (isset($d_commenti_pers[$campi_pers_comm[$num1]]) and strcmp((string) $d_commenti_pers[$campi_pers_comm[$num1]],"")) {
$d_commenti_pers[$campi_pers_comm[$num1]] = str_replace("\"","&quot;",$d_commenti_pers[$campi_pers_comm[$num1]]);
echo "<input type=\"hidden\" name=\"commento_personalizzato_".$campi_pers_comm[$num1]."_1\" value=\"".$d_commenti_pers[$campi_pers_comm[$num1]]."\">
<input type=\"hidden\" name=\"nome_comm_pers_passa_$num_comm_pers_passa_1"."_1\" value=\"".$campi_pers_comm[$num1]."\">";
$num_comm_pers_passa_1++;
} # fine if (isset($d_commenti_pers[$campi_pers_comm[$num1]]) and strcmp((string) $d_commenti_pers[$campi_pers_comm[$num1]],""))
} # fine for $num1
echo "<input type=\"hidden\" name=\"num_comm_pers_passa_1\" value=\"$num_comm_pers_passa_1\">";
} # fine if ($priv_vedi_commenti_pers == "s")
} # fine else if ($num_id_prenota > 1)

echo "".ucfirst(mex("documento di tipo",$pag))."
 <select id=\"lcon\" name=\"numero_contratto\">";
unset($nomi_contratti);
unset($nome_contratto);
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
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($attiva_contratti_consentiti == "n" or (isset($contratti_consentiti_vett[$num_contratto]) and $contratti_consentiti_vett[$num_contratto] == "SI")) {
if (!empty($nome_contratto[$num_contratto])) $num_contratto_vedi = $nome_contratto[$num_contratto];
else $num_contratto_vedi = $num_contratto;
echo "<option value=\"$num_contratto\">$num_contratto_vedi</option>";
} # fine if ($attiva_contratti_consentiti == "n" or...
} # fine for $num_contratto
echo "</select>
 <button class=\"vdoc\" id=\"tcon\" type=\"submit\"><div>".ucfirst(mex("visualizza",$pag))."</div></button>
<input type=\"hidden\" id=\"hcon\" value=\"".ucfirst(mex("visualizza il documento",$pag))."\">";
if ($dati_cap['num'] > 0 and $num_id_prenota == 1) {
echo "<br><div class=\"doc_ec\">(".mex("con costo agg.",$pag)."
 <select name=\"num_costo_agg_sel\">
<option value=\"\" selected>----</option>
$select_costo_stampa
</select>)</div>";
} # fine if ($dati_cap['num'] > 0 and $num_id_prenota == 1)
echo "</div></form>
<table><tr><td style=\"height: 6px;\"></td></tr></table>
<hr style=\"width: 95%;\">";

if (!$tipo_tabella) $tipo_tabella = "prenotazioni";
echo "<table><tr><td style=\"height: 6px;\"></td></tr></table>
<form accept-charset=\"utf-8\" method=\"post\" action=\"".controlla_pag_origine($origine)."\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno_origine\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
if ($mese) echo "<input type=\"hidden\" name=\"mese\" value=\"$mese\">";
echo "<input type=\"hidden\" name=\"tipo_tabella\" value=\"$tipo_tabella\">
<input type=\"hidden\" name=\"torna_indietro\" value=\"1\">
<button class=\"gobk\" id=\"indi\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button>
</div></form></div>
<table><tr><td style=\"height: 20px;\"></td></tr></table>";




} # fine if (!isset($mostra_form_modifica_prenota) or $mostra_form_modifica_prenota != "NO")



} # fine if ($priv_mod_prenotazioni != "n" and strcmp((string) $id_prenota,""))


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI" and $priv_mod_prenotazioni != "n")
} # fine if ($id_utente)



?>

