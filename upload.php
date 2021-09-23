<?php
    if(!empty($_POST['data'])){
        $pdf_content = $_POST['data'];
        //Decode pdf content
        $pdf_decoded = base64_decode ($pdf_content);
        //Write data back to pdf file
        $pdf = fopen (__DIR__.'/uploads/test.pdf','w');
        fwrite ($pdf,$pdf_decoded);
        //close output file
        fclose ($pdf);
        echo 'Done';
    } else {
        echo "No Data Sent";
    }
?>