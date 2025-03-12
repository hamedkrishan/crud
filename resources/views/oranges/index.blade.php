<h1>Show All Students</h1>
<button><a href="{{ route('oranges.create') }}">Add New</a></button>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>email</th>  
            <th>Age</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($oranges as $orange)
            <tr> 
                <td>{{ $orange->id }}</td>
                <td>{{ $orange->name }}</td>
                <td>{{ $orange->email }}</td>
            </tr> 
        @endforeach 
    </tbody>
</table>