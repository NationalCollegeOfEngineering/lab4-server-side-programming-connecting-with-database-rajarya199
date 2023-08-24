<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
</head>
<body>
    <!-- <form action="" method='get'>
        Search: <input type="text" name="search">
        <button type="submit"> Search</button>
        <br>results are:
        <div id="search_result"> </div>
        <script>
            var results=['ram','hari'];
            var resultText=''
            results.forEach(name=>{
                resultText=resultText+'<div>'+name+'</div>';
            });
            document.getElementById('search_result').innerHTML=resultText
        </script>
    </form> -->

    <form action="" method="get" onsubmit="return fetchUsingAjax()">
        Search: <input type="text" name="search">
        <input type="submit" value="search">
        <br>
        Results are:
            <div id="search_result"></div>
    </form>
  

<script>
      function fetchUsingAjax() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if (this.readyState == 4) {
            document.getElementById("search_result").innerHTML =
              this.responseText || "No data";
          }
        };
        var str = document.getElementById("search_id").value;
        xmlhttp.open("GET", "server.php?search=" + str, true);
        xmlhttp.send();

        return false;
      }
    </script>
</body>
</html>