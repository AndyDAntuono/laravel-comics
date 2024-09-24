/*CONSEGNA*/

esercizio di oggi: nome repo: laravel-comics
Create un nuovo progetto Laravel.
Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials. Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config. Non concentratevi sulla grafica, intanto strutturate il tutto come descritto sopra, utilizzate al limite le classi predefinite di bootstrap. Non perdete tempo nei dettagli!
BONUS 1: replicate fedelmente la pagina utilizzando Sass.
BONUS 2: Create più pagine istituzionali che condividono lo stesso layout
In allegato trovate lo zip con il materiale per svolgere l'esercizio. Se per qualche motivo il file presente nell'array ha le immagini che non dovessero funzionare comunicatelo ai tutor.
Vi lascio anche la steplist che abbiamo cominciato a creare ieri.
Scrivete sempre il file README.md in con la traccia dell'esercizio.
Numero minimo di push: 10

/*SOLUZIONE*/

- Creo la repo secondo le istruzioni di Fabrizio Mastrobattista, che riporto qui di seguito:

    INSTALLAZIONE E CONFIGURAZIONE DI LARAVEL
        1 - composer create-project laravel/laravel:^9.2 NOME REPO/PROGETTO (metto :^9.2 per indicare la versione di laravel da installare)
        2 - Entro nella cartella con il terminale e digito code . (apro il progetto in vscode in generale)
        3 - Creo la repo da qui
        4 - Lancio il comando php artisan serve per creare un server virtuale nel quale girerà la mia applicazione
        5 - Lanciare il comando composer require pacificdev/laravel_9_preset per installare il pacchetto
        6 - Lanciare il comando php artisan preset:ui bootstrap
        7 - Lanciare il comando npm i
        8 - Rinominare il file vite.config.js in vite.config.mjs OPPURE aggiungere/modificare in "type": "module" nel file package.json
        9 - eseguire il comando npm run dev

- creo la cartella img contentente le immagini passatemi sempre da Fabrizio tramite slack.
- creo il file app.blade.php.
- inserisco il file comics.php (anche questo otteuto tramite slack) dentro la cartella config.
- cancello il file welcome.blade.php e lo sostiuico con il file home.blade.php
- creo la sottocartella partials (da inserire all'interno della sottocartella views). Al suo interno creo il file header.blade.php, dove copierò ed incollerò la porzione di header dal file app.blade.php.
- rinomino il file comics.php in db.php e lo modifico in modo fi avere un gruppo di array associativi.
- creo il file products (lo chiamo così perché altrimenti mi confonodo gli array associativi) all'interno della cartella views.
- modifico header.blade.php per migliorare la barra di navigazione.
- creo il file footer.blade.php.
- modifico product.blade.php in modo tale che si possonano visualizzare delle card contententi le informazioni i fumetti della dc comics.

PS: se i passaggi del readme risultano strani è perché inj un primo momento avevo dimenticato di compilare la mia parte personale di questo file e l'ho scritta basandomi sui nomi che ho dato ai miei push.
PPS: non sapendo se il testo originale di questo readme fosse importante o meno, ho preferito lasciarlo e scrivere la mia parte personale al di sopra di esso.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
