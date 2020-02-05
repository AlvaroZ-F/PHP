<?php

	// Create a user validator class to handle validation.
	// Constructor which takes in POST data from form.
	// Check required "fields to check" are present in the data.
	// Create methods to validate individual fields.
	// --- A method to validate an username.
	// --- A method to validate an email.
	// return an error array once all checks are done.

	class UserValidator {
	
		private $data;
		private $errors = [];
		private static $fields = ['username', 'email'];

		public function __construct($post_data) {
			$this->data = $post_data;
		}

		public function validateForm() {
			
			foreach(self::$fields as $field) {
				if(!array_key_exists($field, $this->data)){
					trigger_error("$field is not present in data");
					return;
				}
			}

			$this->validateUsername();
			$this->validateEmail();

		}

		private function validateUsername() {
		
			$val = trim($this->data['username']);

			if(empty($val)){
				$this->addError();
			}

		}

		private function validateEmail() {
		
		}

		private function addError() {
			
		}

	}

	?>