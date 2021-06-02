<form action="{{route('recado.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" name="cidade" value="{{old('cidade')}}">
    </div>
    <div class="form-group">
        <label for="recado">Recado:</label>
        <textarea name="recado" id="recado" cols="30" rows="10" class="form-control" >{{old('recado')}}</textarea>
    </div>

    <button class="btn btn-lg btn-success">Postar</button>
</form>
