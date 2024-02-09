<?php 

session_start();

if(!isset($_SESSION['login'])){
  
}else{

}

if(isset($_GET['v'])){

}else{
  
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>job positions - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      body {
        margin-top: 20px;
      }
      .p-15px {
        padding: 15px;
      }
      .border-color-gray {
        border-color: #f2f3fa;
      }
      .border-all-1 {
        border: 1px solid;
      }
      .hover-top {
        position: relative;
        top: 0;
      }
      .m-15px-tb {
        margin-top: 15px;
        margin-bottom: 15px;
      }
      .overlay-link {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border: 0;
      }
      .border-radius-50 {
        border-radius: 50%;
      }
      .icon-50 {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 21px;
      }
      .white-color {
        color: #ffffff;
      }
      .theme-bg {
        background-color: #0050d8;
      }
      .icon-50 i.number {
        font-style: normal;
      }
      .icon-50 i {
        line-height: 50px;
      }
      .p-20px-l {
        padding-left: 20px;
      }
      .p-10px-lr {
        padding-left: 10px;
        padding-right: 10px;
      }
      .p-0px-tb {
        padding-top: 0px;
        padding-bottom: 0px;
      }
      .border-radius-15 {
        border-radius: 15px;
      }
      .white-color {
        color: #ffffff;
      }
      .theme2nd-bg {
        background-color: #53d267;
      }
      .m-0px {
        margin: 0px;
      }
      .font-small {
        font-size: 0.75rem;
        line-height: 1rem;
      }

      .green-bg-alt {
        background-color: rgba(17, 226, 121, 0.1);
      }

      .green-bg {
        background-color: #11e279;
      }

      .green-after:after {
        background-color: #11e279;
      }

      .green-before:before {
        background-color: #11e279;
      }

      .green-color-alt {
        color: rgba(17, 226, 121, 0.65);
      }

      .green-color {
        color: #11e279;
      }

      .blue-bg-alt {
        background-color: rgba(21, 178, 236, 0.1);
      }

      .blue-bg {
        background-color: #15b2ec;
      }

      .blue-after:after {
        background-color: #15b2ec;
      }

      .blue-before:before {
        background-color: #15b2ec;
      }

      .blue-color-alt {
        color: rgba(21, 178, 236, 0.65);
      }

      .blue-color {
        color: #15b2ec;
      }

      .pink-bg-alt {
        background-color: rgba(241, 38, 153, 0.1);
      }

      .pink-bg {
        background-color: #f12699;
      }

      .pink-after:after {
        background-color: #f12699;
      }

      .pink-before:before {
        background-color: #f12699;
      }

      .pink-color-alt {
        color: rgba(241, 38, 153, 0.65);
      }

      .pink-color {
        color: #f12699;
      }

      .body-bg-alt {
        background-color: rgba(113, 128, 150, 0.1);
      }

      .body-bg {
        background-color: #718096;
      }

      .body-after:after {
        background-color: #718096;
      }

      .body-before:before {
        background-color: #718096;
      }

      .body-color-alt {
        color: rgba(113, 128, 150, 0.65);
      }

      .body-color {
        color: #718096;
      }

      .white-color-light {
        color: rgba(255, 255, 255, 0.65);
      }

      .bg-transparent {
        background-color: transparent;
      }

      .theme-g-bg {
        background: linear-gradient(to right, #0050d8, #002a72);
      }

      .dark-g-bg {
        background: linear-gradient(50deg, #273444 0, #272b44 100%);
      }
      .yellow-bg {
        background-color: #ffbe3d;
      }
      .border-radius-50 {
        border-radius: 50%;
      }
      .icon-50 {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 21px;
      }

      .box-shadow-only-hover:hover {
        box-shadow: 0 1.5rem 4rem rgba(22, 28, 45, 0.1);
      }
      .border-color-gray {
        border-color: #f2f3fa !important;
      }
      .border-all-1 {
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <section class="section">
      <div class="container">
        <div
          class="row md-m-25px-b m-45px-b justify-content-center text-center"
        >
          <div class="col-lg-8">
            <h3 class="h1 m-15px-b">Job Positions</h3>
            <p class="m-0px font-2">
              Luper is a HTML5 template based on Sass and Bootstrap 4 with
              modern and creative multipurpose design you can use it as a
              startups.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 theme-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 green-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 yellow-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 pink-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 theme-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 dark-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 yellow-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 green-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 blue-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 blue-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 pink-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                >
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 m-15px-tb">
            <div
              class="media box-shadow-only-hover hover-top border-all-1 border-color-gray p-15px"
            >
              <a class="overlay-link" href="#"></a>
              <div
                class="icon-50 yellow-bg white-color border-radius-50 d-inline-block"
              >
                <i class="number">LD</i>
              </div>
              <div class="p-20px-l media-body">
                <!-- <span
                  class="theme2nd-bg white-color p-0px-tb p-10px-lr font-small border-radius-15"
                  >Full time</span
                > -->
                <h6 class="m-5px-tb">Laravel Developer</h6>
                <p class="m-0px font-small">San Francisco, US</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
