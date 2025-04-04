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
class BALPVer extends AbstractTagGroup
{
    protected string $id = 'FLIR:BALPVer';

    protected string $name = 'BALPVer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'BALP Ver',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::Parts
             * line : 86406
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::Parts.FLIR:BALPVer',
            'desc' => [
                'en' => 'BALP Ver',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
