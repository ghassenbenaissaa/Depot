<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('../config/connect.php');
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$email=$_POST['email'];
$reponse = $db->query("SELECT * FROM clients where email='$email'");
while ($donnees = $reponse->fetch())
{ 
        $nom=$donnees['nom'];
        $prenom=$donnees['prenom'];
        $ddn=$donnees['ddn'];
        $email=$donnees['email'];
        $telephone=$donnees['telephone'];
        $sexe=$donnees['sexe'];
        $adresse=$donnees['adresse'];
        $mmdp=rand(11111, 99999);
        $image=$donnees['image'];
        $point_carb=$donnees['point_carb'];
        $mdp = password_hash($mmdp, PASSWORD_DEFAULT);
        $Rq = $db->prepare('INSERT INTO clients (nom,prenom,ddn,sexe,email,adresse,mdp,telephone,image,point_carb) VALUES(?,?,?,?,?,?,?,?,?,?) ');
        $Rq->execute([$nom,$prenom,$ddn,$sexe,$email,$adresse,$mdp,$telephone,$image,$point_carb]);
}
$reponse = $db->query("SELECT * FROM livreurs where email_li='$email'");
while ($donnees = $reponse->fetch())
{ 
        $nom=$donnees['nom_li'];
        $prenom=$donnees['prenom_li'];
        $ddn=$donnees['ddn_li'];
        $email=$donnees['email_li'];
        $telephone=$donnees['telephone_li'];
        $sexe=$donnees['sexe_li'];
        $cin_li=$donnees['cin_li'];
        $permis=$donnees['permis_li'];
        $tdv=$donnees['tdv_li'];
        $adresse=$donnees['adresse_li'];
        $mmdp=rand(11111, 99999);
        $image=$donnees['image_li'];
        $mdp = password_hash($mmdp, PASSWORD_DEFAULT);
        $Rq = $db->prepare('INSERT INTO livreurs (nom_li,prenom_li,ddn_li,sexe_li,cin_li,permis_li,tdv_li,email_li,adresse_li,mdp_li,telephone_li,image_li) VALUES(?,?,?,?,?,?,?,?,?,?,?,?) ');
        $Rq->execute([$nom,$prenom,$ddn,$sexe,$cin_li,$permis,$tdv,$email,$adresse,$mdp,$telephone,$image]);
}

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username ='zenith.depot.groupe@gmail.com';

$mail->Password ='titbgfdtwjnadmbu';
$mail->SMTPSecure ='ssl';
$mail->Port = 465;
$mail->setFrom('zenith.depot.groupe@gmail.com');//Yourgmail
$mail->addAddress($email);
$mail->isHTML (true);
$mail->Subject = 'Felicitation';
$mail->Body ="<!DOCTYPE html>

