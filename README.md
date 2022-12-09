## Test Skuola.net

# ESERCIZIO ANAGRAMMA
### prima di iniziare
Creare il file env
copiare il contenuto di .env.example nel file appena creato

### setup con docker:
Start container:
```shell
./vendor/bin/sail up 
```
installare dependencies:
```shell
./vendor/bin/sail composer install && ./vendor/bin/sail npm install
````
visitare
[http://test-sk.test](http://test-sk.test)
## CONTENUTO DELL'ESERCIZIO
La classe che contiene la logica di validazione dell'anagramma si trova in app/Http/Livewire/CheckAnagram.php
```php
namespace App\Http\Livewire;

use http\Message;
use Livewire\Component;

class CheckAnagram extends Component
{
    public $matches;
    public $haystack;
    public $needle;
    public $message;
    protected int $maxChars = 1024;


    public function updatedHaystack()
    {
        $this->updateResult();
    }

    public function updatedNeedle()
    {
        $this->updateResult();
    }

    public function updateResult()
    {

        if (!$this->needle || !$this->haystack) {
            $this->matches = false;
            return;
        }

        $this->matches = $this->anagram($this->needle, $this->haystack);
    }


    /**
     * @param string needle the string to search for
     * @param string haystack the string to search in
     */
    public function anagram(string $needle, string $haystack): bool
    {
        $maxChars = $this->maxChars;

        // check on max admitted chars
        if(strlen($needle) >  $maxChars   || strlen($haystack) > $maxChars){
            return false;
        }

        // finds all occurrences of a letter in a string case-insensitive
        $needleOccurrences = $this->findCharsOccurrences($needle);
        $haystackOccurrences = $this->findCharsOccurrences($haystack);

        foreach ($needleOccurrences as $letter => $count) {
            $currentCount = $haystackOccurrences[$letter] ?? 0;
            if ($currentCount < $count) {
                return false;
            }
        }
        return true;
    }

    public function findCharsOccurrences(string $string): array
    {
        $occurrences = [];

        foreach (str_split($string) as $letter) {
            $key = strtolower($letter);
            if ($occurrences[$key] ?? null) {
                $occurrences[$key] += 1;
            } else {
                $occurrences[$key] = 1;
            }
        }

        return $occurrences;
    }


    public function render()
    {
        return view('livewire.check-anagram');
    }
}
```


## Video Ui test




https://user-images.githubusercontent.com/60385209/206739650-1e093721-b4a9-41aa-b4f5-894a2861526b.mov






