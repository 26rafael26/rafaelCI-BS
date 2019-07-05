<div class = "container">
    <div class= "row">
        <div class= "col-lg-3 col-md-3 col-3"></div>
        <div class= "col-lg-6 col-md-6 col-6">
            <h1 class="jumbotron-heading">Cadastro de Alunos</h1><p></p>
            <?php echo form_open('alunos/inserir'); ?>
            <div class="form-group">
                <input type="text" name="nome"  class="form-control form-control-lg" placeholder="Nome" />
            </div>

            <div class="form-group">
                <input type="text" name="rg" class="form-control form-control-lg" placeholder="RG" />
            </div> 

            <div class="form-group">
                <input type="text" name="idade" class="form-control form-control-lg" placeholder="Idade" />
            </div> 

            <div class="form-group">
                <input type="text" name="endereco" class="form-control form-control-lg" placeholder="Endereço" />
            </div> 

            <div class="form-group">
                <input type="text" name="turma'" class="form-control form-control-lg" placeholder="Turma" />


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
           

            <input name = "salvar" type = "submit" id = "salvar" value = "salvar" 
                   class="btn btn-success">

            <input type="reset" class="btn btn-danger"/>

            <a class="btn btn-primary" href="<?php base_url(); ?>home"
               id="cancelar">Cancelar</a>




            <?php form_close(); ?>
        </div>
        <div class= "col-lg-6 col-md-6 col-6"></div>
    </div>

