<link rel="stylesheet" href="/css/style.css">
<h1>Esta é a pagina de contatos</h1>
<p>E-mail: {{$email}} </p>
<p>Celular: {{$celular}} </p>

@for($i = 0; $i < count($arr); $i++)

@if($i > 2)
<p>{{ $arr[$i] }}</p>
@endif

@endfor

@foreach($nomes as $nome)
<p>{{$nome}} - {{$loop->index}}</p>
@endforeach

<script src="/js/scripts.js"></script>