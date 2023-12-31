<?php return [
  'plugin' => [
    'name' => 'Strani',
    'description' => 'Ustvarjanje strani in menijev.',
  ],
  'page' => [
    'menu_label' => 'Strani',
    'template_title' => '%s strani',
    'delete_confirmation' => 'Ali ste prepričani, da želite izbrisati izbrane strani? S tem boste izbrisali tudi njihove podstrani, če obstajajo.',
    'no_records' => 'Ni najdenih strani.',
    'delete_confirm_single' => 'Ali ste prepričani, da želite izbrisati to stran? S tem boste izbrisali tudi njene podstrani, če obstajajo.',
    'new' => 'Nova stran',
    'add_subpage' => 'Dodaj podstran',
    'invalid_url' => 'Neveljavna oblika URL formata. URL se mora začeti z znakom za desno poševnico in lahko vsebuje številke, latinične črke in naslednje znake: _-/.',
    'url_not_unique' => 'To URL povezavo uporablja že ena od drugih strani.',
    'layout' => 'Postavitev',
    'layouts_not_found' => 'Ni najdenih postavitev.',
    'saved' => 'Stran je bila uspešno shranjena.',
    'tab' => 'Strani',
    'manage_pages' => 'Upravljanje statičnih strani',
    'manage_menus' => 'Upravljanje statičnih menijev',
    'access_snippets' => 'Dostop do gradnikov',
    'manage_content' => 'Upravljanje statičnih vsebin',
  ],
  'menu' => [
    'menu_label' => 'Meniji',
    'delete_confirmation' => 'Ali ste prepričani, da želite izbrisati izbrane menije?',
    'no_records' => 'Ni najdenih menijev.',
    'new' => 'Nov meni',
    'new_name' => 'Nov meni',
    'new_code' => 'nov-meni',
    'delete_confirm_single' => 'Ali ste prepričani, da želite izbrisati ta meni?',
    'saved' => 'Meni je uspešno shranjen.',
    'name' => 'Ime',
    'code' => 'Koda',
    'items' => 'Elementi menija',
    'add_subitem' => 'Dodaj pod-element',
    'code_required' => 'Koda je obvezna.',
    'invalid_code' => 'Neveljaven format kode. Koda lahko vsebuje številke, latinične črke in naslednje znake: _-',
  ],
  'menuitem' => [
    'title' => 'Naslov',
    'editor_title' => 'Element menija',
    'type' => 'Vrsta',
    'allow_nested_items' => 'Dovoli gnezdene elemente',
    'allow_nested_items_comment' => 'Gnezdene elemente lahko dinamično ustvarijo statične strani in nekatere druge vrste elementov.',
    'url' => 'URL',
    'reference' => 'Referenca',
    'search_placeholder' => 'Išči po vseh referencah...',
    'title_required' => 'Naslov je obvezen',
    'unknown_type' => 'Neznana vrsta elementa menija.',
    'unnamed' => 'Neimenovan element menija.',
    'add_item' => 'Dodaj element',
    'new_item' => 'Nov element menija',
    'replace' => 'Zamenjaj ta element z njegovimi pod-elementi',
    'replace_comment' => 'Z uporabo tega kvadratka lahko potisnete ustvarjene elemente menija na njegov nivo, ob tem pa bo le-ta element postal skrit.',
    'cms_page' => 'CMS stran',
    'cms_page_comment' => 'Izberite stran, ki naj se odpre ob kliku na element menija.',
    'reference_required' => 'Referenca elementa menija je obvezna.',
    'url_required' => 'Povezava URL je obvezna.',
    'cms_page_required' => 'Prosimo, izberite CMS stran.',
    'display_tab' => 'Prikaz',
    'hidden' => 'Skrito',
    'hidden_comment' => 'Element menija na spletni strani naj ne bo prikazan.',
    'attributes_tab' => 'Atributi',
    'code' => 'Koda',
    'code_comment' => 'Vnesite kodo za element menija, če želite do njega omogočiti API dostop.',
    'css_class' => 'CSS razred',
    'css_class_comment' => 'Vnesite ime CSS razreda, če želite elementu omogočiti videz po meri.',
    'external_link' => 'Zunanja povezava',
    'external_link_comment' => 'Povezava za ta element menija naj se odpre v novem oknu.',
    'static_page' => 'Statična stran',
    'all_static_pages' => 'Vse statične strani',
  ],
  'content' => [
    'menu_label' => 'Vsebine',
    'saved' => 'Vsebina je bila uspešno shranjena.',
    'cant_save_to_dir' => 'Shranjevanje datotek z vsebino v mapo statičnih strani ni dovoljeno.',
  ],
  'sidebar' => [
    'add' => 'Dodaj',
  ],
  'object' => [
    'invalid_type' => 'Neznana vrsta objekta',
    'unauthorized_type' => 'Nimate pooblastil za upravljanje :type objektov.',
    'not_found' => 'Zahtevanega objekta ni mogoče najti.',
  ],
  'editor' => [
    'title' => 'Naslov',
    'new_title' => 'Nov naslov strani',
    'content' => 'Vsebina',
    'url' => 'URL',
    'filename' => 'Ime datoteke',
    'layout' => 'Postavitev',
    'description' => 'Opis',
    'preview' => 'Predogled',
    'enter_fullscreen' => 'Celozaslonski način',
    'exit_fullscreen' => 'Zapri celozaslonski način',
    'hidden' => 'Skrita stran',
    'hidden_comment' => 'Skrite strani so dostopne le prijavljenim administratorjem.',
    'navigation_hidden' => 'Skrita v navigaciji',
    'navigation_hidden_comment' => 'Skrite strani v navigaciji se v menijih in povezavah ne prikažejo.',
  ],
  'snippet' => [
    'menu_label' => 'Gradniki',
  ],
  'component' => [
    'static_page_name' => 'Statična stran',
    'static_page_description' => 'Ustvari statično stran na CMS postavitvi.',
    'static_page_use_content_name' => 'Uporabi polje z vsebino strani',
    'static_page_use_content_description' => 'Če ni označeno, se razdelek z vsebino pri urejanju statične strani ne bo prikazal. Vsebina strani bo določena izključno prek vsebinskih okvirov in spremenljivk.',
    'static_page_default_name' => 'Privzeta postavitev',
    'static_page_default_description' => 'To postavitev definira kot privzeto za nove strani.',
    'static_page_child_layout_name' => 'Postavitev podstrani',
    'static_page_child_layout_description' => 'To postavitev definira kot privzeto za vse nove podstrani.',
    'static_menu_name' => 'Statični meni',
    'static_menu_description' => 'Ustvari meni na CMS postavitvi.',
    'static_menu_code_name' => 'Meni',
    'static_menu_code_description' => 'Določite kodo menija, ki ga mora sestaviti komponenta.',
    'static_breadcrumbs_name' => 'Statične povezave',
    'static_breadcrumbs_description' => 'Ustvari povezave za statično stran.',
    'child_pages_name' => 'Podstrani',
    'child_pages_description' => 'Prikaže seznam podstrani za trenutno stran.',
  ],
];
