<?php
include_once "Stack.php";
include_once "Queue.php";

$str = "able was I ere I saw elba";

$stack = new Stack(100);
$queue = new Queue();

for ($i = 0; $i < strlen($str); $i++) {
    $stack->push($str[$i]);
    $queue->enqueue($str[$i]);
}
$result = "";
while ($stack->isEmpty() == false && $queue->isEmpty() == false) {
    $charStack = $stack->pop();
    $charQueue = $queue->dequeue();
    if ($charStack != $charQueue) {
        $result = "Not a symmetry string";
        break;
    } else {
        $result = "Symmetry string";
    }
}
echo $result;
