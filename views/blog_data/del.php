<form method="post" action="blog_data.php?method=del">
Delete OK?<br>
TITLE<br>
<?php print $s->html( $data["data"]["title"] ); ?><br>
BODY<br>
<?php print str_replace( "\n", "<br>", $s->html( $data["data"]["body"] ) ); ?><br>
<input type="hidden" name="id" value="<?php print $data["data"]["id"]; ?>">
<input type="submit" value="DELETE">
<a href=".">back</a>
</form>