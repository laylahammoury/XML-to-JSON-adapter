<?php
include_once ('TransferStudent.php');
include_once ('NewStudentInterface.php');

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
    public function __construct($transferComming, $acceptedHours, $specialization){
        $this->transfer = clone $transferComming;
        $this->acceptedHours = $acceptedHours;
        $this->specialization = $specialization;
        $xml_info = simplexml_load_file( 'tempXML.xml' );
        foreach($xml_info->children() as $student) {
            $this->firstName = $student->first_name;
            $this->lastName = $student->last_name;
            $this->fullName =$this->firstName." " .$this->lastName;
            $this->entryYear =$student->entry_year;
            $this->ID =$student->id;
        }
    }

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