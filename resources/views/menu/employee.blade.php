
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
{{--                <ul class="nav nav-tabs" role="tablist">--}}
{{--                    @foreach($items as $menu_item)--}}
{{--                        <li role="presentation"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
                {{--original tabs--}}
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Employee</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Employee Supervisor</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Leave Management</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{--<ul>--}}
{{--    @foreach($items as $menu_item)--}}
{{--        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
