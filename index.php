<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="header__content">
    <img class="header__logo" src="/assets/images/zverino-logo.svg" alt="Zverino logo">
    <nav class="menu">
        <ul class="menu__list">
            <li class="menu__item">
                <a href="#"><img class="menu__item-icon" src="/assets/images/pes-ikona.svg">Psi</a>
            </li>
            <li class="menu__item">
               <a href="#"><img class="menu__item-icon" src="/assets/images/kocka-ikona.svg"> Kočky</a>
            </li>
            <li class="menu__item">
              <a href="#"><img class="menu__item-icon" src="/assets/images/kun-ikona.svg">  Koně</a>
            </li>
        </ul>
       
    </nav>
    <nav class="menu-right">
                <ul class="menu-right__list">

            <li class="menu-right__item menu-right__item--reg">
                <a href="#">Registrovat se</a>
            </li>
                        <li class="menu-right__item">
                <a href="#">Přihlásit se</a>
            </li>
        </ul> 
</nav>
    </div>
</header>
<div class="hphero">
    <img class="hp-hero__image" src="/assets/images/zverino-hero.png">
    <div class="hp-hero__overlay"></div>
    <div class="hp-hero__content">

    <h1 class="hphero__title">
        Hledejte ověřené chovatele<br>
         a zdravá zvířata
    </h1>


    <form class="z-search" action="/search" method="get" role="search" aria-label="Vyhledávání">
  <label class="z-search__label sr-only" for="z-search-input">Vyhledávání</label>

  <div class="z-search__row">
    <svg class="z-search__icon" width="4.5487mm" height="4.5488mm" version="1.1" viewBox="0 0 4.5487 4.5488" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-135.31 -58.051)"><g transform="matrix(.0066146 0 0 .0066146 134.41 63.505)" fill="#2d0d30"><path d="m781.69-136.92-251.23-251.24q-30 24.77-69 38.77t-80.69 14q-102.46 0-173.54-71.07-71.07-71.08-71.07-173.54t71.07-173.54q71.08-71.07 173.54-71.07t173.54 71.07q71.07 71.08 71.07 173.54 0 42.85-14.38 81.85-14.39 39-38.39 67.84l251.23 251.23zm-400.92-258.46q77.31 0 130.96-53.66 53.66-53.65 53.66-130.96t-53.66-130.96q-53.65-53.66-130.96-53.66t-130.96 53.66q-53.66 53.65-53.66 130.96t53.66 130.96q53.65 53.66 130.96 53.66z"/></g></g></svg>

    <input
      class="z-search__input"
      id="z-search-input"
      name="q"
      type="search"
      placeholder="Plemeno, chovatel, lokalita…"
      autocomplete="off"
    />

    <button class="z-search__btn" type="submit">
      Hledat
    </button>
  </div>
</form>

<div class="search-filters" role="group" aria-label="Typ zvířete">
  <div class="search-filters__item">

    <label class="search-filters__option">
      <input class="search-filters__input" type="checkbox" name="type[]" value="dogs">

      <span class="search-filters__text">
      <svg class="search-filters__icon" width="4.2442mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2442 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.52 -123.56)"><g transform="matrix(.0066146 0 0 .0066146 126.47 128.85)" fill="#fff"><path d="m440-160q-17 0-28.5-11.5t-11.5-28.5v-240l-232-296q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42l-232 296v240q0 17-11.5 28.5t-28.5 11.5zm40-308 198-252h-396z"/></g></g></svg>
  
      Psi</span>
    </label>

    <label class="search-filters__option">
      <input class="search-filters__input" type="checkbox" name="type[]" value="cats">

      <span class="search-filters__text">
        <svg class="search-filters__icon" width="4.2442mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2442 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.52 -123.56)"><g transform="matrix(.0066146 0 0 .0066146 126.47 128.85)" fill="#fff"><path d="m440-160q-17 0-28.5-11.5t-11.5-28.5v-240l-232-296q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42l-232 296v240q0 17-11.5 28.5t-28.5 11.5zm40-308 198-252h-396z"/></g></g></svg>

        Kočky</span>
    </label>

    <label class="search-filters__option">
      <input class="search-filters__input" type="checkbox" name="type[]" value="horses">

      <span class="search-filters__text">
       <svg class="search-filters__icon" width="4.2442mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2442 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.52 -123.56)"><g transform="matrix(.0066146 0 0 .0066146 126.47 128.85)" fill="#fff"><path d="m440-160q-17 0-28.5-11.5t-11.5-28.5v-240l-232-296q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42l-232 296v240q0 17-11.5 28.5t-28.5 11.5zm40-308 198-252h-396z"/></g></g></svg>
 
      Koně</span>
    </label>

  </div>

