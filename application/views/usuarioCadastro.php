<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuário</h1><p></p>
        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <input type="text"  name="nomeUsuario"  class="form-control form-control-lg" placeholder="Nome" required/>
        </div>

        <div class="form-group">
            <input type="text"   name="user" class="form-control form-control-lg" placeholder="Usuário" required/>
        </div> 

        <div class="form-group">
            <input type="password"   name="senha" class="form-control form-control-lg" placeholder="Senha" required/>
        </div> 
        

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="exampleRadios2" value="Administrador" required>
            <label class="form-check-label" for="exampleRadios2">Administrador</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="perfilAcesso" id="exampleRadios3" value="Usuario" required>
            <label class="form-check-label" for="exampleRadios3">Usuário </label>
        </div>

        <div class="form-group">
            <input name = "salvar" type = "submit" id = "salvar" value = "salvar" 
                   class="btn btn-success">

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?>home"
               id="cancelar">Cancelar</a>
        </div>
        <?php form_close(); ?>
    </div>
    <div class= "col-lg-6 col-md-6 col-6"></div>
</div>
<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Lista de Usuários</h1><p></p>
        
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
            <thead >
                <tr>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Acesso</th>
                    <th scope="col">Funções</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $row): ?>                        
                    <tr>
                        <td><?php echo $row->nomeUsuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        
                        <td>
                            <a class="glyphicon glyphicon-trash" href="<?php echo base_url().'usuario/excluir/'.$row->idusuario;?>" ></a>
                            <a class="glyphicon glyphicon-pencil" href="<?php echo base_url().'usuario/editar/'.$row->idusuario;?>" ></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class= "col-lg-3 col-md-3 col-3"></div>
    </div>
</div>
<script>
    $ (document) .ready(function () {
        $('#table_id') . DataTable({
            language: {
                "url":"//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>
