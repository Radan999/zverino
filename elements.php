<?php
$pageTitle = 'Zverino | Elements';
require __DIR__ . '/includes/header.php';
?>
<style>
  body {
    padding: 32px 0 64px;
  }

  .elements-lab {
    display: grid;
    gap: 32px;
  }

  .elements-lab__section {
    display: grid;
    gap: 18px;
    padding: 24px;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 16px 32px rgba(92, 56, 48, 0.08);
  }

  .elements-lab__section h2 {
    margin: 0;
    font-family: "DM Sans", sans-serif;
    font-size: 1.5rem;
    color: #7a1d2b;
  }

  .elements-lab__section p {
    margin: 0;
    color: #7c625b;
    line-height: 1.5;
  }

  .elements-lab__stack {
    display: grid;
    gap: 14px;
    justify-items: start;
  }
</style>
<main class="main container elements-lab">
  <section class="elements-lab__section">
    <h2>Tlačítka</h2>
    <p>Izolovaný přehled aktuálních variant tlačítek pro rychlé ladění stylů.</p>
    <div class="elements-lab__stack">
      <a class="btn-primary" href="#">btn-primary</a>
      <a class="btn-primary btn-primary--light" href="#">btn-primary--light</a>
      <a class="btn-primary btn-primary--outline" href="#">btn-primary--outline</a>
      <a class="btn-secondary" href="#">btn-secondary</a>
      <a class="btn-secondary btn-secondary--light" href="#">btn-secondary--light</a>
      <a class="btn-secondary btn-secondary--outline" href="#">btn-secondary--outline</a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>

