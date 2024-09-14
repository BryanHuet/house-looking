<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use App\Model\Table\HouseTable;
class HomeController extends AppController
{

    public function index()
    {
        return $this->render('home');
    }

    public function card()
    {
        return $this->render('card');
    }


    public function loadCards()
    {
        // Example data; in a real scenario, fetch data from a database
        $cards = [
            ['id' => 1, 'title' => 'Card 1', 'description' => 'Description for Card 1'],
            ['id' => 2, 'title' => 'Card 2', 'description' => 'Description for Card 2'],
            ['id' => 3, 'title' => 'Card 3', 'description' => 'Description for Card 3'], 
            ['id' => 4, 'title' => 'Card 4', 'description' => 'Description for Card 4'],
            ['id' => 5, 'title' => 'Card 5', 'description' => 'Description for Card 5'],
            ['id' => 6, 'title' => 'Card 6', 'description' => 'Description for Card 6'],
            ['id' => 7, 'title' => 'Card 7', 'description' => 'Description for Card 7'],
            ['id' => 8, 'title' => 'Card 8', 'description' => 'Description for Card 8'],
            ['id' => 9, 'title' => 'Card 9', 'description' => 'Description for Card 9'],
            // Add more cards as needed...
        ];

        // Return data as JSON
        $this->set(compact('cards'));
        $this->viewBuilder()->setOption('serialize', true);
        $this->set([
            'cards' => $cards,      // The array you want to return
            '_serialize' => ['cards']  // Tells CakePHP to serialize 'users' to JSON
        ]);
        return $this->response->withType("application/json")->withStringBody(json_encode(['data'=>$cards]));
    }


    public function getAll()
    {
        $housesTable = $this->fetchTable('House');
        $houses = $housesTable->find('all')->toArray();  // Find all users
        $h = [];
        foreach($houses as $house){
            $h[] = $house->toArray();
        }
        // Convert the query result to an array
        $this->set([
            'houses' => $houses,      // The array you want to return
            '_serialize' => ['houses']  // Tells CakePHP to serialize 'users' to JSON
        ]);
        // Ensure the response type is JSON
        return $this->response->withType("application/json")->withStringBody(json_encode(['data'=>$h]));
    }


}