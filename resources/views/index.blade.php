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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <form method="POST" action="{{route('index', [], false)}}">
        @csrf
        <div class="col">
            <label class="form-label" for="by">Quote by:</label>
            <input type="text" name="by" class="form-control @error('by') is-invalid @enderror" id="by"
                   value="{{old('by')}}">
        </div>
        <br>
        <div class="col">
            <label class="form-label" for="text">Quote text:</label>
            <textarea class="form-control  @error('text') is-invalid @enderror" name="text"
                      id="text">{{old('text')}}</textarea>
        </div>
        <br>
        <div class="col">
            <label class="form-label" for="source">Source:</label>
            <input type="text" name="source" class="form-control  @error('source') is-invalid @enderror" id="source"
                   value="{{old('source')}}">
        </div>
        <br>
        <div class="col">
            <button class="btn btn-success">Submit</button>
        </div>
        <br>
    </form>
    @foreach($entries as $entry)
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">"{{$entry->text}}"</p>
                <p class="card-subtitle">- <b>{{$entry->by}}</b> @if(!is_null($entry->source))in <i>{{$entry->source}}</i></p> @endif
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
