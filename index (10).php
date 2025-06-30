<?php
// Atur header agar tidak cache
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   cover-Terataitube | Teratai
  </title>
      <meta name="google-site-verification" content="WZajMSIeF_MluDeNdsK0ys1tVhH0FlREsU69THHWF28" />
  <meta name="facebook-domain-verification" content="hagb6gpl86jhzqes5q7g9khk7ueslx" />
  <!-- Ikon dan Apple Touch Icon -->
<link href="https://teratai.great-site.net/images/icon-teratai.ico" rel="icon" type="image/x-icon" />
<link href="https://teratai.great-site.net/images/icon-teratai.ico" rel="apple-touch-icon" />

<!-- Metadata Umum -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="Fendi S." />
<meta name="description" content="Media Player Online untuk memutar video YouTube tanpa iklan. Masukkan ID atau link video YouTube dan nikmati pemutaran otomatis. Cari konten YouTube langsung di halaman ini." />
<meta name="keywords" content="media player online, pemutar video youtube, tanpa iklan, youtube player, putar youtube tanpa iklan, cari video youtube" />
<meta name="google-site-verification" content="WZajMSIeF_MluDeNdsK0ys1tVhH0FlREsU69THHWF28" />
<!-- Open Graph (OG) untuk Preview di Sosial Media -->
<meta property="og:title" content="Media Player Online - Putar Video YouTube Tanpa Iklan | Teratai" />
<meta property="og:description" content="Media Player Online untuk memutar video YouTube tanpa iklan. Masukkan ID atau link video YouTube dan nikmati pemutaran otomatis. Cari konten YouTube langsung di halaman ini." />
<meta property="og:url" content="https://teratai.great-site.net" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://teratai.great-site.net/images/icon-teratai.ico" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Media Player Online - Putar Video YouTube Tanpa Iklan | Teratai" />
<meta name="twitter:description" content="Media Player Online untuk memutar video YouTube tanpa iklan. Masukkan ID atau link video YouTube dan nikmati pemutaran otomatis. Cari konten YouTube langsung di halaman ini." />
<meta name="twitter:image" content="https://teratai.great-site.net/images/icon-teratai.ico" />
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
  		* {
			user-select: none;
			-webkit-user-drag: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
		}
   body {
    font-family: cursive;
   }
   /* Neon glowing green text effect */
   .neon-text {
    color: #39ff00; /* green neon */
    text-shadow: 0 0 5px #39ff00, 0 0 10px #39ff00, 0 0 20px #39ff00, 0 0 40px #39ff00;
    transition: color 0.3s ease;
    cursor: pointer;
    user-select: none;
   }
   .neon-text:hover {
    color: red;
    text-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red, 0 0 40px red;
   }
   .neon-text:active {
    transform: translateY(2px);
   }
   /* Neon glowing white text effect */
   .neon-white-text {
    color: #ffffff !important;
    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 40px #ffffff;
    transition: color 0.3s ease;
    cursor: default;
    user-select: text;
    position: relative;
    z-index: 10;
   }
   .cuaca {
    position: fixed;
    top: 5px;
    right: 2.9%;
    left: 2.9%;
    padding: 2px 10px;
    border: 2px solid #3e2c23;
    border-radius: 10px;
    box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.5);
    background-color: #a27c6f;
    font-family: cursive;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: pulse1 1s infinite ease-in-out;
    gap: 0.75rem;
  }
  .cuaca img {
    width: 50px;
    height: 50px;
    margin: 0;
    border-radius: 50%;
    filter: drop-shadow(0 0 5px #fff) drop-shadow(0 0 10px #fff) drop-shadow(0 0 20px #fff) drop-shadow(0 0 40px #fff);
    position: relative;
    z-index: 10;
  }
  .cuaca-info {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    position: relative;
    z-index: 10;
    margin: 0;
  }
  .cuaca-info .h3,
  .cuaca-info .p {
    font-size: 12px;
    margin: 0;
    text-align: center;
    color: var(--text);
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #fff, 0 0 40px #fff, 0 0 80px #fff;
  }
  .weather-span {
    color: #ffffff !important;
    text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 40px #ffffff;
    position: relative;
    z-index: 10;
    font-size: 12px;
    margin: 0 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  @keyframes pulse1 {
    0%,
    100% {
     transform: scale(1.05);
    }
   }
   /* Button press effect */
   .btn-pressable {
    transition: transform 0.1s ease, box-shadow 0.1s ease;
   }
   .btn-pressable:active {
    transform: translateY(3px);
    box-shadow: none;
   }
   /* Additional spacing between weather and button */
   .weather-button-spacing {
    margin-top: 90px; /* Adjust as needed */
   }
   /* Block copy, cut, paste, context menu, and screenshot except input */
   body, body *:not(input):not(textarea) {
    -webkit-user-select: none !important;
    -moz-user-select: none !important;
    -ms-user-select: none !important;
    user-select: none !important;
   }
   input, textarea {
    -webkit-user-select: text !important;
    -moz-user-select: text !important;
    -ms-user-select: text !important;
    user-select: text !important;
   }
   /* Clamp lines for video titles */
   .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
   }
  </style>
 </head>
 <body class="bg-[#3f2a21] min-h-screen flex flex-col items-center justify-between p-4">
  <!-- Top bar -->
  <div class="cuaca">
   <div class="cuaca-info">
    <img alt="Weather icon" class="w-8 h-8" height="32" id="weather-icon" src="https://storage.googleapis.com/a1aa/image/b88f756e-fd4b-4686-8d56-a76d7b06c55f.jpg" width="32"/>
    <span class="h3 neon-white-text" id="weather-desc">
     awan pecah
    </span>
   </div>
   <span class="p weather-span neon-white-text" id="weather-temp">
    30.66°C
   </span>
   <span class="p weather-span neon-white-text" id="weather-location">
    Tambora
   </span>
   <span class="p weather-span neon-white-text" id="weather-region" style="line-height: 1.2;">
    Daerah Khusus
    <br/>
    Ibukota Jakarta
   </span>
  </div>
  <!-- Middle content -->
  <div class="flex flex-col items-center space-y-6 weather-button-spacing w-full max-w-md">
   <button class="bg-[#a87f75] bg-opacity-70 rounded-xl px-8 py-3 text-white text-lg tracking-wide shadow-[0_0_10px_#a87f75] hover:shadow-[0_0_15px_#a87f75] transition btn-pressable neon-white-text" id="lihat-cv-btn" type="button">
    Lihat CV Saya
   </button>
   <div class="flex items-center space-x-3 text-3xl sm:text-4xl font-semibold tracking-wide text-center">
<a href="https://teratai.great-site.net/Media/index" target="_blank">
  <img
    src="https://teratai.great-site.net/images/Terataitube_logo.png"
    alt="Neon glowing video icon"
    class="w-10 h-10 rounded-full 
           shadow-[0_0_10px_#39FF14,0_0_20px_#39FF14] 
           hover:shadow-[0_0_10px_red,0_0_20px_red]
           active:translate-y-[2px] active:scale-[0.98]
           transition-all duration-150 ease-in-out select-none"
    width="40"
    height="40"
    draggable="false"
  />
</a>
    <div>
     <div class="neon-white-text select-text">
      Media Player Online
     </div>
     <div class="neon-white-text select-text">
      (YouTube Tanpa Iklan)
     </div>
    </div>
   </div>
   <!-- YouTube ID or Link Input -->
   <div class="relative w-full flex flex-col space-y-2">
    <div class="relative">
     <input autocomplete="off" class="w-full rounded-xl border-2 border-[#39ff00] bg-[#3f2a21] text-[#7a7a7a] text-xl placeholder-[#7a7a7a] font-semibold tracking-wide py-3 px-6 pr-12 focus:outline-none focus:ring-2 focus:ring-[#39ff00] focus:border-transparent neon-white-text" id="youtube-input" placeholder="Masukkan ID atau link YouTube" type="text"/>
     <button aria-label="Info" class="absolute right-3 top-1/2 -translate-y-1/2 bg-[#39ff00] text-[#3f2a21] rounded-full w-7 h-7 flex items-center justify-center font-bold text-lg leading-none btn-pressable neon-white-text" id="info-btn" title="Info" type="button">
      <i class="fas fa-info">
      </i>
     </button>
    </div>
    <button class="bg-[#3f2a21] border-2 border-[#39ff00] rounded-xl px-8 py-3 text-white text-lg tracking-wide drop-shadow-[0_0_10px_#39ff00] hover:drop-shadow-[0_0_15px_#39ff00] transition btn-pressable neon-white-text self-center" id="play-btn" type="button">
     Putar
    </button>
   </div>
   <!-- YouTube Search Input -->
   <div class="relative w-full flex flex-col space-y-2">
    <div class="relative">
     <input autocomplete="off" class="w-full rounded-xl border-2 border-[#39ff00] bg-[#3f2a21] text-[#7a7a7a] text-xl placeholder-[#7a7a7a] font-semibold tracking-wide py-3 px-6 pr-12 focus:outline-none focus:ring-2 focus:ring-[#39ff00] focus:border-transparent neon-white-text" id="youtube-search-input" placeholder="Cari konten YouTube" type="text"/>
     <button aria-label="Info" class="absolute right-3 top-1/2 -translate-y-1/2 bg-[#39ff00] text-[#3f2a21] rounded-full w-7 h-7 flex items-center justify-center font-bold text-lg leading-none btn-pressable neon-white-text" id="search-info-btn" title="Info" type="button">
      <i class="fas fa-info">
      </i>
     </button>
    </div>
    <button class="bg-[#3f2a21] border-2 border-[#39ff00] rounded-xl px-8 py-3 text-white text-lg tracking-wide drop-shadow-[0_0_10px_#39ff00] hover:drop-shadow-[0_0_15px_#39ff00] transition btn-pressable neon-white-text self-center" id="search-btn" type="button">
     Cari
    </button>
   </div>
   <div class="mt-6 w-full max-w-md rounded-xl overflow-hidden shadow-lg border-4 border-[#39ff00] bg-[#3f2a21] hidden" id="search-results-container" style="min-height: 360px;">
   </div>
   <div class="mt-6 w-full aspect-video max-w-md hidden rounded-xl overflow-hidden shadow-lg border-4 border-[#39ff00]" id="player-container">
   </div>
  </div>
  <!-- Footer -->
  <footer class="w-full max-w-md bg-[#a87f75] bg-opacity-70 rounded-xl border-2 border-[#39ff00] shadow-[0_0_10px_#39ff00] text-white text-center py-3 mt-20" style="font-family: cursive;">
   © 2023–2025 by
   <span class="neon-text font-bold italic link-span" id="footer-link">
    Fendi
   </span>
  </footer>
  <!-- Modal backdrop -->
  <div aria-describedby="modal-desc" aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="modal-backdrop" role="dialog">
   <!-- Modal content -->
   <div class="bg-[#a87f75] bg-opacity-90 rounded-xl p-6 max-w-sm mx-4 text-white text-center font-semibold tracking-wide" style="font-family: cursive;">
    <h2 class="text-2xl mb-4" id="modal-title">
     Instruksi Penggunaan
    </h2>
    <p class="mb-4 text-lg leading-relaxed" id="modal-desc">
     Masukkan ID video YouTube atau link lengkap video YouTube pada kolom input. Contoh ID:
     <span class="italic">
      dQw4w9WgXcQ
     </span>
     atau link:
     <span class="italic">
      https://www.youtube.com/watch?v=dQw4w9WgXcQ
     </span>
     .
     <br/>
     <br/>
     Klik tombol
     <strong>
      Putar
     </strong>
     untuk memutar video secara otomatis tanpa iklan.
    </p>
    <button aria-label="Tutup instruksi" class="mt-2 bg-[#39ff00] text-[#3f2a21] font-bold rounded-lg px-6 py-2 hover:bg-[#2ecc00] transition btn-pressable" id="modal-close-btn" type="button">
     Tutup
    </button>
   </div>
  </div>
  <!-- Modal backdrop for search info -->
  <div aria-describedby="modal-search-desc" aria-labelledby="modal-search-title" aria-modal="true" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="modal-search-info-backdrop" role="dialog">
   <div class="bg-[#a87f75] bg-opacity-90 rounded-xl p-6 max-w-sm mx-4 text-white text-center font-semibold tracking-wide" style="font-family: cursive;">
    <h2 class="text-2xl mb-4" id="modal-search-title">
     Instruksi Pencarian
    </h2>
    <p class="mb-4 text-lg leading-relaxed" id="modal-search-desc">
     Masukkan kata kunci yang ingin Anda cari di YouTube pada kolom
     <strong>
      Cari konten YouTube
     </strong>
     .
     <br/>
     Setelah itu, klik tombol
     <strong>
      Cari
     </strong>
     untuk menampilkan hasil pencarian langsung di halaman ini.
     <br/>
     <br/>
     Contoh kata kunci:
     <span class="italic">
      musik jazz
     </span>
     ,
     <span class="italic">
      tutorial Tailwind CSS
     </span>
     , atau
     <span class="italic">
      video lucu
     </span>
     .
    </p>
    <button aria-label="Tutup instruksi pencarian" class="mt-2 bg-[#39ff00] text-[#3f2a21] font-bold rounded-lg px-6 py-2 hover:bg-[#2ecc00] transition btn-pressable" id="modal-search-close-btn" type="button">
     Tutup
    </button>
   </div>
  </div>
<script>
   const weatherApiKey = "08b7dac6dcc76a45d31a44ddf60281e1";
   const locationIqKey = "pk.851874446c1a4a76aa1c131a3a9ac298";

   // Elements cuaca
   const weatherIconEl = document.getElementById("weather-icon");
   const weatherDescEl = document.getElementById("weather-desc");
   const weatherTempEl = document.getElementById("weather-temp");
   const weatherLocationEl = document.getElementById("weather-location");
   const weatherRegionEl = document.getElementById("weather-region");

   function updateWeatherUI(data) {
    if (!data) return;
    const weather = data.weather[0];
    const tempC = (data.main.temp - 273.15).toFixed(2);
    const locationName = data.name || "Unknown";
    const region = data.sys.country || "";

    const iconCode = weather.icon;
    const iconUrl = `https://openweathermap.org/img/wn/${iconCode}@2x.png`;

    weatherIconEl.src = iconUrl;
    weatherIconEl.alt = weather.description;

    weatherDescEl.textContent = weather.description;
    weatherTempEl.textContent = `${tempC}°C`;
    weatherLocationEl.textContent = locationName;
    weatherRegionEl.innerHTML = region ? `Daerah Khusus<br>${region}` : "";
   }

   async function fetchWeatherByCoords(lat, lon) {
    try {
     const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${weatherApiKey}`;
     const res = await fetch(url);
     if (!res.ok) throw new Error("Weather API error");
     const data = await res.json();
     updateWeatherUI(data);
    } catch {
     weatherDescEl.textContent = "Cuaca tidak tersedia";
     weatherTempEl.textContent = "-";
     weatherLocationEl.textContent = "-";
     weatherRegionEl.textContent = "-";
     weatherIconEl.src = "https://teratai.great-site.net/images/icon.png";
     weatherIconEl.alt = "No weather icon";
    }
   }

   async function getGeoLocation() {
    try {
     if (navigator.geolocation) {
      const pos = await new Promise((resolve, reject) => {
       navigator.geolocation.getCurrentPosition(resolve, reject, { timeout: 7000 });
      });
      const lat = pos.coords.latitude;
      const lon = pos.coords.longitude;

      const locIqUrl = `https://us1.locationiq.com/v1/reverse.php?key=${locationIqKey}&lat=${lat}&lon=${lon}&format=json`;
      const locRes = await fetch(locIqUrl);
      if (!locRes.ok) throw new Error("LocationIQ API error");
      const locData = await locRes.json();

      const kecamatan =
       locData.address.suburb ||
       locData.address.city_district ||
       locData.address.town ||
       locData.address.city ||
       "Unknown";

      weatherLocationEl.textContent = kecamatan;

      fetchWeatherByCoords(lat, lon);
     } else {
      weatherLocationEl.textContent = "Tambora";
      fetchWeatherByCoords(-6.2088, 106.8456);
     }
    } catch {
     weatherLocationEl.textContent = "Tambora";
     fetchWeatherByCoords(-6.2088, 106.8456);
    }
   }

   getGeoLocation();

   // YouTube player and search
   const playBtn = document.getElementById("play-btn");
   const searchBtn = document.getElementById("search-btn");
   const youtubeInput = document.getElementById("youtube-input");
   const youtubeSearchInput = document.getElementById("youtube-search-input");
   const playerContainer = document.getElementById("player-container");
   const searchResultsContainer = document.getElementById("search-results-container");

   function extractYouTubeID(input) {
    if (!input) return null;
    input = input.trim();
    if (/^[a-zA-Z0-9_-]{11}$/.test(input)) {
     return input;
    }
	const urlPatterns = [
	  /(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]{11})/,
	  /(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/,
	  /(?:https?:\/\/)?(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/,
	  /(?:https?:\/\/)?(?:www\.)?youtube\.com\/v\/([a-zA-Z0-9_-]{11})/,
	  /(?:https?:\/\/)?(?:www\.)?youtube\.com\/live\/([a-zA-Z0-9_-]{11})/
	];
    for (const pattern of urlPatterns) {
     const match = input.match(pattern);
     if (match && match[1]) {
      return match[1];
     }
    }
    return null;
   }

   function createYouTubeIframe(videoId) {
    const iframe = document.createElement("iframe");
    iframe.width = "100%";
    iframe.height = "100%";
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;
    iframe.title = "YouTube video player";
    iframe.allow =
     "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;
    iframe.frameBorder = "0";
    return iframe;
   }

   playBtn.addEventListener("click", () => {
    if (playBtn.disabled) return;
    playBtn.disabled = true;
    playBtn.classList.add("opacity-50", "cursor-not-allowed");
    setTimeout(() => {
     const inputVal = youtubeInput.value.trim();
     if (!inputVal) {
      alert("Masukkan ID atau link YouTube yang valid pada kolom pertama.");
      playBtn.disabled = false;
      playBtn.classList.remove("opacity-50", "cursor-not-allowed");
      return;
     }
     const videoId = extractYouTubeID(inputVal);
     if (!videoId) {
      alert("Masukkan ID atau link YouTube yang valid pada kolom pertama.");
      playBtn.disabled = false;
      playBtn.classList.remove("opacity-50", "cursor-not-allowed");
      return;
     }
     playerContainer.innerHTML = "";
     searchResultsContainer.innerHTML = "";
     searchResultsContainer.classList.add("hidden");
     const iframe = createYouTubeIframe(videoId);
     playerContainer.appendChild(iframe);
     playerContainer.classList.remove("hidden");
     playerContainer.scrollIntoView({ behavior: "smooth" });
     playBtn.disabled = false;
     playBtn.classList.remove("opacity-50", "cursor-not-allowed");
    }, 2000);
   });

searchBtn.addEventListener("click", async () => {
  const query = youtubeSearchInput.value.trim();
  if (!query) {
    alert("Masukkan kata kunci pencarian pada kolom kedua.");
    return;
  }

  const apiKey = "AIzaSyBZlkAHjxHlA5QNKQdgjB1XGXvpbUExe_A";
  const apiUrl = `https://youtube.googleapis.com/youtube/v3/search?key=${apiKey}&part=snippet&type=video&maxResults=8&q=${encodeURIComponent(query)}`;

  playerContainer.innerHTML = "";
  playerContainer.classList.add("hidden");
  searchResultsContainer.innerHTML = `<p class="text-white text-center p-4">Mencari video...</p>`;
  searchResultsContainer.classList.remove("hidden");
  searchResultsContainer.scrollIntoView({ behavior: "smooth" });

  try {
    const response = await fetch(apiUrl);
    if (!response.ok) throw new Error("API request failed");

    const data = await response.json();
    if (!data.items || data.items.length === 0) {
      searchResultsContainer.innerHTML = `<p class="text-white text-center p-4">Tidak ada hasil ditemukan untuk "<strong>${query}</strong>".</p>`;
      return;
    }

    searchResultsContainer.innerHTML = "";

    data.items.forEach((item) => {
      const videoId = item.id.videoId;
      const title = item.snippet.title;
      const thumbnail = item.snippet.thumbnails.medium.url;

      const card = document.createElement("div");
      card.className = "bg-[#3f2a21] rounded-lg shadow-md overflow-hidden cursor-pointer hover:shadow-lg transition flex flex-col";

      const thumbImg = document.createElement("img");
      thumbImg.src = thumbnail;
      thumbImg.alt = `Thumbnail video YouTube berjudul ${title}`;
      thumbImg.className = "w-full h-40 object-cover";

      const cardBody = document.createElement("div");
      cardBody.className = "p-3 flex-1 flex flex-col justify-between";

      const videoTitle = document.createElement("h3");
      videoTitle.className = "text-white text-sm font-semibold mb-2 line-clamp-2";
      videoTitle.textContent = title;

      cardBody.appendChild(videoTitle);
      card.appendChild(thumbImg);
      card.appendChild(cardBody);

      card.addEventListener("click", () => {
        playerContainer.innerHTML = "";
        const iframe = document.createElement("iframe");
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;
        iframe.width = "100%";
        iframe.height = "100%";
        iframe.frameBorder = "0";
        iframe.allow =
          "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
        iframe.allowFullscreen = true;
        playerContainer.appendChild(iframe);
        playerContainer.classList.remove("hidden");
        playerContainer.scrollIntoView({ behavior: "smooth" });
      });

      searchResultsContainer.appendChild(card);
    });
  } catch (error) {
    searchResultsContainer.innerHTML = `<p class="text-white text-center p-4">Terjadi kesalahan saat mengambil data pencarian.</p>`;
    console.error(error);
  }
});


   // Modal info button (video input)
   const infoBtn = document.getElementById("info-btn");
   const modalBackdrop = document.getElementById("modal-backdrop");
   const modalCloseBtn = document.getElementById("modal-close-btn");

   infoBtn.addEventListener("click", () => {
    modalBackdrop.classList.remove("hidden");
    modalCloseBtn.focus();
   });

   modalCloseBtn.addEventListener("click", () => {
    modalBackdrop.classList.add("hidden");
    infoBtn.focus();
   });

   modalBackdrop.addEventListener("click", (e) => {
    if (e.target === modalBackdrop) {
     modalBackdrop.classList.add("hidden");
     infoBtn.focus();
    }
   });

   document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modalBackdrop.classList.contains("hidden")) {
     modalBackdrop.classList.add("hidden");
     infoBtn.focus();
    }
   });

   // Modal search info button
   const searchInfoBtn = document.getElementById("search-info-btn");
   const modalSearchInfoBackdrop = document.getElementById("modal-search-info-backdrop");
   const modalSearchCloseBtn = document.getElementById("modal-search-close-btn");

   searchInfoBtn.addEventListener("click", () => {
    modalSearchInfoBackdrop.classList.remove("hidden");
    modalSearchCloseBtn.focus();
   });

   modalSearchCloseBtn.addEventListener("click", () => {
    modalSearchInfoBackdrop.classList.add("hidden");
    searchInfoBtn.focus();
   });

   modalSearchInfoBackdrop.addEventListener("click", (e) => {
    if (e.target === modalSearchInfoBackdrop) {
     modalSearchInfoBackdrop.classList.add("hidden");
     searchInfoBtn.focus();
    }
   });

   document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modalSearchInfoBackdrop.classList.contains("hidden")) {
     modalSearchInfoBackdrop.classList.add("hidden");
     searchInfoBtn.focus();
    }
   });

   // Add click handlers for spans to open link
   const linkUrl = "https://teratai.great-site.net";
   document.querySelectorAll(".link-span").forEach((span) => {
    span.addEventListener("click", () => {
     window.open(linkUrl, "_blank");
    });
   });
   // Also footer link
   document.getElementById("footer-link").addEventListener("click", () => {
    window.open(linkUrl, "_blank");
   });

   // "Lihat CV Saya" button redirect
   document.getElementById("lihat-cv-btn").addEventListener("click", () => {
    window.location.href = "https://teratai.great-site.net/CV";
   });

   // Block copy, cut, paste, context menu, and printscreen except input and textarea
   document.addEventListener("copy", (e) => {
    if (!e.target.closest("input") && !e.target.closest("textarea")) {
     e.preventDefault();
    }
   });
   document.addEventListener("cut", (e) => {
    if (!e.target.closest("input") && !e.target.closest("textarea")) {
     e.preventDefault();
    }
   });
   document.addEventListener("paste", (e) => {
    if (!e.target.closest("input") && !e.target.closest("textarea")) {
     e.preventDefault();
    }
   });
   document.addEventListener("contextmenu", (e) => {
    if (!e.target.closest("input") && !e.target.closest("textarea")) {
     e.preventDefault();
    }
   });
   document.addEventListener("keydown", (e) => {
    // Block Ctrl+C, Ctrl+X, Ctrl+V, Ctrl+P, Ctrl+S, Ctrl+U, Ctrl+Shift+I, Ctrl+Shift+C, Ctrl+Shift+J, F12
    if (
     (e.ctrlKey && ["c", "x", "v", "p", "s", "u"].includes(e.key.toLowerCase())) ||
     (e.ctrlKey && e.shiftKey && ["i", "c", "j"].includes(e.key.toLowerCase())) ||
     e.key === "F12"
    ) {
     if (!e.target.closest("input") && !e.target.closest("textarea")) {
      e.preventDefault();
     }
    }
   });
   // Block PrintScreen key
   document.addEventListener("keyup", (e) => {
    if (e.key === "PrintScreen") {
     navigator.clipboard.writeText("").catch(() => {});
     alert("Screenshot is disabled on this page.");
    }
   });
</script>

 </body>
</html>