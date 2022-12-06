@extends('app')
      
@section('content')
    <div class="col-md-8">
        <br>
        <h4>Members Table</h4>
        <table class="table table-bordered table-striped">
            <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{$member->firstname}}</td>
                        <td>{{$member->lastname}}</td>
                        <td>{{$member->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection