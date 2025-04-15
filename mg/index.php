<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0:
        }
        .cabecalho{
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #8FC8F7 ;
            color: white;
            font-family: sans-serif;
            border-radius: 20px;
            }

        section{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            }

        form{
            font-family: sans-serif;   
            }

        form div{
        display: flex;
        flex-direction: column;
        margin-bottom: 30px;
            }
        
        form input, form textarea{
            outline: unset;
            padding: 20px;
            width: 300px;
            border: 1px solid #8FC8F7;
            border-radius: 20px;
        }
        form input:focus, form textarea:focus{
            background-color:#8FC8F7;
        }

        form input[type=submit]{
            background-color: #8FC8F7;
            color: white;
            cursor: pointer;
        }
        form label{
            margin-left: 10px;
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

      
        thead {
            background-color:#8FC8F7;
            color: white;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }

        th, td {
            border: 1px solid #ddd;
        }

        tfoot {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        tbody.empty {
            text-align: center;
        }
        body{
            background-attachment: fixed;
            background-image: ;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="style_nav_bar.css">
    <link rel="stylesheet" href="style_janela_modal.css">
    <link rel="shortcut icon" type="image/png" href="logosite.png" style="width: 20px; height: 20px;">
</head>


<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "quiz";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = "SELECT *FROM perguntas";
$consulta_quiz = mysqli_query($conexao, $query);
?>


<body >


    <header>
        <nav class="nav-bar">
            <div class="logo">
                
            </div>

            <div class="nav-list">
                <ul>
                    <li onclick="abrirModal1()" class="nav-item"><a href="#" class="nav-link">adicionar pergunta</a>
                    </li>
                    <li onclick="abrirModal2()" class="nav-item"><a href="#" class="nav-link">checar lista de
                            perguntas</a></li>
                </ul>
            </div>
    </header>

    <div class="janela-modal" id="janela-modal-formulario">
        <div class="modal" style="width: 250px; height: 800px">
            <button class="fechar" id="fechar">X</button>
           
            <section>
                <form method="post" action="processa_fornecedores.php">
                    <div class="nome">
                       <label>pergunta:</label><br>
                        <input type="varchar" name="pergunta1" placeholder="Digite a pergunta"> 
                        
                    </div>
                    <br><br>
                    <div class="cnpj">
                        <label>r1:</label><br>
                        <input type="text" name="r1" placeholder="Digite a primeira resposta">
                    </div>
                    <br><br>
                    <div class="cnpj">
                        <label>r1:</label><br>
                        <input type="text" name="r2" placeholder="Digite a segunda resposta">
                    </div>
                    <br><br>
                    <div class="cnpj">
                        <label>r1:</label><br>
                        <input type="text" name="r3" placeholder="Digite a terceira resposta">
                    </div> 
                    <br><br>
                    <div class="cnpj">
                        <label>r1:</label><br>
                        <input type="text" name="r4" placeholder="Digite a quarta resposta">
                    </div> 
                    <br><br>
                    <div class="botao">
                        <input type="submit" value="Inserir pergunta">
                    </div>
                </form>
            </section>
        </div>
    </div>

    <div class="janela-modal" id="janela-modal-lista">
        <div class="modal" style="width: 350px; height: 300px">
            <button class="fechar" id="fechar">X</button>
            <h1 style=" 
            padding: 20px;
            border: 1px solid #8FC8F7;
            border-radius: 20px;
            background-color: #8FC8F7">Lista de perguntas</h1>
            <table>
                <thead>
                    <tr>
                        <th>pergunta</th>
                        <th>r1</th>
                        <th>r2</th>
                        <th>r3</th>
                        <th>r4</th>
                        <th>Id</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                while($linha = mysqli_fetch_array($consulta_quiz)){
                    echo'<tr>';
                        echo'<td>'.$linha['pergunta1'].'</td>';
                        echo'<td>'.$linha['r1'].'</td>   ';
                        echo'<td>'.$linha['r2'].'</td>   ';
                        echo'<td>'.$linha['r3'].'</td>   ';
                        echo'<td>'.$linha['r4'].'</td>   ';
                        echo'<td>'.$linha['id'].'</td>   ';
                    echo'</tr>';   
            ?>

                    <?php
                }
    
            ?>
                </tbody>
            </table>
        </div>
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="JavaScript_nav_bar.js"></script>
    <script src="JavaScript_janela_modal.js"></script>
</body>