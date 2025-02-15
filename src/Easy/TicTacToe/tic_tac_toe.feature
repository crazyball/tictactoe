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
  Scenario: No opponent - 2nd Line
    Given find the winning move of O player
    When the following tic tac toe board is :
      | . | . | . |
      | O | O | . |
      | . | . | . |
    Then the final tic tac toe board is :
      | . | . | . |
      | O | O | O |
      | . | . | . |
  Scenario: No opponent - 2nd Line first
    Given find the winning move of O player
    When the following tic tac toe board is :
      | . | O | O |
      | . | . | . |
      | . | . | . |
    Then the final tic tac toe board is :
      | O | O | O |
      | . | . | . |
      | . | . | . |
  Scenario: No opponent - 2nd Line middle
    Given find the winning move of O player
    When the following tic tac toe board is :
      | O | . | O |
      | . | . | . |
      | . | . | . |
    Then the final tic tac toe board is :
      | O | O | O |
      | . | . | . |
      | . | . | . |
  Scenario: No opponent - Column
    Given find the winning move of O player
    When the following tic tac toe board is :
      | O | . | . |
      | . | . | . |
      | O | . | . |
    Then the final tic tac toe board is :
      | O | . | . |
      | O | . | . |
      | O | . | . |
