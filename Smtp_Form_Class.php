<?php
class Smtp_Form_Class
{
    public function smtp_form_details()
    {
        $vcf7_smtp_host = get_option('vcf7_smtp_host');
        $vcf7_smtp_port = get_option('vcf7_smtp_port');
        $vcf7_smtp_ssl = get_option('vcf7_smtp_ssl');
        $vcf7_smtp_username = get_option('vcf7_smtp_username');
        $vcf7_smtp_pwd = get_option('vcf7_smtp_pwd');


        echo '<div class="captcha_details" id="captcha-integration">
                <h1>Integration SMTP Setting</h1>
                <div class="" id="recaptcha">
                    <div class="inside">
                        <form id="smtp_form" method="post" action="">
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="vcf7_smtp_host">SMTP Server</label>
                                        </th>
                                        <td>
                                            <input type="text" aria-required="true" value="'.$vcf7_smtp_host.'" id="vcf7_smtp_host" name="vcf7_smtp_host" class="regular-text code" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="vcf7_smtp_ssl">SSL/TLS</label>
                                        </th>
                                        <td>
                                            <input type="text" aria-required="true" value="'.$vcf7_smtp_ssl.'" id="vcf7_smtp_ssl" name="vcf7_smtp_ssl" class="regular-text code">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="vcf7_smtp_port">SMTP Port</label>
                                        </th>
                                        <td>
                                            <input type="text" aria-required="true" value="'.$vcf7_smtp_port.'" id="vcf7_smtp_port" name="vcf7_smtp_port" class="regular-text code">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="vcf7_smtp_username">Username</label>
                                        </th>
                                        <td>
                                            <input type="text" aria-required="true" value="'.$vcf7_smtp_username.'" id="vcf7_smtp_username" name="vcf7_smtp_username" class="regular-text code">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="vcf7_smtp_pwd">Password</label>
                                        </th>
                                        <td>
                                            <input type="password" aria-required="true" value="'.$vcf7_smtp_pwd.'" id="vcf7_smtp_pwd" name="vcf7_smtp_pwd" class="regular-text code">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="submit">
                                <input type="submit" id="submit" class="button button-primary" value="Save">
                                <input type="button" id="reset" class="button button-primary" value="Reset" onclick="smtp_reset()">
                            </p>
                            <span class="success_msg">Setting Saved.</span>
                        </form>
                    </div>
                </div>
            </div>';
    }
}
?>