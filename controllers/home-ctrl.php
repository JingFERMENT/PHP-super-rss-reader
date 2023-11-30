<?php
require_once __DIR__ . '/../config/init.php';


foreach ($urlsRss as $key => $value) {
    if (in_array($value, $selectedTopics)) {
        $rss = simplexml_load_file($key);
    }
}
$counter = 0;


include __DIR__.'/../views/templates/header.php';
include __DIR__.'/../views/home.php';
include __DIR__.'/../views/templates/footer.php';