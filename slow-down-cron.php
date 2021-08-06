// Slow down WooCommerce cron schedule
add_filter('action_scheduler_run_schedule', function($arg) { return 86400; });
