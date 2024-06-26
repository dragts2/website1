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



$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tablemessaggi = $PHPR_TAB_PRE."messaggi";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablenazioni = $PHPR_TAB_PRE."nazioni";
$tableregioni = $PHPR_TAB_PRE."regioni";
$tablecitta = $PHPR_TAB_PRE."citta";
$tabledocumentiid = $PHPR_TAB_PRE."documentiid";
$tablerelinventario = $PHPR_TAB_PRE."relinventario";
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tableanni = $PHPR_TAB_PRE."anni";

unset($id_utente);
$attiva_contratti_consentiti = "n";

$anno_esist = esegui_query("select tipo_periodi from $tableanni where idanni = '".aggslashdb((int) $anno)."' ");
if (!numlin_query($anno_esist)) exit("Sorry, year $anno does not exist in database.<br>");



if ($ut_lis) $utente_liste = $ut_lis;
else {
$utente_liste = esegui_query("select idutenti from $tableutenti where nome_utente = '".aggslashdb($utente_liste)."'");
if (numlin_query($utente_liste) != 1) $utente_liste = 1;
else $utente_liste = risul_query($utente_liste,0,'idutenti');
} # fine else if ($ut_lis)

if (!empty($dati_relutenti)) {
mostra_frame_rel($id,$rel,$rel_sup,$utente_liste,$cmp,$mostra_cod,$pieno,"dati_rel","30","70");
exit();
} # fine if (!empty($dati_relutenti))


$target = "";
if (!empty($framed)) {
if (!empty($blank)) $target = " target=\"_blank\"";
else $target = " target=\"_top\"";
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
        \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
<meta name=\"viewport\" content=\"initial-scale=1.0\">
<title>$pag</title>
";
if ($file_css_frame) echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$file_css_frame\" media=\"all\">
";
elseif ($extra_head_frame) echo "$extra_head_frame
";
echo "</head>
<body>
";
} # fine if (!empty($framed))


if ($estendi_ultima_data == "SI" or $chiedi_oracheckin != "NO") {
$ultima_data_menu_periodi = explode("<option value=\"",$menu_periodi);
$penultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 2)],0,10);
$ultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 1)],0,10);
$date_mancanti = esegui_query("select datafine from  $tableperiodi where datafine > '$ultima_data_menu_periodi' order by idperiodi");
$num_date_mancanti = numlin_query($date_mancanti);
if ($num_date_mancanti > 0 or $chiedi_oracheckin != "NO") {
$id_ultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$ultima_data_menu_periodi'");
$id_ultima_data = risul_query($id_ultima_data,0,'idperiodi');
$id_penultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$penultima_data_menu_periodi'");
$id_penultima_data = risul_query($id_penultima_data,0,'idperiodi');
$intervalloperiodo = $id_ultima_data - $id_penultima_data;
} # fine if ($num_date_mancanti > 0 or $chiedi_oracheckin != "NO")
if ($num_date_mancanti > 0 and $estendi_ultima_data == "SI") {
if ($intervalloperiodo == 1) $num_intervallo = 1;
else $num_intervallo = 2;
for ($num1 = 0 ; $num1 < $num_date_mancanti ; $num1++) {
if ($num_intervallo == 1) {
$data_option = risul_query($date_mancanti,$num1,'datafine');
$giorno_option = substr($data_option,8,2);
$mese_option = substr($data_option,5,2);
$anno_option = substr($data_option,0,4);
$nome_giorno = date("D" , mktime(0,0,0,$mese_option,$giorno_option,$anno_option));
$nome_mese = date("M" , mktime(0,0,0,$mese_option,$giorno_option,$anno_option));
if ($tipo_periodi == "g") {
if ($nome_giorno == "Sun") $nome_giorno = mex_data(" Do");
if ($nome_giorno == "Mon") $nome_giorno = mex_data(" Lu");
if ($nome_giorno == "Tue") $nome_giorno = mex_data(" Ma");
if ($nome_giorno == "Wed") $nome_giorno = mex_data(" Me");
if ($nome_giorno == "Thu") $nome_giorno = mex_data(" Gi");
if ($nome_giorno == "Fri") $nome_giorno = mex_data(" Ve");
if ($nome_giorno == "Sat") $nome_giorno = mex_data(" Sa");
} # fine if ($tipo_periodi == "g")
else $nome_giorno = "";
if ($nome_mese == "Jan") $nome_mese = mex_data("Gen");
if ($nome_mese == "Feb") $nome_mese = mex_data("Feb");
if ($nome_mese == "Mar") $nome_mese = mex_data("Mar");
if ($nome_mese == "Apr") $nome_mese = mex_data("Apr");
if ($nome_mese == "May") $nome_mese = mex_data("Mag");
if ($nome_mese == "Jun") $nome_mese = mex_data("Giu");
if ($nome_mese == "Jul") $nome_mese = mex_data("Lug");
if ($nome_mese == "Aug") $nome_mese = mex_data("Ago");
if ($nome_mese == "Sep") $nome_mese = mex_data("Set");
if ($nome_mese == "Oct") $nome_mese = mex_data("Ott");
if ($nome_mese == "Nov") $nome_mese = mex_data("Nov");
if ($nome_mese == "Dec") $nome_mese = mex_data("Dic");
$menu_periodi .= "<option value=\"$data_option\">$nome_mese $giorno_option$nome_giorno, $anno_option</option>
";
} # fine if ($num_intervallo == 1)
if ($num_intervallo == $intervalloperiodo) $num_intervallo = 1;
else $num_intervallo++;
} # fine for $num1
} # fine if ($num_date_mancanti > 0 and $estendi_ultima_data == "SI")
} # fine if ($estendi_ultima_data == "SI" or $chiedi_oracheckin != "NO")

if (empty($num_tipologie)) $num_tipologie = 1;
else if (controlla_num_pos($num_tipologie) == "NO" or $num_tipologie == 0) $num_tipologie = 1;
if (!empty($aggiungi_nuova_tipologia)) $num_tipologie++;
if (!empty($elimina_ultima_tipologia) and $num_tipologie > 1) $num_tipologie--;
if ($num_tipologie > $max_num_tipologie) $num_tipologie = $max_num_tipologie;
if ($aggiungi_tipologie != "SI") $num_tipologie = 1;

$costi_elimina_promo = array();
$costi_aggiungi_promo = array();
if ($num_codici_promo and strcmp((string) $codpromo,"")) {
if (@get_magic_quotes_gpc()) $codpromo = stripslashes($codpromo);
for ($num1 = 0 ; $num1 < $num_codici_promo ; $num1++) {
if (trim(strtoupper($codpromo)) == trim(strtoupper($codici_promo[$num1])) and $costi_codici_promo[$num1] != $costo_aggiungi_letti) {
if ($tipi_codici_promo[$num1] == "-") $costi_elimina_promo[$costi_codici_promo[$num1]] = 1;
else {
$costi_aggiungi_promo[$costi_codici_promo[$num1]] = 1;
$costi_agg_mostra[$costi_codici_promo[$num1]] = "SI";
} # fine else if ($tipi_codici_promo[$num1] == "-")
} # fine if (trim(strtoupper($codpromo)) == trim(strtoupper($codici_promo[$num1])) and...
} # fine for $num1
} # fine if ($num_codici_promo and strcmp((string) $codpromo,""))


if (!empty($contr_disp)) {
$mostra_form = "NO";
echo $apertura_tag_font;

$liberato = "NO";
$verificare = "SI";
$torna_indietro = "NO";
$mostra_c_e_disp = "";


$tabelle_lock = "";
$altre_tab_lock = array($tableprenota,$tablenometariffe,$tableperiodi,$tableappartamenti,$tableregole,$tablepersonalizza,$tablerelinventario);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$appartamenti = esegui_query("select * from $tableappartamenti ");
$numappartamenti = numlin_query($appartamenti);
$dati_tariffe = dati_tariffe($tablenometariffe,"","",$tableregole);
$dati_cat_pers = dati_cat_pers($utente_liste,$tablepersonalizza,$lingua_modello,"s",1,",$lista_lingue");
$dati_ca = dati_costi_agg_ntariffe($tablenometariffe,$dati_tariffe['num'],"NO","",$tableappartamenti,$dati_cat_pers);
unset($dati_r2);
dati_regole2($dati_r2,$app_regola2_predef,"","","",$id_periodo_corr,$tipo_periodi,$anno,$tableregole);
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$num_regole2 = numlin_query($regole2);
$regole3 = esegui_query("select * from $tableregole where tariffa_per_persone != ''");
$num_regole3 = numlin_query($regole3);
$numpers_regola3 = array();
$minpers_regola3 = array();
for ($num1 = 0 ; $num1 < $num_regole3 ; $num1++) {
$numtariffa_regola3 = str_replace("tariffa","",risul_query($regole3,$num1,'tariffa_per_persone'));
if (isset($tariffe_mostra[$numtariffa_regola3]) and $tariffe_mostra[$numtariffa_regola3] == "SI") {
if (risul_query($regole3,$num1,'iddatainizio')) $numpers_regola3[$numtariffa_regola3] = risul_query($regole3,$num1,'iddatainizio');
if (risul_query($regole3,$num1,'iddatafine')) $minpers_regola3[$numtariffa_regola3] = risul_query($regole3,$num1,'iddatafine');
} # fine if (isset($tariffe_mostra[$numtariffa_regola3]) and $tariffe_mostra[$numtariffa_regola3] == "SI")
} # fine for $num1


if (!empty($da_passo2)) {
$num_tipologie = 0;
$num_tipologie_prec = 0;
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI") {
if (($aggiungi_tipologie_p2 == "SI" and !empty(${"num_app_tipo_richiesti_p2_".$numtariffa})) or ($aggiungi_tipologie_p2 != "SI" and !empty(${"pren_ora".$numtariffa}))) {
$num_tipologie++;
${"numero_tariffa".$num_tipologie} = $numtariffa;
${"num_app_tipo_richiesti".$num_tipologie} = ${"num_app_tipo_richiesti_p2_".$numtariffa};
if ($chiedi_num_persone_passo_1_p2 != "SI") {
${"numpersone".$num_tipologie} = fixset(${"numpersone_p2_".$numtariffa});
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) ${"cat$num1"."_numpers$num_tipologie"} = fixset(${"cat$num1"."_numpers_p2_$numtariffa"});
} # fine if ($chiedi_num_persone_passo_1_p2 != "SI")
${"numcostiagg".$num_tipologie} = fixset(${"numcostiagg_p2_".$numtariffa});
if (!${"numcostiagg".$num_tipologie}) ${"numcostiagg".$num_tipologie} = 0;
for ($numca = 1 ; $numca <= ${"numcostiagg".$num_tipologie} ; $numca++) {
${"idcostoagg".$numca."_".$num_tipologie} = fixset(${"idcostoagg_p2_".$numca."_".$numtariffa});
${"costoagg".$numca."_".$num_tipologie} = fixset(${"costoagg_p2_".$numca."_".$numtariffa});
${"nummoltiplica_ca".$numca."_".$num_tipologie} = fixset(${"nummoltiplica_ca_p2_".$numca."_".$numtariffa});
${"numsettimane".$numca."_".$num_tipologie} = fixset(${"numsettimane_p2_".$numca."_".$numtariffa});
${"catpers_ca".$numca."_".$num_tipologie} = fixset(${"catpers_ca_p2_".$numca."_".$numtariffa});
${"idca_cat".$numca."_".$num_tipologie} = fixset(${"idca_cat_p2_".$numca."_".$numtariffa});
} # fine for $numca
} # fine if (($aggiungi_tipologie_p2 == "SI" and !empty(${"num_app_tipo_richiesti_p2_".$numtariffa})) or...
if ($num_tipologie != $num_tipologie_prec) {
${"inizioperiodo".$num_tipologie} = $inizioperiodo1;
${"fineperiodo".$num_tipologie} = $fineperiodo1;
if ($chiedi_num_persone_passo_1_p2 == "SI") {
${"numpersone".$num_tipologie} = $numpersone1;
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) ${"cat$num1"."_numpers$num_tipologie"} = fixset(${"cat$num1"."_numpers1"});
} # fine if ($chiedi_num_persone_passo_1_p2 == "SI")
$num_tipologie_prec = $num_tipologie;
} # fine if ($num_tipologie != $num_tipologie_prec)
} # fine if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI")
} # fine for $numtariffa
} # fine if (!empty($da_passo2))


foreach ($costi_aggiungi_promo as $id_costo_corr => $val) {
$costo_corr = $dati_ca['id'][$id_costo_corr];
$associa_costo = 0;
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if ($dati_ca[$costo_corr]["tariffa".$numtariffa]) {
$associa_costo = $dati_ca[$costo_corr]["tariffa".$numtariffa];
$tipo_associa_costo = $dati_ca[$costo_corr]["tipo_associa_tariffa".$numtariffa];
break;
} # fine if ($dati_ca[$costo_corr]["tariffa".$numtariffa])
} # fine for $numtariffa
if ($associa_costo) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (!$dati_ca[$costo_corr]["tariffa".$numtariffa] and empty($dati_ca[$costo_corr]["incomp_tariffa".$numtariffa])) {
$dati_ca[$costo_corr]["tipo_associa_tariffa".$numtariffa] = $tipo_associa_costo;
$dati_ca[$costo_corr]["tariffa".$numtariffa] = $associa_costo;
} # fine if (!$dati_ca[$costo_corr]["tariffa".$numtariffa] and...
} # fine for $numtariffa
} # fine if ($associa_costo)
else {
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$numcostiagg = "numcostiagg".$n_t;
$$numcostiagg++;
${"costoagg".$$numcostiagg."_".$n_t} = "SI";
${"idcostoagg".$$numcostiagg."_".$n_t} = $id_costo_corr;
${"numsettimane".$$numcostiagg."_".$n_t} = "1";
${"nummoltiplica_ca".$$numcostiagg."_".$n_t} = "1";
${"catpers_ca".$$numcostiagg."_".$n_t} = "0";
} # fine for $n_t
} # fine else if ($associa_costo)
} # fine foreach ($costi_aggiungi_promo as $id_costo_corr => $val)


$dati_form_iniziale = "<input type=\"hidden\" name=\"num_tipologie\" value=\"$num_tipologie\">
<input type=\"hidden\" name=\"prenota_vicine\" value=\"".htmlspecialchars(fixstr($prenota_vicine))."\">";
if (isset($codpromo) and strcmp((string) $codpromo,"")) $dati_form_iniziale .= "<input type=\"hidden\" name=\"codpromo\" value=\"".htmlspecialchars($codpromo)."\">";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$dati_form_iniziale .= "<input type=\"hidden\" name=\"inizioperiodo$n_t\" value=\"".htmlspecialchars(fixstr(${"inizioperiodo".$n_t}))."\">
<input type=\"hidden\" name=\"fineperiodo$n_t\" value=\"".htmlspecialchars(fixstr(${"fineperiodo".$n_t}))."\">
<input type=\"hidden\" name=\"numero_tariffa$n_t\" value=\"".htmlspecialchars(fixstr(${"numero_tariffa".$n_t}))."\">
<input type=\"hidden\" name=\"numpersone$n_t\" value=\"".htmlspecialchars(fixstr(${"numpersone".$n_t}))."\">";
if ($dati_cat_pers['num']) {
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) $dati_form_iniziale .= "<input type=\"hidden\" name=\"cat$num1"."_numpers$n_t\" value=\"".htmlspecialchars(fixstr(${"cat$num1"."_numpers$n_t"}))."\">";
$dati_form_iniziale .= "<input type=\"hidden\" name=\"num_categorie_persone\" value=\"".$dati_cat_pers['num']."\">";
} # fine if ($dati_cat_pers['num'])
$dati_form_iniziale .= "<input type=\"hidden\" name=\"num_app_tipo_richiesti$n_t\" value=\"".htmlspecialchars(fixstr(${"num_app_tipo_richiesti".$n_t}))."\">";
$numcostiagg = fixset(${"numcostiagg".$n_t});
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {

# Espando le variabili dei costi combinabili
if (isset(${"idcostoagg".$numca."_".$n_t}) and substr(${"idcostoagg".$numca."_".$n_t},0,1) == "c") {
$categoria = substr(${"idcostoagg".$numca."_".$n_t},1);
$num_in_cat = 0;
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if ($dati_ca[$num1]['mostra'] == "s" and $dati_ca[$num1]['combina'] == "s" and $dati_ca[$num1]['categoria'] == $categoria and isset(${"idca_cat$numca"."_$n_t"}) and strstr(${"idca_cat$numca"."_$n_t"},",".$dati_ca[$num1]['id'].",")) {
$num_in_cat++;
if ($num_in_cat != 1) {
$numcostiagg++;
${"costoagg".$numcostiagg."_".$n_t} = fixset(${"costoagg".$numca."_".$n_t});
${"idcostoagg".$numcostiagg."_".$n_t} = $dati_ca[$num1]['id'];
${"numsettimane".$numcostiagg."_".$n_t} = fixset(${"numsettimane".$numca."_".$n_t});
${"nummoltiplica_ca".$numcostiagg."_".$n_t} = fixset(${"nummoltiplica_ca".$numca."_".$n_t});
${"catpers_ca".$numcostiagg."_".$n_t} = fixset(${"catpers_ca".$numca."_".$n_t});
} # fine else if ($num_in_cat == 1)
else ${"idcostoagg".$numca."_".$n_t} = $dati_ca[$num1]['id'];
} # fine if ($dati_ca[$num1]['mostra'] == "s" and $dati_ca[$num1]['combina'] == "s" and...
} # fine for $num1
if (!$num_in_cat) $verificare = "NO";
else ${"numcostiagg".$n_t} = $numcostiagg;
} # fine if (isset(${"idcostoagg".$numca."_".$n_t}) and substr(${"idcostoagg".$numca."_".$n_t},0,1) == "c")

if ($chiedi_num_persone == "SI" and fixset($dati_ca[fixset($dati_ca['id'][${"idcostoagg".$numca."_".$n_t}])]['mostra_numpers']) == "s" and ${"nummoltiplica_ca".$numca."_".$n_t}) ${"costoagg".$numca."_".$n_t} = "SI";
$dati_form_iniziale .= "<input type=\"hidden\" name=\"idcostoagg$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"idcostoagg".$numca."_".$n_t}))."\">
<input type=\"hidden\" name=\"costoagg$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"costoagg".$numca."_".$n_t}))."\">
<input type=\"hidden\" name=\"numsettimane$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"numsettimane".$numca."_".$n_t}))."\">
<input type=\"hidden\" name=\"nummoltiplica_ca$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"nummoltiplica_ca".$numca."_".$n_t}))."\">
<input type=\"hidden\" name=\"catpers_ca$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"catpers_ca".$numca."_".$n_t}))."\">
<input type=\"hidden\" name=\"id_periodi_costo$numca"."_$n_t\" value=\"".htmlspecialchars(fixstr(${"id_periodi_costo".$numca."_".$n_t}))."\">";
} # fine for $numca
$dati_form_iniziale .= "<input type=\"hidden\" name=\"numcostiagg$n_t\" value=\"".htmlspecialchars($numcostiagg)."\">";
} # fine for $n_t



unset($limiti_var);
$limiti_var['idperiodocorrente'] = calcola_id_periodo_corrente($anno);
$idperiodocorrente_reale = calcola_id_periodo_corrente($anno,"NO");
if ($cerca_app_vicini != "SI" and $cerca_app_vicini != "chiedere" and $cerca_app_vicini != "se_poss") $prenota_vicine = "";
if ($cerca_app_vicini == "SI" or $cerca_app_vicini == "se_poss") $prenota_vicine = "SI";
if ($prenota_vicine != "SI") $prenota_vicine = "";
unset($idinizioperiodo_min);
unset($idfineperiodo_max);
$app_incomp_costi = array();
$app_eliminati_costi = array();
$beniinv_presenti = array();
unset($num_ripetizioni_costo);
unset($costo_tariffa_reg);
unset($tariffesettimanali_reg);
unset($caparra_reg);
unset($commissioni_reg);
unset($lista_app_reg);
unset($num_costi_reg);
unset($costo_tariffa_tot_reg);
unset($num_letti_agg_reg);
unset($nome_costo_reg);
unset($val_costo_reg);
unset($tasseperc_costo_reg);
unset($moltmax_costo_reg);
unset($valgiornmax_costo_reg);
unset($giorni_costo_reg);
unset($tipo_persona_costo_reg);
unset($app_richiesti);
unset($interrompi_vicine_ogni);
unset($prenota_vicine_nt);
unset($num_app_reali_costo);
unset($diff_aggiungi_letti);
$numpersone_orig_nt = array();
$numpersone_orig_ric_nt = array();
$numpersone_nr = array();
$cat_persone = array();
$cat_persone_nr = array();
$cat_numpers_orig = array();
$num_app_tipo_richiesti_orig = array();
$num_app_richiesti = 0;


for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$inizioperiodo = ${"inizioperiodo".$n_t};
$fineperiodo = ${"fineperiodo".$n_t};
$numero_tariffa = ${"numero_tariffa".$n_t};
$app_incomp_costi[$n_t] = "";

if (!$inizioperiodo or !$fineperiodo or !$numero_tariffa) $verificare = "NO";

if (!preg_match("/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/",$inizioperiodo)) $inizioperiodo = "1975-01-01";
if (!preg_match("/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/",$fineperiodo)) $fineperiodo = "1975-01-01";
$data_inizioperiodo[$n_t] = $inizioperiodo;
$data_inizioperiodo_f[$n_t] = formatta_data($data_inizioperiodo[$n_t],$stile_data);
$data_fineperiodo[$n_t] = $fineperiodo;
$data_fineperiodo_f[$n_t] = formatta_data($data_fineperiodo[$n_t],$stile_data);
$idinizioperiodo[$n_t] = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($inizioperiodo)."' ");
$num_idinizioperiodo = numlin_query($idinizioperiodo[$n_t]);
if ($num_idinizioperiodo == 0) { $idinizioperiodo[$n_t] = 10000; }
else { $idinizioperiodo[$n_t] = risul_query($idinizioperiodo[$n_t],0,'idperiodi'); }
$inizioperiodo = $idinizioperiodo[$n_t];
if (empty($idinizioperiodo_min) or $inizioperiodo < $idinizioperiodo_min) $idinizioperiodo_min = $inizioperiodo;
$idfineperiodo[$n_t] = esegui_query("select idperiodi from $tableperiodi where datafine = '".aggslashdb($fineperiodo)."' ");
$num_idfineperiodo = numlin_query($idfineperiodo[$n_t]);
if ($num_idfineperiodo == 0) { $idfineperiodo[$n_t] = -1; }
else { $idfineperiodo[$n_t] = risul_query($idfineperiodo[$n_t],0,'idperiodi'); }
$fineperiodo = $idfineperiodo[$n_t];
if (empty($idfineperiodo_max) or $fineperiodo > $idfineperiodo_max) $idfineperiodo_max = $fineperiodo;

if (str_replace("<option value=\"".$data_inizioperiodo[$n_t]."\">","",$menu_periodi) == $menu_periodi or str_replace("<option value=\"".$data_fineperiodo[$n_t]."\">","",$menu_periodi) == $menu_periodi) {
$idfineperiodo[$n_t] = -1;
$idinizioperiodo[$n_t] = 10000;
} # fine if (str_replace("<option value=\"$\">","",$menu_periodi) == $menu_periodi or...

