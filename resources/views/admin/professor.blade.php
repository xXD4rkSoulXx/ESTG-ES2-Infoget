<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #4d0000, #800000);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            color: #800000;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #800000;
            border-radius: 5px;
        }
        button {
            background: #800000;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #4d0000;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Adicionar de Professor</h1>
        <form>
            <label for="nome">Nome do Professor:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" minlength="8" required>

            <button type="submit">Criar Professor</button>
        </form>
    </div>
</body>
</html>