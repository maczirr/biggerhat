@extends('main')

@section('content')
    <div class="row">
        <div class="col">
            @include('partials.mini_card')
        </div>
    </div>
@endsection

@section('footer')
    <script language="JavaScript">
        $(document).ready(function(){

            $('.toggler').on('click',function(){
                $(this).parent().parent().find('.toggled_content').slideToggle();  //swap the display of the main content with slide action
                $(this).parent().find('.toggler_label').toggle();

            });

        });
    </script>
@endsection
