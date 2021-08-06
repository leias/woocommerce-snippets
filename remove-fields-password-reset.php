// Remove name/email fields from Password reset form
add_filter( 'woocommerce_save_account_details_required_fields','PROJECTNAME_woocommerce_save_account_details_required_fields' );
function PROJECTNAME_woocommerce_save_account_details_required_fields( $required_fields ) {
	unset($required_fields["account_first_name"]);
	unset($required_fields["account_last_name"]);
	unset($required_fields["account_email"]);
	unset($required_fields["account_display_name"]);
	return $required_fields;
}
