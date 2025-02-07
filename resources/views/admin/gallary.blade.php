<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')


    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <center>

                    <h1 style="font-size: 40px ; font-weight: bold ; color:white">Gallary</h1>
                    <div class="row">
                        @foreach ($gallary as $gallary)
                            <div class="col-md-4">
                                <img style="height: 200px ; width:300px;" src="/gallary/{{ $gallary->image }}"
                                    alt="not found">
                                <a onclick="return confirm('are you sure to delete this image')" class="btn btn-danger"
                                    href="{{ url('delete_gallary', $gallary->id) }}">delete Image</a>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ url('upload_gallary') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding: 30px">
                            <label class="color:white; font-weight:bold">Upload Image</label>
                            <input type="file" name="image">

                            <input class="btn btn-primary" type="submit" value="add image">
                        </div>
                    </form>

                </center>

            </div>
        </div>
    </div>



    @include('admin.footer')
</body>

</html>
