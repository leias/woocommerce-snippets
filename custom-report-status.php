// Add Custom Statuses to WooCommerce Reporting
function PROJECTNAME_report_status(){
	$statuses = array( 'completed');
	return $statuses;
}
add_filter('woocommerce_reports_order_statuses','PROJECTNAME_report_status');
