<?php
	/* When the properties are set public, they can be easily changed from outside the class.
	This isn't good practice, as we want them to not be that easily modified.

	class User {
		
		public $name;
		public $type;

		public function __construct($name, $type){
			$this->name = $name;
			$this->type = $type;
		}

		public function login() {
			echo 'The user logged in';
		}

	}

	$userOne = new User();

	$userOne->login();
	echo $userOne->name;

	$userTwo = new User('PC_X', 'Computer');

	echo $userTwo->name;
	echo $userTwo->type;
	
	Private classes would avoid anything accessing or modifying values in such classes.
	*/

	class User {

		private $name;
		private $type; // Private properties or methods cannot be accessed even by child classes.
		public $role = 'member';

		public function __construct($name, $type) {
			$this->name = $name;
			$this->type = $type;
		}

		public function __destruct() {
			echo "The user $this->name was removed";
		}
		// The destruct method is ran by either unsetting a variable object User, thus deleting it, or by
		// the end of the php code, as by default, php would delete those variable objects since we don't need
		// anymore.

		public function __clone() {
			$this->name = $this->name . '(cloned)';
		}

		public function login() {
			echo $this->name . '  logged in';
		}

		public function getName() {
			return $this->name;
		}

		public function setName($name) {
			if(is_string($name) && strlen($name) > 1) {
				$this->name = $name;
				return "The name has been updated to $name";
			} else {
				return "Not a valid name";
			}
		}
	}

	class AdminUser extends User {

		public $level;
		public $role = "admin"; // Child classes can override properties and methods of their parents!

		public function __construct($name, $type, $level) {
			$this->level = $level;
			parent::__construct($name, $type);
		}

	}

	$userOne = new User('PC_X', 'Desktop');
	$userTwo = new User('PC_Y', 'Desktop');
	$userThree = new AdminUser("Yoshi", "dinasour", 5);

	// echo $userOne->getName();
	// echo $userOne->setName(50);
	echo $userOne->getName();
	echo $userThree->getName();
	//strpos($email, '@') > -1) If this email here contains an @ symbol, it'd return the position where that symbol is at. Otherwise, it'd return -1.
	// So, this way we ensure a field has a @ symbol to go through our conditional filter!

	$userFour = clone $userOne;
?>