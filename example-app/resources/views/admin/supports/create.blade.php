<h1>Nova dúvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" placeholder="Descrição" cols="30" rows="10"></textarea>
    <button type="submit">Enviar</button>
</form>