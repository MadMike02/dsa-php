<?php

class queue
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function enqueue($item){
        array_push($this->items, $item);
    }

    public function dequeue(){
        if(!empty($this->items)){
            return array_shift($this->items);
        }
        return null;
    }

    public function peek(){
        if(!empty($this->items)){
            return $this->items[0];
        }
        return null;
    }
    public function allItems(){
        if(!empty($this->items)){
            for($i = 0; $i<count($this->items); $i++){
                print($this->items[$i]);
            }
        }
        return null;
    }
}

$myqueue = new queue;
$myqueue->enqueue(10);
$myqueue->enqueue(40);
$myqueue->dequeue();
$myqueue->enqueue(50);
$myqueue->allItems();
