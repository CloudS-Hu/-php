<?php
$_SESSION["id"]=-1;
$post_id=$_GET["post_id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript">
    window.location.href="post_page.php?post_id=<?php echo $post_id ?>";
</script>
</head>
<body>

</body>
</html>