if ($idfineperiodo[$n_t] < $idinizioperiodo[$n_t] or $idinizioperiodo[$n_t] < ($idperiodocorrente_reale + $sett_no_prenota)) {
$verificare = "NO";
echo "$fr_Le_date_sono_sbagliate";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if ($idfineperiodo[$n_t] < $idinizioperiodo[$n_t] or...

$cat_persone[$n_t] = array('num' => 0);
if ($chiedi_num_persone != "SI") {
${"numpersone".$n_t} = "";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) ${"cat$num1"."_numpers$n_t"} = "";
} # fine if ($chiedi_num_persone != "SI")
elseif ($dati_cat_pers['num']) {
${"numpersone".$n_t} = 0;
$osp_princ_trovato = 0;
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (${"cat$num1"."_numpers$n_t"}) {
if (controlla_num_pos(${"cat$num1"."_numpers$n_t"}) == "NO") {
$verificare = "NO";
echo "$fr_Il_numero_di $fr_persone $fr_richiesto_e_sbagliato";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if (controlla_num_pos(${"cat$num1"."_numpers$n_t"}) == "NO")
else ${"numpersone".$n_t} += ${"cat$num1"."_numpers$n_t"};
$cat_persone[$n_t][$cat_persone[$n_t]['num']]['molt'] = ${"cat$num1"."_numpers$n_t"};
$cat_persone[$n_t]['ord'][$num1] = $cat_persone[$n_t]['num'];
$cat_persone[$n_t][$cat_persone[$n_t]['num']]['ord'] = $num1;
$cat_persone[$n_t]['num']++;
if ($dati_cat_pers[$num1]['osp_princ'] == "s") $osp_princ_trovato = 1;
} # fine if (${"cat$num1"."_numpers$n_t"})
} # fine for $num1
if (${"numpersone".$n_t} and !$osp_princ_trovato) {
$verificare = "NO";
echo "$fr_Si_deve_inserire_almeno_una_persona_che_possa_ecc";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if (${"numpersone".$n_t} and !$osp_princ_trovato)
} # fine elseif ($dati_cat_pers['num'])
if (!${"numpersone".$n_t} and !empty($numpers_regola3[$numero_tariffa])) {
${"numpersone".$n_t} = $numpers_regola3[$numero_tariffa];
if ($dati_cat_pers['num']) ${"cat0_numpers$n_t"} = $numpers_regola3[$numero_tariffa];
} # fine if (!${"numpersone".$n_t} and !empty($numpers_regola3[$numero_tariffa]))
$numpersone = ${"numpersone".$n_t};
if (!empty($minpers_regola3[$numero_tariffa]) and $minpers_regola3[$numero_tariffa] > $numpersone) {
if ($minpers_regola3[$numero_tariffa] == 1) {
${"numpersone".$n_t} = 1;
$numpersone = 1;
} # fine if ($minpers_regola3[$numero_tariffa] == 1)
else {
$verificare = "NO";
echo "$fr_Per_questa_tariffa_si_deve_inserire_un_minimo_di ".$minpers_regola3[$numero_tariffa]." $fr_persone";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine else if ($minpers_regola3[$numero_tariffa] == 1)
} # fine if (!empty($minpers_regola3[$numero_tariffa]) and...

if ($chiedi_num_app_tipologia != "SI") ${"num_app_tipo_richiesti".$n_t} = 1;
if (!${"num_app_tipo_richiesti".$n_t} or ${"num_app_tipo_richiesti".$n_t} == 0) ${"num_app_tipo_richiesti".$n_t} = 1;
$num_app_tipo_richiesti = ${"num_app_tipo_richiesti".$n_t};
$num_app_tipo_richiesti_orig[$n_t] = $num_app_tipo_richiesti;
if (controlla_num_pos($num_app_tipo_richiesti) == "NO" or strlen($num_app_tipo_richiesti) > 3 or ($max_num_app_tipologia != 0 and $num_app_tipo_richiesti > $max_num_app_tipologia)) {
$verificare = "NO";
echo "$fr_Il_numero_di $fr_appartamenti $fr_richiesto_e_sbagliato";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if (controlla_num_pos($num_app_tipo_richiesti) == "NO" or...
$num_app_richiesti += $num_app_tipo_richiesti;

unset(${"app_richiesti".$n_t});
$numpersone_nr[$n_t] = array();
$cat_persone_nr[$n_t] = array();
if (!isset($tariffe_mostra[$numero_tariffa]) or $tariffe_mostra[$numero_tariffa] != "SI") {
$verificare = "NO";
echo "$fr_La_tipologia_e_sbagliata";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if (!isset($tariffe_mostra[$numero_tariffa]) or $tariffe_mostra[$numero_tariffa] != "SI")
else {
$tipotariffa = "tariffa".$numero_tariffa;
$nometariffa = $dati_tariffe[$tipotariffa]['nome'];
$nometariffa_vedi[$n_t] = $nometariffa;
if ($nometariffa == "") {
$nometariffa = $tariffa;
$nometariffa_vedi[$n_t] = $fr_tariffa.$numero_tariffa;
} # fine if ($nometariffa == "")
if (!empty($n_tariffe_imposte[$numero_tariffa])) ${"nometariffa_imposta".$n_t} = $n_tariffe_imposte[$numero_tariffa];
else ${"nometariffa_imposta".$n_t} = $nometariffa_vedi[$n_t];
$lista_app_reg[$n_t] = dati_regole2($dati_r2,$app_regola2_predef,$tipotariffa,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$idperiodocorrente_reale,$tipo_periodi,$anno,$tableregole);
if ($lista_app_reg[$n_t]) {
$vett_app = explode(",",$lista_app_reg[$n_t]);
for ($num1 = 0 ; $num1 < count($vett_app) ; $num1++) {
$idapp = $vett_app[$num1];
${"app_richiesti".$n_t}[$idapp] = "SI";
} # fine for $num1
if (!empty($dati_r2['napp'][$tipotariffa])) {
if ($numpersone) {
$numpersone_orig_nt[$n_t] = $numpersone;
$numpersone_orig_ric_nt[$n_t] = $numpersone;
$numpersone = ceil((double) $numpersone / (double) $dati_r2['napp'][$tipotariffa]);
$diff_persone = ((int) $numpersone * (int) $dati_r2['napp'][$tipotariffa]) - (int) $numpersone_orig_nt[$n_t];
} # fine if ($numpersone)
$cat_persone_copia = $cat_persone[$n_t];
for ($num1 = 0 ; $num1 < $dati_r2['napp'][$tipotariffa] ; $num1++) {
if ($diff_persone and ($num1 + $diff_persone) > $dati_r2['napp'][$tipotariffa]) {
$numpersone_nr[$n_t][$num1] = $numpersone - 1;
$numpersone_cp = $numpersone_nr[$n_t][$num1];
} # fine if ($diff_persone and ($num1 + $diff_persone) > $dati_r2['napp'][$tipotariffa])
else $numpersone_cp = $numpersone;
$cat_persone_nr[$n_t][$num1] = array('num' => 0);
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt'] and $numpersone_cp) {
if ($numpersone_cp > $cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt']) $numpersone_corr_cp = $cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt'];
else $numpersone_corr_cp = $numpersone_cp;
$cat_persone_nr[$n_t][$num1][$cat_persone_nr[$n_t][$num1]['num']]['molt'] = $numpersone_corr_cp;
$cat_persone_nr[$n_t][$num1]['ord'][$num2] = $cat_persone_nr[$n_t][$num1]['num'];
$cat_persone_nr[$n_t][$num1][$cat_persone_nr[$n_t][$num1]['num']]['ord'] = $num2;
$cat_persone_nr[$n_t][$num1]['num']++;
$numpersone_cp = $numpersone_cp - $numpersone_corr_cp;
$cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt'] = $cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt'] - $numpersone_corr_cp;
} # fine if ($cat_persone_copia[$cat_persone_copia['ord'][$num2]]['molt'] and $numpersone_cp)
} # fine for $num2
for ($num2 = ($num1 + $dati_r2['napp'][$tipotariffa]) ; $num2 < ($num_app_tipo_richiesti * $dati_r2['napp'][$tipotariffa]) ; $num2 += $dati_r2['napp'][$tipotariffa]) {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_nr[$n_t][$num2] = $numpersone_nr[$n_t][$num1];
if (!empty($cat_persone_nr[$n_t][$num1])) $cat_persone_nr[$n_t][$num2] = $cat_persone_nr[$n_t][$num1];
} # fine for $num2
} # fine for $num1
if ($num_app_tipo_richiesti > 1) {
$num_app_tipo_richiesti = $num_app_tipo_richiesti * $dati_r2['napp'][$tipotariffa];
# Se gli appartamenti sono vicini solo per la regola 2 devo introdurre dei separatori di vicinanza
if ($dati_r2['napp']['v'][$tipotariffa]) $interrompi_vicine_ogni[$n_t] = $dati_r2['napp'][$tipotariffa];
} # fine if ($num_app_tipo_richiesti > 1)
else $num_app_tipo_richiesti = $dati_r2['napp'][$tipotariffa];
if ($dati_r2['napp']['v'][$tipotariffa]) {
$prenota_vicine_nt[$n_t] = 1;
$app_richiesti[',vicini,'] = "SI";
} # fine if ($dati_r2['napp']['v'][$tipotariffa])
${"numpersone".$n_t} = $numpersone;
${"num_app_tipo_richiesti".$n_t} = $num_app_tipo_richiesti;
} # fine if (!empty($dati_r2['napp'][$tipotariffa]))
} # fine if ($lista_app_reg[$n_t])
} # fine else if (!isset($tariffe_mostra[$numero_tariffa]) or $tariffe_mostra[$numero_tariffa] != "SI")

# prima parte dei controlli legati al numero di persone
${"aggiungi_costo_letto".$n_t} = "NO";
${"catpers_costo_letto".$n_t} = "";
if ($numpersone) {
if (controlla_num_pos($numpersone) == "NO" or ($max_num_persone != 0 and $numpersone > $max_num_persone)) {
$verificare = "NO";
echo "$fr_Il_numero_di $fr_persone $fr_richiesto_e_sbagliato";
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
} # fine if (controlla_num_pos($numpersone) == "NO" or...
if (strcmp((string) $costo_aggiungi_letti,"")) {
$num_cal = $dati_ca['id'][$costo_aggiungi_letti];
if ($dati_ca[$num_cal]['letto'] == "s" and $dati_ca[$num_cal]['numsett'] != "c" and $dati_ca[$num_cal]['combina'] != "s") {
$max_capacita = 0;
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (((!${"app_richiesti".$n_t} or (isset(${"app_richiesti".$n_t}[$idapp]) and ${"app_richiesti".$n_t}[$idapp] == "SI")) and !$app_regola2_predef) or (str_replace(",$idapp,","",",$app_regola2_predef,") != ",$app_regola2_predef," and $app_regola2_predef)) {
$maxoccupanti = risul_query($appartamenti,$num1,'maxoccupanti');
if (!$maxoccupanti) $max_capacita = $numpersone;
else if ($maxoccupanti > $max_capacita) $max_capacita = $maxoccupanti;
} # fine if (((!${"app_richiesti".$n_t} or (isset(${"app_richiesti".$n_t}[$idapp]) and ${"app_richiesti".$n_t}[$idapp] == "SI")) and !$app_regola2_predef) or...
} # fine for $num1
if ($dati_ca[$num_cal]['moltiplica'] != "c") $max_num_aggiungi_letti = 1;
if ($numpersone > $max_capacita and ($numpersone - $max_capacita) <= $max_num_aggiungi_letti and $costi_agg_mostra[$costo_aggiungi_letti] == "SI") {
# Se ci sono categorie di persone controllo che ci sia almeno una categoria da cui si possa
# sottrarre il numero di letti aggiuntivi, altrimenti ne diminuisco il numero
$num_aggiungi_letti = ($numpersone - $max_capacita);
if ($dati_cat_pers['num']) {
$cat_pers_letto = "";
$perc_cat_pers_letto = "";
while (!strcmp((string) $cat_pers_letto,"") and $num_aggiungi_letti > 0) {
for ($num2 = ($dati_cat_pers['num'] - 1) ; $num2 >= 0 ; $num2--) {
# Se c'è anche una regola2 multipla allora applico il costo 
if (!empty($numpersone_orig_nt[$n_t])) $num_aggiungi_letti_corr = $numpersone_orig_nt[$n_t] - ($max_capacita * $dati_r2['napp'][$tipotariffa]);
else $num_aggiungi_letti_corr = $num_aggiungi_letti;
if ((${"cat$num2"."_numpers".$n_t} >= $num_aggiungi_letti_corr) and (!$perc_cat_pers_letto or $perc_cat_pers_letto > $dati_cat_pers[$num2]['perc'])) {
$osp_princ_trovato = 0;
for ($num3 = 0 ; $num3 < $dati_cat_pers['num'] ; $num3++) {
if ($dati_cat_pers[$num3]['osp_princ'] == "s") {
if (($num2 != $num3 and ${"cat$num3"."_numpers".$n_t} > 0) or ($num2 == $num3 and (${"cat$num2"."_numpers".$n_t} - $num_aggiungi_letti) > 0)) $osp_princ_trovato = 1;
if ($osp_princ_trovato) break;
} # fine if ($dati_cat_pers[$num3]['osp_princ'] == "s")
} # fine for $num3
if ($osp_princ_trovato) {
$cat_pers_letto = $num2;
$perc_cat_pers_letto = $dati_cat_pers[$num2]['perc'];
} # fine if ($osp_princ_trovato)
} # fine if ((${"cat$num2"."_numpers".$n_t} >= $num_aggiungi_letti) and (!$perc_cat_pers_letto or $perc_cat_pers_letto > $dati_cat_pers[$num2]['perc']))
} # fine for $num2
if (!strcmp((string) $cat_pers_letto,"")) $num_aggiungi_letti--;
} # fine while (!strcmp((string) $cat_pers_letto,"") and $num_aggiungi_letti > 0)
} # fine if ($dati_cat_pers['num'])
if (($numpersone - $max_capacita) <= $num_aggiungi_letti) {
${"aggiungi_costo_letto".$n_t} = "SI";
${"num_aggiungi_letti".$n_t} = ($numpersone - $max_capacita);
$numpersone = $max_capacita;
${"numpersone".$n_t} = $numpersone;
if (!empty($numpersone_orig_nt[$n_t])) {
if ($num_aggiungi_letti == 1) $num_app_reali_costo[$n_t][(${"numcostiagg".$n_t} + 1)] = ($numpersone_orig_nt[$n_t] - ($numpersone * $dati_r2['napp'][$tipotariffa])) * $num_app_tipo_richiesti_orig[$n_t];
else $diff_aggiungi_letti[$n_t][(${"numcostiagg".$n_t} + 1)] = ($numpersone_orig_nt[$n_t] - ($numpersone * $dati_r2['napp'][$tipotariffa])) * $num_app_tipo_richiesti_orig[$n_t];
$numpersone_orig_nt[$n_t] = $numpersone * $dati_r2['napp'][$tipotariffa];
} # fine if (!empty($numpersone_orig_nt[$n_t]))
if ($dati_cat_pers['num']) {
${"catpers_costo_letto".$n_t} = $cat_pers_letto;
$cat_numpers_orig[$n_t][$cat_pers_letto] = ${"cat$cat_pers_letto"."_numpers".$n_t};
if (!empty($numpersone_orig_nt[$n_t])) {
if ($num_aggiungi_letti == 1) $catpers_cp = $num_app_reali_costo[$n_t][(${"numcostiagg".$n_t} + 1)];
else $catpers_cp = (($num_aggiungi_letti - 1) * $dati_r2['napp'][$tipotariffa]) + $diff_aggiungi_letti[$n_t][(${"numcostiagg".$n_t} + 1)];
${"cat$cat_pers_letto"."_numpers".$n_t} = ${"cat$cat_pers_letto"."_numpers".$n_t} - $catpers_cp;
for ($num2 = 0 ; $num2 < $dati_r2['napp'][$tipotariffa] ; $num2++) {
if (!empty($cat_persone_nr[$n_t][$num2])) {
if ($cat_persone_nr[$n_t][$num2][$cat_persone_nr[$n_t][$num2]['ord'][$cat_pers_letto]]['molt'] and $catpers_cp) {
if ($catpers_cp > $cat_persone_nr[$n_t][$num2][$cat_persone_nr[$n_t][$num2]['ord'][$cat_pers_letto]]['molt']) $numpersone_corr_cp = $cat_persone_nr[$n_t][$num2][$cat_persone_nr[$n_t][$num2]['ord'][$cat_pers_letto]]['molt'];
else $numpersone_corr_cp = $catpers_cp;
$catpers_cp = $catpers_cp - $numpersone_corr_cp;
$cat_persone_nr[$n_t][$num2][$cat_persone_nr[$n_t][$num2]['ord'][$cat_pers_letto]]['molt'] = $cat_persone_nr[$n_t][$num2][$cat_persone_nr[$n_t][$num2]['ord'][$cat_pers_letto]]['molt'] - $numpersone_corr_cp;
if (isset($numpersone_nr[$n_t][$num2]) and strcmp((string) $numpersone_nr[$n_t][$num2],"")) $numpersone_corr = $numpersone_nr[$n_t][$num2];
else $numpersone_corr = $numpersone + $num_aggiungi_letti;
$numpersone_nr[$n_t][$num2] = $numpersone_corr - $numpersone_corr_cp;
} # fine if (${"cat$cat_pers_letto"."_numpers$n_t"} and $catpers_cp)
} # fine if (!empty($cat_persone_nr[$n_t][$num2]))
for ($num3 = ($num2 + $dati_r2['napp'][$tipotariffa]) ; $num3 < $num_app_tipo_richiesti ; $num3 += $dati_r2['napp'][$tipotariffa]) {
if (isset($numpersone_nr[$n_t][$num2]) and strcmp((string) $numpersone_nr[$n_t][$num2],"")) $numpersone_nr[$n_t][$num3] = $numpersone_nr[$n_t][$num2];
if (!empty($cat_persone_nr[$n_t][$num2])) $cat_persone_nr[$n_t][$num3] = $cat_persone_nr[$n_t][$num2];
} # fine for $num3
} # fine for $num2
} # fine if (!empty($numpersone_orig_nt[$n_t]))
else ${"cat$cat_pers_letto"."_numpers".$n_t} = ${"cat$cat_pers_letto"."_numpers".$n_t} - $num_aggiungi_letti;
$cat_persone[$n_t][$cat_persone[$n_t]['ord'][$cat_pers_letto]]['molt'] = ${"cat$cat_pers_letto"."_numpers".$n_t};
} # fine if ($dati_cat_pers['num'])
} # fine if (($numpersone - $max_capacita) <= $num_aggiungi_letti)
} # fine if ($numpersone > $maxoccupanti and ($numpersone - $maxoccupanti) >= $max_num_aggiungi_letti and...
} # fine if ($dati_ca[$num_cal]['letto'] == "s" and $dati_ca[$num_cal]['numsett'] != "c" and...
} # fine if (strcmp((string) $costo_aggiungi_letti,""))
} # fine if ($numpersone)


# se vi sono costi (anche da aggiungi_costo_letto) con appartamenti incompatibili
if ($mostra_costi_aggiuntivi == "SI") {
for ($numca = 1 ; $numca <= ${"numcostiagg".$n_t} ; $numca++) {
$idcostoagg = ${"idcostoagg".$numca."_".$n_t};
$num_costo = $dati_ca['id'][$idcostoagg];
if (isset($dati_ca[$num_costo]['mostra']) and $dati_ca[$num_costo]['mostra'] == "s" and isset($costi_agg_mostra[$idcostoagg]) and $costi_agg_mostra[$idcostoagg] == "SI") {
$costoagg = ${"costoagg".$numca."_".$n_t};
if ($idcostoagg == $costo_aggiungi_letti) $costoagg = "";
if ($costoagg == "SI" and $dati_ca[$num_costo]['appincompatibili']) $app_incomp_costi[$n_t] .= ",".$dati_ca[$num_costo]['appincompatibili'];
} # fine if (isset($dati_ca[$num_costo]['mostra']) and $dati_ca[$num_costo]['mostra'] == "s" and...
} # fine for $numca
} # fine if ($mostra_costi_aggiuntivi == "SI")
if (${"aggiungi_costo_letto".$n_t} == "SI" and $dati_ca[$dati_ca['id'][$costo_aggiungi_letti]]['appincompatibili']) $app_incomp_costi[$n_t] .= ",".$dati_ca[$dati_ca['id'][$costo_aggiungi_letti]]['appincompatibili'];
if ($app_incomp_costi[$n_t]) {
$app_incomp_costi[$n_t] .= ",";
$app_richiesti_copia = ${"app_richiesti".$n_t};
if (!$lista_app_reg[$n_t]) {
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
$lista_app_reg[$n_t] .= ",$idapp";
} # fine for $num1
$lista_app_reg[$n_t] = substr($lista_app_reg[$n_t],1);
} # fine if (!$lista_app_reg[$n_t])
$app_eliminati_costi[$n_t] = "";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
if (str_replace(",$idapp,","",$app_incomp_costi[$n_t]) != $app_incomp_costi[$n_t]) {
${"app_richiesti".$n_t}[$idapp] = "NO";
$lista_app_reg[$n_t] = substr(str_replace(",$idapp,",",",",".$lista_app_reg[$n_t].","),1,-1);
$app_eliminati_costi[$n_t] .= ",$idapp";
} # fine if (str_replace(",$idapp,","",$app_incomp_costi[$n_t]) != $app_incomp_costi[$n_t])
else ${"app_richiesti".$n_t}[$idapp] = "SI";
} # fine if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI"))
} # fine for $num1
$app_eliminati_costi[$n_t] = substr($app_eliminati_costi[$n_t],1);
} # fine if ($app_incomp_costi[$n_t])

# se vi sono costi (anche da aggiungi_costo_letto) con beni inventario dall'appartamento
if (${"aggiungi_costo_letto".$n_t} == "SI") $num_ripeti = ${"numcostiagg".$n_t} + 1;
else $num_ripeti = ${"numcostiagg".$n_t};
for ($numca = 1 ; $numca <= $num_ripeti ; $numca++) {
$processa_costo = "NO";
if ($numca <= ${"numcostiagg".$n_t}) {
$idcostoagg = ${"idcostoagg".$numca."_".$n_t};
if (isset($costi_agg_mostra[$idcostoagg]) and $costi_agg_mostra[$idcostoagg] == "SI" and ${"costoagg".$numca."_".$n_t} == "SI") $processa_costo = "SI";
$nummoltiplica_ca = ${"nummoltiplica_ca".$numca."_".$n_t};
$numsettimane = ${"numsettimane".$numca."_".$n_t};
} # fine if ($numca <= ${"numcostiagg".$n_t})
else {
$processa_costo = "SI";
$idcostoagg = $costo_aggiungi_letti;
$nummoltiplica_ca = ${"num_aggiungi_letti".$n_t};
$numsettimane = "";
} # fine else if ($numca <= ${"numcostiagg".$n_t})
$num_costo = $dati_ca['id'][$idcostoagg];
if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "app" and $processa_costo == "SI" and $dati_ca[$num_costo]['mostra'] == "s") {
$settimane_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],"",aggslashdb($numsettimane));
calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo,aggslashdb($nummoltiplica_ca),$numpersone,$cat_persone[$n_t],"");
$app_richiesti_copia = ${"app_richiesti".$n_t};
$app_trovato = "NO";
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti,$num_ripetizioni_costo[$n_t][$num_costo],"",$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo,$moltiplica_costo,$idapp);
if ($risul != "SI") {
${"app_richiesti".$n_t}[$idapp] = "NO";
$app_eliminati_costi['beniinv'][$n_t] = "SI";
} # fine if ($risul != "SI")
else {
${"app_richiesti".$n_t}[$idapp] = "SI";
$app_trovato = "SI";
} # fine else if ($risul != "SI")
} # fine if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI"))
} # fine for $num1
if ($app_trovato != "SI") {
$verificare = "NO";
if (!empty($n_costi_agg_imposti[$idcostoagg])) $nomecosto_imposto = $n_costi_agg_imposti[$idcostoagg];
else $nomecosto_imposto = $dati_ca[$num_costo]['nome'];
echo "$fr_Errore_nei_servizi_opzionali_richiesti ($nomecosto_imposto).<br>";
if ($costi_aggiungi_promo[$dati_ca[$num_costo]['id']]) echo "<br>$fr_Codice_promozionale_applicato: ".htmlspecialchars($codpromo).".<br>";
break;
} # fine if ($app_trovato != "SI")
} # fine if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "app" and...
} # fine for $numca


# riprendo i controlli legati al numero di persone
if ($numpersone and $verificare != "NO") {
$app_richiesti_copia = ${"app_richiesti".$n_t};
$app_trovato = "NO";
if ($app_regola2_predef) {
$app_regola2_predef = ",$app_regola2_predef,";
$posto_reg2_orig = 0;
} # fine if ($app_regola2_predef)
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$idapp = risul_query($appartamenti,$num1,'idappartamenti');
$maxoccupanti = risul_query($appartamenti,$num1,'maxoccupanti');
if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI")) {
if ($maxoccupanti and $maxoccupanti < $numpersone) ${"app_richiesti".$n_t}[$idapp] = "NO";
else {
${"app_richiesti".$n_t}[$idapp] = "SI";
$app_trovato = "SI";
} # fine else if ($maxoccupanti and $maxoccupanti < $numpersone)
} # fine if (empty($app_richiesti_copia) or (isset($app_richiesti_copia[$idapp]) and $app_richiesti_copia[$idapp] == "SI"))
if ($app_regola2_predef) {
if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef) {
if (!$maxoccupanti or $maxoccupanti >= $numpersone) $posto_reg2_orig = 1;
} # fine if (str_replace(",$idapp,","",$app_regola2_predef) != $app_regola2_predef)
} # fine if ($app_regola2_predef)
} # fine for $num1
if ($app_trovato != "SI" or ($app_regola2_predef and !$posto_reg2_orig)) {
$verificare = "NO";
echo "$fr_Il_numero_di $fr_persone $fr_supera_la_capienza_massima_della_tipologia_richiesta";
if ($num_tipologie > 1) echo " ($n_t)";
if (!empty($app_eliminati_costi[$n_t]) or !empty($app_eliminati_costi['beniinv'][$n_t])) echo " $fr_con_i_servizi_opzionali_selezionati";
echo ".<br>";
} # fine if ($app_trovato != "SI" or...
} # fine if ($numpersone and $verificare != "NO")


if ($verificare != "NO") {
for ($num1 = $idinizioperiodo[$n_t]; $num1 <= $idfineperiodo[$n_t]; $num1 = $num1 + 1) {
$prenotazioni = esegui_query("select * from $tableprenota where iddatainizio <= $num1 and iddatafine >= $num1");
$numprenotazioni = numlin_query($prenotazioni);
$rigasettimana = esegui_query("select * from $tableperiodi where idperiodi = '$num1' ");
if ($numprenotazioni >= $numappartamenti) {
if ($mostra_quadro_disp != "SI" and $mostra_quadro_disp != "SI_NO") $verificare = "NO";
$inizioperiodopieno = risul_query($rigasettimana,0,'datainizio');
$inizioperiodopieno_f = formatta_data($inizioperiodopieno,$stile_data);
$fineperiodopieno = risul_query($rigasettimana,0,'datafine');
$fineperiodopieno_f = formatta_data($fineperiodopieno,$stile_data);
if ($mostra_giorni_pieni == "SI") echo "$fr_parola_La $fr_parola_settimana $fr_dal $inizioperiodopieno_f $fr_al $fineperiodopieno_f $fr_est $fr_piena".".<br>";
} # fine if ($numprenotazioni >= $numappartamenti)
} # fine for $num1
if ($verificare == "NO" and $mostra_giorni_pieni != "SI") {
echo "$fr_Non_c_e_piu_disponibilita_nel_periodo_richiesto";
if ($verificare == "NO" and $num_tipologie > 1) echo " ($n_t)";
if ($verificare == "NO") echo ".<br>";
} # fine if ($verificare == "NO" and $mostra_giorni_pieni != "SI")
} # fine if ($verificare != "NO")

} # fine for $n_t


if ($verificare != "NO") {
$testo_a_video = "";
$testo_tipologie_email = "";
unset($profondita);
unset($dati_app);
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);
if ($idinizioperiodo_min < $limiti_var['idperiodocorrente']) $n_ini = $idinizioperiodo_min;
else $n_ini = $limiti_var['idperiodocorrente'];
$limiti_var['n_ini'] = $n_ini;
$max_periodo = esegui_query("select max(idperiodi) from $tableperiodi");
$max_periodo = risul_query($max_periodo,0,0);
if ($idfineperiodo_max <= $limiti_var['idperiodocorrente']) $n_fine = $idfineperiodo_max;
else $n_fine = $max_periodo;
$limiti_var['n_fine'] = $n_fine;

if ($mostra_quadro_disp == "SI" or $mostra_quadro_disp == "SI_NO") {
if ($tipo_periodi == "s") $num_colonne_tab_disp = 5;
else $num_colonne_tab_disp = 32;
$id_data_inizio_tab_disp = (floor(( (double) $idinizioperiodo_min + (double) $idfineperiodo_max) / 2) - floor((double) $num_colonne_tab_disp / 2));
if (($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1) > $max_periodo) $id_data_inizio_tab_disp = ($max_periodo - $num_colonne_tab_disp + 1);
if ($id_data_inizio_tab_disp < $idperiodocorrente_reale) $id_data_inizio_tab_disp = $idperiodocorrente_reale;
if ($id_data_inizio_tab_disp < 1) $id_data_inizio_tab_disp = 1;
if ($num_colonne_tab_disp > $max_periodo) $num_colonne_tab_disp = $max_periodo;
if ($limiti_var['n_ini'] > $id_data_inizio_tab_disp) $limiti_var['n_ini'] = $id_data_inizio_tab_disp;
if ($limiti_var['n_fine'] < ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1)) $limiti_var['n_fine'] = ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1);
} # fine if ($mostra_quadro_disp == "SI" or $mostra_quadro_disp == "SI_NO")

$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
$tot_prenota = risul_query($max_prenota,0,0);
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var ($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");
$app_agenzia = esegui_query("select * from $tableregole where app_agenzia != ''");
$num_app_agenzia = numlin_query($app_agenzia);
unlock_tabelle($tabelle_lock);

$id_app_richiesti = 0;
unset($succ_non_vicino);
if ($num_tipologie == 1 and $num_app_tipo_richiesti1 == 1) {
$idinizioperiodo_vett = $idinizioperiodo[1];
$idfineperiodo_vett = $idfineperiodo[1];
$app_richiesti = $app_richiesti1;
$id_app_richiesti = 1;
} # fine if ($num_tipologie == 1 and $num_app_tipo_richiesti1 == 1)
else {
$num_tariffe_diverse = 0;
unset($idinizioperiodo_vett);
unset($idfineperiodo_vett);
unset($vett_nomitariffe_presenti);
unset($lista_nomitariffa_imposti);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$num_app_tipo_richiesti = ${"num_app_tipo_richiesti".$n_t};
$app_richiesti_copia = ${"app_richiesti".$n_t};
$lista_app_richiesti = "";
if (empty($app_richiesti_copia)) $lista_app_richiesti = ",tutti,,";
else foreach ($app_richiesti_copia as $key => $val) if ($val == "SI") $lista_app_richiesti .= $key.",";
$lista_app_richiesti = substr($lista_app_richiesti,0,-1);
$id_app_richiesti2 = $id_app_richiesti;
for ($num1 = 1 ; $num1 <= $num_app_tipo_richiesti ; $num1++) {
$id_app_richiesti++;
$app_richiesti[$id_app_richiesti] = $lista_app_richiesti;
$idinizioperiodo_vett[$id_app_richiesti] = $idinizioperiodo[$n_t];
$idfineperiodo_vett[$id_app_richiesti] = $idfineperiodo[$n_t];
} # fine for $num1
if (isset($app_richiesti[',vicini,']) and $app_richiesti[',vicini,'] == "SI") {
if ($n_t != $num_tipologie) $succ_non_vicino[$id_app_richiesti] = 1;
if (!$prenota_vicine_nt[$n_t]) {
for ($num1 = ($id_app_richiesti2 + 1) ; $num1 < $id_app_richiesti ; $num1++) $succ_non_vicino[$num1] = 1;
} # fine if (!$prenota_vicine_nt[$n_t])
elseif ($interrompi_vicine_ogni[$n_t]) {
for ($num1 = ($id_app_richiesti2 + $interrompi_vicine_ogni[$n_t]) ; $num1 < $id_app_richiesti ; $num1 += $interrompi_vicine_ogni[$n_t]) $succ_non_vicino[$num1] = 1;
} # fine elseif ($interrompi_vicine_ogni[$n_t])
} # fine if (isset($app_richiesti[',vicini,']) and $app_richiesti[',vicini,'] == "SI")
} # fine for $n_t
$app_richiesti[',numero,'] = $id_app_richiesti;
if ($prenota_vicine == "SI") $app_richiesti[',vicini,'] = "SI";
elseif (isset($app_richiesti[',vicini,']) and $app_richiesti[',vicini,'] == "SI") $app_richiesti[',succ_non_vicino,'] = $succ_non_vicino;
} # fine else if ($num_tipologie == 1 and $num_app_tipo_richiesti1 == 1)

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
if ($info_periodi_ag['numero']) {
inserisci_prenota_fittizie($info_periodi_ag,$profondita,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett,$app_assegnabili_id);
$app_orig_prenota_id = $app_prenota_id;
} # fine if ($info_periodi_ag['numero'])
if (!empty($motivazioni_regola1)) {
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
$id_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'app_agenzia');
$idinizio_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatainizio');
$idfine_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatafine');
$motivazione_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'motivazione');
if ($motivazione_app_agenzia[$num1] == "") $motivazione_app_agenzia[$num1] = " ";
if (isset($motivazioni_regola1[$motivazione_app_agenzia[$num1]]) and $motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI") {
$info_periodi_ag['app'][$info_periodi_ag['numero']] = $id_app_agenzia[$num1];
$info_periodi_ag['ini'][$info_periodi_ag['numero']] = $idinizio_app_agenzia[$num1];
$info_periodi_ag['fine'][$info_periodi_ag['numero']] = $idfine_app_agenzia[$num1];
$info_periodi_ag['numero']++;
} # fine if (isset($motivazioni_regola1[$motivazione_app_agenzia[$num1]]) and $motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI")
} # fine if ($mot2 != "x")
else $motivazione_app_agenzia[$num1] = "";
} # fine for $num1
inserisci_prenota_fittizie ($info_periodi_ag,$profondita2,$app_prenota_id2,$inizio_prenota_id2,$fine_prenota_id2,$prenota_in_app_sett2,$app_assegnabili_id2);
$occupare_app_agenzia_sempre = "";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($num1 = $idinizioperiodo[$n_t]; $num1 <= $idfineperiodo[$n_t]; $num1++) {
$numprenotazioni = 0;
for ($num2 = 0 ; $num2 < $dati_app['totapp'] ; $num2++) if (!empty($prenota_in_app_sett2[$dati_app['posizione'][$num2]][$num1])) $numprenotazioni++;
if ($numprenotazioni >= $numappartamenti) $occupare_app_agenzia_sempre = "SI";
} # fine for $num1
} # fine for $n_t
if ($occupare_app_agenzia_sempre != "SI") {
$app_orig_prenota_id = $app_prenota_id2;
liberasettimane($idinizioperiodo_vett,$idfineperiodo_vett,$limiti_var,$anno,$fatto_libera,$app_liberato,$profondita2,$app_richiesti,$app_prenota_id2,$app_orig_prenota_id,$inizio_prenota_id2,$fine_prenota_id2,$app_assegnabili_id2,$prenota_in_app_sett2,$dati_app,$PHPR_TAB_PRE."prenota");
if ($fatto_libera != "SI" and $prenota_vicine == "SI" and $cerca_app_vicini == "se_poss" and $app_richiesti[',vicini,'] == "SI") {
if (is_array($succ_non_vicino)) $app_richiesti[',succ_non_vicino,'] = $succ_non_vicino;
else $app_richiesti[',vicini,'] = "";
$limiti_var['t_limite'] = (time() + $sec_limite_libsett);
$app_prenota_id2 = $app_orig_prenota_id;
liberasettimane($idinizioperiodo_vett,$idfineperiodo_vett,$limiti_var,$anno,$fatto_libera,$app_liberato,$profondita2,$app_richiesti,$app_prenota_id2,$app_orig_prenota_id,$inizio_prenota_id2,$fine_prenota_id2,$app_assegnabili_id2,$prenota_in_app_sett2,$dati_app,$PHPR_TAB_PRE."prenota");
if ($fatto_libera == "SI") $prenota_vicine = "";
else {
$app_richiesti[',vicini,'] = "SI";
$app_richiesti[',succ_non_vicino,'] = "";
} # fine else if ($fatto_libera == "SI")
} # fine if ($fatto_libera != "SI" and $prenota_vicine == "SI" and $cerca_app_vicini == "se_poss" and $app_richiesti[',vicini,'] == "SI")
} # fine if ($occupare_app_agenzia_sempre != "SI")
if ($fatto_libera == "SI") {
$testo_a_video .= "<div class=\"avail_line\">";
if ($num_tipologie == 1) {
$testo_a_video .= "$fr_C_e_ancora_disponibilita $fr_nel_periodo_richiesto";
if (count($tariffe_mostra) != 1) $testo_a_video .= " $fr_per_la_tipologia $nometariffa_imposta1";
} # fine if ($num_tipologie == 1)
else $testo_a_video .= "$fr_C_e_ancora_disponibilita $fr_nei_periodi_richiesti";
if ($num_app_richiesti > 1) {
$testo_a_video .= " $fr_in $num_app_richiesti $fr_appartamenti";
if ($prenota_vicine == "SI") $testo_a_video .= " $fr_con_posizioni_vicine";
} # fine if ($num_app_richiesti > 1)
$testo_a_video .= ".<br></div>";
$liberato = "SI";
} # fine if ($fatto_libera == "SI")
else $limiti_var['t_limite'] = (time() + $sec_limite_libsett);
} # fine if (!empty($motivazioni_regola1))
} # fine if ($num_app_agenzia != 0)

