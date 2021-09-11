<style>
form.exibir{
    margin-bottom:50px;
    background:#dddddd;
}
</style>

<form class='exibir' method="POST" action="/eventos"> 
<span>Cadastro de Pessoas</span><br>
    @csrf 
    <input Placeholder= "Nome" type="text" name="nome"><br>
    <input Placeholder= "Sobrenome" type="text" name="sobrenome"><br>
    <button type="submit">Cadastrar</button>
</form>



@foreach ($eventos as $eventos)
    <form method="POST" action="/eventos/{{$eventos->id}}"> 
        @csrf
        @method('DELETE')
        <span>{{$eventos ->id}}--{{$eventos ->nome}}--{{$eventos ->sobrenome}}-->>></span>
        <button type="submit">Deletar</button>
        <a href="/edit/{{$eventos->id}}">Atualizar</a>
    </form>
@endforeach