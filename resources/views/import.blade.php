

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar informações</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
     <style>
   html, body {
      
      background-color: #00AD8E;
      
   }</style>
</head>
<body>
   
<div class="container" >
    <div class="card bg-light mt-3">
        <div class="card-header">
            Cadastrar alunos
        </div>
        <div class="card-body">
            <form action="{{ route('importAluno') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Fazer importação de alunos</button>
            </form>
        </div>
        <div class="card-header">
            Cadastrar professores
        </div>
        <div class="card-body">
            <form action="{{ route('importHorario') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Fazer importação de horarios/professores</button>

            </form>
        </div>
         <div class="card-header">
            Cadastrar perguntas
        </div>

        <div class="card-body">
            <form action="{{ route('importPergunta') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Fazer importação das perguntas</button>

            </form>
        </div>
    </div>
</div>
   
</body>
</html>