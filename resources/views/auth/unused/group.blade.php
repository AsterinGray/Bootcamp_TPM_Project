<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List</title>
</head>
<body>



<h3>Leader</h3>
<table>

<thead>

<tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Line</th>
        <th>Git</th>
        <th>KTP</th>
        <th>CV</th>
        <th>Score</th>
</tr>

</thead>

<tbody>
@foreach($groups as $group)
<tr>
        <td>{{$group->name}}</td>
        <td>{{$group->address}}</td>
        <td>{{$group->email}}/</td>
        <td>{{$group->dob}}/</td>
        <td>{{$group->phone}}/</td>
        <td>{{$group->line}}/</td>
        <td>{{$group->git}}/</td>


        <td>
        @if($group->ktp)
        <img src="{{asset('storage/'.$group->ktp)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->cv)
        <img src="{{asset('storage/'.$group->cv)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->score)
        <img src="{{asset('storage/'.$group->score)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        [TODO: actions]
        </td>

</tr>
@endforeach
</tbody>

</table>


<h3>Member 1</h3>
<table>

<thead>

<tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Line</th>
        <th>Git</th>
        <th>KTP</th>
        <th>CV</th>
        <th>Score</th>
</tr>

</thead>

<tbody>
@foreach($groups as $group)
<tr>
        <td>{{$group->name1}}</td>
        <td>{{$group->address1}}</td>
        <td>{{$group->email1}}/</td>
        <td>{{$group->dob1}}/</td>
        <td>{{$group->phone1}}/</td>
        <td>{{$group->line1}}/</td>
        <td>{{$group->git1}}/</td>


        <td>
        @if($group->ktp1)
        <img src="{{asset('storage/'.$group->ktp1)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->cv1)
        <img src="{{asset('storage/'.$group->cv1)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->score1)
        <img src="{{asset('storage/'.$group->score1)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        [TODO: actions]
        </td>

</tr>
@endforeach
</tbody>

</table>
<br>
<br>

<h3>Member 2</h3>
<table>

<thead>

<tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Line</th>
        <th>Git</th>
        <th>KTP</th>
        <th>CV</th>
        <th>Score</th>
</tr>

</thead>

<tbody>
@foreach($groups as $group)
<tr>
        <td>{{$group->name2}}</td>
        <td>{{$group->address2}}</td>
        <td>{{$group->email2}}/</td>
        <td>{{$group->dob2}}/</td>
        <td>{{$group->phone2}}/</td>
        <td>{{$group->line2}}/</td>
        <td>{{$group->git2}}/</td>


        <td>
        @if($group->ktp2)
        <img src="{{asset('storage/'.$group->ktp2)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->cv2)
        <img src="{{asset('storage/'.$group->cv2)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($group->score2)
        <img src="{{asset('storage/'.$group->score2)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        [TODO: actions]
        </td>

</tr>
@endforeach
</tbody>

</table>
<br>
<br>


</body>
</html> 