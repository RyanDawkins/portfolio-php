<div id="intro" class="full-page">

    <img id="avatar" src="/assets/img/avatar.jpg" class="img-circle img-responsive img-center">

    <h1 id="title-name" class="text-center">Ryan Dawkins</h1>
    <h3 class="text-center"><em>Software Engineer</em></h3>

    <div id="quick-links" class="center-div">
        <a href="#about" class="btn btn-info"><i class="fa fa-coffee"></i> Learn More</a>
        <a href="#contact" class="btn btn-success"><i class="fa fa-envelope-o"></i> Contact</a>
    </div>
</div>

<!-- About Page -->
<div id="about" class="full-page">
    <h1 class="text-center"><i class="fa fa-coffee"></i> About</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
                <h3 class="text-underline">Ryan Dawkins</h3>
                <p class="lead">
                    I'm Ryan Dawkins! I'm a Software Developer living in Stillwater, Oklahoma.
                    I build web applications at <a class="pretty-link" href="//lifechurch.tv">LifeChurch.tv</a>
                </p>
                <p class="">
                    I'm currently a student at <a class="pretty-link" href="//okstate.edu">Oklahoma State University</a>
                    studying computer science. As a student at OSU I am the active President at
                    the local ACM chapter at OSU, and I am also an organizer at the OSU GDG.
                </p>
                <p>
                    I love to work on projects in my free time, most of my projects are solutions
                    to problems that I occur in my daily life. These can range anywhere from a twitter shell
                    for the command line to a media server for my digital movies.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="full-page">
    <h1 class="text-center"><i class="fa fa-envelope"></i> Contact</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">

                <div id="contact-success" style="margin-top: 20px; display: none;" class="alert alert-success">
                    <p><strong>Success!</strong> I received your contact info!</p>
                </div>

                <div id="contact-error" style="margin-top: 20px; display: none;" class="alert alert-danger">
                    <p><strong>Oh oh..</strong> I didn't receive your information. Something went wrong with my server. You can email me <a href="mailto:contact@ryanddawkins.com">here</a></p>
                </div>

                <div id="contact-form-div" class="pretty-box">
                    <form id="contact-form" role="form">
                        <div class="form-group">
                            <label for="input-first-name">First Name</label>
                            <input type="text" class="form-control" id="input-first-name" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="input-first-name">Last Name</label>
                            <input type="text" class="form-control" id="input-last-name" placeholder="Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="input-email">Email</label>
                            <input type="email" class="form-control" id="input-email" placeholder="john.doe@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="input-phone">Phone Number (optional)</label>
                            <input type="tel" class="form-control" id="input-phone">
                        </div>
                        <button id="submit-contact" type="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>