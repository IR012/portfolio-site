<div class="bg-secondary">
        <section id="contact">
            <div class="container">
                <div class="title"><h1>Contact Me</h1></div>
                <?php 
                    echo clean_input($_SERVER["PHP_SELF"]); 
                    echo isset($_SERVER["REQUEST_METHOD"]);
                    echo $_SERVER["REQUEST_METHOD"];
                    //print_r($_SERVER);
                ?>
                <form action="<?= preg_replace("/index.php/", "", clean_input($_SERVER["PHP_SELF"])) . "#contact"; ?>" method="post">
                    <?php 

                        echo $_SERVER["REQUEST_METHOD"];
                        echo $_POST["submit"];
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        use PHPMailer\PHPMailer\Exception;

                        $username = $email = $message = "";
                        $error_field = array("username"=>false, "email"=>false, "message"=>false);
                        $form_complete = false;

                        //require_once __DIR__.'/email_response_template.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

                            $username = clean_input($_POST["username"]);
                            $email = clean_input($_POST["email"]);
                            $message = clean_input($_POST["message"]);

                            $_POST = array("notification-close" => '"'.$notificationClose.'"');

                            if ($username == "") {
                                $error_field["username"] = true;
                            }
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $error_field["email"] = true;
                            }
                            if ($message == "") {
                                $error_field["message"] = true;
                            }
                            if (!$error_field["username"] && !$error_field["email"] && !$error_field["message"]) {
                                $form_complete = true;
                            }
                        }	

                        if ($form_complete) {
                            echo "\nForm complete";
                            //require __DIR__.'/contact_info.php';  //<-- Move out of if{} block
                            echo "\nAfter first require";
                            //Create an instance; passing `true` enables exceptions
                            $mail = new PHPMailer(true);
                            echo "\nAfter new PHPMailer object";
                            try {
                                echo "\nIn first try";
                                //Server settings
                                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                              //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                         //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                     //Enable SMTP authentication
                                $mail->Username   = $myEmail;                                 //SMTP username
                                $mail->Password   = $myPass;                                  //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;              //Enable implicit TLS encryption
                                $mail->Port       = 465;                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                            
                                //Recipients
                                $mail->setFrom($email, $username);    
                                $mail->addAddress($myEmail);                                  //Add a recipient //Name is optional
                            
                                //Content
                                $mail->isHTML(true);                                          //Set email format to HTML
                                $mail->Subject = 'Website contact form message from:'.$username.' <'.$email.'>';
                                $mail->Body    = '<p style="color:blue;">From: '.$email.'</p><br/><p>'.wordwrap($message, 70, "\r\n").'</p>';
                                $mail->AltBody = 'From: '.$email.'\n\n'.wordwrap($message, 70, "\r\n");
                                echo "\nBefore send";
                                if ($mail->send()) {
                                    echo "\nAfter send in if";
                                    $email_status_message = '<p style="font-family: Arial, Helvetica, sans-serif;font-size: 1.5rem;color: green;padding-top: 5px;">Your message has been sent, I will be in touch as soon as possible.</p>';
                                    //Set up confirmation email
                                    //Create an instance; passing `true` enables exceptions
                                    $mail_res = new PHPMailer(true);
                                    try {
                                        echo "\nIn second try";
                                        //Server settings
                                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                        $mail_res->isSMTP();                                          //Send using SMTP
                                        $mail_res->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                        $mail_res->SMTPAuth   = true;                                 //Enable SMTP authentication
                                        $mail_res->Username   = $myEmail;                             //SMTP username
                                        $mail_res->Password   = $myPass;                              //SMTP password
                                        $mail_res->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
                                        $mail_res->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                    
                                        //Recipients
                                        $mail_res->setFrom($mail->Username, 'Ikbaal Rehal');
                                        $mail_res->addAddress($email, $username);                    //Add a recipient //Name is optional
                                        
                                        //Content
                                        //require __DIR__.'/email_response_template.php'; //<-- Move out of if{} block
                                        echo "\nAfter second require";

                                        $mail_res->isHTML(true);    //Set email format to HTML
                                        $mail_res->Subject = 'Automated confirmation: Your message has been received';
                                        //$mail_res->Body    = $email_body_HTML.$email_signature_HTML.'<p style="color:red;">'.wordwrap($message, 70, "\r\n").'</p>';
                                        $mail_res->Body    = "Body";
                                        //$mail_res->AltBody = $email_body_alt."\n\n".wordwrap($message, 70, "\r\n");
                                        $mail_res->AltBody    = "AltBody";
                                        echo "\nBefore second send";
                                        $mail_res->send();
                                        echo "\nEnd of second try";
                                        }
                                    catch (Exception $e) {
                                        echo "\nIn second catch";
                                        echo '<script>console.log(Confirmation of message receipt could not be sent. Mailer Error: {'.$mail_res->ErrorInfo.'})<script>'; 
                                    }
                                }

                                $username = "";
                                $email = "";
                                $message = "";
                                echo "\nEnd of first try";
                            } catch (Exception $e) {
                                echo "\nIn second catch";
                                $email_status_message = '<p style="font-family: Arial, Helvetica, sans-serif;font-size: 1.5rem;color: green;padding-top: 5px;">"Email delivery error: Message could not be sent."</p>'; 
                                //echo '<script>console.log(Message could not be sent. Mailer Error: {'.$mail->ErrorInfo.'})<script>';
                                $mail->ErrorInfo;
                            }
                                
                        }
                        echo "\nBefore form";
                    ?>
                    
                    <label for="fname">Name</label>
                    <?php 
                        echo "\nUsername";
			            if ($error_field["username"]) {input_error("username");}; 
		            ?>
                    <input type="text" id="fname" name="username" placeholder="Name" value="<?= $username ?? "" ?>">
                    <label for="email">E-mail</label>
                    <?php 
                        echo "\nEmail";
			            if ($error_field["email"]) {input_error("email");}; 
		            ?>
                    <input type="email" id="email" name="email" placeholder="email@example.com" value="<?= $email ?? "" ?>">
                    <label for="message">Message</label>
                    <?php
                        echo "\nMessage"; 
			            if ($error_field["message"]) {input_error("message");}; 
		            ?>
                    <textarea id="message" name="message" placeholder="Type your message here" value="<?= $message ?? "" ?>"><?= $message ?? "" ?></textarea>
                    <input type="hidden" id="notification-close" name="notification-close" value="<?= $notificationClose ?? "" ?>">
                    <input type="submit" id="submit" name="submit">
                    <?= "\nBefore status message" ?>
                    <?= isset($email_status_message) ? $email_status_message : null ?>
                </form>
            </div>
        </section>
    </div>