<?php 
abstract class shape {
	abstract public function getArea() ;
	abstract public function getCircumstance() ;
	abstract public function show() ;
}

class circle extends shape {
	static $pi = 3.1415926535 ;
	protected $r ;
	function __construct($radius) {
		$this->r = $radius ;
	}
	public function getArea() {
		return self::$pi * $this->r * $this->r ;
	}
	public function getCircumstance() {
		return 2 * self::$pi * $this->r * $this->r ;
	}
	public function show() {
		echo "C = ".sprintf("%.2f",$this->getCircumstance())." S = ".sprintf("%.2f",$this->getArea())."</br>" ;
	}
}

class square extends shape {
	protected $a ;
	function __construct($aa) {
 		$this->a = $aa ;
	}
	public function getArea() {
		return $this->a * $this->a ;
	}
	public function getCircumstance() {
		return 4 * $this->a ;
	}
	public function show() {
		echo "C = ".sprintf("%.2f",$this->getCircumstance())." S = ".sprintf("%.2f",$this->getArea())."</br>" ;
	}
}

interface _3D {
	public function getSuperficialArea() ;
	public function getVolume() ;
}

class sphere extends circle implements _3D {
	public function getSuperficialArea() {
		return 4 * self::$pi * $this->r * $this->r ;
	}
	public function getVolume() {
		return 4 / 3 * self::$pi * $this->r * $this->r * $this->r ;
	}
	public function show() {
		parent::show() ;
		echo " Ss = ".sprintf("%.2f",$this->getSuperficialArea())." V = ".sprintf("%.2f",$this->getVolume())."</br>" ;
	}
}

class cube extends square implements _3D {
	public function getSuperficialArea() {
		return 6 * $this->a * $this->a ;
	}
	public function getVolume() {
		return $this->a * $this->a * $this->a ;
	}
	public function show() {
		parent::show() ;
		echo " Ss = ".sprintf("%.2f",$this->getSuperficialArea())." V = ".sprintf("%.2f",$this->getVolume())."</br>" ;
	}
}

$circle = new circle(1) ;
$circle->show() ;

$square = new square(2) ;
$square->show() ;

$cube = new cube(3) ;
$cube->show() ;

$sphere = new sphere(4) ;
$sphere->show() ;

 ?>