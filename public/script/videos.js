"use strict";

function getVideo({ urlSite, nameSite, url, parentSelector }) {
  // Еще – что-то у тебя со стилями текста в video-decoration__link
  // в макете он меньше и слегка серого цвета
  // у тебя сильно больше

  const parent = document.querySelector(parentSelector);
  const videoSources = [];

  url.forEach((videoSource) => {
    videoSources.push(
      `<source src="${videoSource.src}" type="${videoSource.type}" />`
    );
  });

  parent.innerHTML = `
    <div class="video-decoration">
      <div class="video-decoration__dots">
        <div class="video-decoration__dot"></div>
        <div class="video-decoration__dot"></div>
        <div class="video-decoration__dot"></div>
      </div>

      <div class="video-decoration__link">
        <a target="_blank" href="${urlSite}">${nameSite}</a>
      </div>
    </div>

    
    <video autoplay loop playsinline muted width="100%">
      ${videoSources.join(" ")}
    </video>
    `;

  /* const parent = document.querySelector(parentSelector);
  const video = document.createElement("video");

  video.setAttribute("autoplay", true);
  video.setAttribute("loop", true);
  video.setAttribute("playsinline", true);
  video.setAttribute("muted", true);
  video.setAttribute("width", "100%");

  url.forEach((videoSource) => {
    const source = document.createElement("source");
    source.setAttribute("src", `${videoSource.src}`);
    source.setAttribute("type", `${videoSource.type}`);
    video.appendChild(source);
  });

  parent.append(video); */
}

export default getVideo;
