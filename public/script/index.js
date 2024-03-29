"use strict";

window.addEventListener("DOMContentLoaded", () => {
    const subTitle = document.querySelectorAll(".anim_h1");
    const name = ["сервиса", "сайта", "приложения", "бизнес решения"];

    let titles = [
        {
            pos: 4,
            name: name[0],
        },
        {
            pos: 3,
            name: name[1],
        },
        {
            pos: 2,
            name: name[2],
        },
        {
            pos: 1,
            name: name[3],
        },
    ];

    const parent = document.querySelector(".parent");

    function createElement(obj) {
        const element = document.createElement("h1");
        element.setAttribute(
            "class",
            "first-screen__title title__first left anim_h1"
        );

        if (obj.pos === 4) {
            //  element.classList.add("fade_title");
            element.classList.add("moveUpSec");
        } else {
            element.classList.add("gray");
        }

        if (obj.pos === 3) {
            element.classList.add("moveUp");
        }

        if (obj.pos === 2) {
            element.classList.add("moveUp");
        }

        if (obj.pos === 1) {
            element.classList.add("show_title");
        }

        element.innerHTML = `${obj.name}`;

        return element;
    }

    function render() {
        parent.innerHTML = "";

        titles.forEach((obj) => {
            parent.append(createElement(obj));
        });
    }

    setInterval(() => {
        let deletedName;
        const tmpArr = [];

        titles.forEach((obj) => {
            if (obj.pos === 4) {
                deletedName = obj.name;
            } else {
                tmpArr.push({
                    ...obj,
                    pos: obj.pos + 1,
                });
            }
        });

        titles = [...tmpArr];
        titles.push({
            pos: 1,
            name: deletedName,
        });
        parent.classList.add("parent_trans");
        render();
    }, 2000);
});
