<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Alunos</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text"  name="nome"  class="form-control form-control-lg" placeholder="Nome" />
        </div>

        <div class="form-group">
            <input type="text"   name="rg" class="form-control form-control-lg" placeholder="RG" />
        </div> 

        <div class="form-group">
            <input type="text"   name="idade" class="form-control form-control-lg" placeholder="Idade" />
        </div> 

        <div class="form-group">
            <input type="text"   name="endereco" class="form-control form-control-lg" placeholder="Endereço" />
        </div> 

        <div class="form-group">
            <input type="text"   name="turma'" class="form-control form-control-lg" placeholder="Turma" />


        </div> 

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="Masculino">
            <label class="form-check-label" for="exampleRadios2">
                Masculino
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios3" value="Feminino" >
            <label class="form-check-label" for="exampleRadios3">
                Feminino
            </label>
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
        <h1 class="jumbotron-heading">Lista de Alunos</h1><p></p>
        
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
            <thead >
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $row): ?>                        
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->rg; ?></td>
                        <td><?php echo $row->idade; ?></td>
                        <td><?php echo $row->endereco; ?></td>
                        <td><?php echo $row->turma; ?></td>
                        <td><?php echo $row->sexo; ?></td>
                        
                        <td>
                            <a class="glyphicon glyphicon-trash" href="<?php echo base_url().'alunos/excluir/'.$row->id;?>" ></a>
                            <a class="glyphicon glyphicon-pencil" href="<?php echo base_url().'alunos/editar/'.$row->id;?>" ></a>
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
