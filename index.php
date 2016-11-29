<!Doctype html>
<?php  include('db.php');?>

	<title>Sweet Chat | Real Time Chat Application</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <style type="text/css">
  	.work{
  		background-color:#80CBC4;
  		height: 400px;
  	}
  	.show{
  		font-color:white;
  	}
  </style>

<script type="text/javascript">
  function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
      if(req.readyState == 4 && req.status == 200){
        document.getElementById('chat_box').innerHTML = req.responseText;

      }
    }
    req.open('GET','chattime.php',true);
    req.send();

  }

  setInterval(function(){ajax()},1000);
</script>
</head>

<body style="background-image:url(pt.png);" onload="ajax();">


<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container">
    <div class="navbar-header" style="color:red;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SWEET CHAT</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav " style="float: right">
       
        <li><a href="#">Home</a></li>
                
          <li ><a href ="https://in.linkedin.com/in/madan-pandey-0bb448105">Contact Us</a>
           
        </li>
        
       
      </ul>
    </div><!--/.nav-collapse -->

</nav>



<br><br>
<br>
<br>
<br>
<section class="main">
<div class="container" >
<div class="row">
	
   <h3> Customer Discussion Panel</h3><hr>
  
	<div class="col-sm-9 ">
		 <div id="chat" style="background: white; border-style: 3px; height: 300px;width: 750px; margin-right:100px; overflow: scroll; ">
         <div id="chat_box"></div>
     </div>
	</div>
	<div class="col-sm-3 ">	
   <form action="index.php" method="post">
     <label> Name :</label>
    <input type="text" name="name"  class="form-control" placeholder="enter name"><br>
    <label> Your Message :</label>
    <textarea type="textarea" name="msg" class="form-control"    placeholder="enter message"></textarea><br>
    <input type="submit" name="submit"  class="btn btn-danger" value="Send it">
  </form>
	</div>
</div>
</div>
</section>
<div class="navbar navbar-fixed-bottom" style="background-color: black;">
    <div class="navbar-inner">
        <div class="width-constraint clearfix">
           

            <p class="pull-right muted credit" style="margin-top: 8px;">Desinged by Madan Pandey</p>
        </div>
    </div>
</div>
</body>
</html>


<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $message=$_POST['msg'];
  if(empty($name) && empty($message)){
     echo 'alert("Data field are empty please fill and try again!!")';
  }

  else{
  $insert ="INSERT INTO chat(name,message) values('$name','$message')";
  $run = $db->query($insert);
  if($run){
  echo "<embed loop='false' src='chat.WAV' hidden='true' autoplay='true'/>";
}
}


}
