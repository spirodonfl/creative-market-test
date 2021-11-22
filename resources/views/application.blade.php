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
    <script type="text/javascript">
    var CM = {
        showStepOne: function () {
            document.getElementById('step_one').style.display = 'block';
        },
        hideStepOne: function () {
            document.getElementById('step_one').style.display = 'none';
        },
        showStepTwo: function () {
            document.getElementById('step_two').style.display = 'block';
        },
        hideStepTwo: function () {
            document.getElementById('step_two').style.display = 'none';
        },
        showSuccess: function () {
            document.getElementById('success').style.display = 'block';
        },
        hideSuccess: function () {
            document.getElementById('success').style.display = 'none';
        },
        showPortfolioLinkConfirmed: function () {
            document.getElementById('portfolio_link_confirmed').style.display = 'inline-block';
            document.getElementById('portfolio_link_confirmed_text').style.display = 'inline-block';
        },
        hidePortfolioLinkConfirmed: function () {
            document.getElementById('portfolio_link_confirmed').style.display = 'none';
            document.getElementById('portfolio_link_confirmed_text').style.display = 'none';
        },
        showOnlineStores: function () {
            document.getElementById('online_stores_wrapper').style.display = 'block';
        },
        hideOnlineStores: function () {
            document.getElementById('online_stores_wrapper').style.display = 'none';
        }
    };

    window.addEventListener('load', function () {
        document.getElementById('next_form').addEventListener('click', function (evt) {
            evt.preventDefault();
            evt.stopPropagation();

            CM.hideStepOne();
            CM.showStepTwo();

            return false;
        });
        document.getElementById('back_form').addEventListener('click', function (evt) {
            evt.preventDefault();
            evt.stopPropagation();

            CM.hideStepTwo();
            CM.showStepOne();

            return false;
        });
        document.getElementById('portfolio_link').addEventListener('keyup', function (evt) {
            if (document.getElementById('portfolio_link').value !== '') {
                CM.showPortfolioLinkConfirmed();
            } else {
                CM.hidePortfolioLinkConfirmed();
            }
        });
        document.getElementById('online_store_yes').addEventListener('click', function (evt) {
            CM.showOnlineStores();
        });
        document.getElementById('online_store_no').addEventListener('click', function (evt) {
            CM.hideOnlineStores();
        });
        CM.showStepOne();
        CM.hidePortfolioLinkConfirmed();
        CM.hideOnlineStores();
        CM.hideStepTwo();
        CM.hideSuccess();
        if (document.getElementById('portfolio_link').value !== '') {
            CM.showPortfolioLinkConfirmed();
        }
        if (document.getElementById('online_store_yes').checked) {
            CM.showOnlineStores();
        }
        var stepOneHasErrors = false;
        var stepTwoHasErrors = false;
        @if ($errors->has('first_name') || $errors->has('last_name') || $errors->has('category') || $errors->has('online_store') || $errors->has('portfolio_link'))
            stepOneHasErrors = true;
        @endif
        @if ($errors->has('answer_quality') || $errors->has('answer_experience') || $errors->has('answer_understanding'))
            stepTwoHasErrors = true;
        @endif
        if (!stepOneHasErrors && stepTwoHasErrors) {
            CM.hideStepOne();
            CM.showStepTwo();
        }
    });
    </script>
</head>

