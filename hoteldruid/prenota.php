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

$pag = "prenota.php";
$titolo = "HotelDruid: Prenota";

$var_pag = array();
$var_pag[0] = 'origine';
$var_pag[1] = 'cognome';
$var_pag[2] = 'nome';
$var_pag[3] = 'num_tipologie';
$var_pag[4] = 'num_categorie_persone';
$var_pag[5] = 'numcostiagg';
$var_pag[6] = 'mos_tut_dat';
$var_pag[7] = 'nuovaprenotazione';
$var_pag[8] = 'id_utente_ins';
$var_pag[9] = 'prenota_vicine';
$var_pag[10] = 'num_tipologie_da_aggiungere';
$var_pag[11] = 'soprannome';
$var_pag[12] = 'sesso';
$var_pag[13] = 'nazionalita';
$var_pag[14] = 'lingua_cli';
$var_pag[15] = 'cliente_ospite';
$var_pag[16] = 'prenota_cli_osp';
$var_pag[17] = 'giornonascita';
$var_pag[18] = 'mesenascita';
$var_pag[19] = 'annonascita';
$var_pag[20] = 'nazionenascita';
$var_pag[21] = 'regionenascita';
$var_pag[22] = 'cittanascita';
$var_pag[23] = 'via';
$var_pag[24] = 'nomevia';
$var_pag[25] = 'numcivico';
$var_pag[26] = 'cap';
$var_pag[27] = 'nazione';
$var_pag[28] = 'regione';
$var_pag[29] = 'citta';
$var_pag[30] = 'documento';
$var_pag[31] = 'giornoscaddoc';
$var_pag[32] = 'mesescaddoc';
$var_pag[33] = 'annoscaddoc';
$var_pag[34] = 'nazionedoc';
$var_pag[35] = 'regionedoc';
$var_pag[36] = 'cittadoc';
$var_pag[37] = 'telefono';
$var_pag[38] = 'telefono2';
$var_pag[39] = 'telefono3';
$var_pag[40] = 'fax';
$var_pag[41] = 'email';
$var_pag[42] = 'email2';
$var_pag[43] = 'email_cert';
$var_pag[44] = 'cod_fiscale';
$var_pag[45] = 'partita_iva';
$var_pag[46] = 'inserire';
$var_pag[47] = 'inserire_dati_cliente';
$var_pag[48] = 'id_transazione';
$var_pag[49] = 'idclienti';
$var_pag[50] = 'annulla';
$var_pag[51] = 'idmessaggi';
$var_pag[52] = 'tipodoc';
$var_pag[53] = 'n_cli_esist_passa';
$var_pag[54] = 'n_campi_pers_passa';
$var_pag[55] = 'occ_app_agenzia';
$var_pag[56] = 'titolo_cli';
$var_pag[57] = 'numgrca_passa';
$var_pag[58] = 'id_prenota_copia';
$var_pag[59] = 'pcanc';
$var_pag[60] = 'idcognome_cp';
$var_pag[61] = 'idospiti_cp';
$n_var_pag = 62;
$num2 = 0;
if (isset($_POST['num_tipologie'])) $num2 = (int) $_POST['num_tipologie'];
elseif (isset($_GET['num_tipologie'])) $num2 = (int) $_GET['num_tipologie'];
$num4 = 0;
if (isset($_POST['num_categorie_persone'])) $num4 = (int) $_POST['num_categorie_persone'];
elseif (isset($_GET['num_categorie_persone'])) $num4 = (int) $_GET['num_categorie_persone'];
$num5 = 0;
if (isset($_POST['numcostiagg'])) $num5 = (int) $_POST['numcostiagg'];
elseif (isset($_GET['numcostiagg'])) $num5 = (int) $_GET['numcostiagg'];
$num9 = 0;
if (isset($_POST['numgrca_passa'])) $num9 = (int) $_POST['numgrca_passa'];
elseif (isset($_GET['numgrca_passa'])) $num9 = (int) $_GET['numgrca_passa'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "inizioperiodo$num1";
$var_pag[$n_var_pag++] = "fineperiodo$num1";
$var_pag[$n_var_pag++] = "nometipotariffa$num1";
$var_pag[$n_var_pag++] = "numpersone$num1";
$var_pag[$n_var_pag++] = "tipo_sconto$num1";
$var_pag[$n_var_pag++] = "sconto$num1";
$var_pag[$n_var_pag++] = "tipo_val_sconto$num1";
$var_pag[$n_var_pag++] = "appartamento$num1";
$var_pag[$n_var_pag++] = "assegnazioneapp$num1";
$var_pag[$n_var_pag++] = "lista_app$num1";
$var_pag[$n_var_pag++] = "num_piano$num1";
$var_pag[$n_var_pag++] = "num_casa$num1";
$var_pag[$n_var_pag++] = "num_persone_casa$num1";
$var_pag[$n_var_pag++] = "caparra$num1";
$var_pag[$n_var_pag++] = "tipo_val_caparra$num1";
$var_pag[$n_var_pag++] = "met_paga_caparra$num1";
$var_pag[$n_var_pag++] = "giorno_stima_checkin$num1";
$var_pag[$n_var_pag++] = "ora_stima_checkin$num1";
$var_pag[$n_var_pag++] = "min_stima_checkin$num1";
$var_pag[$n_var_pag++] = "origine_prenota$num1";
$var_pag[$n_var_pag++] = "commissioni$num1";
$var_pag[$n_var_pag++] = "tipo_val_commissioni$num1";
$var_pag[$n_var_pag++] = "prenota_vicine$num1";
$var_pag[$n_var_pag++] = "spezzetta$num1";
$var_pag[$n_var_pag++] = "conferma_prenota$num1";
$var_pag[$n_var_pag++] = "num_app_richiesti$num1";
$var_pag[$n_var_pag++] = "num_app_ric_passa_$num1";
$var_pag[$n_var_pag++] = "num_commenti$num1";
for ($num3 = 0 ; $num3 < $num4 ; $num3++) $var_pag[$n_var_pag++] = "cat$num3"."_numpers$num1";
for ($num3 = 1 ; $num3 <= $num5 ; $num3++) {
$var_pag[$n_var_pag++] = "idcostoagg$num3"."_$num1";
$var_pag[$n_var_pag++] = "costoagg$num3"."_$num1";
$var_pag[$n_var_pag++] = "nummoltiplica_ca$num3"."_$num1";
$var_pag[$n_var_pag++] = "numsettimane$num3"."_$num1";
$var_pag[$n_var_pag++] = "catpers_ca$num3"."_$num1";
$var_pag[$n_var_pag++] = "id_periodi_costo$num3"."_$num1";
} # fine for for $num3
for ($num3 = 1 ; $num3 <= $num9 ; $num3++) {
$var_pag[$n_var_pag++] = "idca_ngr_passa$num3"."_$num1";
$num6 = 0;
if (isset($_POST["idca_ngr_passa$num3"."_$num1"])) $num6 = (int) $_POST["idca_ngr_passa$num3"."_$num1"];
elseif (isset($_GET["idca_ngr_passa$num3"."_$num1"])) $num6 = (int) $_GET["idca_ngr_passa$num3"."_$num1"];
if ($num6) {
$var_pag[$n_var_pag++] = "gr_idcostoagg$num6"."_$num1";
$var_pag[$n_var_pag++] = "gr_numsettimane$num6"."_$num1";
$var_pag[$n_var_pag++] = "gr_nummoltiplica_ca$num6"."_$num1";
$var_pag[$n_var_pag++] = "gr_catpers_ca$num6"."_$num1";
} # fine if ($num6)
} # fine for for $num3
$num6 = 0;
if (isset($_POST["num_commenti$num1"])) $num6 = (int) $_POST["num_commenti$num1"];
elseif (isset($_GET["num_commenti$num1"])) $num6 = (int) $_GET["num_commenti$num1"];
for ($num3 = 1 ; $num3 <= $num6 ; $num3++) {
$var_pag[$n_var_pag++] = "tipo_commento$num3"."_$num1";
$var_pag[$n_var_pag++] = "commento$num3"."_$num1";
} # fine for for $num3
$num6 = 1;
if (isset($_POST["num_app_ric_passa_$num1"])) $num6 = (int) $_POST["num_app_ric_passa_$num1"];
elseif (isset($_GET["num_app_ric_passa_$num1"])) $num6 = (int) $_GET["num_app_ric_passa_$num1"];
for ($num3 = 1 ; $num3 <= $num6 ; $num3++) {
$var_pag[$n_var_pag++] = "num_osp_passa_$num3"."_$num1";
$num8 = 0;
if (isset($_POST["num_osp_passa_$num3"."_$num1"])) $num8 = (int) $_POST["num_osp_passa_$num3"."_$num1"];
elseif (isset($_GET["num_osp_passa_$num3"."_$num1"])) $num8 = (int) $_GET["num_osp_passa_$num3"."_$num1"];
for ($num7 = 1 ; $num7 <= $num8 ; $num7++) {
$var_pag[$n_var_pag++] = "cognome_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "nome_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "sesso_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "nazionalita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "parentela_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "giornonascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "mesenascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "annonascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "nazionenascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "regionenascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "cittanascita_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "nazione_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "regione_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "citta_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "tipodoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "documento_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "giornoscaddoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "mesescaddoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "annoscaddoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "nazionedoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "regionedoc_$num7"."_$num3"."_$num1";
$var_pag[$n_var_pag++] = "cittadoc_$num7"."_$num3"."_$num1";
} # fine for for $num7
} # fine for for $num3
} # fine for $num1
$num2 = 0;
if (isset($_POST['n_cli_esist_passa'])) $num2 = (int) $_POST['n_cli_esist_passa'];
elseif (isset($_GET['n_cli_esist_passa'])) $num2 = (int) $_GET['n_cli_esist_passa'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "id_cli_esist_passa$num1";
$var_pag[$n_var_pag++] = "n_cli_osp_passa$num1";
$num3 = 0;
if (isset($_POST["id_cli_esist_passa$num1"])) $num3 = (int) $_POST["id_cli_esist_passa$num1"];
elseif (isset($_GET["id_cli_esist_passa$num1"])) $num3 = (int) $_GET["id_cli_esist_passa$num1"];
if ($num3) {
$var_pag[$n_var_pag++] = "cliente_ospite_$num3";
$var_pag[$n_var_pag++] = "prenota_cli_osp_$num3";
$num5 = 0;
if (isset($_POST["n_cli_osp_passa$num1"])) $num5 = (int) $_POST["n_cli_osp_passa$num1"];
elseif (isset($_GET["n_cli_osp_passa$num1"])) $num5 = (int) $_GET["n_cli_osp_passa$num1"];
for ($num4 = 0 ; $num4 < $num5 ; $num4++) {
$var_pag[$n_var_pag++] = "cli_osp_passa$num1"."_$num4";
$num6 = 0;
if (isset($_POST["cli_osp_passa$num1"."_$num4"])) $num6 = (int) $_POST["cli_osp_passa$num1"."_$num4"];
elseif (isset($_GET["cli_osp_passa$num1"."_$num4"])) $num6 = (int) $_GET["cli_osp_passa$num1"."_$num4"];
if ($num6) {
$var_pag[$n_var_pag++] = "ospite_$num3"."_$num6";
$var_pag[$n_var_pag++] = "pren_osp_$num3"."_$num6";
} # fine if ($num6)
} # fine for $num4
} # fine if ($num3)
} # fine for $num1
$num2 = 0;
if (isset($_POST['n_campi_pers_passa'])) $num2 = (int) $_POST['n_campi_pers_passa'];
elseif (isset($_GET['n_campi_pers_passa'])) $num2 = (int) $_GET['n_campi_pers_passa'];
for ($num1 = 0 ; $num1 < $num2 ; $num1++) $var_pag[$n_var_pag++] = "campo_pers$num1";

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/sett_gio.php");
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablemessaggi = $PHPR_TAB_PRE."messaggi";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablerelinventario = $PHPR_TAB_PRE."relinventario";
$tablecache = $PHPR_TAB_PRE."cache";
$tablerelclienti = $PHPR_TAB_PRE."relclienti";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if ($id_utente != 1) {
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$prendi_gruppi = "";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
if (substr($priv_ins_clienti,0,1) == "s") $inserimento_nuovi_clienti = "SI";
else $inserimento_nuovi_clienti = "NO";
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$prefisso_clienti = risul_query($privilegi_globali_utente,0,'prefisso_clienti');
$attiva_prefisso_clienti = substr($prefisso_clienti,0,1);
if ($attiva_prefisso_clienti != "n") {
$prefisso_clienti = explode(",",$prefisso_clienti);
$prefisso_clienti = $prefisso_clienti[1];
} # fine if ($prefisso_clienti != "n")
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
$priv_ins_prenota = risul_query($privilegi_annuali_utente,0,'priv_ins_prenota');
$priv_ins_nuove_prenota = substr($priv_ins_prenota,0,1);
$priv_ins_assegnazione_app = substr($priv_ins_prenota,1,1);
$priv_ins_conferma = substr($priv_ins_prenota,2,1);
$priv_ins_sconto = substr($priv_ins_prenota,3,1);
$priv_ins_caparra = substr($priv_ins_prenota,4,1);
$priv_ins_costi_agg = substr($priv_ins_prenota,5,1);
$priv_ins_commento = substr($priv_ins_prenota,6,1);
$priv_ins_num_persone = substr($priv_ins_prenota,7,1);
$priv_ins_periodi_passati = substr($priv_ins_prenota,8,1);
$priv_ins_multiple = substr($priv_ins_prenota,9,1);
$priv_ins_checkin = substr($priv_ins_prenota,10,1);
$priv_ins_orig_prenota = substr($priv_ins_prenota,11,1);
$priv_ins_commenti_pers = substr($priv_ins_prenota,12,1);
if (!empty($id_prenota_copia)) {
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
$priv_mod_prenota_iniziate = substr($priv_mod_prenota,11,1);
$priv_mod_prenota_ore = substr($priv_mod_prenota,12,3);
$priv_mod_checkin = substr($priv_mod_prenota,20,1);
$priv_mod_codice = substr($priv_mod_prenota,21,1);
$priv_mod_prenota_comp = substr($priv_mod_prenota,23,1);
$priv_mod_orig_prenota = substr($priv_mod_prenota,24,1);
$priv_vedi_commento = substr($priv_mod_prenota,25,1);
$priv_vedi_commenti_pers = substr($priv_mod_prenota,26,1);
} # fine if (!empty($id_prenota_copia))
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
$modifica_pers = "SI";
$inserimento_nuovi_clienti = "SI";
$vedi_clienti = "SI";
$attiva_prefisso_clienti = "n";
$prefisso_clienti = "";
$attiva_regole1_consentite = "n";
$applica_regole1 = "s";
$attiva_tariffe_consentite = "n";
$attiva_costi_agg_consentiti = "n";
$priv_ins_nuove_prenota = "s";
$priv_ins_assegnazione_app = "s";
$priv_ins_conferma = "s";
$priv_ins_sconto = "s";
$priv_ins_caparra = "s";
$priv_ins_costi_agg = "s";
$priv_ins_commento = "s";
$priv_ins_num_persone = "s";
$priv_ins_periodi_passati = "s";
$priv_ins_multiple = "s";
$priv_ins_checkin = "s";
$priv_ins_orig_prenota = "s";
$priv_ins_commenti_pers = "s";
if (!empty($id_prenota_copia)) {
$priv_mod_prenotazioni = "s";
$priv_mod_date = "s";
$priv_mod_assegnazione_app = "s";
$priv_mod_tariffa = "s";
$priv_mod_num_persone = "s";
$priv_mod_commento = "s";
$priv_mod_sconto = "s";
$priv_mod_caparra = "s";
$priv_mod_costi_agg = "s";
$priv_mod_prenota_iniziate = "s";
$priv_mod_prenota_ore = "000";
$priv_mod_checkin = "s";
$priv_mod_codice = "s";
$priv_mod_prenota_comp = "s";
$priv_mod_orig_prenota = "s";
$priv_vedi_commento = "s";
$priv_vedi_commenti_pers = "s";
} # fine if (!empty($id_prenota_copia))
} # fine else if ($id_utente != 1)

if (defined("C_MASSIMO_NUM_CLIENTI") and C_MASSIMO_NUM_CLIENTI != 0) {
$num_clienti_esistenti = esegui_query("select idclienti from $tableclienti");
$num_clienti_esistenti = numlin_query($num_clienti_esistenti);
if ($num_clienti_esistenti >= C_MASSIMO_NUM_CLIENTI) $inserimento_nuovi_clienti = "NO";
} # fine if (defined("C_MASSIMO_NUM_CLIENTI") and C_MASSIMO_NUM_CLIENTI != 0)

if ($anno_utente_attivato == "SI" and $priv_ins_nuove_prenota == "s") {


$titolo = "HotelDruid: ".mex("Prenota",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


if ($id_utente != 1 or !isset($id_utente_ins) or controlla_num_pos($id_utente_ins) == "NO") $id_utente_ins = $id_utente;
$inserito_nuovo_cliente = "NO";



/*
STRUTTURA TABELLA COSTI AGGIUNTIVI DELLE PRENOTAZIONI

tipo(varchar2)			u-s			1 unico - settimanale
				f-p-q			2 fisso - percentuale su tariffa - percentuale su totale
nome(varchar40)
valore(float8)
valore_orig(float8)
arrotonda(float4)
associasett(varchar1)		s-n			1 associa a specifiche settimane della prenotazione: si-no
settimane(text)		X;,idperiodi,idperiodi,...	1 numero di settimane se associasett=n, lista periodi se associasett=s
moltiplica(text)		X;X,X,X...		1 moltiplica per X se no sett. o no associa sett. ; altrimenti moltiplica ogni sett. attivata per X corrispondente
categoria(text)
letto(varchar1)			s-p-n			1 considera come letto aggiuntivo: si, senza considerare % categoria persona - si, considerando % categoria persone  - no
#numlimite(integer)		X			NULL o vuoto se non ci sono limiti al numero di costi nello stesso periodo
idntariffe(integer)		idntariffa		id del costo aggiuntivo
variazione(varchar10)		s-n			1 mantenere costi combinabili della categoria: si-no
				s-n			2 escludere il costo dal totale per costi percentuali: si-no
varmoltiplica(text)		1-c-p-t			1 moltiplica per: 1 - chiedere - persone - persnone totali
				x;x-n-p-t-m-n;x;x	2 x se 1=1 ; numero massimo: nessuno - fisso - persone - persone totali - persone meno una - persone totali meno una ;...
				NNN,NNN			3- numero da aggiungere a moltiplica , numero massimo se 1=c e 2=n o numero da sottrarre se 1=c e 2=p/t
varnumsett(varchar20)		t-m-c-n-s-g,		1 tutte - tutte meno una - chiedere - x settimane si e y no - x settimane si e y no - solo giorni della settimana selezionati
varperiodipermessi(text)	t-u-p			NULL o vuoto se periodi tutti permessi, altrimenti: tutta la prenotazione dentro i periodi - anche un solo periodo - solo periodi permessi
				idperiodo-idperiodo,...	
varbeniinv(text)		X;			numero di ripetizioni del costo
				mag$idmag-app;		NULL o vuoto se nessun bene da eliminare dall'inventario, altimenti: elimina dal magazzino $idmag - elimina dall'appartamento della prenotazione
				idbene,x;idbene,x;...	idbene del bene da eliminare e numero da eliminare
varappincomapibili(text)	idapp,idapp,...		NULL o vuoto se nessun appartamento incompatibile
vartariffeassociate(varchar10)	s-r-p			1 associare a tariffa: sempre - sempre in periodi permessi - se possibile
				s-<x->x-=x-|x<y		2- NULL o vuoto se costo non associato alla tariffa, altrimenti: per qualsiasi numero di settimane - meno di x - più di x - per x settimane - compreso tra x e y settimane
vartariffeincomp(text)	X,X,...				NULL o vuoto se costo compatibile con tutte le tariffe, antrimenti lista coi numeri delle tariffe incompatibili

*/



$Euro = nome_valuta();
$stile_soldi = stile_soldi();
$stile_data = stile_data();
$altre_valute = altre_valute();


if (isset($annulla)) {
$tabelle_lock = array($tableprenota,$tabletransazioni);
$altre_tab_lock = array($tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$id_transazione = aggslashdb($id_transazione);
$dati_transazione = recupera_dati_transazione($id_transazione,$id_sessione,$anno,"NO",$tipo_transazione);
if ($tipo_transazione == "ins_p") {
$prenota_temp = risul_query($dati_transazione,0,'dati_transazione13');
if ($prenota_temp) {
$num_tipologie = risul_query($dati_transazione,0,'dati_transazione1');
$prenota_temp = explode(", ,",$prenota_temp);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$prenota_temp2 = explode(",",$prenota_temp[($n_t - 1)]);
for ($num1 = 1 ; $num1 <= count($prenota_temp2) ; $num1++) {
esegui_query("delete from $tableprenota where idprenota = '".aggslashdb($prenota_temp2[($num1 - 1)])."'","",1);
} # fine for $num1
} # fine for $n_t
} # fine if ($prenota_temp)
esegui_query("delete from $tabletransazioni where idtransazioni = '$id_transazione' ");
} # fine if ($tipo_transazione == "ins_p")
unlock_tabelle($tabelle_lock);
$id_transazione = "";
$num_tipologie = "";
} # fine if (isset($annulla))

if (!isset($num_tipologie) or controlla_num_pos($num_tipologie) == "NO" or $num_tipologie == 0 or $num_tipologie > 999) $num_tipologie = 1;
if (fixset($num_tipologie_da_aggiungere) and controlla_num_pos($num_tipologie_da_aggiungere) == "SI" and ($num_tipologie + $num_tipologie_da_aggiungere) <= 999) {
for ($n_t = ($num_tipologie + 1) ; $n_t <= ($num_tipologie + $num_tipologie_da_aggiungere) ; $n_t++) {
${"inizioperiodo".$n_t} = ${"inizioperiodo".$num_tipologie};
${"fineperiodo".$n_t} = ${"fineperiodo".$num_tipologie};
${"appartamento".$n_t} = ${"appartamento".$num_tipologie};
${"nometipotariffa".$n_t} = ${"nometipotariffa".$num_tipologie};
${"num_app_richiesti".$n_t} = ${"num_app_richiesti".$num_tipologie};
${"numpersone".$n_t} = ${"numpersone".$num_tipologie};
if (isset($num_categorie_persone)) for ($num_catp = 0 ; $num_catp < $num_categorie_persone ; $num_catp++) ${"cat$num_catp"."_numpers".$n_t} = ${"cat$num_catp"."_numpers".$num_tipologie};
${"assegnazioneapp".$n_t} = ${"assegnazioneapp".$num_tipologie};
${"tipo_sconto".$n_t} = ${"tipo_sconto".$num_tipologie};
${"sconto".$n_t} = ${"sconto".$num_tipologie};
${"tipo_val_sconto".$n_t} = ${"tipo_val_sconto".$num_tipologie};
${"conferma_prenota".$n_t} = ${"conferma_prenota".$num_tipologie};
${"num_commenti".$n_t} = ${"num_commenti".$num_tipologie};
for ($num_comm = 1 ; $num_comm <= ${"num_commenti".$n_t} ; $num_comm++) {
${"tipo_commento".$num_comm."_".$n_t} = ${"tipo_commento".$num_comm."_".$num_tipologie};
${"commento".$num_comm."_".$n_t} = ${"commento".$num_comm."_".$num_tipologie};
} # fine for $num_comm
${"lista_app".$n_t} = ${"lista_app".$num_tipologie};
${"caparra".$n_t} = ${"caparra".$num_tipologie};
${"tipo_val_caparra".$n_t} = ${"tipo_val_caparra".$num_tipologie};
${"commissioni".$n_t} = ${"commissioni".$num_tipologie};
${"tipo_val_commissioni".$n_t} = ${"tipo_val_commissioni".$num_tipologie};
${"giorno_stima_checkin".$n_t} = ${"giorno_stima_checkin".$num_tipologie};
${"ora_stima_checkin".$n_t} = ${"ora_stima_checkin".$num_tipologie};
${"min_stima_checkin".$n_t} = ${"min_stima_checkin".$num_tipologie};
${"met_paga_caparra".$n_t} = ${"met_paga_caparra".$num_tipologie};
${"origine_prenota".$n_t} = ${"origine_prenota".$num_tipologie};
${"num_piano".$n_t} = ${"num_piano".$num_tipologie};
${"num_casa".$n_t} = ${"num_casa".$num_tipologie};
${"num_persone_casa".$n_t} = ${"num_persone_casa".$num_tipologie};
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
${"costoagg".$numca."_".$n_t} = ${"costoagg".$numca."_".$num_tipologie};
${"numsettimane".$numca."_".$n_t} = ${"numsettimane".$numca."_".$num_tipologie};
${"nummoltiplica_ca".$numca."_".$n_t} = ${"nummoltiplica_ca".$numca."_".$num_tipologie};
if (isset(${"catpers_ca".$numca."_".$num_tipologie})) ${"catpers_ca".$numca."_".$n_t} = ${"catpers_ca".$numca."_".$num_tipologie};
} # fine for $numca
} # fine for $n_t
$num_tipologie = $num_tipologie + $num_tipologie_da_aggiungere;
} # fine if (fixset($num_tipologie_da_aggiungere) and...



# Se si viene da clienti.php e si devono ancora inserire i dati del cliente
if (isset($inserire_dati_cliente)) {
if ($cognome == "") {
echo mex("É necessario inserire il cognome del cliente",$pag).".<br>";
$inserire = "NO";
} # fine if ($cognome == "")
if ($inserimento_nuovi_clienti == "NO") $inserire = "NO";

if ($inserire == "NO") {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"$origine\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<br><input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form>";
$mostra_form_inserisci_prenota = "NO";
} # fine if ($inserire == "NO")
else {
if ($inserire) {

include("./includes/funzioni_clienti.php");

$tabelle_lock = array($tableclienti,$tablerelclienti);
$altre_tab_lock = array($tablepersonalizza,$tableprivilegi);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

if (!isset($idclienti) or $idclienti == "") {
$inserito_nuovo_cliente = "SI";
if ($id_utente == 1 and $id_utente_ins != 1) {
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_ins' and anno = '1'");
$prefisso_clienti = risul_query($privilegi_globali_utente,0,'prefisso_clienti');
$attiva_prefisso_clienti = substr($prefisso_clienti,0,1);
if ($attiva_prefisso_clienti != "n") {
$prefisso_clienti = explode(",",$prefisso_clienti);
$prefisso_clienti = $prefisso_clienti[1];
} # fine if ($prefisso_clienti != "n")
} # fine if ($id_utente == 1 and $id_utente_ins != 1)

$campi_pers_vett = array();
$campi_pers = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_cliente' and idutente = '$id_utente'");
if (numlin_query($campi_pers) == 1) {
$campi_pers = explode(">",risul_query($campi_pers,0,'valpersonalizza'));
$campi_pers_vett['num'] = count($campi_pers);
for ($num1 = 0 ; $num1 < $campi_pers_vett['num'] ; $num1++) {
$opt = explode("<",$campi_pers[$num1]);
$campi_pers_vett[$num1] = $opt[0];
$campi_pers_vett['tipo'][$num1] = $opt[1];
$campi_pers_vett['val'][$num1] = fixstr(${"campo_pers".$num1});
} # fine for $num1
} # fine if (numlin_query($campi_pers) == 1)

$titolo_cli = fixset($titolo_cli);
$tipodoc = fixset($tipodoc);
$idclienti = inserisci_dati_cliente($cognome,$nome,$soprannome,$titolo_cli,$sesso,$mesenascita,$giornonascita,$annonascita,$nazionenascita,$cittanascita,$regionenascita,$documento,$tipodoc,$mesescaddoc,$giornoscaddoc,$annoscaddoc,$cittadoc,$regionedoc,$nazionedoc,$nazionalita,$lingua_cli,$nazione,$citta,$regione,$via,$nomevia,$numcivico,$cap,$telefono,$telefono2,$telefono3,$fax,$email,$email2,$email_cert,$cod_fiscale,$partita_iva,"1",$id_utente_ins,$attiva_prefisso_clienti,$prefisso_clienti,"","",$campi_pers_vett);
} # fine if (!isset($idclienti) or $idclienti == "")
else unset($idclienti);
unlock_tabelle($tabelle_lock);
} # fine if ($inserire)
} # fine else if ($inserire == "NO")

$inserire = "";
} # fine if (isset($inserire_dati_cliente))




# Se vi è $idclienti siamo già nella fase di inserimento.
if (!empty($idclienti)) {

unset($idospiti);
unset($num_ordine);
$parentela = array();
unset($idclienti_compagni);


$tabelle_lock = array($tableprenota);
$altre_tab_lock = array($tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$minuti_durata_insprenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_insprenota' and idutente = '1'");
$minuti_durata_insprenota = risul_query($minuti_durata_insprenota,0,'valpersonalizza_num');
$lim_prenota_temp = aggslashdb(date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600) - ($minuti_durata_insprenota * 60))));
esegui_query("delete from $tableprenota where idclienti = '0' and datainserimento < '$lim_prenota_temp'","",1);
unlock_tabelle($tabelle_lock);


