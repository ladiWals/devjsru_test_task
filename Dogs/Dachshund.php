<?php
namespace Devjs\Dogs;

class Dachshund 
{
	public function sound() 
	{
		echo "guuuuaaavvvvvvvvvv";
	}

	public function hunt()
	{
		global $minings;
		echo 'Master I caught a ' . 'duck' . '<br>';
		$this->sound();
	}
}
?>