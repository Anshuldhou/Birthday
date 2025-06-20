<!-- resources/views/gallery.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Our Memories 📸</title>
    <style>
        body {
            background: #ffe6f0;
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }
        h2 { color: #ff3399; }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        .gallery img {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h2>Our Memories Together 💞</h2>
    <div class="gallery">
        @foreach ($photos as $photo)
            <img src="{{ asset('images/' . $photo) }}" alt="memory">
        @endforeach
    </div>
</body>
</html>
