<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style type="text/css">
    * { font-family: 'Helvetica'; }
    </style>
</head>

<body>
    <div class="container mx-auto">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" action="{{ route('application.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name">

                <!-- Error -->
                @if ($errors->has('first_name'))
                <div class="error">
                    {{ $errors->first('first_name') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name">
            </div>

            <div class="form-group">
                <label>Your Shop Category</label>
                <select class="form-control" name="category" id="category">
                    <option value="graphics">Graphics</option>
                    <option value="fonts">Fonts</option>
                    <option value="templates">Templates</option>
                    <option value="add_ons">Add-ons</option>
                    <option value="photos">Photos</option>
                    <option value="web_themes">Web Themes</option>
                    <option value="3d">3D</option>
                </select>
            </div>

            <input type="submit" name="send" value="Submit Application" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>
