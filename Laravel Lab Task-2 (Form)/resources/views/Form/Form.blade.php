<html>
<body>
<!--Bootstrap-4-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<div style="margin-top:70px;"></div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<form action="{{route('Submitted')}}" method="post">
    {{csrf_field()}}

    <input type="text" name="Name" placeholder="Name"><br>
    @error('Name')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <input type="text" name="ID" placeholder="ID"><br>
    @error('ID')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <input type="text" name="CGPA" placeholder="CGPA"><br>
    @error('CGPA')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <span><b>Gender</span>
    <input type="radio" name="Gender" >Male
    <input type="radio" name="Gender" >Female<br>
    @error('Gender')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <span><b>Hobbies</span><br>
    <input type="checkbox" name="Hobbies" >Music<br>
    <input type="checkbox" name="Hobbies" >Games<br>
    <input type="checkbox" name="Hobbies" >Cricket<br>
    <input type="checkbox" name="Hobbies" >Travelling<br>
    @error('Hobbies')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <input type="date" name="DateOfBirth"><br>
    @error('DateOfBirth')
    <span class="text-danger"> {{$message}} </span>
    @enderror <br>

    <button>Submit</button>

</form>
</body>
</html>