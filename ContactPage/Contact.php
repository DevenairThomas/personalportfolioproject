<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ContactPage</title>
	<!-- name devenair Thomas, CSCI 434 WebPRogramming, 10/31/2021, Contact Page in php-->
<link href="../Blog/css/style.css" rel="stylesheet" type="text/css">
</head>
<header>
	
	<div class = "headingbar sticky">
  <nav>
    <ul>
		
      <li> <a href="../index.html">About</a> </li>
      <li> <a href="../index.html">Portfolio</a> </li>
      <li> <a href="../Store/Store.html">Store</a> </li>
      <li> <a href="ContactPage.html">Contact</a> </li>
      <li> <a href="../Blog/Blog.html">Blog</a> </li>
			
    </ul>
	</nav>
	</div>
	</header>
		
		<div class = "iconlist">
		<a href="https://www.instagram.com/livelongstudios/"><img src="../img/insta_icon.png" alt = "insta"></a>
		<a href="https://www.youtube.com/channel/UCokGI0XsgIhtaaH5AWI5q8w"><img src="../img/youtube.png" alt = "youtube"></a>
		<a href="https://www.linkedin.com/in/deven-thomas-22698421a/"><img src="../img/linkedin.png" alt = "linkedin"></a>
		</div>
		
	<div class = "Contact_text">
		Contact
	</div>
<article>
<div class="contact-form-section">
  <div class="form-full">
    <div id="w-node-div-block-fddbe763" class="div-block-51">
      <h1 class="form-title-cf10">Let's chat.<br>
        Tell me about your project.</h1>
      <p class="form-subtitle-cf10">Let's make something 🤟</p>
      <a data-w-id="e5f5e8e0-fb40-3a66-c492-744c26f96331" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" href="mailto:livelongstudios@gmail.com?subject=Project%20Inquiry" class="grid-block contact w-inline-block">
      <div class="div-block-52"><img src="https://uploads-ssl.webflow.com/5efbc66bfe713c08511b3024/5efbda344323255f65042dbb_mail-icon.svg" alt="" class="grid-icon mail"></div>
      <div class="profile-details">
        <div class="faq-title contact">Mail me at
          <span class="text-span-9"><strong class="bold-text-41"> livelonstudios@gmail.com</strong></span></div>
      </div>
      </a></div>
    <section id="contact-form" class="contact-form wf-section">
      <div class="w-container">
        <p class="form-subtitle-cf10 heading">Send me a message🚀</p>
        <div id="Project-Inquiry-Form" class="project-inquiry-form w-form">
          <form id="wf-form-Project-Inquiry" name="wf-form-Project-Inquiry" data-name="Project Inquiry" method="get" class="form-cf10">
            <div class="contact-collect">
              <div class="form-subwrapper-cf10">
                <input type="text" class="text-field-cf10 w-input" autofocus="true" maxlength="256" name="Client-Name" data-name="Client Name" placeholder="Full name*" id="Client-Name" required="">
                <input type="email" class="text-field-cf10 w-input" maxlength="256" name="Client-Email" data-name="Client Email" placeholder="Email address*" id="Client-Email" required="">
              </div>
              <div class="services-checkbox">
                <div class="checkbox-wrapper-cf10">
                  <input type="text" class="text-field-cf10 other w-input" maxlength="256" name="Subject" data-name="Subject" placeholder="Subject" id="Project-Inquiry-Subject">
                </div>
              </div>
            </div>
            <label for="Project-Description" class="field-label-cf10">Tell us more about your project*</label>
            <textarea data-name="Project Description" maxlength="5000" id="Project-Description" name="Project-Description" required="" class="text-field-cf10 big w-input"></textarea>
            <div class="div-block-50">
              <input type="submit" value="Send message" data-wait="Please wait..." id="Project-Inquiry" class="subscribe-button w-button">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
	</article>
	<body>
	<?php
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $_POST['Project-Inquiry-Subject'];
		$mailFrom = $_POST['Client-Email'];
		$message = $_POST['Project-Description'];
		
		mail();
	}
	?>
		</body>
</html>
