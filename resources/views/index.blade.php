@extends('layouts.master')
@section('content')

    <div class="hidden mt-8 sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
{{--            <form id="searchform" name="searchform">--}}
{{--            <input type="text" class="p-2 rounded-md ml-2 border" name="name" onkeyup="ajaxSearch(event,0)"--}}
{{--                   id="search_form" placeholder="Search by name">--}}
{{--            </form>--}}
            <div id="pagination_data" class="mt-4">
                @include("article-pagination",["articles"=>$contacts])
            </div>
        </div>
    </div>


    <script>
        function ajaxSearch(e, item){
            //get url and make final url for ajax
            var _target = e.target;
            var url = item == 1 ? _target.attributes.href.value : "{{route('home')}}";
            var append = url.indexOf("?") == -1 ? "?" : "&";
            var finalURL = url + append + $("#searchform").serialize();

            //set to current url
            window.history.pushState({}, null, finalURL);

            $.get(finalURL, function(data) {

                $("#pagination_data").html(data);

            });

            return false;
        }
        $(function() {
            $(document).on("click", "#pagination a,#search_btn", function() {
return false

            })

        });
    </script>
@stop
