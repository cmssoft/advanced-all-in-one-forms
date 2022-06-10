<?php
namespace AdvancedAllInOneForms;
if (!defined( 'ABSPATH')) exit;
if (!class_exists( 'AAIOF_Mailform')){
    class AAIOF_Mailform {
        public function mail_sent_format($params,$vcfid){
            try{   
                /** Start get mail, body **/
                $mail_data = unserialize(get_post_meta( $vcfid, 'vcf_mail_data', true));
                $mail_data2 = unserialize(get_post_meta( $vcfid, 'vcf_mail_data2', true));
                $body_data = get_post_meta( $vcfid, 'vcf_body_data', true);
                $body_data2 = get_post_meta( $vcfid, 'vcf_mail_body2', true);

                /** End get mail, body and SMTP data **/
                if(empty($body_data)){
                    $mailResult = 1;
                }else{
                    foreach($params as $key=>$value){
                        if(is_array($value)){
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
                    
                    $headers = array();
                    $headers[] = 'From: '.$from;
                    $headers[] = 'Content-Type: text/html; charset=UTF-8';

                    if($replyto != ''){
                        $replytoion = nl2br($replyto);
                        $replytoion = explode('<br />',$replytoion);
                        foreach($replytoion as $reply)
                        {
                            $labelcc = explode(':',$reply);
                            $addname = $labelcc[0];
                            $addval = $labelcc[1];

                            if($addname == 'cc' || $addname == 'Cc' || $addname == 'CC' || $addname == 'AddCC' || $addname == 'Addcc' || $addname == 'AddCc' || $addname == 'addCC')
                            {
                                $headers[] = 'Cc: '.$email;
                            }
                            if($addname == 'bcc' || $addname == 'Bcc' || $addname == 'BCC' || $addname == 'AddBCC' || $addname == 'Addbcc' || $addname == 'AddBcc' || $addname == 'addCC')
                            {
                                $headers[] = 'Bcc: '.$email;
                            }
                            if($addname == 'ReplyTo' || $addname == 'replyto' || $addname == 'reply-to' || $addname == 'Reply-To' || $addname == 'Replyto' || $addname == 'replyTo')
                            {
                                $headers[] = 'Reply-To: '.$email;
                            }
                        }
                    }
                
                    $toemail = explode(",",$to);
                    
                    if($mail_data2['active'] == 1){
                        $to1 = $mail_data2['recipient'];
                        $to1 = str_replace($col_name, $col_val ,$mail_data2['recipient']);
                        $from1 = str_replace($col_name, $col_val ,$mail_data2['sender']);
                        $subject1 = str_replace($col_name, $col_val ,$mail_data2['subject']);
                        $replyto1 = str_replace($col_name, $col_val ,$mail_data2['additional_headers']);
                        $content1 = str_replace($col_name, $col_val ,$body_data2);
                        $attachments1 = $mail_data2['attachments'];

                        $headers1 = array();
                        $headers1[] = 'From: '.$from1;
                        $headers1[] = 'Content-Type: text/html; charset=UTF-8';

                        if($replyto1 != ''){
                            $replytoion = nl2br($replyto1);
                            $replytoion = explode('<br />',$replytoion);
                            foreach($replytoion as $reply){
                                $labelcc = explode(':',$reply);

                                $addname = $labelcc[0];
                                $addval = $labelcc[1];

                                if($addname == 'cc' || $addname == 'Cc' || $addname == 'CC' || $addname == 'AddCC' || $addname == 'Addcc' || $addname == 'AddCc' || $addname == 'addCC')
                                {
                                    $headers1[] = 'Cc: '.$email;
                                }
                                if($addname == 'bcc' || $addname == 'Bcc' || $addname == 'BCC' || $addname == 'AddBCC' || $addname == 'Addbcc' || $addname == 'AddBcc' || $addname == 'addCC')
                                {
                                    $headers1[] = 'Bcc: '.$email;
                                }
                                if($addname == 'ReplyTo' || $addname == 'replyto' || $addname == 'reply-to' || $addname == 'Reply-To' || $addname == 'Replyto' || $addname == 'replyTo')
                                {
                                    $headers1[] = 'Reply-To: '.$email;
                                }
                            }
                        }
                        if(!empty($attachments1)){
                            if (file_exists(WP_CONTENT_DIR . '/uploads/contact_form/'.$params['file']) && $params['file']!=""){
                                $attachments1 = array(WP_CONTENT_DIR . '/uploads/contact_form/'.$params['file']);
                                $mailResult = wp_mail($to1, $subject1, $content1, $headers1, $attachments1);
                            }else{
                                $mailResult = wp_mail($to1, $subject1, $content1, $headers1);    
                            }
                        }else{
                            $mailResult = wp_mail($to1, $subject1, $content1, $headers1);
                        }
                    }

                    if(!empty($attachments)){
                        if (file_exists(WP_CONTENT_DIR . '/uploads/contact_form/'.$params['file']) && $params['file']!=""){
                            $attachments1 = array(WP_CONTENT_DIR . '/uploads/contact_form/'.$params['file']);
                            $mailResult = wp_mail($toemail, $subject, $content, $headers, $attachments1);
                        }else{
                            $mailResult = wp_mail($toemail, $subject, $content, $headers);    
                        }
                    }else{
                        $mailResult = wp_mail($toemail, $subject, $content, $headers);
                    }
                }
            }
            catch (Exception $e)
            {
                $mailResult = "Mailer Error: " . $e->getMessage();
            }            
            return $mailResult;
        }
    }
}