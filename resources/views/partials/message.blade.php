@if(session()->has('message'))
<p class="message focus">
    {{session()->get('message')}}
</p>
@endif
