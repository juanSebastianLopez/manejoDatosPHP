<?php

use PHPUnit\Framework\TestCase;
use App\validate;

class validateTest extends TestCase{
        // Se crea la function que valida email
    public function test_email(){
        $email = validate::email('jsebas@test.com');
        $this->assertTrue($email);
        
        $email = validate::email('jsebas@@test.com');
        $this->assertFalse($email);
    }
            // Se crea la function que valida url
    public function test_url(){
        $url = validate::url('https://home.com');
        $this->assertTrue($url);
        
        $url = validate::url('home.com');
        $this->assertFalse($url);
    }
            // Se crea la function que valida password
    public function test_password(){
        $password = validate::password('abcde123');
        $this->assertTrue($password);
         
        $password = validate::password('Abc1w');
        $this->assertFalse($password);
    }
}