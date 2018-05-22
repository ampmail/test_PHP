<?php
    function getAppartmentLocation ($appNumber = 81, $levelQty = 5, $appartmentsPerFloor = 4, $entranceNumber = 5){
        $entrance = ceil($appNumber / ($levelQty * $appartmentsPerFloor));
        echo "Entrance: $entrance\n";
        $floor = ceil(($appNumber - (($entrance > 1)?(($entrance - 1) * $levelQty * $appartmentsPerFloor):(0))) / $appartmentsPerFloor);
        echo "Floor: $floor";
    }
    getAppartmentLocation(); //
//
