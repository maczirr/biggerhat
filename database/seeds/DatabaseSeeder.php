<?php

use Illuminate\Database\Seeder;
use App\Faction;
use App\Station;
use App\Characteristic;
use App\Keyword;
use App\Urestricted;
use App\Uspecial;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('FactionTableSeeder');
        $this->call('StationTableSeeder');
        $this->call('CharacteristicTableSeeder');
        $this->call('KeywordTableSeeder');
        $this->call('UrestrictedTableSeeder');
        $this->call('UspecialTableSeeder');

    }
}


class FactionTableSeeder extends Seeder {
    public function run() {
        Faction::create(['name' => 'Arcanist','image' => '/images/faction_arcanist.png','color' => '0045BB']);
        Faction::create(['name' => 'Bayou','image' => '/images/faction_bayou.png','color' => '685A2D']);
        Faction::create(['name' => 'Guild','image' => '/images/faction_guild.png','color' => 'CD0100']);
        Faction::create(['name' => 'Neverborn','image' => '/images/faction_neverborn.png','color' => '9800BC']);
        Faction::create(['name' => 'Outcasts','image' => '/images/faction_outcasts.png','color' => 'B3A600']);
        Faction::create(['name' => 'Resurrectionist','image' => '/images/faction_resurrectionist.png','color' => '2D9534']);
        Faction::create(['name' => 'Ten Thunders','image' => '/images/faction_tenthunders.png','color' => 'B45900']);
        Faction::create(['name' => 'Dead Man\'s Hand']);
    }
}

class StationTableSeeder extends Seeder {
    public function run() {
        Station::create(['name' => 'Master']);
        Station::create(['name' => 'Henchman']);
        Station::create(['name' => 'Enforcer']);
        Station::create(['name' => 'Minion']);
    }
}

class CharacteristicTableSeeder extends Seeder {
    public function run() {
        Characteristic::create(['name' => 'Living']);
        Characteristic::create(['name' => 'Construct']);
        Characteristic::create(['name' => 'Undead']);
        Characteristic::create(['name' => 'Totem']);
        Characteristic::create(['name' => 'Versatile']);

    }
}

class KeywordTableSeeder extends Seeder {
    public function run() {
        Keyword::create(['name' => 'Elemental']);
        Keyword::create(['name' => 'Augmented']);
        Keyword::create(['name' => 'Visionary']);
        Keyword::create(['name' => 'M&SU']);
        Keyword::create(['name' => 'Chimera']);
        Keyword::create(['name' => 'Beast']);
        Keyword::create(['name' => 'Frontier']);
        Keyword::create(['name' => 'Crossroads']);
        Keyword::create(['name' => 'December']);
        Keyword::create(['name' => 'Performer']);
        Keyword::create(['name' => 'Effigy']);
        Keyword::create(['name' => 'Puppet']);
        Keyword::create(['name' => 'Emissary of Fate']);
        Keyword::create(['name' => 'Firebug']);
        Keyword::create(['name' => 'Foundry']);
        Keyword::create(['name' => 'Horseman']);
        Keyword::create(['name' => 'Tricksy']);
        Keyword::create(['name' => 'Bandit']);
        Keyword::create(['name' => 'Infamous']);
        Keyword::create(['name' => 'Big Hat']);
        Keyword::create(['name' => 'Kin']);
        Keyword::create(['name' => 'Swampfiend']);
        Keyword::create(['name' => 'Wizz-Bang']);
        Keyword::create(['name' => 'Pig']);
        Keyword::create(['name' => 'Sooey']);
        Keyword::create(['name' => 'Tri-Chi']);
        Keyword::create(['name' => 'Oni']);
        Keyword::create(['name' => 'Asylum']);
        Keyword::create(['name' => 'Guard']);
        Keyword::create(['name' => 'Elite']);
        Keyword::create(['name' => 'Family']);
        Keyword::create(['name' => 'Nephilim']);
        Keyword::create(['name' => 'Journalist']);
        Keyword::create(['name' => 'Marshal']);
        Keyword::create(['name' => 'Witch Hunter']);
        Keyword::create(['name' => 'Witchling']);
        Keyword::create(['name' => 'Fae']);
        Keyword::create(['name' => 'Savage']);
        Keyword::create(['name' => 'Half-Blood']);
        Keyword::create(['name' => 'Woe']);
        Keyword::create(['name' => 'Nightmare']);
        Keyword::create(['name' => 'Qi and Gong']);
        Keyword::create(['name' => 'Amalgam']);
        Keyword::create(['name' => 'Last Blossom']);
        Keyword::create(['name' => 'Plague']);
        Keyword::create(['name' => 'Tormented']);
        Keyword::create(['name' => 'Freikorps']);
        Keyword::create(['name' => 'Mercenary']);
        Keyword::create(['name' => 'Obliteration']);
        Keyword::create(['name' => 'Vermin']);
        Keyword::create(['name' => 'Transmortis']);
        Keyword::create(['name' => 'Experimental']);
        Keyword::create(['name' => 'Academic']);
        Keyword::create(['name' => 'Forgotten']);
        Keyword::create(['name' => 'Redchapel']);
        Keyword::create(['name' => 'Retainer']);
        Keyword::create(['name' => 'Ancestor']);
        Keyword::create(['name' => 'Mortuary']);
        Keyword::create(['name' => 'Revenant']);
        Keyword::create(['name' => 'Urami']);
        Keyword::create(['name' => 'Honeypot']);
        Keyword::create(['name' => 'Monk']);
        Keyword::create(['name' => 'Wastrel']);
    }
}

