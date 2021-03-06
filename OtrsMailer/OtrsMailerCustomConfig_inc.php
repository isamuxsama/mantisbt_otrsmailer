<?php
// template for email body
$s_OtrsMailerConfig_otrs_mail_body_template = "" .
    "===============================================================================\n" . 
    "  MantisUrl: <BUG_URL>\n" . 
    "===============================================================================\n" . 
    "  Sent by: <MANTIS_CURR_USER_NAME>\n" . 
    "------------------------------------------------------\n" . 
    "  General Information\n" . 
    "------------------------------------------------------\n" . 
    "  Project: <BUG_PROJECT_NAME>\n" . 
    "  AssignedTo: <BUG_ASSIGNEDTO_USERNAME>\n" . 
    "  Reporter: <BUG_REPORTER_USERNAME> (<BUG_REPORTER_EMAIL>)\n" . 
    "  Priority: <BUG_PRIORITY>\n" . 
    "------------------------------------------------------\n" . 
    "  Description:\n" . 
    "------------------------------------------------------\n" . 
    "<BUG_DESCRIPTION>\n" . 
    "\n------------------------------------------------------\n" . 
    "StepsToReproduce:\n" . 
    "------------------------------------------------------\n" . 
    "<BUG_STEPS_TO_REPRODUCE>\n" . 
    "\n------------------------------------------------------\n" . 
    "Additional Info:\n" . 
    "------------------------------------------------------\n" . 
    "<BUG_ADDITIONAL_INFO>\n" .  
    "\n===============================================================================";


$a_OtrsMailerConfig = array(
        'issue_id_tag_template' => '[M#<BUG_ID>]',
        'otrs_url_main' => 'https://localhost/otrs/index.pl',                       
        'otrs_mail_to' =>  'myotrs@localhost',
        'otrs_mail_subject_template' => "<BUG_SUMMARY> <BUG_ID_TAG>",
        'otrs_mail_body_template' => $s_OtrsMailerConfig_otrs_mail_body_template,
        'view_page_mail_issue_threshold' => 90,
        'limit_access_to_users_csv' => '',
        'add_note_after_mail_sent' => false,
        'issue_menu_show_add_otrs_open_link' => false,
        'issue_menu_show_mail_issue_direct_link' => false,
        'issue_menu_show_otrs_search_link' => true
    );
?>