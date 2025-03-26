<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LC7 extends AbstractTagGroup
{
    protected string $id = 'Pentax:LC7';

    protected string $name = 'LC7';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'LC7',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LensData
             * line : 200325
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Pentax::LensData.Pentax:LC7',
            'desc' => [
                'en' => 'LC7',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