<html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
<head>
<title></title>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<!--[if !mso]><!-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
<!--<![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		@media (max-width:670px) {

			.desktop_hide table.icons-inner,
			.social_block.desktop_hide .social-table {
				display: inline-block !important;
			}

			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.image_block img.big,
			.row-content {
				width: 100% !important;
			}

			.mobile_hide {
				display: none;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body style='background-color: #f4f3ee; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
<table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f4f3ee;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;' width='650'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='0' cellspacing='0' class='image_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
<div align='center' class='alignment' style='line-height:10px'><a href='https://www.example.com/' style='outline:none' tabindex='-1' target='_blank'><img alt='Placeholder logo' src='https://lh3.googleusercontent.com/-JJCpuUafoOJTyC5R3sWB4HxALH9maOaiV-EEQ48iPNMAKl4UiLYpsHRuARktp_M57ONxIccNMhlkaUurPDTx1E36WSw34jX6f1fSKYUgrUYUn414wRwbkUE3UPvPve2ZPkXgAVw5sNsJ6KXkuU5lCvBUuUiKEELHrUwWzM0Y6D-tgzMWuZ9yfZDiSBaXBlNCcyBrjk_mKdjGhDAaBz6viwm2CxwiDfYZTWth3b3ENGB-GUETU0UgYiWj2Opf6pcbtDGQmDlBl5zbXF5TcM-Z5EXhlmdXWfZq_4o1IzWQ-tSueaBbpPvGOm9LE7XF9--ncoYA0oNIlNFCLRz1j_Iu5YjRPLfh14wNCXAUpXkZ8h69bPqwnHcWTF4ehj0NjtFkY-wqyMd9pDfEXEi0ueFari7Dvtsp1-kyVd8231l58u_QjiU_kwqQqLqezOyT_fgPvx7ut8N7cRY4Nnu_ZSsyUEJ4_1atsRqv-bw0cu-NTBQG2OFPAmaWPltu3UlvTzWbcAYFgDcZTq8grooMu9mjk6k3SPI1qB6WcHqBlMQW524DF2c4XJi8b_K503nEPPZXENqKP5FBSWR_Y53fjVUi6iBZ5kYN-gM-uwfXhDdf6LyVeL9HiTcHZcKiLKUZ5ODty5b5pFPcxFaOggPYpphrlPygX-c5gDfAszU8TkN_8WYAaHiixQdV8ZxKFcqdU58E6IVP2YUxQW2Zvtn-HAciclc0MY5ztrNZpaQTJvnR7_BX6Agb5OKA_A9yRCXEX3s0Wi2-HRhjYcxGIecoi7FJPWsdJOpwGk5pTjo5aIr19nceru1ek3PxaWM__YrR35AVFAJTrSR7Wh1AbTj9Q6pR9rlWEpSSS9orhN9CMXC5kI-I5bH0VLnctQZHxEenY6AtDEnjn9vXGZEUQYugloJgHBNt4EA74PiS0hyb9khjiOO=w272-h145-no?authuser=0' style='display: block; height: auto; border: 0; width: 343px; max-width: 100%;' title='' width='343'/></a></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eccfa8; color: #000000; width: 650px;' width='650'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='0' cellspacing='0' class='text_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
<tr>
<td class='pad' style='padding-left:10px;padding-right:10px;padding-top:40px;'>
<div style='font-family: Arial, sans-serif'>
<div class='' style='font-size: 14px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 16.8px; color: #010000; line-height: 1.2;'>
<p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:42px;'><strong>Les affaires de bons sens<br/></strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='text_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
<tr>
<td class='pad' style='padding-left:10px;padding-right:10px;padding-top:10px;'>
<div style='font-family: Tahoma, Verdana, sans-serif'>
<div class='' style='font-size: 14px; font-family: Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 16.8px; color: #010000; line-height: 1.2;'>
<p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:24px;'><span style=''><span style='font-size:24px;'>Echange </span></span><span style=''><span style='font-size:24px;'>et Depot</span></span></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='text_block block-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
<tr>
<td class='pad' style='padding-bottom:10px;padding-left:35px;padding-right:35px;padding-top:30px;'>
<div style='font-family: Tahoma, Verdana, sans-serif'>
<div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #010000; line-height: 1.2; font-family: 'Lato', Tahoma, Verdana, Segoe, sans-serif;'>
<p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='font-size:15px;'>Bonjour, Bienvenue parmi nous cher(e) $nom, votre compte a ete cree avec succes.

 <p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='font-size:15px;'>Nous vous souhaitons la bienvenue a Depot et nous vous informons que:</p>
 <p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='font-size:15px;'>-Votre mot de passe est: $mmdp</p>
 <p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='font-size:15px;'>Bonne journee!</p>

 </div>
 </div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='0' cellspacing='0' class='button_block block-7' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='pad' style='padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;text-align:center;'>
 <div align='center' class='alignment'>
 
 <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
 </div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='0' cellspacing='0' class='image_block block-9' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;padding-top:15px;'>
 
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tbody>
 <tr>
 <td>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eccfa8; color: #000000; width: 650px;' width='650'>
 <tbody>
 <tr>
 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
 <table border='0' cellpadding='0' cellspacing='0' class='text_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
 <tr>
 <td class='pad' style='padding-bottom:5px;padding-left:10px;padding-right:10px;'>
 <div style='font-family: Tahoma, Verdana, sans-serif'>
 <div class='' style='font-size: 14px; font-family: Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 16.8px; color: #010000; line-height: 1.2;'>
 <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'></p>
 <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><u><span style='font-size:24px;'>Premier concept Tunisien</span></u></p>
 </div>
 </div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='0' cellspacing='0' class='text_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
 <tr>
 <td class='pad' style='padding-bottom:15px;padding-left:20px;padding-right:10px;'>
 <div style='font-family: Tahoma, Verdana, sans-serif'>
 <div class='' style='font-size: 14px; font-family: 'Lato', Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 16.8px; color: #000000; line-height: 1.2;'>
 <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:18px;'>Tout se troque et s echange pour avoir des points d economie de carbone les points d economie de carbone vous permet d avoir des livraisons gratuites et des autres cadeaux.</span></p>
 </div>
 </div>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tbody>
 <tr>
 <td>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eccfa8; color: #000000; width: 650px;' width='650'>
 <tbody>
 <tr>
 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
 <table border='0' cellpadding='0' cellspacing='0' class='html_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='pad'>
 <div align='center' style='font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;text-align:center;'><div style='height:30px;'></div></div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='10' cellspacing='0' class='text_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
 <tr>
 <td class='pad'>
 <div style='font-family: sans-serif'>
 <div class='' style='font-size: 12px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #010000; line-height: 1.2;'>
 <p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='font-size:16px;'>Contactez nous:</span></p>
 </div>
 </div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='0' cellspacing='0' class='social_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='pad' style='text-align:center;padding-right:0px;padding-left:0px;'>
 <div align='center' class='alignment'>
 <table border='0' cellpadding='0' cellspacing='0' class='social-table' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;' width='168px'>
 <tr>
 <td style='padding:0 5px 0 5px;'><a href='' target='_blank'><img alt='Facebook' height='32' src='https://lh3.googleusercontent.com/yqSUUApr29B7vO0ff3SGvZq2kYAKuGVeuNcpvWIE0ftW7f1lB-dZChgztl1NmsaO1SucXqcJ2MlHZTkCAUQLdpUdeYisF8R2eA-ZKuGwyBhl1W4aeYP8ERSQFAY4XptFj3ROKXctvNfY6I1uFhevEZ1XouEMltc8TFr8hJJKX-1-zZ2gv84RQ4WM9boXAQPWlgatuQ6eKJiV5kCE5gTvFf0ovUkw54Z7rdEfvffh8iWbnIAY-Oi1_dTh5tKpozGMI81e5dnZRLW5t2DIdzF6V7uEJRErfQ7BdAIrLL4KMl1OIBvPyGyyYPF8JLv-ZbzIVsvsMAmMLRiX1hacGPx2x8P7wUSHjLmWiiP3rxMDP14hm8t3FLvVhAxhPYbtbhT6veSbV6gXA6GvUlt2WCBL4PqkhJffHTo5U8kLoGvmo6RG_3f8xOyRUxo0AjRfIVLnO9FFgmHYEtvrzv65BTfYJ_mAgNPDuwL1OG1-hvrGlBEwrLvJYDmM8schRresHrgb281zF1cgJEbyOlPZufEXxa0nJoGNmBsOZFyqssHb7l3gWSbenReIBV0NchTAWoBVZWM0JLmrprEMOH_LL3SGF7b5eXkeCsN7IUOa-y4enJhAUDFXyBQ021AKX8Dtrfk9oDy1BZPpgioy02FLclM0L4s-_AhKQ6rIsswa5j1pOJslBtHIJ2GWROWxrLboyd0-jtBKRvDykC-CpOTzN3kYsDPqjCOnOpR3ZTChH_1tqKFpQ_5SQ_Z2Q55ecS00C9QQrsncEAnssaE1NV7BBy8XX-KQcsKtcvN3P_QllCHdCk2KnVa0480uGJHe4ezNN2Yyk84gn179HqX4yvywMC0mugMIivnvapfq4KbKoU_Q1zIX-jxVCQgk3xfifcyewb2PwwM32WWhGWHZ7q7T8Wi_XeifIGoWdTinSqXlcARBSX_W=w24-h42-no?authuser=0' style='display: block; height: auto; border: 0;' title='Facebook' width='32'/></a></td>
 <td style='padding:0 5px 0 5px;'><a href='' target='_blank'><img alt='Twitter' height='32' src='https://lh3.googleusercontent.com/XMQbft2ScdvfDJMCojkKc1MLXRZhp2ns6kAYPVhm3DBLHtvjAoz-_UuyUusdUl4TzaT7JbzjkTDlfq80pd9XwJevVTG9wbJnrZwNzl5WDBYf-17aachoOQoU-JqKKJWPRIU3brmAFggaHEDPOfc3Ns4yPS9A3aDpqwH-4ibRdbprSkMkhhGzMBb-TXUkpIpHk04L6_YlnOXRbnOG8yHCYXUsaTB54X4jDc7SH1QxJjAWdhJXd71mHQNYrU-uwsV1h9pSc1Ri5ZZgjQ1XOVsEKKyfWITctRjSPBUSwu7GuZLXX7-R3hA_EIuTP1eYfBamOv8e1ACb-zWjBsG_17Gscjte1OoHx6rZMlAfKXxbC_TGr3q730H3SULRUxuL4jrb23bPL_YezQBKHxgByk0nzOGXqWSRuT2zdcm9-uJXPDu-RfyIzYipUIZ36QhaV-4YIHKaWnIy0dZ1TQUcpiEcKCyEKRAY7QTCkdTJgjugnyvIX__Kz8jwS2GgIaouv7RdCfilupM_HPC9HECLckjvMIIkZqGBjiGOrUH7qoVRkZPCXJZFC_tGCDWhszdxavUrcU7rR0Ep95xYfJGLaCbmzyxFDewGiIrdRR8vDUHpgd-1eMyRd_1SVcW-u1rdAZIgygxse2uMvNcbJzU2zzKYe6iRjYmZMu4zMZwoXUNco1r-MgSW1jo5qZHJfp46pw-NkBGQUo2aoMCYC6TaG4zQmZbatboGbgXQrlclFwwqcx2w3JJBH7DRlCcNbQGqtNAcEEb7SFAm3UBHavqQ16B8RXGXC-IGSMWLVclwbSUgAzmjbvZj2hE_ttaXRfp4pHSJsrvYWzH1kHCrbjkRYI9uvQqgkbLwhU4Lz1iY6ecG5cj0i6kB1IR94nbdjjb02xmfoXYHp78MrCFxLTI-0sYFMc500JK3u-a9cOGOfcYvg3pA=w36-h34-no?authuser=0' style='display: block; height: auto; border: 0;' title='Twitter' width='32'/></a></td>
 <td style='padding:0 5px 0 5px;'><a href='' target='_blank'><img alt='Google+' height='32' src='https://lh3.googleusercontent.com/CwGRpSLQ8NkDlE9x-p3JDTmlh3MUqihd-p3CGIXrHZHhhBfqUy2xHg4a-6-n78En2PaP7vdGIE77w4WfKA4myUHCpiAzywLsu0FUvHPzOwhwEujzKWxPgWxZeJ3jWF1XsW_qt9YX_W97R5-XCV3e3s8jQM-Jd4V5-Dv73bVPZL5oaQ-eujfiC9V0bMhhBq93Nmw1Yi35yY-y0wUy_ZmRDKv0C7yNR2QLTNf9Qp85kr5x-D7QSNey-j9l5ece97fGGsXna_3u0o-vPRnxqMUwl8-dfg-8v037vQ2Ym0aRk_HXzyje6c4uCbrO5pisUJnBt4QVWXggz0HvV8mE5pVxx3TkUhPI6rAU1kbvF9JQfadNvtXsAE0NA9FDofP2NUNNjssEq68CBsECMYR0bFWH3ZlO30UKQTeWXyWVv-C3c_3KQWeYvLTP9n6LXM71Kh7d-BloM10RdvxXfSbzF19oQH--x3tHQH4QLL_xyk9Z_eVRz7Z7gbK9jMvRNsXh6mmk5F677C8vWEwiP7rVIFYwdx9UA_7Q1ifRFo6nFrww7m2EGSwavSbjgJCNEjlDlALh3FH4I-5iKrksOa7ue-QtHDaiEqU9yVa1ieoLifpwIYpn9q-UzKe4R6FDSvqddmet3YdEhY6IH5rjwzdoxMtOS1Vb-qzP8pzEXe1lhWHz8HKJTL2OIfP-YBHacrAHtFo7-izDGZgOK6dhXpS-wxBiUqxDciaQeCGvmbI47gEZPY-bcUvkZUIQRepOqnRsfQ3dcmQBJDke_M3J-bGiKfCzi46UEvUz7GMcrrlyPSFpp3BIaYKEsPMegpzZy38ShihXFMScRHlR4R2Vm3Tj66NNaD0H2B1a1BsN_oD_peWsHiCHBODAAQ_cCn7Ygf61G7bbuq_VR260PT8h-MnsZJJYO4B4pARC1kYq5mBxUk1i0CtE=w45-h32-no?authuser=0' style='display: block; height: auto; border: 0;' title='Google+' width='32'/></a></td>
 <td style='padding:0 5px 0 5px;'><a href='' target='_blank'><img alt='Instagram' height='32' src='https://lh3.googleusercontent.com/H-A82Xe9Slc3mYC4FojioCyEj8coacbbh-ro2bB4VeleabR9jKABk80Rx-vI_wNg6KaO7eM7oYAWk2KtDNey5AwqUlaF5VTcZFZlAVWFxyYYA4jqaK_HbiXw9tL7XJYiUvnBnREgtdPDziVG8aIv_MJdUh43x1ejGXH5OiDaPlvyYYdHNYfVoJcUKbkTzjMZU6ePj4lTe7sZzH5a07aZ43tVvHD9I2W3mfdZiqtNmnnnsUTA7P59-PWGAfUX4AO7zwWF16XGwzSv4EGYbQjqfLgDnNmgJSVzz7N_sKAnJxv1pxkRbB3NOZBXvnQ95F8lIAWI4Tb_V7z-mI8fC_dKdKLEQOEIC5xu1U4nS9XnChqkknRn8k5eRWdoRkyTBdbw8LFYY30Ye8TY0gNHzJgBgTm-VKR4jeG14Xzcp5DRCzBP4vgpfYXkA_HvpZTJtt3_2Q3plG-c4nqWs3nL1PpoizQu8-zrZz88BV7mDPEHSwmnmBIW3pVy7KF3BS3tONi1iGqk9NUecH5X6mH4jL1O6gyFQQGgcn6zdt_oU6TDhlQmA9Y-Lq4dnP5tBSX9rlpOp2ThkWKW2isTenziuzux4PF71qVUh2jrIzGp4VasIzEH3ZfAgqALv82JeGr1U2VPxOehULnH78If05hxFlQEhkb1JzC4OKkoaEWCOKTMSzpPutGQz-7PZwyYAm4-Q-GHA9343efIoRP5a4yyId-e-nDueFDXsJOw_SVIAsKnVtXjVfChh6fOhPqOVkIGcqW49PouIZrQlxOqd3l_B1inhetwhg-ESsaUk3fIpMnhu1xoxUb--qLffL2xA9ER1mE22WGTrPD3KyieoIaRiBSOydPS4hJEZrtXgxY_V9Afi0pJdfEnEo3DXmhXFAi9ingJcS8xP0BAD0rhb-S1o2n4NOvMQtcauJrcU8ydCpv9XFrM=w42-h43-no?authuser=0' style='display: block; height: auto; border: 0;' title='Instagram' width='32'/></a></td>
 </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
 <table border='0' cellpadding='0' cellspacing='0' class='text_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
 <tr>
 <td class='pad' style='padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:25px;'>
 <div style='font-family: sans-serif'>
 <div class='' style='font-size: 12px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #010000; line-height: 1.2;'>
 <p style='margin: 0; text-align: center; font-size: 14px; mso-line-height-alt: 16.8px;'><span style='font-size:14px;'>Copyright 2022 Depot, tout les droits sont reserves.</span></p>
 <p style='margin: 0; text-align: center; font-size: 14px; mso-line-height-alt: 16.8px;'>N.B: Ceci est un mail automatique Merci de ne pas repondre.</p>
 <p style='margin: 0; text-align: center; font-size: 14px; mso-line-height-alt: 14.399999999999999px;'></p>
 <p style='margin: 0; text-align: center; font-size: 14px; mso-line-height-alt: 16.8px;'>DEPOT Zone Industrielle Chotrana II - BP 160 - Pole Technologique EL GHAZALA - 2083 - Ariana</p>
 </div>
 </div>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tbody>
 <tr>
 <td>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eccfa8; color: #000000; width: 650px;' width='650'>
 <tbody>
 <tr>
 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
 <div class='spacer_block' style='height:15px;line-height:15px;font-size:1px;'></div>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-6' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tbody>
 <tr>
 <td>
 <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;' width='650'>
 <tbody>
 <tr>
 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
 <table border='0' cellpadding='0' cellspacing='0' class='icons_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
 <table cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
 <tr>
 <td class='alignment' style='vertical-align: middle; text-align: center;'>
 <!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
 <!--[if !vml]><!-->
 <table cellpadding='0' cellspacing='0' class='icons-inner' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;'>
 <!--<![endif]-->
 <tr>
 <td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='https://www.designedwithbee.com/' style='text-decoration: none;' target='_blank'><img align='center' alt='Designed with BEE' class='icon' height='32' src='https://lh3.googleusercontent.com/NYS-XzcaUyeywO8vpKjxQHpAFs_SRUj_BZauQUaXTJeX-m3M2HZjkYKgMfDInv708qRiA4Y8uTvBz7jfdXo0kk-lo98flRsM5yDtv0SiJg7q-rsYuPvapUmQajQrEWFl-meVjFVK0yjj7lxq-Dv0VL-FOfXYO7Tegp-SgGIkX72YQoR6CE3qEXYiHMeaPmGQpTH-Z7D75IUtjI4krW0zdVx_r2OTsWJhlkm4x9NZtky6-BRpkuBOjNzgw5yoiXTI_w00UoejJQ1w6iz3qImvtk-jUY5d-Fqgtllc38wYizJ8SYdJ3OQBb2TKPsa89Ehu98XrQF8WadXAhdgWglf44t26MtoergkvjgdbtyrfQreaZX39GRITCzdJAAANfyQvzcE8LEESs__CV6dlmqvmGoAwWY5QIcZzyEGTSBuHujnX4GQGzLJmiTsN-46R5Wf8zcVyqxv4Q9D3iuv5fUY2euOqM5rNO6yXhepV9OataridYEYMZPsvcjt7m7YU2zoxNLPn72dTIdEzlW9gSXyH0fdF0zu560vZtqUCh64I8_yMLVkDHCFbZOPr5NEb09t-HI2Ync0JXx7RYMlOkrHmazEXKQmuMTcpRDwu_srpmKF2rSHhSBrEX9WTQrhTNrHswjZ4NtA41h4tu3uK--6nIj0bLR-mov_rD6PsrE1jPLcxJsX7rB7UFmXmNL_BYVN7L15IhRAPO1IJ_LVnfk4I6o4XtuGXwHHIIGCK9v7bCsGfwS5vKEHx9cUhvvViezPriKX_bMdGEluKeFPj-7hgOuZdpdj1-KwXX3xW8BNOwSdqb6WVDxzYB1zoGrH5Yb-BaUI5Y6O2NNTxDHDEWqSXavEgVFPwFBSuCzl44zhczumSpKRTWCq_T_OtSpfkz3owHKZw7Bch3xwdPV08Rk8NWvvgGWKxFCR0JQTrNFsv6HYN=w365-h347-no?authuser=0' style='display: block; height: auto; margin: 0 auto; border: 0;' width='34'/></a></td>
 <td style='font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='https://www.designedwithbee.com/' style='color: #9d9d9d; text-decoration: none;' target='_blank'>Designed with BEE</a></td>
 </tr>
 </table>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table>
 </td>
 </tr>
 </tbody>
 </table><!-- End -->
 </body>
 </html>";
$mail->send();

 header ("location:../views/se_connecter.php?mail=vérifiez votre boîte mail!");

?>
