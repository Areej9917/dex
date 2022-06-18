@extends('layouts.master')

@section('main-content')
<div class="container-fluid bg-white p-3">
    <form method="post" action="#">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Date</label>
                    <input name="date" id="exampleEmail" placeholder="Pick Date" type="date" required class="form-control">
                </div>

            <div class="position-relative form-group"><label for="exampleSelect" class="">Cheque Books</label><select name="select" id="exampleSelect" class="form-control">
                    <option>00001001 - 000001100</option>
                    <option>00002001 - 000002100</option>
                    <option>00031001 - 000003100</option>

                </select>
            </div>
            </div>
            <div class="col-4">
                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Pay To</label>
                    <select name="select" id="exampleSelect" class="form-control">
                        <option>Customers</option>
                        <option>Consumer</option>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Customer</label>
                    <select name="select" id="exampleSelect" class="form-control">
                        <option>Adil Rehman Traders (Sole)</option>
                        <option>Kamil</option>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Branch :</label>
                    <select name="select" id="exampleSelect" class="form-control">
                        <option>Lahore</option>
                        <option>Faisalabad</option>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class=""> Cheque Date</label>
                    <input name="date" id="exampleEmail" placeholder="Pick Date" type="date" required class="form-control">
                </div>

            </div>
            <div class="col-4">
                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">From</label>
                    <select name="select" id="exampleSelect" class="form-control">
                        <option>HBL</option>
                        <option>Meezan</option>
                    </select>
                </div>
                <div class="position-relative form-group">
                Ledger Bank Balance <div class="progress">

                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                         aria-valuemin="0" aria-valuemax="100" style="width:100%">
                       0.00
                    </div>
                </div>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleEmail" class=""> Cheque No</label>
                    <input name="cheque_no" id="exampleEmail" placeholder="Enter Cheque no" type="text" required class="form-control">
                </div>

            </div>

        </div>
        <div class="col-12 bg-secondary text-center mt-3 p-1 text-white">
            <h4>Payment Details</h4>
        </div>
        <div class="row mt-3">
            <div class="col-3">

                <div class="position-relative form-group">
                    <label for="exampleEmail" class=""> Account No</label>
                    <input name="account_no" id="exampleEmail" placeholder="00000233 || Accounts Receivable Distribution" type="text" required class="form-control">
                </div>

            </div>
            <div class="col-3">

                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Amount</label>
                    <input name="amount" id="exampleEmail" placeholder="" type="number" required class="form-control">
                </div>

            </div>
            <div class="col-3">

                <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Description</label>
                    <textarea name="description" id="exampleEmail" class="form-control"></textarea>
                </div>

            </div>
            <div class="col-3 my-auto text-center">
                <button class="button btn-primary btn-sm">Add</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">Total 0</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <lable>Description</lable>
                <textarea class="form-control" name="final_description"></textarea>
            </div>
        </div>

        <button type="submit" class=" mt-4 mb-3 p-2 col-12 button btn-primary">Submit</button>
    </form>

</div>
@endsection