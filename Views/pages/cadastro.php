<div class="chamada">
    <div class="center">
        <h2><?php echo $arr['titulo'] ?></h2>
    </div><!-- center -->
</div><!-- chamada -->

<div class="cadastro principal">
    <div class="center"> 
        <form action="" method="post">
            <div class="alerta">
                <h3>Cadastro de Clientes</h3>
            </div><br>
            <input  type="text" name="nome" placeholder="Nome">
            <input id="mail-contato" type="text" name="mail" placeholder="Digite seu e-mail aqui...">
            <textarea name="mensagem" placeholder="Sua Mensagem..." >
            </textarea>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </div>
</div><!--Cadastro clientes-->