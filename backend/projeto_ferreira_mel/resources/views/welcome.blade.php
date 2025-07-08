<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="./icone.png" />
    <title>Formulario do contrato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h1 class="text-center mt-4">CONTRATO DE LOCAÇÃO DA POUSADA DO MEL</h1>
            </div>
            <div class="col-md-1">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger mt-4">Sair</button>
                </form>
            </div>
        </div> 

        <form action={{route('dadosContrato.store')}} method="POST">
            @csrf
            <br>
            <label>Data de Entrada:</label>
            <input name="dl_data_entrada" type="date" class="form-control" required>
            
            <label>Hora de Entrada:</label>
            <input name="dl_hora_entrada" type="time" class="form-control" required>

            <label>Data de Saída:</label>
            <input name="dl_data_saida" type="date" class="form-control" required>

            <label>Hora de Saída:</label>
            <input name="dl_hora_saida" type="time" class="form-control" required>

            <label>Valor da Locação:</label>
            <input name="dl_valor" type="number" class="form-control" required>

            <label>Valor Comprometido:</label>
            <input name="dl_valor_comprometido" type="number" class="form-control" required>
            

            <div class="text-center mt-3 mb-4">
                <button type="submit" class="btn btn-primary mt-3">Criar link para contrato</button>
            </div>
        </form>

        <div class="modal fade" id="contratoModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Contrato</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<template>
    
</template>



<style scoped>
    .contrato {
        font-family: 'Aptos', 'Segoe UI', 'Helvetica', 'Arial', sans-serif;
    }
</style>