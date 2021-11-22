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

                <!-- Error -->
                @if ($errors->has('last_name'))
                <div class="error">
                    {{ $errors->first('last_name') }}
                </div>
                @endif
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

                <!-- Error -->
                @if ($errors->has('category'))
                <div class="error">
                    {{ $errors->first('category') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Portfolio Link</label>
                <input type="text" class="form-control" name="portfolio_link" id="portfolio_link">

                <!-- Error -->
                @if ($errors->has('portfolio_link'))
                <div class="error">
                    {{ $errors->first('portfolio_link') }}
                </div>
                @endif

                <input type="checkbox" class="form-control" name="portfolio_link_confirmed" id="portfolio_link_confirmed">Yes, I confirm that the content I submit is authored by me.</input>

                <!-- Error -->
                @if ($errors->has('portfolio_link_confirmed'))
                <div class="error">
                    {{ $errors->first('portfolio_link_confirmed') }}
                </div>
                @endif
            </div>

            <input type="button" name="next" id="next_form" value="Next" class="btn btn-dark btn-block">

            <div class="form-group">
                <label>When creating products to sell, which best describes your perspective on quality?</label>
                <select class="form-control" name="answer_quality" id="answer_quality">
                    <option value="a">I don't care what it takes, my products are the highest quality possible</option>
                    <option value="b">I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere</option>
                    <option value="c">I try to get quality products out quickly, even if I need to take a shortcut now and then</option>
                    <option value="d">I spend the minimum amount of time & effort it takes to create products that are acceptable quality</option>
                    <option value="e">Quantity is more important to me than quality</option>
                </select>

                <!-- Error -->
                @if ($errors->has('answer_quality'))
                <div class="error">
                    {{ $errors->first('answer_quality') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>How would you describe your experience level as an online seller?</label>
                <select class="form-control" name="answer_experience" id="answer_experience">
                    <option value="a">I sell on multiple marketplaces and through my own website</option>
                    <option value="b">I have experience selling through only my own website</option>
                    <option value="c">I have experience selling through multiple marketplaces</option>
                    <option value="d">I have experience selling through one online marketplace</option>
                    <option value="e">I'm new to selling creative products online</option>
                </select>

                <!-- Error -->
                @if ($errors->has('answer_experience'))
                <div class="error">
                    {{ $errors->first('answer_experience') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>How would you describe your understanding of business and marketing?</label>
                <select class="form-control" name="answer_understanding" id="answer_understanding">
                    <option value="a">I have an extensive background in business and/or marketing</option>
                    <option value="b">I'm familiar with some skills & techniques, but I'm not sure how to apply them when selling my creative work</option>
                    <option value="c">I'm vaguely aware of basic business & marketing concepts</option>
                    <option value="d">I'm not interested in understanding business & marketing</option>
                </select>

                <!-- Error -->
                @if ($errors->has('answer_understanding'))
                <div class="error">
                    {{ $errors->first('answer_understanding') }}
                </div>
                @endif
            </div>

            <input type="button" name="back_form" id="back_form" value="Back" class="btn btn-dark btn-block">
            <input type="submit" name="send" value="Submit Application" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>
