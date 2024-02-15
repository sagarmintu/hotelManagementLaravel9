<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact Us</h2>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form id="request" class="main_form" method="post" action="{{ url('contact') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Name" type="text" name="name" required>
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email" type="email" name="email" required>
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.243786404802!2d77.70476377507615!3d12.956246187357717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae117c0d95718f%3A0x9c207b0ab84d2940!2sRalecon%20(Digital%20Marketing%2C%20SEO%2C%20PPC%20Company%20in%20Bangalore%2C%20India)!5e0!3m2!1sen!2sin!4v1707981246073!5m2!1sen!2sin" 
                            width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>