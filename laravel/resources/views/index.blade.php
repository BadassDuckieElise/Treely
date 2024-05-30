@include("navbar")
<!doctype html>
<html class="no-js" lang="zxx">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Fish Wiki</span></h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium aperiam eum obcaecati provident perferendis consequatur dignissimos eos est rem vitae? Eum totam repudiandae mollitia ullam tenetur est recusandae quam laboriosam!</p>
                                <a href="#" class="boxed-btn3">Add Bot :></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- welcome_area_start -->
    <div class="welcome_docmed_area">
    <div class="row mr-0">
                <div class="container d-flex">
                                <div class="welcome_docmed_info mr-5">
                                    <h2>Welcome to Fishwiki</h2>
                                    <h3>The bot for fish information</h3>
                                    <p>Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            @include('layouts/converter')
</div>
    </div>
    </div>
    <!-- welcome_area_end -->
    

    @include('footer')

    </script>
</body>

</html>