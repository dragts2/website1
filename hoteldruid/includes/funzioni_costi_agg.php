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




function dati_costi_agg_ntariffe ($tablenometariffe,$num_tariffe,$solo_visibili="NO",$ordine_imposto="",$tableappartamenti="",$dati_cat_pers=array('num' => 0)) {
global $LIKE;

if ($num_tariffe == "NO") $num_tariffe = 0;
else {
if (!$num_tariffe) {
$num_tariffe = esegui_query("select nomecostoagg from $tablenometariffe where idntariffe = 1 ");
$num_tariffe = risul_query($num_tariffe,0,'nomecostoagg');
} # fine if (!$num_tariffe)
} # fine else if ($num_tariffe == "NO")
if ($solo_visibili == "SI") $cond_visibili = " and (mostra_ca $LIKE 's%' or mostra_ca $LIKE 'p%')";
else $cond_visibili = "";
$ordine = "tipo_ca, idntariffe";
if ($ordine_imposto) $ordine = $ordine_imposto;
$costi = esegui_query("select * from $tablenometariffe where idntariffe > 10  and nomecostoagg != ''$cond_visibili order by $ordine");
$num_dati_ca = numlin_query($costi);
$num_ca = 0;
$num_ca_pm = 0;
for ($num1 = 0 ; $num1 < $num_dati_ca ; $num1++) {
$mostra_ca = risul_query($costi,$num1,'mostra_ca');
$reg_costo = 0;
if ($solo_visibili != "+pmin" or substr($mostra_ca,0,1) == "s" or substr($mostra_ca,0,1) == "p") $reg_costo = 1;
elseif ($solo_visibili == "+pmin") {
for ($nt = 1 ; $nt <= $num_tariffe ; $nt++) {
$tariffa_corr = substr((string) risul_query($costi,$num1,"tariffa".$nt),0,1);
if ($tariffa_corr == "s" or $tariffa_corr == "r") {
$reg_costo = 2;
break;
} # fine if ($tariffa_corr == "s" or $tariffa_corr == "r")
} # fine for $nt
} # fine elseif ($solo_visibili == "+pmin")
if ($reg_costo) {
$dati_ca[$num_ca]['id'] = risul_query($costi,$num1,'idntariffe');
$dati_ca['id'][$dati_ca[$num_ca]['id']] = $num_ca;
$dati_ca[$num_ca]['nome'] = risul_query($costi,$num1,'nomecostoagg');
$dati_ca[$num_ca]['valore'] = risul_query($costi,$num1,'valore_ca');
$dati_ca[$num_ca]['tipo'] = risul_query($costi,$num1,'tipo_ca');
$dati_ca[$num_ca]['tipo_val'] = substr($dati_ca[$num_ca]['tipo'],1,1);
$dati_ca[$num_ca]['tipo'] = substr($dati_ca[$num_ca]['tipo'],0,1);
if ($dati_ca[$num_ca]['tipo_val'] != "f") {
$dati_ca[$num_ca]['valore_perc'] = risul_query($costi,$num1,'valore_perc_ca');
$dati_ca[$num_ca]['arrotonda'] = (double) risul_query($costi,$num1,'arrotonda_ca');
} # fine if ($dati_ca[$num_ca]['tipo_val'] != "f")
$dati_ca[$num_ca]['tasseperc'] = risul_query($costi,$num1,'tasseperc_ca');
for ($nt = 1 ; $nt <= $num_tariffe ; $nt++) {
$dati_ca[$num_ca]["tariffa".$nt] = risul_query($costi,$num1,"tariffa".$nt);
if ($dati_ca[$num_ca]["tariffa".$nt] != "i") {
$dati_ca[$num_ca]["tipo_associa_tariffa".$nt] = substr((string) $dati_ca[$num_ca]["tariffa".$nt],0,1);
$dati_ca[$num_ca]["tariffa".$nt] = substr((string) $dati_ca[$num_ca]["tariffa".$nt],1);
} # fine if ($dati_ca[$num_ca]["tariffa".$nt] != "i")
else {
$dati_ca[$num_ca]["tariffa".$nt] = "";
$dati_ca[$num_ca]["incomp_tariffa".$nt] = "i";
} # fine else if ($dati_ca[$num_ca]["tariffa".$nt] != "i")
} # fine for $nt
$dati_ca[$num_ca]['associasett'] = risul_query($costi,$num1,'associasett_ca');
$numsett = (string) risul_query($costi,$num1,'numsett_ca');
$dati_ca[$num_ca]['numsett_orig'] = $numsett;
$dati_ca[$num_ca]['numsett'] = substr($numsett,0,1);
if ($dati_ca[$num_ca]['numsett'] == "m") $dati_ca[$num_ca]['sett_meno_una'] = substr($numsett,1,1);
if ($dati_ca[$num_ca]['numsett'] == "n" or $dati_ca[$num_ca]['numsett'] == "s") {
$sett_prime_seconde = explode(",",substr($numsett,1));
$dati_ca[$num_ca]['num_sett_prime'] = $sett_prime_seconde[0];
$dati_ca[$num_ca]['num_sett_seconde'] = $sett_prime_seconde[1];
} # fine if ($dati_ca[$num_ca]['numsett'] == "n" or $dati_ca[$num_ca]['numsett'] == "s")
if ($dati_ca[$num_ca]['numsett'] == "g") $dati_ca[$num_ca]['giornisett'] = substr($numsett,1);
$dati_ca[$num_ca]['raggruppa'] = substr($mostra_ca,1,1);
$dati_ca[$num_ca]['combina'] = substr($mostra_ca,2,1);
$dati_ca[$num_ca]['escludi_tot_perc'] = substr($mostra_ca,3,1);
$dati_ca[$num_ca]['mostra'] = substr($mostra_ca,0,1);
if ($dati_ca[$num_ca]['mostra'] == "p") {
$dati_ca[$num_ca]['mostra'] = "s";
$dati_ca[$num_ca]['mostra_numpers'] = "s";
} # fine ($dati_ca[$num_ca]['mostra'] == "p")
else $dati_ca[$num_ca]['mostra_numpers'] = "n";
$dati_ca[$num_ca]['moltiplica'] = risul_query($costi,$num1,'moltiplica_ca');
$dati_ca[$num_ca]['cp_molt_int'] = strstr($dati_ca[$num_ca]['moltiplica'],"<");
if ($dati_ca[$num_ca]['cp_molt_int']) {
$catpers_molt = explode("<",$dati_ca[$num_ca]['moltiplica']);
$dati_ca[$num_ca]['moltiplica'] = $catpers_molt[0];
$dati_ca[$num_ca]['modo_cp_molt'] = $catpers_molt[1];
$dati_ca[$num_ca]['cp_molt']['num'] = (count($catpers_molt) - 2);
for ($num2 = 0 ; $num2 < $dati_ca[$num_ca]['cp_molt']['num'] ; $num2++) {
if ((string) $catpers_molt[($num2 + 2)] == "0") {
$dati_ca[$num_ca]['cp_molt']['ord'][$num2] = "0";
$dati_ca[$num_ca]['cp_molt'][0]['esist'] = ($num2 + 1);
} # fine if ((string) $catpers_molt[($num2 + 2)] == "0")
else {
$catpers_corr = explode(">",$catpers_molt[($num2 + 2)]);
$dati_ca[$num_ca]['cp_molt']['ord'][$num2] = $catpers_corr[0];
$dati_ca[$num_ca]['cp_molt'][$num2]['lang'] = $catpers_corr[1];
$dati_ca[$num_ca]['cp_molt'][$num2]['n_plur'] = $catpers_corr[2];
if ($dati_cat_pers['num'] and $dati_cat_pers[$catpers_corr[0]]['langs'][$catpers_corr[1]]['n_p'] == $catpers_corr[2]) $dati_ca[$num_ca]['cp_molt'][$catpers_corr[0]]['esist'] = ($num2 + 1);
} # fine else if ((string) $catpers_molt[($num2 + 2)] == "0")
} # fine for $num2
} # fine if ($dati_ca[$num_ca]['cp_molt_int'])
$dati_ca[$num_ca]['molt_max'] = substr($dati_ca[$num_ca]['moltiplica'],1,1);
$molt_agg = explode(",",substr($dati_ca[$num_ca]['moltiplica'],2));
$dati_ca[$num_ca]['molt_agg'] = $molt_agg[0];
$dati_ca[$num_ca]['molt_max_num'] = $molt_agg[1];
$dati_ca[$num_ca]['moltiplica'] = substr($dati_ca[$num_ca]['moltiplica'],0,1);
$dati_ca[$num_ca]['letto'] = risul_query($costi,$num1,'letto_ca');
if ($dati_ca[$num_ca]['letto'] == "p") {
$dati_ca[$num_ca]['letto'] = "s";
$dati_ca[$num_ca]['perc_catpers'] = "s";
} # fine ($dati_ca[$num_ca]['letto'] == "p")
else $dati_ca[$num_ca]['perc_catpers'] = "n";
$dati_ca[$num_ca]['var_periodip'] = risul_query($costi,$num1,'variazione_ca');
$dati_ca[$num_ca]['var_percentuale'] = substr($dati_ca[$num_ca]['var_periodip'],0,1);
$dati_ca[$num_ca]['var_numsett'] = substr($dati_ca[$num_ca]['var_periodip'],1,1);
$dati_ca[$num_ca]['var_moltiplica'] = substr($dati_ca[$num_ca]['var_periodip'],2,1);
$dati_ca[$num_ca]['var_tariffea'] = substr($dati_ca[$num_ca]['var_periodip'],4,1);
$dati_ca[$num_ca]['var_tariffei'] = substr($dati_ca[$num_ca]['var_periodip'],5,1);
$dati_ca[$num_ca]['var_beniinv'] = substr($dati_ca[$num_ca]['var_periodip'],6,1);
$dati_ca[$num_ca]['var_appi'] = substr($dati_ca[$num_ca]['var_periodip'],7,1);
$dati_ca[$num_ca]['var_comb'] = substr($dati_ca[$num_ca]['var_periodip'],8,1);
$dati_ca[$num_ca]['var_periodip'] = substr($dati_ca[$num_ca]['var_periodip'],3,1);
$dati_ca[$num_ca]['beniinv_orig'] = risul_query($costi,$num1,'beniinv_ca');
if ($dati_ca[$num_ca]['beniinv_orig']) {
$beniinv_vett = explode(";",$dati_ca[$num_ca]['beniinv_orig']);
$dati_ca[$num_ca]['tipo_beniinv'] = substr($beniinv_vett[0],0,3);
if ($dati_ca[$num_ca]['tipo_beniinv'] == "mag") $dati_ca[$num_ca]['mag_beniinv'] = substr($beniinv_vett[0],3);
$dati_ca[$num_ca]['num_beniinv'] = (count($beniinv_vett) - 1);
for ($num2 = 0 ; $num2 < $dati_ca[$num_ca]['num_beniinv'] ; $num2++) {
$bene_inv = explode(",",$beniinv_vett[($num2 + 1)]);
$dati_ca[$num_ca]['id_beneinv'][$num2] = $bene_inv[0];
$dati_ca[$num_ca]['molt_beneinv'][$num2] = $bene_inv[1];
} # fine for $num2
} # fine if ($dati_ca[$num_ca]['beniinv_orig'])
$dati_ca[$num_ca]['periodipermessi_orig'] = (string) risul_query($costi,$num1,'periodipermessi_ca');
$dati_ca[$num_ca]['periodipermessi'] = substr($dati_ca[$num_ca]['periodipermessi_orig'],0,1);
if ($dati_ca[$num_ca]['periodipermessi']) {
$dati_ca[$num_ca]['sett_periodipermessi_ini'] = array();
$dati_ca[$num_ca]['sett_periodipermessi_fine'] = array();
$sett_periodipermessi = substr($dati_ca[$num_ca]['periodipermessi_orig'],1);
if ($sett_periodipermessi) {
$sett_periodipermessi = explode(",",$sett_periodipermessi);
$num_sett_periodipermessi = count($sett_periodipermessi);
$num3 = 0;
for ($num2 = 0 ; $num2 < $num_sett_periodipermessi ; $num2++) {
if ($sett_periodipermessi[$num2]) {
$sett_periodipermesso = explode("-",$sett_periodipermessi[$num2]);
$dati_ca[$num_ca]['sett_periodipermessi_ini'][$num3] = $sett_periodipermesso[0];
$dati_ca[$num_ca]['sett_periodipermessi_fine'][$num3] = $sett_periodipermesso[1];
$num3++;
} # fine if ($sett_periodipermessi[$num2])
} # fine for $num2
} # fine if ($sett_periodipermessi)
} # fine if ($dati_ca[$num_ca][periodipermessi])
$dati_ca[$num_ca]['appincompatibili'] = risul_query($costi,$num1,'appincompatibili_ca');
if ($dati_ca[$num_ca]['letto'] == "s" and $tableappartamenti) {
if (!isset($app_letto)) {
$app_letto = esegui_query("select idappartamenti from $tableappartamenti where letto = '1' ");
$num_app_letto = numlin_query($app_letto);
} # fine if (!isset($app_letto))
if ($num_app_letto) {
$dati_ca[$num_ca]['var_appi'] = "s";
for ($num2 = 0 ; $num2 < $num_app_letto ; $num2++) {
$idapp = risul_query($app_letto,$num2,'idappartamenti');
if (!strstr(",".$dati_ca[$num_ca]['appincompatibili'].",",",$idapp,")) $dati_ca[$num_ca]['appincompatibili'] .= ",$idapp";
$dati_ca[$num_ca]['appincompatibili_letto'] = 1;
} # fine for $num2
if (substr($dati_ca[$num_ca]['appincompatibili'],0,1) == ",") $dati_ca[$num_ca]['appincompatibili'] = substr($dati_ca[$num_ca]['appincompatibili'],1);
} # fine if ($num_app_letto)
} # fine if ($dati_ca[$num_ca]['letto'] == "s" and $tableappartamenti)
$dati_ca[$num_ca]['categoria'] = (string) risul_query($costi,$num1,'categoria_ca');
$dati_ca[$num_ca]['numlimite'] = risul_query($costi,$num1,'numlimite_ca');
$regoleassegna_ca = explode(";",risul_query($costi,$num1,'regoleassegna_ca'));
$dati_ca[$num_ca]['assegna_da_ini_prenota'] = $regoleassegna_ca[0];
$dati_ca[$num_ca]['assegna_con_num_prenota'] = $regoleassegna_ca[1];
if ($reg_costo == 2) {
$dati_ca['pmin'][$num_ca_pm] = $dati_ca[$num_ca];
$dati_ca['pmin']['id'][$dati_ca[$num_ca]['id']] = $num_ca_pm;
unset($dati_ca['id'][$dati_ca[$num_ca]['id']]);
unset($dati_ca[$num_ca]);
$num_ca_pm++;
$dati_ca['pmin']['num'] = $num_ca_pm;
} # fine if ($reg_costo == 2)
else $num_ca++;
} # fine if ($reg_costo)
} # fine for $num1
$dati_ca['num'] = $num_ca;

return $dati_ca;

} # fine function dati_costi_agg_ntariffe



