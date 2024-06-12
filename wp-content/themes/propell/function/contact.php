<?php

add_action( 'wp_ajax_send_contact_email', 'send_contact_email');
add_action( 'wp_ajax_nopriv_send_contact_email', 'send_contact_email');

function send_contact_email()
{
    if(!empty($_POST['template_id'])) {
        $template = get_post($_POST['template_id']);
        if($template) {
            $default_subject = get_field('template_subject', $template->ID);
            $default_template = get_field('template_content', $template->ID);
            // $default_template
            if(!empty($default_template)) {
                $headers = array('Content-Type: text/html; charset=UTF-8');

                $body = str_replace(
                    array('{name}', '{email}', '{message}'),
                    array($_POST['name'], $_POST['from'], nl2br($_POST['message'])),
                    $default_template
                );

                wp_mail($_POST['to'], $default_subject, $body, $headers);

                // Return status 200
                wp_send_json_success( ['status' => 'ok'] );
            }
        }
    }

    wp_send_json_error( 'Error: Invalid data!' );
}