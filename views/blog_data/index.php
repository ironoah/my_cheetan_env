<p>
<a href="blog_data.php?method=add">Write new</a>
</p>

<?php foreach( $data["datas"] as $data ){ ?>
<table border=1 cellpadding=8 cellspacing=0>
  <tr>
    <td>
    	<?php print $s->html( $data["title"] ); ?>&nbsp;
    	<a href="blog_data.php?method=edit&id=<?php print $data["id"]; ?>">Edit</a>&nbsp;
    	<a href="blog_data.php?method=del&id=<?php print $data["id"]; ?>">Del</a>
    </td>
  </tr>
  <tr>
    <td><?php print str_replace( "\n", "<br>", $s->html( $data["body"] ) ); ?></td>
  </tr>
  <tr>
    <td><?php print InitTime( $data["modified"] ); ?></td>
  </tr>
</table>
<br>
<?php } ?>
