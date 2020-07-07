<?php

namespace CraZyBaLL\CodinGame\Easy\TicTacToe\UseCase;

/**
 * Class FindWinningMove
 * @package CraZyBaLL\CodinGame\Easy\TicTacToe\UseCase
 */
class FindWinningMove
{
    /**
     * @param array $board
     * @return array
     */
    public function execute(array $board): array
    {
        foreach ($board as &$row) {
            if ($row[0] === 'O') {
                $row[2] = 'O';
            }
        }

        return $board;
    }
}
