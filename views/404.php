<title>Error 404 - Página no encontrada</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(45deg, #1a1a2e, #16213e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            perspective: 1000px;
        }

        .error-container {
            width: 300px;
            height: 300px;
            position: relative;
            transform-style: preserve-3d;
            animation: rotate 20s infinite linear;
        }

        @keyframes rotate {
            0% { transform: rotateY(0deg) rotateX(0deg); }
            100% { transform: rotateY(360deg) rotateX(360deg); }
        }

        .face {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #e94560;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            color: #e94560;
            opacity: 0.8;
            transition: all 0.3s;
        }

        .face:hover {
            background: rgba(233, 69, 96, 0.2);
            color: #ffffff;
            box-shadow: 0 0 20px #e94560;
        }

        .front { transform: translateZ(150px); }
        .back { transform: translateZ(-150px) rotateY(180deg); }
        .right { transform: translateX(150px) rotateY(90deg); }
        .left { transform: translateX(-150px) rotateY(-90deg); }
        .top { transform: translateY(-150px) rotateX(-90deg); }
        .bottom { transform: translateY(150px) rotateX(90deg); }

        .error-message {
            position: absolute;
            bottom: 20px;
            text-align: center;
            color: #ffffff;
            font-size: 18px;
            width: 100%;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .home-link {
            color: #e94560;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .home-link:hover {
            text-shadow: 0 0 10px #e94560;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="face front">4</div>
        <div class="face back">4</div>
        <div class="face right">0</div>
        <div class="face left">0</div>
        <div class="face top">4</div>
        <div class="face bottom">4</div>
    </div>
    <div class="error-message">
        <p>Oops! La página que buscas no existe.</p>
        <p>Vuelve al <a href="<?php echo BASE_URL ?>inicio" class="home-link">inicio</a> para seguir explorando.</p>
    </div>

    <script>
        document.addEventListener('mousemove', function(e) {
            const container = document.querySelector('.error-container');
            let x = (window.innerWidth / 2 - e.pageX) / 25;
            let y = (window.innerHeight / 2 - e.pageY) / 25;
            container.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
        });

        const faces = document.querySelectorAll('.face');
        faces.forEach(face => {
            face.addEventListener('mouseenter', function() {
                this.style.transform += ' scale(1.1)';
            });
            face.addEventListener('mouseleave', function() {
                this.style.transform = this.style.transform.replace(' scale(1.1)', '');
            });
        });
    </script>