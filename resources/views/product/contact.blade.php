@include('product/partials/header')

<style>
    *{
        font-family: garamond;
        font-size: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 style="font-family: garamond; font-size: 30px; color: #df5900">Get in Touch:</h3>
            <ul>
                <li>Address: [Insert Address]</li>
                <li>Email: [Insert Email Address]</li>
                <li>Phone: [Insert Phone Number]</li>
                <li>Business Hours: Monday to Friday, 9 AM - 5 PM</li>
            </ul>	<br><br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4059207104738!2d3.583953574347173!3d6.470155093521542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9500dbc2eef%3A0x758e17f76f65b8bb!2sBirotojob%20Integrated%20Limited!5e0!3m2!1sen!2sng!4v1739186351648!5m2!1sen!2sng" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-md-6">
            Please fill in the following information:
                <div class="container">
                    <form action="/contact" method="post">

                        <input type="text" id="fname" class="form-control" name="name" placeholder="Your name.."><br>
                        <input type="text" id="lname" class="form-control" name="email" placeholder="Your Email.."><br>
                        <input type="text" id="fname" class="form-control" name="subject" placeholder="Your Subject.."><br>
                        <textarea id="subject" class="form-control" name="message" placeholder="Write Message here.." style="height:200px"></textarea><br>
                        <button type="submit" class="btn btn-sm form-control" style="background-color: #df5900; color: white">Submit</button>

                    </form>
                </div>
        </div>
    </div>
</div><br><br>



@include('product/partials/footer')