</div>

    </div>
</div>
<main class="main">
<section class="section container">
    <div class="section__subtitle">Aktuálně</div>
    <h2 class="section__title">Nejnovější inzeráty 

<svg class="section__title-icon"width="6.4046mm" height="5.922mm" version="1.1" viewBox="0 0 6.4046 5.922" xmlns="http://www.w3.org/2000/svg">
 <defs>
  <clipPath id="clipPath3">
   <path d="m-119.67 228.15h531.33v-491.3h-531.33z"/>
  </clipPath>
  <clipPath id="clipPath5">
   <path d="m-271.12 249.99h531.33v-491.3h-531.33z"/>
  </clipPath>
  <clipPath id="clipPath8">
   <path d="m-412.47 190.49h531.33v-491.3h-531.33z"/>
  </clipPath>
 </defs>
 <g transform="translate(-141.02 -167.75)">
  <g transform="matrix(.017382 0 0 .017382 147.82 149.77)" fill="#dd6a46">
   <path d="m-223.84 1089.8c10.772 37.16 0.2073 72.88-23.595 79.784-23.802 6.9036-51.841-17.625-62.613-54.781-10.773-37.16-0.2074-72.88 23.586-79.78 23.81-6.9077 51.849 17.62 62.622 54.776"/>
   <path transform="matrix(.69348 0 0 -.69348 -308.14 1192.1)" d="m0 0c24.811-42.315 21.918-90.114-6.47-106.75-28.388-16.649-71.526 4.158-96.324 46.485-24.823 42.309-21.917 90.115 6.483 106.76 28.376 16.645 71.501-4.17 96.311-46.491" clip-path="url(#clipPath3)"/>
   <path transform="matrix(.69348 0 0 -.69348 -203.1 1207.3)" d="m0 0c69.719 0 199.14-151.76 157.24-213.21-41.904-61.453-114.41-2.93-157.24-2.93-42.825 0-115.34-58.523-157.24 2.93-41.903 61.452 87.522 213.21 157.24 213.21" clip-path="url(#clipPath5)"/>
   <path d="m-191.22 1089.8c-10.773 37.16-0.2074 72.88 23.594 79.784 23.803 6.9036 51.841-17.625 62.614-54.781 10.772-37.16 0.2073-72.88-23.587-79.78-23.81-6.9077-51.849 17.62-62.622 54.776"/>
   <path transform="matrix(.69348 0 0 -.69348 -105.09 1166)" d="m0 0c-30.956-38.044-35.383-85.726-9.849-106.49 25.521-20.777 71.327-6.775 102.27 31.287 30.968 38.039 35.382 85.727 9.836 106.5-25.508 20.77-71.302 6.763-102.26-31.294" clip-path="url(#clipPath8)"/>
  </g>
 </g>
</svg>

    
    </h2>
    <div class="card-wrapper">

    <div class="card">
    <div class="card__header">
        <img class="card__image" src="/assets/images/retriever.jpg">
        <div class="card__overlay"></div>
        <div class="card__added">Přidáno před 8 min</div>
    </div>
    <div class="card__body">
        <h3 class="card__title">
            Štěnata zlatého retrívra
        </h3>
        <div class="card__meta">
            <div class="card__meta-item">
