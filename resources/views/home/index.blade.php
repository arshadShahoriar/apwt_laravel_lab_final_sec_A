<h1> this is home page </h1>

<h2>Hello,Admin</h2>




<table>
	<thead>	
					<th>id</th>
                    <th>Employee Name</th>
                    <th>phone No</th>
                    <th>Address</th>
                    <th></th>
                    <th></th> 
  </thead>
  @foreach($users as $user)
                        <tbody>
                        	<td>{{$user['id']}}</td>
                            <td>{{$user['username']}}</td>
                            <td>{{$user['phoneno']}}</td>
                            <td>{{$user['address']}}</td>
      						<td>
      							<a href={{"deleteemp/".$user['id']}}> Delete </a>
      							<a href={{"editemp/".$user['id']}}> Edit </a>
      						</td>
                        </tbody>
                    @endforeach
</table>