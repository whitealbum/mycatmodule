<?php
  namespace Drupal\mycatmodule\Routing;
  use Symfony\Component\Routing\Route;
  
  class CustomRoutes 
  {
    public function routes() 
    {
    $routes = [];
    // Create mycat route programmatically
      $routes['mycatmodule.cats'] = new Route
        ( // Path definition
        '/cat/{name}', 
          array
            (  // Route defaults
            '_controller' => '\Drupal\mycatmodule\Controller\MyCatController::cats',
            '_title' => 'My Cat Name',
            ),
          array
            ( // Route requirements
            '_permission' => 'access content',
            )
        );
     return $routes;
    }
  }