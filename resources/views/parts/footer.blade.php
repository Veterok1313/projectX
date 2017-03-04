<footer class="footer">
    <div class="wrapper">
        <div class="footer-mobile-phones">
            {!! widget('footer.mobile.phones') !!}
        </div>
        <div class="footer__left">
            <div class="footer__left__items">
                <div class="footer__left__item">
                    <ul class="footer__left__list">
                        <li class="footer__left__list__item"><a class="link-dashed" href="#">Офисная мебель</a></li>
                        <li class="footer__left__list__item"><a class="link-dashed" href="#">Мебель для дома</a></li>
                        <li class="footer__left__list__item"><a class="link-dashed" href="#">Металлическая мебель</a></li>
                        <li class="footer__left__list__item"><a class="link-dashed" href="#">Кресла и стулья</a></li>
                        <li class="footer__left__list__item"><a class="link-dashed" href="#">Аксессуары</a></li>
                    </ul>
                </div>
                <div class="footer__left__item">
                    @include('tree::footer-menu')
                </div>
                <div class="footer__left__item footer__left__item_phone">
                    {!! widget('footer.phones') !!}
                    <a href="{{ route('feedback.getModal') }}" class="feedback modalbox fancybox.ajax">Обратная связь</a>

                    <div class="footer-links">
                        <span class="footer-links__phone">Следите за нами в соц. сетях</span>
                        @include('parts.social-main')
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright__left">
                    <span>Принимаем оплату</span>
                    <a class="pay-icon" href="#"></a>
                    <a class="pay-icon pay-icon_master" href="#"></a>
                    <a class="pay-icon pay-icon_elsom" href="#"></a>
                </div>
                <div class="footer-copyright__right">
                    <span class="footer-copyright__auth">© 2013-2016, «Mebelin»</span>
                    <span class="footer-copyright__develop">Разработка сайта — <a href="weltkind.com">Weltkind</a></span>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer__right">
            <h2 class="main-title main-title_footer">Будьте в курсе</h2>
            <p class="footer__right__text">Подпишитесь на рассылку, чтобы первыми получать новости и акции!</p>
            <form action="#">
                <div class="sign">
                    <input  class="sign__input" type="text" placeholder="Электронная почта">
                    <button class="sign__button"></button>
                </div>
            </form>
            <div class="footer-bg"></div>
        </div>
        <div class="clear"></div>
    </div>
</footer>
<a href="#" id="back-to-top" class="show">Наверх</a>