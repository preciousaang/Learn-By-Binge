@forelse ($errors->all() as $error)
<div class="message error" data-component="message">{{$error}} <span class="close small"></span></div>
@empty

@endforelse
