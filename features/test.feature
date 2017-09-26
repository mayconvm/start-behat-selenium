# features/myfeature.feature
Feature: Search
	In order to test something
	As a website user
	I need to be able to start a test

  @javascriptSSSS
  Scenario: Searching for a page with autocompletion
    Given I am on "/wiki/Main_Page"
    Given que eu espero
    When I fill in "search" with "Behavior Driv"
    And I wait for the suggestion box to appear
    Then I should see "Behavior-driven development"