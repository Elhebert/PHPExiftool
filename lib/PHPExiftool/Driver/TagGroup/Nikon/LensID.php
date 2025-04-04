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
class LensID extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensID';

    protected string $name = 'LensID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132667
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:LensID',
            'desc' => [
                'en' => 'Lens ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
