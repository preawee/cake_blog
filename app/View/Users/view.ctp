<!-- File: /app/View/Users/view.ctp -->

<h1>UserName:<?php echo ($user['User']['username']); ?></h1>
<p> Password:<?php echo $user['User']['password']; ?> </p>
<p> Role: <?php echo ($user['User']['role']); ?> </p>
<p> <small>Created: <?php echo $user['User']['created']; ?> </small></p>
