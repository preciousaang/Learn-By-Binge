@if(session()->has('error'))
<div class="message error" data-component="message">
    {{session()->get('error')}} <span class="close small"></span>
</div>
@endif
