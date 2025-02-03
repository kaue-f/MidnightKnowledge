<?php

namespace App\DTO;

use Illuminate\Support\Facades\Cache;

class PlatformsDTO
{
    public function platforms()
    {
        return [
            ['id' => 'Android', 'name' => 'Android', 'plataform' => 'Mobile'],
            ['id' => 'Battle.net', 'name' => 'Battle.net', 'plataform' => 'PC'],
            ['id' => 'Epic Games Store', 'name' => 'Epic Games Store', 'plataform' => 'PC'],
            ['id' => 'iOS', 'name' => 'iOS', 'plataform' => 'Mobile'],
            ['id' => 'Mac OS', 'name' => 'Mac OS', 'plataform' => 'PC'],
            ['id' => 'Microsoft Windows', 'name' => 'Microsoft Windows', 'plataform' => 'PC'],
            ['id' => 'Nintendo 3DS', 'name' => 'Nintendo 3DS', 'plataform' => 'Consoles'],
            ['id' => 'Nintendo DS', 'name' => 'Nintendo DS', 'plataform' => 'Consoles'],
            ['id' => 'Nintendo Switch', 'name' => 'Nintendo Switch', 'plataform' => 'Consoles'],
            ['id' => 'Origin', 'name' => 'Origin', 'plataform' => 'PC'],
            ['id' => 'Outros', 'name' => 'Outros', 'plataform' => 'Outros'],
            ['id' => 'PlayStation 1', 'name' => 'PlayStation 1', 'plataform' => 'Consoles'],
            ['id' => 'PlayStation 2', 'name' => 'PlayStation 2', 'plataform' => 'Consoles'],
            ['id' => 'PlayStation 3', 'name' => 'PlayStation 3', 'plataform' => 'Consoles'],
            ['id' => 'PlayStation 4', 'name' => 'PlayStation 4', 'plataform' => 'Consoles'],
            ['id' => 'PlayStation 5', 'name' => 'PlayStation 5', 'plataform' => 'Consoles'],
            ['id' => 'PlayStation Vita', 'name' => 'PlayStation Vita', 'plataform' => 'Consoles'],
            ['id' => 'PSP', 'name' => 'PSP', 'plataform' => 'Consoles'],
            ['id' => 'Steam', 'name' => 'Steam', 'plataform' => 'PC'],
            ['id' => 'Ubisoft Connect', 'name' => 'Ubisoft Connect', 'plataform' => 'PC'],
            ['id' => 'Xbox 360', 'name' => 'Xbox 360', 'plataform' => 'Consoles'],
            ['id' => 'Xbox One', 'name' => 'Xbox One', 'plataform' => 'Consoles'],
            ['id' => 'Xbox Series X/S', 'name' => 'Xbox Series X/S', 'plataform' => 'Consoles'],
        ];
    }

    public function get()
    {
        return Cache::remember('platforms', 3600, function () {
            return $this->platforms();
        });
    }
}
