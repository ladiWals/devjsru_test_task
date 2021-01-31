<?php

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

class ShibaInu 
{
	public function sound() 
	{
		echo "woof! woof!";
	}

	public function hunt()
	{

	}
}

class dachshund 
{
	public function sound() 
	{
		echo "woof! woof!";
	}

	public function hunt()
	{

	}
}	

class PlushLabrador 
{

}

class RubberDachshund 
{
	public function sound() 
	{
		echo "woof! woof!";
	}
}
?>