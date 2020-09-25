@extends('user.layout.layout')
@section('content')

    <section class="news-detail mt-5">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h1>
            </div>

            <div class="col-lg-12">
            <img src="img/newsdetail.jpg" width="100%">
            </div>

            <div class="col-lg-12 paragraph">
            <p>
                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
            <p>
                Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
            </p>
            </div>
        </div>
        <div class="row">
            <nav class="col-lg-12">
            <ul class="pagination">
                <li class="col-lg-6 page-item prev"><a class="page-link" href="#">
                <svg class="bi bi-chevron-left" width="1em" height="1em" viewBox="0 2 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                Previous</a></li>
                <li class="col-lg-6 page-item next"><a class="page-link" href="#">
                Next
                <svg class="bi bi-chevron-right" width="1em" height="1em" viewBox="0 2 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg></a></li>
            </ul>
            </nav>
        </div>
        </div>
    </section>

@endsection
