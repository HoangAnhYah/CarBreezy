<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/edit" method="post">
    <div class="container text-center">
        @foreach ($car_show as $carshow)
        @endforeach
        <input name="car_name" value="{{$carshow->car_name}}">
        <div class="col-sm-3">
            <div class="well">
            <input name="car_engine" value={{$carshow->car_engine}}>
            </div>
            <div class="well">
            <input name="car_fuel_type" value={{$carshow->car_fuel_type}}>
            </div>
            <div class="well">
            <input name="car_weight" value={{$carshow->car_weight}}>
            </div>
            <div class="well">
            <input name="car_color" value={{$carshow->car_color}}>
            </div>
            <div class="well">
            <input name="car_gear" value={{$carshow->car_gear}}>
            </div>
            <div class="well">
            <input name="car_drive_system" value={{$carshow->car_drive_system}}>
            </div>
            <div class="well">
            <input name="car_brake" value={{$carshow->car_brake}}>
            </div>
            <div class="well">
            <input name="car_cylinder_capacity" value={{$carshow->car_cylinder_capacity}}>
            </div>
            <div class="well">
            <input name="car_hp" value={{$carshow->car_hp}}>
            </div>
            <div class="well">
            <input name="car_content" value={{$carshow->car_content}}>
            </div>
            <div class="well">
            <input name="car_manufacturer_year" value={{$carshow->car_manufacturer_year}}>
            </div>
            <div class="well">
            <input name="car_emission_level" value={{$carshow->car_emission_level}}>
            </div>
            <div class="well">
            <input name="car_drive_system" value={{$carshow->car_drive_system}}>
            </div>
        </div>
        <div>
            <button name="btn_submit" type="submit">Edit</button>
        </div>
    </div>
    @csrf
    </form>
</body>
</html>