if ($liberato != "SI") {
$app_orig_prenota_id = $app_prenota_id;
if ($num_app_agenzia == 0 or empty($motivazioni_regola1) or $mostra_frase_alternativa_regola1 == "SI") {
liberasettimane($idinizioperiodo_vett,$idfineperiodo_vett,$limiti_var,$anno,$fatto_libera,$app_liberato,$profondita,$app_richiesti,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");
if ($fatto_libera != "SI" and $prenota_vicine == "SI" and $cerca_app_vicini == "se_poss" and $app_richiesti[',vicini,'] == "SI") {
if (is_array($succ_non_vicino)) $app_richiesti[',succ_non_vicino,'] = $succ_non_vicino;
else $app_richiesti[',vicini,'] = "";
$limiti_var['t_limite'] = (time() + $sec_limite_libsett);
$app_prenota_id = $app_orig_prenota_id;
liberasettimane($idinizioperiodo_vett,$idfineperiodo_vett,$limiti_var,$anno,$fatto_libera,$app_liberato,$profondita,$app_richiesti,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$dati_app,$PHPR_TAB_PRE."prenota");
$prenota_vicine = "";
} # fine if ($fatto_libera != "SI" and $prenota_vicine == "SI" and $cerca_app_vicini == "se_poss" and $app_richiesti[',vicini,'] == "SI")
if ($fatto_libera == "SI") {
$liberato = "SI";
if ($num_app_agenzia != 0 and !empty($motivazioni_regola1)) echo $fr_alternativa_regola1.".<br>";
else {
$testo_a_video .= "<div class=\"avail_line\">";
if ($num_tipologie == 1) {
$testo_a_video .= "$fr_C_e_ancora_disponibilita $fr_nel_periodo_richiesto";
if (count($tariffe_mostra) != 1) $testo_a_video .= " $fr_per_la_tipologia $nometariffa_imposta1";
} # fine if ($num_tipologie == 1)
else $testo_a_video .= "$fr_C_e_ancora_disponibilita $fr_nei_periodi_richiesti";
if ($num_app_richiesti > 1) {
$testo_a_video .= " $fr_in $num_app_richiesti $fr_appartamenti";
if ($prenota_vicine == "SI") $testo_a_video .= " $fr_con_posizioni_vicine";
} # fine if ($num_app_richiesti > 1)
$testo_a_video .= ".<br></div>";
} # fine else if ($num_app_agenzia != 0 and !empty($motivazioni_regola1))
} # fine if ($fatto_libera == "SI")
} # fine if ($num_app_agenzia == 0 or empty($motivazioni_regola1) or $mostra_frase_alternativa_regola1 == "SI")
if ($fatto_libera != "SI") {
if ($num_tipologie == 1) {
echo "$fr_Non_c_e_piu_disponibilita $fr_nel_periodo_richiesto $fr_per_la_tipologia $nometariffa_imposta1";
if ($numpersone) {
if (!empty($numpersone_orig_nt[1])) $numpersone_corr = $numpersone_orig_nt[1];
else $numpersone_corr = $numpersone;
if ($numpersone_corr == 1) $testo_a_video .= " $fr_per $numpersone_corr $fr_persona";
else $testo_a_video .= " $fr_per $numpersone_corr $fr_persone";
} # fine if ($numpersone)
} # fine if ($num_tipologie == 1)
else echo "$fr_Non_c_e_piu_disponibilita $fr_nei_periodi_richiesti $fr_per_le_tipologie_richieste";
if ($num_app_richiesti > 1) {
echo " $fr_in $num_app_richiesti $fr_appartamenti";
if ($prenota_vicine == "SI") echo " $fr_con_posizioni_vicine";
} # fine if ($num_app_richiesti > 1)
if (!empty($app_eliminati_costi)) echo " $fr_con_i_servizi_opzionali_selezionati";
echo ".<br>";
} # fine if ($fatto_libera != "SI")
} # fine if ($liberato != "SI")

$tabelle_lock = "";
$altre_tab_lock = array($tableprenota,$tablecostiprenota,$tablerclientiprenota,$tablenometariffe,$tableperiodi,$tableappartamenti,$tablenazioni,$tableregioni,$tablecitta,$tabledocumentiid,$tablecontratti,$tablepersonalizza,$tableutenti,$tablerelutenti,$tablerelinventario);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

if ($liberato == "SI") {
$continuare_totale = "SI";
$costi_agg_in_form = "";
$costo_totale = 0;
$caparra_totale = 0;
$costo_tariffa_nr = array();
$tariffesettimanali_nr = array();
$frase_cat_persone = array();
$num_costi_presenti = array();
$dati_transazione16 = "";
$continuare = "SI";

for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$inizioperiodo = ${"inizioperiodo".$n_t};
$fineperiodo = ${"fineperiodo".$n_t};
$numero_tariffa = ${"numero_tariffa".$n_t};
$tipotariffa = "tariffa".$numero_tariffa;
$numpersone = ${"numpersone".$n_t};
if (!$numpersone) $numpersone = 0;
$num_app_tipo_richiesti = ${"num_app_tipo_richiesti".$n_t};
$nometariffa_imposta = ${"nometariffa_imposta".$n_t};
$numcostiagg = ${"numcostiagg".$n_t};
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
${"idcostoagg".$numca} = ${"idcostoagg".$numca."_".$n_t};
${"costoagg".$numca} = ${"costoagg".$numca."_".$n_t};
${"numsettimane".$numca} = ${"numsettimane".$numca."_".$n_t};
${"nummoltiplica_ca".$numca} = ${"nummoltiplica_ca".$numca."_".$n_t};
} # fine for $numca

$coeff_cat_persone = array();
$coeff_cat_persone['i'] = 0;
$coeff_cat_persone['p'] = 0;
$frase_cat_persone[$n_t] = "";
$cat_persone_tariffa_cp = array();
if ($numpersone and $dati_cat_pers['num']) {
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (${"cat$num1"."_numpers$n_t"}) {
$cat_persone_tariffa_cp[$num1] = ${"cat$num1"."_numpers$n_t"};
if ($dati_cat_pers[$num1]['perc'] == "100") $coeff_cat_persone['i'] += (double) ${"cat$num1"."_numpers$n_t"};
else $coeff_cat_persone['p'] += ((double) ${"cat$num1"."_numpers$n_t"} * ((double) $dati_cat_pers[$num1]['perc'] / 100));
if (${"cat$num1"."_numpers$n_t"} == 1) $frase_cat_persone[$n_t] .= "1 ".$dati_cat_pers[$num1]['n_sing'].", ";
else $frase_cat_persone[$n_t] .= ${"cat$num1"."_numpers$n_t"}." ".$dati_cat_pers[$num1]['n_plur'].", ";
} # fine if (${"cat$num1"."_numpers$n_t"})
} # fine for $num1
if ($frase_cat_persone[$n_t]) $frase_cat_persone[$n_t] = " (".substr($frase_cat_persone[$n_t],0,-2).")";
$frase_cat_persone['orig'][$n_t] = $frase_cat_persone[$n_t];
} # fine if ($numpersone and $dati_cat_pers['num'])

$lunghezza_periodo = $idfineperiodo[$n_t] - $idinizioperiodo[$n_t] + 1;
$testo_a_video .= "<div class=\"period_line\"><br>";
if ($num_tipologie > 1) $testo_a_video .= "<b>$n_t</b>: ";
$testo_a_video .= "$fr_Periodo_di $lunghezza_periodo ";
if ($lunghezza_periodo == 1) $testo_a_video .= $fr_parola_settimana;
else $testo_a_video .= $fr_parola_settimane;
$testo_a_video .= " $fr_dal ".$data_inizioperiodo_f[$n_t]." $fr_al ".$data_fineperiodo_f[$n_t];
if ($numpersone) {
if (!empty($numpersone_orig_nt[$n_t])) $numpersone_corr = $numpersone_orig_nt[$n_t];
else $numpersone_corr = $numpersone;
if ($numpersone_corr == 1) $testo_a_video .= " $fr_per [numpersone$n_t] $fr_persona";
else $testo_a_video .= " $fr_per [numpersone$n_t] $fr_persone";
if ($num_app_tipo_richiesti_orig[$n_t] > 1) $testo_a_video .= " (x ".$num_app_tipo_richiesti_orig[$n_t].")";
} # fine if ($numpersone)
if ($num_tipologie > 1) $testo_a_video .= " $fr_tipologia $nometariffa_imposta.<br></div><table><tr><td style=\"height: 2px;\"></td></tr></table>";
else $testo_a_video .= ".<br><br></div>";
$tariffesettimanali = "";
$lista_tariffep_sett = "";
$costo_tariffa = 0;
$tariffesettimanalip_nr = array();

for ($num1 = $idinizioperiodo[$n_t] ; $num1 <= $idfineperiodo[$n_t] ; $num1++) {
if (!empty($dati_tariffe[$tipotariffa]['chiusa'][$num1])) {
$continuare = "NO";
$continuare_totale = "NO";
echo $fr_La_tipologia_richiesta_e_chiusa_in_questo_periodo;
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
break;
} # fine if (!empty($dati_tariffe[$tipotariffa]['chiusa'][$num1]))
$rigasettimana = esegui_query("select * from $tableperiodi where idperiodi = '$num1' ");
$costo_tariffa_settimana = risul_query($rigasettimana,0,$tipotariffa);
$costo_tariffap_sett = risul_query($rigasettimana,0,$tipotariffa."p");
if (!strcmp((string) $costo_tariffa_settimana,"") and !strcmp((string) $costo_tariffap_sett,"")) {
$continuare = "NO";
$continuare_totale = "NO";
echo $fr_Non_c_e_tariffa_per_questa_tipologia_ecc;
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
break;
} # fine if (!strcmp((string) $costo_tariffa_settimana,"") and !strcmp((string) $costo_tariffap_sett,""))
else {
if (!strcmp((string) $costo_tariffa_settimana,"")) $costo_tariffa_settimana = 0;
if (!strcmp((string) $costo_tariffap_sett,"")) $costo_tariffap_sett = 0;
$costo_tariffap_settimana = 0;
if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p") {
if (!$numpersone) {
$continuare = "NO";
$continuare_totale = "NO";
echo $fr_E_necessario_inserire_il_numero_di_persone_ecc;
if ($num_tipologie > 1) echo " ($n_t)";
echo ".<br>";
break;
} # fine if (!$numpersone)
if (!$dati_cat_pers['num']) $costo_tariffap_settimana = (double) $costo_tariffap_sett * (double) $numpersone;
else $costo_tariffap_settimana = (round(((double) $costo_tariffap_sett * $coeff_cat_persone['p']) / $dati_cat_pers['arrotond']) * $dati_cat_pers['arrotond']) + ((double) $costo_tariffap_sett * $coeff_cat_persone['i']);
$lista_tariffep_sett .= ",".$costo_tariffap_settimana;
} # fine if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p")
$costo_tariffa_settimana_tot = (double) $costo_tariffa_settimana + $costo_tariffap_settimana;
$costo_tariffa = $costo_tariffa + $costo_tariffa_settimana_tot;
$tariffesettimanali .= ",".$costo_tariffa_settimana_tot;
if (isset($dati_r2['napp'][$tipotariffa]) and $dati_r2['napp'][$tipotariffa] > 1) {
if (!$dati_cat_pers['num']) {
$costo_tariffap_settimana_alt = (double) $costo_tariffap_sett * (double) ($numpersone - 1);
$costo_tariffa_settimana_tot_alt = $costo_tariffa_settimana + $costo_tariffap_settimana_alt;
for ($num2 = (($numpersone * $dati_r2['napp'][$tipotariffa]) - $numpersone_orig_nt[$n_t]) ; $num2 > 0 ; $num2--) {
$nr = $dati_r2['napp'][$tipotariffa] - $num2;
$costo_tariffa_nr[$n_t][$nr] += $costo_tariffa_settimana_tot_alt;
if (strcmp((string) $tariffesettimanali_nr[$n_t][$nr],"")) $tariffesettimanali_nr[$n_t][$nr] .= ",";
$tariffesettimanali_nr[$n_t][$nr] .= $costo_tariffa_settimana_tot_alt;
if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p") {
if (strcmp((string) $tariffesettimanalip_nr[$nr],"")) $tariffesettimanalip_nr[$nr] .= ",";
$tariffesettimanalip_nr[$nr] .= $costo_tariffap_settimana_alt;
} # fine if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p")
if ($num1 == $idfineperiodo[$n_t]) {
if ($tariffesettimanalip_nr[$nr]) $tariffesettimanali_nr[$n_t][$nr] .= ";".$tariffesettimanalip_nr[$nr];
for ($num3 = 1 ; $num3 < $num_app_tipo_richiesti_orig[$n_t] ; $num3++) {
$costo_tariffa_nr[$n_t][($nr + ($dati_r2['napp'][$tipotariffa] * $num3))] = $costo_tariffa_nr[$n_t][$nr];
$tariffesettimanali_nr[$n_t][($nr + ($dati_r2['napp'][$tipotariffa] * $num3))] = $tariffesettimanali_nr[$n_t][$nr];
} # fine for $num3
} # fine if ($num1 == $idfineperiodo[$n_t])
} # fine for $num2
} # fine if (!$dati_cat_pers['num'])
else {
for ($num2 = 0 ; $num2 < $dati_r2['napp'][$tipotariffa] ; $num2++) {
$coeff_cat_persone = array();
$coeff_cat_persone['i'] = 0;
$coeff_cat_persone['p'] = 0;
if ($num2 >= ($dati_r2['napp'][$tipotariffa] - (($numpersone * $dati_r2['napp'][$tipotariffa]) - $numpersone_orig_nt[$n_t]))) $numpersone_cp = $numpersone - 1;
else $numpersone_cp = $numpersone;
for ($num3 = 0 ; $num3 < $dati_cat_pers['num'] ; $num3++) {
if ($cat_persone_tariffa_cp[$num3] and $numpersone_cp) {
if ($numpersone_cp > $cat_persone_tariffa_cp[$num3]) $numpersone_corr_cp = $cat_persone_tariffa_cp[$num3];
else $numpersone_corr_cp = $numpersone_cp;
$numpersone_cp = $numpersone_cp - $numpersone_corr_cp;
$cat_persone_tariffa_cp[$num3] = $cat_persone_tariffa_cp[$num3] - $numpersone_corr_cp;
if ($dati_cat_pers[$num3]['perc'] == "100") $coeff_cat_persone['i'] += (double) $numpersone_corr_cp;
else $coeff_cat_persone['p'] += ((double) $numpersone_corr_cp * ((double) $dati_cat_pers[$num3]['perc'] / 100));
} # fine if ($cat_persone_tariffa_cp[$num3] and $numpersone_cp)
} # fine for $num3
$costo_tariffap_settimana_alt = (round(((double) $costo_tariffap_sett * $coeff_cat_persone['p']) / $dati_cat_pers['arrotond']) * $dati_cat_pers['arrotond']) + ((double) $costo_tariffap_sett * $coeff_cat_persone['i']);
$costo_tariffa_settimana_tot_alt = $costo_tariffa_settimana + $costo_tariffap_settimana_alt;
$costo_tariffa_nr[$n_t][$num2] += $costo_tariffa_settimana_tot_alt;
if (strcmp((string) $tariffesettimanali_nr[$n_t][$num2],"")) $tariffesettimanali_nr[$n_t][$num2] .= ",";
$tariffesettimanali_nr[$n_t][$num2] .= $costo_tariffa_settimana_tot_alt;
if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p") {
if (strcmp((string) $tariffesettimanalip_nr[$num2],"")) $tariffesettimanalip_nr[$num2] .= ",";
$tariffesettimanalip_nr[$num2] .= $costo_tariffap_settimana_alt;
} # fine if ($dati_tariffe[$tipotariffa]['moltiplica'] == "p")
if ($num1 == $idfineperiodo[$n_t]) {
if ($tariffesettimanalip_nr[$num2]) $tariffesettimanali_nr[$n_t][$num2] .= ";".$tariffesettimanalip_nr[$num2];
for ($num3 = 1 ; $num3 < $num_app_tipo_richiesti_orig[$n_t] ; $num3++) {
$costo_tariffa_nr[$n_t][($num2 + ($dati_r2['napp'][$tipotariffa] * $num3))] = $costo_tariffa_nr[$n_t][$num2];
$tariffesettimanali_nr[$n_t][($num2 + ($dati_r2['napp'][$tipotariffa] * $num3))] = $tariffesettimanali_nr[$n_t][$num2];
} # fine for $num3
} # fine if ($num1 == $idfineperiodo[$n_t])
} # fine for $num2
} # fine else if (!$dati_cat_pers['num'])
} # fine if (isset($dati_r2['napp'][$tipotariffa]) and $dati_r2['napp'][$tipotariffa] > 1)
} # fine else if (!strcmp((string) $costo_tariffa_settimana,"") and !strcmp((string) $costo_tariffap_sett,""))
} # fine for $num1
$tariffesettimanali = substr($tariffesettimanali,1);
if (!empty($lista_tariffep_sett)) {
$lista_tariffep_sett = substr($lista_tariffep_sett,1);
$tariffesettimanali .= ";$lista_tariffep_sett";
} # fine if (!empty($lista_tariffep_sett))

if ($continuare == "SI") {

if ($num_app_tipo_richiesti > 1) $num_controlla_limite = $num_app_tipo_richiesti;
else $num_controlla_limite = 1;

$caparra = calcola_caparra($dati_tariffe,$tipotariffa,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$costo_tariffa,$tariffesettimanali);
$caparra_pre_tot = 0;
for ($num1 = 1 ; $num1 <= $num_controlla_limite ; $num1++) {
if (isset($costo_tariffa_nr[$n_t][($num1 -1)]) and strcmp((string) $costo_tariffa_nr[$n_t][($num1 -1)],"")) {
$caparra_reg[$n_t][$num1] = calcola_caparra($dati_tariffe,$tipotariffa,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$costo_tariffa_nr[$n_t][($num1 - 1)],$tariffesettimanali_nr[$n_t][($num1 - 1)]);
} # fine if (isset($costo_tariffa_nr[$n_t][($num1 -1)]) and strcmp((string) $costo_tariffa_nr[$n_t][($num1 - 1)],""))
else $caparra_reg[$n_t][$num1] = $caparra;
$caparra_pre_tot = $caparra_pre_tot + $caparra_reg[$n_t][$num1];
} # fine for $num1


# Costi aggiuntivi
$costi_agg_tot = (double) 0;
$costo_escludi_perc = (double) 0;
unset($costi_agg_tot_vett);
unset($costo_escludi_perc_vett);
$num_costi_agg = 0;
unset($nomi_costi_agg);
$prezzi_costi_agg = array();
$tasseperc_costi_agg = array();
$moltmax_costi_agg = array();
$valgiornmax_costi_agg = array();
$giorni_costi_agg = array();
$tipo_persona_costi_agg = array();
unset($num_ripeti_costo);
unset($moltiplica_costi_agg);
unset($catpers_costi_agg);
unset($settimane_costi_agg);
unset($moltiplica_costo);
unset($moltiplica_costo_nr);
$settimane_costo = array();
$num_letti_agg = array();
$num_letti_agg_nr = array();

$costi_aggiuntivi_sbagliati = "";
if ($numcostiagg == "") $numcostiagg = 0;
$numcostiagg_orig = $numcostiagg;
${"numcostiagg_transazione".$n_t} = $numcostiagg;
if (${"aggiungi_costo_letto".$n_t} == "SI") {
$numcostiagg++;
${"costoagg".$numcostiagg} = "SI";
${"idcostoagg".$numcostiagg} = $costo_aggiungi_letti;
${"nummoltiplica_ca".$numcostiagg} = ${"num_aggiungi_letti".$n_t};
${"costoagg".$numcostiagg."_".$n_t} = "SI";
${"idcostoagg".$numcostiagg."_".$n_t} = $costo_aggiungi_letti;
${"nummoltiplica_ca".$numcostiagg."_".$n_t} = ${"num_aggiungi_letti".$n_t};
${"catpers_ca".$numcostiagg."_".$n_t} = ${"catpers_costo_letto".$n_t};
${"numsettimane".$numcostiagg."_".$n_t} = "";
${"id_periodi_costo".$numcostiagg."_".$n_t} = "";
if (!$dati_r2['napp'][$tipotariffa]) ${"numcostiagg_transazione".$n_t} = $numcostiagg;
} # fine if (${"aggiungi_costo_letto".$n_t} == "SI")
if ($aggiungi_costi_fissi != "NO") {
for ($num1 = 0 ; $num1 < $dati_ca['num'] ; $num1++) {
if (($aggiungi_costi_fissi == "SI" or fixset($costi_agg_mostra[$dati_ca[$num1]['id']]) == "SI") and empty($costi_elimina_promo[$dati_ca[$num1]['id']]) and isset($dati_ca[$num1]["tipo_associa_".$tipotariffa])) {
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r") $periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num1,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],1);
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "s" or ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r" and $periodo_costo_trovato != "NO")) {
if (associa_costo_a_tariffa($dati_ca,$num1,$tipotariffa,$lunghezza_periodo) == "SI") {
$numcostiagg++;
${"costoagg".$numcostiagg} = "SI";
${"idcostoagg".$numcostiagg} = $dati_ca[$num1]['id'];
} # fine if (associa_costo_a_tariffa($dati_ca,$num1,$tipotariffa,$lunghezza_periodo) == "SI")
else {
if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "r" and $dati_ca[$num1]['tipo'] == "s") {
$sett_costo = calcola_settimane_costo($tableperiodi,$dati_ca,$num1,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],"","");
if ($sett_costo) $costi_aggiuntivi_sbagliati .= ",$num1";
} # fine if ($dati_ca[$numca]["tipo_associa_".$tariffa] == "r" and...
else $costi_aggiuntivi_sbagliati .= ",$num1";
} # fine else if (associa_costo_a_tariffa($dati_ca,$num1,$tipotariffa,$lunghezza_periodo) == "SI")
} # fine if ($dati_ca[$num1]["tipo_associa_".$tipotariffa] == "s" or...
} # fine if (($aggiungi_costi_fissi == "SI" or fixset($costi_agg_mostra[$dati_ca[$num1]['id']]) == "SI") and...
} # fine for $num1
} # fine if ($aggiungi_costi_fissi != "NO")

for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
$costoagg = "costoagg".$numca;
$idcostoagg = "idcostoagg".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
if ($costi_agg_mostra[$$idcostoagg] != "SI") $$costoagg = "";
if (($mostra_costi_aggiuntivi != "SI" or $dati_ca[$num_costo]['mostra'] != "s") and $numca <= $numcostiagg_orig and !$costi_aggiungi_promo[$$idcostoagg]) $$costoagg = "";
if ($$idcostoagg == $costo_aggiungi_letti and $numca <= $numcostiagg_orig) $$costoagg = "";
if ($$costoagg == "SI") {
$numsettimane = "numsettimane".$numca;
$nummoltiplica_ca = "nummoltiplica_ca".$numca;
$id_periodi_costo = "id_periodi_costo".$numca."_".$n_t;
$settimane_costo[$numca] = "";
if ($$idcostoagg != $dati_ca[$num_costo]['id']) $costi_aggiuntivi_sbagliati .= ",$num_costo";
if (!empty($dati_ca[$num_costo]["incomp_".$tipotariffa])) {
if ($dati_ca[$num_costo]['combina'] == "s") $$costoagg = "";
else $costi_aggiuntivi_sbagliati .= ",$num_costo";
} # fine if (!empty($dati_ca[$num_costo]["incomp_".$tipotariffa]))
if (empty($$numsettimane) and $dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] != "s") $costi_aggiuntivi_sbagliati .= ",$num_costo";
if (!empty($$numsettimane) and ($$numsettimane > $lunghezza_periodo or controlla_num_pos($$numsettimane) == "NO")) $costi_aggiuntivi_sbagliati .= ",$num_costo";
if (!empty($$nummoltiplica_ca) and controlla_num_pos($$nummoltiplica_ca) == "NO") $costi_aggiuntivi_sbagliati .= ",$num_costo";
$numsettimane_aux = fixset($$numsettimane);
if (trova_periodo_permesso_costo($dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$numsettimane_aux) == "NO") {
if ($dati_ca[$num_costo]['combina'] == "s") $$costoagg = "";
else $costi_aggiuntivi_sbagliati .= ",$num_costo";
} # fine if (trova_periodo_permesso_costo($dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$numsettimane_aux) == "NO")
if (!empty($n_costi_agg_imposti[$$idcostoagg])) $nomecosto_imposto = $n_costi_agg_imposti[$$idcostoagg];
else $nomecosto_imposto = $dati_ca[$num_costo]['nome'];
${"costoagg".$numca."_".$n_t} = $$costoagg;

if (isset($$id_periodi_costo) and $$id_periodi_costo == "inserire") {
$$id_periodi_costo = "";
for ($num1 = $idinizioperiodo[$n_t]; $num1 <= $idfineperiodo[$n_t]; $num1++) {
if (isset(${"sett".$num1."costo".$numca."_".$n_t}) and ${"sett".$num1."costo".$numca."_".$n_t} == "SI") $$id_periodi_costo .= ",".$num1;
} # fine for $num1
if ($$id_periodi_costo) $$id_periodi_costo .= ",";
else $$id_periodi_costo = "nessuno";
} # fine if (isset($$id_periodi_costo) and $$id_periodi_costo == "inserire")
if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and $continuare != "NO" and !$$id_periodi_costo) {
$continuare = "NO";
$continuare_totale = "NO";
echo "<hr style=\"width: 30%;\">
$fr_Scegliere_le_settimane_in_cui_applicare \"".$nomecosto_imposto;
if ($num_tipologie > 1) echo " ($n_t)";
echo "\":<br>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#action_anchor\">
<div class=\"ftxt\">";
$lista_sett_passa = "";
for ($num1 = $idinizioperiodo[$n_t]; $num1 <= $idfineperiodo[$n_t]; $num1++) {
$periodo_costo_trovato = "NO";
if ($dati_ca[$num_costo]['periodipermessi'] == "p") {
for ($num2 = 0 ; $num2 < count($dati_ca[$num_costo]['sett_periodipermessi_ini']) ; $num2++) {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num2] <= $num1 and $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num2] >= $num1) $periodo_costo_trovato = "SI";
} # fine for $num2
} # fine if ($dati_ca[$num_costo]['periodipermessi'] == "p")
else $periodo_costo_trovato = "SI";
if ($periodo_costo_trovato == "SI") {
$date_sett_costo = esegui_query("select datainizio,datafine from $tableperiodi where idperiodi = '$num1'");
echo "<label><input type=\"checkbox\" name=\"sett$num1"."costo$numca"."_$n_t\" value=\"SI\">$fr_dal
 ".formatta_data(risul_query($date_sett_costo,0,'datainizio'),$stile_data)." $fr_al
 ".formatta_data(risul_query($date_sett_costo,0,'datafine'),$stile_data)."</label><br>";
$lista_sett_passa .= ",$num1";
} # fine if ($periodo_costo_trovato == "SI")
} # fine for $num1
echo "<input type=\"hidden\" name=\"lista_sett_passa$numca"."_$n_t\" value=\"$lista_sett_passa\">";
echo $dati_form_iniziale;
$$id_periodi_costo = "inserire";
for ($n_t2 = 1 ; $n_t2 < $n_t ; $n_t2++) for ($numca2 = 1 ; $numca2 <= $numcostiagg ; $numca2++) echo "<input type=\"hidden\" name=\"id_periodi_costo$numca2"."_$n_t2\" value=\"".${"id_periodi_costo".$numca2."_".$n_t2}."\">";
for ($numca2 = 1 ; $numca2 <= $numca ; $numca2++) echo "<input type=\"hidden\" name=\"id_periodi_costo$numca2"."_$n_t\" value=\"".${"id_periodi_costo".$numca2."_".$n_t}."\">";
echo "<input type=\"hidden\" name=\"contr_disp\" value=\"SI\">
<input class=\"sbutton\" type=\"submit\" value=\"$fr_Continua\">
</div></form><hr style=\"width: 30%;\">";
} # fine if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and...
else {
$id_periodi_costo_aux = fixset($$id_periodi_costo);
$numsettimane_aux = fixset($$numsettimane);
$nummoltiplica_ca_aux = fixset($$nummoltiplica_ca);
$settimane_costo[$numca] = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$id_periodi_costo_aux,$numsettimane_aux);
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],"",$nummoltiplica_ca_aux,$numpersone,$dati_cat_pers,fixset(${"catpers_ca".$numca."_".$n_t}));
$num_letti_agg_nr[0] = $num_letti_agg;
if (!empty($num_app_reali_costo[$n_t][$numca])) $num_controlla_limite2 = $num_app_reali_costo[$n_t][$numca];
else $num_controlla_limite2 = $num_controlla_limite;
for ($num1 = 1 ; $num1 < $num_controlla_limite2 ; $num1++) {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_corr = $numpersone_nr[$n_t][$num1];
else $numpersone_corr = $numpersone;
if (!empty($diff_aggiungi_letti[$n_t][$numca]) and $num1 >= $diff_aggiungi_letti[$n_t][$numca]) $nummoltiplica_ca_corr = $nummoltiplica_ca_aux - 1;
else $nummoltiplica_ca_corr = $nummoltiplica_ca_aux;
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg_nr[$num1],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],"",$nummoltiplica_ca_corr,$numpersone_corr,$dati_cat_pers,${"catpers_ca".$numca."_".$n_t});
} # fine for $num1
} # fine else if ($dati_ca[$num_costo]['numsett'] == "c" and $dati_ca[$num_costo]['associasett'] == "s" and...

if (($dati_ca[$num_costo]['moltiplica'] == "p" or $dati_ca[$num_costo]['moltiplica'] == "t") and !$numpersone) {
$costi_aggiuntivi_sbagliati .= ",$num_costo";
echo $fr_Si_deve_inserire_il_numero_delle_persone_per." \"$nomecosto_imposto\".<br>";
if ($num_tipologie > 1) echo " ($n_t)";
} # fine if (($dati_ca[$num1]['moltiplica'] == "p" or $dati_ca[$num1]['moltiplica'] == "t") and !$numpersone)
} # fine if ($$costoagg == "SI")
} # fine for $numca

