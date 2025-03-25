<div class="titulo" azul dobro>Integração CSS</div>

<h1>
    <?php
    echo ("Olá <small> Mundo!</small>")
    ?>
</h1>

<div center"><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 15 ?>px;
        background-color: red;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>

<!--  Tudo que for código PHP, será interpretado antes do envio pro Browser
Essa operação 2 * 15 por exemplo, o Browser já a recebe resolvida como 30 pq o PHP resolve no lado do servidor-->