<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        nav{
            background:black;
            color:white;
            height:100px;
            text-align: right;
            
        }

        
        aside{
            background:palegreen;
            width:5%;
            min-height: 100%; 
            /* border: 10px solid blue;       */
        }

       .container{
        display:flex;
        width:5000px;
        height:10000px;
        border:10px solid red;

       }
       
       form input{
        width:1%;
        padding: 10px;
        box-sizing:content-box;
        border:20px outset black;
        

       }

       main form{
        width:200%;
        padding:10px;
        justify-content: flex-end;
        
    
        
       }

       main{
        background:pink;
        /* display:flex; */
        width:100%;
        justify-content: flex-end;
       }
    </style>

</head>
<body>
    <nav>
        <marquee><P> Welcome to Registration!</P></marquee>
    </nav>
    <div class="container">
        <aside>
            <P>Register</P>
        </aside>
        <main>
            <form action="" method="POST">
            <input type= "name" name="name" placeholder="Name">
            <input type="email" name="email"placeholder="Email" autocomplete="Off">
            <input type="password" name="password" placeholder="Password" autocomplete="new-password">
            <button type="submit"> Submit </button>
        
            </form>
            
        </main>
    </div>


    
</body>
</html>