<?php

defined('CONTROL') or die('Acesso negado');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'player_1_name' => $_POST['text_player_1'],
        'player_1_symbol' => 'X',
        'player_1_score' => 0,
        'player_2_name' => $_POST['text_player_2'],
        'player_2_symbol' => 'O',
        'player_2_score' => 0,

        'game_board' => [
            ['','',''],
            ['','',''],
            ['','','']
        ],

        'game_turn' => 1,
        'game_number' => 1,
        'active_player' => 1
    ];

    $_SESSION = $data;

    header('Location: index.php?route=game');
}

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6 card bg-secondary text-white p-5">
            <form action="index.php?route=start" method="post">
                <h3 class="text-center">Jogo da Velha</h3>
                <hr>
                <div class="mb-3">
                    <labe class="form-label" for="text_player_1">Jogador 1: </label>
                        <input type="text" name="text_player_1" id="text_player_1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <labe class="form-label" for="text_player_2">Jogador 2: </label>
                        <input type="text" name="text_player_2" id="text_player_2" class="form-control" required>
                </div>

                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-dark w-25">Iniciar</button>
                </div>
            </form>
        </div>
    </div>
</div>