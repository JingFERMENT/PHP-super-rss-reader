<?php
if (isset($_COOKIE['designMode']) && $_COOKIE['designMode'] == true) {
    $designMode = $_COOKIE['designMode'];
} else {
    $designMode = 1;
}

if (isset($_COOKIE['numberItems']) && $_COOKIE['numberItems'] == true) {
    $numberItems = $_COOKIE['numberItems'];
} else {
    $numberItems = 6;
}

if (isset($_COOKIE['selectedTopics']) && $_COOKIE['selectedTopics'] == true) {
    $selectedTopics = json_decode($_COOKIE['selectedTopics']);
} else {
    $selectedTopics = ['Europe','Ameriques','Afrique'];
}

$urlsRss = [
    'https://www.lemonde.fr/europe/rss_full.xml' => 'Europe',
    'https://www.lemonde.fr/ameriques/rss_full.xml' => 'Ameriques',
    'https://www.lemonde.fr/afrique/rss_full.xml' => 'Afrique',
    'https://www.lemonde.fr/asie-pacifique/rss_full.xml' => 'Asie-Pacifique',
    'https://www.lemonde.fr/proche-orient/rss_full.xml' => 'Proche-Orient',
];