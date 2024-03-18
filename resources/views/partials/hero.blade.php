<div class="container flexDiv">
    <img style="max-height: 300px; max-width: 300px; margin-top: 30px;" class="img-fluid" src="photos/logo.png" alt="">
    <h1 class="ejLogo" style="text-align:center;">EJ Web Design</h1>
        
    @if (Route::current()->uri() == 'contact' )
    <h4 class="tagline">Contact Us</h4>
    @elseif (Route::current()->uri() == 'about')
    <h4 class="tagline">About Us</h4>
    @else
    <h4 class="tagline">Full Stack Web Development</h4>
    @endif
</div>