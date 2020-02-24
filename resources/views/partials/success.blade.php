@if(session()->has('success'))
<p class="message success">
    {{session()->get('success')}} <span class="close small"></span>
</p>
@endif