function num_costi_in_periodo ($tablecostiprenota,$tableprenota,$id_periodo,$id_costo,$nome_costo,&$id_prenota_p,$tra_anni) {

if (isset($id_prenota_p)) $id_prenota = $id_prenota_p;
else $id_prenota = "";
if ($tra_anni) {
global $PHPR_TAB_PRE;
$tableperiodi_prec = $PHPR_TAB_PRE."periodi".$tra_anni;
$tableperiodi_succ = $PHPR_TAB_PRE."periodi".($tra_anni + 1);
$data_fine = esegui_query("select datainizio,datafine from $tableperiodi_prec where idperiodi = '$id_periodo'");
$data_inizio = aggslashdb(risul_query($data_fine,0,'datainizio'));
$data_fine = aggslashdb(risul_query($data_fine,0,'datafine'));
$periodo_succ = esegui_query("select idperiodi from $tableperiodi_succ where datainizio = '$data_inizio' and datafine = '$data_fine'");
if (numlin_query($periodo_succ) == 1) {
$id_periodo = risul_query($periodo_succ,0,'idperiodi');
$tableprenota = $PHPR_TAB_PRE."prenota".($tra_anni + 1);
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".($tra_anni + 1);
if ($id_prenota) {
$prenota_esistente = esegui_query("select idprenota from $tableprenota where iddatainizio = '0' and commento = '$id_prenota'");
if (numlin_query($prenota_esistente) == 1) $id_prenota = risul_query($prenota_esistente,0,'idprenota');
else $id_prenota = "";
} # fine if ($id_prenota)
} # fine if (numlin_query($periodo_succ) == 1)
} # fine if ($tra_anni)
if ($id_prenota) $cond_escludi_prenota = " and $tablecostiprenota.idprenota != '$id_prenota'";
else $cond_escludi_prenota = "";
$costi = esegui_query("select distinct $tablecostiprenota.idcostiprenota,$tablecostiprenota.moltiplica,$tablecostiprenota.associasett,$tablecostiprenota.settimane from $tablecostiprenota inner join $tableprenota on $tablecostiprenota.idprenota = $tableprenota.idprenota where $tablecostiprenota.idntariffe = '$id_costo' and $tablecostiprenota.nome = '$nome_costo' and $tableprenota.iddatainizio <= '$id_periodo' and $tableprenota.iddatafine >= '$id_periodo'$cond_escludi_prenota");
$num_costi = numlin_query($costi);
$num_costi_orig = $num_costi;
for ($num1 = 0 ; $num1 < $num_costi_orig ; $num1++) {
$associasett = risul_query($costi,$num1,'associasett',$tablecostiprenota);
$settimane_costo = (string) risul_query($costi,$num1,'settimane',$tablecostiprenota);
if ($associasett == "s" and str_replace(",$id_periodo,","",$settimane_costo) == $settimane_costo) $num_costi--;
else {
$moltiplica = risul_query($costi,$num1,'moltiplica',$tablecostiprenota);
if ($associasett == "s") {
$settimane = explode(",",$settimane_costo);
$moltiplica = explode(",",$moltiplica);
for ($num2 = 0 ; $num2 < count($settimane) ; $num2++) if ($settimane[$num2] == $id_periodo) $moltiplica = $moltiplica[$num2];
} # fine if ($associasett == "s")
if ($moltiplica > 1) $num_costi = $num_costi + $moltiplica - 1;
} # fine else if ($associasett == "s" and str_replace("","",$settimane) == $settimane)
} # fine for $num1

return $num_costi;

} # fine function num_costi_in_periodo



