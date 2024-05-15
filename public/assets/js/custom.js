/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";


document.addEventListener('DOMContentLoaded', function () {
    const userSelect = document.querySelector('select[name="user_id"]');
    const emailInput = document.getElementById('email');
    const nameInput = document.getElementById('name');

    userSelect.addEventListener('change', function () {
        const selectedOption = userSelect.options[userSelect.selectedIndex];
        const email = selectedOption.getAttribute('data-email');
        const name = selectedOption.getAttribute('data-name');

        emailInput.value = email ? email : '';
        nameInput.value = name ? name : '';
    });
});

