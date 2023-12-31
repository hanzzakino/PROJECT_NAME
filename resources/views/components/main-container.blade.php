<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Taskk</title>
</head>

<body>
    {{-- <style>
        div {
            border: 1px dashed rgba(0, 0, 0, 0.342) !important;
        }
    </style> --}}

    <x-navbar />
    <div class="z-3 position-fixed top-5 d-flex w-100 justify-content-center">
        <div class="w-50 d-flex justify-content-center align-items-center">
            <x-notification />
        </div>
    </div>


    {{ $slot }}


</body>

</html>
