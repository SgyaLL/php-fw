<?php

use Metinet\Core\Route;

$routes = [];
$routes[] = new Route(['GET'], '/hello', 'sayHello');
$routes[] = new Route(['GET'], '/students', 'retrieveMemberList');
$routes[] = new Route(['GET'], '/candidates', 'retrieveMemberList');
$routes[] = new Route(['GET'], '/students/sponsor', 'retrieveMemberList');

$routes[] = new Route(['GET'], '/conference', 'retrieveConferenceList');
$routes[] = new Route(['GET'], '/CreateUser', 'retrieveUserList');

return $routes;
