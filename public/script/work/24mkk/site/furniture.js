"use strict";
import getVideo from "../../../components/videos.js";

window.addEventListener("DOMContentLoaded", () => {
    getVideo({
        urlSite: "https://24mkk.ru/",
        nameSite: "24mkk.ru",
        url: [
            {
                src: "/video/vidFur/mkk-1.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidFur/mkk-1.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".about__video-wrapper",
        poster: "/img/work/24mkk/site/poster-fur-one.png",
    });

    getVideo({
        urlSite: "https://24mkk.ru/",
        nameSite: "24mkk.ru",
        url: [
            {
                src: "/video/vidFur/mkk-2.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidFur/mkk-2.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".optimization__video-wrapper",
        poster: "/img/work/24mkk/site/poster-fur-two.png",
    });
});
