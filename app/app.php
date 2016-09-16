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
        //These 2 lines will avoid having more than 1 word to be searched for:
        $input1_exploded = explode(" ", $_GET["input_word"]);
        $input1_count = count($input1_exploded);

        return $app["twig"]->render("results.html.twig", array("repeat" => $number_of_repeats, "word" => $input1, "text" => $input2, "word_count" => $input1_count));
    });

    return $app;
 ?>
