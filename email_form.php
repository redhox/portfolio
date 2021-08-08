<?php
require 'vueform.php';

//$m_send correspond à l'email envoyé sur la boite mail

$m_send = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'; 
$m_send .= '<html xmlns="http://www.w3.org/1999/xhtml">'; 

$m_send .= '<head>';
$m_send .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$m_send .= '<title>Confirmation de votre message</title>';    
$m_send .= '<style type="text/css">body {margin: 0; padding: 0; min-width: 100%!important;} img {height: auto;} .content {width: 100%; max-width: 600px;} .header {padding: 40px 30px 20px 30px; background-image: url("cid:bg" );} .innerpadding {padding: 30px 30px 30px 30px;} .borderbottom {border-bottom: 1px solid #f2eeed;} .subhead {font-size: 15px; color: #153643; font-family: sans-serif; letter-spacing: 10px;} .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;} .h1 {font-size: 33px; line-height: 38px; font-weight: bold;} .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;} .bodycopy {font-size: 16px; line-height: 22px;} .footer {padding: 20px 30px 15px 30px;} .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;} .footercopy a {color: #ffffff; text-decoration: underline;} @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {body[yahoo] .hide {display: none!important;} body[yahoo] .buttonwrapper {background-color: transparent!important;}}/*@media only screen and (min-device-width: 601px) {.content {width: 600px !important;}.col425 {width: 425px!important;}.col380 {width: 380px!important;}}*/</style>'; 
$m_send .= '</head>'; 
$m_send .= '<body yahoo bgcolor="#f6f8f1">'; 
$m_send .= '<table width="100%" bgcolor="#f6f8f1"  border="0" cellpadding="0" cellspacing="0">'; 
$m_send .= '<tr><td><!--[if (gte mso 9)|(IE)]><table width="600" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';      
$m_send .= '<table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">'; 
$m_send .= '<tr><td bgcolor="#c7d8a7" class="header">'; 
$m_send .= '<table width="70" align="left" border="0" cellpadding="0" cellspacing="0" style="margin-top: 35px;">'; 
$m_send .= '<tr><td height="70" style="padding: 0 20px 20px 0;"><img class="fix" alt="" title="" src="https://www.schoolofweb.tech/Morgan_C/template_email/mail.png" width="50" height="50" border="0" /></td></tr>';
$m_send .= '</table><!--[if (gte mso 9)|(IE)]><table width="425" align="left" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';
$m_send .= '<table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">';  
$m_send .= '<tr><td height="70">';
$m_send .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_send .= '<tr><td class="subhead" style="padding: 0 0 0 3px;">Morgan coulm</td></tr>';
$m_send .= '<tr><td class="h1" style="padding: 5px 0 0 0;">Votre r&eacute;capitulatif </td></tr>';
$m_send .= '</table>';
$m_send .= '</td></tr>';
$m_send .= '</table> <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_send .= '</td></tr>';
$m_send .= '<tr><td class="innerpadding borderbottom">';
$m_send .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_send .= '<tr><td class="h2">Bonjour'." ".' '.$nom." ".$prenom.',</td></tr>';
$m_send .= '<tr><td class="bodycopy">Bonne nouvelle votre message a &eacute;t&eacute; envoy&eacute; ! Je vous pr&eacute;sente ici un r&eacute;capitulatif du formulaire de contact. <br> Vous &ecirc;tes <strong>'." ".' '.$nom." ".$prenom.'.</strong><br>Votre adresse email est la suivante : <strong>'.$courriel.'</strong> <br> Votre num&eacute;ro de t&eacute;l&eacute;phone est le suivant : <strong>'.$telephone.'</strong> <br>Le sujet de votre demande : <strong>'.$categorie.'</strong></td></tr>';
$m_send .= '</table>';
$m_send .= '</td></tr>';
$m_send .= '<tr><td class="innerpadding borderbottom">';
$m_send .= '<table width="115" align="left" border="0" cellpadding="0" cellspacing="0">';  
$m_send .= '<tr><td height="115" style="padding: 0 20px 20px 0;"><img class="fix" src="https://www.schoolofweb.tech/Morgan_C/template_email/paper.png" width="115" height="115" border="0" alt=""  title=""/></td></tr>';
$m_send .= '</table><!--[if (gte mso 9)|(IE)]><table width="380" align="left" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->';
$m_send .= '<table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">';  
$m_send .= '<tr><td>';
$m_send .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_send .= '<tr><td class="h2">Votre message :</td></tr>';
$m_send .= '<tr><td class="bodycopy">'.$message.'</td></tr>';
$m_send .= '</table>';
$m_send .= '</td></tr>';
$m_send .= '</table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_send .= '<tr><td class="innerpadding bodycopy">'.$usage.'</td></tr>';
$m_send .= '<tr><td class="footer" bgcolor="#44525f">';
$m_send .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
$m_send .= '<tr><td align="center" class="footercopy">&copy; 2020 Tous droits r&eacute;serv&eacute;s Morgan COULM <br/><a href="https://www.schoolofweb.tech/Morgan_C/" ><font color="#ffffff">Mon site web</font></a> </td></tr>';
$m_send .= '<tr><td align="center" style="padding: 20px 0 0 0;">';
$m_send .= '<table border="0" cellspacing="0" cellpadding="0">';
//$m_send .= '<tr><td width="37" style="text-align: center; padding: 0 10px 0 10px;"><a href="http://www.facebook.com/"><img src="facebook.svg" width="37" height="37" alt="Facebook" title="" border="0" /></a></td>';
//$m_send .= '<td width="37" style="text-align: center; padding: 0 10px 0 10px;"><a href="http://www.twitter.com/"><img src="twitter.png" width="37" height="37" alt="Twitter" title="" border="0" /></a></td></tr>';
$m_send .= '</table>';
$m_send .= '</td></tr>';
$m_send .= '</table>';
$m_send .= '</td></tr>';
$m_send .= '</table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->';
$m_send .= '</td></tr>';
$m_send .= '</table>';
$m_send .= '</body></html>';
?>