$dati_transazione = recupera_dati_transazione($id_transazione,$id_sessione,$anno,"SI",$tipo_transazione);
if ($tipo_transazione != "ins_p") {
$torna_invece_di_ok = "SI";
$num_tipologie = 0;
echo "<div style=\"display: inline; color: red;\">".mex("Transazione scaduta",$pag)."</div>.<br>";
} # fine if ($tipo_transazione != "ins_p")
else {
$num_tipologie = risul_query($dati_transazione,0,'dati_transazione1');
$inizioperiodo = explode(";",risul_query($dati_transazione,0,'dati_transazione2'));
$fineperiodo = explode(";",risul_query($dati_transazione,0,'dati_transazione3'));
$appartamento = explode(", ,",risul_query($dati_transazione,0,'dati_transazione4'));
$nometipotariffa = explode(",",risul_query($dati_transazione,0,'dati_transazione5'));
$numpersone = explode(",",risul_query($dati_transazione,0,'dati_transazione6'));
$assegnazioneapp = explode(",",risul_query($dati_transazione,0,'dati_transazione7'));
$num_app_richiesti = explode(",",risul_query($dati_transazione,0,'dati_transazione8'));
$lista_app = explode(", ,",risul_query($dati_transazione,0,'dati_transazione9'));
$spezzetta = explode(",",risul_query($dati_transazione,0,'dati_transazione10'));
$prenota_vicine_vett = explode(",",risul_query($dati_transazione,0,'dati_transazione12'));
$prenota_vicine = $prenota_vicine_vett[0];
$num_letti_agg_max = explode(",",risul_query($dati_transazione,0,'dati_transazione14'));
$idospiti_transazione = risul_query($dati_transazione,0,'dati_transazione15');
$numordine_transazione = risul_query($dati_transazione,0,'dati_transazione16');
$parentela_transazione = risul_query($dati_transazione,0,'dati_transazione17');
$app_eliminati_costi = unserialize(risul_query($dati_transazione,0,'dati_transazione18'));
$dati_extra = explode(";",risul_query($dati_transazione,0,'dati_transazione19'));
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
${"inizioperiodo".$n_t} = $inizioperiodo[($n_t - 1)];
${"fineperiodo".$n_t} = $fineperiodo[($n_t - 1)];
${"appartamento".$n_t} = $appartamento[($n_t - 1)];
${"nometipotariffa".$n_t} = $nometipotariffa[($n_t - 1)];
${"numpersone".$n_t} = $numpersone[($n_t - 1)];
${"assegnazioneapp".$n_t} = $assegnazioneapp[($n_t - 1)];
${"num_app_richiesti".$n_t} = $num_app_richiesti[($n_t - 1)];
${"lista_app".$n_t} = $lista_app[($n_t - 1)];
${"spezzetta".$n_t} = $spezzetta[($n_t - 1)];
${"prenota_vicine".$n_t} = $prenota_vicine_vett[$n_t];
${"num_letti_agg_max".$n_t} = $num_letti_agg_max[($n_t - 1)];
$dati_extra_corr = explode(",",$dati_extra[($n_t - 1)]);
${"diff_persone".$n_t} = $dati_extra_corr[0];
${"interrompi_vicine_ogni".$n_t} = $dati_extra_corr[1];
${"numpersone_orig".$n_t} = $dati_extra_corr[2];
} # fine for $n_t
$cat_persone_nr = unserialize(risul_query($dati_transazione,0,'dati_transazione21'));
$numpersone_nr = $cat_persone_nr['numpersone_nr'];
unset($cat_persone_nr['numpersone_nr']);
unset($id_prenota_temp);
$prenota_temp = risul_query($dati_transazione,0,'dati_transazione13');
if ($prenota_temp) {
$prenota_temp = explode(", ,",$prenota_temp);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$prenota_temp2 = explode(",",$prenota_temp[($n_t - 1)]);
for ($num1 = 1 ; $num1 <= ${"num_app_richiesti".$n_t} ; $num1++) {
$id_prenota_temp[$n_t][$num1] = aggslashdb($prenota_temp2[($num1 - 1)]);
} # fine for $num1
} # fine for $n_t
} # fine if ($prenota_temp)
if (isset($occ_app_agenzia) and $occ_app_agenzia == "SI") {
$spezzetta1 = "occ_app_agenzia";
$n_tronchi1 = "";
$vet_appartamenti_u = "";
$vett_idinizio_u = "";
$vett_idfine_u = "";
$lunghezza_periodo_u = "";
} # fine if (isset($occ_app_agenzia) and $occ_app_agenzia == "SI")
else {
$dati_transazione20 = explode(", ,",(string) risul_query($dati_transazione,0,'dati_transazione20'));
$n_tronchi1 = $dati_transazione20[0];
$vet_appartamenti_u = fixset($dati_transazione20[1]);
$vett_idinizio_u = fixset($dati_transazione20[2]);
$vett_idfine_u = fixset($dati_transazione20[3]);
$lunghezza_periodo_u = fixset($dati_transazione20[4]);
} # fine else if (isset($occ_app_agenzia) and $occ_app_agenzia == "SI")
if ($idospiti_transazione) $idospiti = unserialize($idospiti_transazione);
if ($numordine_transazione) $num_ordine = unserialize($numordine_transazione);
if ($parentela_transazione) $parentela = unserialize($parentela_transazione);
unset($inizioperiodo);
unset($fineperiodo);
unset($appartamento);
unset($nometipotariffa);
unset($numpersone);
unset($assegnazioneapp);
unset($num_app_richiesti);
unset($lista_app);
unset($spezzetta);
$num_ospiti = array();
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) for ($num1 = 1 ; $num1 <= ${"num_app_richiesti".$n_t} ; $num1++) $num_ospiti[$n_t][$num1] = 0;

$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
include($file_interconnessioni);
if (@is_array($ic_present)) {
unset($interconnection_name);
$interconn_dir = opendir("./includes/interconnect/");
while ($mod_ext = readdir($interconn_dir)) {
if ($mod_ext != "." and $mod_ext != ".." and @is_dir("./includes/interconnect/$mod_ext")) {
include("./includes/interconnect/$mod_ext/name.php");
if (isset($ic_present[$interconnection_name]) and $ic_present[$interconnection_name] == "SI") {
include("./includes/interconnect/$mod_ext/functions_import.php");
$funz_import_reservations = "import_reservations_".$interconnection_func_name;
$id_utente_origi = $id_utente;
$id_utente = 1;
$funz_import_reservations("","",$file_interconnessioni,$anno,$PHPR_TAB_PRE,2,$id_utente,$HOSTNAME);
$id_utente = $id_utente_origi;
} # fine if (isset($ic_present[$interconnection_name]) and $ic_present[$interconnection_name] == "SI")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($mod_ext = readdir($interconn_dir))
closedir($interconn_dir);
} # fine if (@is_array($ic_present))
} # fine if (@is_file($file_interconnessioni))

} # fine else if ($tipo_transazione != "ins_p")


if ($priv_ins_multiple == "n") {
if ($num_tipologie) $num_tipologie = 1;
$num_app_richiesti1 = 1;
} # fine if ($priv_ins_multiple == "n")


if ($inserito_nuovo_cliente == "SI") {
$tabelle_lock = array("$tableclienti");
$altre_tab_lock = array("$tablepersonalizza");
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
if (${"numpersone".$n_t}) {
$num_persone_tot[$n_t] = ${"numpersone".$n_t};
if (${"num_letti_agg_max".$n_t}) $num_persone_tot[$n_t] = $num_persone_tot[$n_t] + ${"num_letti_agg_max".$n_t};
} # fine if (${"numpersone".$n_t})
else $num_persone_tot[$n_t] = 0;
for ($num1 = 1 ; $num1 <= ${"num_app_richiesti".$n_t} ; $num1++) {
$max_num_ordine = 2;
$idclienti_compagni[$n_t][$num1] = ",";
if (isset($cliente_ospite) and $cliente_ospite == "SI" and $prenota_cli_osp == "p".$num1."_".$n_t) {
$max_num_ordine = 3;
$idclienti_compagni[$n_t][$num1] = ",$idclienti,";
$num_ospiti[$n_t][$num1]++;
$idospiti[$n_t][$num1][$num_ospiti[$n_t][$num1]] = $idclienti;
$num_ordine[$n_t][$num1][$num_ospiti[$n_t][$num1]] = "1";
} # fine if (isset($cliente_ospite) and $cliente_ospite == "SI" and $prenota_cli_osp == "p".$num1."_".$n_t)
for ($num2 = 1 ; $num2 <= $num_persone_tot[$n_t] ; $num2++) {
$suff = "_".$num2."_".$num1."_".$n_t;
if (!empty(${"cognome".$suff})) {
$num_ospiti[$n_t][$num1]++;
$num_osp = $num_ospiti[$n_t][$num1];
$titolo_cli_aux = "";
$cognome_aux = ${"cognome".$suff};
$nome_aux = fixset(${"nome".$suff});
$sesso_aux = fixset(${"sesso".$suff});
$mesenascita_aux = fixset(${"mesenascita".$suff});
$giornonascita_aux = fixset(${"giornonascita".$suff});
$annonascita_aux = fixset(${"annonascita".$suff});
$nazionenascita_aux = fixset(${"nazionenascita".$suff});
$cittanascita_aux = fixset(${"cittanascita".$suff});
$regionenascita_aux = fixset(${"regionenascita".$suff});
$documento_aux = fixset(${"documento".$suff});
$tipodoc_aux = fixset(${"tipodoc".$suff});
$mesescaddoc_aux = fixset(${"mesescaddoc".$suff});
$giornoscaddoc_aux = fixset(${"giornoscaddoc".$suff});
$annoscaddoc_aux = fixset(${"annoscaddoc".$suff});
$cittadoc_aux = fixset(${"cittadoc".$suff});
$regionedoc_aux = fixset(${"regionedoc".$suff});
$nazionedoc_aux = fixset(${"nazionedoc".$suff});
$nazionalita_aux = fixset(${"nazionalita".$suff});
$lingua_cli_aux = fixset(${"lingua_cli".$suff});
$nazione_aux = fixset(${"nazione".$suff});
$citta_aux = fixset(${"citta".$suff});
$regione_aux = fixset(${"regione".$suff});
$via_aux = fixset(${"via".$suff});
$nomevia_aux = fixset(${"nomevia".$suff});
$numcivico_aux = fixset(${"numcivico".$suff});
$cap_aux = fixset(${"cap".$suff});
$telefono_aux = fixset(${"telefono".$suff});
$telefono2_aux = fixset(${"telefono2".$suff});
$telefono3_aux = fixset(${"telefono3".$suff});
$fax_aux = fixset(${"fax".$suff});
$email_aux = fixset(${"email".$suff});
$email2_aux = fixset(${"email2".$suff});
$email_cert_aux = fixset(${"email_cert".$suff});
$cod_fiscale_aux = fixset(${"cod_fiscale".$suff});
$partita_iva_aux = fixset(${"partita_iva".$suff});
$idospiti[$n_t][$num1][$num_osp] = inserisci_dati_cliente($cognome_aux,$nome_aux,"",$titolo_cli_aux,$sesso_aux,$mesenascita_aux,$giornonascita_aux,$annonascita_aux,$nazionenascita_aux,$cittanascita_aux,$regionenascita_aux,$documento_aux,$tipodoc_aux,$mesescaddoc_aux,$giornoscaddoc_aux,$annoscaddoc_aux,$cittadoc_aux,$regionedoc_aux,$nazionedoc_aux,$nazionalita_aux,$lingua_cli_aux,$nazione_aux,$citta_aux,$regione_aux,$via_aux,$nomevia_aux,$numcivico_aux,$cap_aux,$telefono_aux,$telefono2_aux,$telefono3_aux,$fax_aux,$email_aux,$email2_aux,$email_cert_aux,$cod_fiscale_aux,$partita_iva_aux,$max_num_ordine,$id_utente_ins,$attiva_prefisso_clienti,$prefisso_clienti);
$num_ordine[$n_t][$num1][$num_osp] = $max_num_ordine;
if ($max_num_ordine > 2) {
if (@get_magic_quotes_gpc()) ${"parentela".$suff} = stripslashes(${"parentela".$suff});
$parentela[$n_t][$num1][$num_osp] = htmlspecialchars(${"parentela".$suff});
} # fine if ($max_num_ordine > 2)
$idclienti_compagni[$n_t][$num1] .= $idospiti[$n_t][$num1][$num_osp].",";
$max_num_ordine++;
} # fine if (!empty(${"cognome".$suff}))
} # fine for $num2
} # fine for $num1
} # fine for $n_t
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($num1 = 1 ; $num1 <= ${"num_app_richiesti".$n_t} ; $num1++) {
for ($num2 = 1 ; $num2 <= $num_ospiti[$n_t][$num1] ; $num2++) {
esegui_query("update $tableclienti set idclienti_compagni = '".str_replace(",".$idospiti[$n_t][$num1][$num2].",",",",$idclienti_compagni[$n_t][$num1])."' where idclienti = '".$idospiti[$n_t][$num1][$num2]."' ");
} # fine for $num2
} # fine for $num1
} # fine for $n_t
unlock_tabelle($tabelle_lock);
if (!empty($idospiti)) esegui_query("update $tabletransazioni set dati_transazione15 = '".aggslashdb(serialize($idospiti))."', dati_transazione16 = '".aggslashdb(serialize($num_ordine))."', dati_transazione17 = '".aggslashdb(serialize($parentela))."' where idtransazioni = '$id_transazione' and idsessione = '$id_sessione'");
} # fine if ($inserito_nuovo_cliente == "SI")

# Se si viene da clienti.php e si è selezionato un cliente esistente
if (@get_magic_quotes_gpc()) $idclienti = stripslashes($idclienti);
$idclienti = htmlentities($idclienti);
$fr_idclienti = mex("Utilizza il cliente","clienti.php");
if (str_replace(htmlentities($fr_idclienti)." ","",$idclienti) != $idclienti or str_replace($fr_idclienti." ","",$idclienti) != $idclienti) {
$idclienti = str_replace(htmlentities($fr_idclienti)." ","",$idclienti);
$idclienti = str_replace($fr_idclienti." ","",$idclienti);
$idclienti = str_replace(" ".htmlentities(mex("per la prenotazione","clienti.php")),"",$idclienti);
$idclienti = str_replace(" ".mex("per la prenotazione","clienti.php"),"",$idclienti);
$idclienti = aggslashdb($idclienti);
$cliente_ospite = fixset(${"cliente_ospite_".$idclienti});
$prenota_cli_osp = fixset(${"prenota_cli_osp_".$idclienti});
unset($max_num_ordine);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($num1 = 1 ; $num1 <= ${"num_app_richiesti".$n_t} ; $num1++) {
if ($cliente_ospite == "SI" and $prenota_cli_osp == "p".$num1."_".$n_t) {
$max_num_ordine[$n_t][$num1] = 3;
$num_ospiti[$n_t][$num1]++;
$idospiti[$n_t][$num1][$num_ospiti[$n_t][$num1]] = $idclienti;
$num_ordine[$n_t][$num1][$num_ospiti[$n_t][$num1]] = "1";
} # fine ($cliente_ospite == "SI" and $prenota_cli_osp == "p".$num1."_".$n_t)
else $max_num_ordine[$n_t][$num1] = 2;
} # fine for $num1
} # fine for $n_t
$tabelle_lock = array($tableclienti);
$tabelle_lock = lock_tabelle($tabelle_lock);
esegui_query("update $tableclienti set max_num_ordine = '1' where idclienti = '$idclienti'  ");
$condizione_utente = "";
if ($vedi_clienti == "PROPRI" or $vedi_clienti == "GRUPPI") {
$condizione_utente = "and ( utente_inserimento = '$id_utente'";
if ($vedi_clienti == "GRUPPI") {
foreach ($utenti_gruppi as $idut_gr => $val) if ($idut_gr != $id_utente) $condizione_utente .= " or utente_inserimento = '$idut_gr'";
} # fine if ($vedi_clienti == "GRUPPI")
$condizione_utente .= " )";
} # fine if ($vedi_clienti == "PROPRI" or...
if ($vedi_clienti == "NO") $condizione_utente = "and utente_inserimento = '-1'";
$clienti_compagni = esegui_query("select * from $tableclienti where idclienti_compagni $LIKE '%,".$idclienti.",%' $condizione_utente order by max_num_ordine");
$num_clienti_compagni = numlin_query($clienti_compagni);
for ($num1 = 0 ; $num1 < $num_clienti_compagni ; $num1++) {
$id_clienti_comp = risul_query($clienti_compagni,$num1,'idclienti');
if (isset(${"ospite_".$idclienti."_".$id_clienti_comp}) and ${"ospite_".$idclienti."_".$id_clienti_comp} == "SI") {
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($num2 = 1 ; $num2 <= ${"num_app_richiesti".$n_t} ; $num2++) {
if (${"pren_osp_".$idclienti."_".$id_clienti_comp} == "p$num2"."_$n_t") {
$num_ospiti[$n_t][$num2]++;
$num_osp = $num_ospiti[$n_t][$num2];
$idospiti[$n_t][$num2][$num_osp] = $id_clienti_comp;
$num_ordine[$n_t][$num2][$num_osp] = $max_num_ordine[$n_t][$num2];
if ($num_ordine[$n_t][$num2][$num_osp] < risul_query($clienti_compagni,$num1,'max_num_ordine')) {
esegui_query("update $tableclienti set max_num_ordine = '".aggslashdb($num_ordine[$n_t][$num2][$num_osp])."' where idclienti = '$id_clienti_comp' ");
} # fine if ($num_ordine[$n_t][$num2][$num_osp] < risul_query($clienti_compagni,$num1,'max_num_ordine'))
$max_num_ordine[$n_t][$num2]++;
} # fine if (${"pren_osp_".$idclienti."_".$id_clienti_comp} == "p$num2"."_$n_t")
} # fine for $num2
} # fine for $n_t
} # fine if (isset(${"ospite_".$idclienti."_".$id_clienti_comp}) and ${"ospite_".$idclienti."_".$id_clienti_comp} == "SI")
} # fine for $num1
unlock_tabelle($tabelle_lock);
if (!empty($idospiti)) esegui_query("update $tabletransazioni set dati_transazione15 = '".aggslashdb(serialize($idospiti))."', dati_transazione16 = '".aggslashdb(serialize($num_ordine))."' where idtransazioni = '$id_transazione' and idsessione = '$id_sessione'");
} # fine if (str_replace(htmlentities($fr_idclienti)." ","",$idclienti) != $idclienti or...


for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$inizioperiodo = ${"inizioperiodo".$n_t};
$fineperiodo = ${"fineperiodo".$n_t};
$appartamento = ${"appartamento".$n_t};
$num_app_richiesti = ${"num_app_richiesti".$n_t};
$spezzetta = ${"spezzetta".$n_t};
if ($priv_ins_multiple == 'n' and $num_app_richiesti == 1 and $num_tipologie == 1) $spezzetta = "";

