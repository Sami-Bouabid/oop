<?php
namespace App\Zinc\Trait;


    trait ChangeTimeZone
    {
        public function changeTimeZone($zone) : void
        {
            date_default_timezone_set($zone);
        }
    }