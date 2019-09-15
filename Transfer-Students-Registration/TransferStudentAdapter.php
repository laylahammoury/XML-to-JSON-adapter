<?php
include ('TransferStudent.php');

class TransferStudentAdapter implements NewStudentInterface
{

    private $firstName;
    private $lastName;
    private $fullName;
    private $entryYear;
    private $ID;
    private $acceptedHours;
    private $specialization;
    private $transfer;


    //constructor
    public function __construct($transfer, $acceptedHours, $specialization){
        $this->transfer = $transfer;
        $this->acceptedHours = $acceptedHours;
        $this->specialization = $specialization;
        $this->fullName = $this->firstName ." ". $this->lastName;
        $this->ID = $this->lastName[0]. $this->firstName. $this->entryYear;
    }


//        $this->firstName = $firstName;
//        $this->lastName = $lastName;
//        $this->entryYear = $entryYear;



    //setters
    public function setFirstName($firstName)           {$this->firstName = $firstName;}
    public function setLastName($lastName)             {$this->lastName = $lastName;}
    public function setEntryYear($entryYear)           {$this->entryYear = $entryYear;}
    public function setAcceptedHours($acceptedHours)   {$this->acceptedHours = $acceptedHours;}
    public function setSpecialization($specialization) {$this->specialization = $specialization;}

    //getters
    public function getFirstName()      {return $this->firstName;}
    public function getLastName()       {return $this->lastName;}
    public function getLFullName()      {return $this->fullName;}
    public function getEntryYear()      {return $this->entryYear;}
    public function getID()             {return $this->ID;}
    public function getAcceptedHours()  {return $this->acceptedHours;}
    public function getSpecialization() {return $this->specialization;}


    public function getInfo()
    {
        // TODO: Implement getInfo() method.
    }
}