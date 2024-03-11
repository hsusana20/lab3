<link href="https://localhost:8080/css/create.css" rel="stylesheet" type="text/css">
<script defer src="https://localhost:8080/js/create.js"></script>

<header>
   <img src="../images/lesly.gif" alt="mm" class="logo"> 
<nav>
   <a href="../home">Home</a>
   <a href="../about">About Me</a>
   <a href="../family">My Family</a>
   <a href="../my_pets">My Pets</a>
   <a href="guests">Forms</a>
</nav>
</header>

<body>

<div id="h3">
<h3>Fill up this Form</h3>
</div>

<div id="p1">
<p><span class="error">* required field</span></p>
</div>

<h2><?= isset($name) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="<?php echo site_url('guests'); ?>" method="post">
    <?= csrf_field() ?>

<div id="p2">
    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <textarea name="website" cols="50" rows="1"><?= set_value('website') ?></textarea>
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="gender">Gender</label>
    <textarea name="gender" cols="45" rows="1"><?= set_value('gender') ?></textarea>
    <br>

    <input type="submit" name="submit" value="New Guest">
</div>


</form>
</body>
