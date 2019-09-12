<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Please Enter Your Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Please Provide Your Email Address">
        </div>
    </div>
    @if (1)
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Please Provide Your Telephone Number">
        </div>
    </div>
    @endif

    @if (1)
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Message Subject">
        </div>
    </div>
    @endif

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="message">Your Message</label>
            <textarea rows="{{ config('form.textarea.rows', 10) }}" name="message" class="form-control" id="message" placeholder="Type Message"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
</form>
