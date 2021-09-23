<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Html to PDF</title>
    </head>
    <body>
        <div id="container">
            <div class="link-container">
                <button class="btn-generate" onclick="SaveAtClient()" id="PDF">Generate in client</button>
                <button class="btn-generate" onclick="SaveAtServer()" id="PDF">Generate in server</button>
            </div>
            <div id="html-template">
                <?php require_once __DIR__ . '/TemplatePdf/html-template.php'; ?>
            </div>
        </div>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>