<div class="card mb-0">
    <div class="card-header bg-warning border-radius-0">
        <h4 class="card-title mb-0">{{trans('messages.archive')}}</h4>
    </div>
    <div class="pr-0 pl-0">
        <ul id="list__archive" class="list__archive pl-0">
            @foreach ($date as $d)
            <li @if (!$loop->last) class="border-bottom" @endif>
                <a href="{{route('magazine.archive', [date('Y', $d['unix']), date('m', $d['unix'])])}}" aria-expanded="false" class="d-block pl-2 font-italic w-100 text-body"><i class="ti-angle-double-right"></i>&nbsp;{{$d['date']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="card">
    <div class="card-header bg-warning border-radius-0">
        <h4 class="card-title mb-0">{{trans('messages.newsletter')}}</h4>
    </div>
    <div class="card p-0 pt-3">
        <div class="form-group mb-2">
            <label for="">{{trans('messages.name')}}</label>
            <input type="text" name="name_subscribe" id="name_subscribe" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">{{trans('messages.email')}}</label>
            <input type="text" name="email_subscribe" id="email_subscribe" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="w-100 btn btn-warning text-center text-uppercase text-black">Subscribe</button>
        </div>
    </div>
</div>
@section('javascript-custom')
<script>
    $(document).ready(function(){
        $('#name_subscribe').on('keypress', function(e) {
            if (e.keyCode == 13) {
                sendSubscribe();
            }
        });
        $('#email_subscribe').on('keypress', function(e) {
            if (e.keyCode == 13) {
                sendSubscribe();
            }
        });
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        function sendSubscribe() {
            var $name = $('#name_subscribe').val();
            var $email = $('#email_subscribe').val();
            if ($name == '') {
                $('#name_subscribe').focus();
                return;
            }
            if ($email == '') {
                $('#email_subscribe').focus();
                return;
            }
            if (!validateEmail($email)) {
                showAlert();
                // $('#email_subscribe').focus();
                return;
            }
            var data = { name: $name, email: $email };
            $.ajax({
                method: 'POST',
                url: "{{route('magazine.newsletter')}}",
                data: data,
                success: function(result) {
                    if (result) {
                        $('#name_subscribe').val('');
                        $('#email_subscribe').val('');
                        showSuccess();
                    }
                }
            })
        }
        function showSuccess() {
            Swal.fire({
                title: 'Success!',
                type: 'success',
                text: 'Thanks for subscribe',
            })  
        }
        function showAlert() {
            Swal.fire({
                title: 'Wrong!',
                type: 'warning',
                text: 'Địa chỉ email không hợp lệ',
            })  
        }
    });
</script>
@endsection