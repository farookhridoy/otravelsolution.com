<?php
namespace App\Http\Helpers;

use Swift_Attachment;
use Swift_Mailer;
use Swift_SendmailTransport;
use Swift_SmtpTransport;

class SendMail
{
    /**
     * @param string $to
     * @param string $subject
     * @param string $body
     * @param string $attachment
     * @return int
     */
    public static function fire($to, $subject, $body, $attachment)
    {
      $transport = new \Swift_SmtpTransport('send.one.com', '465', 'ssl');
      $transport->setUsername('info@otravelsolution.com');
      $transport->setPassword('welcome2021');
      $transport->setStreamOptions(array('' => array('allow_self_signed' => true,"verify_peer_name"=>false, 'verify_peer' => false)));
      $message = new \Swift_Message();
      $message->setTo($to);
      $message->setSubject($subject);
      $message->setBody($body, 'text/html');
      $message->setFrom('info@otravelsolution.com', 'OTravel Solution');
      $mailer = new \Swift_Mailer($transport);
      $result = $mailer->send($message, $failedRecipients);

      return $result;
    }



}