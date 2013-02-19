This is <?php echo $username; ?>'s homepage.
<br>
<a href='pages/account'>My Account (<?php echo $user['username']; ?>)</a><br><br>

ESL: <?php if (array_key_exists('esl', $user)) echo $user['esl']; ?> <a href="">Edit</a>

