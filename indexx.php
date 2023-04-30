<?php
session_start();

  include("connection.php");
  include("functions.php");


  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
  <title>TTech</title>
</head>
<body>
  <style>
    *{
    box-sizing: border-box;
    
}
html{
    scroll-behavior: smooth;
}
h1{font-size: 3.5em;}
h2{font-size: 2.7em;}
h3{font-size: 1.5em;}
p{font-size: 1.25em;}
body{
    font-family: "Roboto", sans-serif;
margin: 0;
}
button{
    font-size: 1.5em;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 10px;
    border: 1px solid rgba(0,0,0,0.5);
    box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    color: white;
    background-color: blueviolet;
    
}
button:hover{
background-color: rgb(113, 40, 182);
}
.color-acento{
    color: blueviolet;
}
.container{
    max-width: 1400px;
    margin: auto;
}
header{
    background-color: rgb(27, 27, 27);
}
header .logo{
margin: 0;
padding: 25px 30px;
font-weight: bold;
color: rgb(145, 77, 209);
font-size: 1.6em;
}
header .container{
display: flex;
flex-direction: column;
align-items: center;
}
header nav{
display: flex;
flex-direction: column;
text-align: center;
padding-bottom: 25px;
}
header a{
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: rgb(255, 255, 255);

}
header a:hover{
    color: blueviolet;
}
#hero{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    height: 90vh;
    
    background-image: linear-gradient(
    0deg,
    rgba(0,0,0,0.5),
    rgba(0,0,0,0.5)
    ),url("Logo Empresas.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
#hero h1{
    color: white;
}
#Nosotros{
    text-align: center;
    padding: 200px 12px;
}

#servicios{
    text-align: center;
    color: #fff;
    background-color: #1b1b1b;
}
#servicios .container {
   
    padding: 150px 12px;
    
}
#servicios h2{
    margin-top: 0;
}
#servicios p{
display: none;
}
#servicios .carta{
    background-size: cover;
    background-position: center center;
    padding: 50px 0px;
    margin: 30px;
    border-radius: 15px;


}
.carta:first-child{
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
        
}
.carta:nth-child(2){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
       

}
.carta:nth-child(3){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
        

}
.carta:nth-child(4){
    background-image: linear-gradient(
        0deg,
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
        

}
#empleo{
    text-align: center;
    
    color: #fff;
    background-color: #ffffff;
}
#empleo .container{
    padding: 150px 12px;
}
#contacto{
    text-align: center;
    
    color: #fff;
    background-color: #2b2563;
}
#contacto .container{
    padding: 150px 12px;
    
}




footer {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
  }
  @media(min-width: 720px) {
    header{
        position: fixed;
        width: 100%;
    }
    header .container{
        flex-direction: row;
        justify-content: space-between;
    }
    header nav{
        flex-direction: row;
        padding-bottom: 0;
        padding-right: 20px;
    }  
    #Nosotros .container {
        display: flex;
        justify-content: space-evenly;
    }
    #Nosotros .texto{
        width: 50%;
        max-width: 600px;
        text-align: initial;
        
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    #Nosotros .img-container {
        background-image: url('Empleo.jpg');  
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px;
    }
    #Nosotros h2{
        margin-top: 0px;
    }
    #hero h1{
        font-size: 5em;
    }
    #servicios .programas{
        display: flex;
        justify-content: center;
    }
    #servicios h3{
        margin-top: 0;
        
    }
    
    #servicios .carta{
        padding: 50px;
        background-size: 100% 150px;
        background-repeat: no-repeat;
        background-position-y: 0;
        background-color: rgba(50,50,50,0.5);
        box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }
    #servicios button{
        position: center center;
    }
    .carta:first-child{
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("C:/Users/tinch/Downloads/first child/gestion empresarial.jpg");
            
    }
    .carta:nth-child(2){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
           
    
    }
    .carta:nth-child(3){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("C:/Users/tinch/Downloads/logo empresa/Logo Empresas.jpg");
            
    
    }
    .carta:nth-child(4){
        background-image: linear-gradient(
            0deg,
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ),url("C:/Users/tinch/Downloads/first child/gestion empresarial.jpg");
            
    
    }
    #empleo{
        text-align: center;
        
        color: #fff;
        background-color: #ffffff;
    }
    #empleo .container{
        padding: 150px 12px;
    }
    #contacto{
        text-align: center;
        
        color: #fff;
        background-color: #2b2563;
    }
    #contacto .container{
        padding: 150px 12px;
        
    }
}
  </style>
    <header>
        <div class="container">
            <p class="logo">TTech</p>
            
           
            <nav>
                <a href="logout.php">logout</a>
                <a href="#hero">Inicio</a>
                <a href="#Nosotros">Conocenos</a>
                <a href="#servicios">Servicios</a>
                <a href="#empleo">Empleos</a>
                <a href="#contacto">Contacto</a>
                <a href="file:///C:/Users/tinch/OneDrive/Escritorio/egg/estructura.html" style="border: 1px solid #007bff; box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); padding: 5px; color: #007bff; text-decoration: none;">Soluciones Tecnológicas</a>
                <a> Hola,
                   <?php echo $user_data['user_name']; ?>
                </a>
            </nav>
        </div>
    </header>
    <section id="hero">
        <h1>Aprendé a Programar<br>con Nosotros</h1>
        <form action="">
            <button>
                APLICA YA!
            </button>
        </form>
        
    </section>
    <section id="Nosotros">
        <div class="container">
            <div class="img-container"></div>
                <div class="texto">
                    <h2>Somos <span class="color-acento">TTech</span> </h2>
                </div>
            </div>
    </section>
    <section id="servicios">
        <div class="container">
           <h2>Nuestros Servicios</h2>
           <div class="programas">
            <div class="carta">
                <h3>Plataformas educativas</h3>
                <button> + info </button>
           </div>
           <div class="carta">
                <h3>Aplicaciones para el sector salud</h3>
                <button> + info </button>
           </div>
           <div class="carta">
                <h3>Software de seguridad informática</h3>
                <button> + info </button>
           </div>
           <div class="carta">
              <h3>Sistemas de gestión empresarial</h3>
              <button> + info </button>
           </div>
           </div>
           
        </div>
		</section>
        <section id="empleo">
            <div class="conteiner">
                <h3> <span class="color-acento">Si quieres trabajar con nosotros primero contáctanos.
                    <br>
                    Luego te enviaremos instrucciones para que nos envíes tu CV.</span>
                </h3>
                <h2><span class="color-acento">Envía tu CV.
                    <form action="procesar_archivo.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="archivo">
                        <input type="submit" value="Enviar archivo">
                      </form>
                </span>
                  
                  
              </h2>
            </div>
            
        </section>
        <section id="contacto">
            <div class="container">
                <h2>Contáctanos</h2>
                <div class="Nombre">
                    <form>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            <div class="Email">
                <form>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="Mensaje">
                <form>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            
            </div>
        </section>
        <footer>
        
            <p>Derechos reservados &copy; TTech 2023</p>
        
        </footer>

</body>
</html>