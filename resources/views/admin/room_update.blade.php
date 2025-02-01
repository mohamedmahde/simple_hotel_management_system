<!DOCTYPE html>
<html>

<head>

    <base href="/public">
    @include('admin.css')

    <style>
        label {

            display: inline-block;
            width: 200px;
        }

        .div_dig {

            padding-top: 30px;
        }

        .div_center {

            text-align: center;
            padding-top: 30px;


        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')


    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_center">
                    <h1 style="font-size: 40px ; font-weight: bold;">Update Rooms</h1>

                    <form action="{{ url('edit_room',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_dig">
                            <label>Room Tile</label>
                            <input type="text" name="title" value="{{ $data->room_title }}">
                        </div>

                        <div class="div_dig">
                            <label>Description</label>
                            <textarea name="description">{{ $data->description }}</textarea>
                        </div>

                        <div class="div_dig">
                            <label>price</label>
                            <input type="text" name="price" value="{{ $data->room_price }}"  >
                        </div>

                        <div class="div_dig">
                            <label>Room Type</label>
                            <select name="type">
                                <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>

                                <option selected value="Regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_dig">
                            <label>Free WiFi</label>
                            <select name="wifi">
                                <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>

                                <option selected value="yes">yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="div_dig">
                            <label>Current Image</label>
                            <img src="/room//{{ $data->image }}" alt="">
                            <input type="file" name="image">
                        </div>

                        <div class="div_dig">
                            <input class="btn btn-primary" type="submit" value="Update Room">
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>



    @include('admin.footer')
</body>

</html>
