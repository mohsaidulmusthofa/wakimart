{{-- menghubungkan dengan template header --}}
@include('template.header')

{{-- content --}}
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Master</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @elseif ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data User
            </div>
            <div class="card-body">
                {{-- btn tambah --}}
                <a href="{{ route('vadduser') }}" class="mb-3 btn btn-sm btn-success">
                    <span>Tambah User</span>
                </a>
                <table class="dataTable-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Aksi</th>                                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user => $data)
                            <tr>
                                <td>{{ $users->firstItem() + $user }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
                                <td>
                                    {{-- btn edit --}}
                                    <a href="{{ route('vedituser', $data->id) }}" class="btn btn-sm btn-warning">
                                        <span>Edit</span>
                                    </a>
                                    {{-- btn delete --}}
                                    <a href="{{ route('delete.user', $data->id) }}" class="btn btn-sm btn-danger"
                                        type="button" onclick="confirm_modal('')" data-toggle="modal" data-target="#deleteModal{{ $data->id }}">
                                        <span>Delete</span>
                                    </a>                                     
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- Pagination --}}
                <div style="float: right">
                    {{ $users->links() }}
                </div>
                <div style="float: left">
                    showing
                    {{ $users->firstItem() }}
                    to
                    {{ $users->lastItem() }}
                    of
                    {{ $users->total() }}
                    entries
                </div>

                <!-- Delete Modal -->
                @foreach ($users as $user)
                    <div class="modal" id="deleteModal{{ $user->id }}"
                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah
                                        anda yakin ingin menghapus data?</h5>
                                    <button type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Pilih tombol cancel untuk kembali, dan pilih tombol
                                        delete untuk menghapus.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger"
                                        data-dismiss="modal"
                                        style="margin-bottom: 0;">Cancel</button>
                                    <a href="{{ route('delete.user', $user->id) }}"
                                        type="button" class="btn btn-sm btn-success">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
{{-- menghubungkan dengan template footer --}}
@include('template.footer')
