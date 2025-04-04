<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieMultiSelector extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:MovieMultiSelector';

    protected string $name = 'MovieMultiSelector';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Movie Multi Selector',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 169940
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MovieMultiSelector',
            'desc' => [
                'en' => 'Movie Multi Selector',
            ],
        ],
        1 => [
            /**
             * table_name : NikonSettings::Main
             * line : 169963
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:MovieMultiSelector',
            'desc' => [
                'en' => 'Movie Multi Selector',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
