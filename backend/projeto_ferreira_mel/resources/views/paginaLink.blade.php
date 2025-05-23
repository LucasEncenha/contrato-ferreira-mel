<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-4">Link para formulario do contrato</h3>
        <br><br>
        <p id="linkParaCopiar" class="text-center">http://localhost:5173/?token={{$token}}</p>
        <div class="text-center mt-5">
            <button onclick="copiarTexto()" class="btn btn-success">Copiar</button>
            <button onclick="window.location.href='/'" class="btn btn-primary">Voltar para página inicial</button>
        </div>
    </div>

    <script>
        function copiarTexto() {
            const texto = document.getElementById('linkParaCopiar').innerText;
        
            navigator.clipboard.writeText(texto)
                .then(() => alert('Link copiado com sucesso!'))
                .catch(err => alert('Erro ao copiar o link: ' + err));
        }
    </script>
</body>
</html>