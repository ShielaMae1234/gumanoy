<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beauty salon</title>
</head>
<style>

      
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 10px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  color: #474e5d;
}

.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 500px) {
  .column {
    width: 80%;
    display: block;
  }
}
</style>

<body>
<?php include 'home.php' ?>

<div class="about-section">
</div>
<h2> About Salon's</h2>
<h2> A beauty salon or beauty parlor is an establishment that provides cosmetic treatment for people. Other variationsof this type of business include hair salons, spas, day spas, and medical spas. A salon is facility which offers beauty services. salons provide a wide array of services to men and women, and they can be found in many regions of the world.</h2>

</body>
</html>
