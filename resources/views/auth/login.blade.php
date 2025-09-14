x<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        
        nav{
            background:black;
            padding:40px;
            display:flex;
            align-items:center;
            
            
            
    
        }

        nav ul{
            color:white;
            list-style:none;
            padding:10px;
            display:flex;
            
           
        
        }

        nav form {
    margin-left: auto;   
    display:flex;
    
    
        
    }

    form input {
    width:300px;
    padding:20px;
    
        
    }



  



/* aside */
aside {
  width: 50%;           /* sidebar width fixed */
  background: rebeccapurple;
  padding: 10px;
  color: white;
  height:100%;
  
}

main {
  flex: 1;                /* main takes remaining width */
  background: lightgray;
  padding: 10px;
}
.container {
  display: flex;
  height:50%;

}


        </style>

</head>
<body>
     <!-- topbar -->
      <nav>
      <form action="" method="POST">
  <input type="email" name="email" placeholder="Email" autocomplete="off">
  <input type="password" name="password" placeholder="Password" autocomplete="new-password">
  <button type="submit">GoTO</button>
</form>
      </nav>

<div class="container">
  <aside>
    <ul>
      <li>Aadarsh</li>
    </ul>
  </aside>

  <main>
    <p>This is the main content area.</p>
  </main>
</div>

 


    
</body>
</html>