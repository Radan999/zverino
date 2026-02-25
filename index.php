<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="header__content">
    <img class="header__logo" src="assets/images/zverino-logo.svg" alt="Zverino logo">
    <nav class="menu">
        <ul class="menu__list">
            <li class="menu__item">
                <a href="#"><img class="menu__item-icon" src="assets/images/pes-ikona.svg">Psi</a>
            </li>
            <li class="menu__item">
               <a href="#"><img class="menu__item-icon" src="assets/images/kocka-ikona.svg"> Kočky</a>
            </li>
            <li class="menu__item">
              <a href="#"><img class="menu__item-icon" src="assets/images/kun-ikona.svg">  Koně</a>
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
    <img class="hp-hero__image" src="assets/images/zverino-hero.png">
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
      <input class="search-filters__input" type="checkbox" name="type[]" value="dogs" checked>

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
    <div class="section__subtitle section__subtitle--center">Aktuálně</div>
    <h2 class="section__title section__title--center">Nejnovější inzeráty 

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
        <img class="card__image" src="assets/images/retriever.jpg">
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
        <span>Praha</span><span>12 km</span>
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
        <img class="card__image" src="assets/images/kocka1.jpg">
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
        <span>Praha</span><span>12 km</span>
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
        <img class="card__image" src="assets/images/kun1.jpg">
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
        <span>Praha</span><span>12 km</span>
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
        <div class="card__price">10 000 Kč</div>
        <a class="card__user" href="#">OD
            <svg class="card__verified-icon" width="4.7625mm" height="4.4979mm" version="1.1" viewBox="0 0 4.7625 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-146.82 -105.48)"><g transform="matrix(.0055122 0 0 .0055122 146.55 110.38)" fill="#fff"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57zm82-264 238-237-51-51-187 186-85-84-51 51z"/></g></g></svg>

        </a>
</div>

</div>


 <div class="card">
    <div class="card__header">
        <img class="card__image" src="assets/images/pes1.jpg">
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
        <span>Praha</span><span>12 km</span>
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
    <button class="btn-green btn-center" type="button" style="margin-top:24px;">Zobrazit všechny inzeráty</button>
    </section>
    <div class="separator"></div>
    <section class="section section--columns container">
        <div class="section__left">
        <div class="section__subtitle">Jak to funguje</div>
    <h2 class="section__title">Proč Zverino?</h2>

    <p>Zverino je místo, kde najdete ověřené chovatele a zdravá zvířata bez zbytečného rizika. Každý chovatel prochází kontrolou identity, u inzerátů ověřujeme čip a základní zdravotní informace a zároveň dbáme na dodržování welfare pravidel. </p>
        <p>Díky tomu můžete vybírat s větším klidem, rychleji porovnat nabídky a jednoduše kontaktovat chovatele – vše přehledně na jednom místě.</p>

    <button class="btn-green" type="button" style="margin-top:24px;"><svg width="19" height="19" version="1.1" viewBox="0 0 5.0271 5.0271" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-123.22 -67.807)"><g transform="matrix(.0066146 0 0 .0066146 122.56 73.495)" fill="#fff"><path d="m450-290h60v-160h160v-60h-160v-160h-60v160h-160v60h160zm30.07 190q-78.84 0-148.21-29.92t-120.68-81.21-81.25-120.63q-29.93-69.34-29.93-148.17 0-78.84 29.92-148.21t81.21-120.68 120.63-81.25q69.34-29.93 148.17-29.93 78.84 0 148.21 29.92t120.68 81.21 81.25 120.63q29.93 69.34 29.93 148.17 0 78.84-29.92 148.21t-81.21 120.68-120.63 81.25q-69.34 29.93-148.17 29.93z"/></g></g></svg>

    Přidat inzerát</button>
        </div>
        <div class="section__right">
            <ul class="list-checkmark">
                <li class="list-checkmark__item">
                <h3 class="list-checkmark__title">Ověření identity</h3>
                <p class="list-checkmark__desc">Každý uživatel je u nás vždy ověřen.</p>
                </li>

                                <li class="list-checkmark__item">
                <h3 class="list-checkmark__title">Kontrola čipů</h3>
                <p class="list-checkmark__desc">Každé zvíře musí mít povinný čip.</p>
                </li>

                                                <li class="list-checkmark__item">
                <h3 class="list-checkmark__title">Zdravotní testy</h3>
                <p class="list-checkmark__desc">Prověřujeme zdravotní stav každého zvířete</p>
                </li>

                                                                <li class="list-checkmark__item">
                <h3 class="list-checkmark__title">Welfare pravidla</h3>
                <p class="list-checkmark__desc">Dodržujeme přísné zásady chovu zvířat.</p>
                </li>
            </ul>

                <img class="why-zverino" src="assets/images/proc-zverino.png">
        </div>
 
            </section>
