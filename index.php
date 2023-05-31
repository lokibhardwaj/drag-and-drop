<!DOCTYPE html>
<html>
<head>
<script src="js/dropzone-min.js"></script>
<link href="css/dropzone.css" rel="stylesheet" type="text/css" />

</head>

<body>

<script>
  // Note that the name "myDropzone" is the camelized
  // id of the form.
  Dropzone.options.myDropzone = {
    // Configuration options go here
  };
</script>
<form action="upload.php" class="dropzone" id="my-dropzone"></form>
<script>
  Dropzone.discover();
</script>
</body>
</html> 