<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: black;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  background: #ccc;
  padding: 20px;
  height: 700px;
}


/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 5;
}

article {
  float: left;
  padding: 50px;
  width: 85%;
  background-color: white;
  text-align:center;
  font-size: large;
  height: 700px; /* only for demonstration, should be removed */
  background-image: url("truckimg.png");
  background-size: 300px 200px;
  background-repeat: no-repeat;
  background-position: right top;
  background-attachment: scroll;
}


/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: black;
  padding: 10px;
  text-align: center;
  color: white;
}
.button {
  background-color: black;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  
}
</style>
</head>
<body>
<header>
  <h2>Courier Desk</h2>
</header>
<section>
  <nav>
    <ul>
      <li><a href="New_Trans.php" class="button" >New Delivery</a> </li>
      <li><a href="Older_Trans.php" class="button">Past Deliveries</a> </li>
      <form method='POST' action='server.php' id="form1"> 
       <input type='Submit' class="button" name= 'Logout' value='Logout'> 
       </form>
    </ul>
  </nav>
  
  <article>
    <?php echo('<h1>WELCOME TO OUR WEBSITE,  ' .htmlentities($_SESSION['username']).'</h1>');?> 
    <p>We here offer you delivery services to whichever place you desire.**</p>
    <p>Please Look out for offers before exploring our incredible services</p>
  </article>
</section>

<footer>
  <p>Thanks For Visiting.Period</p>
</footer>

</body>
</html>

