"use strict";

window.addEventListener("DOMContentLoaded", () => {
    //пример моего понимания работы с формой
    const form = document.querySelector(".connection__form");
    const modal = document.querySelector(".modal");
    const modalText = document.querySelector(".modal__text");

    function validate(form) {
        function error(input, label) {
            input.classList.add("error");
            label.classList.add("error_label");
        }

        function unError(input, label) {
            input.classList.remove("error");
            label.classList.remove("error_label");
        }

        let res = true;

        const parentsInput = form.querySelectorAll(".form__field");
        parentsInput.forEach((parent) => {
            const input = parent.querySelector("input");
            const label = parent.querySelector("label");

            input.addEventListener("focus", () => unError(input, label));
            unError(input, label);
            if (input.value === "") {
                error(input, label);
                res = false;
            }
        });

        return res;
    }

    function modalOpen(text, status = true) {
        const p = modal.querySelector("p");
        p.classList.remove("error");
        modal.classList.remove("error");

        if (!status) {
            p.classList.add("error");
            modal.classList.add("error");
        }
        modal.classList.remove("fade");

        modal.classList.add("show");
        modalText.innerHTML = text;
        const modalTimer = setTimeout(modalClose, 3000);
    }

    function modalClose() {
        modal.classList.remove("show");
        modal.classList.add("fade");
    }

    function formProcessing(event) {
        event.preventDefault();
        if (validate(this)) {
            const formData = new FormData(event.target);
            const jsonData = JSON.stringify(Object.fromEntries(formData));

            fetch("/api/form", {
                method: "POST",
                headers: { "Content-Type": "application/json;charset=utf-8" },
                body: jsonData,
            }).then((response) => {
                if (response.ok) {
                    modalOpen("Спасибо. Мы скоро Вам перезвоним");
                } else {
                    modalOpen("Произошла ошибка, повторите позже", false);
                }
            });
        }
    }

    form.addEventListener("submit", formProcessing);
});
