@extends('layouts.master')
{{-- load page specific Css Files --}}
@section("CSS_LOAD")

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center film-section">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="film-title"></h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="action-url" href="javascript:void(0)">
                                    <img class="cover-image" src="" width="100%">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer custom_pagination text-center d-none">
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
    </div>
@endsection

{{-- load page specific Js Files --}}
@section("JS_LOAD")
    <script src="{!! asset("assets/js/films/list_film.js") !!}"></script>
@endsection