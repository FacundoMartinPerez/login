<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>TTech</title>
    <style>
		.logo {
			float: left; 
			margin-right: 2px; 
		}
	</style>
    
	<link rel="stylesheet" href="style.css">
    <link rel="icon" href="C:\Users\tinch\Downloads\logo empresa\Logo Empresas.jpg" alt="Logo de la empresa" type="Logo Empresas.jpg">
</head>
<body>
	
    <header>
        <div>
            <img src="C:\Users\tinch\Downloads\logo empresa\Logo Empresas.jpg" alt="Logo de la empresa" class="logo" width="40" height="40">
            <h1>TTech</h1>
        </div>
        
	    
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#Trabajo">Trabaja con Nosotros</a></li>
                    <li><a href="file:///C:/Users/tinch/OneDrive/Escritorio/egg/estructura.html" style="border: 1px solid #007bff; box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); padding: 5px; color: #007bff; text-decoration: none;">Soluciones Tecnológicas</a></li>
                </ul>
            </nav>
       
	</header>
    
	<main>
		
        <div class="seccion1">
		<section1 id="inicio" style="min-height: 600px;max-height: 700px;min-width: 1000px; ; max-width: 1100px;">
			
			<h1>Bienvenidos a nuestra empresa tecnológica</h1>
			
            <p>Somos una empresa especializada en soluciones tecnológicas innovadoras para nuestros clientes. Ofrecemos una amplia gama de servicios y productos que se adaptan a las necesidades de cada cliente.</p>
		  
        </section1>
	</div>
		<section id="servicios" style="min-height: 300px; max-height: 600px;">
			<h2>Nuestros Servicios</h2>
			<ul>
				<li>Desarrollo de aplicaciones web y móviles</li>
				<li>Diseño y desarrollo de páginas web</li>
				<li>Mantenimiento y soporte técnico</li>
				<li>Consultoría tecnológica</li>
			</ul>
		</section>
		<section id="productos">
			<h2>Nuestros Productos</h2>
			<ul>
				<li>Sistemas de gestión empresarial</li>
				<li>Software de seguridad informática</li>
				<li>Aplicaciones para el sector salud</li>
				<li>Plataformas educativas</li>
			</ul>
		</section>
		<section id="contacto">
			<h2>Contáctanos</h2>
			<form>
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="mensaje">Mensaje:</label>
				<textarea id="mensaje" name="mensaje" required></textarea>
				<button type="submit">Enviar</button>
			</form>
		</section>
        <Section id="Trabajo">
          <p> Si quieres trabajar con nosotros primero contactanos, y luego te enviaremos instrucciones para que envíes tu CV.
          </p>
          <h2>
            Envía tu CV.
            <form action="procesar_archivo.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" value="Enviar archivo">
          </form>
        </h2>
        </Section>
	
	</main>
   
	<footer>
        
		<p>Derechos reservados &copy; TTech 2023</p>
	
    </footer>
</body>
</html>