function trova_periodo_permesso_costo ($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$num_settimane_costo) {

$periodo_costo_trovato = "NO";
if ($dati_ca[$num_costo]['periodipermessi']) {
for ($num1 = 0 ; $num1 < count($dati_ca[$num_costo]['sett_periodipermessi_ini']) ; $num1++) {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num1] <= $idinizioperiodo and $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num1] >= $idfineperiodo) $periodo_costo_trovato = "SI";
else {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num1] <= $idfineperiodo and $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num1] >= $idinizioperiodo) {
if ($dati_ca[$num_costo]['periodipermessi'] == "u") $periodo_costo_trovato = "SI";
if ($dati_ca[$num_costo]['periodipermessi'] == "p") {
if ($dati_ca[$num_costo]['associasett'] == "s" or $dati_ca[$num_costo]['numsett'] != "c") $periodo_costo_trovato = "SI";
else {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num1] > $idinizioperiodo) $periodo_costo_ini = $dati_ca[$num_costo]['sett_periodipermessi_ini'][$num1];
else $periodo_costo_ini = $idinizioperiodo;
if ($dati_ca[$num_costo]['sett_periodipermessi_fine'][$num1] < $idfineperiodo) $periodo_costo_fine = $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num1];
else $periodo_costo_ini = $idfineperiodo;
if ($num_settimane_costo <= ($periodo_costo_fine - $periodo_costo_ini + 1)) $periodo_costo_trovato = "SI";
} # fine else if ($dati_ca[$num_costo][associasett] == "s" or...
} # fine if ($dati_ca[$num_costo][periodipermessi] == "p")
} # fine if ($dati_ca[$num_costo][sett_periodipermessi_ini][$num1] <= $idfineperiodo and...
} # fine else if ($dati_ca[$num_costo][sett_periodipermessi_ini][$num1] <= $idinizioperiodo and...
} # fine for $num1
} # fine if ($dati_ca[$num_costo][periodipermessi])
else $periodo_costo_trovato = "SI";

return $periodo_costo_trovato;

} # fine function trova_periodo_permesso_costo



function calcola_prezzo_totale_costo ($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica,$costo_tariffa,$lista_tariffe,$costo_prenota_tot,$caparra,$numpersone,$dati_cat_pers,$catpers_ca,$costo_escludi_perc=0,$prezzi_giorn=0) {

$prezzo_costo_fisso = (double) $dati_ca[$num_costo]['valore'];
if ($dati_ca[$num_costo]['tipo_val'] != "f") $prezzo_costo_perc = (double) $dati_ca[$num_costo]['valore_perc'];
else $prezzo_costo_perc = 0;
if ($dati_ca[$num_costo]['associasett'] == "s" or $dati_ca[$num_costo]['tipo_val'] == "q" or $dati_ca[$num_costo]['tipo_val'] == "s") {
$lista_tariffe = explode(";",$lista_tariffe);
if (isset($lista_tariffe[1])) $lista_tariffep = $lista_tariffe[1];
else $lista_tariffep = "";
$lista_tariffe = explode(",",$lista_tariffe[0]);
if ($dati_ca[$num_costo]['tipo_val'] == "q" or $dati_ca[$num_costo]['tipo_val'] == "s") {
$costo_tariffap = (double) 0;
if ($lista_tariffep) {
$lista_tariffep = explode(",",$lista_tariffep);
for ($num1 = 0 ; $num1 < count($lista_tariffep) ; $num1++) $costo_tariffap += (double) $lista_tariffep[$num1];
} # fine ($lista_tariffep)
else for ($num1 = 0 ; $num1 < count($lista_tariffe) ; $num1++) $lista_tariffep[$num1] = (double) 0;
} # fine if ($dati_ca[$num_costo]['tipo_val'] == "q" or $dati_ca[$num_costo]['tipo_val'] == "s")
} # fine if ($dati_ca[$num_costo]['associasett'] == "s" or...

if ($prezzi_giorn) {
global $prezzi_giorn_costo;
$prezzi_giorn_costo = "";
} # fine if ($prezzi_giorn)

if ($dati_ca[$num_costo]['tipo'] == "u") {
if ($dati_ca[$num_costo]['tipo_val'] == "p") $prezzo_costo_perc = ($costo_tariffa * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "q") $prezzo_costo_perc = (($costo_tariffa - $costo_tariffap) * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "s") {
if ($numpersone) $prezzo_costo_perc = (($costo_tariffap / (double) $numpersone) * $prezzo_costo_perc) / 100;
else $prezzo_costo_perc = 0;
} # fine if ($dati_ca[$num_costo]['tipo_val'] == "s")
if ($dati_ca[$num_costo]['tipo_val'] == "t") $prezzo_costo_perc = (($costo_prenota_tot - (double) $costo_escludi_perc) * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "c") $prezzo_costo_perc = ($caparra * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "r") $prezzo_costo_perc = ((($costo_prenota_tot - (double) $costo_escludi_perc) - $caparra) * $prezzo_costo_perc) / 100;
} # fine if ($dati_ca[$num_costo]['tipo'] == "u")
if ($dati_ca[$num_costo]['tipo'] == "s") {
if ($dati_ca[$num_costo]['associasett'] == "s") {
$prezzo_costo_fisso_tot = 0;
$prezzo_costo_perc_tot = 0;
$prezzo_costo_sett = 0;
$moltiplica = explode(",",$moltiplica);
$num_lista_tariffe = 0;
$num_sett = 1;
$prezzo_giorn_costo_max = 0;
for ($num1 = $idinizioperiodo ; $num1 <= $idfineperiodo ; $num1++) {
if (str_replace(",".$num1.",","",$settimane_costo) != $settimane_costo) {
if (!$moltiplica[$num_sett]) $moltiplica[$num_sett] = 0;
$prezzo_costo_fisso_tot = $prezzo_costo_fisso_tot + ($prezzo_costo_fisso * $moltiplica[$num_sett]);
if ($dati_ca[$num_costo]['tipo_val'] == "p") $prezzo_costo_sett = ((double) $lista_tariffe[$num_lista_tariffe] * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "q") $prezzo_costo_sett = (((double) $lista_tariffe[$num_lista_tariffe] - (double) $lista_tariffep[$num_lista_tariffe]) * $prezzo_costo_perc) / 100;
if ($dati_ca[$num_costo]['tipo_val'] == "s") {
if ($numpersone) $prezzo_costo_sett = (((double) $lista_tariffep[$num_lista_tariffe] / (double) $numpersone) * $prezzo_costo_perc) / 100;
else $prezzo_costo_sett = 0;
} # fine if ($dati_ca[$num_costo]['tipo_val'] == "s")
$prezzo_costo_perc_tot = $prezzo_costo_perc_tot + ($prezzo_costo_sett * $moltiplica[$num_sett]);
if ($prezzi_giorn) {
$prezzo_costo_sett2 = $prezzo_costo_sett;
if ($dati_ca[$num_costo]['tipo_val'] != "f") $prezzo_costo_sett2 = floor($prezzo_costo_sett2 / $dati_ca[$num_costo]['arrotonda']) * $dati_ca[$num_costo]['arrotonda'];
$prezzo_giorn_costo_corr = $prezzo_costo_fisso + $prezzo_costo_sett2;
if (!$prezzo_giorn_costo_max or $prezzo_giorn_costo_corr > $prezzo_giorn_costo_max) $prezzo_giorn_costo_max = $prezzo_giorn_costo_corr;
$prezzi_giorn_costo .= ($prezzo_giorn_costo_corr * $moltiplica[$num_sett]).",";
} # fine if ($prezzi_giorn)
$num_sett++;
} # fine if (str_replace(",".$num1.",","",$settimane_costo) != $settimane_costo)
$num_lista_tariffe++;
} # fine for $num1
$prezzo_costo_fisso = $prezzo_costo_fisso_tot;
$prezzo_costo_perc = $prezzo_costo_perc_tot;
if ($prezzi_giorn) $prezzi_giorn_costo .= $prezzo_giorn_costo_max;
} # fine if ($dati_ca[$num_costo]['associasett'] == "s")
else {
if ($prezzi_giorn) {
$prezzi_giorn_costo = $prezzo_costo_fisso;
if ($dati_ca[$num_costo]['numsett'] != "t") $prezzi_giorn_costo = "$settimane_costo,$prezzi_giorn_costo";
} # fine if ($prezzi_giorn)
$prezzo_costo_fisso = $prezzo_costo_fisso * (int) $settimane_costo;
} # fine else if ($dati_ca[$num_costo]['associasett'] == "s")
} # fine if ($dati_ca[$num_costo]['tipo'] == "s")
elseif ($prezzi_giorn) {
$prezzo_costo_perc2 = $prezzo_costo_perc;
if ($dati_ca[$num_costo]['tipo_val'] != "f") $prezzo_costo_perc2 = floor($prezzo_costo_perc2 / $dati_ca[$num_costo]['arrotonda']) * $dati_ca[$num_costo]['arrotonda'];
$prezzo_costo = $prezzo_costo_fisso + $prezzo_costo_perc2;
$numper = ($idfineperiodo - $idinizioperiodo + 1);
$prezzi_giorn_costo = ($prezzo_costo / $numper);
if (strstr($prezzi_giorn_costo,".")) {
if (!strstr($prezzo_costo,".") and $prezzo_costo >= ($numper * 100)) $arrotond_giorn = 1;
else $arrotond_giorn = 0.01;
$prezzi_giorn_costo = floor((double) $prezzi_giorn_costo / $arrotond_giorn) * $arrotond_giorn;
if ((double) ($prezzi_giorn_costo * $numper) < (double) $prezzo_costo) {
$num_giorni_resto = floor(((double) $prezzo_costo - ($prezzi_giorn_costo * $numper)) / $arrotond_giorn);
$prezzi_giorn_costo = "$arrotond_giorn"."r$num_giorni_resto,".($prezzi_giorn_costo + $arrotond_giorn);
} # fine if ((double) ($prezzi_giorn_costo * $numper) < (double) $prezzo_costo)
} # fine if (strstr($prezzi_giorn_costo,"."))
} # fine elseif ($prezzi_giorn)

if ($dati_ca[$num_costo]['associasett'] != "s") {
$prezzo_costo_fisso = $prezzo_costo_fisso * $moltiplica;
$prezzo_costo_perc = $prezzo_costo_perc * $moltiplica;
} # fine if ($dati_ca[$num_costo]['associasett'] != "s")
if ($dati_ca[$num_costo]['tipo_val'] != "f") $prezzo_costo_perc = floor($prezzo_costo_perc / $dati_ca[$num_costo]['arrotonda']) * $dati_ca[$num_costo]['arrotonda'];
$prezzo_costo = $prezzo_costo_fisso + $prezzo_costo_perc;

if ($dati_ca[$num_costo]['perc_catpers'] == "s" and strcmp((string) $catpers_ca,"") and isset($dati_cat_pers[$catpers_ca]['perc']) and strcmp((string) $dati_cat_pers[$catpers_ca]['perc'],"") and $dati_cat_pers[$catpers_ca]['perc'] != 100) {
$prezzo_costo = round((((double) $prezzo_costo * (double)$dati_cat_pers[$catpers_ca]['perc']) / 100) / $dati_cat_pers['arrotond']) * $dati_cat_pers['arrotond'];
} # fine if ($dati_ca[$num_costo]['perc_catpers'] == "s" and strcmp((string) $catpers_ca,"") and...

return $prezzo_costo;

} # fine function calcola_prezzo_totale_costo



