<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Upload Dokumen</title>
</head>
<body>

<h2>Unggah dokumen</h2>
<form action="proses_upload.php" method="post" enctype="multipart/form-data">
    <!-- <input type="file" name="files[]" multiple="multiple" accept=".jpeg, .doc, .docx"> -->
    <input type="file" name="files[]" multiple="multiple" accept=".jpeg, .jpg, .png">
    <input type="submit" value="Unggah">
</form>
    
</body>
</html>