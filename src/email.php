<?php
header('Content-Type: text/html; charset=utf-8');
if(!empty($_POST['send'])) {
	require_once 'phpmailer/class.phpmailer.php';
	$oMail = new phpmailer();
	$oMail->addAddress('davidtwigger@gmail.com');
	$oMail->setFrom($_POST['email'],$_POST['nom']);
	$oMail->Subject = 'Contact from CV';
	$oMail->Body = $_POST['message'];
	$oMail->send(); ?>
<p>Merci <?php echo $_POST['nom'] ?></p>
<p>Votre message a bien été envoyé</p>
<?php } else { ?>
<form action="email.php" method="post" id="emailForm">
	<p>
		<label for="nom">Votre Nom</label>
	</p>
	<p>
		<input type="text" name="nom" id="nom" value="" required>
	</p>
	<p>
		<label for="email">Votre email</label>
	</p>
	<p>
		<input type="email" name="email" id="email" value="" required>
	</p>
	<p>
		<label for="message">Votre message</label>
	</p>
	<p>
		<textarea name="message" id="message" rows="5" required></textarea>
	</p>
	<p id="action">
		<input type="submit" name="send" value="Envoyer">
	</p>
</form>
<?php }