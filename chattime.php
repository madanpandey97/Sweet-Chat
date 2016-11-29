
<?php  include('db.php');?>

<?php
     $query = "SELECT * FROM chat ORDER BY id DESC";
     $run =$db->query($query);
     while($row = $run->fetch_array()):
  ?>
  	<div id="chat_data"  style="font-style: italic;;
  border-bottom:1px solid silver;">
  		<span style="color:green; font-weight: bold;"><?php echo $row['name']; ?></span>
  		<span style="color:Red;"> &nbsp&nbsp:&nbsp&nbsp<?php echo $row['message']; ?></span>
       <span style="float:right;"><?php echo $row['date']; ?></span>
          <br>
  	</div>
  <?php endwhile; ?>