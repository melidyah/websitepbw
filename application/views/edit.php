<html>
<head>
	<title>Edit Comment</title>
</head>

<body>
    <form method="post" action="<?php echo base_url('index.php/Welcome/update') ?>">
      Name<br>
      <input type="text" name="name" value="<?php echo $name ; ?>">
      <br>
      Comment<br>
      <input type="text" name="comment" value="<?php echo $comment ; ?>">
			<input type="hidden" name="id" value="<?php echo $id ; ?>">
      <br><br>
      <input type="submit" value="Edit">
    </form>
</body>
</html>
