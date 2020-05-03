<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    
    <title>Demo</title>
    <script src="scriptDemo.js"></script>
    <style>
        a{
            text-decoration: none;
            color: #333;
        }
        body{
            width: 40%;
            margin: auto;
            border: 1px solid #444;
        }
        h1,h2,h3,h4{
            padding: 15px;
        }
        button{
            height: 30px;
            width: 200px;
            font-size: 24px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="btns">
        <form method="POST">
            <button id="h1" onclick="functionh1">H1</button></br>
            <button id="h2">H2</button></br>
            <input type="submit" value="H3" id="h3">
            <button id="h4">H4</button>
        </form>
    </div>
    <h1>
        <a href="#" name="heading1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam debitis numquam quidem ut fugit ducimus minima necessitatibus odio sed officiis sunt qui nesciunt corrupti atque aut cum perferendis excepturi repellendus sequi incidunt recusandae facere, commodi assumenda quasi! Odio, earum deserunt?    
        </a>
    </h1>
    <h2>
        <a href="#" name="heading2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo iusto exercitationem quibusdam laboriosam obcaecati, ea quisquam cumque molestiae aperiam?</a>
    </h2>
    <h3>
        <a href="#" name="heading3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci quas placeat delectus, quibusdam voluptatibus laboriosam quo! Aspernatur, eligendi corporis suscipit quaerat, quibusdam consectetur magni fugiat dolorem iste neque a labore id explicabo. Dignissimos, perferendis sit. Incidunt voluptas harum asperiores omnis sapiente minima rem, dolores animi fugiat ullam ab error.</a>
    </h3>
    <h4>
        <a href="#" name="heading4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo, corporis iure et nam dolor ratione architecto consectetur rerum corrupti iusto minus nesciunt neque tempore nemo blanditiis at deleniti illum omnis quos. Optio vitae eaque tempora animi ea quod harum temporibus veritatis natus voluptas reprehenderit placeat repellendus officia, facere mollitia ipsum!</a>
    </h4>
    <button class="h5">H5</button>
</body>
<script>
    $(document).ready(function(){
        $('#h3').click(function(){
            alert("H3 is clicked");
            window.location = "#heading3";
        });
    });
</script>
</html>