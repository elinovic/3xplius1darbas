<?php
 
   class collatz3xplius1 {
// Properties
  public $skaic, $ats; //paprastam vieno skaiciaus collatz
  public $intprad, $intgal; //intervalui nustatyt
  public $maxiter, $maxitersk, $miniter, $minitersk, $maxreiksm, $maxreiksmsk; //intervalo statistikai
 
 // Methods
  function set_pradzia($x) {
    $this->intprad = $x;
  }
  function set_galas($x) {
    $this->intgal = $x;
  }
  function get_ats() {
    print ( "Skaiciaus $this->skaic iteracijos: $this->ats");
  }
   function skaiciuokcollatz($sk) {
	 $this->skaic = $sk;
     $iter=1;
	 while ($sk != 1){
	if($sk % 2 == 0){
		$sk = $sk/2;
	$iter++;}
	else {$sk=$sk*3+1;
	$iter++;}
	}
	$this->ats = $iter;
   }
   

   function intervalocollatz() {
	 $this->maxiter=1; //pradet su 1 nes jis gali tik didet arba likti vienetu jei niekas neivyks
	 $this->miniter=INF; //inf nes visada didesnis nei betkoks skaicius, tai tik mazes
	 $this->maxreiksm=0; //tik dides
    for($i=$this->intprad; $i<=$this->intgal; $i++){
	 $iter=1;
	 $sk=$i;
	 $pradsk=$i;
	 while ($sk != 1){
	if($sk % 2 == 0){
		$sk = $sk/2;
	$iter++;}
	else {$sk=$sk*3+1;
	if($sk>($this->maxreiksm)){$this->maxreiksm=$sk; $this->maxreiksmsk=$i;}
	$iter++;}
	}
	if($iter>($this->maxiter)){$this->maxiter=$iter; $this->maxitersk = $i;}//pakeic didziausia reiksme ir jos pradini skaiciu
	if($iter<($this->miniter)){$this->miniter=$iter; $this->minitersk = $i;}//pakeic maziausia reiksme ir jos pradini skaiciu
    }
   
  }
  function rodykstatistika() {
   print("Maziausias iteraciju skaicius: $this->miniter ; su pradiniu skaiciumi: $this->minitersk <br>");
   print("Didziausias iteraciju skaicius: $this->maxiter ; su pradiniu skaiciumi: $this->maxitersk <br>");
   print("Didziausia pasiekta reiksme: $this->maxreiksm ; su pradiniu skaiciumi: $this->maxreiksmsk ");
  }
   
}
?>