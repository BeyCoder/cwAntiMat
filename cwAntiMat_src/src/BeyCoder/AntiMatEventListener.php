<?php


namespace BeyCoder;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class AntiMatEventListener implements Listener
{
    private $manager;

    public function __construct(AntiMatManager $manager)
    {
        $this->manager = $manager;
    }

    public function onChat(PlayerChatEvent $event){
        $filterMessage = new Message($event->getMessage(), $event->getPlayer());

        $filterMessage->filterMessageText();
        $event->setMessage($filterMessage->getMessageText());
    }

}