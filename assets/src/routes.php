<?php

// Routing

//root
$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    return $this->renderer->render($response, 'index.twig', $args);
});

//hello
$app->get('/hello/{name}', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/hello/' hello");

    // Render index view
    $args['greet'] = $this->db->table('greet')->find(1)->text;

    return $this->renderer->render($response, 'index.twig', $args);
});

//joke
$app->get('/joke', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/joke/' joke");

    echo "<h1>:P</h1>";
});
