<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
<link rel="stylesheet" href="../css/fff.css">
	<title>form project</title>
</head>
<body data-gr-ext-installed="" data-new-gr-c-s-check-loaded="14.994.0">
    
<header>
<h1>Thank you for your comments and Feedbacks!</h1>
</header>



<main>
  <div class="mb" id="mmb">
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F1.html">First page</a> 
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F2.html">Second page</a>
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F3.html">Third page</a> 
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F4.html">Fourth page</a>
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F5.html">Fifth page</a> 
    <a href="https://c0078.is3.aws.cis.byuh.edu/IT240/html/F6.html">Sixth page</a> 
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><b>|||</b></a>
  </div>
  
  <p>Hello! <b>
  <?php echo $_GET["firstname"]; ?>   <?php echo $_POST["firstname"]; ?> 
  <?php echo $_GET["lastname"]; ?> <?php echo $_POST["lastname"]; ?></b>, I'm appreciate you for your comments and Feedbacks!</p>
 
  
  <p> I will send you any update to <b>
  <?php echo $_GET["ma"]; ?> <?php echo $_POST["ma"]; ?> </b> </p>


  <p>You are comments or Feedbacks was <b>
  <?php echo $_GET["cf"]; ?> <?php echo $_POST["cf"]; ?></b>. <br> With this I'm sure I can improve a lot. Thanks again and hope you have a great day! </p>

  <i>Jiyul Seung</i>


</main>
<!-- And here is our main footer that is used across all the pages of our website -->

<footer>
</footer>
</body>
</html>
