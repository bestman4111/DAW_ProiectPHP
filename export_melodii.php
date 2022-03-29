<?php
    @ $db = mysqli_connect('localhost', 'id18192247_bestman4111', '!AlexTibi0100', 'id18192247_tiberiuniculae');

    if(!$db){
        die("Connection failed: " .mysqli_connect_error());
    }
    
    $result = $db->query('select * from Melodii');
    $result = $result->fetch_all(MYSQLI_ASSOC);
    
    $titlu = array_keys($result[0]);
    $data = [$titlu];
    
    foreach($result as $row){
        array_push($data, array_values($row));
    }
    
    require '../public_html/PHP_XLSXWriter-master/xlsxwriter.class.php';
    
    $filename = 'melodii.xlsx';
    
    $writer = new XLSXWriter();
    $writer->writeSheet($data);
    $writer->writeToFile($filename);

    $file = '../public_html/'.$filename;
    
    if(!file_exists($file)){
        die("File not found");
    }
    else{
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-type: application/octet-stream");
        header("Content-Type: ".mime_content_type($file));
        while(ob_get_level()){
            ob_end_clean();
        }
        readfile($file);
    }

?>