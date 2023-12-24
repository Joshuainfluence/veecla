<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.get("text.txt", function(data, status){
                    $("#test").html(data);
                    alert(status);
                })
            })
        });

        $(document).ready(function(){
            $("input").keyup(function(){
                var name = $("input").val();
                $.post("suggestions.php", {
                    suggestion: name
                }, function(data, status){
                    $("#suggestions").html(data);
                });
            })
        })
    </script>
</head>
<body>
    <button>Click to get me the data!</button>

    <input type="text" name="name" id="">

    <p id="test"></p>
    <p id="suggestions"></p>
</body>
</html>