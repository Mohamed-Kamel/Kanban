
<a href="" >Add</a>

<div style="display: none;">

	Title : <input type="text" name="title">
	Content : <input type="text" name="content">

</div>


<script type="text/javascript">
	
$("#add").on("click", function(event){
	event.preventDefault();
	$("div").slideDown();
});

</script>

