@extends('layouts.master')

@section('main-content')

<div class="container-fluid bg-white p-3">
    <form method="post" action="#">
        @csrf
       
        <h3 class="heading1">Branch Registration Form</h3>
           
      
            <div class="info">
            
          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Company Name:</label>
                <span>*</span>
                <div class="input-icons">
                <select class="form-control"><option value=""></option></select>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Branch Name:</label>
                <span>*</span>
                <div class="input-icons">
             
                <input type="text" name="bname" id="bname" class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Contact Person:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-address-book icon"></i>
                <input type="text" name="contact_per" id="contact_per" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Acc No:</label>
                <span>*</span>
                <div class="input-icons">
              
                <input type="number" name="acc_no" id="acc_no" class="form-control" required/>
               </div>
             </div>
            </div>
        </div>
         <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Province:</label>
                <span>*</span>
                <div class="input-icons">
               <select name="province" id="province" class="form-control" required>
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
                 <select name="city" id="city" class="form-control" required>
                    <option value=""></option></select>
               </div>
             </div>
            </div>
         
         <div class="col-3">
            <div class="form-group">
                <label>Post Code:</label>
                <span>*</span>
                <div class="input-icons">
               <input type="text" name="code" id="code" class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Mobile:</label>
                <span>*</span>
                <div class="input-icons">
               <input type="text" name="mob" id="mob" class="form-control" required/>
               </div>
             </div>
            </div>
      </div>

       <div class="row">

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
        <div class="col-9">
            <div class="form-group">
                <label>Address:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-location-dot icon"></i>
                <input type="text" name="address" id="address" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
          
       </div>

        </div>
      
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">CItyZone Mapping</h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Select Origin:</label>
                <span>*</span>
                <div class="input-icons">
                <select class="form-control"><option value=""></option></select>
               </div>
             </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
             <div class="form-group">
                <label>Zone A:</label>
                <span>*</span>
                <div class="input-icons">
                <select id="chkveg" multiple="multiple">
              <option value="zone1">Zone1</option>
              <option value="zone2">Zone2</option>
              <option value="zone3">Zone3</option>
              </select>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Zone B:</label>
                <span>*</span>
                <div class="input-icons">
                <select id="chkveg1" multiple="multiple">
                <option value="zone1">Zone1</option>
              <option value="zone2">Zone2</option>
              <option value="zone3">Zone3</option>
             </select>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Zone C:</label>
                <span>*</span>
                <div class="input-icons">
                <select id="chkveg2" multiple="multiple">
                <option value="zone1">Zone1</option>
              <option value="zone2">Zone2</option>
              <option value="zone3">Zone3</option>
             </select>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Zone D:</label>
                <span>*</span>
                <div class="input-icons">
                <select id="chkveg3" multiple="multiple">
                <option value="zone1">Zone1</option>
              <option value="zone2">Zone2</option>
              <option value="zone3">Zone3</option>
             </select>
               </div>
             </div>
            </div>
          
            </div>

        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Zone Rates</h4>
            </div>
            <div class="info">
           </div>
            <div class="info">
            <label style="margin-left: 76px;color: black;font-size: 15px;font-weight: bold;">From One City To Another City<span>*</span></label>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">
            <label class="label2">Service</label>
           </div>
           <div class="col-2">
            <label class="label3">Zone A</label>
            </div>
            <div class="col-2">
            <label class="label4">Zone B</label>
            </div>
            <div class="col-2">
            <label class="label5">Zone C</label>
            </div>
            <div class="col-2">
            <label class="label6">Zone D</label>
            </div>
          
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">
            <label class="label22">Overnight</label>
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">
            <label class="label23">Detail</label>
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">   
            <label class="label24">Economy</label>
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">
            <label class="label25">Overland</label>
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
            </div>

        </div>

           <div class="info">
           <label style="margin-left: 76px;color: black;font-size: 15px;font-weight: bold;">Within City<span>*</span></label>
           <div class="row" style="margin-bottom:10px;">
           <div class="col-1">
           </div>
           <div class="col-4">
           <label style="border-radius:5px;padding: 5px 60px 5px 60px;background-color: lightgray;">
           <input type="radio" name="rad" id="Radio0" checked="checked" data-waschecked="true"/>
           Carton Base Slabs</label>
           </div>
           <div class="col-4">
            <label style="border-radius:5px;padding: 5px 60px 5px 60px;background-color: lightgray;">
            <input type="radio" name="rad" id="Radio1">
            Weight Based Slabs</label>
            </div>
            <div class="col-2">
            <label style="border-radius:5px;padding: 5px 20px 5px 20px;background-color: lightgray;">
            <input type="radio" name="rad" id="Radio2">
            Flat Rates</label>
            </div>
            </div>

            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-2">
            <label class="label2" style="padding: 3px 43px 3px 35px;">Carton(Pcs)</label>
            </div>
            <div class="col-2">
            <label class="label2" style="padding: 3px 35px 3px 30px;">Rates</label>
            </div>
            <div class="col-2">
            <label class="label-n">Weight(kg)</label>
            </div>
            <div class="col-2">
            <label class="label-n">Rates</label>
            </div>
            <div class="col-2">
            <label class="label-n">Rates</label>
            </div>
          
            </div>

            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-1">
            From
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            To
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <label class="label-n" style="margin-top:20px;">6</label>
            </div>
            <div class="col-1">
            From
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            To
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" style="margin-top:20px;"/>
            </div>
            <div class="col-2">
            <label class="label-n" style="margin-top:20px;">10/-</label>
          </div>
          
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <label class="label-n">5</label>
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm" />
            </div>
           
          
            </div>
            <div class="row" style="margin-bottom:10px;">
            <div class="col-1">
           </div>
            <div class="col-1">
           <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <label class="label-n">4</label>
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-1">
            <input type="text" class="form-control form-control-sm" />
            </div>
            <div class="col-2">
            <input type="text" class="form-control form-control-sm"/>
            </div>
            <div class="col-3">
            <input type="button" class="add" value="+" onclick="add();"/>
            <input type="button" class="remove" value="-" onclick="remove();"/>
         
          
          </div>
          
        </div>
        <div class="row">
        <div class="col-2">
        <div id="new_chq"></div>
          <input type="hidden" value="1" id="total_chq">
          </div>
          </div>
        </div>

        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Login</h4>
            </div>
            <div class="info">
            <div class="row">
            <div class="col-3" style="margin-left:250px;">
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
<script type="text/javascript">
  $(function(){
    $('input[name="rad"]').click(function(){
        var $radio = $(this);
        
        // if this was previously checked
        if ($radio.data('waschecked') == true)
        {
            $radio.prop('checked', false);
            $radio.data('waschecked', false);
        }
        else
            $radio.data('waschecked', true);
        
        // remove was checked from other radios
        $radio.siblings('input[name="rad"]').data('waschecked', false);
    });
});

// $('.add').on('click', add);
//     $('.remove').on('click', remove);

function add() {
  var new_chq_no = parseInt($('#total_chq').val()) + 1;
  var new_input = "<input type='text' id='new_" + new_chq_no + "'>";

  $('#new_chq').append(new_input);
  
  $('#total_chq').val(new_chq_no);
}

function remove() {
  var last_chq_no = $('#total_chq').val();

  if (last_chq_no > 1) {
    $('#new_' + last_chq_no).remove();
    $('#total_chq').val(last_chq_no - 1);
  }
}
</script>
@endsection
