<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <base href={$url}>
    <title>{$title}</title>
</head>
<body>
  {include file= "UL_header.tpl"}
    <main class="main">
    {include file= "aside.tpl"}
    <section class="gama">                    
        <article class="pc-gama-edit">                                     
                    <div> 
                        <label for="">Nombre de usuario</label>                       
                        <input type="text" name="name" >
                    </div>
                    <div>                        
                        <label for="">Email</label>                       
                        <input type="text" name="email" pleaceholder="Email">                    
                    </div>
                    <div>                        
                        <label for="">Password</label>                       
                        <input type="text" name="password"pleaceholder="Password">                    
                    </div>
                    <input type="submit" value="LogIn">     
            </form>            
        </article>        
    </section>
    </main>
    {include file= "footer.tpl"}
</body>
</html>