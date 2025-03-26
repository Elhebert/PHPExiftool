<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG_HDR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPEG_HDRVersion extends AbstractTagGroup
{
    protected string $id = 'JPEG-HDR:JPEG-HDRVersion';

    protected string $name = 'JPEG-HDRVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::HDR
             * line : 152486
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::HDR.JPEG-HDR:JPEG-HDRVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
