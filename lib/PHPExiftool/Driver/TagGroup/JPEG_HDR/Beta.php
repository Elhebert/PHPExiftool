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
class Beta extends AbstractTagGroup
{
    protected string $id = 'JPEG-HDR:Beta';

    protected string $name = 'Beta';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Beta',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::HDR
             * line : 104932
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::HDR.JPEG-HDR:Beta',
            'desc' => [
                'en' => 'Beta',
            ],
        ],
    ];

    protected int $count = 0;
}
