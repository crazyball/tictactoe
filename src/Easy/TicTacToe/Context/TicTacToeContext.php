<?php

namespace CraZyBaLL\CodinGame\Easy\TicTacToe\Context;

use Assert\Assertion;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use CraZyBaLL\CodinGame\Easy\TicTacToe\UseCase\FindWinningMove;

/**
 * Class TicTacToeContext
 * @package CraZyBaLL\CodinGame\Easy\TicTacToe\Context
 */
class TicTacToeContext implements Context
{
    /**
     * @var array
     */
    private $board = [];

    /**
     * @var FindWinningMove
     */
    private $findWinningMove;

    public function __construct()
    {
        $this->findWinningMove = new FindWinningMove();
    }

    /**
     * @Given /^find the winning move of O player$/
     */
    public function findTheWinningMoveOfOPlayer()
    {
    }

    /**
     * @When /^the following tic tac toe board is :$/
     * @param TableNode $table
     */
    public function theFollowingTicTacToeBoardIs(TableNode $table)
    {
        $this->board = array_values($table->getTable());
    }

    /**
     * @Then /^the final tic tac toe board is :$/
     */
    public function theFinalTicTacToeBoardIs(TableNode $table)
    {
        Assertion::eq(
            $this->findWinningMove->execute($this->board),
            array_values($table->getTable())
        );
    }
}
