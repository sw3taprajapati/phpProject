</main>
</div>
<footer class="footer">
	<div class="container">
		<span><i class="fa fa-copyright"></i> Copyright 2018 | All rights reserved</span>
	</div>
</footer>

<script>
	function confirmationBox($operation){
		return confirm("'Are you sure you want to "+$operation+"'");
	}

	setTimeout(function(){
		document.getElementById('<?php echo $_SESSION['class'] ?>').remove();
	}, 3000);

	function logout(){
		return confirm('Are you sure you want to logout?');
	}
</script>
</div>
<?php 
?>
</body>
</html>