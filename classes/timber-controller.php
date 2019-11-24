<?php 

class TImber_Site extends Timber\Site {
  public function __construct() {
      add_filter( 'timber_context', array( $this, 'add_to_context' ) );
      parent::__construct();
  }

  function add_to_context( $context ) {
      $context['menu'] = new Timber\Menu('main-menu');
      $context['site'] = $this;

      return $context;
  }
}