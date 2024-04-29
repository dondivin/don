<?php
$file = $_FILES['file']['name'];
echo"
<div>
<p>$file</p>
</div>
";
move_uploaded_file($_FILES['tmp_name'],'upload/'.$file['name']);

?>