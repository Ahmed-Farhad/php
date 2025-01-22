<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Page</title>
<style>
    
        

        .content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }

        .headline {
            font-size: 2em;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

<div>
    <?php 
    
        @include 'header.php'; 
    
    ?>
</div>



 <div class="container">
    
    <div class="content" id="home">
        <h2 class="headline">Home</h2>
        <p>Welcome to the home page. Here is some basic content about our website.</p>
    </div>
</div>
<div>
    <?php 
    
        @include 'footer.php'; 
    
    ?>
</div>


</body>
</html>
