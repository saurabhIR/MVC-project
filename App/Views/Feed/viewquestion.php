<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQuora</title>
  <link rel="stylesheet" href="/css/feed-view.css">
  <!-- <link rel="stylesheet" href="/css/feed.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <div class="container">
      <nav class="flex-justify-between">
        <div class="head-left">
          <a href="/Feed/view"><img src="/image/SQuora.png" alt="logo"></a>
        </div>
        <div class="head-right">
          <a href="/Userprofile/create"><i class="fa-solid fa-user"></i></a>
        </div>
      </nav>
    </div>
  </header>
  <section class="section-first">
    <div class="view-all">
      <?php
            echo "<div class='data-fetch'><h2>". $row["title"] . "</h2>";
            echo "<p><strong>Asked by:</strong> " . $row["username"] . "</p>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p><strong>Interest:</strong> " . $row["interest"] . "</p>";
            echo "<p><strong>Date:</strong> " . $row["date"] . "</p></div>";
      ?>
  </div>
  <div class="link">
    <a href="/Feed/view">Go back to home page</a>
  </div>
  <?php
  $user=$_SESSION['username'];
  if($user==$row["username"]):
  ?>
  <div class="buttons">
    <button><a href="/Edit/new?id=<?php echo$row["id"];?>">Edit</a></button>
    <button><a href="/Edit/delete?id=<?php echo$row["id"];?>">Delete</a></button>
  </div>
  <?php
   endif;
  ?>
  </section>
</body>
</html>
