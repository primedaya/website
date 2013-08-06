<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'English',
        'download'                        => 'Pobierz',
        'documentation'                   => 'Dokumentacja',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Wsparcie',
        'donate'                          => 'Donacja',
        'store'                           => 'Sklep',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> to framework zaimplementowany jako rozszerzenie C oferujący <a href=':1:'>wysoką wydajność</a> i małe zużycie zasobów",
        'the_fastest'                     => 'Najszybszy',
        'php_framework'                   => 'Framework PHP',
        'try_online'                      => 'Wypróbuj online',
        'see_screencasts'                 => 'Zobacz screencasts',
        'everything_you_need_upper'       => 'WSZYSTKO CZEGO POTRZEBUJESZ',
        'full_mvc_applications'           => "Pełna aplikacja <a href=':1:'>MVC</a>",
        'single_module'                   => 'Jedno-modułowa',
        'multi_module'                    => 'Wielo-modułowa',
        'micro_applications'              => 'Micro aplikacja',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transakcja',
        'behaviors'                       => 'Procedury',
        'relations'                       => 'Relacje',
        'phql'                            => 'PHQL',
        'events'                          => 'Zdarzenia',
        'validations'                     => 'Walidacja',
        'hydration'                       => 'Hydration',
        'logging'                         => 'Logi',
        'profiling'                       => 'Profilowanie',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM dla Mongo',
        'template_engine_volt'            => 'System szablonów (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Zarządzanie zdarzeniami',
        'encryption'                      => 'Szyfrowanie',
        'http_request'                    => 'Żądania HTTP',
        'http_response'                   => 'Odpowiedzi',
        'http_cookies'                    => 'Ciasteczka',
        'escaping'                        => 'Escaping',
        'filtering'                       => 'Filtrowanie danych',
        'forms_builder'                   => 'Tworzenie formularzy',
        'forms_validation'                => 'Walidacja',
        'flash_messages'                  => 'Wiadomości flash',
        'cache'                           => 'Cache',
        'pagination'                      => 'Paginacja',
        'annotations'                     => 'Adnotacje',
        'security'                        => 'Bezpieczeństwo',
        'translations'                    => 'Tłumaczenia',
        'assets_management'               => 'Zarządzanie css/jss',
        'universal_auto_loader'           => 'Uniwersalny Auto-Loader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON FORUM',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'NAPISZ DO NAS',
        'services_upper'                  => 'SERWISY',
        'consulting_upper'                => 'KONSULTACJA',
        'requirements_analysis'           => 'Analiza wymagań',
        'implementation'                  => 'Implementacja',
        'ongoing_support'                 => 'Bieżące wsparcie',
        'read_more'                       => 'Czytaj więcej',
        'hosting_upper'                   => 'HOSTING',
        'phalcon_can_be_installed'        => 'Phalcon może być zainstalowany na',
        'main_upper'                      => 'GŁÓWNA',
        'consulting'                      => 'Konsultacje',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'WSPARCIE',
        'forum_community'                 => 'Forum/Społeczność',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Śledzenie zmian',
        'get_involved_upper'              => 'ZAANGAŻUJ SIĘ',
        'team'                            => 'Zespół',
        'about'                           => 'O projekcie',
        'roadmap'                         => 'Roadmap',
        'donate_to_phalcon'               => 'Donacja dla Placona:',
        'or'                              => 'albo',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',

        'download_phalcon'                => 'Pobierz Phalcona',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'Developer Tools',
        'download_ide_stubs'              => 'Integracja z IDE',
        'download_note'                   => 'Phalcon jest rozszerzeniem C, a więc potrzebujesz ściągnąć go w postacie binarnej dla swojej platformy, lub skompilować go ze źródła.',
        'download_compilation'            => 'Kompilowanie',
        'download_compilation_1'          => 'W systemie operacyjnym Linux możesz łatwo skompilować i zainstalować rozszerzenie z kodu źródłowego',
        'download_requirements'           => 'Wymagania',
        'download_requirements_1'         => 'Wymagane jest aby pewne paczki były już zainstalowane:',
        'download_requirements_2'         => 'Zasoby rozwoju PHP 5.x',
        'download_requirements_3'         => 'GCC kompiler',
        'download_compilation_11'         => '1. Aby stworzyć rozszerzenie ze źródła C przejdź do następnego kroku:',
        'download_compilation_12'         => '2. Dodaj rozszerzenie do swojego php.ini:',
        'download_compilation_13'         => '3. Zrestartuj serwer',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "To repozytorium jest oferowane </a> <a href=':2:'>tutaj</a> przez <a href=':1:'>FortRabbit</a>",
        'download_debian_2'               => 'Nazwa paczki to php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "<a href=':1:'>Tutaj</a> dostępny jest PKGBUILD dla ArchLinux",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Paczka dostępna jest <a href=':1:'>tutaj</a> (podziękowania dla <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Port dostępny dla FreeBSD. Potrzebujesz jedynie prostej komendy wykonanej z linii poleceń aby to zainstalować:',
        'download_dependencies'           => 'Zależności',
        'download_dependencies_1'         => 'Chociaż Phalcon nie jest związany z innymi rozszerzeniami to jednak korzysta z funkcjonalności niektórych z nich. Wykorzystane rozszerzenia to:',
        'download_dependencies_2'         => 'Nie jest wymagane aby wszystkie rozszerzenia były obecne w systemie, w którym zainstalowany jest Phalcon. Możesz zainstalować tylko te, które potrzebujesz. Dla przykładu, jeśli używasz baz MySQL, potrzebujesz jedynie PDO albo PDO/MySQL i możesz zignorować Oracle, SQlite, Postgresql i Mongo.',
        'download_need_help'              => 'Potrzebujesz pomocy?',
        'download_need_help_1'            => "Zajrzyj na naszą <a href=':1:'>stronę wsparcia</a> aby zobaczyć jak możesz je otrzymać. Zrobimy wszystko co w naszej mocy aby Ci pomóc.",

        'download_windows_note'           => 'Zalecamy korzystanie z najnowszej wersji PHP odpowiadającej naszym bibliotekom DLL, tak aby skorzystać z pełnego zestawu funkcji Phalcona.',
        'download_windows_stable'         => 'Wersja stablina',
        'download_windows_installation'   => 'Instalacja',
        'download_windows_installation_1' => "Aby użyć Phalcona w systemie operacyjnym Windows potrzebujesz pobrać bibliotekę DLL. Edytuj swoje php.ini, dodaj ją na końcu i zrestartuj serwer aby załadować rozszerzenia. <a href=':1:'>Więcej</a>.",
        'download_windows_guides'         => 'Powiązane',
        'download_windows_guides_xampp'   => 'Instalacje na XAMPP',
        'download_windows_guides_wamp'    => 'Instalacja na WAMP',
        'download_windows_alpha'          => 'Wersje Alpha/Beta',
        'download_source_code'            => "Kod źródłowy na <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Kod źródłowy (wybierz odpowiednią gałąź): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'W tym momencie nie ma dostępnej żadnej wersji alpha/beta.',
        'download_windows_older'          => 'Starsze wersje',

        'download_devtools_1'             => 'Te narzędzia są kolekcją użytecznych skryptów generujących kod. Podstawowe elementy Twojej aplikacji mogą być wygenerowane za pomocą prostych komend, pozwalając w ten sposób łatwo rozwinąć aplikacje korzystające z Phalcona.',
        'download_devtools_docs'          => "Dokumentacja: <a href=':1:'>Phalcon Developer Tools</a>",
        'download_devtools_composer'      => 'Instalacja za pomocą Composera',
        'download_devtools_composer_1'    => 'Zainstaluj composera w domyślnej lokalizacji lub w Twoim projekcie',
        'download_devtools_composer_2'    => 'Utwórz plik composer.json w następujący sposób:',
        'download_devtools_composer_3'    => 'Uruchom instalator composera:',
        'download_devtools_composer_4'    => 'Utwórz link symboliczny do pliku phalcon.php:',
        'download_devtools_download'      => 'Możesz pobrać lub utworzyć klon platformy zawierającej pakiet narzędzi programistycznych z serwisu <a href=":1:">Github</a>.',

        'consulting_header'               => "Oferujemy konsultacje dla wdrożeń Phalcona <br />i/lub realizacji PHP",
        'requirements_analysis_1'         => 'Jednym z największych problemów, z którym muszą mierzyć się developerzy jest fakt, że wiele projektów nie ma odpowiednio zdefiniowanych wymagań. Dlatego też, często to co klient chce,  jest zupełnie inne od tego,  co deweloper rozumie, a następnie wykonuje i dostarcza.',
        'requirements_analysis_2'         => 'Oferujemy analizę wymagań projektów, omówienie ich z klientami i przeniesienie ich wizji do specyfikacji dla developerów.',
        'implementation_1'                => 'Jeśli chcesz wynająć Nas do  rozwoju Twojej aplikacji, bylibyśmy bardziej niż szczęśliwi mogąc to zrobić. Korzystając z najnowszych technologii, możemy zaoferować solidne rozwiązanie dla Twojego zadania lub projektu, wraz z przeprowadzeniem testów i stworzeniem dokumentacji.',
        'ongoing_support_1'               => 'Dla klientów, którzy są zainteresowani ciągłym wsparciem serwisowej oferujemy wsparcia dla ich projektów na bieżąco. Klienci mogą zakupić godziny wsparcia (minimum 2 godziny) za 50 USD za godzinę.',
        'ongoing_support_2'               => 'Wykupione godziny wsparcia nie wygasają i mogą być wykorzystane kiedy tylko będzie potrzeba. Dla klientów w modelu ciągłego wsparcia, oferujemy elastyczne plany, które najlepiej będą odpowiadać ich potrzebom.',
        'sponsors'                        => 'Sponsorzy',
        'sponsors_1'                      => 'Dla tych, którzy chcą sponsorować naszą pracę i dalszy rozwój Phalcon, oferujemy różne możliwości sponsorowania, które pasują do każdego budżetu.',
        'sponsors_2'                      => 'Dodatkowo klienci mogą chcieć realizacji niektórych funkcji, które ze względu na ich popularność i złożoności, zwykle zajmuje dużo więcej czasu, aby je zrealizować. Możemy oczywiście przyjąć takie zlecenia w ramach naszych normalnych stawek.',
        'contact'                         => 'Kontakt',
        'contact_1'                       => "Zapraszam do <a href=':1:'>kontaktu z Nami</a>, aby omówić Twoje wymagania i zaoferować rozwiązanie, które będzie najlepiej dopasowane do Twoich potrzeb i budżetu. Żaden projekt nie jest zbyt duży lub zbyt mały.",

        'phalcon_team'                    => 'Zespół Phalcona',
        'team_andres_1'                   => 'Andresowi nie są obce projekty open source. W ciągu ostatnich dziewięciu lat, projektował i wydawał frameworki dla PHP, a zaangażowanie w rozwój technologii internetowych stało się jego główną pasją.',
        'team_andres_2'                   => "Główną zasadą Andresa, zwycięzcy TR35, jest zawsze wybieranie i wdrażanie lub używanie odpowiedniego narzędzia do pracy, skupianie się głównie na wydajności. Dlatego w 2011 roku pojawił się nowy pomysł; stworzenia nowego rodzaju frameworka dla programistów PHP, takiego, który skupiał by się na użyteczności, funkcjonalności i przede wszystkim wydajności.",
        'team_andres_3'                   => 'Dzięki nowemu, innowacyjnemu podejściu narodził się Phalcon. Framework PHP napisany w języku C, który oferują bogate możliwości dla programistów, przy jednoczesnej maksymalizacji wydajności i utrzymaniu niskiego wykorzystania zasobów.',
        'team_andres_4'                   => 'Andres jest jednym z podstawowych deweloperów Phalcon i stanowi inspirację.',
        'team_nikos_1'                    => 'Nikos jest w branży IT od ponad 20 lat. Został wprowadzony do świata PHP w roku 2000 i używa go tak w osobistych projektach, jak i projektach dla swoich pracodawców.',
        'team_nikos_2'                    => 'Uwielbia odkrywać nowe technologie i sposoby ich integracji z istniejącymi aplikacjami, a tym samym czerpać korzyści, które oferują.',
        'team_nikos_3'                    => 'He is an avid supporter of Test Driven Development (TDD) and always tries to get full coverage in his code.',
        'team_nikos_4'                    => "Ciągłe zainteresowanie Nikos nowymi i innowacyjnymi technologiami zrywającymi z dotychczasowymi normami doprowadziły go do Phalcona. Dołączył do podstawowego zespołu projektu i jego zadania dotyczą głównie koordynacji NFRs i poprawek, pomocy w testach, dokumentacji i inkubatora. Nikos jest również odpowiedzialny za utrzymanie biblioteki DLL systemu Windows dla projektu i oferuje pomoc w miarę możliwości.",
        'team_nikolay_1'                  => 'Nikolay rozwija aplikacje internetowe od ponad 10 lat. Był zaangażowany w wymagające wysokiej wydajność jak i skomplikowane strony internetowe i projekty.',
        'team_nikolay_2'                  => 'Nikolay pracuje z projektami Open Source od dłuższego czasu, wykorzystując je, gdy tylko może sobie na to pozwolić. Poświęca swój prywatny czas na dzielenie się informacjami w społeczności, poprzez forkowanie projektów, oferowanie zmian w ich architekturze, jeśli mogą wpłynąć na wydajność. Odegrał znaczącą rolę w poprawie projektów typu Open Source CMS co miało wpływ na pozytywne opinie od społeczności.',
        'team_nikolay_3'                  => 'Jego ciągłe zaangażowanie w projekty open source pomogło mu rozwijać swoją wiedzę techniczną przy zachowaniu umiejętności oddania dla idei społeczności.',
        'team_nikolay_4'                  => 'Nikolay jest zagorzałym zwolennikiem maksymalizacji wydajności w aplikacjach internetowych. Po wprowadzeniu do Phalcona, postanowił kontynuować przygodę z nim i wykorzystywać ten projekt, oraz stać jego Ewangelistą. Kieruje stroną rosyjskiej społeczności i oferuje zasoby dla rosyjskojęzycznych twórców.',
        'team_nikolay_5'                  => "Jego wkład to: Kopia głównej stron w języku rosyjskim (<a href=':1:'>http://www.phalconphp.ru</a>), kopia repozytorium dokumentacji w języku rosyjskim (<a href=':2:'>http://docs.phalconphp.ru</a>), ciągłe zmiany i poprawki do dokumentacji w języku angielskim, grupa w portalu społecznościowym VKontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Przyłącz się',
        'about_description_1'             => "Niesamowite projekty wymagają niesamowitych dłoni. Może nie znamy się jeszcze, ale myślę, że będziesz się świetnie nadawał się do budowy lepszego internetu. Razem, jesteśmy gotowi, aby zmienić świat! Tutaj w zespole Phalcona, budujemy framework nowej generacji dla PHP, chcemy dać Ci niesamowite osiągi, pomóc tworzyć łatwo i przyjemnie.",
        'about_description_2'             => 'Mamy nadzieję, że spodoba Ci się Phalcon tak bardzo jak Nam. Nasze drzwi są zawsze otwarte aby współpracować przy wielu rzeczach, których wymaga ten projekt takich jak:',
        'documentation_upper'             => 'DOKUMENTACJA',
        'about_documentation_1'           => 'Repozytorium tej strony jest dostępna na github. Zapraszam do poprawy redakcji, poprawy literówek, dodawania przykładów, dodawania artykułów, itp. Ponadto, jeśli możesz przetłumaczyć niektóre treści na inny język, to bylibyśmy bardzo wdzięczni!',
        'screencasts'                     => 'Screencasts',
        'about_screencasts_1'             => "Wszyscy kochamy screencasty, więc jeśli masz trochę czasu i chcesz wesprzeć społeczność kilkom ciekawymi filmami dydaktycznymi na temat którejkolwiek z funkcjonalności frameworka, to było by to bardzo mile widziane. Sprawdź naszą <a href=':1:'>kanał Vimeo</a> jako przewodnik.",
        'tests'                           => 'Testy',
        'about_tests_1'                   => "Żadne oprogramowanie nie jest wolne od błędów. Jeśli znajdziesz jakieś, proszę nie wahaj się nam o tym powiedzieć. Mamy zestaw testów składający się z ponad <a href=':1:'>8000</ a> testów. Jednak testy jednostkowe nie są wystarczające. Pomóż nam ulepszyć nasz zestaw testowy, dodając więcej testów lub poprawić te obecne. Każda dodana próba sprawia, że framework staje się bardziej stabilny i pomaga w uniknięciu ponownego wprowadzenia błędów lub uszkodzenia czegoś, co obecnie działa prawidłowo. Ogólna stabilność frameworka bardzo zależy od naszych testów.",
        'sample_applications'             => 'Przykładowe aplikacje',
        'about_sample_apps_1'             => 'Wielkie przykłady mogą pomóc innym, aby lepiej zrozumieć, jak wielkie rzeczy mogą być tworzone z Phalconem, udsotępnij repozytoria do przykładowych aplikacji, pomagając innym w ich pracy i jednocześnie pozwól innym, aby dawali Ci informacje zwrotne również na temat Twojej pracy!',
        'evangelism'                      => 'Ewangelizacja',
        'about_evangelism_1'              => "Ciągle jest wiele osób, które nadal nie wiedzą, że Phalcon istnieje lub naprawdę działa. Jesteśmy pewni, że wielu deweloperów skorzysta na wysłuchaniu co Phalcon może im dać i jak może im pomóc. Jeśli znasz PHP wydarzenia / spotkania i chcesz dać wykład na temat projektu, masz nasze pełne poparcie. Kto nie chce wiedzieć o narzędziu, które zrewolucjonizowało rozwój PHP?",
        'share_your_experiences'          => 'Podziel się swoim doświadczeniami',
        'about_share_experiences_1'       => "Nie wstydź się, nie wahaj się podzielić ze społecznością sposobami wykorzystania Phalcona które były dla Ciebie przydatne. Jeśli Phalcon przyniósł sukces dla Ciebie, daj nam podzielić się ze społecznością. Również omawiaj, jakie składniki potrzebują dodatkowej pracy, co można zrobić łatwiej, jakie korzyści dostałeś za pomocą Phalcona. Mimo że nie wszystko może być realizowane natychmiast, Twój wkład w nowe funkcjonalności może znacznie pomóc Nam kształtować przyszłość projektu. Twoja opinia pomoże Nam wszystkim.",
        'about_blog_1'                    => "Jeśli lubisz pisać, pamiętaj, że <a href=':1:'>nasz blog</a> jest otwarty dla tutoriali stworzonych przez Ciebie. Jeśli masz własny blog i napisałeś coś o Phalconie możemy opublikować to również na naszych stronach w sieciach społecznościowych, tak aby osiągnąć maksymalną widoczność. Jeśli Twój wpis na blogu jest w języku innym niż angielski, chcemy podzielić się nim i potencjalnie przetłumaczyć go, jeśli to możliwe. Jeśli wiesz o blogach związanych z PHP, które są zainteresowane przedstawienie projektu swoim użytkownikom daj nam znać.",
        'donations_sponsoring'            => 'Donacje/Sponsoring',
        'about_sponsoring_1'              => "Stanowimy mały, ale skuteczny trzon zespołu programistów. Na realizacji projektu staramy się spędzać tak dużo czasu, jak to tylko jest możliwe. Cała nasza pasja do tego projektu sprawia, że ​​chcemy być lepsi każdego dnia. Phalcon to otwarte oprogramowanie i wysiłek wolontariuszy jest ciągle potrzebny dla jego ciągłego rozwoju. Możesz pomóc nam w utrzymaniu aktywnego rozwoju poprzez dotacje na projekt lub sponsoring rozwoju. Więcej czasu i środków przeznaczonych na projekt oznacza więcej aktywności, więcej poprawek, lepsze wsparcie, bardziej zadziwiające funkcje, itp.",
        'social_networks'                 => 'Portale społecznościowe',
        'about_social_networks_1'         => "Phalcon rozwija się każdego dnia, w naszym pragnieniem jest bo działo się to ciągle coraz lepiej. Sieci społecznościowe są częścią naszego życia teraz, a my wszyscy poprzez nie jesteśmy w interakcji z innymi. Dzielenie się swoimi doświadczeniami z Phalconem w kręgach społecznościowych może znacznie zwiększyć widoczność projektu. Coraz więcej osób zaangażuje się w naszą społeczność, dzięki czemu Phalcon będzie bardziej wydajny, nawet bardziej funkcjonalny i popularny. \"Lubię to\", \"+1\", udostępnianie wpisów które publikujemy w sieciach społecznościowych, udział w dyskusjach dotyczących tych wpisów. Ludzie, którzy odkryją Phalcon dzięki interakcji z Tobą, podziękują Ci!",
        'about_social_networks_2'         => 'Jesteśmy obecni w najbardziej popularnych sieciach społecznościowych. Śledząc nas, pomagasz zwiększyć widoczność projektu:',
        'follow_on_twitter'               => 'Śledź Nas na Twitterze',
        'facebook_page'                   => 'Strona na Facebook\'u',
        'google_plus_page'                => 'Strona na Google+',
        'official_blog'                   => 'Oficjalny blog',
        'star_on_github'                  => 'Dodaj projekt do ulubionych na Githubie',
        'thank_you'                       => 'Dziękujemy!',
        'about_thank_you_1'               => 'Chcielibyśmy podziękować wszystkim naszym współpracowników i członkom społeczności za motywowanie nas do tego aby framework Phalcon był najlepszy w swoim rodzaju. Wasze słowa i zaangażowanie napędzają nas by działać jeszcze lepiej. Mamy nadzieję wychodzić naprzeciw oczekiwaniom i nie zmarnować zaufania, które pokładacie w Phalconie.',
        'flying_with_phalcon'             => 'Dzięki za korzystanie z Phalcona! &lt;3',

        'hosting_description'             => 'Phalcon może być zainstalowany na każdym komputerze, który dostawca hostingu oferuje dostęp SSH root (lub sudo). Poniżej znajduje się lista renomowanych firm, które oferują takie usługi:',
        'hosting_fortrabbit_1'            => 'Fortrabbit oferuje wiele planów hostingowych (jeden jest dla programistów i jest bezpłatny - z pewnymi ograniczeniami), które zaspokoją potrzeby większości deweloperów, którzy chcą albo spróbować Phalcon, albo wdrażać swoje aplikacje używając go.',
        'hosting_fortrabbit_2'            => "Oferują oni różne <a href=':1:'>rozszerzenia</ a>, które zadowolą nawet przy najbardziej wymagających projektach.",
        'hosting_fortrabbit_3'            => 'Stabilne wersje Phalcon są domyślnie zainstalowane, można je aktywować z panelu administracyjnego.',
        'hosting_webfaction_1'            => 'WebFaction Hosting dla deweloperów. Pełny dostęp shell do szybkich serwerów ze wszystkimi ulubionymi narzędziami zainstalowanymi i utrzymywanymi przez użytkownika.',
        'hosting_webfaction_2'            => "Aby zainstalować PhalconPHP w WebFaction, wykonaj instrukcje opisane <a href=':1:'>tutaj</ a>",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud dostarcza skalowalne, chmury obliczeniowe.',
        'hosting_amazon_ec2_2'            => "Wybierz wstępnie skonfigurowany, obraz Amazon Machine Image (AMI), aby uruchomić i działać natychmiast. Lub utwórz AMI zawierający aplikacje, biblioteki, dane i związane z nimi ustawienia konfiguracji. <a href=':1:'>Zobacz więcej</ a>",
        'hosting_amazon_ec2_3'            => 'Zainstaluj Phalcona korzystając ze standardowej instrukcji instalacji.',
        'hosting_linode_1'                => "Wdrażaj i zarządzaj serwerami wirtualnymi Linuksa w chmurze Linode. Pobierz serwer uruchomiony w ciągu kilku sekund, z wybraną dystrybucją Linuksa, zasobami i lokalizacją. <a href=':1:'>Zobacz więcej</ a>",
        'hosting_linode_2'                => 'Zainstaluj Phalcona korzystając ze standardowej instrukcji instalacji.',
        'hosting_digital_ocean_1'         => "Niesamowicie szybki hosting w chmurze. Zbudowany dla deweloperów. Wdrażanie serwera SSD w 55 sekund. <a href=':1:'>Zobacz więcej</ a>",
        'hosting_digital_ocean_2'         => 'Zainstaluj Phalcona korzystając ze standardowej instrukcji instalacji.',
        'hosting_rackspace_1'             => "Serwery w chmurze są maszynami wirtualnymi z systemem Linux lub Windows&reg; Server w chmurze Rackspace. Można skalować zasoby jak CPU, pamięć i zasoby dysku, w zależności od potrzeb. Najlepszy ze wszystkich. <a href=':1:'>Zobacz więcej</a>",
        'hosting_rackspace_2'             => 'Zainstaluj Phalcona korzystając ze standardowej instrukcji instalacji.',





    );

    // return $messages;