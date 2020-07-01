
// PHP program to find the sum of 
// the series 1+11+111+1111+.... 

// Function for finding summation 
function summation($n) 
{ 
	$sum = 0; $j = 1; 
	for ($i = 1; $i <= $n; $i++) 
	{ 
		$sum = $sum + $j; 

		// Appending a 1 at the end 
		$j = ($j * 10) + 1; 
	} 

	return $sum; 
} 

// Driver Code 
$n = 5; 
echo summation($n); 