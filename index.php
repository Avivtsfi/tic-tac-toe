<?php
require_once "./templates/header.php";

?>

<form method="post" action="register-players.php" style="border:2px solid black;">
    <div class="welcome">
        <h1>Start playing Tic Tac Toe!</h1>
        <h2>Please fill in your names</h2>

        <div class="player-name">
            <label for="player-x">First player (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Second player (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>
		
		<div class="player-name">
            <label for="player-o">name options</label>
			<br>
			<select name="cars" id="cars" style="width:100%;text-align:center;" class="yaoo">
    <option value="volvo">רועי</option>
    <option value="saab">סוזנה</option>
    <option value="opel">יואב</option>
    
  </select>
            <!-- <input type="text" id="player-o" name="player-o" required /> -->
        </div>

        <button type="submit">Start</button>
    </div>
</form>
<br>
<div class="table-responsive" dir="rtl">
<table style="width:100%;height:100%;" class="table">
<tr>
<tr><h1>טבלת הישגים</h1></tr>
</tr>
  <tr>
    <th>שם משתתף</th>
    <th>ניקוד</th>
	<th>סימבול</th>
  </tr>
  <tr>
    <td>---</td>
    <td>---</td>
	 <td>---</td>
  </tr>
  
  
  
  <tr>
  <td><?php echo $_SESSION['PLAYER_X_NAME'];?></td>
  <td><?php echo $_SESSION['PLAYER_X_WINS'];?></td>
  <td><?php echo detectSymbol($_SESSION,"PLAYER_X_NAME");?></td>

  </tr>
  
   
  <tr>
  <td><?php echo $_SESSION['PLAYER_O_NAME'];?></td>
  <td><?php echo $_SESSION['PLAYER_O_WINS'];?></td>
  <td><?php echo detectSymbol($_SESSION,"PLAYER_O_NAME");?></td>
  </tr>

  
</table>
</div>
<br><br><br><br>

<div class="table-responsive">
<table style="width:100%" class="table">
  <tr> <button style="width:100%;">load more</button></tr>
 </table>

</div>

<?php
require_once "./templates/footer.php";