if ($spezzetta) {

# Se si inseriscono più prenotazioni dello stesso tipo
if ($num_app_richiesti > 1 or $num_tipologie > 1) {
${"n_tronchi".$n_t} = $num_app_richiesti;
$vet_appartamenti_u = ",".$appartamento;
$vett_idinizio_u = ",".$inizioperiodo;
$vett_idfine_u = ",".$fineperiodo;
} # fine if ($num_app_richiesti > 1 or $num_tipologie > 1)

# Se esiste $n_tronchi si è deciso di andare avanti
if (${"n_tronchi".$n_t}) {
$vet_appartamenti[$n_t] = explode(",",$vet_appartamenti_u);
$vett_idinizio[$n_t] = explode(",",$vett_idinizio_u);
$vett_idfine[$n_t] = explode(",",$vett_idfine_u);
} # fine if (${"n_tronchi".$n_t})

else {
# Tento di spezzare la prenotazione solo se ne è stata richiesta una sola. Quindi
# n_tronchi = num_app_richiesti se num_app_richiesti != 1 o $num_tipologie != 1 Se,
# dopo questo else, num_app_richiesti = 1, $num_tipologie = 1 e n_tronchi != 1 allora
# la prenotazione è stata spezzata.

include_once("./includes/liberasettimane.php");
include_once("./includes/spezzaprenota.php");

$tabelle_lock = array($tableprenota,$tabletransazioni);
$altre_tab_lock = array($tableappartamenti,$tableperiodi,$tableregole,$tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

#${"assegnazioneapp".$n_t} = "v";
#${"lista_app".$n_t} = "";
$app_richiesti = array();
if (strcmp(${"lista_app".$n_t},"")) {
$vett_app = explode(",",${"lista_app".$n_t});
$num_app = count($vett_app);
for ($num1 = 0 ; $num1 < $num_app ; $num1++) $app_richiesti[$vett_app[$num1]] = "SI";
} # fine if (strcmp(${"lista_app".$n_t,""}))

# Se ci sono regole per $app_agenzia inserisco prenotazioni fisse in $app_prenota_id
# e controllo la situazione con spezzaprenota
$condizioni_regole1_non_sel = "";
if ($applica_regole1 == "n" or ($applica_regole1 == "f" and $attiva_regole1_consentite != "n")) {
for ($num1 = 0 ; $num1 < count($regole1_consentite) ; $num1++) if ($regole1_consentite[$num1]) $condizioni_regole1_non_sel .= "motivazione != '".$regole1_consentite[$num1]."' and ";
if ($condizioni_regole1_non_sel) $condizioni_regole1_non_sel = " and (motivazione2 = 'x' or (".str_replace("motivazione != ' '","motivazione != '' and motivazione is not null",substr($condizioni_regole1_non_sel,0,-5))."))";
} # fine if ($applica_regole1 == "n" or ($applica_regole1 == "f" and...
if (!$condizioni_regole1_non_sel and ($applica_regole1 == "m" or $applica_regole1 == "f")) $condizioni_regole1_non_sel = " and motivazione2 = 'x'";
$app_agenzia = esegui_query("select * from $tableregole where app_agenzia != ''$condizioni_regole1_non_sel ");
$num_app_agenzia = numlin_query($app_agenzia);
$num_app_agenzia1 = 0;
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$mot2 = (string) risul_query($app_agenzia,$num1,'motivazione2');
if ($mot2 != "x") {
$num_app_agenzia1 = 1;
break;
} # fine if ($mot2 != "x")
} # fine for $num1

if ($num_app_agenzia1 and $spezzetta != "occ_app_agenzia") {
unset($limiti_var);
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);
unset($dati_app);
unset($profondita);
unset($vet_appartamenti);
unset($vett_idinizio);
unset($vett_idfine);
$n_tronchi = 0;
$limiti_var['n_ini'] = $inizioperiodo;
$limiti_var['n_fine'] = $fineperiodo;
$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
if (numlin_query($max_prenota) != 0) $tot_prenota = risul_query($max_prenota,0,0);
else $tot_prenota = 0;
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var ($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");
$info_periodi['numero'] = $num_app_agenzia;
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$info_periodi['app'][$num1] = risul_query($app_agenzia,$num1,'app_agenzia');
$info_periodi['ini'][$num1] = risul_query($app_agenzia,$num1,'iddatainizio');
$info_periodi['fine'][$num1] = risul_query($app_agenzia,$num1,'iddatafine');
} # fine for $num1
inserisci_prenota_fittizie($info_periodi,$profondita,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett,$app_assegnabili_id);

spezzaprenota($inizioperiodo,$fineperiodo,$anno,$limiti_var,$profondita,$app_richiesti,$n_tronchi,$vet_appartamenti,$vett_idinizio,$vett_idfine,$numpersone1,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");

if ($n_tronchi != -1) {
$risul_agg = aggiorna_tableprenota($app_prenota_id,$app_orig_prenota_id,$tableprenota);
if (!$risul_agg) $n_tronchi = -1;
} # fine if ($n_tronchi != -1)

if ($n_tronchi == 1) {
#${"n_tronchi".$n_t} = 1;
$appartamento = $vet_appartamenti[1];
unset($vet_appartamenti);
unset($vett_idinizio);
unset($vett_idfine);
$vet_appartamenti[$n_t][1] = $appartamento;
$vett_idinizio[$n_t][1] = $inizioperiodo;
$vett_idfine[$n_t][1] = $fineperiodo;
} # fine if ($n_tronchi == 1)

if ($n_tronchi != 1) {
$torna_invece_di_ok = "SI";
echo "<br>".mex("Non si può inserire la prenozione senza utilizzare gli appartamenti della regola di assegnazione 1",'unit.php');
if ($n_tronchi > 1) echo mex(" o spezzarla",$pag);
echo ".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"idclienti\" value=\"$idclienti\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"occ_app_agenzia\" value=\"SI\">";
$manda_dati_assegnazione = "NO";
include ("./includes/dati_form_prenotazione.php");
echo "
<button class=\"cont\" type=\"submit\"><div>".mex("Utilizza anche gli appartamenti della regola 1",'unit.php')."</div></button><br>
</div></form><br>";
if ($n_tronchi > 1) {
$vet_appartamenti_u = "";
$vett_idinizio_u = "";
$vett_idfine_u = "";
for ($num1 = 1 ; $num1 <= $n_tronchi ; $num1 = $num1 + 1) {
$vet_appartamenti_u = $vet_appartamenti_u . "," . $vet_appartamenti[$num1];
$vett_idinizio_u = $vett_idinizio_u . "," . $vett_idinizio[$num1];
$vett_idfine_u = $vett_idfine_u . "," . $vett_idfine[$num1];
} # fine for $num1
$lunghezza_periodo_u = $fineperiodo - $inizioperiodo + 1;
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"idclienti\" value=\"$idclienti\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
esegui_query("update $tabletransazioni set dati_transazione20 = '$n_tronchi, ,$vet_appartamenti_u, ,$vett_idinizio_u, ,$vett_idfine_u, ,$lunghezza_periodo_u' where idtransazioni = '$id_transazione' and idsessione = '$id_sessione'");
$manda_dati_assegnazione = "NO";
include ("./includes/dati_form_prenotazione.php");
echo "
<button class=\"aroo\" type=\"submit\"><div>".mex("Spezza la prenotazione in",$pag)." $n_tronchi ".mex("parti",$pag)."</div></button>
(".mex("senza utilizzare gli appartamenti della regola 1",'unit.php').").<br>
</div></form><br>";
} # fine if ($n_tronchi > 1)
} # fine if ($n_tronchi != 1)
} # fine if ($num_app_agenzia1 and $spezzetta != "occ_app_agenzia")

# Se non vi sono regole per $app_agenzia o si è deciso di ignorarle.
if ($spezzetta == "occ_app_agenzia" or !$num_app_agenzia1) {
unset($limiti_var);
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);
unset($dati_app);
unset($profondita);
unset($vet_appartamenti);
unset($vett_idinizio);
unset($vett_idfine);
$n_tronchi = 0;
$limiti_var['n_ini'] = $inizioperiodo;
$limiti_var['n_fine'] = $fineperiodo;
$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
if (numlin_query($max_prenota) != 0) $tot_prenota = risul_query($max_prenota,0,0);
else $tot_prenota = 0;
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");
unset($info_periodi);
$info_periodi['numero'] = 0;
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
$mot2 = risul_query($app_agenzia,$num1,'motivazione2');
if ($mot2 == "x") {
$info_periodi['app'][$info_periodi['numero']] = risul_query($app_agenzia,$num1,'app_agenzia');
$info_periodi['ini'][$info_periodi['numero']] = risul_query($app_agenzia,$num1,'iddatainizio');
$info_periodi['fine'][$info_periodi['numero']] = risul_query($app_agenzia,$num1,'iddatafine');
$info_periodi['numero']++;
} # fine if ($mot2 == "x")
} # fine for $num1
if ($info_periodi['numero']) inserisci_prenota_fittizie($info_periodi,$profondita,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett,$app_assegnabili_id);

spezzaprenota($inizioperiodo,$fineperiodo,$anno,$limiti_var,$profondita,$app_richiesti,$n_tronchi,$vet_appartamenti,$vett_idinizio,$vett_idfine,$numpersone1,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");

if ($n_tronchi != -1) {
$risul_agg = aggiorna_tableprenota($app_prenota_id,$app_orig_prenota_id,$tableprenota);
if (!$risul_agg) $n_tronchi = -1;
} # fine if ($n_tronchi != -1)

if ($n_tronchi == -1) {
echo "<br>".mex("Non é stato possibile dividere la prenotazione a causa del numero di persone",$pag).".<br>";
} # fine else if ($n_tronchi == -1)

if ($n_tronchi == 1) {
#${"n_tronchi".$n_t} = 1;
$appartamento = $vet_appartamenti[1];
unset($vet_appartamenti);
unset($vett_idinizio);
unset($vett_idfine);
$vet_appartamenti[$n_t][1] = $appartamento;
$vett_idinizio[$n_t][1] = $inizioperiodo;
$vett_idfine[$n_t][1] = $fineperiodo;
} # fine if ($n_tronchi == 1)

if ($n_tronchi > 1) {
$torna_invece_di_ok = "SI";
$vet_appartamenti_u = "";
$vett_idinizio_u = "";
$vett_idfine_u = "";
for ($num1 = 1 ; $num1 <= $n_tronchi ; $num1 = $num1 + 1) {
$vet_appartamenti_u = $vet_appartamenti_u . "," . $vet_appartamenti[$num1];
$vett_idinizio_u = $vett_idinizio_u . "," . $vett_idinizio[$num1];
$vett_idfine_u = $vett_idfine_u . "," . $vett_idfine[$num1];
} # fine for $num1
$lunghezza_periodo_u = $fineperiodo - $inizioperiodo + 1;
echo "<br>".mex("Non è possibile inserire la prenotazione senza",$pag)." <div style=\"display: inline; color: red;\">".mex("dividerla",$pag)."</div> ".mex("in",$pag)." <b>$n_tronchi</b> ".mex("parti",$pag).".<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"idclienti\" value=\"$idclienti\">
<input type=\"hidden\" name=\"origine\" value=\"$origine\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
esegui_query("update $tabletransazioni set dati_transazione20 = '$n_tronchi, ,$vet_appartamenti_u, ,$vett_idinizio_u, ,$vett_idfine_u, ,$lunghezza_periodo_u' where idtransazioni = '$id_transazione' and idsessione = '$id_sessione'");
$manda_dati_assegnazione = "NO";
include ("./includes/dati_form_prenotazione.php");
echo "
<button class=\"aroo\" type=\"submit\"><div>".mex("Spezza la prenotazione in",$pag)." $n_tronchi ".mex("parti",$pag)."</div></button><br>
</div></form><br>";
} # fine if ($n_tronchi > 1)
} # fine if ($spezzetta == "occ_app_agenzia" or !$num_app_agenzia1)

unlock_tabelle($tabelle_lock);

${"n_tronchi".$n_t} = $n_tronchi;
} # fine else if (${"n_tronchi".$n_t})
} # fine if ($spezzetta)


else {
${"n_tronchi".$n_t} = 1;
$vet_appartamenti[$n_t][1] = $appartamento;
$vett_idinizio[$n_t][1] = $inizioperiodo;
$vett_idfine[$n_t][1] = $fineperiodo;
} # fine else if ($spezzetta)

} # fine for $n_t



if (empty($torna_invece_di_ok)) {


$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (!empty($idmessaggi)) $tabelle_lock = array($tableprenota,$tablecostiprenota,$tablerclientiprenota,$tablemessaggi,$tablerelinventario);
else $tabelle_lock = array($tableprenota,$tablecostiprenota,$tablerclientiprenota,$tablerelinventario);
#if (@is_file($file_interconnessioni)) $tabelle_lock[count($tabelle_lock)] = $tablecache;
$altre_tab_lock = array($tablenometariffe,$tableperiodi,$tableappartamenti,$tableclienti,$tableregole,$tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$continuare = "SI";

$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$idclienti = aggslashdb($idclienti);
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = '$idclienti'");
if (numlin_query($dati_cliente) == 0) $continuare = "NO";
else {
$cognome = risul_query($dati_cliente,0,'cognome');
$utente_inserimento_cliente = risul_query($dati_cliente,0,'utente_inserimento');
if ($inserito_nuovo_cliente == "NO" and ($vedi_clienti == "NO" or ($vedi_clienti == "PROPRI" and $utente_inserimento_cliente != $id_utente) or ($vedi_clienti == "GRUPPI" and !$utenti_gruppi[$utente_inserimento_cliente]))) $continuare = "NO";
} # fine else if (numlin_query($dati_cliente) == 0)

unset($cat_persone);
$num_costi_presenti = array();
$beniinv_presenti = array();
unset($data_inizio_f);
unset($data_fine_f);
if (!function_exists('dati_tariffe')) include("./includes/funzioni_tariffe.php");
if (!function_exists('dati_costi_agg_ntariffe')) include("./includes/funzioni_costi_agg.php");
$dati_tariffe = dati_tariffe($tablenometariffe,"",$tablepersonalizza,$tableregole);
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,$priv_ins_num_persone,1,1);
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,$dati_tariffe['num'],"NO","",$tableappartamenti,$dati_cat_pers);
$num_prenota_tot = 0;
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) $num_prenota_tot = $num_prenota_tot + ${"n_tronchi".$n_t};


for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$numpersone = ${"numpersone".$n_t};
$n_tronchi = ${"n_tronchi".$n_t};
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
${"costoagg".$numca} = aggslashdb(${"costoagg".$numca."_".$n_t});
${"idcostoagg".$numca} = aggslashdb(${"idcostoagg".$numca."_".$n_t});
${"numsettimane".$numca} = aggslashdb(${"numsettimane".$numca."_".$n_t});
${"nummoltiplica_ca".$numca} = aggslashdb(${"nummoltiplica_ca".$numca."_".$n_t});
${"id_periodi_costo".$numca} = aggslashdb(fixset(${"id_periodi_costo".$numca."_".$n_t}));
} # fine for $numca
${"valuta_caparra".$n_t} = "";
${"cambio_caparra".$n_t} = "";
${"arrotond_caparra".$n_t} = "";
if (${"tipo_val_caparra".$n_t} and substr(${"tipo_val_caparra".$n_t},0,1) == ">") {
${"valuta_caparra".$n_t} = substr(${"tipo_val_caparra".$n_t},1);
${"tipo_val_caparra".$n_t} = "";
if (${"caparra".$n_t}) {
$valuta = $altre_valute['id'][${"valuta_caparra".$n_t}];
if (strcmp((string) $valuta,"")) {
${"caparra".$n_t} = (double) formatta_soldi(${"caparra".$n_t}) / (double) $altre_valute[$valuta]['cambio'];
${"caparra".$n_t} = ${"caparra".$n_t} / (double) $dati_tariffe['tasse_arrotond'];
${"caparra".$n_t} = round(${"caparra".$n_t});
${"caparra".$n_t} = ${"caparra".$n_t} * (double) $dati_tariffe['tasse_arrotond'];
} # fine if (strcmp((string) $valuta,""))
else ${"caparra".$n_t} = "";
} # fine if (${"caparra".$n_t})
} # fine if (${"tipo_val_caparra".$n_t} and substr(${"tipo_val_caparra".$n_t},0,1) == ">")
$numpersone_orig = "";

for ($num1 = 1 ; $num1 <= $n_tronchi ; $num1 = $num1 + 1) {
$appartamento = $vet_appartamenti[$n_t][$num1];
$inizioperiodo = $vett_idinizio[$n_t][$num1];
$idinizioperiodo = $inizioperiodo;
$fineperiodo = $vett_idfine[$n_t][$num1];
$idfineperiodo = $fineperiodo;
$data_inizio = esegui_query("select * from  $tableperiodi where idperiodi = '$inizioperiodo'");
$data_inizio = risul_query($data_inizio,0,'datainizio');
$data_inizio_f[$n_t][$num1] = formatta_data($data_inizio,$stile_data);
$data_fine = esegui_query("select * from  $tableperiodi where idperiodi = '$fineperiodo'");
$data_fine = risul_query($data_fine,0,'datafine');
$data_fine_f[$n_t][$num1] = formatta_data($data_fine,$stile_data);
$lunghezza_periodo = $fineperiodo - $inizioperiodo + 1;
if (isset($numpersone_nr[$n_t][($num1 - 1)]) and strcmp((string) $numpersone_nr[$n_t][($num1 - 1)],"")) $numpersone_corr = $numpersone_nr[$n_t][($num1 - 1)];
else $numpersone_corr = $numpersone;
#if (${"diff_persone".$n_t} and ($num1 + ${"diff_persone".$n_t}) > $n_tronchi) $numpersone_corr = $numpersone - 1;

if (!empty($id_prenota_temp[$n_t][$num1])) {
$prenota_temp_esistente = esegui_query("select idappartamenti from $tableprenota where idprenota = '".$id_prenota_temp[$n_t][$num1]."' and idclienti = '0' and assegnazioneapp = '".aggslashdb(${"assegnazioneapp".$n_t})."' ");
if (numlin_query($prenota_temp_esistente) == 1) {
$vet_appartamenti[$n_t][$num1] = risul_query($prenota_temp_esistente,0,'idappartamenti');
$appartamento = $vet_appartamenti[$n_t][$num1];
esegui_query("delete from $tableprenota where idprenota = '".$id_prenota_temp[$n_t][$num1]."' ","",1);
} # fine if (numlin_query($prenota_temp_esistente) == 1)
} # fine (!empty($id_prenota_temp[$n_t][$num1]))

$prenota_gia_esistente = esegui_query("select * from $tableprenota where idappartamenti = '$appartamento' and iddatainizio <= $fineperiodo and iddatafine >= $inizioperiodo");
$prenota_gia_esistente = numlin_query($prenota_gia_esistente);
if ($prenota_gia_esistente != 0) {
echo "<br><div style=\"display: inline; color: red;\"><b>".mex("Non si è potuto inserire la prenotazione a nome di",$pag)." $cognome ".mex("dal",$pag)." ".$data_inizio_f[$n_t][$num1]." ".mex("al",$pag)." ".$data_fine_f[$n_t][$num1]."
 ".mex("perchè il database è stato modificato nel frattempo",$pag).".</b></div><br><hr style=\"width: 95%\">";
$continuare = "NO";
} # fine if ($prenota_gia_esistente != 0)

if ($priv_ins_periodi_passati != "s") {
$id_periodo_corrente = calcola_id_periodo_corrente($anno);
if ($id_periodo_corrente >= $inizioperiodo) $continuare = "NO";
} # fine if ($priv_ins_periodi_passati != "s")
if ($fineperiodo < $inizioperiodo) $continuare = "NO";

$cat_persone[$n_t][$num1] = array('num' => 0);
#if ($priv_ins_num_persone != "s") unset($numpersone);
#${"numpersone".$n_t} = $numpersone;
if ($numpersone and controlla_num_pos($numpersone) != "SI") $continuare = "NO";
if ($dati_cat_pers['num']) {
$numpersone_cat_pers = 0;
$osp_princ_trovato = 0;
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if (!empty($cat_persone_nr[$n_t][($num1 - 1)])) $catpers_corr = $cat_persone_nr[$n_t][($num1 - 1)][$cat_persone_nr[$n_t][($num1 - 1)]['ord'][$num2]]['molt'];
else $catpers_corr = ${"cat$num2"."_numpers$n_t"};
if ($catpers_corr) {
if (controlla_num_pos($catpers_corr) == "NO") $continuare = "NO";
else $numpersone_cat_pers += $catpers_corr;
$cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['num']]['molt'] = $catpers_corr;
$cat_persone[$n_t][$num1]['ord'][$num2] = $cat_persone[$n_t][$num1]['num'];
$cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['num']]['ord'] = $num2;
$cat_persone[$n_t][$num1]['num']++;
if ($dati_cat_pers[$num2]['osp_princ'] == "s") $osp_princ_trovato = 1;
} # fine if ($catpers_corr)
} # fine for $num2
if (isset($numpersone_nr[$n_t][($num1 - 1)]) and strcmp((string) $numpersone_nr[$n_t][($num1 - 1)],"")) $numpersone_corr = $numpersone_nr[$n_t][($num1 - 1)];
else $numpersone_corr = $numpersone;
if (!$numpersone_corr) $numpersone_corr = 0;
if (${"numpersone_orig".$n_t}) {
if (!$numpersone_orig) {
$numpersone_orig = ${"numpersone_orig".$n_t};
$osp_princ_orig = 0;
} # fine if (!$numpersone_orig)
$numpersone_orig = $numpersone_orig - $numpersone_corr;
if ($osp_princ_trovato) $osp_princ_orig = 1;
if (!$numpersone_orig and !$osp_princ_orig) $continuare = "NO";
$osp_princ_trovato = 1;
} # fine if (${"numpersone_orig".$n_t})
if ($numpersone_cat_pers != $numpersone_corr or ($numpersone and !$osp_princ_trovato)) $continuare = "NO";
} # fine if ($dati_cat_pers['num'])

$appartamento_esistente = esegui_query("select idappartamenti,maxoccupanti from $tableappartamenti where idappartamenti = '$appartamento'");
if (numlin_query($appartamento_esistente) != 1) {
echo "<br><div style=\"display: inline; color: red;\"><b>".mex("Non si è potuto inserire la prenotazione a nome di",$pag)." $cognome ".mex("dal",$pag)." ".$data_inizio_f[$n_t][$num1]." ".mex("al",$pag)." ".$data_fine_f[$n_t][$num1]."
 ".mex("perchè l'appartamento assegnato non esiste più",'unit.php').".</b></div><br><hr style=\"width: 95%\">";
$continuare = "NO";
} # fine if (numlin_query($appartamento_esistente) != 1)
else {
$maxoccupanti = risul_query($appartamento_esistente,0,'maxoccupanti');
if ($maxoccupanti and $numpersone > $maxoccupanti) $continuare = "NO";
} # fine else if (numlin_query($appartamento_esistente) != 1)

$appartamento_chiuso = esegui_query("select idregole from $tableregole where iddatainizio <= '$fineperiodo' and iddatafine >= '$inizioperiodo' and app_agenzia = '$appartamento' and motivazione2 = 'x' ");
if (numlin_query($appartamento_chiuso)) $continuare = "NO";

if (${"assegnazioneapp".$n_t} == "c" and str_replace(",".$appartamento.",","",",".${"lista_app".$n_t}.",") == ",".${"lista_app".$n_t}.",") $continuare = "NO";

if ($attiva_regole1_consentite == "s") {
if (${"assegnazioneapp".$n_t} != "k" and ${"assegnazioneapp".$n_t} != "c") $continuare = "NO";
if (${"assegnazioneapp".$n_t} == "k") $appartameti_in_lista[0] = $appartamento;
if (${"assegnazioneapp".$n_t} == "c") $appartameti_in_lista = explode(",",${"lista_app".$n_t});
for ($n_lista = 0 ; $n_lista < count($appartameti_in_lista) ; $n_lista++) {
$appartamento_lista = $appartameti_in_lista[$n_lista];
$motivazioni_regola1 = esegui_query("select motivazione,iddatainizio,iddatafine from $tableregole where iddatainizio <= '$fineperiodo' and iddatafine >= '$inizioperiodo' and app_agenzia = '$appartamento_lista' and (motivazione2 != 'x' or motivazione2 is NULL) order by iddatainizio");
if (numlin_query($motivazioni_regola1) == 0) $continuare = "NO";
else {
unset($motivazioni_consentite);
for ($num2 = 0 ; $num2 < count($regole1_consentite) ; $num2++) $motivazioni_consentite[$regole1_consentite[$num2]] = "SI";
$iddatainizio_regole_tot = risul_query($motivazioni_regola1,0,'iddatainizio');
$iddatafine_regole_tot = risul_query($motivazioni_regola1,0,'iddatafine');
$motivazione = risul_query($motivazioni_regola1,0,'motivazione');
if (!$motivazione) $motivazione = " ";
if (!$motivazioni_consentite[$motivazione]) $continuare = "NO";
for ($num2 = 1 ; $num2 < numlin_query($motivazioni_regola1) ; $num2++) {
$motivazione = risul_query($motivazioni_regola1,$num2,'motivazione');
if (!$motivazione) $motivazione = " ";
if (!$motivazioni_consentite[$motivazione]) $continuare = "NO";
$iddatainizio_regola = risul_query($motivazioni_regola1,$num2,'iddatainizio');
if ($iddatainizio_regola == ($iddatafine_regole_tot + 1)) $iddatafine_regole_tot = risul_query($motivazioni_regola1,$num2,'iddatafine');
else $continuare = "NO";
} # fine for $num2
if ($iddatainizio_regole_tot > $inizioperiodo or $iddatafine_regole_tot < $fineperiodo) $continuare = "NO";
} # fine else if (numlin_query($motivazioni_regola1) == 0)
} # fine for $n_lista
} # fine if ($attiva_regole1_consentite == "s")

if (!$numpersone and $dati_tariffe[${"nometipotariffa".$n_t}]['moltiplica'] == "p") $continuare = "NO";

if (($attiva_tariffe_consentite == "s" and !isset($tariffe_consentite_vett[substr(${"nometipotariffa".$n_t},7)])) or substr(${"nometipotariffa".$n_t},0,7) != "tariffa") $continuare = "NO";
for ($num2 = $inizioperiodo; $num2 <= $fineperiodo; $num2++) {
$rigasettimana = esegui_query("select * from $tableperiodi where idperiodi = '$num2' ");
$nometipotariffa_aux = ${"nometipotariffa".$n_t};
$esistetariffa = risul_query($rigasettimana,0,$nometipotariffa_aux);
$nometipotariffa_aux = ${"nometipotariffa".$n_t}."p";
$esistetariffap = risul_query($rigasettimana,0,$nometipotariffa_aux);
if ((!strcmp((string) $esistetariffa,"") or $esistetariffa < 0) and (!strcmp((string) $esistetariffap,"") or $esistetariffap < 0)) $continuare = "NO";
if (!empty($dati_tariffe[${"nometipotariffa".$n_t}]['chiusa'][$num2])) $continuare = "NO";
} # fine for $num2

$costi_aggiuntivi_sbagliati = "NO";
$id_costi_presenti = array();
$num_letti_agg = array('max' => 0);
${"numcostiagg_".$n_t."t".$num1} = $numcostiagg;
for ($num2 = 0 ; $num2 < $dati_ca['num'] ; $num2++) {
if (isset($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}]) and ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num2]['id']] == "SI")) {
if ($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}] == "r") $periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num2,$idinizioperiodo,$idfineperiodo,1);
if ($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}] == "s" or ($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}] == "r" and $periodo_costo_trovato != "NO")) {
$nometipotariffa_aux = ${"nometipotariffa".$n_t};
if ($lunghezza_periodo_u) $lunghezza_periodo_controlla = $lunghezza_periodo_u;
else $lunghezza_periodo_controlla = $lunghezza_periodo;
if (associa_costo_a_tariffa($dati_ca,$num2,$nometipotariffa_aux,$lunghezza_periodo_controlla) == "SI") {
${"numcostiagg_".$n_t."t".$num1}++;
${"costoagg".(${"numcostiagg_".$n_t."t".$num1})} = "SI";
${"idcostoagg".(${"numcostiagg_".$n_t."t".$num1})} = $dati_ca[$num2]['id'];
} # fine if (associa_costo_a_tariffa($dati_ca,$num2,${"nometipotariffa".$n_t},$lunghezza_periodo_controlla) == "SI")
else {
if ($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}] == "r" and $dati_ca[$num2]['tipo'] == "s") {
$sett_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num2,$idinizioperiodo,$idfineperiodo,"","");
if ($sett_costo) $costi_aggiuntivi_sbagliati = "SI";
} # fine if ($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}] == "r" and...
else $costi_aggiuntivi_sbagliati = "SI";
} # fine else if (associa_costo_a_tariffa($dati_ca,$num2,${"nometipotariffa".$n_t},$lunghezza_periodo_controlla) == "SI")
} # fine if ($dati_ca[$num2]["tipo_associa_".$nometipotariffa] == "s" or...
} # fine if (isset($dati_ca[$num2]["tipo_associa_".${"nometipotariffa".$n_t}]) and ($attiva_costi_agg_consentiti == "n" or...
} # fine for $num2
for ($numca = 1 ; $numca <= ${"numcostiagg_".$n_t."t".$num1} ; $numca++) {
$costoagg = "costoagg".$numca;
$idcostoagg = "idcostoagg".$numca;
if (($priv_ins_costi_agg != "s" and $numca <= $numcostiagg) or ($attiva_costi_agg_consentiti != "n" and $costi_agg_consentiti_vett[$$idcostoagg] != "SI")) $$costoagg = "";
${"costoagg".$numca."_".$n_t."t".$num1} = $$costoagg;
if ($$costoagg == "SI") {
$numsettimane = "numsettimane".$numca;
$nummoltiplica_ca = "nummoltiplica_ca".$numca;
${"idcostoagg".$numca."_".$n_t."t".$num1} = $$idcostoagg;
$id_periodi_costo = "id_periodi_costo".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
$numsettimane_tronco = "";
if ($$idcostoagg != $dati_ca[$num_costo]['id']) $costi_aggiuntivi_sbagliati = "SI";
if (isset($id_costi_presenti[$idcostoagg]) or ($dati_ca[$num_costo]['mostra'] != "s" and $numca <= $numcostiagg)) $costi_aggiuntivi_sbagliati = "SI";
$id_costi_presenti[$idcostoagg] = 1;
if (!empty($dati_ca[$num_costo]["incomp_".${"nometipotariffa".$n_t}])) $costi_aggiuntivi_sbagliati = "SI";
if ((!empty($$numsettimane) and controlla_num_pos($$numsettimane) == "NO") or (!empty($$nummoltiplica_ca) and controlla_num_pos($$nummoltiplica_ca) == "NO")) $costi_aggiuntivi_sbagliati = "SI";
else {
if (!empty($$numsettimane)) {
$totsettimane = $idfineperiodo - $idinizioperiodo + 1 ;
if ($$numsettimane > $totsettimane) {
if ($num1 == $n_tronchi) $costi_aggiuntivi_sbagliati = "SI";
else $numsettimane_tronco = $totsettimane;
} # fine if ($$numsettimane > $totsettimane)
else $numsettimane_tronco = $$numsettimane;
$$numsettimane = $$numsettimane - $numsettimane_tronco;
} # fine if (!empty($$numsettimane))
} # fine else if ((!empty($$numsettimane) and controlla_num_pos($$numsettimane) == "NO") or...
#if ($dati_ca[$num_costo][tipo_val] == "q") {
#if ($costo_totale_presente == "SI") $costi_aggiuntivi_sbagliati = "SI";
#$costo_totale_presente = "SI";
#} # fine if ($dati_ca[$num_costo][tipo_val] == "q")
$id_periodi_costo_aux = fixset($$id_periodi_costo);
$settimane_costo_aux = fixset(${"settimane_costo".$numca."_".$n_t."t".$num1});
$nummoltiplica_ca_aux = fixset($$nummoltiplica_ca);
${"settimane_costo".$numca."_".$n_t."t".$num1} = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$id_periodi_costo_aux,$numsettimane_tronco);
if (!${"settimane_costo".$numca."_".$n_t."t".$num1} and $dati_ca[$num_costo]['tipo'] == "s" and $dati_ca[$num_costo]['var_numsett'] == "n") ${"costoagg".$numca."_".$n_t."t".$num1} = "";
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo_aux);
if ($periodo_costo_trovato == "NO") $costi_aggiuntivi_sbagliati = "SI";
if (($dati_ca[$num_costo]['moltiplica'] == "p" or $dati_ca[$num_costo]['moltiplica'] == "t") and !$numpersone) $costi_aggiuntivi_sbagliati = "SI";
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num']) {
if ($numca <= $numcostiagg) {
if (controlla_num_pos(${"catpers_ca".$numca."_".$n_t}) == "NO" or ${"catpers_ca".$numca."_".$n_t} >= $dati_cat_pers['num']) $costi_aggiuntivi_sbagliati = "SI";
} # fine if ($numca <= $numcostiagg)
else ${"catpers_ca".$numca."_".$n_t} = "";
} # fine if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num'])
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg,$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,"",$nummoltiplica_ca_aux,$numpersone_corr,$dati_cat_pers,fixset(${"catpers_ca".$numca."_".$n_t}));
} # fine if ($$costoagg == "SI")
} # fine for $numca

