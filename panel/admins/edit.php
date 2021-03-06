<?php
    //ini_set('display_errors',1);
	//ini_set('display_startup_errors',1);
	//error_reporting(-1);
	include $_SERVER['DOCUMENT_ROOT'].'/admin/authentication.php';
	include $_SERVER['DOCUMENT_ROOT'].'/admin/utility/configuration.php';
    include $_SERVER['DOCUMENT_ROOT'].'/admin/utility/common.php';
    include $_SERVER['DOCUMENT_ROOT'].'/admin/utility/templates.php';

    $database_connection = connect_to_database();

    $template = array();
    $template['page_name'] = "Add/Edit Administrator";
    $template['page_path'] = "admins";
    $template['database_connection'] = connect_to_database();
    $template['database_table'] = "users";
    $template['record_id'] = $_GET['id'];
    $template['fields'] = array();
    add_form_template_field($template['fields'], 'Id', 'id', $FIELD_TYPES['HIDDEN'], false);
    add_form_template_field($template['fields'], 'Type', 'type', $FIELD_TYPES['HIDDEN'], false);
    add_form_template_field($template['fields'], 'First Name', 'first_name', $FIELD_TYPES['TEXT'], true);
    add_form_template_field($template['fields'], 'Last Name', 'last_name', $FIELD_TYPES['TEXT'], false);
    add_form_template_field($template['fields'], 'Email Address', 'email_address', $FIELD_TYPES['TEXT'], true);
    add_form_template_field($template['fields'], 'Phone Number', 'phone_number', $FIELD_TYPES['TEXT'], false);

    echo create_form($template);
?>