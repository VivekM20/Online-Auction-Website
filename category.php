
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}


/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border:1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  backgrxound-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
.btn {
  background-color: Green;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
#nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

#nav li {
  float: left;
}

#nav li a {
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

#nav li a:hover {
  background-color: RoyalBlue;
}
.topnav_right{
  float: right;
}
</style>
</head> 
<body style="background-image: url(web-designer-pune-background.jpg)">


<h2 style="font-size: 60px">E-BIDDING</h2>
  <form method="get" action="login.php">
    <nav class="styles" style="background-color: red" id="nav">
    <ul >
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
 <div class="topnav_right">
    <li><a href="logout.php">Logout</a></li>
 </div>
</ul>
</nav>
    
   
</form>
<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Categories</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="watches.php">Watches</a></li>
      <li><a href="jewellery.php">Jewellery</a></li>
      <li><a href="art.php">Art</a></li>
      <li><a href="antiques.php">Antiques</a></li>
      <li><a href="households.php">Hoseholds</a></li>
      <li><a href="vehicles.php">Vehicles</a></li>
      <li><a href="furniture.php">Furniture</a></li>
      <li><a href="electronics.php">Electronics</a></li>
      <li><a href="#">Other</a></li>
    </ul>
  </div>
  
  <div class="right" style="background-color:#ddd;">
    <h2>Top Items</h2>
     <table class="right" style="background-color:#ddd;"> 
 
 <tr class="one">
    <th><img src="art1.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="art1.php">The meeting of Jacob and Joseph</th>
      <th>
        <p>Frans Francken II, Abraham Govaerts, Hans Jordaens III
The meeting of Jacob and Joseph
oil on panel, with the original gessoed reverse
36 ¾ x 48 ¼ in. (93.4 x 122.5 cm.)

</p>
      </th>

  </tr>
  
 <tr class="one">
    <th><img src="jew1.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="jew1.php">Sapphire Ring</th>
      <th>
        <p>LORENZO .925 Sterling Silver 14k White Gold Plated 
Genuine Amethyst & Created White Sapphire Ring Size 7.25.

</p>
      </th>

  </tr>
  <tr>
    <th><img src="house3.png" alt="Classic Watch" width="228" height="228"></th>
    <th><a href="house3.php">
19th Century French Oak Court Cupboard</a></th>
    <th>
        <p>
This is a very impressive French oak court cupboard,
 carved frieze over three recessed doors over two elongated panelled doors,
 70" H x 52 1/2" W. Dating back to early 1800s to the top there are carved faces with three doors, 
the base there are two large doors, and sits on large bun feet.



</p>

      </th>
</tr>
</table>
  </div>
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>


</body>
</html>
