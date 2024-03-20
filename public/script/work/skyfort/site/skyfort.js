"use strict";
import getVideo from "../../../components/videos.js";

window.addEventListener("DOMContentLoaded", () => {
    const title = document.querySelector("#sky_title");
    const bilds = document.querySelector(".first-screen__bilds");

    document.addEventListener("scroll", function () {
        let value = window.scrollY;
        title.style.marginTop = value * 1.1 + "px";
        bilds.style.marginTop = value * 0.7 + "px";
        //title.style.opacity = value;
    });

    getVideo({
        urlSite: "https://skyfort.capital",
        nameSite: "skyfort.capital",
        url: [
            {
                src: "/video/vidSky/skyfort-first-scroll.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidSky/skyfort-first-scroll.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".about__video-wrapper",
    });

    getVideo({
        urlSite: "https://skyfort.capital",
        nameSite: "skyfort.capital",
        url: [
            {
                src: "/video/vidSky/skyfort-launchpad.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidSky/skyfort-launchpad.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".details__video-wrapper_one",
    });

    getVideo({
        urlSite: "https://skyfort.capital",
        nameSite: "skyfort.capital",
        url: [
            {
                src: "/video/vidSky/skyfort-sliders-animation.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidSky/skyfort-sliders-animation.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".details__video-wrapper_two",
    });

    getVideo({
        urlSite: "https://skyfort.capital",
        nameSite: "skyfort.capital",
        url: [
            {
                src: "/video/vidSky/skyfort-3d.webm",
                type: "video/webm",
            },
            {
                src: "/video/vidSky/skyfort-3d.mp4",
                type: "video/mp4",
            },
        ],
        parentSelector: ".graphics__video-wrapper",
    });
});
