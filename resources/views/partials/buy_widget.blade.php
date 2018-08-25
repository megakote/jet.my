<div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3 class="text-center" style="color:#FFF">Оплатить доступ к базе</h3>
        </div>
    </div>
</div>
<form action="{{ route('order.access.add') }}" method="post">
    <select class="form-control custom-select" name="admission_course">
        @foreach($access_list as $access)
            <option value="{{ $access->id }}" data-price="{{ $access->price }}">{{ $access->name }}</option>
        @endforeach
    </select>
    <div class="col-md-12 my-3 text-center">
        <label style="color:#FFF"><h4>Цена: 5000 руб</h4></label>
        <button class="btn btn-default btn-color btn-courses text-center"
                name="admission_submit">Оплатить
        </button>
    </div>
</form>
