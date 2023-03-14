<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Web</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ])

</head>
<body>
    <!-- GRID -->
    <div class="container">
        <!-- LINHA -->
    <div class="row">
        <!-- COLUNA -->
    <div class="col">
        <!-- CABEÇALHO -->
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled text-white">Consultar</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
               
                <!-- GRID -->
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <br>
                                <!-- TITULOS -->
                                <h4>Cadastrar - Agendamento de Potenciais Clientes</h3>
                                <p>Sistema utilizado para agendamento de serviços<p>
                            <br>

                            <!-- FORMULÁRIO -->
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(xx)xxxxx-xxxx">
                            
                            </div>

                            <div class="mb-3">
                                <label for="inputState" class="form-label">Origem</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Celular</option>
                                    <option>...</option>
                                </select>
                            
                            </div>

                        

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Data do Contato</label>
                                <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="dd/mm/aaaa">
                            
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Observação</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                            <button type="button" class="btn btn-primary">Cadastrar</button>


                            <!-- FIM COLUNA -->
                        </div>
                        <!-- FIM LINHA -->
                    </div>
                    <!-- FIM GRID -->
                </div>

                <!-- FIM COLUNA -->
            </div>
        <!-- FIM LINHA -->
        </div>
    <!-- FIM GRID -->
    </div>
    
</body>
</html>