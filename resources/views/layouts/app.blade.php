<!DOCTYPE html>
<html>
    @include('includes.header')
    
    <body>
        <div class="container-fluid banner-custom">
            <!-- <div class="row">
                <div class="col"> -->
                    @yield('headercontent')
                <!-- </div>
                </div> -->
            </div>

        </div>
        <div class="container ldg-body-content">
            @yield('content')
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
    @include('includes.footer')
</html>