<svg class="card__meta-icon" width="3.4396mm" height="4.2333mm" version="1.1" viewBox="0 0 3.4396 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.87 -102.94)"><g transform="matrix(.0055122 0 0 .0055122 126.94 107.7)" fill="#fff"><path d="m531-501q21-21 21-51t-21-51-51-21-51 21-21 51 21 51 51 21 51-21zm-51 310q119-107 179.5-197t60.5-161q0-105-68.5-174t-171.5-69-171.5 69-68.5 174q0 71 60.5 161t179.5 197zm0 95q-157-131-234.5-243.5t-77.5-209.5q0-134 89-224.5t223-90.5q133 0 222.5 90.5t89.5 224.5q0 97-77 209t-235 244z"/></g></g></svg>
   <div class="card__meta-content">
        <span>Praha</span><span>12km</span>
        </div>
    </div>



            <div class="card__meta-item">
<svg class="card__meta-icon" width="4.2333mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2333 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-196.79 -137.33)"><g transform="matrix(.0055122 0 0 .0055122 196.26 142.1)" fill="#fff"><path d="m444-288h72v-240h-72zm61.5-322.29q10.5-10.29 10.5-25.5t-10.29-25.71-25.5-10.5-25.71 10.29-10.5 25.5 10.29 25.71 25.5 10.5 25.71-10.29zm-25.22 514.29q-79.28 0-149.28-30t-122.5-82.5-82.5-122.46-30-149.5 30-149.04 82.5-122 122.46-82.5 149.5-30 149.04 30 122 82.5 82.5 122.22q30 69.73 30 149 0 79.28-30 149.28t-82.5 122.5-122.22 82.5q-69.73 30-149 30zm-0.28-72q130 0 221-91t91-221-91-221-221-91-221 91-91 221 91 221 221 91z"/></g></g></svg>
<div class="card__meta-content">
        <span>8 týdnů</span><span>fena</span><span>s PP</span>
        </div>
    </div>
</div>
    </div>

    <div class="card__footer">
        <div class="card__price">25 000 Kč</div>
        <a class="card__user" href="#">PF
            <svg class="card__verified-icon" width="4.7625mm" height="4.4979mm" version="1.1" viewBox="0 0 4.7625 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-146.82 -105.48)"><g transform="matrix(.0055122 0 0 .0055122 146.55 110.38)" fill="#fff"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57zm82-264 238-237-51-51-187 186-85-84-51 51z"/></g></g></svg>

        </a>
</div>

</div>

 <div class="card">
    <div class="card__header">
        <img class="card__image" src="/assets/images/kocka1.jpg">
        <div class="card__overlay"></div>
         <div class="card__added">Přidáno před 8 min</div>
    </div>
    <div class="card__body">
        <h3 class="card__title">
            Štěnata zlatého retrívra
        </h3>
        <div class="card__meta">
            <div class="card__meta-item">
<svg class="card__meta-icon" width="3.4396mm" height="4.2333mm" version="1.1" viewBox="0 0 3.4396 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.87 -102.94)"><g transform="matrix(.0055122 0 0 .0055122 126.94 107.7)" fill="#fff"><path d="m531-501q21-21 21-51t-21-51-51-21-51 21-21 51 21 51 51 21 51-21zm-51 310q119-107 179.5-197t60.5-161q0-105-68.5-174t-171.5-69-171.5 69-68.5 174q0 71 60.5 161t179.5 197zm0 95q-157-131-234.5-243.5t-77.5-209.5q0-134 89-224.5t223-90.5q133 0 222.5 90.5t89.5 224.5q0 97-77 209t-235 244z"/></g></g></svg>
   <div class="card__meta-content">
        <span>Praha</span><span>12km</span>
        </div>
    </div>



            <div class="card__meta-item">
