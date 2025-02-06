@include('product/partials/header')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Contact Information:</h3>
            <ul>
                <li>Address: [Insert Address]</li>
                <li>Email: [Insert Email Address]</li>
                <li>Phone: [Insert Phone Number]</li>
                <li>Business Hours: Monday to Friday, 9 AM - 5 PM</li>
            </ul>	
        </div>

        <div class="col-md-6">
            Please fill in the following information:
                <div class="container">
                    <form action="action_page.php">

                        <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your name.."><br>
                        <input type="text" id="lname" class="form-control" name="lastname" placeholder="Your Email.."><br>
                        <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your Subject.."><br>
                        <textarea id="subject" class="form-control" name="message" placeholder="Write Message here.." style="height:200px"></textarea><br>

                        <input type="submit" value="Submit" class="btn btn-primary form-control" />

                    </form>
                </div>
        </div>
    </div>
</div>



@include('product/partials/footer')