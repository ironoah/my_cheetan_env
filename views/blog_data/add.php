<form method="post" action="blog_data.php?method=add">
<font color="red"><?php print $data["errmsg"]; ?></font>
TITLE<br>
<input type="text" name="blog/title"><br>
BODY<br>
<textarea cols=40 rows=8 name="blog/body"></textarea><br>
<input type="submit" value="WRITE">
</form>