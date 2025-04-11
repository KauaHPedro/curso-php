<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP - Coder</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <nav class="modulos">
               <div class="modulo verde">
                   <h3>Módulo 01 - Básico</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=ola">Olá, PHP!</a></li>
                       <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                       <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                       <li><a href="exercicio.php?dir=basico&file=desafio">Desafio Seção 1</a></li>
                   </ul>
               </div>

               <div class="modulo azul-escuro">
                   <h3>Módulo 02 - Tipos</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=tipos">Tipos de Dados</a></li>
                       <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                   </ul>
               </div>

               <div class="modulo vermelho">
                   <h3>Módulo 03 - Variáveis</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=basico">Desafio Equação</a></li>
                       <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                       <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                       <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                   </ul>
               </div>

               <div class="modulo laranja">
                   <h3>Módulo 04 - Controle</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=if-else">If e Else</a></li>
                       <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                       <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Operadores Lógicos</a></li>
                   </ul>
               </div>

               <div class="modulo roxo">
                   <h3>Módulo 05 - Arrays</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=arrays&file=basico">Básico sobre Arrays</a></li>
                       <li><a href="exercicio.php?dir=arrays&file=desafio_sorteio">Desafio Sorteio</a></li>
                       <li><a href="exercicio.php?dir=arrays&file=multidimensionais">Multidimensionais</a></li>
                   </ul>
               </div>

           </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>