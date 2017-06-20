<?php get_header(); ?>
	<div class="row-text">
		<div class="col-md-12">
			<h1><?php bloginfo (name) ?></h1>
			<h4><?php bloginfo (description) ?></h4>
		</div>
	</div>
</div>
</div>
	<!-- form -->
	<div class="container-fluid" id="contacts">
		<div class="row text-center">
			<h2>Contact us or Find Us.</h2>
			<h3>Your travel is our travel.</h3>
		</div>
		<div class="row">
			<form class="giorgia-form" data-toggle="validator" role="form">
				<div class="col-md-7">
					<div class="form-group has-feedback">
						<label for="exampleInputName1">First Name</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Escribe aquí tu nombre completo." required>
					</div>
					<div class="form-group">
						<label for="exampleInputPhone1">Phone Number</label>
						<div class="input-group">
							<span class="input-group-addon">#</span>
							<input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="Escribe aquí tu número de teléfono." required>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label for="exampleInputEmail1">E-mail</label>
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="Escribe aquí tu correo electrónico." data-error="Ay, dirección de correo no valida" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputText1">Text</label>
						<textarea class="form-control" rows="3" placeholder="Escribe aquí tu mensaje." required></textarea>
					</div>
					<button type="submit" class="btn btn-default">Send</button>
				</div>  
				<div class="col-md-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.9022330653588!2d-73.9982551437369!3d40.72232077933075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a275595ec99%3A0xf0bad0576cd45fef!2sLafayette+St%2C+New+York%2C+NY%2C+Stati+Uniti!5e0!3m2!1sit!2sit!4v1497613343879" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="contacts">
						<p1>Phone/Fax: 935 009 401 - info@giorgiastyle.org</p1>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php get_footer(); ?>
