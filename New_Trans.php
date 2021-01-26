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
  width: 80%;
  background-color: white;
  text-align:left;
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
input[type=text], select {
  width: 65%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: initial;
}
input[type=submit] {
  width: 50%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 25px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color:gray ;
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
      <li><a href="htfir.php" class="button" >Home</a> </li>
      <li><a href="Older_Trans.php" class="button">Past Deliveries</a> </li>
    </ul>
  </nav>
  <article>
  <form method="post" action="server.php">
    <input type="text" id="start" name="start" placeholder="Pickup Location"> <br>
    <input type="text" id="end" name="end" placeholder="Drop Location"><br>
    <label for="Mode">Mode<br></label>
    <select id="Mode1" name="Mode1">
      <option value="Genral">Genral</option>
      <option value="Premium">Premium</option>
      <option value="Lightning">Ligntning**</option>
    </select>
    <input type="submit" name="New_Trans" value="Submit">
  </form>
</article>
</section>
<footer>
  <p>Thanks For Visiting.Period</p>
</footer>

</body>
</html>