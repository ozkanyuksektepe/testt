<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>NGSI - Registration Form Test</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="title">
        @if(session('status'))
            <div class="alert alert-primary" role="alert">
                {{session('status')}}
            </div>
        @endif
        HOBİ EKLEME
    </div>
    <div class="form">
        <form action="{{route('hobi-add')}}" method="POST">
            @csrf

            <div class="inputfield">
                <label>Hobiler</label>
                <div class="custom_select">
                    <select name="hobie_id">
                        @foreach($hobies as $hobi)
                        <option value="{{$hobi->id}}">{{$hobi->hobie}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="inputfield">
                <input type="submit" name="ekle" value="EKLE" class="btn">
            </div>
        </form>
    </div>
    <br />
    <div class="form">
        <form action="{{route('hobi-add-global')}}" method="POST">
            @csrf
            <div class="inputfield">
                <label>Hobi</label>
                 <input type="text" name="hobi">
            </div>
            <div class="inputfield">
                <input type="submit" name="ekle" value="EKLE" class="btn">
            </div>
        </form>
    </div>
</div>
</div>


</body>
</html>
