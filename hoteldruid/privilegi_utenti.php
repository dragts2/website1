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

$pag = "privilegi_utenti.php";
$titolo = "HotelDruid: Privilegi Utenti";

$var_pag = array();
$var_pag[0] = 'id_utente_privilegi';
$var_pag[1] = 'disattiva_anno';
$var_pag[2] = 'disattiv';
$var_pag[3] = 'attiva_anno';
$var_pag[4] = 'attiv';
$var_pag[5] = 'modifica_privilegi_globali';
$var_pag[6] = 'modifica_pers';
$var_pag[7] = 'modpers_valute';
$var_pag[8] = 'modpers_valute_altri';
$var_pag[9] = 'modpers_cat_pers_altri';
$var_pag[10] = 'modpers_cat_pers';
$var_pag[11] = 'crea_backup';
$var_pag[12] = 'crea_pagineweb';
$var_pag[13] = 'crea_interconnessioni';
$var_pag[14] = 'gest_pass_cc';
$var_pag[15] = 'modifica_doc';
$var_pag[16] = 'modifica_doc_api';
$var_pag[17] = 'inserimento_clienti';
$var_pag[18] = 'vedi_clienti';
$var_pag[19] = 'vedi_clienti_gr';
$var_pag[20] = 'modifica_clienti_gr';
$var_pag[21] = 'modifica_clienti';
$var_pag[22] = 'vedi_telefoni';
$var_pag[23] = 'vedi_indirizzo';
$var_pag[24] = 'tipo_prefisso_clienti';
$var_pag[25] = 'testo_prefisso_clienti';
$var_pag[26] = 'vedi_messaggi';
$var_pag[27] = 'ins_messaggi';
$var_pag[28] = 'seleziona_casse';
$var_pag[29] = 'vedi_beni_inv_gr';
$var_pag[30] = 'vedi_beni_inv';
$var_pag[31] = 'ins_beni_inv';
$var_pag[32] = 'vedi_inv_mag_gr';
$var_pag[33] = 'vedi_inv_mag';
$var_pag[34] = 'ins_mag';
$var_pag[35] = 'ins_beni_in_mag_gr';
$var_pag[36] = 'ins_beni_in_mag';
$var_pag[37] = 'mod_beni_in_mag_gr';
$var_pag[38] = 'mod_beni_in_mag';
$var_pag[39] = 'vedi_inv_app_gr';
$var_pag[40] = 'vedi_inv_app';
$var_pag[41] = 'ins_beni_in_app_gr';
$var_pag[42] = 'ins_beni_in_app';
$var_pag[43] = 'mod_beni_in_app_gr';
$var_pag[44] = 'mod_beni_in_app';
$var_pag[45] = 'mod_priv';
$var_pag[46] = 'continua';
$var_pag[47] = 'modifica_privilegi_anno';
$var_pag[48] = 'modp_origine_prenota';
$var_pag[49] = 'modp_tariffa';
$var_pag[50] = 'modp_num_persone';
$var_pag[51] = 'modp_commento';
$var_pag[52] = 'modp_comm_pers';
$var_pag[53] = 'ins_comm_pers';
$var_pag[54] = 'ins_origine_prenota';
$var_pag[55] = 'ins_num_persone';
$var_pag[56] = 'modp_prenota';
$var_pag[57] = 'modp_date_prenota';
$var_pag[58] = 'inserisci_prenotazioni';
$var_pag[59] = 'ins_conferma_prenota';
$var_pag[60] = 'ins_checkin';
$var_pag[61] = 'ins_costi_agg_prenota';
$var_pag[62] = 'ins_commento';
$var_pag[63] = 'nuove_casse_sel';
$var_pag[64] = 'cambia_casse_sel';
$var_pag[65] = 'num_contratti_sel';
$var_pag[66] = 'usa_regola1';
$var_pag[67] = 'avvisa_regola1';
$var_pag[68] = 'seleziona_tariffe';
$var_pag[69] = 'nuove_tariffe_sel';
$var_pag[70] = 'cambia_tariffe_sel';
$var_pag[71] = 'seleziona_costi_agg';
$var_pag[72] = 'seleziona_contratti';
$var_pag[73] = 'nuovi_contratti_sel';
$var_pag[74] = 'cambia_contratti_sel';
$var_pag[75] = 'ins_assegnazione_app';
$var_pag[76] = 'ins_caparra';
$var_pag[77] = 'ins_passato';
$var_pag[78] = 'ins_multiple';
$var_pag[79] = 'modp_cliente';
$var_pag[80] = 'modp_checkin';
$var_pag[81] = 'modp_pagato';
$var_pag[82] = 'modp_attiva_ore_mod';
$var_pag[83] = 'modp_num_ore_mod';
$var_pag[84] = 'modp_canc';
$var_pag[85] = 'modp_canc_dopo_conf';
$var_pag[86] = 'ins_spese';
$var_pag[87] = 'ins_entrate';
$var_pag[88] = 'sottrai_entrate';
$var_pag[89] = 'persona_spese';
$var_pag[90] = 'mod_tariffe';
$var_pag[91] = 'mod_reg1';
$var_pag[92] = 'mod_reg2';
$var_pag[93] = 'ins_costi_agg';
$var_pag[94] = 'mod_costi_agg';
$var_pag[95] = 'canc_costi_agg';
$var_pag[96] = 'vedi_tab_mesi';
$var_pag[97] = 'vedi_tab_tutte_prenota';
$var_pag[98] = 'vedi_tab_costi';
$var_pag[99] = 'vedi_tab_tariffe';
$var_pag[100] = 'vedi_tab_regole';
$var_pag[101] = 'vedi_tab_appartamenti';
$var_pag[102] = 'vedi_tab_doc';
$var_pag[103] = 'vedi_tab_stat';
$var_pag[104] = 'modp_cassa_pagamenti';
$var_pag[105] = 'cambia_costi_agg_sel';
$var_pag[106] = 'nuovi_costi_agg_sel';
$var_pag[107] = 'nuove_motivazioni_reg1';
$var_pag[108] = 'cambia_motivazioni_reg1';
$var_pag[109] = 'lista_casse_passa';
$var_pag[110] = 'modp_gia_iniziate';
$var_pag[111] = 'modp_ut_ins';
$var_pag[112] = 'cancella_contr';
$var_pag[113] = 'ins_sconto';
$var_pag[114] = 'modp_app_prenota';
$var_pag[115] = 'modp_pren_comp';
$var_pag[116] = 'modp_vedi_comm';
$var_pag[117] = 'modp_sconto';
$var_pag[118] = 'modp_caparra';
$var_pag[119] = 'modp_costi_agg';
$var_pag[120] = 'modp_codice';
$var_pag[121] = 'modp_canc_perm';
$var_pag[122] = 'modp_attiva_ore_canc';
$var_pag[123] = 'modp_num_ore_canc';
$var_pag[124] = 'oscura_tab_mesi';
$var_pag[125] = 'modifica_doc_html';
$var_pag[126] = 'modifica_pass';
$n_var_pag = 127;
$num2 = 0;
if (isset($_POST['lista_casse_passa'])) $num2 = $_POST['lista_casse_passa'];
elseif (isset($_GET['lista_casse_passa'])) $num2 = $_GET['lista_casse_passa'];
if ($num2) {
$num2 = explode(",",$num2);
$num3 = count($num2);
for ($num1 = 1 ; $num1 < $num3 ; $num1++) $var_pag[$n_var_pag++] = "cassa_sel".(int) $num2[$num1];
} # fine if ($num2)
$num2 = 0;
if (isset($_POST['modifica_privilegi_anno'])) $num2 = (int) $_POST['modifica_privilegi_anno'];
elseif (isset($_GET['modifica_privilegi_anno'])) $num2 = (int) $_GET['modifica_privilegi_anno'];
if ($num2) {
$var_pag[$n_var_pag++] = "usa_regola1$num2";
$var_pag[$n_var_pag++] = "num_motivazioni$num2";
$var_pag[$n_var_pag++] = "avvisa_regola1$num2";
$var_pag[$n_var_pag++] = "seleziona_tariffe$num2";
$var_pag[$n_var_pag++] = "numero_tariffe$num2";
$var_pag[$n_var_pag++] = "seleziona_costi_agg$num2";
$var_pag[$n_var_pag++] = "seleziona_contratti$num2";
$var_pag[$n_var_pag++] = "cancella_contr$num2";
$var_pag[$n_var_pag++] = "inserisci_prenotazioni$num2";
$var_pag[$n_var_pag++] = "ins_assegnazione_app$num2";
$var_pag[$n_var_pag++] = "ins_conferma_prenota$num2";
$var_pag[$n_var_pag++] = "ins_sconto$num2";
$var_pag[$n_var_pag++] = "ins_caparra$num2";
$var_pag[$n_var_pag++] = "ins_checkin$num2";
$var_pag[$n_var_pag++] = "ins_costi_agg_prenota$num2";
$var_pag[$n_var_pag++] = "ins_commento$num2";
$var_pag[$n_var_pag++] = "ins_comm_pers$num2";
$var_pag[$n_var_pag++] = "ins_origine_prenota$num2";
$var_pag[$n_var_pag++] = "ins_num_persone$num2";
$var_pag[$n_var_pag++] = "ins_passato$num2";
$var_pag[$n_var_pag++] = "ins_multiple$num2";
$var_pag[$n_var_pag++] = "modp_prenota_gr$num2";
$var_pag[$n_var_pag++] = "modp_prenota$num2";
$var_pag[$n_var_pag++] = "modp_cliente$num2";
$var_pag[$n_var_pag++] = "modp_date_prenota$num2";
$var_pag[$n_var_pag++] = "modp_app_prenota$num2";
$var_pag[$n_var_pag++] = "modp_pren_comp$num2";
$var_pag[$n_var_pag++] = "modp_tariffa$num2";
$var_pag[$n_var_pag++] = "modp_vedi_tariffa$num2";
$var_pag[$n_var_pag++] = "modp_num_persone$num2";
$var_pag[$n_var_pag++] = "modp_vedi_comm$num2";
$var_pag[$n_var_pag++] = "modp_commento$num2";
$var_pag[$n_var_pag++] = "modp_comm_pers$num2";
$var_pag[$n_var_pag++] = "modp_origine_prenota$num2";
$var_pag[$n_var_pag++] = "modp_checkin$num2";
$var_pag[$n_var_pag++] = "modp_sconto$num2";
$var_pag[$n_var_pag++] = "modp_vedi_sconto$num2";
$var_pag[$n_var_pag++] = "modp_caparra$num2";
$var_pag[$n_var_pag++] = "modp_vedi_caparra$num2";
$var_pag[$n_var_pag++] = "modp_costi_agg$num2";
$var_pag[$n_var_pag++] = "modp_vedi_prezzi_ca$num2";
$var_pag[$n_var_pag++] = "modp_sc_vedi_prezzi$num2";
$var_pag[$n_var_pag++] = "modp_pagato$num2";
$var_pag[$n_var_pag++] = "modp_nm_vedi_prezzi$num2";
$var_pag[$n_var_pag++] = "modp_cassa_pagamenti$num2";
$var_pag[$n_var_pag++] = "modp_utenti$num2";
$var_pag[$n_var_pag++] = "modp_ut_ins$num2";
$var_pag[$n_var_pag++] = "modp_vedi_utins$num2";
$var_pag[$n_var_pag++] = "modp_codice$num2";
$var_pag[$n_var_pag++] = "modp_gia_iniziate$num2";
$var_pag[$n_var_pag++] = "modp_num_ore_mod$num2";
$var_pag[$n_var_pag++] = "modp_attiva_ore_mod$num2";
$var_pag[$n_var_pag++] = "modp_canc$num2";
$var_pag[$n_var_pag++] = "modp_canc_perm$num2";
$var_pag[$n_var_pag++] = "modp_canc_dopo_conf$num2";
$var_pag[$n_var_pag++] = "modp_num_ore_canc$num2";
$var_pag[$n_var_pag++] = "modp_attiva_ore_canc$num2";
$var_pag[$n_var_pag++] = "ins_spese$num2";
$var_pag[$n_var_pag++] = "ins_entrate$num2";
$var_pag[$n_var_pag++] = "sottrai_entrate$num2";
$var_pag[$n_var_pag++] = "persona_spese$num2";
$var_pag[$n_var_pag++] = "mod_tariffe$num2";
$var_pag[$n_var_pag++] = "mod_reg1_tipo$num2";
$var_pag[$n_var_pag++] = "mod_reg1$num2";
$var_pag[$n_var_pag++] = "mod_reg2$num2";
$var_pag[$n_var_pag++] = "ins_costi_agg_gr$num2";
$var_pag[$n_var_pag++] = "ins_costi_agg$num2";
$var_pag[$n_var_pag++] = "mod_costi_agg$num2";
$var_pag[$n_var_pag++] = "canc_costi_agg$num2";
$var_pag[$n_var_pag++] = "vedi_tab_mpren_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_mapp_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_mesi$num2";
$var_pag[$n_var_pag++] = "oscura_tab_mesi$num2";
$var_pag[$n_var_pag++] = "vedi_tab_tpren_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_tutte_prenota$num2";
$var_pag[$n_var_pag++] = "vedi_tab_cos_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_costi$num2";
$var_pag[$n_var_pag++] = "vedi_tab_tar_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_tariffe$num2";
$var_pag[$n_var_pag++] = "vedi_tab_regole$num2";
$var_pag[$n_var_pag++] = "vedi_tab_app_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_appartamenti$num2";
$var_pag[$n_var_pag++] = "vedi_tab_doc$num2";
$var_pag[$n_var_pag++] = "vedi_tab_spren_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_sapp_gr$num2";
$var_pag[$n_var_pag++] = "vedi_tab_stat$num2";
$var_pag[$n_var_pag++] = "lista_ca_passa$num2";
$num3 = 0;
if (isset($_POST["numero_tariffe$num2"])) $num3 = (int) $_POST["numero_tariffe$num2"];
elseif (isset($_GET["numero_tariffe$num2"])) $num3 = (int) $_GET["numero_tariffe$num2"];
for ($num1 = 1 ; $num1 <= $num3 ; $num1++) $var_pag[$n_var_pag++] = "tariffa_sel$num2$num1";
$num3 = 0;
if (isset($_POST['num_contratti_sel'])) $num3 = (int) $_POST['num_contratti_sel'];
elseif (isset($_GET['num_contratti_sel'])) $num3 = (int) $_GET['num_contratti_sel'];
for ($num1 = 1 ; $num1 <= $num3 ; $num1++) $var_pag[$n_var_pag++] = "contratto_sel$num2$num1";
$num3 = 0;
if (isset($_POST["num_motivazioni$num2"])) $num3 = (int) $_POST["num_motivazioni$num2"];
elseif (isset($_GET["num_motivazioni$num2"])) $num3 = (int) $_GET["num_motivazioni$num2"];
for ($num1 = 0 ; $num1 < $num3 ; $num1++) $var_pag[$n_var_pag++] = "var_mot_$num2$num1";
$num3 = 0;
if (isset($_POST["lista_ca_passa$num2"])) $num3 = $_POST["lista_ca_passa$num2"];
elseif (isset($_GET["lista_ca_passa$num2"])) $num3 = $_GET["lista_ca_passa$num2"];
if ($num3) {
$num3 = explode(",",$num3);
$num5 = count($num3);
for ($num4 = 1 ; $num4 < $num5 ; $num4++) $var_pag[$n_var_pag++] = "costo_agg_sel$num2".(int) $num3[$num4];
} # fine if ($num2)
} # fine if ($num2)

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/funzioni_costi_agg.php");
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableanni = $PHPR_TAB_PRE."anni";
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tablecasse = $PHPR_TAB_PRE."casse";

