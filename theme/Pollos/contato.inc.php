<div id="contato" data-stellar-background-ratio="0.5">
	<div class="container">
		<h1>Entre em Contato</h1>
		<div class="col-md-7 form-container">
			<form method="post" data-toggle="validator"  id="form-contato">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
	                    	<input id="nome" class="form-control" type="text" data-error="Digite seu nome" required name="nome" value="" placeholder="Digite seu nome" />
	                    </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
	                    	<input type="email" class="form-control" data-error="Digite um email válido" required name="email" value="" placeholder="Digite seu email" />
	                    </div>
	                </div>
	            </div>
                <div class="form-group">
                	<textarea  name="msg" placeholder="Deixe aqui sua mensagem" class="form-control"></textarea>
                </div>
	            <button type="submit"  id="btn-contato" class="btn">Enviar</button>
                <input type="hidden" name="origem" value="Contato" />
		    </form>
		</div>
		<div class="col-md-5 contact-container">
			<?php get_component('entre-em-contato'); ?>
		</div>

	    <!-- .modal -->
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

	</div>
</div>