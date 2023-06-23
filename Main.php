<?php
// Your code here!
/* 

Burgerking sells three items: 
VegBurger which needs 2 breads & 1 veg pattice
NonVegBurger which needs 2 breads & 1 non-veg pattice
TikkiBurger which needs 2 breads & 1 tikki pattice

Given bread quantity, veg pattice quantity, non-veg pattice quantity, tikki pattice quantity & price of all 3 items

Print the total maximum possible profit by making all possible items based on bread availability 

Also, test for all inputs, we would change all the values while testing, the quantity values as well as price

And program has to be optimal with respect to time & space complexity

*/

$breads = 15;
$vegPattice = 3;
$nonVegPattice = 2;
$TikkiPattice = 1;
$priceVegBurger = 100;
$priceNonVegBurger = 125;
$priceTikkiBurger = 112;

$maxProfit = 0;

$burger = [$priceVegBurger,$priceNonVegBurger,$priceTikkiBurger];
$pattice= [$vegPattice,$nonVegPattice,$TikkiPattice];
		
for($i=0; $i<3-1; $i++) {
	for ($j=0; $j<3-$i-1; $j++) {
		if($burger[$j]<$burger[$j+1]) {
			$temp = $burger[$j];
			$burger[$j] = $burger[$j + 1];
			$burger[$j + 1] = $temp;
			
			$temp = $pattice[$j];
			$pattice[$j] = $pattice[$j + 1];
			$pattice[$j + 1] = $temp;
		}
	}
}


for($i=0; $i<3; $i++) {
	
	while($breads>1&&$pattice[$i]!=0) {
		$breads-=2;
		$pattice[$i]--;
		$maxProfit+=$burger[$i];
	}
	
}

echo $maxProfit;		


?>


