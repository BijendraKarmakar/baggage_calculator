<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baggage Rate Calculator</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            h2{
                text-align: center;
            }

            form{
                margin-top: 80px;
                text-align: center;
            }
        </style>

    </head>
    <body>
        
        @include('messages')
        <h2>Baggage Rate Calculator</h2>

        <form action="" method="POST">
                @csrf
                <select name="current_city" id="from">

                    <option value="">Please select your current city</option>

                    @foreach($cities as $values)

                        <option value={{$values['location']}}>{{$values['city']}}</option>
                    @endforeach

                </select>

                <select name="destination" id="destination" style="margin-left: 20px; margin-right: 20px;">
                    <option value="">Please select your destination</option>

                    @foreach($cities as $values)

                        <option value={{$values['location']}}>{{$values['city']}}</option>
                    @endforeach

                </select>

                <select name="quantity" id="quantity" style="margin-right: 20px;">
                    <option value="">Please select your baggage weight</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <input id="submit" type="submit" value="Submit">
            
          </form>
    </body>
</html>

