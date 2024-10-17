<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <div class="box">
                        <h1 class="title has-text-centered">Login</h1>
                        <form action="./index.php?acao=login" method="post">
                            <div class="field">
                                <label class="label">Usuário</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Seu usuário" name="usuario">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Senha</label>
                                <div class="control">
                                    <input class="input" type="password" placeholder="Sua senha" name="senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="submit" class="button is-primary is-fullwidth" value="Entrar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__."/footer.php"; ?>