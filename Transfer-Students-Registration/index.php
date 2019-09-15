<?php
    include ('TransferStudent.php');

    $OmarTransfer = new TransferStudent('Omar', 'Hammoury', '175050',
                                            '2017', '85', '77','ComputerScience');

    $OmarXMLInfo = $OmarTransfer->getInfo();

//TODO: send the current year this way when you instantiate an object
//$year = (new DateTime)->format("Y");