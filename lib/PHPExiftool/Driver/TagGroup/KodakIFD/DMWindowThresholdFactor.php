<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DMWindowThresholdFactor extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:DMWindowThresholdFactor';

    protected string $name = 'DMWindowThresholdFactor';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'DM Window Threshold Factor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106964
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:DMWindowThresholdFactor',
            'desc' => [
                'en' => 'DM Window Threshold Factor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
