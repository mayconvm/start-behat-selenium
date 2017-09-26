<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /** @var GuestContext */
    private $guestContext;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct($data = null)
    {
    }

    /** @BeforeScenario */
    public function before(BeforeScenarioScope $scope)
    {
        // Get the environment
        // $environment = $scope->getEnvironment();
        // print_r(get_class_methods($environment));

        // $context = $environment->getServiceContainer();
        // print_r(get_class_methods($context));
        // print_r($environment);
        // $environment is an instance of
        //        Behat\Behat\Context\Environment\InitializedContextEnvironment


        // Get all the contexts you need in this context
        // $this->guestContest is the instance of GuestContext
        // $this->guestContest = $environment->getContext('GuestContext');
    }

    /**
     * @Given que eu espero
     */
    public function euEspero()
    {
        $this->getSession()->wait(12000);
    }
}
