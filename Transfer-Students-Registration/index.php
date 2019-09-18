<?php
    include_once('TransferStudentAdapter.php');
    include_once('TransferStudent.php');
    $OmarTransfer = new TransferStudent('Omar', 'Hammoury', '175050',
                                            '2017', '85', '77','ComputerScience');
    $OmarXMLInfo = $OmarTransfer->getInfo();

    $transferAdapter = new TransferStudentAdapter($OmarTransfer , 50 ,"Computer Science" );
    print($transferAdapter->getAcceptedHours());
    print($transferAdapter->getFirstName());
    print($transferAdapter->getID());

//TODO: send the current year this way when you instantiate an object
//$year = (new DateTime)->format("Y");