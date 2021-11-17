<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lot</title>
    </head>
    <body>
        <h1>Lot</h1>
        <p>
            くじをひきました！
        </p>
        <p>
            <!--二重かっこの中に指定した式の結果を、「htmlspecialchars」関数（Laravelのヘルパ「e」関数）でエスケープしたうえで、「echo」文で出力する、という処理と同等のことを行います。-->
            {{ $number }}番、
            @if($number==1)
                {{ $prizes[0] }}デス、
            @elseif($number>=2&&$number<=4)
                {{ $prizes[1] }}デス、
            @elseif($number==10)
                {{ $prizes[3] }}デス
            @else
                {{ $prizes[2] }}デス
            @endif
            
        </p>
        <p>
            この中からひきました。
        </p>
        <ul>
            @foreach ($prizes as $prize)
                <li>{{ $prize }}</li>
            @endforeach
           {{-- @for ($i = 0; $i < count($prizes); $i++)
                <li>{{ $prizes[$i] }}</li>
            @endfor--}}
        </ul>
    </body>
</html>