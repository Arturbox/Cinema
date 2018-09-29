<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Styles -->
    <style>
    span{
        font-size: 20px;
    }
    </style>
    <!-- Styles -->
</head>
<body>
<div class="container">
    <div class="row">

        <form method="post" action="">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            Start:<input name="start" type="text" id="dt1" value="{{$filterData['start']}}">

            End:<input name="end" type="text" id="dt2" value="{{$filterData['end']}}">

            <input type="submit" value="Искать">

        </form>
    </div>
    <div class="row">

        @foreach($sessions as $session)

            <div class="col-md-6" data-id="{{$session->id}}">

                <h1>Имя фильма: {{$session->movieSessions()->first()->movie()->first()->name}}</h1>

                <h3>Время сеанса:  {{$session->start}}</h3>

                @for($i = 1;$i<=$session->tickets;$i++)

                    @if(array_search($i, array_column($session->purchase()->get()->toArray(), 'chair'))!==false)

                        <span style="background-color: blue;">{{$i}}</span>

                    @else

                        <span class="reserve_chair" data-id="{{$i}}" style="cursor: pointer">{{$i}}</span>

                    @endif

                @endfor

            </div>

        @endforeach

    </div>

</div>

<script>
    $(document).ready(function () {
        $("#dt1").datepicker({
            dateFormat: "yy-mm-dd",
            onSelect: function () {
                var dt2 = $('#dt2');
                var startDate = $(this).datepicker('getDate');
                startDate.setDate(startDate.getDate() + 1);
                dt2.datepicker('option', 'minDate', startDate);
            }
        });
        $('#dt2').datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
        });


        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(".reserve_chair").click(function(){
            $.ajax({
                url: '/reservation',
                type: 'POST',
                data: {_token: CSRF_TOKEN, chair:$(this).data('id'),session:$(this).parent().data('id')},
                dataType: 'JSON',
                success: function (data) {
                    if (data.status=="success"){
                        location.reload();
                    }
                }
            });
        });
    });
</script>



</body>
</html>
