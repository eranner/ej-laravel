@include("partials.header")
@include("partials.navbar")
@include("partials.hero")
    <div class="redSection">
        <div class="section2">
            <div class="container flexDiv">
                <h1 class="weDo">Contact Us</h1><br><br>
                <h2 class="middleHeader" style="text-align: center;">Fill Out Our Form To Get Started</h2>
                <div class="sectionC" style="font-size:2rem; gap:10%; padding: 5px;">
                    <img src="photos/smartphone.png" class="img-fluid medPic" alt="">
                    <form action="{{route('success')}}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label for="first_and_last" class="form-label">First & Last Name</label>
                            <input type="text" class="form-control" id="first_and_last" name="first_and_last" placeholder="First & Last Name" style="font-size: 1.5rem;" required>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="form-label" >Contact Email Address</label>
                            <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="name@example.com" style="font-size: 1.5rem;" required>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone_number" class="form-label" >Contact Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="555-867-5309" style="font-size: 1.5rem;">
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="form-label" >Brief Details About Your Project</label>
                            <textarea class="form-control" id="inquiry" name="inquiry" rows="5" style="font-size: 1.5rem;" required></textarea>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3" style="background-color: #11143e!important;font-size: 1.5rem;border: 1px solid white!important;">Submit</button>
                        </div>
                    </form>           
                </div>
            </div>
        </div>

    </div>
    @include("partials.footer")
