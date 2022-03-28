@csrf
<div class="form-group row">
<label class="col-sm-2 col-form-label">Nome</label>
<div class="col-sm-10">
<input class="form-control" name="name" type="text" value="{{ $user->name ?? old('name')}}">
</div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input class="form-control" name="email" type="email" value="{{ $user->email ?? old('email')}}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
        <input class="form-control" name="password" type="password" placeholder="****">
    </div>
</div>

<div class="form-group mb-0">
    <div>
        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
            Enviar
        </button>
        <button type="reset" class="btn btn-secondary waves-effect">
            Cancelar
        </button>
    </div>
</div>


