<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/repeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("index.html.twig");
    });

    $app->get("/results", function() use($app) {
        $new_count = new RepeatCounter($_GET["input_word"], $_GET["input_text"]);
        $number_of_repeats = $new_count->countRepeats();
        $input1 = $new_count->getSearchWord();
        $input2 = $new_count->getSearchText();

        return $app["twig"]->render("results.html.twig", array("repeat" => $number_of_repeats, "word" => $input1, "text" => $input2));
    });

    return $app;
 ?>
