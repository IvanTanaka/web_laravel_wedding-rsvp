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
    .mt-10{
      margin-top: 10px;
    }
    .img-thumbnail{
      background-color: #c28285;
      border: 1px solid #bd8688;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-12 justify-content-center" style="display: flex; justify-content: center; align-items: center; ">
            <div style="display: inline-block;">
            <h1 style="margin-bottom: 0;">Darwin Wily</h1>
            <h1 style="margin-bottom: 0;">& </h1>
            <h1>Mauren Tanaka</h1>
            <p><span>Friday, 8<sup>th</sup> January 2020</span> at <span>Regale International Convention Centre, Medan</span>.</p>
            </div>
          </div>
                <?php 
                $baseUrl = 'https://www.instagram.com/explore/tags/daridulukumau/?__a=1';
                $url = $baseUrl;
                
                $json = json_decode(file_get_contents($url));
                $posts = $json->graphql->hashtag->edge_hashtag_to_media->edges;
                // dd($posts[0]->node);
                for($i=0;$i<count($posts);$i++){
    
                    $img_url = $posts[$i]->node->thumbnail_src;
                    echo '<div class="col-lg-2 col-md-3 col-6 mt-10"><img class="img-fluid img-thumbnail" src="'.$img_url.'"></div>';
                }
                ?>
        </div>
        <div style="height: 30px;">
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