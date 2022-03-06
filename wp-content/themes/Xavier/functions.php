<?php 

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return 'Nome do seu site - Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


function my_custom_login_stylesheet() {
wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );
}
 
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );




function ocultarBarra(){
    return false;
}

add_filter("show_admin_bar","ocultarBarra")

 ?>