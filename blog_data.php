<?php
	require_once( "config.php" );
	require_once( "cheetan/cheetan.php" );
	
function action( $c )
{
    $method = isset($_GET['method'])?$_GET['method']:"index";
    
   	$c->SetViewFile( 'views'.DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF'],'.php').DIRECTORY_SEPARATOR.$method.'.php' );
    
    switch ( $method ) {
    case "index":
        $c->set( "datas", $c->blog_data->find( "", "modified DESC" ) );
        break;
        
    case "add":
        $errmsg	= "";
        if( count( $_POST ) )
        {
            $errmsg	= $c->blog_data->validatemsg( $c->data["blog"] );
            if( $errmsg == "" )
            {
                $c->blog_data->insert( $c->data["blog"] );
                $c->redirect( $_SERVER['PHP_SELF'] );
            }
        }
        
        $c->set( "errmsg", $errmsg );
        break;
        
    case "edit":
        $errmsg	= "";
        if( count( $_POST ) )
        {
            $errmsg	= $c->blog_data->validatemsg( $c->data["blog"] );
            if( $errmsg == "" )
            {
                $c->blog_data->update( $c->data["blog"] );
                $c->redirect( $_SERVER['PHP_SELF'] );
            }
        }
        $c->set( "errmsg", $errmsg );
        $c->set( "data", $c->blog_data->findone( "id=" . $_GET["id"] ) );
        break;
        
    case "del":
        if( count( $_POST ) )
        {
            $c->blog_data->del( "id=" . $_POST["id"] );
            $c->redirect( $_SERVER['PHP_SELF'] );
        }
        $c->set( "data", $c->blog_data->findone( "id=" . $_GET["id"] ) );
        break;
    }
}
