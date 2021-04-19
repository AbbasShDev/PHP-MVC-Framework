<h1>Contact</h1>

<form class="my-5" action="/contact" method="post">
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>