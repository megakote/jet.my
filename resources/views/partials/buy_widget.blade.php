<div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h3 class="text-center" style="color:#FFF">Оплатить доступ к базе</h3>
        </div>
    </div>
</div>
<form action="{{ route('orders.put') }}" method="post">
    <select class="form-control custom-select" name="admission_course">
        <option value="">На 7 дней</option>
        <option value="">На 12 дней</option>
        <option value="">На 1 месяц</option>
        <option value="">На 3 месяца</option>
        <option value="">На 6 месяцев</option>
        <option value="">На 1 год</option>
    </select>
    <div class="col-md-12 my-3 text-center">
        <label style="color:#FFF"><h4>Цена: 5000 руб</h4></label>
        <button class="btn btn-default btn-color btn-courses text-center"
                name="admission_submit">Оплатить
        </button>
    </div>
</form>