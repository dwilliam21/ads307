<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{margin:0;}
        h1{text-align: center;}
        form{
        background-color: black;
        width: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        border: solid 1px;
        border-radius: 10px;
        border-color: cadetblue;
        padding: 20px;}
        img{
          margin: auto;
          display: flex;
          align-items: center;
          width: 290px;
          margin-top: 80px;
        }
        .backform{
          margin:  0px 200px;
          align-items: center;
          display: flex;
          background-color: blue;
        }

        
        @media screen and (max-height: 560px) {
        img{
          display: flex;
          margin-top: 50px;
        }
      }
      @media screen and (max-height: 460px) {
        img{
          display: none;
        }
      }
        
    </style>
</head>

  <body>
    <div class="backform">
      <img src="https://cdn.univicosa.com.br/img/logos/novo/univicosa_horizontal.png" alt="...">

      <form action="">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Senha</label>
        </div>
      </form>
    </div>
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>