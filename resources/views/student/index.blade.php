<h1>Student List</h1>

@if(session('success'))
<h1>{{ session('success') }}</h1>
@endif


<table>
   <th>
   <td>Name</td>
   <td>Email</td>
   <td>Phone</td>
   <td>Address</td>
   <td>Age</td>
   </th>


   @forelse($students as $student)
   <tr>
<td>{{ $student->name }}</td>
       <td>{{ $student->email }}</td>
       <td>{{ $student->phone }}</td>
       <td>{{ $student->address }}</td>
       <td>{{ $student->age }}</td>
   </tr>
   @empty
   <div>No Student Found</div>
   @endforelse
</table>
