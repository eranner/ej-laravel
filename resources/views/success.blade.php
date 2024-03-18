
@include("partials.header")
@include("partials.navbar")
{{-- @include("partials.hero") --}}

    <div class="redSection">
        <div class="section2">
            <div class="container flexDiv">
                <h1 class="weDo">Success!</h1><br><br>
                <h4 class="middleHeader" style="text-align: center;">A member from our team will be in touch with you soon! You will be redirected back to our main page. <a href="{{route('home')}}" style="color:#11143e;">Click here if you aren't automatically redirected</a></h4>
            </div>
        </div>
    </div>

    <script>
        setTimeout(()=>{
            location.assign("{{route('home')}}")
        }, 3000)
    </script>

@include("partials.footer")