function calcola_settimane_costo ($tableperiodi,$dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$id_periodi_costo,$numsettimane) {

$settimane_costo = "";
if ($dati_ca[$num_costo]['tipo'] == "s") {
if ($dati_ca[$num_costo]['associasett'] == "s") {
$num_attuale = 0;
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
$periodo_costo_trovato = "NO";
if ($dati_ca[$num_costo]['periodipermessi'] == "p") {
for ($num2 = 0 ; $num2 < count($dati_ca[$num_costo]['sett_periodipermessi_ini']) ; $num2++) {
if ($dati_ca[$num_costo]['sett_periodipermessi_ini'][$num2] <= $num1 and $dati_ca[$num_costo]['sett_periodipermessi_fine'][$num2] >= $num1) $periodo_costo_trovato = "SI";
} # fine for $num2
} # fine if ($dati_ca[$num_costo][periodipermessi] == "p")
else $periodo_costo_trovato = "SI";
if ($periodo_costo_trovato == "SI") {
if ($dati_ca[$num_costo]['numsett'] == "t") $settimane_costo .= ",$num1";
if ($dati_ca[$num_costo]['numsett'] == "m" and (($dati_ca[$num_costo]['sett_meno_una'] == "p" and $num1 != $idinizioperiodo) or ($dati_ca[$num_costo]['sett_meno_una'] == "u" and $num1 != $idfineperiodo)) )  $settimane_costo .= ",$num1";
if ($dati_ca[$num_costo]['numsett'] == "c" and str_replace(",$num1,","",(string) $id_periodi_costo) != (string) $id_periodi_costo) $settimane_costo .= ",$num1";
if ($dati_ca[$num_costo]['numsett'] == "s" or $dati_ca[$num_costo]['numsett'] == "n") {
$num_attuale++;
if ($num_attuale <= $dati_ca[$num_costo]['num_sett_prime'] and $dati_ca[$num_costo]['numsett'] == "s") $settimane_costo .= ",$num1";
if ($num_attuale > $dati_ca[$num_costo]['num_sett_prime'] and $dati_ca[$num_costo]['numsett'] == "n") $settimane_costo .= ",$num1";
if ($num_attuale == ($dati_ca[$num_costo]['num_sett_prime'] + $dati_ca[$num_costo]['num_sett_seconde'])) $num_attuale = 0;
} # fine if ($dati_ca[$num_costo][numsett] == "s" or $dati_ca[$num_costo][numsett] == "n")
if ($dati_ca[$num_costo]['numsett'] == "g") {
$dataini_gio = esegui_query("select datainizio from $tableperiodi where idperiodi = '$num1'");
$dataini_gio = risul_query($dataini_gio,0,'datainizio');
$giorno = date("w", mktime(0,0,0,substr($dataini_gio,5,2),substr($dataini_gio,8,2),substr($dataini_gio,0,4)));
if ($giorno == 0) $giorno = 7;
if (str_replace($giorno,"",$dati_ca[$num_costo]['giornisett']) != $dati_ca[$num_costo]['giornisett']) $settimane_costo .= ",$num1";
} # fine if ($dati_ca[$num_costo][numsett] == "g")
} # fine if ($periodo_costo_trovato == "SI")
} # fine for $num1
if ($settimane_costo) $settimane_costo .= ",";
} # fine if ($dati_ca[$num_costo][associasett] == "s")
else {
if ($dati_ca[$num_costo]['numsett'] == "t") $settimane_costo = $idfineperiodo - $idinizioperiodo + 1;
if ($dati_ca[$num_costo]['numsett'] == "m") $settimane_costo = $idfineperiodo - $idinizioperiodo;
if ($dati_ca[$num_costo]['numsett'] == "c") $settimane_costo = $numsettimane;
} # fine else if ($dati_ca[$num_costo][associasett] == "s")
} # fine if ($dati_ca[$num_costo][tipo] == "s")
return $settimane_costo;

} # fine function calcola_settimane_costo



function calcola_moltiplica_costo ($dati_ca,$num_costo,&$moltiplica,$idinizioperiodo,$idfineperiodo,$settimane_costo,$nummoltiplica_ca,$numpersone,$cat_persone,$num_letti_agg) {

$moltiplica = "";
if (!strcmp((string) $numpersone,"")) $numpersone = 0;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
if (empty($cat_persone)) {
$cat_persone = array(0 => array());
$cat_persone[0]['molt'] = $numpersone;
$cat_persone[0]['ord'] = 0;
$cat_persone['ord'][0] = 0;
$cat_persone['num'] = 1;
} # fine if (empty($cat_persone))
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $numpersone = 0;
for ($num1 = 0 ; $num1 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num1++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num1];
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($cat_persone[fixset($cat_persone['ord'][$cp])]['molt'])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $numpersone += $cat_persone[$cat_persone['ord'][$cp]]['molt'];
else $numpersone = $numpersone - $cat_persone[$cat_persone['ord'][$cp]]['molt'];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($cat_persone[fixset($cat_persone['ord'][$cp])]['molt']))
} # fine for $num1
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
if (!$dati_ca[$num_costo]['molt_agg']) $dati_ca[$num_costo]['molt_agg'] = 0;

