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
    
    paramName: "file", // The name that will be used to transfer the file
    accept: function(file, done) {console.log(file.type);
      var  fileType = file.type;
      var validImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/webp'];
      if (!validImageTypes.includes(fileType)) {
        done("Allowed image types: jpg, jpeg, gif, png and webp");
      }
      else { done(); }
    }

  };
</script>
<form action="upload.php" class="dropzone" id="my-dropzone"></form>
<script>
  Dropzone.discover();
</script>
</body>
</html> 