<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ScanDate extends AbstractTagGroup
{
    protected string $id = 'FlashPix:ScanDate';

    protected string $name = 'ScanDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scan Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::ImageInfo
             * line : 87704
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::ImageInfo.FlashPix:ScanDate',
            'desc' => [
                'en' => 'Scan Date',
            ],
        ],
    ];

    protected int $count = 0;
}
