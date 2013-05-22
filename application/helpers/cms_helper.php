<?php 

function btn_edit($uri){
	return anchor($uri, '<i class="icon-edit"></i>');
}
function btn_delete($uri){
	return anchor($uri, '<i class="icon-remove"></i>', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"));
}
function btn_view($uri) {
	return anchor($uri, '<i class="icon-eye-open"></i>');
}