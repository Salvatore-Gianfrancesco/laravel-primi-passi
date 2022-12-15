<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>About me</title>
    <!-- Bootstrap CDN -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
</head>

<body>
    <header>
        <nav class="bg-dark text-light d-flex gap-3 p-3">
            <a href="/" class="text-light">Home</a>
            <a href="/about-me" class="text-light">About me</a>
            <a href="/learn-more" class="text-light">Learn more</a>
            <a href="/contact" class="text-light">Contact us</a>
        </nav>
    </header>

    <main class="p-3">
        <h2>{{$message}}</h2>
    </main>

    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>