<div class="vc_column-inner ">
    <div class="wpb_wrapper">
        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
                <h3 class="text-center">Поиск по базе</h3>
            </div>
        </div>
    </div>
    <form action="" method="get">
        {{--
        @foreach($filters as $filter)
            <div class="row form-group text-center">
                <div class="col-lg-4 text-left">
                    <label>{{ $filter['name'] }}</label>
                </div>
                <div class="col-lg-8 text-right">
                    <select class="form-control custom-select" name="{{ $filter['id'] }}">
                        <option value="">Не важно</option>
                        @foreach($filter['options'] as $option)
                            <option value="{{ $option['val'] }}">{{ $option['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endforeach
        --}}
        {{--<div class="row form-group text-center">
            <div class="col-lg-4 text-left">
                <label>Возраст</label>
            </div>
            <div class="col-lg-8 text-right">
                <select class="form-control custom-select" name="age">
                    <option value="">Не важно</option>
                    <option value="18-20">18-20</option>
                    <option value="21-24">21-24</option>
                    <option value="25-29">25-29</option>
                    <option value="30">30+</option>
                </select>
            </div>
        </div>--}}
        <div class="row form-group text-center">
            <div class="col-lg-4 text-left">
                <label>Рост</label>
            </div>
            <div class="col-lg-8 text-right">
                <select class="form-control custom-select" name="height">
                    <option value="">Не важно</option>
                    <option value="160">Менее 160</option>
                    <option value="160-165">160-165</option>
                    <option value="166-170">166-170</option>
                    <option value="171-175">171-175</option>
                    <option value="176-180">176-180</option>
                    <option value="180">180+</option>
                </select>
            </div>
        </div>
        <div class="row form-group text-center">
            <div class="col-lg-4 text-left">
                <label>Виза</label>
            </div>
            <div class="col-lg-8 text-right">
                <select class="form-control custom-select" name="visa">
                    <option value="">Не важно</option>
                    <option value="true">Да</option>
                    <option value="false">Нет</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 my-1 text-center">
            <button class="btn btn-default btn-courses">Искать</button>
        </div>
    </form>
</div>
