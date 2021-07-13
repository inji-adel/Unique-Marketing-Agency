<div id="OurTeam">
    <div class="featured-work text-center">
        <div class="title">
            <h1>Team</h1>
        </div>
        <div class="shuffle-imgs center ">
            <div class="row ">
                <div class="col-md">
                    <img class="image" src="/girl1.jpg" alt="" />
                    <div class="middle">
                        <div class="text">Tina Morad <br> CEO </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/girl2.jpg" alt="" />
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/boy2.png">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/girl1.jpg">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <img class="image" src="/girl1.jpg">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/girl2.jpg">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/boy2.png">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
                <div class="col-md">
                    <img class="image" src="/boy2.png">
                    <div class="middle">
                        <div class="text">Name <br> Title </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    .title h1 {
        margin-bottom: 60px;
        border-style: solid;
        border-color: white;
        background: white;
        border-radius: 100px;
        width: 200px;
        height: 45px;
        margin-left: 800px;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .col-md:hover .image {
        opacity: 0.3;
    }

    .col-md:hover .middle {
        opacity: 1;
    }

    .text {
        color: white;
        font-size: 16px;
    }

    .featured-work {
        padding: 100px 0;

    }

    .featured-work .shuffle-imgs .row {
        margin-left: 0px;
        margin-right: 0px;
    }

    .featured-work .shuffle-imgs .row .col-md {
        padding: 20px;

        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;

    }

    .featured-work .row img {
        width: 100%;
    }

    @media(max-width:576px) {

        .featured-work .row img {
            width: 100%;
        }
    }

    @media(max-width:768px) {

        .featured-work .row img {
            width: 40%;
        }

        .featured-work .shuffle-imgs .row .col-md {
            padding-bottom: 0px;
        }


    }

    @media(min-width:800px) {
        .featured-work .shuffle-imgs .row .col-md {
            padding-bottom: 0px;
        }

        .featured-work .shuffle-imgs .row {
            margin-left: 0px;
            margin-right: 0px;
        }

    }

    @media(min-width:992px) {
        .featured-work .shuffle-imgs .row {
            margin-left: 200px;
            margin-right: 200px;
        }

        .featured-work .shuffle-imgs .row .col-md {
            padding-bottom: 0px;
        }
    }

</style>
