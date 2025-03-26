<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GIDCVer extends AbstractTagGroup
{
    protected string $id = 'FLIR:GIDCVer';

    protected string $name = 'GIDCVer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GIDC Ver',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::Parts
             * line : 86424
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Parts.FLIR:GIDCVer',
            'desc' => [
                'en' => 'GIDC Ver',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
