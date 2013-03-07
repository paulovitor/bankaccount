<?php

use bankaccount\model\BankAccount;

class BankAccountTest extends PHPUnit_Framework_TestCase {

    public function testAdd() {
        $classe = new BankAccount;
        $this->assertEquals(4, $classe->add(2, 2));
    }

}

?>
