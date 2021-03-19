
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @foreach($items as $menu_item)
                        <li role="presentation"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                    @endforeach
                </ul>

{{--                <ul class="nav nav-tabs" role="tablist">--}}
{{--                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Section 1</a></li>--}}
{{--                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Section 2</a></li>--}}
{{--                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Section 3</a></li>--}}
{{--                </ul>--}}
                <!-- Tab panes -->
{{--                <div class="tab-content tabs">--}}
{{--                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane fade" id="Section2">--}}
{{--                        <h3>SecKtion 2</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane fade" id="Section3">--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
{{--<ul>--}}
{{--    @foreach($items as $menu_item)--}}
{{--        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
