<?php
/**
 * Created by PhpStorm.
 * User: petersdata
 * @author Peter Street<peterbstreet@gmail.com>
 * @author Dylan McDonald<dmcdonald23@cnm.edu>
 * Date: 1/23/18
 * Time: 8:13 AM
 */

class motorcycle {
	private $year ; private $make ; private $model ; private $cylinders ;
}

class motorcycle {
	public function getyear () {
		return( $this −> year);
	}
	public function getmake () {
		return( $this −> make);
	}
	public function getyear () {
		return( $this −> model);
	}
	public function getyear () {
		return( $this −> cylinders);
	}
 }

class motorcycle {
	public function setyear($newYear) {
		$this−>year = $newYear; }
}
class motorcycle {
	public function setmake($newMake) {
		$this−>make = $newMake; }
}
class motorcycle {
	public function setmodel($newModel) {
		$this−>model = $newModel; }
}
class motorcycle {
	public function setCylinders($newCylinders) {
		if($newCylinders <= 0 || $newCylinders % 2 != 0) { throw(new Exception(”Cylinders must be even”));
}
		$this−>cylinders = $newCylinders ;
	} }