@csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input class="form-control" type="text" value="{{ $user->name ?? old('name')}}">
</div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input class="form-control" type="email" value="{{ $user->email ?? old('email')}}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
        <input class="form-control" type="password" id="example-password-input">
    </div>
</div>

<div class="form-group mb-0">
    <div>
        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
            Submit
        </button>
        <button type="reset" class="btn btn-secondary waves-effect">
            Cancel
        </button>
    </div>
</div>