class UrestrictedTableSeeder extends Seeder {
    public function run() {
        Urestricted::create(['name' => 'Effigy']);
        Urestricted::create(['name' => 'Construct']);
        Urestricted::create(['name' => 'Living']);
        Urestricted::create(['name' => 'Undead']);
        Urestricted::create(['name' => 'Yan Lo']);
    }
}

class UspecialTableSeeder extends Seeder {
    public function run() {
        Uspecial::create(['name' => 'Summon']);
        Uspecial::create(['name' => 'Bound Elemental']);
        Uspecial::create(['name' => 'Mutation']);
        Uspecial::create(['name' => 'Shapeshift']);
        Uspecial::create(['name' => 'Arsenal']);
        Uspecial::create(['name' => 'Explosive']);
        Uspecial::create(['name' => 'Pour One Out']);
        Uspecial::create(['name' => 'Family Gathering']);
        Uspecial::create(['name' => 'Act']);
        Uspecial::create(['name' => 'Invention']);
        Uspecial::create(['name' => 'Necromancy']);
        Uspecial::create(['name' => 'Reinforcements']);
        Uspecial::create(['name' => 'Skybound Ally']);
        Uspecial::create(['name' => 'Enthralled']);
        Uspecial::create(['name' => 'Shadow Lair']);
        Uspecial::create(['name' => 'Waking Dream']);
        Uspecial::create(['name' => 'Ritual']);
        Uspecial::create(['name' => 'Voodoo']);
        Uspecial::create(['name' => 'Cursed']);
        Uspecial::create(['name' => 'Injustice']);
        Uspecial::create(['name' => 'Wicked']);
        Uspecial::create(['name' => 'Equipment']);
        Uspecial::create(['name' => 'Voidling']);
        Uspecial::create(['name' => 'Trinket']);
        Uspecial::create(['name' => 'Forbidden']);
        Uspecial::create(['name' => 'Lecture']);
        Uspecial::create(['name' => 'Reliquary']);
        Uspecial::create(['name' => 'Soul Hunter']);
        Uspecial::create(['name' => 'Madness']);
        Uspecial::create(['name' => 'Enrollment']);
        Uspecial::create(['name' => 'Vengeance']);
        Uspecial::create(['name' => 'Darkened']);
        Uspecial::create(['name' => 'Artifact']);
        Uspecial::create(['name' => 'Asami\'s Soul']);
        Uspecial::create(['name' => 'Ascendant']);
        Uspecial::create(['name' => 'Style']);
        Uspecial::create(['name' => 'Fermented River']);
        Uspecial::create(['name' => 'High River']);
        Uspecial::create(['name' => 'Low River']);
        Uspecial::create(['name' => 'Wandering River']);
        Uspecial::create(['name' => 'Karma']);
        Uspecial::create(['name' => 'Manifested']);
    }
}