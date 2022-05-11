<html lang="en"><head>

    <meta charset="UTF-8">

  {{-- <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png"> --}}
  {{-- <meta name="apple-mobile-web-app-title" content="CodePen"> --}}

  {{-- <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico"> --}}

  {{-- <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111"> --}}


    <title>Employee Data Form</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

  <style>
  * {
      margin: 0;
      padding: 0
  }

  html {
      height: 100%
  }

  p {
      color: grey
  }

  #heading {
      text-transform: uppercase;
      color: #673AB7;
      font-weight: normal
  }

  #msform {
      text-align: center;
      position: relative;
      margin-top: 20px
  }

  #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 0.5rem;
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      padding-bottom: 20px;
      position: relative
  }

  .form-card {
      text-align: left
  }

  #msform fieldset:not(:first-of-type) {
      display: none
  }

  #msform input,
  #msform select,
  #msform textarea {
      padding: 8px 15px 8px 15px;
      border: 1px solid #ccc;
      border-radius: 0px;
      margin-bottom: 25px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      color: #2C3E50;
      background-color: #ECEFF1;
      font-size: 16px;
      letter-spacing: 1px
  }
  #msform input,
  #msform select{
      height: 40px;
  }
  #msform select::after{
      display: none
  }

  #msform input:focus,
  #msform textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #673AB7;
      outline-width: 0
  }

  #msform .action-button {
      width: 100px;
      background: #673AB7;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 0px 10px 5px;
      float: right
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
      background-color: #311B92
  }

  #msform .action-button-previous {
      width: 100px;
      background: #616161;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px 10px 0px;
      float: right
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
      background-color: #000000
  }

  .card {
      z-index: 0;
      border: none;
      position: relative
  }

  .fs-title {
      font-size: 25px;
      color: #673AB7;
      margin-bottom: 15px;
      font-weight: normal;
      text-align: left
  }

  .purple-text {
      color: #673AB7;
      font-weight: normal
  }

  .steps {
      font-size: 25px;
      color: gray;
      margin-bottom: 10px;
      font-weight: normal;
      text-align: right
  }

  .fieldlabels {
      color: gray;
      text-align: left
  }

  #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      color: lightgrey
  }

  #progressbar .active {
      color: #673AB7
  }

  #progressbar li {
      list-style-type: none;
      font-size: 15px;
      /* width: 25%; */
      width: 12.5%;
      float: left;
      position: relative;
      font-weight: 400
  }

  #progressbar #account:before {
      font-family: FontAwesome;
      content: "\f13e"
  }

  #progressbar #personal:before {
      font-family: FontAwesome;
      content: "\f007"
  }

  #progressbar #payment:before {
      font-family: FontAwesome;
      content: "\f030"
  }

  #progressbar #confirm:before {
      font-family: FontAwesome;
      content: "\f00c"
  }

  #progressbar li:before {
      width: 50px;
      height: 50px;
      line-height: 45px;
      display: block;
      font-size: 20px;
      color: #ffffff;
      background: lightgray;
      border-radius: 50%;
      margin: 0 auto 10px auto;
      padding: 2px
  }

  #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: lightgray;
      position: absolute;
      left: 0;
      top: 25px;
      z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
      background: #673AB7
  }

  .progress {
      height: 20px
  }

  .progress-bar {
      background-color: #673AB7
  }

  .fit-image {
      width: 100%;
      object-fit: cover
  }
  </style>







  </head>

  <body translate="no">
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-11 col-sm-10 col-md-10 col-lg-6 text-center p-0 mt-3 mb-2">
                  <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                      <h2 id="heading">Sign Up Your User Account</h2>
                      <p>Fill all form field to go to next step</p>
                      <form id="msform">
                          <!-- progressbar -->
                          <ul id="progressbar">
                              <li class="active" id="personal"><strong>Personal Information</strong></li>
                              <li id="account"><strong>Contact Details</strong></li>
                              <li id="payment"><strong>Emergency Contact</strong></li>
                              <li id="payment"><strong>Employee History</strong></li>
                              <li id="confirm"><strong>Academic Qualification</strong></li>
                              <li id="confirm"><strong>Training & Courses</strong></li>
                              <li id="confirm"><strong>References</strong></li>
                              <li id="confirm"><strong>Finish</strong></li>
                          </ul>
                          <div class="progress">
                              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                          </div> <br> <!-- fieldsets -->
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Personal Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 8</h2>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6">
                                        <label class="fieldlabels">Name: *</label>
                                        <input type="text" name="name" placeholder="Name">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Father's Name: *</label>
                                        <input type="text" name="fateher_name" placeholder="Father's Name">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Date of Birth: *</label>
                                        <input type="date" name="d_o_b" >
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Place of Birth: *</label>
                                        <input type="text" name="p_o_b" placeholder="Place of Birth">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">CNIC No: *</label>
                                        <input type="number" data-inputmask="'mask': '99999-9999999-9'" name="cnic" placeholder="XXXXX-XXXXXXX-X">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Relgion: *</label>
                                        <input type="text" name="relgion" placeholder="Relgion">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Matrial Status: *</label>
                                        <select name="matrial_status" id="">
                                            <option value="">Please Select</option>
                                            <option value="married">Married</option>
                                            <option value="nu_married">UnMarried</option>
                                        </select>
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Place of Birth: *</label>
                                        <input type="text" name="p_o_b" placeholder="Place of Birth">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Nationality: *</label>
                                        <input type="text" name="nationality" placeholder="Nationality">
                                      </div>
                                  </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Contact Details:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 2 - 8</h2>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-6">
                                        <label class="fieldlabels">Current Address: *</label>
                                        <textarea name="current_address" id="" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Permanent Address: *</label>
                                        <textarea name="permanent_address" id="" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Cell No: *</label>
                                        <input type="number" name="cell_no" >
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label>
                                        <input type="email" name="email" >
                                    </div>
                                  </div>
                                <div>
                                    <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 1 - 4</h2>
                                      </div>
                                  </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email"
                                      placeholder="Email Id"> <label class="fieldlabels">Username: *</label> <input
                                      type="text" name="uname" placeholder="UserName"> <label
                                      class="fieldlabels">Password: *</label> <input type="password" name="pwd"
                                      placeholder="Password"> <label class="fieldlabels">Confirm Password: *</label>
                                  <input type="password" name="cpwd" placeholder="Confirm Password">
                              </div> <input type="button" name="next" class="next action-button" value="Next">
                          </fieldset>

                      </form>
                  </div>
              </div>
          </div>
      </div>
      {{-- <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script id="rendered-js">
  $(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function () {

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative' });

          next_fs.css({ 'opacity': opacity });
        },
        duration: 500 });

      setProgressBar(++current);
    });

    $(".previous").click(function () {

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative' });

          previous_fs.css({ 'opacity': opacity });
        },
        duration: 500 });

      setProgressBar(--current);
    });

    function setProgressBar(curStep) {
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar").
      css("width", percent + "%");
    }

    $(".submit").click(function () {
      return false;
    });

  });
  //# sourceURL=pen.js
      </script>







  </body></html>
