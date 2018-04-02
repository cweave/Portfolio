	<footer>
		<p>Handcoded by Christa &copy; <?php echo date("Y"); ?></p>
		<script src="js/input_mask.js"></script>
		<script>$(":input").inputmask();$("#phone").inputmask({"mask": "(999) 999-9999"});</script>
		<script>
		function emailSent(){var x;if(confirm("Thank you for your interest! I will be in contact with you as soon as possible!") == true) {window.location.href = "index";document.getElementById("myForm").reset();}document.getElementById("demo").innerHTML = x;}
		function captchaError(){var x;if(confirm("Message not sent. Please check the captcha.") == true) {window.location.href = "index";document.getElementById("myForm").reset();}document.getElementById("demo").innerHTML = x;}
		</script>
	</footer>
</body>