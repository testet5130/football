<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="res"></div>
    <div>test</div>
    <script>
        var xhr = new XMLHttpRequest;
        xhr.onreadystatechange = function() {
            if(this.status == 200 && this.readyState == 4) {
                document.querySelector("#res").textContent = this.responseText;
            }
        }
        // xhr.open("GET", "", true);
        // xhr.send();
    </script>
</body>
</html>