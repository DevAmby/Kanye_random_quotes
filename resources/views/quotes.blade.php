<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/kanye.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>KANYE REST QUOTE GENERATOR</title>


    <style>
        .quote-container {
            margin: 0rem 0 1rem 0 !important;
            padding: 1.5rem ;
            text-align: center;
            list-style-type: none;
            font-size: 20px !important;
            background: #fff;
            box-shadow: 0 0 35px 0 rgb(154 161 171 / 60%);
            border-radius: 20px;
        }


        .each-quote {
            padding: 1rem;
        }
    </style>
</head>

<body>


    <h1 id="title-text">KANYE WEST</h1>
    <h3 id="quote-gen">RANDOM QUOTE GENERATOR</h3>
    <img id="kanye-head" src="images/kanye.png" alt="Kanye West">
    <!-- <p id="click">Click the button to refresh quotes</p> -->
    <ul class="quote-container" id="kanye-quote" style="color: red;">
        @foreach ($allQuotes as $kanye)
        <li class="each-quote">"{{ $kanye->quote }}"</li>
        @endforeach
    </ul>

    <!-- <h3 id="refresh">YEEZUS</h3> -->
    <div class="row" style="margin-bottom:1rem">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <button type="button" class="btn btn-primary btn-md center-block" style="background-color: red;" id="refresh" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


        <button type="button" class="btn btn-danger btn-md center-block" id="refresh" onClick="refreshPage()">Refresh Quotes</button>
    </div>



    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        function refreshPage() {
            window.location.reload();
        }
    </script>
</body>

</html>