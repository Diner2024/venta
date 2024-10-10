<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #000000, #14213d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            perspective: 1000px;
        }

        .scene {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transform-style: preserve-3d;
        }

        .error-container {
            width: 400px;
            height: 400px;
            position: relative;
            transform-style: preserve-3d;
            animation: floatAnimation 6s ease-in-out infinite;
        }

        @keyframes floatAnimation {
            0%, 100% { transform: translateY(0) rotateY(0deg); }
            50% { transform: translateY(-20px) rotateY(180deg); }
        }

        .face {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid #fca311;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 80px;
            color: #fca311;
            opacity: 0.9;
            transition: all 0.5s;
            font-family: 'Playfair Display', serif;
            text-shadow: 0 0 10px #fca311;
            backdrop-filter: blur(5px);
        }

        .face:hover {
            background: rgba(252, 163, 17, 0.2);
            color: #ffffff;
            box-shadow: 0 0 30px #fca311;
        }

        .front { transform: translateZ(200px); }
        .back { transform: translateZ(-200px) rotateY(180deg); }
        .right { transform: translateX(200px) rotateY(90deg); }
        .left { transform: translateX(-200px) rotateY(-90deg); }
        .top { transform: translateY(-200px) rotateX(-90deg); }
        .bottom { transform: translateY(200px) rotateX(90deg); }

        .error-message {
            position: absolute;
            bottom: 50px;
            text-align: center;
            color: #ffffff;
            font-size: 22px;
            width: 100%;
            animation: fadeInUp 1.5s ease-out;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .home-link {
            color: #fca311;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            position: relative;
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid #fca311;
            overflow: hidden;
        }

        .home-link:before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(252, 163, 17, 0.4), transparent);
            transition: all 0.5s;
        }

        .home-link:hover:before {
            left: 100%;
        }

        .home-link:hover {
            box-shadow: 0 0 20px #fca311;
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: #fca311;
            border-radius: 50%;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="particles"></div>
    <div class="scene">
        <div class="error-container">
            <div class="face front">4</div>
            <div class="face back">4</div>
            <div class="face right">0</div>
            <div class="face left">0</div>
            <div class="face top">4</div>
            <div class="face bottom">4</div>
        </div>
    </div>
    <div class="error-message">
        <p>Lo sentimos, la página que buscas no existe en este universo.</p>
        <a href="<?php echo BASE_URL ?>login" class="home-link">Volver al Inicio</a>
    </div>

    <script>
        // Movimiento del cubo con el ratón
        document.addEventListener('mousemove', function(e) {
            const container = document.querySelector('.error-container');
            let x = (window.innerWidth / 2 - e.pageX) / 30;
            let y = (window.innerHeight / 2 - e.pageY) / 30;
            container.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
        });

        // Efecto hover en las caras
        const faces = document.querySelectorAll('.face');
        faces.forEach(face => {
            face.addEventListener('mouseenter', function() {
                this.style.transform += ' scale(1.1)';
            });
            face.addEventListener('mouseleave', function() {
                this.style.transform = this.style.transform.replace(' scale(1.1)', '');
            });
        });

        // Partículas de fondo
        function createParticles() {
            const particlesContainer = document.querySelector('.particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                const size = Math.random() * 5 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                const duration = Math.random() * 20 + 10;
                particle.style.animation = `float ${duration}s infinite`;
                
                particlesContainer.appendChild(particle);
            }
        }

        createParticles();
    </script>
</body>
</html>