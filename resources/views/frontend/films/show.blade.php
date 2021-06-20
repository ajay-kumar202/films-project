@extends('layouts.master')
{{-- load page specific Css Files --}}
@section("CSS_LOAD")

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a class="action-url" href="javascript:void(0)">
                                    <img class="cover-image" width="100%"
                                         src="{!! !empty($data->cover_image) ? $data->cover_image : "" !!}">
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="card-title">
                                    <table>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Name :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    <input type="hidden" name="slug"
                                                           value="{!! !empty($data->slug) ? $data->slug : "" !!}"
                                                           id="slug">
                                                    {!! !empty($data->name) ? $data->name : "" !!}
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Ticket Price :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    {!! !empty($data->ticket_price) ? "$".$data->ticket_price : "" !!}
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Release Date :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    {!! !empty($data->release_date) ? $data->release_date : "" !!}
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Genre :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    @if(!empty($data->getFilmGenres))
                                                        @foreach($data->getFilmGenres as $genre)
                                                            <span class="btn btn-outline-dark">
                                                                {!! $genre->name !!}
                                                            </span>
                                                        @endforeach
                                                    @endif
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Country :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    {!! !empty($data->country) ? $data->country : "" !!}
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="">
                                                    Rating :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    @if(!empty($data->rating))
                                                        @for($i=0; $i < 5; $i++)
                                                            @if($i < $data->rating)
                                                                <span class="fa fa-star rating-checked"></span>
                                                            @else
                                                                <span class="fa fa-star"></span>
                                                            @endif
                                                        @endfor
                                                    @endif
                                                    {{--{!! !empty($data->rating) ? $data->rating : "" !!}--}}
                                                </h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="30%">
                                                <h4 class="">
                                                    Description :
                                                </h4>
                                            </td>
                                            <td>
                                                <h4 class="">
                                                    {!! !empty($data->description) ? $data->description : "" !!}
                                                </h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom_pagination text-center d-none">
                        <button id="first-record" type="button" class="btn btn-primary d-none request-btn">First
                        </button>
                        <button id="prev-record" type="button" class="btn btn-primary d-none request-btn">Previous
                        </button>
                        <button id="next-record" type="button" class="btn btn-primary d-none request-btn">Next</button>
                        <button id="last-record" type="button" class="btn btn-primary d-none request-btn">Last</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-section">
            <div class="card">
                <div class="card-header text-center">
                    Nested comment section
                </div>
                <div class="card-body">
                    <div class="row comment-body">
                    </div>
                    <div class="row">
                        <div class="custom_pagination d-none p-lg-1 col-12  text-center">
                            <button id="next-record" type="button" class="btn btn-primary d-none request-btn">Load
                                More
                            </button>
                        </div>

                    </div>
                    @if(!empty(auth()->user()->id))
                        <div class="row">
                            <div class="col-12">
                                <form action="javascript:void(0)" method="POST" id="ajax-form" class="ajax-form"
                                      data-action="{!! route("api.comments.store") !!}">
                                    <input type="hidden" name="user_id"
                                           value="{!! (!empty(auth()->user()->id))? auth()->user()->id : '' !!}">
                                    <input type="hidden" name="film_id"
                                           value="{!! (!empty($data->id))? $data->id : '' !!}">

                                    <fieldset class="form-group position-relative has-icon-left">
                                        <textarea name="comment" id="comment"
                                                  class="embed-responsive required  @error('comment') is-invalid @enderror"
                                                  rows="10" style="resize: none"></textarea>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary float-right mt-1"> comment</button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="card-footer d-none">
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- load page specific Js Files --}}
@section("JS_LOAD")
    <script src="{!! asset("assets/js/comments.js") !!}"></script>
@endsection
