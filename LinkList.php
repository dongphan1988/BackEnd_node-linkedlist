<?php
include_once "Node.php";

class LinkList
{
    public $nodeFirt;
    public $nodelast;
    public $count;

    public function __construct()
    {
        $this->nodeFirt = NULL;
        $this->nodelast = NULL;
        $this->count = 0;
    }

    public function insertFirts($data)
    {
        $links = new Node($data);
        $links->next = $this->nodeFirt;
        $this->nodeFirt = $links;

        if ($this->nodelast == NULL) {
            $this->nodelast = $links;
        }

        $this->count++;
    }

    public function insertLasts($data)
    {
        if ($this->nodelast != NULL) {
            $link = new Node($data);
            $this->nodelast->next = $link;
            $this->nodelast = $link;
            $this->count++;
        } else {
            $this->insertFirts($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readLists()
    {
        $listData = array();
        $firts = $this->nodeFirt;
        while ($firts != NULL) {
            array_push($listData, $firts->readData());
            $firts = $firts->next;
        }
        return $listData;
    }
}