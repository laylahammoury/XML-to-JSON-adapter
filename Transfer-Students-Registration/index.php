<?php
    include ('TransferStudent.php');

    $OmarTransfer = new TransferStudent('Omar', 'Hammoury', '175050',
                                            '2017', '85', '77','ComputerScience');

    $OmarXMLInfo = $OmarTransfer->getInfo();