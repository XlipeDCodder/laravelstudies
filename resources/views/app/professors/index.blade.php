<h1>Professors list</h1>


<br>
<br>


@isset($profs) 
    @for($i = 0; isset($profs[$i]); $i++)
        Professor: {{$profs[$i]['nome']}}
        <br>
        Status: {{$profs[$i]['status']}}
        <br>
        Cnpj: {{$profs[$i]['cnpj']}}
        <br>
        Telefone: ({{$profs[$i]['ddd'] ?? ''}}) {{$profs[$i]['telefone'] ?? 'Não informado'}}
        <br>
        <br>
        <hr>   
    @endfor    
@endisset
    






@if (count($profs) > 0)
    <h1>There is some professors</h1>
@else
    <h1>Array is empty</h1>    
@endif