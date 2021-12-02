<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>BubbleImproved</title>
    </head>
    <body>
        <p>Bubble Algorithm Improved</p>
        <?php
        $arr = array(12,33,23,84,55,74,1,10);

        echo("Before sorting\n");
        echo($arr);
        
        $arr = bubble_sort($arr);
        echo("After sorting by using bubble sort\n");
        echo($arr);
        
        function bubble_sort($arr) {
            $n = count($arr);
            do {
                $intercambiados = false;
                for ($i = 0; $i < $n - 1; $i++) {
                    // cambia cuando la comparacion detecte que es mas mayor
                    if ($arr[$i] > $arr[$i + 1]) {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$i + 1];
                        $arr[$i + 1] = $temp;
                        $intercambiados = true;
                    }
                }
                $n--;
            }
            while ($intercambiados);
            return $arr;
        }?>
    </body>
</html>
