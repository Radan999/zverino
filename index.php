<?php
$pageTitle = 'Zverino';
$activeNav = 'home';
require __DIR__ . '/includes/header.php';
?>
<main>
      <section class="hero">
        <img class="hero__image" src="images/vyrez.png" alt="" aria-hidden="true">
  

        <div class="container hero__inner">
          <div class="hero__content">
            <h1>Najděte svého nového čtyřnohého parťáka</h1>
            <p>Inzertní portál s ověřenými chovateli psů a koček.</p>

            <form class="search-bar" action="#" method="get">
              <div class="search-bar__primary">
                <label class="search-bar__field search-bar__field--search">
                  <input class="search-bar__input" type="text" name="q" placeholder="Plemeno, rasa, město nebo chovatel">
                  <span class="search-bar__icon">
                    <svg viewBox="0 0 24 24">
                      <path d="M10.5 3a7.5 7.5 0 1 0 4.7 13.3l4.2 4.2 1.6-1.6-4.2-4.2A7.5 7.5 0 0 0 10.5 3zm0 2.2a5.3 5.3 0 1 1 0 10.6 5.3 5.3 0 0 1 0-10.6z"/>
                    </svg>
                  </span>
                </label>

                <button class="search-bar__button" type="submit">Hledat</button>
              </div>

              <div class="search-bar__filters">
                <label class="search-bar__field">
                  <span class="search-bar__label">Plemeno</span>
                  <select>
                    <option>Vyberte</option>
                  </select>
                </label>

                <label class="search-bar__field">
                  <span class="search-bar__label">Lokalita</span>
                  <select>
                    <option>Celá ČR</option>
                  </select>
                </label>
              </div>
            </form>
            <div class="search-bar__facts">
              <ul>
                <li>
                  <span><strong>312</strong> ověřených chovatelských stanic</span>
                </li>
                <span class="search-bar__facts-divider" aria-hidden="true">•</span>
                <li>
                  <span><strong>128</strong> inzerátů</span>
                </li>
                <span class="search-bar__facts-divider" aria-hidden="true">•</span>
                <li>
                  <span><strong>FCI</strong> průkaz chovatele</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="hero__marketplace" aria-hidden="true">
            <div class="hero__market-card hero__market-card--back"></div>
            <div class="hero__market-card hero__market-card--front">
              <div class="hero__market-lines">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="listing">
        <div class="container">
          <div class="section-heading">
            <h2>Nejnovější inzeráty</h2>
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
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"/><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"/></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"/><path d="M8 9.5V14M5.75 11.75h4.5"/></svg></span><span class="pet-card__sex-value">3</span></span>
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
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"/>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"/>
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
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"/><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"/></svg></span><span class="pet-card__sex-value">1</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"/><path d="M8 9.5V14M5.75 11.75h4.5"/></svg></span><span class="pet-card__sex-value">2</span></span>
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
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"/>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"/>
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
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"/><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"/></svg></span><span class="pet-card__sex-value">3</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"/><path d="M8 9.5V14M5.75 11.75h4.5"/></svg></span><span class="pet-card__sex-value">1</span></span>
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
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"/>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"/>
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
                  <span class="pet-card__count pet-card__count--male"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="6" cy="10" r="3.5"/><path d="M8.5 7.5 13 3m0 0h-3m3 0v3"/></svg></span><span class="pet-card__sex-value">2</span></span>
                  <span class="pet-card__count pet-card__count--female"><span class="pet-card__sex-icon" aria-hidden="true"><svg viewBox="0 0 16 16"><circle cx="8" cy="6" r="3.5"/><path d="M8 9.5V14M5.75 11.75h4.5"/></svg></span><span class="pet-card__sex-value">2</span></span>
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
                      <path d="M12 3l6 2.7v5.2c0 4-2.4 7.6-6 9.1-3.6-1.5-6-5.1-6-9.1V5.7z"/>
                      <path d="m9.2 12.4 1.9 1.9 3.7-4"/>
                    </svg>
                  </span>
                  <span>Ověřený chovatel</span>
                </span>
              </div>
            </a>

          </div>
          <div class="listing__cta">
            <a class="btn-primary" href="#">Zobrazit vše</a>
          </div>
        </div>
      </section>

      <section class="promo">
        <div class="container promo__grid">
          <article class="promo-card promo-card--wine">
            <h2>Proč Zverino?
              <span class="promo-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M12 3l2.3 2.3 3.2-.4.4 3.2L20 10l-2.1 1.9-.4 3.2-3.2-.4L12 17l-2.3-2.3-3.2.4-.4-3.2L4 10l2.1-1.9.4-3.2 3.2.4z"/>
                  <path d="M9.5 10.4l1.7 1.7 3.3-3.3"/>
                </svg>
              </span>
            </h2>
            <p>Zverino je místo, kde najdete ověřené chovatele a zdravá zvířata bez zbytečného rizika. Každý chovatel prochází kontrolou identity, u inzerátů ověřujeme čip a zároveň dbáme na dodržování welfare pravidel.</p>
            <p>Díky tomu můžete vybírat s větším klidem, rychleji porovnat nabídky a jednoduše kontaktovat chovatele, vše přehledně na jednom místě.</p>
          </article>

          <article class="promo-card promo-card--orange">
            <h2>Ověření chovatelé pro psy a kočky</h2>
            <p>Najděte prověřené chovatele s důrazem na původ i péči o mazlíčky.</p>
            <a class="btn-primary btn-primary--light" href="#">Seznam chovatelů</a>
          </article>
        </div>
      </section>

      <section class="features">
        <div class="container features__grid">
          <article class="feature-box">
            <div class="feature-box__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <defs>
                  <linearGradient id="featureIconGrad1" x1="12" y1="4" x2="12" y2="20" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#ef8a3b"/>
                    <stop offset="100%" stop-color="#922b3b"/>
                  </linearGradient>
                </defs>
                <path stroke="url(#featureIconGrad1)" d="M12 20s-6.5-3.7-6.5-8.5A3.8 3.8 0 0 1 9.3 7.7c1.2 0 2.1.5 2.7 1.4.6-.9 1.5-1.4 2.7-1.4a3.8 3.8 0 0 1 3.8 3.8C18.5 16.3 12 20 12 20z"/>
                <path stroke="url(#featureIconGrad1)" d="M10.2 12.2l1.3 1.3 2.5-2.5"/>
              </svg>
            </div>
            <h3>Ověření identity</h3>
            <p>Ověřujeme identitu všech chovatelů.</p>
          </article>

          <article class="feature-box">
            <div class="feature-box__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <defs>
                  <linearGradient id="featureIconGrad2" x1="12" y1="4" x2="12" y2="19" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#ef8a3b"/>
                    <stop offset="100%" stop-color="#922b3b"/>
                  </linearGradient>
                </defs>
                <rect stroke="url(#featureIconGrad2)" x="5" y="7" width="14" height="10" rx="2"/>
                <path stroke="url(#featureIconGrad2)" d="M9 7V5m6 2V5m-3 12v2"/>
                <path stroke="url(#featureIconGrad2)" d="M8 10h8m-8 3h4"/>
              </svg>
            </div>
            <h3>Kontrola čipů</h3>
            <p>Každé zvíře musí mít povinný čip.</p>
          </article>

          <article class="feature-box">
            <div class="feature-box__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <defs>
                  <linearGradient id="featureIconGrad3" x1="12" y1="4" x2="12" y2="20" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#ef8a3b"/>
                    <stop offset="100%" stop-color="#922b3b"/>
                  </linearGradient>
                </defs>
                <path stroke="url(#featureIconGrad3)" d="M6.2 11.8c-1.1 0-2-.9-2-2.2s.8-2.5 1.9-2.5 1.9 1.1 1.9 2.5-.8 2.2-1.8 2.2zM10 8.5c-1.1 0-2-.9-2-2.2S8.9 4 10 4s2 1.1 2 2.3-.9 2.2-2 2.2zM14.2 8.5c-1.1 0-2-.9-2-2.2S13.1 4 14.2 4s2 1.1 2 2.3-.9 2.2-2 2.2zM18 11.8c-1.1 0-1.8-.9-1.8-2.2S17 7.1 18.1 7.1 20 8.2 20 9.6s-.9 2.2-2 2.2z"/>
                <path stroke="url(#featureIconGrad3)" d="M12 20c-1.8 0-6-1-6-4.4 0-2.2 1.8-3.8 4.1-3.8 1.1 0 1.7.3 1.9.5.2-.2.8-.5 1.9-.5 2.3 0 4.1 1.6 4.1 3.8C18 19 13.8 20 12 20z"/>
              </svg>
            </div>
            <h3>Welfare pravidla</h3>
            <p>Dodržujeme přísné zásady chovu zvířat.</p>
          </article>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>


