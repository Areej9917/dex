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
        <form method="post" action="{{ route('user.update-password') }}">
            @csrf
            <h3 class="heading1">Change Password</h3>

            @if (!$errors->isEmpty())
                <div class="alert alert-danger">
                    <strong>Whoops! </strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="info">
                <div class="row">
                    <div class="col-3" style="margin-left: 250px;">
                        <div class="form-group">
                            <label>Password:</label>
                            <span>*</span>
                            <div class="input-icons">
                                <input id="password-field" type="password" class="form-control" name="password" value="secret" required/>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Confirm Password:</label>
                            <span>*</span>
                            <div class="input-icons">
                                <input id="confirm-password-field" type="password" class="form-control" name="password_confirmation" value="secret" required/>
                                <span toggle="#confirm-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
