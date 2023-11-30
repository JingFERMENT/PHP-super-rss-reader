<?php
if ($_COOKIE['designMode'] == true) {
    $designMode = $_COOKIE['designMode'];
}

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


include __DIR__ . '/../views/home.php';