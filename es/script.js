const $ = (selector) => document.querySelector(selector);
const $$ = (selector) => document.querySelectorAll(selector);

const $header = $('.header');
const $navItems = $$('.header__nav a');
const $toggleMenu = $('#toggle-menu');
const $overlay = $('.overlay');

const $aboutBtns = $$('.about__description--btn');
const $aboutTexts = $$('.about__description--text');

const $languageToggle = $('.language-toggle');
const $languageDropdown = $('.language-dropdown');
const $languageOptions = $$('.language-option');

const toggleMenu = () => {
  $toggleMenu.checked = !$toggleMenu.checked;
};

const toggleAbout = (index) => {
  $aboutBtns.forEach((btn, i) => {
    btn.classList.remove('active');
    if (i === index) {
      btn.classList.add('active');
    }
  });
  $aboutTexts.forEach((text, i) => {
    text.classList.add('hidden');
    if (i === index) {
      text.classList.remove('hidden');
    }
  });
};

$navItems.forEach((item) => {
  item.addEventListener('click', toggleMenu);
});

$overlay.addEventListener('click', toggleMenu);

$aboutBtns.forEach((btn, i) => {
  btn.addEventListener('click', () => toggleAbout(i));
});

document.addEventListener("scroll", (event) => {
  if (window.scrollY > 0) {
    $header.style.backgroundColor = '#ffffff';
    $header.style.color = 'var(--color-tertiary)';
    $header.style.boxShadow = '0 0 8px rgba(0, 0, 0, 0.5)';
    $('.header .toggle').style.color = 'var(--color-tertiary)';
    return;
  }
  $header.style.backgroundColor = 'transparent';
  $header.style.color = '#ffffff';
  $header.style.boxShadow = 'none';
  $('.header .toggle').style.color = '#ffffff';
})

$languageToggle.addEventListener('click', function() {
  $languageDropdown.classList.toggle('active');
});

$languageOptions.forEach(option => {
  option.addEventListener('click', function() {
    $languageOptions.forEach(opt => opt.classList.remove('active'));
    this.classList.add('active');
    $languageToggle.textContent = this.textContent.slice(0, 2).toUpperCase();
    $languageDropdown.classList.remove('active');
    const selectedLang = this.getAttribute('data-lang');

    if(selectedLang === 'es') {
      window.location.href = '/es';
    } else {
      window.location.href = '/';
    }
  });
});

document.addEventListener('click', function(event) {
  if (!$languageDropdown.contains(event.target) && !$languageToggle.contains(event.target)) {
    $languageDropdown.classList.remove('active');
  }
});