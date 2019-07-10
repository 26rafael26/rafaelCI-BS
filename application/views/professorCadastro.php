<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Professores</h1><p></p>
        <?php echo form_open('professor/inserir'); ?>
        <div class="form-group">
            <input type="text" name="id"  class="form-control form-control-lg" placeholder="Id" />
        </div>

        <div class="form-group">
            <input type="text" name="nome" class="form-control form-control-lg" placeholder="Nome" />
        </div> 

        <div class="form-group">
            <input type="text" name="rg" class="form-control form-control-lg" placeholder="RG" />
        </div> 

        <div class="form-group">
            <input type="text" name="endereco" class="form-control form-control-lg" placeholder="Endereço" />
        </div> 

        <div class="form-group">
            <input type="text" name="turma'" class="form-control form-control-lg" placeholder="Turma" />


        </div> 


        <div class="form-group">
            <input name = "salvar" type = "submit" id = "salvar" value = "salvar" 
                   class="btn btn-success">

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?>home"
               id="cancelar">Cancelar</a>
        </div>
    </div>
    <div class= "col-lg-6 col-md-6 col-6"></div>
</div>
<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Lista de Professores</h1><p></p>
        <?php form_close(); ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Turma</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professor as $row): ?>                        
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->rg; ?></td>
                        <td><?php echo $row->endereco; ?></td>
                        <td><?php echo $row->turma; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class= "col-lg-3 col-md-3 col-3"></div>
    </div>
</div>
