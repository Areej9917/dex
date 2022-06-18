@extends('layouts.master')

@section('main-content')
    <script>
        function selectProvince(elem) {
            $.ajax({

                url: '',
                type: "GET",
               // data : { document_id: document_id },
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                cache   : false,
                success : function(resp){

                    var html = '';

                    $.each( resp.data, function( key, v ) {

                        html += `

	            			<tr>
	            				<td>${ key+1 }</td>

                        <td>${ v.client.company_name }</td>



	            				<td>${ v.name }</td>
	            				<td>${ v.email }</td>

	            				<td>
	            					<div class="client-checkbox">
                                    	<input type="checkbox" name="users_id[]" value="${ v.id }" ${ v.checked }>
                                	</div>
	            				</td>
	            			</tr>

	            		`;
                    });

                    $('#docs-modal-user tbody').html(html);
                    $('#docs-modal-user #document_id').val(document_id);

                    $('.client-checkbox').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green',
                    });


                    $('#docs-modal-user').modal('show');
                },
                error : function(){

                },
                beforeSend : function(){

                },
                complete   : function () {

                }
            });
        }
    </script>

<div class="container-fluid bg-white p-3">
    <form method="post" action="#">
        @csrf

        <h3 class="heading1">Customer Registration Form</h3>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Personal Information</h4>
            </div>
            <div class="info">

          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Company Name:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-id-card icon"></i>
                <input type="text" name="company_name" id="company_name" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Contact:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-phone icon"></i>
                <input type="number" name="phone_no" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-2">
            <div class="form-group">
                <label>Province:</label>
                <span>*</span>
                <div class="input-icons">
               <select name="province_id" id="province" onchange="selectProvince(this);" class="form-control" required>
                <option value=""></option>
                </select>
               </div>
             </div>
            </div>
            <div class="col-2">
            <div class="form-group">
                <label>City:</label>
                <span>*</span>
                <div class="input-icons">
                 <select name="city" id="city" class="form-control" required>
                    <option value=""></option></select>
               </div>
             </div>
            </div>

         <div class="col-2">
            <div class="form-group">
                <label>Post Code:</label>
                <span>*</span>
                <div class="input-icons">
               <input type="text" name="code" id="code" class="form-control" required/>
               </div>
             </div>
            </div>


            </div>
       <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Address:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-location-dot icon"></i>
                <input type="text" name="address" id="address" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>

        <div class="col-6">
            <div class="form-group">
                <label>Billing Address:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-location-dot icon"></i>
                <input type="text" name="b_address" id="b_address" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
      </div>
      <div class="row">
            <div class="col-6">
            <div class="form-group">
                <label>Email:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa fa-envelope icon"></i>
                <input type="email" name="email" id="email" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>

       </div>

        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Taxation Details</h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3" style="margin-left: 250px;">
            <div class="form-group">
                <label>NTN #:</label>
                <div class="input-icons">

                <input type="number" name="ntn" id="ntn" class="form-control" />
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>SRB/GST #:</label>
                <div class="input-icons">

                <input type="number" name="gst" id="gst" class="form-control" />
               </div>
             </div>
            </div>

            </div>

        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Withholding Tax Deduction</h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3" style="margin-left: 250px;">
            <div class="form-group">
                <label>Income Tax:</label>
                <span>*</span>
                <div class="input-icons">
                <label class="label1">If Yes Pls</label>
                <input type="text" name="itax" id="itax" value="%" class="form-control" required/>
              </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Sales Tax:</label>
                <span>*</span>
                <div class="input-icons">
                <label class="label1">If Yes Pls</label>
                <input type="text" name="stax" id="stax" value="%" class="form-control" required/>
               </div>
             </div>
            </div>

            </div>

        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Customer & DEX Officials Details </h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3" style="margin-left: 250px;">
            <div class="form-group">
                <label>Conatct To:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="contact_to" class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Conatct By:</label>
                <span>*</span>
                <div class="input-icons">
               <input type="contact_by" class="form-control" required/>
               </div>
             </div>
            </div>

            </div>

        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Customer Accounts Dept Contact Details</h4>
            </div>
            <div class="info">

          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Name:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-id-card icon"></i>
                <input type="text" name="Name" id="Name" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Designation:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="text"  class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Contact:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-phone icon"></i>
                <input type="number" name="contact" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>

            <div class="col-3">
            <div class="form-group">
                <label>Email:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa fa-envelope icon"></i>
                <input type="email" name="email" id="email" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
        </div>

        </div>
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Customer Branch Details</h4>
            </div>
            <div class="info">

          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Branch:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="text"  class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Contact Person:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="text"  class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Address:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="text"  class="form-control" required/>
               </div>
             </div>
            </div>

            <div class="col-3">
            <div class="form-group">
                <label>Country:</label>
                <span>*</span>
                <div class="input-icons">
                <select class="form-control" required>
                    <option value=""></option>
                </select>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Province:</label>
                <span>*</span>
                <div class="input-icons">
                <select class="form-control" required>
                    <option value=""></option>
                </select>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>City:</label>
                <span>*</span>
                <div class="input-icons">
                <select class="form-control" required>
                    <option value=""></option>
                </select>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Postal Code:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="number"  class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <div class="input-icons">
                <button class="btn-add">ADD</button>
               </div>
             </div>
            </div>
        </div>

        </div>
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">AWB's Count</h4>
            </div>
            <div class="info">       
            <div class="col-3" style="margin-left: 320px;">
            <div class="form-group">
                <label>No of AWB's:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="number" class="form-control" required/>
               </div>
             </div>


            </div>

        </div>
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Login</h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3" style="margin-left: 250px;">
            <div class="form-group">
                <label>Username:</label>
                <span>*</span>
                <div class="input-icons">
                <input type="name" class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Password:</label>
                <span>*</span>
                <div class="input-icons">
                <input id="password-field" type="password" class="form-control" name="password" value="secret" required/>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              <input type="checkbox" style="margin-top: 20px;margin-right:10px;"/><label>Remember me?</label>   
            </div>
             </div>
            </div>

            </div>

        </div>
        <div class="row" style="float: right;margin-right: 50px;">
     <button class="btn-submit"><i class="fa-solid fa-paper-plane"></i> Submit</button>
       </div>
 </form>

</div>

@endsection
