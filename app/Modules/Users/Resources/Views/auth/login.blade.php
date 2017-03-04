<div class="enter-win" id="enter-win">
    <form id="f_contact" name="contact" role="form" method="POST" action="{{ url('login') }}">

        {{ csrf_field() }}

        <h6>Вход в личный кабинет</h6>

        @if (isset($errors) && count($errors) > 0)
        <!-- Список ошибок формы -->
            <div class="error">
                @lang('index.form_error')
            </div>
        @endif

        <div class="b-form">
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_text b-form-item_style_default
                {{ $errors->has('email')?'b-form-item_status_error ':null }}">
                    <label for="name" class="b-form-item__label">Логин (адрес эл. почты):
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="text" name="email" placeholder="Введите ваш email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" id="email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('email') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_email b-form-item_style_default
                {{ $errors->has('password')?'b-form-item_status_error ':null }}">
                    <label for="email" class="b-form-item__label">Пароль (от личного кабинета):
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="password" name="password" id="password" title="Введите пароль">
                    </div>
                    @if ($errors->has('password'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('password') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_captcha b-form-item_style_default
                {{ $errors->has('captcha')?'b-form-item_status_error ':null }}">
                    <label for="captcha" class="b-form-item__label">Спам фильтр<span> *</span></label>
                    <div class="b-form-item__input-image"><a href="#" title="Reload image">{!! captcha_img('flat') !!}</a></div>
                    <div class="b-form-item__input">
                        <input type="text" name="captcha" id="captcha">
                    </div>
                    @if ($errors->has('captcha'))
                        <ul class="b-form__errors">
                            <li>{{ $errors->first('captcha') }}</li>
                        </ul>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
            <div class="login-options">
                <div class="login-options__left">
                    <label class="checkbox-inline"><input type="checkbox" name="remember" value="">Запомнить меня</label>
                </div>
                <div class="login-options__right">
                    <a href="{{ url('/password/reset') }}">Забыли пароль?</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="b-form__button">
                <button type="button" class="b-button" id="f_send">Отправить</button>
            </div>
        </div>
    </form>
</div>  <!-- feedback -->