for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (${"costoagg".$numca} == "SI") {
$idcostoagg = "idcostoagg".$numca;
$num_costo = $dati_ca['id'][$$idcostoagg];
$nummoltiplica_ca_aux = ${"nummoltiplica_ca".$numca};
$nummoltiplica_ca_max = calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo[$numca],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$nummoltiplica_ca_aux,$numpersone,$cat_persone[$n_t],$num_letti_agg);
if (!empty($num_app_reali_costo[$n_t][$numca])) $num_controlla_limite2 = $num_app_reali_costo[$n_t][$numca];
else $num_controlla_limite2 = $num_controlla_limite;
for ($num1 = 0 ; $num1 < $num_controlla_limite2 ; $num1++) {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_corr = $numpersone_nr[$n_t][$num1];
else $numpersone_corr = $numpersone;
if (!empty($cat_persone_nr[$n_t][$num1])) $cat_persone_corr = $cat_persone_nr[$n_t][$num1];
else $cat_persone_corr = $cat_persone[$n_t];
if (!empty($diff_aggiungi_letti[$n_t][$numca]) and $num1 >= $diff_aggiungi_letti[$n_t][$numca]) $nummoltiplica_ca_corr = $nummoltiplica_ca_aux - 1;
else $nummoltiplica_ca_corr = $nummoltiplica_ca_aux;
if ($num1 == 0 and empty($numpersone_orig_nt[$n_t])) $moltiplica_costo_nr[$numca][$num1] = $moltiplica_costo[$numca];
else calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo_nr[$numca][$num1],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$nummoltiplica_ca_corr,$numpersone_corr,$cat_persone_corr,$num_letti_agg_nr[$num1]);
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_costo_nr[$numca][$num1]) == "NO") $costi_aggiuntivi_sbagliati .= ",$num_costo";
} # fine for $num1
if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "mag") {
for ($num1 = 0 ; $num1 < $num_controlla_limite2 ; $num1++) {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti,$num_ripetizioni_costo[$n_t][$num_costo],"SI",$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_costo_nr[$num1][$numca],"");
if ($risul != "SI") { $costi_aggiuntivi_sbagliati .= ",$num_costo"; break; }
} # fine for $num1
} # fine if (isset($dati_ca[$num_costo]['tipo_beniinv']) and $dati_ca[$num_costo]['tipo_beniinv'] == "mag")
if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num_costo]['molt_max'] != "x") {
$num_max = 0;
$num_max_check = 0;
if ($dati_ca[$num_costo]['molt_max'] == "n") $num_max = $dati_ca[$num_costo]['molt_max_num'];
if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone) {
$num_max = $numpersone;
if ($num_max) $num_max_check = 1;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
$cat_persone_corr = $cat_persone[$n_t];
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
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($cat_persone_corr[fixset($cat_persone_corr['ord'][$cp])]['molt'])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_max += $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
else $num_max = $num_max - $cat_persone_corr[$cat_persone_corr['ord'][$cp]]['molt'];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and...
} # fine for $num1
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
} # fine if ($dati_ca[$num_costo]['molt_max'] != "n" and $numpersone)
if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max']) {
$num_letti_agg_corr = $num_letti_agg['max'];
if ($num_letti_agg_corr) $num_max_check = 1;
if (isset($dati_ca[$num_costo]['modo_cp_molt']) and $dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr = 0;
for ($num1 = 0 ; $num1 < fixset($dati_ca[$num_costo]['cp_molt']['num']) ; $num1++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num1];
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and $num_letti_agg['catp_tot_max'][$cp]) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg_corr += $num_letti_agg['catp_tot_max'][$cp];
else $num_letti_agg_corr = $num_letti_agg_corr - $num_letti_agg['catp_tot_max'][$cp];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and $num_letti_agg['catp_tot_max'][$cp])
} # fine for $num1
$num_max += $num_letti_agg_corr;
} # fine if ($dati_ca[$num_costo]['molt_max'] == "t" and $num_letti_agg['max'])
if ($num_max or $num_max_check) {
if ($dati_ca[$num_costo]['molt_max'] != "n" and $dati_ca[$num_costo]['molt_max_num']) $num_max = $num_max - $dati_ca[$num_costo]['molt_max_num'];
if ($nummoltiplica_ca_aux > $num_max) $costi_aggiuntivi_sbagliati .= ",$num_costo";
} # fine if ($num_max)
} # fine if ($dati_ca[$num_costo]['moltiplica'] == "c" and $dati_ca[$num_costo]['molt_max'] != "x")
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num']) {
if (controlla_num_pos(${"catpers_ca".$numca."_".$n_t}) == "NO" or ${"catpers_ca".$numca."_".$n_t} >= $dati_cat_pers['num']) $costi_aggiuntivi_sbagliati .= ",$num_costo";
else {
if ($frase_cat_persone[$n_t]) $frase_cat_persone[$n_t] = substr($frase_cat_persone[$n_t],0,-1)." + $nummoltiplica_ca_max ";
else $frase_cat_persone[$n_t] = " (+ $nummoltiplica_ca_max ";
if ($nummoltiplica_ca_max != "1") $frase_cat_persone[$n_t] .= $dati_cat_pers[${"catpers_ca".$numca."_".$n_t}]['n_plur'].")";
else $frase_cat_persone[$n_t] .= $dati_cat_pers[${"catpers_ca".$numca."_".$n_t}]['n_sing'].")";
} # fine else if (controlla_num_pos(${"catpers_ca".$numca."_".$n_t}) == "NO" or...
} # fine if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num'])
} # fine if (${"costoagg".$numca} == "SI")
} # fine for $numca

if ($costi_aggiuntivi_sbagliati) {
echo "$fr_Errore_nei_servizi_opzionali_richiesti (";
$costi_aggiuntivi_sbagliati = explode(",",substr($costi_aggiuntivi_sbagliati,1));
unset($costo_sbagliato);
$costo_promo_sbagliato = 0;
for ($num1 = 0 ; $num1 < count($costi_aggiuntivi_sbagliati) ; $num1++) {
if (empty($costo_sbagliato[$costi_aggiuntivi_sbagliati[$num1]])) {
$costo_sbagliato[$costi_aggiuntivi_sbagliati[$num1]] = "SI";
if ($num1 != 0) echo ",";
if (!empty($n_costi_agg_imposti[$dati_ca[$costi_aggiuntivi_sbagliati[$num1]]['id']])) echo $n_costi_agg_imposti[$dati_ca[$costi_aggiuntivi_sbagliati[$num1]]['id']];
else echo $dati_ca[$costi_aggiuntivi_sbagliati[$num1]]['nome'];
if (!empty($costi_aggiungi_promo[$dati_ca[$costi_aggiuntivi_sbagliati[$num1]]['id']])) $costo_promo_sbagliato = 1;
} # fine (empty($costo_sbagliato[$costi_aggiuntivi_sbagliati[$num1]]))
} # fine for $num1
echo ").<br>";
if ($costo_promo_sbagliato) echo "<br>$fr_Codice_promozionale_applicato: ".htmlspecialchars($codpromo).".<br>";
$continuare = "NO";
$continuare_totale = "NO";
} # fine if ($costi_aggiuntivi_sbagliati)

elseif ($aggiungi_costi_fissi != "NO") {

# costi opzionali associabili se possibile
$oggi_costo = date("Ymd",(time() + (C_DIFF_ORE * 3600)));
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
if (($aggiungi_costi_fissi == "SI" or $costi_agg_mostra[$dati_ca[$num_costo]['id']] == "SI") and empty($costi_elimina_promo[$dati_ca[$num_costo]['id']])) {
$associa_costo = "NO";
$associa_costo_tariffa = associa_costo_a_tariffa($dati_ca,$num_costo,$tipotariffa,$lunghezza_periodo);
if ($associa_costo_tariffa == "SI" and $dati_ca[$num_costo]["tipo_associa_".$tipotariffa] == "p") $associa_costo = "SI";
if ($associa_costo_tariffa != "SI" and empty($dati_ca[$num_costo]["incomp_".$tipotariffa])) {
if ($dati_ca[$num_costo]['assegna_con_num_prenota'] and $id_app_richiesti >= $dati_ca[$num_costo]['assegna_con_num_prenota']) $associa_costo = "SI";
if ($dati_ca[$num_costo]['assegna_da_ini_prenota']) {
$giorni_lim = substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],1);
$limite = date("Ymd",mktime(0,0,0,substr($data_inizioperiodo[$n_t],5,2),(substr($data_inizioperiodo[$n_t],8,2) - $giorni_lim),substr($data_inizioperiodo[$n_t],0,4)));
if (substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],0,1) == ">" and $oggi_costo < $limite) $associa_costo = "SI";
if (substr($dati_ca[$num_costo]['assegna_da_ini_prenota'],0,1) == "<" and $oggi_costo > $limite) $associa_costo = "SI";
} # fine if ($dati_ca[$num_costo][assegna_da_ini_prenota])
} # fine if ($associa_costo_tariffa != "SI" and...
if ($associa_costo == "SI") {
$settimane_costo2 = calcola_settimane_costo($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],"","");
$num_letti_agg_copia = $num_letti_agg_nr;
$beniinv_presenti_copia = $beniinv_presenti;
$num_app_reali_costo2 = "";

if ($dati_ca[$num_costo]['letto'] == "s") {
for ($num1 = 0 ; $num1 < $num_controlla_limite ; $num1++) {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_corr = $numpersone_nr[$n_t][$num1];
else $numpersone_corr = $numpersone;
aggiorna_letti_agg_in_periodi($dati_ca,$num_costo,$num_letti_agg_copia[$num1],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,"","",$numpersone_corr,$dati_cat_pers,"0");
} # fine for $num1
unset($moltiplica_copia);
unset($num_costi_presenti_copia);
unset($num_ripetizioni_copia);
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (${"costoagg".$numca} == "SI") {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
if (!empty($num_app_reali_costo[$n_t][$numca])) $num_controlla_limite2 = $num_app_reali_costo[$n_t][$numca];
else $num_controlla_limite2 = $num_controlla_limite;
for ($num1 = 0 ; $num1 < $num_controlla_limite2 ; $num1++) {
if ($dati_ca[$num_costo2]['moltiplica'] != "t") $moltiplica_copia[$numca][$num1] = $moltiplica_costo_nr[$numca][$num1];
else {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_corr = $numpersone_nr[$n_t][$num1];
else $numpersone_corr = $numpersone;
if (!empty($cat_persone_nr[$n_t][$num1])) $cat_persone_corr = $cat_persone_nr[$n_t][$num1];
else $cat_persone_corr = $cat_persone[$n_t];
calcola_moltiplica_costo($dati_ca,$num_costo2,$moltiplica_copia[$numca][$num1],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],"",$numpersone_corr,$cat_persone_corr,$num_letti_agg_copia[$num1]);
} # fine else if ($dati_ca[$num_costo2]['moltiplica'] != "t")
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo2,$num_costi_presenti_copia,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_copia[$numca][$num1]) == "NO") $associa_costo = "NO";
} # fine for $num1
if ($dati_ca[$num_costo2]['moltiplica'] == "t") {
for ($num1 = 0 ; $num1 < $num_controlla_limite2 ; $num1++) {
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo2,$beniinv_presenti_copia,$num_ripetizioni_copia[$numca],"SI",$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_copia[$numca][$num1],"",$num_ripetizioni_costo[$n_t][$num_costo2]);
if ($risul != "SI") $associa_costo = "NO";
} # fine for $num1
} # fine if ($dati_ca[$num_costo2]['moltiplica'] == "t")
} # fine if (${"costoagg".$numca} == "SI")
} # fine for $numca
} # fine if ($dati_ca[$num_costo][letto] == "s")
else $num_costi_presenti_copia = $num_costi_presenti;

$periodo_costo_trovato = trova_periodo_permesso_costo($dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2);
if ($periodo_costo_trovato == "NO") $associa_costo = "NO";
else {
$moltiplica_costo2 = array();
if (isset($numpersone_nr[$n_t][0]) and strcmp((string) $numpersone_nr[$n_t][0],"")) $numpersone_corr = $numpersone_nr[$n_t][0];
else $numpersone_corr = $numpersone;
if (!empty($cat_persone_nr[$n_t][0])) $cat_persone_corr = $cat_persone_nr[$n_t][0];
else $cat_persone_corr = $cat_persone[$n_t];
$nummoltiplica_ca_max = calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo2[0],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,"",$numpersone_corr,$cat_persone_corr,fixset($num_letti_agg_copia[0]));
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti_copia,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,$moltiplica_costo2[0]) == "NO") $associa_costo = "NO";
else for ($num1 = 1 ; $num1 < $num_controlla_limite ; $num1++) {
if (isset($numpersone_nr[$n_t][$num1]) and strcmp((string) $numpersone_nr[$n_t][$num1],"")) $numpersone_corr = $numpersone_nr[$n_t][$num1];
else $numpersone_corr = $numpersone;
if (!empty($cat_persone_nr[$n_t][$num1])) $cat_persone_corr = $cat_persone_nr[$n_t][$num1];
else $cat_persone_corr = $cat_persone[$n_t];
calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica_costo2[$num1],$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,"",$numpersone_corr,$cat_persone_corr,fixset($num_letti_agg_copia[$num1]));
if (controlla_num_limite_costo($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,$num_costi_presenti_copia,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,$moltiplica_costo2[$num1]) == "NO") { $num_app_reali_costo2 = $num1; break; }
} # fine for $num1
} # fine else if ($periodo_costo_trovato == "NO")
if (!empty($dati_ca[$num_costo]['tipo_beniinv']) and $associa_costo == "SI") {
$nrc = "";
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti_copia,$nrc,"SI",$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,$moltiplica_costo2[0],"");
if ($risul != "SI") $associa_costo = "NO";
else {
if ($num_app_reali_costo2 and $num_app_reali_costo2 < $num_controlla_limite) $num_controlla_limite2 = $num_app_reali_costo2;
else $num_controlla_limite2 = $num_controlla_limite;
for ($num1 = 1 ; $num1 < $num_controlla_limite2 ; $num1++) {
$beniinv_presenti_copia2 = $beniinv_presenti_copia;
$risul = controlla_beni_inventario_costo($tablerelinventario,$dati_ca,$num_costo,$beniinv_presenti_copia,$nrc,"SI",$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo2,$moltiplica_costo2[$num1],"");
if ($risul != "SI") {
$beniinv_presenti_copia = $beniinv_presenti_copia2;
if (!$num_app_reali_costo2 or $num1 < $num_app_reali_costo2) $num_app_reali_costo2 = $num1;
break;
} # fine if ($risul != "SI")
} # fine for $num1
} # fine else if ($risul != "SI")
} # fine if (!empty($dati_ca[$num_costo]['tipo_beniinv']) and $associa_costo == "SI")

if ($associa_costo == "SI") {
$beniinv_presenti = $beniinv_presenti_copia;
if ($dati_ca[$num_costo]['letto'] == "s") {
$num_costi_presenti = $num_costi_presenti_copia;
$num_letti_agg = $num_letti_agg_copia[0];
$num_letti_agg_nr = $num_letti_agg_copia;
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) {
if (${"costoagg".$numca} == "SI") {
$num_costo2 = $dati_ca['id'][${"idcostoagg".$numca}];
$moltiplica_costo[$numca] = $moltiplica_copia[$numca][0];
$moltiplica_costo_nr[$numca] = $moltiplica_copia[$numca];
if ($dati_ca[$num_costo2]['moltiplica'] == "t") $num_ripetizioni_costo[$n_t][$num_costo2] = $num_ripetizioni_copia[$numca];
} # fine if (${"costoagg".$numca} == "SI")
} # fine for $numca
if ($dati_cat_pers['num']) {
${"catpers_ca".($numcostiagg + 1)."_".$n_t} = "0";
if ($frase_cat_persone[$n_t]) $frase_cat_persone[$n_t] = substr($frase_cat_persone[$n_t],0,-1)." + $nummoltiplica_ca_max ";
else $frase_cat_persone[$n_t] = " (+ $nummoltiplica_ca_max ";
if ($nummoltiplica_ca_max != "1") $frase_cat_persone[$n_t] .= $dati_cat_pers[0]['n_plur'].")";
else $frase_cat_persone[$n_t] .= $dati_cat_pers[0]['n_sing'].")";
} # fine if ($dati_cat_pers['num'])
} # fine if ($dati_ca[$num_costo]['letto'] == "s")
$numcostiagg++;
$numca = $numcostiagg;
${"costoagg".$numca} = "SI";
${"idcostoagg".$numca} = $dati_ca[$num_costo]['id'];
$settimane_costo[$numca] = $settimane_costo2;
$moltiplica_costo[$numca] = $moltiplica_costo2[0];
$moltiplica_costo_nr[$numca] = $moltiplica_costo2;
if ($num_app_reali_costo2) $num_app_reali_costo[$n_t][$numca] = $num_app_reali_costo2;
if (!empty($dati_ca[$num_costo]['tipo_beniinv'])) $num_ripetizioni_costo[$n_t][$num_costo] = $nrc;
} # fine if ($associa_costo == "SI")
} # fine if ($associa_costo == "SI")
} # fine if (($aggiungi_costi_fissi == "SI" or $costi_agg_mostra[$dati_ca[$num_costo]['id']] == "SI") and...
} # fine for $num_costo

} # fine elseif ($aggiungi_costi_fissi != "NO")


for ($num1 = 1 ; $num1 <= ${"num_app_tipo_richiesti".$n_t} ; $num1++) {
$num_letti_agg_reg[$n_t][$num1] = fixset($num_letti_agg_nr[($num1 - 1)]['max']);
$num_costi_reg[$n_t][$num1] = 0;
if (!empty($costo_tariffa_nr[$n_t][($num1 - 1)])) {
$costo_tariffa_tot_reg[$n_t][$num1] = $costo_tariffa_nr[$n_t][($num1 - 1)];
$costo_tariffa_reg[$n_t][$num1] = $costo_tariffa_nr[$n_t][($num1 - 1)];
$tariffesettimanali_reg[$n_t][$num1] = $tariffesettimanali_nr[$n_t][($num1 - 1)];
} # fine if (!empty($costo_tariffa_nr[$n_t][($num1 - 1)]))
else {
$costo_tariffa_tot_reg[$n_t][$num1] = $costo_tariffa;
$costo_tariffa_reg[$n_t][$num1] = $costo_tariffa;
$tariffesettimanali_reg[$n_t][$num1] = $tariffesettimanali;
} # fine else if (!empty($costo_tariffa_nr[$n_t][($num1 - 1)]))
} # fine for $num1

for ($num1 = 2 ; $num1 <= $num_controlla_limite ; $num1++) {
$costi_agg_tot_vett[$num1] = (double) 0;
$costo_escludi_perc_vett[$num1] = (double) 0;
} # fine for $num1
unset($prezzo_costo);
unset($valgiornmax_costo);
for ($num_costo = 0 ; $num_costo < $dati_ca['num'] ; $num_costo++) {
$idcostoagg = $dati_ca[$num_costo]['id'];
$costo_trovato = "NO";
for ($numca = 1 ; $numca <= $numcostiagg ; $numca++) if ($idcostoagg == ${"idcostoagg".$numca}) $costo_trovato = $numca;
if ($costo_trovato != "NO") {
$numca = $costo_trovato;
if (${"costoagg".$numca} == "SI") {
$prezzo_costo[$numca][1] = (double) calcola_prezzo_totale_costo($dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_costo[$numca],$costo_tariffa,$tariffesettimanali,($costo_tariffa + $costi_agg_tot),$caparra,$numpersone,$dati_cat_pers,fixset(${"catpers_ca".$numca."_".$n_t}),$costo_escludi_perc,1);
$valgiornmax_costo[$numca][1] = $prezzi_giorn_costo;
$costi_agg_tot = $costi_agg_tot + $prezzo_costo[$numca][1];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc = $costo_escludi_perc + $prezzo_costo[$numca][1];
if (!empty($num_app_reali_costo[$n_t][$numca])) $num_controlla_limite2 = $num_app_reali_costo[$n_t][$numca];
else $num_controlla_limite2 = $num_controlla_limite;
for ($num1 = 2 ; $num1 <= $num_controlla_limite2 ; $num1++) {
if (isset($numpersone_nr[$n_t][($num1 - 1)]) and strcmp((string) $numpersone_nr[$n_t][($num1 - 1)],"")) $numpersone_corr = $numpersone_nr[$n_t][($num1 - 1)];
else $numpersone_corr = $numpersone;
if (strcmp((string) $costo_tariffa_nr[$n_t][($num1 - 1)],"")) {
$costo_tariffa_corr = $costo_tariffa_nr[$n_t][($num1 - 1)];
$tariffesettimanali_corr = $tariffesettimanali_nr[$n_t][($num1 - 1)];
} # fine if (strcmp((string) $costo_tariffa_nr[$n_t][($num1 - 1)],""))
else {
$costo_tariffa_corr = $costo_tariffa;
$tariffesettimanali_corr = $tariffesettimanali;
} # fine else if (strcmp((string) $costo_tariffa_nr[$n_t][($num1 - 1)],""))
$prezzo_costo[$numca][$num1] = (double) calcola_prezzo_totale_costo($dati_ca,$num_costo,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$settimane_costo[$numca],$moltiplica_costo_nr[$numca][($num1 - 1)],$costo_tariffa,$tariffesettimanali_corr,($costo_tariffa_corr + $costi_agg_tot_vett[$num1]),$caparra_reg[$n_t][$num1],$numpersone_corr,$dati_cat_pers,fixset(${"catpers_ca".$numca."_".$n_t}),$costo_escludi_perc_vett[$num1],1);
$valgiornmax_costo[$numca][$num1] = $prezzi_giorn_costo;
$costi_agg_tot_vett[$num1] = $costi_agg_tot_vett[$num1] + $prezzo_costo[$numca][$num1];
if ($dati_ca[$num_costo]['escludi_tot_perc'] == "s") $costo_escludi_perc_vett[$num1] = $costo_escludi_perc_vett[$num1] + $prezzo_costo[$numca][$num1];
} # fine for $num1
$valnumsettimane_ca = $settimane_costo[$numca];
if ($dati_ca[$num_costo]['associasett'] == "s") {
$moltiplica = explode(",",$moltiplica_costo[$numca]);
$valnummoltiplica_ca = $moltiplica[1];
for ($num2 = 2 ; $num2 < (count($moltiplica) - 1) ; $num2++) if ($moltiplica[$num2] != $valnummoltiplica_ca) $valnummoltiplica_ca = 1;
$numsettimane = explode(",",$valnumsettimane_ca);
if ($dati_ca[$num_costo]['numsett'] == "c") {
$valnumsettimane_ca = "";
for ($num2 = 1 ; $num2 < (count($numsettimane) - 1) ; $num2++) {
$date_sett_costo = esegui_query("select datainizio,datafine from $tableperiodi where idperiodi = '".$numsettimane[$num2]."'");
$valnumsettimane_ca .= formatta_data(risul_query($date_sett_costo,0,'datainizio'),$stile_data)." $fr_al ".formatta_data(risul_query($date_sett_costo,0,'datafine'),$stile_data)."; ";
} # fine for $num2
$valnumsettimane_ca = " ".substr($valnumsettimane_ca,0,-2)." ";
} # fine if ($dati_ca[$num_costo][numsett] == "c")
else {
$valnumsettimane_ca = (count($numsettimane) - 2);
if ($valnumsettimane_ca < 0) $valnumsettimane_ca = 0;
} # fine else if ($dati_ca[$num_costo][numsett] == "c")
} # fine if ($dati_ca[$num_costo][associasett] == "s")
else $valnummoltiplica_ca = $moltiplica_costo[$numca];
if (!empty($n_costi_agg_imposti[$idcostoagg])) $nomecosto_imposto = $n_costi_agg_imposti[$idcostoagg];
else $nomecosto_imposto = $dati_ca[$num_costo]['nome'];
$nomi_costi_agg[$num_costi_agg] = $nomecosto_imposto;
$moltiplica_costi_agg[$num_costi_agg] = $valnummoltiplica_ca;
$catpers_costi_agg[$num_costi_agg] = fixset(${"catpers_ca".$numca."_".$n_t});
$settimane_costi_agg[$num_costi_agg] = $valnumsettimane_ca;
#$prezzi_costi_agg[$num_costi_agg] = $prezzo_costo[$numca][1];
$num_ripeti_costo[$num_costi_agg] = fixset($num_app_reali_costo[$n_t][$numca]);
$tasseperc_costi_agg[$num_costi_agg] = $dati_ca[$num_costo]['tasseperc'];
$moltmax_costi_agg[$num_costi_agg] = $moltiplica_costo_nr[$numca][0];
$valgiornmax_costi_agg[$num_costi_agg] = $valgiornmax_costo[$numca][1];
if ($dati_ca[$num_costo]['associasett'] == "s") $giorni_costi_agg[$num_costi_agg] = $settimane_costo[$numca];
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num']) $tipo_persona_costi_agg[$num_costi_agg] = (${"catpers_ca".$numca."_".$n_t} + 1);
$prezzi_costi_agg[$num_costi_agg] = 0;
for ($num1 = 1 ; $num1 <= $num_controlla_limite2 ; $num1++) {
$nome_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $nomecosto_imposto;
if ($num1 == 1 or (!empty($dati_r2['napp'][$tipotariffa]) and $num1 <= $dati_r2['napp'][$tipotariffa])) $prezzi_costi_agg[$num_costi_agg] += $prezzo_costo[$numca][$num1];
$val_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $prezzo_costo[$numca][$num1];
$tasseperc_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $dati_ca[$num_costo]['tasseperc'];
$moltmax_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $moltiplica_costo_nr[$numca][($num1 - 1)];
$valgiornmax_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $valgiornmax_costo[$numca][$num1];
if ($dati_ca[$num_costo]['associasett'] == "s") $giorni_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = $settimane_costo[$numca];
if ($dati_ca[$num_costo]['letto'] == "s" and $dati_cat_pers['num']) $tipo_persona_costo_reg[$n_t][$num1][$num_costi_reg[$n_t][$num1]] = (${"catpers_ca".$numca."_".$n_t} + 1);
$costo_tariffa_tot_reg[$n_t][$num1] += $prezzo_costo[$numca][$num1];
$num_costi_reg[$n_t][$num1]++;
} # fine for $num1
$num_costi_agg++;
} # fine if (${"costoagg".$numca} == "SI")
} # fine if ($costo_trovato != "NO")
} # fine for $num_costo


$commissioni_reg[$n_t][1] = calcola_commissioni($dati_tariffe,$tipotariffa,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$tariffesettimanali,0,$costi_agg_tot);
for ($num1 = 2 ; $num1 <= $num_controlla_limite ; $num1++) {
if ((isset($costo_tariffa_nr[$n_t][($num1 -1)]) and strcmp((string) $costo_tariffa_nr[$n_t][($num1 -1)],"")) or $costi_agg_tot_vett[$num1] != $costi_agg_tot) {
$commissioni_reg[$n_t][$num1] = calcola_commissioni($dati_tariffe,$tipotariffa,$idinizioperiodo[$n_t],$idfineperiodo[$n_t],$tariffesettimanali_nr[$n_t][($num1 -1)],0,$costi_agg_tot_vett[$num1]);
} # fine if ((isset($costo_tariffa_nr[$n_t][($num1 -1)]) and strcmp((string) $costo_tariffa_nr[$n_t][($num1 -1)],"")) or...
else $commissioni_reg[$n_t][$num1] = $commissioni_reg[$n_t][1];
} # fine for $num1

$costo_tariffa_tot = $costo_tariffa + $costi_agg_tot;
$costo_totale = $costo_totale + $costo_tariffa_tot;
for ($num1 = 2 ; $num1 <= $num_controlla_limite ; $num1++) {
if (isset($costo_tariffa_nr[$n_t][($num1 - 1)]) and strcmp((string) $costo_tariffa_nr[$n_t][($num1 - 1)],"")) $costo_tariffa_corr = $costo_tariffa_nr[$n_t][($num1 - 1)];
else $costo_tariffa_corr = $costo_tariffa;
$costo_totale = $costo_totale + $costo_tariffa_corr + $costi_agg_tot_vett[$num1];
if (!empty($dati_r2['napp'][$tipotariffa]) and $num1 <= $dati_r2['napp'][$tipotariffa]) $costo_tariffa_tot += $costo_tariffa_corr + $costi_agg_tot_vett[$num1];
} # fine for $num1
$costo_tariffa_tot_p = punti_in_num($costo_tariffa_tot,$stile_soldi);
$costi_agg_tot_p = punti_in_num($costi_agg_tot,$stile_soldi);
$testo_a_video .= "<div class=\"price_line\">$fr_Prezzo:";
if ($anteponi_nome_valuta != "SI") $testo_a_video .= " ".$costo_tariffa_tot_p;
if ($costo_tariffa_tot == 1) $testo_a_video .= " $fr_Euro";
else $testo_a_video .= " $fr_Euros";
if ($anteponi_nome_valuta == "SI") $testo_a_video .= $costo_tariffa_tot_p;
$primo_tav = "SI";
for ($num1 = 0 ; $num1 < $num_costi_agg ; $num1++) {
if ($prezzi_costi_agg[$num1] != 0 and str_replace(" ","",$nomi_costi_agg[$num1]) != "") {
if ($primo_tav == "NO") $testo_a_video .=  ", ";
else $testo_a_video .= " ($fr_compresi ";
$primo_tav = "NO";
if ($anteponi_nome_valuta != "SI") $testo_a_video .= $prezzi_costi_agg[$num1]." ";
if ($prezzi_costi_agg[$num1] == 1) $testo_a_video .= $fr_Euro;
else $testo_a_video .= $fr_Euros;
if ($anteponi_nome_valuta == "SI") $testo_a_video .= $prezzi_costi_agg[$num1];
$testo_a_video .=  " $fr_di ".$nomi_costi_agg[$num1];
$num_ripeti_costo_corr = $num_ripeti_costo[$num1];
if (!empty($dati_r2['napp'][$tipotariffa]) and $num_ripeti_costo_corr) $num_ripeti_costo_corr = ceil((double) $num_ripeti_costo_corr / (double) $dati_r2['napp'][$tipotariffa]);
if ($num_ripeti_costo_corr and $num_ripeti_costo_corr > 1) $testo_a_video .=  " ($fr_per $num_ripeti_costo_corr $fr_appartamenti)";
if ($num_ripeti_costo_corr == 1) $testo_a_video .=  " ($fr_per 1 $fr_appartamento)";
} # fine if ($prezzi_costi_agg[$num1] != 0 and...
} # fine for $num1
if ($primo_tav == "NO") $testo_a_video .= ")";
if ($num_app_tipo_richiesti_orig[$n_t] > 1) $testo_a_video .= " x ".$num_app_tipo_richiesti_orig[$n_t];
$testo_a_video .= ".<br></div>";

if ($numpersone) {
if (!empty($num_letti_agg['max']) and empty($numpersone_orig_ric_nt[$n_t])) {
$testo_a_video = str_replace("$fr_per [numpersone$n_t] $fr_persone","$fr_per ".($numpersone + $num_letti_agg['max'])." <span class=\"fr_pers_2\">$fr_persone</span>".$frase_cat_persone[$n_t],$testo_a_video);
$testo_a_video = str_replace("$fr_per [numpersone$n_t] $fr_persona","$fr_per ".($numpersone + $num_letti_agg['max'])." <span class=\"fr_pers_2\">$fr_persone</span>".$frase_cat_persone[$n_t],$testo_a_video);
} # fine if (!empty($num_letti_agg['max']) and empty($numpersone_orig_ric_nt[$n_t]))
else {
if (!empty($numpersone_orig_ric_nt[$n_t])) $numpersone_corr = $numpersone_orig_ric_nt[$n_t];
else $numpersone_corr = $numpersone;
$testo_a_video = str_replace("$fr_per [numpersone$n_t] $fr_persone","$fr_per $numpersone_corr <span class=\"fr_pers_2\">$fr_persone</span>".$frase_cat_persone[$n_t],$testo_a_video);
$testo_a_video = str_replace("$fr_per [numpersone$n_t] $fr_persona","$fr_per $numpersone_corr <span class=\"fr_pers_2\">$fr_persona</span>".$frase_cat_persone[$n_t],$testo_a_video);
} # fine else if (!empty($num_letti_agg['max']) and empty($numpersone_orig_ric_nt[$n_t]))
} # fine if ($numpersone)

