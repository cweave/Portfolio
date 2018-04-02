<?php
include_once('./includes/header.php');
?>

<!-- Header / Home-->
<header class="fullscreenimg" id="home">
	<div class="typewriter">
		<span class="tag">&#60; christa weaver ></span>
		<span class="indent">a front-end web developer</span>
		<span class="indent">based out of the metro detroit area.</span>
		<span class="tag">&#60;&#47; christa weaver ></span>
	</div>
</header>

<div class="container padding64" id="expertise">
	<h1 class="center sectionheader">Knowledge Base</h1>
	<div class="row w3-padding-32">
		<div class="col lg5">
			<span class="fa fa-cogs fa-3x icon"></span><span class="expertise">Tool</span> <span class="expertiselight"> Box</span>
			<ul class="toolbox"> 
				<li class="dev-item">HTML5</li> 
				<li class="dev-item">CSS3</li> 
				<li class="dev-item">JavaScript</li> 
				<li class="dev-item">jQuery</li> 
				<li class="dev-item">PHP</li> 
				<li class="dev-item">MySQL</li>
				<li class="dev-item">W3.CSS</li>
				<li class="dev-item">Bootstrap</li>
			</ul>
		</div>
		<div class="col lg7">
			<span class="fa fa-code fa-3x icon"></span><span class="expertise">Front-End</span> <span class="expertiselight">Development</span>
			<p class="extpertisetxt">Creation of front end functionality from initial design and architecture to development, deployment, and management. W3 validated websites primarily using HTML, CSS, and JavaScipt/jQuery.</p>
			<span class="fa fa-comments-o fa-3x icon"></span><span class="expertise">Responsive</span> <span class="expertiselight">Web Design</span>
			<p class="extpertisetxt">Create user friendly, responsive websites by manually testing websites in various browsers and mobile devices to ensure cross-browser compatibility and responsiveness.</p>
			<span class="fa fa-database fa-3x icon"></span><span class="expertise">Back-End</span> <span class="expertiselight">Development</span>
			<p class="extpertisetxt">Dynamic websites that are more than just a page with words and pictures. Data entry websites integrated with databases that take information, store it, and display reports or other desired information.</p>
		</div>
	</div>
</div>

<div class="container padding64" id="projects">
	<div class="row projectdisplay content" data-aos="slide-up">
		<div class="col lg6 projectdesc">
			<h3 class="projectname">Portfolio</h3>
			<p>Hand crafted HTML and CSS with uses of jQuery and AOS CSS plugin.</p>
			<div class="center">
				<span class="used-item">HTML</span>
				<span class="used-item">CSS</span>
				<span class="used-item">jQuery</span>
			</div>		
		</div>
		<div class="col lg6 project">
			<img src="./images/projects/portfolio.png" alt="Original Web Development Portfolio for Christa Weaver">
		</div>
	</div>

	<div class="row projectdisplay content" data-aos="slide-up">
		<div class="col lg6 project">
			<a href="http://uvmsi.com" target="_blank" title="United Vending &amp; Market Services by Christa Weaver"><img src="./images/projects/united-vending.PNG" alt="United Vending &amp; Market Services by Christa Weaver"></a>
		</div>
		<div class="col lg6 projectdesc">
			<h3 class="projectname"><a href="http://uvmsi.com" target="_blank" title="United Vending &amp; Market Services by Christa Weaver">United Vending &amp; Market Services, Inc.</a></h3>
			<p>Local vending and market services company. Launched in November of 2017, UVMSI was the "first" website created on my own outside of the work environment.</p>
			<div class="center">
				<span class="used-item">W3.CSS</span>
				<span class="used-item">HTML</span>
				<span class="used-item">CSS</span>
				<span class="used-item">jQuery</span>
			</div>		
		</div>
	</div>

	<div class="row projectdisplay content" data-aos="slide-up">
		<div class="col lg6 projectdesc">
			<h3 class="projectname"><a href="https://portfolio.christaweaver.com/" target="_blank" title="First Web Development Portfolio">First Portfolio</a></h3>
			<p>Built with Bootstrap with custom CSS modifications. Established in late 2015/early 2016 to get a hands on experience with Bootstrap.</p>
			<div class="center">
				<span class="used-item">Bootstrap</span>
				<span class="used-item">HTML</span>
				<span class="used-item">CSS</span>
			</div>		
		</div>
		<div class="col lg6 project">
			<a href="https://portfolio.christaweaver.com/" target="_blank" title="First Web Development Portfolio"><img src="./images/projects/original-portfolio.PNG" alt="First Web Development Portfolio"></a>
		</div>
	</div>

	<div class="row projectdisplay content" data-aos="slide-up">
		<div class="col lg6 project">
			<a href="https://chinquiry.com" target="_blank" title="Chinquiry by Christa Weaver"><img src="./images/projects/chinquiry.png" alt="Chinquiry by Christa Weaver"></a>
		</div>
		<div class="col lg6 projectdesc">
			<h3 class="projectname"><a href="https://chinquiry.com" target="_blank" title="Chinquiry by Christa Weaver">Chinquiry</a></h3>
			<p>Circa early 2015. This was my first live website created in a course at Macomb Community College. Handcrafted with straight HTML and CSS. A modern, responsive Chinquiry is in the works.</p>
			<div class="center">
				<span class="used-item">HTML</span>
				<span class="used-item">CSS</span>
			</div>	
		</div>
	</div>

	<div class="row projectdisplay content" data-aos="slide-up">
		<label for="cta_trigger" class="btn btn-cta-inverse center">Interested in more?</label>
	</div>
