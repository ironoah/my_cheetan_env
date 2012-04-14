<?php
function config_database( &$db )
{
	$db->add( "", "host", "user", "password", "db", DBKIND_PGSQL );
}


function config_models( &$controller )
{
	$controller->AddModel( dirname(__FILE__) . "/models/blog_data.php" );
}


function config_controller( &$controller )
{
	$controller->SetTemplateFile( "views/template.php" );
}


function InitTime( $time )
{
	return $time;
}
?>