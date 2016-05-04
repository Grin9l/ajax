<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Технология AJAX</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" rel="script">
        $(document).ready( function(){                                       //$(document).ready - означ что скрипт будет выполн при полной загр документа
            $("select[name='country']").bind("change", function(){           //.bind()-обработчик событий
                $("select[name='city']").empty();
                $.get("check.php",{country:$("select[name='country']").val()}, function(data){
                    data = JSON.parse(data);

                    for(var id in data){
                        $("select[name='city']").append($("<option value='"+ id +"'>" + data[id] + "</option>"));
                    }
                });
            });
        });
    </script>
</head>
<body>
        <label>Укажите страну:</label>
        <select name="country" title="1">
            <option value="0" selected="selected"></option>
            <option value="1" >США</option>
            <option value="2" >Франция</option>
        </select>
        <br>
        <br>
        <br>
        <label>Укажите город:</label>
        <select name="city" title="2">
            <option value="0"></option>
        </select>
</body>
</html>
