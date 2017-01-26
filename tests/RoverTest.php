<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase {

	public function testCreateInstanceOfRoverWhenPositionGiven() {
        $this->assertInstanceOf(
            Rover::class,
           $rover = new Rover(0,0,"N")
        );
    }

    public function testPositionShouldBe00() {
    	$rover = new Rover(0,0,"N");
    	$this->assertEquals(
    		[0, 0],
    		$rover->getPosition()
    	);
    }

    public function testDirectionShouldBeNorth() {
    	$rover = new Rover(0,0,"N");
    	$this->assertEquals(
    		"N",
    		$rover->getDirection()
    	);
    }

 


}
