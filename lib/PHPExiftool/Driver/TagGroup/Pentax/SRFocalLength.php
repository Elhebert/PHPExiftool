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
class SRFocalLength extends AbstractTagGroup
{
    protected string $id = 'Pentax:SRFocalLength';

    protected string $name = 'SRFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'SR Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::SRInfo
             * line : 209916
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::SRInfo.Pentax:SRFocalLength',
            'desc' => [
                'en' => 'SR Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
