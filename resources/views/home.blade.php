<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <section class="container-lg mt-5">
        <h1 class="text-center">Catalogo Film</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 py-4 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <x-movie-card :movieTitle="$movie['title']" :movieOriginalTitle="$movie['original_title']" />
                </div>
            @endforeach
        </div>
    </section>
</body>

</html>
