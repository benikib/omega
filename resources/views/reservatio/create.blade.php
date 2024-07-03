<div>
    @extends('layouts.modal')

    @section('id_modal')
        id="create_modal"
    @endsection

    @section('modal-title')
        <h4 class="modal-title">Ajout d'un admin</h4>
    @endsection
    @section('modal-content')
        <form class="form-horizontal" action="{{ route('create_admin') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom </label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom du admin" required>
                </div>
                <div class="form-group">
                    <label for="name">Post-Nom </label>
                    <input type="text" name="post_nom" class="form-control" placeholder="pst-nom du admin" required>
                </div>
                <div class="form-group">
                    <label for="name">prenom </label>
                    <input type="text" name="prenom" class="form-control" placeholder="prenom du admin" required>
                </div>

                <div class="form-group">
                    <label for="name">Téléphone </label>
                    <input type="number" name="telephone" class="form-control" placeholder="prenom du admin" required>
                </div>
                <div class="form-group">
                    <label for="name">adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="adresse du admin" required>
                </div>
                <div class="form-group">
                    <label for="name">email </label>
                    <input type="email" name="email" class="form-control" placeholder="prenom du admin" required>
                </div>
                <div class="form-group">
                    <label for="name">Cours </label>
                    <select class="form-control form-control" id="select-multiple" name="jalons[]" multiple>
                        @foreach ($formations as $formation)
                            <option value="{{ $formation->id }}"> {{ $formation->intitule }} </option>
                        @endforeach
                    </select>
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
