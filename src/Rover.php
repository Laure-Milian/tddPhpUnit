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

	public function turnRight() {
		if($this->dir === "N") {
			$this->dir = "E";
		}
		else if($this->dir === "E") {
			$this->dir = "S";
		}
		else if($this->dir === "S") {
			$this->dir = "W";
		}
		else if($this->dir === "W") {
			$this->dir = "N";
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