</div>

<div class="container content padding64 center" id="contact">	
	<h1 class="sectionheader">Let's Work Together!</h1>
	<p class="center">New project? Employment? Curious for more?</p>
	<label for="cta_trigger" class="btn btn-cta center">Get in Touch!</label>
</div>
<div class="modal">
	<input id="cta_trigger" type="checkbox" />	
	<div class="modal_overlay" role="dialog" aria-labelledby="modal_title" aria-describedby="modal_desc">
		<div class="modal_wrap">
			<label for="cta_trigger">&#10006;</label>
			<h2 id="modal_title">Thanks for your Interest!</h2>
			<div id="modal_desc">
				<p><strong class="blue-text">New Project?</strong> Great! I'm currently accepting new projects and would love to hear about yours.</p>
				<p><strong class="blue-text">Interested in More?</strong> Want to see more of my work? Let me know and I'll gladly send more examples!</p>
			</div>
			<form method="POST" enctype="multipart/form-data" action="#">
				<input class="top25"
					id="name" 
					name="name" 
					type="text" 
					placeholder="John Doe *" 
					required
					aria-describedby="name-format" 
					aria-required="true" 
					pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" 
					title="Firstname Lastname">
				<input class="top25"
					id="phone" 
					name="phone" 
					type="tel" 
					placeholder="(555) 555-5555">
				<input class="top25"
					id="email" 
					name="email" 
					type="email" 
					placeholder="youremail@domain.com *" 
					required>
				<textarea class="top25" placeholder="Tell me what it is that you seek! *" required name="message" id="message"></textarea>
				<input type="text" name="gotcha" class="gotcha" value="" style="display: none;">
				<div class="row">
					<button class="btn btn-cta top25" id="submit" type="submit">
						<span class="fa fa-paper-plane"></span> SEND MESSAGE
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include_once('./includes/footer.php');
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name =  $email = $phone = $message = $gotcha = "";
	$name = check_input($_POST['name']);
	$phone = check_input($_POST['phone']);
	$email = check_input($_POST['email']);	
	$message = check_input($_POST['message']);
	if(!empty($gotcha)){
		exit;
	}
	/* Let's prepare the message for the e-mail */
	$emailMessage = "<strong>Message:</strong><br> $message<br><br>
		<strong>Name:</strong> $name<br>
		<strong>Phone:</strong> $phone<br>
		<strong>E-mail:</strong> $email<br>";


	/* Send the message using mail() function */
	$email_to = "cweav3r@gmail.com";	
	$subject = 'Portfolio Inquiry';
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: " . "howdy@christaweaver.com" . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	mail($email_to, $subject, $emailMessage, $headers);
	/* Redirect visitor to the thank you page */
	echo "<script>emailSent();</script>";
	exit();


} // End of If $_POST["email"]


/* Functions we used */
function check_input($data, $problem='')
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if ($problem && strlen($data) == 0)
	{
		show_error($problem);
	}
	return $data;
}

?>