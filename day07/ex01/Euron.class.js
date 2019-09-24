const Greyjoy = require('./Greyjoy.class');

class Euron extends Greyjoy {
	announceMotto() {
		console.log(this.familyMotto);
	}
}

module.exports = Euron;

/*

<?php

include('Greyjoy.class.php');

class Euron extends Greyjoy {
	public function announceMotto() {
		print($this->familyMotto . PHP_EOL);
	}
}

?>

*/