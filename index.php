<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data To Server</title>


    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex;
            align-items: center;
            align-content: center;
        }

        .wrapper{
            width: 40%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
        }
        .wrapper form{
            padding: 10px;
            display: flex;
            flex-direction: column;
        }
        .wrapper form input{
            width:100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #d1d1d1;
        }
    </style>
</head>
<body>
    <div class="wrapper">
       <form action="registration.php" method="post">
           <label for="">Park Code</label>
           <input type="text" name="park_code" id="">

           <label for="">Park Name</label>
           <input type="text" name="park_name" id="">

           <label for="">Park City</label>
           <input type="text" name="park_city" id="">

           <label for="">Park Country</label>
           <input type="text" name="park_country" id="">

           <br>
           <input type="submit" name="submit">
       </form> 
    </div>
</body>
</html>