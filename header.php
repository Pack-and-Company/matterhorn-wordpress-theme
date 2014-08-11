<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>

<div id="container">
  <h1>Matterhorn</h1>
  <div id="arrows"> </div>
  <h2 id="eat-drink">Eat. Drink. Music.</h2>
  
<div id="columns">

<div id="leftcolumn">

<div id="textarea">
