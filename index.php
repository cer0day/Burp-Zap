<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script>
    <script src="scrip.js"></script>
    <link rel="stylesheet" href= "styles.css">
  
    <title>AT</title>
</head>
<body>
    <div id="main">
        <h1>Ataque de fuerza bruta</h1>
        <form action="validar_password.php" method="post">
            <table class="t1">
                <thead>
                    <th>
                        <select name="herramienta" id="">
                            <option value="BurpSuite">BurpSuite</option>
                            <option value="ZAP">ZAP</option>
                            <option value="TurboIntruder">TurboIntruder</option>
                            <option value="Hydra">Hydra</option>
                        </select>
                    </th>
                    <th>
                        <select name="medir" id="">
                            <option value="no">No medir</option>
                            <option value="si">Medir</option>
                        </select>
                    </th>
                </thead>
                <tbody>
                    <tr><td colspan="2" require><input type="input" name="user" placeholder="Usuario"></td></tr>
                    <tr><td colspan="2" require><input type="password" name="password" placeholder="Password"></td></tr>
                    <tr><td colspan="2"><input type="submit" name="submit" id="submit" value="Enviar"></td></tr>
                    <tr><td colspan="2"><div id="pruebas"></div></td></tr>
                </tbody>

            </table>
        </form>
        <h2>Score</h2>
        <div id="score"></div>
        </div>
        
</body>
</html>