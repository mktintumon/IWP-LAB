<!DOCTYPE html>
<html>
<head>
    <title>22MCA0170-MOHIT</title>
</head>
<body>
    <h1>Upload your file</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required><br><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>



<?php
// checking allowed formats
function format($file){
    $allowed = ['doc', 'docx', 'pdf'];
    $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    return in_array($fileExt, $allowed);
}


// checking the allowed limit
function size($file){
    $maxSize = 10 * 1024 * 1024; // 10 MB in bytes
    return $file['size'] <= $maxSize;
}


// generating a unique name to prevent duplication
function genUniqueName($file, $uploadDir){
    $original = pathinfo($file['name'], PATHINFO_FILENAME);
    $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $suffix = 0;

    // checking if file already exists -> add suffix number
    while (file_exists($uploadDir.$original.($suffix > 0 ? "_$suffix" : '').'.'.$fileExt)) {
        $suffix++;
    }

    $uniqueName = $original.($suffix > 0 ? "_$suffix" : '').'.'.$fileExt;
    return $uniqueName;
}



// Check if the form is submitted
if (isset($_POST['submit'])) {
    $uploadedFile = $_FILES['file'];

    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        // Check file format and size and generate unique name
        if (format($uploadedFile) && size($uploadedFile)) {
    
            $uploadDir = 'uploads/';
            $uniquename = genUniqueName($uploadedFile,$uploadDir);

            $dest = $uploadDir . $uniquename;

            if (move_uploaded_file($uploadedFile['tmp_name'], $dest)) {
                echo '<font color="green">File uploaded successfully!!!';
            } else {
                echo 'Error:<font color="red"> Unable to upload file.';
            }
        } else {
            echo 'Error:<font color="red"> Invalid file format or size.';
        }
    } else {
        echo 'Error:<font color="red"> File upload error. Please try again.';
    }
}
?>


