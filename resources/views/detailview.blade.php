<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <h2 class="text-center my-5">Properties</h2>
  <div class="row">
    @foreach($properties as $property)
      <div class="col-md-4 my-3">
        <div class="card">
          <img src="{{ asset('images/' . $property->image) }}" class="card-img-top" alt="{{ $property->title }}">
          <div class="card-body">
            <h5 class="card-title">
              <a href="{{ route('property.detail', $property->id) }}">{{ $property->title }}</a>
            </h5>
            <p class="card-text">{{ $property->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

</body>
</html>