if ($num_app_tipo_richiesti_orig[$n_t] > 1) $costo_tariffa_tot_app = ($costo_tariffa_tot * $num_app_tipo_richiesti_orig[$n_t]);
else $costo_tariffa_tot_app = $costo_tariffa_tot;
if ($caparra_pre_tot > $costo_tariffa_tot_app) {
$diff_caparra = $costo_tariffa_tot_app - $caparra_pre_tot;
$diff_caparra = floor($diff_caparra / $num_controlla_limite);
$resto_diff_caparra = $costo_tariffa_tot_app - $caparra_pre_tot - ($diff_caparra * $num_controlla_limite);
for ($num1 = 1 ; $num1 <= $num_controlla_limite ; $num1++) {
$caparra_reg[$n_t][$num1] = $caparra_reg[$n_t][$num1] - $diff_caparra;
if ($num1 == $num_controlla_limite and $resto_diff_caparra) $caparra_reg[$n_t][$num1] = $caparra_reg[$n_t][$num1] - $resto_diff_caparra;
} # fine for $num1
$caparra_pre_tot = $costo_tariffa_tot_app;
} # fine if ($caparra_pre_tot > $costo_tariffa_tot_app)
$caparra_totale = $caparra_totale + $caparra_pre_tot;

if ($mostra_richiesta_via_mail == "SI" and isset($manda_mail) and $manda_mail == "SI") {
if ($num_tipologie > 1) $testo_tipologie_email .= "$n_t: ";
$costo_tariffa_p = punti_in_num($costo_tariffa,$stile_soldi);
$dati_transazione16 .= ";$costo_tariffa,$caparra,".fixset($num_letti_agg['max']).":";
$testo_tipologie_email .= "$fre_Periodo: $fre_dal ".$data_inizioperiodo_f[$n_t]." $fre_al ".$data_fineperiodo_f[$n_t]."\n";
if ($anteponi_nome_valuta != "SI") $testo_tipologie_email .= "$fre_Tariffa: ".$nometariffa_vedi[$n_t]." ($costo_tariffa_p $fr_Euro)\n";
else $testo_tipologie_email .= "$fre_Tariffa: ".$nometariffa_vedi[$n_t]." ($fr_Euro$costo_tariffa_p)\n";
if ($numpersone) {
if (!empty($numpersone_orig_ric_nt[$n_t])) $numpersone_corr = $numpersone_orig_ric_nt[$n_t];
else $numpersone_corr = $numpersone;
$testo_tipologie_email .= "$fre_Persone: $numpersone_corr".fixset($frase_cat_persone['orig'][$n_t])."\n";
} # fine if ($numpersone)
if ($num_costi_agg) {
$testo_tipologie_email .= "$fre_Costi_aggiuntivi:\n";
for ($num1 = 0 ; $num1 < $num_costi_agg ; $num1++) {
$dati_transazione16 .= $prezzi_costi_agg[$num1].",".str_replace(","," ",str_replace(";"," ",str_replace(":"," ",$nomi_costi_agg[$num1]))).",".fixset($num_ripeti_costo[$num1]).",".fixset($tasseperc_costi_agg[$num1]).",".str_replace(",","|",fixset($moltmax_costi_agg[$num1])).",".str_replace(",","|",fixstr($valgiornmax_costi_agg[$num1])).",".str_replace(",","|",fixstr($giorni_costi_agg[$num1])).",".fixset($tipo_persona_costi_agg[$num1]).":";
$testo_tipologie_email .= "-".$nomi_costi_agg[$num1];
if ($moltiplica_costi_agg[$num1] != 1 or $dati_cat_pers['num']) {
$testo_tipologie_email .= " (x".$moltiplica_costi_agg[$num1];
if ($dati_cat_pers['num'] and isset($catpers_costi_agg[$num1]) and strcmp((string) $catpers_costi_agg[$num1],"")) {
if ($moltiplica_costi_agg[$num1] != 1) $testo_tipologie_email .= " ".$dati_cat_pers[$catpers_costi_agg[$num1]]['n_plur'];
else $testo_tipologie_email .= " ".$dati_cat_pers[$catpers_costi_agg[$num1]]['n_sing'];
} # fine if ($dati_cat_pers['num'] and isset($catpers_costi_agg[$num1]) and...
$testo_tipologie_email .= ")";
} # fine if ($moltiplica_costi_agg[$num1] != 1 or $dati_cat_pers['num'])
if ($settimane_costi_agg[$num1] > 1) $testo_tipologie_email .= " (x".$settimane_costi_agg[$num1]."$fre_sett)";
$testo_tipologie_email .= ": ";
if ($anteponi_nome_valuta != "SI") $testo_tipologie_email .= $prezzi_costi_agg[$num1]." $fr_Euro\n";
else $testo_tipologie_email .= $fr_Euro.$prezzi_costi_agg[$num1]."\n";
} # fine for $num1
} # fine if ($num_costi_agg)
if ($num_app_tipo_richiesti_orig[$n_t] > 1) {
$testo_tipologie_email .= "$fre_Numero_di_appartamenti: ".$num_app_tipo_richiesti_orig[$n_t]."\n";
} # fine if ($num_app_tipo_richiesti_orig[$n_t] > 1)
$testo_tipologie_email .= "\n";
} # fine if ($mostra_richiesta_via_mail == "SI" and isset($manda_mail) and $manda_mail == "SI")

} # fine if ($continuare == "SI")
} # fine for $n_t

if ($continuare_totale == "SI") {
$costo_totale_p = punti_in_num($costo_totale,$stile_soldi);
if ($num_app_tipo_richiesti1 > 1 or $num_tipologie > 1) {
$testo_a_video .= "<br>$fr_Totale: ";
if ($anteponi_nome_valuta != "SI") $testo_a_video .= $costo_totale_p." ";
if ($costo_totale == 1) $testo_a_video .= $fr_Euro;
else $testo_a_video .= $fr_Euros;
if ($anteponi_nome_valuta == "SI") $testo_a_video .= $costo_totale_p;
$testo_a_video .= ".<br>";
} # fine if ($num_app_tipo_richiesti1 > 1 or $num_tipologie > 1)
if ($mostra_caparra == "SI" and $caparra_totale > 0) {
$caparra_totale_p = punti_in_num($caparra_totale,$stile_soldi);
$testo_a_video .= "<br>$fr_Caparra: ";
if ($anteponi_nome_valuta != "SI") $testo_a_video .= $caparra_totale_p." ";
if ($caparra_totale == 1) $testo_a_video .= $fr_Euro;
else $testo_a_video .= $fr_Euros;
if ($anteponi_nome_valuta == "SI") $testo_a_video .= $caparra_totale_p;
$testo_a_video .= ".<br>";
} # fine if ($mostra_caparra == "SI" and $caparra_totale > 0)
if (!empty($costi_elimina_promo) or !empty($costi_aggiungi_promo)) $testo_a_video .= "<br>$fr_Codice_promozionale_applicato: ".htmlspecialchars($codpromo).".<br>";

if ($num_tipologie == 1 and $num_app_tipo_richiesti1 == 1) $app_liberato = array(1 => $app_liberato);

$num_campi_doc_cond = 0;
$campi_form_doc_cond = array();
$chiedi_campi_form_doc_cond = array();
$num_campi_doc_condizioni = count($campi_form_doc_condizioni);
if (!function_exists('crea_contratto')) $num_campi_doc_condizioni = 0;
if ($num_campi_doc_condizioni) {
$nome_contratto = array();
$nomi_contratti = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'nomi_contratti' and idutente = '$utente_liste' ");
if (numlin_query($nomi_contratti)) {
$nomi_contratti = explode("#@&",risul_query($nomi_contratti,0,'valpersonalizza'));
$num_nomi_contratti = count($nomi_contratti);
for ($num1 = 0 ; $num1 < $num_nomi_contratti ; $num1++) {
$dati_nome_contratto = explode("#?&",$nomi_contratti[$num1]);
if (strcmp((string) $dati_nome_contratto[1],"")) $nome_contratto[$dati_nome_contratto[0]] = $dati_nome_contratto[1];
} # fine for $num1
} # fine if (numlin_query($nomi_contratti))
for ($num1 = 1 ; $num1 <= $num_campi_doc_condizioni ; $num1++) {
$num_doc = $campi_form_doc_condizioni[$num1];
if (controlla_num_pos($num_doc) == "SI") {
$contr_txt = esegui_query("select * from $tablecontratti where (tipo = 'contrtxt' or tipo = 'contrhtm') and numero = '$num_doc' ");
if (numlin_query($contr_txt)) {
$salva_contr = esegui_query("select numero from $tablecontratti where numero = '$num_doc' and tipo = 'dir' ");
if (!numlin_query($salva_contr)) {
$num_campi_doc_cond++;
$campi_form_doc_cond[$num_campi_doc_cond] = $num_doc;
$chiedi_campi_form_doc_cond[$num_campi_doc_cond] = fixset($chiedi_campi_form_doc_condizioni[$num1]);
$campi_form_doc_cond['tipo'][$num_campi_doc_cond] = substr(risul_query($contr_txt,0,'tipo'),5);
} # fine if (!numlin_query($salva_contr))
} # fine if (numlin_query($contr_txt))
} # fine if (controlla_num_pos($num_doc) == "SI")
} # fine for $num1
} # fine if ($num_campi_doc_condizioni)


$mostra_c_e_disp = "SI";
if ($mostra_richiesta_via_mail == "SI" and isset($manda_mail) and $manda_mail == "SI") {
$mostra_c_e_disp = "NO";
$inviare = "SI";

$num_campi_pers = count($campi_form_personalizzati);
if (@get_magic_quotes_gpc()) {
$cognome_richiedente = stripslashes($cognome_richiedente);
$nome_richiedente = stripslashes($nome_richiedente);
$documento = stripslashes($documento);
$tipodoc = stripslashes($tipodoc);
$nazione = stripslashes($nazione);
$regione = stripslashes($regione);
$citta = stripslashes($citta);
$via = stripslashes($via);
$numcivico = stripslashes($numcivico);
$cap = stripslashes($cap);
$telefono = stripslashes($telefono);
$telefono2 = stripslashes($telefono2);
$telefono3 = stripslashes($telefono3);
$fax = stripslashes($fax);
$codfiscale = stripslashes($codfiscale);
$partitaiva = stripslashes($partitaiva);
$commento = stripslashes($commento);
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) ${"campo_pers".$num1} = stripslashes(${"campo_pers".$num1});
} # fine if (@get_magic_quotes_gpc())

if ($chiedi_cognome == "NO") $cognome_richiedente = "";
if ($chiedi_cognome == "SI" and !$cognome_richiedente) {
$cognome_richiedente_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_cognome == "SI" and !$cognome_richiedente)
if ($chiedi_nome == "NO") $nome_richiedente = "";
if ($chiedi_nome == "SI" and !$nome_richiedente) {
$nome_richiedente_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_nome == "SI" and !nome_richiedente)
if ($chiedi_email == "NO") $email_richiedente = "";
if ($chiedi_email == "SI" and !preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/i',$email_richiedente)) {
$email_richiedente_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_email == "SI" and...
if ($chiedi_email2 == "NO") $email2_richiedente = "";
if ($chiedi_email2 == "SI" and !preg_match('/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,4}$/i',$email2_richiedente)) {
$email2_richiedente_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_email2 == "SI" and...
if ($chiedi_email_cert == "NO") $email_cert_richiedente = "";
if ($chiedi_email_cert == "SI" and strlen($email_cert_richiedente) < 5) {
$email_cert_richiedente_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_email_cert == "SI" and...
if ($chiedi_sesso == "NO") $sesso = "";
if ($sesso and $sesso != "M" and $sesso != "F") $sesso = "";
if ($chiedi_sesso == "SI" and !$sesso) {
$sesso_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_sesso == "SI" and !$sesso)
if ($chiedi_datanascita == "NO") $annonascita = "";
if (!preg_match("/[0-9]{4,4}/",$annonascita)) $annonascita = "";
if (!isset($mesenascita) or !preg_match("/[0-9]{2,2}/",$mesenascita) or $mesenascita > 12) $mesenascita = "";
if (!isset($giornonascita) or !preg_match("/[0-9]{2,2}/",$giornonascita) or $giornonascita > 31) $giornonascita = "";
if ($annonascita and $mesenascita and $giornonascita) $datanascita = $annonascita."-".$mesenascita."-".$giornonascita;
else $datanascita = "";
if ($chiedi_datanascita == "SI" and !$datanascita) {
$datanascita_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_datanascita == "SI" and !$datanascita)
if ($chiedi_documento == "NO") {
$documento = "";
$tipodoc = "";
} # fine if ($chiedi_documento == "NO")
else {
$lista_tipi_doc = mostra_lista_relutenti("tipodoc",fixset($tipodoc),$utente_liste,"nome_documentoid","iddocumentiid","iddocumentoid",$tabledocumentiid,$tablerelutenti,"","","SI");
if (!$lista_tipi_doc) $tipodoc = "";
elseif (str_replace(">$tipodoc<","",$lista_tipi_doc) == $lista_tipi_doc) $tipodoc = "";
} # fine else if ($chiedi_documento == "NO")
if ($chiedi_documento == "SI" and (!$documento or ($lista_tipi_doc and !$tipodoc))) {
$documento_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_documento == "SI" and (!$documento or...
if ($chiedi_nazione == "NO") $nazione = "";
else {
$lista_nazioni = mostra_lista_relutenti("nazione",$nazione,$utente_liste,"nome_nazione","idnazioni","idnazione",$tablenazioni,$tablerelutenti,"","","SI");
if ($lista_nazioni and str_replace(">$nazione<","",$lista_nazioni) == $lista_nazioni) $nazione = "";
} # fine else if ($chiedi_nazione == "NO")
if ($chiedi_nazione == "SI" and !$nazione) {
$nazione_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_nazione == "SI" and !$nazione)
if ($chiedi_regione == "NO") $regione = "";
if ($chiedi_regione == "SI" and !$regione) {
$regione_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_regione == "SI" and !$regione)
if ($chiedi_citta == "NO") $citta = "";
if ($chiedi_citta == "SI" and !$citta) {
$citta_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_citta == "SI" and !$citta)
if ($chiedi_via == "NO") $via = "";
if ($chiedi_via == "SI" and !$via) {
$via_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_via == "SI" and !$via)
if ($chiedi_numcivico == "NO") $numcivico = "";
if ($chiedi_numcivico == "SI" and !$numcivico) {
$numcivico_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_numcivico == "SI" and !$numcivico)
if ($chiedi_cap == "NO") $cap = "";
if ($chiedi_cap == "SI" and !$cap) {
$cap_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_cap == "SI" and !$cap)
if ($chiedi_telefono == "NO") $telefono = "";
if (($chiedi_telefono == "SI" and (strlen($telefono) - strlen(preg_replace("/[0-9]/","",$telefono))) < 5) or strlen($telefono) > 50) { $inviare = "NO"; $telefono_sb = "SI"; }
if ($chiedi_telefono2 == "NO") $telefono2 = "";
if (($chiedi_telefono2 == "SI" and (strlen($telefono2) - strlen(preg_replace("/[0-9]/","",$telefono2))) < 5) or strlen($telefono2) > 50) { $inviare = "NO"; $telefono2_sb = "SI"; }
if ($chiedi_telefono3 == "NO") $telefono3 = "";
if (($chiedi_telefono3 == "SI" and (strlen($telefono3) - strlen(preg_replace("/[0-9]/","",$telefono3))) < 5) or strlen($telefono3) > 50) { $inviare = "NO"; $telefono3_sb = "SI"; }
if ($chiedi_fax == "NO") $fax = "";
if (($chiedi_fax == "SI" and (strlen($fax) - strlen(preg_replace("/[0-9]/","",$fax))) < 5) or strlen($fax) > 50) { $inviare = "NO"; $fax_sb = "SI"; }
if ($chiedi_codfiscale == "NO") $codfiscale = "";
if (($chiedi_codfiscale == "SI" and strlen($codfiscale) < 5) or strlen($codfiscale) > 50) { $inviare = "NO"; $codfiscale_sb = "SI"; }
if ($chiedi_partitaiva == "NO") $partitaiva = "";
if (($chiedi_partitaiva == "SI" and strlen($partitaiva) < 5) or strlen($partitaiva) > 50) { $inviare = "NO"; $partitaiva_sb = "SI"; }
if ($chiedi_commento == "NO") $commento = "";
if ($chiedi_commento == "SI" and !$commento) {
$commento_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_commento == "SI" and !$commento)
$oracheckin = "";
if ($chiedi_oracheckin == "NO") $ora_oracheckin = "";
if (!isset($data_oracheckin) or !preg_match("/[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}/",$data_oracheckin)) $data_oracheckin = "";
if (!preg_match("/[0-9]{2,2}/",$ora_oracheckin) or $ora_oracheckin > 23) $ora_oracheckin = "";
if (!isset($min_oracheckin) or ($min_oracheckin != "00" and $min_oracheckin != "15" and $min_oracheckin != "30" and $min_oracheckin != "45")) $min_oracheckin = "";
if ($data_oracheckin and $ora_oracheckin and $min_oracheckin) $oracheckin = $data_oracheckin." ".$ora_oracheckin.":".$min_oracheckin;
if ($chiedi_oracheckin == "SI" and !$oracheckin) {
$oracheckin_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_oracheckin == "SI" and !$oracheckin)
if ($caparra_totale > 0 and $chiedi_valutapagamento != "NO") {
if (strcmp(fixstr($valuta_pagamento),"")) {
if (@get_magic_quotes_gpc()) $valuta_pagamento = stripslashes($valuta_pagamento);
$altre_valute = altre_valute($utente_liste);
if (!strcmp((string) $altre_valute['id'][$valuta_pagamento],"")) $valuta_pagamento = "";
} # fine if (strcmp(fixstr($valuta_pagamento),""))
} # fine if ($caparra_totale > 0 and $chiedi_valutapagamento != "NO")
else $valuta_pagamento = "";
if ($caparra_totale > 0 and $chiedi_metodopagamento != "NO") {
if (!empty($metodo_pagamento)) {
if (@get_magic_quotes_gpc()) $metodo_pagamento = stripslashes($metodo_pagamento);
$metodo_trovato = "NO";
reset($metodi_pagamento_da_chiedere);
foreach ($metodi_pagamento_da_chiedere as $metodo => $val) if ($metodo == $metodo_pagamento) $metodo_trovato = "SI";
if ($metodo_trovato == "NO") $metodo_pagamento = "";
} # fine if (!empty($metodo_pagamento))
if ($chiedi_metodopagamento == "SI" and !$metodo_pagamento and count($metodi_pagamento_da_chiedere)) {
$metodopagamento_sb = "SI";
$inviare = "NO";
} # fine if ($chiedi_metodopagamento == "SI" and !$metodo_pagamento and...
} # fine if ($caparra_totale > 0 and $chiedi_metodopagamento != "NO")
else $metodo_pagamento = "";
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
if (isset($chiedi_campi_form_personalizzati[$num1]) and empty(${"campo_pers".$num1})) {
${"campo_pers_sb".$num1} = "SI";
$inviare = "NO";
} # fine if (isset($chiedi_campi_form_personalizzati[$num1]) and empty(${"campo_pers".$num1}))
} # fine for $num1
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
if ($chiedi_campi_form_doc_cond[$num1] == "SI") {
$num_contr = $campi_form_doc_cond[$num1];
if (!isset(${"cond_contr".$num_contr}) or ${"cond_contr".$num_contr} != "SI") { $inviare = "NO"; ${"cond_contr_sb".$num_contr} = "SI"; }
} # fine if ($chiedi_campi_form_doc_cond[$num1] == "SI")
} # fine for $num1

if ($inviare == "SI") {
echo "<div id=\"step_final\">";
if ($PHP_SELF != str_replace($pag,"",$PHP_SELF)) $riferimento = $PHP_SELF;
else $riferimento = $pag;
if ($_SERVER['REMOTE_ADDR']) $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$REMOTE_ADDR = htmlspecialchars($REMOTE_ADDR);
$REMOTE_ADDR = aggslashdb($REMOTE_ADDR);

$testo_email = "$fre_Riferimento: $riferimento\nIP: $REMOTE_ADDR\n\n";
if ($cognome_richiedente) $testo_email .= "$fre_Cognome: $cognome_richiedente\n";
if ($nome_richiedente) $testo_email .= "$fre_Nome: $nome_richiedente\n";
if ($email_richiedente) $testo_email .= "$fre_Email: $email_richiedente\n";
if ($email2_richiedente) $testo_email .= "$fre_Email_alternativa: $email2_richiedente\n";
if ($sesso) $testo_email .= "$fre_Genere: $sesso\n";
if ($datanascita) $testo_email .= "$fre_Data_di_nascita: ".formatta_data($datanascita,$stile_data)."\n";
if ($documento) $testo_email .= "$fre_Documento: $tipodoc $documento\n";
if ($nazione) $testo_email .= "$fre_Nazione: $nazione\n";
if ($regione) $testo_email .= "$fre_Regione: $regione\n";
if ($citta) $testo_email .= "$fre_Citta: $citta\n";
if ($via) $testo_email .= "$fre_Via: $via\n";
if ($numcivico) $testo_email .= "$fre_Numero_civico: $numcivico\n";
if ($cap) $testo_email .= "$fre_Codice_postale: $cap\n";
if ($telefono) $testo_email .= "$fre_Telefono: $telefono\n";
if ($telefono2) $testo_email .= "$fre_Secondo_telefono: $telefono2\n";
if ($telefono3) $testo_email .= "$fre_Terzo_telefono: $telefono3\n";
if ($fax) $testo_email .= "$fre_Fax: $fax\n";
if ($email_cert_richiedente) $testo_email .= "$fre_Email_certificata_o_codice_destinatario: $email_cert_richiedente\n";
if ($codfiscale) $testo_email .= "$fre_Codice_fiscale: $codfiscale\n";
if ($partitaiva) $testo_email .= "$fre_Partita_iva: $partitaiva\n";
if ($commento) $testo_email .= "$fre_Commento: $commento\n\n";
if ($oracheckin) $testo_email .= "$fre_Orario_stimato_di_arrivo: ".formatta_data($oracheckin,$stile_data)."\n";
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
if (!empty(${"campo_pers".$num1})) $testo_email .= $campi_form_personalizzati[$num1].": ".${"campo_pers".$num1}."\n";
} # fine for $num1
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
if ($chiedi_campi_form_doc_cond[$num1] != "SI") {
$num_contr = $campi_form_doc_cond[$num1];
$nome_contr = fixset($nome_contratto[$num_contr]);
if (!strcmp((string) $nome_contr,"")) $nome_contr = "doc$num_contr";
if (${"cond_contr".$num_contr} == "SI") $testo_email .= $nome_contr."\n";
} # fine if ($chiedi_campi_form_doc_cond[$num1] != "SI")
} # fine for $num1

$testo_email .= "\n".$testo_tipologie_email;
if ($prenota_vicine == "SI") $testo_email .= ucfirst($fr_posizioni_vicine)."\n";
if ($anteponi_nome_valuta != "SI") $testo_email .= "$fre_Prezzo_totale: $costo_totale_p $fr_Euro\n";
else $testo_email .= "$fre_Prezzo_totale: $fr_Euro$costo_totale_p\n";
if ($mostra_caparra == "SI" and $caparra_totale > 0) {
if ($anteponi_nome_valuta != "SI") $testo_email .= "\n$fre_Caparra: $caparra_totale $fr_Euro\n";
else $testo_email .= "\n$fre_Caparra: $fr_Euro$caparra_totale\n";
if (strcmp(fixstr($valuta_pagamento),"")) {
$caparra_valuta = (double) $caparra_totale * (double) $altre_valute[$altre_valute['id'][$valuta_pagamento]]['cambio'];
$caparra_valuta = $caparra_valuta / (double) $altre_valute[$altre_valute['id'][$valuta_pagamento]]['arrotond'];
$caparra_valuta = round($caparra_valuta);
$caparra_valuta = $caparra_valuta * (double) $altre_valute[$altre_valute['id'][$valuta_pagamento]]['arrotond'];
if ($anteponi_nome_valuta != "SI") $testo_email .= "$fre_Valuta_della_caparra: $caparra_valuta $valuta_pagamento\n";
else $testo_email .= "$fre_Valuta_della_caparra: $valuta_pagamento$caparra_valuta\n";
} # fine if (strcmp(fixstr($valuta_pagamento),""))
} # fine if ($mostra_caparra == "SI" and $caparra_totale > 0)
if ($metodo_pagamento) $testo_email .= "$fre_Metodo_di_pagamento_della_caparra: $metodo_pagamento\n";

$inviato = array('ok' => 0);
$inviato_c = array('ok' => 0);
if ($indirizzo_email) {
if ($cognome_richiedente) {
if ($nome_richiedente) $nome_da = $nome_richiedente." ".$cognome_richiedente;
else $nome_da = $cognome_richiedente;
} # fine if ($cognome_richiedente)
else $nome_da = $REMOTE_ADDR;
if ($email_richiedente) $email_da = $email_richiedente;
else {
if ($email2_richiedente) $email_da = $email2_richiedente;
else $email_da = $indirizzo_email;
} # fine else if ($email_richiedente)
$inviato = manda_email($indirizzo_email,$email_da,$nome_da,$indirizzo_email,"","","",$fre_Richesta_prenotazione,$testo_email,'text/plain',"","",$tablepersonalizza);
if ($manda_copia_richiesta_email == "SI" and ($email_richiedente or $email2_richiedente)) {
$testo_email_copia = "
$fr_Abbiamo_ricevuto_la_sua_richiesta_di_prenotazione_ecc.


".preg_replace("/<[^>]*>/","",str_replace("<br>","\n",$testo_a_video))."


If you received this email without requesting it, it is because someone
with ip address $REMOTE_ADDR has used your email address in our form. In 
this case you can ignore this message.";
if ($email_richiedente) $email_inv = $email_richiedente;
else $email_inv = $email2_richiedente;
$inviato_c = manda_email($indirizzo_email,"","",$email_inv,"","","",$fr_Richesta_prenotazione,$testo_email_copia,'text/plain',"","",$tablepersonalizza);
} # fine if ($manda_copia_richiesta_email == "SI" and ($email_richiedente or $email2_richiedente))
} # fine if ($indirizzo_email)

if ($utente_messaggio) {
unlock_tabelle($tabelle_lock);
$tabelle_lock = array($tablemessaggi);
$altre_tab_lock = array($tablepersonalizza,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$utente_trovato = "SI";
if ($utente_messaggio == "tutti") {
$tutti_utenti = esegui_query("select * from $tableutenti order by idutenti");
$num_tutti_utenti = numlin_query($tutti_utenti);
$lista_utenti = ",";
for ($num1 = 0 ; $num1 < $num_tutti_utenti ; $num1++) {
$idutenti = risul_query($tutti_utenti,$num1,'idutenti');
$lista_utenti .= $idutenti.",";
} # fine for $num1
} # fine if ($utente_messaggio == "tutti")
else {
$utente_esistente = esegui_query("select idutenti from $tableutenti where nome_utente = '$utente_messaggio'");
if (numlin_query($utente_esistente) != 1) $utente_trovato = "NO";
else $lista_utenti = ",".risul_query($utente_esistente,0,'idutenti').",";
} # fine else if ($utente_messaggio == "tutti")
if ($utente_trovato == "SI") {
$data_limite = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600) - (24 * 3600)));
$richieste_precedenti = esegui_query("select idmessaggi from $tablemessaggi where tipo_messaggio = 'rprenota' and dati_messaggio17 = '$REMOTE_ADDR' and  datainserimento > '$data_limite'");
if (numlin_query($richieste_precedenti) > 30) $utente_trovato = "NO";
} # fine if ($utente_trovato == "SI")
if ($utente_trovato == "SI") {
$cognome_richiedente = htmlspecialchars(fixstr($cognome_richiedente));
$nome_richiedente = htmlspecialchars(fixstr($nome_richiedente));
$email_richiedente = htmlspecialchars(fixstr($email_richiedente));
$email2_richiedente = htmlspecialchars(fixstr($email2_richiedente));
$email_cert_richiedente = htmlspecialchars(fixstr($email_cert_richiedente));
$sesso = htmlspecialchars(fixstr($sesso));
$datanascita = htmlspecialchars(fixstr($datanascita));
$documento = htmlspecialchars(fixstr($documento));
$tipodoc = htmlspecialchars(fixstr($tipodoc));
$nazione = htmlspecialchars(fixstr($nazione));
$regione = htmlspecialchars(fixstr($regione));
$citta = htmlspecialchars(fixstr($citta));
$via = htmlspecialchars(fixstr($via));
$numcivico = htmlspecialchars(fixstr($numcivico));
$cap = htmlspecialchars(fixstr($cap));
$telefono = htmlspecialchars(fixstr($telefono));
$telefono2 = htmlspecialchars(fixstr($telefono2));
$telefono3 = htmlspecialchars(fixstr($telefono3));
$fax = htmlspecialchars(fixstr($fax));
$codfiscale = htmlspecialchars(fixstr($codfiscale));
$partitaiva = htmlspecialchars(fixstr($partitaiva));
$commento = htmlspecialchars(fixstr($commento));
$oracheckin = htmlspecialchars(fixstr($oracheckin));
$valuta_pagamento = str_replace(">","",fixstr($valuta_pagamento));
if (strcmp((string) $valuta_pagamento,"")) {
$cambio_pagamento = $altre_valute[$altre_valute['id'][$valuta_pagamento]]['cambio'];
$arrotond_pagamento = $altre_valute[$altre_valute['id'][$valuta_pagamento]]['arrotond'];
} # fine if (strcmp((string) $valuta_pagamento,""))
else {
$cambio_pagamento = "";
$arrotond_pagamento = "";
} # fine else if (strcmp((string) $valuta_pagamento,""))
$metodo_pagamento = str_replace(">","",$metodo_pagamento);
if (isset($origine_prenotazione) and (string) $origine_prenotazione != "") {
/*$origini_prenota = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'origini_prenota' and idutente = '1'");
$origini_prenota = risul_query($origini_prenota,0,'valpersonalizza');
if ($origini_prenota) {
$origini_prenota = explode(",",$origini_prenota);
$orig_prenota_trovata = "NO";
for ($num1 = 0 ; $num1 < count($origini_prenota) ; $num1++) if ($origini_prenota[$num1] == $origine_prenotazione) $orig_prenota_trovata = "SI";
if ($orig_prenota_trovata == "NO") $origine_prenotazione = "";
} # fine if ($origini_prenota)
else $origine_prenotazione = "";*/
$origine_prenotazione = aggslashdb($origine_prenotazione);
} # fine if (isset($origine_prenotazione) and (string) $origine_prenotazione != "")
$max_mess = esegui_query("select max(idmessaggi) from $tablemessaggi");
if (numlin_query($max_mess) != 0) $max_mess = (risul_query($max_mess,0,0) + 1);
else $max_mess = 1;
$datainserimento = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
$mittente = $REMOTE_ADDR;
if ($email_richiedente) $mittente = "<a style=\"color: #222222;\" href=\"mailto:$email_richiedente\">$email_richiedente</a>";
else {
if ($email2_richiedente) $mittente = "<a style=\"color: #222222;\" href=\"mailto:$email2_richiedente\">$email2_richiedente</a>";
elseif ($cognome_richiedente) $mittente = $cognome_richiedente;
} # fine else if ($email_richiedente)
$mittente = aggslashdb($mittente);
$testo_email = htmlspecialchars($testo_email);
$testo_email = aggslashdb($testo_email);

$dati_transazione3 = aggslashdb($num_tipologie);
$dati_transazione4 = "";
$dati_transazione5 = "";
$dati_transazione6 = "";
$dati_transazione7 = "";
$dati_transazione8 = "";
$dati_transazione9 = "";
$dati_transazione10 = "";
$dati_transazione11 = "";
$dati_transazione12 = "";
$dati_transazione13 = "";
$dati_transazione14 = "";
$dati_transazione21 = "";
$dati_transazione22 = "";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
$dati_transazione4 .= ",".aggslashdb(${"inizioperiodo".$n_t});
$dati_transazione5 .= ",".aggslashdb(${"fineperiodo".$n_t});
$dati_transazione6 .= ",".aggslashdb(${"numero_tariffa".$n_t});
if (!empty($numpersone_orig_ric_nt[$n_t])) $numpersone_corr = $numpersone_orig_ric_nt[$n_t];
else $numpersone_corr = ${"numpersone".$n_t};
$dati_transazione7 .= ",".aggslashdb($numpersone_corr);
$dati_transazione8 .= ",".aggslashdb($num_app_tipo_richiesti_orig[$n_t]);
$dati_transazione9 .= ",".aggslashdb(${"numcostiagg_transazione".$n_t});
$dati_transazione10 .= ";";
$dati_transazione11 .= ";";
$dati_transazione12 .= ";";
$dati_transazione13 .= ";";
$dati_transazione14 .= ";";
$dati_transazione21 .= ";";
for ($numca = 1 ; $numca <= ${"numcostiagg_transazione".$n_t} ; $numca++) {
if ($numca > 1) {
$dati_transazione10 .= ",";
$dati_transazione11 .= ",";
$dati_transazione12 .= ",";
$dati_transazione13 .= ",";
$dati_transazione14 .= ":";
$dati_transazione21 .= ",";
} # fine if ($numca > 1)
$dati_transazione10 .= aggslashdb(${"idcostoagg".$numca."_".$n_t});
$dati_transazione11 .= aggslashdb(${"costoagg".$numca."_".$n_t});
$dati_transazione12 .= aggslashdb(${"numsettimane".$numca."_".$n_t});
$dati_transazione13 .= aggslashdb(${"nummoltiplica_ca".$numca."_".$n_t});
$dati_transazione14 .= aggslashdb(${"id_periodi_costo".$numca."_".$n_t});
$dati_transazione21 .= aggslashdb(${"catpers_ca".$numca."_".$n_t});
} # fine for $numca
$dati_transazione22 .= ";";
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if ($num1 > 0) $dati_transazione22 .= ",";
if (empty($cat_numpers_orig[$n_t][$num1])) $dati_transazione22 .= aggslashdb(${"cat$num1"."_numpers$n_t"});
else $dati_transazione22 .= aggslashdb($cat_numpers_orig[$n_t][$num1]);
} # fine for for $num1
} # fine for $n_t
$dati_transazione4 = substr($dati_transazione4,1);
$dati_transazione5 = substr($dati_transazione5,1);
$dati_transazione6 = substr($dati_transazione6,1);
$dati_transazione7 = substr($dati_transazione7,1);
$dati_transazione8 = substr($dati_transazione8,1);
$dati_transazione9 = substr($dati_transazione9,1);
$dati_transazione10 = substr($dati_transazione10,1);
$dati_transazione11 = substr($dati_transazione11,1);
$dati_transazione12 = substr($dati_transazione12,1);
$dati_transazione13 = substr($dati_transazione13,1);
$dati_transazione14 = substr($dati_transazione14,1);
$dati_transazione21 = substr($dati_transazione21,1);
$dati_transazione22 = substr($dati_transazione22,1);

$commenti_pers = "";
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
if (isset(${"campo_pers".$num1}) and strcmp((string) ${"campo_pers".$num1},"")) {
${"campo_pers".$num1} = htmlspecialchars(${"campo_pers".$num1});
$agg_a_comm = 1;
if ($ins_campi_form_personalizzati[$num1]) {
for ($num2 = 0 ; $num2 < $num_commenti_pers ; $num2++) {
if ($ins_campi_form_personalizzati[$num1] == $campi_pers_comm[$num2]) {
$agg_a_comm = 0;
$commenti_pers .= ">".$campi_pers_comm[$num2]."<".${"campo_pers".$num1};
break;
} # fine if ($ins_campi_form_personalizzati[$num1] == $campi_pers_comm[$num2])
} # fine for $num2
} # fine if ($ins_campi_form_personalizzati[$num1])
if ($agg_a_comm) {
if (strcmp((string) $commento,"")) $commento .= " - ";
$commento .= htmlspecialchars($campi_form_personalizzati[$num1]).": ".${"campo_pers".$num1};
} # fine if ($agg_a_comm)
} # fine if (isset(${"campo_pers".$num1}) and strcmp((string) ${"campo_pers".$num1},""))
} # fine for $num1
$campi_pers_clienti_vett = array();
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
if ($chiedi_campi_form_doc_cond[$num1] != "SI") {
$num_contr = $campi_form_doc_cond[$num1];
if (${"cond_contr".$num_contr} == "SI") {
$nome_contr = htmlspecialchars(fixstr($nome_contratto[$num_contr]));
if (!strcmp((string) $nome_contr,"")) $nome_contr = "doc$num_contr";
$agg_a_comm = 1;
if (substr($chiedi_campi_form_doc_cond[$num1],0,3) == "op_") {
for ($num2 = 0 ; $num2 < $num_campi_pers_cliente ; $num2++) {
$campo_pers_cliente = explode("<",$campi_pers_cliente[$num2]);
if (substr($chiedi_campi_form_doc_cond[$num1],3) == $campo_pers_cliente[0]) {
$agg_a_comm = 0;
if (strcmp((string) $campi_pers_clienti_vett[$campo_pers_cliente[0]],"")) $campi_pers_clienti_vett[$campo_pers_cliente[0]] .= " - ";
$campi_pers_clienti_vett[$campo_pers_cliente[0]] .= $nome_contr;
break;
} # fine if (substr($chiedi_campi_form_doc_cond[$num1],3) == $campo_pers_cliente[0])
} # fine for $num2
} # fine if (substr($chiedi_campi_form_doc_cond[$num1],0,3) == "op_")
if ($agg_a_comm) {
if (strcmp((string) $commento,"")) $commento .= " - ";
$commento .= $nome_contr;
} # fine if ($agg_a_comm)
} # fine if (${"cond_contr".$num_contr} == "SI")
} # fine if ($chiedi_campi_form_doc_cond[$num1] != "SI")
} # fine for $num1
$campi_pers_clienti = "";
foreach ($campi_pers_clienti_vett as $campo_pc => $val_pc) $campi_pers_clienti .= ">$campo_pc<$val_pc";

