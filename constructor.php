<?php
class computer{
	public $procesor;
	public $memory;
	
public function cetak(){
	return "$this->procesor, $this->memory";
}
public function __construct($procesor,$memory="12 gb"){
	$this->procesor=$procesor;
	$this->memory=$memory;
}
public function __destruct(){
	echo "program selesai";
}
}
$komputersaya = new computer("core i7","8 gb",);
echo $komputersaya->cetak();
echo "<br/>"
?>