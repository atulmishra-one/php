<script>
	function rect()
	{
		var x = document.getElementById("Rect").offsetTop;
		var y = document.getElementById("Rect").offsetLeft;
		
		alert(y+' '+x);
	}
</script>


<div id="Rect">Hello World!</div>

<button onclick="rect()">Click me</button>