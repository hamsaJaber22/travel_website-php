@extends('user.layout.master')

@section('title')
    Vedio details
@endsection

@section('content')
    <div class="details-content">
        <div class="container">
            <div>
                {{-- <div class="text-center my-5">
            <div class="mx-auto">
                <div class="">
                <div class="video_icon position-absolute ">
                    <a href="#myModal" data-toggle="modal" class="video_modal">
                      <i class="fa fa-play-circle"></i>
                    </a>
                </div>
                </div>
                <div class="d-flex justify-content-center position-relative">
                    <video width="700" height="400" muted class="border border-info"
                     poster="{{ asset('storage/' . $details->poster) }}">
                    <source src="{{ asset('storage/' . $details->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </div>
               </div>
         </div> --}}

                <!-- video modal -->
                <div class="d-flex justify-content-center position-relative mt-5">
                    <video width="700" height="400" muted class="border border-info"
                        poster="{{ asset('storage/' . $details->poster) }}">
                        <source src="{{ asset('storage/' . $details->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <button type="button" class="btn btn-primary position-absolute m-auto" data-toggle="modal"
                        data-target=".bd-example-modal-lg">PLAY</button>
                </div>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="d-flex justify-content-center position-relative">
                                <video width="100%" height="100%" muted class="border border-info" controls>
                                    <source src="{{ asset('storage/' . $details->video) }}" type="video/mp4">

                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="details my-3">
                    <div class="video_details pt-2 w-80">
                        <!-- article content -->
                        <h2 class="pb-2">{{ $details->name }}</h2>
                        <p class="created_at">{{ $details->created_at }}</p>
                        <textarea class="video_desc" disabled>{{ $details->description }}</textarea>
                    </div>


                        <!--  <a href="handlers/add_ToList.php" class="fa fa-plus-circle" style="color:white; ">Add to my List</a>-->
                        <form class="btn-group mb-3 pt-3" method="post" action="handlers/add_ToList.php" class="comments__form">
                            <button class="border rounded py-2 px-4 bg-transparent text-white" type="submit"
                                class="fa fa-plus-circle btn btn-outline-light"> add to myList</button>
                            {{-- <input type="hidden" name="userId" value="" />
                    <input type="hidden" name="videoId" value="<?= $id ?>" /> --}}
                        </form>

                        <a href="" class="fa fa-share text-white pl-4">share</a>
                    </div>
                </div>
            </div>
            <!-- Modal HTML -->
            <div class="bs-example">
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div>
                                    <button type="button" class="close btnCancel pr-2" data-dismiss="modal"
                                        aria-label="Close">
                                        <span class="fs-3" aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="view_vedio">
                                    <video id="myVideo" width="100%" controls>
                                        <source src="#" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-------------END OF HTML AND JAVA SCRIPT MODAL CODE--------------->
    <div class="coments w-75">

        <h5 class=" ml-4 mb-2">Comments</h5>
        <!-- <div class="border border-info rounded"> -->


        <div class="container comment pl-5 border border-info rounded py-4 ml-5 mt-3">
            <span class="comments__name">jjjjjjjj</span>
            <br>
            <span class="comments__time fs-3">fffffff</span>

            <p>oooooo</p>

            <a href="#" class="btn-outline-light"> delete</a>
        </div>

        <!-- </div> -->
        <br>
        <div class="border border-info rounded m-5 w-50">
            {{-- <form class="py-4" method="get" action="{{('create_comment')}}" class="comments__form"> --}}
            @csrf
                <div class="sign__group ">
                    <div class="text-center ">
                        <textarea rows="5" cols="55" id="text" name="text" class="sign__textarea border border-info rounded"
                            placeholder="Add comment"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="bnt btn-info py-2 px-4 ml-5 border border-info rounded">Send</button>
                </div>

            </form>
        </div>

    </div>
@endsection
