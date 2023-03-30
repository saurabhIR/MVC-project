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
          <button><a href="/Feed/new">Ask New Question</a></button>
          <?php 
            if(!isset($_SESSION['username'])):
          ?>
            <button><a href="/Signup/new">Signup</a></button>
		        <button><a href="/Login/new">Login</a></button>
          <?php 
             endif;
          ?>
          <a href="/Userprofile/create"><i class="fa-solid fa-user"></i></a>
        </div>
      </nav>
    </div>
  </header>
  <section class="section-first">
    <div class="view-all">
      <?php
            foreach($row as $rows){
            echo "<div class='data-fetch'><h2><a href='/Feed/question?id=" . $rows["id"] . "'>" . $rows["title"] . "</a></h2>";
            echo "<p><strong>Asked by:</strong> " . $rows["username"] . "</p>";
            echo "<p>" . $rows["description"] . "</p>";
            echo "<p><strong>Interest:</strong> " . $rows["interest"] . "</p>";
            echo "<p><strong>Date:</strong> " . $rows["date"] . "</p></div>";
            }
      ?>
  </div>
  </section>
</body>
</html>