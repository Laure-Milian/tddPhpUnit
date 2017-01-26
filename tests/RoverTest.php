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
    		[0, 0, "N"],
    		$rover->getPositionAndDirection()
    	);
    }

    public function testDirectionShouldBeNorth() {
    	$rover = new Rover(0,0,"N");
    	$this->assertEquals(
    		[0,0,"N"],
    		$rover->getPositionAndDirection()
    	);
    }

    public function testWhenMooveForwardOnceFromNorthPositionShouldBe01() {
    	$rover = new Rover(0,0,"N");
    	$rover->moveForward();
    	$this->assertEquals(
    		[0, 1, "N"],
    		$rover->getPositionAndDirection()
    		);
    }

    public function testWhenMooveForwardTwicePositionShouldBe02() {
    	$rover = new Rover(0,0,"N");
    	$rover->moveForward();
    	$rover->moveForward();
    	$this->assertEquals(
    		[0,2,"N"],
    		$rover->getPositionAndDirection()
    	);
    }
    
    public function testWhenMooveForwardOnceFromEastPositionShouldBe10() {
    	$rover = new Rover(0,0, "E");
    	$rover->moveForward();
    	$this->assertEquals(
    		[1, 0,"E"],
    		$rover->getPositionAndDirection()
    		);
    }

    public function testWhenMooveForwardOnceFromSouthPositionShouldBe0moins1() {
    	$rover = new Rover(0,0, "S");
    	$rover->moveForward();
    	$this->assertEquals(
    		[0, -1,"S"],
    		$rover->getPositionAndDirection()
    		);
    }

    public function testWhenMooveForwardOnceFromWestPositionShouldBemoins10() {
    	$rover = new Rover(0,0, "W");
    	$rover->moveForward();
    	$this->assertEquals(
    		[-1, 0, "W"],
    		$rover->getPositionAndDirection()
    		);
    }

    public function testWhenTurnRightFromNorthNewDirectionShouldBeEast() {
    	$rover = new Rover(0,0,"N");
    	$rover->turnRight();
    	$this->assertEquals(
    		[0,0,"E"],
    		$rover->getPositionAndDirection()
    	);
    }
    
    public function testWhenTurnRightFromEastNewDirectionShouldBeSouth() {
    	$rover = new Rover(0,0,"E");
    	$rover->turnRight();
    	$this->assertEquals(
    		[0,0,"S"],
    		$rover->getPositionAndDirection()
    	);
    }

    public function testWhenTurnLeftFromNorthNewDirectionShouldBeWest() {
    	$rover = new Rover(0,0,"N");
    	$rover->turnLeft();
    	$this->assertEquals(
    		[0,0,"W"],
    		$rover->getPositionAndDirection()
    	);
    }

    public function testWhenTurnLeftFromEastNewDirectionShouldBeNorth() {
    	$rover = new Rover(0,0,"E");
    	$rover->turnLeft();
    	$this->assertEquals(
    		[0,0,"N"],
    		$rover->getPositionAndDirection()
    	);
    }

}
