<?php
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler();
$document = new DOMDocument();
$document->loadXML(file_get_contents('files/file.xml'));
$crawler->addDocument($document);

var_dump($crawler->filterXPath('//note/to')->extract(array('_text')));
