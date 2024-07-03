<div>
    @extends('layouts.modal')

    @section('id_modal')
        id="create_modal"
    @endsection

    @section('modal-title')
        <h4 class="modal-title">Ajout d'un Etudiant</h4>
    @endsection
    @section('modal-content')
        <form class="form-horizontal" action="{{ route('utilisateur_admin') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom </label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom d'etudiant" required>
                </div>
                <div class="form-group">
                    <label for="name">Post-Nom </label>
                    <input type="text" name="post_nom" class="form-control" placeholder="pst-nom d'etudiant" required>
                </div>
                <div class="form-group">
                    <label for="name">prenom </label>
                    <input type="text" name="prenom" class="form-control" placeholder="prenom d'etudiant" required>
                </div>
                
                <div class="form-group">
                    <label for="name">adresse </label>
                    <input type="text" name="adresse" class="form-control" placeholder="promotion d'etudiant" required>
                </div>

                <div class="form-group">
                    <label for="name">Téléphone </label>
                    <input type="number" name="telephone" class="form-control" placeholder="téléphone d'etudiant" required>
                </div>
                <div class="form-group">
                    <label for="name">email </label>
                    <input type="email" name="email" class="form-control" placeholder="email d'etudiant" required>
                </div>
                <div class="form-group">
                    <label for="name">mot de passe </label>
                    <input type="password" name="password" class="form-control" placeholder="mot de passe par defaut" required>
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
