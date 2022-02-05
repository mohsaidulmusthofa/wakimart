{{-- menghubungkan dengan template header --}}
@include('template.header')

{{-- content --}}
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Master</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit Data User
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <form action="{{ route('update.user', $data->id) }}" method="post">
                            @csrf
                            <div class="mb-4 row">
                                <div class="col-sm-6">
                                    <label for="user_name" class="form-control-label">Nama User</label>
                                    <input class="form-control" type="text" name="user_name" id="user_name" value="{{ $data->name }}">
                                    @if ($errors->has('user_name'))<small style="padding-left: 0; margin-left: 0;" class="text-danger" role="alert">{{ $errors->first('user_name') }}</small>@endif
                                </div>
                                <div class="col-sm-6">
                                    <label for="user_email" class="form-control-label">Email User</label>
                                    <input class="form-control" type="text" name="user_email" id="user_email" value="{{ $data->email }}">
                                    @if ($errors->has('user_email'))<small style="padding-left: 0; margin-left: 0;" class="text-danger" role="alert">{{ $errors->first('user_email') }}</small>@endif
                                </div>
                            </div>
                            <button class="btn btn-icon btn-success" type="submit">
                                <span class="btn-inner--text">Edit User</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- menghubungkan dengan template footer --}}
@include('template.footer')
