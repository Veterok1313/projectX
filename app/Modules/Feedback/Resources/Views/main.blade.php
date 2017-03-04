<div class="feedback-win" id="feedback">
    <form id="f_contact" name="contact" action="#" method="post">
        <h6>Напишите нам:</h6>
        <div class="b-form">
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_text b-form-item_style_default">
                    <label for="name" class="b-form-item__label">Ваше имя:
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="text" name="name" placeholder="Введите ваше имя" id="name">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_email b-form-item_style_default">
                    <label for="email" class="b-form-item__label">Ваш email:
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <input type="email" name="email" placeholder="info@example.com" id="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" title="Введите верный адрес email">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_textarea b-form-item_style_default">
                    <label for="textarea" class="b-form-item__label">Сообщение:
                        <span class="form-item__label_required">*</span>
                    </label>
                    <div class="b-form-item__input">
                        <textarea name="textarea" placeholder="Введите сообщение" id="textarea"></textarea>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__item">
                <div class="b-form-item b-form-item_type_captcha b-form-item_style_default">
                    <label for="captcha" class="b-form-item__label">Спам фильтр<span class="form-item__label_required">*</span></label>
                    <div class="b-form-item__input-image"><a href="#" title="Reload image"><img src="img/captcha.png" height="40" width="120" alt="Captcha"></a></div>
                    <div class="b-form-item__input">
                        <input type="text" name="captcha" id="captcha">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="b-form__button">
                <button type="button" class="b-button b-button_block b-button_color_green b-button_size_lg b-button_bold" id="f_send">Отправить</button>
            </div>
        </div>
    </form>
</div>  <!-- feedback -->