<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="root">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TextUtils</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About TextUtils</a>
        </li>
      </ul>
    </div>
    <div class="container2 d-flex justify-content-end"">
        <div class="bg-primary rounded mx2 mr2" style="height: 30px; width: 30px; cursor: pointer; margin-right: 10px;"></div>
        <div class="bg-danger rounded mx2 mr2" style="height: 30px; width: 30px; cursor: pointer; margin-right: 10px;"></div>
        <div class="bg-success rounded mx2 mr2" style="height: 30px; width: 30px; cursor: pointer; margin-right: 10px;"></div>
        <div class="bg-info rounded mx2 mr2" style="height: 30px; width: 30px; cursor: pointer; margin-right: 10px;"></div>
        <div class="bg-warning rounded mx2 mr2" style="height: 30px; width: 30px; cursor: pointer; margin-right: 10px;"></div>
    </div>
  </div>
</nav>
<div style="height:50px"></div>
<div class="container">
<h1>Enter the text for analyze</h1>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
</div>
<div class="btn">
<button id ="upper" type="button" class="btn btn-primary mx-1 my-1">Convert to Upper Case</button>
<button id ="Lower" type="button" class="btn btn-info mx-1 my-1">Convert to Lower Case</button>
<button id ="Clear" type="button" class="btn btn-danger mx-1 my-1">Clear Text</button>
<button id ="Copy" type="button" class="btn btn-warning mx-1 my-1">Copy Text</button>
<button id ="Space" type="button" class="btn btn-warning mx-1 my-1">Remove Extra Space</button>
<button id ="Sentance" type="button" class="btn btn-Success mx-1 my-1">Sentance Case.</button>
<button id ="Capitalize" type="button" class="btn btn-danger mx-1 my-1">Capitalize Each Word</button>
</div> 
<div class="container my-3">
  
  <h2>Your Text Summery</h2>
  <p>
    "0" "Words, and "
    "0"
    "" Charactors"</p>
    <p>
      "0"
      " Minutes to read"
    </p>
    <h2>Preview</h2>
    <p id="pa"></p>
   
  </div>
</div>

<script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>