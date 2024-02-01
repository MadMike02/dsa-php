<?php
class stack
{
    private $items;
    private $top;

    public function __construct()
    {
        $this->items = [];
        $this->top = 0;
    }

    public function push($item){
        array_push($this->items, $item);
        $this->top = count($this->items) - 1;
    }

    public function pop(){
       if(!empty($this->items)){
            $element = $this->items[$this->top];
            unset($this->items[$this->top]);
            $this->top--;
            return $element;
       }
       return null;
    }

    public function top(){
        if(!empty($this->items)){
            return $this->items[$this->top];
        } 
        return null;
    }

    public function allItems(){
        if(!empty($this->items)){
            for($i = $this->top; $i >= 0; $i --){
                print($this->items[$i]);
                echo "\n";
            }
        } 
        return null;
    }
}

$myStack = new stack;
$myStack->push(10);
$myStack->push(20);
$myStack->push(30);
$myStack->push(40);
$myStack->allItems();
$myStack->pop();
$myStack->allItems();
