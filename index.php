<!DOCTYPE html>
<html>
    <head>
        <title></title>
    <style type="text/css">
        #login{
            width:300px;
            padding:10px;
            margin-left:350px;
            margin-top:100px;
            border:solid;
            border-width:2px;
            border-color:grey;
            border-radius: 10px;
        }
        
        #imgIzq{
            float:left;
            margin-left:100px;
        }
        
        #imgDer{
            float:right;
            margin-right:100px;
        }
        
    </style>
    </head>
    <body>
        <div id="contenido">
            <div id="imgIzq">
                <img src="img/Imagen_Lista1.jpg" width=200px heigth=200px></img>
            </div>
            
            <div id="imgDer">
                <img src="img/Imagen_Lista2.jpg" width=200px heigth=200px></img>
            </div>
            
            <div id="login">
                <h2>Login</h2>
                <p>Nombre:</p>
                <input type="text" name="usuario"/>
                </br>
                <p>Password:</p>
                <input type="password" name="pass"/>
                </br>
                </br>
                <input type="button" name="enviar" value="Enviar"/>
            </div>
            
            
        </div>
    </body>
</html>