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
		if($this->dir === "N"){
			$this->y= $this->y + 1;	
		} 
		else if ($this->dir === "E") {
			$this->x = $this->x + 1;
		}
		else if($this->dir === "S"){
			$this->y = $this->y - 1;
		}
		else if ($this->dir === "W"){
			$this->x = $this->x - 1;
		}
	}

	public function moveBackward(){
		if($this->dir === "N"){
			$this->y= $this->y - 1;	
		}
		else if ($this->dir === "E") {
			$this->x = $this->x - 1;
		}
		else if($this->dir === "S"){
			$this->y = $this->y + 1;
		}
		else if ($this->dir === "W"){
			$this->x = $this->x + 1;
		} 
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

}
