<form action="uploadingfiles.php" method="post" enctype="multipart/form-data">
    <h1>Please choose your file </h1>
    <label>File </label>
    <input type="file" name="file[]" multiple />
    <label>Desc </label>
    <input type="text" name="desc"/>
    <input type="submit"/>
</form>