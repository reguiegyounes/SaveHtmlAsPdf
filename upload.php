<?php
    if(!empty($_POST['data'])){
        $pdf_content = $_POST['data'];
        //Decode pdf content
        $pdf_decoded = base64_decode ($pdf_content);
        // create folder 'uploads' if not exist 
        if (!file_exists(__DIR__.'/uploads')) {
            mkdir(__DIR__.'/uploads', 0777, true);
        }
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