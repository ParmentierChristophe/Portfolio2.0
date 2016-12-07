@if(Session::has('success'))
    <div class="w3-panel w3-teal">
        <h3>Success:</h3>
        <p> {{ Session::get('success') }}</p>
    </div>



    @endif