<?php
include 'C:\xampp\htdocs\line-example-bot-tiny-php-master\vendor\graphp\graphviz\src\GraphViz.php';
include 'C:\xampp\htdocs\line-example-bot-tiny-php-master\vendor\graphp\graphviz\src\Dot.php';
include 'C:\xampp\htdocs\line-example-bot-tiny-php-master\vendor\graphp\graphviz\src\Image.php';
use Graphp\GraphViz\GraphViz;
$graph = new GraphViz();

$blue = $graph->createVertex();
$blue->setAttribute('id', 'blue');
$blue->setAttribute('graphviz.color', 'blue');

$red = $graph->createVertex();
$red->setAttribute('id', 'red');
$red->setAttribute('graphviz.color', 'red');

$edge = $graph->createEdgeDirected($blue, $red);
$edge->setAttribute('graphviz.color', 'grey');

$graphviz = new Graphp\GraphViz\GraphViz();
$graphviz->display($graph);
?>