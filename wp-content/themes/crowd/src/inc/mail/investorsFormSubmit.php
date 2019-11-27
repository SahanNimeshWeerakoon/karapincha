<?php
/**
 * investorsFormSubmit
 * 
 * @package   	Amplifyn WordPress Module
 * @subpackage 	karapincha
 * @since   	2.0
 * @version   	2.0
 * @author    	Kasun Harshana <@skyyalone>
 * @copyright 	Copyright (c) 2017, Amplifyn (pvt) Ltd.
 * @link      	http://amplifyn.com/karapincha
 * @license   	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or header('Location: /');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Registering AJAX WP Function
add_action('wp_ajax_investorsFormSubmit', 'investorsFormSubmit');
add_action('wp_ajax_nopriv_investorsFormSubmit', 'investorsFormSubmit');

// investorsFormSubmit Function
function investorsFormSubmit() {

    require THEME_FUNCTIONS.'/PHPMailer/src/Exception.php';
    require THEME_FUNCTIONS.'/PHPMailer/src/PHPMailer.php';
    require THEME_FUNCTIONS.'/PHPMailer/src/SMTP.php';

    if($_POST){

        $data = $_POST;

        $message = '<html><body>';

        $message .= '<h2>Investor Request from '.$data['first_name'].' '.$data['last_name'].'</h2>';
        $message .= '<p><b>Interested Domains</b> : '.implode(', ', $data['domains']).'</p>';
        $message .= '<p><b>Email Address</b> : '.$data['email_address'].'</p>';
        $message .= '<p><b>Mobile Number</b> : '.$data['mobile_number'].'</p>';
        $message .= '<p><b>LinkedIn URL</b> : '.$data['linkedin'].'</p>';
        $message .= '<p><b>Country</b> : '.$data['country'].'</p>';
        $message .= '<p><b>Have you invested in startups before?</b> : '.$data['has_invested'].'</p>';
        $message .= '<p><b>How many hours can you commit per week (Hours)?</b> : '.$data['commitment_hours'].'</p>';
        $message .= '<p><b>What is your minimum investment per company (LKR)?</b> : '.$data['minimum_investment'].'</p>';
        $message .= '</body></html>';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = MAILER_SMTP_EMAIL_ADDRESS;
        $mail->Password = MAILER_SMTP_EMAIL_PASSWORD;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom(MAILER_FROM_EMAIL, MAILER_FROM_NAME);
        $mail->addAddress(MAILER_TO_EMAIL, MAILER_TO_NAME);
        $mail->addReplyTo($data['email_address'], $data['email_address']);
        $mail->isHTML(true);
        $mail->Subject = 'Investor Request from '.$data['first_name'].' '.$data['last_name'];
        $mail->Body    = $message;

        if(!$mail->send()) {
            $res = array(
                'class' => 'error', 
                'message' => 'Sorry, Request couldn\'t be made due to a system error.', 
            );
            echo json_encode($res);
        } else {
            $res = array(
                'class' => 'success', 
                'message' => 'Your Request Has been made. We\'ll contact you ASAP.' ,
                'html' => '<span class="success-img"><img src="'.THEME_ICONS.'/success.svg" /></span>',
            );
            echo json_encode($res);
        }

        // $res = array(
        //     'class' => 'success', 
        //     'message' => 'Your Request Has been made. We\'ll contact you ASAP.', 
        //     'html' => '<span class="success-img"><img src="'.THEME_ICONS.'/success.svg" /></span>', 
        // );
        // echo json_encode($res);
    }

    wp_die();
}