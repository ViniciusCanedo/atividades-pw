<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários</title>

        <script>
            window.onload=()=>{
                const nome = document.getElementById("nome-form");
                const email = document.getElementById("email-form");
                let bt = document.getElementById("submit");

                bt.onclick=()=>{
                    if (nome.value.length <= 5 || email.value.length <= 5) {
                        alert("Preencha os campos obrigatórios");
                        nome.focus();
                    }
                }
            }
        </script>
    </head>

    <body>
        <form action="processa.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Nome:</label>
                <input type="text" name="nome" id="nome-form">
            </div>
            <div>
                <label for="">E-mail:</label>
                <input type="text" name="email" id="email-form">
            </div>
            <div>
                <button id="submit">Enviar</button>
            </div>
        </form>

    </body>

</html>