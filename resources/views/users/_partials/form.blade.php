@csrf
<div class="form-group mb-3 ">
    <label class="form-label">Nome</label>
    <div>
        <input name="name" type="text" value="{{ $user->name ?? old('name')}}" class="form-control" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small class="form-hint">Digite seu nome completo.</small>
    </div>
</div>

<div class="form-group mb-3 ">
    <label class="form-label">Email</label>
    <div>
        <input name="email" type="email" value="{{ $user->email ?? old('email')}}" class="form-control" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small class="form-hint">Nunca compartilharemos seu e-mail com mais ninguém.</small>
    </div>
</div>

<div class="form-group mb-3 ">
    <label class="form-label">Senha</label>
    <div>
        <input name="password" type="password" placeholder="****" class="form-control" placeholder="Password">
        <small class="form-hint">
            Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.
        </small>
    </div>
</div>

<div class="form-footer">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>

