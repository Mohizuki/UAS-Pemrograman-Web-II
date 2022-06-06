<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - #CodepenChallenge Fairly Colourful Profile Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="profile.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="card">
  <div class="banner">
      <img src="images/santa.png" alt="" style="max-width:40%; margin-top:20px;">
  </div>
  <div style="margin-top:20px;"></div>
  <h2 class="name">{{session('user')}}</h2>
  <div class="title">Visitor</div>
  <div class="actions">
    <div class="follow-btn">
      <a href="logout"><button>Signout</button></a>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
</body>
</html>
