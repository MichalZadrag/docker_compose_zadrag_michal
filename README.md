## Laboratorium 006 - Docker Compose
Zadrąg Michał 7.4/8

### Budowanie

```
git clone https://github.com/MichalZadrag/docker_compose_zadrag_michal.git
cd docker_compose_zadrag_michal
docker-compose up
```

### Konfiguracja przeglądarek

Zaleca się korzystanie z jednej z dwóch przeglądarek - Mozilla Firefox lub Google Chrome

#### Google Chrome

Należy uruchomić przeglądarkę z parametrem `--explicitly-allowed-ports=6666`.

#### Mozilla Firefox

W polu do wpisywania adresu URL należy wpisać `about:config` oraz dodać nową preferencję typu `string` o nazwie `network.security.ports.banned.override`.
Dodanej preferencji należy nadać wartość `6666`

### Uruchomienie

Gdy znajdujemy się w folderze projektowym `docker-compose up` Po inicjalizacji należy przejść do przeglądarki i wpisać  `localhost:6666`.
