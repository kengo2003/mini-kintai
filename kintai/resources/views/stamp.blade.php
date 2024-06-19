<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Stamp</title>
</head>

<body>
  <h1>打刻</h1>

  <div class="time">
    <!-- クライアント側で時刻を表示する -->
    <p>
      現在時刻：
      <span id="real-time"></span>
    </p>

  </div>

  <form method="get" action="/savetime">
    <button type="submit">打刻</button>
  </form>

  <table>
    <tr>
      
    </tr>
  </table>

    <script type="text/javascript">
      function Time() {
      var realTime = new Date();
      var hour = realTime.getHours();
      var minutes  = realTime.getMinutes();
      var seconds  = realTime.getSeconds();
      var text = hour + ":" + minutes + ":" + seconds;
      document.getElementById("real-time").innerHTML = text;
      }
      setInterval('Time()',1000);
    </script>
</body>

</html>