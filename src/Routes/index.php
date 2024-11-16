<?php

use App\Controllers\HomeController;
use App\Controllers\SubjectController;
use App\Controllers\AdvertisementController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/subject', SubjectController::class, 'showSubjectPage');
$router->get('/advertisement', AdvertisementController::class, 'showAdvertisementGalleryPage');
$router->post('/upload-ad', AdvertisementController::class, 'uploadAdvertisement');
$router->post('/delete-ad', AdvertisementController::class, 'deleteAdvertisement');
$router->post('/update-ad', AdvertisementController::class, 'updateAdvertisement');

$router->dispatch();