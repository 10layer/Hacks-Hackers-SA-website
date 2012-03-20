<?php
	$this->load->view("templates/header");
?>
<div class="container">
	<h1>Join the Revolution</h1>
	<div class="row">
		<div class="span4">
			<p><strong>Hacks/Hackers</strong> is a rapidly expanding international grassroots journalism organization with dozens of chapters (and counting) and thousands of members across four continents (and counting). 
				</p>
				<p>
				Our mission is to create a network of <strong>journalists</strong> ("hacks") and <strong>technologists</strong> ("hackers") who rethink the future of news and information.
				</p>
				<p>
				We're setting up the South African chapter, and would love for you to be part of this movement.
	            </p>
	            
		</div>
		<div class="span8">
			<form class="well" method="POST">
				<?php
					if (isset($error)) {
				?>
				<div class="alert alert-error">
					<strong>Oh dear</strong> Something went wrong.
					<ul>
					<?php
						foreach($errors as $err) {
					?>
					<li><?= $err["msg"] ?></li>
					<?php
						}
					?>
					</ul>
				</div>
				<?php
					}
				?>
				
				<p>
					<h4>Sign up below to join the South African chapter of Hacks/Hackers</h4>
				</p>
				<label>Your name</label>
				<input type="text" class="span3" placeholder="First name Surname" name="name" value="<?= $this->input->post("name") ?>" />
				<label>Your city</label>
				<input type="text" class="span3" placeholder="Johannesburg/Cape Town/Blikkiesfontein" name="city" value="<?= $this->input->post("city") ?>" />
				<label class="checkbox">
					<input type="checkbox" name="isHack" value="1" <?php
						if ($this->input->post("isHack")) {
							print 'checked="checked"';
						}
					?> /> I'm a Hack
				</label>
				<label class="checkbox">
					<input type="checkbox" name="isHacker" value="1" <?php
						if ($this->input->post("isHacker")) {
							print 'checked="checked"';
						}
					?> /> I'm a Hacker
				</label>
				<label>Email address</label>
				<input type="text" class="span3" placeholder="joe@hackshackers.co.za" name="email" value="<?= $this->input->post("email") ?>" />
				<label>Twitter handle</label>
				<input type="text" class="span3" placeholder="@" name="twitter" value="<?= $this->input->post("twitter") ?>" />
				<label>
				<button type="submit" class="btn">Submit</button>
				</label>
			</form>
		</div>
		
	</div>
</div>
<?php
	$this->load->view("templates/footer");
?>