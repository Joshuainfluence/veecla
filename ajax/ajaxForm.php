<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    name: name, 
                    email: email, 
                    gender: gender, 
                    message: message, 
                    submit: submit

                });
            });
        })

        
    </script>
    <style>

        body{
            background: moccasin;
            display: flex;
            justify-content: center;
        }
        form{
            margin-top: 2rem;
        }
        .form{
            width: 300px;
            height: 40px;
            margin-bottom: 2rem;
            border: 1px solid #fff;
            color: #000;
            background: #fff;
            display: flex;
            align-self: center;
            justify-content: center;
            text-align: center;
            outline: none;
        }
        .form:focus{
            border: 1px solid green;
        }
        button{
            width: 100px;
            height: 40px;
            border: 1px solid #000;
            color: #fff;
            background: #000;
        }
        .form-error{
            color: red;
        }
        .form-success{
            color: green;
        }
        .input-error{
            box-shadow: 0 0 5px red;
        }
        .input-success{
            box-shadow: 0 0 5px green;
        }
  
    </style>
</head>
<body>
    <form action="mail.php" method="POST">
        <input type="text" name="name" id="mail-name" class="form" placeholder="Full name">
        <br>
        <input type="text" name="email" id="mail-email" class="form" placeholder="E-mail">
        <br>
        <select name="gender" id="mail-gender" class="form">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <textarea name="message" id="mail-message" class="form" cols="30" rows="10" placeholder="Message"></textarea>
        <br>
        <button type="submit" id="mail-submit" name="submit">Send Email</button>
        <p class="form-message"></p>
    </form>
</body>
</html>