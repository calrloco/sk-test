# TECH TEST

## Obiettivo
Verificare che un anagramma di una stringa sia contenuto in un'altra stringa.

## Task
Creare una classe che abbia un metodo anagram che accetti due stringhe.
public function anagramma(string $needle, string $haystack): bool {}

Il medoto deve controllare che la stringa $needle sia un qualsiasi
anagramma dell'$haystack.
Il medoto deve restituire true se si tratta di un anagramma,
false viceversa.

Assumi che:
 - Il codice sia sviluppato preferibilmente in PHP.
 - $needle sia una stringa di lunghezza massima di 1024 caratteri.
 - $haystack sia una stringa di lunghezza massima di 1024 caratteri.
 - Non ci siano funzioni native che effettuino l'anagramma di una stringa.
 - Il controllo sia case-insensitive.

### Esempio
Date due stringhe A = "abc" e B = "itookablackcab" lo script stamperà a video
"vero", poiché anagrammando A si può trovare una occorrenza di "cab" nella
stringa B.
