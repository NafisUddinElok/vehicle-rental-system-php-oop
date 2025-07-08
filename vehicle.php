<?php
class Vehicle{
    private $name;
    private $type;
    private $available;

    public function __construct($name, $type, $available = true){
        $this -> name = $name;
        $this -> type = $type;
        $this -> available = $available;
    }

    public function rent(){
        if($this->available){
            $this->available = false;
            echo " Vehicle '{$this->name}' has been rented successfully.<br>";
        } else {
            echo " Vehicle '{$this-> name}' is already rented. <br>";
        }
    }

    public function returnVehicle(){
        if(!$this->available){
            $this->available = true;
            echo " Vehicle '{$this->name}' returned successfully.<br>";
        } else {
            echo " Vehicle '{$this-> name}' was not rented. <br>";
        }
    }

    public function getInfo(){
        return [
            'name' => $this-> name, 
            'type' => $this-> type, 
            'available' => $this->available ? 'Yes' : 'No'
        ];
    }
}

$vehicles = [];

$vehicles[] = new Vehicle("Toyota Corolla", "Car");
$vehicles[] = new Vehicle("Yamaha R15", "Bike");
$vehicles[] = new Vehicle("Suzuki Swift", "Car");

$vehicles[0]->rent();
$vehicles[1]->rent();
$vehicles[0]->rent();
$vehicles[0]->returnVehicle();
$vehicles[0]->returnVehicle();

echo "<h3> Vehicle List: </h3>";
foreach($vehicles as $vehicle){
    $info = $vehicle->getInfo();
    echo "Name: {$info['name']}, Type: {$info['type']}, Available: {$info['available']}<br>";
}
?>