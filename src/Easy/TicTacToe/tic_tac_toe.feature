Feature: Tic Tac Toe
  Scenario: No opponent - Line
    Given find the winning move of O player
    When the following tic tac toe board is :
      | O | O | . |
      | . | . | . |
      | . | . | . |
    Then the final tic tac toe board is :
      | O | O | O |
      | . | . | . |
      | . | . | . |