<svg class="card__meta-icon" width="4.2333mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2333 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-196.79 -137.33)"><g transform="matrix(.0055122 0 0 .0055122 196.26 142.1)" fill="#fff"><path d="m444-288h72v-240h-72zm61.5-322.29q10.5-10.29 10.5-25.5t-10.29-25.71-25.5-10.5-25.71 10.29-10.5 25.5 10.29 25.71 25.5 10.5 25.71-10.29zm-25.22 514.29q-79.28 0-149.28-30t-122.5-82.5-82.5-122.46-30-149.5 30-149.04 82.5-122 122.46-82.5 149.5-30 149.04 30 122 82.5 82.5 122.22q30 69.73 30 149 0 79.28-30 149.28t-82.5 122.5-122.22 82.5q-69.73 30-149 30zm-0.28-72q130 0 221-91t91-221-91-221-221-91-221 91-91 221 91 221 221 91z"/></g></g></svg>
<div class="card__meta-content">
        <span>8 týdnů</span><span>fena</span><span>s PP</span>
        </div>
    </div>
</div>
    </div>

    <div class="card__footer">
        <div class="card__price">25 000 Kč</div>
        <a class="card__user" href="#">RCH
            <svg class="card__verified-icon" width="4.7625mm" height="4.4979mm" version="1.1" viewBox="0 0 4.7625 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-146.82 -105.48)"><g transform="matrix(.0055122 0 0 .0055122 146.55 110.38)" fill="#fff"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57zm82-264 238-237-51-51-187 186-85-84-51 51z"/></g></g></svg>

        </a>
</div>

</div>


 <div class="card">
    <div class="card__header">
        <img class="card__image" src="/assets/images/kun1.jpg">
        <div class="card__overlay"></div>
         <div class="card__added">Přidáno před 8 min</div>
    </div>
    <div class="card__body">
        <h3 class="card__title">
            Štěnata zlatého retrívra
        </h3>
        <div class="card__meta">
            <div class="card__meta-item">
<svg class="card__meta-icon" width="3.4396mm" height="4.2333mm" version="1.1" viewBox="0 0 3.4396 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.87 -102.94)"><g transform="matrix(.0055122 0 0 .0055122 126.94 107.7)" fill="#fff"><path d="m531-501q21-21 21-51t-21-51-51-21-51 21-21 51 21 51 51 21 51-21zm-51 310q119-107 179.5-197t60.5-161q0-105-68.5-174t-171.5-69-171.5 69-68.5 174q0 71 60.5 161t179.5 197zm0 95q-157-131-234.5-243.5t-77.5-209.5q0-134 89-224.5t223-90.5q133 0 222.5 90.5t89.5 224.5q0 97-77 209t-235 244z"/></g></g></svg>
   <div class="card__meta-content">
        <span>Praha</span><span>12km</span>
        </div>
    </div>



            <div class="card__meta-item">
<svg class="card__meta-icon" width="4.2333mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2333 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-196.79 -137.33)"><g transform="matrix(.0055122 0 0 .0055122 196.26 142.1)" fill="#fff"><path d="m444-288h72v-240h-72zm61.5-322.29q10.5-10.29 10.5-25.5t-10.29-25.71-25.5-10.5-25.71 10.29-10.5 25.5 10.29 25.71 25.5 10.5 25.71-10.29zm-25.22 514.29q-79.28 0-149.28-30t-122.5-82.5-82.5-122.46-30-149.5 30-149.04 82.5-122 122.46-82.5 149.5-30 149.04 30 122 82.5 82.5 122.22q30 69.73 30 149 0 79.28-30 149.28t-82.5 122.5-122.22 82.5q-69.73 30-149 30zm-0.28-72q130 0 221-91t91-221-91-221-221-91-221 91-91 221 91 221 221 91z"/></g></g></svg>
<div class="card__meta-content">
        <span>8 týdnů</span><span>fena</span><span>s PP</span>
        </div>
    </div>