if ($dati_ca[$num_costo]['moltiplica'] == "1") $moltiplica = 1;
if ($dati_ca[$num_costo]['moltiplica'] == "c") $moltiplica = $nummoltiplica_ca;
if ($dati_ca[$num_costo]['moltiplica'] == "p") $moltiplica = $numpersone;
if ($dati_ca[$num_costo]['moltiplica'] == "t") {
$letti_agg_max = 0;
if (!empty($dati_ca[$num_costo]['modo_cp_molt'])) {
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg[$num1] = 0;
for ($num2 = 0 ; $num2 < $dati_ca[$num_costo]['cp_molt']['num'] ; $num2++) {
$cp = $dati_ca[$num_costo]['cp_molt']['ord'][$num2];
if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot'][$num1][$cp])) {
if ($dati_ca[$num_costo]['modo_cp_molt'] == "i") $num_letti_agg[$num1] += $num_letti_agg['catp_tot'][$num1][$cp];
else $num_letti_agg[$num1] = $num_letti_agg[$num1] - $num_letti_agg['catp_tot'][$num1][$cp];
} # fine if (!empty($dati_ca[$num_costo]['cp_molt'][$cp]['esist']) and !empty($num_letti_agg['catp_tot'][$num1][$cp]))
} # fine for $num2
} # fine for $num1
} # fine if (!empty($dati_ca[$num_costo]['modo_cp_molt']))
if ($dati_ca[$num_costo]['tipo'] == "s" and $dati_ca[$num_costo]['associasett'] == "s") {
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
if (!strcmp(fixstr($num_letti_agg[$num1]),"")) $num_letti_agg[$num1] = 0;
if ($num_letti_agg[$num1] > $letti_agg_max) $letti_agg_max = $num_letti_agg[$num1];
if ($settimane_costo != str_replace(",$num1,","",$settimane_costo)) $moltiplica .= ",".max(($numpersone + $num_letti_agg[$num1] + $dati_ca[$num_costo]['molt_agg']),0);
} # fine for $num1
$moltiplica .= ",";
$moltiplica_max = $numpersone + $letti_agg_max;
} # fine if ($dati_ca[$num_costo][tipo] == "s" and $dati_ca[$num_costo]['associasett'] == "s")
else {
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) if ($num_letti_agg[$num1] > $letti_agg_max) $letti_agg_max = $num_letti_agg[$num1];
$moltiplica = max(($numpersone + $letti_agg_max + $dati_ca[$num_costo]['molt_agg']),0);
$moltiplica_max = $moltiplica;
} # fine else if ($dati_ca[$num_costo][tipo] == "s" and $dati_ca[$num_costo]['associasett'] == "s")
} # fine if ($dati_ca[$num_costo][moltiplica] == "t")
else {
$moltiplica = max(((int) $moltiplica + $dati_ca[$num_costo]['molt_agg']),0);
$moltiplica_max = $moltiplica;
if ($dati_ca[$num_costo]['tipo'] == "s" and $dati_ca[$num_costo]['associasett'] == "s") {
$moltiplica = "";
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
if ($settimane_costo != str_replace(",$num1,","",$settimane_costo))  $moltiplica .= ",$moltiplica_max";
} # fine for $num1
$moltiplica .= ",";
} # fine if ($dati_ca[$num_costo]['tipo'] == "s" and $dati_ca[$num_costo]['associasett'] == "s")
} # fine else if ($dati_ca[$num_costo]['moltiplica'] == "t")

return $moltiplica_max;

} # fine function calcola_moltiplica_costo



function aggiorna_letti_agg_in_periodi ($dati_ca,$num_costo,&$num_letti_agg,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica,$nummoltiplica_ca,$numpersone,$dati_cat_pers=array('num' => 0),$catpers_ca="") {

if (!isset($num_letti_agg['max']) or $num_letti_agg['max'] == "") $num_letti_agg['max'] = 0;
if ($dati_ca[$num_costo]['letto'] == "s") {
if (!$moltiplica) calcola_moltiplica_costo($dati_ca,$num_costo,$moltiplica,$idinizioperiodo,$idfineperiodo,$settimane_costo,$nummoltiplica_ca,$numpersone,"","");
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
if (empty($num_letti_agg[$num1])) $num_letti_agg[$num1] = 0;
if ($dati_ca[$num_costo]['associasett'] == "s") {
$moltiplica_corr = 0;
if ($settimane_costo != str_replace(",$num1,","",$settimane_costo)) {
$settimane = explode(",",$settimane_costo);
$moltiplica_sett = explode(",",$moltiplica);
for ($num2 = 0 ; $num2 < count($settimane) ; $num2++) if ($settimane[$num2] == $num1) $moltiplica_corr = $moltiplica_sett[$num2];
} # fine if ($settimane_costo != str_replace(",$num1,","",$settimane_costo))
} # fine if ($dati_ca[$num_costo]['associasett'] == "s")
else $moltiplica_corr = $moltiplica;
$num_letti_agg[$num1] = $num_letti_agg[$num1] + $moltiplica_corr;

if (!empty($dati_cat_pers['num'])) {
if (strcmp((string) $catpers_ca,"")) $dati_ca[$num_costo]['cat_pers']['esist'][0] = 1;
else {
if (isset($dati_ca[$num_costo]['cat_pers']['ord'][0])) $catpers_ca = $dati_ca[$num_costo]['cat_pers']['ord'][0];
else $catpers_ca = 0;
} # fine else if (strcmp((string) $catpers_ca,""))
if (!isset($num_letti_agg['catp'][$num1])) $num_letti_agg['catp'][$num1] = "";
$num_letti_agg['catp'][$num1] .= " + $moltiplica_corr ";
if (!empty($dati_ca[$num_costo]['cat_pers']['esist'][0])) {
if ($moltiplica_corr > 1) $num_letti_agg['catp'][$num1] .= $dati_cat_pers[$catpers_ca]['n_plur'];
else $num_letti_agg['catp'][$num1] .= $dati_cat_pers[$catpers_ca]['n_sing'];
if (!isset($num_letti_agg['catp_tot'][$num1][$catpers_ca])) $num_letti_agg['catp_tot'][$num1][$catpers_ca] = 0;
$num_letti_agg['catp_tot'][$num1][$catpers_ca] += $moltiplica_corr;
if (empty($num_letti_agg['catp_tot_max'][$catpers_ca]) or $num_letti_agg['catp_tot'][$num1][$catpers_ca] > $num_letti_agg['catp_tot_max'][$catpers_ca]) $num_letti_agg['catp_tot_max'][$catpers_ca] = $num_letti_agg['catp_tot'][$num1][$catpers_ca];
} # fine if (!empty($dati_ca[$num_costo]['cat_pers']['esist'][0]))
else {
if (empty($num_letti_agg['catp_solo_esist'])) {
if ($moltiplica_corr > 1) $num_letti_agg['catp'][$num1] .= $dati_ca[$num_costo]['cat_pers'][0]['n_plur'];
else {
if (isset($dati_ca[$num_costo]['cat_pers'][0]['n_sing'])) $num_letti_agg['catp'][$num1] .= $dati_ca[$num_costo]['cat_pers'][0]['n_sing'];
else $num_letti_agg['catp'][$num1] .= $dati_cat_pers[$catpers_ca]['n_sing'];
} # fine else if ($moltiplica_corr > 1)
} # fine if (empty($num_letti_agg['catp_solo_esist']))
if (isset($dati_ca[$num_costo]['cat_pers'][0]['n_plur'])) $catpers_ca_corr = $dati_ca[$num_costo]['cat_pers'][0]['n_plur'];
else $catpers_ca_corr = $dati_cat_pers[$catpers_ca]['n_plur'];
if (!isset($num_letti_agg['catp_tot'][$num1]['ex'][$catpers_ca_corr])) $num_letti_agg['catp_tot'][$num1]['ex'][$catpers_ca_corr] = 0;
$num_letti_agg['catp_tot'][$num1]['ex'][$catpers_ca_corr] += $moltiplica_corr;
} # fine if (!empty($dati_ca[$num_costo]['cat_pers']['esist'][0]))
} # fine if (!empty($dati_cat_pers['num']))

if ($num_letti_agg[$num1] > $num_letti_agg['max']) {
$num_letti_agg['max'] = $num_letti_agg[$num1];
$num_letti_agg['sett_max'] = $num1;
} # fine if ($num_letti_agg[$num1] > $num_letti_agg['max'])
} # fine for $num1
} # fine if ($dati_ca[$num_costo]['letto'] == "s")

} # fine function aggiorna_letti_agg_in_periodi



