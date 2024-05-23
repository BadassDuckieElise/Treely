@include("navbar")
<!doctype html>
<html class="no-js" lang="zxx">

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
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="images/logo.trans.blue.png" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="images/logo.trans.blue.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to Fishwiki</h2>
                        <h3>The bot for fish information</h3>
                        <p>Lorem ipsum dolor sit amet.
                        </p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Lorem ipsum dolor sit amet. </li>
                            <li> <i class="flaticon-right"></i> Lorem ipsum dolor sit amet.</li>
                            <li> <i class="flaticon-right"></i> Lorem ipsum dolor sit amet. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_area_end -->

    @include('footer')


    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>