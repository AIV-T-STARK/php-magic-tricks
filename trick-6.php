  
<?php
declare(ticks=1);
register_tick_function(function() {
    static $count = 0;
    echo 2 === ++$count ? ' PHP ':'';
});

//code không chạy được??
// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';
/*
 * Magic output:
 *
 * Hello PHP World
 */
