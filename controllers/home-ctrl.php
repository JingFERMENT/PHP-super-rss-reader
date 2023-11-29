<?php

if ($_COOKIE['numberItems'] == true) {
    $numberItems = $_COOKIE['numberItems'];
}

if ($_COOKIE['selectedTopics'] == true) {
    $selectedTopics = json_decode($_COOKIE['selectedTopics']);
}

$urlsRss = [
    'https://www.lemonde.fr/europe/rss_full.xml' => 'Europe',
    'https://www.lemonde.fr/ameriques/rss_full.xml' => 'Ameriques',
    'https://www.lemonde.fr/afrique/rss_full.xml' => 'Afrique',
    'https://www.lemonde.fr/asie-pacifique/rss_full.xml' => 'Asie-Pacifique',
    'https://www.lemonde.fr/proche-orient/rss_full.xml' => 'Proche-Orient',
];

foreach ($urlsRss as $key => $value) {
    if (in_array($value, $selectedTopics)) {
        $rss = simplexml_load_file($key);
    }
}

$counter = 0;

// var_dump($rss);
// die;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My RSS Feed</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <?php
            foreach ($urlsRss as $key => $value) {
                $rss = simplexml_load_file($key);
                if (in_array($value, $selectedTopics)) {
                    echo '<h3>'. $rss->channel->title. '</h3><br>';

                    foreach ($rss->channel->item as $item)  {
                        echo $item->title . '<br><br>';      
                        $counter++;
            
                        if ($counter == $numberItems ) {
                            break;
                        }      
                    }
                    
                }
            }
            ?>
        </div>
        <div class="col-lg-4">
            <?php
                if ($rss) {
                    echo '<h3>'. $rss->channel->title. '</h3><br>';

                    foreach ($rss->channel->item as $item)  {
                        echo $item->title . '<br><br>';      
                        $counter++;
            
                        if ($counter == $numberItems ) {
                            break;
                        }      
                    }
                    
                }
            ?>
        </div>
    </div>
</body>

</html>