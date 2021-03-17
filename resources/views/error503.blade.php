<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>503 Error Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background: linear-gradient(#111, #333, #111);
            background-repeat: no-repeat;
            background-size: cover;
            color: #eee;
            position: relative;
            font-family: 'Roboto', sans-serif;
        }

        .message {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .message h1, .message h3 {
            margin: 0;
            line-height: .8;
        }
        
        .message h3 {
            font-weight: 300;
            color: #C8FFF4;
        }
        
        .message h1 {
            font-weight: 700;
            color: #03DAC6;
            font-size: 8em;
        }
        
        .message h3 {
            font-size: 2.5em;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>503</h1>
        <h3>SERVICE UNAVAILABLE</h3>
    </div>
</body>
</html>