function controlla_num_limite_costo ($tablecostiprenota,$tableprenota,$dati_ca,$num_costo,&$num_costi_presenti,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica,$num_limite = "",$tra_anni = "") {

$limite_rispettato = "SI";
if (fixstr($num_limite) == "") $num_limite = fixset($dati_ca[$num_costo]['numlimite']);
if ($num_limite) {
if (!empty($dati_ca[$num_costo]['idntariffe'])) $idcostoagg = $dati_ca[$num_costo]['idntariffe'];
else $idcostoagg = $dati_ca[$num_costo]['id'];
$num_costi_presenti_copia = $num_costi_presenti;
for ($num1 = $idinizioperiodo; $num1 <= $idfineperiodo; $num1++) {
$sett_attivata = "SI";
if ($dati_ca[$num_costo]['associasett'] == "s" and $settimane_costo == str_replace(",$num1,","",$settimane_costo)) $sett_attivata = "NO";
if ($sett_attivata == "SI") {
if (!isset($num_costi_presenti[$idcostoagg][$num1])) $num_costi_presenti[$idcostoagg][$num1] = num_costi_in_periodo($tablecostiprenota,$tableprenota,$num1,$idcostoagg,$dati_ca[$num_costo]['nome'],$dati_ca[$num_costo]['idprenota'],$tra_anni);
if ($dati_ca[$num_costo]['associasett'] == "s") {
if ($settimane_costo != str_replace(",$num1,","",$settimane_costo)) {
$settimane = explode(",",$settimane_costo);
$moltiplica_sett = explode(",",$moltiplica);
for ($num2 = 0 ; $num2 < count($settimane) ; $num2++) if ($settimane[$num2] == $num1) $moltiplica_sett = $moltiplica_sett[$num2];
} # fine if ($settimane_costo != str_replace(",$num1,","",$settimane_costo))
} # fine if ($dati_ca[$num_costo]['associasett'] == "s")
else $moltiplica_sett = $moltiplica;
if ($moltiplica_sett > 1) $num_costi_presenti[$idcostoagg][$num1] = $num_costi_presenti[$idcostoagg][$num1] + $moltiplica_sett;
else $num_costi_presenti[$idcostoagg][$num1]++;
if ($num_costi_presenti[$idcostoagg][$num1] > $num_limite) $limite_rispettato = "NO";
} # fine if ($sett_attivata == "SI")
} # fine for $num1
} # fine if ($num_limite)
if ($limite_rispettato == "NO") $num_costi_presenti = $num_costi_presenti_copia;

return $limite_rispettato;

} # fine function controlla_num_limite_costo



function dati_costi_agg_prenota ($tablecostiprenota,$id_prenota,$dati_cat_pers=array('num' => 0)) {

$costi = esegui_query("select * from $tablecostiprenota where idprenota = '$id_prenota' order by tipo, idcostiprenota");
$dati_cap['num'] = numlin_query($costi);
for ($numca = 0 ; $numca < $dati_cap['num'] ; $numca++) {
$dati_cap[$numca]['tipo'] = risul_query($costi,$numca,'tipo');
$dati_cap[$numca]['tipo_val'] = substr($dati_cap[$numca]['tipo'],1,1);
$dati_cap[$numca]['tipo'] = substr($dati_cap[$numca]['tipo'],0,1);
$dati_cap[$numca]['id'] = risul_query($costi,$numca,'idcostiprenota');
$dati_cap['id'][$dati_cap[$numca]['id']] = $numca;
$dati_cap[$numca]['nome'] = risul_query($costi,$numca,'nome');
$dati_cap[$numca]['valore'] = risul_query($costi,$numca,'valore');
if ($dati_cap[$numca]['tipo_val'] != "f") {
$dati_cap[$numca]['valore_perc'] = risul_query($costi,$numca,'valore_perc');
$dati_cap[$numca]['arrotonda'] = (double) risul_query($costi,$numca,'arrotonda');
} # fine if ($dati_cap[$numca]['tipo_val'] != "f")
$dati_cap[$numca]['tasseperc'] = (double) risul_query($costi,$numca,'tasseperc');
$dati_cap[$numca]['associasett'] = risul_query($costi,$numca,'associasett');
$numsett = risul_query($costi,$numca,'varnumsett');
$dati_cap[$numca]['numsett_orig'] = $numsett;
$dati_cap[$numca]['numsett'] = substr($numsett,0,1);
if ($dati_cap[$numca]['numsett'] == "m") $dati_cap[$numca]['sett_meno_una'] = substr($numsett,1,1);
if ($dati_cap[$numca]['numsett'] == "n" or $dati_cap[$numca]['numsett'] == "s") {
$sett_prime_seconde = explode(",",substr($numsett,1));
$dati_cap[$numca]['num_sett_prime'] = $sett_prime_seconde[0];
$dati_cap[$numca]['num_sett_seconde'] = $sett_prime_seconde[1];
} # fine if ($dati_cap[$numca]['numsett'] == "n" or $dati_cap[$numca]['numsett'] == "s")
if ($dati_cap[$numca]['numsett'] == "g") $dati_cap[$numca]['giornisett'] = substr($numsett,1);
$dati_cap[$numca]['moltiplica'] = risul_query($costi,$numca,'varmoltiplica');
$dati_cap[$numca]['cp_molt_int'] = strstr($dati_cap[$numca]['moltiplica'],"<");
if ($dati_cap[$numca]['cp_molt_int']) {
$catpers_molt = explode("<",$dati_cap[$numca]['moltiplica']);
$dati_cap[$numca]['moltiplica'] = $catpers_molt[0];
$dati_cap[$numca]['modo_cp_molt'] = $catpers_molt[1];
$dati_cap[$numca]['cp_molt']['num'] = (count($catpers_molt) - 2);
for ($num2 = 0 ; $num2 < $dati_cap[$numca]['cp_molt']['num'] ; $num2++) {
if ((string) $catpers_molt[($num2 + 2)] == "0") {
$dati_cap[$numca]['cp_molt']['ord'][$num2] = "0";
$dati_cap[$numca]['cp_molt'][0]['esist'] = ($num2 + 1);
} # fine if ((string) $catpers_molt[($num2 + 2)] == "0")
else {
$catpers_corr = explode(">",$catpers_molt[($num2 + 2)]);
$dati_cap[$numca]['cp_molt']['ord'][$num2] = $catpers_corr[0];
$dati_cap[$numca]['cp_molt'][$num2]['lang'] = $catpers_corr[1];
$dati_cap[$numca]['cp_molt'][$num2]['n_plur'] = $catpers_corr[2];
if (!empty($dati_cat_pers['num']) and $dati_cat_pers[$catpers_corr[0]]['langs'][$catpers_corr[1]]['n_p'] == $catpers_corr[2]) $dati_cap[$numca]['cp_molt'][$catpers_corr[0]]['esist'] = ($num2 + 1);
} # fine else if ((string) $catpers_molt[($num2 + 2)] == "0")
} # fine for $num2
} # fine if ($dati_cap[$numca]['cp_molt_int'])
$dati_cap[$numca]['molt_max'] = substr($dati_cap[$numca]['moltiplica'],1,1);
$molt_agg = explode(",",substr($dati_cap[$numca]['moltiplica'],2));
$dati_cap[$numca]['molt_agg'] = $molt_agg[0];
$dati_cap[$numca]['molt_max_num'] = fixset($molt_agg[1]);
$dati_cap[$numca]['moltiplica'] = substr($dati_cap[$numca]['moltiplica'],0,1);
$dati_cap[$numca]['letto'] = risul_query($costi,$numca,'letto');
if ($dati_cap[$numca]['letto'] == "p") {
$dati_cap[$numca]['letto'] = "s";
$dati_cap[$numca]['perc_catpers'] = "s";
} # fine ($dati_cap[$numca]['letto'] == "p")
else $dati_cap[$numca]['perc_catpers'] = "n";
if ($dati_cap[$numca]['letto'] == "s" and !empty($dati_cat_pers['num'])) {
$cat_pers = risul_query($costi,$numca,'cat_persone');
$dati_cap[$numca]['cat_pers'] = dati_cat_pers_p($cat_pers,-1,$dati_cat_pers,1);
} # fine if ($dati_cap[$numca]['letto'] == "s" and !empty($dati_cat_pers['num']))
$dati_cap[$numca]['beniinv_orig'] = risul_query($costi,$numca,'varbeniinv');
if ($dati_cap[$numca]['beniinv_orig']) {
$beniinv_vett = explode(";",$dati_cap[$numca]['beniinv_orig']);
$dati_cap[$numca]['beniinv_ripeti'] = $beniinv_vett[0];
$dati_cap[$numca]['tipo_beniinv'] = substr($beniinv_vett[1],0,3);
if ($dati_cap[$numca]['tipo_beniinv'] == "mag") $dati_cap[$numca]['mag_beniinv'] = substr($beniinv_vett[1],3);
$dati_cap[$numca]['num_beniinv'] = (count($beniinv_vett) - 2);
for ($num1 = 0 ; $num1 < $dati_cap[$numca]['num_beniinv'] ; $num1++) {
$bene_inv = explode(",",$beniinv_vett[($num1 + 2)]);
$dati_cap[$numca]['id_beneinv'][$num1] = $bene_inv[0];
$dati_cap[$numca]['molt_beneinv'][$num1] = $bene_inv[1];
} # fine for $num1
} # fine if ($dati_cap[$numca]['beniinv_orig'])
$dati_cap[$numca]['periodipermessi_orig'] = (string) risul_query($costi,$numca,'varperiodipermessi');
$dati_cap[$numca]['periodipermessi'] = substr($dati_cap[$numca]['periodipermessi_orig'],0,1);
if ($dati_cap[$numca]['periodipermessi']) {
$dati_cap[$numca]['sett_periodipermessi_ini'] = array();
$dati_cap[$numca]['sett_periodipermessi_fine'] = array();
$sett_periodipermessi = substr($dati_cap[$numca]['periodipermessi_orig'],1);
if ($sett_periodipermessi) {
$sett_periodipermessi = explode(",",$sett_periodipermessi);
$num2 = 0;
for ($num1 = 0 ; $num1 < count($sett_periodipermessi) ; $num1++) {
if ($sett_periodipermessi[$num1]) {
$sett_periodipermesso = explode("-",$sett_periodipermessi[$num1]);
$dati_cap[$numca]['sett_periodipermessi_ini'][$num2] = $sett_periodipermesso[0];
$dati_cap[$numca]['sett_periodipermessi_fine'][$num2] = $sett_periodipermesso[1];
$num2++;
} # fine if ($sett_periodipermessi[$num1])
} # fine for $num1
} # fine if ($sett_periodipermessi)
} # fine if ($dati_cap[$numca]['periodipermessi'])
$dati_cap[$numca]['settimane'] = (string) risul_query($costi,$numca,'settimane');
$dati_cap[$numca]['moltiplica_costo'] = risul_query($costi,$numca,'moltiplica');
if ($dati_cap[$numca]['associasett'] == "s") {
$sett = explode(",",$dati_cap[$numca]['settimane']);
$molt = explode(",",$dati_cap[$numca]['moltiplica_costo']);
for ($num1 = 1 ; $num1 < (count($sett) - 1) ; $num1++) $dati_cap[$numca]['moltiplica_costo_sett'][$sett[$num1]] = $molt[$num1];
} # fine if ($dati_cap[$numca]['associasett'] == "s")
$dati_cap[$numca]['idntariffe'] = risul_query($costi,$numca,'idntariffe');
$dati_cap[$numca]['appincompatibili'] = risul_query($costi,$numca,'varappincompatibili');
$dati_cap[$numca]['categoria'] = risul_query($costi,$numca,'categoria');
$dati_cap[$numca]['combina'] = (string) risul_query($costi,$numca,'variazione');
$dati_cap[$numca]['escludi_tot_perc'] = substr($dati_cap[$numca]['combina'],1,1);
$dati_cap[$numca]['combina'] = substr($dati_cap[$numca]['combina'],0,1);
$dati_cap[$numca]['tariffeassociate'] = (string) risul_query($costi,$numca,'vartariffeassociate');
$dati_cap[$numca]['tipo_tariffeassociate'] = substr($dati_cap[$numca]['tariffeassociate'],0,1);
$dati_cap[$numca]['tariffeassociate'] = substr($dati_cap[$numca]['tariffeassociate'],1);
$incomp_tariffe = (string) risul_query($costi,$numca,'vartariffeincomp');
$incomp_tariffe = explode(",",$incomp_tariffe);
for ($num1 = 0 ; $num1 < count($incomp_tariffe) ; $num1++) $dati_cap[$numca]["incomp_tariffa".$incomp_tariffe[$num1]] = "i";
$dati_cap[$numca]['idprenota'] = $id_prenota;
$dati_cap[$numca]['datainserimento'] = risul_query($costi,$numca,'datainserimento');
$dati_cap[$numca]['utente_inserimento'] = risul_query($costi,$numca,'utente_inserimento');
} # fine for $numca

return $dati_cap;

} # fine function dati_costi_agg_prenota



