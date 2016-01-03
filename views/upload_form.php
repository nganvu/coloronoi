<div class="middle">
    <div class="container">
        <h2>Upload your favorite image!</h2>
    </div>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <p>Select image to upload:</p>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button class="btn btn-default" type="submit">
            <span aria-hidden="true" class="glyphicon glyphicon-upload"></span>
            Upload
        </button>
    </div>
</form>