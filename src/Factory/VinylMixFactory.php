<?php

namespace App\Factory;

use App\Entity\VinylMix;
use App\Repository\VinylMixRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<VinylMix>
 *
 * @method static VinylMix|Proxy createOne(array $attributes = [])
 * @method static VinylMix[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static VinylMix|Proxy find(object|array|mixed $criteria)
 * @method static VinylMix|Proxy findOrCreate(array $attributes)
 * @method static VinylMix|Proxy first(string $sortedField = 'id')
 * @method static VinylMix|Proxy last(string $sortedField = 'id')
 * @method static VinylMix|Proxy random(array $attributes = [])
 * @method static VinylMix|Proxy randomOrCreate(array $attributes = [])
 * @method static VinylMix[]|Proxy[] all()
 * @method static VinylMix[]|Proxy[] findBy(array $attributes)
 * @method static VinylMix[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static VinylMix[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static VinylMixRepository|RepositoryProxy repository()
 * @method VinylMix|Proxy create(array|callable $attributes = [])
 */
final class VinylMixFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'title' => self::faker()->text(),
            'trackCount' => self::faker()->randomNumber(),
            'genre' => self::faker()->text(),
            'votes' => self::faker()->randomNumber(),
            'slug' => self::faker()->text(),
            'createdAt' => null, // TODO add DATETIME ORM type manually
            'updatedAt' => null, // TODO add DATETIME ORM type manually
        ];
    }

}