function associa_costo_a_tariffa ($dati_ca,$num_costo,$tariffa,$lunghezza_periodo) {

if ($dati_ca[$num_costo][$tariffa]) {
$associa_costo = "SI";
if (substr($dati_ca[$num_costo][$tariffa],0,1) == "=" and $lunghezza_periodo != substr($dati_ca[$num_costo][$tariffa],1)) $associa_costo = "NO";
if (substr($dati_ca[$num_costo][$tariffa],0,1) == ">" and $lunghezza_periodo < substr($dati_ca[$num_costo][$tariffa],1)) $associa_costo = "NO";
if (substr($dati_ca[$num_costo][$tariffa],0,1) == "<" and $lunghezza_periodo > substr($dati_ca[$num_costo][$tariffa],1)) $associa_costo = "NO";
if (substr($dati_ca[$num_costo][$tariffa],0,1) == "|") {
$valminmax = explode("<",substr($dati_ca[$num_costo][$tariffa],1));
if ($lunghezza_periodo < $valminmax[0] or $lunghezza_periodo > $valminmax[1]) $associa_costo = "NO";
} # fine if (substr($dati_ca[$num_costo][$tariffa],0,1) == "|")
} # fine if ($dati_ca[$num_costo][$tariffa])
else $associa_costo = "NO";

return $associa_costo;

} # fine function associa_costo_a_tariffa



function comunica_aggiunta_costo ($dati_ca,$num_costo,$n_prezzo_costo_agg,$stile_soldi,$pag,$Euro,$associasett_ca,$moltiplica,$settimane_costo,$per_la_prenotazione="",$silenzio="",$cat_pers="") {

global $parola_settimane,$parola_settimanale,$dati_cat_pers;
$mess = "";
$val_costoagg_p = punti_in_num($n_prezzo_costo_agg,$stile_soldi);
if ($dati_ca[$num_costo]['tipo'] == "u") $mess .= mex("Il costo aggiuntivo unico",$pag);
if ($dati_ca[$num_costo]['tipo'] == "s") $mess .= mex("Il costo aggiuntivo $parola_settimanale",$pag);
$mess .= " \"<b>".$dati_ca[$num_costo]['nome']."</b>\"";
if ($associasett_ca == "s") {
if (!@is_array($moltiplica) and strstr($moltiplica,",")) $moltiplica = explode(",",$moltiplica);
if (!@is_array($moltiplica)) $valnummoltiplica_ca = 1;
else {
$valnummoltiplica_ca = $moltiplica[1];
for ($num2 = 2 ; $num2 < (count($moltiplica) - 1) ; $num2++) if ($moltiplica[$num2] != $valnummoltiplica_ca) $valnummoltiplica_ca = 1;
} # fine else if (!@is_array($moltiplica))
} # fine if ($associasett_ca == "s")
else $valnummoltiplica_ca = $moltiplica;
if ($dati_ca[$num_costo]['tipo'] == "s") {
if ($associasett_ca == "n") $numsettimane = $settimane_costo;
else {
if ($settimane_costo) $numsettimane = count(explode(",",$settimane_costo)) - 2;
else $numsettimane = "0";
} # fine else if ($associasett_ca == "n")
} # fine if ($dati_ca[$num_costo]['tipo'] == "s")
else $numsettimane = "";
if ($valnummoltiplica_ca != 1 or strcmp((string) $numsettimane,"") or strcmp((string) $cat_pers,"")) {
$mess .= " (";
if (strcmp((string) $numsettimane,"")) $mess .= "$numsettimane ".mex("$parola_settimane",$pag);
if ($valnummoltiplica_ca != 1 or strcmp((string) $cat_pers,"")) {
if (strcmp((string) $numsettimane,"")) $mess .= " ";
if ($valnummoltiplica_ca == 1) $mess .= mex("moltiplicato per",$pag)." 1 <em>".$dati_cat_pers[$cat_pers]['n_sing']."</em>";
else {
$mess .= mex("moltiplicato per",$pag)." $valnummoltiplica_ca";
if (strcmp((string) $cat_pers,"")) $mess .= " <em>".$dati_cat_pers[$cat_pers]['n_plur']."</em>";
} # fine else if ($valnummoltiplica_ca == 1)
} # fine if ($valnummoltiplica_ca != 1 or strcmp((string) $cat_pers,""))
$mess .= ")";
} # fine if ($valnummoltiplica_ca != 1 or strcmp((string) $numsettimane,"") or strcmp((string) $cat_pers,""))
$mess .= " ".mex("verrà aggiunto",$pag)."$per_la_prenotazione: <b>$val_costoagg_p</b> $Euro.<br>";

if (!$silenzio) echo $mess;
else return $mess;

} # fine function comunica_aggiunta_costo



