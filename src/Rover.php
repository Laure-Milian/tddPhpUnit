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
		$coord = ["N", "E", "S", "W"];
		$key = array_search($this->dir, $coord);
		$len = count($coord);
		if ($key < $len) {
			$newKey = $key+1;
			$this->dir = $coord[$newKey];
		}
		else {
			$newKey = 0;
			$this->dir = $coord[$newKey];
		}
	}

	public function turnLeft() {
		if ($this->dir === "N") {
			$this->dir = "W";
		}
		else if($this->dir === "E") {
			$this->dir = "N";
		}
		else if($this->dir === "S") {
			$this->dir = "E";
		}
		else if($this->dir === "W") {
			$this->dir = "S";
		}
	}

}
