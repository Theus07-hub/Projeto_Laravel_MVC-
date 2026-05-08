<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Pet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-center mb-4">
                Agendamento de Passeio Pet
            </h1>

            <form method="POST" action="/salvar">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome do Pet</label>
                    <input type="text" name="nome_pet" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Responsável</label>
                    <input type="text" name="responsavel" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Data</label>
                    <input type="date" name="data" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Horário</label>
                    <input type="time" name="horario" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Agendar Passeio
                </button>

            </form>

        </div>

    </div>

</body>
</html>