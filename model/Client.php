<?php
namespace bi\Model;

class Client
{
    public $id;
    public $externalId;
    public $name;
    public $city;
    public $district;
    public $neighborhood;
    public $zip;
    public $country;
    public $state;
    public $ibge;
    public $mesoregion;
    public $microregion;

    function __construct()
    {
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getExternalId() {
        return $this->externalId;
    }
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getCity() {
        return $this->city;
    }
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function getNeighborhood() {
        return $this->neighborhood;
    }
    public function setNeighborhood($neighborhood) {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    public function getZip($onlyNumbers = false){
        if($onlyNumbers){
            return preg_replace("/\D/","", $this->zip);
        }else{
            return $this->zip;
        }
    }
    public function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }

    public function getCountry() {
        return $this->country;
    }
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function getState() {
        return $this->state;
    }
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    public function getDistrict() {
        return $this->district;
    }
    public function setDistrict($district) {
        $this->district = $district;
        return $this;
    }

    public function getIBGE() {
        return $this->ibge;
    }
    public function setIBGE($ibge) {
        $this->ibge = $ibge;
        return $this;
    }

    public function getMesoregion() {
        return $this->mesoregion;
    }
    public function setMesoregion($mesoregion) {
        $this->mesoregion = $mesoregion;
        return $this;
    }

    public function getMicroregion() {
        return $this->microregion;
    }
    public function setMicroregion($microregion) {
        $this->microregion = $microregion;
        return $this;
    }

    public function getCRC32(){
        $string  = "";
        $string .= $this->externalId
          .$this->name
          .$this->city
          .$this->neighborhood
          .$this->getZip()
          .$this->zip
          .$this->country
          .$this->state
          .$this->district
          .$this->ibge
          .$this->mesoregion
          .$this->microregion;
        return hash("crc32", $string);
    }
}
?>
