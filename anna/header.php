<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?></title>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/materialize.css"  media="screen,projection"/>

    <!--CUSTOM CSS-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/custom.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initila-scale=1.0"/>
   <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.min.js"></script>
<?php wp_head(); ?>
</head>

<body>
        <script type="text/javascript">
         $(document).ready(function(){
                $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: false, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'button' // Displays dropdown with edge aligned to the left of button
              });
                $(".button-collapse").sideNav({
                menuWidth: 240, // Default is 240
                edge: 'left', // Choose the horizontal origin
                closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
                });
          });
      </script>
  <nav>
    <div class="nav-wrapper">
        <div class="container-fluid">
            <a href="<?php echo home_url(); ?>" class="brand-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="logo"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse botao-topo"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Links Structure -->
                <?php 
                    wp_nav_menu( 
                        array( 
                        'items_wrap' => '%3$s',
                        'menu' => 'links', 
                        'container' => ''
                        ) 
                    ); 
                ?>

                <li style="margin-right: 5px;"><a class="dropdown-button" href="#!" data-activates="dropdown1">Categorias <i class="material-icons right">arrow_drop_down</i></a></li>
                <li>
                    <form id="boxbusca" action="<?php echo home_url(); ?>" method="get">
                      <input id="search" type="text" name="s" placeholder="o que está procurando?..."> 
                      <input id="pesquisar-topo" type="submit" value="buscar">
                    </form><!--Fecha Busca-->
                </li>
            </ul>
            <!-- Dropdown Structure -->
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'dropdown',
                        'sort_column'=>'menu_order',
                        'container' => 'ul',
                        'menu_id' => 'dropdown1',
                        'menu_class' => 'dropdown-content',
                    )
                ); 
            ?>
            <!-- Mobile Structure -->
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'mobile',
                        'sort_column'=>'menu_order',
                        'container' => 'ul',
                        'menu_id' => 'mobile-demo',
                        'menu_class' => 'side-nav',
                    )
                ); 
            ?>
        </div>
    </div>
  </nav>


  
