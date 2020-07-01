// PHP program to generate pythagorean  
// triplets smaller than a given limit 
  
// Function to generate pythagorean  
// triplets smaller than limit 
function pythagoreanTriplets($limit) 
{ 
      
    // triplet: a^2 + b^2 = c^2 
    $a;  
    $b;  
    $c=0; 
  
    // loop from 2 to max_limitit 
    $m = 2; 
  
    // Limiting c would limit 
    // all a, b and c 
    while ($c < $limit) 
    { 
          
        // now loop on j from 1 to i-1 
        for ($n = 1; $n < $m; ++$n) 
        { 
              
            // Evaluate and print 
            // triplets using the 
            // relation between a,  
            // b and c 
            $a = $m *$m - $n * $n; 
            $b = 2 * $m * $n; 
            $c = $m * $m + $n * $n; 
  
            if ($c > $limit) 
                break; 
  
            echo $a, " ", $b, " ", $c, "\n"; 
        } 
        $m++; 
    } 
} 
  
    // Driver Code 
    $limit = 20; 
    pythagoreanTriplets($limit); 
  