for ($numca = 1 ; $numca <= ${"numcostiagg_".$n_t."t".$num1} ; $numca++) {
if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI") {
$idcostoagg = "idcostoagg".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
$settimane_costo_aux = ${"settimane_costo".$numca."_".$n_t."t".$num1};
$nummoltiplica_ca_aux = ${"nummoltiplica_ca".$numca};
calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_aux,$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,$nummoltiplica_ca_aux,$numpersone_corr,$cat_persone[$n_t][$num1],$num_letti_agg);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti,$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,$moltiplica_aux) == "NO") $costi_aggiuntivi_sbagliati = "SI";
if (str_replace(",$appartamento,","",",".$dati_ca[$num_costo]['appincompatibili'].",") != ",".$dati_ca[$num_costo]['appincompatibili'].",") $costi_aggiuntivi_sbagliati = "SI";
if (!empty($dati_ca[$num_costo]['tipo_beniinv'])) {
$nrc_aux = "";
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti,$nrc_aux,"SI",$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,$moltiplica_aux,$appartamento);
${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1} = $nrc_aux;
if ($risul != "SI") $costi_aggiuntivi_sbagliati = "SI";
} # fine if (!empty($dati_ca[$num_costo]['tipo_beniinv']))
if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num_costo]['molt_max'] != "x") {
$num_max = 0;
$num_max_check = 0;
if ($dati_ca[$num_costo]['molt_max'] == "n") $num_max = $dati_ca[$num_costo]['molt_max_num'];
if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone_corr) {
$num_max = $numpersone_corr;
if ($num_max) $num_max_check = 1;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
$cat_persone_corr = $cat_persone[$n_t][$num1];
if (empty($cat_persone_corr)) {
$cat_persone_corr = array(0 => array());
$cat_persone_corr[0]['molt'] = $numpersone_corr;
$cat_persone_corr[0]['ord'] = 0;
$cat_persone_corr['ord'][0] = 0;
$cat_persone_corr['num'] = 1;
} # fine if (empty($cat_persone_corr))
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_max = 0;
for ($num2 = 0 ; $num2 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num2++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num2];
if ($dati_ca[$num_costo]['cp_molt'][$cp]['esist'] and $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt']) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_max += $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
else $num_max = $num_max - $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
} # fine if ($dati_ca[$num_costo]['cp_molt'][$cp]['esist'] and $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'])
} # fine for $num2
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
} # fine if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone_corr)
if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max']) {
$num_letti_agg_corr = $num_letti_agg['max'];
if ($num_letti_agg_corr) $num_max_check = 1;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr = 0;
for ($num2 = 0 ; $num2 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num2++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num2];
if ($dati_ca[$num_costo]['cp_molt'][$cp]['esist'] and $num_letti_agg['catp_tot_max'][$cp]) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr += $num_letti_agg['catp_tot_max'][$cp];
else $num_letti_agg_corr = $num_letti_agg_corr - $num_letti_agg['catp_tot_max'][$cp];
} # fine if ($dati_ca[$num_costo]['cp_molt'][$cp]['esist'] and $num_letti_agg['catp_tot_max'][$cp])
} # fine for $num2
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
$num_max += $num_letti_agg_corr;
} # fine if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max'])
if ($num_max or $num_max_check) {
if ($dati_ca[$num_costo]['molt_max'] != "n" and $dati_ca[$num_costo]['molt_max_num']) $num_max = $num_max - $dati_ca[$num_costo]['molt_max_num'];
if ($nummoltiplica_ca_aux > $num_max) $costi_aggiuntivi_sbagliati = "SI";
} # fine if ($num_max or $num_max_check)
} # fine if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num1]['molt_max'] != "x")
${"moltiplica".$numca."_".$n_t."t".$num1} = $moltiplica_aux;
} # fine if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI")
} # fine for $numca

if ($num1 == 1) {
$oggi_costo = date("Ymd",(time() + (C_DIFF_ORE * 3600)));
if (!empty($idmessaggi)) {
if ($n_t == 1) $dati_mess = esegui_query("select dati_messaggio15,datainserimento from $tablemessaggi where tipo_messaggio = 'rprenota' and idutenti $LIKE '%,$id_utente,%' and idmessaggi = '".aggslashdb($idmessaggi)."' and dati_messaggio1 = 'da_inserire' ");
if (numlin_query($dati_mess) == 1) {
$oggi_costo = str_replace("-","",substr(risul_query($dati_mess,0,'datainserimento'),0,10));
if (strcmp((string) ${"valuta_caparra".$n_t},"")) {
if ($n_t == 1) $dati_mess_valuta = explode("<d>",risul_query($dati_mess,0,'dati_messaggio15'));
if (${"valuta_caparra".$n_t} == $dati_mess_valuta[25]) {
${"cambio_caparra".$n_t} = $dati_mess_valuta[26];
${"arrotond_caparra".$n_t} = $dati_mess_valuta[27];
} # fine if (${"valuta_caparra".$n_t} == $dati_mess_valuta[25])
} # fine if (strcmp((string) ${"valuta_caparra".$n_t},""))
} # fine if (numlin_query($dati_mess) == 1)
} # fine if (!empty($idmessaggi))
} # fine if ($num1 == 1)


if ($costi_aggiuntivi_sbagliati == "SI") {
echo "<br><div style=\"display: inline; color: red;\"><b>".mex("Non si è potuto inserire un costo aggiuntivo della prenotazione a nome di",$pag)." $cognome ".mex("dal",$pag)." ".$data_inizio_f[$n_t][$num1]." ".mex("al",$pag)." ".$data_fine_f[$n_t][$num1]."
 ".mex("perchè il database è stato modificato nel frattempo",$pag).".</b></div><br><hr style=\"width: 95%\">";
$continuare = "NO";
} # fine if ($costi_aggiuntivi_sbagliati == "SI")

else {

if (!$numpersone_corr) $numpersone_costi_poss = 0;
else $numpersone_costi_poss = $numpersone_corr;

# calcolo costi da associare se possibile
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num_costo]['id']] == "SI") {
$associa_costo = "NO";
$nometipotariffa_aux = ${"nometipotariffa".$n_t};
$associa_costo_tariffa = associa_costo_a_tariffa($dati_ca,$num_costo,$nometipotariffa_aux,$lunghezza_periodo);
if ($associa_costo_tariffa == "SI" and $dati_ca[$num_costo]["tipo_associa_".${"nometipotariffa".$n_t}] == "p") $associa_costo = "SI";
if ($associa_costo_tariffa != "SI" and empty($dati_ca[$num_costo]["incomp_".${"nometipotariffa".$n_t}])) {
if ($dati_ca[$num_costo]['assegna_con_num_prenota'] and $num_prenota_tot >= $dati_ca[$num_costo]['assegna_con_num_prenota']) $associa_costo = "SI";
if ($dati_ca[$num_costo]['assegna_da_ini_prenota']) {
$giorni_lim = substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],1);
$limite = date("Ymd",mktime(0,0,0,substr($data_inizio,5,2),(substr($data_inizio,8,2) - $giorni_lim),substr($data_inizio,0,4)));
if (substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],0,1) == ">" and $oggi_costo < $limite) $associa_costo = "SI";
if (substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],0,1) == "<" and $oggi_costo > $limite) $associa_costo = "SI";
} # fine if ($dati_ca[$num_costo][assegna_da_ini_prenota])
} # fine if ($associa_costo_tariffa != "SI" and...
if ($associa_costo == "SI") {
#if ($dati_ca[$num_costo][tipo_val] == "q" and $costo_totale_presente = "SI") $associa_costo = "NO";
$settimane_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,"","");
$num_letti_agg_copia = $num_letti_agg;
$beniinv_presenti_copia = $beniinv_presenti;

if ($dati_ca[$num_costo]['letto'] == "s") {
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg_copia,$idinizioperiodo,$idfineperiodo,$settimane_costo,"","",$numpersone_costi_poss,$dati_cat_pers,"0");
unset($moltiplica_copia);
unset($num_costi_presenti_copia);
unset($num_ripetizioni_copia);
for ($numca = 1 ; $numca <= ${"numcostiagg_".$n_t."t".$num1} ; $numca++) {
if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI") {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
$settimane_costo_aux = ${"settimane_costo".$numca."_".$n_t."t".$num1};
if ($dati_ca[$num_costo2]['moltiplica'] != "t") $moltiplica_copia[$numca] = ${"moltiplica".$numca."_".$n_t."t".$num1};
else calcola_moltiplica_costo($dati_ca,$num_costo2,$moltiplica_copia[$numca],$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,"",$numpersone_corr,$cat_persone[$n_t][$num1],$num_letti_agg_copia);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo2,$num_costi_presenti_copia,$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,$moltiplica_copia[$numca]) == "NO") $associa_costo = "NO";
if ($dati_ca[$num_costo2]['moltiplica'] == "t") {
$nrc_aux = ${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1};
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo2,$beniinv_presenti_copia,$num_ripetizioni_copia[$numca],"SI",$idinizioperiodo,$idfineperiodo,$settimane_costo_aux,$moltiplica_copia[$numca],$appartamento,$nrc_aux);
if ($risul != "SI") $associa_costo = "NO";
} # fine if ($dati_ca[$num_costo2]['moltiplica'] == "t")
} # fine if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI")
} # fine for $numca
} # fine if ($dati_ca[$num_costo][letto] == "s")
else $num_costi_presenti_copia = $num_costi_presenti;

calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica,$idinizioperiodo,$idfineperiodo,$settimane_costo,"",$numpersone_costi_poss,$cat_persone[$n_t][$num1],$num_letti_agg_copia);
$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo);
if ($periodo_costo_trovato == "NO") $associa_costo = "NO";
else if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti_copia,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica) == "NO") $associa_costo = "NO";
if (!empty($dati_ca[$num_costo]['tipo_beniinv']) and $associa_costo == "SI") {
$num_ripetizioni_costo = "";
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti_copia,$num_ripetizioni_costo,"SI",$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica,$appartamento);
if ($risul != "SI") $associa_costo = "NO";
} # fine if (!empty($dati_ca[$num_costo]['tipo_beniinv']) and $associa_costo == "SI")

if ($associa_costo == "SI") {
$beniinv_presenti = $beniinv_presenti_copia;
$num_costi_presenti = $num_costi_presenti_copia;
if ($dati_ca[$num_costo]['letto'] == "s") {
$num_letti_agg = $num_letti_agg_copia;
for ($numca = 1 ; $numca <= ${"numcostiagg_".$n_t."t".$num1} ; $numca++) {
if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI") {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
${"moltiplica".$numca."_".$n_t."t".$num1} = $moltiplica_copia[$numca];
if ($dati_ca[$num_costo2]['moltiplica'] == "t") ${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1} = $num_ripetizioni_copia[$numca];
} # fine if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI")
} # fine for $numca
} # fine if ($dati_ca[$num_costo]['letto'] == "s")
${"numcostiagg_".$n_t."t".$num1}++;
$numca = ${"numcostiagg_".$n_t."t".$num1};
${"costoagg".$numca."_".$n_t."t".$num1} = "SI";
${"idcostoagg".$numca."_".$n_t."t".$num1} = $dati_ca[$num_costo]['id'];
${"settimane_costo".$numca."_".$n_t."t".$num1} = $settimane_costo;
${"moltiplica".$numca."_".$n_t."t".$num1} = $moltiplica;
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num']) ${"catpers_ca".$numca."_".$n_t} = "";
if (!empty($dati_ca[$num_costo]['tipo_beniinv'])) ${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1} = $num_ripetizioni_costo;
} # fine if ($associa_costo == "SI")
} # fine if ($associa_costo == "SI")
} # fine if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num_costo]['id']] == "SI")
} # fine for $num_costo

} # fine else if ($costi_aggiuntivi_sbagliati == "SI")


} # fine for $num1
} # fine for $n_t


if (!empty($idmessaggi)) {
$mess_esistente = esegui_query("select dati_messaggio2 from $tablemessaggi where tipo_messaggio = 'rprenota' and idutenti $LIKE '%,$id_utente,%' and idmessaggi = '".aggslashdb($idmessaggi)."' and dati_messaggio1 = 'da_inserire' ");
if (numlin_query($mess_esistente) != 1) {
echo "<br><div style=\"display: inline; color: red;\"><b>".mex("Le prenotazioni richieste nel messaggio sono già state inserite",$pag).".</b></div><br>";
$continuare = "NO";
} # fine if (numlin_query($mess_esistente) != 1)
else {
$dati_mess_calc = risul_query($mess_esistente,0,'dati_messaggio2');
$dati_mess_calc = explode(",",$dati_mess_calc);
} # fine else if (numlin_query($mess_esistente) != 1)
} # fine if (!empty($idmessaggi))

if ($continuare == "NO") {
echo "<br>".mex("Nessuna nuova prenotazione è stata inserita",$pag).".<br><br>";
$torna_invece_di_ok = "SI";
} # fine if ($continuare == "NO")



if ($continuare != "NO") {
$lista_idprenota = "";
$lista_idprenota_t = array();
$costo_tot_mess = (double) 0;
$caparra_mess = (double) 0;
$arrotond_predef = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_predef' and idutente = '$id_utente'");
$arrotond_predef = risul_query($arrotond_predef,0,'valpersonalizza');
$comm_pers_presenti = array();
$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) {
$campi_pers_comm = explode(">",risul_query($campi_pers_comm,0,'valpersonalizza'));
for ($num1 = 0 ; $num1 < count($campi_pers_comm) ; $num1++) $comm_pers_presenti[$campi_pers_comm[$num1]] = 1;
} # fine if (numlin_query($campi_pers_comm) == 1)

for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$nometipotariffa = ${"nometipotariffa".$n_t};
$numpersone = ${"numpersone".$n_t};
$assegnazioneapp = ${"assegnazioneapp".$n_t};
$tipo_sconto = ${"tipo_sconto".$n_t};
$sconto = ${"sconto".$n_t};
$tipo_val_sconto = ${"tipo_val_sconto".$n_t};
$giorno_stima_checkin = ${"giorno_stima_checkin".$n_t};
$ora_stima_checkin = ${"ora_stima_checkin".$n_t};
$min_stima_checkin = ${"min_stima_checkin".$n_t};
$valuta_tariffa = "";
$valuta_sconto = "";
$valuta_caparra = ${"valuta_caparra".$n_t};
$met_paga_caparra = ${"met_paga_caparra".$n_t};
$origine_prenota = ${"origine_prenota".$n_t};
$conferma_prenota = ${"conferma_prenota".$n_t};
$num_commenti = ${"num_commenti".$n_t};
for ($num1 = 1 ; $num1 <= $num_commenti ; $num1++) {
$tipo_commento[$num1] = ${"tipo_commento".$num1."_".$n_t};
$commento[$num1] = ${"commento".$num1."_".$n_t};
} # fine for $num1
$lista_app = ${"lista_app".$n_t};
$caparra = ${"caparra".$n_t};
$tipo_val_caparra = ${"tipo_val_caparra".$n_t};
$commissioni = ${"commissioni".$n_t};
$tipo_val_commissioni = ${"tipo_val_commissioni".$n_t};
$n_tronchi = ${"n_tronchi".$n_t};
$lista_idprenota_t[$n_t] = "";

if (@get_magic_quotes_gpc()) {
$valuta_caparra = stripslashes($valuta_caparra);
$met_paga_caparra = stripslashes($met_paga_caparra);
$origine_prenota = stripslashes($origine_prenota);
for ($num1 = 1 ; $num1 <= $num_commenti ; $num1++) $commento[$num1] = stripslashes($commento[$num1]);
} # fine if (@get_magic_quotes_gpc())
#$met_paga_caparra = htmlspecialchars($met_paga_caparra);
$origine_prenota = htmlspecialchars($origine_prenota);
for ($num1 = 1 ; $num1 <= $num_commenti ; $num1++) $commento[$num1] = htmlspecialchars($commento[$num1]);

$cat_persone_corr = "";
$coeff_cat_persone = array();
$coeff_cat_persone['i'] = 0;
$coeff_cat_persone['p'] = 0;
$frase_cat_persone = "";
if ($numpersone and $dati_cat_pers['num'] and !${"numpersone_orig".$n_t}) {
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (${"cat$num1"."_numpers$n_t"}) {
$cat_persone_corr .= "<$num1>".${"cat$num1"."_numpers$n_t"}.">".$dati_cat_pers[$num1]['osp_princ'].">".$dati_cat_pers[$num1]['perc'].">".$dati_cat_pers['lang'].">".$dati_cat_pers[$num1]['n_sing'].">".$dati_cat_pers[$num1]['n_plur'];
if ($dati_cat_pers[$num1]['perc'] == "100") $coeff_cat_persone['i'] += (double) ${"cat$num1"."_numpers$n_t"};
else $coeff_cat_persone['p'] += ((double) ${"cat$num1"."_numpers$n_t"} * ((double) $dati_cat_pers[$num1]['perc'] / 100));
if (${"cat$num1"."_numpers$n_t"} == 1) $frase_cat_persone .= "<em>1</em> ".$dati_cat_pers[$num1]['n_sing'].", ";
else $frase_cat_persone .= "<em>".${"cat$num1"."_numpers$n_t"}."</em> ".$dati_cat_pers[$num1]['n_plur'].", ";
} # fine if (${"cat$num1"."_numpers$n_t"})
} # fine for $num1
if ($cat_persone_corr) $cat_persone_corr = $dati_cat_pers['arrotond'].$cat_persone_corr;
} # fine if ($numpersone and $dati_cat_pers['num'] and !${"numpersone_orig".$n_t})

for ($num1 = 1 ; $num1 <= $n_tronchi ; $num1 = $num1 + 1) {
$appartamento = $vet_appartamenti[$n_t][$num1];
$inizioperiodo = $vett_idinizio[$n_t][$num1];
$fineperiodo = $vett_idfine[$n_t][$num1];
$lunghezza_periodo = $fineperiodo - $inizioperiodo + 1;
if (isset($numpersone_nr[$n_t][($num1 - 1)]) and strcmp((string) $numpersone_nr[$n_t][($num1 - 1)],"")) $numpersone_corr = $numpersone_nr[$n_t][($num1 - 1)];
else $numpersone_corr = $numpersone;
#if (${"diff_persone".$n_t} and ($num1 + ${"diff_persone".$n_t}) > $n_tronchi) $numpersone_corr = $numpersone - 1;

if (!empty($id_prenota_temp[$n_t][$num1])) $idprenota = $id_prenota_temp[$n_t][$num1];
else {
$idprenota = esegui_query("select numlimite from $tablecostiprenota where idcostiprenota = '1'");
$idprenota = risul_query($idprenota,0,'numlimite');
esegui_query("update $tablecostiprenota set numlimite = '".($idprenota + 1)."' where idcostiprenota = '1'");
} # fine else if (!empty($id_prenota_temp[$n_t][$num1]))

if ($dati_cat_pers['num'] and ${"numpersone_orig".$n_t}) {
$numpersone_cp = $numpersone_corr;
$cat_persone_corr = "";
$coeff_cat_persone = array();
$coeff_cat_persone['i'] = 0;
$coeff_cat_persone['p'] = 0;
$frase_cat_persone = "";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt'] and $numpersone_cp) {
if ($numpersone_cp > $cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt']) $numpersone_corr_cp = $cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt'];
else $numpersone_corr_cp = $numpersone_cp;
$cat_persone_corr .= "<$num2>".$numpersone_corr_cp.">".$dati_cat_pers[$num2]['osp_princ'].">".$dati_cat_pers[$num2]['perc'].">".$dati_cat_pers['lang'].">".$dati_cat_pers[$num2]['n_sing'].">".$dati_cat_pers[$num2]['n_plur'];
$numpersone_cp = $numpersone_cp - $numpersone_corr_cp;
$cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt'] = $cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt'] - $numpersone_corr_cp;
if ($dati_cat_pers[$num2]['perc'] == "100") $coeff_cat_persone['i'] += (double) $numpersone_corr_cp;
else $coeff_cat_persone['p'] += ((double) $numpersone_corr_cp * ((double) $dati_cat_pers[$num2]['perc'] / 100));
if ($numpersone_corr_cp == 1) $frase_cat_persone .= "<em>1</em> ".$dati_cat_pers[$num2]['n_sing'].", ";
else $frase_cat_persone .= "<em>$numpersone_corr_cp</em> ".$dati_cat_pers[$num2]['n_plur'].", ";
} # fine if ($cat_persone[$n_t][$num1][$cat_persone[$n_t][$num1]['ord'][$num2]]['molt'] and $numpersone_cp)
} # fine for $num2
if ($cat_persone_corr) $cat_persone_corr = $dati_cat_pers['arrotond'].$cat_persone_corr;
} # fine if ($dati_cat_pers['num'] and ${"numpersone_orig".$n_t})

echo mex("Prenotazione",$pag)." $idprenota ".mex("dal",$pag)." <b>".$data_inizio_f[$n_t][$num1]."</b> ".mex("al",$pag)." <b>".$data_fine_f[$n_t][$num1]."</b> ($lunghezza_periodo ".mex("$parola_settiman",$pag);
if ($lunghezza_periodo == 1) echo mex("$lettera_a",$pag);
else echo mex("$lettera_e",$pag);
echo ") ".mex("a nome di",$pag)." <b>$cognome</b> ";
if ($numpersone_corr) {
echo mex("per",$pag)." <b>$numpersone_corr</b> ".mex("persone",$pag)." ";
if ($frase_cat_persone) echo "(".substr($frase_cat_persone,0,-2).") ";
} # fine if ($numpersone_corr)
echo mex("nell'appartamento",'unit.php')." <b>$appartamento</b>";
if ($assegnazioneapp == "k") echo " (".mex("fisso",'unit.php').")";
else {
echo " (".mex("mobile",'unit.php');
if ($lista_app) echo " ".mex("in",$pag)." ".str_replace(",",", ",$lista_app);
echo ")";
} # fine else if ($assegnazioneapp == "K")
echo ":<br><br>";

$costo_tariffa_tot = (double) 0;
$lista_tariffe_sett = "";
$lista_tariffep_sett = "";
$lista_tariffepo_sett = "";
for ($num2 = $inizioperiodo ; $num2 <= $fineperiodo ; $num2++) {
$riga_tariffa = esegui_query("select * from  $tableperiodi where idperiodi = $num2");
$costo_tariffa = risul_query($riga_tariffa,0,$nometipotariffa);
if ($dati_tariffe[$nometipotariffa]['moltiplica'] == "p") {
if (!strcmp((string) $costo_tariffa,"")) $costo_tariffa = 0;
$costo_tariffap = risul_query($riga_tariffa,0,$nometipotariffa."p");
if (!strcmp((string) $costo_tariffap,"")) $costo_tariffap = 0;
$lista_tariffepo_sett .= ",".$costo_tariffap;
if (!$dati_cat_pers['num']) $costo_tariffap = (double) $costo_tariffap * $numpersone_corr;
else $costo_tariffap = (round(((double) $costo_tariffap * $coeff_cat_persone['p']) / $dati_cat_pers['arrotond']) * $dati_cat_pers['arrotond']) + ((double) $costo_tariffap * $coeff_cat_persone['i']);
$lista_tariffep_sett .= ",".$costo_tariffap;
$costo_tariffa = (double) $costo_tariffa + $costo_tariffap;
} # fine if ($dati_tariffe[$nometipotariffa]['moltiplica'] == "p")
$costo_tariffa_tot = (double) $costo_tariffa_tot + (double) $costo_tariffa;
$lista_tariffe_sett .= ",".$costo_tariffa;
} # fine for $num2
$lista_tariffe_sett = substr($lista_tariffe_sett,1);
if ($lista_tariffep_sett) {
$lista_tariffep_sett = substr($lista_tariffep_sett,1);
$lista_tariffe_sett .= ";$lista_tariffep_sett";
$lista_tariffepo_sett = substr($lista_tariffepo_sett,1);
$lista_tariffe_sett .= ";$lista_tariffepo_sett";
} # fine if ($lista_tariffep_sett)
$costo_tariffa = $costo_tariffa_tot;
$nometariffa = $dati_tariffe[$nometipotariffa]['nome'];
if ($nometariffa == "") {
$nometariffa = $nometipotariffa;
$nometariffa_vedi = mex("tariffa",$pag).substr($nometipotariffa,7);
} # fine if ($nometariffa == "")
else $nometariffa_vedi = $nometariffa;
$nometariffa = aggslashdb($nometariffa);
$tariffa = $nometariffa."#@&".$costo_tariffa_tot;
if ($dati_tariffe[$nometipotariffa]['moltiplica'] == "p") $tariffa .= "#@&p";
$costo_tariffa_tot_p = punti_in_num($costo_tariffa_tot,$stile_soldi);
echo "$costo_tariffa_tot_p $Euro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".mex("tariffa",$pag)." \"$nometariffa_vedi\"<br>";
$valori = "abcdefghijkmnpqrstuvwxz";
srand((double)microtime() * 1000000);
$cod_prenota = "";
for ($num2 = 0 ; $num2 < 4 ; $num2++) $cod_prenota .= substr($valori,rand(0,22),1);

esegui_query("insert into $tableprenota (idprenota,idclienti,idappartamenti,iddatainizio,iddatafine,tariffa,tariffesettimanali,codice,conferma,datainserimento,hostinserimento,utente_inserimento) values ('$idprenota','$idclienti','$appartamento','$inizioperiodo','$fineperiodo','$tariffa','$lista_tariffe_sett','$cod_prenota','N','$datainserimento','$HOSTNAME','$id_utente_ins')");

if ($numpersone_corr) {
esegui_query("update $tableprenota set num_persone = '$numpersone_corr' where idprenota = '$idprenota' ");
if ($dati_cat_pers['num'] and $cat_persone_corr) esegui_query("update $tableprenota set cat_persone = '".aggslashdb($cat_persone_corr)."' where idprenota = '$idprenota' ");
} # fine if ($numpersone_corr)

