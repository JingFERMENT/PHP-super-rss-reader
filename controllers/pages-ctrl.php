<?php
// L'URL du flux RSS à lire
$url = 'https://www.lemonde.fr/europe/rss_full.xml';
// Chargement du flux RSS avec SimpleXML
// simplexml_load_file — Convertit un fichier XML en objet
$rss = simplexml_load_file($url);