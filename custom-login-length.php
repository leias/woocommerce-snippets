// Keep users logged in for one year	 
add_filter( 'auth_cookie_expiration', 'PROJECTNAME_login_length', 100, 3 );

function PROJECTNAME_login_length( $expirein ) {
    return 31556926; // 1 year in seconds
}	
