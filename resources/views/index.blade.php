<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>
<body>


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
@foreach($members as $member)
<tr>
        <td>{{$member->name}}</td>
        <td>{{$member->address}}</td>
        <td>{{$member->email}}/</td>
        <td>{{$member->dob}}/</td>
        <td>{{$member->phone}}/</td>
        <td>{{$member->line}}/</td>
        <td>{{$member->git}}/</td>


        <td>
        @if($member->ktp)
        <img src="{{asset('storage/'.$member->ktp)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($member->cv)
        <img src="{{asset('storage/'.$member->cv)}}" width="20%"/>
        @else
        N/A
        @endif
        </td>
        <td>
        @if($member->score)
        <img src="{{asset('storage/'.$member->score)}}" width="20%"/>
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
        
</body>
</html>