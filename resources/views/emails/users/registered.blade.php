@extends('layouts.mail-base')
@section('content')
<tr>
    <td>

                Thank you for registering on our website
                {{$user->full_name}}
                <hr>
    </td>
</tr>



@endsection
