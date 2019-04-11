<?php
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirts(11);
$linkedList->insertFirts(22);
$linkedList->insertLasts(33);
$linkedList->insertLasts(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readLists();

echo $totalNodes."<br>";
echo implode ('-' , $linkData);
