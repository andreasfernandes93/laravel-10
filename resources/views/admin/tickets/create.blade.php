<h1>Adicionar Ticket</h1>
<form action="{{ route('tickets.store') }}" method="post">
 {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
 @csrf
<input type="text" placeholder="Assunto" name="subject">
<textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
<button type="submit">Enviar</button>
</form>