<?php
    //Inhibit notification display upon page reload
    if (isset($_POST["notification-close"])) {
        $notificationClose = clean_input($_POST["notification-close"]);
    }
?>
<div class="notification" style=<?= (!isset($_POST["notification-close"]) || (isset($_POST["notification-close"]) && $notificationClose != "close")) ? "" : "display:none" ?> >
    <h3>This website is still under development</h3>
    <p>Email: ikbaal012@gmail.com to get in touch</p>
    <div class="close-button">
        <p>X</p>
    </div>
</div>