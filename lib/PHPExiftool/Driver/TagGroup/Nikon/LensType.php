<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensType extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensType';

    protected string $name = 'LensType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133108
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137254
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
