@extends('user.layout.master')

@section('title')
    price plane
@endsection

@section('content')

    <!--start price planContent section -->
    <section class="price_planContent">
        <div class="container">
            <h5 class="py-5 text-capitalize">choose your plan</h5>
            <div class="row">

                <div class="card-deck col-lg col-m-12 mb-5 d-flex justify-content-center">
                    <form class="price__table w-25" method="post" action="#">
                        <div class="price__header">
                            <h5 class="text-capitalize">one</h5>
                        </div>
                        <div class="price__list w-75">
                            <ul class="py-3 ">
                                <li class="text-center">22222222222222</li>
                            </ul>
                        </div>
                        <div class="price__price">
                            <h2 class="card-title pricing-card-title">1000 <small class="text-muted"></small></h2>
                        </div>
                        <div class="price__footer pb-4">
                            <a href="#" class="btn btn-info px-4">select plan</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="shopkeeper">
        <div class="container">
            <h5 class="pt-5 pb-3 text-capitalize">choose shopkeeper</h5>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-5">
                        <div class="card-body">
                            <table id="example2" class="table ui-corner-bottom">
                                <thead>
                                    <tr>
                                        <th> shopkeeper name</th>
                                        <th> email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>hamsa</td>
                                        <td>@gmail.com</td>
                                        <td> <a href="#" class="btn btn-outline-info">select</a> </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
