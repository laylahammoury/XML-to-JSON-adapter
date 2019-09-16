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
    public function __construct($transfer, $acceptedHours, $specialization){
        $this->transfer = new TransferStudent($transfer);
        $var = new TransferStudent();
        print($transfer->getFirstname());
        $this->acceptedHours = $acceptedHours;
        $this->specialization = $specialization;
        $transferInfoFile = $transfer->getInf();
        $xml_info = simplexml_load_file($transferInfoFile);
        //adapter should'nt have fname and lname, it should only tke a transferStudent and take the info from it.
        //$this->fullName = $this->transfer->getFirstName(); ." ". $this->lastName;
        //$this->ID = $this->lastName[0]. $this->firstName. $this->entryYear;
        //$this->firstName = $firstName;
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