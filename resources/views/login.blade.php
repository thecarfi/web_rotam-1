<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type='text/css'>
      #esquerda{
        width: 33%;
        height: 100vh;
        background-color: #FFD700;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      #icon-back{
        height: 15%; width: 20%;
      }

      #icon-back img{
        width: 100%;
        height: 100%;
        
      }
      
      #direita{
        position: absolute;
        top: 0;
        left: 33%;
        float: right;
        width: 67%;
        height: 100vh;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form-label{
        color: #fff ;
      }

      .form-text{
        color: #fff ;
      }
      
      </style>
</head>
<body>
  <div id="esquerda">
      <div id="icon-back">
     <a href="{{Route('index')}}"> <img src="{{asset('image/icon-back.png')}}" alt="voltar"></a>
     
      </div>
      
      
  </div>
<div id="direita">
  
  <div id="login">
    
    <form >
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Digite seu login</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Não compartilhe seu acesso com ninguem.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Digite sua senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
       
        <button type="submit" class="btn btn-primary">Acessar</button>
    </form>

      <a href="{{Route('admin')}}">ac</a>
  </div>

</div>
</body>
</html>