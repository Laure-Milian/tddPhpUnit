<?php
declare(strict_types=1);

final class Rover {

	private $x;
    private $y;

	private function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public static function createInstance($x, $y): self {
		return new self($x, $y);
	}

	public function getPosition() {
		return [$this->x, $this->y];
	}
}
/*final class Rover {

	private $x = 0;
	private $y = 0;

	public function getPosition() {
		return $this->x;
	}
}*/