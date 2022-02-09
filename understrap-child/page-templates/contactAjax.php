<?php

// add_action('wp_ajax_send_mail', 'send_mail');
// add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function send_mail() {
    var_dump($_POST['msg']);
    $msg = 'Name:' . $_POST['msg']['name'] . '<br> Last Name:' . $_POST['msg']['last-name'] . '<br> Email:' . $_POST['msg']['email'] . '<br> Phone:' . '<br> Message:' . $_POST['msg']['message'];
    wp_mail('ejankovec@gmail.com', 'subject', $msg);
    die();   
}
echo "dada";

