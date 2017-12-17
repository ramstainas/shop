<?php
  include('homepage-header.php');
?>
<div class="row">
<?php 
	include('side-navigation.php');
?>
<div class="middle">
	<h1>Welcome <?php echo $login_session;  ?></h1>

	<div class="my-account-form">
		<h2>My Account</h2>
		<div class="wrapper">
		<div class="my-account-form-profile">
			<ul>
				<li>View My Profile</li>
			</ul>
		</div>
		<div class="my-account-form-info">
			<p>You are connected to</p>
			<a>Browse</a>
		</div>
		</div>
	</div>
	<div class="new-message-form">
		<h2>You have a new message</h2>
		<p>You have new message.</p>
		<a>Read email</a>
	</div>
</div>
</div>

</body>
</html>