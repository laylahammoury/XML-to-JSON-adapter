<?php


class TransferStudent
{
    private $firstName;
    private $lastName;
    private $ID;
    private $entryYear;
    private $GPA;
    private $passedHours;
    private $specialization;

   //constructor
    public function __construct($firstName, $lastName, $ID, $entryYear, $GPA, $passedHours, $specialization)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->ID = $ID;
        $this->entryYear = $entryYear;
        $this->GPA = $GPA;
        $this->passedHours = $passedHours;
        $this->specialization = $specialization;
    }

    //setters
    public function setFirstName($firstName)          {$this->firstName = $firstName;}
    public function setLastName($lastName)            {$this->lastName = $lastName;}
    public function setID($ID)                        {$this->ID = $ID;}
    public function setEntryYear($entryYear)          {$this->entryYear = $entryYear;}
    public function setGPA($GPA)                      {$this->GPA = $GPA;}
    public function setPassedHours($passedHours)      {$this->passedHours = $passedHours;}
    public function setSpecialization($specialization){$this->specialization = $specialization;}


   //getters
    public function getFirstName()      {return $this->firstName;}
    public function getLastName()       {return $this->lastName;}
    public function getID()             {return $this->ID;}
    public function getEntryYear()      {return $this->entryYear;}
    public function getGPA()            {return $this->GPA;}
    public function getPassedHours()    {return $this->passedHours;}
    public function getSpecialization() {return $this->specialization;}



}