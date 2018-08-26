<div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3 class="text-center" style="color:#FFF">Оплатить доступ к базе</h3>
        </div>
    </div>
</div>
<form action="{{ route('order.access.add') }}" method="GET">
    <select class="form-control custom-select" name="id">
        @foreach($access_list as $access)
            <option value="{{ $access->id }}" data-price="{{ $access->price }}">{{ $access->name }}</option>
        @endforeach
    </select>
    <div class="col-md-12 my-3 text-center">
        <label style="color:#FFF"><h4>Цена: <span id="accessPrice">{{ $access_list[0]->price }}</span> руб</h4></label>
        <button class="btn btn-default btn-color btn-courses text-center">Оплатить</button>
    </div>
</form>
