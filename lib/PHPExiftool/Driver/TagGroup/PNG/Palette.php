<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Palette extends AbstractTagGroup
{
    protected string $id = 'PNG:Palette';

    protected string $name = 'Palette';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Palette',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::Main
             * line : 190364
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PNG::Main.PNG:Palette',
            'desc' => [
                'en' => 'Palette',
            ],
        ],
    ];

    protected int $count = 0;
}
