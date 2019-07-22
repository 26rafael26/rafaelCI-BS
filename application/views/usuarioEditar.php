<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuário</h1><p></p>
        <?php echo form_open('usuario/atualizar'); ?>
        <div class="form-group">
            <input type="text" value=" <?php echo $usuarioEditar[0]-> nomeUsuario;?>" name="nomeUsuario"  class="form-control form-control-lg" placeholder="Nome" required/>
        </div>
        
        <div class="form-group">
            <input type="text" value=" <?php echo $usuarioEditar[0]-> user;?>" name="user"  class="form-control form-control-lg" placeholder="User" required/>
        </div>

        <div class="form-group">
            <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha" required />
        </div>


        </div> 

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="exampleRadios2" value="Administrador">
            
            <?php if($usuarioEditar[0]->perfilAcesso === "Administrador")
            echo set_radio('perfilAcesso', '1', 'true'); ?>
            
            <label class="form-check-label" for="exampleRadios2">Administrador</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="exampleRadios3" value="Usuario" >
            
            <?php if($usuarioEditar[0]->perfilAcesso === "Usuario")
            echo set_radio('perfilAcesso', '1', 'true'); ?>
            
            <label class="form-check-label" for="exampleRadios3">Usuário</label>
        </div>

        <div class="form-group">
            <input name = "salvar" type = "submit" id = "salvar" value = "salvar" 
                   class="btn btn-success">

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?>../../usuario"
               id="cancelar">Cancelar</a>
        </div>
        <?php form_close(); ?>
    </div>
    <div class= "col-lg-6 col-md-6 col-6"></div>
</div>
