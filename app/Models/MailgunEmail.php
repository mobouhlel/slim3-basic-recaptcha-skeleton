<?php

namespace Base\Models;

use Base\Constructor\BaseConstructor;
use Http\Adapter\Guzzle6\Client;
use Mailgun\Mailgun;
use PHPMailer;

class MailgunEmail extends BaseConstructor {

	public function sendEmailWithApi($to, $subject, $body) {
        $client	= new Client();
		$mailgun = new Mailgun($this->config->get('mailgun.apikey'), $client);
		$domain = $this->config->get('mailgun.domain');
	
		$builder = $mailgun->MessageBuilder();
		$builder->setFromAddress($this->config->get('mailgun.from'));
		$builder->addToRecipient($to);
		$builder->setSubject($subject);
		//$builder->setHtmlBody($body);
		$builder->setTextBody($body);
		
		return $mailgun->post("{$domain}/messages", $builder->getMessage());
    }
	
	public function sendEmailWithSmtp($to, $from, $subject, $body) {
		require __DIR__ . '/../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		$mail->IsHTML(false);
		$mail->isSMTP();
		$mail->Host = $this->config->get('mailgun.host');
		$mail->SMTPAuth = true;
		$mail->Username = $this->config->get('mailgun.username');
		$mail->Password = $this->config->get('mailgun.password');
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->From = $from;
		$mail->addAddress($to);
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->send();
	}
	
}
