<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Properties</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .property {
            width: 350px;
            height: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        .property-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .property-description {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .property-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .big-title {
            font-size: 36px;
            font-weight: bold;
            color: red;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('partials/_navbar')
    <h1 class="big-title">Properties</h1>
    <div class="container">
        @foreach ($posts as $post)
            <div class="property">
                <h2 class="property-title">{{ $post->title }}</h2>
                <p class="property-description">{{ $post->body }}</p>
                <img class="property-image" src="cover/{{ $post->cover }}" alt="{{ $post->title }}">
            </div>
        @endforeach
    </div>
    
</body>
</html>