if (${"num_app_richiesti".$n_t} == 1) $num_prenota_tipo = 1;
else $num_prenota_tipo = $num1;
if (!empty($idospiti[$n_t][$num_prenota_tipo]) and is_array($idospiti[$n_t][$num_prenota_tipo])) $num_ospiti = count($idospiti[$n_t][$num_prenota_tipo]);
else $num_ospiti = 0;
for ($num2 = 1 ; $num2 <= $num_ospiti ; $num2++) {
if (!empty($idospiti[$n_t][$num_prenota_tipo][$num2])) esegui_query("insert into $tablerclientiprenota (idprenota,idclienti,num_ordine,parentela,datainserimento,hostinserimento,utente_inserimento) values ('$idprenota','".$idospiti[$n_t][$num_prenota_tipo][$num2]."','".$num_ordine[$n_t][$num_prenota_tipo][$num2]."','".aggslashdb(fixset($parentela[$n_t][$num_prenota_tipo][$num2]))."','$datainserimento','$HOSTNAME','$id_utente_ins') ");
} # fine for $num2

if ($dati_tariffe[$nometipotariffa]['tasse_percent']) {
esegui_query("update $tableprenota set tasseperc = '".$dati_tariffe[$nometipotariffa]['tasse_percent']."' where idprenota = '$idprenota' ");
} # fine if ($dati_tariffe[$nometipotariffa]['tasse_percent'])

$caparra = formatta_soldi($caparra);
if ($priv_ins_caparra != "s" or controlla_soldi($caparra,"pos") == "NO") unset($caparra);
if (!strcmp(fixstr($caparra),"")) $caparra = calcola_caparra($dati_tariffe,$nometipotariffa,$inizioperiodo,$fineperiodo,$costo_tariffa_tot,$lista_tariffe_sett);
elseif ($tipo_val_caparra == "tar") {
$caparra_arrotond = $dati_tariffe[$nometipotariffa]['caparra_arrotond'];
if (!strcmp((string) $caparra_arrotond,"") or $caparra_arrotond == "val" or $caparra_arrotond == "gio") $caparra_arrotond = $arrotond_predef;
$caparra = ($costo_tariffa_tot * (double) $caparra) / 100;
$caparra = $caparra / $caparra_arrotond;
$caparra = floor($caparra);
$caparra = $caparra * $caparra_arrotond;
} # fine elseif ($tipo_val_caparra == "tar")

# costi aggiuntivi da calcolare prima dello sconto
unset($costi_dopo_sconto);
$costo_escludi_perc = (double) 0;
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
$idcostoagg = $dati_ca[$num_costo]['id'];
$costo_trovato = "NO";
for ($numca = 1 ; $numca <= ${"numcostiagg_".$n_t."t".$num1} ; $numca++) if ($idcostoagg == fixset(${"idcostoagg".$numca."_".$n_t."t".$num1})) $costo_trovato = $numca;
if ($costo_trovato != "NO") {
$numca = $costo_trovato;
if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI") {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$idcostoagg] == "SI") {
if ($dati_ca[$num_costo]['tipo_val'] == "r" or $dati_ca[$num_costo]['tipo_val'] == "t") $costi_dopo_sconto[$num_costo] = $numca;
else {
$settimane_costo = ${"settimane_costo".$numca."_".$n_t."t".$num1};
$moltiplica = ${"moltiplica".$numca."_".$n_t."t".$num1};
$idcostiprenota = esegui_query("select max(idcostiprenota) from $tablecostiprenota");
$idcostiprenota = risul_query($idcostiprenota,0,0) + 1;
$tipo_ca = $dati_ca[$num_costo]['tipo'].$dati_ca[$num_costo]['tipo_val'];
$valore_ca = $dati_ca[$num_costo]['valore'];
$valore_perc_ca = fixset($dati_ca[$num_costo]['valore_perc']);
$prezzo_costo_tot = calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$settimane_costo,$moltiplica,$costo_tariffa,$lista_tariffe_sett,$costo_tariffa_tot,$caparra,$numpersone_corr,$dati_cat_pers,fixset(${"catpers_ca".$numca."_".$n_t}));
$associasett_ca = $dati_ca[$num_costo]['associasett'];
$letto_ca = $dati_ca[$num_costo]['letto'];
if ($dati_ca[$num_costo]['var_percentuale'] != "s" and $dati_ca[$num_costo]['tipo_val'] != "f") {
$tipo_ca = $dati_ca[$num_costo]['tipo']."f";
$moltiplica = 1;
if ($dati_ca[$num_costo]['tipo'] == "s") {
$settimane_costo = 1;
$associasett_ca = "n";
} # fine if ($dati_ca[$num_costo][tipo] == "s")
$valore_ca = $prezzo_costo_tot;
$valore_perc_ca = 0;
} # fine if ($dati_ca[$num_costo]['var_percentuale'] != "s" and...
elseif ($dati_ca[$num_costo]['perc_catpers'] == "s") $letto_ca = "p";
if ($dati_ca[$num_costo]['var_moltiplica'] == "s") $varmoltiplica_ca = $dati_ca[$num_costo]['moltiplica'].$dati_ca[$num_costo]['molt_max'].$dati_ca[$num_costo]['molt_agg'].",".$dati_ca[$num_costo]['molt_max_num'].$dati_ca[$num_costo]['cp_molt_int'];
else $varmoltiplica_ca = "cx0,";
if ($dati_ca[$num_costo]['var_numsett'] == "s") $varnumsett_ca = $dati_ca[$num_costo]['numsett_orig'];
else $varnumsett_ca = "c";
if ($dati_ca[$num_costo]['var_periodip'] == "s") $varperiodipermessi_ca = $dati_ca[$num_costo]['periodipermessi_orig'];
else $varperiodipermessi_ca = "";
if ($dati_ca[$num_costo]['var_beniinv'] == "s") $varbeniinv_ca = ${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1}.";".$dati_ca[$num_costo]['beniinv_orig'];
else $varbeniinv_ca = "";
if ($dati_ca[$num_costo]['var_appi'] == "s") $varappincompatibili_ca = $dati_ca[$num_costo]['appincompatibili'];
else $varappincompatibili_ca = "";
if ($dati_ca[$num_costo]['var_tariffea'] == "s") $vartariffeassociate_ca = $dati_ca[$num_costo]["tipo_associa_".${"nometipotariffa".$n_t}].$dati_ca[$num_costo][${"nometipotariffa".$n_t}];
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
esegui_query("insert into $tablecostiprenota (idcostiprenota,idprenota,tipo,nome,valore,associasett,settimane,moltiplica,letto,idntariffe,variazione,varmoltiplica,varnumsett,varperiodipermessi,varbeniinv,varappincompatibili,vartariffeassociate,vartariffeincomp,datainserimento,hostinserimento,utente_inserimento) values ('$idcostiprenota','$idprenota','$tipo_ca','".aggslashdb($dati_ca[$num_costo]['nome'])."','$valore_ca','$associasett_ca','$settimane_costo','$moltiplica','$letto_ca','$idcostoagg','$variazione_ca','$varmoltiplica_ca','$varnumsett_ca','$varperiodipermessi_ca','$varbeniinv_ca','$varappincompatibili_ca','$vartariffeassociate_ca','$vartariffeincomp_ca','$datainserimento','$HOSTNAME','$id_utente_ins')");
if (substr($tipo_ca,1,1) != "f") esegui_query("update $tablecostiprenota set valore_perc = '$valore_perc_ca', arrotonda = '".$dati_ca[$num_costo]['arrotonda']."' where idcostiprenota = '$idcostiprenota'");
if ($dati_ca[$num_costo]['tasseperc']) esegui_query("update $tablecostiprenota set tasseperc = '".$dati_ca[$num_costo]['tasseperc']."' where idcostiprenota = '$idcostiprenota'");
if (strcmp((string) $dati_ca[$num_costo]['categoria'],"")) esegui_query("update $tablecostiprenota set categoria = '".$dati_ca[$num_costo]['categoria']."' where idcostiprenota = '$idcostiprenota'");
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num'] and strcmp((string) $dati_cat_pers[${"catpers_ca".$numca."_".$n_t}]['n_plur'],"")) {
$cat_pers_ca = ${"catpers_ca".$numca."_".$n_t};
$cat_persone_ca = $dati_cat_pers['arrotond']."<$cat_pers_ca>>".$dati_cat_pers[$cat_pers_ca]['osp_princ'].">".$dati_cat_pers[$cat_pers_ca]['perc'].">".$dati_cat_pers['lang'].">".$dati_cat_pers[$cat_pers_ca]['n_sing'].">".$dati_cat_pers[$cat_pers_ca]['n_plur'];
esegui_query("update $tablecostiprenota set cat_persone = '".aggslashdb($cat_persone_ca)."' where idcostiprenota = '$idcostiprenota'");
} # fine if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num'] and...
else $cat_pers_ca = "";
$id_costo_inserito[$idcostoagg] = $idcostiprenota;
$prezzo_costo_tot_p = punti_in_num($prezzo_costo_tot,$stile_soldi);
echo "$prezzo_costo_tot_p $Euro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
if ($dati_ca[$num_costo]['tipo'] == "u") echo mex("Costo unico",$pag);
if ($dati_ca[$num_costo]['tipo'] == "s") echo mex("Costo $parola_settimanale",$pag);
echo " \"".$dati_ca[$num_costo]['nome']."\"";
if ($associasett_ca == "s") {
$moltiplica = explode(",",$moltiplica);
$valnummoltiplica_ca = $moltiplica[1];
for ($num2 = 2 ; $num2 < (count($moltiplica) - 1) ; $num2++) if ($moltiplica[$num2] != $valnummoltiplica_ca) $valnummoltiplica_ca = 1;
} # fine if ($associasett_ca == "s")
else $valnummoltiplica_ca = $moltiplica;
if ($valnummoltiplica_ca != 1) {
echo " (".mex("moltiplicato per",$pag)." $valnummoltiplica_ca";
if (strcmp((string) $cat_pers_ca,"")) echo " ".$dati_cat_pers[$cat_pers_ca]['n_plur'];
echo ")";
} # fine if ($valnummoltiplica_ca != 1)
elseif (strcmp((string) $cat_pers_ca,"")) echo " (".$dati_cat_pers[$cat_pers_ca]['n_sing'].")";
echo "<br>";
$costo_tariffa_tot = (double) $costo_tariffa_tot + (double) $prezzo_costo_tot;
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + (double) $prezzo_costo_tot;
} # fine else if ($dati_ca[$num_costo]['tipo_val'] == "r" or $dati_ca[$num_costo]['tipo_val'] == "t")
} # fine if ($attiva_costi_agg_consentiti == "n" or...
} # fine if (${"costoagg".$numca."_".$n_t."t".$num1} == "SI")
} # fine if ($costo_trovato != "NO")
} # fine for $num_costo

$sconto_orig = $sconto;
$prezzo_totale_imposto = "";
$sconto = formatta_soldi($sconto);
if (strcmp((string) $sconto,"") and $priv_ins_sconto == "s" and controlla_soldi($sconto) == "SI") {
$sconto = (double) $sconto;
if ($tipo_sconto != "tot" and $tipo_sconto != "tot_sett" and $tipo_sconto != "tar" and $tipo_sconto != "tar_sett") $tipo_sconto = "sconto";
if (substr($tipo_val_sconto,0,1) == ">") {
$valuta_sconto = substr($tipo_val_sconto,1);
$valuta = $altre_valute['id'][$valuta_sconto];
if (strcmp((string) $valuta,"")) {
if ($sconto) {
$sconto = (double) formatta_soldi($sconto) / (double) $altre_valute[$valuta]['cambio'];
$sconto = $sconto / (double) $dati_tariffe['tasse_arrotond'];
$sconto = round($sconto);
$sconto = $sconto * (double) $dati_tariffe['tasse_arrotond'];
} # fine if ($sconto)
} # fine if (strcmp((string) $valuta,""))
else $valuta_sconto = "";
if (!strcmp((string) $valuta_tariffa,"")) $valuta_tariffa = $valuta_sconto;
} # fine if (substr($tipo_val_sconto,0,1) == ">")
if ($tipo_sconto == "tot") {
$prezzo_totale_imposto = (double) $sconto;
$sconto = (double) $costo_tariffa_tot - (double) $sconto;
} # fine if ($tipo_sconto == "tot")
if ($tipo_sconto == "tot_sett") {
$prezzo_totale_imposto = (double) $sconto * (double) $lunghezza_periodo;
$sconto = (double) $costo_tariffa_tot - ((double) $sconto * (double) $lunghezza_periodo);
} # fine if ($tipo_sconto == "tot_sett")
if ($tipo_sconto == "tar") $sconto = (double) $costo_tariffa - (double) $sconto;
if ($tipo_sconto == "tar_sett") $sconto = (double) $costo_tariffa - ((double) $sconto * (double) $lunghezza_periodo);
if ($tipo_sconto == "sconto" and ($tipo_val_sconto == "tot" or $tipo_val_sconto == "tar")) {
if ($tipo_val_sconto == "tot") $sconto = ($costo_tariffa_tot * (double) $sconto) / 100;
if ($tipo_val_sconto == "tar") $sconto = ($costo_tariffa * (double) $sconto) / 100;
$sconto = $sconto / (double) $arrotond_predef;
$sconto = floor((string) $sconto);
$sconto = $sconto * (double) $arrotond_predef;
} # fine if ($tipo_sconto == "sconto" and ($tipo_val_sconto == "tot" or...
if ($sconto > $costo_tariffa_tot) $sconto = (double) $costo_tariffa_tot;
$costo_tariffa_tot = (double) $costo_tariffa_tot - (double) $sconto;
} # fine if (strcmp((string) $sconto,"") and $priv_ins_sconto == "s" and...

# costi aggiuntivi da calcolare dopo lo sconto (prima calcolo prezzi e 
# approssimazione per sconto con costi sul totale con totale imposto)
$passo = 1;
$dir_sconto = "";
$costo_tariffa_tot_orig = $costo_tariffa_tot;
$costo_escludi_perc_orig = $costo_escludi_perc;
$prezzo_esatto = 0;
while (!$prezzo_esatto) {
$costo_tariffa_tot = $costo_tariffa_tot_orig;
$costo_escludi_perc = $costo_escludi_perc_orig;
unset($prezzo_costo_vett);

for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if (!empty($costi_dopo_sconto[$num_costo]) and $dati_ca[$num_costo]['tipo_val'] == "r") {
$numca = $costi_dopo_sconto[$num_costo];
$settimane_costo = ${"settimane_costo".$numca."_".$n_t."t".$num1};
$moltiplica = ${"moltiplica".$numca."_".$n_t."t".$num1};
$prezzo_costo_vett[$num_costo] = calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$settimane_costo,$moltiplica,$costo_tariffa,$lista_tariffe_sett,$costo_tariffa_tot,$caparra,$numpersone_corr,"","",$costo_escludi_perc);
$costo_tariffa_tot = (double) $costo_tariffa_tot + (double) $prezzo_costo_vett[$num_costo];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + (double) $prezzo_costo_vett[$num_costo];
} # fine if (!empty($costi_dopo_sconto[$num_costo]) and $dati_ca[$num_costo]['tipo_val'] == "r")
} # fine for $num_costo
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if (!empty($costi_dopo_sconto[$num_costo]) and $dati_ca[$num_costo]['tipo_val'] == "t") {
$numca = $costi_dopo_sconto[$num_costo];
$settimane_costo = ${"settimane_costo".$numca."_".$n_t."t".$num1};
$moltiplica = ${"moltiplica".$numca."_".$n_t."t".$num1};
$prezzo_costo_vett[$num_costo] = calcola_prezzo_totale_costo($dati_ca,$num_costo,$inizioperiodo,$fineperiodo,$settimane_costo,$moltiplica,$costo_tariffa,$lista_tariffe_sett,$costo_tariffa_tot,$caparra,$numpersone_corr,"","",$costo_escludi_perc);
$costo_tariffa_tot = (double) $costo_tariffa_tot + (double) $prezzo_costo_vett[$num_costo];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = (double) $costo_escludi_perc + (double) $prezzo_costo_vett[$num_costo];
} # fine if (!empty($costi_dopo_sconto[$num_costo]) and $dati_ca[$num_costo]['tipo_val'] == "t")
} # fine for $num_costo

if (strcmp((string) $prezzo_totale_imposto,"")) {
if (round($costo_tariffa_tot,2) != round($prezzo_totale_imposto,2)) {
if ($costo_tariffa_tot > $prezzo_totale_imposto) {
if ($dir_sconto and $dir_sconto != "crescente") {
if ($passo == 1) $passo = 0.01;
else break;
} # fine if ($dir_sconto and $dir_sconto != "crescente")
$dir_sconto = "crescente";
$sconto = $sconto + (double) $passo;
$costo_tariffa_tot_orig = $costo_tariffa_tot_orig - (double) $passo;
} # fine if ($costo_tariffa_tot > $prezzo_totale_imposto)
else {
if ($dir_sconto and $dir_sconto != "decrescente") {
if ($passo == 1) $passo = 0.01;
else break;
} # fine if ($dir_sconto and $dir_sconto != "decrescente")
$dir_sconto = "decrescente";
$sconto = $sconto - (double) $passo;
$costo_tariffa_tot_orig = $costo_tariffa_tot_orig + (double) $passo;
} # fine else if ($costo_tariffa_tot > $prezzo_totale_imposto)
} # fine if (round($costo_tariffa_tot,2) != round($prezzo_totale_imposto,2))
else $prezzo_esatto = 1;
} # fine if (strcmp((string) $prezzo_totale_imposto,""))
else $prezzo_esatto = 1;
} # fine while (!$prezzo_esatto)
$costo_tariffa_tot = $costo_tariffa_tot_orig;
$costo_escludi_perc = $costo_escludi_perc_orig;

for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if (!empty($costi_dopo_sconto[$num_costo])) {
$numca = $costi_dopo_sconto[$num_costo];
$settimane_costo = ${"settimane_costo".$numca."_".$n_t."t".$num1};
$moltiplica = ${"moltiplica".$numca."_".$n_t."t".$num1};
$idcostiprenota = esegui_query("select max(idcostiprenota) from $tablecostiprenota");
$idcostiprenota = risul_query($idcostiprenota,0,0) + 1;
$tipo_ca = $dati_ca[$num_costo]['tipo'].$dati_ca[$num_costo]['tipo_val'];
$valore_ca = $dati_ca[$num_costo]['valore'];
$valore_perc_ca = $dati_ca[$num_costo]['valore_perc'];
$prezzo_costo_tot = (double) $prezzo_costo_vett[$num_costo];
$associasett_ca = $dati_ca[$num_costo]['associasett'];
if ($dati_ca[$num_costo]['var_percentuale'] != "s" and $dati_ca[$num_costo]['tipo_val'] != "f") {
$tipo_ca = $dati_ca[$num_costo]['tipo']."f";
$moltiplica = 1;
if ($dati_ca[$num_costo]['tipo'] == "s") {
$settimane_costo = 1;
$associasett_ca = "n";
} # fine if ($dati_ca[$num_costo][tipo] == "s")
$valore_ca = $prezzo_costo_tot;
$valore_perc_ca = 0;
} # fine if ($dati_ca[$num_costo][var_percentuale] != "s" and...
if ($dati_ca[$num_costo]['var_moltiplica'] == "s") $varmoltiplica_ca = $dati_ca[$num_costo]['moltiplica'].$dati_ca[$num_costo]['molt_max'].$dati_ca[$num_costo]['molt_agg'].",".$dati_ca[$num_costo]['molt_max_num'].$dati_ca[$num_costo]['cp_molt_int'];
else $varmoltiplica_ca = "cx0,";
if ($dati_ca[$num_costo]['var_numsett'] == "s") $varnumsett_ca = $dati_ca[$num_costo]['numsett_orig'];
else $varnumsett_ca = "c";
if ($dati_ca[$num_costo]['var_periodip'] == "s") $varperiodipermessi_ca = $dati_ca[$num_costo]['periodipermessi_orig'];
else $varperiodipermessi_ca = "";
if ($dati_ca[$num_costo]['var_beniinv'] == "s") $varbeniinv_ca = ${"num_ripetizioni_costo".$numca."_".$n_t."t".$num1}.";".$dati_ca[$num_costo]['beniinv_orig'];
else $varbeniinv_ca = "";
if ($dati_ca[$num_costo]['var_appi'] == "s") $varappincompatibili_ca = $dati_ca[$num_costo]['appincompatibili'];
else $varappincompatibili_ca = "";
if ($dati_ca[$num_costo]['var_tariffea'] == "s") $vartariffeassociate_ca = $dati_ca[$num_costo]["tipo_associa_".${"nometipotariffa".$n_t}].$dati_ca[$num_costo][${"nometipotariffa".$n_t}];
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
esegui_query("insert into $tablecostiprenota (idcostiprenota,idprenota,tipo,nome,valore,associasett,settimane,moltiplica,letto,idntariffe,variazione,varmoltiplica,varnumsett,varperiodipermessi,varbeniinv,varappincompatibili,vartariffeassociate,vartariffeincomp,datainserimento,hostinserimento,utente_inserimento) values ('$idcostiprenota','$idprenota','$tipo_ca','".aggslashdb($dati_ca[$num_costo]['nome'])."','$valore_ca','$associasett_ca','$settimane_costo','$moltiplica','".$dati_ca[$num_costo]['letto']."','$idcostoagg','$variazione_ca','$varmoltiplica_ca','$varnumsett_ca','$varperiodipermessi_ca','$varbeniinv_ca','$varappincompatibili_ca','$vartariffeassociate_ca','$vartariffeincomp_ca','$datainserimento','$HOSTNAME','$id_utente_ins')");
if (substr($tipo_ca,1,1) != "f") esegui_query("update $tablecostiprenota set valore_perc = '$valore_perc_ca', arrotonda = '".$dati_ca[$num_costo]['arrotonda']."' where idcostiprenota = '$idcostiprenota'");
if ($dati_ca[$num_costo]['tasseperc']) esegui_query("update $tablecostiprenota set tasseperc = '".$dati_ca[$num_costo]['tasseperc']."' where idcostiprenota = '$idcostiprenota'");
$id_costo_inserito[$idcostoagg] = $idcostiprenota;
$prezzo_costo_tot_p = punti_in_num($prezzo_costo_tot,$stile_soldi);
echo "$prezzo_costo_tot_p $Euro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
if ($dati_ca[$num_costo]['tipo'] == "u") echo mex("Costo unico",$pag);
if ($dati_ca[$num_costo]['tipo'] == "s") echo mex("Costo $parola_settimanale",$pag);
echo " \"".$dati_ca[$num_costo]['nome']."\"";
if ($associasett_ca == "s") {
$moltiplica = explode(",",$moltiplica);
$valnummoltiplica_ca = $moltiplica[1];
for ($num2 = 2 ; $num2 < (count($moltiplica) - 1) ; $num2++) if ($moltiplica[$num2] != $valnummoltiplica_ca) $valnummoltiplica_ca = 1;
} # fine if ($associasett_ca == "s")
else $valnummoltiplica_ca = $moltiplica;
if ($valnummoltiplica_ca != 1) echo " (".mex("moltiplicato per",$pag)." $valnummoltiplica_ca)";
echo "<br>";
$costo_tariffa_tot = (double) $costo_tariffa_tot + (double) $prezzo_costo_tot;
} # fine if (!empty($costi_dopo_sconto[$num_costo]))
} # fine for $num_costo
$prezzo_costi_tot = (double) $costo_tariffa_tot - (double) $costo_tariffa + (double) $sconto;

# Appartamenti eliminati dai costi aggiuntivi, verranno aggiunti di nuovo agli appartamenti
# assegnabili quando si modifica la prenotazione (se il costo mantiene gli appartamenti 
# incompatibili con la modifica della prenotazione, allora questi appartamenti verranno tolti 
# di nuovo dal costo quando si modifica la prenotazione, finchè il costo rimarrà associato)
if (!empty($app_eliminati_costi[$n_t])) {
esegui_query("update $tableprenota set incompatibilita = '".aggslashdb($app_eliminati_costi[$n_t])."' where idprenota = '$idprenota' ");
} # fine if (!empty($app_eliminati_costi[$n_t]))

if (strcmp((string) $sconto,"") and $priv_ins_sconto == "s" and controlla_soldi($sconto) == "SI") {
esegui_query("update $tableprenota set sconto = '$sconto' where idprenota = '$idprenota' ");
$sconto_p = punti_in_num($sconto,$stile_soldi);
if (substr($sconto_p,0,1) == "-") $sconto_p = substr($sconto_p,1);
else echo "-";
echo "$sconto_p $Euro ";
if (strcmp((string) $valuta_sconto,"")) {
$valuta = $altre_valute['id'][$valuta_sconto];
if (!$sconto) $sconto_valuta = "0";
else {
$sconto_valuta = (double) $sconto * (double) $altre_valute[$valuta]['cambio'];
$sconto_valuta = $sconto_valuta / (double) $altre_valute[$valuta]['arrotond'];
$sconto_valuta = round($sconto_valuta);
$sconto_valuta = $sconto_valuta * (double) $altre_valute[$valuta]['arrotond'];
} # fine else if (!$sconto)
echo " = <em>";
if (substr($sconto_valuta,0,1) == "-") $sconto_valuta = substr($sconto_valuta,1);
else echo "-";
echo punti_in_num($sconto_valuta,$stile_soldi)." $valuta_sconto</em>";
} # fine if (strcmp((string) $valuta_sconto,""))
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".mex("Sconto",$pag)."<br>";
} # fine if (strcmp((string) $sconto,"") and $priv_ins_sconto == "s" and...

$commissioni = formatta_soldi($commissioni);
if ($priv_ins_caparra != "s" or controlla_soldi($commissioni,"pos") == "NO") unset($commissioni);
if (empty($commissioni)) $commissioni = calcola_commissioni($dati_tariffe,$nometipotariffa,$inizioperiodo,$fineperiodo,$lista_tariffe_sett,$sconto,$prezzo_costi_tot);
elseif ($tipo_val_commissioni == "tar" or $tipo_val_commissioni == "ts" or $tipo_val_commissioni == "tsc") {
$commissioni_arrotond = $dati_tariffe[$nometipotariffa]['commissioni_arrotond']['def'];
if (!strcmp((string) $commissioni_arrotond,"") or $commissioni_arrotond == "val") $commissioni_arrotond = $arrotond_predef;
$costo_base = (double) $costo_tariffa;
if ($tipo_val_commissioni == "ts") $costo_base = $costo_base - (double) $sconto;
if ($tipo_val_commissioni == "tsc") $costo_base = $costo_base - (double) $sconto + (double) $prezzo_costi_tot;
$commissioni = ($costo_base * (double) $commissioni) / 100;
$commissioni = $commissioni / $commissioni_arrotond;
$commissioni = floor(round($commissioni));
$commissioni = $commissioni * $commissioni_arrotond;
} # fine elseif ($tipo_val_commissioni == "tar" or...
$sconto = $sconto_orig;

