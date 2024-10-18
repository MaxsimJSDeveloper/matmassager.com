<section
  id="booking"
  class="section-indentation"
  aria-labelledby="booking-heading"
>
  <div class="container">
    <h2 id="booking-heading" class="visually-hidden">Форма бронювання</h2>
    <div class="contact-wrap">
      <div class="contact-item">
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Адреса">
            <use href="./assets/img/symbol-defs.svg#icon-city"></use>
          </svg>
          <span class="contact-text">
            Вул. Тараса Шевченка, 18, Київ, 01001, Україна
          </span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Телефон">
            <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
          </svg>
          <span class="contact-text">+380 94 923 45 67</span>
        </div>
        <div class="contact-box">
          <svg class="contact-icon" width="20" height="20" aria-label="Email">
            <use href="./assets/img/symbol-defs.svg#icon-email"></use>
          </svg>
          <a
            class="contact-link"
            href="mailto:info@matmassager.com"
            aria-label="Написати на email"
            >info@matmassager.com</a
          >
        </div>
      </div>
                  <form class="application-form" id="myForm" aria-labelledby="booking-heading" itemscope itemtype="https://schema.org/ContactForm">
                <div class="input-container">
                    <svg class="icon" aria-hidden="true" focusable="false">
                        <use href="./assets/img/symbol-defs.svg#icon-user"></use>
                    </svg>
                    <input type="text" name="name" class="input-field" placeholder="Ім'я" required aria-label="Ім'я" itemprop="name" />
                </div>

                <div class="input-container">
                    <svg class="icon" aria-hidden="true" focusable="false">
            <use href="./assets/img/symbol-defs.svg#icon-email"></use>
                    </svg>
                    <input type="email" name="email" class="input-field" placeholder="Email" required aria-label="Email" itemprop="email" />
                </div>

                <div class="input-container">
                    <svg class="icon" aria-hidden="true" focusable="false">
                        <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
                    </svg>
                    <input type="tel" name="phone" class="input-field" placeholder="Телефон" required aria-label="Телефон" itemprop="telephone" />
                </div>

                <div class="input-container">
          <label for="equipment_type" class="visually-hidden"
            >Тип масажного обладнання</label
          >
          <select
            name="equipment_type"
            id="equipment_type"
            class="select-field"
            required
            aria-label="Тип масажного обладнання"
          >
            <option value="" disabled selected>Виберіть тип масажного обладнання</option>
            <option value="Infrared Massager">Інфрачервоний масажер</option>
            <option value="Hydro Massage Bath">Гідромасажна ванна</option>
            <option value="Massage Table">Масажний стіл</option>
            <option value="Massage Chair">Масажне крісло</option>
          </select>
        </div>

                <div class="input-container">
                    <textarea name="message" class="textarea-field" placeholder="Коментар до замовлення" aria-label="Коментар до замовлення" itemprop="message"></textarea>
                </div>

                <div class="input-container">
                    <input type="checkbox" name="privacy_policy" id="privacy_policy" class="checkbox" required />
                    <label for="privacy_policy" class="checkbox-label">
                        Я ознайомлений з
                        <a href="/privacy-policy/">політикою конфіденційності</a>
                    </label>
                </div>

            <input type="submit" value="Надіслати" class="submit-button" />
        </form>

        <div id="successMessage" style="display: none;">
            Дані успішно надіслані!
        </div>
    </div>
  </div>
</section>
