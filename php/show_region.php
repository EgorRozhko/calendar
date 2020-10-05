<?php
	include_once('connection.php');
	$res = mysqli_query($connection,'SELECT events.title,places.coords,places.region_bigMap,events.animation,events.anim_coords FROM places INNER JOIN events ON places.id_place=events.place_id WHERE events.id='.$_POST['i_id']);
	$row = mysqli_fetch_array($res);
	$coords_array = explode(';', $row['anim_coords']);

echo '
	<div class="b-popup" id="popup1">
    <div class="b-popup-content">
    <img src='.$row["region_bigMap"].' class="icon" style="position: absolute;
    left: 390px;
    top: 0;
    bottom: 0;
    width:47%;
    right: 0;">
	<img id='.$_POST['i_id'].' src='.$row["animation"].' class="icon_anim icon" style="width:13.8%; position: absolute; z-index: 999; right:0px; bottom:0px; top:'.$coords_array[1].'px; left:'.$coords_array[0].'px">
					<img class="close-btn" src="images/close.png"/>
					<div id="titleEvent" style="position: fixed; z-index: 1003;
		width:20%;
		height:100px;
		color: white;
		left:0px;
		padding: 15px;
		background-color: rgba(255,0,0,0.6); ">

	<h3 id='.$_POST['i_id'].' class="name_ev" style="position: absolute;
    margin: 0px;
    left: 20px;
    width: 90%;
    height: auto;
    color: white;
    z-index: 110;
    font-size: 25px;
    font-weight:normal;">'.$row["title"].'</h3></div>
	</div>
	</div>
	<script type="text/javascript" src="js/CloseBtnPosition.js">';
	mysqli_free_result($res);
	mysqli_close($connection);
?>