$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente and $id_utente == 1) {


$titolo = "HotelDruid: ".mex("Privilegi Utenti",$pag);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");


/*
STRUTTURA TABELLA PRIVILEGI

ANNUALI
regole1_consentite(text)	s-n			1 attivato-disattivato
				s-n-m-f,		2 avvisa periodi regola1: sempre - regole non selezionate - mai - non occupare non selezionati se regole1 attivate
				motivazione1#@^motivazione2#@^..

tariffe_consentite(text)	s-n,			attivato-disattivato
				numtariffa1,numariffa2,...

costi_agg_consentiti(text)	s-n,			attivato-disattivato
				numcosto1,numcosto2,...

contratti_consentiti(text)	s-n			attivato-disattivato
				s-n,			possibilità di cancellare e sovrascrivere documenti salvati
				numcontr1,numcontr2,...

casse_consentite(text)		s-n,			attivato-disattivato
				idcassa1,idcassa2,...

cassa_pagamenti(varchar70)	nomecassa		nome della cassa in cui inserire i pagamenti delle prenotazioni

priv_ins_prenota(varchar20)	s-n			1 inserimento nuove prenotazioni si - no
				s-n			2 scelta assegnazione appartamento si - no
				s-n			3 scelta conferma si - no
				s-n			4 scelta sconto si - no
				s-n			5 scelta caparra e commissioni si - no
				s-n			6 scelta costi agg. si - no
				s-n			7 scelta commenti prenotazione si - no
				s-n			8 scelta numero di persone
				s-n			9 inserimento anche in periodi passati si - no
				s-m-n			10 inserimento di più prenotazioni contemporaneamente si - si ma non vicine - no
				s-n			11 inserimento check-in: si - no
				s-n			12 inserimento origine della prenotazione: si - no
				s-n			13 inserimento commenti personalizzati si-no

priv_mod_prenota(varchar35)	s-p-g-n			1 modifica prenotazioni si - solo proprie - solo dei suoi gruppi - no
				s-n			2 modifica data iniziale/finale si-no
				s-a-n			3 modifica assegnazione appartamento: si - solo spostamenti tra appartamenti già assegnati - no
				s-r-v-p-n		4 modifica tariffa: si con regola2 a scelta - si sempre con regola2 - no ma visibile - no ma visibile senza prezzi - no
				s-n			5 modifica numero di persone si-no
				s-n			6 modifica commento prenotazione si-no
				s-v-n			7 modifica sconto: si - no ma visibile - no
				s-v-n			8 modifica caparra e commissioni: si - no ma visibili - no
				s-v-p-n			9 modifica costi aggiuntivi: si - no ma costi visibili - no ma costi visibili senza prezzi - no
				s-g-v-n			10 modifica l'utente che ha inserito: si - si mo solo utenti dei propri gruppi - no ma visibile - no
				s-c-i-v-n		11 modifica pagato e conferma: si - solo conferma e prezzi visibili - solo conferma e prezzi invisibili - no ma prezzi visibili - no
				s-n			12 modifica prenotazione già iniziate si-no
				XXX			13-15 numero di ore in cui si può modificare dopo l'inserimento, 000 per disattivare
				XXX			16-18 numero di ore in cui si può cancellare dopo l'inserimento, 000 per disattivare
				s-f-n			19 cancellazione prenotazioni: si - solo future - no
				s-n			20 cancellazione prenotazioni confermate: si - no
				s-n			21 modifica check-in: si - no
				s-n			22 vedi e modifica codice prenotazione: si - no
				s-n			23 cambia cliente con un altro: si - no
				s-n			24 cambia prenotazioni compagne: si - no
				s-n			25 modifica origine della prenotazione: si - no
				s-n			26 vedi commento prenotazione: si - no
				s-n			27 vedi/modifica commenti personalizzati si-no
				s-c-n			28 cancella prenotazioni in modo permanente: si - chiedi - no
#				s-p-d			29 modifica prenotazione a seconda checkin: sempre - fino al checkin - dopo checkin
#				s-p-d			30 modifica prenotazione a seconda checkout: sempre - fino al checkout - dopo checkout

priv_ins_costi(varchar10)	s-n			1 inserimento spese si-no
				s-n			2 inserimento entrate si-no
				s-c-n			3 sottrarre le entrate dalle prenotazioni: si - chiedi - no
				u-c-n			4 immettere come perona che inserisce: il nome dell'utente - chiedere - nessuno

priv_vedi_tab(varchar30)	s-p-q-r-g-n		1 visione tabelle mesi: si - solo pren. proprie e app. propri - solo pren. dei gruppi e app. propri - solo pren. proprie e app. dei gruppi - solo pren. dei gruppi e app. dei gruppi - no
				s-p-g-n			2 visione tabella con tutte le prenotazioni: si - solo proprie - solo dei suoi gruppi - no
				s-p-g-n			3 visione tabella entrate/uscite: si - solo proprie - solo dei suoi gruppi - no
				s-p-g-n			4 visione tabella periodi e costi: si - solo tariffe e costi consentiti - solo tariffe e costi consentiti ai suoi gruppi - no
				s-p-n			5 visione tabella regole: si - solo consentite - no
				s-p-g-n			6 visione tabella appartamenti: si - solo associati a regole 1 o 2 consentite - solo associati a regole 1 o 2 consentite ai suoi gruppi - no
				s-p-q-r-g-n		7 visione tabella statistiche: si - solo pren. proprie e app. propri - solo pren. dei gruppi e app. propri - solo pren. proprie e app. dei gruppi - solo pren. dei gruppi e app. dei gruppi - no
				s-p-n			8 visione tabella documenti: si - solo consentiti - no
				o-v-f			9 visione altre prenotazioni tabella mesi: oscurate - vuote - oscurate solo future

priv_ins_tariffe(varchar10)	s-n			1 modifica delle tariffe permesse: si - no
				s-g-n			2 inserimento nuovi costi aggiuntivi: si, permessi a lui - si, permessi anche ai suoi gruppi - no
				s-n			3 modifica dei costi aggiuntivi permessi: si - no
				s-n			4 cancellazione dei costi aggiuntivi permessi: si - no
				s-a-t-n			5 modifica regole di assegnazione 1: si, tutte - solo per appartamenti - solo per tariffe - no
				s-n			6 modifica regole di assegnazione 2: si - no

GLOBALI (anno = 1)
priv_mod_pers(varchar15)	s-n			1 modifica delle proprie personalizzazioni si - no
				s-n			2 creazione e download backup: si - no
				s-n			3 modifica dei documenti: si - no
				s-n			4 modifica interconnessioni: si - no
				s-n			5 modifica i documenti come API: si - no
				s-n			6 modifica la password per le carte di credito: si - no
				s-g-t-n			7 modifica le tipologie di persone: si, solo per lui - si, anche per i suoi gruppi - si, anche per tutti - no
				s-g-t-n			8 modifica le valute: si, solo per lui - si, anche per i suoi gruppi - si, anche per tutti - no
				s-c-n			9 modifica pagine web: si - solo con modifica costi aggiuntivi - no
				s-n			10 modifica i documenti con formato HTML: si - no
				p-n			11 modifica delle password: solo la propria - no

priv_ins_clienti(varchar5)	s-n			1 inserimento nuovi clienti si-no
				s-p-g-n			2 modifica e cancella clienti: si - solo propri - solo dei suoi gruppi - no
				s-p-g-n			3 visione clienti e utilizzo in prenotazioni: si - solo propri - solo dei suoi gruppi - no
				s-n			4 visione email, telefoni e fax del cliente: si - no
				s-n			5 visione indirizzo del cliente: si - no

prefisso_clienti(text)		n-p-s,			non attivato - prefisso - suffisso
				prefisso		se attivato viene anteposto o messo dopo a tutti i propri clienti

priv_messaggi(varchar10)	s-n			vedere messaggi: si - no
				s-n			inviare messaggi: si - no

priv_inventario(varchar10)	s-p-g-n			vedere beni inventario: si - solo propri - solo dei suoi gruppi - no
				s-n			inserimento nuovi beni: si - no
				s-p-g-n			vedere inventario magazzini: si - solo propri - solo dei suoi gruppi - no
				s-n			inserimento nuovi magazzini: si - no
				s-p-g-n			aggiunta e cancellazione beni in magazzini: si - solo nei propri - solo dei gruppi - no
				s-p-g-n			modifica quantità attuali in magazzini: si - solo nei propri - solo dei gruppi - no
				s-p-g-n			vedere inventario appartamenti: si - solo propri - solo dei suoi gruppi - no
				s-p-g-n			aggiunta e cancellazione beni in appartamenti: si - solo propri - solo dei gruppi - no
				s-p-g-n			modifica quantità attuali in appartamenti: si - solo propri - solo dei suoi gruppi - no

*/

$tabelle_lock = array($tablepersonalizza,$tableutenti,$tableprivilegi);
if (!empty($modifica_privilegi_anno) and controlla_anno($modifica_privilegi_anno) == "SI") $tablenometariffe_mostra = $PHPR_TAB_PRE."ntariffe".$modifica_privilegi_anno;
else {
$modifica_privilegi_anno = "";
$tablenometariffe_mostra = $tablenometariffe;
} # fine else if ($modifica_privilegi_anno and controlla_anno($modifica_privilegi_anno) == "SI") 
$altre_tab_lock = array($tableanni,$tablenometariffe_mostra,$tablecontratti,$tablecasse);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
if (!isset($id_utente_privilegi) or controlla_num_pos($id_utente_privilegi) != "SI") $id_utente_privilegi = "-1";
$id_utente_privilegi = aggslashdb($id_utente_privilegi);
$utente_privilegi = esegui_query("select * from $tableutenti where idutenti = '$id_utente_privilegi'");
if (numlin_query($utente_privilegi)) {

$nome_utente_privilegi = risul_query($utente_privilegi,0,'nome_utente');
$privilegi_globali = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '1'");
$anni = esegui_query("select * from $tableanni order by idanni");
$num_anni = numlin_query($anni);
unset ($anno_esistente);
for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_mostra = risul_query($anni,$num1,'idanni');
$anno_esistente[$anno_mostra] = "SI";
$privilegi_anno[$anno_mostra] = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '$anno_mostra'");
} # fine for $num1


if (!empty($modifica_privilegi_globali)) {
$testo_prefisso_clienti = str_replace(",","",fixstr($testo_prefisso_clienti));
$modificare = "";
if (!empty($tipo_prefisso_clienti) and $tipo_prefisso_clienti != "n" and !$testo_prefisso_clienti) {
$modificare = "NO";
echo mex("Si deve inserire il <div style=\"display: inline; color: red;\">prefisso/suffisso</div> da utilizzare per i clienti dell'utente",$pag)." $nome_utente_privilegi.<br>";
} # fine if ($tipo_prefisso_clienti and $tipo_prefisso_clienti != "n" and !$prefisso_clienti)
if ($modificare != "NO") {
$priv_mod_pers = risul_query($privilegi_globali,0,'priv_mod_pers');
$priv_ins_clienti = risul_query($privilegi_globali,0,'priv_ins_clienti');
$prefisso_clienti = risul_query($privilegi_globali,0,'prefisso_clienti');
$priv_messaggi = risul_query($privilegi_globali,0,'priv_messaggi');
$casse_consentite = risul_query($privilegi_globali,0,'casse_consentite');
$priv_inventario = risul_query($privilegi_globali,0,'priv_inventario');

if (empty($continua)) {
$mostra_form_iniziale = "NO";
$dati_da_modificare = "";
if (substr($priv_mod_pers,0,1) != $modifica_pers) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_pers\" value=\"".htmlspecialchars($modifica_pers)."\">";
if ($modifica_pers == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>personalizzazioni</b>",$pag).".<br>";
if ($modifica_pers == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare le sue <b>personalizzazioni</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,0,1) != $modifica_pers)
if ($modpers_valute == "s" and ($modpers_valute_altri == "g" or $modpers_valute_altri == "t")) $modpers_valute = $modpers_valute_altri;
if (substr($priv_mod_pers,7,1) != $modpers_valute) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modpers_valute\" value=\"".htmlspecialchars($modpers_valute)."\">";
if ($modpers_valute == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>valute</b>",$pag).".<br>";
if ($modpers_valute == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>valute</b>",$pag)." ".mex("e quelle di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($modpers_valute == "t") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>valute</b>",$pag)." ".mex("e quelle di tutti gli altri utenti",$pag).".<br>";
if ($modpers_valute == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare le sue <b>valute</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,7,1) != $modpers_valute)
if ($modpers_cat_pers == "s" and ($modpers_cat_pers_altri == "g" or $modpers_cat_pers_altri == "t")) $modpers_cat_pers = $modpers_cat_pers_altri;
if (substr($priv_mod_pers,6,1) != $modpers_cat_pers) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modpers_cat_pers\" value=\"".htmlspecialchars($modpers_cat_pers)."\">";
if ($modpers_cat_pers == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>tipologie di persone</b>",$pag).".<br>";
if ($modpers_cat_pers == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>tipologie di persone</b>",$pag)." ".mex("e quelle di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($modpers_cat_pers == "t") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le sue <b>tipologie di persone</b>",$pag)." ".mex("e quelle di tutti gli altri utenti",$pag).".<br>";
if ($modpers_cat_pers == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare le sue <b>tipologie di persone</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,6,1) != $modpers_cat_pers)
if (substr($priv_mod_pers,10,1) != $modifica_pass) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_pass\" value=\"".htmlspecialchars($modifica_pass)."\">";
if ($modifica_pass == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare solo la sua <b>password</b>",$pag).".<br>";
if ($modifica_pass == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare le <b>password</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,10,1) != $modifica_pass)
if (substr($priv_mod_pers,1,1) != $crea_backup) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"crea_backup\" value=\"".htmlspecialchars($crea_backup)."\">";
if ($crea_backup == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà creare i <b>backup</b>",$pag).".<br>";
if ($crea_backup == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più creare i <b>backup</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,1,1) != $crea_backup)
if (substr($priv_mod_pers,8,1) != $crea_pagineweb) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"crea_pagineweb\" value=\"".htmlspecialchars($crea_pagineweb)."\">";
if ($crea_pagineweb == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà creare e modificare le <b>pagine per il sito web</b>",$pag).".<br>";
if ($crea_pagineweb == "c") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le <b>pagine per il sito web</b> solo quando crea e modifica i costi aggiuntivi",$pag).".<br>";
if ($crea_pagineweb == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più creare e modificare le <b>pagine per il sito web</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,8,1) != $crea_pagineweb)
if (substr($priv_mod_pers,3,1) != $crea_interconnessioni) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"crea_interconnessioni\" value=\"".htmlspecialchars($crea_interconnessioni)."\">";
if ($crea_interconnessioni == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà creare e modificare le <b>interconnessioni</b>",$pag).".<br>";
if ($crea_interconnessioni == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più creare e modificare le <b>interconnessioni</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,3,1) != $crea_interconnessioni)
if (substr($priv_mod_pers,5,1) != $gest_pass_cc) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"gest_pass_cc\" value=\"".htmlspecialchars($gest_pass_cc)."\">";
if ($gest_pass_cc == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà gestire la <b>password per le carte di credito</b>",$pag).".<br>";
if ($gest_pass_cc == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più gestire la <b>password per le carte di credito</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,5,1) != $gest_pass_cc)
if (substr($priv_mod_pers,2,1) != $modifica_doc) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_doc\" value=\"".htmlspecialchars($modifica_doc)."\">";
if ($modifica_doc == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare i <b>documenti</b>",$pag).".<br>";
if ($modifica_doc == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare i <b>documenti</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,2,1) != $modifica_doc)
if ($modifica_doc == "n") $modifica_doc_html = "n";
if (substr($priv_mod_pers,9,1) != $modifica_doc_html) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_doc_html\" value=\"".htmlspecialchars($modifica_doc_html)."\">";
if ($modifica_doc_html == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare i <b>documenti con formato HTML</b>",$pag).".
<b class=\"colwarn\">".mex("Attenzione",$pag)."</b>: ".mex("questo può consentire di portare attacchi di tipo \"Cross Site Scripting\" per rubare le credenziali di altri utenti",$pag).".<br>";
if ($modifica_doc_html == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare i <b>documenti con formato HTML</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,9,1) != $modifica_doc_html)
if ($modifica_doc == "n") $modifica_doc_api = "n";
if (substr($priv_mod_pers,4,1) != $modifica_doc_api) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_doc_api\" value=\"".htmlspecialchars($modifica_doc_api)."\">";
if ($modifica_doc_api == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare i <b>documenti come API</b>",$pag).".
<b class=\"colwarn\">".mex("Attenzione",$pag)."</b>: ".mex("questo può consentire l'accesso ai dati di tutte le prenotazioni",$pag).".<br>";
if ($modifica_doc_api == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare i <b>documenti come API</b>",$pag).".<br>";
} # fine if (substr($priv_mod_pers,4,1) != $modifica_doc_api)
if (substr($priv_ins_clienti,0,1) != $inserimento_clienti) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"inserimento_clienti\" value=\"".htmlspecialchars($inserimento_clienti)."\">";
if ($inserimento_clienti == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>nuovi clienti</b>",$pag).".<br>";
if ($inserimento_clienti == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più inserire <b>nuovi clienti</b>",$pag).".<br>";
} # fine if (substr($priv_ins_clienti,0,1) != $inserimento_clienti)
if ($modifica_clienti == "p" and $modifica_clienti_gr == "SI") $modifica_clienti = "g";
if (substr($priv_ins_clienti,1,1) != $modifica_clienti) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modifica_clienti\" value=\"".htmlspecialchars($modifica_clienti)."\">";
if ($modifica_clienti == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare <b>tutti i clienti</b>",$pag).".<br>";
if ($modifica_clienti == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare solo i <b>propri clienti</b>",$pag).".<br>";
if ($modifica_clienti == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare solo i <b>propri clienti</b>",$pag)." ".mex("e quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($modifica_clienti == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare <b>nessun cliente</b>",$pag).".<br>";
} # fine if (substr($priv_ins_clienti,1,1) != $modifica_clienti)
if ($vedi_clienti == "p" and $vedi_clienti_gr == "SI") $vedi_clienti = "g";
if (substr($priv_ins_clienti,2,1) != $vedi_clienti) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_clienti\" value=\"".htmlspecialchars($vedi_clienti)."\">";
if ($vedi_clienti == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere <b>nessun cliente</b>",$pag).".<br>";
if ($vedi_clienti == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo i <b>propri clienti</b>",$pag).".<br>";
if ($vedi_clienti == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo i <b>propri clienti</b>",$pag)." ".mex("e quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($vedi_clienti == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>tutti i clienti</b>",$pag).".<br>";
} # fine if (substr($priv_ins_clienti,2,1) != $vedi_clienti)
if (substr($priv_ins_clienti,3,1) != $vedi_telefoni) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_telefoni\" value=\"".htmlspecialchars($vedi_telefoni)."\">";
if ($vedi_telefoni == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>email, telefoni e fax</b> dei clienti",$pag).".<br>";
if ($vedi_telefoni == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più vedere <b>email, telefoni e fax</b> dei clienti",$pag).".<br>";
} # fine if (substr($priv_ins_clienti,3,1) != $vedi_telefoni)
if (substr($priv_ins_clienti,4,1) != $vedi_indirizzo) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_indirizzo\" value=\"".htmlspecialchars($vedi_indirizzo)."\">";
if ($vedi_indirizzo == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'indirizzo</b> dei clienti",$pag).".<br>";
if ($vedi_indirizzo == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più vedere <b>l'indirizzo</b> dei clienti",$pag).".<br>";
} # fine if (substr($priv_ins_clienti,4,1) != $vedi_indirizzo)
$prefisso_clienti = explode(",",$prefisso_clienti);
if (@get_magic_quotes_gpc()) $testo_prefisso_clienti = stripslashes($testo_prefisso_clienti);
$testo_prefisso_clienti = htmlspecialchars($testo_prefisso_clienti);
if (substr($prefisso_clienti[0],0,1) != $tipo_prefisso_clienti) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"tipo_prefisso_clienti\" value=\"".htmlspecialchars($tipo_prefisso_clienti)."\">
<input type=\"hidden\" name=\"testo_prefisso_clienti\" value=\"$testo_prefisso_clienti\">";
if ($tipo_prefisso_clienti == "p") echo mex("Verrà aggiunto un <b>prefisso</b> a tutti i cognomi dei clienti inseriti dall'utente",$pag)." <i>$nome_utente_privilegi</i>.<br>";
if ($tipo_prefisso_clienti == "s") echo mex("Verrà aggiunto un <b>suffisso</b> a tutti i cognomi dei clienti inseriti dall'utente",$pag)." <i>$nome_utente_privilegi</i>.<br>";
if ($tipo_prefisso_clienti == "n") echo mex("Non verrà aggiunto più alcun <b>prefisso/suffisso</b> ai cognomi dei clienti inseriti dall'utente",$pag)." <i>$nome_utente_privilegi</i>.<br>";
} # fine if (substr($prefisso_clienti[0],0,1) != $tipo_prefisso_clienti)
if ($prefisso_clienti[1] != $testo_prefisso_clienti and $tipo_prefisso_clienti != "n") {
if (substr($prefisso_clienti[0],0,1) == $tipo_prefisso_clienti) $dati_da_modificare .= "<input type=\"hidden\" name=\"testo_prefisso_clienti\" value=\"$testo_prefisso_clienti\">";
echo mex("Il nuovo testo del <b>prefisso/suffisso</b> dei cognomi dei clienti inseriti dall'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("sarà",$pag).": $testo_prefisso_clienti.<br>";
} # fine if ($prefisso_clienti[1] != $testo_prefisso_clienti and $tipo_prefisso_clienti != "n")
if (substr($priv_messaggi,0,1) != $vedi_messaggi) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_messaggi\" value=\"".htmlspecialchars($vedi_messaggi)."\">";
if ($vedi_messaggi == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere <b>i messaggi ricevuti</b>",$pag).".<br>";
if ($vedi_messaggi == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>i messaggi ricevuti</b>",$pag).".<br>";
} # fine if (substr($priv_messaggi,0,1) != $vedi_messaggi)
if (substr($priv_messaggi,1,1) != $ins_messaggi) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_messaggi\" value=\"".htmlspecialchars($ins_messaggi)."\">";
if ($ins_messaggi == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>inviare messaggi</b>",$pag).".<br>";
if ($ins_messaggi == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>inviare messaggi</b>",$pag).".<br>";
} # fine if (substr($priv_messaggi,1,1) != $ins_messaggi)
if (substr($casse_consentite,0,1) != $seleziona_casse) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"seleziona_casse\" value=\"".htmlspecialchars($seleziona_casse)."\">";
if ($seleziona_casse == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà usare <b>tutte le casse</b>",$pag).".<br>";
if ($seleziona_casse == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà usare solo le <b>casse selezionate</b>",$pag).".<br>";
} # fine if (substr($casse_consentite,0,1) != $seleziona_casse)
$nuove_casse_sel = "";
$casse = esegui_query("select * from $tablecasse order by idcasse ");
$num_casse = numlin_query($casse);
for ($num1 = 0 ; $num1 < $num_casse ; $num1++) {
$id_cassa = risul_query($casse,$num1,'idcasse');
if (!empty(${"cassa_sel".$id_cassa})) $nuove_casse_sel .= ",".$id_cassa;
} # fine for $num1
if ($nuove_casse_sel) $nuove_casse_sel = substr($nuove_casse_sel,1);
if ($nuove_casse_sel != substr($casse_consentite,2)) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"nuove_casse_sel\" value=\"$nuove_casse_sel\">
<input type=\"hidden\" name=\"cambia_casse_sel\" value=\"SI\">";
echo mex("Verranno cambiate le <b>casse</b> utilizzabili",$pag).".<br>";
} # fine if ($nuove_casse_sel != substr($casse_consentite,2))
if ($vedi_beni_inv == "p" and $vedi_beni_inv_gr == "SI") $vedi_beni_inv = "g";
if (substr($priv_inventario,0,1) != $vedi_beni_inv) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_beni_inv\" value=\"".htmlspecialchars($vedi_beni_inv)."\">";
if ($vedi_beni_inv == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere i <b>beni dell'inventario</b>",$pag).".<br>";
if ($vedi_beni_inv == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo i <b>suoi beni dell'inventario</b>",$pag).".<br>";
if ($vedi_beni_inv == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo i <b>suoi beni dell'inventario</b>",$pag)." ".mex("e quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($vedi_beni_inv == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere i <b>beni dell'inventario</b>",$pag).".<br>";
} # fine if (substr($priv_inventario,0,1) != $vedi_beni_inv)
if (substr($priv_inventario,1,1) != $ins_beni_inv) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_beni_inv\" value=\"".htmlspecialchars($ins_beni_inv)."\">";
if ($ins_beni_inv == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>inserire nuovi beni</b> nell'inventario",$pag).".<br>";
if ($ins_beni_inv == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>inserire nuovi beni</b> nell'inventario",$pag).".<br>";
} # fine if (substr($priv_inventario,1,1) != $ins_beni_inv)
if ($vedi_inv_mag == "p" and $vedi_inv_mag_gr == "SI") $vedi_inv_mag = "g";
if (substr($priv_inventario,2,1) != $vedi_inv_mag) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_inv_mag\" value=\"".htmlspecialchars($vedi_inv_mag)."\">";
if ($vedi_inv_mag == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere <b>l'inventario",$pag)." ".mex("dei magazzini</b>",$pag).".<br>";
if ($vedi_inv_mag == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("solo dei suoi magazzini</b>",$pag).".<br>";
if ($vedi_inv_mag == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("solo dei suoi magazzini</b>",$pag)." ".mex("e di quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($vedi_inv_mag == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("dei magazzini</b>",$pag).".<br>";
} # fine if (substr($priv_inventario,2,1) != $vedi_inv_mag)
if (substr($priv_inventario,3,1) != $ins_mag) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_mag\" value=\"".htmlspecialchars($ins_mag)."\">";
if ($ins_mag == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>inserire nuovi magazzini</b>",$pag).".<br>";
if ($ins_mag == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>inserire nuovi magazzini</b>",$pag).".<br>";
} # fine if (substr($priv_inventario,3,1) != $ins_mag)
if ($ins_beni_in_mag == "p" and $ins_beni_in_mag_gr == "SI") $ins_beni_in_mag = "g";
if (substr($priv_inventario,4,1) != $ins_beni_in_mag) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_beni_in_mag\" value=\"".htmlspecialchars($ins_beni_in_mag)."\">";
if ($ins_beni_in_mag == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("nei magazzini",$pag).".<br>";
if ($ins_beni_in_mag == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("solo nei suoi magazzini",$pag).".<br>";
if ($ins_beni_in_mag == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("solo nei suoi magazzini",$pag)." ".mex("e in quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($ins_beni_in_mag == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("nei magazzini",$pag).".<br>";
} # fine if (substr($priv_inventario,4,1) != $ins_beni_in_mag)
if ($mod_beni_in_mag == "p" and $mod_beni_in_mag_gr == "SI") $mod_beni_in_mag = "g";
if (substr($priv_inventario,5,1) != $mod_beni_in_mag) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_beni_in_mag\" value=\"".htmlspecialchars($mod_beni_in_mag)."\">";
if ($mod_beni_in_mag == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("nei magazzini",$pag).".<br>";
if ($mod_beni_in_mag == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("solo nei suoi magazzini",$pag).".<br>";
if ($mod_beni_in_mag == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("solo nei suoi magazzini",$pag)." ".mex("e in quelli di utenti appartenenti ai suoi gruppi",$pag).".<br>";
if ($mod_beni_in_mag == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("nei magazzini",$pag).".<br>";
} # fine if (substr($priv_inventario,5,1) != $mod_beni_in_mag)
if ($vedi_inv_app == "p" and $vedi_inv_app_gr == "SI") $vedi_inv_app = "g";
if (substr($priv_inventario,6,1) != $vedi_inv_app) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_inv_app\" value=\"".htmlspecialchars($vedi_inv_app)."\">";
if ($vedi_inv_app == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere <b>l'inventario",$pag)." ".mex("degli appartamenti</b>",'unit.php').".<br>";
if ($vedi_inv_app == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("solo dei suoi appartamenti</b>",'unit.php').".<br>";
if ($vedi_inv_app == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("solo dei suoi appartamenti</b>",'unit.php')." ".mex("e di quelli di utenti appartenenti ai suoi gruppi",'unit.php').".<br>";
if ($vedi_inv_app == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere <b>l'inventario",$pag)." ".mex("degli appartamenti</b>",'unit.php').".<br>";
} # fine if (substr($priv_inventario,6,1) != $vedi_inv_app)
if ($ins_beni_in_app == "p" and $ins_beni_in_app_gr == "SI") $ins_beni_in_app = "g";
if (substr($priv_inventario,7,1) != $ins_beni_in_app) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_beni_in_app\" value=\"".htmlspecialchars($ins_beni_in_app)."\">";
if ($ins_beni_in_app == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("negli appartamenti",'unit.php').".<br>";
if ($ins_beni_in_app == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("solo nei suoi appartamenti",'unit.php').".<br>";
if ($ins_beni_in_app == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("solo nei suoi appartamenti",'unit.php')." ".mex("e in quelli di utenti appartenenti ai suoi gruppi",'unit.php').".<br>";
if ($ins_beni_in_app == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>aggiungere e cancellare beni</b>",$pag)." ".mex("negli appartamenti",'unit.php').".<br>";
} # fine if (substr($priv_inventario,7,1) != $ins_beni_in_app)
if ($mod_beni_in_app == "p" and $mod_beni_in_app_gr == "SI") $mod_beni_in_app = "g";
if (substr($priv_inventario,8,1) != $mod_beni_in_app) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_beni_in_app\" value=\"".htmlspecialchars($mod_beni_in_app)."\">";
if ($mod_beni_in_app == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("negli appartamenti",'unit.php').".<br>";
if ($mod_beni_in_app == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("solo nei suoi appartamenti",'unit.php').".<br>";
if ($mod_beni_in_app == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("solo nei suoi appartamenti",'unit.php')." ".mex("e in quelli di utenti appartenenti ai suoi gruppi",'unit.php').".<br>";
if ($mod_beni_in_app == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>modificare le quantità dei beni</b>",$pag)." ".mex("negli appartamenti",'unit.php').".<br>";
} # fine if (substr($priv_inventario,8,1) != $mod_beni_in_app)

echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"modifica_privilegi_globali\" value=\"SI\">
$dati_da_modificare
<input class=\"sbutton\" type=\"submit\" name=\"continua\" value=\"".mex("Continua",$pag)."\">
</div></form>";
} # fine if (empty($continua))

else {
$nuovi_priv_mod_pers = $priv_mod_pers;
if ($modifica_pers == "s" or $modifica_pers == "n") $nuovi_priv_mod_pers = $modifica_pers.substr($nuovi_priv_mod_pers,1);
if (isset($crea_backup) and ($crea_backup == "s" or $crea_backup == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,1).$crea_backup.substr($nuovi_priv_mod_pers,2);
if (isset($modifica_doc) and ($modifica_doc == "s" or $modifica_doc == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,2).$modifica_doc.substr($nuovi_priv_mod_pers,3);
if (isset($crea_interconnessioni) and ($crea_interconnessioni == "s" or $crea_interconnessioni == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,3).$crea_interconnessioni.substr($nuovi_priv_mod_pers,4);
if (isset($modifica_doc_api) and ($modifica_doc_api == "s" or $modifica_doc_api == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,4).$modifica_doc_api.substr($nuovi_priv_mod_pers,5);
if (isset($gest_pass_cc) and ($gest_pass_cc == "s" or $gest_pass_cc == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,5).$gest_pass_cc.substr($nuovi_priv_mod_pers,6);
if (isset($modpers_cat_pers) and ($modpers_cat_pers == "s" or $modpers_cat_pers == "g" or $modpers_cat_pers == "t" or $modpers_cat_pers == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,6).$modpers_cat_pers.substr($nuovi_priv_mod_pers,7);
if (isset($modpers_valute) and ($modpers_valute == "s" or $modpers_valute == "g" or $modpers_valute == "t" or $modpers_valute == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,7).$modpers_valute.substr($nuovi_priv_mod_pers,8);
if (isset($crea_pagineweb) and ($crea_pagineweb == "s" or $crea_pagineweb == "c" or $crea_pagineweb == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,8).$crea_pagineweb.substr($nuovi_priv_mod_pers,9);
if (isset($modifica_doc_html) and ($modifica_doc_html == "s" or $modifica_doc_html == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,9).$modifica_doc_html.substr($nuovi_priv_mod_pers,10);
if (isset($modifica_pass) and ($modifica_pass == "p" or $modifica_pass == "n")) $nuovi_priv_mod_pers = substr($nuovi_priv_mod_pers,0,10).$modifica_pass;
if ($nuovi_priv_mod_pers != $priv_mod_pers) esegui_query("update $tableprivilegi set priv_mod_pers = '$nuovi_priv_mod_pers' where idutente = '$id_utente_privilegi' and anno = '1'");
$nuovi_priv_ins_clienti = $priv_ins_clienti;
if (isset($inserimento_clienti) and ($inserimento_clienti == "s" or $inserimento_clienti == "n")) $nuovi_priv_ins_clienti = $inserimento_clienti.substr($nuovi_priv_ins_clienti,1);
if (isset($modifica_clienti) and ($modifica_clienti == "s" or $modifica_clienti == "p" or $modifica_clienti == "g" or $modifica_clienti == "n")) $nuovi_priv_ins_clienti = substr($nuovi_priv_ins_clienti,0,1).$modifica_clienti.substr($nuovi_priv_ins_clienti,2);
if (isset($vedi_clienti) and ($vedi_clienti == "s" or $vedi_clienti == "p" or $vedi_clienti == "g" or $vedi_clienti == "n")) $nuovi_priv_ins_clienti = substr($nuovi_priv_ins_clienti,0,2).$vedi_clienti.substr($nuovi_priv_ins_clienti,3);
if (isset($vedi_telefoni) and ($vedi_telefoni == "s" or $vedi_telefoni == "n")) $nuovi_priv_ins_clienti = substr($nuovi_priv_ins_clienti,0,3).$vedi_telefoni.substr($nuovi_priv_ins_clienti,4);
if (isset($vedi_indirizzo) and ($vedi_indirizzo == "s" or $vedi_indirizzo == "n")) $nuovi_priv_ins_clienti = substr($nuovi_priv_ins_clienti,0,4).$vedi_indirizzo.substr($nuovi_priv_ins_clienti,5);
if ($nuovi_priv_ins_clienti != $priv_ins_clienti) esegui_query("update $tableprivilegi set priv_ins_clienti = '$nuovi_priv_ins_clienti' where idutente = '$id_utente_privilegi' and anno = '1'");
$nuovo_prefisso_clienti = $prefisso_clienti;
if (isset($tipo_prefisso_clienti) and ($tipo_prefisso_clienti == "p" or $tipo_prefisso_clienti == "s" or $tipo_prefisso_clienti == "n")) $nuovo_prefisso_clienti = $tipo_prefisso_clienti.substr($nuovo_prefisso_clienti,1);
if (@get_magic_quotes_gpc()) $testo_prefisso_clienti = stripslashes($testo_prefisso_clienti);
$testo_prefisso_clienti = htmlspecialchars($testo_prefisso_clienti);
if ($testo_prefisso_clienti) $nuovo_prefisso_clienti = substr($nuovo_prefisso_clienti,0,2).$testo_prefisso_clienti;
if (isset($tipo_prefisso_clienti) and $tipo_prefisso_clienti == "n") $nuovo_prefisso_clienti = substr($nuovo_prefisso_clienti,0,2);
if ($nuovo_prefisso_clienti != $prefisso_clienti) esegui_query("update $tableprivilegi set prefisso_clienti = '$nuovo_prefisso_clienti' where idutente = '$id_utente_privilegi' and anno = '1'");
$nuovi_priv_messaggi = $priv_messaggi;
if (isset($vedi_messaggi) and ($vedi_messaggi == "s" or $vedi_messaggi == "n")) $nuovi_priv_messaggi = $vedi_messaggi.substr($nuovi_priv_messaggi,1);
if (isset($ins_messaggi) and ($ins_messaggi == "s" or $ins_messaggi == "n")) $nuovi_priv_messaggi = substr($nuovi_priv_messaggi,0,1).$ins_messaggi;
if ($nuovi_priv_messaggi != $priv_messaggi) esegui_query("update $tableprivilegi set priv_messaggi = '$nuovi_priv_messaggi' where idutente = '$id_utente_privilegi' and anno = '1'");
$nuove_casse_consentite = $casse_consentite;
if (isset($seleziona_casse) and ($seleziona_casse == "n" or $seleziona_casse == "s")) $nuove_casse_consentite = $seleziona_casse.",".substr($nuove_casse_consentite,2);
if (!empty($cambia_casse_sel) and preg_replace("/[0-9]+(,[0-9]+)*/","",$nuove_casse_sel) == "") $nuove_casse_consentite = substr($nuove_casse_consentite,0,2).$nuove_casse_sel;
if ($nuove_casse_consentite != $casse_consentite) esegui_query("update $tableprivilegi set casse_consentite = '$nuove_casse_consentite' where idutente = '$id_utente_privilegi' and anno = '1'");
$nuovi_priv_inventario = $priv_inventario;
if (isset($vedi_beni_inv) and ($vedi_beni_inv == "s" or $vedi_beni_inv == "p" or $vedi_beni_inv == "g" or $vedi_beni_inv == "n")) $nuovi_priv_inventario = $vedi_beni_inv.substr($nuovi_priv_inventario,1);
if (isset($ins_beni_inv) and ($ins_beni_inv == "s" or $ins_beni_inv == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,1).$ins_beni_inv.substr($nuovi_priv_inventario,2);
if (isset($vedi_inv_mag) and ($vedi_inv_mag == "s" or $vedi_inv_mag == "p" or $vedi_inv_mag == "g" or $vedi_inv_mag == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,2).$vedi_inv_mag.substr($nuovi_priv_inventario,3);
if (isset($ins_mag) and ($ins_mag == "s" or $ins_mag == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,3).$ins_mag.substr($nuovi_priv_inventario,4);
if (isset($ins_beni_in_mag) and ($ins_beni_in_mag == "s" or $ins_beni_in_mag == "p" or $ins_beni_in_mag == "g" or $ins_beni_in_mag == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,4).$ins_beni_in_mag.substr($nuovi_priv_inventario,5);
if (isset($mod_beni_in_mag) and ($mod_beni_in_mag == "s" or $mod_beni_in_mag == "p" or $mod_beni_in_mag == "g" or $mod_beni_in_mag == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,5).$mod_beni_in_mag.substr($nuovi_priv_inventario,6);
if (isset($vedi_inv_app) and ($vedi_inv_app == "s" or $vedi_inv_app == "p" or $vedi_inv_app == "g" or $vedi_inv_app == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,6).$vedi_inv_app.substr($nuovi_priv_inventario,7);
if (isset($ins_beni_in_app) and ($ins_beni_in_app == "s" or $ins_beni_in_app == "p" or $ins_beni_in_app == "g" or $ins_beni_in_app == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,7).$ins_beni_in_app.substr($nuovi_priv_inventario,8);
if (isset($mod_beni_in_app) and ($mod_beni_in_app == "s" or $mod_beni_in_app == "p" or $mod_beni_in_app == "g" or $mod_beni_in_app == "n")) $nuovi_priv_inventario = substr($nuovi_priv_inventario,0,8).$mod_beni_in_app;
if ($nuovi_priv_inventario != $priv_inventario) esegui_query("update $tableprivilegi set priv_inventario = '$nuovi_priv_inventario' where idutente = '$id_utente_privilegi' and anno = '1'");
$privilegi_globali = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '1'");
} # fine else if (empty($continua))
} # fine if ($modificare != "NO")
else $mostra_form_iniziale = "NO";
} # fine if (!empty($modifica_privilegi_globali))


if ($modifica_privilegi_anno) {
$anno_modifica = $modifica_privilegi_anno;
$modificare = "";
if (controlla_anno($anno_modifica) != "SI" or $anno_esistente[$anno_modifica] != "SI" or numlin_query($privilegi_anno[$anno_modifica]) == 0) {
$modificare = "NO";
echo mex("Anno <div style=\"display: inline; color: red;\">errato</div>",$pag).".<br>";
} # fine if (controlla_anno($modifica_privilegi_anno) != "SI" or...
if (isset(${"modp_attiva_ore_mod".$anno_modifica}) and ${"modp_attiva_ore_mod".$anno_modifica} == "s") {
if (strlen(${"modp_num_ore_mod".$anno_modifica}) > 3 or controlla_num_pos(${"modp_num_ore_mod".$anno_modifica}) != "SI" or ${"modp_num_ore_mod".$anno_modifica} == 0) {
$modificare = "NO";
echo mex("Ore in cui si può modificare la prenotazione <div style=\"display: inline; color: red;\">errate</div>",$pag).".<br>";
} # fine if (strlen($modp_num_ore_mod) > 3 or...
} # fine if (isset(${"modp_attiva_ore_mod".$anno_modifica}) and...
if (isset(${"modp_attiva_ore_canc".$anno_modifica}) and ${"modp_attiva_ore_canc".$anno_modifica} == "s") {
if (strlen(${"modp_num_ore_canc".$anno_modifica}) > 3 or controlla_num_pos(${"modp_num_ore_canc".$anno_modifica}) != "SI" or ${"modp_num_ore_canc".$anno_modifica} == 0) {
$modificare = "NO";
echo mex("Ore in cui si può cancellare la prenotazione <div style=\"display: inline; color: red;\">errate</div>",$pag).".<br>";
} # fine if (strlen($modp_num_ore_canc) > 3 or...
} # fine if (isset(${"modp_attiva_ore_canc".$anno_modifica}) and...
if ($modificare != "NO") {
$regole1_consentite = risul_query($privilegi_anno[$anno_modifica],0,'regole1_consentite');
$tariffe_consentite = risul_query($privilegi_anno[$anno_modifica],0,'tariffe_consentite');
$costi_agg_consentiti = risul_query($privilegi_anno[$anno_modifica],0,'costi_agg_consentiti');
$contratti_consentiti = risul_query($privilegi_anno[$anno_modifica],0,'contratti_consentiti');
$cassa_pagamenti = risul_query($privilegi_anno[$anno_modifica],0,'cassa_pagamenti');
$priv_ins_prenota = risul_query($privilegi_anno[$anno_modifica],0,'priv_ins_prenota');
$priv_mod_prenota = risul_query($privilegi_anno[$anno_modifica],0,'priv_mod_prenota');
$priv_ins_costi = risul_query($privilegi_anno[$anno_modifica],0,'priv_ins_costi');
$priv_ins_tariffe = risul_query($privilegi_anno[$anno_modifica],0,'priv_ins_tariffe');
$priv_vedi_tab = risul_query($privilegi_anno[$anno_modifica],0,'priv_vedi_tab');
if (empty($continua)) {
$mostra_form_iniziale = "NO";
$dati_da_modificare = "";
if (substr($regole1_consentite,0,1) != fix_set(${"usa_regola1".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"usa_regola1\" value=\"".htmlspecialchars(${"usa_regola1".$anno_modifica})."\">";
if (${"usa_regola1".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire le sue prenotazioni in <b>tutti i periodi</b> del",$pag)." $anno_modifica.<br>";
if (${"usa_regola1".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire le sue prenotazioni solo nei <b>periodi della regola 1</b> selezionati nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($regole1_consentite,0,1) != fix_set(${"usa_regola1".$anno_modifica}))
$nuove_motivazioni_sel = "";
for ($num1 = 0 ; $num1 < ${"num_motivazioni".$anno_modifica} ; $num1++) if (!empty(${"var_mot_".$anno_modifica.$num1})) $nuove_motivazioni_sel .= "#@^".${"var_mot_".$anno_modifica.$num1};
if ($nuove_motivazioni_sel) $nuove_motivazioni_sel = substr($nuove_motivazioni_sel,3);
if (htmlspecialchars($nuove_motivazioni_sel) != substr($regole1_consentite,3)) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"nuove_motivazioni_reg1\" value=\"".htmlspecialchars($nuove_motivazioni_sel)."\">
<input type=\"hidden\" name=\"cambia_motivazioni_reg1\" value=\"SI\">";
echo mex("Verranno cambiate le motivazioni selezionate della <b>regola 1</b> per l'anno",$pag)." $anno_modifica.<br>";
} # fine if (htmlspecialchars($nuove_motivazioni_sel) != substr($regole1_consentite,1)
if (substr($regole1_consentite,1,1) != fix_set(${"avvisa_regola1".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"avvisa_regola1\" value=\"".htmlspecialchars(${"avvisa_regola1".$anno_modifica})."\">";
if (${"avvisa_regola1".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("verrà avvisato <b>sempre</b> quando inserirà prenotazioni nei periodi delle regole 1 del",$pag)." $anno_modifica.<br>";
if (${"avvisa_regola1".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("verrà avvisato solo quando inserirà prenotazioni nei periodi delle regole 1 <b>non selezionate</b> del",$pag)." $anno_modifica.<br>";
if (${"avvisa_regola1".$anno_modifica} == "m") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non verrà avvisato <b>mai</b> quando inserirà prenotazioni nei periodi delle regole 1 del",$pag)." $anno_modifica.<br>";
if (${"avvisa_regola1".$anno_modifica} == "f") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà, per liberare appartamenti, <b>spostare</b> prenotazioni nei periodi delle regole 1 non selezionate del",'unit.php')." $anno_modifica ".mex("se non vi può inserire prenotazioni",$pag).".<br>";
} # fine if (substr($regole1_consentite,1,1) != fix_set(${"avvisa_regola1".$anno_modifica}))
if (substr($tariffe_consentite,0,1) != ${"seleziona_tariffe".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"seleziona_tariffe\" value=\"".htmlspecialchars(${"seleziona_tariffe".$anno_modifica})."\">";
if (${"seleziona_tariffe".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà utilizzare <b>tutte le tariffe</b> del",$pag)." $anno_modifica.<br>";
if (${"seleziona_tariffe".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà utilizzare solo le <b>tariffe selezionate</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($tariffe_consentite,0,1) != ${"seleziona_tariffe".$anno_modifica})
$nuove_tariffe_sel = "";
for ($num1 = 1 ; $num1 <= (int) fixset(${"numero_tariffe$anno_modifica"}) ; $num1++) if (!empty(${"tariffa_sel".$anno_modifica.$num1})) $nuove_tariffe_sel .= ",".$num1;
if ($nuove_tariffe_sel) $nuove_tariffe_sel = substr($nuove_tariffe_sel,1);
if ($nuove_tariffe_sel != substr($tariffe_consentite,2)) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"nuove_tariffe_sel\" value=\"$nuove_tariffe_sel\">
<input type=\"hidden\" name=\"cambia_tariffe_sel\" value=\"SI\">";
echo mex("Verranno cambiate le <b>tariffe selezionate</b> da utilizzare per l'anno",$pag)." $anno_modifica.<br>";
} # fine if ($nuove_tariffe_sel != substr($tariffe_consentite,2))
if (substr($costi_agg_consentiti,0,1) != fix_set(${"seleziona_costi_agg".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"seleziona_costi_agg\" value=\"".htmlspecialchars(${"seleziona_costi_agg".$anno_modifica})."\">";
if (${"seleziona_costi_agg".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà utilizzare <b>tutti i costi aggiuntivi</b> del",$pag)." $anno_modifica.<br>";
if (${"seleziona_costi_agg".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà utilizzare solo i <b>costi aggiuntivi selezionati</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($costi_agg_consentiti,0,1) != fix_set(${"seleziona_costi_agg".$anno_modifica}))
$nuovi_costi_agg_sel = "";
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe_mostra,"NO");
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
$idntariffe = $dati_ca[$num1]['id'];
if (!empty(${"costo_agg_sel".$anno_modifica.$idntariffe})) $nuovi_costi_agg_sel .= ",".$idntariffe;
} # fine for $num1
if ($nuovi_costi_agg_sel) $nuovi_costi_agg_sel = substr($nuovi_costi_agg_sel,1);
if ($nuovi_costi_agg_sel != substr($costi_agg_consentiti,2)) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"nuovi_costi_agg_sel\" value=\"$nuovi_costi_agg_sel\">
<input type=\"hidden\" name=\"cambia_costi_agg_sel\" value=\"SI\">";
echo mex("Verranno cambiati i <b>costi aggiuntivi</b> da utilizzare per l'anno",$pag)." $anno_modifica.<br>";
} # fine if ($nuovi_costi_agg_sel != substr($costi_agg_consentiti,2))
if (substr($contratti_consentiti,0,1) != fix_set(${"seleziona_contratti".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"seleziona_contratti\" value=\"".htmlspecialchars(${"seleziona_contratti".$anno_modifica})."\">";
if (${"seleziona_contratti".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà visualizzare <b>tutti i documenti</b> del",$pag)." $anno_modifica.<br>";
if (${"seleziona_contratti".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà visualizzare solo i <b>documenti selezionati</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($contratti_consentiti,0,1) != fix_set(${"seleziona_contratti".$anno_modifica}))
$nuovi_contratti_sel = "";
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
for ($num1 = 1 ; $num1 <= $max_contr ; $num1++) if (!empty(${"contratto_sel".$anno_modifica.$num1})) $nuovi_contratti_sel .= ",".$num1;
if ($nuovi_contratti_sel) $nuovi_contratti_sel = substr($nuovi_contratti_sel,1);
if ($nuovi_contratti_sel != substr($contratti_consentiti,3)) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"nuovi_contratti_sel\" value=\"$nuovi_contratti_sel\">
<input type=\"hidden\" name=\"cambia_contratti_sel\" value=\"SI\">";
echo mex("Verranno cambiati i <b>documenti</b> visualizzabili per l'anno",$pag)." $anno_modifica.<br>";
} # fine if ($nuovi_contratti_sel != substr($contratti_consentiti,3))
if (substr($contratti_consentiti,1,1) != fix_set(${"cancella_contr".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"cancella_contr\" value=\"".htmlspecialchars(${"cancella_contr".$anno_modifica})."\">";
if (${"cancella_contr".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>cancellare e sovrascrivere i documenti</b> salvati nel",$pag)." $anno_modifica.<br>";
if (${"cancella_contr".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>cancellare e sovrascrivere i documenti</b> salvati nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($contratti_consentiti,1,1) != fix_set(${"cancella_contr".$anno_modifica}))
if (substr($priv_ins_prenota,0,1) != fix_set(${"inserisci_prenotazioni".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"inserisci_prenotazioni\" value=\"".htmlspecialchars(${"inserisci_prenotazioni".$anno_modifica})."\">";
if (${"inserisci_prenotazioni".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire <b>nuove prenotazioni</b> nel",$pag)." $anno_modifica.<br>";
if (${"inserisci_prenotazioni".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>nuove prenotazioni</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,,1) != fix_set(${"inserisci_prenotazioni".$anno_modifica}))
if (substr($priv_ins_prenota,1,1) != fix_set(${"ins_assegnazione_app".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_assegnazione_app\" value=\"".htmlspecialchars(${"ins_assegnazione_app".$anno_modifica})."\">";
if (${"ins_assegnazione_app".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel",'unit.php')." $anno_modifica.<br>";
if (${"ins_assegnazione_app".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà cambiare <b>l'assegnazione degli appartamenti</b> quando inserisce nuove prenotazioni nel",'unit.php')." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,1,1) != fix_set(${"ins_assegnazione_app".$anno_modifica}))
if (substr($priv_ins_prenota,2,1) != fix_set(${"ins_conferma_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_conferma_prenota\" value=\"".htmlspecialchars(${"ins_conferma_prenota".$anno_modifica})."\">";
if (${"ins_conferma_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>confermare</b> le nuove prenotazioni inserite nel",$pag)." $anno_modifica.<br>";
if (${"ins_conferma_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>confermare</b> le nuove prenotazioni inserite nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,2,1) != fix_set(${"ins_conferma_prenota".$anno_modifica}))
if (substr($priv_ins_prenota,3,1) != fix_set(${"ins_sconto".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_sconto\" value=\"".htmlspecialchars(${"ins_sconto".$anno_modifica})."\">";
if (${"ins_sconto".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire uno <b>sconto</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_sconto".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire uno <b>sconto</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,3,1) != fix_set(${"ins_sconto".$anno_modifica}))
if (substr($priv_ins_prenota,4,1) != fix_set(${"ins_caparra".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_caparra\" value=\"".htmlspecialchars(${"ins_caparra".$anno_modifica})."\">";
if (${"ins_caparra".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire la <b>caparra</b> e le <b>commissioni</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_caparra".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire la <b>caparra</b> e le <b>commissioni</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,4,1) != fix_set(${"ins_caparra".$anno_modifica}))
if (substr($priv_ins_prenota,10,1) != fix_set(${"ins_checkin".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_checkin\" value=\"".htmlspecialchars(${"ins_checkin".$anno_modifica})."\">";
if (${"ins_checkin".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire l'<b>orario di entrata</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_checkin".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire la l'<b>orario di entrata</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,10,1) != fix_set(${"ins_checkin".$anno_modifica}))
if (substr($priv_ins_prenota,5,1) != fix_set(${"ins_costi_agg_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_costi_agg_prenota\" value=\"".htmlspecialchars(${"ins_costi_agg_prenota".$anno_modifica})."\">";
if (${"ins_costi_agg_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire dei <b>costi aggiuntivi</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_costi_agg_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire dei <b>costi aggiuntivi</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,5,1) != fix_set(${"ins_costi_agg_prenota".$anno_modifica}))
if (substr($priv_ins_prenota,6,1) != fix_set(${"ins_commento".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_commento\" value=\"".htmlspecialchars(${"ins_commento".$anno_modifica})."\">";
if (${"ins_commento".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire il <b>commento</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_commento".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire il <b>commento</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,6,1) != fix_set(${"ins_commento".$anno_modifica}))
if (substr($priv_ins_prenota,12,1) != fix_set(${"ins_comm_pers".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_comm_pers\" value=\"".htmlspecialchars(${"ins_comm_pers".$anno_modifica})."\">";
if (${"ins_comm_pers".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire i <b>commenti personalizzati</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_comm_pers".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire i <b>commenti personalizzati</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,12,1) != fix_set(${"ins_comm_pers".$anno_modifica}))
if (substr($priv_ins_prenota,11,1) != fix_set(${"ins_origine_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_origine_prenota\" value=\"".htmlspecialchars(${"ins_origine_prenota".$anno_modifica})."\">";
if (${"ins_origine_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire <b>l'origine della prenotazione</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_origine_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>l'origine della prenotazione</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,11,1) != fix_set(${"ins_origine_prenota".$anno_modifica}))
if (substr($priv_ins_prenota,7,1) != fix_set(${"ins_num_persone".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_num_persone\" value=\"".htmlspecialchars(${"ins_num_persone".$anno_modifica})."\">";
if (${"ins_num_persone".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire il <b>numero delle persone</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"ins_num_persone".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire il <b>numero delle persone</b> quando inserisce nuove prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,7,1) != fix_set(${"ins_num_persone".$anno_modifica}))
if (substr($priv_ins_prenota,8,1) != fix_set(${"ins_passato".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_passato\" value=\"".htmlspecialchars(${"ins_passato".$anno_modifica})."\">";
if (${"ins_passato".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire nuove prenotazioni in <b>periodi già iniziati</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_passato".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire nuove prenotazioni in <b>periodi già iniziati</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,8,1) != fix_set(${"ins_passato".$anno_modifica}))
if (substr($priv_ins_prenota,9,1) != fix_set(${"ins_multiple".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_multiple\" value=\"".htmlspecialchars(${"ins_multiple".$anno_modifica})."\">";
if (${"ins_multiple".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire <b>più prenotazioni contemporaneamente</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_multiple".$anno_modifica} == "m") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>più prenotazioni contemporaneamente ma non vicine</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_multiple".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>più prenotazioni contemporaneamente</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_prenota,9,1) != fix_set(${"ins_multiple".$anno_modifica}))
if (fix_set(${"modp_prenota".$anno_modifica}) == "p" and ${"modp_prenota_gr".$anno_modifica} == "SI") ${"modp_prenota".$anno_modifica} = "g";
if (substr($priv_mod_prenota,0,1) != ${"modp_prenota".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_prenota\" value=\"".htmlspecialchars(${"modp_prenota".$anno_modifica})."\">";
if (${"modp_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare <b>nessuna prenotazione</b> nel",$pag)." $anno_modifica.<br>";
if (${"modp_prenota".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare solo le <b>sue prenotazioni</b> nel",$pag)." $anno_modifica.<br>";
if (${"modp_prenota".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare solo le <b>sue prenotazioni</b> e quelle di utenti appartenenti ai suoi gruppi nel",$pag)." $anno_modifica.<br>";
if (${"modp_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare <b>tutte le prenotazioni</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,0,1) != ${"modp_prenota".$anno_modifica})
if (substr($priv_mod_prenota,22,1) != fix_set(${"modp_cliente".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_cliente\" value=\"".htmlspecialchars(${"modp_cliente".$anno_modifica})."\">";
if (${"modp_cliente".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà cambiare il <b>cliente</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_cliente".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà cambiare il <b>cliente</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,22,1) != fix_set(${"modp_cliente".$anno_modifica}))
if (substr($priv_mod_prenota,1,1) != fix_set(${"modp_date_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_date_prenota\" value=\"".htmlspecialchars(${"modp_date_prenota".$anno_modifica})."\">";
if (${"modp_date_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>data iniziale o finale</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_date_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare la <b>data iniziale o finale</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,1,1) != fix_set(${"modp_date_prenota".$anno_modifica}))
if (substr($priv_mod_prenota,2,1) != fix_set(${"modp_app_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_app_prenota\" value=\"".htmlspecialchars(${"modp_app_prenota".$anno_modifica})."\">";
if (${"modp_app_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel",'unit.php')." $anno_modifica.<br>";
if (${"modp_app_prenota".$anno_modifica} == "a") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà scegliere di modificare <b>l'appartamento</b> solo tra quelli già assegnati per le prenotazioni del",'unit.php')." $anno_modifica.<br>";
if (${"modp_app_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare l'assegnazione degli <b>appartamenti</b> delle prenotazioni nel",'unit.php')." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,2,1) != fix_set(${"modp_app_prenota".$anno_modifica}))
if (substr($priv_mod_prenota,23,1) != fix_set(${"modp_pren_comp".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_pren_comp\" value=\"".htmlspecialchars(${"modp_pren_comp".$anno_modifica})."\">";
if (${"modp_pren_comp".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare le <b>prenotazioni vicine</b> nel",$pag)." $anno_modifica.<br>";
if (${"modp_pren_comp".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare le <b>prenotazioni vicine</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,23,1) != fix_set(${"modp_pren_comp".$anno_modifica}))
if (fix_set(${"modp_tariffa".$anno_modifica}) == "n" and ${"modp_vedi_tariffa".$anno_modifica} == "SI") ${"modp_tariffa".$anno_modifica} = "v";
if (${"modp_tariffa".$anno_modifica} == "n" and ${"modp_vedi_tariffa".$anno_modifica} == "VL") ${"modp_tariffa".$anno_modifica} = "p";
if (substr($priv_mod_prenota,3,1) != ${"modp_tariffa".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_tariffa\" value=\"".htmlspecialchars(${"modp_tariffa".$anno_modifica})."\">";
if (${"modp_tariffa".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>tariffa</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrarla",$pag)."</em>).<br>";
if (${"modp_tariffa".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>tariffa</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare il valore",$pag)."</em>).<br>";
if (${"modp_tariffa".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>tariffa</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando il valore",$pag)."</em>).<br>";
if (${"modp_tariffa".$anno_modifica} == "r") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare la <b>tariffa</b> delle prenotazioni, ma sempre associandola agli appartamenti della regola 2, nel",'unit.php')." $anno_modifica.<br>";
if (${"modp_tariffa".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare la <b>tariffa</b> delle prenotazioni, scegliendo se utilizzare la regola 2, nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,3,1) != ${"modp_tariffa".$anno_modifica})
if (substr($priv_mod_prenota,4,1) != fix_set(${"modp_num_persone".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_num_persone\" value=\"".htmlspecialchars(${"modp_num_persone".$anno_modifica})."\">";
if (${"modp_num_persone".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare il <b>numero delle persone</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_num_persone".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare il <b>numero delle persone</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,4,1) != fix_set(${"modp_num_persone".$anno_modifica}))
if (substr($priv_mod_prenota,25,1) != fix_set(${"modp_vedi_comm".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_vedi_comm\" value=\"".htmlspecialchars(${"modp_vedi_comm".$anno_modifica})."\">";
if (${"modp_vedi_comm".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere il <b>commento</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_vedi_comm".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere il <b>commento</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,25,1) != fix_set(${"modp_vedi_comm".$anno_modifica}))
if (${"modp_vedi_comm".$anno_modifica} == "n") ${"modp_commento".$anno_modifica} = "n";
if (substr($priv_mod_prenota,5,1) != fix_set(${"modp_commento".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_commento\" value=\"".htmlspecialchars(${"modp_commento".$anno_modifica})."\">";
if (${"modp_commento".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare il <b>commento</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_commento".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare il <b>commento</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,5,1) != fix_set(${"modp_commento".$anno_modifica}))
if (substr($priv_mod_prenota,26,1) != fix_set(${"modp_comm_pers".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_comm_pers\" value=\"".htmlspecialchars(${"modp_comm_pers".$anno_modifica})."\">";
if (${"modp_comm_pers".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere e modificare i <b>commenti personalizzati</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_comm_pers".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere e modificare i <b>commenti personalizzati</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,26,1) != fix_set(${"modp_comm_pers".$anno_modifica}))
if (substr($priv_mod_prenota,24,1) != fix_set(${"modp_origine_prenota".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_origine_prenota\" value=\"".htmlspecialchars(${"modp_origine_prenota".$anno_modifica})."\">";
if (${"modp_origine_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare <b>l'origine</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_origine_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare il <b>l'origine</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,24,1) != fix_set(${"modp_origine_prenota".$anno_modifica}))
if (substr($priv_mod_prenota,20,1) != fix_set(${"modp_checkin".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_checkin\" value=\"".htmlspecialchars(${"modp_checkin".$anno_modifica})."\">";
if (${"modp_checkin".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare l'orario di <b>entrata ed uscita</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_checkin".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare l'orario di <b>entrata ed uscita</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,20,1) != fix_set(${"modp_checkin".$anno_modifica}))
if (${"modp_sconto".$anno_modifica} == "n" and ${"modp_vedi_sconto".$anno_modifica} == "SI") ${"modp_sconto".$anno_modifica} = "v";
if (substr($priv_mod_prenota,6,1) != fix_set(${"modp_sconto".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_sconto\" value=\"".htmlspecialchars(${"modp_sconto".$anno_modifica})."\">";
if (${"modp_sconto".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare lo <b>sconto</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare il valore",$pag)."</em>).<br>";
if (${"modp_sconto".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare lo <b>sconto</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando il valore",$pag)."</em>).<br>";
if (${"modp_sconto".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare lo <b>sconto</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,6,1) != fix_set(${"modp_sconto".$anno_modifica}))
if (fix_set(${"modp_caparra".$anno_modifica}) == "n" and ${"modp_vedi_caparra".$anno_modifica} == "SI") ${"modp_caparra".$anno_modifica} = "v";
if (substr($priv_mod_prenota,7,1) != ${"modp_caparra".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_caparra\" value=\"".htmlspecialchars(${"modp_caparra".$anno_modifica})."\">";
if (${"modp_caparra".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>caparra</b> e le <b>commissioni</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare i valori",$pag)."</em>).<br>";
if (${"modp_caparra".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare la <b>caparra</b> e le <b>commissioni</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando i valori",$pag)."</em>).<br>";
if (${"modp_caparra".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare la <b>caparra</b> e le <b>commissioni</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,7,1) != ${"modp_caparra".$anno_modifica})
if (fix_set(${"modp_costi_agg".$anno_modifica}) == "n" and ${"modp_vedi_prezzi_ca".$anno_modifica} == "SI") ${"modp_costi_agg".$anno_modifica} = "v";
if (${"modp_costi_agg".$anno_modifica} == "n" and ${"modp_vedi_prezzi_ca".$anno_modifica} == "VL") ${"modp_costi_agg".$anno_modifica} = "p";
if (substr($priv_mod_prenota,8,1) != ${"modp_costi_agg".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_costi_agg\" value=\"".htmlspecialchars(${"modp_costi_agg".$anno_modifica})."\">";
if (${"modp_costi_agg".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>costi aggiuntivi</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrarli",$pag)."</em>).<br>";
if (${"modp_costi_agg".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>costi aggiuntivi</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare i valori",$pag)."</em>).<br>";
if (${"modp_costi_agg".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>costi aggiuntivi</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando i valori",$pag)."</em>).<br>";
if (${"modp_costi_agg".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare i <b>costi aggiuntivi</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,8,1) != ${"modp_costi_agg".$anno_modifica})
if (fix_set(${"modp_pagato".$anno_modifica}) == "n" and ${"modp_nm_vedi_prezzi".$anno_modifica} == "SI") ${"modp_pagato".$anno_modifica} = "v";
if (${"modp_pagato".$anno_modifica} == "c" and ${"modp_sc_vedi_prezzi".$anno_modifica} == "NO") ${"modp_pagato".$anno_modifica} = "i";
if (substr($priv_mod_prenota,10,1) != ${"modp_pagato".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_pagato\" value=\"".htmlspecialchars(${"modp_pagato".$anno_modifica})."\">";
if (${"modp_pagato".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>soldi pagati</b> e la <b>conferma</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare i valori",$pag)."</em>).<br>";
if (${"modp_pagato".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>soldi pagati</b> e la <b>conferma</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando i valori",$pag)."</em>).<br>";
if (${"modp_pagato".$anno_modifica} == "i") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>soldi pagati</b> ma solo la <b>conferma</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("senza mostrare i valori",$pag)."</em>).<br>";
if (${"modp_pagato".$anno_modifica} == "c") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare i <b>soldi pagati</b> ma solo la <b>conferma</b> delle prenotazioni nel",$pag)." $anno_modifica (<em>".mex("mostrando i valori",$pag)."</em>).<br>";
if (${"modp_pagato".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare i <b>soldi pagati</b> e la <b>conferma</b> delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,10,1) != ${"modp_pagato".$anno_modifica})
if ($cassa_pagamenti != fix_set(${"modp_cassa_pagamenti".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_cassa_pagamenti\" value=\"".htmlspecialchars(${"modp_cassa_pagamenti".$anno_modifica})."\">";
if (${"modp_cassa_pagamenti".$anno_modifica} == "#1#") $nome_cassa = mex("cassa principale",$pag);
else $nome_cassa = ${"modp_cassa_pagamenti".$anno_modifica};
if (strcmp((string) ${"modp_cassa_pagamenti".$anno_modifica},"")) echo mex("I pagamenti inseriti nelle prenotazioni dall'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("verranno anche registrati come entrate nella cassa chiamata",$pag)." \"<b>$nome_cassa</b>\" ".mex("nel",$pag)." $anno_modifica.<br>";
else echo mex("I pagamenti inseriti nelle prenotazioni dall'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non verranno registrati in cassa nel",$pag)." $anno_modifica.<br>";
} # fine if ($cassa_pagamenti != fix_set(${"modp_cassa_pagamenti".$anno_modifica}))
if (${"modp_ut_ins".$anno_modifica} == "n" and ${"modp_vedi_utins".$anno_modifica} == "SI") ${"modp_ut_ins".$anno_modifica} = "v";
if (${"modp_ut_ins".$anno_modifica} == "s" and ${"modp_utenti".$anno_modifica} == "SI") ${"modp_ut_ins".$anno_modifica} = "g";
if (substr($priv_mod_prenota,9,1) != fix_set(${"modp_ut_ins".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_ut_ins\" value=\"".htmlspecialchars(${"modp_ut_ins".$anno_modifica})."\">";
if (${"modp_ut_ins".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare l'<b>utente</b> che ha inserito la prenotazione nel",$pag)." $anno_modifica (<em>".mex("senza mostrare l'utente",$pag)."</em>).<br>";
if (${"modp_ut_ins".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare l'<b>utente</b> che ha inserito la prenotazione nel",$pag)." $anno_modifica (<em>".mex("mostrando l'utente",$pag)."</em>).<br>";
if (${"modp_ut_ins".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare l'<b>utente</b> che ha inserito la prenotazione nel",$pag)." $anno_modifica (<em>".mex("solo con utenti dei suoi gruppi",$pag)."</em>).<br>";
if (${"modp_ut_ins".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare l'<b>utente</b> che ha inserito la prenotazione nel",$pag)." $anno_modifica (<em>".mex("con tutti gli utenti",$pag)."</em>).<br>";
} # fine if (substr($priv_mod_prenota,9,1) != fix_set(${"modp_ut_ins".$anno_modifica}))
if (substr($priv_mod_prenota,21,1) != fix_set(${"modp_codice".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_codice\" value=\"".htmlspecialchars(${"modp_codice".$anno_modifica})."\">";
if (${"modp_codice".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere e modificare il <b>codice prenotazione</b> nel",$pag)." $anno_modifica.<br>";
if (${"modp_codice".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere e modificare il <b>codice prenotazione</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,21,1) != fix_set(${"modp_codice".$anno_modifica}))
if (substr($priv_mod_prenota,11,1) != fix_set(${"modp_gia_iniziate".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_gia_iniziate\" value=\"".htmlspecialchars(${"modp_gia_iniziate".$anno_modifica})."\">";
if (${"modp_gia_iniziate".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modificare le <b>prenotazioni già iniziate</b> nel",$pag)." $anno_modifica.<br>";
if (${"modp_gia_iniziate".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modificare anche le <b>prenotazioni già iniziate</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,11,1) != fix_set(${"modp_gia_iniziate".$anno_modifica}))
if (substr($priv_mod_prenota,12,3) == "000") $v_modp_attiva_ore_mod = "n";
else $v_modp_attiva_ore_mod = "s";
if ($v_modp_attiva_ore_mod != fix_set(${"modp_attiva_ore_mod".$anno_modifica}) or (substr($priv_mod_prenota,12,3) != ${"modp_num_ore_mod".$anno_modifica} and ${"modp_attiva_ore_mod".$anno_modifica} == "s")) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_attiva_ore_mod\" value=\"".htmlspecialchars(${"modp_attiva_ore_mod".$anno_modifica})."\">
<input type=\"hidden\" name=\"modp_num_ore_mod\" value=\"".${"modp_num_ore_mod".$anno_modifica}."\">";
if (${"modp_attiva_ore_mod".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non avrà <b>limite di tempo</b> per modificare le prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_attiva_ore_mod".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più modificare le prenotazioni <b>dopo",$pag)." ".${"modp_num_ore_mod".$anno_modifica}." ".mex("ore</b> nel",$pag)." $anno_modifica.<br>";
} # fine if ($v_modp_attiva_ore_mod != fix_set(${"modp_attiva_ore_mod".$anno_modifica}) or...
if (substr($priv_mod_prenota,18,1) != fix_set(${"modp_canc".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_canc\" value=\"".htmlspecialchars(${"modp_canc".$anno_modifica})."\">";
if (${"modp_canc".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>cancellare</b> nessuna prenotazione nel",$pag)." $anno_modifica.<br>";
if (${"modp_canc".$anno_modifica} == "f") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>cancellare</b> solo le prenotazioni non iniziate nel",$pag)." $anno_modifica.<br>";
if (${"modp_canc".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>cancellare</b> tutte le prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,18,1) != fix_set(${"modp_canc".$anno_modifica}))
if (substr($priv_mod_prenota,27,1) != fix_set(${"modp_canc_perm".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_canc_perm\" value=\"".htmlspecialchars(${"modp_canc_perm".$anno_modifica})."\">";
if (${"modp_canc_perm".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non <b>cancellerà mai in modo permanente</b> le prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_canc_perm".$anno_modifica} == "c") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà scegliere se <b>cancellare in modo permanente</b> le prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_canc_perm".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("<b>cancellerà sempre in modo permanete</b> le prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,27,1) != fix_set(${"modp_canc_perm".$anno_modifica}))
if (substr($priv_mod_prenota,19,1) != fix_set(${"modp_canc_dopo_conf".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_canc_dopo_conf\" value=\"".htmlspecialchars(${"modp_canc_dopo_conf".$anno_modifica})."\">";
if (${"modp_canc_dopo_conf".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà <b>cancellare</b> le prenotazioni confermate nel",$pag)." $anno_modifica.<br>";
if (${"modp_canc_dopo_conf".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà <b>cancellare</b> le prenotazioni confermate nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_mod_prenota,19,1) != fix_set(${"modp_canc_dopo_conf".$anno_modifica}))
if (substr($priv_mod_prenota,15,3) == "000") $v_modp_attiva_ore_canc = "n";
else $v_modp_attiva_ore_canc = "s";
if ($v_modp_attiva_ore_canc != fix_set(${"modp_attiva_ore_canc".$anno_modifica}) or (substr($priv_mod_prenota,15,3) != ${"modp_num_ore_canc".$anno_modifica} and ${"modp_attiva_ore_canc".$anno_modifica} == "s")) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"modp_attiva_ore_canc\" value=\"".htmlspecialchars(${"modp_attiva_ore_canc".$anno_modifica})."\">
<input type=\"hidden\" name=\"modp_num_ore_canc\" value=\"".${"modp_num_ore_canc".$anno_modifica}."\">";
if (${"modp_attiva_ore_canc".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non avrà <b>limite di tempo</b> per cancellare le prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"modp_attiva_ore_canc".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà più cancellare le prenotazioni <b>dopo",$pag)." ".${"modp_num_ore_canc".$anno_modifica}." ".mex("ore</b> nel",$pag)." $anno_modifica.<br>";
} # fine if ($v_modp_attiva_ore_canc != fix_set(${"modp_attiva_ore_canc".$anno_modifica}) or...
if (substr($priv_ins_costi,0,1) != fix_set(${"ins_spese".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_spese\" value=\"".htmlspecialchars(${"ins_spese".$anno_modifica})."\">";
if (${"ins_spese".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire le <b>spese</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_spese".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire le <b>spese</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_costi,0,1) != fix_set(${"ins_spese".$anno_modifica}))
if (substr($priv_ins_costi,1,1) != fix_set(${"ins_entrate".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_entrate\" value=\"".htmlspecialchars(${"ins_entrate".$anno_modifica})."\">";
if (${"ins_entrate".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire le <b>entrate</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_entrate".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire le <b>entrate</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_costi,1,1) != fix_set(${"ins_entrate".$anno_modifica}))
if (substr($priv_ins_costi,2,1) != fix_set(${"sottrai_entrate".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"sottrai_entrate\" value=\"".htmlspecialchars(${"sottrai_entrate".$anno_modifica})."\">";
if (${"sottrai_entrate".$anno_modifica} == "n") echo mex("Le entrate inserite non verranno mai <b>sottratte</b> dal totale delle prenotazioni nel",$pag)." $anno_modifica.<br>";
if (${"sottrai_entrate".$anno_modifica} == "c") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà decidere se <b>sottrarre</b> le entrate dal totale delle prentazioni nel",$pag)." $anno_modifica.<br>";
if (${"sottrai_entrate".$anno_modifica} == "s") echo mex("Le entrate inserite verranno sempre <b>sottratte</b> dal totale delle prenotazioni nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_costi,2,1) != fix_set(${"sottrai_entrate".$anno_modifica}))
if (substr($priv_ins_costi,3,1) != fix_set(${"persona_spese".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"persona_spese\" value=\"".htmlspecialchars(${"persona_spese".$anno_modifica})."\">";
if (${"persona_spese".$anno_modifica} == "n") echo mex("Non verrà inserito nessuno come <b>persona</b> che inserisce le spese o le entrate nel",$pag)." $anno_modifica.<br>";
if (${"persona_spese".$anno_modifica} == "c") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà scegliere chi inserire come <b>persona</b> che inserisce le spese e le entrate nel",$pag)." $anno_modifica.<br>";
if (${"persona_spese".$anno_modifica} == "u") echo mex("Verrà sempre inserito il nome dell'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("come <b>persona</b> che inserisce le spese e le entrate nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_costi,3,1) != fix_set(${"persona_spese".$anno_modifica}))
if (substr($priv_ins_tariffe,0,1) != fix_set(${"mod_tariffe".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_tariffe\" value=\"".htmlspecialchars(${"mod_tariffe".$anno_modifica})."\">";
if (${"mod_tariffe".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modifcare le <b>tariffe a lui permesse</b> nel",$pag)." $anno_modifica.<br>";
if (${"mod_tariffe".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare le <b>tariffe a lui permesse</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,0,1) != fix_set(${"mod_tariffe".$anno_modifica}))
if (fix_set(${"mod_reg1".$anno_modifica}) == "s" and (${"mod_reg1_tipo".$anno_modifica} == "a" or ${"mod_reg1_tipo".$anno_modifica} == "t")) ${"mod_reg1".$anno_modifica} = ${"mod_reg1_tipo".$anno_modifica};
if (substr($priv_ins_tariffe,4,1) != ${"mod_reg1".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_reg1\" value=\"".htmlspecialchars(${"mod_reg1".$anno_modifica})."\">";
if (${"mod_reg1".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modifcare le <b>regole di assegnazione 1</b> nel",$pag)." $anno_modifica.<br>";
if (${"mod_reg1".$anno_modifica} == "a") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare le <b>regole di assegnazione 1</b> nel",$pag)." $anno_modifica (<em>".mex("solo per appartamenti",'unit.php')."</em>).<br>";
if (${"mod_reg1".$anno_modifica} == "t") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare le <b>regole di assegnazione 1</b> nel",$pag)." $anno_modifica (<em>".mex("solo per tariffe",$pag)."</em>).<br>";
if (${"mod_reg1".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare le <b>regole di assegnazione 1</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,4,1) != ${"mod_reg1".$anno_modifica})
if (substr($priv_ins_tariffe,5,1) != fix_set(${"mod_reg2".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_reg2\" value=\"".htmlspecialchars(${"mod_reg2".$anno_modifica})."\">";
if (${"mod_reg2".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modifcare le <b>regole di assegnazione 2 e 3</b> nel",$pag)." $anno_modifica.<br>";
if (${"mod_reg2".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare le <b>regole di assegnazione 2 e 3</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,5,1) != fix_set(${"mod_reg2".$anno_modifica}))
if (fix_set(${"ins_costi_agg".$anno_modifica}) == "s" and ${"ins_costi_agg_gr".$anno_modifica} == "SI") ${"ins_costi_agg".$anno_modifica} = "g";
if (substr($priv_ins_tariffe,1,1) != ${"ins_costi_agg".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"ins_costi_agg\" value=\"".htmlspecialchars(${"ins_costi_agg".$anno_modifica})."\">";
if (${"ins_costi_agg".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà inserire <b>nuovi costi aggiuntivi</b> nel",$pag)." $anno_modifica.<br>";
if (${"ins_costi_agg".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>nuovi costi aggiuntivi</b> il cui utilizzo sarà permesso a lui e agli utenti appartenenti ai suoi stessi gruppi nel",$pag)." $anno_modifica.<br>";
if (${"ins_costi_agg".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà inserire <b>nuovi costi aggiuntivi</b> il cui utilizzo sarà permesso solo a lui nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,1,1) != ${"ins_costi_agg".$anno_modifica})
if (substr($priv_ins_tariffe,2,1) != fix_set(${"mod_costi_agg".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"mod_costi_agg\" value=\"".htmlspecialchars(${"mod_costi_agg".$anno_modifica})."\">";
if (${"mod_costi_agg".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà modifcare i <b>costi aggiuntivi lui permessi</b> nel",$pag)." $anno_modifica.<br>";
if (${"mod_costi_agg".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà modifcare i <b>costi aggiuntivi lui permessi</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,2,1) != fix_set(${"mod_costi_agg".$anno_modifica}))
if (substr($priv_ins_tariffe,3,1) != fix_set(${"canc_costi_agg".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"canc_costi_agg\" value=\"".htmlspecialchars(${"canc_costi_agg".$anno_modifica})."\">";
if (${"canc_costi_agg".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà cancellare i <b>costi aggiuntivi lui permessi</b> nel",$pag)." $anno_modifica.<br>";
if (${"canc_costi_agg".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà cancellare i <b>costi aggiuntivi lui permessi</b> nel",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_ins_tariffe,3,1) != fix_set(${"canc_costi_agg".$anno_modifica}))
if (fix_set(${"vedi_tab_mesi".$anno_modifica}) == "p") {
if (${"vedi_tab_mpren_gr".$anno_modifica} == "SI") ${"vedi_tab_mesi".$anno_modifica} = "q";
if (${"vedi_tab_mapp_gr".$anno_modifica} == "SI") ${"vedi_tab_mesi".$anno_modifica} = "r";
if (${"vedi_tab_mpren_gr".$anno_modifica} == "SI" and ${"vedi_tab_mapp_gr".$anno_modifica} == "SI") ${"vedi_tab_mesi".$anno_modifica} = "g";
} # fine if (fix_set(${"vedi_tab_mesi".$anno_modifica}) == "p")
if (substr($priv_vedi_tab,0,1) != ${"vedi_tab_mesi".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_mesi\" value=\"".htmlspecialchars(${"vedi_tab_mesi".$anno_modifica})."\">";
if (${"vedi_tab_mesi".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere le <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_mesi".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_mesi".$anno_modifica} == "q") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_mesi".$anno_modifica} == "r") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_mesi".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_mesi".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere le <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,0,1) != ${"vedi_tab_mesi".$anno_modifica})
if (${"vedi_tab_mesi".$anno_modifica} == "n" or ${"vedi_tab_mesi".$anno_modifica} == "s") ${"oscura_tab_mesi".$anno_modifica} = substr($priv_vedi_tab,8,1);
if (substr($priv_vedi_tab,8,1) != fix_set(${"oscura_tab_mesi".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"oscura_tab_mesi\" value=\"".htmlspecialchars(${"oscura_tab_mesi".$anno_modifica})."\">";
if (${"oscura_tab_mesi".$anno_modifica} == "o") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("vedrà le prenotazioni non permesse come <em>oscurate</em>",$pag)." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"oscura_tab_mesi".$anno_modifica} == "v") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("vedrà le prenotazioni non permesse come <em>periodi vuoti</em>",$pag)." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
if (${"oscura_tab_mesi".$anno_modifica} == "f") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("vedrà le prenotazioni non permesse come <em>periodi vuoti nel passato ed oscurate nel presente e nel futuro</em>",$pag)." ".mex("nelle <b>tabelle dei mesi</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,8,1) != fix_set(${"oscura_tab_mesi".$anno_modifica}))
if (fix_set(${"vedi_tab_tutte_prenota".$anno_modifica}) == "p" and ${"vedi_tab_tpren_gr".$anno_modifica} == "SI") ${"vedi_tab_tutte_prenota".$anno_modifica} = "g";
if (substr($priv_vedi_tab,1,1) != ${"vedi_tab_tutte_prenota".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_tutte_prenota\" value=\"".htmlspecialchars(${"vedi_tab_tutte_prenota".$anno_modifica})."\">";
if (${"vedi_tab_tutte_prenota".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere la <b>tabella con tutte le prenotazioni</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tutte_prenota".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie prenotazioni nella <b>tabella con tutte le prenotazioni</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tutte_prenota".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi nella <b>tabella con tutte le prenotazioni</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tutte_prenota".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere la <b>tabella con tutte le prenotazioni</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,1,1) != ${"vedi_tab_tutte_prenota".$anno_modifica})
if (fix_set(${"vedi_tab_costi".$anno_modifica}) == "p" and ${"vedi_tab_cos_gr".$anno_modifica} == "SI") ${"vedi_tab_costi".$anno_modifica} = "g";
if (substr($priv_vedi_tab,2,1) != ${"vedi_tab_costi".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_costi\" value=\"".htmlspecialchars(${"vedi_tab_costi".$anno_modifica})."\">";
if (${"vedi_tab_costi".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere le <b>tabelle con le entrate e le uscite</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_costi".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie entrate/uscite nelle <b>tabelle con le entrate e le uscite</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_costi".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le entrate/uscite sue e di utenti appartenenti ai suoi gruppi nelle <b>tabelle con le entrate e le uscite</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_costi".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere le <b>tabelle con le entrate e le uscite</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,3,1) != ${"vedi_tab_costi".$anno_modifica})
if (fix_set(${"vedi_tab_tariffe".$anno_modifica}) == "p" and ${"vedi_tab_tar_gr".$anno_modifica} == "SI") ${"vedi_tab_tariffe".$anno_modifica} = "g";
if (substr($priv_vedi_tab,3,1) != ${"vedi_tab_tariffe".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_tariffe\" value=\"".htmlspecialchars(${"vedi_tab_tariffe".$anno_modifica})."\">";
if (${"vedi_tab_tariffe".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere la <b>tabella con i periodi e le tariffe</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tariffe".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le tariffe a lui consentite nella <b>tabella con i periodi e le tariffe</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tariffe".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le tariffe consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con i periodi e le tariffe</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_tariffe".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere la <b>tabella con i periodi e le tariffe</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,4,1) != ${"vedi_tab_tariffe".$anno_modifica})
#if (${"vedi_tab_regole".$anno_modifica} == "p" and ${"vedi_tab_reg_gr".$anno_modifica} == "SI") ${"vedi_tab_regole".$anno_modifica} = "g";
if (substr($priv_vedi_tab,4,1) != fix_set(${"vedi_tab_regole".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_regole\" value=\"".htmlspecialchars(${"vedi_tab_regole".$anno_modifica})."\">";
if (${"vedi_tab_regole".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere la <b>tabella con le regole di assegnazione</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_regole".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le regole a lui consentite nella <b>tabella con le regole di assegnazione</b> del",$pag)." $anno_modifica.<br>";
#if (${"vedi_tab_regole".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con le regole di assegnazione</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_regole".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere la <b>tabella con le regole di assegnazione</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,5,1) != fix_set(${"vedi_tab_regole".$anno_modifica}))
if (fix_set(${"vedi_tab_appartamenti".$anno_modifica}) == "p" and ${"vedi_tab_app_gr".$anno_modifica} == "SI") ${"vedi_tab_appartamenti".$anno_modifica} = "g";
if (substr($priv_vedi_tab,5,1) != ${"vedi_tab_appartamenti".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_appartamenti\" value=\"".htmlspecialchars(${"vedi_tab_appartamenti".$anno_modifica})."\">";
if (${"vedi_tab_appartamenti".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere la <b>tabella con gli appartamenti</b> del",'unit.php')." $anno_modifica.<br>";
if (${"vedi_tab_appartamenti".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo appartamenti associati a regole a lui consentite nella <b>tabella con gli appartamenti</b> del",'unit.php')." $anno_modifica.<br>";
if (${"vedi_tab_appartamenti".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo appartamenti associati a regole consentite a lui e ad utenti dei suoi gruppi nella <b>tabella con gli appartamenti</b> del",'unit.php')." $anno_modifica.<br>";
if (${"vedi_tab_appartamenti".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere la <b>tabella con gli appartamenti</b> del",'unit.php')." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,5,1) != ${"vedi_tab_appartamenti".$anno_modifica})
if (substr($priv_vedi_tab,7,1) != fix_set(${"vedi_tab_doc".$anno_modifica})) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_doc\" value=\"".htmlspecialchars(${"vedi_tab_doc".$anno_modifica})."\">";
if (${"vedi_tab_doc".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere la <b>tabella con i documenti salvati</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_doc".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo i documenti a lui consentiti nella <b>tabella con i documenti salvati</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_doc".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere la <b>tabella con i documenti salvati</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,7,1) != fix_set(${"vedi_tab_doc".$anno_modifica}))
if (fix_set(${"vedi_tab_stat".$anno_modifica}) == "p") {
if (${"vedi_tab_spren_gr".$anno_modifica} == "SI") ${"vedi_tab_stat".$anno_modifica} = "q";
if (${"vedi_tab_sapp_gr".$anno_modifica} == "SI") ${"vedi_tab_stat".$anno_modifica} = "r";
if (${"vedi_tab_spren_gr".$anno_modifica} == "SI" and ${"vedi_tab_sapp_gr".$anno_modifica} == "SI") ${"vedi_tab_stat".$anno_modifica} = "g";
} # fine if (fix_set(${"vedi_tab_stat".$anno_modifica}) == "p")
if (substr($priv_vedi_tab,6,1) != ${"vedi_tab_stat".$anno_modifica}) {
$dati_da_modificare .= "<input type=\"hidden\" name=\"vedi_tab_stat\" value=\"".htmlspecialchars(${"vedi_tab_stat".$anno_modifica})."\">";
if (${"vedi_tab_stat".$anno_modifica} == "n") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("non potrà vedere le <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_stat".$anno_modifica} == "p") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_stat".$anno_modifica} == "q") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_stat".$anno_modifica} == "r") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le proprie prenotazioni e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_stat".$anno_modifica} == "g") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere solo le prenotazioni sue e di utenti appartenenti ai suoi gruppi e gli appartamenti consentiti a lui e ad utenti dei suoi gruppi dalle regole di assegnazione",'unit.php')." ".mex("nelle <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
if (${"vedi_tab_stat".$anno_modifica} == "s") echo mex("L'utente",$pag)." <i>$nome_utente_privilegi</i> ".mex("potrà vedere le <b>statistiche</b> del",$pag)." $anno_modifica.<br>";
} # fine if (substr($priv_vedi_tab,6,1) != ${"vedi_tab_stat".$anno_modifica})
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php#anno$anno_modifica\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"modifica_privilegi_anno\" value=\"$modifica_privilegi_anno\">
$dati_da_modificare
<input class=\"sbutton\" type=\"submit\" name=\"continua\" value=\"".mex("Continua",$pag)."\">
</div></form>";
} # fine if (empty($continua))
else {
$nuove_regole1_consentite = $regole1_consentite;
if (isset($usa_regola1) and ($usa_regola1 == "n" or $usa_regola1 == "s")) $nuove_regole1_consentite = $usa_regola1.substr($nuove_regole1_consentite,1);
if (isset($avvisa_regola1) and ($avvisa_regola1 == "s" or $avvisa_regola1 == "n" or $avvisa_regola1 == "m" or $avvisa_regola1 == "f")) $nuove_regole1_consentite = substr($nuove_regole1_consentite,0,1).$avvisa_regola1.substr($nuove_regole1_consentite,2);
if (!empty($cambia_motivazioni_reg1)) $nuove_regole1_consentite = substr($nuove_regole1_consentite,0,3).htmlspecialchars($nuove_motivazioni_reg1);
if ($nuove_regole1_consentite != $regole1_consentite) esegui_query("update $tableprivilegi set regole1_consentite = '".aggslashdb($nuove_regole1_consentite)."' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuove_tariffe_consentite = $tariffe_consentite;
if (isset($seleziona_tariffe) and ($seleziona_tariffe == "n" or $seleziona_tariffe == "s")) $nuove_tariffe_consentite = $seleziona_tariffe.substr($nuove_tariffe_consentite,1);
if (!empty($cambia_tariffe_sel) and preg_replace("/[0-9]+(,[0-9]+)*/","",$nuove_tariffe_sel) == "") $nuove_tariffe_consentite = substr($nuove_tariffe_consentite,0,2).$nuove_tariffe_sel;
if ($nuove_tariffe_consentite != $tariffe_consentite) esegui_query("update $tableprivilegi set tariffe_consentite = '$nuove_tariffe_consentite' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_costi_agg_consentiti = $costi_agg_consentiti;
if (isset($seleziona_costi_agg) and ($seleziona_costi_agg == "n" or $seleziona_costi_agg == "s")) $nuovi_costi_agg_consentiti = $seleziona_costi_agg.substr($nuovi_costi_agg_consentiti,1);
if (!empty($cambia_costi_agg_sel) and preg_replace("/[0-9]+(,[0-9]+)*/","",$nuovi_costi_agg_sel) == "") $nuovi_costi_agg_consentiti = substr($nuovi_costi_agg_consentiti,0,2).$nuovi_costi_agg_sel;
if ($nuovi_costi_agg_consentiti != $costi_agg_consentiti) esegui_query("update $tableprivilegi set costi_agg_consentiti = '$nuovi_costi_agg_consentiti' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_contratti_consentiti = $contratti_consentiti;
if (isset($seleziona_contratti) and ($seleziona_contratti == "n" or $seleziona_contratti == "s")) $nuovi_contratti_consentiti = $seleziona_contratti.substr($nuovi_contratti_consentiti,1);
if (isset($cancella_contr) and ($cancella_contr == "n" or $cancella_contr == "s")) $nuovi_contratti_consentiti = substr($nuovi_contratti_consentiti,0,1).$cancella_contr.substr($nuovi_contratti_consentiti,2);
if (!empty($cambia_contratti_sel) and preg_replace("/[0-9]+(,[0-9]+)*/","",$nuovi_contratti_sel) == "") $nuovi_contratti_consentiti = substr($nuovi_contratti_consentiti,0,3).$nuovi_contratti_sel;
if ($nuovi_contratti_consentiti != $contratti_consentiti) esegui_query("update $tableprivilegi set contratti_consentiti = '$nuovi_contratti_consentiti' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_priv_ins_prenota = $priv_ins_prenota;
if (isset($inserisci_prenotazioni) and ($inserisci_prenotazioni == "n" or $inserisci_prenotazioni == "s")) $nuovi_priv_ins_prenota = $inserisci_prenotazioni.substr($nuovi_priv_ins_prenota,1);
if (isset($ins_assegnazione_app) and ($ins_assegnazione_app == "n" or $ins_assegnazione_app == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,1).$ins_assegnazione_app.substr($nuovi_priv_ins_prenota,2);
if (isset($ins_conferma_prenota) and ($ins_conferma_prenota == "n" or $ins_conferma_prenota == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,2).$ins_conferma_prenota.substr($nuovi_priv_ins_prenota,3);
if (isset($ins_sconto) and ($ins_sconto == "n" or $ins_sconto == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,3).$ins_sconto.substr($nuovi_priv_ins_prenota,4);
if (isset($ins_caparra) and ($ins_caparra == "n" or $ins_caparra == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,4).$ins_caparra.substr($nuovi_priv_ins_prenota,5);
if (isset($ins_costi_agg_prenota) and ($ins_costi_agg_prenota == "n" or $ins_costi_agg_prenota == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,5).$ins_costi_agg_prenota.substr($nuovi_priv_ins_prenota,6);
if (isset($ins_commento) and ($ins_commento == "n" or $ins_commento == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,6).$ins_commento.substr($nuovi_priv_ins_prenota,7);
if (isset($ins_num_persone) and ($ins_num_persone == "n" or $ins_num_persone == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,7).$ins_num_persone.substr($nuovi_priv_ins_prenota,8);
if (isset($ins_passato) and ($ins_passato == "n" or $ins_passato == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,8).$ins_passato.substr($nuovi_priv_ins_prenota,9);
if (isset($ins_multiple) and ($ins_multiple == "n" or $ins_multiple == "m" or $ins_multiple == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,9).$ins_multiple.substr($nuovi_priv_ins_prenota,10);
if (isset($ins_checkin) and ($ins_checkin == "n" or $ins_checkin == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,10).$ins_checkin.substr($nuovi_priv_ins_prenota,11);
if (isset($ins_origine_prenota) and ($ins_origine_prenota == "n" or $ins_origine_prenota == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,11).$ins_origine_prenota.substr($nuovi_priv_ins_prenota,12);
if (isset($ins_comm_pers) and ($ins_comm_pers == "n" or $ins_comm_pers == "s")) $nuovi_priv_ins_prenota = substr($nuovi_priv_ins_prenota,0,12).$ins_comm_pers;
if ($nuovi_priv_ins_prenota != $priv_ins_prenota) esegui_query("update $tableprivilegi set priv_ins_prenota = '$nuovi_priv_ins_prenota' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_priv_mod_prenota = $priv_mod_prenota;
if (isset($modp_prenota) and ($modp_prenota == "n" or $modp_prenota == "p" or $modp_prenota == "g" or $modp_prenota == "s")) $nuovi_priv_mod_prenota = $modp_prenota.substr($nuovi_priv_mod_prenota,1);
if (isset($modp_date_prenota) and ($modp_date_prenota == "n" or $modp_date_prenota == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,1).$modp_date_prenota.substr($nuovi_priv_mod_prenota,2);
if (isset($modp_app_prenota) and ($modp_app_prenota == "n" or $modp_app_prenota == "s" or $modp_app_prenota == "a")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,2).$modp_app_prenota.substr($nuovi_priv_mod_prenota,3);
if (isset($modp_tariffa) and ($modp_tariffa == "n" or $modp_tariffa == "p" or $modp_tariffa == "v" or $modp_tariffa == "r" or $modp_tariffa == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,3).$modp_tariffa.substr($nuovi_priv_mod_prenota,4);
if (isset($modp_num_persone) and ($modp_num_persone == "n" or $modp_num_persone == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,4).$modp_num_persone.substr($nuovi_priv_mod_prenota,5);
if (!empty($modp_commento) and ((isset($modp_vedi_comm) and $modp_vedi_comm == "n") or ((!isset($modp_vedi_comm) or $modp_vedi_comm != "s") and substr($priv_mod_prenota,25,1) == "n"))) $modp_commento = "n";
if (isset($modp_commento) and ($modp_commento == "n" or $modp_commento == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,5).$modp_commento.substr($nuovi_priv_mod_prenota,6);
if (isset($modp_sconto) and ($modp_sconto == "n" or $modp_sconto == "v" or $modp_sconto == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,6).$modp_sconto.substr($nuovi_priv_mod_prenota,7);
if (isset($modp_caparra) and ($modp_caparra == "n" or $modp_caparra == "v" or $modp_caparra == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,7).$modp_caparra.substr($nuovi_priv_mod_prenota,8);
if (isset($modp_costi_agg) and ($modp_costi_agg == "n" or $modp_costi_agg == "p" or $modp_costi_agg == "v" or $modp_costi_agg == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,8).$modp_costi_agg.substr($nuovi_priv_mod_prenota,9);
if (isset($modp_ut_ins) and ($modp_ut_ins == "n" or $modp_ut_ins == "v" or $modp_ut_ins == "g" or $modp_ut_ins == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,9).$modp_ut_ins.substr($nuovi_priv_mod_prenota,10);
if (isset($modp_pagato) and ($modp_pagato == "n" or $modp_pagato == "v" or $modp_pagato == "c" or $modp_pagato == "i" or $modp_pagato == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,10).$modp_pagato.substr($nuovi_priv_mod_prenota,11);
if (isset($modp_gia_iniziate) and ($modp_gia_iniziate == "n" or $modp_gia_iniziate == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,11).$modp_gia_iniziate.substr($nuovi_priv_mod_prenota,12);
if (isset($modp_attiva_ore_mod) and ($modp_attiva_ore_mod == "n")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,12)."000".substr($nuovi_priv_mod_prenota,15);
if (isset($modp_attiva_ore_mod) and ($modp_attiva_ore_mod == "s")) {
if (strlen($modp_num_ore_mod) == 1) $modp_num_ore_mod = "00".$modp_num_ore_mod;
if (strlen($modp_num_ore_mod) == 2) $modp_num_ore_mod = "0".$modp_num_ore_mod;
if (strlen($modp_num_ore_mod) != 3) $modp_num_ore_mod = "000";
$nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,12).$modp_num_ore_mod.substr($nuovi_priv_mod_prenota,15);
} # fine if (isset($modp_attiva_ore_mod) and ($modp_attiva_ore_mod == "s"))
if (isset($modp_attiva_ore_canc) and ($modp_attiva_ore_canc == "n")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,15)."000".substr($nuovi_priv_mod_prenota,18);
if (isset($modp_attiva_ore_canc) and ($modp_attiva_ore_canc == "s")) {
if (strlen($modp_num_ore_canc) == 1) $modp_num_ore_canc = "00".$modp_num_ore_canc;
if (strlen($modp_num_ore_canc) == 2) $modp_num_ore_canc = "0".$modp_num_ore_canc;
if (strlen($modp_num_ore_canc) != 3) $modp_num_ore_canc = "000";
$nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,15).$modp_num_ore_canc.substr($nuovi_priv_mod_prenota,18);
} # fine if (isset($modp_attiva_ore_canc) and ($modp_attiva_ore_canc == "s"))
if (isset($modp_canc) and ($modp_canc == "n" or $modp_canc == "f" or $modp_canc == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,18).$modp_canc.substr($nuovi_priv_mod_prenota,19);
if (isset($modp_canc_dopo_conf) and ($modp_canc_dopo_conf == "n" or $modp_canc_dopo_conf == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,19).$modp_canc_dopo_conf.substr($nuovi_priv_mod_prenota,20);
if (isset($modp_checkin) and ($modp_checkin == "n" or $modp_checkin == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,20).$modp_checkin.substr($nuovi_priv_mod_prenota,21);
if (isset($modp_codice) and ($modp_codice == "n" or $modp_codice == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,21).$modp_codice.substr($nuovi_priv_mod_prenota,22);
if (isset($modp_cliente) and ($modp_cliente == "n" or $modp_cliente == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,22).$modp_cliente.substr($nuovi_priv_mod_prenota,23);
if (isset($modp_pren_comp) and ($modp_pren_comp == "n" or $modp_pren_comp == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,23).$modp_pren_comp.substr($nuovi_priv_mod_prenota,24);
if (isset($modp_origine_prenota) and ($modp_origine_prenota == "n" or $modp_origine_prenota == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,24).$modp_origine_prenota.substr($nuovi_priv_mod_prenota,25);
if (isset($modp_vedi_comm) and ($modp_vedi_comm == "n" or $modp_vedi_comm == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,25).$modp_vedi_comm.substr($nuovi_priv_mod_prenota,26);
if (isset($modp_comm_pers) and ($modp_comm_pers == "n" or $modp_comm_pers == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,26).$modp_comm_pers.substr($nuovi_priv_mod_prenota,27);
if (isset($modp_canc_perm) and ($modp_canc_perm == "n" or $modp_canc_perm == "c" or $modp_canc_perm == "s")) $nuovi_priv_mod_prenota = substr($nuovi_priv_mod_prenota,0,27).$modp_canc_perm;
if ($nuovi_priv_mod_prenota != $priv_mod_prenota) esegui_query("update $tableprivilegi set priv_mod_prenota = '$nuovi_priv_mod_prenota' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
if (isset($modp_cassa_pagamenti) and $modp_cassa_pagamenti != $cassa_pagamenti) esegui_query("update $tableprivilegi set cassa_pagamenti = '".aggslashdb($modp_cassa_pagamenti)."' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_priv_ins_costi = $priv_ins_costi;
if (isset($ins_spese) and ($ins_spese == "n" or $ins_spese == "s")) $nuovi_priv_ins_costi = $ins_spese.substr($nuovi_priv_ins_costi,1);
if (isset($ins_entrate) and ($ins_entrate == "n" or $ins_entrate == "s")) $nuovi_priv_ins_costi = substr($nuovi_priv_ins_costi,0,1).$ins_entrate.substr($nuovi_priv_ins_costi,2);
if (isset($sottrai_entrate) and ($sottrai_entrate == "n" or $sottrai_entrate == "c" or $sottrai_entrate == "s")) $nuovi_priv_ins_costi = substr($nuovi_priv_ins_costi,0,2).$sottrai_entrate.substr($nuovi_priv_ins_costi,3);
if (isset($persona_spese) and ($persona_spese == "n" or $persona_spese == "u" or $persona_spese == "c")) $nuovi_priv_ins_costi = substr($nuovi_priv_ins_costi,0,3).$persona_spese;
if ($nuovi_priv_ins_costi != $priv_ins_costi) esegui_query("update $tableprivilegi set priv_ins_costi = '$nuovi_priv_ins_costi' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_priv_ins_tariffe = $priv_ins_tariffe;
if (isset($mod_tariffe) and ($mod_tariffe == "n" or $mod_tariffe == "s")) $nuovi_priv_ins_tariffe = $mod_tariffe.substr($nuovi_priv_ins_tariffe,1);
if (isset($ins_costi_agg) and ($ins_costi_agg == "n" or $ins_costi_agg == "g" or $ins_costi_agg == "s")) $nuovi_priv_ins_tariffe = substr($nuovi_priv_ins_tariffe,0,1).$ins_costi_agg.substr($nuovi_priv_ins_tariffe,2);
if (isset($mod_costi_agg) and ($mod_costi_agg == "n" or $mod_costi_agg == "s")) $nuovi_priv_ins_tariffe = substr($nuovi_priv_ins_tariffe,0,2).$mod_costi_agg.substr($nuovi_priv_ins_tariffe,3);
if (isset($canc_costi_agg) and ($canc_costi_agg == "n" or $canc_costi_agg == "s")) $nuovi_priv_ins_tariffe = substr($nuovi_priv_ins_tariffe,0,3).$canc_costi_agg.substr($nuovi_priv_ins_tariffe,4);
if (isset($mod_reg1) and ($mod_reg1 == "n" or $mod_reg1 == "a" or $mod_reg1 == "t" or $mod_reg1 == "s")) $nuovi_priv_ins_tariffe = substr($nuovi_priv_ins_tariffe,0,4).$mod_reg1.substr($nuovi_priv_ins_tariffe,5);
if (isset($mod_reg2) and ($mod_reg2 == "n" or $mod_reg2 == "s")) $nuovi_priv_ins_tariffe = substr($nuovi_priv_ins_tariffe,0,5).$mod_reg2.substr($nuovi_priv_ins_tariffe,6);
if ($nuovi_priv_ins_tariffe != $priv_ins_tariffe) esegui_query("update $tableprivilegi set priv_ins_tariffe = '$nuovi_priv_ins_tariffe' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$nuovi_priv_vedi_tab = $priv_vedi_tab;
if (isset($vedi_tab_mesi) and ($vedi_tab_mesi == "n" or $vedi_tab_mesi == "p" or $vedi_tab_mesi == "q" or $vedi_tab_mesi == "r" or $vedi_tab_mesi == "g" or $vedi_tab_mesi == "s")) $nuovi_priv_vedi_tab = $vedi_tab_mesi.substr($nuovi_priv_vedi_tab,1);
if (isset($vedi_tab_tutte_prenota) and ($vedi_tab_tutte_prenota == "n" or $vedi_tab_tutte_prenota == "p" or $vedi_tab_tutte_prenota == "g" or $vedi_tab_tutte_prenota == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,1).$vedi_tab_tutte_prenota.substr($nuovi_priv_vedi_tab,2);
if (isset($vedi_tab_costi) and ($vedi_tab_costi == "n" or $vedi_tab_costi == "p" or $vedi_tab_costi == "g" or $vedi_tab_costi == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,2).$vedi_tab_costi.substr($nuovi_priv_vedi_tab,3);
if (isset($vedi_tab_tariffe) and ($vedi_tab_tariffe == "n" or $vedi_tab_tariffe == "p" or $vedi_tab_tariffe == "g" or $vedi_tab_tariffe == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,3).$vedi_tab_tariffe.substr($nuovi_priv_vedi_tab,4);
if (isset($vedi_tab_regole) and ($vedi_tab_regole == "n" or $vedi_tab_regole == "p" or $vedi_tab_regole == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,4).$vedi_tab_regole.substr($nuovi_priv_vedi_tab,5);
if (isset($vedi_tab_appartamenti) and ($vedi_tab_appartamenti == "n" or $vedi_tab_appartamenti == "p" or $vedi_tab_appartamenti == "g" or $vedi_tab_appartamenti == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,5).$vedi_tab_appartamenti.substr($nuovi_priv_vedi_tab,6);
if (isset($vedi_tab_stat) and ($vedi_tab_stat == "n" or $vedi_tab_stat == "p" or $vedi_tab_stat == "q" or $vedi_tab_stat == "r" or $vedi_tab_stat == "g" or $vedi_tab_stat == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,6).$vedi_tab_stat.substr($nuovi_priv_vedi_tab,7);
if (isset($vedi_tab_doc) and ($vedi_tab_doc == "n" or $vedi_tab_doc == "p" or $vedi_tab_doc == "s")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,7).$vedi_tab_doc.substr($nuovi_priv_vedi_tab,8);
if (isset($oscura_tab_mesi) and ($oscura_tab_mesi == "o" or $oscura_tab_mesi == "v" or $oscura_tab_mesi == "f")) $nuovi_priv_vedi_tab = substr($nuovi_priv_vedi_tab,0,8).$oscura_tab_mesi.substr($nuovi_priv_vedi_tab,9);
if ($nuovi_priv_vedi_tab != $priv_vedi_tab) esegui_query("update $tableprivilegi set priv_vedi_tab = '$nuovi_priv_vedi_tab' where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
$privilegi_anno[$anno_modifica] = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '$anno_modifica'");
} # fine else if (empty($continua))
} # fine if ($modificare != "NO")
else $mostra_form_iniziale = "NO";
} # fine if ($modifica_privilegi_anno)


if (!empty($attiva_anno)) {
if (controlla_anno($attiva_anno) == "SI" and $anno_esistente[$attiva_anno] == "SI" and numlin_query($privilegi_anno[$attiva_anno]) == 0) {
esegui_query("insert into $tableprivilegi (idutente,anno,regole1_consentite,tariffe_consentite,costi_agg_consentiti,contratti_consentiti,priv_ins_prenota,priv_mod_prenota,priv_ins_costi,priv_vedi_tab,priv_ins_tariffe) values ('$id_utente_privilegi','$attiva_anno','nm,','n,','n,','ns,','nnnnnnnnnsnnn','nnnnnnnnnnnn000000nnnnnnnsns','nnnn','nnnnnnnno','nnnnnn')");
$privilegi_anno[$attiva_anno] = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '$attiva_anno'");
include("./includes/funzioni_menu.php");
$tipo_periodi_cambia = esegui_query("select * from $tableanni where idanni = '$attiva_anno'");
$tipo_periodi_cambia = risul_query($tipo_periodi_cambia,0,'tipo_periodi');
include(C_DATI_PATH."/lingua.php");
$lingua_mex = $lingua[$id_utente_privilegi];
crea_menu_date(C_DATI_PATH."/selectperiodi$attiva_anno.1.php",C_DATI_PATH."/selectperiodi$attiva_anno.$id_utente_privilegi.php",$tipo_periodi_cambia);
crea_menu_date(C_DATI_PATH."/selperiodimenu$attiva_anno.1.php",C_DATI_PATH."/selperiodimenu$attiva_anno.$id_utente_privilegi.php",$tipo_periodi_cambia);
$lingua_mex = $lingua[$id_utente];
$giorno_vedi_ini_sett = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$attiva_anno' and idutente = '1'");
if (numlin_query($giorno_vedi_ini_sett) == 1) {
$giorno_vedi_ini_sett = risul_query($giorno_vedi_ini_sett,0,'valpersonalizza_num');
esegui_query("insert into $tablepersonalizza (idpersonalizza,idutente,valpersonalizza_num) values ('giorno_vedi_ini_sett$attiva_anno','$id_utente_privilegi','$giorno_vedi_ini_sett')");
} # fine if (numlin_query($giorno_vedi_ini_sett) == 1)
} # fine if (controlla_anno($attiva_anno) == "SI" and ...
} # fine if (!empty($attiva_anno))


if (!empty($disattiva_anno)) {
if (controlla_anno($disattiva_anno) == "SI" and $anno_esistente[$disattiva_anno] == "SI" and numlin_query($privilegi_anno[$disattiva_anno]) != 0) {
esegui_query("delete from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '$disattiva_anno'");
$privilegi_anno[$disattiva_anno] = esegui_query("select * from $tableprivilegi where idutente = '$id_utente_privilegi' and anno = '$disattiva_anno'");
if (@is_file(C_DATI_PATH."/selectperiodi$disattiva_anno.$id_utente_privilegi.php")) unlink(C_DATI_PATH."/selectperiodi$disattiva_anno.$id_utente_privilegi.php");
if (@is_file(C_DATI_PATH."/selperiodimenu$disattiva_anno.$id_utente_privilegi.php")) unlink(C_DATI_PATH."/selperiodimenu$disattiva_anno.$id_utente_privilegi.php");
esegui_query("delete from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$disattiva_anno' and idutente = '$id_utente_privilegi'");
} # fine if (controlla_anno($disattiva_anno) == "SI" and ...
} # fine if (!empty($disattiva_anno))


if (isset($mostra_form_iniziale) and $mostra_form_iniziale == "NO") {
echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form></div><br>";
} # fine if(isset($mostra_form_iniziale) and $mostra_form_iniziale == "NO")


} # fine if (numlin_query($utente_privilegi))
else $mostra_form_iniziale = "NO";
unlock_tabelle($tabelle_lock);



if (!isset($mostra_form_iniziale) or $mostra_form_iniziale != "NO") {


echo "<h4>".mex("Privilegi dell'utente",$pag)." <b>$nome_utente_privilegi</b></h4><br>";

function rowbgcolor () {
global $rowbgcolor,$t2row1color,$t2row2color;
if ($rowbgcolor == $t2row2color) $rowbgcolor = $t2row1color;
else $rowbgcolor = $t2row2color;
return $rowbgcolor;
} # fine function rowbgcolor

echo "<hr style=\"width: 90%\">
<br><div><div style=\"text-align: center;\">".mex("Privilegi <b>globali</b>",$pag)."</div>
<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"modifica_privilegi_globali\" value=\"SI\">
<div class=\"floatrbut\"><input class=\"rbutton\" type=\"submit\" value=\"".mex("Modifica i privilegi globali",$pag)."\"></div>";
$priv_mod_pers = risul_query($privilegi_globali,0,'priv_mod_pers');
$priv_ins_clienti = risul_query($privilegi_globali,0,'priv_ins_clienti');
$prefisso_clienti = risul_query($privilegi_globali,0,'prefisso_clienti');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Modifica delle proprie personalizzazioni",$pag).":
 <label><input type=\"radio\" name=\"modifica_pers\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_pers\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
$sel_TU = "";
if (substr($priv_mod_pers,7,1) == "s" or substr($priv_mod_pers,7,1) == "g" or substr($priv_mod_pers,7,1) == "t") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,7,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_pers,7,1) == "g") $sel_GR = " selected";
else {
if (substr($priv_mod_pers,7,1) == "t") $sel_TU = " selected";
else $sel_PR = " selected";
} # fine if (substr($priv_mod_pers,7,1) == "g")
echo "<table><tr><td style=\"width: 30px;\"></td><td>".mex("Modifica delle valute",$pag).":
 <label><input id=\"prsvas\" type=\"radio\" name=\"modpers_valute\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI
 </label><select name=\"modpers_valute_altri\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('prsvas').checked='1';\">
 <option value=\"\"$sel_PR>".mex("solo per lui",$pag)."</option>
 <option value=\"g\"$sel_GR>".mex("anche per i suoi gruppi",$pag)."</option>
 <option value=\"t\"$sel_TU>".mex("anche per tutti gli utenti",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"modpers_valute\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
</td></tr></table>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
$sel_TU = "";
if (substr($priv_mod_pers,6,1) == "s" or substr($priv_mod_pers,6,1) == "g" or substr($priv_mod_pers,6,1) == "t") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,6,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_pers,6,1) == "g") $sel_GR = " selected";
else {
if (substr($priv_mod_pers,6,1) == "t") $sel_TU = " selected";
else $sel_PR = " selected";
} # fine if (substr($priv_mod_pers,6,1) == "g")
echo "<table><tr><td style=\"width: 30px;\"></td><td>".mex("Modifica delle tipologie di persone",$pag).":
 <label><input id=\"prstps\" type=\"radio\" name=\"modpers_cat_pers\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI
 </label><select name=\"modpers_cat_pers_altri\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('prstps').checked='1';\">
 <option value=\"\"$sel_PR>".mex("solo per lui",$pag)."</option>
 <option value=\"g\"$sel_GR>".mex("anche per i suoi gruppi",$pag)."</option>
 <option value=\"t\"$sel_TU>".mex("anche per tutti gli utenti",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"modpers_cat_pers\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
</td></tr></table>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,10,1) == "p") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,10,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Modifica delle password",$pag).":
 <label><input type=\"radio\" name=\"modifica_pass\" value=\"p\"$checked_SI>$b_SI".mex("Si",$pag).", ".mex("solo la propria",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_pass\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".ucfirst(mex("creazione, download e cancellazione del backup completo",$pag)).":
 <label><input type=\"radio\" name=\"crea_backup\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"crea_backup\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
if (substr($priv_mod_pers,8,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,8,1) == "c") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_mod_pers,8,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Creazione e modifica delle pagine per il sito web",$pag).":
 <label><input type=\"radio\" name=\"crea_pagineweb\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"crea_pagineweb\" value=\"c\"$checked_PR>$b_PR".mex("Solo con i costi aggiuntivi",$pag)."$b_slash_PR</label>
 <label><input type=\"radio\" name=\"crea_pagineweb\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Creazione e modifica delle interconnessioni",$pag).":
 <label><input type=\"radio\" name=\"crea_interconnessioni\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"crea_interconnessioni\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Gestione della password per le carte di credito",$pag).":
 <label><input type=\"radio\" name=\"gest_pass_cc\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"gest_pass_cc\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Modifica dei documenti",$pag).":
 <label><input type=\"radio\" name=\"modifica_doc\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_doc\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,9,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,9,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table><tr><td style=\"width: 30px;\"></td><td>".mex("Modifica dei documenti in formato HTML",$pag).":
 <label><input type=\"radio\" name=\"modifica_doc_html\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_doc_html\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_pers,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_pers,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Modifica dei documenti come API",$pag).":
 <label><input type=\"radio\" name=\"modifica_doc_api\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_doc_api\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
</td></tr></table><br>";

$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_clienti,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_clienti,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Inserimento di nuovi clienti",$pag).":
 <label><input type=\"radio\" name=\"inserimento_clienti\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"inserimento_clienti\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_ins_clienti,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_clienti,2,1) == "p" or substr($priv_ins_clienti,2,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_ins_clienti,2,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_ins_clienti,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere ed utilizzare nelle prenotazioni i clienti già inseriti",$pag).":
 <label><input type=\"radio\" name=\"vedi_clienti\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_clienti\" value=\"p\"$checked_PR>$b_PR".mex("Solo",$pag)."$b_slash_PR
 </label><select name=\"vedi_clienti_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("i propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_clienti\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_ins_clienti,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_clienti,1,1) == "p" or substr($priv_ins_clienti,1,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_ins_clienti,1,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_ins_clienti,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table><tr><td style=\"width: 30px;\"></td><td>".mex("Modifica e cancellazione dei clienti già inseriti",$pag).":
 <label><input type=\"radio\" name=\"modifica_clienti\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modifica_clienti\" value=\"p\"$checked_PR>$b_PR".mex("Solo",$pag)."$b_slash_PR
 </label><select name=\"modifica_clienti_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("dei propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"modifica_clienti\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_clienti,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_clienti,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere email, telefoni e fax dei clienti",$pag).":
 <label><input type=\"radio\" name=\"vedi_telefoni\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_telefoni\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_clienti,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_clienti,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere l'indirizzo dei clienti",$pag).":
 <label><input type=\"radio\" name=\"vedi_indirizzo\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_indirizzo\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>";
echo "</td></tr></table>";

$prefisso_clienti = explode(",",$prefisso_clienti);
$checked_SUF = "";
$b_SUF = "";
$b_slash_SUF = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PRE = "";
$b_PRE = "";
$b_slash_PRE = "";
if (substr($prefisso_clienti[0],0,1) == "p") { $checked_PRE = " checked"; $b_PRE = "<b>"; $b_slash_PRE = "</b>"; }
if (substr($prefisso_clienti[0],0,1) == "s") { $checked_SUF = " checked"; $b_SUF = "<b>"; $b_slash_SUF = "</b>"; }
if (substr($prefisso_clienti[0],0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Inserire in tutti i cognomi dei clienti inseriti da questo utente",$pag).":
 <label><input type=\"radio\" name=\"tipo_prefisso_clienti\" value=\"p\"$checked_PRE>$b_PRE".mex("Un prefisso",$pag)."$b_slash_PRE</label>
 <label><input type=\"radio\" name=\"tipo_prefisso_clienti\" value=\"s\"$checked_SUF>$b_SUF".mex("Un suffisso",$pag)."$b_slash_SUF</label>
 <label><input type=\"radio\" name=\"tipo_prefisso_clienti\" value=\"n\"$checked_NO>$b_NO".mex("Niente",$pag)."$b_slash_NO</label><br>
".mex("Testo del prefisso/suffisso dei clienti",$pag).": <input type=\"text\" name=\"testo_prefisso_clienti\" size=\"15\" value=\"".$prefisso_clienti[1]."\"><br><br>";

$priv_messaggi = risul_query($privilegi_globali,0,'priv_messaggi');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_messaggi,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_messaggi,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere i messaggi ricevuti",$pag).":
 <label><input type=\"radio\" name=\"vedi_messaggi\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_messaggi\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_messaggi,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_messaggi,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width: 30px;\"></td><td>".mex("Possibilità di mandare messaggi",$pag).":
 <label><input type=\"radio\" name=\"ins_messaggi\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_messaggi\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
</td></tr></table><br>";

$casse_consentite = (string) risul_query($privilegi_globali,0,'casse_consentite');
$vett_casse_consentite = explode(",",$casse_consentite);
unset($cassa_selezionata);
for ($num1 = 1 ; $num1 < count($vett_casse_consentite) ; $num1++) $cassa_selezionata[$vett_casse_consentite[$num1]] = "SI";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($casse_consentite,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($casse_consentite,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"seleziona_casse\" value=\"n\"$checked_NO>$b_NO
 ".mex("Permetti l'uso di tutte le <i>casse</i>",$pag)."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"seleziona_casse\" value=\"s\"$checked_SI>$b_SI
 ".mex("Permetti l'uso solo delle <i>casse</i> selezionate",$pag)."$b_slash_SI</label>:<br>
<div class=\"tab_cont\" style=\"text-align: center;\"><table style=\"margin-left: auto; margin-right: auto;\" border=1 cellspacing=1 cellpadding=0>";
$num_colonna = 1;
$casse = esegui_query("select * from $tablecasse order by idcasse ");
$num_casse = numlin_query($casse);
$lista_casse_passa = "";
for ($num1 = 0 ; $num1 < $num_casse ; $num1++) {
$id_cassa = risul_query($casse,$num1,'idcasse');
$lista_casse_passa .= ",$id_cassa";
if ($id_cassa == 1)  $nome_cassa = mex("cassa principale",$pag);
else $nome_cassa = risul_query($casse,$num1,'nome_cassa');
if ($num_colonna == 1) echo "<tr>";
if (isset($cassa_selezionata[$id_cassa]) and $cassa_selezionata[$id_cassa] == "SI") { $checked = " checked"; $tag_b = "<b>"; $fine_tag_b ="</b>"; }
else { $checked = ""; $tag_b = ""; $fine_tag_b =""; }
echo "<td align=\"center\"><label><input type=\"checkbox\" name=\"cassa_sel".$id_cassa."\" value=\"s\"$checked>
$tag_b$nome_cassa$fine_tag_b</label>&nbsp;</td>";
if ($num_colonna == 5) {
echo "</tr>";
$num_colonna = 1;
} # fine if ($num_colonna == 5)
else $num_colonna++;
} # fine for $num1
if ($num_colonna != 1) {
for ($num1 = $num_colonna ; $num1 <= 5 ; $num1++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($num_colonna != 1)
echo "</table></div><input type=\"hidden\" name=\"lista_casse_passa\" value=\"$lista_casse_passa\"><br>";

$priv_inventario = risul_query($privilegi_globali,0,'priv_inventario');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,0,1) == "p" or substr($priv_inventario,0,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,0,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere i <i>beni dell'inventario</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_beni_inv\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_beni_inv\" value=\"p\"$checked_PR>$b_PR".mex("Solo",$pag)."$b_slash_PR
 </label><select name=\"vedi_beni_inv_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("i propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_beni_inv\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_inventario,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width: 30px;\"></td><td>".mex("Possibilità di inserire nuovi beni nell'inventario",$pag).":
 <label><input type=\"radio\" name=\"ins_beni_inv\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_beni_inv\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
</td></tr></table>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,2,1) == "p" or substr($priv_inventario,2,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,2,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere l'<i>inventario dei magazzini</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_inv_mag\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_inv_mag\" value=\"p\"$checked_PR>$b_PR".mex("Solo",$pag)."$b_slash_PR
 </label><select name=\"vedi_inv_mag_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("dei propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_inv_mag\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_inventario,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width: 30px;\"></td><td>".mex("Possibilità di inserire nuovi magazzini",$pag).":
 <label><input type=\"radio\" name=\"ins_mag\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_mag\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,4,1) == "p" or substr($priv_inventario,4,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,4,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di aggiungere e cancellare beni",$pag).":
 <label><input type=\"radio\" name=\"ins_beni_in_mag\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_beni_in_mag\" value=\"p\"$checked_PR>$b_PR".mex("Solo in",$pag)."$b_slash_PR
 </label><select name=\"ins_beni_in_mag_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("magazzini propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("magazzini dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"ins_beni_in_mag\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,5,1) == "p" or substr($priv_inventario,5,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,5,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di modificare le quantità dei beni",$pag).":
 <label><input type=\"radio\" name=\"mod_beni_in_mag\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"mod_beni_in_mag\" value=\"p\"$checked_PR>$b_PR".mex("Solo in",$pag)."$b_slash_PR
 </label><select name=\"mod_beni_in_mag_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("magazzini propri",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("magazzini dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"mod_beni_in_mag\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
echo "</td></tr></table>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,6,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,6,1) == "p" or substr($priv_inventario,6,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,6,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,6,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di vedere l'<i>inventario degli appartamenti</i>",'unit.php').":
 <label><input type=\"radio\" name=\"vedi_inv_app\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_inv_app\" value=\"p\"$checked_PR>$b_PR".mex("Solo appartamenti associati a regole consentite",'unit.php')."$b_slash_PR
 </label><select name=\"vedi_inv_app_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_inv_app\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,7,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,7,1) == "p" or substr($priv_inventario,7,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,7,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,7,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width: 30px;\"></td><td>".mex("Possibilità di aggiungere e cancellare beni",$pag).":
 <label><input type=\"radio\" name=\"ins_beni_in_app\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_beni_in_app\" value=\"p\"$checked_PR>$b_PR".mex("Solo in appartamenti consentiti",'unit.php')."$b_slash_PR
 </label><select name=\"ins_beni_in_app_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"ins_beni_in_app\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_inventario,8,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_inventario,8,1) == "p" or substr($priv_inventario,8,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_inventario,8,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_inventario,8,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di modificare le quantità dei beni",$pag).":
 <label><input type=\"radio\" name=\"mod_beni_in_app\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"mod_beni_in_app\" value=\"p\"$checked_PR>$b_PR".mex("Solo in appartamenti consentiti",'unit.php')."$b_slash_PR
 </label><select name=\"mod_beni_in_app_gr\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"mod_beni_in_app\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
echo "</td></tr></table>";

echo "<br><div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" name=\"mod_priv\" value=\"".mex("Modifica i privilegi globali",$pag)."\">
</div></div></form></div><br>
<hr style=\"width: 90%\">";



unset($max_contr);

for ($num1 = 0 ; $num1 < $num_anni ; $num1++) {
$anno_mostra = risul_query($anni,$num1,'idanni');
$tipo_periodi_mostra = risul_query($anni,$num1,'tipo_periodi');
echo "<br><a name=\"anno$anno_mostra\"></a><div>
<div style=\"text-align: center;\">".mex("Privilegi per l'anno",$pag)." <b>$anno_mostra</b></div>";
if (numlin_query($privilegi_anno[$anno_mostra]) == 0) {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php#anno$anno_mostra\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"attiva_anno\" value=\"$anno_mostra\">
".mex("Anno disattivato",$pag).".&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"attiv\" value=\"".mex("Attiva",$pag)."\">
</div></form>";
} # fine if (numlin_query($privilegi_anno[$anno_mostra]) == 0)

else {
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php#anno$anno_mostra\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"disattiva_anno\" value=\"$anno_mostra\">
".mex("Anno attivato",$pag).".&nbsp;&nbsp;&nbsp;
<input class=\"sbutton\" type=\"submit\" name=\"disattiv\" value=\"".mex("Disattiva",$pag)."\">
</div></form><br>";

$tableregole_mostra = $PHPR_TAB_PRE."regole".$anno_mostra;
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"privilegi_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"id_utente_privilegi\" value=\"$id_utente_privilegi\">
<input type=\"hidden\" name=\"modifica_privilegi_anno\" value=\"$anno_mostra\">
<div class=\"floatrbut\"><input class=\"rbutton\" type=\"submit\" value=\"".mex("Modifica i privilegi dell'anno",$pag)." $anno_mostra\"></div>";

$regole1_consentite = risul_query($privilegi_anno[$anno_mostra],0,'regole1_consentite');
$vett_regole1_consentite = explode("#@^",substr($regole1_consentite,3));
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($regole1_consentite,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($regole1_consentite,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"usa_regola1$anno_mostra\" value=\"n\"$checked_NO>$b_NO
".mex("Prenotazioni inseribili e modificabili in tutti i periodi e appartamenti",'unit.php')."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"usa_regola1$anno_mostra\" value=\"s\"$checked_SI>$b_SI
".mex("Prenotazioni inseribili solo nei periodi della regola di assegnazione 1 con le motivazioni selezionate",$pag)."$b_slash_SI</label>:<br>
<div class=\"tab_cont\"><table style=\"margin-left: auto; margin-right: auto;\" border=\"1\"><tr>";
$motivazioni_selezionate = array();
for ($num2 = 0 ; $num2 < count($vett_regole1_consentite) ; $num2++) $motivazioni_selezionate[$vett_regole1_consentite[$num2]] = "SI";
$celle = 1;
$num_colonne = 3;
$regole = esegui_query("select * from $tableregole_mostra where app_agenzia != '' and (motivazione2 != 'x' or motivazione2 is NULL) order by app_agenzia");
$num_regole = numlin_query($regole);
unset($motivazioni_presenti);
$num_motivazioni = 0;
for ($num2 = 0 ; $num2 < $num_regole ; $num2++) {
$idregole = risul_query($regole,$num2,'idregole');
$motivazione = risul_query($regole,$num2,'motivazione');
if (!$motivazione) {
$motivazione = " ";
$motivazione_vedi = mex("nessuna",$pag);
} # fine if (!$motivazione)
else $motivazione_vedi = $motivazione;
if (!isset($motivazioni_presenti[$motivazione]) or $motivazioni_presenti[$motivazione] != "SI") {
$motivazioni_presenti[$motivazione] = "SI";
$var_motivazione = "var_mot_".$anno_mostra.$num_motivazioni;
$num_motivazioni++;
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
if (isset($motivazioni_selezionate[$motivazione]) and $motivazioni_selezionate[$motivazione] == "SI") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
echo "<td><label><input type=\"checkbox\" name=\"$var_motivazione\" value=\"$motivazione\"$checked_SI> $b_SI$motivazione_vedi$b_slash_SI</label></td>";
if ($celle == $num_colonne) {
echo "</tr><tr>";
$celle = 0;
} # fine if ($celle == 3)
$celle++;
} # fine if (!isset($motivazioni_presenti[$motivazione]) or $motivazioni_presenti[$motivazione] != "SI")
} # fine for $num2
if ($celle != 1) for ($num2 = $celle ; $num2 <= $num_colonne ; $num2++) echo "<td>&nbsp;</td>";
if ($num_regole == 0) echo "<td style=\"width: 250px;\">&nbsp;</td>";
echo "</tr></table></div>
<input type=\"hidden\" name=\"num_motivazioni$anno_mostra\" value=\"$num_motivazioni\">";
$checked_SEMPRE = "";
$b_SEMPRE = "";
$b_slash_SEMPRE = "";
$checked_NONSEL = "";
$b_NONSEL = "";
$b_slash_NONSEL = "";
$checked_SEL = "";
$b_SEL = "";
$b_slash_SEL = "";
$checked_MAI = "";
$b_MAI = "";
$b_slash_MAI = "";
$checked_FISSINSEL = "";
$b_FISSINSEL = "";
$b_slash_FISSINSEL = "";
if (substr($regole1_consentite,1,1) == "s") { $checked_SEMPRE = " checked"; $b_SEMPRE = "<b>"; $b_slash_SEMPRE = "</b>"; }
if (substr($regole1_consentite,1,1) == "r") { $checked_SEL = " checked"; $b_SEL = "<b>"; $b_slash_SEL = "</b>"; }
if (substr($regole1_consentite,1,1) == "n") { $checked_NONSEL = " checked"; $b_NONSEL = "<b>"; $b_slash_NONSEL = "</b>"; }
if (substr($regole1_consentite,1,1) == "m") { $checked_MAI = " checked"; $b_MAI = "<b>"; $b_slash_MAI = "</b>"; }
if (substr($regole1_consentite,1,1) == "f") { $checked_FISSINSEL = " checked"; $b_FISSINSEL = "<b>"; $b_slash_FISSINSEL = "</b>"; }
echo "<table><tr><td colspan=\"5\">
".str_replace(" ","&nbsp;",mex("Applica la regola 1",$pag))." ".mex("per appartamenti non chiusi",'unit.php').":</td>
<tr><td style=\"width: 80px;\"></td>
<td><input type=\"radio\" id=\"ar1_s$anno_mostra\" name=\"avvisa_regola1$anno_mostra\" value=\"s\"$checked_SEMPRE></td>
<td><label for=\"ar1_s$anno_mostra\">$b_SEMPRE".mex("Sempre",$pag)."$b_slash_SEMPRE</label></td>
<td><input type=\"radio\" id=\"ar1_n$anno_mostra\" name=\"avvisa_regola1$anno_mostra\" value=\"n\"$checked_NONSEL></td>
<td><label for=\"ar1_n$anno_mostra\">$b_NONSEL".mex("Solo per regole non selezionate",$pag)."$b_slash_NONSEL</label></td></tr>
<tr><td>&nbsp;</td><td><input type=\"radio\" id=\"ar1_m$anno_mostra\" name=\"avvisa_regola1$anno_mostra\" value=\"m\"$checked_MAI></td>
<td><label for=\"ar1_m$anno_mostra\">$b_MAI".mex("Mai",$pag)."$b_slash_MAI</label></td>
<td><input type=\"radio\" id=\"ar1_f$anno_mostra\" name=\"avvisa_regola1$anno_mostra\" value=\"f\"$checked_FISSINSEL></td>
<td><label for=\"ar1_f$anno_mostra\">$b_FISSINSEL".mex("Mai, ma non spostare altre prenotazioni in periodi delle regole non selezionate se non vi si possono inserire prenotazioni",$pag)."$b_slash_FISSINSEL</label></td></tr>
</table><br>";

$tablenometariffe_mostra = $PHPR_TAB_PRE."ntariffe".$anno_mostra;
$rigatariffe = esegui_query("select * from $tablenometariffe_mostra where idntariffe = 1 ");
$numero_tariffe = risul_query($rigatariffe,0,"nomecostoagg");
$tariffe_consentite = risul_query($privilegi_anno[$anno_mostra],0,'tariffe_consentite');
$vett_tariffe_consentite = explode(",",$tariffe_consentite);
unset($tariffa_selezionata);
for ($num2 = 1 ; $num2 < count($vett_tariffe_consentite) ; $num2++) $tariffa_selezionata[$vett_tariffe_consentite[$num2]] = "SI";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($tariffe_consentite,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($tariffe_consentite,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"seleziona_tariffe$anno_mostra\" value=\"n\"$checked_NO>$b_NO
 ".mex("Permetti l'uso di tutte le <i>tariffe</i> nell'inserimento e modifica delle prenotazioni",$pag)."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"seleziona_tariffe$anno_mostra\" value=\"s\"$checked_SI>$b_SI
 ".mex("Permetti l'uso solo delle <i>tariffe</i> selezionate nell'inserimento e modifica delle prenotazioni",$pag)."$b_slash_SI</label>:<br>
<table style=\"margin-left: auto; margin-right: auto;\">";
$colonne_tariffe = 0;
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
if ($colonne_tariffe == 0) echo "<tr>";
if (isset($tariffa_selezionata[$numtariffa]) and $tariffa_selezionata[$numtariffa] == "SI") {$checked = " checked"; $tag_b = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $fine_tag_b ="</b>";}
else {$checked = ""; $tag_b = ""; $fine_tag_b ="";}
$tariffa = "tariffa".$numtariffa;
$nometariffa = risul_query($rigatariffe,0,$tariffa);
if ($nometariffa == "") {
$nometariffa = $tariffa;
$nometariffa_vedi = mex("tariffa",$pag).$numtariffa;
} # fine if ($nometariffa == "")
else $nometariffa_vedi = mex("tariffa",$pag)."$numtariffa ($nometariffa)";
echo "<td><label><input type=\"checkbox\" name=\"tariffa_sel$anno_mostra$numtariffa\" value=\"s\"$checked><small>$tag_b$nometariffa_vedi$fine_tag_b;</small></label></td>";
$colonne_tariffe++;
if ($colonne_tariffe >= 2) { echo "</tr>"; $colonne_tariffe = 0; }
} # fine for $numtariffa
if ($colonne_tariffe != 0) echo "</tr>";
echo "</table><br>
<input type=\"hidden\" name=\"numero_tariffe$anno_mostra\" value=\"$numero_tariffe\">";

$celle = 1;
$num_colonne = 2;
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe_mostra,"NO");
$costi_agg_consentiti = risul_query($privilegi_anno[$anno_mostra],0,'costi_agg_consentiti');
$vett_costi_agg_consentiti = explode(",",$costi_agg_consentiti);
unset($costo_agg_selezionato);
for ($num2 = 1 ; $num2 < count($vett_costi_agg_consentiti) ; $num2++) $costo_agg_selezionato[$vett_costi_agg_consentiti[$num2]] = "SI";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($costi_agg_consentiti,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($costi_agg_consentiti,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"seleziona_costi_agg$anno_mostra\" value=\"n\"$checked_NO>$b_NO
 ".mex("Permetti l'uso di tutti i <i>costi aggiuntivi</i> nell'inserimento e modifica delle prenotazioni",$pag)."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"seleziona_costi_agg$anno_mostra\" value=\"s\"$checked_SI>$b_SI
 ".mex("Permetti l'uso solo dei <i>costi aggiuntivi</i> selezionati nell'inserimento e modifica delle prenotazioni",$pag)."$b_slash_SI</label>:<br>
<table style=\"margin-left: auto; margin-right: auto;\"><tr>";
$lista_ca_passa = "";
for ($num2 = 0 ; $num2 < $dati_ca['num'] ; $num2++) {
$idntariffe = $dati_ca[$num2]['id'];
$lista_ca_passa .= ",$idntariffe";
$nome_costo = $dati_ca[$num2]['nome'];
if ($dati_ca[$num2]['tipo'] == "u") $tipo_costo = "Costo unico";
if ($dati_ca[$num2]['tipo'] == "s" and $tipo_periodi_mostra == "s") $tipo_costo = "Costo settimanale";
if ($dati_ca[$num2]['tipo'] == "s" and $tipo_periodi_mostra == "g") $tipo_costo = "Costo giornaliero";
if (isset($costo_agg_selezionato[$idntariffe]) and $costo_agg_selezionato[$idntariffe] == "SI") {$checked = " checked"; $tag_b = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $fine_tag_b ="</b>";}
else {$checked = ""; $tag_b = ""; $fine_tag_b ="";}
echo "<td><label><input type=\"checkbox\" name=\"costo_agg_sel$anno_mostra".$idntariffe."\" value=\"s\"$checked>
<small>$tag_b".mex("$tipo_costo",$pag)." $nome_costo$fine_tag_b</small></label></td>";
if ($celle == $num_colonne) {
echo "</tr><tr>";
$celle = 0;
} # fine if ($celle == $num_colonne)
$celle++;
} # fine for $num2
if ($celle != 1) for ($num2 = $celle ; $num2 <= $num_colonne ; $num2++) echo "<td>&nbsp;</td>";
if ($dati_ca['num'] == 0) echo "<td style=\"width: 250px;\">&nbsp;</td>";
echo "</tr></table><input type=\"hidden\" name=\"lista_ca_passa$anno_mostra\" value=\"$lista_ca_passa\"><br>";

$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti'");
$nomi_contratti = risul_query($nomi_contratti,0,'valpersonalizza');
$nomi_contratti = explode("#@&",$nomi_contratti);
$nome_contratto = array();
for ($num2 = 0 ; $num2 < count($nomi_contratti) ; $num2++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num2]);
$nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num2
$contratti_consentiti = risul_query($privilegi_anno[$anno_mostra],0,'contratti_consentiti');
$vett_contratti_consentiti = explode(",",$contratti_consentiti);
unset($contratto_selezionato);
for ($num2 = 1 ; $num2 < count($vett_contratti_consentiti) ; $num2++) $contratto_selezionato[$vett_contratti_consentiti[$num2]] = "SI";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($contratti_consentiti,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($contratti_consentiti,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"seleziona_contratti$anno_mostra\" value=\"n\"$checked_NO>$b_NO
 ".mex("Permetti la visualizzazione di tutti i <i>documenti</i>",$pag)."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"seleziona_contratti$anno_mostra\" value=\"s\"$checked_SI>$b_SI
 ".mex("Permetti la visualizzazione solo dei <i>documenti</i> selezionati",$pag)."$b_slash_SI</label>:<br>
<div class=\"tab_cont\" style=\"text-align: center;\"><table style=\"margin-left: auto; margin-right: auto;\" border=1 cellspacing=1 cellpadding=0>";
if (!isset($max_contr)) {
$max_contr = esegui_query("select max(numero) from $tablecontratti where tipo $LIKE 'contr%'");
$max_contr = risul_query($max_contr,0,0);
} # fine (!isset($max_contr))
$num_colonna = 1;
for ($num_contratto = 1 ; $num_contratto <= $max_contr ; $num_contratto++) {
if ($num_colonna == 1) echo "<tr>";
if (isset($contratto_selezionato[$num_contratto]) and $contratto_selezionato[$num_contratto] == "SI") { $checked = " checked"; $tag_b = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $fine_tag_b ="</b>";}
else {$checked = ""; $tag_b = ""; $fine_tag_b ="";}
#if ($num_contratto == 1 or $num_contratto == 6 or $num_contratto == 11 or $num_contratto == 16) echo "<tr>";
echo "<td align=\"center\"><label><input type=\"checkbox\" name=\"contratto_sel$anno_mostra".$num_contratto."\" value=\"s\"$checked>
$tag_b<small>".mex("documento",$pag)."$num_contratto</small>";
if (!empty($nome_contratto[$num_contratto])) echo "<small><small> (".$nome_contratto[$num_contratto].")</small></small>$fine_tag_b";
echo "</label></td>";
if ($num_colonna == 5) {
echo "</tr>";
$num_colonna = 1;
} # fine if ($num_colonna == 5)
else $num_colonna++;
} # fine for $num_contratto
if ($num_colonna != 1) {
for ($num2 = $num_colonna ; $num2 <= 5 ; $num2++) echo "<td>&nbsp;</td>";
echo "</tr>";
} # fine if ($num_colonna != 1)
echo "</table></div>
<input type=\"hidden\" name=\"num_contratti_sel\" value=\"$max_contr\">";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($contratti_consentiti,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($contratti_consentiti,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di cancellare o sovrascrivere i documenti salvati",$pag).":
 <label><input type=\"radio\" name=\"cancella_contr$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"cancella_contr$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label>
<br><br>";

$priv_ins_prenota = risul_query($privilegi_anno[$anno_mostra],0,'priv_ins_prenota');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<label><input type=\"radio\" name=\"inserisci_prenotazioni$anno_mostra\" value=\"n\"$checked_NO>$b_NO
 ".mex("Non permettere l'inserimento di <i>nuove prenotazioni</i>",$pag)."$b_slash_NO</label>.<br>
<label><input type=\"radio\" name=\"inserisci_prenotazioni$anno_mostra\" value=\"s\"$checked_SI>$b_SI
 ".mex("Permetti l'inserimento di <i>nuove prenotazioni</i> con le seguenti possibilità",$pag)."$b_slash_SI</label>:<br>
<table><tr><td style=\"width: 30px;\"></td><td>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Scelta degli appartamenti da assegnare",'unit.php').":
 <label><input type=\"radio\" name=\"ins_assegnazione_app$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_assegnazione_app$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di confermare la prenotazione",$pag).":
 <label><input type=\"radio\" name=\"ins_conferma_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_conferma_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire uno sconto",$pag).":
 <label><input type=\"radio\" name=\"ins_sconto$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_sconto$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire la caparra e le commissioni",$pag).":
 <label><input type=\"radio\" name=\"ins_caparra$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_caparra$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,10,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,10,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire l'orario di entrata",$pag).":
 <label><input type=\"radio\" name=\"ins_checkin$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_checkin$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire dei costi aggiuntivi",$pag).":
 <label><input type=\"radio\" name=\"ins_costi_agg_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_costi_agg_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,6,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,6,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire il commento",$pag).":
 <label><input type=\"radio\" name=\"ins_commento$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_commento$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,12,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,12,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire i commenti personalizzati",$pag).":
 <label><input type=\"radio\" name=\"ins_comm_pers$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_comm_pers$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,11,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,11,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire l'origine",$pag).":
 <label><input type=\"radio\" name=\"ins_origine_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_origine_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,7,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,7,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire il numero di persone",$pag).":
 <label><input type=\"radio\" name=\"ins_num_persone$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_num_persone$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_prenota,8,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,8,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire prenotazioni anche in periodi già iniziati",$pag).":
 <label><input type=\"radio\" name=\"ins_passato$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_passato$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_NV = "";
$b_NV = "";
$b_slash_NV = "";
if (substr($priv_ins_prenota,9,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_prenota,9,1) == "m") { $checked_NV = " checked"; $b_NV = "<b>"; $b_slash_NV = "</b>"; }
if (substr($priv_ins_prenota,9,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "".mex("Possibilità di inserire più prenotazioni contemporaneamente",$pag).":
 <label><input type=\"radio\" name=\"ins_multiple$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_multiple$anno_mostra\" value=\"m\"$checked_NV>$b_NV".mex("Si, senza appartamenti vicini",'unit.php')."$b_slash_NV</label>
 <label><input type=\"radio\" name=\"ins_multiple$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
echo "</td></tr></table><br>";

$priv_mod_prenota = risul_query($privilegi_anno[$anno_mostra],0,'priv_mod_prenota');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,0,1) == "p" or substr($priv_mod_prenota,0,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_mod_prenota,0,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_mod_prenota,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Prenotazioni che possono essere <i>modificate</i>",$pag).":
 <label><input type=\"radio\" name=\"modp_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Tutte",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_prenota$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo",$pag)."$b_slash_PR
 </label><select name=\"modp_prenota_gr$anno_mostra\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("le proprie",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"modp_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("Nessuna",$pag)."$b_slash_NO</label><br>
<table cellspacing=0 cellpadding=0><tr><td style=\"width: 30px;\" rowspan=2></td><td colspan=2>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,22,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,22,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di cambiare il cliente con un altro",$pag).":
 <label><input type=\"radio\" name=\"modp_cliente$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_cliente$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare la data iniziale o finale",$pag).":
 <label><input type=\"radio\" name=\"modp_date_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_date_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_AS = "";
$b_AS = "";
$b_slash_AS = "";
if (substr($priv_mod_prenota,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,2,1) == "a") { $checked_AS = " checked"; $b_AS = "<b>"; $b_slash_AS = "</b>"; }
if (substr($priv_mod_prenota,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare gli appartamenti assegnati",'unit.php').":
 <label><input type=\"radio\" name=\"modp_app_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_app_prenota$anno_mostra\" value=\"a\"$checked_AS>$b_AS".mex("Solo spostamenti tra quelli già assegnati",'unit.php')."$b_slash_AS</label>
 <label><input type=\"radio\" name=\"modp_app_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,23,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,23,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare le prenotazioni vicine",$pag).":
 <label><input type=\"radio\" name=\"modp_pren_comp$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_pren_comp$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_RE = "";
$b_RE = "";
$b_slash_RE = "";
$sel_PR = "";
$sel_VL = "";
$sel_GR = "";
if (substr($priv_mod_prenota,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,3,1) == "r") { $checked_RE = " checked"; $b_RE = "<b>"; $b_slash_RE = "</b>"; }
if (substr($priv_mod_prenota,3,1) == "v" or substr($priv_mod_prenota,3,1) == "p" or substr($priv_mod_prenota,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,3,1) == "v") $sel_PR = " selected";
if (substr($priv_mod_prenota,3,1) == "p") $sel_VL = " selected";
if (substr($priv_mod_prenota,3,1) == "n") $sel_GR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare la tariffa",$pag).":
 <label><input type=\"radio\" name=\"modp_tariffa$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si, con regola 2 a scelta",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_tariffa$anno_mostra\" value=\"r\"$checked_RE>$b_RE".mex("Si, sempre con regola 2",$pag)."$b_slash_RE</label>
 <label><input id=\"mptn$anno_mostra\" type=\"radio\" name=\"modp_tariffa$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_vedi_tariffa$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mptn$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando il valore",$pag)."</option>
 <option value=\"VL\"$sel_VL>".mex("senza mostrare il valore",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrarla",$pag)."</option>
 </select></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare il numero delle persone",$pag).":
 <label><input type=\"radio\" name=\"modp_num_persone$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_num_persone$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,25,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,25,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere il commento",$pag).":
 <label><input type=\"radio\" name=\"modp_vedi_comm$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_vedi_comm$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Possibilità di modificare il commento",$pag).":
 <label><input type=\"radio\" name=\"modp_commento$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_commento$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,26,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,26,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere e modificare i commenti personalizzati",$pag).":
 <label><input type=\"radio\" name=\"modp_comm_pers$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_comm_pers$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,24,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,24,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare l'origine",$pag).":
 <label><input type=\"radio\" name=\"modp_origine_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_origine_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,20,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,20,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare l'orario di entrata ed uscita",$pag).":
 <label><input type=\"radio\" name=\"modp_checkin$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_checkin$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,6,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,6,1) == "v" or substr($priv_mod_prenota,6,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,6,1) == "v") $sel_PR = " selected";
else $sel_GR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare lo sconto",$pag).":
 <label><input type=\"radio\" name=\"modp_sconto$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input id=\"mpsn$anno_mostra\" type=\"radio\" name=\"modp_sconto$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_vedi_sconto$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpsn$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando il valore",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrare il valore",$pag)."</option>
 </select></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,7,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,7,1) == "v" or substr($priv_mod_prenota,7,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,7,1) == "v") $sel_PR = " selected";
else $sel_GR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare la caparra e le commissioni",$pag).":
 <label><input type=\"radio\" name=\"modp_caparra$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input id=\"mpccn$anno_mostra\" type=\"radio\" name=\"modp_caparra$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_vedi_caparra$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpccn$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando i valori",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrare i valori",$pag)."</option>
 </select></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_VL = "";
$sel_GR = "";
if (substr($priv_mod_prenota,8,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,8,1) == "v" or substr($priv_mod_prenota,8,1) == "p" or substr($priv_mod_prenota,8,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,8,1) == "v") $sel_PR = " selected";
if (substr($priv_mod_prenota,8,1) == "p") $sel_VL = " selected";
if (substr($priv_mod_prenota,8,1) == "n") $sel_GR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare i costi aggiuntivi",$pag).":
 <label><input type=\"radio\" name=\"modp_costi_agg$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input id=\"mpcan$anno_mostra\" type=\"radio\" name=\"modp_costi_agg$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_vedi_prezzi_ca$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpcan$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando i valori",$pag)."</option>
 <option value=\"VL\"$sel_VL>".mex("senza mostrare i valori",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrarli",$pag)."</option>
 </select></div>";
#if (substr($priv_mod_prenota,9,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
#if (substr($priv_mod_prenota,9,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
#echo "".mex("Possibilità di modificare la conferma",$pag).":
# <label><input type=\"radio\" name=\"modp_conferma$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
# <label><input type=\"radio\" name=\"modp_conferma$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_CONF = "";
$b_CONF = "";
$b_slash_CONF = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,10,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,10,1) == "c" or substr($priv_mod_prenota,10,1) == "i") { $checked_CONF = " checked"; $b_CONF = "<b>"; $b_slash_CONF = "</b>"; }
if (substr($priv_mod_prenota,10,1) == "v" or substr($priv_mod_prenota,10,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,10,1) == "c") $sel_PR = " selected";
else $sel_GR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare i soldi pagati e la conferma",$pag).":
 <label><input type=\"radio\" name=\"modp_pagato$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input id=\"mpvpc$anno_mostra\" type=\"radio\" name=\"modp_pagato$anno_mostra\" value=\"c\"$checked_CONF>$b_CONF".mex("Solo la conferma",$pag)."$b_slash_CONF
 </label><select name=\"modp_sc_vedi_prezzi$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpvpc$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando i valori",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrare i valori",$pag)."</option>
 </select>";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,10,1) == "v") $sel_PR = " selected";
else $sel_GR = " selected";
echo " <label><input id=\"mpvpn$anno_mostra\" type=\"radio\" name=\"modp_pagato$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_nm_vedi_prezzi$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpvpn$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando i valori",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrare i valori",$pag)."</option>
 </select><br>";
$cassa_pagamenti = risul_query($privilegi_anno[$anno_mostra],0,'cassa_pagamenti');
if (!strcmp((string) $cassa_pagamenti,"")) $sel = " selected";
else $sel = "";
$opt_casse = "<option value=\"\"$sel>----</option>";
$cassa_trovata = 0;
for ($num2 = 0 ; $num2 < $num_casse ; $num2++) {
$id_cassa = risul_query($casse,$num2,'idcasse');
if ($id_cassa == 1)  $nome_cassa = "#1#";
else $nome_cassa = risul_query($casse,$num2,'nome_cassa');
if ($nome_cassa == "#1#") $nome_cassa_vedi = mex("cassa principale",$pag);
else $nome_cassa_vedi = $nome_cassa;
if ($cassa_pagamenti == $nome_cassa) $sel = " selected";
else $sel = "";
$opt_casse .= "<option value=\"$nome_cassa\"$sel>$nome_cassa_vedi</option>";
} # fine for $num2
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Inserire sempre i pagamenti delle prenotazioni nella cassa",$pag).":
 <select name=\"modp_cassa_pagamenti$anno_mostra\">$opt_casse</select></div></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,9,1) == "s" or substr($priv_mod_prenota,9,1) == "g") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,9,1) == "v" or substr($priv_mod_prenota,9,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_mod_prenota,9,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare l'utente che ha inserito",$pag).":
 <label><input id=\"mpuis$anno_mostra\" type=\"radio\" name=\"modp_ut_ins$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI
 </label><select name=\"modp_utenti$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpuis$anno_mostra').checked='1';\">
 <option value=\"NO\"$sel_PR>".mex("con tutti gli utenti",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("solo con utenti dei suoi gruppi",$pag)."</option>
 </select>";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_mod_prenota,9,1) == "v") $sel_PR = " selected";
else $sel_GR = " selected";
echo " <label><input id=\"mpuin$anno_mostra\" type=\"radio\" name=\"modp_ut_ins$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO
 </label><select name=\"modp_vedi_utins$anno_mostra\" style=\"font-size: x-small; padding: 0;\" onclick=\"document.getElementById('mpuin$anno_mostra').checked='1';\">
 <option value=\"SI\"$sel_PR>".mex("mostrando l'utente",$pag)."</option>
 <option value=\"NO\"$sel_GR>".mex("senza mostrare l'utente",$pag)."</option>
 </select></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,21,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,21,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere e modificare il codice prenotazione",$pag).":
 <label><input type=\"radio\" name=\"modp_codice$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_codice$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,11,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,11,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di modificare prenotazioni già iniziate",$pag).":
 <label><input type=\"radio\" name=\"modp_gia_iniziate$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_gia_iniziate$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
/*$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
unset($checked_DO);
unset($b_DO);
unset($b_slash_DO);
if (substr($priv_mod_prenota,28,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,28,1) == "p") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_mod_prenota,28,1) == "d") { $checked_DO = " checked"; $b_DO = "<b>"; $b_slash_DO = "</b>"; }
echo "".mex("Prenotazioni modificabili solo con entrata",$pag).":
 <label><input type=\"radio\" name=\"modp_dip_entrata$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Da registrare",$pag)."$b_slash_PR</label>
 <label><input type=\"radio\" name=\"modp_dip_entrata$anno_mostra\" value=\"d\"$checked_DO>$b_DO".mex("Registrata",$pag)."$b_slash_DO</label>
 <label><input type=\"radio\" name=\"modp_dip_entrata$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Indifferentemente",$pag)."$b_slash_SI</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
unset($checked_DO);
unset($b_DO);
unset($b_slash_DO);
if (substr($priv_mod_prenota,29,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,29,1) == "p") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_mod_prenota,29,1) == "d") { $checked_DO = " checked"; $b_DO = "<b>"; $b_slash_DO = "</b>"; }
echo "".mex("Prenotazioni modificabili solo con uscita",$pag).":
 <label><input type=\"radio\" name=\"modp_dip_uscita$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Da registrare",$pag)."$b_slash_PR</label>
 <label><input type=\"radio\" name=\"modp_dip_uscita$anno_mostra\" value=\"d\"$checked_DO>$b_DO".mex("Registrata",$pag)."$b_slash_DO</label>
 <label><input type=\"radio\" name=\"modp_dip_uscita$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Indifferentemente",$pag)."$b_slash_SI</label><br>";*/
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,12,3) != "000") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,12,3) == "000") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Prenotazioni non più modificabili dopo un certo numero di ore dopo l'inserzione",$pag).":
 <label><input type=\"radio\" name=\"modp_attiva_ore_mod$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 (<input type=\"text\" name=\"modp_num_ore_mod$anno_mostra\" size=\"4\" maxlength=\"3\" value =\"".substr($priv_mod_prenota,12,3)."\">".mex("ore",$pag).")
 <label><input type=\"radio\" name=\"modp_attiva_ore_mod$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_FU = "";
$b_FU = "";
$b_slash_FU = "";
if (substr($priv_mod_prenota,18,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,18,1) == "f") { $checked_FU = " checked"; $b_FU = "<b>"; $b_slash_FU = "</b>"; }
if (substr($priv_mod_prenota,18,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Possibilità di cancellare le prenotazioni",$pag).":
 <label><input type=\"radio\" name=\"modp_canc$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_canc$anno_mostra\" value=\"f\"$checked_FU>$b_FU".mex("Solo quelle non iniziate",$pag)."$b_slash_FU</label>
 <label><input type=\"radio\" name=\"modp_canc$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_CH = "";
$b_CH = "";
$b_slash_CH = "";
if (substr($priv_mod_prenota,27,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,27,1) == "c") { $checked_CH = " checked"; $b_CH = "<b>"; $b_slash_CH = "</b>"; }
if (substr($priv_mod_prenota,27,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Cancellare le prenotazioni in modo permanente",$pag).":
 <label><input type=\"radio\" name=\"modp_canc_perm$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Sempre",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_canc_perm$anno_mostra\" value=\"c\"$checked_CH>$b_CH".mex("Chiedere",$pag)."$b_slash_CH</label>
 <label><input type=\"radio\" name=\"modp_canc_perm$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("Mai",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,19,1) == "n") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,19,1) == "s") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Prenotazioni non più cancellabili dopo essere state confermate",$pag).":
 <label><input type=\"radio\" name=\"modp_canc_dopo_conf$anno_mostra\" value=\"n\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"modp_canc_dopo_conf$anno_mostra\" value=\"s\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_mod_prenota,15,3) != "000") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_mod_prenota,15,3) == "000") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"padding: 0 0 0 30px;\">".mex("Prenotazioni non più cancellabili dopo un certo numero di ore dopo l'inserzione",$pag).":
 <label><input type=\"radio\" name=\"modp_attiva_ore_canc$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 (<input type=\"text\" name=\"modp_num_ore_canc$anno_mostra\" size=\"4\" maxlength=\"3\" value =\"".substr($priv_mod_prenota,15,3)."\">".mex("ore",$pag).")
 <label><input type=\"radio\" name=\"modp_attiva_ore_canc$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div></div><br>";
echo "</td></tr></table>";

$priv_ins_costi = risul_query($privilegi_anno[$anno_mostra],0,'priv_ins_costi');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_costi,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_costi,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di inserire e cancellare le <i>spese</i>",$pag).":
 <label><input type=\"radio\" name=\"ins_spese$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_spese$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_costi,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_costi,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di inserire e cancellare le <i>entrate</i>",$pag).":
 <label><input type=\"radio\" name=\"ins_entrate$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"ins_entrate$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_CH = "";
$b_CH = "";
$b_slash_CH = "";
if (substr($priv_ins_costi,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_costi,2,1) == "c") { $checked_CH = " checked"; $b_CH = "<b>"; $b_slash_CH = "</b>"; }
if (substr($priv_ins_costi,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("<i>Sottrarre le entrate</i> dal totale delle prenotazioni",$pag).":
 <label><input type=\"radio\" name=\"sottrai_entrate$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Sempre",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"sottrai_entrate$anno_mostra\" value=\"c\"$checked_CH>$b_CH".mex("A scelta",$pag)."$b_slash_CH</label>
 <label><input type=\"radio\" name=\"sottrai_entrate$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("Mai",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_CH = "";
$b_CH = "";
$b_slash_CH = "";
if (substr($priv_ins_costi,3,1) == "u") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_costi,3,1) == "c") { $checked_CH = " checked"; $b_CH = "<b>"; $b_slash_CH = "</b>"; }
if (substr($priv_ins_costi,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Immettere come <i>persona</i> che inserisce le spese o le entrate",$pag).":
 <label><input type=\"radio\" name=\"persona_spese$anno_mostra\" value=\"u\"$checked_SI>$b_SI".mex("Il nome dell'utente",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"persona_spese$anno_mostra\" value=\"c\"$checked_CH>$b_CH".mex("Chiedere",$pag)."$b_slash_CH</label>
 <label><input type=\"radio\" name=\"persona_spese$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("Nessuno",$pag)."$b_slash_NO</label><br><br>";

$priv_ins_tariffe = risul_query($privilegi_anno[$anno_mostra],0,'priv_ins_tariffe');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_tariffe,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di modificare le <i>tariffe</i> a lui permesse",$pag).":
 <label><input type=\"radio\" name=\"mod_tariffe$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"mod_tariffe$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_AP = "";
$sel_TA = "";
$sel_TU = "";
if (substr($priv_ins_tariffe,4,1) == "s" or substr($priv_ins_tariffe,4,1) == "a" or substr($priv_ins_tariffe,4,1) == "t") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
if (substr($priv_ins_tariffe,4,1) != "a" and substr($priv_ins_tariffe,4,1) != "t") $sel_TU = " selected";
else {
if (substr($priv_ins_tariffe,4,1) == "a") $sel_AP = " selected";
if (substr($priv_ins_tariffe,4,1) == "t") $sel_TA = " selected";
} # fine else if (substr($priv_ins_tariffe,4,1) != "a" and substr($priv_ins_tariffe,4,1) != "t")
echo mex("Possibilità di modificare le <i>regole di assegnazione</i>",$pag)."<i> 1</i> (".mex("chiusura appartamenti e tariffe",'unit.php')."):
 <label><input type=\"radio\" name=\"mod_reg1$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI
 </label><select name=\"mod_reg1_tipo$anno_mostra\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"a\"$sel_AP>".mex("solo per appartamenti",'unit.php')."</option>
 <option value=\"t\"$sel_TA>".mex("solo per tariffe",$pag)."</option>
 <option value=\"\"$sel_TU>".mex("per entrambi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"mod_reg1$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_tariffe,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di modificare le <i>regole di assegnazione</i>",$pag)."<i> 2</i> (".mex("assegnazione appartamenti",'unit.php').") ".mex("e",$pag)." 3 (".mex("assegnazione persone",$pag)."):
 <label><input type=\"radio\" name=\"mod_reg2$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"mod_reg2$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_ins_tariffe,1,1) == "s" or substr($priv_ins_tariffe,1,1) == "g") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,1,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_ins_tariffe,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di inserire <i>nuovi costi aggiuntivi</i>",$pag).":
 <label><input type=\"radio\" name=\"ins_costi_agg$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag).", ".mex("rendendoli disponibili",$pag)."$b_slash_SI
 </label><select name=\"ins_costi_agg_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("solo a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("a utenti dei suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"ins_costi_agg$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_tariffe,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di modificare i <i>costi aggiuntivi</i> a lui permessi",$pag).":
 <label><input type=\"radio\" name=\"mod_costi_agg$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"mod_costi_agg$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
if (substr($priv_ins_tariffe,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_ins_tariffe,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo mex("Possibilità di cancellare i <i>costi aggiuntivi</i> a lui permessi",$pag).":
 <label><input type=\"radio\" name=\"canc_costi_agg$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"canc_costi_agg$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br><br>";

$priv_vedi_tab = risul_query($privilegi_anno[$anno_mostra],0,'priv_vedi_tab');
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PPR = "";
$sel_PGR = "";
$sel_APR = "";
$sel_AGR = "";
if (substr($priv_vedi_tab,0,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,0,1) == "p" or substr($priv_vedi_tab,0,1) == "q" or substr($priv_vedi_tab,0,1) == "r" or substr($priv_vedi_tab,0,1) == "g") { $checked_PR = " checked"; $b_PR = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,0,1) == "q" or substr($priv_vedi_tab,0,1) == "g") $sel_PGR = " selected";
else $sel_PPR = " selected";
if (substr($priv_vedi_tab,0,1) == "r" or substr($priv_vedi_tab,0,1) == "g") $sel_AGR = " selected";
else $sel_APR = " selected";
if (substr($priv_vedi_tab,0,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<table cellspacing=0 cellpadding=0><tr><td>
<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella dei mesi</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_mesi$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" id=\"vtm_p$anno_mostra\" name=\"vedi_tab_mesi$anno_mostra\" value=\"p\"$checked_PR><small>$b_PR".mex("Solo con",$pag)."$b_slash_PR</small>
 </label><select name=\"vedi_tab_mpren_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_PPR>".mex("prenotazioni proprie",$pag)."</option>
 <option value=\"SI\"$sel_PGR>".mex("prenotazioni dai suoi gruppi",$pag)."</option>
 </select><label for=\"vtm_p$anno_mostra\">
 <small>$b_PR".mex("e appartamenti consentiti",'unit.php')."$b_slash_PR</small>
 </label><select name=\"vedi_tab_mapp_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_APR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_AGR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_mesi$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label><br>";
if (substr($priv_vedi_tab,8,1) == "o") $sel_OSC = " selected";
else $sel_OSC = "";
if (substr($priv_vedi_tab,8,1) == "v") $sel_VUO = " selected";
else $sel_VUO = "";
if (substr($priv_vedi_tab,8,1) == "f") $sel_FUT = " selected";
else $sel_FUT = "";
echo "<div style=\"padding: 0 0 0 30px;\">
".mex("Mostrare le prenotazioni non permesse come",$pag).":
 <select name=\"oscura_tab_mesi$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"o\"$sel_OSC>".mex("oscurate",$pag)."</option>
 <option value=\"v\"$sel_VUO>".mex("periodi vuoti",$pag)."</option>
 <option value=\"f\"$sel_FUT>".mex("oscurate",$pag)." (".mex("solo correnti e future",$pag).")</option>
 </select></div></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_vedi_tab,1,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,1,1) == "p" or substr($priv_vedi_tab,1,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,1,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_vedi_tab,1,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella con tutte le prenotazioni</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_tutte_prenota$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_tutte_prenota$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo con",$pag)."$b_slash_PR
 </label><select name=\"vedi_tab_tpren_gr$anno_mostra\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("prenotazioni proprie",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("prenotazioni dai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_tutte_prenota$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_vedi_tab,2,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,2,1) == "p" or substr($priv_vedi_tab,2,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,2,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_vedi_tab,2,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere le <i>tabelle con le entrate e le uscite</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_costi$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_costi$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo con",$pag)."$b_slash_PR
 </label><select name=\"vedi_tab_cos_gr$anno_mostra\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("entrate/uscite proprie",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("entrate/uscite dai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_costi$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_vedi_tab,3,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,3,1) == "p" or substr($priv_vedi_tab,3,1) == "g") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,3,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_vedi_tab,3,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella con i periodi e le tariffe</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_tariffe$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_tariffe$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo con tariffe consentite",$pag)."$b_slash_PR
 </label><select name=\"vedi_tab_tar_gr$anno_mostra\" style=\"font-size: x-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_tariffe$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
if (substr($priv_vedi_tab,4,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,4,1) == "p") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,4,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella con le regole di assegnazione</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_regole$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_regole$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo con regole consentite",$pag)." ".mex("a lui",$pag)."$b_slash_PR</label>
 <label><input type=\"radio\" name=\"vedi_tab_regole$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PR = "";
$sel_GR = "";
if (substr($priv_vedi_tab,5,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,5,1) == "p" or substr($priv_vedi_tab,5,1) == "g") { $checked_PR = " checked"; $b_PR = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,5,1) == "g") $sel_GR = " selected";
else $sel_PR = " selected";
if (substr($priv_vedi_tab,5,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella con gli appartamenti</i>",'unit.php').":
 <label><input type=\"radio\" name=\"vedi_tab_appartamenti$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_appartamenti$anno_mostra\" value=\"p\"$checked_PR><small>$b_PR".mex("Solo appartamenti associati a regole consentite",'unit.php')."$b_slash_PR</small>
 </label><select name=\"vedi_tab_app_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_PR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_GR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_appartamenti$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
if (substr($priv_vedi_tab,7,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,7,1) == "p") { $checked_PR = " checked"; $b_PR = "<b>"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,7,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere la <i>tabella con i documenti salvati</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_doc$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" name=\"vedi_tab_doc$anno_mostra\" value=\"p\"$checked_PR>$b_PR".mex("Solo con documenti consentiti",$pag)." ".mex("a lui",$pag)."$b_slash_PR</label>
 <label><input type=\"radio\" name=\"vedi_tab_doc$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
$checked_SI = "";
$b_SI = "";
$b_slash_SI = "";
$checked_NO = "";
$b_NO = "";
$b_slash_NO = "";
$checked_PR = "";
$b_PR = "";
$b_slash_PR = "";
$sel_PPR = "";
$sel_PGR = "";
$sel_APR = "";
$sel_AGR = "";
if (substr($priv_vedi_tab,6,1) == "s") { $checked_SI = " checked"; $b_SI = "<b>"; $b_slash_SI = "</b>"; }
if (substr($priv_vedi_tab,6,1) == "p" or substr($priv_vedi_tab,6,1) == "q" or substr($priv_vedi_tab,6,1) == "r" or substr($priv_vedi_tab,6,1) == "g") { $checked_PR = " checked"; $b_PR = "<b style=\"font-weight: normal; text-decoration: underline;\">"; $b_slash_PR = "</b>"; }
if (substr($priv_vedi_tab,6,1) == "q" or substr($priv_vedi_tab,6,1) == "g") $sel_PGR = " selected";
else $sel_PPR = " selected";
if (substr($priv_vedi_tab,6,1) == "r" or substr($priv_vedi_tab,6,1) == "g") $sel_AGR = " selected";
else $sel_APR = " selected";
if (substr($priv_vedi_tab,6,1) == "n") { $checked_NO = " checked"; $b_NO = "<b>"; $b_slash_NO = "</b>"; }
echo "<div style=\"background-color: ".rowbgcolor().";\">".mex("Possibilità di vedere <i>le statistiche</i>",$pag).":
 <label><input type=\"radio\" name=\"vedi_tab_stat$anno_mostra\" value=\"s\"$checked_SI>$b_SI".mex("Si",$pag)."$b_slash_SI</label>
 <label><input type=\"radio\" id=\"vts_p$anno_mostra\" name=\"vedi_tab_stat$anno_mostra\" value=\"p\"$checked_PR><small>$b_PR".mex("Solo con",$pag)."$b_slash_PR</small>
 </label><select name=\"vedi_tab_spren_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_PPR>".mex("prenotazioni proprie",$pag)."</option>
 <option value=\"SI\"$sel_PGR>".mex("prenotazioni dai suoi gruppi",$pag)."</option>
 </select><label for=\"vts_p$anno_mostra\">
 <small>$b_PR".mex("e appartamenti consentiti",'unit.php')."$b_slash_PR</small>
 </label><select name=\"vedi_tab_sapp_gr$anno_mostra\" style=\"font-size: xx-small; padding: 0;\">
 <option value=\"NO\"$sel_APR>".mex("a lui",$pag)."</option>
 <option value=\"SI\"$sel_AGR>".mex("ai suoi gruppi",$pag)."</option>
 </select>
 <label><input type=\"radio\" name=\"vedi_tab_stat$anno_mostra\" value=\"n\"$checked_NO>$b_NO".mex("No",$pag)."$b_slash_NO</label></div>";
echo "</td></tr></table>";


echo "<br><div style=\"text-align: center;\">
<input class=\"sbutton\" type=\"submit\" name=\"mod_priv\" value=\"".mex("Modifica i privilegi dell'anno",$pag)." $anno_mostra\">
</div></div></form></div><br>";

} # fine else if (numlin_query($privilegi_anno[$anno_mostra]) == 0)
echo "<hr style=\"width: 90%\">";

} # fine for $num1


echo "<br><div style=\"text-align: center;\">
<form accept-charset=\"utf-8\" method=\"post\" action=\"gestione_utenti.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Torna indietro",$pag)."\">
</div></form><br></div>";


} # fine if (!isset($mostra_form_iniziale) or $mostra_form_iniziale != "NO")


if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");


} # fine if ($id_utente and $id_utente == 1)



?>