$valuta_prenota = "";
esegui_query("update $tableprenota set tariffa_tot = '$costo_tariffa_tot' where idprenota = '$idprenota' ");
$costo_tariffa_tot_p = punti_in_num($costo_tariffa_tot,$stile_soldi);
echo "<b>$costo_tariffa_tot_p</b> $Euro ";
if (strcmp((string) $valuta_tariffa,"")) {
$valuta = $altre_valute['id'][$valuta_tariffa];
$valuta_prenota = "$valuta_tariffa<".$altre_valute[$valuta]['cambio']."<".$altre_valute[$valuta]['arrotond'].">";
if (!$costo_tariffa_tot) $costo_tot_valuta = "0";
else {
$costo_tot_valuta = (double) $costo_tariffa_tot * (double) $altre_valute[$valuta]['cambio'];
$costo_tot_valuta = $costo_tot_valuta / (double) $altre_valute[$valuta]['arrotond'];
$costo_tot_valuta = round($costo_tot_valuta);
$costo_tot_valuta = $costo_tot_valuta * (double) $altre_valute[$valuta]['arrotond'];
} # fine else if (!$costo_tariffa_tot)
echo " = <em>".punti_in_num($costo_tot_valuta,$stile_soldi)." <b>$valuta_tariffa</b></em>";
} # fine if (strcmp((string) $valuta_tariffa,""))
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>".mex("TOTALE",$pag)."</b><br>";

if ($lista_app) {
esegui_query("update $tableprenota set app_assegnabili = '$lista_app' where idprenota = '$idprenota' ");
} # fine if ($lista_app)

if ($assegnazioneapp) {
esegui_query("update $tableprenota set assegnazioneapp = '$assegnazioneapp' where idprenota = '$idprenota' ");
} # fine if ($assegnazioneapp)

if (strcmp((string) $valuta_caparra,"") and strcmp((string) $altre_valute['id'][$valuta_caparra],"") and $priv_ins_caparra == "s") {
$valuta = $altre_valute['id'][$valuta_caparra];
if (${"cambio_caparra".$n_t} and ${"arrotond_caparra".$n_t}) {
$cambio_caparra = ${"cambio_caparra".$n_t};
$arrotond_caparra = ${"arrotond_caparra".$n_t};
} # fine if (${"cambio_caparra".$n_t} and ${"arrotond_caparra".$n_t})
else {
$cambio_caparra = $altre_valute[$valuta]['cambio'];
$arrotond_caparra = $altre_valute[$valuta]['arrotond'];
} # fine else if (${"cambio_caparra".$n_t} and ${"arrotond_caparra".$n_t})
if (!$valuta_prenota) $valuta_prenota = ">";
$valuta_prenota .= "$valuta_caparra<$cambio_caparra<$arrotond_caparra";
} # fine if (strcmp((string) $valuta_caparra,"") and strcmp((string) $altre_valute['id'][$valuta_caparra],"") and...
else $valuta_caparra = "";

if ($valuta_prenota) esegui_query("update $tableprenota set valuta = '".aggslashdb($valuta_prenota)."' where idprenota = '$idprenota' ");

if ($caparra or strcmp((string) $valuta_caparra,"")) {
if ($caparra > $costo_tariffa_tot) $caparra = $costo_tariffa_tot;
if ($caparra) esegui_query("update $tableprenota set caparra = '$caparra' where idprenota = '$idprenota' ");
$da_pagare = $costo_tariffa_tot - $caparra;
if (!$caparra) $caparra_p = "0";
else $caparra_p = punti_in_num($caparra,$stile_soldi);
$da_pagare_p = punti_in_num($da_pagare,$stile_soldi);
echo "<br>".mex("Caparra",$pag).": <b>$caparra_p</b> $Euro";
if (strcmp((string) $valuta_caparra,"")) {
if (!$caparra) $caparra_valuta = "0";
else {
$caparra_valuta = (double) $caparra * (double) $cambio_caparra;
$caparra_valuta = $caparra_valuta / (double) $arrotond_caparra;
$caparra_valuta = round($caparra_valuta);
$caparra_valuta = $caparra_valuta * (double) $arrotond_caparra;
} # fine else if (!$caparra)
echo " = <em>".punti_in_num($caparra_valuta,$stile_soldi)." <b>$valuta_caparra</b></em>";
} # fine if (strcmp((string) $valuta_caparra,""))
echo " (".mex("resto da pagare",$pag).": $da_pagare_p $Euro).<br>";
} # fine if ($caparra or strcmp((string) $valuta_caparra,""))

$met_trovato = "NO";
if ($met_paga_caparra and $priv_ins_caparra == "s") {
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($metodi_pagamento) {
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num2 = 0 ; $num2 < count($metodi_pagamento) ; $num2++) {
if ($met_paga_caparra == $metodi_pagamento[$num2]) $met_trovato = "SI";
} # fine for $num2
if ($met_trovato == "SI") {
esegui_query("update $tableprenota set metodo_pagamento = '".aggslashdb($met_paga_caparra)."' where idprenota = '$idprenota' ");
if (!$caparra and !$valuta_caparra) echo "<br>";
echo mex("Metodo pagamento caparra",$pag).": <b>$met_paga_caparra</b>.<br>";
} # fine if ($met_trovato == "SI")
} # fine if ($metodi_pagamento)
} # fine if ($met_paga_caparra and $priv_ins_caparra == "s")

if ($commissioni) {
#if ($commissioni > $costo_tariffa_tot) $commissioni = $costo_tariffa_tot;
esegui_query("update $tableprenota set commissioni = '$commissioni' where idprenota = '$idprenota' ");
$resto_comm = $costo_tariffa_tot - $commissioni;
$commissioni_p = punti_in_num($commissioni,$stile_soldi);
$resto_comm_p = punti_in_num($resto_comm,$stile_soldi);
echo "<br>".mex("Commissioni",$pag).": <b>$commissioni_p</b> $Euro (".mex("resto commissioni",$pag).": $resto_comm_p $Euro).<br>";
} # fine if ($commissioni)

if ($origine_prenota and $priv_ins_orig_prenota == "s") {
$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente'");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
if ($origini_prenota) {
$orig_trovata = "NO";
$origini_prenota = explode(",",$origini_prenota);
for ($num2 = 0 ; $num2 < count($origini_prenota) ; $num2++) {
if ($origine_prenota == $origini_prenota[$num2]) $orig_trovata = "SI";
} # fine for $num2
if ($orig_trovata == "SI") {
$origine_prenota = aggslashdb($origine_prenota);
esegui_query("update $tableprenota set origine = '$origine_prenota' where idprenota = '$idprenota' ");
if (!$caparra and !$commissioni and !$valuta_caparra and $met_trovato == "NO") echo "<br>";
echo mex("Origine",$pag).": <b>".stripslashes($origine_prenota)."</b>.<br>";
} # fine if ($orig_trovata == "SI")
} # fine if ($origini_prenota)
} # fine if ($origine_prenota and $priv_ins_orig_prenota == "s")

if ($giorno_stima_checkin and $ora_stima_checkin and $min_stima_checkin and $priv_ins_checkin == "s") {
if ($inizioperiodo == $vett_idinizio[$n_t][1]) {
if ($tipo_periodi == "g") $giorni_periodo = $lunghezza_periodo;
else $giorni_periodo = ($lunghezza_periodo * 7);
if (controlla_num_pos($giorno_stima_checkin) == "SI" and $giorno_stima_checkin >= 1 and $giorno_stima_checkin <= 7 and $giorno_stima_checkin <= ($giorni_periodo + 1)) {
$data_stima_checkin = esegui_query("select datainizio from $tableperiodi where idperiodi = '$inizioperiodo'");
$data_stima_checkin = risul_query($data_stima_checkin,0,'datainizio');
$data_ini_prenota_f = formatta_data($data_stima_checkin,$stile_data);
$anno_dts = substr($data_stima_checkin,0,4);
$mese_dts = substr($data_stima_checkin,5,2);
$giorno_dts = substr($data_stima_checkin,8,2);
$data_stima_checkin = date("Y-m-d",mktime(0,0,0,$mese_dts,($giorno_dts + $giorno_stima_checkin - 1),$anno_dts));
$stima_checkin = $data_stima_checkin." ".$ora_stima_checkin.":".$min_stima_checkin.":00";
if (preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:00/",$stima_checkin)) {
esegui_query("update $tableprenota set checkout = '$stima_checkin' where idprenota = '$idprenota' ");
echo "<br>".mex("Orario stimato di entrata",$pag).": <b>".substr(str_replace($data_ini_prenota_f,"",formatta_data($stima_checkin,$stile_data)),0,-3)."</b>.<br>";
} # fine if (preg_match("/[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:00/",$stima_checkin))
} # fine if (controlla_num_pos($giorno_stima_checkin) == "SI" and...
} # fine if ($inizioperiodo == $vett_idinizio[$n_t][1])
} # fine if ($giorno_stima_checkin and $ora_stima_checkin and $min_stima_checkin and $priv_ins_checkin == "s")

if ($conferma_prenota == "SI" and $priv_ins_conferma == "s") {
echo "<br>".mex("Confermata",$pag).".<br>";
esegui_query("update $tableprenota set conferma = 'S' where idprenota = '$idprenota' ");
} # fine if ($conferma_prenota == "SI" and $priv_ins_conferma == "s")

if ($priv_ins_commento == "s" or $priv_ins_commenti_pers == "s") {
$commento_arr = array('prenota' => '','checkin' => '','checkout' => '','pers' => '');
for ($num2 = 1 ; $num2 <= $num_commenti ; $num2++) {
if (strcmp((string) $commento[$num2],"")) {
if (($priv_ins_commento == "s" and (!strcmp((string) $tipo_commento[$num2],"") or $tipo_commento[$num2] == "checkin" or $tipo_commento[$num2] == "checkout")) or ($priv_ins_commenti_pers == "s" and $comm_pers_presenti[$tipo_commento[$num2]])) {
echo "<br>".mex("Commento",$pag)."";
if ($tipo_commento[$num2] == "checkin") echo " <em>".mex("per un promemoria all'entrata",$pag)."</em>";
if ($tipo_commento[$num2] == "checkout") echo " <em>".mex("per un promemoria all'uscita",$pag)."</em>";
if (strcmp((string) $tipo_commento[$num2],"") and $tipo_commento[$num2] != "checkin" and $tipo_commento[$num2] != "checkout") echo " \"<em>".$tipo_commento[$num2]."</em>\"";
echo ": ".$commento[$num2]."<br>";
$commento[$num2] = aggslashdb($commento[$num2]);
if (!strcmp((string) $tipo_commento[$num2],"")) $commento_arr['prenota'] = $commento[$num2];
if ($tipo_commento[$num2] == "checkin" or $tipo_commento[$num2] == "checkout") $commento_arr[$tipo_commento[$num2]] = $commento[$num2];
if (strcmp((string) $tipo_commento[$num2],"") and $tipo_commento[$num2] != "checkin" and $tipo_commento[$num2] != "checkout") $commento_arr['pers'] .= ">".$tipo_commento[$num2]."<".$commento[$num2];
} # fine if (($priv_ins_commento == "s" and (!strcmp((string) $tipo_commento[$num2],"") or $tipo_commento[$num2] == "checkin" or...
} # fine if (strcmp((string) $commento[$num2],""))
} # fine for $num2
$commento_corr = $commento_arr['prenota'].">".$commento_arr['checkin'].">".$commento_arr['checkout'].$commento_arr['pers'];
if ($commento_corr != ">>") esegui_query("update $tableprenota set commento = '$commento_corr' where idprenota = '$idprenota' ");
} # fine if ($priv_ins_commento == "s" or $priv_ins_commenti_pers == "s")

echo "<br>".mex("Prenotazione",$pag)." $idprenota ".mex("inserita",$pag)."!<div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$idprenota\">
<input type=\"hidden\" name=\"origine\" value=\"inizio.php\">
<button class=\"mres\" type=\"submit\"><div>".mex("Modifica la prenotazione",$pag)." $idprenota</div></button>
</div></form></div>
<hr style=\"width: 95%\">";

$lista_idprenota .= ",$idprenota";
$lista_idprenota_t[$n_t] .= ",$idprenota";
$costo_tot_mess = (double) $costo_tot_mess + (double) $costo_tariffa_tot;
$caparra_mess = (double) $caparra_mess + (double) $caparra;

} # fine for $num1
} # fine for $n_t


aggiorna_beniinv_presenti($tablerelinventario,$beniinv_presenti);

$lista_idprenota = substr($lista_idprenota,1);
if ($prenota_vicine == "SI") {
$lista_idprenota_vett = explode(",",$lista_idprenota);
for ($num1 = 0 ; $num1 < count($lista_idprenota_vett) ; $num1++) {
$idprenota = $lista_idprenota_vett[$num1];
$idprenota_vicine = substr(str_replace(",".$idprenota.",",",",",".$lista_idprenota.","),1,-1);
esegui_query("update $tableprenota set idprenota_compagna = '$idprenota_vicine' where idprenota = '$idprenota' ");
} # fine for $num1
} # fine if ($prenota_vicine == "SI")
else {
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$lista_idprenota_t[$n_t] = substr($lista_idprenota_t[$n_t],1);
if (${"prenota_vicine".$n_t} and str_replace(",","",$lista_idprenota_t[$n_t]) != $lista_idprenota_t[$n_t]) {
$lista_idprenota_vett = explode(",",$lista_idprenota_t[$n_t]);
for ($num1 = 0 ; $num1 < count($lista_idprenota_vett) ; $num1++) {
$idprenota = $lista_idprenota_vett[$num1];
$idprenota_vicine = $lista_idprenota_t[$n_t];
if (${"interrompi_vicine_ogni".$n_t}) {
for ($num2 = 0 ; $num2 < count($lista_idprenota_vett) ; $num2 += ${"interrompi_vicine_ogni".$n_t}) {
if ($num1 >= $num2 and $num1 < ($num2 + ${"interrompi_vicine_ogni".$n_t})) {
$idprenota_vicine = "";
for ($num3 = 0 ; $num3 < ${"interrompi_vicine_ogni".$n_t} ; $num3++) $idprenota_vicine .= $lista_idprenota_vett[($num2 + $num3)].",";
$idprenota_vicine = substr($idprenota_vicine,0,-1);
break;
} # fine if ($num1 >= $num2 and $num1 < ($num2 + ${"interrompi_vicine_ogni".$n_t}))
} # fine for $num2
} # fine if (${"interrompi_vicine_ogni".$n_t})
$idprenota_vicine = substr(str_replace(",".$idprenota.",",",",",".$idprenota_vicine.","),1,-1);
esegui_query("update $tableprenota set idprenota_compagna = '$idprenota_vicine' where idprenota = '$idprenota' ");
} # fine for $num1
} # fine if (${"prenota_vicine".$n_t} and...
} # fine for $n_t
} # fine else if ($prenota_vicine == "SI")

if (str_replace(",","",$lista_idprenota) != $lista_idprenota) {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"modifica_prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"inizio.php\">
<input type=\"hidden\" name=\"id_prenota\" value=\"$lista_idprenota\">
<button class=\"mress\" type=\"submit\"><div>".mex("Modifica come gruppo le prenotazioni inserite",$pag)."</div></button>
</div></form></div><br>
<hr style=\"width: 95%\">";
} # fine if (str_replace(",","",$lista_idprenota) != $lista_idprenota)
if (!empty($idmessaggi)) {
esegui_query("update $tablemessaggi set stato = 'ins', dati_messaggio1 = '$lista_idprenota' where tipo_messaggio = 'rprenota' and idutenti $LIKE '%,$id_utente,%' and idmessaggi = '$idmessaggi' ");
if (strcmp((string) $dati_mess_calc[0],"") and strcmp((string) $dati_mess_calc[0],$costo_tot_mess)) echo "<br><em><b>".mex("Attenzione",$pag)."</b></em>: ".mex("il prezzo totale delle prenotazioni inserite",$pag)." (<em>$costo_tot_mess</em> $Euro) ".mex("è diverso da quello contenuto nel messaggio di richiesta di prenotazione",$pag)." (<em>".$dati_mess_calc[0]."</em> $Euro).<br><hr style=\"width: 95%\">";
if (strcmp((string) $dati_mess_calc[1],"") and strcmp((string) $dati_mess_calc[1],$caparra_mess)) echo "<br><em><b>".mex("Attenzione",$pag)."</b></em>: ".mex("il prezzo totale delle caparre inserite",$pag)." (<em>$caparra_mess</em> $Euro) ".mex("è diverso da quello contenuto nel messaggio di richiesta di prenotazione",$pag)." (<em>".$dati_mess_calc[1]."</em> $Euro).<br><hr style=\"width: 95%\">";
} # fine if (!empty($idmessaggi))

} # fine if ($continuare != "NO")

if ($tabelle_lock) unlock_tabelle($tabelle_lock);
if ($continuare != "NO") {
$lock = 1;
$aggiorna_disp = 1;
$aggiorna_tar = 0;
if (@function_exists('pcntl_fork')) include("./includes/interconnect/aggiorna_ic_fork.php");
else include("./includes/interconnect/aggiorna_ic.php");
} # fine if ($continuare != "NO")

} # fine if (empty($torna_invece_di_ok))

echo "
<form accept-charset=\"utf-8\" method=\"post\" action=\"prenota.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">";
if (isset($torna_invece_di_ok) and $torna_invece_di_ok == "SI") {
echo "<button class=\"gobk\" type=\"submit\"><div>".mex("Torna indietro",$pag)."</div></button><br></form>";
} # fine if (isset($torna_invece_di_ok) and $torna_invece_di_ok == "SI")
else {
echo "<br><div style=\"text-align: center;\">
<button class=\"ires\" type=\"submit\"><div>".mex("Inserisci una nuova prenotazione",$pag)."</div></button></div>
<br></div></form>
<form accept-charset=\"utf-8\" method=\"post\" action=\"inizio.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button class=\"bkmm\" type=\"submit\"><div>".mex("Torna al menù principale",$pag)."</div></button>
<br></div></form><div style=\"height: 20px;\"></div>";
} # fine else if (isset($torna_invece_di_ok) and $torna_invece_di_ok == "SI")

} # fine if (!empty($idclienti))



else {




if (fixset($mostra_form_inserisci_prenota) != "NO") {

include("./includes/funzioni_tariffe.php");
include("./includes/funzioni_costi_agg.php");
$dati_tariffe = dati_tariffe($tablenometariffe);
if (!empty($id_prenota_copia)) $dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,$priv_ins_num_persone,0,1);
else $dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,$priv_ins_num_persone,0);
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,"NO","SI");

if ($priv_ins_assegnazione_app == "s") {
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
$appart_tot = esegui_query("select idappartamenti from $tableappartamenti $condizioni_regole1_consentite order by idappartamenti");
$num_appart_tot = numlin_query($appart_tot);
} # fine if ($priv_ins_assegnazione_app == "s")

