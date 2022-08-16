<?php
    const DATA_FILE = 'data.txt';

    function getList(){
        $dataFile = fopen(DATA_FILE, "r");
        $result = [];
        while(!feof($dataFile)) {
            $line = fgets($dataFile);
            if(strlen(trim($line)) == 0){
                continue;
            }
            $lineArr = explode("|", $line);
            $result[] = $lineArr;
        }
        fclose($dataFile);
    
        return $result;
    }
    
    function saveFileByArr($arr){
        file_put_contents(DATA_FILE, "");
        foreach ($arr as $row) {
            $line = implode("|", $row);
            $line = trim($line) . "\n";
            file_put_contents(DATA_FILE, $line, FILE_APPEND);
        }
    }
?>