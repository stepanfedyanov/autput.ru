"use strict";
import getVideo from "../../../components/videos.js";

window.addEventListener("DOMContentLoaded", () => {
    //Parallax

    window.addEventListener("scroll", (event) => {
        document.body.style.cssText = `--scrollTop: ${window.scrollY}px`;
    });

    //Videos

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
        poster: "/img/work/skyfort/site/poster-sky-one.png",
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
        poster: "/img/work/skyfort/site/poster-sky-two.png",
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
        poster: "/img/work/skyfort/site/poster-sky-three.png",
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
        poster: "/img/work/skyfort/site/poster-sky-four.png",
    });
});