# Se si inserisce una prenotazione uguale da modifica_prenota
$idcognome_cp = htmlspecialchars(fixstr($idcognome_cp));
$idospiti_cp = htmlspecialchars(fixstr($idospiti_cp));
$option_sconto_copia = array();
$dati_ca_copia = array();
$js_sconto_copia = "";
if (!empty($id_prenota_copia)) {
include("./includes/funzioni_mod_prenota.php");
$tableprenotacanc = $PHPR_TAB_PRE."prenotacanc".$anno;
$tableprenota_orig = $tableprenota;
$priv_mod_pagato = "n";
$idprenota_origine = "";
$anno_origine = "";
if (!empty($pcanc)) {
$pcanc = "canc";
$tableprenota = $tableprenotacanc;
} # fine if (!empty($pcanc))
else $pcanc = "";
controlla_id_prenota($id_prenota_copia,$id_prenota_idpr,$num_id_prenota,$id_prenota_int,$priv_mod_prenotazioni,$anno,$PHPR_TAB_PRE,$pcanc);
if ($priv_mod_prenotazioni != "n" and strcmp((string) $id_prenota_copia,"")) {
$js_sconto_copia = "var vsc = document.getElementById('vsc'+nt);
if (sel_tsc.options[ind_tsc].value == 'tot_cp') {
";
$mos_tut_dat = "SI";
$num_tipologie = $num_id_prenota;
if ($num_id_prenota > 1) $prenota_vicine = "SI";
else $prenota_vicine = "";
for ($num_idpr = 0 ; $num_idpr < $num_id_prenota ; $num_idpr++) {
$id_prenota = $id_prenota_idpr[$num_idpr];
$n_t = $num_idpr + 1;
$dati_prenota_copia = esegui_query("select * from $tableprenota where idprenota = '$id_prenota' and idclienti != '0'");
if (numlin_query($dati_prenota_copia)) {
if ($num_idpr == 0) {
$idcognome_cp = risul_query($dati_prenota_copia,0,'idclienti');
$dati_cliente = esegui_query("select * from $tableclienti where idclienti = '$idcognome_cp' ");
if (numlin_query($dati_cliente)) {
$cognome = risul_query($dati_cliente,0,'cognome');
$nome = (string) risul_query($dati_cliente,0,'nome');
} # fine if (numlin_query($dati_cliente))
$ospiti = esegui_query("select * from $tablerclientiprenota where idprenota = '$id_prenota' order by num_ordine ");
$num_ospiti = numlin_query($ospiti);
$idospiti_cp = "";
for ($num1 = 0 ; $num1 < $num_ospiti ; $num1++) {
$idospiti_cp .= ",".risul_query($ospiti,$num1,'idclienti');
} # fine for $num1
if ($idospiti_cp) $idospiti_cp .= ",";
} # fine if ($num_idpr == 0)
${"num_app_richiesti".$n_t} = 1;
${"inizioperiodo".$n_t} = risul_query($dati_prenota_copia,0,'iddatainizio');
if (${"inizioperiodo".$n_t} < 1) ${"inizioperiodo".$n_t} = 1;
${"fineperiodo".$n_t} = risul_query($dati_prenota_copia,0,'iddatafine');
${"nometipotariffa".$n_t} = explode("#@&",(string) risul_query($dati_prenota_copia,0,'tariffa'));
${"nometipotariffa".$n_t} = ${"nometipotariffa".$n_t}[0];
${"numpersone".$n_t} = risul_query($dati_prenota_copia,0,'num_persone');
$cat_persone = dati_cat_pers_p($dati_prenota_copia,0,$dati_cat_pers,${"numpersone".$n_t});
for ($num1 = 0 ; $num1 < $cat_persone['num'] ; $num1++) {
$cat_pers = $cat_persone['ord'][$num1];
if (isset($cat_persone[$cat_pers]['esist']) and $cat_persone[$cat_pers]['esist'] == ($num1 + 1)) ${"cat$num1"."_numpers$n_t"} = $cat_persone[$num1]['molt'];
} # for $num1
${"sconto".$n_t} = risul_query($dati_prenota_copia,0,'sconto');
if (${"sconto".$n_t}) ${"tipo_val_sconto".$n_t} = "";
$option_sconto_copia[$n_t] = "<option value=\"tot_cp\">".mex("prezzo totale",$pag)." (".strtolower(mex("Prenotazione",$pag))." $id_prenota)</option>";
$js_sconto_copia .= "if (nt == $n_t) vsc.value = '".risul_query($dati_prenota_copia,0,'tariffa_tot')."';
";
if ($priv_ins_assegnazione_app == "s") {
$assegnazioneapp = risul_query($dati_prenota_copia,0,'assegnazioneapp');
if ($assegnazioneapp == "k") ${"appartamento".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",(string) risul_query($dati_prenota_copia,0,'idappartamenti')))));
if ($assegnazioneapp == "c") ${"lista_app".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",(string) risul_query($dati_prenota_copia,0,'app_assegnabili')))));
if ($assegnazioneapp == "v") {
${"lista_app".$n_t} = "";
for ($num1 = 0 ; $num1 <  $num_appart_tot; $num1++) ${"lista_app".$n_t} .= str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",(string) risul_query($appart_tot,$num1,'idappartamenti'))))).",";
${"lista_app".$n_t} = substr(${"lista_app".$n_t},0,-1);
} # fine if ($assegnazioneapp == "v")
} # fine if ($priv_ins_assegnazione_app == "s")
$caparra = risul_query($dati_prenota_copia,0,'caparra');
if ($caparra) {
${"caparra".$n_t} = virgola_in_num($caparra,$stile_soldi);
${"tipo_val_caparra".$n_t} = "";
} # fine if ($caparra)
${"met_paga_caparra".$n_t} = risul_query($dati_prenota_copia,0,'metodo_pagamento');
$checkin = risul_query($dati_prenota_copia,0,'checkin');
$checkout = risul_query($dati_prenota_copia,0,'checkout');
if ($checkout and !$checkin) {
${"giorno_stima_checkin".$n_t} = substr($checkout,0,10);
${"ora_stima_checkin".$n_t} = substr($checkout,11,2);
${"min_stima_checkin".$n_t} = substr($checkout,14,2);
} # fine if ($checkout and !$checkin)
$commissioni = risul_query($dati_prenota_copia,0,'commissioni');
if ($commissioni) {
${"commissioni".$n_t} = virgola_in_num($commissioni,$stile_soldi);
${"tipo_val_commissioni".$n_t} = "";
} # fine if ($commissioni)
if ($prenota_vicine) {
$idprenota_compagna = risul_query($dati_prenota_copia,0,'idprenota_compagna');
if (!$idprenota_compagna) $prenota_vicine = "";
else {
for ($num1 = 0 ; $num1 < $num_idpr ; $num1++) {
if (str_replace(",".$id_prenota_idpr[$num1].",","",",".$idprenota_compagna.",") == ",".$idprenota_compagna.",") {
$prenota_vicine = "";
break;
} # fine if (str_replace(",".$id_prenota_idpr[$num1].",","",",".$idprenota_compagna.",") == ",".$idprenota_compagna.",")
} # fine for $num1
} # fine else if (!$idprenota_compagna)
} # fine if ($prenota_vicine)
$conferma = risul_query($dati_prenota_copia,0,'conferma');
if ($conferma == "S") ${"conferma_prenota".$n_t} = "SI";
else ${"conferma_prenota".$n_t} = "";
if ($priv_ins_costi_agg == "s") {
$dati_cap = dati_costi_agg_prenota($tablecostiprenota,$id_prenota,$dati_cat_pers);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$moltiplica_costo = $dati_cap[$numca]['moltiplica_costo'];
if (strstr($moltiplica_costo,",")) $moltiplica_costo = max(explode(",",$moltiplica_costo));
$dati_ca_copia[$n_t][$dati_cap[$numca]['tipo']][$dati_cap[$numca]['nome']]['molt'] = $moltiplica_costo;
if (!empty($dati_cap[$numca]['settimane']) and !strstr($dati_cap[$numca]['settimane'],",")) $dati_ca_copia[$n_t][$dati_cap[$numca]['tipo']][$dati_cap[$numca]['nome']]['sett'] = $dati_cap[$numca]['settimane'];
if (isset($dati_cap[$numca]['cat_pers'])) $dati_ca_copia[$n_t][$dati_cap[$numca]['tipo']][$dati_cap[$numca]['nome']]['cp'] = $dati_cap[$numca]['cat_pers'];
} # fine for $numca
} # fine if ($priv_ins_costi_agg == "s")
${"commento1_".$n_t} = (string) risul_query($dati_prenota_copia,0,'commento');
$num_comm = 1;
if (strstr(${"commento1_".$n_t},">")) {
$commento = explode(">",${"commento1_".$n_t});
$d_promemoria_entrata = $commento[1];
if (strcmp($commento[1],"")) {
$num_comm++;
${"commento".$num_comm."_".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&#039;","'",$commento[1])))));
${"tipo_commento".$num_comm."_".$n_t} = "checkin";
} # fine if (strcmp($commento[1],""))
if (strcmp($commento[2],"")) {
$num_comm++;
${"commento".$num_comm."_".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&#039;","'",$commento[2])))));
${"tipo_commento".$num_comm."_".$n_t} = "checkout";
} # fine if (strcmp($commento[2],""))
if ($priv_vedi_commenti_pers == "s") {
$num_commenti = count($commento);
for ($num1 = 3 ; $num1 < $num_commenti ; $num1++) {
$comm_pers = explode("<",$commento[$num1]);
if (!$pcanc or $num1 != ($num_commenti - 1) or $comm_pers[0] != "hd_del_res") {
$num_comm++;
${"commento".$num_comm."_".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&#039;","'",$comm_pers[1])))));
${"tipo_commento".$num_comm."_".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&#039;","'",$comm_pers[0])))));
} # fine if (!$pcanc or $num1 != ($num_commenti - 1) or...
} # fine for $num1
} # fine if ($priv_vedi_commenti_pers == "s")
${"commento1_".$n_t} = $commento[0];
${"tipo_commento1_".$n_t} = "";
} # fine if (strstr(${"commento1_".$n_t},">"))
${"commento1_".$n_t} = str_replace("&amp;","&",str_replace("&quot;","\"",str_replace("&lt;","<",str_replace("&gt;",">",str_replace("&#039;","'",${"commento1_".$n_t})))));
${"num_commenti".$n_t} = $num_comm;
} # fine if (numlin_query($dati_prenota_copia))
} # fine for $num_idpr
$js_sconto_copia .= "vsc.readOnly = true;
sel_tvsc.selectedIndex = 0;
}
else vsc.readOnly = false;";
} # fine if ($priv_mod_prenotazioni != "n" and strcmp((string) $id_prenota_copia,""))
$tableprenota = $tableprenota_orig;
} # fine if (!empty($id_prenota_copia))


# Inizio della pagina.
echo "<h4 id=\"h_ires\"><span>".mex("Inserisci una nuova prenotazione",$pag).".</span></h4>";
if (!isset($cognome)) $cognome = "";
if (!isset($nome)) $nome = "";
if (@get_magic_quotes_gpc()) {
$cognome = stripslashes($cognome);
$nome = stripslashes($nome);
} # fine if (@get_magic_quotes_gpc())
$cognome = htmlspecialchars($cognome);
$nome = htmlspecialchars($nome);

# Form per nuova prenotazione.
echo "<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"clienti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"origine\" value=\"prenota.php\">";
if ($idcognome_cp) echo "<input type=\"hidden\" name=\"idcognome_cp\" value=\"$idcognome_cp\">";
if ($idospiti_cp) echo "<input type=\"hidden\" name=\"idospiti_cp\" value=\"$idospiti_cp\">";
echo "<hr style=\"width: 95%\"><div class=\"linhbox2\">
".mex("Cliente titolare",$pag).": <span class=\"wsnw\">".mex("cognome",$pag).": ";
if ($attiva_prefisso_clienti == "p") echo $prefisso_clienti;
echo "<input type=\"text\" name=\"cognome\" value=\"".str_replace("&amp;","&",$cognome)."\">";
if ($attiva_prefisso_clienti == "s") echo $prefisso_clienti." ";
echo ",</span> <span class=\"wsnw\">".mex("nome",$pag).": <input type=\"text\" name=\"nome\" value=\"".str_replace("&amp;","&",$nome)."\"></span><br>";
if (fixset($prenota_vicine) == "SI") $checked = " checked";
else $checked = "";
$mess_app_vicini = "<label><input type=\"checkbox\" name=\"prenota_vicine\" value=\"SI\"$checked> ".mex("Appartamenti vicini",'unit.php').".</label><br>";
if ($num_tipologie > 1 and $priv_ins_multiple == "s") echo $mess_app_vicini;

if ($priv_ins_checkin == "s") {
$attiva_checkin = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'attiva_checkin' and idutente = '$id_utente'");
$attiva_checkin = risul_query($attiva_checkin,0,'valpersonalizza');
} # fine if ($priv_ins_checkin == "s")
else $attiva_checkin = "";

if ($priv_ins_assegnazione_app == "s") {
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
function agg_comb_app (nt) {
var sel_comb=document.getElementById('comb_ap'+nt);
var ind_sc = sel_comb.selectedIndex;
var txt_lista_app=document.getElementById('list_ap'+nt);
txt_lista_app.value = sel_comb.options[ind_sc].value;
}
-->
</script>";
} # fine if (numlin_query($comb_app) == 1)
else $opt_comb_app = "";
} # fine if ($priv_ins_assegnazione_app == "s")
if ($priv_ins_sconto == "s") {
echo "<script type=\"text/javascript\">
<!--
function agg_tsc (nt) {
var sel_tsc = document.getElementById('tsc'+nt);
var ind_tsc = sel_tsc.selectedIndex;
var sel_tvsc = document.getElementById('tvsc'+nt);
if (sel_tsc.options[ind_tsc].value != 'sconto') {
if (sel_tvsc.selectedIndex == 1 || sel_tvsc.selectedIndex == 2) sel_tvsc.selectedIndex = 0;
sel_tvsc.options[1].disabled = 1;
sel_tvsc.options[2].disabled = 1;
}
else {
sel_tvsc.options[1].disabled = 0;
sel_tvsc.options[2].disabled = 0;
}
$js_sconto_copia
}
-->
</script>";
} # fine if ($priv_ins_sconto == "s")

$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) $campi_pers_comm = risul_query($campi_pers_comm,0,'valpersonalizza');
else $campi_pers_comm = "";
if ($mobile_device) $cols_textarea = "36";
else $cols_textarea = "45";
if ($attiva_checkin == "SI" or $campi_pers_comm) {
echo "<script type=\"text/javascript\">
<!--
function agg_comm (nt) {
var sel = document.getElementById('s_comm'+nt);
var colsel = sel.options[sel.selectedIndex].value;
sel.remove(sel.selectedIndex);
sel.selectedIndex = 0;
var num_comm_agg = document.getElementById('num_comm'+nt);
num_commenti_agg = parseInt(num_comm_agg.value)+1;
num_comm_agg.value = num_commenti_agg;
var n_comm = document.getElementById('n_comm'+nt);
var colsel_vedi = '\"'+colsel+'\"';
if (colsel_vedi == '\"checkin\"') colsel_vedi = '".str_replace("'","\\'",mex("per un promemoria all'entrata",$pag))."';
if (colsel_vedi == '\"checkout\"') colsel_vedi = '".str_replace("'","\\'",mex("per un promemoria all'uscita",$pag))."';
n_comm_node = document.createElement('div');
n_comm_node.style.cssFloat = 'left';
n_comm_node.style.padding = '3px 12px 3px 0';
n_comm_node.innerHTML = '".mex("Commento",$pag)." '+colsel_vedi+':<br><textarea name=\"commento'+num_commenti_agg+'_'+nt+'\" rows=3 cols=$cols_textarea style=\"white-space: pre; overflow: auto;\"></textarea><input type=\"hidden\" name=\"tipo_commento'+num_commenti_agg+'_'+nt+'\" value=\"'+colsel+'\">';
n_comm.appendChild(n_comm_node);
}
-->
</script>";
} # fine if ($attiva_checkin == "SI" or $campi_pers_comm)

if ($num_tipologie > 1) echo "<table><tr><td style=\"height: 3px\"></td></tr></table><table bgcolor=\"#000000\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\">";
$bgcolor_tipologia = $t2row1color;

for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {

$numcostiagg = 0;
$testo_costi_agg = "";
$testo_catpers_ca = "";
if ($priv_ins_costi_agg == "s") {
$costi_agg_raggr = array();
$chiedi_combina = array();
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($attiva_costi_agg_consentiti == "n" or $costi_agg_consentiti_vett[$dati_ca[$num1]['id']] == "SI") {
if ($priv_ins_num_persone == "s" and $dati_ca[$num1]['mostra_numpers'] == "s") $mostra_numpers = 1;
else $mostra_numpers = 0;
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
if ($dati_ca[$num1]['tipo'] == "u") $tipo_ca = "unico";
if ($dati_ca[$num1]['tipo'] == "s") $tipo_ca = "$parola_settimanale";
if (fixset(${$costoagg."_".$n_t}) == "SI" or !empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['molt'])) $checked = " checked";
else $checked = "";
$testo_costo .= "<input type=\"hidden\" name=\"idcostoagg$numcostiagg_v"."_$n_t\" value=\"$id_costo\">";
if ($mostra_numpers) $testo_costo .= "$nome_costo: ";
else $testo_costo .= "<label><input type=\"checkbox\" id=\"ca_$numcostiagg_v"."_$n_t\" name=\"$costoagg"."_$n_t\" value=\"SI\"$checked>
".mex("costo aggiuntivo $tipo_ca",$pag)." \"<em>$nome_costo</em>\"";
if ($mostra_numpers) $onclick = "";
else $onclick = " onclick=\"document.getElementById('ca_$numcostiagg_v"."_$n_t').checked='1';\"";
if ($dati_ca[$num1]['numsett'] == "c" and $dati_ca[$num1]['associasett'] == "n") {
$numsettimane = "numsettimane".$numcostiagg_v;
if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['sett'])) $valnumsettimane = $dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['sett'];
else {
if (!empty(${$numsettimane."_".$n_t})) $valnumsettimane = ${$numsettimane."_".$n_t};
else $valnumsettimane = 0;
} # fine else if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['sett']))
$testo_costo .= ", ".mex("nº di $parola_settimane da applicare",$pag).":</label>
<input type=\"text\" name=\"$numsettimane"."_$n_t\" value=\"$valnumsettimane\" size=\"3\" maxlength=\"3\"$onclick><label for=\"ca_$numcostiagg_v"."_$n_t\">";
} # fine if ($dati_ca[$num1]['numsett'] == "c" and...
if ($dati_ca[$num1]['moltiplica'] == "c") {
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg_v;
if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['molt'])) $valnummoltiplica_ca = $dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['molt'];
else {
if (fixset(${$nummoltiplica_ca."_".$n_t})) $valnummoltiplica_ca = ${$nummoltiplica_ca."_".$n_t};
else {
if ($mostra_numpers) $valnummoltiplica_ca = "";
else $valnummoltiplica_ca = 1;
} # fine else if (fixset(${$nummoltiplica_ca."_".$n_t}))
} # fine else if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['molt']))
if (!$mostra_numpers) $testo_costo .= ", ".mex("da moltiplicare per",$pag).":</label>";
if ($dati_ca[$num1]['molt_max'] != "n") {
if ($mostra_numpers) $testo_costo .= "<input type=\"text\" name=\"$nummoltiplica_ca"."_$n_t\" value=\"$valnummoltiplica_ca\" size=\"2\" maxlength=\"2\">";
else $testo_costo .= "<input type=\"text\" name=\"$nummoltiplica_ca"."_$n_t\" value=\"$valnummoltiplica_ca\" size=\"3\" maxlength=\"12\"$onclick>";
} # fine if ($dati_ca[$num1]['molt_max'] != "n")
else {
$testo_costo .= "<select name=\"$nummoltiplica_ca"."_$n_t\"$onclick>";
if ($mostra_numpers) $testo_costo .= "<option value=\"\">0</option>";
for ($num2 = 1 ; $num2 <= $dati_ca[$num1]['molt_max_num'] ; $num2++) {
if ($num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
if ($numcostiagg_v != "[nca]") $id_opt = "";
else $id_opt = " id=\"nm_ca$numcostiagg_v"."_$n_t"."_opt$num2\"";
$testo_costo .= "<option$id_opt value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$testo_costo .= "</select>";
} # fine else if ($dati_ca[$num1]['molt_max'] != "n")
if (!$mostra_numpers) $testo_costo .= "<label for=\"ca_$numcostiagg_v"."_$n_t\">";
} # fine if ($dati_ca[$num1]['moltiplica'] == "c")
if ($dati_ca[$num1]['letto'] == "s" and $dati_cat_pers['num']) {
$testo_costo .= " (</label><select name=\"catpers_ca$numcostiagg_v"."_$n_t\"$onclick>";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
$sel = "";
if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['cp'])) {
if ($num2 == $dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['cp']['ord'][0] and $dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['cp'][$num2]['esist']) $sel = " selected";
} # fine if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['cp']))
elseif ($num2 == fixset(${"catpers_ca$numcostiagg_v"."_$n_t"})) $sel = " selected";
if ($numcostiagg_v != "[nca]") $id_opt = "";
else $id_opt = " id=\"cp_ca$numcostiagg_v"."_$n_t"."_opt$num2\"";
$testo_costo .= "<option$id_opt value=\"$num2\"$sel>";
if ($dati_ca[$num1]['moltiplica'] != "1") $testo_costo .= $dati_cat_pers[$num2]['n_plur'];
else $testo_costo .= $dati_cat_pers[$num2]['n_sing'];
$testo_costo .= "</option>";
} # for $num2
$testo_costo .= "</select><label for=\"ca_$numcostiagg_v"."_$n_t\">)";
} # fine if ($dati_ca[$num1]['letto'] == "s" and $dati_cat_pers['num'])
if (!$mostra_numpers) $testo_costo .= ".</label><br>";
} # fine if ($dati_ca[$num1]['combina'] != "s")
else {
$testo_costo = "combina";
$categ = $dati_ca[$num1]['categoria'];
if (!empty($dati_ca_copia[$n_t][$dati_ca[$num1]['tipo']][$dati_ca[$num1]['nome']]['molt'])) $chiedi_combina[$categ]['sel'] = 1;
if ($dati_ca[$num1]['numsett'] == "c" and $dati_ca[$num1]['associasett'] == "n") $chiedi_combina[$categ]['sett'] = 1;
if ($dati_ca[$num1]['moltiplica'] == "c") {
if (!isset($chiedi_combina[$categ]['molt'])) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$num1]['molt_max_num'];
if ($dati_ca[$num1]['molt_max'] != "n") $chiedi_combina[$categ]['molt_max_num'] = 0;
elseif ($chiedi_combina[$categ]['molt_max_num'] and $chiedi_combina[$categ]['molt_max_num'] < $dati_ca[$num1]['molt_max_num']) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$num1]['molt_max_num'];
$chiedi_combina[$categ]['molt'] = 1;
} # fine if ($dati_ca[$num1]['moltiplica'] == "c")
if ($dati_ca[$num1]['letto'] == "s") $chiedi_combina[$categ]['letto'] = 1;
} # fine else if ($dati_ca[$num1]['combina'] != "s")
if ($dati_ca[$num1]['raggruppa'] != "s") {
if ($mostra_numpers) $testo_catpers_ca .= ";</td><td style=\"width: 20px;\"></td><td>$testo_costo";
else $testo_costi_agg .= $testo_costo;
} # fine if ($dati_ca[$num1]['raggruppa'] != "s")
else $costi_agg_raggr[$testo_costo."<>".$dati_ca[$num1]['categoria']."<>".(string) $mostra_numpers] = fixset($costi_agg_raggr[$testo_costo."<>".$dati_ca[$num1]['categoria']."<>".(string) $mostra_numpers]).$dati_ca[$num1]['id'].",";
} # fine if ($attiva_costi_agg_consentiti == "n" or...
} # fine for $num1

if (!empty($costi_agg_raggr)) {
foreach ($costi_agg_raggr as $testo_costo => $id_costi) {
$testo_costo = explode("<>",$testo_costo);
$numcostiagg++;
$id_costi_vett = explode(",",substr($id_costi,0,-1));
$num_id_costi = count($id_costi_vett);
for ($num1 = 0 ; $num1 < $num_id_costi ; $num1++) {
if (fixset(${"gr_idcostoagg".$id_costi_vett[$num1]."_$n_t"}) == "SI") {
${"costoagg".$numcostiagg."_".$n_t} = "SI";
${"nummoltiplica_ca".$numcostiagg."_".$n_t} = ${"gr_nummoltiplica_ca".$id_costi_vett[$num1]."_$n_t"};
${"numsettimane".$numcostiagg."_".$n_t} = ${"gr_numsettimane".$id_costi_vett[$num1]."_$n_t"};
${"catpers_ca".$numcostiagg."_".$n_t} = ${"gr_catpers_ca".$id_costi_vett[$num1]."_$n_t"};
break;
} # fine if (fixset(${"gr_idcostoagg".$id_costi_vett[$num1]."_$n_t"}) == "SI")
} # fine for $num1
if ($testo_costo[2]) {
$mostra_numpers = 1;
$onclick = "";
$txtsize = "2";
$txtmaxlen = "2";
} # fine if ($testo_costo[2])
else {
$mostra_numpers = 0;
$onclick = " onclick=\"document.getElementById('ca_$numcostiagg"."_$n_t').checked='1';\"";
$txtsize = "3";
$txtmaxlen = "12";
} # fine else if ($testo_costo[2])
if ($testo_costo[0] != "combina") {
$testo_costo = $testo_costo[0];
if (fixset(${"costoagg".$numcostiagg."_".$n_t}) == "SI") $testo_costo = str_replace("type=\"checkbox\"","type=\"checkbox\" checked",$testo_costo);
if (!empty(${"nummoltiplica_ca".$numcostiagg."_".$n_t})) {
if ($mostra_numpers) $testo_costo = str_replace("name=\"nummoltiplica_ca[nca]_$n_t\" value=\"\"","name=\"nummoltiplica_ca[nca]_$n_t\" value=\"".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\"",$testo_costo);
else $testo_costo = str_replace("name=\"nummoltiplica_ca[nca]_$n_t\" value=\"1\"","name=\"nummoltiplica_ca[nca]_$n_t\" value=\"".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\"",$testo_costo);
} # fine if (!empty(${"nummoltiplica_ca".$numcostiagg."_".$n_t}))
if (strcmp(fixstr(${"nummoltiplica_ca".$numcostiagg."_".$n_t}),"")) $testo_costo = str_replace(" id=\"nm_ca[nca]_$n_t"."_opt".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\" value=\"".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\""," id=\"nm_ca[nca]_$n_t"."_opt".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\" value=\"".${"nummoltiplica_ca".$numcostiagg."_".$n_t}."\" selected",$testo_costo);
if (!empty(${"numsettimane".$numcostiagg."_".$n_t})) $testo_costo = str_replace("name=\"numsettimane[nca]_$n_t\" value=\"0\"","name=\"numsettimane[nca]_$n_t\" value=\"".${"numsettimane".$numcostiagg."_".$n_t}."\"",$testo_costo);
if (strcmp(fixstr(${"catpers_ca".$numcostiagg."_".$n_t}),"")) $testo_costo = str_replace(" id=\"cp_ca[nca]_$n_t"."_opt".${"catpers_ca".$numcostiagg."_".$n_t}."\" value=\"".${"catpers_ca".$numcostiagg."_".$n_t}."\""," id=\"cp_ca[nca]_$n_t"."_opt".${"catpers_ca".$numcostiagg."_".$n_t}."\" value=\"".${"catpers_ca".$numcostiagg."_".$n_t}."\" selected",$testo_costo);
$testo_costo = str_replace("[nca]_$n_t\"",$numcostiagg."_$n_t\"",$testo_costo);
$testo_costo = str_replace("[nca]_$n_t'",$numcostiagg."_$n_t'",$testo_costo);
$testo_costo = str_replace("[nca]_$n_t"."_",$numcostiagg."_$n_t"."_",$testo_costo);
if ($num_id_costi == 1) {
$num_costo = $dati_ca['id'][$id_costi_vett[0]];
if ($mostra_numpers) $testo_costo = str_replace("[nome]: ",$dati_ca[$num_costo]['nome'].": ",$testo_costo);
else $testo_costo = str_replace(" \"<em>[nome]</em>\""," \"<em>".$dati_ca[$num_costo]['nome']."</em>\"",$testo_costo);
$testo_costo = str_replace(" value=\"[id]\""," value=\"".$id_costi_vett[0]."\"",$testo_costo);
} # fine if ($num_id_costi == 1)
else {
$sel_costi = "</label><select name=\"idcostoagg$numcostiagg"."_$n_t\"$onclick>";
for ($num1 = 0 ; $num1 < $num_id_costi ; $num1++) {
$num_costo = $dati_ca['id'][$id_costi_vett[$num1]];
if (fixset(${"idcostoagg".$numcostiagg."_".$n_t}) == $id_costi_vett[$num1]) $sel = " selected";
else $sel = "";
$sel_costi .= "<option value=\"".$id_costi_vett[$num1]."\"$sel>".$dati_ca[$num_costo]['nome']."</option>";
} # fine for $num1
$sel_costi .= "</select><label for=\"ca_$numcostiagg"."_$n_t\">";
if ($mostra_numpers) $testo_costo = str_replace("[nome]: ","$sel_costi: ",$testo_costo);
else $testo_costo = str_replace(" \"<em>[nome]</em>\""," \"$sel_costi\"",$testo_costo);
$testo_costo = str_replace("<input type=\"hidden\" name=\"idcostoagg$numcostiagg"."_$n_t\" value=\"[id]\">","",$testo_costo);
} # fine else if ($num_id_costi == 1)
if ($mostra_numpers) $testo_catpers_ca .= ";</td><td style=\"width: 20px;\"></td><td>$testo_costo";
else $testo_costi_agg .= $testo_costo;
} # fine if ($testo_costo[0] != "combina")
else {
$categoria = $testo_costo[1];
if (fixset(${"costoagg".$numcostiagg."_".$n_t}) == "SI" or !empty($chiedi_combina[$categoria]['sel'])) $checked = " checked";
else $checked = "";
$testo_costo = "<input type=\"hidden\" name=\"idcostoagg$numcostiagg"."_$n_t\" value=\"c".htmlspecialchars($categoria)."\">
<input type=\"hidden\" name=\"idca_cat$numcostiagg"."_$n_t\" value=\",$id_costi\">";
if ($mostra_numpers) $testo_costo .= htmlspecialchars($categoria).": ";
else $testo_costo .= "<label><input type=\"checkbox\" id=\"ca_$numcostiagg"."_$n_t\" name=\"costoagg$numcostiagg"."_$n_t\" value=\"SI\"$checked>
".mex("costo aggiuntivo",$pag)." \"<em>".htmlspecialchars($categoria)."</em>\"";
if (isset($chiedi_combina[$categoria]['sett'])) {
$numsettimane = "numsettimane".$numcostiagg;
if (${$numsettimane."_".$n_t}) $valnumsettimane = ${$numsettimane."_".$n_t};
else $valnumsettimane = 0;
$testo_costo .= ", ".mex("nº di $parola_settimane da applicare",$pag).":</label>
<input type=\"text\" name=\"$numsettimane"."_$n_t\" value=\"$valnumsettimane\" size=\"3\" maxlength=\"3\"$onclick><label for=\"ca_$numcostiagg"."_$n_t\">";
} # fine if (isset($chiedi_combina[$categoria]['sett']))
if (isset($chiedi_combina[$categoria]['molt'])) {
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg;
if (!empty(${$nummoltiplica_ca."_".$n_t})) $valnummoltiplica_ca = ${$nummoltiplica_ca."_".$n_t};
else {
if ($mostra_numpers) $valnummoltiplica_ca = "";
else $valnummoltiplica_ca = 1;
} # fine else if (!empty(${$nummoltiplica_ca."_".$n_t}))
if (!$mostra_numpers) $testo_costo .= ", ".mex("da moltiplicare per",$pag).":</label>";
if (!$chiedi_combina[$categoria]['molt_max_num']) $testo_costo .= "<input type=\"text\" name=\"$nummoltiplica_ca"."_$n_t\" value=\"$valnummoltiplica_ca\" size=\"$txtsize\" maxlength=\"$txtmaxlen\"$onclick>";
else {
$testo_costo .= "<select name=\"$nummoltiplica_ca"."_$n_t\"$onclick>";
for ($num2 = 1 ; $num2 <= $chiedi_combina[$categoria]['molt_max_num'] ; $num2++) {
if ($num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
$testo_costo .= "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$testo_costo .= "</select>";
} # fine else if ($dati_ca[$num1]['molt_max'] != "n")
$testo_costo .= "<label for=\"ca_$numcostiagg"."_$n_t\">";
} # fine if (isset($chiedi_combina[$categoria]['molt']))
if (isset($chiedi_combina[$categoria]['letto']) and $dati_cat_pers['num']) {
$testo_costo .= " (</label><select name=\"catpers_ca$numcostiagg"."_$n_t\"$onclick>";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($num2 == ${"catpers_ca$numcostiagg"."_$n_t"}) $sel = " selected";
else $sel = "";
$testo_costo .= "<option value=\"$num2\"$sel>".$dati_cat_pers[$num2]['n_plur']."</option>";
} # for $num2
$testo_costo .= "</select><label for=\"ca_$numcostiagg"."_$n_t\">)";
} # fine if (isset($chiedi_combina[$categoria]['letto']) and $dati_cat_pers['num'])
if ($mostra_numpers) $testo_catpers_ca .= ";</td><td style=\"width: 20px;\"></td><td>$testo_costo";
else $testo_costi_agg .= $testo_costo.".</label><br>";
} # fine else if ($testo_costo[0] != "combina")
} # fine foreach ($costi_agg_raggr as $testo_costo => $id_costi)
} # fine if (!empty($costi_agg_raggr))
} # fine if ($priv_ins_costi_agg == "s")

