My Account (<?php echo $user['username']; ?>)<br><br>

ESL: <?php if (array_key_exists('esl', $user)) echo $user['esl']."<a href='pages/setEsl/".$user['id']."/".$user['json']; ?>Edit</a>
<br><br>
Result: <?php echo $result ?><br><br>