$dati_transazione15 = aggslashdb("$cognome_richiedente<d>$nome_richiedente<d>$email_richiedente<d>$sesso<d>$datanascita<d>$documento<d>$nazione<d>$regione<d>$citta<d>$via<d>$numcivico<d>");
$dati_transazione15 .= aggslashdb("$cap<d>$telefono<d>$telefono2<d>$telefono3<d>$fax<d>$oracheckin<d>$metodo_pagamento<d>$tipodoc<d>$lingua_modello<d>$commento<d>$commenti_pers<d>$campi_pers_clienti<d>");
$dati_transazione15 .= aggslashdb("$codfiscale<d>$partitaiva<d>$valuta_pagamento<d>$cambio_pagamento<d>$arrotond_pagamento<d>$email2_richiedente<d>$email_cert_richiedente");
$dati_transazione16 = substr($dati_transazione16,1);

esegui_query("insert into $tablemessaggi (idmessaggi,tipo_messaggio,idutenti,idutenti_visto,datavisione,mittente,testo,dati_messaggio1,dati_messaggio2,dati_messaggio3,dati_messaggio4,dati_messaggio5,dati_messaggio6,dati_messaggio7,dati_messaggio8,dati_messaggio9,dati_messaggio10,dati_messaggio11,dati_messaggio12,dati_messaggio13,dati_messaggio14,dati_messaggio15,dati_messaggio16,dati_messaggio17,dati_messaggio18,dati_messaggio19,dati_messaggio21,dati_messaggio22,datainserimento)
 values ('$max_mess','rprenota','$lista_utenti','$lista_utenti','$datainserimento','$mittente','$testo_email','da_inserire','$costo_totale,$caparra_totale','$dati_transazione3','$dati_transazione4','$dati_transazione5','$dati_transazione6','$dati_transazione7','$dati_transazione8','$dati_transazione9','$dati_transazione10','$dati_transazione11','$dati_transazione12','$dati_transazione13','$dati_transazione14','$dati_transazione15','$dati_transazione16','$REMOTE_ADDR','$anno','$origine_prenotazione>$prenota_vicine','$dati_transazione21','$dati_transazione22','$datainserimento')");
$inviato = array('ok' => 1);
} # fine if ($utente_trovato == "SI")
unlock_tabelle($tabelle_lock);
$tabelle_lock = "";
} # fine if ($utente_messaggio)

if ($inviato['ok']) {
echo "<br>".$fr_Richiesta_di_prenotazione_inviata;
if ($email_richiedente) echo " $fr_da <b>$email_richiedente</b>";
elseif ($email2_richiedente) echo " $fr_da <b>$email2_richiedente</b>";
echo ".<br>";
if ($inviato_c['ok'] and ($email_richiedente or $email2_richiedente)) {
echo "<br>$fr_Copia_della_richiesta_e_stata_inviata_a ";
if ($email_richiedente) echo "$email_richiedente.<br>";
else echo "$email2_richiedente.<br>";
} # fine if ($inviato_c['ok'] and ($email_richiedente or $email2_richiedente))
} # fine if ($inviato['ok'])
else echo "$fr_Non_e_stato_possibile_inviare_la_richiesta.<br>";
echo "</div>";
} # fine if ($inviare == "SI")
else $mostra_c_e_disp = "SI";
} # fine if ($mostra_richiesta_via_mail == "SI" and isset($manda_mail) and $manda_mail == "SI")


if ($mostra_c_e_disp == "SI") {
echo "<div id=\"step_insert_data\">".$testo_a_video;
if ($mostra_richiesta_via_mail == "SI") {
$cognome_richiedente = htmlspecialchars(fixstr($cognome_richiedente));
$nome_richiedente = htmlspecialchars(fixstr($nome_richiedente));
$email_richiedente = htmlspecialchars(fixstr($email_richiedente));
$email2_richiedente = htmlspecialchars(fixstr($email2_richiedente));
$email_cert_richiedente = htmlspecialchars(fixstr($email_cert_richiedente));
$sesso = htmlspecialchars(fixstr($sesso));
$documento = htmlspecialchars(fixstr($documento));
$tipodoc = htmlspecialchars(fixstr($tipodoc));
$nazione = htmlspecialchars(fixstr($nazione));
$regione = htmlspecialchars(fixstr($regione));
$citta = htmlspecialchars(fixstr($citta));
$via = htmlspecialchars(fixstr($via));
$numcivico = htmlspecialchars(fixstr($numcivico));
$cap = htmlspecialchars(fixstr($cap));
$telefono = htmlspecialchars(fixstr($telefono));
$telefono2 = htmlspecialchars(fixstr($telefono2));
$telefono3 = htmlspecialchars(fixstr($telefono3));
$fax = htmlspecialchars(fixstr($fax));
$codfiscale = htmlspecialchars(fixstr($codfiscale));
$partitaiva = htmlspecialchars(fixstr($partitaiva));
$commento = htmlspecialchars(fixstr($commento));
$num_campi_pers = (int) fixset($num_campi_pers);
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) ${"campo_pers".$num1} = htmlspecialchars(fixstr(${"campo_pers".$num1}));

echo "<br>$chiusura_tag_font
<form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#action_anchor\" id=\"cust_data\">
<div class=\"ftxt\">
<input type=\"hidden\" name=\"contr_disp\" value=\"SI\">
<input type=\"hidden\" name=\"num_tipologie\" value=\"$num_tipologie\">
<input type=\"hidden\" name=\"manda_mail\" value=\"SI\">
$dati_form_iniziale";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($numca = 1 ; $numca <= ${"numcostiagg".$n_t} ; $numca++) echo "<input type=\"hidden\" name=\"id_periodi_costo$numca"."_$n_t\" value=\"".${"id_periodi_costo".$numca."_".$n_t}."\">";
} # fine for $n_t
if ($chiedi_nazione != "NO" or $chiedi_regione != "NO" or $chiedi_citta != "NO") mostra_funzjs_dati_rel("","","",$anno,"&framed=1&dati_relutenti=1",$pag);
echo "<table class=\"t_book\" $stile_tabella_prenotazione><tr><td>";
echo "<div class=\"reserve_line\">$apertura_tag_font$fr_Prenota ";
if ($num_tipologie > 1) echo "$num_app_richiesti $fr_appartamenti ";
else echo "$fr_dal ".$data_inizioperiodo_f[1]." $fr_al ".$data_fineperiodo_f[1]." ";
echo "$fr_per ";
if ($anteponi_nome_valuta != "SI") echo $costo_totale_p." ";
if ($costo_totale == 1) echo $fr_Euro;
else echo $fr_Euros;
if ($anteponi_nome_valuta == "SI") echo $costo_totale_p;
echo ".<br>$chiusura_tag_font</div><table><tr><td style=\"height: 6px;\"></td></tr>";

