<div>
    @extends('layouts.modal')

    @section('id_modal')
        id="create_modal"
    @endsection

    @section('modal-title')
        <h4 class="modal-title">Ajout d'un Courst</h4>
    @endsection
    @section('modal-content')
        <form class="form-horizontal" action="{{ route('formation_admin') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" name="titre" class="form-control" placeholder="Nom du formation" required>
                </div>
                <div class="col-sm-12">

                <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name='description' rows="6"  col="5" placeholder="Entrer ..."></textarea>
                </div>
                </div>
                <div class="form-group">
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choisir une image</label>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary"><i class="fa fa-check"></i></button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </form>
        
    @endsection
</div>
