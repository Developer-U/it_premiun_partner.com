<?php get_header( ); ?>

<section id="ContactTrigger">
    <h1>НАШИ КОНТАКТЫ</h1>

    <div class="CentralContact">
        <img src="https://itpremiumpartner.com/wp-content/uploads/2019/10/contacts/logo_Contacts_background.png" alt="Логотип IT preminum Partner">
    </div>
</section>

<article id="fullContact">
    <div class="secondSectionHeading">
        <div class="leftStripe"></div>

        <div class="headingContactsAny">            
            <h2>СВЯЖИТЕСЬ С НАМИ ЛЮБЫМ УДОБНЫМ СПОСОБОМ:</h2>
        </div> 
        
        <div class="rightStripeContact"></div>
    </div>

    <div id="ContainContacts">
        <div class="ContainPhone">
            <a href="tel:+78625551207">
                <img src="https://itpremiumpartner.com/wp-content/uploads/2019/10/contacts/phone_icon.png" alt="Наберите нас">
            </a>

            <a href="tel:+78625551207">
                <p>+7(862) 555-12-07</p>
            </a>
        </div>
        
        <div class="ContainMail">
            <a href="mailto: info@premiumpartner.com">
                <img src="https://itpremiumpartner.com/wp-content/uploads/2019/10/contacts/email_icon.png" alt="Напишите нам">
            </a>

            <a href="mailto: info@premiumpartner.com">
                <p>info@itpremiumpartner.com</p>
            </a>
        </div>        
    </div>
</article>

<article id="fullValues">
    <div class="secondSectionHeading">
        <div class="leftStripe"></div>

        <div class="headingFloor_h2">            
            <h2>ПОСЕТИТЕ НАШ ОФИС:</h2>
        </div> 
        
        <div class="rightStripeBonus"></div>
    </div>

    <div id="map">
    <!--<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af002190945cb466adf6c25078826ccd5f335cad49b38d81613ecd668b81abfec&amp;source=constructor" width="1100" height="430" frameborder="0">
    </iframe>-->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af002190945cb466adf6c25078826ccd5f335cad49b38d81613ecd668b81abfec&amp;width=100%&amp;height=40vh&amp;lang=ru_RU&amp;scroll=true"></script>
        <div id="PressButton">
            <div class="ButtonTakeHeading">
                <h2>ИЛИ ПРОСТО ЖМИТЕ КНОПКУ:</h2>
            </div>

            <div class="buttonTake">
                <a href="#" class="InviteSender">
                    <button id="buttonTakeContact" type="submit">ПОЛУЧИТЬ ПЕРСОНАЛЬНОЕ ПРЕДЛОЖЕНИЕ                    
                    </button>
                </a>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>