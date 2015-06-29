<table>
<tr>
<th>Tieu de</th>
<th>Noi dung</th>
<th>Ghi chu</th>
</tr>
<?php 
if($blogs) {
    foreach($blogs as $blog) {
?>
<tr>
<td><?php echo $blog->title; ?> </td>
<td><?php echo $blog->body; ?> </td>
<td><?php echo $blog->note; ?> </td>
</tr>
<?php 
    }
}
?>
</table>