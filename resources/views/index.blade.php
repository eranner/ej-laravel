
@include("partials.header")
@include("partials.navbar")
@include("partials.hero")

    <div class="redSection">
        <div class="section2">
            <div class="container flexDiv">
                <h1 class="weDo">Why Choose Us?</h1>
                <div class="sectionA">
                    <div style="display:flex; flex-direction:column;max-width: 600px;">
                    <h2 class="middleHeader">Custom Web Design For Your Business</h2>
                    <p>Elegant designs, pleasing to the eye and simple to use</p>
                </div>
                <img src="photos/youtube.png" class="img-fluid medPic" alt="">
            </div>
        </div>

        <div class="section2">
            <div class="container flexDiv">
                <div class="sectionB">
                    <img src="photos/app-settings.png" class="img-fluid medPic" alt="">
                    <div style="display:flex; flex-direction:column;">
                        <h2 class="middleHeader">Mobile Friendly UX/UI</h2>
                        <p>A great experience at home or on the go</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="container flexDivLeft">
                <div class="sectionC">
                    <img src="photos/success.png" class="img-fluid medPic" alt="">
                    <div style="display:flex; flex-direction:column; max-width: 600px;">
                        <h2 class="middleHeader">Great Customer Service and Collaboration</h2>
                        <p>Work one on one with our professionals and get exactly what YOU want!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="blueSection" style="padding-bottom: 30px;">
        <div class="section3">
            <div class="smallerDiv">
                <h1 class="weDo" style="text-shadow: 2px 2px rgb(196, 41, 41);">Technologies</h1>
                <p class="tightText" style="font-size: 2rem;">We work with the best technologies that have been industry tested for a great web application! We focus on getting you up and running, and keeping your hosting costs low so you can focus on what you do best</p>
            </div>
        </div>
        <div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card">
                <img src="photos/php.svg" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a style="text-decoration:none;color: black;" href="https://www.php.net/"><h5 class="card-title" style="font-size:2rem;">PHP</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">Used in over 75% of the world's websites for good reason, and powers popular frameworks like Laravel and Wordpress.</div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card">
                <img src="photos/react.svg" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://react.dev/" style="text-decoration:none;color: black;"><h5 class="card-title" style="font-size:2rem;">React</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">Invented by the experts at Facebook and has grown into the most popular JavaScript framework for Single Page Applications.</div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card">
                <img src="photos/dolphin.svg" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://dev.mysql.com/" style="text-decoration:none;color: black;"><h5 class="card-title" style="font-size:2rem;">MySql</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">One of the most trusted relational databases ever made. You can be sure your data is safe and well organized.</div>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>

    </div>
    </div>
</div>
<div class="whiteSection">
    <div class="section4 smallerDiv">
        <div class="container flexDiv">
            <h1 class="satisfaction">Satisfaction Guaranteed</h1>
        </div>
        <div style="display:flex; flex-direction:column; text-align:center;">
        <div class="container flexDiv">
            <img src="photos/good-feedback.png" alt="" style="max-height: 300px; max-width: 300px; margin-top: 30px;" class="img-fluid">
        </div>
            <p>We work hard to make sure every client is satisfied with their product. Our customers are our livelihood and the reason we get to make working our passion a reality. If you aren't satisfied, we will work tirelessly until you are!</p>
        </div>
        <div class="container flexDiv">
            <h1 class="getStarted">Ready to get Started?</h1> 
        </div>
        <div style="display:flex; flex-direction:column; text-align:center;">
            <p>Click <a href="{{route('contact')}}">here</a> to Contact Us and fill us in on your next project. You can also learn more about our company  by checking out our <a href="{{route('about')}}">About Us</a> page.</p>
        </div>
    </div>
</div>


@include("partials.footer")
