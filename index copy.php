<!DOCTYPE html>
<html>
<head>
  <title>PHP Website</title>
  <script src="script.js"></script>
</head>
<body>
  <div id="content">
    <?php
      // Default content
      echo "<h1>Welcome to my website!</h1>";
      echo "<p>This is the default content.</p>";

      // Handle button clicks
      if (isset($_GET['content'])) {
        $content = $_GET['content'];

        // Load content based on button click
        switch ($content) {
          case 'content1':
            echo "<h1>Content 1</h1>";
            echo "<p>This is content 1.</p>";
            break;
          case 'content2':
            echo "<h1>Content 2</h1>";
            echo "<p>This is content 2.</p>";
            break;
          case 'content3':
            echo "<h1>Content 3</h1>";
            echo "<p>This is content 3.</p>";
            break;
        }
      }
    ?>
  </div>

  <div id="buttons">
    <button onclick="loadContent('content1')">Load Content 1</button>
    <button onclick="loadContent('content2')">Load Content 2</button>
    <button onclick="loadContent('content3')">Load Content 3</button>
  </div>

  <script>
    function loadContent(content) {
      window.location.href = 'index.php?content=' + content;
    }
  </script>
</body>
</html>
