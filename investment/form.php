<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db.php';

        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = md5($password);

        $query = "SELECT * FROM login_details WHERE username='$username' AND pass='$hashed_password'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $update_details_query = "SELECT * FROM updates";
            $update_result = mysqli_query($con, $update_details_query);
            $update_details = mysqli_fetch_array($update_result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Punaadi | Admin Panel</title>
    <!-- FontAwesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/text-editor.css" />
  </head>
  <body>
    <h1 class='text-center' style='margin-top: 20px;'>UPDATE DETAILS</h1>
    <div class="container">
      <div class="options">
        <!-- Text Format -->
        <button id="bold" class="option-button format">
          <i class="fa-solid fa-bold"></i>
        </button>
        <button id="italic" class="option-button format">
          <i class="fa-solid fa-italic"></i>
        </button>
        <button id="underline" class="option-button format">
          <i class="fa-solid fa-underline"></i>
        </button>
        <button id="strikethrough" class="option-button format">
          <i class="fa-solid fa-strikethrough"></i>
        </button>
        <button id="superscript" class="option-button script">
          <i class="fa-solid fa-superscript"></i>
        </button>
        <button id="subscript" class="option-button script">
          <i class="fa-solid fa-subscript"></i>
        </button>

        <!-- List -->
        <button id="insertOrderedList" class="option-button">
          <div class="fa-solid fa-list-ol"></div>
        </button>
        <button id="insertUnorderedList" class="option-button">
          <i class="fa-solid fa-list"></i>
        </button>

        <!-- Undo/Redo -->
        <button id="undo" class="option-button">
          <i class="fa-solid fa-rotate-left"></i>
        </button>
        <button id="redo" class="option-button">
          <i class="fa-solid fa-rotate-right"></i>
        </button>

        <!-- Link -->
        <button id="createLink" class="adv-option-button">
          <i class="fa fa-link"></i>
        </button>
        <button id="unlink" class="option-button">
          <i class="fa fa-unlink"></i>
        </button>

        <!-- Alignment -->
        <button id="justifyLeft" class="option-button align">
          <i class="fa-solid fa-align-left"></i>
        </button>
        <button id="justifyCenter" class="option-button align">
          <i class="fa-solid fa-align-center"></i>
        </button>
        <button id="justifyRight" class="option-button align">
          <i class="fa-solid fa-align-right"></i>
        </button>
        <button id="justifyFull" class="option-button align">
          <i class="fa-solid fa-align-justify"></i>
        </button>
        <button id="indent" class="option-button spacing">
          <i class="fa-solid fa-indent"></i>
        </button>
        <button id="outdent" class="option-button spacing">
          <i class="fa-solid fa-outdent"></i>
        </button>

        <!-- Headings -->
        <select id="formatBlock" class="adv-option-button">
          <option value="H1">H1</option>
          <option value="H2">H2</option>
          <option value="H3">H3</option>
          <option value="H4">H4</option>
          <option value="H5">H5</option>
          <option value="H6">H6</option>
        </select>

        <!-- Font -->
        <select id="fontName" class="adv-option-button"></select>
        <select id="fontSize" class="adv-option-button"></select>

      </div>
      <form action="update-form.php" method='post' onsubmit="updateHiddenInput()">
        <div id="text-input" contenteditable="true"><?php echo $update_details['details']; ?></div>
        <input type="hidden" name="html_content" id="html-content" />
        <button class='btn' type="submit">UPDATE</button>
      </form>
    </div>
    <!--Script-->
    <script src="js/text-editor.js"></script>
    <script>
        // Function to update the hidden input with HTML content before submitting the form
        function updateHiddenInput() {
            var textInput = document.getElementById('text-input');
            var htmlContent = textInput.innerHTML;

            // Update the hidden input value
            document.getElementById('html-content').value = htmlContent;
        }
    </script>
  </body>
</html>

<?php

    } else {
        header("Location: admin.php?message=Incorrect username or password");
    }
}

?>