@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to My Blog!</h1>
                    <p class="lead">Thanks you so much for visting. This is my test website built with Laravel. Please read my popular post!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="clo-md-8" >
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatum fugiat voluptatem, odit quaerat eaque soluta nobis delectus, iusto dolore ratione. Sequi doloribus commodi quis ipsa iste cumque perspiciatis ipsum.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                
                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatum fugiat voluptatem, odit quaerat eaque soluta nobis delectus, iusto dolore ratione. Sequi doloribus commodi quis ipsa iste cumque perspiciatis ipsum.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatum fugiat voluptatem, odit quaerat eaque soluta nobis delectus, iusto dolore ratione. Sequi doloribus commodi quis ipsa iste cumque perspiciatis ipsum.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatum fugiat voluptatem, odit quaerat eaque soluta nobis delectus, iusto dolore ratione. Sequi doloribus commodi quis ipsa iste cumque perspiciatis ipsum.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1" >
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection

