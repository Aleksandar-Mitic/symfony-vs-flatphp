<?php

require_once './vendor/autoload.php';

// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;

// $request = Request::createFromGlobals();

// $uri = $request->getPathInfo();

// if ('/' === $uri) {
//     $response = list_action();
// } elseif ('/show' === $uri && $request->query->has('id')) {
//     $response = show_action($request->query->get('id'));
// } else {
//     $html = '<html><body><h1>Page Not Found</h1></body></html>';
//     $response = new Response($html, Response::HTTP_NOT_FOUND);
// }

// // echo the headers and send the response
// $response->send();

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

try
{
    // Init basic route
    $homepage_route = new Route(
      '/',
      array('controller' => 'HomeController')
    );
 
    // Init route with dynamic placeholders
    // $foo_placeholder_route = new Route(
    //   '/foo/{id}',
    //   array('controller' => 'FooController', 'method'=>'load'),
    //   array('id' => '[0-9]+')
    // );
 
    // Add Route object(s) to RouteCollection object
    $routes = new RouteCollection();
    $routes->add('homepage_route', $homepage_route);
    // $routes->add('foo_placeholder_route', $foo_placeholder_route);
 
    // Init RequestContext object
    $context = new RequestContext();
    $context->fromRequest(Request::createFromGlobals());
 
    // Init UrlMatcher object
    $matcher = new UrlMatcher($routes, $context);
 
    // Find the current route
    $parameters = $matcher->match($context->getPathInfo());
 
    // How to generate a SEO URL
    // $generator = new UrlGenerator($routes, $context);
    // $url = $generator->generate('foo_placeholder_route', array(
    //   'id' => 123,
    // ));
 
    echo '<pre>';
    print_r($parameters);
 
    echo 'Generated URL: ' . $url;
    exit;
}
catch (ResourceNotFoundException $e)
{
  echo $e->getMessage();
}
