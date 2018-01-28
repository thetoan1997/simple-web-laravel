<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo Form::open(array('url'=>'/uploadFile','files'=>'true'));
        echo 'Select the file to upload.';
        echo Form::file('image');
        echo Form::submit('Upload File');
        echo Form::close();
    ?>
</body>
</html>