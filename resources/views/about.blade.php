@include("partials.header")
@include("partials.navbar")
@include("partials.hero")

    <div class="redSection">
        <div class="section2">
            <div class="container flexDiv">
                <h1 class="weDo">About Us</h1>
                <div class="sectionA">
                    <div style="display:flex; flex-direction:column;max-width: 1400px;">
                    <h2 class="middleHeader">Company History</h2>
                    <div style="background-color: white; text-align: left; border-radius: 10px; font-size: 1.2rem!important; padding: 40px;">
                        <p style="font-size: 1.75rem!important">EJ Web Design, founded and led by Eric Ranner, is a reputable web development and design company that seamlessly blends creativity with technical expertise. Eric's journey from his roots in Honesdale, Pennsylvania, to the helm of EJ Web Design showcases his commitment to excellence and innovation.</p>

                        <p style="font-size: 1.75rem!important">Eric's career began to take shape after graduating from Honesdale High School, where he discovered his passion for hospitality and tourism. This passion led him to East Stroudsburg University, where he majored in Hotel, Restaurant, and Tourism Management. It was during these formative years that he cultivated a strong work ethic and a keen eye for customer satisfaction.</p>

                        <p style="font-size: 1.75rem!important">While at university, Eric also worked full-time at Woodloch Pines, a renowned poconos resort. Little did he know that this experience would set the stage for his future endeavors. His role as Corporate Social Director at Woodloch involved creating engaging games and experiences for guests. This role ignited Eric's interest in web development.</p>

                        <p style="font-size: 1.75rem!important">Starting with basic tools like Microsoft PowerPoint, Eric's insatiable curiosity and dedication to delivering exceptional guest experiences drove him to teach himself web development languages, including HTML, CSS, Javascript, and PHP. These skills would become the foundation for EJ Web Design's success.</p>

                        <p style="font-size: 1.75rem!important">With several years of self-guided learning and practical experience under his belt, Eric earned a prestigious <a href="https://certificates.emeritus.org/126bd71d-0fcc-45cd-8a86-c9fae1ff537e#gs.5qzopx">certificate in Full Stack Web Development from MIT</a>. This accomplishment marked a significant milestone in his career and laid the groundwork for EJ Web Design.</p>

                        <p style="font-size: 1.75rem!important">EJ Web Design, under Eric's leadership, has become synonymous with solid web development principles, design, and innovation. The company's portfolio showcases a diverse range of projects, each a testament to Eric's dedication to exceeding client expectations. From responsive website designs to advanced web applications, EJ Web Design consistently delivers results that align with its clients' goals.</p>

                        <p style="font-size: 1.75rem!important">Whether you're a business seeking a digital presence or an individual with a unique vision, EJ Web Design is your trusted partner in bringing your ideas to life online. Discover the EJ Web Design difference and embark on a journey of digital excellence with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="blueSection" style="padding-bottom: 30px;">
        <div class="section3">
            <div class="smallerDiv">
                <h1 class="weDo" style="text-shadow: 2px 2px rgb(196, 41, 41);">Satisfied Customers</h1>
                <p class="tightText" style="font-size: 2rem;">Here are just a few of the satisfied customers whom we have worked with in the past.</p>
            </div>
        </div>
        <div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card h-100">
                <img src="/photos/grand.png" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a style="text-decoration:none;color: black;" href="https://grandjean.net/"><h5 class="card-title" style="font-size:2rem;">Grandjean & Braverman, Inc.</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">A Prompton, PA based software development company that focuses on Microsoft Access Applications and database design.</div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card h-100">
                <img src="/photos/moshed.gif" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://eranner.website/thaddeus/" style="text-decoration:none;color: black;"><h5 class="card-title" style="font-size:2rem;">FearMonger &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">An innovative horror experience meant to turn ordinary scary stories to extraordinary online experiences.</div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="margin-bottom:40px;">
            <div class="card h-100">
                <img src="/photos/blueWhite.jpg" style="max-height: 300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="https://saintdominicsacademy.org/" style="text-decoration:none;color: black;"><h5 class="card-title" style="font-size:2rem;">Saint Dominic's Academy</h5></a>
                    <div class="card-text" style="font-size:1.5rem;">A Honesdale, Pennsylvania Catholic Montessori school that houses students from Pre-School through grade 8.</div>
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
            <h1 class="getStarted">Ready to get Started?</h1> 
        </div>
        <div style="display:flex; flex-direction:column; text-align:center;">
            <p>Click <a href="{{route('contact')}}">here</a> to Contact Us and fill us in on your next project.</p>
        </div>
    </div>
</div>


@include("partials.footer")
