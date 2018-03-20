<html>
<head>
	<title>Edit Comment</title>
</head>

<body>
    <form action="<?php echo base_url('index.php/Welcome/update') ?>">
      Name<br>
      <input type="text" name="name" value="<?php echo $name ; ?>">
      <br>
      Comment<br>
      <input type="text" name="comment" value="<?php echo $comment ; ?>">
      <br><br>
      <input type="submit" value="Edit">
    </form>
</body>
</html>
