<?php
require 'vueform.php';

//$m_confirm correspond à la fênetre de confirmation une fois le message envoyé

$m_confim = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'; 
$m_confim .= '<html xmlns="http://www.w3.org/1999/xhtml">'; 

$m_confim .= '<head>';
$m_confim .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$m_confim .= '<title>Confirmation de votre message</title>';
$m_confim .= '<meta http-equiv="refresh" content="5;URL=https://www.schoolofweb.tech/Morgan_C/">';  
$m_confim .= '<style type="text/css">body {margin: 0; padding: 0; min-width: 100%!important;} img {height: auto;} .content {width: 100%; max-width: 600px;} .header {padding: 40px 30px 20px 30px;} .innerpadding {padding: 30px 30px 30px 30px;} .borderbottom {border-bottom: 1px solid #f2eeed;} .subhead {font-size: 15px; color: #153643; font-family: sans-serif; letter-spacing: 10px;} .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;} .h1 {font-size: 33px; line-height: 38px; font-weight: bold;} .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;} .bodycopy {font-size: 16px; line-height: 22px;} .footer {padding: 20px 30px 15px 30px;} .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;} .footercopy a {color: #ffffff; text-decoration: underline;} @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {body[yahoo] .hide {display: none!important;} body[yahoo] .buttonwrapper {background-color: transparent!important;}}/*@media only screen and (min-device-width: 601px) {.content {width: 600px !important;}.col425 {width: 425px!important;}.col380 {width: 380px!important;}}*/</style>'; 
$m_confim .= '</head>'; 
$m_confim .= '<body yahoo bgcolor="#f6f8f1">'; 
$m_confim .= '<table width="100%" bgcolor="#f6f8f1"  border="0" cellpadding="0" cellspacing="0">'; 
$m_confim .= '<tr><td><!--[if (gte mso 9)|(IE)]><table width="600" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';      
$m_confim .= '<table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">'; 
$m_confim .= '<tr><td bgcolor="#c7d8a7" class="header">'; 
$m_confim .= '<table width="70" align="left" border="0" cellpadding="0" cellspacing="0" >'; 
$m_confim .= '<tr><td height="70" style="padding: 0 20px 20px 0;"><img class="fix" alt="" title="" src="'.$logo_mail.'" width="70" height="70" border="0" /></td></tr>';
$m_confim .= '</table><!--[if (gte mso 9)|(IE)]><table width="425" align="left" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';
$m_confim .= '<table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">';  
$m_confim .= '<tr><td height="70">';
$m_confim .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_confim .= '<tr><td class="subhead" style="padding: 0 0 0 3px;">Morgan COULM</td></tr>';
$m_confim .= '<tr><td class="h1" style="padding: 5px 0 0 0;">Votre r&eacute;capitulatif </td></tr>';
$m_confim .= '</table>';
$m_confim .= '</td></tr>';
$m_confim .= '</table> <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_confim .= '</td></tr>';
$m_confim .= '<tr><td class="innerpadding borderbottom">';
$m_confim .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_confim .= '<tr><td class="h2">Bonjour '." ".' '.$nom." ".$prenom.',</td></tr>';
$m_confim .= '<tr><td class="bodycopy">Bonne nouvelle votre message a &eacute;t&eacute; envoy&eacute; ! Je vous pr&eacute;sente ici un r&eacute;capitulatif du formulaire de contact. <br> Vous &ecirc;tes <strong>'." ".' '.$nom." ".$prenom.'.</strong><br>Votre adresse email est la suivante : <strong>'.$courriel.'</strong> <br> Votre num&eacute;ro de t&eacute;l&eacute;phone est le suivant : <strong>'.$telephone.'</strong>  <br>Le sujet de votre demande : <strong>'.$categorie.'</strong></td></tr>';
$m_confim .= '</table>';
$m_confim .= '</td></tr>';
$m_confim .= '<tr><td class="innerpadding borderbottom">';
$m_confim .= '<table width="115" align="left" border="0" cellpadding="0" cellspacing="0">';  
$m_confim .= '<tr><td height="115" style="padding: 0 20px 20px 0;"><img class="fix" src="'.$logo_paper.'" width="115" height="115" border="0" alt=""  title=""/></td></tr>';
$m_confim .= '</table><!--[if (gte mso 9)|(IE)]><table width="380" align="left" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';
$m_confim .= '<table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">';  
$m_confim .= '<tr><td>';
$m_confim .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_confim .= '<tr><td class="h2">Votre message :</td></tr>';
$m_confim .= '<tr><td class="bodycopy">'.$message.'</td></tr>';
$m_confim .= '</table>';
$m_confim .= '</td></tr>';
$m_confim .= '</table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_confim .= '<tr><td class="innerpadding bodycopy">'.$usage.'</td></tr>';
$m_confim .= '<tr><td class="footer" bgcolor="#44525f">';
$m_confim .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_confim .= '<tr><td align="center" class="footercopy">&copy; 2020 Tous droits r&eacute;serv&eacute;s Morgan COULM <br/><a href="https://www.schoolofweb.tech/Morgan_C/" ><font color="#ffffff">Mon site web</font></a> </td></tr>';
$m_confim .= '<tr><td align="center" style="padding: 20px 0 0 0;">';
$m_confim .= '<table border="0" cellspacing="0" cellpadding="0">';
//$m_confim .= '<tr><td width="37" style="text-align: center; padding: 0 10px 0 10px;"><a href="http://www.facebook.com/"><img src="facebook.svg" width="37" height="37" alt="Facebook" title="" border="0" /></a></td>';
//$m_confim .= '<td width="37" style="text-align: center; padding: 0 10px 0 10px;"><a href="http://www.twitter.com/"><img src="/images/twitter.png" width="37" height="37" alt="Twitter" title="" border="0" /></a></td></tr>';
$m_confim .= '</table>';
$m_confim .= '</td></tr>';
$m_confim .= '</table>';
$m_confim .= '</td></tr>';
$m_confim .= '</table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_confim .= '</td></tr>';
$m_confim .= '</table>';
$m_confim .= '</body></html>';

?>