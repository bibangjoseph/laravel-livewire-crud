<div>
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-10">
                                <h1>Composant Etudiants</h1>
                            </div>
                            <div class="col-2 justify-content-end">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Nouvel Etudiant</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @if (session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session('message') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($studients->count() > 0)
                                        @foreach ($studients as $studient)
                                        <tr>
                                            <td> {{ $studient->matricule }} </td>
                                            <td> {{ $studient->name }} </td>
                                            <td> {{ $studient->email }} </td>
                                            <td> {{ $studient->phone }} </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvel Etudiant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" wire:submit.prevent='storeStudient'>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Matricule : </label>
                                    <input type="number" class="form-control" wire:model='matricule'>
                                    @error('matricule')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Name : </label>
                                    <input type="text" class="form-control" wire:model='name'>
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Email : </label>
                                    <input type="email" class="form-control" wire:model='email'>
                                    @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control" wire:model='phone'>
                                    @error('phone')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editExampleModal" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Etudiant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" wire:submit.prevent='editStudient'>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Matricule : </label>
                                    <input type="number" class="form-control" wire:model='matricule'>
                                    @error('matricule')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Name : </label>
                                    <input type="text" class="form-control" wire:model='name'>
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Email : </label>
                                    <input type="email" class="form-control" wire:model='email'>
                                    @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Phone : </label>
                                    <input type="text" class="form-control" wire:model='phone'>
                                    @error('phone')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('close-modal', event => {
        $('.modal').modal('hide')
    })
</script>
@endpush