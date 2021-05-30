@if (isset($service))
    <div class="sidenav">
        <img src="/{{ $service->image }}" class="img-thumbnail" alt="Cinque Terre">
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <h2>{{ $service->name }}</h2>
            <h1>{{ $service->content }}</h1>
        </div>
    </div>
@else
    <h1 style="text-align: center; color:#aaa9ad; margin-top:20%; font-size:100px;"> Service not found</h1>

@endif

<style>
    body {
        font-family: serif;
        background-color: black;
    }

    .main h1 {
        color: #aaa9ad;
        margin-top: 100px;
    }

    .main h2 {
        color: #fff;
        margin-top: 100px;
    }

    .sidenav {
        height: 100%;
        background-image: url(image1.jpg);
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
    }

    @media screen and (max-width: 450px) {

        .register-form {
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px) {
        .main {
            margin-left: 40%;
        }

        .sidenav {
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }
    }

</style>
