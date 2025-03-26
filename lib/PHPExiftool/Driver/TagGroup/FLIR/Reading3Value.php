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
class Reading3Value extends AbstractTagGroup
{
    protected string $id = 'FLIR:Reading3Value';

    protected string $name = 'Reading3Value';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reading 3 Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::MeterLink
             * line : 86231
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::MeterLink.FLIR:Reading3Value',
            'desc' => [
                'en' => 'Reading 3 Value',
            ],
        ],
    ];

    protected int $count = 0;
}
