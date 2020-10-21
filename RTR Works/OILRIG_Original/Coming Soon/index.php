<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Site under maintanence</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <a href="../index.php"
        ><img src="../oil rig watermark6.png" alt="OILRIG"
      /></a>
    </header>
    <div class="notice">
      <h1>site is under construction</h1>
      <h3>Get notified when we come online</h3>
      <div class="subscribe">
        <input type="email" name="email" placeholder="Enter your email" />
        <button type="submit" id="submit" onclick="showMessage()">
          notify me
        </button>
      </div>
    </div>

    <script>
      function showMessage() {
        alert("You will be notified...");
        location.reload();
      }
    </script>
  </body>
</html>
