

<div class="modal fade modal-slide-in-right" aria-hiden="true" role="dialog" tabindex="-1" id="modal-delete-{{$com->IdComments}}">

	{{form::Open(array('action'=>array('ComentariosController@destroy',$com->IdComments),'method' =>'delete'))}}


	<div class="modal-dialog">

		<div class="modal-content">


			<div class="modal-header">
				
				<button type="button class="close" data-dismiss="modal" arial-label="close">
				
					<span aria-hidden="true">x</span>

				 </button>

				 <h4 class="modal-title">Eliminar Comentarios</h4>	

			</div>


			<div class="modal-body">
				
				<p>confirme si desea eliminar el Comentario</p>
			</div>


			<div class="modal-footer">
				


				<button type="button" class="btn btn-default" data-dissmis="modal">Cerrar</button>

				<button type="submit" class="btn btn-primary">Confimar</button>
			</div>
			
		</div>
		

	</div>
	

	{{FORM::Close()}}
	
	
	

</div>