if ($num_tipologie > 1) {
echo "<tr><td bgcolor=\"$bgcolor_tipologia\"><b>".mex("Tipologia",$pag)." $n_t</b>: ";
if ($bgcolor_tipologia == $t2row1color) $bgcolor_tipologia = $t2row2color;
else $bgcolor_tipologia = $t2row1color;
} # fine if ($num_tipologie > 1)
echo "<span class=\"wsnw\">".mex("Dal",$pag)." ";
if (!isset(${"num_app_richiesti".$n_t})) ${"num_app_richiesti".$n_t} = "";
if (!isset(${"inizioperiodo".$n_t})) ${"inizioperiodo".$n_t} = "";
if (!isset(${"fineperiodo".$n_t})) ${"fineperiodo".$n_t} = "";
if (${"num_app_richiesti".$n_t} > 1) {
${"inizioperiodo".$n_t} = explode(",",${"inizioperiodo".$n_t});
${"inizioperiodo".$n_t} = ${"inizioperiodo".$n_t}[0];
${"fineperiodo".$n_t} = explode(",",${"fineperiodo".$n_t});
${"fineperiodo".$n_t} = ${"fineperiodo".$n_t}[0];
} # fine if (${"num_app_richiesti".$n_t} > 1)
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
if (${"inizioperiodo".$n_t}) {
$inizio_selected = ${"inizioperiodo".$n_t};
if (controlla_num($inizio_selected) == "SI") {
$inizio_selected = esegui_query("select datainizio from $tableperiodi where idperiodi = '".aggslashdb($inizio_selected)."'");
$inizio_selected = risul_query($inizio_selected,0,'datainizio');
} # fine if (controlla_num($inizio_selected) == "SI")
} # fine if (${"inizioperiodo".$n_t})
else $inizio_selected = $inizio_select;
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","inizioperiodo$n_t",$inizio_selected,"","",$id_utente,$tema);
echo "</span> <span class=\"wsnw\">".mex("al",$pag)." ";
if (${"fineperiodo".$n_t}) {
$date_selected = ${"fineperiodo".$n_t};
if (controlla_num($date_selected) == "SI") {
$date_selected = esegui_query("select datafine from $tableperiodi where idperiodi = '".aggslashdb(${"fineperiodo".$n_t})."'");
$date_selected = risul_query($date_selected,0,'datafine');
} # fine if (controlla_num($date_selected) == "SI")
} # fine if (${"fineperiodo".$n_t})
else $date_selected = $fine_select;
mostra_menu_date(C_DATI_PATH."/selperiodimenu$anno.$id_utente.php","fineperiodo$n_t",$date_selected,"","",$id_utente,$tema);
if (!isset($nometipotariffa)) $sel = " selected";
else $sel = "";
echo "</span><br>
<table id=\"ir_dat\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tr><td>
".mex("Tipo di tariffa",$pag)." :
<select name=\"nometipotariffa$n_t\">
<option value=\"\"$sel>----</option>";
$num_tariffe = 0;
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) $num_tariffe++;
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa])) {
$tariffa = "tariffa".$numtariffa;
if ($dati_tariffe[$tariffa]['nome'] == "") $nometariffa_vedi = mex("tariffa",$pag).$numtariffa;
else $nometariffa_vedi = $dati_tariffe[$tariffa]['nome'];
if ((isset(${"nometipotariffa".$n_t}) and (${"nometipotariffa".$n_t} == $tariffa or ${"nometipotariffa".$n_t} == $nometariffa_vedi)) or $num_tariffe == 1) $sel = " selected";
else $sel = "";
echo "
<option value=\"$tariffa\"$sel>$nometariffa_vedi</option>";
} # fine if ($attiva_tariffe_consentite == "n" or isset($tariffe_consentite_vett[$numtariffa]))
} # fine for $numtariffa
echo "</select>;</td>";
if ($priv_ins_sconto == "s") {
$sel_sconto = "";
$sel_tot = "";
$sel_tot_sett = "";
$sel_tar = "";
$sel_tar_sett = "";
$disabled = "";
if (!isset(${"tipo_sconto".$n_t})) ${"tipo_sconto".$n_t} = "";
if (${"tipo_sconto".$n_t} == "sconto" or !${"tipo_sconto".$n_t}) $sel_sconto = " selected";
else  $disabled = " disabled";
if (${"tipo_sconto".$n_t} == "tot") $sel_tot = " selected";
if (${"tipo_sconto".$n_t} == "tot_sett") $sel_tot_sett = " selected";
if (${"tipo_sconto".$n_t} == "tar") $sel_tar = " selected";
if (${"tipo_sconto".$n_t} == "tar_sett") $sel_tar_sett = " selected";
echo "<td style=\"width: 30px;\"></td><td><select name=\"tipo_sconto$n_t\" id=\"tsc$n_t\" onchange=\"agg_tsc('$n_t')\">
<option value=\"sconto\"$sel_sconto>".mex("sconto",$pag)."</option>
".fixset($option_sconto_copia[$n_t])."
<option value=\"tot\"$sel_tot>".mex("prezzo totale",$pag)."</option>
<option value=\"tot_sett\"$sel_tot_sett>".mex("prezzo totale $parola_settimanale",$pag)."</option>
<option value=\"tar\"$sel_tar>".mex("prezzo tariffa",$pag)."</option>
<option value=\"tar_sett\"$sel_tar_sett>".mex("prezzo tariffa $parola_settimanale",$pag)."</option>
</select>: <span class=\"wsnw\"><input type=\"text\" name=\"sconto$n_t\" id=\"vsc$n_t\" size=\"7\" value =\"".htmlspecialchars(fixstr(${"sconto".$n_t}))."\">";
$sel_val = "";
$sel_tot = "";
$sel_tar = "";
if (!fixset(${"tipo_val_sconto".$n_t})) $sel_val = " selected";
else {
if (${"tipo_val_sconto".$n_t} == "tot") $sel_tot = " selected";
if (${"tipo_val_sconto".$n_t} == "tar") $sel_tar = " selected";
} # fine else if (!fixset(${"tipo_val_sconto".$n_t}))
echo " <select name=\"tipo_val_sconto$n_t\" id=\"tvsc$n_t\">
<option value=\"\"$sel_val>$Euro</option><option value=\"tot\"$sel_tot$disabled>".mex("% del totale",$pag)."</option>
<option value=\"tar\"$sel_tar$disabled>".mex("% della tariffa",$pag)."</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
if (${"tipo_val_sconto".$n_t} == ">".$altre_valute[$num1]['nome']) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel>".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
echo "</select>;</span></td>";
} # fine if ($priv_ins_sconto == "s")
echo "</tr></table>";
if ($priv_ins_num_persone == "s") {
echo "<table id=\"cat_p\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tr><td>";
if ($dati_cat_pers['num']) {
if (!empty(${"cat0_numpers".$n_t}) and controlla_num_pos(${"cat0_numpers".$n_t}) != "SI") ${"cat0_numpers".$n_t} = "";
echo " ".ucfirst($dati_cat_pers[0]['n_plur']).": <input type=\"text\" name=\"cat0_numpers$n_t\" size=\"2\" maxlength=\"2\" value =\"".fixset(${"cat0_numpers".$n_t})."\">";
} # fine if ($dati_cat_pers['num'])
else {
if (!isset(${"numpersone".$n_t}) or controlla_num_pos(${"numpersone".$n_t}) != "SI") ${"numpersone".$n_t} = "";
echo " ".mex("nº di persone",$pag).": <input type=\"text\" name=\"numpersone$n_t\" size=\"2\" maxlength=\"2\" value =\"".${"numpersone".$n_t}."\">";
} # fine else if ($dati_cat_pers['num'])
if ($dati_cat_pers['num'] and $priv_ins_num_persone == "s") {
for ($num1 = 1 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
echo ";</td><td style=\"width: 20px;\"></td><td>";
if (!empty(${"cat$num1"."_numpers$n_t"}) and controlla_num_pos(${"cat$num1"."_numpers$n_t"}) != "SI") ${"cat$num1"."_numpers$n_t"} = "";
echo ucfirst($dati_cat_pers[$num1]['n_plur']).": <input type=\"text\" name=\"cat$num1"."_numpers$n_t\" size=\"2\" maxlength=\"2\" value =\"".fixset(${"cat$num1"."_numpers$n_t"})."\">";
} # for $num1
if ($n_t == 1) echo "<input type=\"hidden\" name=\"num_categorie_persone\" value=\"".$dati_cat_pers['num']."\">";
} # fine if ($dati_cat_pers['num'] and $priv_ins_num_persone == "s")
if ($testo_catpers_ca) echo $testo_catpers_ca;
echo ".</td></tr></table>";
} # fine if ($priv_ins_num_persone == "s")
echo "</div>";

if ($priv_ins_assegnazione_app == "s") {
echo "<br><div class=\"linhbox\">".mex("Metodo per l'assegnazione dell'appartamento",'unit.php').":<br>
·".mex("Nº fisso di appartamento",'unit.php').": 
<select name=\"appartamento$n_t\">
<option value=\"\">--</option>";
$assegnazioneapp = fixset($assegnazioneapp);
for ($num1 = 0 ; $num1 <  $num_appart_tot; $num1++) {
$idapp = risul_query($appart_tot,$num1,'idappartamenti');
if ((!$assegnazioneapp or $assegnazioneapp == "k") and $idapp == fixset(${"appartamento".$n_t})) $sel = " selected";
else $sel = "";
echo "<option value=\"$idapp\"$sel>$idapp</option>";
} # fine for $num1
if (!empty(${"lista_app".$n_t})) {
${"lista_app".$n_t} = htmlspecialchars(${"lista_app".$n_t});
if (${"nometipotariffa".$n_t}) {
$regola2_sel = esegui_query("select * from $tableregole where tariffa_per_app = '".aggslashdb(${"nometipotariffa".$n_t})."'");
if (numlin_query($regola2_sel) == 1) if (${"lista_app".$n_t} == risul_query($regola2_sel,0,'motivazione')) ${"lista_app".$n_t} = "";
} # fine if (${"nometipotariffa".$n_t})
} # fine if (!empty(${"lista_app".$n_t}))
echo "</select><br>
·".mex("Lista di appartamenti",'unit.php').":
<input type=\"text\" id=\"list_ap$n_t\" name=\"lista_app$n_t\" size=\"30\" value =\"".fixset(${"lista_app".$n_t})."\"> ";
if ($opt_comb_app) {
echo "(<select id=\"comb_ap$n_t\" onchange=\"agg_comb_app($n_t)\">
<option value=\"\" selected>--</option>$opt_comb_app</select>)";
} # fine if ($opt_comb_app)
else echo "(".mex("separati da virgole",'unit.php').")";
echo ".<br>
·".mex("Nº di piano",$pag).": <select name=\"num_piano$n_t\">";
if (empty(${"num_piano".$n_t})) $sel = " selected";
else $sel = "";
echo "<option value=\"\"$sel>--</option>";
$appart = esegui_query("select numpiano from $tableappartamenti $condizioni_regole1_consentite order by numpiano");
$num_appart = numlin_query($appart);
$ultimopiano = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$piano = risul_query($appart,$num1,'numpiano');
if ($piano != $ultimopiano) {
$ultimopiano = $piano;
if ($piano == fixset(${"num_piano".$n_t})) $sel = " selected";
else $sel = "";
echo "<option value=\"$piano\"$sel>$piano</option>";
} # fine if ($piano != $ultimopiano)
} # fine for $num1
if (empty(${"num_casa".$n_t})) $sel = " selected";
else $sel = "";
echo "</select>
 ".mex("e/o di casa",$pag).": <select name=\"num_casa$n_t\">
<option value=\"\"$sel>--</option>";
$appart = esegui_query("select numcasa from $tableappartamenti $condizioni_regole1_consentite order by numcasa");
$ultimacasa = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$casa = risul_query($appart,$num1,'numcasa');
if ($casa != $ultimacasa) {
$ultimacasa = $casa;
if ($casa == fixset(${"num_casa".$n_t})) $sel = " selected";
else $sel = "";
echo "<option value=\"$casa\"$sel>$casa</option>";
} # fine if ($piano != $ultimopiano)
} # fine for $num1
if (empty(${"num_persone_casa".$n_t})) $sel = " selected";
else $sel = "";
echo "</select> ".mex("e/o di persone",$pag).": <select name=\"num_persone_casa$n_t\">
<option value=\"\"$sel>--</option>";
$appart = esegui_query("select maxoccupanti from $tableappartamenti $condizioni_regole1_consentite order by maxoccupanti");
$ultime_persone_casa = "";
for ($num1 = 0 ; $num1 < $num_appart ; $num1 = $num1 + 1) {
$persone_casa = risul_query($appart,$num1,'maxoccupanti');
if ($persone_casa != $ultime_persone_casa) {
$ultime_persone_casa = $persone_casa;
if ($persone_casa == fixset(${"num_persone_casa".$n_t})) $sel = " selected";
else $sel = "";
echo "<option value=\"$persone_casa\"$sel>$persone_casa</option>";
} # fine if ($persone_casa != $ultimepersone_casa)
} # fine for $num1
echo "</select></div>";
} # fine if ($priv_ins_assegnazione_app == "s")

echo "<br><div class=\"linhbox\">";
if ($priv_ins_caparra == "s") {
$sel_val = "";
$sel_tar = "";
if (!fixset(${"tipo_val_caparra".$n_t})) $sel_val = " selected";
elseif (${"tipo_val_caparra".$n_t} == "tar") $sel_tar = " selected";
echo "".mex("Caparra",$pag).": <input type=\"text\" name=\"caparra$n_t\" size=\"7\" value =\"".htmlspecialchars(fixstr(${"caparra".$n_t}))."\">
<select name=\"tipo_val_caparra$n_t\">
<option value=\"\"$sel_val>$Euro</option>
<option value=\"tar\"$sel_tar>".mex("% della tariffa",$pag)."</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
if (${"tipo_val_caparra".$n_t} == ">".$altre_valute[$num1]['nome']) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars(">".$altre_valute[$num1]['nome'])."\"$sel>".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
echo "</select> (".mex("se diversa dalla normale",$pag).")";
$metodi_pagamento = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'metodi_pagamento' and idutente = '$id_utente'");
$metodi_pagamento = risul_query($metodi_pagamento,0,'valpersonalizza');
if ($metodi_pagamento) {
if (!isset(${"met_paga_caparra".$n_t})) ${"met_paga_caparra".$n_t} = "";
if (!${"met_paga_caparra".$n_t}) $sel = " selected";
else $sel = "";
echo "<br>".mex("Metodo pagamento caparra",$pag).": <select name=\"met_paga_caparra$n_t\">
<option value=\"\"$sel>----</option>";
$metodi_pagamento = explode(",",$metodi_pagamento);
for ($num1 = 0 ; $num1 < count($metodi_pagamento) ; $num1++) {
if (${"met_paga_caparra".$n_t} == $metodi_pagamento[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($metodi_pagamento[$num1])."\"$sel>".$metodi_pagamento[$num1]."</option>";
} # fine for $num1
echo "</select>";
} # fine if ($metodi_pagamento)
echo ".<br>";
} # fine if ($priv_ins_caparra == "s")
if ($priv_ins_checkin == "s") {
${"g_ckn_sel1_".$n_t} = "";
${"g_ckn_sel2_".$n_t} = "";
${"g_ckn_sel3_".$n_t} = "";
${"g_ckn_sel4_".$n_t} = "";
${"g_ckn_sel5_".$n_t} = "";
${"g_ckn_sel6_".$n_t} = "";
${"g_ckn_sel7_".$n_t} = "";
if (empty(${"giorno_stima_checkin".$n_t})) ${"giorno_stima_checkin".$n_t} = 1;
elseif ($inizio_selected and strlen(${"giorno_stima_checkin".$n_t}) == 10) {
for ($num1 = 1 ; $num1 <= 7 ; $num1++) {
if ($inizio_selected == ${"giorno_stima_checkin".$n_t}) {
${"giorno_stima_checkin".$n_t} = $num1;
break;
} # fine if ($inizio_selected == ${"giorno_stima_checkin".$n_t})
$inizio_selected = date("Y-m-d", mktime(0,0,0,substr($inizio_selected,5,2),(substr($inizio_selected,8,2) + 1),substr($inizio_selected,0,4)) );
} # fine for $num1
if (strlen(${"giorno_stima_checkin".$n_t}) == 10) ${"giorno_stima_checkin".$n_t} = 1;
} # fine elseif ($inizio_selected and strlen(${"giorno_stima_checkin".$n_t}) == 10)
${"g_ckn_sel".${"giorno_stima_checkin".$n_t}."_".$n_t} = " selected";
echo mex("Orario stimato di entrata",$pag).": <span class=\"wsnw\">".mex("giorno",$pag)."
 <select name=\"giorno_stima_checkin$n_t\">
<option value=\"1\"".${"g_ckn_sel1_".$n_t}.">1</option>
<option value=\"2\"".${"g_ckn_sel2_".$n_t}.">2</option>
<option value=\"3\"".${"g_ckn_sel3_".$n_t}.">3</option>
<option value=\"4\"".${"g_ckn_sel4_".$n_t}.">4</option>
<option value=\"5\"".${"g_ckn_sel5_".$n_t}.">5</option>
<option value=\"6\"".${"g_ckn_sel6_".$n_t}.">6</option>
<option value=\"7\"".${"g_ckn_sel7_".$n_t}.">7</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;";
if (!isset(${"ora_stima_checkin".$n_t})) ${"ora_stima_checkin".$n_t} = "";
if (!${"ora_stima_checkin".$n_t}) $sel = " selected";
else $sel = "";
echo "<select name=\"ora_stima_checkin$n_t\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 24 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == ${"ora_stima_checkin".$n_t}) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
if (!isset(${"min_stima_checkin".$n_t})) ${"min_stima_checkin".$n_t} = "";
if (!${"min_stima_checkin".$n_t}) $sel = " selected";
else $sel = "";
echo "</select>:<select name=\"min_stima_checkin$n_t\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 60 ; $num1 = $num1 + 15) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if ($num1 == ${"min_stima_checkin".$n_t}) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select></span>.<br>";
} # fine if ($priv_ins_checkin == "s")
$origini_prenota = "";
if ($priv_ins_orig_prenota == "s") {
$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '$id_utente'");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
if ($origini_prenota) {
if ($priv_ins_caparra == "s") echo "<table class=\"nomob\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tr><td>";
if (empty(${"origine_prenota".$n_t})) $sel = " selected";
else $sel = "";
echo mex("Origine",$pag).": <select name=\"origine_prenota$n_t\">
<option value=\"\"$sel>----</option>";
$origini_prenota = explode(",",$origini_prenota);
for ($num1 = 0 ; $num1 < count($origini_prenota) ; $num1++) {
if (fixset(${"origine_prenota".$n_t}) == $origini_prenota[$num1]) $sel = " selected";
else $sel = "";
echo "<option value=\"".$origini_prenota[$num1]."\"$sel>".$origini_prenota[$num1]."</option>";
} # fine for $num1
echo "</select>.<br>";
if ($priv_ins_caparra == "s") echo "</td><td style=\"width: 30px;\"></td><td>";
} # fine if ($origini_prenota)
} # fine if ($priv_ins_orig_prenota == "s")
if ($priv_ins_caparra == "s") {
$sel_val = "";
$sel_tar = "";
$sel_ts = "";
$sel_tsc = "";
if (empty(${"tipo_val_commissioni".$n_t})) $sel_val = " selected";
else {
if (${"tipo_val_commissioni".$n_t} == "tar") $sel_tar = " selected";
if (${"tipo_val_commissioni".$n_t} == "ts") $sel_ts = " selected";
if (${"tipo_val_commissioni".$n_t} == "tsc") $sel_tsc = " selected";
} # fine else if (empty(${"tipo_val_commissioni".$n_t}))
echo "".mex("Commissioni",$pag).": <span class=\"wsnw\"><input type=\"text\" name=\"commissioni$n_t\" size=\"5\" value =\"".htmlspecialchars(fixstr(${"commissioni".$n_t}))."\">
<select name=\"tipo_val_commissioni$n_t\">
<option value=\"\"$sel_val>$Euro</option>
<option value=\"tar\"$sel_tar>".mex("% della tariffa",$pag)."</option>
<option value=\"ts\"$sel_ts>".mex("% della tariffa",$pag)."+".strtolower(mex("Sconto",$pag))."</option>
<option value=\"tsc\"$sel_tsc>".mex("% del prezzo totale",$pag)."</option>
</select></span>.";
if ($origini_prenota) echo "</td></tr></table>";
} # fine if ($priv_ins_caparra == "s")
echo "</div>";
if ($priv_ins_multiple != "n") {
echo "<div class=\"rbox\" style=\"padding-right: 10px; padding-bottom: 3px;\">
<table class=\"nomob\"><tr><td>".mex("Nº di prenotazioni di questa tipologia",$pag).":";
if (!${"num_app_richiesti".$n_t} or controlla_num_pos(${"num_app_richiesti".$n_t}) != "SI") ${"num_app_richiesti".$n_t} = 1;
echo "<input type=\"text\" name=\"num_app_richiesti$n_t\" size=\"2\" maxlength=\"3\" value =\"".${"num_app_richiesti".$n_t}."\">.";
if ($num_tipologie == $n_t and $num_tipologie < 999) echo "</td><td style=\"width: 80px;\"></td><td><button class=\"plum\" type=\"submit\" name=\"aggiungi_tipologie\" value =\"1\"><div>".mex("Aggiungi altre tipologie",$pag)."</div></button>";
echo "</td></tr></table>";
if ($num_tipologie == 1 and $priv_ins_multiple == "s") echo $mess_app_vicini;
elseif ($priv_ins_multiple == "s") {
if (fixset(${"prenota_vicine".$n_t}) == "SI") $checked = " checked";
else $checked = "";
echo "<label><input type=\"checkbox\" name=\"prenota_vicine$n_t\" value=\"SI\"$checked> ".mex("Appartamenti vicini",'unit.php').".</label><br>";
} # fine if ($priv_ins_multiple == "s")
echo "</div><br>";
} # fine if ($priv_ins_multiple != "n")
else echo "<input type=\"hidden\" name=\"num_app_richiesti1\" value=\"1\">";
if ($priv_ins_conferma == "s") {
if (fixset(${"conferma_prenota".$n_t}) == "SI") $checked = " checked";
else $checked = "";
echo "<label><input type=\"checkbox\" name=\"conferma_prenota$n_t\" value=\"SI\"$checked>
".ucfirst(mex("confermata",$pag)).".</label><br>";
} # fine if ($priv_ins_conferma == "s")

echo $testo_costi_agg;

if ($priv_ins_commento == "s" or ($priv_ins_commenti_pers == "s" and $campi_pers_comm)) {
if (!isset(${"commento1_".$n_t})) ${"commento1_".$n_t} = "";
if (@get_magic_quotes_gpc()) ${"commento1_".$n_t} = stripslashes(${"commento1_".$n_t});
${"commento1_".$n_t} = htmlspecialchars(${"commento1_".$n_t});
if (!fixset(${"num_commenti".$n_t}) or ($attiva_checkin != "SI" and !$campi_pers_comm)) ${"num_commenti".$n_t} = 1;
$commenti_presenti = array();
for ($num1 = 2 ; $num1 <= ${"num_commenti".$n_t} ; $num1++) if (!empty(${"tipo_commento".$num1."_".$n_t})) $commenti_presenti[${"tipo_commento".$num1."_".$n_t}] = 1;
echo "<br>".mex("Commento",$pag)."";
if ($attiva_checkin == "SI" or $campi_pers_comm) {
if (!fix_set(${"tipo_commento1_".$n_t})) $sel_null = " selected";
else $sel_null = "";
echo " <select name=\"tipo_commento1_$n_t\" id=\"s_comm$n_t\" onchange=\"agg_comm($n_t)\">";
if ($priv_ins_commento == "s") echo"<option value=\"\"$sel_null>".mex("per la prenotazione",$pag)."</option>";
if ($priv_ins_commento == "s" and $attiva_checkin == "SI") {
$sel_checkin = "";
$sel_checkout = "";
if (${"tipo_commento1_".$n_t} == "checkin") $sel_checkin = " selected";
if (${"tipo_commento1_".$n_t} == "checkout") $sel_checkout = " selected";
if (empty($commenti_presenti['checkin'])) echo "<option value=\"checkin\"$sel_checkin>".mex("per un promemoria all'entrata",$pag)."</option>";
if (empty($commenti_presenti['checkout'])) echo "<option value=\"checkout\"$sel_checkout>".mex("per un promemoria all'uscita",$pag)."</option>";
} # fine if ($priv_ins_commento == "s" and $attiva_checkin == "SI")
if ($campi_pers_comm) {
$c_pers_comm = explode(">",$campi_pers_comm);
for ($num1 = 0 ; $num1 < count($c_pers_comm) ; $num1++) {
$sel_comm_pers = "";
if (${"tipo_commento1_".$n_t} == $c_pers_comm[$num1]) $sel_comm_pers = " selected";
if (empty($commenti_presenti[$c_pers_comm[$num1]])) echo "<option value=\"".$c_pers_comm[$num1]."\"$sel_comm_pers>\"".$c_pers_comm[$num1]."\"</option>";
} # fine for $num1
} # fine if ($campi_pers_comm)
echo "</select>";
} # fine if ($attiva_checkin == "SI" or $campi_pers_comm)
echo ":<br>
 <textarea name=\"commento1_$n_t\" rows=3 cols=$cols_textarea style=\"white-space: pre; overflow: auto;\">".${"commento1_".$n_t}."</textarea><br>
<div id=\"n_comm$n_t\">";
for ($num1 = 2 ; $num1 <= ${"num_commenti".$n_t} ; $num1++) {
$nome_comm = "\"".htmlspecialchars(fixstr(${"tipo_commento$num1"."_".$n_t}))."\"";
if ($nome_comm == "\"checkin\"") $nome_comm = mex("per un promemoria all'entrata",$pag);
if ($nome_comm == "\"checkout\"") $nome_comm = mex("per un promemoria all'uscita",$pag);
echo "<div style=\"float: left; padding: 3px 12px 3px 0;\">".mex("Commento",$pag)." $nome_comm:<br>
<textarea name=\"commento$num1"."_$n_t\" rows=3 cols=$cols_textarea style=\"white-space: pre; overflow: auto;\">".htmlspecialchars(fixstr(${"commento$num1"."_".$n_t}))."</textarea></div>
<input type=\"hidden\" name=\"tipo_commento$num1"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"tipo_commento$num1"."_".$n_t}))."\">";
} # fine for $num1
echo "</div><div style=\"clear: both;\"></div>
<input type=\"hidden\" id=\"num_comm$n_t\" name=\"num_commenti$n_t\" value=\"".${"num_commenti".$n_t}."\">";
} # fine if ($priv_ins_commento == "s" or ($priv_ins_commenti_pers == "s" and $campi_pers_comm))
if ($num_tipologie > 1) echo "</td></tr>";
} # fine for $n_t

if ($num_tipologie > 1) echo "</table><br>";
if (isset($idmessaggi)) echo "<input type=\"hidden\" name=\"idmessaggi\" value=\"$idmessaggi\">";
echo "<div style=\"text-align: center;\"><input type=\"hidden\" name=\"numcostiagg\" value=\"$numcostiagg\">
<input type=\"hidden\" name=\"num_tipologie\" value=\"$num_tipologie\">
<input type=\"hidden\" name=\"mos_tut_dat\" value=\"$mos_tut_dat\">
<input type=\"hidden\" name=\"nuovaprenotazione\" value=\"SI\">
<button id=\"inse\" class=\"ires\" type=\"submit\"><div>".mex("Inserisci la prenotazione",$pag)."</div></button>
<hr style=\"width: 95%\">
</div></div></form><br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"inizio.php\"><div style=\"text-align: center;\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<button id=\"indi\" class=\"bkmm\" type=\"submit\"><div>".mex("Torna al menù principale",$pag)."</div></button>
<br></div></form><div style=\"height: 20px;\"></div>";

} # fine if (fixset($mostra_form_inserisci_prenota) != "NO")


} # fine else if (!empty($idclienti))



if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($anno_utente_attivato == "SI" and $priv_ins_nuove_prenota == "s")
} # fine if ($id_utente)



?>

