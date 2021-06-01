<h1>ciao</h1>


<ul>
    @foreach ($employees as $employee)
    <li>       
        
        <h3>
            <span style="color: blue;">NOME E COGNOME (from table Employees): </span>
            
            {{ $employee -> firstname}} {{ $employee -> lastname}}
        </h3>

        <h4>            
            <span style="color: purple;">STATO E VIA (from table Locations): </span>

            {{ $employee -> location -> state}} || {{ $employee-> location -> street}}
            {{-- in questo caso con la doppia freccia posso arrivare direttamente a state e street
                dentro la table Locations dato che le 2 tables sono collegate direttamente--}}
        </h4>          

        <ul>
            @foreach ($employee->tasks as $task )
            <li>
                <h3> <span style="color: red;">TIPO DI TASK (from table Tasks): </span>
                    
                    {{ $task -> name}}
                    {{-- qui invece partendo dal singolo employee (dato che ci sto già ciclando sopra)
                    posso andare a ciclare su Tasks e tirarmi fuori la singola task --}}
                </h3>
            </li>
            @endforeach
        </ul>
    </li>
        
    @endforeach
</ul>