</div>
    </div>

    <div class="card__footer">
        <div class="card__price">25 000 Kč</div>
        <a class="card__user" href="#">OD
            <svg class="card__verified-icon" width="4.7625mm" height="4.4979mm" version="1.1" viewBox="0 0 4.7625 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-146.82 -105.48)"><g transform="matrix(.0055122 0 0 .0055122 146.55 110.38)" fill="#fff"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57zm82-264 238-237-51-51-187 186-85-84-51 51z"/></g></g></svg>

        </a>
</div>

</div>


 <div class="card">
    <div class="card__header">
        <img class="card__image" src="/assets/images/pes1.jpg">
        <div class="card__overlay"></div>
         <div class="card__added">Přidáno před 2 týdny</div>
    </div>
    <div class="card__body">
        <h3 class="card__title">
            Štěnata zlatého retrívra
        </h3>
        <div class="card__meta">
            <div class="card__meta-item">
<svg class="card__meta-icon" width="3.4396mm" height="4.2333mm" version="1.1" viewBox="0 0 3.4396 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-127.87 -102.94)"><g transform="matrix(.0055122 0 0 .0055122 126.94 107.7)" fill="#fff"><path d="m531-501q21-21 21-51t-21-51-51-21-51 21-21 51 21 51 51 21 51-21zm-51 310q119-107 179.5-197t60.5-161q0-105-68.5-174t-171.5-69-171.5 69-68.5 174q0 71 60.5 161t179.5 197zm0 95q-157-131-234.5-243.5t-77.5-209.5q0-134 89-224.5t223-90.5q133 0 222.5 90.5t89.5 224.5q0 97-77 209t-235 244z"/></g></g></svg>
   <div class="card__meta-content">
        <span>Praha</span><span>12km</span>
        </div>
    </div>



            <div class="card__meta-item">
<svg class="card__meta-icon" width="4.2333mm" height="4.2333mm" version="1.1" viewBox="0 0 4.2333 4.2333" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-196.79 -137.33)"><g transform="matrix(.0055122 0 0 .0055122 196.26 142.1)" fill="#fff"><path d="m444-288h72v-240h-72zm61.5-322.29q10.5-10.29 10.5-25.5t-10.29-25.71-25.5-10.5-25.71 10.29-10.5 25.5 10.29 25.71 25.5 10.5 25.71-10.29zm-25.22 514.29q-79.28 0-149.28-30t-122.5-82.5-82.5-122.46-30-149.5 30-149.04 82.5-122 122.46-82.5 149.5-30 149.04 30 122 82.5 82.5 122.22q30 69.73 30 149 0 79.28-30 149.28t-82.5 122.5-122.22 82.5q-69.73 30-149 30zm-0.28-72q130 0 221-91t91-221-91-221-221-91-221 91-91 221 91 221 221 91z"/></g></g></svg>
<div class="card__meta-content">
        <span>8 týdnů</span><span>fena</span><span>s PP</span>
        </div>
    </div>
</div>
    </div>

    <div class="card__footer">
        <div class="card__price">25 000 Kč</div>
        <a class="card__user" href="#">JN
            <svg class="card__verified-icon" width="4.7625mm" height="4.4979mm" version="1.1" viewBox="0 0 4.7625 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-146.82 -105.48)"><g transform="matrix(.0055122 0 0 .0055122 146.55 110.38)" fill="#fff"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57zm82-264 238-237-51-51-187 186-85-84-51 51z"/></g></g></svg>

        </a>
</div>

</div>








    

    </div>
    </section>
    <section class="section container">
    <div class="section__subtitle">Jak to funguje</div>
    <h2 class="section__title">Proč Zverino?
            </section>
</main>
</body>

<footer>
    
</footer>