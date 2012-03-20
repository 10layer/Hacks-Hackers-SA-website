<?php
	$this->load->view("templates/header");
?>


    
<div class="container">
	<div class="row">
		<div class="span8">
			<h2>Are you a Hack or a Hacker?</h2>
			<p><strong>Hacks/Hackers</strong> is a rapidly expanding international grassroots journalism organization with dozens of chapters (and counting) and thousands of members across four continents (and counting). 
				</p>
				<p>
				Our mission is to create a network of <strong>journalists</strong> ("hacks") and <strong>technologists</strong> ("hackers") who rethink the future of news and information.
				</p>
				<p>
				We're setting up the South African chapter, and would love for you to be <?= anchor("join","part of this movement") ?>.
	            </p>
	            <p style="text-align: center">
				<iframe width="640" height="480" src="http://www.youtube.com/embed/GOQZdK0tuNU" frameborder="0" allowfullscreen></iframe>
				</p>
		</div>
	
		<div class="span4">
			
      			
    	  
			<h3>Get Involved</h3>
			<p>If you're a South African hack or hacker, we need your help.</p>
    	  	<p>It takes 20 members to initiate a Hacks/Hackers chapter. Sign up below, and as soon as we have 20 members, we will let you know when and where our first meeting will take place.</p>
    	  	<a href="/join">
    	  	<button class="btn btn-primary" href="#">Join the Revolution</button>
    	  	</a>
		</div>
		
	</div>
</div>
<?php
	$this->load->view("templates/footer");
?>