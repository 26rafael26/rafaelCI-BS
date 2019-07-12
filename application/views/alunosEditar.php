<div class= "row">
    <div class= "col-lg-3 col-md-3 col-3"></div>
    <div class= "col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Alunos</h1><p></p>
        <?php echo form_open('alunos/atualizar'); ?>
        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> id;?>" name="id" class="hide" class="form-control form-control-lg" placeholder="ID" />
        </div>
        
        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> nome;?>" name="nome"  class="form-control form-control-lg" placeholder="Nome" />
        </div>

        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> rg;?>"  name="rg" class="form-control form-control-lg" placeholder="RG" />
        </div> 

        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> idade;?>"  name="idade" class="form-control form-control-lg" placeholder="Idade" />
        </div> 

        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> endereco;?>"  name="endereco" class="form-control form-control-lg" placeholder="Endereço" />
        </div> 

        <div class="form-group">
            <input type="text" value=" <?php echo $alunosEditar[0]-> turma;?>"  name="turma'" class="form-control form-control-lg" placeholder="Turma" />


        </div> 

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="Masculino">
            
            <?php if($alunosEditar[0]->sexo === "Masculino")
            echo set_radio('sexo', '1', 'true'); ?>
            
            <label class="form-check-label" for="exampleRadios2">Masculino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios3" value="Feminino" >
            
            <?php if($alunosEditar[0]->sexo === "Feminino")
            echo set_radio('sexo', '1', 'true'); ?>
            
            <label class="form-check-label" for="exampleRadios3">Feminino</label>
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
