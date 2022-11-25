<?php
 

?>

<!doctype html>
<html lang="en">

<head>
  <title>badwords</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<div class="mb-3">
    <form action="results.php" method="get">
        <label for="paragraph" class="form-label">Paragraph</label>
        <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="lorem ipsum dolor" aria-describedby="helpId">
        <label for="badwords" class="form-label">badwords</label>
        <input type="text" name="badwords" id="badwords" class="form-control" placeholder="parolaccia" aria-describedby="helpId">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>