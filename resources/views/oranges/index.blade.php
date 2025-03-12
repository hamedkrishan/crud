<h1>Show All Students</h1>

<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>Email</th>  
            <th>Action</th>  
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