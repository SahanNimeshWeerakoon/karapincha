<?php
/**
 * Raise investment
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
add_action('wp_ajax_startupsFormSubmit', 'startupsFormSubmit');
add_action('wp_ajax_nopriv_startupsFormSubmit', 'startupsFormSubmit');

// startupsFormSubmit Function
function startupsFormSubmit() {

    require THEME_FUNCTIONS.'/PHPMailer/src/Exception.php';
    require THEME_FUNCTIONS.'/PHPMailer/src/PHPMailer.php';
    require THEME_FUNCTIONS.'/PHPMailer/src/SMTP.php';

    if($_POST){

        $data = $_POST;

        $message = '<html><body>';

        $message .= '<h2>Investment Request from '.$data['startupname'].'</h2>';
        $message .= '<p><b>Domains</b> : '.implode(', ', $data['domains']).'</p>';
        $message .= '<p><b>Startup name</b> : '.$data['startupname'].'</p>';
        $message .= '<p><b>Web Address</b> : '.$data['webaddress'].'</p>';
        $message .= '<p><b>Is your startup registered?</b> : '.$data['is_registered'].'</p>';

        $message .= '<hr />';

        $message .= '<h3>Team Details</h3>';
        $message .= '<p><b>Team</b> : '.implode(', ', $data['team']).'</p>';
        $message .= '<p><b>Founder availability</b> : '.implode(', ', $data['founder_availability']).'</p>';

        $message .= '<hr />';

        $message .= '<h3>Primary Contact Person</h3>';
        $message .= '<p><b>Name</b> : '.$data['primary_contact_name'].'</p>';
        $message .= '<p><b>Email</b> : '.$data['primary_contact_email'].'</p>';
        $message .= '<p><b>Mobile</b> : '.$data['primary_contact_mobile'].'</p>';

        $message .= '<hr />';

        $message .= '<h3>Type of the startup</h3>';
        $message .= '<p><b>What is the problem you’re trying to solve?</b> : '.$data['problem_trying_to_solve'].'</p>';
        $message .= '<p><b>Why are you (startup) the one to solve this problem?</b> : '.$data['why_you'].'</p>';
        $message .= '<p><b>Have you launched your product?</b> : '.$data['is_launched'].'</p>';

        $message .= '<hr />';

        $message .= '<h3>What was your last 3 months revenue like (LKR)?</h3>';
        $message .= '<p><b>Month 1</b> : '.$data['month_revenue_1'].'</p>';
        $message .= '<p><b>Month 2</b> : '.$data['month_revenue_2'].'</p>';
        $message .= '<p><b>Month 3</b> : '.$data['month_revenue_3'].'</p>';
        $message .= '<p><b>Do you have financial records to prove the above?</b> : '.$data['financial_recs'].'</p>';
        $message .= '<p><b>What is your monthly Burn Rate?</b> : '.$data['monthly_burn_rate'].'</p>';
        $message .= '<p><b>Anything else we should know about?</b> : '.$data['more_comments'].'</p>';

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
        $mail->addReplyTo($data['primary_contact_email'], $data['primary_contact_name']);
        $mail->isHTML(true);
        $mail->Subject = 'Investment Request from '.$data['startupname'];
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