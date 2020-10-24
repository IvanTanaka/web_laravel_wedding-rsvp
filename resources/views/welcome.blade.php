<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <title>#DariDuluKuMau</title>
  <style>
    @font-face {
        font-family: LibreBaskerville-Regular;
        src: url('{{asset('/fonts/LibreBaskerville-Regular.tff')}}');
    }
    body{
      background-image: url("/images/bg_1.jpg");
      width: auto;
      min-height: 100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .card{
      border-color: transparent;
      background-color: rgba(255,255,255, 0.3) !important;
    }
    .btn-success:not(:disabled):not(.disabled):active {
      color: #fff;
      background-color: #AB4A3B;
      border-color: #8f4337;
    }
    .btn-success.focus, .btn-success:focus {
      color: #fff;
      background-color: #AB4A3B;
      border-color: #8f4337;
      box-shadow: 0 0 0 0.2rem rgba(180, 112, 72, 0.5);
    }
    .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show>.btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(180, 112, 72, 0.5);
    }
    .btn-success:hover {
      color: #fff;
      background-color: #AB4A3B;
      border-color: #8f4337;
    }
    .btn-success{
      background-color: #AB4A3B;
      border-color: #AB4A3B;
    }
    h1, h5, h6{
      text-align: center;
      font-family: LibreBaskerville-Regular;
      font-style: italic;
      color: #AB4A3B;
    }
    span{
      color: #AB4A3B;
      font-weight: 600;
    }
    label, .col-form-label, p{
      font-family: LibreBaskerville-Regular;
    }
    p{
      font-size: 18px;
      margin-top: 10px;
      margin-bottom: 10px;
      max-width: 480px;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }
    .col-form-label{
      font-size: 20px;
      color: #AB4A3B;
      font-weight: 500;
    }

    @media (min-width: 991.98px) {
      .card{
        height: 95vh;
      }
      .card-body{
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-3">
        <div class="row justify-content-center">
          <div class="col-md-6 justify-content-center" style="display: flex; justify-content: center; align-items: center; ">
            <div style="display: inline-block;">
            <h1 style="margin-bottom: 0;">Darwin Wily</h1>
            <h1 style="margin-bottom: 0;">& </h1>
            <h1>Mauren Tanaka</h1>
            <p>You are cordially invited to join our wedding reception on <span>Friday, 8<sup>th</sup> January 2020</span> at <span>Regale International Convention Centre, Medan</span>.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body d-flex">
                <form>
                  <div class="form-group row">
                    <label for="rsvpName" class="col-12 col-form-label">Please fill in your name</label>
                    <div class="col-12">
                      <input type="text" class="form-control" id="rsvpName" name="rsvpName" placeholder="Name">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="rsvpPerson" class="col-12 col-form-label">How many person will be attending?</label>
                    <div class="col-12">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" checked type="radio" name="attend" id="attendYes" value="true">
                        <label class="form-check-label" style="height:20px;" for="attendYes">Yes,</label> 
                        <select style="display: inline-block; width: auto; margin-left:10px; margin-right:10px;" class="form-control" id="rsvpPerson" name="rsvpPerson">
                          <option value="1" selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                        <label class="form-check-label" style="height:20px;" for="attendYes">people will be attending.</label> 
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="attend" id="attendNo" value="false">
                        <label class="form-check-label" style="height:20px;" for="attendNo">No, we are not attending.</label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="rsvpPerson" class="col-12 col-form-label">Any dietary requirement?</label>
                    <div class="col-12">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dietary" id="dietaryYes" value="true">
                        <label class="form-check-label" style="height:20px;" for="dietaryYes">Vegetarian</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" checked type="radio" name="dietary" id="dietaryNo" value="false">
                        <label class="form-check-label" style="height:20px;" for="dietaryNo">No</label>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
                
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>