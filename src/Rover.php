<?php
declare(strict_types=1);

final class Rover {

	private $x;
    private $y;
    private $dir;
    private $coord = ["N", "E", "S", "W"];

	public function __construct($x, $y, $dir) {
		$this->x = $x;
		$this->y = $y;
		$this->dir = $dir;
	}

	public function getPositionAndDirection() {
		return [$this->x, $this->y, $this->dir];
	}

	public function moveForward(){
		$this->move(true);
	}

	public function moveBackward(){
		$this->move(false);
	}

	public function turnRight() {
		$this->turn(true);
	}

	public function turnLeft() {
		$this->turn(false);
	}

	private function turn($right){
		$value = ($right)? 1: -1;
		$indexStart = ($right)? 0: 3;
		$key = array_search($this->dir, $this->coord) + $value;
		if (isset($this->coord[$key])) {
			$this->dir = $this->coord[$key];			
		} else {
			$this->dir = $this->coord[$indexStart];
		}
	}

	private function move($forward) {
		$valuesX = ($forward)? [0, 1, 0, -1] : [0, -1, 0, 1];
		$valuesY = ($forward) ? [1, 0, -1, 0] : [-1, 0, 1, 0];
		$key = array_search($this->dir, $this->coord);
		$this->x = $this->x + $valuesX[$key];
		$this->y = $this->y + $valuesY[$key];
	}
}
