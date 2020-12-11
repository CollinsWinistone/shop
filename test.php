<?php 
class Stock
{
	public $item_name;
	public $price;

	public function displayPrice()
	{
		echo "$this->item_name ----$this->price";
	}
}
class User
{
	public $username;
	public $password;
	public $email;

	public $stock;

	public function __construct()
	{
		$this->stock=new Stock;
	}

	public function sayDetails()
	{
		echo "$this->username purchased the following<br>";
		$this->stock->displayPrice();
	}

	public function addTostock($item,$price)
	{
		$this->stock->item_name=$item;
		$this->stock->price=$price;
	}

}

//implementations
$p1=new User;
$p1->username="collins simiyu wanjala";
$p1->password="salama";
$p1->email="collinssimiyu85@gmail.com";

$p1->addTostock("mac book pro",45000);
$p1->sayDetails();



?>