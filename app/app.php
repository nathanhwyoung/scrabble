<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/results", function() use($app) {
        $new_Scrabble = new Scrabble;
        $result = $new_Scrabble->score($_GET['word']);
        return $app['twig']->render('results.html.twig', array('result' => $result));
    });

    return $app;

?>
