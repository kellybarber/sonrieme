<?php 
/* Template Name: Modules */

use Timber\Timber;

$context = Timber::get_context();

Timber::render( 'pages/modules.twig', $context );