<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Group</title>
</head>
<body>
    <form action="{{route('groups.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(session('status'))
      <div class="alert alert-success">
      {{session('status')}}
      </div>
      @endif

        <h3>Leader</h3>
        
        <label>Name</label>
        <input type="text" name="name"/>
        <br>
        <label>Address</label>
        <input type="text" name="address"/>
        <br>
        <label>Email</label>
        <input type="text" name="email"/>
        <br>
        <label>Tangal Lahir</label>
        <input type="text" name="dob"/>
        <br>
        <label>Phone</label>
        <input type="text" name="phone"/>
        <br>
        <label>Line</label>
        <input type="text" name="line"/>
        <br>
        <label>Git</label>
        <input type="text" name="git"/>
        <br>
        <label>KTP</label>
        <input type="file" name="ktp"/>
        <br>
        <label>CV</label>
        <input type="file" name="cv"/>
        <br>
        <label>Score</label>
        <input type="file" name="score"/>
        <br>

        <h3>Member 1</h3>
        <label>Name</label>
        <input type="text" name="name1"/>
        <br>
        <label>Address</label>
        <input type="text" name="address1"/>
        <br>
        <label>Email</label>
        <input type="text" name="email1"/>
        <br>
        <label>Tangal Lahir</label>
        <input type="text" name="dob1"/>
        <br>
        <label>Phone</label>
        <input type="text" name="phone1"/>
        <br>
        <label>Line</label>
        <input type="text" name="line1"/>
        <br>
        <label>Git</label>
        <input type="text" name="git1"/>
        <br>
        <label>KTP</label>
        <input type="file" name="ktp1"/>
        <br>
        <label>CV</label>
        <input type="file" name="cv1"/>
        <br>
        <label>Score</label>
        <input type="file" name="score1"/>
        <br>

        <h3>Member 2</h3>
        <label>Name</label>
        <input type="text" name="name2"/>
        <br>
        <label>Address</label>
        <input type="text" name="address2"/>
        <br>
        <label>Email</label>
        <input type="text" name="email2"/>
        <br>
        <label>Tangal Lahir</label>
        <input type="text" name="dob2"/>
        <br>
        <label>Phone</label>
        <input type="text" name="phone2"/>
        <br>
        <label>Line</label>
        <input type="text" name="line2"/>
        <br>
        <label>Git</label>
        <input type="text" name="git2"/>
        <br>
        <label>KTP</label>
        <input type="file" name="ktp2"/>
        <br>
        <label>CV</label>
        <input type="file" name="cv2"/>
        <br>
        <label>Score</label>
        <input type="file" name="score2"/>
        <br>

        <br>
        <button type="submit">Save</button>

    </form>
</body>
</html>