import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import.meta.glob(['../svg/**', ]);
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


document.addEventListener('DOMContentLoaded', function() {
    var introElements = document.querySelectorAll('.intro');
    for (var i = 0; i < introElements.length; i++) {
      introElements[i].classList.add('go');
    }

    var reloadButton = document.querySelector('.reload');
    reloadButton.addEventListener('click', function() {
      for (var i = 0; i < introElements.length; i++) {
        introElements[i].classList.remove('go');
      }

      setTimeout(function() {
        for (var i = 0; i < introElements.length; i++) {
          introElements[i].classList.add('go');
        }
      }, 200);
    });
  });