function calcola_ripetizioni_costo ($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica) {

$num_ripetizioni_costo = 0;
if ($dati_ca[$num_costo]['tipo'] == "u") $num_ripetizioni_costo = 1;
if ($dati_ca[$num_costo]['tipo'] == "s") {
if ($dati_ca[$num_costo]['associasett'] == "s") {
$num_sett = 1;
$moltiplica_sett = explode(",",$moltiplica);
for ($num1 = $idinizioperiodo ; $num1 <= $idfineperiodo ; $num1++) {
if (str_replace(",".$num1.",","",$settimane_costo) != $settimane_costo) {
$num_ripetizioni_costo = $num_ripetizioni_costo + $moltiplica_sett[$num_sett];
$num_sett++;
} # fine if (str_replace(",".$num1.",","",$settimane_costo) != $settimane_costo)
} # fine for $num1
$prezzo_costo = $prezzo_costo_tot;
} # fine if ($dati_ca[$num_costo]['associasett'] == "s")
else $num_ripetizioni_costo = $settimane_costo;
} # fine if ($dati_ca[$num_costo][tipo] == "s")
if ($dati_ca[$num_costo]['associasett'] != "s") $num_ripetizioni_costo = $num_ripetizioni_costo * $moltiplica;

return $num_ripetizioni_costo;

} # fine function calcola_ripetizioni_costo



function controlla_beni_inventario_costo ($tablerelinventario,$dati_ca,$num_costo,&$beniinv_presenti,&$num_ripetizioni_costo,$sottrai,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica,$idapp,$beniinv_ripeti="") {

$beni_presenti = "SI";
if ($dati_ca[$num_costo]['tipo_beniinv']) {
if (!strcmp((string) $num_ripetizioni_costo,"")) $num_ripetizioni_costo = calcola_ripetizioni_costo($dati_ca,$num_costo,$idinizioperiodo,$idfineperiodo,$settimane_costo,$moltiplica);
if (!strcmp((string) $beniinv_ripeti,"")) $beniinv_ripeti = fixset($dati_ca[$num_costo]['beniinv_ripeti']);
if ($beniinv_ripeti) $num_ripetizioni_costo_diff = $num_ripetizioni_costo - $beniinv_ripeti;
else $num_ripetizioni_costo_diff = $num_ripetizioni_costo;
if ($num_ripetizioni_costo_diff) {
$tipo_beniinv = $dati_ca[$num_costo]['tipo_beniinv'];
if ($tipo_beniinv == "mag") {
$tipo_beniinv .= $dati_ca[$num_costo]['mag_beniinv'];
$cond_mag = "idmagazzino = '".$dati_ca[$num_costo]['mag_beniinv']."'";
} # fine if ($tipo_beniinv == "mag")
if ($tipo_beniinv == "app") {
$tipo_beniinv .= $idapp;
$cond_mag = "idappartamento = '$idapp'";
} # fine if ($tipo_beniinv == "app")
for ($num1 = 0 ; $num1 < $dati_ca[$num_costo]['num_beniinv'] ; $num1++) {
$id_beneinv = $dati_ca[$num_costo]['id_beneinv'][$num1];
if (!isset($beniinv_presenti[$tipo_beniinv][$id_beneinv]) or !strcmp((string) $beniinv_presenti[$tipo_beniinv][$id_beneinv],"")) {
$beniinv_presenti[$tipo_beniinv][$id_beneinv] = 0;
$bip = esegui_query("select quantita from $tablerelinventario where idbeneinventario = '$id_beneinv' and $cond_mag ");
if (numlin_query($bip)) $beniinv_presenti[$tipo_beniinv][$id_beneinv] = risul_query($bip,0,'quantita');
else $beni_presenti = "NO";
} # fine if (!isset($beniinv_presenti[$tipo_beniinv][$id_beneinv]) or !strcmp((string) $beniinv_presenti[$tipo_beniinv][$id_beneinv],""))
$num_beni_tot = $num_ripetizioni_costo_diff * $dati_ca[$num_costo]['molt_beneinv'][$num1];
if (($beniinv_presenti[$tipo_beniinv][$id_beneinv] - $num_beni_tot) < 0) {
$beni_presenti = "NO";
break;
} # fine if (($beniinv_presenti[$tipo_beniinv][$id_beneinv] - $num_beni_tot) < 0)
elseif ($sottrai == "SI") $beniinv_presenti[$tipo_beniinv][$id_beneinv] = $beniinv_presenti[$tipo_beniinv][$id_beneinv] - $num_beni_tot;
} # fine for $num1
} # fine if ($num_ripetizioni_costo_diff)
} # fine if ($dati_ca[$num_costo]['tipo_beniinv'])

return $beni_presenti;

} # fine function controlla_beni_inventario_costo



function aggiorna_beniinv_presenti ($tablerelinventario,&$beniinv_presenti) {

if (!empty($beniinv_presenti)) {
reset($beniinv_presenti);
foreach ($beniinv_presenti as $tipo_beniinv => $val) {
$idmag = substr($tipo_beniinv,3);
$tipo_beneinv = substr($tipo_beniinv,0,3);
if ($tipo_beneinv == "mag") $cond_mag = "idmagazzino = '$idmag'";
else $cond_mag = "idappartamento = '".aggslashdb($idmag)."'";
$id_beniinv = $val;
foreach ($id_beniinv as $id_beneinv => $n_num_bene) {
esegui_query("update $tablerelinventario set quantita = '$n_num_bene' where idbeneinventario = '$id_beneinv' and $cond_mag ");
} # fine foreach ($id_beniinv as $id_beneinv => $n_num_bene)
} # fine foreach ($beniinv_presenti as $tipo_beniinv => $val)
} # fine if (!empty($beniinv_presenti))

} # fine function aggiorna_beniinv_presenti



function aggiorna_privilegi_ins_costo ($idntariffe,$tableprivilegi,$id_utente,$anno,$attiva_costi_agg_consentiti,$priv_ins_costi_agg,$utenti_gruppi,$q_utenti_costi_sel="") {

if ($attiva_costi_agg_consentiti != "n") {
$costi_agg_cons_int = esegui_query("select costi_agg_consentiti from $tableprivilegi where idutente = '$id_utente' and anno = '$anno' ");
$costi_agg_cons_int = risul_query($costi_agg_cons_int,0,"costi_agg_consentiti");
esegui_query("update $tableprivilegi set costi_agg_consentiti = '$costi_agg_cons_int,$idntariffe' where idutente = '$id_utente' and anno = '$anno' ");
} # fine if ($attiva_costi_agg_consentiti != "n")
if ($priv_ins_costi_agg == "g" or ($id_utente == 1 and $q_utenti_costi_sel)) {
if ($id_utente == 1 and !@is_array($utenti_gruppi)) {
if ($q_utenti_costi_sel == "q") {
global $LIKE;
$q_utenti_costi_sel = esegui_query("select * from $tableprivilegi where anno = '$anno' and costi_agg_consentiti $LIKE 's%' ");
} # fine if ($q_utenti_costi_sel == "q")
$utenti_gruppi = array();
for ($num1 = 0 ; $num1 < numlin_query($q_utenti_costi_sel) ; $num1++) $utenti_gruppi[risul_query($q_utenti_costi_sel,$num1,'idutente')] = 1;
} # fine if ($id_utente == 1 and !@is_array($utenti_gruppi))
reset($utenti_gruppi);
foreach ($utenti_gruppi as $idut_gr => $val) {
if ($idut_gr != $id_utente) {
$costi_agg_cons_int = esegui_query("select costi_agg_consentiti from $tableprivilegi where idutente = '$idut_gr' and anno = '$anno' ");
if (numlin_query($costi_agg_cons_int) == 1) {
$costi_agg_cons_int = risul_query($costi_agg_cons_int,0,'costi_agg_consentiti');
if (substr($costi_agg_cons_int,0,1) != "n") {
esegui_query("update $tableprivilegi set costi_agg_consentiti = '$costi_agg_cons_int,$idntariffe' where idutente = '$idut_gr' and anno = '$anno' ");
} # fine if (substr($costi_agg_cons_int,0,1) != "n")
} # fine if (numlin_query($costi_agg_cons_int) == 1)
} # fine if ($idut_gr != $id_utente)
} # fine foreach ($utenti_gruppi as $idut_gr => $val)
} # fine if ($priv_ins_costi_agg == "g" or ($id_utente == 1 and $q_utenti_costi_sel))

} # fine function aggiorna_privilegi_ins_costo





?>