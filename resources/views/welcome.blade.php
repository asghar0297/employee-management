<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Employee Data Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

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
                            <li id="contact-dtl"><strong>Contact Details</strong></li>
                            <li id="emer-contact"><strong>Emergency Contact</strong></li>
                            <li id="employee-history"><strong>Employee History</strong></li>
                            <li id="academic"><strong>Academic Qualification</strong></li>
                            <li id="traning"><strong>Training & Courses</strong></li>
                            <li id="references"><strong>References</strong></li>
                            <li id="finish"><strong>Finish</strong></li>
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
                                        <input type="text" name="name" class="name" placeholder="Name" >
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Father's Name: *</label>
                                        <input type="text" name="fateher_name" class="fateher_name" placeholder="Father's Name" >
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Date of Birth: *</label>
                                        <input type="date" name="d_o_b" class="d_o_b" >
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Place of Birth: </label>
                                        <input type="text" name="p_o_b" class="p_o_b" placeholder="Place of Birth">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">CNIC No: *</label>
                                        <input type="text" data-inputmask="'mask': '99999-9999999-9'" name="cnic" class="cnic" placeholder="XXXXX-XXXXXXX-X" >
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Relgion: </label>
                                        <input type="text" name="relgion" class="relgion" placeholder="Relgion">
                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Matrial Status: *</label>
                                        <select name="matrial_status" class="matrial_status" id="">
                                            <option value="">Please Select</option>
                                            <option value="married">Married</option>
                                            <option value="nu_married" >UnMarried</option>
                                        </select>
                                      </div>
                                     <div class="col-6">
                                        <label class="fieldlabels">Nationality: </label>
                                        <input type="text" name="nationality" class="nationality" placeholder="Nationality">
                                      </div>
                                  </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" data-step="1">
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
                                        <textarea name="current_address" class="current_address" id="" cols="30" rows="4" >test</textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Permanent Address: *</label>
                                        <textarea name="permanent_address" class="permanent_address" id="" cols="30" rows="4">test</textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Cell No: *</label>
                                        <input type="text" data-inputmask="'mask': '0399-99999999'" maxlength= "12" name="cell_no" class="cell_no" value="0345-9199485" >
                                    </div>
                                    <div class="col-6">
                                        <label class="fieldlabels">Email: *</label>
                                        <input type="email" name="email" class="email" value="test@mail.com">
                                    </div>
                                  </div>
                                </div>

                                    <input type="button" name="next" class="next action-button" value="Next" data-step="2">
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Emergency Contact:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 3 - 8</h2>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Name: *</label>
                                        <input type="text" name="emergency_name" class="emergency_name" value="test" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Relation: *</label>
                                        <input type="text" name="emergency_relation" class="emergency_relation" value="test" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Address: *</label>
                                        <textarea name="emergency_address" class="emergency_address" id="" cols="30" rows="4"> test</textarea>
                                    </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Contact: *</label>
                                        <input type="number" name="emergency_contact" class="emergency_contact"  value="03212122145">
                                      </div>

                                  </div>
                              </div> <input type="button" name="next" class="next action-button" data-step="3" value="Next" >
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Employee History:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 4 - 8</h2>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr>
                                                      <th>Position Title</th>
                                                      <th>Company Name</th>
                                                      <th>Date From</th>
                                                      <th>Date To</th>
                                                      <th>Salary</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody class="employee_history_tbody">
                                                <tr class="employee_history_row">
                                                    <td><input type="text" class="employee_history_position" value="Manager" ></td>
                                                    <td><input type="text" class="employee_history_company" value="zonalgo"></td>
                                                    {{-- <td><input type="date" class="employee_history_date_from"></td> --}}
                                                    <td><input type="date" class="employee_history_date_to"> <input type="checkbox" value="present" class="employee_history_present" onclick="disable_date_to($(this))" checked >Present Here</td>
                                                    <td><input type="number" class="employee_history_salary" value="10000000"></td>
                                                    <td style="width: 106px">
                                                        <a class="btn btn-success"><i class="fa fa-plus employee_history_add_more" ></i></a>
                                                        <a class="btn btn-danger"><i class="fa fa-trash employee_history_remove"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div> <input type="button" name="next" class="next action-button" data-step="4" value="Next">
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                          </fieldset>
                          <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Academic Qualification:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 8</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Degree</th>
                                                    <th>Institute</th>
                                                    <th>Year</th>
                                                    <th>Grade/GPA</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="academic_qualification_tbody">
                                              <tr class="academic_qualification_row">
                                                  <td><input type="text" class="academic_qualification_degree" value="aa" ></td>
                                                  <td><input type="text" class="academic_qualification_institute" value="aa"></td>
                                                  <td><input type="number" class="academic_qualification_year" value="11" ></td>
                                                  <td><input type="text" class="academic_qualification_grade" value="aa"></td>
                                                  <td style="width: 106px">
                                                      <a class="btn btn-success"><i class="fa fa-plus academic_qualification_add_more" ></i></a>
                                                      <a class="btn btn-danger"><i class="fa fa-trash academic_qualification_remove"></i></a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" data-step="5" value="Next">
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Training & Courses:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 6 - 8</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name of Training/Course</th>
                                                    <th>Institute</th>
                                                    <th>Year</th>
                                                    <th>Grade/GPA</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="training_course_tbody">
                                              <tr class="training_course_row">
                                                  <td><input type="text" class="training_course_course" value="123" ></td>
                                                  <td><input type="text" class="training_course_institute" value="123"></td>
                                                  <td><input type="number" class="training_course_year" value="123"></td>
                                                  <td><input type="text" class="training_course_grade" value="123"></td>
                                                  <td style="width: 160px">
                                                      <a class="btn btn-success"><i class="fa fa-plus training_course_add_more"></i></a>
                                                      <a class="btn btn-danger"><i class="fa fa-trash training_course_remove"></i></a>
                                                  </td>
                                              </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" data-step="6" value="Next">
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-8">
                                          <h2 class="fs-title">References <small>(Please provide two professional references)</small>:</h2>
                                      </div>
                                      <div class="col-4">
                                          <h2 class="steps">Step 7 - 8</h2>
                                      </div>
                                  </div>
                                  <h6>Reference No#1</h4>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Name: *</label>
                                        <input type="text" name="refer_name_1" class="refer_name_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Relation: *</label>
                                        <input type="text" name="refer_relation_1" class="refer_relation_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Year Since Khonw: *</label>
                                        <input type="number" name="refer_year_since_know_1" class="refer_year_since_know_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Position: *</label>
                                        <input type="text" name="refer_position_1" class="refer_position_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Company Name & Address: *</label>
                                        <input type="text" name="refer_company_1" class="refer_company_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Cell No: *</label>
                                        <input type="text" data-inputmask="'mask': '0399-99999999'" maxlength= "12" name="refer_cell_no_1" class="refer_cell_no_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Office No: *</label>
                                        <input type="number" name="refer_office_no_1" class="refer_office_no_1" >
                                      </div>
                                      <div class="col-md-6">
                                        <label class="fieldlabels">Office Email: *</label>
                                        <input type="text" name="refer_office_email_1" class="refer_office_email_1" >
                                      </div>
                                  </div>
                                  <h6>Reference No#2</h4>
                                  <div class="row">

                                    <div class="col-md-6">
                                      <label class="fieldlabels">Name: *</label>
                                      <input type="text" name="refer_name_2" class="refer_name_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Relation: *</label>
                                      <input type="text" name="refer_relation_2" class="refer_relation_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Year Since Khonw: *</label>
                                      <input type="number" name="refer_year_since_know_2" class="refer_year_since_know_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Position: *</label>
                                      <input type="text" name="refer_position_2" class="refer_position_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Company Name & Address: *</label>
                                      <input type="text" name="refer_company_2" class="refer_company_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Cell No: *</label>
                                      <input type="number" data-inputmask="'mask': '0399-99999999'" maxlength= "12" name="refer_cell_no_2" class="refer_cell_no_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Office No: *</label>
                                      <input type="number" name="refer_office_no_2" class="refer_office_no_2" >
                                    </div>
                                    <div class="col-md-6">
                                      <label class="fieldlabels">Office Email: *</label>
                                      <input type="text" name="refer_office_email_2" class="refer_office_email_2" >
                                    </div>
                                </div>
                              </div> <input type="button" name="next" class="next action-button" data-step="7" value="Next">
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="fs-title">Account Information:</h2>
                                      </div>
                                      <div class="col-5">
                                          <h2 class="steps">Step 8 - 8</h2>
                                      </div>
                                  </div>
                                  <div class="row declaration_row">
                                      <div class="col-md-12">
                                          <h5>Declaration</h5>
                                          <input type="checkbox" value="agree" class="custom_checkbox">
                                          <label class="custom_label">

                                              I hereby declare that the information I have given is true and correct to the best of my knowledge. I understand that a misrepresentation or omission of facts called for herein shall be of sufficient cause for cancellation of consideration for employment or dismissal from the company's service if I have been employed, without any liability to the Company.

                                            </label>
                                      </div>
                                  </div>
                              </div> <input type="button" name="next" class="next action-button" data-step="8" value="Finish">
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                          </fieldset>

                      </form>
                  </div>
              </div>
          </div>
      </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
        <script id="rendered-js">

        $(":input").inputmask();

        $(document).ready(function () {

            //-----------------------------------Add more for employee history------------------------------------//
            $("body").on('click','.employee_history_add_more',function(){

                let position = $(this).closest("tr").find('.employee_history_position');
                let company =  $(this).closest("tr").find('.employee_history_company');
                let date_from = $(this).closest("tr").find('.employee_history_date_from');
                let date_to = $(this).closest("tr").find('.employee_history_date_to');
                let salary = $(this).closest("tr").find('.employee_history_salary');
                let present = $(this).closest("tr").find('.employee_history_present');
                // let err_occured = false;
                // if(position.val() == "" || company.val() == "" || date_from.val() == "" || salary.val() == "" || (!present.is(':checked') && date_to.val() == "" ) ){

                //     position.addClass('error');
                //     company.addClass('error');
                //     date_from.addClass('error');
                //     date_to.addClass('error');
                //     salary.addClass('error');
                //     err_occured = true;
                //     return false;

                // }else{
                //     position.removeClass('error');
                //     company.removeClass('error');
                //     date_from.removeClass('error');
                //     date_to.removeClass('error');
                //     salary.removeClass('error');
                // }



                var new_tr  = $(this).closest(".employee_history_row").clone();

                new_tr.find('.employee_history_position').val('');
                new_tr.find('.employee_history_company').val('');
                new_tr.find('.employee_history_date_from').val('');
                new_tr.find('.employee_history_date_to').val('');
                new_tr.find('.employee_history_salary').val('');
                new_tr.find('.employee_history_present').prop("checked", false);

                $(".employee_history_tbody").append(new_tr);
            });

            $("body").on('click','.employee_history_remove',function(){
                var result = confirm("Want to delete?");
                var rows = $('.employee_history_row').length;
                if (result && rows > 1) {
                    $(this).closest('tr').remove();
                }
            });
            //----------------------------------------------------------------------------------------------------//

            //-----------------------------------Add more for employee history------------------------------------//
            $("body").on('click','.training_course_add_more',function(){
                var new_tr  = $(this).closest(".training_course_row").clone();

                new_tr.find('.employee_history_position').val('');
                new_tr.find('.employee_history_company').val('');
                new_tr.find('.employee_history_date_from').val('');
                new_tr.find('.employee_history_date_to').val('');
                new_tr.find('.employee_history_salary').val('');

                $(".training_course_tbody").append(new_tr);
            });

            $("body").on('click','.training_course_remove',function(){
                var result = confirm("Want to delete?");
                var rows = $('.training_course_row').length;
                if (result && rows > 1) {
                    $(this).closest('tr').remove();
                }
            });
            //----------------------------------------------------------------------------------------------------//

            //-----------------------------------Add more for employee history------------------------------------//
            $("body").on('click','.academic_qualification_add_more',function(){
                var new_tr  = $(this).closest(".academic_qualification_row").clone();
                $(".academic_qualification_tbody").append(new_tr);
            });

            $("body").on('click','.academic_qualification_remove',function(){
                var result = confirm("Want to delete?");
                var rows = $('.academic_qualification_row').length;
                if (result && rows > 1) {
                    $(this).closest('tr').remove();
                }
            });
            //----------------------------------------------------------------------------------------------------//
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                var step = $(this).data('step');
                var error_occured = false;
                switch (step) {
                    case 1:


                        if(validate_step_1() == false){
                            return false;
                         }

                    break;
                    case 2:

                         if(validate_step_2() == false){
                            return false;
                         }

                    break;
                    case 3:
                        if(validate_step_3() == false){
                            return false;
                        }
                    break;
                    case 4:
                        if(validate_step_4() == false){
                            return false;
                        }
                    break;
                    case 5:
                        if(validate_step_5() == false){
                            return false;
                        }
                    break;
                    case 6:
                        if(validate_step_6() == false){
                            return false;
                        }
                    break;
                    case 7:
                        if(validate_step_7() == false){
                            return false;
                        }
                    break;
                    case 8:
                        if(validate_step_8() == false){
                            return false;
                        }
                    break;

                    default:
                        break;
                }
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });

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
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });

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

            function validate_step_3(){

                let validated = true;

                if($('.emergency_name').val() == '' ){
                    $('.emergency_name').addClass('error');
                    validated = false;
                }else{
                    $('.emergency_name').removeClass('error');
                }
                if($('.emergency_relation').val() == '' ){
                    $('.emergency_relation').addClass('error');
                    validated = false;
                }else{
                    $('.emergency_relation').removeClass('error');
                }
                if($('.emergency_address').val() == '' ){
                    $('.emergency_address').addClass('error');
                    validated = false;
                }else{
                    $('.emergency_address').removeClass('error');
                }
                if($('.emergency_contact').val() == '' ){
                    $('.emergency_contact').addClass('error');
                    validated = false;
                }else{
                    $('.emergency_contact').removeClass('error');
                }

                return validated;
            }

            function validate_step_2(){

                let validated = true;
                if($('.current_address').val() == '') {
                    $('.current_address').addClass('error');
                    validated = false;
                }else{
                    $('.current_address').removeClass('error');
                }
                if($('.permanent_address').val() == ''){
                    $('.permanent_address').addClass('error');
                    validated = false;
                }else{
                    $('.permanent_address').removeClass('error');
                }
                if($('.cell_no').val() == '') {
                    $('.cell_no').addClass('error');
                    validated = false;
                }else{
                    $('.cell_no').removeClass('error');
                }
                if($('.email').val() == '') {
                    $('.email').addClass('error');
                    validated = false;
                }else{
                    $('.email').removeClass('error');
                }

                return validated;
            }

            function validate_step_1(){

                let validated = true;

                if ($('.name').val() ==  '') {

                    $('.name').addClass('error');
                    validated = false;

                }else{

                    $('.name').removeClass('error');
                }
                if ($('.fateher_name').val() ==  '') {

                    $('.fateher_name').addClass('error');
                    validated = false;

                }else{

                    $('.fateher_name').removeClass('error');
                }
                if ($('.d_o_b').val() ==  '') {

                    $('.d_o_b').addClass('error');
                    validated = false;

                }else{

                    $('.d_o_b').removeClass('error');

                }

                if ($('.cnic').val() ==  '') {

                    $('.cnic').addClass('error');
                    validated = false;

                }else{

                    $('.cnic').removeClass('error');
                }

                if ($('.matrial_status').val() ==  '') {

                    $('.matrial_status').addClass('error');
                    validated = false;

                }else{

                    $('.matrial_status').removeClass('error');

                }

                return validated;
            }

            function validate_step_4(){

                let validated = true;

                $('.employee_history_position').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.employee_history_company').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.employee_history_date_from').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })
                $('.employee_history_date_to').each(function(){
                    if($(this).val() == "" && $(this).closest('tr').find('.employee_history_present').is(':checked') == false ){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                    console.log($(this).closest('tr').find('.employee_history_present').is(':checked'));
                })
                $('.employee_history_salary').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })


                return validated;
            }


            function validate_step_5(){

                let validated = true;




                $('.academic_qualification_degree').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.academic_qualification_institute').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.academic_qualification_year').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.academic_qualification_grade').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })


                return validated;
            }

            function validate_step_6(){

                let validated = true;







                $('.training_course_course').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.training_course_institute').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.training_course_year').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })

                $('.training_course_grade').each(function(){
                    if($(this).val() == ""){
                        $(this).addClass('error');
                        validated = false;
                    }else{
                        $(this).removeClass('error');
                    }
                })


                return validated;
            }

            function validate_step_7(){

                let validated = true;

                if($('.refer_name_1').val() == '' ){
                    $('.refer_name_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_name_1').removeClass('error');
                }
                if($('.refer_relation_1').val() == '' ){
                    $('.refer_relation_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_relation_1').removeClass('error');
                }
                if($('.refer_year_since_know_1').val() == '' ){
                    $('.refer_year_since_know_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_year_since_know_1').removeClass('error');
                }
                if($('.refer_position_1').val() == '' ){
                    $('.refer_position_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_position_1').removeClass('error');
                }
                if($('.refer_company_1').val() == '' ){
                    $('.refer_company_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_company_1').removeClass('error');
                }
                if($('.refer_cell_no_1').val() == '' ){
                    $('.refer_cell_no_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_cell_no_1').removeClass('error');
                }
                if($('.refer_office_no_1').val() == '' ){
                    $('.refer_office_no_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_office_no_1').removeClass('error');
                }
                if($('.refer_office_email_1').val() == '' ){
                    $('.refer_office_email_1').addClass('error');
                    validated = false;
                }else{
                    $('.refer_office_email_1').removeClass('error');
                }

                if($('.refer_name_2').val() == '' ){
                    $('.refer_name_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_name_2').removeClass('error');
                }
                if($('.refer_relation_2').val() == '' ){
                    $('.refer_relation_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_relation_2').removeClass('error');
                }
                if($('.refer_year_since_know_2').val() == '' ){
                    $('.refer_year_since_know_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_year_since_know_2').removeClass('error');
                }
                if($('.refer_position_2').val() == '' ){
                    $('.refer_position_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_position_2').removeClass('error');
                }
                if($('.refer_company_2').val() == '' ){
                    $('.refer_company_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_company_2').removeClass('error');
                }
                if($('.refer_cell_no_2').val() == '' ){
                    $('.refer_cell_no_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_cell_no_2').removeClass('error');
                }
                if($('.refer_office_no_2').val() == '' ){
                    $('.refer_office_no_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_office_no_2').removeClass('error');
                }
                if($('.refer_office_email_2').val() == '' ){
                    $('.refer_office_email_2').addClass('error');
                    validated = false;
                }else{
                    $('.refer_office_email_2').removeClass('error');
                }

                return validated;
            }

            function validate_step_8(){

                let validated = true;

                if(!$('.custom_checkbox').is(":checked") ){
                    alert('if');
                    $('.declaration_row').addClass('declaration_error');
                    validated = false;
                }else{
                    alert('else');
                    $('.declaration_row').removeClass('declaration_error');

                }

                return validated;
            }


        });

        function disable_date_to(obj){
            if(obj.is(":checked")){

                obj.closest('tr').find('.employee_history_date_to').val('');
                obj.closest('tr').find('.employee_history_date_to').prop('readonly',true);
            }else{
                obj.closest('tr').find('.employee_history_date_to').prop('readonly',false);
            }
        }


    </script>







  </body>
</html>
