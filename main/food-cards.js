(() => {
  'use strict';

  const stage = document.querySelector('.food-background');
  const dishes = [...document.querySelectorAll('[data-dish]')];
  const copies = [...document.querySelectorAll('[data-card]')];
  const card = document.getElementById('info-card');
  const controls = document.querySelector('.card-controls');
  const start = document.getElementById('start-tour');
  const heading = document.getElementById('page-title');
  const status = document.getElementById('card-status');
  const counter = document.getElementById('card-counter');
  const names = ['Pizza', 'Pasta', 'Steak', 'Pho', 'Cordon bleu', 'Stir-fry', 'Chicken and fries'];
  const returnTimers = new Map();
  let activeIndex = -1;

  function returnDish(dish) {
    dish.classList.remove('is-active');
    dish.classList.add('is-returning');
    dish.setAttribute('aria-pressed', 'false');
    clearTimeout(returnTimers.get(dish));
    returnTimers.set(dish, setTimeout(() => {
      dish.classList.remove('is-returning');
      returnTimers.delete(dish);
    }, 800));
  }

  function showCard(index) {
    const nextIndex = (index + dishes.length) % dishes.length;
    if (nextIndex === activeIndex) return;
    if (activeIndex !== -1) returnDish(dishes[activeIndex]);
    activeIndex = nextIndex;

    const selected = dishes[activeIndex];
    clearTimeout(returnTimers.get(selected));
    returnTimers.delete(selected);
    selected.classList.remove('is-returning');
    selected.classList.add('is-active');
    selected.setAttribute('aria-pressed', 'true');

    copies.forEach(copy => {
      const isCurrent = copy.dataset.card === selected.dataset.dish;
      copy.classList.toggle('is-current', isCurrent);
      copy.setAttribute('aria-hidden', String(!isCurrent));
      copy.inert = !isCurrent;
      if (isCurrent) copy.scrollTop = 0;
    });

    stage.classList.add('is-open');
    card.inert = false;
    card.setAttribute('aria-hidden', 'false');
    controls.hidden = false;
    start.tabIndex = -1;
    heading.setAttribute('aria-hidden', 'true');
    counter.textContent = `${activeIndex + 1} / ${dishes.length}`;
    status.textContent = `${names[activeIndex]}, card ${activeIndex + 1} of ${dishes.length}.${selected.dataset.dish === 'steak' ? ' Content will be added later.' : ''}`;
  }

  function closeCards() {
    if (activeIndex === -1) return;
    returnDish(dishes[activeIndex]);
    activeIndex = -1;
    stage.classList.remove('is-open');
    card.inert = true;
    card.setAttribute('aria-hidden', 'true');
    controls.hidden = true;
    copies.forEach(copy => {
      copy.classList.remove('is-current');
      copy.setAttribute('aria-hidden', 'true');
      copy.inert = true;
    });
    heading.removeAttribute('aria-hidden');
    start.tabIndex = 0;
    status.textContent = 'All dishes. Choose a dish to explore.';
    start.focus({ preventScroll: true });
  }

  dishes.forEach((dish, index) => dish.addEventListener('click', () => {
    showCard(index === activeIndex ? activeIndex + 1 : index);
  }));
  start.addEventListener('click', () => {
    showCard(0);
    document.getElementById('next-dish').focus({ preventScroll: true });
  });
  card.addEventListener('click', () => {
    // Let readers select text without unexpectedly changing cards.
    if (window.getSelection()?.toString()) return;
    showCard(activeIndex + 1);
  });
  document.getElementById('next-dish').addEventListener('click', () => showCard(activeIndex + 1));
  document.getElementById('previous-dish').addEventListener('click', () => showCard(activeIndex - 1));
  document.getElementById('close-tour').addEventListener('click', closeCards);
  document.addEventListener('keydown', event => {
    if (activeIndex === -1 || event.altKey || event.ctrlKey || event.metaKey || event.shiftKey) return;
    if (event.key === 'Escape') { event.preventDefault(); closeCards(); }
    if (event.key === 'ArrowRight') { event.preventDefault(); showCard(activeIndex + 1); }
    if (event.key === 'ArrowLeft') { event.preventDefault(); showCard(activeIndex - 1); }
  });
})();
