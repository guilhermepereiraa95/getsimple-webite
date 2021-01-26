<section id="interna">
	<div class="container">
		<?php get_component('entre-em-contato'); ?>
	</div>
</section>

<section id="form-envia" class="wow fadeInUp">
	<div class="container">
	<div class="row">
		<form method="post"  role="form" data-toggle="validator"  id="form-contato">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="height: 68px; padding: 0">
	                  	<div class="form-group">
	                    <input id="nome" class="form-control" type="text" data-error="Digite seu nome" required name="nome" value="" placeholder="Digite seu nome" />
	                    <div class="help-block with-errors"></div>
	                    </div>
                	</div>

                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pd" style="height: 68px; padding-right: 0">
	                  	<div class="form-group">
	                    <input type="email" class="form-control" data-error="Digite um email válido" required name="email" value="" placeholder="Digite seu email" />
	                    <div class="help-block with-errors"></div>
	                    </div>
                	</div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<textarea  id="msg" name="msg" placeholder="Deixe aqui sua mensagem" class="form-control" style="height: 178px;"></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
	                <input type="hidden" name="origem" value="Contato" />
                	<button type="submit"  id="btn-contato" class="btn">Enviar</button>
                </div>
	        </div>
		</form>

	</div>
</section>

<div class="modal fade" id="confirm-contato" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<button type="button" class="fecha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="modal-body">
	        	<p></p>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->