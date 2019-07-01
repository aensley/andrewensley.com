---
title: Contact
icon: fas fa-envelope
order: 2
---

## Contact Me

This is my personal contact page. You may contact me by email below.

<form action="/email.php" id="contactForm" method="post" class="mt-3">
  <div class="alert d-none" id="message" role="alert"></div>
  <div class="form-group row justify-content-center">
    <label for="name" class="col-sm-2 col-lg-1 col-form-label">Name</label>
    <div class="col-sm-10 col-md-8 col-lg-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="email" class="col-sm-2 col-lg-1 col-form-label">Email</label>
    <div class="col-sm-10 col-md-8 col-lg-6">
      <input type="email" inputmode="email" class="form-control" id="email" placeholder="someone@somewhere.com" required>
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="message" class="col-sm-2 col-lg-1 col-form-label">Message</label>
    <div class="col-sm-10 col-md-8 col-lg-6">
      <textarea name="message" class="form-control" id="message" rows="3" placeholder="Type your message here..." required></textarea>
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <div class="col-sm-10 offset-sm-2 col-md-8 col-lg-6 offset-lg-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>