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
                    <label for="user_id">Email</label>
                    <select name= "user_id"class="form-control form-control" id="select-multiple" name="jalons[]" multiple>
                        @foreach ($Users as $user)
                            <option   name="user_id" value="{{ $user->id }}"> {{ $user->email }} </option>
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
