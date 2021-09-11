<form method="POST" action="/edit/update/{{$eventos->id}}"> 
    @csrf 
    @method('PUT')
    <input name='id' value='{{ $eventos ->id}}'>
    <input name='nome' value='{{ $eventos ->nome}}'>
    <input name='sobrenome' value='{{ $eventos ->sobrenome}}'>
    <button type="submit">Salvar</button>
</form>