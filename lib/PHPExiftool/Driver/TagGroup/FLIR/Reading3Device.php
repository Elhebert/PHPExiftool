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
class Reading3Device extends AbstractTagGroup
{
    protected string $id = 'FLIR:Reading3Device';

    protected string $name = 'Reading3Device';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::MeterLink
             * line : 123403
             * type : string
             * writable : false
             * count : 16
             * flags :
             */
            'id' => 'FLIR::MeterLink.FLIR:Reading3Device',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 16;
}
