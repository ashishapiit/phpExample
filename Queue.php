<?php
class ReadingList extends SplQueue
{
}

$myBooks = new ReadingList();

// add some items to the queue
$myBooks->enqueue('A Game of Thrones');
$myBooks->enqueue('A Clash of Kings');
$myBooks->enqueue('A Storm of Swords');