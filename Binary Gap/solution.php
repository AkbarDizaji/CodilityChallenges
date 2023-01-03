function solution($N) {
    $bin = str_split(decbin($N));
    $length = sizeof($bin);
    
    $results = [];
    $sum = 0;
    
    for ($i = 0; $i < $length; $i++) {
        
        if($bin[$i]) {
            $results[] = $sum;
            $sum = 0;
        }
        
        if (!$bin[$i]) {
            $sum++;
        }
    }
    return sizeof($results) > 0 ? max($results) : 0;
    }
