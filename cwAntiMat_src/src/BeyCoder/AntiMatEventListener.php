<?php


namespace BeyCoder;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class AntiMatEventListener implements Listener
{
    private $manager;

    public function __construct(AntiMatManager $manager)
    {
        $this->manager = $manager;
    }

    public function onChat(PlayerCommandPreprocessEvent $event){
        $filterMessage = new Message($event->getMessage(), $event->getPlayer());

        $filterMessage->filterMessageText();
        $event->setMessage($filterMessage->getMessageText());
    }

}