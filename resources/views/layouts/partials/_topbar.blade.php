<div class="w3-container w3-top w3-camo-black w3-large w3-padding" style="z-index:4">
    <button class="w3-btn w3-camo-black w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        @if(\Auth::check())
                  <a href="{{ URL::route('logout') }}" class="w3-btn w3-right w3-margin-left w3-red w3-small"> Logout </a>

        @endif
    <span class="w3-right"><a href="{{ url('/') }}">Christophe-parmentier.fr</a></span>
</div>