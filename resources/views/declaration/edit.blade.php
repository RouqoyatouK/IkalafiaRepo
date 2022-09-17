
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
//////////////////////////////////////////////////////////////////////////////////////////
<div class="modal fade" id="examplesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('declaration.update',$declaration->id) }}" method="POST"enctype="multipart/form-data">
    @csrf
    @method('PATCH')  
<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Success!</strong> Votre message à été envoyer.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
  <!-- Name input -->
  <div class="mb-3">
  <label for="nom">Nom </label>
  <input type="text" name="nom" value="{{$declaration->nom}}"><br>
    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
  </div>

  <!-- Email address input -->
  <div class="mb-3">
  <label for="prenom">prenom </label>
  <input type="text" name="prenom" value="{{$declaration->prenom}}"><br>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>

  <!-- Message input -->
  <div class="mb-3">
  <label for="contact">contact </label>
  <input type="text" name="contact" value="{{$declaration->contact}}"><br>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>
  <div class="mb-3">
  <label for="photo_identite"> photo_identite </label>
  <input type="file" name="photo_identite" id="image" accept=".jpg, .jpeg, .png"  value="{{$declaration->photo_identite}}"><br>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>
  <div class="mb-3">
  <label for="piece_identite">piece_identite </label>
  <input type="file" name=piece_identite id="image" accept=".jpg, .jpeg, .png"  value="{{$declaration->piece_identite}}"><br>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>
  <!-- Form submissions success message -->
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">Form submission successful!</div>
  </div>

  <!-- Form submissions error message -->
  <div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
  </div>

  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
  </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
