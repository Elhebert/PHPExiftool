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
class Ln1 extends AbstractTagGroup
{
    protected string $id = 'JPEG-HDR:Ln1';

    protected string $name = 'Ln1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::HDR
             * line : 152480
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::HDR.JPEG-HDR:Ln1',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
