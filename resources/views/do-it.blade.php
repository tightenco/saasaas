<!DOCTYPE html>
<html>
    <head>
        <title>SaaS as a service</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #b0bec5;
                display: table;
                font-family: 'Roboto Condensed';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                color: #777;
                font-size: 2.25rem;
                margin-bottom: 2.5rem;
            }

            .attribution {
                font-size: 1rem;
            }

            @media only screen and (min-width: 500px) {
                .title {
                    font-size: 6rem;
                }

                .attribution {
                    font-size: 1.5rem;
                }
            }

            a {
                color: #b0bee5;
            }

            .try-again {
                display: block;
                margin-top: 2rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $startup }} for {{ $word }}</div>
                <div class="attribution">SaaSaaS from <a href="http://tighten.co/">Tighten</a> on <a href="http://github.com/tightenco/saasaas">Github</a></div>
                <a href="{{ url() }}" class="try-again">Pivot</a>
            </div>
        </div>
    </body>
</html>
