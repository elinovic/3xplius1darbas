<?php

include_once "collatz3xplius1.php";

class histograma extends collatz3xplius1 {
	public $hist = [];
	function intervalocollatz(){
		$this->maxiter=1;
		for($i=$this->intprad; $i<=$this->intgal; $i++){
		$iter=1;
		$sk=$i;
			while ($sk != 1){
				if($sk % 2 == 0){
				$sk = $sk/2;
				$iter++;}
				else {$sk=$sk*3+1;
				$iter++;}
			}
		$this->hist[$iter] = ($this->hist[$iter] ?? 0)+1; // pridedam 1 prie masyvo elemento, kuris atspindi iteraciju kieki.
		}
		if($iter>($this->maxiter)){$this->maxiter=$iter;}
		
	}
	
	function histrodymas(){
		for($i=0; $i<=$this->maxiter; $i++){
			if (isset($this->hist[$i]) && ($this->hist[$i])!= 0) {print("Iteracijos: $i , Daznis: {$this->hist[$i]} ; <br>");}
		}
		$testui = array_sum($this->hist);
		print($testui);
	}
}
	
?>