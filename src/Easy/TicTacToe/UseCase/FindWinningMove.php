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
            $countSigns = array_count_values($row);
            if (array_key_exists('O', $countSigns) && $countSigns['O'] === 2) {
                $row[array_search('.', $row)] = 'O';
            }
        }

        $board = [array_column($board, 0), array_column($board, 1), array_column($board, 2)];

        foreach ($board as &$row) {
            $countSigns = array_count_values($row);
            if (array_key_exists('O', $countSigns) && $countSigns['O'] === 2) {
                $row[array_search('.', $row)] = 'O';
            }
        }

        $board = [array_column($board, 0), array_column($board, 1), array_column($board, 2)];

        return $board;
    }
}
