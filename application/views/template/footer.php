      </div>
       <dialog id="sucesso" class="">
    <h3 class="modal-title">Sucesso</h3>
    <div class="modal-body">
        <p>
            Cadastro efetuado!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<dialog id="sucessoUpdate" class="">
    <h3 class="modal-title">Sucesso</h3>
    <div class="modal-body">
        <p>
            Registro atualizado!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<dialog id="err" class="">
    <h3 class="modal-title">Err</h3>
    <div class="modal-body">
        <p>
            Erro ao processar solicitação!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<dialog id="excluirSucesso" class="">
    <h3 class="modal-title">Excluir</h3>
    <div class="modal-body">
        <p>
            Registro excluido!
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn close">OK</button>
    </div>
</dialog>

<?php
if ($this->session->flashdata('true')) {
    ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#sucesso');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('err')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#err');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('excluirSucesso')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#excluirSucesso');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } else if ($this->session->flashdata('trueUpdate')) { ?>
    <script type="text/javascript">
        (function () {
            'use strict';
            var dialog = document.querySelector('#sucessoUpdate');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            dialog.showModal();
            dialog.querySelector('button:not([disabled])')
                    .addEventListener('click', function () {
                        dialog.close();
                    });
        }());
    </script>
<?php } ?>
      <!-- Off Line / Local -->
      <script type="text/javascript"
          src="<?php echo base_url('DataTables/datatables.min.js') ?>"></script>
      
   </body>
</html>
