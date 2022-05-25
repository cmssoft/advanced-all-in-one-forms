<?php
class Mail_Form_Class
{
    public function mail_sent_format($params,$vcfid)
    {

        require_once "PHPMailer/class.phpmailer.php";
        require_once "PHPMailer/class.smtp.php";

        /** Start get mail, body and SMTP data **/
        $mail_data = unserialize(get_post_meta( $vcfid, 'vcf_mail_data', true));
        $mail_data2 = unserialize(get_post_meta( $vcfid, 'vcf_mail_data2', true));
        $body_data = get_post_meta( $vcfid, 'vcf_body_data', true);
        $body_data2 = get_post_meta( $vcfid, 'vcf_mail_body2', true);


        


        $vcf7_smtp_host = get_option('vcf7_smtp_host');
        $vcf7_smtp_port = get_option('vcf7_smtp_port');
        $vcf7_smtp_ssl = get_option('vcf7_smtp_ssl');
        $vcf7_smtp_username = get_option('vcf7_smtp_username');
        $vcf7_smtp_pwd = get_option('vcf7_smtp_pwd');

         /** End get mail, body and SMTP data **/
        if(empty($body_data) || empty($vcf7_smtp_host) || empty($vcf7_smtp_port) || empty($vcf7_smtp_ssl) || empty($vcf7_smtp_username) || empty($vcf7_smtp_pwd))
        {
            $mailResult = 1;

            //die();
        }
        else
        {

       // die();

        foreach($params as $key=>$value)
        {
            if(is_array($value))
            {
                $value = implode( ", ", $value);
            }
            $col_name[] = '['.$key.']';
            $col_val[] = $value;
        }

        $to = $mail_data['recipient'];
        $attachments = $mail_data['attachments'];
        $content = str_replace($col_name, $col_val ,$body_data);
        $from = str_replace($col_name, $col_val ,$mail_data['sender']);
        $subject = str_replace($col_name, $col_val ,$mail_data['subject']);
        $replyto = str_replace($col_name, $col_val ,$mail_data['additional_headers']);

        $headers = array('From: '.$from.'','Content-Type: text/html; charset=UTF-8','Reply-To: '.$replyto.'');


        $mail = new PHPMailer(true);

       // $mail->SMTPDebug = 3;                               
        
        $mail->isSMTP();            
        $mail->Host = $vcf7_smtp_host;
        $mail->SMTPAuth = true;                          
        $mail->Username = $vcf7_smtp_username;                 
        $mail->Password = $vcf7_smtp_pwd;                           
        $mail->SMTPSecure = $vcf7_smtp_ssl;                           
        $mail->Port = $vcf7_smtp_port;                                   

        $mail->From = "test@gmail.com";
        $mail->FromName = $from;
        //$mail->headers = $headers;

        if($replyto != '')
        {
            $replytoion = nl2br($replyto);
            $replytoion = explode('<br />',$replytoion);
            foreach($replytoion as $reply)
            {
                $labelcc = explode(':',$reply);

                $addname = $labelcc[0];
                $addval = $labelcc[1];

                if($addname == 'cc' || $addname == 'Cc' || $addname == 'CC' || $addname == 'AddCC' || $addname == 'Addcc' || $addname == 'AddCc' || $addname == 'addCC')
                {
                    $mail->addCC($addval);
                }
                if($addname == 'bcc' || $addname == 'Bcc' || $addname == 'BCC' || $addname == 'AddBCC' || $addname == 'Addbcc' || $addname == 'AddBcc' || $addname == 'addCC')
                {
                    $mail->addBCC($addval);
                }
                if($addname == 'ReplyTo' || $addname == 'replyto' || $addname == 'reply-to' || $addname == 'Reply-To' || $addname == 'Replyto' || $addname == 'replyTo')
                {
                    $mail->addReplyTo($addval, "Reply");
                }
            }
        }
        
        $toemail = explode( ",",$to);
        foreach($toemail as $tomail)
        {
            $mail->addAddress($tomail,'');
        }

        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = $content;


        if(!empty($attachments))
        {
            $file_to_attach = '../wp-content/uploads/contact_form/'.$params['file'];
            $mail->AddAttachment( $file_to_attach , $params['file'] );
        }

       if($mail_data2['active'] == 1)
        {

            $to1 = $mail_data2['recipient'];
            $to1 = str_replace($col_name, $col_val ,$mail_data2['recipient']);
            $from1 = str_replace($col_name, $col_val ,$mail_data2['sender']);
            $subject1 = str_replace($col_name, $col_val ,$mail_data2['subject']);
            $replyto1 = str_replace($col_name, $col_val ,$mail_data2['additional_headers']);
            $content1 = str_replace($col_name, $col_val ,$body_data2);
            $attachments1 = $mail_data2['attachments'];

            $mail1 = new PHPMailer(true);

            $mail1->isSMTP();            
            $mail1->Host = $vcf7_smtp_host;
            $mail1->SMTPAuth = true;                          
            $mail1->Username = $vcf7_smtp_username;                 
            $mail1->Password = $vcf7_smtp_pwd;                           
            //If SMTP requires TLS encryption then set it
            $mail1->SMTPSecure = $vcf7_smtp_ssl;                           
            //Set TCP port to connect to
            $mail1->Port = $vcf7_smtp_port;                                   

            $mail1->From = "test@gmail.com";


             if($replyto1 != '')
            {
                $replytoion = nl2br($replyto1);
                $replytoion = explode('<br />',$replytoion);
                foreach($replytoion as $reply)
                {
                    $labelcc = explode(':',$reply);

                    $addname = $labelcc[0];
                    $addval = $labelcc[1];

                    if($addname == 'cc' || $addname == 'Cc' || $addname == 'CC' || $addname == 'AddCC' || $addname == 'Addcc' || $addname == 'AddCc' || $addname == 'addCC')
                    {
                        $mail1->addCC($addval);
                    }
                    if($addname == 'bcc' || $addname == 'Bcc' || $addname == 'BCC' || $addname == 'AddBCC' || $addname == 'Addbcc' || $addname == 'AddBcc' || $addname == 'addCC')
                    {
                        $mail1->addBCC($addval);
                    }
                    if($addname == 'ReplyTo' || $addname == 'replyto' || $addname == 'reply-to' || $addname == 'Reply-To' || $addname == 'Replyto' || $addname == 'replyTo')
                    {
                        $mail1->addReplyTo($addval, "Reply");
                    }
                }
            }


            $mail1->FromName = $from1;

            $mail1->addAddress($to1,'');

            $mail1->isHTML(true);

            $mail1->Subject = $subject1;
            $mail1->Body = $content1;


            if(!empty($attachments1))
            {
                $file_to_attach1 = '../wp-content/uploads/contact_form/'.$params['file'];
                $mail1->AddAttachment( $file_to_attach1 , $params['file'] );
            }
           
            $mail1->send();
            
        }

        try
        {
            
            $mail->send();
            $mailResult = 1;
        }
        catch (Exception $e)
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
           // echo "Mailer Error: " . $mail1->ErrorInfo;
        }

    }

       return $mailResult;
    }
}
?>