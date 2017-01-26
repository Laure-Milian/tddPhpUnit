<?php
declare(strict_types=1);

final class Rover {

	private $x;
    private $y;
    private $dir;

	public function __construct($x, $y, $dir) {
		$this->x = $x;
		$this->y = $y;
		$this->dir = $dir;
	}
	public function getPosition() {
		return [$this->x, $this->y];
	}
	public function getDirection() {
		return $this->dir;
	}

}
