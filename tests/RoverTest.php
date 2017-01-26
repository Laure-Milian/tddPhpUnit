<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class RoverTest extends TestCase {

	public function testCreateInstanceOfRoverWhenPositionGiven() {
        $this->assertInstanceOf(
            Rover::class,
            Rover::createInstance(0,0)
        );
    }

    public function testPositionShouldBe00() {
    	$rover = Rover::createInstance(0,0);
    	$this->assertEquals(
    		[0, 0],
    		$rover->getPosition()
    	);
    }


}



/*final class RoverTest extends testCase {
	  public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }
}*/
/*final class RoverTest extends TestCase {

	public function initialPositionOfTheRoverIsX0Y0(): void {
		$this->assertInstanceOf(
			Rover::class,
			Rover::getPosition([0,0])
			);

	}
}*/