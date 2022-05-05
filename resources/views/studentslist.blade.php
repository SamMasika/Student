<div class="card mb-3">
  <img src="https://cdn-0.studybreaks.com/wp-content/uploads/2018/12/web_0464-1024x682.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all informations about students in the system</p>
    
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
      
        <a href="{{('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>

