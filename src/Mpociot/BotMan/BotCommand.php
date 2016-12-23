<?php

namespace Mpociot\BotMan;

/**
 * Class BotCommand
 * @package Mpociot\BotMan
 */
abstract class BotCommand
{
    /**
     * Logic that reacts to the command being called.
     * @param BotMan $botMan
     * @return mixed
     */
    abstract function hears(BotMan $botMan);

    /**
     * Sets the name of the command for BotMan to process it.
     * @return mixed
     */
    abstract function getName();
}