<body>
    <div class="container flex m-1 mb-8">
        <div class="mx-auto md:w-full">
            <img width="130" height="52" src="data:image/svg+xml, %3Csvg xmlns=%22http://www.w3.org/2000/svg%22 fill-rule=%22evenodd%22 stroke-linejoin=%22round%22 stroke-miterlimit=%221.41421%22 clip-rule=%22evenodd%22 viewBox=%220 0 114 45%22%3E%3Cpath fill=%22%23303538%22 d=%22M35.648 35.918H34.4c-.08 0-.155.039-.204.103l-2.233 3.768c-.103.137-.184.136-.286-.003l-2.163-3.763c-.049-.065-.125-.105-.206-.105h-1.224c-.142 0-.257.117-.257.26v7.562c0 .144.115.26.257.26h1.221c.142 0 .257-.116.257-.26v-3.888c0-.25.237-.356.384-.154l1.676 2.764c.102.139.308.14.412.002l1.73-2.771c.148-.199.384-.092.384.157v3.89c0 .144.115.26.257.26h1.243c.142 0 .258-.116.258-.26v-7.562c0-.143-.116-.26-.258-.26m8.702 4.918h-1.63c-.173 0-.291-.183-.228-.353l.812-2.17c.081-.217.372-.218.454-.001l.819 2.171c.064.169-.055.353-.227.353zm.042-4.763c-.039-.094-.127-.155-.223-.155h-1.267c-.096 0-.184.061-.223.155l-3.162 7.564c-.071.171.047.363.224.363h1.272c.101 0 .192-.065.228-.164l.469-1.265c.037-.099.127-.164.227-.164h3.209c.1 0 .19.064.227.162l.479 1.268c.036.099.127.163.227.163h1.251c.177 0 .295-.192.224-.363l-3.162-7.564zm21.759 3.677c-.065-.09-.061-.214.008-.3l2.305-2.872c.129-.16.016-.401-.187-.401h-1.274c-.073 0-.143.034-.189.093l-2.592 3.322c-.142.183-.431.081-.431-.152v-3.017c0-.136-.108-.246-.241-.246h-1.142c-.133 0-.241.11-.241.246v7.331c0 .136.108.246.241.246h1.142c.133 0 .241-.11.241-.246v-1.276c0-.057.02-.111.054-.155l.973-1.211c.102-.126.294-.119.385.016l1.886 2.767c.045.065.119.105.198.105h1.42c.197 0 .311-.228.195-.39l-2.751-3.86zm13.359 2.741h-3.761c-.158 0-.287-.126-.287-.281v-1.148c0-.155.129-.28.287-.28h2.518c.158 0 .286-.127.286-.282v-.857c0-.155-.128-.281-.286-.281h-2.518c-.158 0-.287-.126-.287-.281v-1.115c0-.155.129-.281.287-.281h3.498c.159 0 .287-.126.287-.281v-.946c0-.156-.128-.281-.287-.281h-5.209c-.158 0-.287.125-.287.281v7.261c0 .155.129.281.287.281h5.472c.158 0 .286-.126.286-.281v-.947c0-.155-.128-.281-.286-.281m9.125-6.573h-5.821c-.128 0-.231.115-.231.257v1.045c0 .142.103.257.231.257h1.895c.128 0 .231.115.231.256v6.011c0 .141.104.256.231.256h1.096c.127 0 .231-.115.231-.256v-6.011c0-.141.103-.256.231-.256h1.906c.127 0 .231-.115.231-.257v-1.045c0-.142-.104-.257-.231-.257m-33.7 4.427c-.313.018-.619.022-.941.017-.137-.002-.248-.118-.248-.257v-2.401c0-.141.112-.257.25-.256.282.001.56.005.872.023 1.022.045 1.796.528 1.796 1.426 0 .792-.539 1.367-1.729 1.448m3.411-1.403c0-1.759-1.301-3.012-3.567-3.024-.809 0-1.608.02-2.467.032-.136.002-.249.116-.249.256v7.538c0 .141.112.256.25.256h1.183c.138 0 .25-.115.25-.256v-1.6c0-.2.039-.256.251-.256.255 0 .641.009.927.009.055 0 .112-.006.167-.008l-.006.004c.278 0 .352-.025.43.132l.9 1.834c.042.087.128.141.223.141h1.358c.186 0 .307-.201.223-.372l-1.041-2.105c-.057-.115-.019-.251.083-.327.643-.478 1.085-1.211 1.085-2.254m47.682-25.363c2.05 0 .88 8.326-2.71 8.879-.175-.684-.261-1.342-.261-1.879 0-2.72 1.023-7 2.971-7M55.083 26.344c-3.716 0-1.118-12.781 1.881-12.781 1.993 0 1.674 12.781-1.881 12.781M42.141 13.52c2.131 0 .866 8.072-2.635 9.398-.265-.858-.395-1.696-.395-2.339 0-2.72 1.081-7.059 3.03-7.059m70.477 7.355c-.105.104-1.07 5.912-5.232 5.912-1.618 0-2.759-1.215-3.463-2.667 5.093-1.121 6.798-5.118 6.798-7.854 0-3.188-2.277-4.339-4.216-4.339-3.17 0-7.294 2.925-7.294 8.652 0 .516.03 1.013.086 1.49-1.097-.331-2.046-.911-2.694-1.9.951-4.227.783-8.272-1.187-8.272-1.107 0-2.049 1.444-2.049 4.592 0 1.238.326 2.626.989 3.891-.405 1.917-1.794 6.6-3.561 6.6-2.436 0-1.684-11.498-1.684-13.197 0-1.386-3.372-2.839-4.113-2.103-.322.319-.379 2.194-.379 4.619 0 1.986.156 4.341.59 6.516-.234 1.182-1.237 4.219-3.112 4.219-2.906 0-1.434-10.889-1.434-12.642 0-1.252-3.245-2.429-4.037-1.642-.313.311-.53 2.513-.53 5.943 0 1.426.082 2.94.294 4.376-.307 1.52-1.511 3.965-3.465 3.965-3.107 0-1.733-11.934-.906-19.292.505-.091 1.022-.169 1.554-.228 1.36-.15 3.028-.414 3.028.409 0 1.936 1.295 2.533 2.255 2.533 1.047 0 1.993-.823 1.993-2.398 0-1.566-1.352-3.013-3.775-3.013-1.613 0-3.215.185-4.807.444.129-1.231.214-2.205.214-2.788 0-1.641-3.391-3.209-4.06-2.545-.129.129-.583 2.698-.974 6.255-2.356.468-4.687.877-6.991.877-.797 0-.695 2.397 2.033 2.397 1.569 0 3.105-.345 4.71-.767-.218 2.49-.377 5.248-.377 7.904 0 2.376.143 4.458.442 6.22-.305 1.323-1.272 3.992-3.023 3.992-3.413 0-1.795-11.718-1.795-13.471 0-.833-3.105-2.629-3.747-1.993-.09.09-.143.585-.143.585s-.414-.302-1.56-.302c-4.356 0-7.853 5.342-7.853 10.217 0 .234.012.458.025.682-.675 1.568-2.381 4.282-5.472 4.282-1.539 0-2.666-1.026-3.419-2.325 4.774-1.341 6.667-5.513 6.667-8.178 0-3.119-2.666-4.664-4.605-4.664-3.365 0-7.074 3.349-7.074 9.001 0 1.646.316 3.071.853 4.268-.596.949-1.533 1.898-2.792 1.898-3.489 0-1.15-11.643-1.15-12.885 0-.308.004-.887-.55-1.275-.731-.51-4.935-1.064-6.359-1.344.011-.309.015-.593.015-.846 0-2.25-1.423-2.768-2.337-2.768-1.547 0-1.871 1.726-1.871 2.143 0 .417.115 1.877 1.662 2.769 0 4.204-2.696 14.126-9.935 14.126-5.46 0-7.459-5.587-7.459-9.752 0-7.005 4.138-12.429 6.818-12.429 3.362 0 .396 6.434 3.758 6.434 2.368 0 2.698-2.277 2.698-3.324 0-1.96-2.062-5.63-6.443-5.63C5.182 2.253 0 10.709 0 17.957c0 6.964 4.816 12.574 11.573 12.574 10.434 0 13.04-11.005 13.583-17.165.67.197 2.322.472 2.483.634.273.271-.527 4.007-.527 7.602 0 4.508 1.488 8.117 5.063 8.117 2.239 0 4.04-1.614 4.984-2.854 1.451 1.842 3.546 2.799 5.592 2.799 3.522 0 5.837-2.181 7.004-3.936.982 2.636 2.991 3.936 4.809 3.936 2.537 0 4.065-3.384 4.153-3.931.768 2.361 2.558 3.986 4.578 3.986 2.559 0 4.094-2.304 4.721-3.744.907 2.433 2.357 3.744 4.436 3.744 2.381 0 3.956-2.15 4.663-3.594.753 2.106 2.001 3.594 3.996 3.594 2.67 0 4.327-2.704 4.881-4.083.877 2.325 2.253 4 4.359 4 2.353 0 4.393-3.342 5.613-7.123.991.926 2.271 1.604 3.849 1.828 1.186 3.395 3.961 5.294 6.884 5.294 5.109 0 7.069-5.211 7.278-6.432.209-1.222-.965-2.717-1.357-2.328%22/%3E%3C/svg%3E" />
        </div>
    </div>

    <div class="mx-4 md:container md:mx-auto p-4 border-2 border-solid border-gray-400 rounded">
        <div id="success w-full">
        <!-- Success message -->
        @if(Session::has('success'))
            <script type="text/javascript">
                window.addEventListener('load', function () {
                    CM.hideStepOne();
                    CM.hideStepTwo();
                    CM.showSuccess();
                });
            </script>
            <div class="w-full font-bold text-xlg text-center mb-8">Thank you for applying to become a seller with Creative Market!</div>
            <div class="w-full text-center">Our curators are reviewing your application. We'll get back to you within 5-7 <strong>business days</strong>. Meanwhile, you already have access to your Shop Studio, so let's start setting up your shop!</div>
        @endif
        </div>

        <form action="" method="post" action="{{ route('application.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div id="step_one">

                <div class="flex mb-2">
                    <div class="w-1/2">Seller Application</div>
                    <div class="w-1/2 text-right">Step 1 of 2</div>
                </div>

                <div class="w-full font-bold text-lg mb-4">Share your work with us</div>

                <div class="w-full mb-4">To ensure the quality of our marketplace, we limit our seller community to the most qualified creators. Let our curators know why you'd be a great seller.</div>

                <div class="flex mb-4">
                    <div class="form-group w-1/2 mr-4">
                        <label class="w-full">First Name</label>
                        <input type="text" class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="first_name" id="first_name" value="{{ old('first_name') }}">

                        <!-- Error -->
                        @if ($errors->has('first_name'))
                        <div class="error text-red-500">
                            {{ $errors->first('first_name') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group w-1/2">
                        <label class="w-full">Last Name</label>
                        <input type="text" class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="last_name" id="last_name" value="{{ old('last_name') }}">

                        <!-- Error -->
                        @if ($errors->has('last_name'))
                        <div class="error text-red-500">
                            {{ $errors->first('last_name') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="w-full">Your Shop Category</label>
                    <select class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="category" id="category">
                        <option value="" disabled selected>Select Category</option>
                        <option value="graphics" {{ (old("category") == "graphics" ? "selected":"") }}>Graphics</option>
                        <option value="fonts" {{ (old("category") == "fonts" ? "selected":"") }}>Fonts</option>
                        <option value="templates" {{ (old("category") == "templates" ? "selected":"") }}>Templates</option>
                        <option value="add_ons" {{ (old("category") == "add_ons" ? "selected":"") }}>Add-ons</option>
                        <option value="photos" {{ (old("category") == "photos" ? "selected":"") }}>Photos</option>
                        <option value="web_themes" {{ (old("category") == "web_themes" ? "selected":"") }}>Web Themes</option>
                        <option value="3d" {{ (old("category") == "3d" ? "selected":"") }}>3D</option>
                    </select>

                    <!-- Error -->
                    @if ($errors->has('category'))
                    <div class="error text-red-500">
                        {{ $errors->first('category') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label class="w-full">Portfolio Link</label>
                    <textarea class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="portfolio_link" id="portfolio_link">{{ old('portfolio_link') }}</textarea>

                    <!-- Error -->
                    @if ($errors->has('portfolio_link'))
                    <div class="error text-red-500">
                        {{ $errors->first('portfolio_link') }}
                    </div>
                    @endif

                    <input type="checkbox" class="form-control p-2 border-2 border-solid border-gray-400 rounded" name="portfolio_link_confirmed" id="portfolio_link_confirmed" {{ (old('portfolio_link_confirmed') == true ? "checked" : "") }}><span id="portfolio_link_confirmed_text">&nbsp; Yes, I confirm that the content I submit is authored by me.</span>

                    <!-- Error -->
                    @if ($errors->has('portfolio_link_confirmed'))
                    <div class="error text-red-500">
                        {{ $errors->first('portfolio_link_confirmed') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label class="w-full">Do you already have an online store?</label>
                    <div>
                        <input type="radio" class="form-control p-2 border-2 border-solid border-gray-400 rounded" name="online_store" id="online_store_yes" value="1" {{ (old('online_store') == "1" ? "checked" : "") }}><span id="online_store_yes">&nbsp; Yes</span>
                    </div>
                    <div>
                        <input type="radio" class="form-control p-2 border-2 border-solid border-gray-400 rounded" name="online_store" id="online_store_no" value="0" {{ (old('online_store') == "0" ? "checked" : "") }}><span id="online_store_no">&nbsp; No</span>
                    </div>

                    <!-- Error -->
                    @if ($errors->has('online_store'))
                    <div class="error text-red-500">
                        {{ $errors->first('online_store') }}
                    </div>
                    @endif
                </div>
                <div id="online_stores_wrapper" class="form-group mb-4">
                    <label class="w-full">Online stores I sell on today</label>
                    <textarea class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="online_stores" id="online_stores">{{ old('online_stores') }}</textarea>

                    <!-- Error -->
                    @if ($errors->has('online_stores'))
                    <div class="error text-red-500">
                        {{ $errors->first('online_stores') }}
                    </div>
                    @endif
                </div>

                <input type="button" name="next" id="next_form" value="Next" class="btn p-2 border-2 border-solid border-gray-400 rounded">

            </div><!-- END STEP ONE-->

            <div id="step_two">

                <div class="flex mb-2">
                    <div class="w-1/2">Seller Application</div>
                    <div class="w-1/2 text-right">Step 2 of 2</div>
                </div>

                <div class="w-full font-bold text-lg mb-4">Tell us a little about yourself</div>

                <div class="w-full mb-4">Your answers will help us provide you with a more personalized experienced as a seller!</div>

                <div class="form-group mb-4">
                    <label class="w-full">When creating products to sell, which best describes your perspective on quality?</label>
                    <select class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="answer_quality" id="answer_quality">
                        <option value="" disabled selected>Select Answer</option>
                        <option value="a" {{ (old("answer_quality") == "a" ? "selected":"") }}>I don't care what it takes, my products are the highest quality possible</option>
                        <option value="b" {{ (old("answer_quality") == "b" ? "selected":"") }}>I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere</option>
                        <option value="c" {{ (old("answer_quality") == "c" ? "selected":"") }}>I try to get quality products out quickly, even if I need to take a shortcut now and then</option>
                        <option value="d" {{ (old("answer_quality") == "d" ? "selected":"") }}>I spend the minimum amount of time & effort it takes to create products that are acceptable quality</option>
                        <option value="e" {{ (old("answer_quality") == "e" ? "selected":"") }}>Quantity is more important to me than quality</option>
                    </select>

                    <!-- Error -->
                    @if ($errors->has('answer_quality'))
                    <div class="error text-red-500">
                        {{ $errors->first('answer_quality') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label class="w-full">How would you describe your experience level as an online seller?</label>
                    <select class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="answer_experience" id="answer_experience">
                        <option value="" disabled selected>Select Answer</option>
                        <option value="a" {{ (old("answer_experience") == "a" ? "selected":"") }}>I sell on multiple marketplaces and through my own website</option>
                        <option value="b" {{ (old("answer_experience") == "b" ? "selected":"") }}>I have experience selling through only my own website</option>
                        <option value="c" {{ (old("answer_experience") == "c" ? "selected":"") }}>I have experience selling through multiple marketplaces</option>
                        <option value="d" {{ (old("answer_experience") == "d" ? "selected":"") }}>I have experience selling through one online marketplace</option>
                        <option value="e" {{ (old("answer_experience") == "e" ? "selected":"") }}>I'm new to selling creative products online</option>
                    </select>

                    <!-- Error -->
                    @if ($errors->has('answer_experience'))
                    <div class="error text-red-500">
                        {{ $errors->first('answer_experience') }}
                    </div>
                    @endif
                </div>

                <div class="form-group mb-4">
                    <label class="w-full">How would you describe your understanding of business and marketing?</label>
                    <select class="form-control w-full p-2 border-2 border-solid border-gray-400 rounded" name="answer_understanding" id="answer_understanding">
                        <option value="" disabled selected>Select Answer</option>
                        <option value="a" {{ (old("answer_understanding") == "a" ? "selected":"") }}>I have an extensive background in business and/or marketing</option>
                        <option value="b" {{ (old("answer_understanding") == "b" ? "selected":"") }}>I'm familiar with some skills & techniques, but I'm not sure how to apply them when selling my creative work</option>
                        <option value="c" {{ (old("answer_understanding") == "c" ? "selected":"") }}>I'm vaguely aware of basic business & marketing concepts</option>
                        <option value="d" {{ (old("answer_understanding") == "d" ? "selected":"") }}>I'm not interested in understanding business & marketing</option>
                    </select>

                    <!-- Error -->
                    @if ($errors->has('answer_understanding'))
                    <div class="error text-red-500">
                        {{ $errors->first('answer_understanding') }}
                    </div>
                    @endif
                </div>

                <div class="hidden md:flex">
                    <div class="w-1/2">
                        <input type="button" name="back_form" id="back_form" value="< Back" class="btn p-2" style="background: none;">
                    </div>
                    <div class="w-1/2 text-right">
                        <input type="submit" name="send" value="Submit Application" class="btn p-2 border-2 border-solid border-gray-400 rounded">
                    </div>
                </div>

                <div class="block md:hidden">
                    <div class="w-full">
                        <input type="submit" name="send" value="Submit Application" class="btn w-full p-2 border-2 border-solid border-gray-400 rounded">
                    </div>
                    <div class="w-full text-center">
                        <input type="button" name="back_form" id="back_form" value="< Back" class="btn w-full p-2" style="background: none;">
                    </div>
                </div>

            </div><!-- END STEP TWO -->
        </form>
    </div>
</body>

</html>
