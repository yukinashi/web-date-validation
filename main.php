function date_validation($date,$year=4){
    return preg_match("/^[1-9][0-9]{".$year."}-(1[0-9]|0[1-9])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date); 
    }
