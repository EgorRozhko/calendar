<?php
	include_once 'connection.php';
	$res = mysqli_query($connection,'SELECT id,title FROM events WHERE date_event=(SELECT date_event FROM events WHERE id='.$_POST['i_id'].')');
	echo "<div id= 'listOfEvents'>";
 	while ($row = mysqli_fetch_array($res))
 	echo "<p class='oneOfEvents' id=".$row['id'].">".$row['title']."</p><br><hr id='line'/>";
	mysqli_free_result($res);
	echo "</div>";
	mysqli_close($connection);
?>
