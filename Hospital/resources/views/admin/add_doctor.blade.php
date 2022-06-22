<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>





    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        
        
            <div class="container" align="center" style="padding-top: 100px;">

            @if(session()->has('message'))

            <button type="button"class="close" data-dismiss="alert">
                x
            </button>

        <div class="alert alert-success">

        {{session()->get('message')}}

        </div>

        @endif

            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

            @csrf


                <div style="padding:15px;">
                    <label>Nama Dokter</label>
                    <input type="text" style="color:black;" name="name" placeholder="Masukan Nama" required="">
                </div>

                <div style="padding:15px;">
                    <label>No. Telepon</label>
                    <input type="number" style="color:black;" name="number" placeholder="Masukan No.Telepon" required="">
                </div>

                <div style="padding:15px;">
                    <label>Spesialis</label>
                    <select name="specialty" style="color:black; width:200px;" required="">
                        <option>--Pilih--</option>
                        <option value="skin">Umum</option>
                        <option value="heart">Bidan</option>
                        <option value="eye">Spesialis Mata</option>
                        <option value="nose">Spesialis Hidung</option>

                    </select>
                </div>

                <div style="padding:15px;">
                    <label>Nomer Ruangan</label>
                    <input type="text" style="color:black;" name="room" placeholder="Tulis Nomor Ruangan" required="">
                </div>

                <div style="padding:15px;">
                    <label>Foto Dokter</label>
                    <input type="file" name="file" required="">
                </div>
                
                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>