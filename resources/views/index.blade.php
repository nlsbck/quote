<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      @include("bootstrap")
      <link href="resources/css/app.css" rel="stylesheet">
    <title>Quote Homepage</title>
  </head>
  <body>
    <div class="container">
        <h1 style="text-align: center">Quote</h1>
        <br>
        <div class="col">
            <label class="form-label" for="by">Quote by:</label>
            <input class="form-control" id="by">
        </div>
        <br>
        <div class="col">
            <label class="form-label" for="quote">Quote:</label>
            <textarea class="form-control" id="quote"></textarea>
        </div>
    </div>
  </body>
</html>
