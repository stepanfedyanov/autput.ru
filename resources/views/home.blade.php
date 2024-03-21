<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />
    @include('includes.head')
    <title>Студия Аутпут | Главная страница</title>
    <meta name="description" content="Студия Аутпут занимается дизайном и разработкой веб-сайтов. В своей работе студия воплощает уникальный профессиональный опыт специалистов, которые работают в престижных компаниях России.">
  </head>
  <body>
    <section class="first-screen">
      <div class="container">
        <header class="header">
          <div class="header__wrapper">
            <a class="header__logo" href="/"><svg
                class="header__logo logo_black"
                width="213.000000"
                height="54.815674"
                viewBox="0 0 213 54.8157"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs>
                  <clipPath id="clip173_53">
                    <rect
                      id="без-подложки-белый-полный"
                      width="213.000000"
                      height="54.815674"
                      fill-opacity="0"
                    />
                  </clipPath>
                </defs>
                <g clip-path="url(#clip173_53)">
                  <path
                    id="path"
                    d="M60.9209 18.0771C62.0714 17.5594 63.3945 17.1136 64.8903 16.7397C66.4147 16.3657 68.2125 16.1788 70.2832 16.1788C71.7789 16.1788 73.0442 16.3657 74.08 16.7397C75.1439 17.0848 75.9924 17.5882 76.6255 18.2497C77.2867 18.9113 77.7615 19.7023 78.0491 20.6227C78.3365 21.543 78.4807 22.5785 78.4807 23.7291C78.4807 25.196 78.4235 26.4471 78.3082 27.4826C78.222 28.5181 78.179 29.4385 78.179 30.2438C78.179 30.8479 78.2073 31.5238 78.2651 32.2716C78.3224 32.6743 78.3655 33.0626 78.3945 33.4366L81.1986 33.4366L81.1986 38.1824L74.0369 38.1824L73.4758 35.2486L73.2604 35.2486C72.6846 36.1402 71.8651 36.9169 70.8011 37.5784C69.7365 38.2112 68.2987 38.5275 66.4866 38.5275C64.3293 38.5275 62.6179 37.9523 61.3523 36.8018C60.0868 35.6513 59.454 34.1269 59.454 32.2285C59.454 31.0204 59.6698 29.985 60.1012 29.1221C60.5614 28.2305 61.2085 27.5114 62.0426 26.9649C62.9055 26.3896 63.9266 25.9725 65.106 25.7137C66.314 25.4261 67.6516 25.2822 69.1183 25.2822C69.6361 25.2822 70.1829 25.311 70.7581 25.3686C71.3331 25.4261 72.0375 25.4836 72.8718 25.5411C72.9297 25.2534 72.958 24.9659 72.958 24.6782L72.958 23.8585C72.958 22.7655 72.6415 21.9889 72.0092 21.5287C71.3762 21.0397 70.4415 20.7952 69.2045 20.7952C67.7378 20.7952 66.4147 20.9822 65.2354 21.3561C64.056 21.73 63.0637 22.1039 62.2584 22.4778L60.9209 18.0771ZM68.2987 33.9111C69.6792 33.9111 70.7148 33.6667 71.4052 33.1777C72.0953 32.6599 72.5984 32.1134 72.9149 31.5382L72.9149 28.9496C72.6274 28.892 72.1957 28.8345 71.6206 28.7769C71.0455 28.6906 70.4274 28.6475 69.7654 28.6475C69.2192 28.6475 68.6725 28.705 68.1263 28.8201C67.5795 28.9064 67.0906 29.0646 66.6592 29.2947C66.2277 29.496 65.8824 29.7693 65.6237 30.1144C65.3647 30.4596 65.2354 30.8766 65.2354 31.3656C65.2354 32.1709 65.4655 32.8037 65.9257 33.2639C66.4147 33.6954 67.2056 33.9111 68.2987 33.9111ZM93.3058 32.0991L94.9449 32.0991L99.1301 16.6102L104.911 16.6102L98.7847 36.0683C98.2385 37.679 97.7059 39.146 97.1887 40.4691C96.6709 41.8209 96.0668 42.9859 95.3766 43.9638C94.6863 44.9417 93.8661 45.6895 92.9172 46.2072C91.9967 46.7538 90.8607 47.027 89.5084 47.027C88.8472 47.027 88.2141 46.9407 87.6101 46.7681C87.035 46.5956 86.5031 46.3799 86.0142 46.121C85.5253 45.8909 85.0936 45.632 84.7198 45.3444C84.3461 45.0855 84.0437 44.841 83.8135 44.6109L86.7043 40.7711C87.0781 41.0874 87.5239 41.3751 88.0417 41.634C88.5596 41.9216 89.0485 42.0654 89.5084 42.0654C90.3718 42.0654 91.0479 41.7634 91.5367 41.1594C92.0547 40.5554 92.5436 39.563 93.0034 38.1824L89.9401 38.1824L80.9662 16.6102L87.0498 16.6102L93.3058 32.0991ZM108.044 33.4366L113.653 33.4366L113.653 21.5718L110.244 21.5718L110.244 25.2391L105.456 25.2391L105.456 16.6102L127.632 16.6102L127.632 25.2391L122.885 25.2391L122.885 21.5718L119.434 21.5718L119.434 33.4366L125.043 33.4366L125.043 38.1824L108.044 38.1824L108.044 33.4366ZM144.527 21.5718L135.122 21.5718L135.122 38.1824L129.513 38.1824L129.513 16.6102L150.136 16.6102L150.136 38.1824L144.527 38.1824L144.527 21.5718ZM163.149 32.0991L164.788 32.0991L168.974 16.6102L174.755 16.6102L168.628 36.0683C168.081 37.679 167.549 39.146 167.032 40.4691C166.514 41.8209 165.91 42.9859 165.22 43.9638C164.529 44.9417 163.71 45.6895 162.761 46.2072C161.84 46.7538 160.704 47.027 159.352 47.027C158.691 47.027 158.058 46.9407 157.454 46.7681C156.879 46.5956 156.347 46.3799 155.858 46.121C155.369 45.8909 154.937 45.632 154.563 45.3444C154.189 45.0855 153.887 44.841 153.657 44.6109L156.548 40.7711C156.922 41.0874 157.367 41.3751 157.885 41.634C158.403 41.9216 158.892 42.0654 159.352 42.0654C160.215 42.0654 160.891 41.7634 161.38 41.1594C161.897 40.5554 162.386 39.563 162.847 38.1824L159.784 38.1824L150.81 16.6102L156.893 16.6102L163.149 32.0991ZM177.888 33.4366L183.496 33.4366L183.496 21.5718L180.088 21.5718L180.088 25.2391L175.299 25.2391L175.299 16.6102L197.475 16.6102L197.475 25.2391L192.729 25.2391L192.729 21.5718L189.278 21.5718L189.278 33.4366L194.887 33.4366L194.887 38.1824L177.888 38.1824L177.888 33.4366Z"
                    fill-opacity="1.000000"
                    fill-rule="nonzero"
                  />
                  <path
                    id="path"
                    d="M27.6974 25.0657C28.3928 25.7611 29.5204 25.7611 30.2158 25.0657L41.5485 13.7331C42.2439 13.0377 42.2439 11.9102 41.5485 11.2147C40.853 10.5193 39.7255 10.5193 39.03 11.2147L28.9567 21.2882L18.8832 11.2147C18.1877 10.5193 17.0602 10.5193 16.3647 11.2147C15.6694 11.9102 15.6694 13.0377 16.3647 13.7331L27.6974 25.0657ZM27.1759 9.02371L27.1759 23.8066L30.7374 23.8066L30.7374 9.02371L27.1759 9.02371Z"
                    fill-opacity="1.000000"
                    fill-rule="nonzero"
                  />
                  <path
                    id="path"
                    d="M46.9368 29.1895C47.9203 29.1895 48.7177 28.3922 48.7177 27.4088C48.7177 26.4253 47.9203 25.628 46.9368 25.628L46.9368 29.1895ZM31.3073 26.1496C30.6118 26.845 30.6118 27.9726 31.3073 28.6679L42.6399 40.0005C43.3353 40.696 44.4628 40.696 45.1582 40.0005C45.8536 39.3052 45.8536 38.1776 45.1582 37.4822L35.0847 27.4088L45.1582 17.3353C45.8536 16.6399 45.8536 15.5124 45.1582 14.8169C44.4628 14.1215 43.3353 14.1215 42.6399 14.8169L31.3073 26.1496ZM46.9368 25.628L32.5664 25.628L32.5664 29.1895L46.9368 29.1895L46.9368 25.628Z"
                    fill-opacity="1.000000"
                    fill-rule="nonzero"
                  />
                </g>
              </svg></a>

              <a class="header__logo_mini" href="/"><svg
                class="header__logo_mini logo_black"
                width="30.000000"
                height="28.000000"
                viewBox="0 0 30 28"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs />
                <path
                  id="path"
                  d="M10.56 13.76C11.18 14.38 12.18 14.38 12.8 13.76L22.9 3.66C23.52 3.04 23.52 2.03 22.9 1.41C22.28 0.8 21.27 0.8 20.65 1.41L11.68 10.39L2.7 1.41C2.08 0.8 1.08 0.8 0.46 1.41C-0.16 2.03 -0.16 3.04 0.46 3.66L10.56 13.76ZM10.09 -0.54L10.09 12.63L13.27 12.63L13.27 -0.54L10.09 -0.54Z"
                  fill-opacity="1.000000"
                  fill-rule="nonzero"
                />
                <path
                  id="path"
                  d="M27.7 17.43C28.57 17.43 29.29 16.72 29.29 15.84C29.29 14.97 28.57 14.26 27.7 14.26L27.7 17.43ZM13.77 14.72C13.15 15.34 13.15 16.35 13.77 16.97L23.87 27.06C24.49 27.68 25.49 27.68 26.11 27.06C26.73 26.44 26.73 25.44 26.11 24.82L17.14 15.84L26.11 6.87C26.73 6.25 26.73 5.24 26.11 4.62C25.49 4 24.49 4 23.87 4.62L13.77 14.72ZM27.7 14.26L14.89 14.26L14.89 17.43L27.7 17.43L27.7 14.26Z"
                  fill-opacity="1.000000"
                  fill-rule="nonzero"
                />
              </svg></a>
            <nav class="header__nav">
              <ul class="header__links">
                <!--    <li>
                  <a href="#" class="header__link link__main black">блог</a>
                </li> -->
                <li>
                  <a href="#samples" class="header__link link__main black">
                    работы
                  </a>
                </li>
                <li>
                  <a href="#contacts" class="header__link link__main black">
                    контакты
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </header>

        <div class="first-screen__wrapper">
          <h1 class="first-screen__title title__first left black">
            Разработка любого сервиса
          </h1>
          <h1 class="first-screen__title title__first left gray">сайта</h1>
          <h1 class="first-screen__title title__first left gray">приложения</h1>
          <h1 class="first-screen__title title__first left gray">
            информационной системы
          </h1>
        </div>
      </div>
    </section>

    <section class="samples" id="samples">
      <div class="container">
        <div class="samples__wrapper">
          <div class="samples__title">
            <h2 class="title__secondary left black">Работы</h2>
            <h2 class="title__secondary left gray">
              такими работами невозможно не&nbsp;гордится
            </h2>
          </div>

          <div class="samples__cards">
            @foreach ($works as $work)
            <a class="card card_{{$work->workSizeType}}" style="background-image: url('{{$work->workThumbnail}}')" href="/work/{{$work->workCompany}}/{{$work->workType}}">
              <span
                class="card__link link__main left black"
                style="color: {{ $work->workTitleColor }}"
              >
                {{$work->workTitle}}
              </span>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="information">
      <div class="container">
        <div class="information__wrapper">
          <div class="information__about">
            <div class="about__title">
              <h2 class="title__secondary left black">О студии</h2>
              <h2 class="title__secondary left gray">пару слов про нас</h2>
            </div>
            <div class="about__text">
              <p class="text__main left black">
                Наши приоритеты&nbsp;&mdash; удобство пользователя
                и&nbsp;технологичность. Такой подход повышает полезность наших
                работ для бизнеса: доволен клиент, а&nbsp;значит доволен бизнес.
              </p>
              <p class="text__main left black">
                Мы&nbsp;умеем правильно доносить необходимую информацию.
                Мы&nbsp;фокусируемся на&nbsp;правильной коммуникации,
                и&nbsp;поэтому сможем доказать, почему ваш бизнес лучше бизнеса
                конкурента.
              </p>
            </div>
          </div>
          <div class="information__specialists">
            <h2 class="specialists__title title__secondary left black">
              Главные специалисты
            </h2>
            <div class="specialists__wrapper">
              <div class="specialists__item">
                <img src="/img/index/stepa.png" alt="Степан Федянов" />
                <a class="link__main black" href="/stepan">Степан Федянов</a>
                <p class="text__small gray">Основатель Программист</p>
              </div>

              <div class="specialists__item">
                <img src="/img/index/vadim.png" alt="Вадим Рассказов" />
                <a class="link__main black" href="/rasskazow">Вадим Рассказов</a>
                <p class="text__small gray">Менеджер</p>
              </div>

              <div class="specialists__item">
                <img src="/img/index/pavel.png" alt="Павел Радомский" />
                <a class="link__main black" href="/radomskii">Павел Радомский</a>
                <p class="text__small gray">Дизайнер</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contacts" id="contacts">
      <div class="container">
        <div class="contacts__title">
          <h2 class="title__secondary left black">Контакты</h2>
          <h2 class="title__secondary left gray">
            если нужен крутой результат
          </h2>
        </div>

        <div class="contacts__wrapper">
          <div class="data">
            <div class="data__wrapper">
              <div class="data__item">
                <p class="text__main left black">Электронная почта</p>
                <a class="link__main left gray" href="mailto:mail@autput.ru">
                  mail@autput.ru
                </a>
              </div>

              <div class="data__item">
                <p class="text__main left black">Номер для связи</p>
                <a class="link__main left gray" href="tel:+79950822426">
                  + 7 (995) 082-24-26
                </a>
              </div>

              <div class="data__item">
                <p class="text__main left black">Социальные сети</p>
                <a class="link__main left gray" href="https://vk.com/autput">вконтакте</a>
                <a class="link__main left gray" href="https://t.me/autput_studio">телеграм</a>
                {{-- <a class="link__main left gray" href="">икс (бывш. твиттер)</a> --}}
              </div>
            </div>
          </div>

          <div class="connection">
            <p class="connection__title text__main left black">
              Свяжитесь со&nbsp;мной!
            </p>
            <form class="connection__form" action="#" method="post">
              <div class="form__field">
                <label class="text__small black" for="name">
                  Как к&nbsp;вам обращаться?
                </label>
                <input
                  class="text__small gray form__input"
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Самый лучший заказчик"
                />
              </div>
              <div class="form__field">
                <label class="text__small black" for="email">
                  Электронная почта для связи
                </label>

                <input
                  class="text__small gray form__input"
                  type="email"
                  id="email"
                  name="email"
                  placeholder="mail@autput.ru"
                />
              </div>
              <div class="form__field">
                <label class="text__small black" for="tel">
                  Номер телефона
                </label>

                <input
                  class="text__small gray form__input"
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="+ 7 (999) 99-85-11"
                />
              </div>
              <button type="submit" class="form__submit text__small white">
                Отправить заявку
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="modal">
      <p class="modal__text text__main center black"></p>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <p class="footer__founder center">
            Основатель – <a href="/stepan">Федянов Степан</a>
          </p>
          <p class="footer__autput text__small center">© Аутпут 2024</p>
          <a
            class="footer__mail link__main center"
            href="mailto:mail@autput.ru"
          >
            mail@autput.ru
          </a>
          <a class="footer__tel link__main center" href="tel:+79950822426">
            + 7 (995) 082-24-26
          </a>
        </div>
      </div>
    </footer>

    <script src="{{asset('/script/components/form.js')}}"></script>
    <script src="{{asset('/script/components/mask.js')}}"></script>

  </body>
</html>
