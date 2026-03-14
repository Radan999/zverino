<?php
$pageTitle = 'Zverino | Detail inzerátu';
$activeNav = 'offers';
require __DIR__ . '/includes/header.php';
?>
<main class="main main--detail">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Drobečková navigace">
          <a href="#">Domů</a>
          <span aria-hidden="true">/</span>
          <a href="#">Nabídky</a>
          <span aria-hidden="true">/</span>
          <span>Zlatý retrívr</span>
        </nav>

        <section class="detail-layout">
          <div class="detail-content">
            <div class="detail-gallery">
              <div class="detail-gallery__footer">
                <div class="detail-gallery__thumbs">
                <button class="detail-thumb detail-thumb--active" type="button" aria-label="Hlavní fotka štěněte">
                  <img src="images/golden-retriever.jpg" alt="Náhled zlatého retrívra">
                </button>
                <button class="detail-thumb" type="button" aria-label="Druhá fotka štěněte">
                  <img src="images/golden-retriever.jpg" alt="Náhled zlatého retrívra">
                </button>
                <button class="detail-thumb" type="button" aria-label="Třetí fotka štěněte">
                  <img src="images/golden-retriever.jpg" alt="Náhled štěněte">
                </button>
                </div>
              </div>

              <figure class="detail-gallery__main">
                <img src="images/golden-retriever.jpg" alt="Zlatý retrívr štěně">
              </figure>
            </div>

            <article class="detail-panel">
              <div class="detail-panel__header">
                <h2>Informace o štěňatech</h2>
                <div class="detail-panel__icons" aria-hidden="true">
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="detail-copy">
                <p><strong>Zlatý retrívr štěňata</strong> jsou připravena k odběru do milujících rodin. Klademe důraz na socializaci, klidnou povahu a vyrovnaný temperament. Štěňata vyrůstají doma s dětmi a jsou zvyklá na běžný provoz domácnosti.</p>
                <p>Rodiče jsou zdravotně testovaní, štěňata jsou pravidelně kontrolována veterinářem, očipována a očkována. Každé štěně odchází s kupní smlouvou, balíčkem do začátku a potvrzením o původu.</p>
              </div>

              <div class="detail-tags">
                <span>Zlatý retrívr</span>
                <span>Štěňata</span>
                <span>Očkovaná</span>
                <span>S PP</span>
              </div>

            </article>

            <article class="detail-panel detail-checklist">
              <div class="detail-panel__header">
                <h2 class="detail-checklist__title">
                  <span>Kontrolní seznam před rezervací</span>
                </h2>
                <div class="detail-panel__icons" aria-hidden="true">
                  <span class="detail-checklist__title-icon">
                    <svg viewBox="0 0 16 16"><path d="M4 4.5h5.5"></path><path d="M4 8h5.5"></path><path d="M4 11.5h4"></path><path d="M10.75 5.25 11.8 6.3l1.95-1.95"></path><path d="M10.75 9.75 11.8 10.8l1.95-1.95"></path></svg>
                  </span>
                </div>
              </div>

              <p class="detail-checklist__intro">Krátký přehled toho, co si ověřit předtím, než se domluvíte s chovatelem na rezervaci nebo odběru.</p>

              <div class="detail-checklist__list">
                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M8 14s4.25-4.08 4.25-7.25A4.25 4.25 0 1 0 3.75 6.75C3.75 9.92 8 14 8 14Z"></path><circle cx="8" cy="6.75" r="1.75"></circle></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Navštivte vrh osobně</h3>
                    <p>Ideálně přímo u chovatele doma, abyste viděli prostředí i kontakt štěňat s matkou.</p>
                  </div>
                </article>

                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><rect x="2.5" y="3.5" width="11" height="10" rx="2"></rect><path d="M5 2.5v2M11 2.5v2M2.5 6.5h11"></path></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Zkontrolujte datum odběru</h3>
                    <p>Štěně by mělo odcházet nejdříve po ukončeném 8. týdnu a po základní péči.</p>
                  </div>
                </article>

                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><circle cx="8" cy="8" r="5.5"></circle><path d="M8 5.25v3.1"></path><circle cx="8" cy="11.4" r=".6" fill="currentColor" stroke="none"></circle></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Ptejte se na zdravotní stav</h3>
                    <p>Očkování, odčervení, čip, veterinární kontroly a testy rodičů by měly být samozřejmost.</p>
                  </div>
                </article>

                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M3 5.5h10"></path><path d="M3 8h7"></path><path d="M3 10.5h6"></path><path d="M10.5 11.25 12 12.75l2.5-3"></path></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Vyžádejte si dokumenty</h3>
                    <p>Kupní smlouva, průkaz původu a informace k péči by měly být připravené předem.</p>
                  </div>
                </article>

                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M2.5 8s2.25-3.5 5.5-3.5S13.5 8 13.5 8s-2.25 3.5-5.5 3.5S2.5 8 2.5 8Z"></path><circle cx="8" cy="8" r="1.7"></circle></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Sledujte chování štěněte</h3>
                    <p>Mělo by působit zvědavě, čistě a bez zjevných známek strachu nebo apatie.</p>
                  </div>
                </article>

                <article class="detail-checklist__item">
                  <span class="detail-checklist__icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M5.5 13.5h5"></path><path d="M6.5 13.5v-2"></path><path d="M9.5 13.5v-2"></path><path d="M3 6.5c0-2.8 2.24-5 5-5s5 2.2 5 5c0 1.83-.9 2.92-1.9 3.86-.6.57-.95 1.02-1.1 1.64H6c-.15-.62-.5-1.07-1.1-1.64C3.9 9.42 3 8.33 3 6.5Z"></path></svg>
                  </span>
                  <div class="detail-checklist__content">
                    <h3>Myslete i na období po odběru</h3>
                    <p>Zeptejte se na krmení, režim, zvyky a to, na co bylo štěně dosud naučené.</p>
                  </div>
                </article>
              </div>
            </article>

          </div>

          <aside class="detail-summary">
            <div class="detail-summary__card">
              <div class="detail-summary__eyebrow">Ověřený inzerát</div>
              <span class="detail-summary__verified pet-card__verified-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"></path>
                  <path d="m9.2 12.4 1.9 1.9 3.7-4"></path>
                </svg>
              </span>
              <h1>Zlatý retrívr</h1>

              <div class="pet-card__litter">
                <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"></circle><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"></path></svg></span><span class="pet-card__sex-value">2</span></span>
                <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"></circle><path d="M8 9.5V14M5.75 11.75h4.5"></path></svg></span><span class="pet-card__sex-value">3</span></span>
                <span class="pet-card__age">8 týdnů</span>
              </div>

              <div class="detail-summary__meta">
                <span class="detail-summary__meta-item">
                  <span class="detail-summary__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M8 14s4.25-4.08 4.25-7.25A4.25 4.25 0 1 0 3.75 6.75C3.75 9.92 8 14 8 14Z"></path><circle cx="8" cy="6.75" r="1.75"></circle></svg>
                  </span>
                  <span>Brno</span>
                </span>
                <span class="detail-summary__meta-item">
                  <span class="detail-summary__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><rect x="2.5" y="3.5" width="11" height="10" rx="2"></rect><path d="M5 2.5v2M11 2.5v2M2.5 6.5h11"></path></svg>
                  </span>
                  <span>Vloženo 5. 3. 2026</span>
                </span>
                <span class="detail-summary__meta-item">
                  <span class="detail-summary__meta-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M1.5 8s2.5-4 6.5-4 6.5 4 6.5 4-2.5 4-6.5 4-6.5-4-6.5-4Z"></path><circle cx="8" cy="8" r="1.75"></circle></svg>
                  </span>
                  <span>215</span>
                </span>
              </div>

              <div class="detail-summary__price">10 000 Kč</div>

              <a class="btn-primary detail-summary__cta" href="#">Kontaktovat chovatele</a>

              <div class="detail-summary__note">
                Máte otázku na chovatele? Pošlete zprávu přes kontaktní formulář a domluvte si návštěvu vrhu.
              </div>

              <div class="detail-summary__actions" aria-label="Sdílení inzerátu">
                <span class="detail-summary__actions-label">Sdílet inzerát</span>
                <a class="detail-summary__share-link" href="#" aria-label="Sdílet na Facebooku">
                  <span class="detail-summary__share-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M9.25 14V8.75H11l.25-2H9.25V5.5c0-.63.21-1.25 1.25-1.25h.88V2.5a9.8 9.8 0 0 0-1.56-.13c-1.89 0-3.07 1.14-3.07 3.24v1.14H5v2h1.75V14"></path></svg>
                  </span>
                  <span>Facebook</span>
                </a>
                <a class="detail-summary__share-link" href="#" aria-label="Sdílet na Instagramu">
                  <span class="detail-summary__share-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><rect x="2.25" y="2.25" width="11.5" height="11.5" rx="3"></rect><circle cx="8" cy="8" r="2.5"></circle><circle cx="11.25" cy="4.75" r=".6" fill="currentColor" stroke="none"></circle></svg>
                  </span>
                  <span>Instagram</span>
                </a>
                <a class="detail-summary__share-link" href="#" aria-label="Kopírovat odkaz">
                  <span class="detail-summary__share-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M6.25 9.75 9.75 6.25"></path><path d="M5.1 11.4 3.7 12.8a2.12 2.12 0 1 1-3-3l1.4-1.4"></path><path d="M10.9 4.6 12.3 3.2a2.12 2.12 0 1 1 3 3l-1.4 1.4"></path><path d="M4.6 5.1 6 3.7a2.12 2.12 0 1 1 3 3l-1.4 1.4"></path><path d="M11.4 10.9 10 12.3a2.12 2.12 0 1 1-3-3l1.4-1.4"></path></svg>
                  </span>
                  <span>Odkaz</span>
                </a>
              </div>
            </div>

            <div class="detail-side-card breeder-card">
              <div class="breeder-card__top">
                <img class="breeder-card__avatar" src="images/dog-yorkshire-terrier.jpg" alt="Profil chovatelky">
                <div>
                  <h2>Jana Nováková</h2>
                  <div class="breeder-card__badge">Ověřený chovatel</div>
                </div>
              </div>

              <p class="breeder-card__subtitle">Chovatelská stanice Golden Dream</p>
              <div class="breeder-card__rating">★★★★★ <span>(23)</span></div>

              <ul class="breeder-card__facts">
                <li class="breeder-card__fact-item">
                  <span class="breeder-card__fact-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><path d="M8 14s4.25-4.08 4.25-7.25A4.25 4.25 0 1 0 3.75 6.75C3.75 9.92 8 14 8 14Z"></path><circle cx="8" cy="6.75" r="1.75"></circle></svg>
                  </span>
                  <span>Brno</span>
                </li>
                <li class="breeder-card__fact-item">
                  <span class="breeder-card__fact-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><rect x="2.5" y="3.5" width="11" height="10" rx="2"></rect><path d="M5 2.5v2M11 2.5v2M2.5 6.5h11"></path></svg>
                  </span>
                  <span>2 roky na webu</span>
                </li>
                <li class="breeder-card__fact-item">
                  <span class="breeder-card__fact-icon" aria-hidden="true">
                    <svg viewBox="0 0 16 16"><circle cx="8" cy="8" r="5.5"></circle><path d="M8 4.75v3.5l2.25 1.5"></path></svg>
                  </span>
                  <span>Odpovídá obvykle do několika hodin</span>
                </li>
              </ul>

              <details class="breeder-card__about">
                <summary>O chovateli</summary>
                <div class="breeder-card__about-copy">
                  <p><strong>Jana Nováková</strong> se chovu věnuje dlouhodobě a zaměřuje se na zdravý odchov a stabilní povahu. Návštěvy vrhu jsou možné po předchozí domluvě, stejně jako videohovor nebo zaslání dalších fotek a videí.</p>
                  <p>Budoucí majitelé dostávají jasné informace o krmení, pohybu, očkování i navazující péči. Prioritou je najít pro každé štěně vhodný domov a zůstat rodinám k dispozici i po odběru.</p>
                </div>
              </details>

              <div class="detail-side-links">
                <a href="#">Další nabídky chovatele <span>(4)</span></a>
              </div>
            </div>

          </aside>
        </section>

        <section class="detail-related">
          <div class="section-heading">
            <h2>Podobné inzeráty</h2>
          </div>

          <div class="pet-grid">
            <a class="pet-card" href="#">
              <div class="pet-card__image">
                <img class="pet-card__photo" src="images/dog-pointer.jpg" alt="Ohař">
                <span class="pet-card__stamp">Před 2 dny</span>
              </div>
              <div class="pet-card__body">
                <h3>Německý dlouhosrstý ohař</h3>
                <div class="pet-card__litter">
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"></circle><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"></path></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"></circle><path d="M8 9.5V14M5.75 11.75h4.5"></path></svg></span><span class="pet-card__sex-value">3</span></span>
                  <span class="pet-card__age">8 týdnů</span>
                </div>
                <div class="pet-card__meta">
                  <span>Praha</span>
                  <strong>14 000 Kč</strong>
                </div>
              </div>
              <div class="pet-card__footer">
                <span class="pet-card__verified">
                  <span class="pet-card__verified-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"></path>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"></path>
                    </svg>
                  </span>
                  <span>Ověřený chovatel</span>
                </span>
              </div>
            </a>

            <a class="pet-card" href="#">
              <div class="pet-card__image">
                <img class="pet-card__photo" src="images/dog-keeshond.jpg" alt="Keeshond">
                <span class="pet-card__stamp">Před 5 hodinami</span>
              </div>
              <div class="pet-card__body">
                <h3>Keeshond</h3>
                <div class="pet-card__litter">
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"></circle><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"></path></svg></span><span class="pet-card__sex-value">1</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"></circle><path d="M8 9.5V14M5.75 11.75h4.5"></path></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__age">7 týdnů</span>
                </div>
                <div class="pet-card__meta">
                  <span>Brno</span>
                  <strong>10 000 Kč</strong>
                </div>
              </div>
              <div class="pet-card__footer">
                <span class="pet-card__verified">
                  <span class="pet-card__verified-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"></path>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"></path>
                    </svg>
                  </span>
                  <span>Ověřený chovatel</span>
                </span>
              </div>
            </a>

            <a class="pet-card" href="#">
              <div class="pet-card__image">
                <img class="pet-card__photo" src="images/dog-boston-terrier.jpg" alt="Boston teriér">
                <span class="pet-card__stamp">Před 1 dnem</span>
              </div>
              <div class="pet-card__body">
                <h3>Boston teriér</h3>
                <div class="pet-card__litter">
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"></circle><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"></path></svg></span><span class="pet-card__sex-value">3</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"></circle><path d="M8 9.5V14M5.75 11.75h4.5"></path></svg></span><span class="pet-card__sex-value">1</span></span>
                  <span class="pet-card__age">9 týdnů</span>
                </div>
                <div class="pet-card__meta">
                  <span>Ostrava</span>
                  <strong>12 500 Kč</strong>
                </div>
              </div>
              <div class="pet-card__footer">
                <span class="pet-card__verified">
                  <span class="pet-card__verified-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"></path>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"></path>
                    </svg>
                  </span>
                  <span>Ověřený chovatel</span>
                </span>
              </div>
            </a>

            <a class="pet-card" href="#">
              <div class="pet-card__image">
                <img class="pet-card__photo" src="images/dog-yorkshire-terrier.jpg" alt="Yorkshire teriér">
                <span class="pet-card__stamp">Před 3 dny</span>
              </div>
              <div class="pet-card__body">
                <h3>Yorkshire teriér</h3>
                <div class="pet-card__litter">
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"></circle><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"></path></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"></circle><path d="M8 9.5V14M5.75 11.75h4.5"></path></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__age">10 týdnů</span>
                </div>
                <div class="pet-card__meta">
                  <span>Plzeň</span>
                  <strong>9 500 Kč</strong>
                </div>
              </div>
              <div class="pet-card__footer">
                <span class="pet-card__verified">
                  <span class="pet-card__verified-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"></path>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"></path>
                    </svg>
                  </span>
                  <span>Ověřený chovatel</span>
                </span>
              </div>
            </a>
          </div>
        </section>
      </div>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>



