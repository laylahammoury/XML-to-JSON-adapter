<?php


class TransferStudent
{
    private $firstName;
    private $lastName;
    private $ID;
    private $entryYear;
    private $graduationYear;
    private $GPA;
    private $passedHours;
    private $specialization;

    //setters
    public function setFirstName($firstName)          {$this->firstName = $firstName;}
    public function setLastName($lastName)            {$this->lastName = $lastName;}
    public function setID($ID)                        {$this->ID = $ID;}
    public function setEntryYear($entryYear)          {$this->entryYear = $entryYear;}
    public function setGraduationYear($graduationYear){$this->graduationYear = $graduationYear;}
    public function setGPA($GPA)                      {$this->GPA = $GPA;}
    public function setPassedHours($passedHours)      {$this->passedHours = $passedHours;}
    public function setSpecialization($specialization){$this->specialization = $specialization;}


   //getters
    public function getFirstName()      {return $this->firstName;}
    public function getLastName()       {return $this->lastName;}
    public function getID()             {return $this->ID;}
    public function getEntryYear()      {return $this->entryYear;}
    public function getGraduationYear() {return $this->graduationYear;}
    public function getGPA()            {return $this->GPA;}
    public function getPassedHours()    {return $this->passedHours;}
    public function getSpecialization() {return $this->specialization;}



}