// Record User's IP Address on Login
add_action('wp_login','PROJECTNAME_login');
function PROJECTNAME_login($login) {
   global $user_id;
   $user = get_user_by('login',$login);
   update_user_meta($user->ID,'IP Address (Last Login)',$_SERVER['HTTP_X_FORWARDED_FOR']);
}
