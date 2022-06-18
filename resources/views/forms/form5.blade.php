@extends('layouts.master')

@section('main-content')
<style>
.select2-container--default .select2-selection--single{
  background-color:#fff;height:36px;border:1px solid #aaa;border-radius:4px
  }
</style>
<div class="back-img"><img class="airway-img" src="assets/images/airway-bill.jpg"></div>
<div class="container-fluid bg-white p-3">

    <form method="post" action="#">
        @csrf
       
        <!-- <h3 class="heading1">Airway Bill Generation</h3> -->
        
        <div class="info">
            
            <div class="row">
              <div class="col-3">
              <div class="form-group">
                  <label>Date:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <i class="fa-solid fa-calendar-days icon"></i>
                  <input type="text" name="name" id="name" class="form-control" style="padding-left: 30px;" required/>
                 </div>
               </div>
              </div>
              <div class="col-3">
              <div class="form-group">
                  <label>Service:</label>
                  <span>*</span>
                  <div class="input-icons">
                  <select class="form-control"><option value=""></option></select>
                 </div>
               </div>
              </div>
              <div class="col-3">
              <div class="form-group">
                  <label>Custom Code:</label>
                  <span>*</span>
                  <div class="input-icons">
                 <input type="number"  class="form-control" required/>
                 </div>
               </div>
              </div>
              <div class="col-3">
                  <div class="form-group">
                  <label>Airway Bill No:</label>
                  <span>*</span>
                  <div class="input-icons">
                 <input type="number" class="form-control" required/>
                 </div>
                 </div>
                </div>
           
            </div> 
        

        </div>

            <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Shipper Details</h4>
            </div>
        <div class="info">
            
          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Company/Store Name:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-id-card icon"></i>
                <input type="text" name="name" id="name" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Contact Person:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-address-book icon"></i>
                <input type="number" name="contact" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
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
         

          </div>
          <div class="row">
          <div class="col-3">
             <div class="form-group">
                <label>Acc No:</label>
                <span>*</span>
                <div class="input-icons">
              
                <input type="number" name="acc_no" id="acc_no" class="form-control" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>State:</label>
                <span>*</span>
                <div class="input-icons">
              
                <input type="text" name="state" id="state" class="form-control" required/>
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
            
            <div class="col-2">
             <div class="form-group">
                <label>Mobile:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-mobile-screen-button icon"></i>
                <input type="number" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>

            </div>
       <div class="row">
       
       <div class="col-3">
             <div class="form-group">
                <label>Phone:</label>
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
            <h4 class="heading2">Receiver Details</h4>
            </div>
        <div class="info">
            
          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Company/Branch Name:</label>
                <span>*</span>
                <select id="company" class="form-control" >
			<!-- Dropdown List Option -->
			</select>
            
             </div>
             
            </div>
            <div class="col-1" style="max-width: 5%;">
            <button class="round-button">+</button>
            </div>
            <div class="col-3" style="max-width: 20%;">
             <div class="form-group">
                <label>Contact Person:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-address-book icon"></i>
                <input type="number" name="contact" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
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
         

          </div>
          <div class="row">
          <div class="col-3">
            <div class="form-group">
                <label>Country:</label>
                <span>*</span>
                <div class="input-icons">
               <select name="country" id="country" class="form-control" required>
                <option value=""></option>
                </select>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>State:</label>
                <span>*</span>
                <div class="input-icons">
              
                <input type="text" name="state" id="state" class="form-control" required/>
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
            
            <div class="col-2">
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
       <div class="row">
       
       <div class="col-3">
             <div class="form-group">
                <label>Phone1:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-phone icon"></i>
                <input type="number" name="contact" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-3">
             <div class="form-group">
                <label>Phone2:</label>
                <span>*</span>
                <div class="input-icons">
                <i class="fa-solid fa-phone icon"></i>
                <input type="number" name="contact" id="contact" class="form-control" style="padding-left: 30px;" required/>
               </div>
             </div>
            </div>
            <div class="col-2">
            <div class="form-group">
                <label>Fax:</label>
                <span>*</span>
               <input type="text" name="fax" id="fax" class="form-control" required/>
              
             </div>
            </div>
          
       </div>

        </div>
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4 class="heading2">Shipment Details</h4>
            </div>
        <div class="info">
            
          <div class="row">
            <div class="col-3">
            <div class="form-group">
                <label>Payment:</label>
                <span>*</span>
                <select  class="form-control" ><option value=""></option></select>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Shipment Type:</label>
                <span>*</span>
                <select  class="form-control" ><option value=""></option></select>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Shipment Concept:</label>
                <span>*</span>
                <select  class="form-control" ><option value=""></option></select>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>Amount:</label>
                <span>*</span>
                <input type="number"  class="form-control"  required/>
             </div>
            </div>

          </div>
          <div class="row">
          <div class="col-3">
            <div class="form-group">
                <label>Weight(kg):</label>
                <span>*</span>
                <input type="text"  class="form-control"  required/>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>CTN:</label>
                <span>*</span>
                <input type="text"  class="form-control"  required/>
             </div>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>STR/STI:</label>
                <span>*</span>
                <input type="text"  class="form-control"  required/>
             </div>
            </div>
         
            <div class="col-3">
            <div class="form-group">
                <label>Total Units:</label>
                <span>*</span>
                <input type="number"  class="form-control"  required/>
             </div>
            </div>
            

            </div>
       <div class="row">
       
       <div class="col-3">
            <div class="form-group">
                <label>Description of Goods:</label>
                <span>*</span>
                <select class="form-control" required>
                <option value=""></option>
                </select>
             </div>
             
            </div>
            <div class="col-2" style="max-width: 5%;">
            <button class="round-button">+</button>
            </div>
            <div class="col-3">
            <div class="form-group">
                <label>STR/STI 1:</label>
                <span>*</span>
                <input type="text"  class="form-control"  required/>
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
