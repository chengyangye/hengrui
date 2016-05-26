{*<?php exit();?>*}
<script type="text/javascript" src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<textarea rows="30" cols="50" name="editor">{$editor_text}</textarea>
<script type="text/javascript">
	CKEDITOR.replace('editor',
	{
		filebrowserBrowseUrl :  '{$S_ROOT}ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl :  '{$S_ROOT}ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl :  '{$S_ROOT}ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl :  '{$S_ROOT}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl  :  '{$S_ROOT}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl  :  '{$S_ROOT}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	});
</script>
<!-- 新秀 -->
