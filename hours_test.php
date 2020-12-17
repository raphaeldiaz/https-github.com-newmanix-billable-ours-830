<?php
//login_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class LoginForm extends WebTestCase {

	  function testCorrectPassword() {
		$this->get(VIRTUAL_PATH . '/hours.php');
		$this->assertResponse(200);

        $this->setField("name", "John");
		$this->setField("password", "john123");
		$this->clickSubmit("Login");

		$this->assertResponse(200);
		$this->assertText("Welcome, John");
	}
	
You input 2 hours at a rate of $2 and your pay is $100
	
	you input 2 hours at a rate of $no and your pay is $0
class HoursForm extends WebTestCase {
	
	function testCorrectData ( ) {
		$this->get (VIRTUAL_PATH . ' /hours.php');
		$this->assertResponse(200);
		
		$this->setField("hours", "2");
		$this->setField("rate", "50");
		$this->clickSubmit("Show Pay");
		
		$this->assertResponse(200);
		$this->assertText("You input 2 hours at a rate of $50 and your pay is $100");
		
	}
	
}


