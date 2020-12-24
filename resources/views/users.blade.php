<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://kit.fontawesome.com/13b4fcb406.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>Get8</title>
</head>
<body >
<div class="container-fluid ">
    <table class="table ">
        <thead>
        <tr>
            <th scope="col">Hash</th>
            <th scope="col">Name</th>
            <th scope="col">family</th>
            <th scope="col">key</th>
            <th scope="col">url</th>
            <th scope="col">img_name</th>
            <th scope="col">Change</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        @if(!empty($user))@foreach($user as $value)
            <tr>
                <td class="record-hash">{{$value->hash}}</td>
                <td class="record-name">{{$value->name}}</td>
                <td class="record-family">{{$value->family}}</td>
                <td class="record-key">{{$value->key}}</td>
                <td class="record-url">{{$value->url}}</td>
                <td class="record-img_name">{{$value->img_name}}</td>
                <td class="record-img_name">{{$value->update}}</td>
                <td>
                    <button type="button" class="btn  btn-dark german change" data-toggle="modal"
                            data-target="#exampleModalCenter"
                            data-hash="{{$value->hash}}"
                            data-name="{{$value->name}}"
                            data-family="{{$value->family}}"
                            data-key="{{$value->key}}"
                            data-url="{{$value->url}}"
                            data-img_name="{{$value->img_name}}"
                            data-update="{{$value->update}}">
                        <i class="fas fa-edit"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    <div class="container" >
        {{ $user->onEachSide(2)->links() }}
    </div>
</div>
</body>
<form id="update-form">
    @csrf
    <div id="exampleModalCenter"  class="modal fade " tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Редактировать</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="order-md-2">
                        <div class="form-group">
                            <label for="name">hash</label>
                            <input type="text" name="hash" placeholder="hash" id="hash"
                                   class="form-control modal-field-hash" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Введите имя</label>
                            <input type="text" name="name" placeholder="Введите имя" id="name"
                                   class="form-control modal-field-name" value="">
                        </div>
                        <div class="form-group">
                            <label for="family">Фамилия</label>
                            <input type="text" name="family" placeholder="family" id="family"
                                   class="form-control modal-field-family" value="">
                        </div>
                        <div class="form-group">
                            <label for="key">key</label>
                            <input type="text" name="key" id="key" placeholder="key"
                                   class="form-control modal-field-key" value="">
                        </div>
                        <div class="form-group">
                            <label for="url">url</label>
                            <input type="text" name="url" id="url" placeholder="url"
                                   class="form-control modal-field-url" value="">
                        </div>
                        <div class="form-group">
                            <label for="img_name">img_name</label>
                            <input type="text" class="form-control modal-field-img_name" name="img_name"
                                   id="img_name"  placeholder="img_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="update">update</label>
                            <input type="text" class="form-control modal-field-update" name="update"
                                   id="update"  placeholder="update" value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Отправить!
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

</html>
<script>
    $(document).ready(function () { //Изменение users
        $('#update-form').on('submit', function (event) {
            event.preventDefault();
            let hash = $('.modal-field-hash').val();
            let name = $('.modal-field-name').val();
            let family = $('.modal-field-family').val();
            let key = $('.modal-field-key').val();
            let url = $('.modal-field-url').val();
            let img_name = $('.modal-field-img_name').val();
            let update = $('.modal-field-update').val();
            console.log(hash);
            let form = $(this).serialize();
            console.log(form);
            $.ajax({
                url: '/webhook',
                type: "POST",
                data: {hash , name , family , data: {key , url , img_name} , update},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: (function (response) {
                    console.log(response);
                })
            })
        });
        $(document).on('click', '.change ', function () {
            $('.modal-field-hash').val($(this).data('hash'));
            $('.modal-field-name').val($(this).data('name'));
            $('.modal-field-family').val($(this).data('family'));
            $('.modal-field-key').val($(this).data('key'));
            $('.modal-field-url').val($(this).data('url'));
            $('.modal-field-img_name').val($(this).data('img_name'));
            $('.modal-field-update').val($(this).data('update'));
        });
    });
</script>
