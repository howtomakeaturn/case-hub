<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/bulma.min.css" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            .box .tag{
                margin-bottom: 5px;
            }
            .button.is-block {
                display: block;
            }
        </style>
    </head>
    <body>

        <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                Case X
              </h1>
              <h2 class="subtitle">
                由爬蟲機器人到處蒐集案件資訊的資料蒐集站。
              </h2>
            </div>
          </div>
        </section>

        <section class="section">
            <div class="container">
                @foreach($rows as $row)
                <h3 class="title is-3 has-text-centered">{{$row['category']}}</h3>
                @for($i=0; $i<2; $i++)
                <div class="box">
                    <div class="columns">
                        <div class="column">
                            <h5 class="title is-5">
                            {{$row['title']}}
                            </h5>
                            <div>
                                <span class="tag is-black is-medium">工程</span>
                                <span class="tag is-black is-medium">論文摘要</span>
                                <span class="tag is-black is-medium">工程</span>
                                <span class="tag is-black is-medium">工程</span>
                                <span class="tag is-black is-medium">工程</span>
                            </div>
                            <div class="content is-medium" style="margin-top: 16px;">
                                <pre>@include('_' . ($i +1))</pre>
                            </div>
                        </div>
                        <div class="column is-1 is-hidden-mobile">
                            31 分鐘前
                        </div>
                        <div class="column is-2">
                              <a class="button is-primary is-medium is-block">我要接案</a>
                        </div>
                    </div>
                </div>
                @endfor
                <br>
                @endforeach
            </div>
        </section>

        <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">
              <p>
                <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
              </p>
            </div>
          </div>
        </footer>
    </body>
</html>
