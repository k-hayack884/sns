{"filter":false,"title":"timeline.blade.php","tooltip":"/cms/resources/views/auth/timeline.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"ja\">","    <head>","    <meta charset=\"utf-8\">","    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","    <title>SNSを作ってみよう！</title>","    <link href=\"{{ mix('css/app.css') }}\" rel=\"stylesheet\" type=\"text/css\">","    </head>","    <body>","        <div class=\"wrapper\">","","        <!-- ここにビューを書いていきます！！ -->","","        </div>","        <script src=\"{{ mix('js/app.js') }}\"></script>","    </body>","</html>"],"id":1}],[{"start":{"row":10,"column":4},"end":{"row":17,"column":11},"action":"remove","lines":["<body>","        <div class=\"wrapper\">","","        <!-- ここにビューを書いていきます！！ -->","","        </div>","        <script src=\"{{ mix('js/app.js') }}\"></script>","    </body>"],"id":2},{"start":{"row":10,"column":4},"end":{"row":21,"column":11},"action":"insert","lines":["  <body style=\"height:100%; background-color: #E6ECF0;\">","        <div class=\"wrapper\" style=\"margin: 0 auto; width: 50%; height: 100%; background-color: white;\">","            <form action=\"/timeline\" method=\"post\">","            {{ csrf_field() }}","                <div style=\"background-color: #E8F4FA; text-align: center;\">","                    <input type=\"text\" name=\"tweet\" style=\"margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;\" placeholder=\"今どうしてる？\">","                    <button type=\"submit\" style=\"background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;\">ツイート</button>","                </div>","            </form>","        </div>","        <script src=\"{{ mix('js/app.js') }}\"></script>","    </body>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":11},"end":{"row":21,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1636861722503,"hash":"82c050c190cb5f99a1503ce7d0d26cba11cf59ce"}