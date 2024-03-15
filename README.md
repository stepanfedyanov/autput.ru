# Autput

## Запуск проекта (для разработки)

> [!WARNING]
> Для запуска проекта необходимо установить Docker (https://www.docker.com/products/docker-desktop/).
> Также необходимо установить Composer (https://getcomposer.org/download/).

Запустите Docker Desktop

Для начала произвести установку зависимостей Composer

```bash
composer install
```

Необходимо ввести команду в консоли в текущей папке

```bash
docker compose -f docker-compose-dev.yml up
```

Докер сам скачает необходимые зависимости и запустит проект

## Ввод программ в Laravel

Для миграций в Laravel необходимо вводить команды, для ввода которых нужно входить в консоль контейнера Laravel.

Для этого нужно создать новый терминал и ввести команду:

```bash
docker compose -f docker-compose-dev.yml exec laravel.test sh 
```

Откроется терминал контейнера докера. В нем можно вводить команды, типа ```php artisan migrate```

Выйти из этого терминал можно с помощью ```exit```

Для доступа к админ-панели необходимо создать главного пользователя. Для этого необходимо прописать команду, чтобы войти в панель Laravel.
```bash
docker compose -f docker-compose-dev.yml exec laravel.test sh 
```

А потом внутри консоли контейнера написать
```bash
php artisan orchid:admin
```

Введите логин, почту, пароль. Все эти данные будут сохранены только для вас локально!

## Git Flow

### Ветка с новой фичей
Каждую задачу делаем в отдельной ветке. Новые ветки создаем от `main`, а не `develop`.
В консоли это выглядит вот так:

```bash
git checkout main
```

Получаем последние изменения с репозитория:

```bash
git pull origin main
```

Создаём Issue в Github
https://github.com/stepanfedyanov/autput.ru/issues/new/choose.
В описании ишью вставляем ссылку на таск в Флоу и 
выбираем Milestone — релиз, в который попадет фича, привязываем себя.

Создаем новую ветку на базе `main`, название вида `issue/{issue_num}-{краткое_описание}`:

```bash
git checkout -b issue/1-init
```

Пишем код.
Смотрим, что в итоге изменилось:

```bash
git status
```

Добавляем измененные файлы:

```bash
git add backend/picture/admin.py
```

Добавляем коммит с подробным и понятным описанием, что именно сделано. 
Никаких коммитов со названиями `fixed bug` и `added file` быть не должно.

Подробно можно почитать на Хабре: «[Как следует писать комментарии к коммитам](https://habr.com/ru/post/416887/ )».


```bash
git commit -m "Show odmens LogEntry #29"
```

29 — ссылка на созданный Issue.

[Синтаксис](https://docs.gitlab.com/ee/user/project/issues/managing_issues.html#closing-issues-automatically) 
(аналогичен GitHub).


Допустим, после коммита мы обнаружили опечатку.
Последний коммит легко можно перезаписать с помощью `--amend`:

```bash
git add backend/picture/admin.py
git commit --amend -m "Show admins LogEntry #29"
```

Отправляем изменения на сервер:

```bash
git push origin issue/78-admin_optimizations
```

Создаем Pull request в ветку `develop`. **Не наоборот!** Нужно быть тут трижды внимательным.
В Pull request тоже делаем ссылку на issue, аналогично `commit`

Разрешать конфликты в самом Гитлабе плохо — он вливает _target_ в _source_, и после этого ветка
часто отправляется в мусор. Если так случилось, а ветка нужна, то после мерджа нужно её заресетить
до чистого коммита и отправить через `git push --force`.

Допустим, код писался несколько дней/часов, и ветка `main` ушла вперед.

Перед тем, как отдавать ветку, нужно её актуализировать — замёрджить в неё свежую ветку `main` (и разрешить конфликты локально, если они появились).
Затем нужно локально проверить работоспособность своей ветки.

```bash
git checkout main
git pull origin main
git checkout issue/78-admin_optimizations
git merge --log --no-ff main
git push origin issue/78-admin_optimizations
```

Нужно написать название ветки в комментарий к задаче в Флоу, чтобы ветку задеплоили на _dev-сервер_ и ее можно было проверить.

При желании делаем `squash` перед `merge`, чтобы в истории был 1 коммит с задачей, а не 100 с мелкими правками. Это хорошо как для истории, так и для отката изменений.
**Примечание**: нельзя делать `squash` тех коммитов, которые уже были влиты в ветки `develop`/`main`

```bash
git log -4
git rebase -i HEAD~2
```

Ветка `develop` защищённая, поэтому, если при мёрдже в неё возникают конфликты, их приходится разрешать мейнтейнеру.
Это долго, и, к тому же, как правильно их разрешить, обычно знает только разработчик фичи. 
Чтобы обойти запрет, нужно создать промежуточную ветку на базе `develop`, вмёрджить локально фичу туда,
а затем создать мёрдж-реквест из промежуточной ветки в `develop`:

```bash
git checkout develop
git pull
git checkout -b dev/aa-token-revoke
git merge --log --no-ff aa-token-revoke
# Разрешаем конфликты, коммитим, пушим, создаём MR dev/aa-token-revoke → develop.
```

Если вдруг ветка потерялась или невозможно найти коммит, то есть мощная штука — история Git.
Там есть лог всех действий пользователя.

```bash
git reflog
```

Более подробно про Git нужно почитать в [Git Book](https://git-scm.com/book/ru/v2).

## Backend Code requirements

### Style

* Configure your IDE to use [.editorconfig](https://editorconfig.org/#download);
* Prefer English over your native language in comments and commit messages;
* Every model and a model method should have a docstring;

### Code organisation

* [KISS (Keep it simple, stupid)](https://ru.wikipedia.org/wiki/KISS_(принцип)) and [DRY (Don’t Repeat Yourself)](https://ru.wikipedia.org/wiki/Don’t_repeat_yourself);
* More comments;
* If you want to implement some business logic — make a service for that;
* **No logic is allowed within the views or templates**. Only services and models;

