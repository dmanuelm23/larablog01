@csrf
<div class="form-group">
    <label for="name">Nombre:</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
    <label for="last_name">Apellido:</label>
    <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}">
</div>
<div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
</div>
@if ($pasw)
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input class="form-control" type="password" name="password" id="emapasswordil" value="{{ old('password', $user->password) }}">
    </div>
@endif
<input type="submit" value="Guardar" name="" id="" class="btn btn-primary mt-3">