if ($chiedi_cognome != "NO") {
if (isset($cognome_richiedente_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\">$apertura_tag_f $fr_Cognome: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"cognome_richiedente\" size=\"30\" value=\"$cognome_richiedente\">";
if ($chiedi_cognome == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_cognome != "NO")
if ($chiedi_nome != "NO") {
if (isset($nome_richiedente_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\">$apertura_tag_f $fr_Nome: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"nome_richiedente\" size=\"30\" value=\"$nome_richiedente\">";
if ($chiedi_nome == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_nome != "NO")
if ($chiedi_email != "NO") {
if (isset($email_richiedente_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\">$apertura_tag_f $fr_Email: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"email_richiedente\" size=\"30\" value=\"$email_richiedente\">";
if ($chiedi_email == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_email != "NO")
if ($chiedi_email2 != "NO") {
if (isset($email2_richiedente_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\">$apertura_tag_f $fr_Email_alternativa: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"email2_richiedente\" size=\"30\" value=\"$email2_richiedente\">";
if ($chiedi_email2 == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_email2 != "NO")
if ($chiedi_sesso != "NO") {
if (isset($sesso_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
if ($sesso == "M") $sel_M = " selected";
else $sel_M = "";
if ($sesso == "F") $sel_F = " selected";
else $sel_F = "";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Genere: $chiusura_tag_f</td><td>$apertura_tag_font
 <select name=\"sesso\">
<option value=\"\">-</option>
<option value=\"M\"$sel_M>$fr_maschile</option>
<option value=\"F\"$sel_F>$fr_femminile</option>
</select>";
if ($chiedi_sesso == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_sesso != "NO")
if ($chiedi_datanascita != "NO") {
if (isset($datanascita_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
if (empty($annonascita)) $annonascita = "19";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Data_di_nascita: $chiusura_tag_f</td><td>$apertura_tag_font
 <select name=\"giornonascita\">
<option value=\"\">--</option>";
for ($num1 = 1 ; $num1 <= 31 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($giornonascita) and $giornonascita == $num1) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select>/
<select name=\"mesenascita\">
<option value=\"\">--</option>";
for ($num1 = 1 ; $num1 <= 12 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($mesenascita) and $mesenascita == $num1) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num
echo "</select>/
<input type=\"text\" name=\"annonascita\" size=\"5\" maxlength=\"4\" value=\"$annonascita\">";
if ($chiedi_datanascita == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_datanascita != "NO")
if ($chiedi_documento != "NO") {
if (isset($documento_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Documento: $chiusura_tag_f</td><td>$apertura_tag_font";
$lista_tipi_doc = mostra_lista_relutenti("tipodoc",$tipodoc,$utente_liste,"nome_documentoid","iddocumentiid","iddocumentoid",$tabledocumentiid,$tablerelutenti,"","","SI");
if ($lista_tipi_doc) $size = 18;
else $size = 30;
echo " $lista_tipi_doc<input type=\"text\" name=\"documento\" size=\"$size\" value=\"$documento\">";
if ($chiedi_documento == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_documento != "NO")
if ($chiedi_nazione != "NO") {
if (isset($nazione_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
if ($chiedi_regione != "NO") $rel_regione = "regione";
else $rel_regione = "";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Nazione: $chiusura_tag_f</td><td>$apertura_tag_font
 ".mostra_lista_relutenti("nazione",$nazione,$utente_liste,"nome_nazione","idnazioni","idnazione",$tablenazioni,$tablerelutenti,"30","","",$rel_regione,$rel_regione)."";
if ($chiedi_nazione == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_nazione != "NO")
if ($chiedi_regione != "NO") {
if (isset($regione_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
if ($chiedi_nazione != "NO") $rel_nazione = "nazione";
else $rel_nazione = "";
if ($chiedi_citta != "NO") $rel_citta = "citta";
else $rel_citta = "";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Regione: $chiusura_tag_f</td><td>$apertura_tag_font
 ".mostra_lista_relutenti("regione",$regione,$utente_liste,"nome_regione","idregioni","idregione",$tableregioni,$tablerelutenti,"30","","",$rel_citta,$rel_citta,$rel_nazione)."";
if ($chiedi_regione == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_regione != "NO")
if ($chiedi_citta != "NO") {
if (isset($citta_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
if ($chiedi_regione != "NO") $rel_regione = "regione";
else $rel_regione = "";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Citta: $chiusura_tag_f</td><td>$apertura_tag_font
 ".mostra_lista_relutenti("citta",$citta,$utente_liste,"nome_citta","idcitta","idcitta",$tablecitta,$tablerelutenti,"30","","","","",$rel_regione)."";
if ($chiedi_citta == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_citta != "NO")
if ($chiedi_cap != "NO") {
if (isset($cap_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Codice_postale: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"cap\" size=\"30\" value=\"$cap\">";
if ($chiedi_cap == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_cap != "NO")
if ($chiedi_via != "NO") {
if (isset($via_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Via: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"via\" size=\"30\" value=\"$via\">";
if ($chiedi_via == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_via != "NO")
if ($chiedi_numcivico != "NO") {
if (isset($numcivico_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Numero_civico: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"numcivico\" size=\"30\" value=\"$numcivico\">";
if ($chiedi_numcivico == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_numcivico != "NO")
if ($chiedi_telefono != "NO") {
if (isset($telefono_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Telefono: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"telefono\" size=\"30\" value=\"$telefono\">";
if ($chiedi_telefono == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_telefono != "NO")
if ($chiedi_telefono2 != "NO") {
if (isset($telefono2_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Secondo_telefono: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"telefono2\" size=\"30\" value=\"$telefono2\">";
if ($chiedi_telefono2 == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_telefono2 != "NO")
if ($chiedi_telefono3 != "NO") {
if (isset($telefono3_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Terzo_telefono: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"telefono3\" size=\"30\" value=\"$telefono3\">";
if ($chiedi_telefono3 == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_telefono3 != "NO")
if ($chiedi_fax != "NO") {
if (isset($fax_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Fax: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"fax\" size=\"30\" value=\"$fax\">";
if ($chiedi_fax == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_fax != "NO")
if ($chiedi_email_cert != "NO") {
if (isset($email_cert_richiedente_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\">$apertura_tag_f $fr_Email_certificata_o_codice_destinatario: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"email_cert_richiedente\" size=\"30\" value=\"$email_cert_richiedente\">";
if ($chiedi_email_cert == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_email_cert != "NO")
if ($chiedi_codfiscale != "NO") {
if (isset($codfiscale_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Codice_fiscale: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"codfiscale\" size=\"30\" value=\"$codfiscale\">";
if ($chiedi_codfiscale == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_codfiscale != "NO")
if ($chiedi_partitaiva != "NO") {
if (isset($partitaiva_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Partita_iva: $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"partitaiva\" size=\"30\" value=\"$partitaiva\">";
if ($chiedi_partitaiva == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_partitaiva != "NO")
if ($chiedi_commento != "NO") {
if (isset($commento_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Commento: $chiusura_tag_f</td><td>$apertura_tag_font
 <textarea name=\"commento\" rows=3 cols=23>$commento</textarea>";
if ($chiedi_commento == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_commento != "NO")

if ($chiedi_oracheckin != "NO") {
if (isset($oracheckin_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Orario_stimato_di_arrivo: $chiusura_tag_f</td><td>$apertura_tag_font
 <select name=\"data_oracheckin\">";
$formato_vedi = "d-m-Y";
if ($stile_data == "usa") $formato_vedi = "m-d-Y";
$data_inizio_minima = "";
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
if (!$data_inizio_minima or $data_inizio_minima > $data_inizioperiodo[$n_t]) $data_inizio_minima = $data_inizioperiodo[$n_t];
} # fine for $n_t
$anno_ini = substr($data_inizio_minima,0,4);
$mese_ini = substr($data_inizio_minima,5,2);
$giorno_ini = substr($data_inizio_minima,8,2);
if (empty($data_oracheckin)) $data_sel = $data_inizio_minima;
else $data_sel = $data_oracheckin;
if ($tipo_periodi == "g") $giorno_fine = $giorno_ini + $intervalloperiodo;
else $giorno_fine = $giorno_ini + 5;
if ($giorno_fine > ($giorno_ini + 5)) $giorno_fine = $giorno_ini + 5;
for ($num1 = $giorno_ini ; $num1 <= $giorno_fine ; $num1++) {
$data_select = date("Y-m-d" , mktime(0,0,0,$mese_ini,$num1,$anno_ini));
$data_select_vedi = date($formato_vedi,mktime(0,0,0,$mese_ini,$num1,$anno_ini));
if ($data_select == $data_sel) $sel = " selected";
else $sel = "";
echo "<option value=\"$data_select\"$sel>$data_select_vedi</option>";
} # fine for $num1
if (empty($ora_oracheckin)) $sel = " selected";
else $sel = "";
echo "</select>&nbsp;&nbsp;<select name=\"ora_oracheckin\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 24 ; $num1++) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($ora_oracheckin) and $num1 == $ora_oracheckin) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
if (empty($min_oracheckin)) $sel = " selected";
else $sel = "";
echo "</select>:<select name=\"min_oracheckin\">
<option value=\"\"$sel>--</option>";
for ($num1 = 0 ; $num1 < 60 ; $num1 = $num1 + 15) {
if (strlen($num1) == 1) $num1 = "0".$num1;
if (isset($min_oracheckin) and $num1 == $min_oracheckin) $sel = " selected";
else $sel = "";
echo "<option value=\"$num1\"$sel>$num1</option>";
} # fine for $num1
echo "</select>";
if ($chiedi_oracheckin == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($chiedi_oracheckin != "NO")

if ($caparra_totale > 0) {
if ($chiedi_valutapagamento != "NO") {
$altre_valute = altre_valute($utente_liste);
if ($altre_valute['num']) {
if (!isset($valuta_pagamento) or !strcmp((string) $valuta_pagamento,"")) $sel = " selected";
else $sel = "";
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Valuta_della_caparra: $chiusura_tag_f</td><td>$apertura_tag_font
 <select name=\"valuta_pagamento\">
<option value=\"\"$sel>".punti_in_num($caparra_totale,$stile_soldi)." ";
if ($caparra_totale == 1) echo $fr_Euro;
else echo $fr_Euros;
echo "</option>";
for ($num1 = 0 ; $num1 < $altre_valute['num'] ; $num1++) {
$caparra_valuta = (double) $caparra_totale * (double) $altre_valute[$num1]['cambio'];
$caparra_valuta = $caparra_valuta / (double) $altre_valute[$num1]['arrotond'];
$caparra_valuta = round($caparra_valuta);
$caparra_valuta = $caparra_valuta * (double) $altre_valute[$num1]['arrotond'];
$caparra_valuta_p = punti_in_num($caparra_valuta,$stile_soldi);
if (isset($valuta_pagamento) and $altre_valute[$num1]['nome'] == $valuta_pagamento) $sel = " selected";
else $sel = "";
echo "<option value=\"".htmlspecialchars($altre_valute[$num1]['nome'])."\"$sel>$caparra_valuta_p ".$altre_valute[$num1]['nome']."</option>";
} # fine for $num1
echo "</select>
$chiusura_tag_font</td></tr>";
} # fine if ($altre_valute['num'])
} # fine if ($chiedi_valutapagamento != "NO")
if ($chiedi_metodopagamento != "NO") {
if (isset($metodopagamento_sb)) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
$num_metodi_pagamento = count($metodi_pagamento_da_chiedere);
if ($num_metodi_pagamento > 0) {
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f $fr_Metodo_di_pagamento_della_caparra: $chiusura_tag_f</td><td>$apertura_tag_font
 <select name=\"metodo_pagamento\">
<option value=\"\">----</option>";
if (@get_magic_quotes_gpc()) $metodo_pagamento = stripslashes($metodo_pagamento);
reset($metodi_pagamento_da_chiedere);
foreach ($metodi_pagamento_da_chiedere as $metodo => $val) {
if (isset($metodo_pagamento) and $metodo == $metodo_pagamento) $sel = " selected";
else $sel = "";
if (!empty($nomi_metodi_pagamento_imposti[$metodo])) $nome_metodo = htmlspecialchars($nomi_metodi_pagamento_imposti[$metodo]);
else $nome_metodo = $metodo;
echo "<option value=\"".htmlspecialchars($metodo)."\"$sel>$nome_metodo</option>";
} # fine foreach ($metodi_pagamento_da_chiedere as $metodo => $val)
echo "</select>";
if ($chiedi_metodopagamento == "SI") echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine if ($num_metodi_pagamento > 0)
} # fine if ($chiedi_metodopagamento != "NO")
} # fine if ($caparra_totale > 0)

$num_campi_pers = count($campi_form_personalizzati);
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
if (isset(${"campo_pers_sb".$num1})) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td align=\"right\" valign=\"top\">$apertura_tag_f ".$campi_form_personalizzati[$num1].": $chiusura_tag_f</td><td>$apertura_tag_font
 <input type=\"text\" name=\"campo_pers$num1\" size=\"30\" value=\"".fixset(${"campo_pers".$num1})."\">";
if (isset($chiedi_campi_form_personalizzati[$num1])) echo "&nbsp;$asterisco";
echo "$chiusura_tag_font</td></tr>";
} # fine for $num1

if ($num_campi_doc_cond) {
$num_ripeti = 0;
$tariffa_selezionata = "";
$num_costo_agg_sel = "";
$lingua_mex = "";
$modifica_pers = "SI";
$vedi_clienti = "SI";
$data_inizio_selezione = "";
$data_fine_selezione = "";
$dati_allegato = array('num' => 0);
for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {
for ($num1 = 1 ; $num1 <= ${"num_app_tipo_richiesti".$n_t} ; $num1++) {
$num_ripeti++;
${"cognome_".$num_ripeti} = "";
${"nome_".$num_ripeti} = "";
${"soprannome_".$num_ripeti} = "";
${"titolo_".$num_ripeti} = "";
${"sesso_".$num_ripeti} = "";
${"data_nascita_".$num_ripeti} = "";
${"citta_nascita_".$num_ripeti} = "";
${"regione_nascita_".$num_ripeti} = "";
${"nazione_nascita_".$num_ripeti} = "";
${"cittadinanza_".$num_ripeti} = "";
${"nazione_".$num_ripeti} = "";
${"regione_".$num_ripeti} = "";
${"citta_".$num_ripeti} = "";
${"via_".$num_ripeti} = "";
${"numcivico_".$num_ripeti} = "";
${"cap_".$num_ripeti} = "";
${"documento_".$num_ripeti} = "";
${"tipo_documento_".$num_ripeti} = "";
${"citta_documento_".$num_ripeti} = "";
${"regione_documento_".$num_ripeti} = "";
${"nazione_documento_".$num_ripeti} = "";
${"scadenza_documento_".$num_ripeti} = "";
${"telefono_".$num_ripeti} = "";
${"telefono2_".$num_ripeti} = "";
${"telefono3_".$num_ripeti} = "";
${"fax_".$num_ripeti} = "";
${"email2_".$num_ripeti} = "";
${"email_certificata_".$num_ripeti} = "";
${"email_".$num_ripeti} = "";
${"codice_lingua_".$num_ripeti} = $lingua_modello;
${"codice_fiscale_".$num_ripeti} = "";
${"partita_iva_".$num_ripeti} = "";
for ($num2 = 0 ; $num2 < $num_campi_pers_cliente ; $num2++) {
$campo_pers_cliente = explode("<",$campi_pers_cliente[$num2]);
${"campo_personalizzato_".$campo_pers_cliente[0]."_$num_ripeti"} = "";
} # fine for $num2
${"numero_prenotazione_".$num_ripeti} = "";
${"codice_prenotazione_".$num_ripeti} = "";
${"data_inizio_".$num_ripeti} = $data_inizioperiodo[$n_t];
${"data_fine_".$num_ripeti} = $data_fineperiodo[$n_t];
${"num_periodi_".$num_ripeti} = $idfineperiodo[$n_t] - $idinizioperiodo[$n_t] + 1;
${"nome_tariffa_".$num_ripeti} = ${"nometariffa_imposta".$n_t};
${"costo_tariffa_".$num_ripeti} = (double) $costo_tariffa_reg[$n_t][$num1];
${"valuta_tariffa_".$num_ripeti} = "";
${"tasso_cambio_tariffa_".$num_ripeti} = "";
${"costo_valuta_tariffa_".$num_ripeti} = "";
${"tariffesettimanali_".$num_ripeti} = $tariffesettimanali_reg[$n_t][$num1];
${"sconto_".$num_ripeti} = "";
${"valore_valuta_sconto_".$num_ripeti} = "";
${"percentuale_tasse_tariffa_".$num_ripeti} = $dati_tariffe["tariffa".${"numero_tariffa".$n_t}]['tasse_percent'];
${"commento_".$num_ripeti} = "";
${"promemoria_entrata_".$num_ripeti} = "";
${"promemoria_uscita_".$num_ripeti} = "";
for ($num2 = 0 ; $num2 < $num_commenti_pers ; $num2++) ${"commento_personalizzato_".$campi_pers_comm[$num2]."_$num_ripeti"} = "";
${"origine_prenotazione_".$num_ripeti} = $origine_prenotazione;
${"caparra_".$num_ripeti} = $caparra_reg[$n_t][$num1];
${"valuta_caparra_".$num_ripeti} = "";
${"valore_valuta_caparra_".$num_ripeti} = "";
${"tasso_cambio_caparra_".$num_ripeti} = "";
${"metodo_pagamento_caparra_".$num_ripeti} = "";
${"commissioni_".$num_ripeti} = $commissioni_reg[$n_t][$num1];
if (isset($numpersone_nr[$n_t][($num1 - 1)]) and strcmp((string) $numpersone_nr[$n_t][($num1 - 1)],"")) $numpersone_corr = $numpersone_nr[$n_t][($num1 - 1)];
else $numpersone_corr = ${"numpersone".$n_t};
${"num_persone_".$num_ripeti} = $numpersone_corr;
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if (strcmp(fixstr($cat_persone_nr[$n_t][($num1 - 1)][fixset($cat_persone_nr[$n_t][($num1 - 1)]['ord'][$num2])]['molt']),"")) $cat_pers_corr = $cat_persone_nr[$n_t][($num1 - 1)][$cat_persone_nr[$n_t][($num1 - 1)]['ord'][$num2]]['molt'];
else $cat_pers_corr =  ${"cat$num2"."_numpers".$n_t};
if (!$cat_pers_corr) $cat_pers_corr = "0";
${"num_persone_tipo_".($num2 + 1)."_$num_ripeti"} = $cat_pers_corr;
} # fine for $num2
${"unita_occupata_".$num_ripeti} = $app_liberato[$num_ripeti];
${"app_assegnabili_".$num_ripeti} = $lista_app_reg[$n_t];
${"pagato_".$num_ripeti} = "";
for ($numca = 0 ; $numca < $num_costi_reg[$n_t][$num1] ; $numca++) {
${"nome_costo_agg".$numca."_".$num_ripeti} = $nome_costo_reg[$n_t][$num1][$numca];
${"val_costo_agg".$numca."_".$num_ripeti} = $val_costo_reg[$n_t][$num1][$numca];
${"percentuale_tasse_costo_agg".$numca."_".$num_ripeti} = $tasseperc_costo_reg[$n_t][$num1][$numca];
${"moltiplica_max_costo_agg".$numca."_".$num_ripeti} = $moltmax_costo_reg[$n_t][$num1][$numca];
${"valore_giornaliero_max_costo_agg".$numca."_".$num_ripeti} = $valgiornmax_costo_reg[$n_t][$num1][$numca];
${"giorni_costo_agg".$numca."_".$num_ripeti} = fixset($giorni_costo_reg[$n_t][$num1][$numca]);
${"tipo_persona_costo_agg".$numca."_".$num_ripeti} = fixset($tipo_persona_costo_reg[$n_t][$num1][$numca]);
${"data_inserimento_costo_agg".$numca."_".$num_ripeti} = "";
${"utente_inserimento_costo_agg".$numca."_".$num_ripeti} = "";
} # fine for $numca
${"num_costi_aggiuntivi_".$num_ripeti} = $num_costi_reg[$n_t][$num1];
${"n_letti_agg_".$num_ripeti} = $num_letti_agg_reg[$n_t][$num1];
${"costo_tot_".$num_ripeti} = $costo_tariffa_tot_reg[$n_t][$num1];
${"costo_valuta_tot_".$num_ripeti} = "";
${"orario_entrata_stimato_".$num_ripeti} = "";
${"orario_registrazione_entrata_".$num_ripeti} = "";
${"orario_registrazione_uscita_".$num_ripeti} = "";
${"num_pagamenti_".$num_ripeti} = 0;
${"data_paga0_".$num_ripeti} = "";
${"data_operazione_paga0_".$num_ripeti} = "";
${"utente_paga0_".$num_ripeti} = "";
${"metodo_paga0_".$num_ripeti} = "";
${"id_paga0_".$num_ripeti} = "";
${"note_paga0_".$num_ripeti} = "";
${"saldo_paga0_".$num_ripeti} = "";
${"valuta_paga0_".$num_ripeti} = "";
${"tasso_cambio_paga0_".$num_ripeti} = "";
${"valore_valuta_paga0_".$num_ripeti} = "";
${"data_inserimento_prenotazione_".$num_ripeti} = "";
${"utente_inserimento_prenotazione_".$num_ripeti} = "";
} # fine for $num1
} # fine for $n_t
crea_trad_var_vett($trad_var_vett);
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
$num_contr = $campi_form_doc_cond[$num1];
$testo_contr = crea_contratto($num_contr,$tipo_contratto,$utente_liste,"","","",$trad_var_vett,1);
if (isset(${"cond_contr_sb".$num_contr})) { $apertura_tag_f = $apertura_tag_font_rosse; $chiusura_tag_f = $chiusura_tag_font_rosse; $asterisco = $fr_asterisco_rosso; }
else { $apertura_tag_f = $apertura_tag_font; $chiusura_tag_f = $chiusura_tag_font; $asterisco = $fr_asterisco_nero; }
echo "<tr><td style=\"height: 6px;\"></td></tr><tr><td class=\"agreem\" colspan=\"2\">";
if (isset($nome_contratto[$num_contr]) and strcmp((string) $nome_contratto[$num_contr],"")) echo "<div class=\"agreemtitl\">".$nome_contratto[$num_contr]."</div>";
if ($campi_form_doc_cond['tipo'][$num1] == "txt") {
if ($mobile_device) $txt_cols = "40";
else $txt_cols = "70";
echo "<textarea class=\"agreem\" rows=3 cols=$txt_cols readonly=\"readonly\">".htmlspecialchars($testo_contr)."</textarea>";
} # fine if ($campi_form_doc_cond['tipo'][$num1] == "txt")
else echo "<div class=\"agreem\">$testo_contr</div>";
if (isset(${"cond_contr".$num_contr}) and ${"cond_contr".$num_contr} == "SI") $checked = " checked";
else $checked = "";
echo "<div class=\"agreemacc\"><label><input type=\"checkbox\" name=\"cond_contr$num_contr\" value=\"SI\"$checked>
$apertura_tag_f $fr_Accetto$chiusura_tag_f</label>";
if ($chiedi_campi_form_doc_cond[$num1] == "SI") echo "&nbsp;$asterisco";
echo "</div></td></tr>";
} # fine for $num1
unset($trad_var_vett);
} # fine if ($num_campi_doc_cond)


echo "<tr><td style=\"height: 5px;\"></td></tr>
<tr><td colspan=\"2\" valign=\"middle\" align=\"center\">$apertura_tag_font
<span class=\"avail_button\"><input class=\"sbutton\" type=\"submit\" value=\"$fr_Invia_la_richiesta_di_prenotazione\"></span><br>";
echo "$chiusura_tag_font</td></tr>";
if ($fr_campi_necessari) echo "<tr><td colspan=\"2\" align=\"left\"><br>$apertura_tag_font$fr_asterisco_nero $fr_campi_necessari$chiusura_tag_font</td></tr>";
echo "</table></td></tr></table></div></form>";
if ($mostra_bottone_paypal and $caparra_totale > 0) {
if (@is_file("./".$nome_modello_paypal)) {
echo "<script type=\"text/javascript\">
<!--
function update_form_avail() {
var form1 = document.getElementById('cust_data');
var form2 = document.getElementById('inst_data');
var el = new Array();
for (var i=0 ; i < form1.length ; i++) {
if (form1.elements[i].type != 'hidden') {
el[i] = document.createElement('input');
el[i].type = 'hidden';
el[i].name = form1.elements[i].name;
el[i].value = form1.elements[i].value;
form2.appendChild(el[i]);
}
}
}
//-->
</script>
<div class=\"pay_form\" style=\"text-align: center\">$apertura_tag_font<br>
$fr_OPPURE_linee<br><br>$chiusura_tag_font
<form accept-charset=\"utf-8\" method=\"post\" action=\"$nome_modello_paypal#action_anchor\" id =\"inst_data\" onSubmit=\"update_form_avail()\">
<input type=\"hidden\" name=\"contr_disp\" value=\"SI\">
$dati_form_iniziale
<span class=\"book_button\"><input class=\"sbutton\" type=\"submit\" value=\"$fr_Prenotazione_istantanea_con_PayPal\"></span>
</form></div>";
if ($mostra_quadro_disp != "SI") echo "<br>";
} # fine if (@is_file("./".$nome_modello_paypal))
} # fine if ($mostra_bottone_paypal and $caparra_totale > 0)
} # fine if ($mostra_richiesta_via_mail == "SI")

echo "</div>";
} # fine if ($mostra_c_e_disp == "SI")
} # fine if ($continuare_totale == "SI")


} # fine if ($liberato == "SI")


if ($tabelle_lock) unlock_tabelle($tabelle_lock);


if (($mostra_quadro_disp == "SI" or ($mostra_quadro_disp == "SI_NO" and $mostra_c_e_disp != "SI")) and (!isset($manda_mail) or $manda_mail != "SI")) {

unset($app_regola2_orig);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$numtariffa_regola2 = str_replace("tariffa","",risul_query($regole2,$num1,'tariffa_per_app'));
if (isset($tariffe_mostra[$numtariffa_regola2]) and $tariffe_mostra[$numtariffa_regola2] == "SI") {
$app_regola2_orig[$numtariffa_regola2] = risul_query($regole2,$num1,'motivazione');
if (!empty($dati_r2['napp']["tariffa$numtariffa_regola2"])) $app_regola2_orig['napp'][$numtariffa_regola2] = $dati_r2['napp']["tariffa$numtariffa_regola2"];
} # fine if (isset($tariffe_mostra[$numtariffa_regola2]) and $tariffe_mostra[$numtariffa_regola2] == "SI")
} # fine for $num1

$colonna_destra_tab_disp = "NO";
#$fr_persone = $fr_persone;
#$fr_persona = $fr_persona;
$nome_mese["01"] = $fr_Gennaio;
$nome_mese["02"] = $fr_Febbraio;
$nome_mese["03"] = $fr_Marzo;
$nome_mese["04"] = $fr_Aprile;
$nome_mese["05"] = $fr_Maggio;
$nome_mese["06"] = $fr_Giugno;
$nome_mese["07"] = $fr_Luglio;
$nome_mese["08"] = $fr_Agosto;
$nome_mese["09"] = $fr_Settembre;
$nome_mese["10"] = $fr_Ottobre;
$nome_mese["11"] = $fr_Novembre;
$nome_mese["12"] = $fr_Dicembre;

# Calcolo i nomi delle tariffe
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI") {
if ($raggr_quadro_disp == "reg2") {
if (!empty($n_tariffe_imposte[$numtariffa])) $nome_tariffa[$numtariffa] = $n_tariffe_imposte[$numtariffa];
else {
$nome_tariffa[$numtariffa] = $dati_tariffe["tariffa".$numtariffa]['nome'];
if ($nome_tariffa[$numtariffa] == "") $nome_tariffa[$numtariffa] = $fr_tariffa.$numtariffa;
} # fine else if (!empty($n_tariffe_imposte[$numtariffa]))
} # fine if ($raggr_quadro_disp == "reg2")
} # fine if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI")
} # fine for $numtariffa

if (!empty($motivazioni_regola1)) {
$condizioni_regole1_consentite = "";
foreach ($motivazioni_regola1 as $key => $val) if ($val == "SI") $condizioni_regole1_consentite .= "motivazione = '".aggslashdb($key)."' or ";
if (!$condizioni_regole1_consentite) $condizioni_regole1_consentite = "idregole < '0'";
else $condizioni_regole1_consentite = "(".str_replace("motivazione = ' '","motivazione = '' or motivazione is null",substr($condizioni_regole1_consentite,0,-4)).")";
} # fine if (!empty($motivazioni_regola1))
else $condizioni_regole1_consentite = "idregole < '0'";

if ($raggr_quadro_disp == "reg2") $tar_cons = "";
else $tar_cons = $tariffe_mostra;
trova_app_consentiti_per_tab_disp($app_consentito,$app_consentito_sett,$quadro_non_preciso,$dati_app,$dati_tariffe,$id_data_inizio_tab_disp,$num_colonne_tab_disp,$dati_r2,'s','1',"",$condizioni_regole1_consentite,$tar_cons,"","","","","","",$tableregole);

$righe_tab_disp = crea_quadro_disp($id_data_inizio_tab_disp,$num_colonne_tab_disp,$raggr_quadro_disp,$mostra_num_liberi,$app_consentito,$app_consentito_sett,$app_regola2_orig,$tipo_periodi,$dati_tariffe['num'],$nome_tariffa,$dati_app,$prenota_in_app_sett,$app_orig_prenota_id,$tableperiodi,$allinea_disponibilita_con_arrivo,$dati_tariffe);

if ($righe_tab_disp) {
echo "<br><br>$chiusura_tag_font
<div style=\"text-align: center;\">$apertura_tag_font<small>$fr_Quadro_indicativo_disponibilita</small>$chiusura_tag_font<div class=\"tab_cont\">
<table class=\"tab_disp\" border=1 cellspacing=0 cellpadding=1  style=\"background-color: $c_sfondo_tab_disp; text-align: center; margin-left: auto;  margin-right: auto;\">
$righe_tab_disp
</table></div></div>$apertura_tag_font";
} # fine if ($righe_tab_disp)

} # fine if (($mostra_quadro_disp == "SI" or ($mostra_quadro_disp == "SI_NO" and $mostra_c_e_disp == "SI")) and...


} # fine if ($verificare != "NO")
else $torna_indietro = "SI";
echo $chiusura_tag_font;

if ($torna_indietro == "SI") {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#action_anchor\">
<div class=\"ftxt\">
$dati_form_iniziale";
if (isset($manda_mail) and $manda_mail == "SI") {
echo "<input type=\"hidden\" name=\"contr_disp\" value=\"SI\">
<input type=\"hidden\" name=\"cognome_richiedente\" value=\"$cognome_richiedente\">
<input type=\"hidden\" name=\"nome_richiedente\" value=\"$nome_richiedente\">
<input type=\"hidden\" name=\"email_richiedente\" value=\"$email_richiedente\">
<input type=\"hidden\" name=\"email2_richiedente\" value=\"$email2_richiedente\">
<input type=\"hidden\" name=\"email_cert_richiedente\" value=\"$email_cert_richiedente\">
<input type=\"hidden\" name=\"sesso\" value=\"$sesso\">
<input type=\"hidden\" name=\"annonascita\" value=\"$annonascita\">
<input type=\"hidden\" name=\"mesenascita\" value=\"$mesenascita\">
<input type=\"hidden\" name=\"giornonascita\" value=\"$giornonascita\">
<input type=\"hidden\" name=\"tipodoc\" value=\"$tipodoc\">
<input type=\"hidden\" name=\"documento\" value=\"$documento\">
<input type=\"hidden\" name=\"nazione\" value=\"$nazione\">
<input type=\"hidden\" name=\"regione\" value=\"$regione\">
<input type=\"hidden\" name=\"citta\" value=\"$citta\">
<input type=\"hidden\" name=\"via\" value=\"$via\">
<input type=\"hidden\" name=\"numcivico\" value=\"$numcivico\">
<input type=\"hidden\" name=\"cap\" value=\"$cap\">
<input type=\"hidden\" name=\"telefono\" value=\"$telefono\">
<input type=\"hidden\" name=\"telefono2\" value=\"$telefono2\">
<input type=\"hidden\" name=\"telefono3\" value=\"$telefono3\">
<input type=\"hidden\" name=\"fax\" value=\"$fax\">
<input type=\"hidden\" name=\"codfiscale\" value=\"$codfiscale\">
<input type=\"hidden\" name=\"partitaiva\" value=\"$partitaiva\">
<input type=\"hidden\" name=\"commento\" value=\"$commento\">
<input type=\"hidden\" name=\"data_oracheckin\" value=\"$data_oracheckin\">
<input type=\"hidden\" name=\"ora_oracheckin\" value=\"$ora_oracheckin\">
<input type=\"hidden\" name=\"min_oracheckin\" value=\"$min_oracheckin\">
<input type=\"hidden\" name=\"valuta_pagamento\" value=\"".htmlspecialchars($valuta_pagamento)."\">
<input type=\"hidden\" name=\"metodo_pagamento\" value=\"".htmlspecialchars($metodo_pagamento)."\">";
for ($num1 = 1 ; $num1 <= $num_campi_pers ; $num1++) {
echo "<input type=\"hidden\" name=\"campo_pers$num1\" value=\"".fixset(${"campo_pers".$num1})."\">";
} # fine for $num1
for ($num1 = 1 ; $num1 <= $num_campi_doc_cond ; $num1++) {
$num_contr = $campi_form_doc_cond[$num1];
echo "<input type=\"hidden\" name=\"cond_contr$num_contr\" value=\"".${"cond_contr".$num_contr}."\">";
} # fine for $num1
} # fine if (isset($manda_mail) and $manda_mail == "SI")
echo "<input class=\"sbutton\" type=\"submit\" name=\"tor_ind\" value=\"$fr_Torna_indietro\">
</div></form><br>";
} # fine if ($torna_indietro == "SI")

else {
echo "<br><form accept-charset=\"utf-8\" method=\"post\" action=\"$pag#action_anchor\">
<div class=\"ftxt\">
$dati_form_iniziale
<input class=\"sbutton\" type=\"submit\" value=\"$fr_Nuovo_controllo\">
</div></form><br>";
} # fine else if ($torna_indietro == "SI")

} # fine if (!empty($contr_disp))



if (!isset($mostra_form) or $mostra_form != "NO") {

$dati_tariffe = dati_tariffe($tablenometariffe);
if ($chiedi_num_persone == "SI") $dati_cat_pers = dati_cat_pers($utente_liste,$tablepersonalizza,$lingua_modello,"s",0,",$lista_lingue");
else $dati_cat_pers = array('num' => 0);
if ($mostra_costi_aggiuntivi == "SI") $dati_ca = dati_costi_agg_ntariffe($tablenometariffe,$dati_tariffe['num'],"+pmin");
else $dati_ca = array('num' => 0);

if (!empty($aggiungi_nuova_tipologia)) {
${"inizioperiodo".$num_tipologie} = fixset(${"inizioperiodo".($num_tipologie -1)});
${"fineperiodo".$num_tipologie} = fixset(${"fineperiodo".($num_tipologie -1)});
${"numero_tariffa".$num_tipologie} = fixset(${"numero_tariffa".($num_tipologie -1)});
${"numpersone".$num_tipologie} = fixset(${"numpersone".($num_tipologie -1)});
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) ${"cat$num1"."_numpers".$num_tipologie} = fixset(${"cat$num1"."_numpers".($num_tipologie -1)});
${"num_app_tipo_richiesti".$num_tipologie} = fixset(${"num_app_tipo_richiesti".($num_tipologie -1)});
${"numcostiagg".($num_tipologie -1)} = fixset(${"numcostiagg".($num_tipologie -1)});
for ($numca = 1 ; $numca <= ${"numcostiagg".($num_tipologie -1)} ; $numca++) {
${"costoagg".$numca."_".$num_tipologie} = fixset(${"costoagg".$numca."_".($num_tipologie -1)});
${"idcostoagg".$numca."_".$num_tipologie} = fixset(${"idcostoagg".$numca."_".($num_tipologie -1)});
${"numsettimane".$numca."_".$num_tipologie} = fixset(${"numsettimane".$numca."_".($num_tipologie -1)});
${"nummoltiplica_ca".$numca."_".$num_tipologie} = fixset(${"nummoltiplica_ca".$numca."_".($num_tipologie -1)});
${"catpers_ca".$numca."_".$num_tipologie} = fixset(${"catpers_ca".$numca."_".($num_tipologie -1)});
} # fine for $numca
} # fine if (!empty($aggiungi_nuova_tipologia))
echo "<div id=\"step_dates\">
<script type=\"text/javascript\">
<!--
function update_selected_dates(id) {
var sel_opt=document.getElementById(\"id_sdm\"+id);
var other_id = id;
if (Math.ceil(id/2) != Math.floor(id/2)) other_id++;
else other_id--;
var other_sel_opt = document.getElementById(\"id_sdm\"+other_id);
var num_sel = sel_opt.selectedIndex;
var other_num_sel = other_sel_opt.selectedIndex;
if (other_sel_opt.options[other_num_sel].text != \"----\") {
var add_ns = 0;
var o_add_ns = 0;
var new_sel_opt = -1;
if (sel_opt.options[0].text == \"----\") add_ns = 1;
if (other_sel_opt.options[0].text == \"----\") o_add_ns = 1;
if ((other_id > id) && ((num_sel - add_ns) >= (other_num_sel - o_add_ns))) new_sel_opt = num_sel - add_ns + o_add_ns + 1;
if ((other_id < id) && ((num_sel - add_ns) <= (other_num_sel - o_add_ns))) new_sel_opt = num_sel - add_ns + o_add_ns - 1;
if (new_sel_opt >= 0) other_sel_opt.selectedIndex = new_sel_opt;
}
}";
if ($mostra_calendario_scelta_date == "SI") {
#if (!strcmp((string) $spostamento_orizzontale_calendario,"") or controlla_num($spostamento_orizzontale_calendario) == "NO") $spostamento_orizzontale_calendario = 2;
#if (substr($spostamento_orizzontale_calendario,0,1) == "-") $offset_left_cal = "- ".substr($spostamento_orizzontale_calendario,1);
#else $offset_left_cal = "+ $spostamento_orizzontale_calendario";
echo "
giorni = new Array($d_names);
mesi = new Array($m_names);

function agg_zero (c) {
r = \"\";
if (c < 10) {
r = \"0\";
} // fine if (c < 10)
return r;
}

function nasc_cal (ncal) {
var lcal=document.getElementById('cal'+ncal);
lcal.style.visibility='hidden';
}

function mos_cal (ncal) {
var lcal = document.getElementById('cal'+ncal);
var elementoid=document.getElementById('id_sdm'+ncal);
var elementi = elementoid;
var iTop = 0;
var prova = lcal.style.visibility;
if (prova != 'visible') {
while(elementi.tagName != 'BODY') {
iTop += elementi.offsetTop;
elementi = elementi.offsetParent;
}
elementi = elementoid;
var iLeft = 0;
while(elementi.tagName != 'BODY') {
iLeft += elementi.offsetLeft;
elementi = elementi.offsetParent;        
}
lcal.style.left=(iLeft + 1) + 'px';
lcal.style.top=(iTop + elementoid.offsetHeight + 2) + 'px';
var ind_data = 0;
var data_sel = document.getElementById('id_sdm'+ncal);
if (!data_sel.selectedIndex) ind_data = 2;
else ind_data = data_sel.selectedIndex;
data_sel = data_sel.options[ind_data].value;
mese = (data_sel.substring(5,7) - 1);
anno = data_sel.substring(0,4);
crea_cal_mese(ncal,mese,anno);
lcal.style.visibility='visible';
}
if (prova == 'visible') {
nasc_cal(ncal);
}
}

function rendi_link (val_cal,n_lista_d,lista_d,ncal) {
var elem = document.getElementById('d'+val_cal+ncal)
if (!elem) return;
elem.bgColor = '$colore_data_attiva_calendario';
elem.onmouseover = function() {
this.bgColor = '$colore_data_selezionata_calendario';
}
elem.onmouseout = function() {
this.bgColor = '$colore_data_attiva_calendario';
}
elem.onmousedown = function() {
lista_d.selectedIndex = n_lista_d;
update_selected_dates(ncal);
nasc_cal(ncal);
}
}

function crea_cal_mese (ncal,mese,anno) {
var n_giorni_l = 0;
var giorni_l = new Array();
var n1 = 0;
d = new Date(anno,mese,1);
anno = d.getFullYear();
mese = d.getMonth();
giorno = d.getDay() * -1;
giorno = giorno + 2;
if (giorno > 1) giorno = giorno - 7;
var mese_orig = mese;
var anno_orig = anno;
var testo_cal = ' <span class=\"caltitle\">'+mesi[mese]+' '+anno+'<'+'/span><br>\
 <input type=\"button\" class= \"calbutton\"onclick=\"crea_cal_mese(\''+ncal+'\',\''+mese+'\',\''+(anno - 1)+'\')\" value=\"&lt;&lt;\" $stile_bottoni_calendario><span class=\"separ_cal_but\"><'+'/span>\
 <input type=\"button\" class= \"calbutton\" onclick=\"crea_cal_mese(\''+ncal+'\',\''+(mese - 1)+'\',\''+anno+'\')\" value=\"&lt;\" $stile_bottoni_calendario><span class=\"separ_cal_but\"><'+'/span>\
 <input type=\"button\" class= \"calbutton\" onclick=\"crea_cal_mese(\''+ncal+'\',\''+(mese + 1)+'\',\''+anno+'\')\" value=\"&gt;\" $stile_bottoni_calendario><span class=\"separ_cal_but\"><'+'/span>\
 <input type=\"button\" class= \"calbutton\" onclick=\"crea_cal_mese(\''+ncal+'\',\''+mese+'\',\''+(anno + 1)+'\')\" value=\"&gt;&gt;\" $stile_bottoni_calendario><br>\
<table class=\"caltable\" $stile_tabella_calendario>\
<tr><td>'+giorni['1']+'<'+'/td><td>'+giorni['2']+'<'+'/td><td>'+giorni['3']+'<'+'/td><td>'+giorni['4']+'<'+'/td><td>'+giorni['5']+'<'+'/td><td>'+giorni['6']+'<'+'/td><td>'+giorni['0']+'<'+'/td><'+'/tr>';
d = new Date(anno,mese,giorno);
mese = d.getMonth();
anno = d.getFullYear();
giorno = d.getDate();
while (mese_orig == mese || n1 == 0) {
testo_cal += '<tr>';
for (n1 = 1 ; n1 <= 7 ; n1++) {
if (mese == mese_orig) {
testo_cal += '<td id=\"d'+anno+'-'+agg_zero((mese + 1))+(mese + 1)+'-'+agg_zero(giorno)+giorno+ncal+'\">'+giorno+'<'+'/td>';
n_giorni_l = n_giorni_l + 1;
}
else testo_cal += '<td><'+'/td>';
giorno = giorno + 1;
d = new Date(anno,mese,giorno);
mese = d.getMonth();
anno = d.getFullYear();
giorno = d.getDate();
}
testo_cal += '<'+'/tr>';
}
testo_cal += '<'+'/table><div style=\"padding: 3px 0 0 0\">\
<input type=\"button\" class= \"calbutton\" onclick=\"nasc_cal(\''+ncal+'\')\" value=\"$fr_Chiudi\" $stile_bottoni_calendario><'+'/div>';
document.getElementById('cal'+ncal).innerHTML = testo_cal;
var lista_d = document.getElementById('id_sdm'+ncal);
var num_opz = lista_d.length;
var val_cal = 0;
var val_comp = anno_orig+'-'+agg_zero(mese_orig + 1)+(mese_orig + 1);
for (n1 = 0 ; n1 < num_opz ; n1++) {
val_cal = lista_d.options[n1].value;
if (val_cal.substring(0,7) == val_comp) {
rendi_link(val_cal,n1,lista_d,ncal);
}
}
}";
} # fine if ($mostra_calendario_scelta_date == "SI")
echo "
//-->
</script>";
if (!empty($framed) and $apri_nuova_finestra_da_frame == "SI") echo "<form accept-charset=\"utf-8\" method=\"post\" id=\"dates_form\" action=\"$pag\" target=\"windowName\" onsubmit=\"window.open('',this.target,'dialog,modal,scrollbars=yes,resizable=no,width=$larghezza_finestra_da_frame,height=$altezza_finestra_da_frame,left=30,top=20');\"><div class=\"ftxt\">";
else echo "<form accept-charset=\"utf-8\" method=\"post\" id=\"dates_form\" action=\"$pag#action_anchor\"$target><div class=\"ftxt\">";
if (empty($framed)) {
if ($num_tipologie == 1) echo "<div class=\"check_avail_line\">";
echo $apertura_tag_font.$fr_Controlla_la_disponibilita;
if ($num_tipologie > 1) {
echo " $fr_in:<br>";
if ($cerca_app_vicini == "chiedere") {
echo "<div class=\"roomnear\"><label>
<input type=\"checkbox\" name=\"prenota_vicine\" value=\"SI\">".ucfirst($fr_posizioni_vicine).".
</label></div>";
} # fine if ($cerca_app_vicini == "chiedere")
} # fine if ($num_tipologie > 1)
echo $chiusura_tag_font."<span class=\"phr_separator1\"></span>";
} # fine if (empty($framed))

$oggi = date("Y-m-d",(time() + (C_DIFF_ORE * 3600)));
function seleziona_data_vicina ($menu_periodi,$data_sel,$pos) {
$lista_date = explode("<option value=\"",$menu_periodi);
$n_lista_date = count($lista_date);
for ($num1 = 1 ; $num1 < $n_lista_date ; $num1++) {
$data_corr = substr($lista_date[$num1],0,10);
if ((int) str_replace("-","",$data_corr) >= (int) str_replace("-","",$data_sel)) {
if ($pos == "prec") $data_sel = $data_corr;
else $data_sel = substr($lista_date[($num1 + 1)],0,10);
break;
} # fine if ((int) str_replace("-","",$data_corr) > (int) str_replace("-","",$inizio_select))
} # fine for $num1
if (strlen($data_sel) != 10) $data_sel = "";
return $data_sel;
} # fine function seleziona_data_vicina
$date_select = esegui_query("select idperiodi,datainizio,datafine from $tableperiodi where datainizio <= '$oggi' and datafine > '$oggi' ");
if (numlin_query($date_select) == 1 and $sett_no_prenota) $date_select = esegui_query("select idperiodi,datainizio,datafine from $tableperiodi where idperiodi = '".(risul_query($date_select,0,'idperiodi') + $sett_no_prenota)."'");
if (numlin_query($date_select) == 1) {
$idper_ini_select = risul_query($date_select,0,'idperiodi');
$inizio_select = (string) risul_query($date_select,0,'datainizio');
$fine_select = risul_query($date_select,0,'datafine');
if (!strpos($menu_periodi,$inizio_select)) $inizio_select = seleziona_data_vicina($menu_periodi,$inizio_select,"prec");
$menu_periodi_vett = explode("<option value=\"$inizio_select\">",$menu_periodi);
if ($menu_periodi_vett[1]) {
$menu_periodi = "<option value=\"$inizio_select\">".$menu_periodi_vett[1];
$fine_select = seleziona_data_vicina($menu_periodi,$inizio_select,"succ");
} # fine if ($menu_periodi_vett[1])
} # fine if (numlin_query($date_select) == 1)
else {
$idper_ini_select = 0;
$inizio_select = explode("<option value=\"",$menu_periodi);
$inizio_select = substr($inizio_select[1],0,10);
$fine_select = seleziona_data_vicina($menu_periodi,$inizio_select,"succ");
} # fine else if (numlin_query($date_select) == 1)
$id_select_dates_menu = 0;

# calcolo la permanenza minima del periodo corrente per selezionare le date di default
$p_min_corr = 1;
if (!empty($dati_ca['pmin']['num']) and $idper_ini_select) {
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI") {
$tariffa = "tariffa".$numtariffa;
$p_min_tar = 1;
for ($num1 = 0 ; $num1 < $dati_ca['pmin']['num'] ; $num1++) {
if ($dati_ca['pmin'][$num1]["tipo_associa_".$tariffa] == "s" or $dati_ca['pmin'][$num1]["tipo_associa_".$tariffa] == "r") {
if (substr($dati_ca['pmin'][$num1][$tariffa],0,1) != "s") {
$p_min = 0;
if (substr($dati_ca['pmin'][$num1][$tariffa],0,1) == ">" or substr($dati_ca['pmin'][$num1][$tariffa],0,1) == "=") $p_min = substr($dati_ca['pmin'][$num1][$tariffa],1);
if (substr($dati_ca['pmin'][$num1][$tariffa],0,1) == "|") {
$p_min = explode("<",substr($dati_ca['pmin'][$num1][$tariffa],1));
$p_min = $p_min[0];
} # fine if (substr($dati_ca['pmin'][$num1][$tariffa],0,1) == "|")
if ($dati_ca['pmin'][$num1]["tipo_associa_".$tariffa] == "r" and $dati_ca['pmin'][$num1]['periodipermessi']) {
$per_corr = 0;
for ($num2 = 0 ; $num2 < count($dati_ca['pmin'][$num1]['sett_periodipermessi_ini']) ; $num2++) {
$ini_for = $dati_ca['pmin'][$num1]['sett_periodipermessi_ini'][$num2];
$fine_for = $dati_ca['pmin'][$num1]['sett_periodipermessi_fine'][$num2];
if ($idper_ini_select >= $ini_for and $idper_ini_select <= $fine_for) {
$per_corr = 1;
break;
} # fine if ($idper_ini_select >= $ini_for and $idper_ini_select <= $fine_for)
} # fine for $num2
} # fine if ($dati_ca['pmin'][$num1]["tipo_associa_".$tariffa] == "r" and...
else $per_corr = 1;
if ($per_corr and $p_min > $p_min_tar) $p_min_tar = $p_min;
} # fine if (substr($dati_ca['pmin'][$num1][$tariffa],0,1) != "s")
} # fine if ($dati_ca['pmin'][$num1]["tipo_associa_".$tariffa] == "s" or...
} # fine for $num1
if ($p_min_corr == 1 or $p_min_tar < $p_min_corr) $p_min_corr = $p_min_tar;
if ($p_min_corr == 1) break;
} # fine if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI")
} # fine for $numtariffa
} # fine if (!empty($dati_ca['pmin']['num']) and $idper_ini_select)
if ($p_min_corr > 1) {
$fine_select = date("Y-m-d",mktime(0,0,0,substr($inizio_select,5,2),(substr($inizio_select,8,2) + $p_min_corr - 1),substr($inizio_select,0,4)));
$fine_select = seleziona_data_vicina($menu_periodi,$fine_select,"succ");
} # fine if ($p_min_corr > 1)


for ($n_t = 1 ; $n_t <= $num_tipologie ; $n_t++) {

$testo_costi_agg = "";
$testo_catpers_ca = "";
if ($mostra_costi_aggiuntivi == "SI" and $dati_ca['num'] > 0) {
$numcostiagg = 0;
unset($costi_agg_raggr);
$chiedi_combina = array();
if (empty($framed)) $testo_costi_agg .= "<table><tr><td style=\"height: 10px;\"></td></tr></table>";
$testo_costi_agg .= "<table class=\"extra_costs\">";
$distanza_colonne_costi_agg = 10;
$num_colonna = 0;
for ($numca = 0 ; $numca < $dati_ca['num'] ; $numca++) {
$idcostoagg = $dati_ca[$numca]['id'];
if (isset($costi_agg_mostra[$idcostoagg]) and $costi_agg_mostra[$idcostoagg] == "SI" and $idcostoagg != $costo_aggiungi_letti) {
if ($chiedi_num_persone == "SI" and $dati_ca[$numca]['mostra_numpers'] == "s") $mostra_numpers = 1;
else $mostra_numpers = 0;
if ($dati_ca[$numca]['combina'] != "s") {
$numcostiagg++;
if (!empty($n_costi_agg_imposti[$idcostoagg])) $nomecosto_imposto = $n_costi_agg_imposti[$idcostoagg];
else $nomecosto_imposto = $dati_ca[$numca]['nome'];
$nome_idcostoagg = "idcostoagg".$numcostiagg;
if ($mostra_numpers) {
$testo_costo = "testo_catpers_ca";
$onclick = "";
$txtsize = "2";
$txtmaxlen = "2";
} # fine if ($mostra_numpers)
else {
$testo_costo = "testo_costi_agg";
$onclick = " onclick=\"document.getElementById('ca_$numcostiagg"."_$n_t').checked='1';\"";
$txtsize = "2";
$txtmaxlen = "2";
$num_colonna++;
if ($num_colonna == 1) $$testo_costo .= "<tr>";
} # fine else if ($mostra_numpers)
if (!isset(${$nome_idcostoagg."_".$n_t})) ${$nome_idcostoagg."_".$n_t} = "";
if (${$nome_idcostoagg."_".$n_t} == $idcostoagg and isset(${"costoagg".$numcostiagg."_".$n_t}) and ${"costoagg".$numcostiagg."_".$n_t} == "SI") $checked = " checked";
else $checked = "";
if ($mostra_numpers) $$testo_costo .= ";</span></td><td style=\"width: 20px;\"></td><td><input type=\"hidden\" name=\"idcostoagg$numcostiagg"."_$n_t\" value=\"$idcostoagg\">$nomecosto_imposto:<span class=\"nowrp\">";
else $$testo_costo .= "<td>$apertura_tag_font<input type=\"hidden\" name=\"idcostoagg$numcostiagg"."_$n_t\" value=\"$idcostoagg\">
<label><input type=\"checkbox\" id=\"ca_$numcostiagg"."_$n_t\" name=\"costoagg$numcostiagg"."_$n_t\" value=\"SI\"$checked> $nomecosto_imposto";
if ($dati_ca[$numca]['numsett'] == "c" and $dati_ca[$numca]['associasett'] == "n") {
$numsettimane = "numsettimane".$numcostiagg;
if (${$nome_idcostoagg."_".$n_t} == $idcostoagg and !empty(${$numsettimane."_".$n_t})) $valnumsettimane = htmlspecialchars(${$numsettimane."_".$n_t});
else $valnumsettimane = 0;
$$testo_costo .= " $fr_per </label>
<input type=\"text\" name=\"$numsettimane"."_$n_t\" size=\"3\" maxlength=\"3\" value=\"$valnumsettimane\"$onclick><label for=\"ca_$numcostiagg"."_$n_t\">
$fr_parola_settimane";
} # fine if ($dati_ca[$numca]['numsett'] == "c" and $dati_ca[$numca]['associasett'] == "n")
if ($dati_ca[$numca]['moltiplica'] == "c") {
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg;
if (${$nome_idcostoagg."_".$n_t} == $idcostoagg and !empty(${$nummoltiplica_ca."_".$n_t})) $valnummoltiplica_ca = htmlspecialchars(${$nummoltiplica_ca."_".$n_t});
else {
if ($mostra_numpers) $valnummoltiplica_ca = "";
else $valnummoltiplica_ca = 1;
} # fine else if (${$nome_idcostoagg."_".$n_t} == $idcostoagg and !empty(${$nummoltiplica_ca."_".$n_t}))
if (!$mostra_numpers) $$testo_costo .= " $fr_per: </label>";
if ($dati_ca[$numca]['molt_max'] != "n") $$testo_costo .= "<input type=\"text\" name=\"$nummoltiplica_ca"."_$n_t\" value=\"$valnummoltiplica_ca\" size=\"$txtsize\" maxlength=\"$txtmaxlen\"$onclick>";
else {
$$testo_costo .= "<select name=\"$nummoltiplica_ca"."_$n_t\"$onclick>";
if ($mostra_numpers) $$testo_costo .= "<option value=\"\">0</option>";
for ($num2 = 1 ; $num2 <= $dati_ca[$numca]['molt_max_num'] ; $num2++) {
if ($num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
$$testo_costo .= "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$$testo_costo .= "</select>";
} # fine else if ($dati_ca[$numca]['molt_max'] != "n")
if (!$mostra_numpers) $$testo_costo .= "<label for=\"ca_$numcostiagg"."_$n_t\">";
} # fine if ($dati_ca[$numca]['moltiplica'] == "c")
if ($dati_ca[$numca]['letto'] == "s" and $dati_cat_pers['num']) {
$$testo_costo .= " (</label><select name=\"catpers_ca$numcostiagg"."_$n_t\"$onclick>";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($num2 == fixset(${"catpers_ca$numcostiagg"."_$n_t"})) $sel = " selected";
else $sel = "";
$$testo_costo .= "<option value=\"$num2\"$sel>";
if ($dati_ca[$numca]['moltiplica'] != "1") $$testo_costo .= $dati_cat_pers[$num2]['n_plur'];
else $$testo_costo .= $dati_cat_pers[$num2]['n_sing'];
$$testo_costo .= "</option>";
} # for $num2
$$testo_costo .= "</select><label for=\"ca_$numcostiagg"."_$n_t\">)";
} # fine if ($dati_ca[$numca]['letto'] == "s" and $dati_cat_pers['num'])
if (!$mostra_numpers) {
$$testo_costo .= ".</label>";
if ($num_colonna == $num_colonne_costi_agg) {
$$testo_costo .= "$chiusura_tag_font</td></tr>";
$num_colonna = 0;
} # fine if ($num_colonna == $num_colonne_costi_agg)
else $$testo_costo .= "$chiusura_tag_font</td><td style=\"width: $distanza_colonne_costi_agg"."px;\">&nbsp;</td>";
} # fine if (!$mostra_numpers)
} # fine if ($dati_ca[$numca]['combina'] != "s")
else {
$testo_costo = "combina";
$categ = $dati_ca[$numca]['categoria'];
if ($dati_ca[$numca]['numsett'] == "c" and $dati_ca[$numca]['associasett'] == "n") $chiedi_combina[$categ]['sett'] = 1;
if ($dati_ca[$numca]['moltiplica'] == "c") {
if (empty($chiedi_combina[$categ]['molt'])) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$numca]['molt_max_num'];
if ($dati_ca[$numca]['molt_max'] != "n") $chiedi_combina[$categ]['molt_max_num'] = 0;
elseif ($chiedi_combina[$categ]['molt_max_num'] and $chiedi_combina[$categ]['molt_max_num'] < $dati_ca[$numca]['molt_max_num']) $chiedi_combina[$categ]['molt_max_num'] = $dati_ca[$numca]['molt_max_num'];
$chiedi_combina[$categ]['molt'] = 1;
} # fine if ($dati_ca[$numca]['moltiplica'] == "c")
if ($dati_ca[$numca]['letto'] == "s") $chiedi_combina[$categ]['letto'] = 1;
if (!isset($costi_agg_raggr[$testo_costo."<>".$dati_ca[$numca]['categoria']."<>".(string) $mostra_numpers])) $costi_agg_raggr[$testo_costo."<>".$dati_ca[$numca]['categoria']."<>".(string) $mostra_numpers] = "";
$costi_agg_raggr[$testo_costo."<>".$dati_ca[$numca]['categoria']."<>".(string) $mostra_numpers] .= $dati_ca[$numca]['id'].",";
} # fine else if ($dati_ca[$numca]['combina'] != "s")
} # fine if (isset($costi_agg_mostra[$idcostoagg]) and $costi_agg_mostra[$idcostoagg] == "SI" and $idcostoagg != $costo_aggiungi_letti)
} # fine for $numca

if (@is_array($costi_agg_raggr)) {
foreach ($costi_agg_raggr as $testo_costo => $id_costi) {
$testo_costo = explode("<>",$testo_costo);
$numcostiagg++;
$id_costi_vett = explode(",",substr($id_costi,0,-1));
$num_id_costi = count($id_costi_vett);
if ($testo_costo[2]) {
$mostra_numpers = 1;
$testo_categ = "testo_catpers_ca";
$onclick = "";
$txtsize = "2";
$txtmaxlen = "2";
} # fine if ($testo_costo[2])
else {
$mostra_numpers = 0;
$testo_categ = "testo_costi_agg";
$onclick = " onclick=\"document.getElementById('ca_$numcostiagg"."_$n_t').checked='1';\"";
$txtsize = "3";
$txtmaxlen = "3";
$num_colonna++;
if ($num_colonna == 1) $$testo_categ .= "<tr>";
} # fine else if ($testo_costo[2])
if ($testo_costo[0] == "combina") {
$categoria = $testo_costo[1];
if (isset($cat_costi_agg_imposte[$categoria]) and strcmp((string) $cat_costi_agg_imposte[$categoria],"")) $categoria_vedi = htmlspecialchars($cat_costi_agg_imposte[$categ]);
else $categoria_vedi = htmlspecialchars($categoria);
if (isset(${"costoagg".$numcostiagg."_".$n_t}) and ${"costoagg".$numcostiagg."_".$n_t} == "SI") $checked = " checked";
else $checked = "";
if ($mostra_numpers) $$testo_categ .= ";</span></td><td style=\"width: 20px;\"></td><td>$categoria_vedi:<span class=\"nowrp\">";
else $$testo_categ .= "<td><label><input type=\"checkbox\" id=\"ca_$numcostiagg"."_$n_t\" name=\"costoagg$numcostiagg"."_$n_t\" value=\"SI\"$checked> $categoria_vedi";
$$testo_categ .= "<input type=\"hidden\" name=\"idcostoagg$numcostiagg"."_$n_t\" value=\"c".htmlspecialchars($categoria)."\">
<input type=\"hidden\" name=\"idca_cat$numcostiagg"."_$n_t\" value=\",$id_costi\">";
if (!empty($chiedi_combina[$categoria]['sett'])) {
$numsettimane = "numsettimane".$numcostiagg;
if (!empty(${$numsettimane."_".$n_t})) $valnumsettimane = htmlspecialchars(${$numsettimane."_".$n_t});
else $valnumsettimane = 0;
$$testo_categ .= " $fr_per </label>
<input type=\"text\" name=\"$numsettimane"."_$n_t\" size=\"3\" maxlength=\"3\" value=\"$valnumsettimane\"$onclick><label for=\"ca_$numcostiagg"."_$n_t\">
$fr_parola_settimane ";
} # fine if (!empty($chiedi_combina[$categoria]['sett']))
if (!empty($chiedi_combina[$categoria]['molt'])) {
$nummoltiplica_ca = "nummoltiplica_ca".$numcostiagg;
if (!empty(${$nummoltiplica_ca."_".$n_t})) $valnummoltiplica_ca = htmlspecialchars(${$nummoltiplica_ca."_".$n_t});
else {
if ($mostra_numpers) $valnummoltiplica_ca = "";
else $valnummoltiplica_ca = 1;
} # fine else if (!empty(${$nummoltiplica_ca."_".$n_t}))
if (!$mostra_numpers) $$testo_categ .= " $fr_per: </label>";
if (!$chiedi_combina[$categoria]['molt_max_num']) $$testo_categ .= "<input type=\"text\" name=\"$nummoltiplica_ca"."_$n_t\" size=\"$txtsize\" maxlength=\"$txtmaxlen\" value=\"$valnummoltiplica_ca\"$onclick>";
else {
$$testo_categ .= "<select name=\"$nummoltiplica_ca"."_$n_t\"$onclick>";
if ($mostra_numpers) $$testo_categ .= "<option value=\"\">0</option>";
for ($num2 = 1 ; $num2 <= $chiedi_combina[$categoria]['molt_max_num'] ; $num2++) {
if ($num2 == $valnummoltiplica_ca) $sel = " selected";
else $sel = "";
$$testo_categ .= "<option value=\"$num2\"$sel>$num2</option>";
} # fine for $num2
$$testo_categ .= "</select>";
} # fine else if (!$chiedi_combina[$categoria]['molt_max_num'])
if (!$mostra_numpers) $$testo_categ .= "<label for=\"ca_$numcostiagg"."_$n_t\">";
} # fine if (!empty($chiedi_combina[$categoria]['molt']))
if (!empty($chiedi_combina[$categoria]['letto']) and $dati_cat_pers['num']) {
$$testo_categ .= " (</label><select name=\"catpers_ca$numcostiagg"."_$n_t\"$onclick>";
for ($num2 = 0 ; $num2 < $dati_cat_pers['num'] ; $num2++) {
if ($num2 == fixset(${"catpers_ca$numcostiagg"."_$n_t"})) $sel = " selected";
else $sel = "";
$$testo_categ .= "<option value=\"$num2\"$sel>".$dati_cat_pers[$num2]['n_plur']."</option>";
} # for $num2
$$testo_categ .= "</select><label for=\"ca_$numcostiagg"."_$n_t\">)";
} # fine if (!empty($chiedi_combina[$categoria]['letto']) and $dati_cat_pers['num'])
if (!$mostra_numpers) {
$$testo_categ .= ".</label>";
if ($num_colonna == $num_colonne_costi_agg) {
$$testo_categ .= "$chiusura_tag_font</td></tr>";
$num_colonna = 0;
} # fine if ($num_colonna == $num_colonne_costi_agg)
else $$testo_categ .= "$chiusura_tag_font</td><td style=\"width: $distanza_colonne_costi_agg"."px;\">&nbsp;</td>";
} # fine if (!$mostra_numpers)
} # fine if ($testo_costo[0] == "combina")
} # fine foreach ($costi_agg_raggr as $testo_costo => $id_costi)
} # fine if (@is_array($costi_agg_raggr))

if ($num_colonna != 0) {
for ($num1 = $num_colonna ; $num1 < $num_colonne_costi_agg ; $num1++) {
$num_colonna++;
if ($num_colonna == $num_colonne_costi_agg) $testo_costi_agg .= "<td>&nbsp;</td></tr>";
else $testo_costi_agg .= "<td>&nbsp;</td><td style=\"width: $distanza_colonne_costi_agg"."px;\">&nbsp;</td>";
} # fine for $num1
} # fine if ($num_colonna != 0)
$testo_costi_agg .= "</table>
<input type=\"hidden\" name=\"numcostiagg$n_t\" value=\"".$numcostiagg."\">";
} # fine if ($mostra_costi_aggiuntivi == "SI" and...

if ($num_tipologie > 1) echo "<div class=\"check_avail_line\">$apertura_tag_font<br><b>$n_t</b>: $chiusura_tag_font";
$id_select_dates_menu++;
if (empty($framed)) echo "$apertura_tag_font $fr_dal";
else echo "\n<div class=\"arrdate\">$apertura_tag_font<span class=\"ftxt_phr\">$fr_Data_di_arrivo:</span>";
echo "\n <select name=\"inizioperiodo$n_t\" onChange=\"update_selected_dates('$id_select_dates_menu')\" id=\"id_sdm$id_select_dates_menu\">";
if (!empty(${"inizioperiodo".$n_t})) echo str_replace(${"inizioperiodo".$n_t}."\"",${"inizioperiodo".$n_t}."\" selected",$menu_periodi);
else {
if ($inizio_select) echo str_replace($inizio_select."\"",$inizio_select."\" selected",$menu_periodi);
else echo $menu_periodi;
} # fine else if (!empty(${"inizioperiodo".$n_t}))
echo "</select>";
if ($mostra_calendario_scelta_date == "SI") echo "<input type=\"button\" class=\"dbutton\" id=\"bcal$id_select_dates_menu\" onclick=\"mos_cal($id_select_dates_menu)\" value=\"..\" $stile_bottone_apertura_calendario>
$chiusura_tag_font<div id=\"cal$id_select_dates_menu\" class=\"datepick\" $stile_riquadro_calendario></div>$apertura_tag_font";
$id_select_dates_menu++;
if (empty($framed)) echo "<span class=\"phr_separator2\"></span> $fr_al";
else echo "$chiusura_tag_font</div>\n<div class=\"depdate\">$apertura_tag_font<span class=\"ftxt_phr\">$fr_Data_di_partenza:</span>";
echo "\n <select name=\"fineperiodo$n_t\" onChange=\"update_selected_dates('$id_select_dates_menu')\" id=\"id_sdm$id_select_dates_menu\">";
if (!empty(${"fineperiodo".$n_t})) echo str_replace(${"fineperiodo".$n_t}."\"",${"fineperiodo".$n_t}."\" selected",$menu_periodi);
else {
if ($fine_select) echo str_replace($fine_select."\"",$fine_select."\" selected",$menu_periodi);
else echo $menu_periodi;
} # fine else if (!empty(${"fineperiodo".$n_t}))
echo "</select>";
if ($mostra_calendario_scelta_date == "SI") echo "<input type=\"button\" class=\"dbutton\" id=\"bcal$id_select_dates_menu\" onclick=\"mos_cal($id_select_dates_menu)\" value=\"..\" $stile_bottone_apertura_calendario>
$chiusura_tag_font<div id=\"cal$id_select_dates_menu\" class=\"datepick\" $stile_riquadro_calendario></div>$apertura_tag_font";
if (!empty($framed)) echo "$chiusura_tag_font</div>";
else echo "<span class=\"phr_separator3\"></span>";

if (@is_array($tariffe_mostra)) {
if (count($tariffe_mostra) != 1) {
if ($num_tipologie == 1 and empty($framed)) echo "<br>$chiusura_tag_font
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"height: 4px;\"></td></tr></table>$apertura_tag_font";
if (empty($framed)) echo " $fr_per_la_tipologia";
else echo "\n<div class=\"typesel\">$apertura_tag_font<span class=\"ftxt_phr\">$fr_Tipologia:</span>";
echo "\n <select name=\"numero_tariffa$n_t\">";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa = $numtariffa + 1) {
if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI") {
$tariffa = "tariffa".$numtariffa;
$nometariffa = $dati_tariffe[$tariffa]['nome'];
$nometariffa_vedi = $nometariffa;
if ($nometariffa == "") {
$nometariffa = $tariffa;
$nometariffa_vedi = $fr_tariffa.$numtariffa;
} # fine if ($nometariffa == "")
if (!empty($n_tariffe_imposte[$numtariffa])) $nometariffa_imposta = $n_tariffe_imposte[$numtariffa];
else $nometariffa_imposta = $nometariffa_vedi;
if (isset(${"numero_tariffa".$n_t}) and ${"numero_tariffa".$n_t} == $numtariffa) $selected = " selected";
else $selected = "";
echo "<option value=\"$numtariffa\"$selected>$nometariffa_imposta</option>";
} # fine if (isset($tariffe_mostra[$numtariffa]) and $tariffe_mostra[$numtariffa] == "SI")
} # fine for $numtariffa
echo "</select>";
if (!empty($framed)) echo "$chiusura_tag_font</div>";
} # fine if (count($tariffe_mostra) != 1)
else echo "<input type=\"hidden\" name=\"numero_tariffa$n_t\" value=\"".key($tariffe_mostra)."\">";
} # fine if (@is_array($tariffe_mostra))

if (empty($framed)) echo ".<br>$chiusura_tag_font</div>";

if ($chiedi_num_persone == "SI") {
if (empty($framed)) echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"height: 10px;\"></td></tr><tr><td>$apertura_tag_font";
else echo "\n<div class=\"persnum\">$apertura_tag_font";
if ($dati_cat_pers['num'] or $testo_catpers_ca) echo "<table class=\"perstype\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tr><td>";
if (!$dati_cat_pers['num']) {
if (!empty($framed)) echo "<span class=\"ftxt_phr\">";
if (strcmp((string) $fr_Numero_di,"")) echo "$fr_Numero_di $fr_persone";
else echo ucfirst($fr_persone);
if ($chiedi_num_app_tipologia == "SI" and $max_num_app_tipologia != 1) echo " $fr_per_ogni $fr_appartamento";
echo ":";
if (!empty($framed)) echo "</span>";
if ($testo_catpers_ca) echo "<span class=\"nowrp\">";
if ($max_num_persone == 0) echo "\n <input type=\"text\" name=\"numpersone$n_t\" size=\"2\" maxlength=\"2\" value=\"".htmlspecialchars(fixstr(${"numpersone".$n_t}))."\">";
else {
echo " <select name=\"numpersone$n_t\">";
if (empty(${"numpersone".$n_t})) ${"numpersone".$n_t} = 2;
for ($num1 = 1 ; $num1 <= $max_num_persone ; $num1++) {
if (${"numpersone".$n_t} == $num1) $selected = " selected";
else $selected = "";
echo "<option value=\"$num1\"$selected>$num1</option>";
} # fine for $num1
echo "</select>";
} # fine else if ($max_num_persone == 0)
} # fine if (!$dati_cat_pers['num'])
else {
for ($num1 = 0 ; $num1 < $dati_cat_pers['num'] ; $num1++) {
if (!empty($framed)) echo "<span class=\"ftxt_phr\">";
echo ucfirst($dati_cat_pers[$num1]['n_plur']).":";
if (!empty($framed)) echo "</span>";
echo "<span class=\"nowrp\">";
if ($max_num_persone == 0) echo "\n <input type=\"text\" name=\"cat$num1"."_numpers$n_t\" size=\"2\" maxlength=\"2\" value =\"".htmlspecialchars(fixstr(${"cat$num1"."_numpers$n_t"}))."\">";
else {
if ($num1 == 0 and empty(${"cat0_numpers$n_t"})) {
$pers_pres = 0;
for ($num2 = 1 ; $num2 < $dati_cat_pers['num'] ; $num2++) if (!empty(${"cat$num2"."_numpers$n_t"})) $pers_pres = 1;
if (!$pers_pres) ${"cat0_numpers$n_t"} = 2;
} # fine if ($num1 == 0 and empty(${"cat0_numpers$n_t"}))
if (empty(${"cat$num1"."_numpers$n_t"})) $selected = " selected";
else $selected = "";
echo " <select name=\"cat$num1"."_numpers$n_t\">
<option value=\"\"$selected>0</option>";
for ($num2 = 1 ; $num2 <= $max_num_persone ; $num2++) {
if (isset(${"cat$num1"."_numpers$n_t"}) and ${"cat$num1"."_numpers$n_t"} == $num2) $selected = " selected";
else $selected = "";
echo "<option value=\"$num2\"$selected>$num2</option>";
} # fine for $num2
echo "</select>";
} # fine else if ($max_num_persone == 0)
if ($num1 != ($dati_cat_pers['num'] - 1)) echo ";</span></td><td style=\"width: 20px;\"></td><td>";
} # for $num1
if ($n_t == 1) echo "<input type=\"hidden\" name=\"num_categorie_persone\" value=\"".$dati_cat_pers['num']."\">";
} # fine else if (!$dati_cat_pers['num'])
if ($dati_cat_pers['num'] or $testo_catpers_ca) echo "$testo_catpers_ca.</span></td></tr></table>";
echo $chiusura_tag_font;
if (empty($framed)) echo "</td></tr></table>";
else echo "</div>";
} # fine if ($chiedi_num_persone == "SI")

if ($chiedi_num_app_tipologia == "SI" and $max_num_app_tipologia != 1) {
if (empty($framed)) echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"height: 10px;\"></td></tr><tr><td>$apertura_tag_font";
else echo "\n<div class=\"roomnum\">$apertura_tag_font<span class=\"ftxt_phr\">";
if (strcmp((string) $fr_Numero_di,"")) echo "$fr_Numero_di $fr_appartamenti:";
else echo ucfirst($fr_appartamenti).":";
if (!empty($framed)) echo "</span>";
if (empty(${"num_app_tipo_richiesti".$n_t})) ${"num_app_tipo_richiesti".$n_t} = 1;
if ($max_num_app_tipologia == 0) echo "\n <input type=\"text\" name=\"num_app_tipo_richiesti$n_t\" size=\"2\" maxlength=\"2\" value=\"".htmlspecialchars(${"num_app_tipo_richiesti".$n_t})."\">";
else {
echo " <select name=\"num_app_tipo_richiesti$n_t\">";
for ($num1 = 1 ; $num1 <= $max_num_app_tipologia ; $num1++) {
if (${"num_app_tipo_richiesti".$n_t} == $num1) $selected = " selected";
else $selected = "";
echo "<option value=\"$num1\"$selected>$num1</option>";
} # fine for $num1
echo "</select>";
} # fine else if ($max_num_app_tipologia == 0)
echo $chiusura_tag_font;
if (empty($framed)) {
echo "</td>";
if ($aggiungi_tipologie != "SI" or $n_t != $num_tipologie) echo "</tr></table>";
} # fine if (empty($framed))
else echo "</div>";
} # fine if ($chiedi_num_app_tipologia == "SI" and $max_num_app_tipologia != 1)

if ($aggiungi_tipologie == "SI" and $n_t == $num_tipologie) {
if (($chiedi_num_app_tipologia != "SI" or $max_num_app_tipologia == 1) and empty($framed)) echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td style=\"height: 10px;\"></td></tr><tr>";
if ($max_num_tipologie > $num_tipologie) {
if (empty($framed)) {
if ($num_tipologie > 1) echo "<td style=\"width: 20px;\"></td><td>";
else echo "<td style=\"width: 30px;\"></td><td>";
} # fine if (empty($framed))
else echo "\n<div class=\"addremtype\">";
echo "$apertura_tag_font<input class=\"sbutton\" type=\"submit\" name=\"aggiungi_nuova_tipologia\" value=\"$fr_Aggiungi_una_nuova_tipologia\">$chiusura_tag_font";
if (empty($framed)) echo "</td>";
else echo "</div>";
} # fine if ($max_num_tipologie > $num_tipologie)
if ($num_tipologie > 1) {
if (empty($framed)) {
if ($max_num_tipologie > $num_tipologie) echo "<td style=\"width: 12px;\"></td><td>";
else echo "<td style=\"width: 30px;\"></td><td>";
} # fine if (empty($framed))
else echo "<div class=\"addremtype\">";
echo "$apertura_tag_font<input class=\"sbutton\" type=\"submit\" name=\"elimina_ultima_tipologia\" value=\"$fr_Elimina_questa_tipologia\">$chiusura_tag_font";
if (empty($framed)) echo "</td>";
else echo "</div>";
} # fine if ($num_tipologie > 1)
if (empty($framed)) echo "</tr></table>";
} # fine if ($aggiungi_tipologie == "SI" and...

if ($cerca_app_vicini == "chiedere" and $chiedi_num_app_tipologia == "SI" and $max_num_app_tipologia != 1 and $num_tipologie == 1) {
echo "<div class=\"roomnear\"><label>
<input type=\"checkbox\" name=\"prenota_vicine\" value=\"SI\">".ucfirst($fr_posizioni_vicine).".
</label></div>";
} # fine if ($cerca_app_vicini == "chiedere" and $chiedi_num_app_tipologia == "SI" and $max_num_app_tipologia != 1 and $num_tipologie == 1)

if ($num_codici_promo and $num_tipologie == 1) {
echo "<div class=\"promocode\"><br>
".ucfirst($fr_Codice_promozionale).": <input type=\"text\" name=\"codpromo\" size=\"10\" value=\"".htmlspecialchars($codpromo)."\">.
</div>";
} # fine if ($num_codici_promo and $num_tipologie == 1)

echo $testo_costi_agg;

} # fine for $n_t

if ($num_codici_promo and $num_tipologie > 1) {
echo "<div class=\"promocode\"><br>
".ucfirst($fr_Codice_promozionale).": <input type=\"text\" name=\"codpromo\" size=\"10\" value=\"".htmlspecialchars($codpromo)."\">.
</div>";
} # fine if ($num_codici_promo and $num_tipologie > 1)

echo "<input type=\"hidden\" name=\"num_tipologie\" value=\"$num_tipologie\">";
if (empty($framed)) echo "<table><tr><td style=\"height: 7px;\"></td></tr></table><div style=\"text-align: center;\">";
else echo "<div class=\"submit_check\">";
echo "$apertura_tag_font
<span class=\"avail_button\"><input class=\"sbutton\" type=\"submit\" name=\"contr_disp\" value=\"$fr_Controlla_la_disponibilita\"></span>
$chiusura_tag_font";
if (empty($framed)) echo "</div>";
else echo "</div>";
echo "</div></form></div>";

} # fine if (!isset($mostra_form) or $mostra_form != "NO")


if (!empty($framed)) {
if ($file_js_frame) echo "
<script type=\"text/javascript\" src=\"$file_js_frame\">
</script>";
echo "
</body>
</html>
";
} # fine if (!empty($framed))


?>
