
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('contact.contact_title') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <section class="container mt-5 bg-grey">
        <!--Contact heading-->
        <div class="row">
           <!--Grid column-->
           <div class="col-sm-12 mb-4 col-md-5">
              <!--Form with header-->
              <div class="card border-primary rounded-0">
                 <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                       <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                       <p class="m-0">We’ll write rarely, but only the best content.</p>
                    </div>
                 </div>
                 <div class="card-body p-3">

                       <div class="form-group">
                       <label class="form-label" for="name"> Your name </label>
                       <div class="input-group">
                          <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name" placeholder="Your name">
                       </div>
                     </div>
                       <div class="form-group">
                          <label class="form-label" for="email">Your email</label>
                          <div class="input-group mb-2 mb-sm-0">
                             <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email">
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="form-label" for="message">Message</label>
                          <div class="input-group mb-2 mb-sm-0">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
                          </div>
                       </div>
                       <div class="text-center">
                          <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
                       </div>

                      </div>

                 </div>
              </div>
           <!--Grid column-->

           <!--Grid column-->
           <div class="col-sm-12 col-md-7">
              <!--Google map-->
              <div class="mb-4">
                 <iframe src="{{ config('contact.contact_location') }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <!--Buttons-->
              <div class="row text-center">
                 <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>{{ config('contact.contact_address') }}</p>
                 </div>
                 <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>{{ config('contact.contact_phone') }}</p>
                </div>
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>{{ config('contact.contact_phone') }}</p>
                 </div>
              </div>
           </div>
           <!--Grid column-->
             </div>
     </section>
</body>
</html>
