<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="{{ URL::asset('img/roundpro2.png') }}" style="width:62px">
        </div>
        <div class="w3-col w3-padding-16 s8">
            <span>Welcome, <strong>Christophe</strong></span><br>

        </div>

    </div>
    <hr>
    <div class="w3-container">
        <h5>Menu</h5>
    </div>
    <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{ url('/projets') }}" class=" w3-padding {{ (\Request::route()->getName() == 'projets.index') ? 'w3-theme-l1' : '' }}"><i class="fa fa-pencil  fa-fw"></i> Edition</a>
    <a href="{{ url('projets/create?') }}" class="w3-padding {{ (\Request::route()->getName() == 'projets.create') ? 'w3-theme-l1' : '' }}"><i class="fa fa-plus fa-fw"></i>  Ajouter un projet</a>
    <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw"></i>  Options</a><br><br>

</nav>
