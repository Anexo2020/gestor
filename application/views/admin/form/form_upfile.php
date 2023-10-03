<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php echo $error;?>

<?php echo form_open_multipart('admin/uploadfile/nuevaimagen');?>


<input type="text" name="userid" value="79" />

<input type="file" name="files[]" size="20" multiple />


<br /><br />

<input type="submit" value="upload" />

</form>
</body>
</html>