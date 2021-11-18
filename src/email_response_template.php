<?php
$email_body_HTML = 
    "<p>Dear " . $username . ",</p>" . "<br>" . "<p>Your message has been received and will be attended to as soon as possible.</p><br><p>Best regards,</p><p>Ikbaal</p>";
$email_signature_HTML = 
    '<table cellpadding="0" cellspacing="0" style="width: 400px;max-width: 400px;background-color: rgb(100, 100, 220);">
        <tbody>
            <tr>
                <td valign="top" style="border-bottom: 1px solid red;">
                    <h3 style="text-align: left;font-family:\'Courier New\', Courier, monospace;color: rgb(255, 100, 100);margin: 5px;">Ikbaal Rehal</h3>
                    <h4 style="text-align: left;font-family:\'Courier New\', Courier, monospace;color: rgb(255, 100, 100);margin: 5px;">Software Developer</h4>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <h5 style="text-align: left;font-family:\'Courier New\', Courier, monospace;color: rgb(255, 100, 100);margin: 5px;">Email: 
                        <span>
                            <a href="mailto:'.$myEmail.'" style="text-decoration: none;color: rgb(0, 1, 20)">'.$myEmail.'</a>
                        </span>
                    </h5>
                    <h5 style="text-align: left;font-family:\'Courier New\', Courier, monospace;color: rgb(255, 100, 100);margin: 5px;">Phone: 
                        <span>
                            <a href="tel:+44'.$myPhone.'" style="text-decoration: none;color: rgb(0, 1, 20)">0'.$myPhone.'</a>
                        </span>
                    </h5>
                    <h5 style="text-align: left;font-family:\'Courier New\', Courier, monospace;color: rgb(255, 100, 100);margin: 5px;">Website: 
                        <span>
                            <a href="https://ir012.github.io" style="text-decoration: none;color: rgb(0, 1, 20)">ir012.github.io</a>
                        </span>
                    </h5>
                </td>
            </tr>
        </tbody>
    </table>';
$email_body_alt = "Dear" . $username . ",\n\n" . "Your message has been received and will be attended to as soon as possible.\n\nBest regards,\n\nIkbaal\nWebsite:ir012.github.io\nPhone:07981339015";
 
?>