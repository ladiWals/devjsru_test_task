<?php

$minings = ['duck', 'rabbit', 'cat', 'turkey', 'fox', 'wolf'];

interface sound 
{
	public function sound();
} 

interface hunt 
{
	public function hunt();
}

class Mops implements sound
{
	public function sound() 
	{
		echo "woof! woof!";
	}
}

class Shibainu 
{
	public function sound() 
	{
		echo "gav! gav! gav!";
	}

	public function hunt()
	{
		echo 'Master I caught a ' . $minings[random(0, count($minings))] . ' ';
	}
}

class Dachshund 
{
	public function sound() 
	{
		echo "guuuuaaavvvvvvvvvv";
	}

	public function hunt()
	{

	}
}	

class Plushlabrador 
{

}

class Rubberdachshund 
{
	public function sound() 
	{
		echo "woof! woof!";
	}
}
?>