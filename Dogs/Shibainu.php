<?php
namespace Devjs\Dogs;

class Shibainu 
{
	public function sound() 
	{
		echo "gav! gav! gav!";
	}

	public function hunt()
	{
		global $minings;
		echo 'Master I caught a ' . 'wolf!' . '<br>';
		$this->sound();
	}
}
?>