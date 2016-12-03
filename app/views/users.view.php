<?php include 'partials/header.php'; ?>
<h1>All Users</h1>
<ul>
<?php foreach ($users as $user): ?>
	<li><?= $user->name ?></li>
<?php endforeach ?>
</ul>
<form action="/php-practicioner/pdo-refactoring/index.php/user" method="POST">
	<label for="name">Name</label>
	<input type="text" id="name" name="name"/>
	<input type="submit" value="Submit"/>
</form>
<?php include 'partials/footer.php'; ?>