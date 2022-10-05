<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1> Add Animal </h1>
 <form method="post" action="animal-add-save.php">
  <div class="mb-3">
    <label for="animalName" class="form-label">Name</label>
    <input type="text" class="form-control" id="animalName" aria-describedby="nameHelp" name="aName">
    <div id="nameHelp" class="form-text">Enter the Animal's Name</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>                                           
  </body>
</html>
