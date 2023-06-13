<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Orhanerday\OpenAi\OpenAI;
//use OpenAI\Laravel\Facades\OpenAI;


class TarotDiviationController extends Controller
{
    public function show(){
        $tarotCards = [
            '/Старші аркани/Дурень.jpg',
            '/Старші аркани/Чаклун.jpg',
            '/Старші аркани/Верховна жриця.jpg',
            '/Старші аркани/Імператриця.jpg',
            '/Старші аркани/Імператор.jpg',
            '/Старші аркани/Ієрофант.jpg',
            '/Старші аркани/Закохані.jpg',
            '/Старші аркани/Колісниця.jpg',
            '/Старші аркани/Сила.jpg',
            '/Старші аркани/Відлюдник.jpg',
            '/Старші аркани/Колесо Фортуни.jpg',
            '/Старші аркани/Справедливість.jpg',
            '/Старші аркани/Повішаний.jpg',
            '/Старші аркани/Смерть.jpg',
            '/Старші аркани/Помірність.jpg',
            '/Старші аркани/Диявол.jpg',
            '/Старші аркани/Вежа.jpg',
            '/Старші аркани/Зірка.jpg',
            '/Старші аркани/Місяць.jpg',
            '/Старші аркани/Сонце.jpg',
            '/Старші аркани/Суд.jpg',
            '/Старші аркани/Світ.jpg',
            "/Молодші аркани/Жезли/Туз жезлів.jpg",
            "/Молодші аркани/Жезли/II жезлів.jpg" ,
            "/Молодші аркани/Жезли/III Жезлів.jpg",
            "/Молодші аркани/Жезли/IV Жезлів.jpg" ,
            "/Молодші аркани/Жезли/V Жезлів.jpg" ,
            "/Молодші аркани/Жезли/VI жезлів.jpg" ,
            "/Молодші аркани/Жезли/VII жезлів.jpg" ,
            "/Молодші аркани/Жезли/VIII Жезлів.jpg",
            "/Молодші аркани/Жезли/IX Жезлів.jpg" ,
            "/Молодші аркани/Жезли/X Жезлів.jpg" ,
            "/Молодші аркани/Жезли/Король Жезлів.jpg",
            "/Молодші аркани/Жезли/Королева Жезлів.jpg",
            "/Молодші аркани/Жезли/Лицар Жезлів.jpg" ,
            "/Молодші аркани/Жезли/Паж Жезлів.jpg",
            "/Молодші аркани/Кубки/Туз Кубків.jpg" ,
            "/Молодші аркани/Кубки/II Кубків.jpg" ,
            "/Молодші аркани/Кубки/III Кубків.jpg" ,
            "/Молодші аркани/Кубки/IV Кубків.jpg",
            "/Молодші аркани/Кубки/V Кубків.jpg" ,
            "/Молодші аркани/Кубки/VI Кубків.jpg",
            "/Молодші аркани/Кубки/VII Кубків.jpg" ,
            "/Молодші аркани/Кубки/VIII Кубків.jpg",
            "/Молодші аркани/Кубки/IX Кубків.jpg" ,
            "/Молодші аркани/Кубки/X Кубків.jpg" ,
            "/Молодші аркани/Кубки/Король Кубків.jpg" ,
            "/Молодші аркани/Кубки/Королева Кубків.jpg",
            "/Молодші аркани/Кубки/Лицар Кубків.jpg" ,
            "/Молодші аркани/Кубки/Паж Кубків.jpg",
            "/Молодші аркани/Мечі/II мечів.jpg",
            "/Молодші аркани/Мечі/III мечів.jpg" ,
            "/Молодші аркани/Мечі/IV мечів.jpg" ,
            "/Молодші аркани/Мечі/V мечів.jpg" ,
            "/Молодші аркани/Мечі/VI мечів.jpg" ,
            "/Молодші аркани/Мечі/VII мечів.jpg" ,
            "/Молодші аркани/Мечі/VIII мечів.jpg" ,
            "/Молодші аркани/Мечі/IX мечів.jpg" ,
            "/Молодші аркани/Мечі/X мечів.jpg",
            "/Молодші аркани/Мечі/Король мечів.jpg" ,
            "/Молодші аркани/Мечі/Королева мечів.jpg",
            "/Молодші аркани/Мечі/Лицар мечів.jpg" ,
            "/Молодші аркани/Мечі/Паж мечів.jpg" ,
            "/Молодші аркани/Пентаклі/Туз пентаклів.jpg",
            "/Молодші аркани/Пентаклі/II пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/III пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/IV пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/V пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/VI пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/VII пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/VIII пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/IX пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/X пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/Король пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/Королева пентаклів.jpg",
            "/Молодші аркани/Пентаклі/Лицар пентаклів.jpg" ,
            "/Молодші аркани/Пентаклі/Паж пентаклів.jpg" 
        ];
        
        // Перемішування карт
        shuffle($tarotCards);
        
        // Вибір перших 7 карт
        $cards = array_slice($tarotCards, 0, 7);
        $selectedCards = array();

        foreach($cards as $card) {
            $selectedCards[] = ['image' => $card, 'reversed' => rand(0,1)];
        }

        return view('diviation-page', compact("selectedCards"));
    }

    public function generateAnswer(Request $request)
    {
        // Отримання вхідних даних з AJAX-запиту
        $input = $request->all();
        $selectedCards = $input["selectedCards"];
        $question = $input["questionText"];
        $request = "Використовуй виключно українську мову. Дай повне тракнуваня розскдаду.";
        if ($question) {
            $request = $request . "\nДай відповіть на питання: \"'$question'" . "\". Карти:";
        } else {
            $request = $request . "\nКарти: ";
        }
        
        foreach ($selectedCards as $card) {
            $parts = explode("/", $card[0]);
            $cardName = basename(end($parts), ".jpg");
            $request = $request . "\n" . $cardName;
            if ($card[1]) {
                $request = $request . " перевернута";
            }
        }
        // Закоментовано, щоб для тестування не тратити гроші
        $open_ai_key = env("OPENAI_API_KEY");
        $open_ai = new OpenAi($open_ai_key);

        set_time_limit (300);

        $chat = $open_ai->chat([
           //'model' => 'gpt-3.5-turbo',
           'model' => 'gpt-3.5-turbo-0613',
           'messages' => [
               [
                   "role" => "user",
                   "content" => $request
               ],
           ],
           'temperature' => 1,
           'max_tokens' => 2000,
           'frequency_penalty' => 0,
           'presence_penalty' => 0,
        ]);
        
        
        $d = json_decode($chat);
        $generatedText = ($d->choices[0]->message->content);
        
        /*
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            //'model' => 'gpt-3.5-turbo',
            'prompt' => $request,
            'max_tokens' => 1000,  // Збільшити кількість максимальних токенів
            'temperature' => 0.4, // Зменшити температуру для збереження більшої унікальності
        ]);
        $generatedText = $result['choices'][0]['text'];
        */
        //$generatedText = $request;
        return response()->json(['text' => $generatedText]);
    }
}
