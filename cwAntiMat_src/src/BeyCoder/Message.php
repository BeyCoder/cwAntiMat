<?php


namespace BeyCoder;

use pocketmine\Player;

class Message
{

    /**
     * @var string
     */
    private $messageText;


    /**
     * @var Player
     */
    private $messageFrom;


    public function __construct(string $messageText, Player $messageFrom)
    {
        $this->messageText = $messageText;
        $this->messageFrom = $messageFrom;
    }


    /**
     * @return Player
     */
    public function getMessageFrom()
    {
        return $this->messageFrom;
    }


    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }


    /**
     * Mat filter
     */
    public function filterMessageText()
    {
        Filter::filterText($this->messageText);
    }


    /**
     * @param string $messageText
     */
    public function setMessageText(string $messageText)
    {
        $this->messageText = $messageText;
    }

}