</main>


<footer class="footer">
    <div class="footer__content container">
         <div class="footer__column">
    <img class="header__logo" width="147" height="40" src="assets/images/zverino-logo.svg" alt="Zverino logo">
                <p>Databáze ověřených chovatelů a zdravých zvířat.</p>
            </div>
<div class="footer__columns">

    <div class="footer__column">
     <h3 class="footer__subtitle-title">Kategorie</h3>

  
      <ul id="footer-list-2" class="footer__list">
        <li class="footer__list-item">
          <a class="footer__link" href="#">Psy</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Kočky</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Koně</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Všechny inzeráty</a>
        </li>
      </ul>
    </div>

    <div class="footer__column">
      <h3 class="footer__subtitle-title">Informace</h3>

 
      <ul id="footer-list-3" class="footer__list">
        <li class="footer__list-item">
          <a class="footer__link" href="#">Jak to funguje</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Ověření chovatelů</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Nápověda</a>
        </li>
      </ul>
    </div>

    <div class="footer__column">
        <h3 class="footer__subtitle-title">Dokumenty</h3>
  
      <ul id="footer-list-4" class="footer__list">
        <li class="footer__list-item">
          <a class="footer__link" href="#">Obchodní podmínky</a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Zásady ochrany osobních ůdajů</a></a>
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#">Nastavení cookies</a>
        </li>

      </ul>
    </div> 

        <div class="footer__column">
        <h3 class="footer__subtitle-title">Kontakt</h3>
  
      <ul id="footer-list-4" class="footer__list">
        <li class="footer__list-item">
          <a class="footer__link" href="#"><svg width="20" height="15.789" version="1.1" viewBox="0 0 5.2917 4.1776" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-112.38 -98.295)"><g transform="matrix(.0069627 0 0 .0069627 111.68 103.73)" fill="#fff"><path d="m172.31-180q-30.31 0-51.31-21t-21-51.31v-455.38q0-30.31 21-51.31t51.31-21h615.38q30.31 0 51.31 21t21 51.31v455.38q0 30.31-21 51.31t-51.31 21zm307.69-277.69 320-204.62-6.15-57.69-313.85 200-313.85-200-6.15 57.69z"/></g></g></svg>
</a> info@zverino.cz
        </li>
        <li class="footer__list-item">
          <a class="footer__link" href="#"><svg width="17" height="17" version="1.1" viewBox="0 0 4.4979 4.4979" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-115.68 -89.167)"><g transform="matrix(.0066146 0 0 .0066146 114.76 94.591)" fill="#fff"><path d="m777.61-140q-113.07 0-227.19-52.58-114.11-52.58-209.88-148.34-95.38-95.77-147.96-209.7-52.58-113.92-52.58-226.99 0-18 12-30.2 12-12.19 30-12.19h130.46q15.15 0 26.73 9.89 11.58 9.88 14.73 24.42l22.93 117.69q2.38 16.38-1 28.15-3.39 11.77-12.16 19.77l-92.38 89.93q22.3 40.84 50.96 77.27 28.65 36.42 62.04 69.57 32.92 32.93 70 61.16t80.08 52.54l89.76-90.54q9.39-9.77 22.74-13.7 13.34-3.92 27.73-1.92l111.07 22.62q15.15 4 24.73 15.46t9.58 26v129.69q0 18-12.19 30-12.2 12-30.2 12z"/></g></g></svg>
</a> +420 123 456 789
        </li>


      </ul>
    </div> 
  </div>

  
</div>

  <div class="footer__copyright container">
  <div class="footer__copyright__content">
    
© 2026 Zverino
  </div>  
   </div>  
</footer>

</body>


<script>
 (() => {
  const el = document.querySelector(".why-zverino");
  if (!el) return;

  const clamp = (v, min, max) => Math.max(min, Math.min(max, v));
  const MAX_DEG = 4; // kolik stupňů max

  const onScroll = () => {
    const r = el.getBoundingClientRect();
    const vh = window.innerHeight;

    // -1..1 (0 = střed obrazovky)
    const center = r.top + r.height / 2;
    const n = clamp((center - vh / 2) / (vh / 2), -1, 1);

    // rotace podle pozice
    el.style.transform = `rotate(${n * MAX_DEG}deg)`;
  };

  // první výpočet + poslouchat scroll/resize
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll);
})();
</script>