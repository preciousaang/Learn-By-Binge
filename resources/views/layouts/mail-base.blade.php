<!Doctype html>
<html>
    <head>

        <style>
            .mail-table{
                margin: 5px auto;
                border: 1px solid #ccc;
                width: 90%;
            }

            .mail-banner{
                width: 100%;
                height: 100px;
                margin: 0px;
            }



        </style>
        @yield('style')
    </head>
    <body>
        <table class="mail-table">
            <thead>
                <tr>
                    <th>
                        <img class="mail-banner" src="{{asset('images/mail-banner.jpg')}}">
                    </th>
                </tr>
            </thead>
            <tbody>
                @yield('content')
            </tbody>
        </table>

    </body>
</html>
