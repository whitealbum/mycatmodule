<?php
   namespace Drupal\mycatmodule\Routing;

   use Drupal\Core\Routing\RouteSubscriberBase;
   use Symfony\Component\Routing\RouteCollection;
   
   class RouteSubscriber extends RouteSubscriberBase {
     /**
      * {@inheritdoc}
      */
     public function alterRoutes(RouteCollection $collection) {

       // Change path of mycatmodule.cats to use a hyphen
       if ($route = $collection->get('mycatmodule.cats')) {
      echo "route: <pre>" .var_export($route, true) . "</pre>";       
         $route->setPath('/my-cat');

       }
    }
  }