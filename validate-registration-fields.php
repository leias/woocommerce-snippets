// Validate extra registration fields
function PROJECTNAME_validate_extra_registration_fields( $username, $email, $validation_errors ) {
    if (isset($_POST['billing_first_name']) && empty($_POST['billing_first_name']) ) {
        $validation_errors->add('billing_first_name_error', 'First Name is required');
    }
    if (isset($_POST['billing_last_name']) && empty($_POST['billing_last_name']) ) {
        $validation_errors->add('billing_last_name_error', 'Last Name is required');
    }
    return $validation_errors;
}

add_action('woocommerce_register_post', 'PROJECTNAME_validate_extra_registration_fields', 10, 3);
