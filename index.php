<?php
	echo '<b>Interfaces:</b>'.'</br>';

	interface CanMove{
		public function move();
	}

	interface CanFly{
		public function fly();
	}
	
	class Car implements CanMove{
		public function move(){
			echo "Car movement".'</br>';
		}
	}

	class Aircraft implements CanFly{
		public function fly(){
			echo "Airplane flight".'</br>';
		}
	}

	$car = new Car();
	$car->move();

	$plane = new Aircraft();
	$plane->fly();

	echo '</br>'.'<b>Traits:</b>'.'</br>';

	trait CanMove1{
		public function move(){
			echo "Car movement".'</br>';
		}
	}

	trait CanFly1{
		public function fly(){
			echo "Airplane flight".'</br>';
		}
	}
	
	class Car1{
		use CanMove1;
	}

	class Aircraft1{
		use CanFly1;
	}

	$car1 = new Car1();
	$car1->move();

	$plane1 = new Aircraft1();
	$plane1->fly();
?>