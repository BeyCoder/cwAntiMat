<?php

namespace BeyCoder;

use pocketmine\plugin\PluginBase;

class AntiMatManager extends PluginBase{

    public function onEnable()
    {
        $this->getLogger()->info("Я работаю!");
        $this->getServer()->getPluginManager()->registerEvents(new AntiMatEventListener($this), $this);
    }

}